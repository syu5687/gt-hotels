<?php
/**
 * /config/i18n.php
 * DeepL(HTMLモード)でページ全体を翻訳。出力バッファで包むだけで動作。
 * - ?lang=ja|en|ko|tc|sc で言語切替（lang.php と併用OK）
 * - class="notranslate" / data-i18n="ignore" / コメント範囲(ignore-start/end)は翻訳しない
 * - <script>/<style> は自動で翻訳除外
 * - /tmp にファイルキャッシュ（TTL 180 日）: Cloud Run でも高速
 *
 * 使い方:
 *   require __DIR__.'/config/i18n.php';
 *   i18n_begin();
 *   ... HTML/PHP ...
 *   i18n_end();
 */

declare(strict_types=1);

/* ===================== 設定 ===================== */

/** DeepL API Key（Free の場合は末尾 :fx 付き）*/
function I18N_API_KEY(): string {
  // ★推奨：環境変数 DEEPL_API_KEY。無ければ直書きフォールバック。
  $env = getenv('DEEPL_API_KEY');
  if ($env && trim($env) !== '') return trim($env);
  return 'e7366784-6fe9-4039-9ff1-5d5c2a5ebf4a:fx';
}

/** DeepL エンドポイント（APIキーに :fx が付いていれば Free 用を使う） */
function I18N_DEEPL_URL(): string {
  $k = I18N_API_KEY();
  return (str_contains($k, ':fx'))
	? 'https://api-free.deepl.com/v2/translate'
	: 'https://api.deepl.com/v2/translate';
}

/** キャッシュ保存先（Cloud Run を考慮して /tmp をデフォルト推奨） */
const I18N_CACHE_DIR = '/tmp/i18n-cache';

/** キャッシュ有効期間（秒）。180 日 */
const I18N_CACHE_TTL = 180 * 24 * 60 * 60;

/** DeepL 1 リクエスト上限対策：分割サイズ（バイト） */
const I18N_CHUNK_BYTES = 90 * 1024;

/* ============== 言語・ターゲット判定 ============== */

function i18n_lang(): string {
  $q = strtolower($_GET['lang'] ?? '');
  if ($q !== '') {
	@setcookie('lang', $q, time()+60*60*24*30, '/', '', false, true);
	return $q;
  }
  return strtolower($_COOKIE['lang'] ?? 'ja');
}

function i18n_target_code(string $lang): ?string {
  return match ($lang) {
	'en' => 'EN',
	'ko' => 'KO',
	'tc' => 'ZH-HANT',  // 繁体字
	'sc' => 'ZH',       // 簡体字（= ZH-HANS）
	'ja', '' => null,   // 翻訳しない
	default => null,
  };
}

/* ============== パブリック API ============== */

function i18n_begin(): void {
  if (ob_get_level() === 0) ob_start('i18n_ob_callback');
}
function i18n_end(): void {
  if (ob_get_level() > 0) ob_end_flush();
}

/* ============== 出力バッファ処理 ============== */

function i18n_ob_callback(string $html): string {
  $lang   = i18n_lang();
  $target = i18n_target_code($lang);

  if (!$target || I18N_API_KEY() === '') return $html;

  // まず翻訳除外を保護
  $prepared = i18n_prepare_ignore($html);

  // セクション or サイズで分割
  $parts = i18n_split_by_section_or_size($prepared);

  $outParts = [];
  foreach ($parts as $part) {
	$outParts[] = i18n_translate_chunk($part, $target);
  }
  $out = implode('', $outParts);

  // 保護タグを元に戻す
  $out = str_replace(['<i18n-ignore>', '</i18n-ignore>'], ['', ''], $out);

  // DeepL 結果に辞書適用（固定訳語）
  $out = i18n_custom_replace($out, $lang);

  return $out;
}

/* ============== 翻訳除外 ============== */

/**
 * 次の内容を <i18n-ignore>…</i18n-ignore> で保護
 * - class="notranslate"
 * - data-i18n="ignore"
 * - コメント範囲 <!-- i18n:ignore-start --> ... <!-- i18n:ignore-end -->
 * - <script> / <style> 内
 */
function i18n_prepare_ignore(string $html): string {
  // コメント範囲
  $html = preg_replace(
	'/<!--\s*i18n:ignore-start\s*-->(.*?)<!--\s*i18n:ignore-end\s*-->/s',
	'<i18n-ignore>$1</i18n-ignore>',
	$html
  ) ?? $html;

  // class="... notranslate ..."
  $html = preg_replace(
	'/(<([a-zA-Z0-9:-]+)\b[^>]*\bclass="[^"]*\bnotranslate\b[^"]*"[^>]*>)(.*?)(<\/\2>)/sU',
	'$1<i18n-ignore>$3</i18n-ignore>$4',
	$html
  ) ?? $html;

  // data-i18n="ignore"
  $html = preg_replace(
	'/(<([a-zA-Z0-9:-]+)\b[^>]*\bdata-i18n="ignore"[^>]*>)(.*?)(<\/\2>)/sU',
	'$1<i18n-ignore>$3</i18n-ignore>$4',
	$html
  ) ?? $html;

  // <script> / <style>（属性付きも含む）
  $html = preg_replace(
	'/(<script\b[^>]*>)(.*?)(<\/script>)/is',
	'$1<i18n-ignore>$2</i18n-ignore>$3',
	$html
  ) ?? $html;
  $html = preg_replace(
	'/(<style\b[^>]*>)(.*?)(<\/style>)/is',
	'$1<i18n-ignore>$2</i18n-ignore>$3',
	$html
  ) ?? $html;

  return $html;
}

/* ============== 分割戦略 ============== */

function i18n_split_by_section_or_size(string $html): array {
  $chunks = preg_split('/(?<=<\/section>)/i', $html, -1, PREG_SPLIT_NO_EMPTY);
  if ($chunks && count($chunks) > 1) return $chunks;

  $max = I18N_CHUNK_BYTES;
  $len = strlen($html);
  if ($len <= $max) return [$html];

  $out = [];
  for ($i = 0; $i < $len; $i += $max) {
	$out[] = substr($html, $i, $max);
  }
  return $out;
}

/* ============== キャッシュ + 翻訳 ============== */

function i18n_normalize_for_hash(string $s): string {
  // 改行正規化 + 連続空白を縮約（HTML構造は保持）
  $s = preg_replace("/\r\n|\r/u", "\n", $s) ?? $s;
  $s = preg_replace('/[ \t]{2,}/u', ' ', $s) ?? $s;
  return trim($s);
}

function i18n_cache_get(string $hash): string|false {
  $file = I18N_CACHE_DIR . "/$hash.html";
  if (!is_file($file)) return false;
  $mtime = @filemtime($file) ?: 0;
  if ((time() - $mtime) > I18N_CACHE_TTL) return false;
  $data = @file_get_contents($file);
  return ($data === false || $data === '') ? false : $data;
}

function i18n_cache_put(string $hash, string $content): void {
  $dir = I18N_CACHE_DIR;
  if (!is_dir($dir)) @mkdir($dir, 0775, true);
  $file = "$dir/$hash.html";
  $tmp  = $file . '.' . uniqid('tmp', true);
  if (@file_put_contents($tmp, $content) !== false) {
	@chmod($tmp, 0664);
	@rename($tmp, $file);
  } else {
	@unlink($tmp);
  }
}

/** 1 チャンク翻訳（キャッシュ利用） */
function i18n_translate_chunk(string $html, string $target): string {
  $hash = hash('sha256', $target.'|'.i18n_normalize_for_hash($html));
  if ($cached = i18n_cache_get($hash)) return $cached;
  $translated = i18n_call_deepl_html($html, $target);
  i18n_cache_put($hash, $translated);
  return $translated;
}

/* ============== DeepL 呼び出し（HTMLモード） ============== */

function i18n_call_deepl_html(string $html, string $target): string {
  $key = I18N_API_KEY();
  if ($key === '') return $html;

  $body = http_build_query([
	'text'                => $html,
	'target_lang'         => $target,
	'tag_handling'        => 'html',
	'preserve_formatting' => '1',
	'split_sentences'     => '0',
	'ignore_tags'         => 'i18n-ignore',
  ]);

  $ch = curl_init(I18N_DEEPL_URL());
  curl_setopt_array($ch, [
	CURLOPT_POST           => true,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER     => [
	  'Content-Type: application/x-www-form-urlencoded',
	  'Authorization: DeepL-Auth-Key ' . $key,
	],
	CURLOPT_POSTFIELDS     => $body,
	CURLOPT_TIMEOUT        => 45,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($res === false || $code !== 200) {
	return $html; // 失敗時は原文
  }
  $json  = json_decode((string)$res, true);
  $texts = $json['translations'][0]['text'] ?? '';
  return ($texts !== '') ? $texts : $html;
}

/* ============== 辞書（固定訳語） ============== */

function i18n_load_dict(): array {
  static $dict = null;
  if ($dict !== null) return $dict;
  $file = __DIR__ . '/i18n_dict.php';
  $dict = (is_file($file) ? include $file : []) ?: [];
  return is_array($dict) ? $dict : [];
}

/**
 * DeepL結果に辞書ルールを適用。
 * - '*' で共通ルール
 * - 'en','ko','tc','sc' で言語別ルール
 * 完全一致置換に strtr を使用（高速・副作用少）
 */
function i18n_custom_replace(string $html, string $lang): string {
  $dict = i18n_load_dict();
  if (!$dict) return $html;

  $rules = [];
  if (!empty($dict['*'])  && is_array($dict['*']))  $rules += $dict['*'];
  if (!empty($dict[$lang])&& is_array($dict[$lang]))$rules += $dict[$lang];
  if (!$rules) return $html;

  return strtr($html, $rules);
}
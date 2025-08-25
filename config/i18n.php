<?php
/**
 * /config/i18n.php
 * DeepL(HTMLモード)でページ全体を翻訳。出力バッファで包むだけで動作。
 * - ?lang=ja|en|ko|tc|sc で言語切替（lang.php と併用OK）
 * - class="notranslate" / data-i18n="ignore" の中身は翻訳しない
 * - /tmp にファイルキャッシュ（TTL 30 日）: Cloud Run でも高速
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
  // ★必要に応じてここに直書き。推奨は環境変数 DEEPL_API_KEY。
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
const I18N_CACHE_DIR = '/tmp/i18n-cache'; // 以前のローカル保持にしたい場合は __DIR__.'/../_assets/i18n/cache'

/** キャッシュ有効期間（秒）。デフォルト 30 日 */
const I18N_CACHE_TTL = 30 * 24 * 60 * 60;

/** DeepL 1 リクエスト上限対策：分割サイズ（バイト） */
const I18N_CHUNK_BYTES = 90 * 1024;

/* ============== 言語・ターゲット判定 ============== */

function i18n_lang(): string {
  // lang.php が cookie 管理していても OK / ここでも冪等にセット
  $q = strtolower($_GET['lang'] ?? '');
  if ($q !== '') {
	// header 出力前に呼ばれる（出力バッファ開始時点）想定なので setcookie OK
	@setcookie('lang', $q, time()+60*60*24*30, '/', '', false, true);
	return $q;
  }
  return strtolower($_COOKIE['lang'] ?? 'ja');
}

function i18n_target_code(string $lang): ?string {
  return match ($lang) {
	'ja', '' => null,       // 翻訳しない
	'en'     => 'EN',
	'ko'     => 'KO',
	'tc'     => 'ZH-HANT',  // 繁体字
	'sc'     => 'ZH',       // 簡体字
	default  => null,
  };
}

/* ============== パブリック API ============== */

function i18n_begin(): void {
  if (ob_get_level() === 0) {
	ob_start('i18n_ob_callback');
  }
}

function i18n_end(): void {
  if (ob_get_level() > 0) ob_end_flush();
}

/* ============== 出力バッファ処理 ============== */

function i18n_ob_callback(string $html): string {
  $lang   = i18n_lang();
  $target = i18n_target_code($lang);

  // 日本語 or APIキー無しなら何もしない
  if (!$target || I18N_API_KEY() === '') return $html;

  // 翻訳除外（notranslate / data-i18n="ignore"）の中身だけを一時タグで保護
  $prepared = i18n_prepare_ignore($html);

  // セクション or サイズで分割
  $parts = i18n_split_by_section_or_size($prepared);

  $outParts = [];
  foreach ($parts as $part) {
	$outParts[] = i18n_translate_chunk($part, $target);
  }
  $out = implode('', $outParts);

  // 保護したタグを元に戻す
  $out = str_replace(['<i18n-ignore>', '</i18n-ignore>'], ['', ''], $out);

  return $out;
}

/* ============== 翻訳除外（notranslate） ============== */

/**
 * class="notranslate" または data-i18n="ignore" を持つ要素の **内側** を
 * <i18n-ignore>…</i18n-ignore> に包む（タグ自体は保持）
 */
function i18n_prepare_ignore(string $html): string {
  // class="... notranslate ..." を持つタグ
  $pattern1 = '/(<([a-zA-Z0-9:-]+)\b[^>]*\bclass="[^"]*\bnotranslate\b[^"]*"[^>]*>)(.*?)(<\/\2>)/sU';
  $html = preg_replace($pattern1, '$1<i18n-ignore>$3</i18n-ignore>$4', $html);

  // data-i18n="ignore" を持つタグ
  $pattern2 = '/(<([a-zA-Z0-9:-]+)\b[^>]*\bdata-i18n="ignore"[^>]*>)(.*?)(<\/\2>)/sU';
  $html = preg_replace($pattern2, '$1<i18n-ignore>$3</i18n-ignore>$4', $html);

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

/* ============== キャッシュ + 翻訳コア ============== */

/**
 * 差分に強いハッシュ（空白や改行の揺れを吸収）
 */
function i18n_normalize_for_hash(string $s): string {
  // 連続空白を 1 個に、改行周辺の空白を整理
  $s = preg_replace('/\s+/u', ' ', $s);
  return trim($s ?? '');
}

/**
 * キャッシュ取得（ヒット時は文字列、ミス/期限切れは false）
 */
function i18n_cache_get(string $hash): string|false {
  $dir = I18N_CACHE_DIR;
  $file = $dir . "/$hash.html";

  if (!is_file($file)) return false;
  $mtime = @filemtime($file) ?: 0;
  if ((time() - $mtime) > I18N_CACHE_TTL) return false;

  $data = @file_get_contents($file);
  return ($data === false || $data === '') ? false : $data;
}

/**
 * キャッシュ保存（原子的に書き換え）
 */
function i18n_cache_put(string $hash, string $content): void {
  $dir = I18N_CACHE_DIR;
  if (!is_dir($dir)) {
	@mkdir($dir, 0775, true);
  }
  $file = $dir . "/$hash.html";
  $tmp  = $file . '.' . uniqid('tmp', true);

  // 一時ファイルに書いてから rename
  if (@file_put_contents($tmp, $content) !== false) {
	@chmod($tmp, 0664);
	@rename($tmp, $file);
  } else {
	// 失敗したら一応掃除
	@unlink($tmp);
  }
}

/**
 * 1 チャンク翻訳（キャッシュ利用）
 */
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
	'tag_handling'        => 'html',          // タグ保持
	'preserve_formatting' => '1',
	'split_sentences'     => '0',
	'ignore_tags'         => 'i18n-ignore',    // これに包んだ部分は翻訳しない
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
	// 必要ならログ
	// error_log("DeepL error: HTTP $code body=" . substr((string)$res,0,200));
	return $html;
  }
  $json  = json_decode((string)$res, true);
  $texts = $json['translations'][0]['text'] ?? '';
  return ($texts !== '') ? $texts : $html;
}
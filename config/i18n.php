<?php
// /config/i18n.php
// DeepL(HTMLモード)でページ全体を翻訳しファイルキャッシュ。i18n_begin()/i18n_end() で挟むだけ。

declare(strict_types=1);

// ========= 設定 =========
// Cloud Run では書き込み可能なのは /tmp のみ
const I18N_CACHE_DIR = '/tmp/i18n-cache';

// Free キーならこっち（有料版は https://api.deepl.com/v2/translate）
const I18N_DEEPL_URL = 'https://api-free.deepl.com/v2/translate';

// ★APIキー：本番では環境変数に置くのが推奨ですが、直接書く場合はここ
function i18n_api_key(): string {
  // 可能なら return getenv('DEEPL_API_KEY') ?: '...';
  return 'e7366784-6fe9-4039-9ff1-5d5c2a5ebf4a:fx';
}

// ?lang= の取得と Cookie 反映（30日）
function i18n_lang(): string {
  $q = strtolower($_GET['lang'] ?? '');
  if ($q) {
	setcookie('lang', $q, time()+60*60*24*30, '/');
	return $q;
  }
  return strtolower($_COOKIE['lang'] ?? 'ja');
}

// DeepL のターゲットコード
function i18n_target_code(string $lang): ?string {
  return match ($lang) {
	'ja', ''   => null,        // 翻訳しない
	'en'       => 'EN',
	'ko'       => 'KO',
	'tc'       => 'ZH-HANT',   // 繁体字
	'sc'       => 'ZH',        // 簡体字
	default    => null,
  };
}

// ========= パブリックAPI =========
function i18n_begin(): void {
  if (ob_get_level() === 0) {
	ob_start('i18n_ob_callback');
  }
}
function i18n_end(): void {
  if (ob_get_level() > 0) ob_end_flush();
}

// ========= コア処理 =========
function i18n_ob_callback(string $html): string {
  $lang   = i18n_lang();
  $target = i18n_target_code($lang);

  // 日本語 or キー無し → 何もしない
  if (!$target || !i18n_api_key()) return $html;

  // class="notranslate" の内側を <i18n-ignore>…</i18n-ignore> に置換
  $prepared = i18n_prepare_ignore($html);

  // DeepL サイズ制限対策に分割
  $parts = i18n_split_by_section_or_size($prepared);

  $outParts = [];
  foreach ($parts as $part) {
	$outParts[] = i18n_translate_chunk($part, $target);
  }
  $out = implode('', $outParts);

  // ignore を元に戻す
  $out = str_replace(['<i18n-ignore>', '</i18n-ignore>'], ['', ''], $out);

  return $out;
}

// class="notranslate" の **内側** を ignore タグで包む
function i18n_prepare_ignore(string $html): string {
  $pattern = '/(<([a-zA-Z0-9:-]+)\b[^>]*\bclass="[^"]*\bnotranslate\b[^"]*"[^>]*>)(.*?)(<\/\2>)/sU';
  $repl    = '$1<i18n-ignore>$3</i18n-ignore>$4';
  $html    = preg_replace($pattern, $repl, $html);
  return $html;
}

// </section> で切る。無ければ 90KB ごとに分割
function i18n_split_by_section_or_size(string $html): array {
  $chunks = preg_split('/(?<=<\/section>)/i', $html, -1, PREG_SPLIT_NO_EMPTY);
  if ($chunks && count($chunks) > 1) return $chunks;

  $max = 90 * 1024; // 90KB
  $out = [];
  for ($i=0, $len=strlen($html); $i<$len; $i+=$max) {
	$out[] = substr($html, $i, $max);
  }
  return $out ?: [$html];
}

// 翻訳 + ファイルキャッシュ
function i18n_translate_chunk(string $html, string $target): string {
  $hash = hash('sha256', $target.'|'.$html);
  $file = I18N_CACHE_DIR . "/$hash.html";

  if (is_file($file)) {
	$cached = @file_get_contents($file);
	if ($cached !== false && $cached !== '') return $cached;
  }

  $translated = i18n_call_deepl_html($html, $target);
  @mkdir(I18N_CACHE_DIR, 0775, true);
  @file_put_contents($file, $translated);

  return $translated;
}

// DeepL(HTML) 呼び出し
function i18n_call_deepl_html(string $html, string $target): string {
  $key = i18n_api_key();
  if (!$key) return $html;

  $post = http_build_query([
	'text'                 => $html,
	'target_lang'          => $target,
	'tag_handling'         => 'html',
	'preserve_formatting'  => '1',
	'split_sentences'      => '0',
	'ignore_tags'          => 'i18n-ignore',
  ]);

  $ch = curl_init(I18N_DEEPL_URL);
  curl_setopt_array($ch, [
	CURLOPT_POST           => true,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER     => [
	  'Content-Type: application/x-www-form-urlencoded',
	  'Authorization: DeepL-Auth-Key ' . $key, // free/paid 共通の推奨ヘッダ
	],
	CURLOPT_POSTFIELDS     => $post,
	CURLOPT_TIMEOUT        => 45,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($res === false || $code !== 200) {
	// 失敗時は原文を返す（必要に応じてログ）
	// error_log("DeepL error($code): ".substr((string)$res,0,500));
	return $html;
  }
  $json  = json_decode($res, true);
  $texts = $json['translations'][0]['text'] ?? '';
  return $texts !== '' ? $texts : $html;
}
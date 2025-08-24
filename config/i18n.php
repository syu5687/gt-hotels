<?php
// /config/i18n.php
// DeepL で HTML をタグ保持のまま翻訳し、結果をファイルキャッシュする

// ====== 必要設定 ======
const I18N_CACHE_DIR = __DIR__ . '/../_assets/i18n/cache';
const I18N_DEEPL_URL = 'https://api-free.deepl.com/v2/translate'; // 有料なら api.deepl.com
// 環境変数 DEEPL_API_KEY に鍵を入れておくか、直書きでも可（直書きは推奨しません）
function i18n_api_key(): string {
  $k = getenv('DEEPL_API_KEY');
  return $k ?: 'PUT_YOUR_KEY_HERE'; // ← 直書きするならここ（推奨は env）
}

// URLクエリ ?lang= の現在値（cookie 引き継ぎ）
function i18n_lang(): string {
  $q = strtolower($_GET['lang'] ?? '');
  if ($q) {
	setcookie('lang', $q, time()+60*60*24*30, '/'); // 30日
	return $q;
  }
  return strtolower($_COOKIE['lang'] ?? 'ja');
}

// DeepL のターゲットコードにマッピング
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

// 出力バッファ開始
function i18n_begin(): void {
  ob_start('i18n_ob_callback');
}

// 出力バッファ終了
function i18n_end(): void {
  // ob_callback が return するので何もせず flush されます
  if (ob_get_level() > 0) ob_end_flush();
}

// 出力バッファのコールバック
function i18n_ob_callback(string $html): string {
  $lang   = i18n_lang();
  $target = i18n_target_code($lang);
  if (!$target) return $html;               // 日本語 or 未対応 → 何もしない
  if (!i18n_api_key()) return $html;        // APIキー未設定 → 何もしない

  // DeepL へ送る前に、翻訳したくない要素をタグに変換（ignore_tags）
  // class="notranslate" を <i18n-ignore>…</i18n-ignore> に一時変換
  $pre  = $html;
  $pre  = preg_replace('/<([^>]+)\sclass="([^"]*\s)?notranslate(\s[^"]*)?"([^>]*)>/i', '<i18n-ignore>', $pre);
  $pre  = preg_replace('/<\/[^>]+>/i', function($m){
	return str_contains($m[0], '</i18n-ignore>') ? $m[0] : $m[0];
  }, $pre); // 閉じタグは後で戻すので原則触らない

  // でかいページはセクションごとに分割（DeepLの1リクエスト文字数上限対策）
  $parts = i18n_split($pre);

  $outParts = [];
  foreach ($parts as $part) {
	$outParts[] = i18n_translate_html_chunk($part, $target);
  }
  $out = implode('', $outParts);

  // ignore タグを元に戻す
  $out = str_replace(['<i18n-ignore>', '</i18n-ignore>'], ['', ''], $out);

  return $out;
}

// ある程度セクションで分割（</section> で切る。なければ適当に 90KB ごと）
function i18n_split(string $html): array {
  $chunks = preg_split('/(?<=<\/section>)/i', $html, -1, PREG_SPLIT_NO_EMPTY);
  if ($chunks && count($chunks) > 1) return $chunks;

  // フォールバック：90KB ずつ
  $max = 90 * 1024;
  $out = [];
  $len = strlen($html);
  for ($i=0; $i<$len; $i+=$max) {
	$out[] = substr($html, $i, $max);
  }
  return $out ?: [$html];
}

// 1チャンク翻訳（キャッシュ込）
function i18n_translate_html_chunk(string $html, string $target): string {
  $hash = hash('sha256', $target.'|'.$html);
  $cacheFile = I18N_CACHE_DIR . "/$hash.html";

  if (is_file($cacheFile)) {
	return file_get_contents($cacheFile) ?: $html;
  }

  $translated = i18n_call_deepl_html($html, $target);
  if (!is_dir(I18N_CACHE_DIR)) {
	@mkdir(I18N_CACHE_DIR, 0775, true);
  }
  @file_put_contents($cacheFile, $translated);

  return $translated;
}

// DeepL へ HTML モードで投げる
function i18n_call_deepl_html(string $html, string $target): string {
  $key = i18n_api_key();
  if (!$key) return $html;

  $post = http_build_query([
	'auth_key'             => $key,
	'text'                 => $html,
	'target_lang'          => $target,
	'tag_handling'         => 'html',     // ←タグ保持
	'preserve_formatting'  => '1',
	'split_sentences'      => '0',
	'ignore_tags'          => 'i18n-ignore', // ← これに包んだところは翻訳しない
  ]);

  $ch = curl_init(I18N_DEEPL_URL);
  curl_setopt_array($ch, [
	CURLOPT_POST           => true,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER     => ['Content-Type: application/x-www-form-urlencoded'],
	CURLOPT_POSTFIELDS     => $post,
	CURLOPT_TIMEOUT        => 30,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($res === false || $code !== 200) {
	// 失敗時は原文を返す（ログは必要に応じて）
	return $html;
  }
  $json = json_decode($res, true);
  $texts = $json['translations'][0]['text'] ?? '';
  return $texts ?: $html;
}
<?php
// /partials/lang.php
// 何度読み込まれても安全に（関数は function_exists でガード）

if (session_status() === PHP_SESSION_NONE) {
	session_start(); // Cookie を触るので出力前に開始
}

/* ===== 言語の決定 ===== */
$supported = ['ja','en','ko','tc','sc'];
$lang = $_GET['lang'] ?? ($_COOKIE['lang'] ?? 'ja');
if (!in_array($lang, $supported, true)) {
	$lang = 'ja';
}

// 30日 Cookie を安全に保存
setcookie('lang', $lang, [
	'expires'  => time() + 60*60*24*30,
	'path'     => '/',
	'secure'   => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
	'httponly' => true,
	'samesite' => 'Lax',
]);

$_SESSION['lang'] = $lang; // 必要なら参照用

/* ===== ヘルパー ===== */

/**
 * 文言の多言語化（足りない言語は順にフォールバック）
 * 使い方: <?= txt('JA', 'EN', 'KO', 'TC', 'SC') ?>
 */
if (!function_exists('txt')) {
	function txt($ja, $en=null, $ko=null, $tc=null, $sc=null) {
		$lang = $GLOBALS['lang'] ?? 'ja';
		$map  = ['ja'=>$ja, 'en'=>$en, 'ko'=>$ko, 'tc'=>$tc, 'sc'=>$sc];
		if (!empty($map[$lang])) return $map[$lang];
		foreach (['ja','en','ko','tc','sc'] as $l) {
			if (!empty($map[$l])) return $map[$l];
		}
		return '';
	}
}

/** 現在URLを保ったまま lang だけ差し替えたリンクを返す */
if (!function_exists('langLink')) {
	function langLink($target){
		$q = $_GET;
		$q['lang'] = $target;
		return strtok($_SERVER['REQUEST_URI'],'?') . '?' . http_build_query($q);
	}
}

/** 任意のパスに現在の lang を付与（追加クエリも可） */
if (!function_exists('url_with_lang')) {
	function url_with_lang(string $path, array $extra = []) {
		$lang  = $GLOBALS['lang'] ?? 'ja';
		$parts = parse_url($path);
		$q = [];
		if (!empty($parts['query'])) parse_str($parts['query'], $q);
		$q = array_merge($q, $extra, ['lang' => $lang]);
		$p = $parts['path'] ?? '';
		$h = isset($parts['fragment']) ? '#'.$parts['fragment'] : '';
		return $p . '?' . http_build_query($q) . $h;
	}
}

/** 現在の言語名（UI 表示用） */
if (!function_exists('currentLangLabel')) {
	function currentLangLabel(): string {
		$lang = $GLOBALS['lang'] ?? 'ja';
		return match ($lang) {
			'ja' => 'JAPANESE',
			'en' => 'ENGLISH',
			'ko' => '한국어',
			'tc' => '繁體字',
			'sc' => '简体字',
			default => 'JAPANESE',
		};
	}
}
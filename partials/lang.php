<?php
// partials/lang.php  —— 必ず最初に読み込む（何も出力しない）
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

// 受け付ける言語
$supported = ['ja','en','ko','tc','sc'];

// 現在値を決定（?lang > Cookie > デフォルト）
$current = $_GET['lang'] ?? ($_COOKIE['lang'] ?? 'ja');
if (!in_array($current, $supported, true)) {
	$current = 'ja';
}

// Cookie へ保持（30日、有効パスは全体）
if (!isset($_COOKIE['lang']) || $_COOKIE['lang'] !== $current) {
	setcookie('lang', $current, time() + 60*60*24*30, '/');
}
$_SESSION['lang'] = $current;

// どこからでも使えるように関数化
function current_lang(): string {
	return $_SESSION['lang'] ?? 'ja';
}

/** 超シンプル翻訳ヘルパー
 * 使い方: <?= txt('JA','EN','KO','TC','SC') ?>
 */
function txt($ja, $en=null, $ko=null, $tc=null, $sc=null){
	$lang = current_lang();
	$map  = ['ja'=>$ja, 'en'=>$en, 'ko'=>$ko, 'tc'=>$tc, 'sc'=>$sc];
	if (!empty($map[$lang])) return $map[$lang];
	foreach (['ja','en','ko','tc','sc'] as $l) {
		if (!empty($map[$l])) return $map[$l];
	}
	return '';
}

/** 現在のURLを保ったまま lang だけ差し替える */
function langLink(string $target): string {
	$q = $_GET;
	$q['lang'] = $target;
	return strtok($_SERVER['REQUEST_URI'], '?') . '?' . http_build_query($q);
}

/** 任意パスに ?lang=xx を付与（内部リンク用） */
function url_with_lang(string $path, array $extra = []): string {
	$lang  = current_lang();
	$parts = parse_url($path);
	$q = [];
	if (!empty($parts['query'])) parse_str($parts['query'], $q);
	$q = array_merge($q, $extra, ['lang' => $lang]);
	$p = $parts['path'] ?? '';
	$h = isset($parts['fragment']) ? '#'.$parts['fragment'] : '';
	return $p.'?'.http_build_query($q).$h;
}
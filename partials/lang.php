<?php
// /partials/lang.php
if (session_status() === PHP_SESSION_NONE) session_start();

// 受け付ける言語
$supported = ['ja','en','ko','tc','sc'];
$lang = $_GET['lang'] ?? ($_COOKIE['lang'] ?? 'ja');
if (!in_array($lang, $supported, true)) $lang = 'ja';

// Cookie更新（30日）
setcookie('lang', $lang, time() + 60*60*24*30, '/', '', false, true);

if (!function_exists('txt')) {
  function txt($ja, $en=null, $ko=null, $tc=null, $sc=null) {
	$lang = $GLOBALS['lang'] ?? 'ja';
	$map  = ['ja'=>$ja, 'en'=>$en, 'ko'=>$ko, 'tc'=>$tc, 'sc'=>$sc];
	if (!empty($map[$lang])) return $map[$lang];
	foreach (['ja','en','ko','tc','sc'] as $l) if (!empty($map[$l])) return $map[$l];
	return '';
  }
}

if (!function_exists('langLink')) {
  function langLink($target){
	$q = $_GET; $q['lang'] = $target;
	return strtok($_SERVER['REQUEST_URI'],'?').'?'.http_build_query($q);
  }
}

if (!function_exists('url_with_lang')) {
  function url_with_lang(string $path, array $extra = []) {
	$lang  = $GLOBALS['lang'] ?? 'ja';
	$parts = parse_url($path);
	$q = [];
	if (!empty($parts['query'])) parse_str($parts['query'], $q);
	$q = array_merge($q, $extra, ['lang' => $lang]);
	$p = $parts['path'] ?? '';
	$h = isset($parts['fragment']) ? '#'.$parts['fragment'] : '';
	return $p.'?'.http_build_query($q).$h;
  }
}
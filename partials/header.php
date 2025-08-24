<?php require_once __DIR__.'/../config/app.php'; ?>
<header>
  <div class="bar">
	<div class="logo"><a href="/">Garden Terrace Hotels</a></div>
	<nav class="nav">
	  <a href="/#luxury" <?= is_active(['index.php','']) ?>>LUXURY</a>
	  <a href="/#city"   <?= is_active(['index.php','']) ?>>CITY RESORT</a>
	  <a href="/#relax"  <?= is_active(['index.php','']) ?>>RELAX</a>
	</nav>
	<div class="lang">
	  <button type="button" class="lang-btn">
		<img src="<?= asset('/_assets/svg/world.svg') ?>" alt="world"> JAPANESE
	  </button>
	  <div class="lang-menu">
 		 <a href="<?= langLink('ja') ?>">JAPANESE</a>
		<a href="<?= langLink('en') ?>">ENGLISH</a>
		<a href="<?= langLink('ko') ?>">韓国語</a>
		<a href="<?= langLink('tc') ?>">繁体字</a>
		<a href="<?= langLink('sc') ?>">簡体字</a>
	  </div>
	</div>
  </div>
</header>

<?php
// 受け付ける言語
$supported = ['ja','en','ko','tc','sc'];
$lang = $_GET['lang'] ?? 'ja';
if (!in_array($lang, $supported, true)) $lang = 'ja';

/**
 * 超シンプル翻訳ヘルパー
 * 使い方: <?= txt('JA', 'EN', 'KO', 'TC', 'SC') ?>
 * 欠けている言語は自動で他の言語（まずJA）にフォールバック
 */
function txt($ja, $en=null, $ko=null, $tc=null, $sc=null){
  global $lang;
  $map = ['ja'=>$ja, 'en'=>$en, 'ko'=>$ko, 'tc'=>$tc, 'sc'=>$sc];

  if (!empty($map[$lang])) return $map[$lang];         // その言語があればそれ
  foreach (['ja','en','ko','tc','sc'] as $l) {         // なければどれかあるもの
	if (!empty($map[$l])) return $map[$l];
  }
  return ''; // 何も無ければ空
}

/** 現在のURLを保ったまま lang パラメータだけ差し替えるリンク生成 */
function langLink($target){
  $q = $_GET; $q['lang'] = $target;
  return strtok($_SERVER['REQUEST_URI'],'?').'?'.http_build_query($q);
}
?>
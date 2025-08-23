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
		<a href="?lang=ja">JAPANESE</a>
		<a href="?lang=en">ENGLISH</a>
		<a href="?lang=ko">韓国語</a>
		<a href="?lang=tc">繁体字</a>
		<a href="?lang=sc">簡体字</a>
	  </div>
	</div>
  </div>
</header>
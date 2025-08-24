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
<script>
  const urlParams=new URLSearchParams(location.search);
  let lang=urlParams.get('lang')||document.cookie.match(/(?:^| )lang=([^;]+)/)?.[1]||'ja';
  document.querySelectorAll("a").forEach(a=>{
	const href=a.getAttribute("href");
	if(!href||!href.startsWith("/")||href.includes("lang=")) return;
	a.setAttribute("href", href + (href.includes("?")?"&":"?") + "lang=" + lang);
  });
</script>
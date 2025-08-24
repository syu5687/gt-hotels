<?php require_once __DIR__.'/../config/app.php'; ?>
<header>
  <div class="bar">
	<div class="logo"><a href="/">Garden Terrace Hotels</a></div>

	<nav class="nav">
	  <a href="<?= url_with_lang('/#luxury') ?>" <?= is_active(['index.php','']) ?>>LUXURY</a>
	  <a href="<?= url_with_lang('/#city')   ?>" <?= is_active(['index.php','']) ?>>CITY RESORT</a>
	  <a href="<?= url_with_lang('/#relax')  ?>" <?= is_active(['index.php','']) ?>>RELAX</a>
	</nav>

	<div class="lang">
	  <button type="button" class="lang-btn">
		<img src="<?= asset('/_assets/svg/world.svg') ?>" alt="world">
		<?= htmlspecialchars(currentLangLabel(), ENT_QUOTES, 'UTF-8') ?>
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
document.addEventListener('DOMContentLoaded', function(){
  const urlParams = new URLSearchParams(location.search);
  const lang = urlParams.get('lang') || (document.cookie.match(/(?:^| )lang=([^;]+)/)||[])[1] || 'ja';

  // 内部リンクに ?lang を付与
  document.querySelectorAll('a').forEach(a => {
	const href = a.getAttribute('href');
	if (!href) return;
	if (!href.startsWith('/')) return;     // 外部や # は除外
	if (href.includes('lang=')) return;

	const sep = href.includes('?') ? '&' : '?';
	a.setAttribute('href', href + sep + 'lang=' + lang);
  });
});
</script>
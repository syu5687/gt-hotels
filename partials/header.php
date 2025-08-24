<?php
require_once __DIR__.'/../config/app.php';
require_once __DIR__.'/lang.php';   // ← 追加：どのページからでも必ず言語ヘルパーを読み込む
?>
<header>
  <div class="bar">
	<div class="logo notranslate"><a href="/" class="notranslate">Garden Terrace Hotels</a></div>

	<nav class="nav notranslate">
	  <a href="<?= url_with_lang('/#luxury') ?> class="notranslate"" <?= is_active(['index.php','']) ?>>LUXURY</a>
	  <a href="<?= url_with_lang('/#city')   ?> class="notranslate"" <?= is_active(['index.php','']) ?>>CITY RESORT</a>
	  <a href="<?= url_with_lang('/#relax')  ?> class="notranslate"" <?= is_active(['index.php','']) ?>>RELAX</a>
	</nav>

	<div class="lang">
	<button type="button" class="lang-btn">
	  <img src="<?= asset('/_assets/svg/world.svg') ?>" alt="world">
	  <?= currentLangLabel() ?>
	</button>
	  <div class="lang-menu notranslate">
		<a href="<?= langLink('ja') ?>" class="notranslate">JAPANESE</a>
		<a href="<?= langLink('en') ?>" class="notranslate">ENGLISH</a>
		<a href="<?= langLink('ko') ?>" class="notranslate">韓国語</a>
		<a href="<?= langLink('tc') ?>" class="notranslate">繁体字</a>
		<a href="<?= langLink('sc') ?>" class="notranslate">簡体字</a>
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
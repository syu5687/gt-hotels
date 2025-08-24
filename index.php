<?php
require __DIR__ . '/partials/lang.php';
require __DIR__ . '/config/i18n.php';
i18n_begin();  // ← 先頭で開始
?>
<?php
$pageTitle = 'Home';
$pageDesc  = 'Garden Terrace Hotels | Luxury / City Resort / Relax';
require __DIR__.'/partials/head.php';
require __DIR__.'/partials/header.php';
?>
<main>

  <section class="intro">
	<h2 class="notranslate">Garden Terrace Hotels</h2>
	<!-- <a href="#luxury" class="scroll-link"><div class="scroll">SCROLL</div></a> -->
  </section>

  <section id="luxury" class="section notranslate">
	<h3 class="notranslate">LUXURY</h3>
	<div class="logos row-3">
	  <div class="logo-card"><a href="/gtn.php"><img src="<?= asset('/_assets/svg/nagasaki.svg') ?>" alt="Garden Terrace Nagasaki"></a></div>
	  <div class="logo-card"><a href="/gts.php"><img src="<?= asset('/_assets/svg/saga.svg') ?>" alt="Garden Terrace Saga"></a></div>
	  <div class="logo-card"><a href="/gtf.php"><img src="<?= asset('/_assets/svg/fukuoka.svg') ?>" alt="Garden Terrace Fukuoka"></a></div>
	</div>
	<div class="logos tail">
	  <div class="logo-card"><a href="urari.php"><img src="<?= asset('/_assets/svg/urari.svg') ?>" alt="URARI TAKEO"></a></div>
	  <div class="logo-card"><a href="/rcn.php"><img src="<?= asset('/_assets/svg/royalchester.svg') ?>" alt="Royal Chester Nagasaki"></a></div>
	</div>
  </section>

  <section id="city" class="section notranslate">
	<h3 class="notranslate">CITY RESORT</h3>
	<div class="logos tail">
	  <div class="logo-card"><a href="/hf99.php"><img src="<?= asset('/_assets/svg/sasebo.svg') ?>" alt="Hotel Flags Sasebo Kujukushima"></a></div>
	  <div class="logo-card"><a href="/hfi.php"><img src="<?= asset('/_assets/svg/isahaya.svg') ?>" alt="Hotel Flags Isahaya Nagasaki"></a></div>
	</div>
  </section>

  <section id="relax" class="section notranslate">
	<h3 class="notranslate">RELAX</h3>
	<div class="logos tail">
	  <div class="logo-card"><a href="/bekkan.php"><img src="<?= asset('/_assets/svg/bekkan.svg') ?>" alt="Hotel Flags Bekkan"></a></div>
	  <div class="logo-card"><a href="/conkana.php"><img src="<?= asset('/_assets/svg/forest.svg') ?>" alt="conkana"></a></div>
	</div>
  </section>
</main>
<?php require __DIR__.'/partials/footer.php'; ?>
<?php require __DIR__.'/partials/scripts.php'; ?>
<div class="qr-box">
  <img src="<?= asset('/_assets/images/gth-qr.png') ?>" alt="qr">
</div>
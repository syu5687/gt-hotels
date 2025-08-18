<?php
$pageTitle = 'Home';
$pageDesc  = 'Garden Terrace Hotels | Luxury / City Resort / Relax';
require __DIR__.'/partials/head.php';
require __DIR__.'/partials/header.php';
?>
<main>
  <section class="hero">
	<video id="heroVideo" src="<?= asset('/_assets/media/hero.mp4') ?>" poster="<?= asset('/_assets/images/hero.jpg') ?>" preload="auto" playsinline></video>
	<div class="overlay"></div>
	<h1 class="hero-title">LUXURY HOTEL</h1>
	<button class="play" id="playBtn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></button>
  </section>

  <section class="intro">
	<h2>Garden Terrace Hotels</h2>
	<a href="#luxury" class="scroll-link"><div class="scroll">SCROLL</div></a>
  </section>

  <section id="luxury" class="section">
	<h3>LUXURY</h3>
	<div class="logos row-3">
	  <div class="logo-card"><a href="/luxury-nagasaki.php"><img src="<?= asset('/_assets/svg/nagasaki.svg') ?>" alt="Garden Terrace Nagasaki"></a></div>
	  <div class="logo-card"><a href="/luxury-saga.php"><img src="<?= asset('/_assets/svg/saga.svg') ?>" alt="Garden Terrace Saga"></a></div>
	  <div class="logo-card"><a href="/luxury-fukuoka.php"><img src="<?= asset('/_assets/svg/fukuoka.svg') ?>" alt="Garden Terrace Fukuoka"></a></div>
	</div>
	<div class="logos tail">
	  <div class="logo-card"><a href="/luxury-urari-tako.php"><img src="<?= asset('/_assets/svg/urari.svg') ?>" alt="URARI TAKO 浪裏"></a></div>
	  <div class="logo-card"><a href="/luxury-royal-chester-nagasaki.php"><img src="<?= asset('/_assets/svg/royalchester.svg') ?>" alt="Royal Chester Nagasaki"></a></div>
	</div>
  </section>

  <section id="city" class="section">
	<h3>CITY RESORT</h3>
	<div class="logos tail">
	  <div class="logo-card"><a href="/city-flags-sasebo-kujukushima.php"><img src="<?= asset('/_assets/svg/sasebo.svg') ?>" alt="Hotel Flags Sasebo Kujukushima"></a></div>
	  <div class="logo-card"><a href="/city-flags-isahaya-nagasaki.php"><img src="<?= asset('/_assets/svg/isahaya.svg') ?>" alt="Hotel Flags Isahaya Nagasaki"></a></div>
	</div>
  </section>

  <section id="relax" class="section">
	<h3>RELAX</h3>
	<div class="logos tail">
	  <div class="logo-card"><a href="/relax-flags-bekkan.php"><img src="<?= asset('/_assets/svg/bekkan.svg') ?>" alt="Hotel Flags Bekkan"></a></div>
	  <div class="logo-card"><a href="/relax-sasebo-city-forest-park.php"><img src="<?= asset('/_assets/svg/forest.svg') ?>" alt="Sasebo City Forest Park"></a></div>
	</div>
  </section>
</main>
<?php require __DIR__.'/partials/footer.php'; ?>
<?php require __DIR__.'/partials/scripts.php'; ?>
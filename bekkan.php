<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN';
$pageDesc  = ''; // SEOテキスト不要

require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>

<main class="gtn">

  <!-- =========================
	   HERO
  ========================== -->
  <section class="gtn-hero">
	<div class="gtn-hero__bg">
	  <img src="<?= asset('/_assets/images/bekkan/hero.webp?1') ?>" alt="">
	</div>
	<!-- <div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">大人の休日の最高峰へ。癒し極まる、ハイグレードホテル。</p>
	  <p class="gtn-hero__brand">HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN</p>
	</div> -->
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/bekkan.svg') ?>"
		 alt="HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN"> -->
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/bekkan/sec1-1.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/bekkan/sec1-2.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p data-i18n>海の音・森の音が優しく包み込む、洗練された和の空間がここに。</p>
			<p>全国的にも稀少な、多種類・高濃度の温泉成分を含むスパは、</p>
			<p>専門家からも一目置かれるほど。</p>
			<p>絶景が広がる屋外プールや、宿泊者限定のラウンジもご用意。</p>
			<p>ゆったりと五感を解放し、大切な方と深い癒しをご堪能ください。</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>

  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
  <div class="gtn-divider gtn-divider--back1"></div>

  <!-- =========================
	   SECTION 2：ダイニング
  ========================== -->
  <section class="gtn-sec gtn-sec--dining">
	<div class="gtn-wrap">

	  <!-- ワイドビジュアル -->
	  <figure class="dining-hero">
		<img src="<?= asset('/_assets/images/bekkan/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">長崎＆佐世保名物を味わう“ライブキッチン×ビュッフェ”</h2>
		<div class="dining-lead">
		<p>目の前で繰り広げられる職人の技。鉄板が奏でる音、天ぷらが揚がる瞬間の香ばしさ。</p>
		<p>寿司が一貫ずつ仕上がり、石窯からは熱々のピザが姿を現す。出来たての美味しさ、その場でしか味わえない臨場感をお楽しみください。</p>
		<p>九州が誇る日本酒をはじめとするドリンクのセレクションと美しく仕立てられたフィンガーフードの数々で、至福の時間を演出します。</p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/bekkan/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/bekkan/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/bekkan/sec2-4.webp') ?>" alt="">
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/bekkan/sec2-5.webp') ?>" alt="">
		  </figure>
		</div> -->

		<!-- 3行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/bekkan/sec2-8.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/bekkan/sec2-7.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/bekkan/sec2-6.webp') ?>" alt="">
		  </figure>
		</div> -->

	  </div><!-- /.dining-gallery -->

	</div>
  </section>

  <!-- =========================
	   SECTION 3：プール・スパ・ジム
  ========================== -->
  <section class="gtn-sec gtn-sec--breeze">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（プールの俯瞰） -->
	  <figure class="breeze-hero">
		<img src="<?= asset('/_assets/images/bekkan/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/bekkan/sec3-2.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/bekkan/sec3-3.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/bekkan/sec3-4.webp') ?>" alt="">
		</figure>
	  </div>
	  <div class="breeze-trio">
		  <figure class="tri">
			<img src="<?= asset('/_assets/images/bekkan/sec3-5.webp') ?>" alt="">
		  </figure>
		  <figure class="tri">
			<img src="<?= asset('/_assets/images/bekkan/sec3-6.webp') ?>" alt="">
		  </figure>
		</div>


	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">すべては、日常を離れた深いくつろぎのために。</h2>
		<div class="breeze-body">
			<p>天然温泉の大浴場や温水プール、サウナにリラクゼーションスペース。館内の至るところが、深いくつろぎのために整えられています。</p>
			<p>1階には家族みんなで楽しめるゲームスペース「PLAY GROUND+」や、たくさんの書籍に囲まれた「BOOK LOUNGE」も</p>
			<p>非日常の世界を1日中満喫してください。</p>
		</div>
	  </div>

	</div>
  </section>
  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
	<div class="gtn-divider gtn-divider--back1"></div>

  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--stay">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（客室のワイド写真） -->
	  <figure class="stay-hero">
		<img src="<?= asset('/_assets/images/bekkan/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">壮大な九十九島を望む、贅沢な眺望。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>畳のぬくもりと洋の快適さが調和した、心安らぐ和洋室でくつろぐひととき。裸足で過ごす柔らかな畳の感触とゆとりある広さが、上質な時間を引き立てます。</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/bekkan/sec4-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/bekkan/sec4-3.webp') ?>" alt="">
		  </figure>
		</div>


	  <!-- 下段：客室一覧（表） -->
	  <div class="stay-spec">
		<div class="spec-head spec-grid">
		  <div>客室タイプ</div>
		  <div>広さ（m²）</div>
		  <div>室数</div>
		  <div>定員数</div>
		  <div>ベッドサイズ</div>
		</div>

		<div class="spec-divider"></div>

		<div class="spec-row spec-grid">
		  <div>オーシャンビュー和洋室</div>
		  <div>70～79</div>
		  <div>6室</div>
		  <div>1～6名</div>
		  <div>ツイン　1400×1950 &amp; 和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和洋室</div>
		  <div>50～63</div>
		  <div>3室</div>
		  <div>1～8名</div>
		  <div>ツイン　1400×1950 &amp; 和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックスツイン</div>
		  <div>32～40</div>
		  <div>8室</div>
		  <div>1～3名</div>
		  <div>ツイン　1200×1950 &amp; ソファベッド</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和室ベッド</div>
		  <div>35</div>
		  <div>9室</div>
		  <div>1～4名</div>
		  <div>ツイン　1200×2030 &amp; EX970×1950</div>
		</div>

		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://gardenterracehotels.com/sasebo/" target="_blank" rel="noopener">https://gardenterracehotels.com/sasebo/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
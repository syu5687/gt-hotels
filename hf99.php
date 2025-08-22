<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'HOTEL FLAGS SASEBO KUJUKUSHIMA';
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
	  <img src="<?= asset('/_assets/images/hf99/hero.webp?2') ?>" alt="">
	</div>
	<div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">いつ訪れても安心してくつろげる、みんなのリゾートホテル。</p>
	  <p class="gtn-hero__brand">HOTEL FLAGS SASEBO KUJUKUSHIMA</p>
	</div>
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/sasebo.svg') ?>"
		 alt="HOTEL FLAGS SASEBO KUJUKUSHIMA"> -->
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms" style="padding: 60px 50px 60px 0px;">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/hf99/sec1-1.webp') ?>" alt="" style="padding-bottom: 50px;">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/hf99/sec1-2.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p data-i18n>日本百景にも選ばれた美しい自然。</p>
			<p>九十九島パールシーリゾートの目前で、家族と、仲間と過ごす、格別な時間を。</p>
			<p>リラックスできる空間にこだわった客室、</p>
			<p>長崎・佐世保の旬をふんだんに取り入れたライブビュッフェで</p>
			<p>心満たされる瞬間を重ねて。</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>

  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
  <!-- <div class="gtn-divider gtn-divider--back1"></div> -->

  <!-- =========================
	   SECTION 2：ダイニング
  ========================== -->
  <section class="gtn-sec gtn-sec--dining" style="padding-top: 0;">
	<div class="gtn-wrap">

	  <!-- ワイドビジュアル -->
	  <figure class="dining-hero">
		<img src="<?= asset('/_assets/images/hf99/sec2-1.webp') ?>" alt="">
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
			<img src="<?= asset('/_assets/images/hf99/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/hf99/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/hf99/sec2-4.webp') ?>" alt="">
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/hf99/sec2-5.webp') ?>" alt="">
		  </figure>
		</div>-->
		<!-- 3行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gtn/sec2-8.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gtn/sec2-7.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gtn/sec2-6.webp') ?>" alt="">
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
		<img src="<?= asset('/_assets/images/hf99/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/hf99/sec3-2.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/hf99/sec3-3.webp') ?>" alt="">
		</figure>
	  </div>

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">くつろぎの旅を、より豊かなひとときに。</h2>
		<div class="breeze-body">
		 	<p>疲労回復や冷え性に効果のある「平戸温泉」の湯が、くつろぎの旅を、より豊かなひとときに仕上げます。</p>
			 <p>宿泊者専用ラウンジでは無料のドリンクをゆっくりとみんなで楽しめます。</p>
			  <p>長崎の逸品を取り揃えたスーベニアショップで旅の思い出と一緒にお土産を。</p>
		</div>
	  </div>

	</div>
  </section>
  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
	<!-- <div class="gtn-divider gtn-divider--back1"></div> -->

  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--stay" style="padding-top: 0;">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（客室のワイド写真） -->
	  <figure class="stay-hero">
		<img src="<?= asset('/_assets/images/hf99/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">優雅な時間を大切な方とご一緒に。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>ヨーロピアンクラシカルな家具を設えた、モダンな洋室。ご家族でゆったり、だんらんの時間を楽しめる和室。</p>
		<p>両方を兼ね備えた和洋室もご用意しております。ベッド派の方も、お布団派の方も、思い思いのひとときをお過ごしください。</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/hf99/sec4-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/hf99/sec4-3.webp') ?>" alt="">
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
		  <div>プレミアム和洋室</div>
		  <div>48</div>
		  <div>1室</div>
		  <div>1～5名</div>
		  <div>ツイン　1200×1950＆和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>ジュニアスイート</div>
		  <div>50</div>
		  <div>1室</div>
		  <div>1～2名</div>
		  <div>ツイン　1200×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和洋室</div>
		  <div>48</div>
		  <div>11室</div>
		  <div>1～5名</div>
		  <div>ツイン　1100×1950＆和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和室ベッド</div>
		  <div>22～28</div>
		  <div>22室</div>
		  <div>1～3名</div>
		  <div>ツイン　1200×1950＆和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和室</div>
		  <div>22～36</div>
		  <div>17室</div>
		  <div>1～6名</div>
		  <div>和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和室アウトバス</div>
		  <div>17</div>
		  <div>3室</div>
		  <div>1～4名</div>
		  <div>和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>洋室ツイン</div>
		  <div>17～24</div>
		  <div>16室</div>
		  <div>1～2名</div>
		  <div>ツイン　1100×1950</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>洋室アウトバス</div>
		  <div>24</div>
		  <div>1室</div>
		  <div>1～2名</div>
		  <div>ツイン　1200×1950</div>
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
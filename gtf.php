<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'Garden Terrace Fukuoka';
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
	  <img src="<?= asset('/_assets/images/gtf/hero.webp?2') ?>" alt="">
	</div>
	<!-- <div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">訪れるたびに思い出せる、ふたりのリゾート</p>
	  <p class="gtn-hero__brand">GARDEN TERRACE FUKUOKA  HOTELS &amp; RESORTS</p>
	</div> -->
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/fukuoka.svg') ?>"
		 alt="Garden Terrace Fukuoka"> -->
  </section>
	<div class="gtn-hero__lead">
	<p class="gtn-hero__copyL">訪れるたびに思い出せる、ふたりのリゾート</p>
	<p class="gtn-hero__brand">GARDEN TERRACE FUKUOKA  HOTELS &amp; RESORTS</p>
  </div>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms" style="padding: 60px 50px 60px 0px;">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/gtf/sec1-1.webp') ?>" alt="" style="padding-bottom: 50px;">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <!-- <figure class="rooms-photoS"">
			<img src="<?= asset('/_assets/images/gtf/sec1-1.webp') ?>" alt="">
		  </figure> -->
		  <div class="rooms-text">
			<p>都会と自然の調和が生むアーバンリゾート。</p>
			<p>きめ細やかなおもてなしと自然を感じる上質な空間。</p>
			<p>全19室からなる特別な空間で昼と夜と表情が変わる景色を見ながら、</p>
			<p>心と体を癒す贅沢なひとときを。</p>
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
		<img src="<?= asset('/_assets/images/gtf/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">厳選食材を華麗に焼き上げ魅了する</h2>
		<div class="dining-lead">
			<p>音を聞き分け、美味しい瞬間を見分け、福岡県の自慢の食材のうまさを存分に味わっていただけるよう、</p>
			<p>目の前でシェフたちが瞬間瞬間でパフォーマンスを繰り広げます。</p>
			<p>旬の食材を贅沢をどうぞご堪能ください。</p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gtf/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gtf/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gtf/sec2-4.webp') ?>" alt="">
			<figcaption></figcaption>
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gtf/sec2-5.webp') ?>" alt="">
			<figcaption></figcaption>
		  </figure>
		</div> -->

		<!-- 3行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gtf/sec2-8.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gtf/sec2-7.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gtf/sec2-6.webp') ?>" alt="">
		  </figure>
		</div> -->
		
		<!-- 右：小写真 + 本文 -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gtf/sec2-4.webp') ?>" alt="">
		  </figure>
		  <div class="card">
			<p>チャイニーズ レストラン シャンリー</p>
			<p>日本に中国料理を普及させた“ 四川料理の父 ” 陳建民氏の下で修業を積んだ</p>
			<p>立岡池敏が2000年に開業。四川料理をベースに各地の料理の良さも取り入れ、</p>
			<p>素材にこだわり多様な技法と複 雑な調味 料を駆使して</p>
			<p>豊かな風味と絶妙な味わいを形成する シャンリーの中国料理をお楽しみください。</p>
		  </div>
		</div> -->

	  </div><!-- /.dining-gallery -->

	</div>
  </section>

  <!-- =========================
	   SECTION 3：プール・スパ・ジム
  ========================== -->
  <section class="gtn-sec gtn-sec--breeze" style="padding-bottom: 0px;">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（プールの俯瞰） -->
	  <figure class="breeze-hero">
		<img src="<?= asset('/_assets/images/gtf/sec3-1.webp') ?>" alt="テラス">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gtf/sec3-2.webp') ?>" alt="ラウンジ">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gtf/sec3-3.webp') ?>" alt="テラス">
		</figure>
	  </div>

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">水面の動きとともに彩り豊かに移ろうガーデンプール</h2>
		<div class="breeze-body">
		  	<p>プールサイドはジャグジーが設備されており、シーズン中以外でもリラックスチェアーが置かれお洒落な空間を楽しめます。</p>
			<p>湯気に包まれて、心ほどける極上の屋外サウナを併設。プールと併せて非日常の癒しのひとときをお過ごしください。</p>
			<p>特別なひとときを演出する優雅な宿泊者専用のラウンジスペース。</p>
			<p>ワインやフィンガーフードに加え、海外のビールなど大人な時間をお過ごしいただけます。</p>
		</div>
	  </div>

	</div>
  </section>
  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
	<!-- <div class="gtn-divider gtn-divider--back1"></div> -->

  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--stay" style="padding-top: 120px;">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（客室のワイド写真） -->
	  <figure class="stay-hero">
		<img src="<?= asset('/_assets/images/gtf/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">都会と自然の調和が生むゆったりと過ごす空間</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>ガーデンテラス福岡はきめ細やかなおもてなしと自然を感じる上質な空間。 </p>
		<p>特別な空間で昼と夜と表情の変わる景色を見ながら、心と体を癒す贅沢なひとときを。</p>
		<p>客室フロアは「緑」「和」「凪」「空」とそれぞれ異なるテーマが魅力の全19室を備えています</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/gtf/sec4-2.webp') ?>" alt="">
		</figure>
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/gtf/sec4-3.webp') ?>" alt="">
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
		  <div>スタンダードスイート</div>
		  <div>40</div>
		  <div>15室</div>
		  <div>1～3名</div>
		  <div>ツイン　1400×2000+エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>高層階スイート</div>
		  <div>40</div>
		  <div>3室</div>
		  <div>1～3名</div>
		  <div>ツイン　1400×2000+エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>グランドスイート</div>
		  <div>80</div>
		  <div>1室</div>
		  <div>1～3名</div>
		  <div>ツイン1400×2000+エキストラベッド</div>
		</div>

		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://www.gt-fukuoka.jp/" target="_blank" rel="noopener">https://www.gt-fukuoka.jp/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
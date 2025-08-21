<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'URARI TAKEO GARDEN TERRACE SPA RESORTS';
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
	  <img src="<?= asset('/_assets/images/urari/hero.webp?1') ?>" alt="">
	</div>
	<div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">うららかに ゆったりと。</p>
	  <p class="gtn-hero__brand">URARI TAKEO GARDEN TERRACE SPA RESORTS</p>
	</div>
	<!-- 右上ロゴ -->
	<img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/urari.svg') ?>"
		 alt="Garden Terrace Nagasaki">
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/urari/sec1-1.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/urari/sec1-2.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p>全室温泉付のこだわりの客室。こだわりのスパと、佐賀の美食に癒されて。</p>
			<p>「西の方に温泉の出る巌あり…。」</p>
			<p>千三百年の時を超え、人々を癒す湯の郷として知られていた武雄。</p>
			<p>今も変わらず、その恵みは湧き出ています。</p>
			<p>全てのお部屋が武雄温泉付のこだわりの客室。</p>
			<p>旅に求められるものを、最上のかたちでご用意しました。</p>
			<p>うららかにゆったりと。感動や刺激の先にある、「回復」の滞在へ。</p>
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
		<img src="<?= asset('/_assets/images/urari/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">佐賀の「極み食材」を 贅沢に使った創作会席。 </h2>
		<div class="dining-lead">
			<p>佐賀牛をはじめ、佐賀がほこる旬の食材を使った料理の数々。佐賀牛は、すき焼き、しゃぶしゃぶからお好みのスタイルをお選びいただけます。</p>
			<p>ご朝食には、有明海の高級佐賀海苔、10年連続特Aを取得している若木地区のご当地米「さがびより」など日本の朝食にかかせない食材を、</p>
			<p>佐賀特産の逸品で揃えました。 </p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/urari/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/urari/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/urari/sec3-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/urari/sec3-3.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/urari/sec3-4.webp') ?>" alt="">
		  </figure>
		</div> -->
		
		<!-- 3行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/urari/sec3-5.webp') ?>" alt="">
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/urari/sec3-6.webp') ?>" alt="">
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
		<img src="<?= asset('/_assets/images/urari/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/urari/sec3-2.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/urari/sec3-3.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/urari/sec3-4.webp') ?>" alt="">
		</figure>
	  </div>
	  
	  <!-- 中：3枚横並び -->
		<div class="breeze-trio">
		  <figure class="tri">
			<img src="<?= asset('/_assets/images/urari/sec3-5.webp') ?>" alt="">
		  </figure>
		  <figure class="tri">
			<img src="<?= asset('/_assets/images/urari/sec3-6.webp') ?>" alt="">
		  </figure>
		</div>


	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">すべて武雄温泉をひきこんだスパフロア。</h2>
		<div class="breeze-body">
			<p>温泉感覚でくつろげる屋内のスパに開放感あるインフィニティスパと、ととのいスペース。屋内も屋外も全て武雄温泉を使った贅沢なスパです。</p>
			<p>武雄の森にいるような、木々の香りに癒されるドライサウナや山霧のように細やかな蒸気で潤うスチームサウナ。</p>
			<p>宿泊者専用のプライベートラウンジでは、佐賀にこだわった日本酒をはじめとしたドリンクや、フィンガーフードをご用意しております。</p>
			<p>ランニングマシンやバイク、ワークアウトグッズを取り揃え、メディテーションポッドも備えています。瞑想やリラックスにご利用ください。</p>
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
		<img src="<?= asset('/_assets/images/urari/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">湖畔を眺めながら、季節を感じる全室温泉付のこだわりの客室。 </h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>お部屋は全室温泉付きのこだわりの客室をご用意しました。旅館のあたたかなおもてなしと、ホテルの心地よさを兼ね備えた温泉リトリート。</p>
		<p>ペット同伴のお部屋もご用意。愛犬と泊まれて、館外にアクセスしやすくドックパークで自然と過ごすひととき。一日中、愛犬と一緒にくつろげる空間。  </p>
	  </div>
	  
	  <div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/urari/sec4-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/urari/sec4-3.webp') ?>" alt="">
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
		  <div>スイートルーム</div>
		  <div>87.7</div>
		  <div>1室</div>
		  <div>1〜5名</div>
		  <div>ツイン　1,400×2,100</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>ジュニアスイートルーム</div>
		  <div>76.2</div>
		  <div>1室</div>
		  <div>1〜5名</div>
		  <div>ツイン　1,400×2,100</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックス和洋室テラス付</div>
		  <div>67.5</div>
		  <div>1室</div>
		  <div>1～4名</div>
		  <div>ツイン　1,400×2,100</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックス和洋室</div>
		  <div>59.4～63.8</div>
		  <div>13室</div>
		  <div>1～4名</div>
		  <div>ツイン　1,400×2,100</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックス和洋室ペット同伴</div>
		  <div>60</div>
		  <div>2室</div>
		  <div>1～4名</div>
		  <div>ツイン　1,400×2,100</div>
		</div>

		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://uraritakeo.jp/" target="_blank" rel="noopener">https://uraritakeo.jp/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
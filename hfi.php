<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'HOTEL FLAGS ISAHAYA NAGASAKI';
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
	  <img src="<?= asset('/_assets/images/hfi/hero.webp?2') ?>" alt="">
	</div>
	<!-- <div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">いつも寄り添える場所をあなたへ</p>
	  <p class="gtn-hero__brand">HOTEL FLAGS ISAHAYA NAGASAKI</p>
	</div> -->
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/isahaya.svg') ?>"
		 alt="HOTEL FLAGS ISAHAYA NAGASAKI"> -->
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms" style="padding: 60px 50px 60px 0px;">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/hfi/sec1-1.webp?1') ?>" alt="" style="padding-bottom: 50px;">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/hfi/sec1-2.webp?1') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p data-i18n>皇室ゆかりのロイヤルステイ。</p>
			<p>天皇の宿、皇室の宿に選ばれた伝統あるホテル。</p>
			<p>長崎県のほぼ中心に位置する「諫早市」は佐世保市や、長崎市内への</p>
			<p>アクセスも近く、長崎をまるごと体感できる好立地です。</p>
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
		<img src="<?= asset('/_assets/images/hfi/sec2-1.webp?1') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">日本庭園の眺望を個室で楽しむ、鉄板焼のレストラン諫早竹彩</h2>
		<div class="dining-lead">
		<p>料理コンセプトはLocal & Fresh、諌早の旬素材を鉄板で味わう日本料理。</p>
		<p>目の前で繰り広げられる職人の技。鉄板が奏でる音、出来たての美味しさ、その場でしか味わえない臨場感と</p>
		<p>ライトアップされた幻想的な日本庭園を一望しながら、一期一会の食体験をお愉しみください。</p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/hfi/sec2-2.webp?1') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/hfi/sec2-3.webp?1') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/hfi/sec2-4.webp?1') ?>" alt="">
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/hfi/sec2-5.webp?1') ?>" alt="">
		  </figure>
		</div> -->

		<!-- 3行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/hfi/sec2-8.webp?1') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/hfi/sec2-7.webp?1') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/hfi/sec2-6.webp?1') ?>" alt="">
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
		<img src="<?= asset('/_assets/images/hfi/sec3-1.webp?1') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <!-- <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/hfi/sec3-2.webp?1') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/hfi/sec3-3.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/hfi/sec3-4.webp') ?>" alt="">
		</figure>
	  </div> -->

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">豊富なライブラリーで、上質なくつろぎの時間を。</h2>
		<div class="breeze-body">
		  <p>宿泊者専用のラウンジでは、 旅をテーマにした本や写真集を楽しんだり、ラウンジのドリンクやスイーツをゆっくりとお楽しみいただけます。</p>
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
		<img src="<?= asset('/_assets/images/hfi/sec4-1.webp?1') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">時代が育んだ気品が、情趣を一層深める。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>間接照明が印象的で、落ち着いたモダンな雰囲気のツインルームや、広々とした快適な居住空間のデラックスツイン。</p>
		<p>由緒ある日本の風情を感じさせ、畳の香りに包まれるファミリーに人気の和室。</p>
		<p>大切な人との特別なひと時を演出する気品あるロイヤルスイートなど、様々なシーンに合わせて選べるお部屋をご用意してます。</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/hfi/sec4-2.webp?1') ?>" alt="">
		</figure>
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/hfi/sec4-3.webp?1') ?>" alt="">
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
		  <div>ロイヤルスイートツイン</div>
		  <div>60</div>
		  <div>1室</div>
		  <div>1～2名</div>
		  <div>ツイン　1400×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックスツイン</div>
		  <div>26</div>
		  <div>8室</div>
		  <div>1～3名</div>
		  <div>ツイン<br>1200×1950＆Extra bed</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>新館ツイン</div>
		  <div>24</div>
		  <div>16室</div>
		  <div>1～2名</div>
		  <div>ツイン　1400×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>本館ツイン</div>
		  <div>24</div>
		  <div>5室</div>
		  <div>1～2名</div>
		  <div>ツイン　1400×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>コンフォートツイン</div>
		  <div>28</div>
		  <div>4室</div>
		  <div>1～3名</div>
		  <div>ツイン<br>1400×1950＆Extra bed</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>セミダブル</div>
		  <div>14</div>
		  <div>5室</div>
		  <div>1～2名</div>
		  <div>1400×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>和室（新館）</div>
		  <div>10畳</div>
		  <div>1室</div>
		  <div>1〜3名</div>
		  <div>和布団</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>和室（本館）</div>
		  <div>8畳</div>
		  <div>3室</div>
		  <div>1〜3名</div>
		  <div>和布団</div>
		</div>

		
		<div class="spec-row spec-grid">
		  <div>和室（本館）</div>
		  <div>12畳</div>
		  <div>1室</div>
		  <div>1～4名</div>
		  <div>和布団</div>
		</div>


		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://flags-isahaya.jp/" target="_blank" rel="noopener">https://flags-isahaya.jp/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
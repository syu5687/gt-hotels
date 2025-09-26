<?php
require __DIR__ . '/partials/lang.php';
require __DIR__ . '/config/i18n.php';
i18n_begin();  // ← 先頭で開始
?>
<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'GOTO KON-KANA KINGDOM WINERY & RESORT';
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
	  <img src="<?= asset('/_assets/images/conkana/hero.webp?2') ?>" alt="">
	</div>
	
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/forest.svg') ?>"
		 alt="GOTO KON-KANA KINGDOM WINERY & RESORT"> -->
  </section>
<div class="gtn-hero__lead">
	<p class="gtn-hero__copyL">極上のワインと共に心安らぐひとときを。</p>
	<p class="gtn-hero__brand notranslate">GOTO KON-KANA KINGDOM WINERY &amp; RESORT</p>
  </div>
  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms" style="padding: 60px 50px 60px 0px;">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/conkana/sec1-1.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/conkana/sec1-2.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p data-i18n>長崎空港からわずか３０分(ジェットフォイルで９０分)で到着するこの島には</p>
			<p>五島コン カナ王国」という特別なリゾートがあります。</p>
			<p>都市の喧噪を離れ、美しい自然と、美味な る食を楽しむ休息の場所。</p>
			<p>遊んで、食べて、癒されて。</p>
			<p>五島コンカナ王国で上質なリラクゼーションをご体感下さい。</p>
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
		<img src="<?= asset('/_assets/images/conkana/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">五島の大自然に育まれた海の幸、山の幸。</h2>
		<div class="dining-lead">
		<p>旅の大きな楽しみのひとつは、旬の地の食材を味わうこと。いつもとは異なる、旅先ならではの食の彩りが、非日常へと誘ってくれる。</p>
		<p>大自然に育まれた山海の幸に、自然と笑顔もあふれ出します。</p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/conkana/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/conkana/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/conkana/sec2-4.webp') ?>" alt="">
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/conkana/sec2-5.webp') ?>" alt="">
		  </figure>
		</div> -->

		<!-- 3行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/conkana/sec2-8.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/conkana/sec2-7.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/conkana/sec2-6.webp') ?>" alt="">
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
		<img src="<?= asset('/_assets/images/conkana/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/conkana/sec3-2.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/conkana/sec3-3.webp') ?>" alt="">
		</figure>
		<!-- <figure class="tri">
		  <img src="<?= asset('/_assets/images/conkana/sec3-4.webp') ?>" alt="">
		</figure> -->
	  </div>

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">大自然を五感で感じられる特別な時間。</h2>
		<div class="breeze-body">
		  <p>宿泊者専用の屋外プール。ひんやりとした心地良い水に身体をくつろがせる。太陽のきらめき萌える緑の香り。</p>
			<p>鬼岳温泉は、豊かな自然に囲まれた天然温泉。褐色の濁り湯が身体に優しく、露天風呂や内湯、うたせ湯、サウナなど多彩な湯船で心安らぐひとときを。</p>
			<p>また、五島ワイナリーでは五島の自然が育てた原料ぶどうを使用したワインが、サクラアワード2025で受賞。</p>
			<p>島民たちの情熱と大地への感謝を込めて熟成された葡萄。良質な栽培によって育まれた味わいは、</p>
			<p>教会の鐘の音色のように、心を浄化し、深く体のすみずみへ響き渡ります。</p>
		</div>
	  </div>

	</div>
  </section>
  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
	<!-- <div class="gtn-divider gtn-divider--back1"></div> -->

  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--stay" style="padding-top:0;">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（客室のワイド写真） -->
	  <figure class="stay-hero">
		<img src="<?= asset('/_assets/images/conkana/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">休息のひと時にも王国のくつろぎを。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>青い空が夕暮れ色に染まり、幾千物星たちが輝き始める夜。</p>
		<p>済んだ空気を深く呼吸すると、身体の隅々まで細胞が目覚めていくよう。風や、鳥や、虫の声を聞き、大自然に抱かれるくつろぎのひと時</p>
		<p>それは、ここを訪れた人だけが味わえる贅沢なひと時なのです。</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/conkana/sec4-2.webp') ?>" alt="">
		</figure>
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/conkana/sec4-3.webp') ?>" alt="">
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
		  <div>ジュニアスイート（DTX）</div>
		  <div>36</div>
		  <div>3室</div>
		  <div>1～2名</div>
		  <div>ツイン　1100×2020</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>ジュニアスイート（DTX）</div>
		  <div>53</div>
		  <div>1室</div>
		  <div>1～3名</div>
		  <div>ツイン　1100×2020　1台　1800×2020　1台</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックスコテージ（COT）</div>
		  <div>67</div>
		  <div>4室</div>
		  <div>1～4名</div>
		  <div>フォース　1100×2020　4台</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックスコテージ（COT）</div>
		  <div>58</div>
		  <div>2室</div>
		  <div>1～5名</div>
		  <div>フォース　1100×2020　4台　エキストラベッド対応可</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>丸太コテージ（MCO）ペット可</div>
		  <div>42</div>
		  <div>4室</div>
		  <div>1～4名</div>
		  <div>フォース　1100×2020　2台　1000×1950　2台</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>丸太コテージ（MCO）ペット可</div>
		  <div>50</div>
		  <div>1室</div>
		  <div>1～4名</div>
		  <div>ツイン　1100×2020　2台　和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>フラワーコテージ（FCO）</div>
		  <div>50</div>
		  <div>3室</div>
		  <div>1～4名</div>
		  <div>フォース　1100×2020　4台</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>スタンダードコテージ（OTH）</div>
		  <div>46</div>
		  <div>1室</div>
		  <div>1～4名</div>
		  <div>フォース 1100×2020　2台　1220×1950　2台</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>和洋室（OTH）</div>
		  <div>42</div>
		  <div>1室</div>
		  <div>1～5名</div>
		  <div>ツイン　1230×1950　2台　和布団</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>特別和洋室</div>
		  <div>81</div>
		  <div>2室</div>
		  <div>1～6名</div>
		  <div>ツイン　1800×2020　和布団</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>温泉横ツイン（OTW）</div>
		  <div>34</div>
		  <div>2室</div>
		  <div>1～3名</div>
		  <div>ツイン　1200×1950　1台　1800×2020　1台　エキストラベッド</div>
		</div>
		
		<div class="spec-row spec-grid">
		  <div>温泉横ツイン（OTW）</div>
		  <div>34</div>
		  <div>1室</div>
		  <div>1～2名</div>
		  <div>ツイン　1200×1950</div>
		</div>


		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式サイト
		  <a href="https://conkana.jp" target="_blank" rel="noopener" class="hpLink">https://conkana.jp</a></p><br>
		  <span class="mark">■</span>
			〒853-0013	長崎県五島市上大津町2413
			<a href="https://maps.app.goo.gl/5bvSCybZwHFpVubv7" class="map" target="_blank" rel="noopener">(GoogleMap<img src="<?= asset('/_assets/images/window.svg') ?>" alt="別ウィンドウ" class="iconwindow" style="display: inline-block;">)</a>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
<?php i18n_end(); ?>
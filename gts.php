<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'Garden Terrace Saga';
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
	  <img src="<?= asset('/_assets/images/gts/hero.webp') ?>" alt="">
	</div>
	<div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">まだ見たことのない特別な長崎に逢える場所。</p>
	  <p class="gtn-hero__brand">GARDEN TERRACE NAGASAKI HOTELS &amp; RESORTS</p>
	</div>
	<!-- 右上ロゴ -->
	<img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/saga.svg') ?>"
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
		  <img src="<?= asset('/_assets/images/gts/sec1-2.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/gts/sec1-1.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p>客室は全て目の前に長崎港が広がるオーシャンビューで、大小様々な窓を配置し、そこから見える長崎の風景をまるで一枚の絵画にしたように楽しめるようにしました。</p>
			<p>非日常感あふれるシティリゾートの時間を、別荘感覚で堪能していただけます。バスルームからのぞむ港の夜景も格別です。</p>
			<p>宿泊者だけに許される贅沢をお楽しみください。</p>
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
		<img src="<?= asset('/_assets/images/gts/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">彩り豊かな長崎の食文化を五感で味わう。</h2>
		<div class="dining-lead">
		  <p>海の幸・山の幸に恵まれた長崎の旬を、港を望むオーシャンビューとともにゆったりとご賞味ください。</p>
		  <p>四季折々の恵みを活かしたアートと調和したメニューの数々。</p>
		  <p>窓側に開いた設えは、港の風景を切り取る「額縁」となり、港と晩景オーシャンビューをお食事とともにお楽しみいただけます。</p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gts/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gts/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gts/sec2-4.webp') ?>" alt="レストラン フォレスト">
			<figcaption>レストラン「フォレスト」</figcaption>
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gts/sec2-5.webp') ?>" alt="九州創作 千山万水">
			<figcaption>九州創作「千山万水」</figcaption>
		  </figure>
		</div>

		<!-- 3行目：横長3枚（キャプションあり） -->
		<div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gts/sec2-8.webp') ?>" alt="鉄板焼ダイニング 竹彩">
			<figcaption>鉄板焼ダイニング「竹彩」</figcaption>
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gts/sec2-7.webp') ?>" alt="鮨ダイニング 天空">
			<figcaption>鮨ダイニング「天空」</figcaption>
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gts/sec2-6.webp') ?>" alt="懐石料理と天ぷら 秋月">
			<figcaption>懐石料理と天ぷら「秋月」</figcaption>
		  </figure>
		</div>

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
		<img src="<?= asset('/_assets/images/gts/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gts/sec3-2.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gts/sec3-3.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gts/sec3-4.webp') ?>" alt="">
		</figure>
	  </div>

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">心地よい風 澄み渡る空がリゾートタイムを演出</h2>
		<div class="breeze-body">
		  <p>長崎港や市街地の街並みを望む全長20mのインフィニティプール。無垢のウッドデッキにジャグジー、ソファセットなどが整備され、</p>
		  <p>日中は海と空、プールが一つになり、まるで海外のリゾートホテルをイメージさせる癒しの空間が創出されます。</p>
		  <p>夕暮れ時以降は、世界新三大夜景に認定された長崎の夜景が目の前に広がり、ロマンチックで感動的な世界に包まれます。</p>
		  <p>ジムとサウナでは眼下に広がる長崎の景色を眺めながら運動やサウナ体験を楽しみたい方におすすめです。</p>
		  <p>心地よい汗を流して日頃の疲れを癒し、心身ともにリフレッシュ。</p>
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
		<img src="<?= asset('/_assets/images/gts/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">その滞在は上質の本質を知るひと時となる。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>長崎の街を一望できるテラスを構えた新館ロイヤルテラスの高層階に位置するラグジュアリールーム「プレミアムハーバースイート」。</p>
		<p>本館のほかに2棟ある「離れ」の宿泊棟「オーシャンスイート」「タワースイート」。</p>
		<p>シンプルな装飾の室内空間に、立体的に彫り込まれた印象的な天井や、海側に開放感あふれるテラスを構えたラグジュアリーな空間。</p>
		<p>扉を開くと、海側に大きく開いた窓が目に飛び込み、時間の経過や季節の移ろいとともに表情を変える景色を楽しめます。</p>
		<p>落ち着いた空間で過ごすホテルステイで、あなただけの上質なひとときをお約束します。</p>
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
		  <div>スタンダードツイン</div>
		  <div>24.7</div>
		  <div>11室</div>
		  <div>1～2名</div>
		  <div>ツイン　1100×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>スタンダードテラス</div>
		  <div>27.6</div>
		  <div>1室</div>
		  <div>1～2名</div>
		  <div>ツイン　1100×1950</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>デラックスツイン</div>
		  <div>37</div>
		  <div>12室</div>
		  <div>1～3名</div>
		  <div>ツイン　1400×2000+エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>テラスツイン</div>
		  <div>38</div>
		  <div>3室</div>
		  <div>1～4名</div>
		  <div>ツイン　1400×2000+エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>スイートルーム</div>
		  <div>68.1</div>
		  <div>1室</div>
		  <div>1～5名</div>
		  <div>ツイン　1400×2000+エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid" style="display: none">
		  <div>プレミアムハーバースイート</div>
		  <div>50</div>
		  <div>6室</div>
		  <div>1〜3名</div>
		  <div>ツイン 1400×2000＋エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid" style="display: none">
		  <div>ロイヤルスイート</div>
		  <div>100</div>
		  <div>1室</div>
		  <div>1〜3名</div>
		  <div>ツイン 1400×2000＋エキストラベッド</div>
		</div>

		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://www.gt-nagasaki.jp/" target="_blank" rel="noopener">https://www.gt-nagasaki.jp/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
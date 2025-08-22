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
	  <img src="<?= asset('/_assets/images/gts/hero.webp?1') ?>" alt="">
	</div>
	<div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">寛ぎのひとときと、「ここにしかない」体験を。</p>
	  <p class="gtn-hero__brand">GARDEN TERRACE SAGA HOTELS &amp; RESORTS</p>
	</div>
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/saga.svg') ?>"
		 alt="Garden Terrace Saga"> -->
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms" style="padding: 60px 50px 60px 0px;">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/gts/sec1-2.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS" style="display: none;">
			<img src="<?= asset('/_assets/images/gts/sec1-1.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p>世界中どこにいても、欲しいものは手に入る時代。</p>
			<p>だからこそ、その場所に行き自分で直に体験することが、本物の贅沢なのかもしれません。</p> 
			<p>佐賀には ” ここにしかないもの ” がたくさんあります。</p>
			<p>多くの人の舌をうならせる、極上の食材を使った料理。知的好奇心を揺さぶる歴史や遺産。</p> 
			<p>脈々と受け継がれてきた伝統の技。そして、大空を埋め尽くす世界中のバルーンたち...。 </p>
			<p>わたしたちは、そのような価値ある時間を過ごすお客様に寄り添い、</p>
			<p>長年培ってきたホスピタリティーできめ細やかなおもてなしをいたします。 </p>
			<p>人と人とのあたたかなふれあいと、非日常的な時間。それを次に体験するのは、あなたです。</p>
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
  <section class="gtn-sec gtn-sec--dining">
	<div class="gtn-wrap">

	  <!-- ワイドビジュアル -->
	  <figure class="dining-hero">
		<img src="<?= asset('/_assets/images/gts/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">すぐそばにある、贅沢な空間。</h2>
		<div class="dining-lead">
			<p>鉄板焼ダイニング「佐賀竹彩」</p>
			<p> 美しい竹林に囲まれて、柔らかな光と色彩に包まれた空間。</p> <p>「竹」と「彩」で演出されたダイニングでは佐賀が誇るブランド食材を使った逸品や、</p>
			<p>佐賀でしか味わえない旬な魚介類をご堪能できます。鉄板の上で繰り広げられる専属シェフと食材との最上のおもてなし。</p> 
			<p>舌だけではなく、五感すべてを刺激する料理で、感動を覚える特別な時間を演出します。</p>
			<p>地元佐賀で育ったお米や佐賀牛をはじめ、減農薬で育てられた新鮮な野菜など、</p> <p>世界に誇る佐賀ブランドを佐賀で食してください。</p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gts/sec2-2.webp') ?>" alt="鉄板焼ダイニング「佐賀竹彩」">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gts/sec2-3.webp') ?>" alt="鉄板焼ダイニング「佐賀竹彩」">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gts/sec2-4.webp') ?>" alt="レストラン フォレスト">
			<figcaption>レストラン「フォレスト」</figcaption>
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gts/sec2-5.webp') ?>" alt="九州創作 千山万水">
			<figcaption>九州創作「千山万水」</figcaption>
		  </figure>
		</div> -->

		<!-- 3行目：横長3枚（キャプションあり） -->
		<div class="dining-row row-3wide" style="gap:0;">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gts/sec2-8.webp') ?>" alt="鉄板焼ダイニング「佐賀竹彩」">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gts/sec2-7.webp') ?>" alt="鉄板焼ダイニング「佐賀竹彩」">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/gts/sec2-6.webp') ?>" alt="鉄板焼ダイニング「佐賀竹彩」">
		  </figure>
		</div>
		
		<!-- 右：小写真 + 本文 -->
		<div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/gts/sec2-4.webp') ?>" alt="チャイニーズ レストラン シャンリー">
		  </figure>
		  <div class="card">
			<p>チャイニーズ レストラン シャンリー</p>
			<p>日本に中国料理を普及させた“ 四川料理の父 ” 陳建民氏の下で修業を積んだ</p>
			<p>立岡池敏が2000年に開業。四川料理をベースに各地の料理の良さも取り入れ、</p>
			<p>素材にこだわり多様な技法と複 雑な調味 料を駆使して</p>
			<p>豊かな風味と絶妙な味わいを形成する シャンリーの中国料理をお楽しみください。</p>
		  </div>
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
		<img src="<?= asset('/_assets/images/gts/sec3-1.webp') ?>" alt="ラウンジ">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gts/sec3-2.webp') ?>" alt="サウナ">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gts/sec3-3.webp') ?>" alt="テラス">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gts/sec3-4.webp') ?>" alt="テラス">
		</figure>
	  </div>

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">緑豊かなテラスで心地よい風を感じながらリフレッシュ</h2>
		<div class="breeze-body">
		  	<p>宿泊者のみ利用できる、プライベートな宿泊者専用クラブラウンジ。</p>
			<p>佐賀産にこだわったTea Bar（嬉野紅茶）や日本酒Bar。ドリンクやフードを無料でお楽しみいただけます。</p>
			<p>ブックラックには九州にゆかりのある作家の本を取り揃え、大切な方とのひと時をゆっくりとお過ごし下さい。</p>
			<p>宿泊者専用のジムとサウナではプライベートで運動やサウナを楽しみたい方におすすめです</p>
			<p>テラスでは季節の移ろいとともに木々が様々な様相を見せてくれます。</p>
			<p>心地よい汗を流して日頃の疲れを癒し、心身ともにリフレッシュしてください。</p>
		</div>
	  </div>

	</div>
  </section>
  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
	<!-- <div class="gtn-divider gtn-divider--back1"></div> -->

  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--stay" style="margin-top: 0;">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（客室のワイド写真） -->
	  <figure class="stay-hero">
		<img src="<?= asset('/_assets/images/gts/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">星空が降り注ぐ極上のスイート。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>最上階のスイートルームは、洗練された最上級のスイートです。 ジャグジーで癒やされながら、満天の星空を眺めるプライベートテラスは 贅沢な空間。</p>
		<p>佐賀の地で特別な体験を可能にする極上のスイートです。また、テラスツインルームでもジャグジーでおくつろぎいただけます。</p>
		<p>ガーデンテラスで培ってきたホスピタリティと開放感のある空間が融合して完成する贅沢なひととき。</p> 
		<p>心と体を癒やすホテルステイで、あなただけの上質な空間をお楽しみ下さい。</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/gts/sec4-2.webp') ?>" alt="">
		</figure>
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/gts/sec4-3.webp') ?>" alt="">
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

		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://www.gt-saga.jp/" target="_blank" rel="noopener">https://www.gt-saga.jp/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
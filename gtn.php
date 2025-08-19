<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'Garden Terrace Nagasaki';
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
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	</div>
	<div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">まだ見たことのない特別な長崎に逢える場所。,</p>
	  <p class="gtn-hero__brand">GARDEN TERRACE NAGASAKI HOTELS &amp; RESORTS</p>
	</div>
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
<!-- ===== Rooms Section (PDF 1段目の構成) ===== -->
  <section class="gtn-sec gtn-sec--rooms">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		</figure>
  
		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<!-- ※テキストはPDFに合わせて後で差し替えてください -->
			<p>客室は全て目の前に長崎港が広がるオーシャンビューで、大小様々な窓を配置し、そこから見える長崎の風景をまるで一枚の絵画にしたように楽しめるようにしました。</p>
			<p>非日常感あふれるシティリゾートの時間を、別荘感覚で堪能していただけます。バスルームからのぞむ港の夜景も格別です。</p>
			<p>宿泊者だけに許される贅沢をお楽しみください。</p>
		  </div>
		</div>
	  </div>
  
	  <!-- 下：デコ矩形（2段） -->
	  <div class="rooms-deco">
		<!-- 1段目（大きめ） -->
		<div class="deco-row deco-row--lg">
		  <span class="box box-a"></span>
		  <span class="box box-b"></span>
		  <span class="box box-c"></span>
		  <span class="box box-d"></span>
		  <span class="box box-e"></span>
		</div>
		<!-- 2段目（小さめ・多め） -->
		<div class="deco-row deco-row--sm">
		  <span class="box"></span>
		  <span class="box"></span>
		  <span class="box"></span>
		  <span class="box"></span>
		  <span class="box"></span>
		  <span class="box"></span>
		  <span class="box"></span>
		  <span class="box"></span>
		</div>
	  </div>
	</div>
  </section>

  <!-- =========================
	   SECTION 2：ダイニング（リード＋本文＋サムネ）
  ========================== -->
<!-- ===== Section 2: DINING ===== -->
  <section class="gtn-sec gtn-sec--dining">
	<div class="gtn-wrap">
  
	  <!-- ワイドビジュアル -->
	  <figure class="dining-hero">
		<img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  </figure>
  
	  <!-- 見出し + 説明文 -->
	  <div class="dining-head">
		<h2 class="dining-title">彩り豊かな長崎の食文化を五感で味わう。</h2>
		<div class="dining-lead">
		  <p>海の幸・山の幸に恵まれた長崎の旬を、港を望むオーシャンビューとともにゆったりとご賞味ください。</p>
		  <p>四季折々の恵みを活かしたアートと調和したメニューの数々。</p>
		  <p>窓側に開いた設えは、港の風景を切り取る「額縁」となり、港と晩景オーシャンビューをお食事とともにお楽しみいただけます。</p>
		</div>
	  </div>
  
	  <!-- 上段：2カラムの料理写真 -->
	  <div class="dining-grid dining-grid--two">
		<figure class="card">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		  <figcaption>レストラン「フォレスト」</figcaption>
		</figure>
		<figure class="card">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		  <figcaption>九州創作「千山万水」</figcaption>
		</figure>
	  </div>
  
	  <!-- 下段：3カラム（カウンター系） -->
	  <div class="dining-grid dining-grid--three">
		<figure class="card">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		  <figcaption>鉄板焼ダイニング「竹彩」</figcaption>
		</figure>
		<figure class="card">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		  <figcaption>鮨ダイニング「天空」</figcaption>
		</figure>
		<figure class="card">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		  <figcaption>懐石料理と天ぷら「秋月」</figcaption>
		</figure>
	  </div>
  
	</div>
  </section>
  <!-- =========================
	   SECTION 3：プール・スパ・ジム
  ========================== -->
<!-- ===== Section 3: BREEZE / POOL ===== -->
  <section class="gtn-sec gtn-sec--breeze">
	<div class="gtn-wrap">
  
	  <!-- 上：ワイド（プールの俯瞰） -->
	  <figure class="breeze-hero">
		<img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  </figure>
  
	  <!-- 中：3枚横並び（ラウンジ／ジム／サウナ） -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
		</figure>
	  </div>
  
	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">心地よい風 澄み渡る空がリゾートタイムを演出</h2>
		<div class="breeze-body">
		  <!-- ★PDFの本文をそのまま行ごとに<p>で貼り付けてください -->
		  <p>（PDF本文：1段落）</p>
		  <p>（PDF本文：2段落）</p>
		  <p>（PDF本文：3段落）</p>
		  <p>（PDF本文：4段落）</p>
		  <p>（PDF本文：5段落）</p>
		</div>
	  </div>
  
	</div>
  </section>
  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--quality">
	<div class="gtn-sec__grid gtn-sec__grid--reverse">
	  <figure class="gtn-sec__img"><img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt=""></figure>
	  <div class="gtn-sec__txt">
		<h2>その部屋は上質の本質を知るひと時となる。</h2>
		<p>長崎の街を一望できるテラスを構えた新館ロイヤルテラスの高層階に位置するラグジュアリールーム「プレミアムハーバースイート」。</p>
		<p>本館のほかに 2 棟ある「離れ」の宿泊棟「オーシャンスイート」「タワースイート」。</p>
		<p>シンプルな装飾の室内空間に、立体的に彫り込まれた印象的な天井や、海側に開放感あふれるテラスを構えたラグジュアリーな空間。扉を開くと、海側に大きく開いた窓が目に飛び込み、時間の経過や季節の移ろいとともに表情を変える景色を楽しめます。落ち着いた空間で過ごすホテルステイで、あなただけの上質なひとときをお約束します。</p>
	  </div>
	</div>

	<div class="gtn-box gtn-box--columns">
	  <div class="gtn-box__col">
		<h3>■ 客室タイプ</h3>
		<ul class="gtn-list">
		  <li>オーシャンビュー和洋室</li>
		  <li>和洋室</li>
		  <li>デラックスツイン</li>
		  <li>和室（ベッドタイプ）</li>
		</ul>
	  </div>
	  <div class="gtn-box__col">
		<h3>■ 宿泊プラン</h3>
		<ul class="gtn-list">
		  <li>二食付き（和洋中ビュッフェ）</li>
		  <li>朝食付き（和洋中ビュッフェ）</li>
		  <li class="gtn-note">※夕食は含まれません。宿泊日当日追加金額のお支払いで夕食追加の変更も可能です。</li>
		  <li class="gtn-note">※お食事は本館 1 階「ビュッフェダイニング THE ONE」にてご提供いたします。</li>
		</ul>
	  </div>
	</div>

	<p class="gtn-checktimes">
	  チェックイン / 15：00 ー 22：00　　チェックアウト / 11：00
	</p>
  </section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
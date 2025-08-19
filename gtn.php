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
	  <p class="gtn-hero__copyL">まだ見たことのない特別な長崎に逢える場所。</p>
	  <p class="gtn-hero__brand">GARDEN TERRACE NAGASAKI HOTELS &amp; RESORTS</p>
	</div>
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms">
	<div class="gtn-sec__grid">
	  <figure class="gtn-sec__img"><img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt=""></figure>
	  <figure class="gtn-sec__img"><img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt=""></figure>

	  <div class="gtn-sec__txt">
		<p>客室は全て目の前に長崎港が広がるオーシャンビューで、大小様々な窓を配置し、そこから見える長崎の風景をまるで一枚の絵画にしたように楽しめるようにしました。</p>
		<p>非日常感あふれるシティーリゾートの時間を、別荘感覚で堪能していただけます。バスルームからのぞむ港の夜景も格別です。</p>
		<p>宿泊者だけに許される贅沢な寛ぎをお楽しみください。</p>
	  </div>
	</div>
  </section>

  <!-- =========================
	   SECTION 2：ダイニング（リード＋本文＋サムネ）
  ========================== -->
  <section class="gtn-sec gtn-sec--dining-lead">
	<div class="gtn-sec__fullimg">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	</div>

	<div class="gtn-sec__heading">
	  <h2>彩り豊かな長崎の食文化を五感で味わう。</h2>
	</div>

	<div class="gtn-sec__txt gtn-sec__txt--narrow">
	  <p>海の幸山の幸に恵まれた長崎ならではの旬の食材を長崎の街の光が映し込む 長崎港を眺めながらじっくりとご賞味下さい。</p>
	  <p>四季折々の旬の味覚を活かしたアートと呼ぶに相応しいメニューの数々。</p>
	  <p>海側に開いた窓は、長崎の風景を切り取る「額縁」となり、 港を見渡すオーシャンビューをお食事とともにお楽しみいただけます。</p>
	</div>

	<div class="gtn-sec__thumbs">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	</div>

	<ul class="gtn-list gtn-list--restaurants">
	  <li>鉄板焼ダイニング「竹彩」</li>
	  <li>レストラン「フォレスト」</li>
	  <li>鮨ダイニング「天空」</li>
	  <li>懐石料理と天ぷら「秋月」</li>
	  <li>九州創作「千山万水」</li>
	</ul>
  </section>

  <!-- =========================
	   SECTION 3：プール・スパ・ジム
  ========================== -->
  <section class="gtn-sec gtn-sec--pool">
	<div class="gtn-sec__wideimg"><img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt=""></div>

	<div class="gtn-sec__txt gtn-sec__txt--narrow">
	  <h2>心地よい風 澄み渡る空がリゾートタイムを演出</h2>
	  <p>長崎港や市街地の街並みを望む全長 20m のインフィニティプール。無垢のウッドデッキにジャグジー、ソファセットなどが整備され、日中は海と空、プールが一つになり、まるで海外のリゾートホテルをイメージさせる癒しの空間が創出されます。</p>
	  <p>夕暮れ時以降は、世界新三大夜景に認定された長崎の夜景が目の前に広がり、ロマンチックで感動的な世界に包まれます。</p>
	  <p>ジムとサウナでは眼下に広がる長崎の景色を眺めながら運動やサウナ体験を楽しみたい方におすすめです。心地よい汗を流して日頃の疲れを癒し、心身ともにリフレッシュ。</p>
	</div>

	<div class="gtn-sec__thumbs">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
	  <img src="<?= asset('/_assets/images/dummy.jpg') ?>" alt="">
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
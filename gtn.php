<?php
// Garden Terrace Nagasaki — PDF完全準拠版（見出しなし・SEOタグなし）
$pageTitle = 'Garden Terrace Nagasaki';
$pageDesc  = 'Garden Terrace Nagasaki';
require __DIR__.'/partials/head.php';
?>
<link rel="stylesheet" href="<?= asset('/_assets/css/gtn.css') ?>">
<?php require __DIR__.'/partials/header.php'; ?>

<main id="gtn">

  <!-- HERO：PDFのまま（写真＋右上ロゴ＋下部コピー） -->
  <section class="gtn-hero gtn-hero--image">
	<img class="gtn-hero__img"
		 src="<?= asset('/_assets/images/gtn/hero.jpg') ?>"
		 alt="">
	<!-- 右上ロゴ（PDFの小さなホテルロゴ） -->
	<img class="gtn-hero__brand"
		 src="<?= asset('/_assets/svg/nagasaki.svg') ?>"
		 alt="">
	<!-- 下部コピー（中央寄せ／2段） -->
	<div class="gtn-hero__caption">
	  <p class="copy-ja">まだ見たことのない特別な長崎に逢える場所。</p>
	  <p class="copy-en">GARDEN TERRACE NAGASAKI HOTELS & RESORTS</p>
	</div>
	<!-- 読みやすさ用の下部グラデ（PDFの印象どおり） -->
	<div class="gtn-hero__bottomGrad" aria-hidden="true"></div>
  </section>

  <!-- セクション1（CONCEPT相当・見出し無し） -->
  <section class="gtn-section">
	<div class="gtn-box">
	  <p>
		まだ見たことのない特別な長崎に逢える場所。彩り豊かな長崎の食文化を、五感で味わうシティリゾート。<br>
		客室はすべてオーシャンビュー。大小さまざまな窓が切り取る港町の風景は、まるで一枚の絵画のよう。バスルームから眺める夜景も格別です。<br>
		非日常のくつろぎを、別荘感覚でお楽しみください。
	  </p>
	</div>
  </section>

  <!-- セクション2（DINING相当・見出し無し） -->
  <section class="gtn-section">
	<div class="gtn-box">
	  <p>
		海の幸・山の幸に恵まれた長崎の旬を、港を望むオーシャンビューとともに。四季の恵みをアートのように仕立てたメニューをご用意しています。
	  </p>
	  <ul class="gtn-list">
		<li>鉄板焼ダイニング「竹彩」</li>
		<li>レストラン「フォレスト」</li>
		<li>鮨ダイニング「天空」</li>
		<li>懐石料理と天ぷら「秋月」</li>
		<li>九州創作「千山万水」</li>
	  </ul>
	</div>
  </section>

  <!-- セクション3（POOL / GYM & SAUNA相当・見出し無し） -->
  <section class="gtn-section">
	<div class="gtn-box">
	  <p>
		長崎港と市街地を一望できる全長20mのインフィニティプール。無垢のウッドデッキ、ジャグジー、ソファセットを備え、<br>
		日中は海と空とプールが溶け合うリゾート体験を、夕景以降は世界新三大夜景に包まれるロマンティックな時間を演出します。
	  </p>
	  <p>
		ジム＆サウナでは、眼下に広がる景色を眺めながらワークアウトやサウナをご体験いただけます。心地よい汗で心身ともにリフレッシュ。
	  </p>
	</div>
  </section>

  <!-- セクション4（ROOMS相当・見出し無し） -->
  <section class="gtn-section">
	<div class="gtn-box">
	  <p>
		新館ロイヤルテラス高層階のラグジュアリールーム「プレミアムハーバースイート」、離れ棟「オーシャンスイート」「タワースイート」など、<br>
		海側に開いたテラスと印象的な天井が生む開放感。時間とともに表情を変える港の眺めと、静謐でラグジュアリーな滞在をお届けします。
	  </p>

	  <div class="gtn-cols">
		<div>
		  <ul class="gtn-list">
			<li>オーシャンビュー和洋室</li>
			<li>和洋室</li>
			<li>デラックスツイン</li>
			<li>和室（ベッドタイプ）</li>
		  </ul>
		</div>
		<div>
		  <ul class="gtn-list">
			<li>二食付き（和洋中ビュッフェ）</li>
			<li>朝食付き（和洋中ビュッフェ）</li>
		  </ul>
		  <p class="gtn-note">
			※夕食は含まれません。チェックイン当日に追加料金のお支払いで夕食の追加変更が可能です。<br>
			※お食事は本館1階「ビュッフェダイニング THE ONE」にてご提供します。
		  </p>
		</div>
	  </div>

	  <p class="gtn-meta">Check-in 15:00–22:00 ／ Check-out 11:00</p>
	</div>
  </section>

  <!-- 予約CTA（PDFに相当する控えめボタン） -->
  <section class="gtn-section">
	<div class="gtn-cta">
	  <a class="gtn-btn" href="/reserve.php">予約ページへ</a>
	</div>
  </section>

</main>

<?php require __DIR__.'/partials/footer.php'; ?>
<?php require __DIR__.'/partials/scripts.php'; ?>
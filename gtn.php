<?php include __DIR__ . '/partials/header.php'; ?>
<link rel="stylesheet" href="/_assets/css/gtn.css" />

<main class="gtn">

  <!-- ===== HERO（PDF冒頭の全面ビジュアル＋必要なら下部コピー） ===== -->
  <section class="gtn-hero">
	<img src="/_assets/images/dummy.jpg" alt="">
	<!-- ▼PDFの冒頭コピーがある場合のみ、この中に原文をそのまま貼ってください -->
	<div class="gtn-hero-copy">
	  <!-- ここにPDF原文（例：1～2行のキャッチ）をそのまま貼る -->
	</div>
  </section>

  <!-- ===== ブロックA：左 大画像 ／ 右 画像＋短文 ===== -->
  <section class="gtn-twoCols gtn-blockA">
	<!-- 左：大画像 -->
	<figure class="gtn-fig">
	  <img src="/_assets/images/dummy.jpg" alt="">
	</figure>

	<!-- 右：上 画像、下 テキスト（PDFの短文そのまま） -->
	<div class="gtn-side">
	  <figure class="gtn-fig">
		<img src="/_assets/images/dummy.jpg" alt="">
	  </figure>
	  <div class="gtn-note">
		<!-- ここにPDF原文（右側の短文）をそのまま貼る -->
	  </div>
	</div>
  </section>

  <!-- ===== デコレーション行（小さな角丸ボックスが横並び） ===== -->
  <section class="gtn-deco" aria-hidden="true">
	<i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
	<i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
  </section>

  <!-- ===== 横いっぱいのワイドビジュアル（例：ダイニング） ===== -->
  <section class="gtn-wide">
	<img src="/_assets/images/dummy.jpg" alt="">
	<!-- キャプションがPDFにある場合のみ使用 -->
	<div class="gtn-wide-caption">
	  <!-- ここにPDF原文（キャプション等）があれば貼る。無ければ空のままでOK -->
	</div>
  </section>

  <!-- ▼PDFに後続ブロックがある場合は、同じ要領で以下に積み増ししてください。 -->
  <!--
  <section class="gtn-twoCols">
	...
  </section>
  -->

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
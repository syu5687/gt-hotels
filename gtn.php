<?php
// Garden Terrace Nagasaki (GTN) — PDF準拠：セクション見出しなし
$pageTitle = 'Garden Terrace Nagasaki';
$pageDesc  = 'Garden Terrace Nagasaki';
require __DIR__.'/partials/head.php';
?>
<link rel="stylesheet" href="<?= asset('/_assets/css/gtn.css') ?>">
<?php require __DIR__.'/partials/header.php'; ?>

<main id="gtn">

  <!-- HERO（PDFどおり：2行タイトル＋再生ボタン＋落ち影） -->
  <section class="gtn-hero">
	<video id="gtnVideo" class="gtn-hero__video"
		   src="<?= asset('/_assets/media/gtn-hero.mp4') ?>"
		   poster="<?= asset('/_assets/images/gtn/hero.jpg') ?>"
		   preload="auto" playsinline muted></video>
	<div class="gtn-hero__overlay"></div>
	<h1 class="gtn-hero__title">
	  <span>TERRACE</span>
	  <span>NAGASAKI</span>
	</h1>
	<button class="gtn-hero__play" id="gtnPlay" aria-label="Play / Pause">
	  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
	</button>
	<div class="gtn-hero__shadow" aria-hidden="true"></div>
  </section>

  <!-- セクション 1（CONCEPT 相当：見出しなし） -->
  <section class="gtn-section">
	<div class="gtn-box">
	  <p>
		まだ見たことのない特別な長崎に逢える場所。彩り豊かな長崎の食文化を、五感で味わうシティリゾート。<br>
		客室はすべてオーシャンビュー。大小さまざまな窓が切り取る港町の風景は、まるで一枚の絵画のよう。バスルームから眺める夜景も格別です。<br>
		非日常のくつろぎを、別荘感覚でお楽しみください。
	  </p>
	</div>
  </section>

  <!-- セクション 2（DINING 相当：見出しなし） -->
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

  <!-- セクション 3（POOL / GYM & SAUNA 相当：見出しなし） -->
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

  <!-- セクション 4（ROOMS 相当：見出しなし） -->
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

  <!-- 予約CTA（PDFでボタンがあれば） -->
  <section class="gtn-section">
	<div class="gtn-cta">
	  <a class="gtn-btn" href="/reserve.php">予約ページへ</a>
	</div>
  </section>

</main>

<?php require __DIR__.'/partials/footer.php'; ?>
<?php require __DIR__.'/partials/scripts.php'; ?>

<script>
  // 再生 / 一時停止（ヒーロー）
  const v = document.getElementById('gtnVideo');
  const p = document.getElementById('gtnPlay');
  let playing = false;
  p.addEventListener('click', () => {
	if(playing){ v.pause(); p.innerHTML = '<svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>'; }
	else{ v.play(); p.innerHTML = '<svg viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>'; }
	playing = !playing;
  }, {passive:true});
</script>
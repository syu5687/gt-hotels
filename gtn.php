<?php
// /gtn.php  Garden Terrace Nagasaki（GTN）
$pageTitle = 'Garden Terrace Nagasaki';
$pageDesc  = 'まだ見たことのない特別な長崎に逢える場所。全室オーシャンビュー、食・プール・ジム＆サウナ、ラグジュアリーな客室。';
require __DIR__.'/partials/head.php';
require __DIR__.'/partials/header.php';
?>
<main class="page">

  <!-- Hero -->
  <section class="hero">
	<!-- 必要なら専用動画/画像に差し替え：/_assets/media/gtn-hero.mp4 ／ /_assets/images/gtn-hero.jpg -->
	<video id="heroVideo" src="<?= asset('/_assets/media/hero.mp4') ?>" poster="<?= asset('/_assets/images/hero.jpg') ?>" preload="auto" playsinline></video>
	<div class="overlay"></div>
	<h1 class="hero-title">GARDEN TERRACE NAGASAKI</h1>
	<button class="play" id="playBtn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></button>
  </section>

  <!-- Intro -->
  <section class="section" id="about">
	<h3>CONCEPT</h3>
	<div class="content-stack" style="max-width: var(--maxw); margin: 0 auto; padding: 0 20px;">
	  <p style="letter-spacing:.04em; line-height:1.95;">
		まだ見たことのない特別な長崎に逢える場所。彩り豊かな長崎の食文化を、五感で味わうシティリゾート。<br>
		客室はすべてオーシャンビュー。大小さまざまな窓が切り取る港町の風景は、まるで一枚の絵画のよう。バスルームから眺める夜景も格別です。非日常のくつろぎを、別荘感覚でお楽しみください。
	  </p>
	</div>
  </section>

  <!-- Dining -->
  <section class="section" id="dining">
	<h3>DINING</h3>
	<div class="content-stack" style="max-width: var(--maxw); margin: 0 auto; padding: 0 20px;">
	  <p>
		海の幸・山の幸に恵まれた長崎の旬を、港を望むオーシャンビューとともに。四季の恵みをアートのように仕立てたメニューをご用意しています。
	  </p>
	  <ul class="bullet" style="margin: 14px 0 0 1em; line-height:1.9;">
		<li>鉄板焼ダイニング「竹彩」</li>
		<li>レストラン「フォレスト」</li>
		<li>鮨ダイニング「天空」</li>
		<li>懐石料理と天ぷら「秋月」</li>
		<li>九州創作「千山万水」</li>
	  </ul>
	</div>
  </section>

  <!-- Pool / Gym / Sauna -->
  <section class="section" id="relaxation">
	<h3>POOL / GYM &amp; SAUNA</h3>
	<div class="content-stack" style="max-width: var(--maxw); margin: 0 auto; padding: 0 20px;">
	  <p>
		長崎港と市街地を一望できる全長20mのインフィニティプール。無垢のウッドデッキ、ジャグジー、ソファセットを備え、日中は海と空とプールが溶け合うリゾート体験を、夕景以降は世界新三大夜景に包まれるロマンティックな時間を演出します。
	  </p>
	  <p>
		ジム＆サウナでは、眼下に広がる景色を眺めながらワークアウトやサウナをご体験いただけます。心地よい汗で心身ともにリフレッシュ。
	  </p>
	</div>
  </section>

  <!-- Rooms -->
  <section class="section" id="rooms">
	<h3>ROOMS</h3>
	<div class="content-grid" style="max-width: var(--maxw); margin: 0 auto; padding: 0 20px; display:grid; gap:18px;">
	  <p>
		新館ロイヤルテラス高層階のラグジュアリールーム「プレミアムハーバースイート」、離れ棟「オーシャンスイート」「タワースイート」など、海側に開いたテラスと印象的な天井が生む開放感。時間とともに表情を変える港の眺めと、静謐でラグジュアリーな滞在をお届けします。
	  </p>
	  <div>
		<strong>■ 客室タイプ</strong>
		<ul class="bullet" style="margin: 8px 0 0 1em; line-height:1.9;">
		  <li>オーシャンビュー和洋室</li>
		  <li>和洋室</li>
		  <li>デラックスツイン</li>
		  <li>和室（ベッドタイプ）</li>
		</ul>
	  </div>
	  <div>
		<strong>■ 宿泊プラン</strong>
		<ul class="bullet" style="margin: 8px 0 0 1em; line-height:1.9;">
		  <li>二食付き（和洋中ビュッフェ）</li>
		  <li>朝食付き（和洋中ビュッフェ）</li>
		</ul>
		<p style="font-size:12px; color:#777;">
		  ※夕食は含まれません。チェックイン当日に追加料金のお支払いで夕食の追加変更が可能です。<br>
		  ※お食事は本館1階「ビュッフェダイニング THE ONE」にてご提供します。
		</p>
	  </div>
	  <p>
		<strong>Check-in</strong> 15:00–22:00　／　<strong>Check-out</strong> 11:00
	  </p>
	</div>
  </section>

  <!-- CTA / Reserve -->
  <section class="section" id="reserve">
	<h3>RESERVATION</h3>
	<div class="content-stack" style="max-width: 760px; margin: 0 auto; padding: 0 20px; text-align:center;">
	  <p>最新の空室状況・料金はオンライン予約ページにてご確認ください。</p>
	  <p><a class="btn" href="/reserve.php" style="display:inline-block; padding:12px 22px; border:1px solid var(--line); border-radius:999px; text-decoration:none; letter-spacing:.14em;">予約ページへ</a></p>
	</div>
  </section>

</main>
<?php require __DIR__.'/partials/footer.php'; ?>
<?php require __DIR__.'/partials/scripts.php'; ?>
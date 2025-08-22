<?php
// ページ情報（index.cssは読み込まない運用。gtn.php → gtn.css を自動読込）
$pageTitle = 'ROYAL CHESTER NAGASAKI';
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
	  <img src="<?= asset('/_assets/images/rcn/hero.webp?2') ?>" alt="">
	</div>
	<!-- <div class="gtn-hero__lead">
	  <p class="gtn-hero__copyL">ヘルシー＆ビューティをコンセプトにしたアーバンリトリートホテル </p>
	  <p class="gtn-hero__brand">ROYAL CHESTER NAGASAKI HOTEL &amp; RETREAT</p>
	</div> -->
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/rcn.svg') ?>"
		 alt="ROYAL CHESTER NAGASAKI"> -->
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/rcn/sec1-1.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/rcn/sec1-2.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<p data-i18n>イギリスのプライベートガーデンをモチーフにした空中のジャグジー付きの</p>
			<p>ボタニカルガーデンスパに、自然をテーマにした二つのサウナ。</p>
			<p>オーガニックのドリンクや軽食がフリーで楽しめる宿泊者専用ラウンジ。</p>
			<p>美のプロフェッショナル「ReFa」の美容家電をすべてのお部屋に備えました。</p>
			<p>他にも、ヘルシー＆ビューティーをコンセプトにしたサービスをご用意します。</p>
			<p>ホテルから一歩も出ることなく、充実のリトリートステイが叶います。 </p>
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
		<img src="<?= asset('/_assets/images/rcn/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <div class="dining-head">
		<h2 class="dining-title">長崎の食材を贅沢に使ったクリエイティブな一皿。</h2>
		<div class="dining-lead">
		  <p>３つの海流がぶつかる豊かな海は、穫れる魚の種類日本一。「日本のサンセバスチャン」として注目を浴びる島原半島の野菜。</p>
			<p>旬の幸を贅沢に使ったジャパニーズモダンスタイルのお料理をお楽しみください </p>
		</div>
	  </div>

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/rcn/sec2-2.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<!-- <div class="dining-row row-2col">
		  <figure class="card">
			<img src="<?= asset('/_assets/images/rcn/sec2-4.webp') ?>" alt="">
		  </figure>
		  <figure class="card">
			<img src="<?= asset('/_assets/images/rcn/sec2-5.webp') ?>" alt="">
		  </figure>
		</div> -->

		<!-- 3行目：横長3枚（キャプションあり） -->
		<!-- <div class="dining-row row-3wide">
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/rcn/sec2-8.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/rcn/sec2-7.webp') ?>" alt="">
		  </figure>
		  <figure class="card wide">
			<img src="<?= asset('/_assets/images/rcn/sec2-6.webp') ?>" alt="">
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
		<img src="<?= asset('/_assets/images/rcn/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/rcn/sec3-2.webp?1') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/rcn/sec3-3.webp?1') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/rcn/sec3-4.webp?1') ?>" alt="">
		</figure>
	  </div>

	  <!-- タイトル＋本文 -->
	  <div class="breeze-head">
		<h2 class="breeze-title">ホテルから一歩も出ることなく、リトリートな時間を。</h2>
		<div class="breeze-body">
		  <p>ホテルでおこもりリトリートを叶える、宿泊者専用のラウンジ。
		  <p>旅をテーマにした本や写真集を楽しんだり、ラウンジのドリンクやスイーツをゆっくりとお楽しみいただけます。
		  <p>休日には、ピクニックや森林浴で、自然と一緒にリフレッシュするのがイギリススタイル。風景の中にある「木」と「石」をコンセプトにした
		  <p>2種のサウナでリフレッシュ。リラックス効果、そして温浴効果による血行促進でお肌の代謝もアップします。
		  <p>宿泊者専用のフィットネスルームにはウォーキングマシン、バイクなどを揃え、リカバリールームにはマッサージチェアを設置。
		  <p>ヘルシー＆ビューティーなおこもりステイをお楽しみください。  </p>
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
		<img src="<?= asset('/_assets/images/rcn/sec4-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し -->
	  <h2 class="stay-title">極上の美容体験が叶う、全室こだわりの客室。</h2>

	  <!-- リード本文 -->
	  <div class="stay-lead">
		<p>極上の美容体験が叶う、オール「ReFa」ルーム。メイク落とし、基礎化粧品のアメニティも揃います。</p>
		<p>ベッドは質の高い眠りを約束するThe Francebedのラグジュアリーシリーズ。</p>
		<p>シックなロイヤルスタイル、明るいナチュラルスタイル。そして、専用のサウナがついたリラックススイート。</p>
		<p>３タイプの客室からお選びいただけます。</p>
		<p>プレミアムスイートのお部屋はジャグジーとサウナ付きです。</p>
	  </div>
	  
	  <div class="dining-row row-2col">
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/rcn/sec4-2.webp?1') ?>" alt="">
		</figure>
		<figure class="card no-cap">
		  <img src="<?= asset('/_assets/images/rcn/sec4-3.webp?1') ?>" alt="">
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
		  <div>ロイヤルスイート</div>
		  <div>90</div>
		  <div>2室</div>
		  <div>1～4名</div>
		  <div>ツイン　1400×2050＆エキストラベッド</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>コーナースイート</div>
		  <div>70</div>
		  <div>2室</div>
		  <div>1～3名</div>
		  <div>ツイン　1400×2030＆和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>ジュニアスイート（2名定員）</div>
		  <div>50</div>
		  <div>2室</div>
		  <div>1～2名</div>
		  <div>ツイン　1400×2030</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>ジュニアスイート（3名定員）</div>
		  <div>50</div>
		  <div>2室</div>
		  <div>1～3名</div>
		  <div>ツイン　1400×2030＆和布団</div>
		</div>

		<div class="spec-row spec-grid">
		  <div>ジュニアスイート（4名定員）</div>
		  <div>50</div>
		  <div>2室</div>
		  <div>1～4名</div>
		  <div>ツイン　1400×2030＆和布団</div>
		</div>

		<div class="spec-divider"></div>

		<p class="spec-note">
		  <span class="mark">■</span>公式ホームページ
		  <a href="https://www.nagasaki-rch.jp/" target="_blank" rel="noopener">https://www.nagasaki-rch.jp/</a>
		</p>
	  </div>

	</div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
<?php require __DIR__ . '/partials/scripts.php'; ?>
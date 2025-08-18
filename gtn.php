<?php
/**
 * gtn.php - iPad横向き最適化の内部ページ（index.phpに非干渉）
 * - 既存 partials を尊重: head.php / header.php / footer.php / scripts.php
 * - ページ専用CSS: ./_assets/css/gtn.css
 * - ページ専用JS : ./_assets/js/gtn.js
 * - 画像         : ./_assets/images/gtn/
 */

$TITLE = $TITLE ?? 'GTN 内部ページ';
$DESC  = $DESC  ?? 'iPad横向き最適化テンプレート（内部ページ）';

$CSS_PATH = './_assets/css/gtn.css';
$JS_PATH  = './_assets/js/gtn.js';
$IMG_BASE = './_assets/images/gtn';

$partials = __DIR__ . '/partials';

function inject_before($needle, $insertion, $haystack) {
  $pos = stripos($haystack, $needle);
  if ($pos === false) return $haystack . $insertion;
  return substr($haystack, 0, $pos) . $insertion . substr($haystack, $pos);
}

/** ---------- <head> ---------- */
if (file_exists($partials . '/head.php')) {
  ob_start();
  include $partials . '/head.php';
  $head = ob_get_clean();
  // </head> 直前にページ固有CSSをインジェクト（head.phpは変更不要）
  $inject = "\n  <meta name=\"theme-color\" content=\"#a37b3e\" />\n  <link rel=\"stylesheet\" href=\"{$CSS_PATH}\" />\n";
  echo inject_before('</head>', $inject, $head);
} else {
  // スタンドアロンヘッダ
  ?><!doctype html>
  <html lang="ja">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<title><?= htmlspecialchars($TITLE, ENT_QUOTES, 'UTF-8') ?></title>
	<meta name="description" content="<?= htmlspecialchars($DESC, ENT_QUOTES, 'UTF-8') ?>" />
	<meta name="theme-color" content="#a37b3e" />
	<link rel="stylesheet" href="<?= $CSS_PATH ?>" />
  </head><?php
}
?>
<body class="gtn" id="top">
<?php
/** ---------- グローバルヘッダー ---------- */
if (file_exists($partials . '/header.php')) {
  include $partials . '/header.php';
}
?>

<!-- =========================
	 Breadcrumb
	 ========================= -->
<nav class="gtn-breadcrumb" aria-label="パンくず">
  <div class="gtn-container">
	<a href="/">ホーム</a><span class="gtn-sep">/</span>
	<a href="#">コンテンツ</a><span class="gtn-sep">/</span>
	<span aria-current="page">内部ページ</span>
  </div>
</nav>

<!-- =========================
	 Hero
	 ========================= -->
<section class="gtn-hero">
  <div class="gtn-hero-media">
	<img src="<?= $IMG_BASE ?>/PST18.JPG" alt="キービジュアル" fetchpriority="high" />
  </div>
  <div class="gtn-hero-overlay gtn-container">
	<div class="gtn-page-eyebrow">INTERNAL</div>
	<h1 class="gtn-page-title">内部ページのタイトルが入ります</h1>
	<p class="gtn-page-lead">AIデータをもとにしたiPad横向き最適化レイアウト。行長・余白・視認性を調整し、CTAはサイドバーで常時確保します。</p>
  </div>
</section>

<!-- =========================
	 Main
	 ========================= -->
<main class="gtn-main" role="main">
  <div class="gtn-container">
	<!-- Content -->
	<article class="gtn-content">
	  <section class="gtn-section gtn-prose" id="about">
		<h2>セクション見出し（概要）</h2>
		<p>本文の例です。AIデータの組版比率をベースに、見出し階層と余白スケールを合わせ込んでいます。iPad横向き（1024×768）でも読みやすい行長を維持します。</p>
		<ul>
		  <li>最小タップ領域は <code>44px</code> 以上</li>
		  <li>ヒーローは <code>21:9</code> の比率でトリミング</li>
		  <li>セーフエリア（<code>env(safe-area-inset-*)</code>）対応</li>
		</ul>
	  </section>

	  <section class="gtn-section">
		<h2>特長</h2>
		<div class="gtn-features">
		  <div class="gtn-feature">
			<img src="<?= $IMG_BASE ?>/OST12.JPG" alt="客室" loading="lazy" />
			<div>
			  <h3>客室</h3>
			  <p>木目と照明で上質な滞在を演出。</p>
			</div>
		  </div>
		  <div class="gtn-feature">
			<img src="<?= $IMG_BASE ?>/6rre_bw1200h600.jpg" alt="ダイニング" loading="lazy" />
			<div>
			  <h3>ダイニング</h3>
			  <p>眺望を楽しみながら食事を。</p>
			</div>
		  </div>
		  <div class="gtn-feature">
			<img src="<?= $IMG_BASE ?>/npzv_bw1200h600.jpg" alt="レストラン" loading="lazy" />
			<div>
			  <h3>レストラン</h3>
			  <p>夕景の時間帯は雰囲気がより引き立ちます。</p>
			</div>
		  </div>
		  <div class="gtn-feature">
			<img src="<?= $IMG_BASE ?>/49h4_bw1200h600.jpg" alt="テラス" loading="lazy" />
			<div>
			  <h3>テラス</h3>
			  <p>開放的なテラス席でゆったりと。</p>
			</div>
		  </div>
		</div>
	  </section>

	  <section class="gtn-section">
		<h2>ギャラリー</h2>
		<div class="gtn-gallery">
		  <a href="<?= $IMG_BASE ?>/PST18.JPG" data-gtn-lightbox><img src="<?= $IMG_BASE ?>/PST18.JPG" alt="ギャラリー1" loading="lazy" /></a>
		  <a href="<?= $IMG_BASE ?>/OST12.JPG" data-gtn-lightbox><img src="<?= $IMG_BASE ?>/OST12.JPG" alt="ギャラリー2" loading="lazy" /></a>
		  <a href="<?= $IMG_BASE ?>/6rre_bw1200h600.jpg" data-gtn-lightbox><img src="<?= $IMG_BASE ?>/6rre_bw1200h600.jpg" alt="ギャラリー3" loading="lazy" /></a>
		  <a href="<?= $IMG_BASE ?>/npzv_bw1200h600.jpg" data-gtn-lightbox><img src="<?= $IMG_BASE ?>/npzv_bw1200h600.jpg" alt="ギャラリー4" loading="lazy" /></a>
		  <a href="<?= $IMG_BASE ?>/49h4_bw1200h600.jpg" data-gtn-lightbox><img src="<?= $IMG_BASE ?>/49h4_bw1200h600.jpg" alt="ギャラリー5" loading="lazy" /></a>
		  <a href="<?= $IMG_BASE ?>/82xc_bw1200h600.jpg" data-gtn-lightbox><img src="<?= $IMG_BASE ?>/82xc_bw1200h600.jpg" alt="ギャラリー6" loading="lazy" /></a>
		</div>
	  </section>

	  <section class="gtn-section gtn-prose">
		<h2>テキストブロック</h2>
		<p>本文の長文ブロック。システムUI系フォントで表示揺れを抑え、可読性を確保しています。ブランドカラーや余白比率は <code>_assets/css/gtn.css</code> の <code>:root</code> 変数で簡単に調整可能です。</p>
	  </section>
	</article>

	<!-- Sidebar -->
	<aside class="gtn-sidebar" aria-label="サイドバー">
	  <div class="gtn-card">
		<h3>ご予約・お問い合わせ</h3>
		<div class="gtn-cta">
		  <a class="gtn-btn gtn-btn-primary" href="#" role="button" aria-label="Webで予約">Webで予約</a>
		  <a class="gtn-btn gtn-btn-outline" href="tel:0952-76-2050" aria-label="電話する 0952-76-2050">0952-76-2050 に電話</a>
		</div>
	  </div>
	  <div class="gtn-card">
		<h3>アクセス</h3>
		<p class="gtn-prose">〒000-0000 サンプル県サンプル市 1-2-3<br>○○駅から徒歩10分 / 駐車場あり</p>
		<a class="gtn-btn gtn-btn-outline" href="#" role="button" aria-label="Googleマップを開く">Googleマップを開く</a>
	  </div>
	</aside>
  </div>

  <!-- Lightbox -->
  <dialog id="gtn-lightbox" aria-label="拡大表示">
	<div class="gtn-lightbox-frame">
	  <img src="" alt="拡大画像" />
	  <button class="gtn-lightbox-close" data-gtn-close aria-label="閉じる">×</button>
	</div>
  </dialog>
</main>

<?php
/** ---------- フッター & ページ固有JS ---------- */
if (file_exists($partials . '/footer.php')) {
  ob_start();
  include $partials . '/footer.php';
  $footer = ob_get_clean();
  echo inject_before('</body>', "  <script src=\"{$JS_PATH}\" defer></script>\n", $footer);
} else {
  // スタンドアロンの簡易フッター
  ?>
  <footer style="margin-top:24px;background:#0f172a;color:#cbd5e1">
	<div style="max-width:1120px;margin:0 auto;padding:20px 16px;display:flex;justify-content:space-between;align-items:center;">
	  <small>© GTN</small>
	  <a href="#top" style="border:1px solid #cbd5e1;color:#cbd5e1;padding:8px 12px;border-radius:10px;text-decoration:none;">ページ先頭へ</a>
	</div>
  </footer>
  <script src="<?= $JS_PATH ?>" defer></script>
  </body>
  </html>
  <?php
}
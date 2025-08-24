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
	  <img src="<?= asset('/_assets/images/gtn/hero.webp?1') ?>" alt="">
	</div>
	<div class="gtn-hero__lead">
		<?php if ($lang==='en'): ?>
		  <p class="gtn-hero__copyL">A place where you can encounter a special side of<br>Nagasaki that you have never seen before.</p>
		<?php elseif ($lang==='ko'): ?>
		  <p class="gtn-hero__copyL">아직 보지 못한 특별한 나가사키를 만날 수 있는 장소.</p>
		<?php elseif ($lang==='tc'): ?>
		  <p class="gtn-hero__copyL">在這裡，您可以見到尚未見過的特殊長崎。</p>
		<?php elseif ($lang==='sc'): ?>
		  <p class="gtn-hero__copyL">一个能让你邂逅从未见过的独特长崎的场所。</p>
		  <?php else: ?>
		  <p class="gtn-hero__copyL">まだ見たことのない特別な長崎に逢える場所。</p>
		<?php endif; ?>
	  
	  
	  <p class="gtn-hero__brand">GARDEN TERRACE NAGASAKI HOTELS &amp; RESORTS</p>
	</div>
	<!-- 右上ロゴ -->
	<!-- <img class="gtn-hero__mark"
		 src="<?= asset('/_assets/svg/nagasaki.svg') ?>"
		 alt="Garden Terrace Nagasaki"> -->
  </section>

  <!-- =========================
	   SECTION 1：客室・眺望
  ========================== -->
  <section class="gtn-sec gtn-sec--rooms" style="padding: 60px 50px 60px 0px;">
	<div class="gtn-wrap">
	  <div class="rooms-grid">
		<!-- 左：大きい写真 -->
		<figure class="rooms-photoL">
		  <img src="<?= asset('/_assets/images/gtn/sec1-2.webp') ?>" alt="">
		</figure>

		<!-- 右：小写真 + 本文 -->
		<div class="rooms-side">
		  <figure class="rooms-photoS">
			<img src="<?= asset('/_assets/images/gtn/sec1-1.webp') ?>" alt="">
		  </figure>
		  <div class="rooms-text">
			<?php if ($lang==='en'): ?>
				  <p data-i18n>All guest rooms offer ocean views of Nagasaki Port, with various sizes of windows arranged to allow guests to enjoy the scenery of Nagasaki as if it were a painting.</p>
				  <p>Guests can enjoy an extraordinary city resort experience with a vacation home feel. The night view of the port from the bathroom is also exceptional.</p>
				  <p>Please enjoy the luxury reserved only for guests staying at the hotel.</p>
			<?php elseif ($lang==='ko'): ?>
				<p data-i18n>모든 객실은 눈앞에 나가사키 항구가 펼쳐지는 오션뷰로, 크고 작은 다양한 창문을 배치하여 그 창문을 통해 보이는 나가사키의 풍경을 마치 한 폭의 그림처럼 즐길 수 있도록 설계되었습니다.</p>
				  <p>비일상적인 분위기가 넘치는 시티 리조트의 시간을 별장 같은 분위기에서 만끽하실 수 있습니다. 욕실에서 바라보는 항구의 야경도 특별합니다.</p>
				  <p>숙박객만 누릴 수 있는 럭셔리를 즐겨보세요</p>
			<?php elseif ($lang==='tc'): ?>
				<p data-i18n>所有客房前方皆可眺望長崎港的海景，大小不一的窗戶排列有序，透過窗戶所見的長崎景色猶如一幅幅畫卷，讓人沉醉其中。</p>
				  <p>您可以像在別墅中一樣，享受非凡的城市度假村時光。從浴室眺望港口的夜景也別有一番風味。</p>
				  <p>享受只有住客才能享受的奢華。</p>
			<?php elseif ($lang==='sc'): ?>
				<p data-i18n>所有客房均可俯瞰長崎港的壮丽海景，我们精心布置了大小不一的窗户，让您仿佛置身于一幅画卷中，尽情欣赏長崎的美丽风景。</p>
				  <p>在这里，您可以体验到充满非日常感的城市度假时光，仿佛置身于度假别墅般惬意。从浴室望出去的港湾夜景更是令人叹为观止。</p>
				  <p>请尽情享受仅限住客专享的奢华体验。</p>
			<?php else: ?>
				<p data-i18n>客室は全て目の前に長崎港が広がるオーシャンビューで、大小様々な窓を配置し、そこから見える長崎の風景をまるで一枚の絵画にしたように楽しめるようにしました。</p>
				<p>非日常感あふれるシティリゾートの時間を、別荘感覚で堪能していただけます。バスルームからのぞむ港の夜景も格別です。</p>
				<p>宿泊者だけに許される贅沢をお楽しみください。</p>

			<?php endif; ?>
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
		<img src="<?= asset('/_assets/images/gtn/sec2-1.webp') ?>" alt="">
	  </figure>

	  <!-- 見出し + リード -->
	  <?php if ($lang==='en'): ?>
		  <div class="dining-head">
			<h2 class="dining-title">Experience Nagasaki's colorful food culture with all five senses.</h2>
			<div class="dining-lead">
			  <p>Enjoy Nagasaki's seasonal seafood and mountain produce while relaxing with an ocean view overlooking the port. </p>
				<p>A variety of menus that harmonize with art, utilizing the blessings of each season. </p>
				<p>The window-side seating serves as a “picture frame” for the harbor scenery, allowing you to enjoy the harbor and evening ocean view along with your meal. </p>
			</div>
		  </div>
		  <?php elseif ($lang==='ko'): ?>
			  <h2 class="dining-title">다채로운 나가사키의 식문화를 오감으로 즐기세요.</h2>
				  <div class="dining-lead">
					<p>바다와 산의 풍요로움을 갖춘 나가사키의 제철 음식을, 항구를 바라보는 오션뷰와 함께 여유롭게 즐겨보세요. </p>
					  <p>사계절의 풍요로움을 활용한 예술과 조화를 이룬 다양한 메뉴들. </p>
					  <p>창가에 열린 공간은 항구의 풍경을 담는 '액자'가 되어, 항구와 저녁 풍경의 오션뷰를 식사와 함께 즐기실 수 있습니다. </p>
				  </div>
				</div>

		  <?php elseif ($lang==='tc'): ?>
			  <div class="dining-head">
				  <h2 class="dining-title">用您所有的感官來品嚐長崎多彩多姿的美食文化。</h2>
				  <div class="dining-lead">
					<p>在眺望海港海景的悠閒氣氛中，為您奉上長崎四季的山珍海味。</p>
					<p>菜單與藝術融為一體，充分利用了當季的豐富食材。</p>
					<p>開放式的窗戶設置可作為海港景觀的「畫框」，讓您在用餐的同時也能欣賞海港和傍晚的海景。</p>
				  </div>
				</div>
		  <?php elseif ($lang==='sc'): ?>
			  <div class="dining-head">
				<h2 class="dining-title">色彩斑斓的長崎美食文化，以五感尽情品味。</h2>
				<div class="dining-lead">
				  <p>得天独厚的海洋与山林馈赠，让您在俯瞰港口的海洋景观中，悠然品味長崎的时令美食。</p>
					<p>融合四季馈赠的自然恩惠与艺术美学的精致菜单。</p>
					<p>面向窗户的独特设计，宛如一幅框住港口风景的“画框”，让您在用餐时尽享港口与夕阳海景的绝美风光。</p>
				</div>
			  </div>
		  <?php else: ?>
			  <div class="dining-head">
				  <h2 class="dining-title">彩り豊かな長崎の食文化を五感で味わう。</h2>
				  <div class="dining-lead">
					<p>海の幸・山の幸に恵まれた長崎の旬を、港を望むオーシャンビューとともにゆったりとご賞味ください。</p>
					<p>四季折々の恵みを活かしたアートと調和したメニューの数々。</p>
					<p>窓側に開いた設えは、港の風景を切り取る「額縁」となり、港と晩景オーシャンビューをお食事とともにお楽しみいただけます。</p>
				  </div>
				</div>
	  <?php endif; ?>
	  
	  

	  <!-- ギャラリー -->
	  <div class="dining-gallery">

		<!-- 1行目：2列（キャプションなし） -->
		<div class="dining-row row-2col">
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gtn/sec2-2.webp') ?>" alt="">
		  </figure>
		  <figure class="card no-cap">
			<img src="<?= asset('/_assets/images/gtn/sec2-3.webp') ?>" alt="">
		  </figure>
		</div>

		<!-- 2行目：2列（キャプションあり） -->
		<div class="dining-row row-2col">
			<?php if ($lang==='en'): ?>
				<figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-4.webp') ?>" alt="レストラン フォレスト">
					<figcaption>Restaurant “Forest”</figcaption>
				  </figure>
				  <figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-5.webp') ?>" alt="九州創作 千山万水">
					<figcaption>Kyushu Creative Cuisine “Senzen Bansui”</figcaption>
				  </figure>

			<?php elseif ($lang==='ko'): ?>
				<figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-4.webp') ?>" alt="レストラン フォレスト">
					<figcaption>레스토랑 “포레스트”</figcaption>
				  </figure>
				  <figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-5.webp') ?>" alt="九州創作 千山万水">
					<figcaption>규슈 창작 “천산만수”</figcaption>
				  </figure>

			<?php elseif ($lang==='tc'): ?>
				<figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-4.webp') ?>" alt="レストラン フォレスト">
					<figcaption>餐廳「森林」</figcaption>
				  </figure>
				  <figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-5.webp') ?>" alt="九州創作 千山万水">
					<figcaption>九州創意 「千山萬水」</figcaption>
				  </figure>

			<?php elseif ($lang==='sc'): ?>
				<figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-4.webp') ?>" alt="レストラン フォレスト">
					<figcaption>餐厅「森林」</figcaption>
				  </figure>
				  <figure class="card">
					<img src="<?= asset('/_assets/images/gtn/sec2-5.webp') ?>" alt="九州創作 千山万水">
					<figcaption>九州创意「千山万水」</figcaption>
				  </figure>

			<?php else: ?>
					<figure class="card">
						<img src="<?= asset('/_assets/images/gtn/sec2-4.webp') ?>" alt="レストラン フォレスト">
						<figcaption>レストラン「フォレスト」</figcaption>
					  </figure>
					  <figure class="card">
						<img src="<?= asset('/_assets/images/gtn/sec2-5.webp') ?>" alt="九州創作 千山万水">
						<figcaption>九州創作「千山万水」</figcaption>
					  </figure>
			<?php endif; ?>
		</div>

		<!-- 3行目：横長3枚（キャプションあり） -->
		<div class="dining-row row-3wide">
			<?php if ($lang==='en'): ?>
				<figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-8.webp') ?>" alt="鉄板焼ダイニング 竹彩">
					<figcaption>Teppanyaki Dining “Takusai”</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-7.webp') ?>" alt="鮨ダイニング 天空">
					<figcaption>Sushi Dining “Tenku”</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-6.webp') ?>" alt="懐石料理と天ぷら 秋月">
					<figcaption>Kaiseki Cuisine and Tempura “Akizuki”</figcaption>
				  </figure>
			<?php elseif ($lang==='ko'): ?>
				<figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-8.webp') ?>" alt="鉄板焼ダイニング 竹彩">
					<figcaption>철판구이 다이닝 「죽채」</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-7.webp') ?>" alt="鮨ダイニング 天空">
					<figcaption>스시 다이닝 「천공」</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-6.webp') ?>" alt="懐石料理と天ぷら 秋月">
					<figcaption>회석 요리와 튀김 「추월」</figcaption>
				  </figure>

			<?php elseif ($lang==='tc'): ?>
				<figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-8.webp') ?>" alt="鉄板焼ダイニング 竹彩">
					<figcaption>鐵板燒餐廳「Tikusai」</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-7.webp') ?>" alt="鮨ダイニング 天空">
					<figcaption>壽司餐廳 「Tenku」</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-6.webp') ?>" alt="懐石料理と天ぷら 秋月">
					<figcaption>懷石料理和天婦羅 「Akizuki」</figcaption>
				  </figure>

			<?php elseif ($lang==='sc'): ?>
				<figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-8.webp') ?>" alt="鉄板焼ダイニング 竹彩">
					<figcaption>铁板烧餐厅「竹彩」</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-7.webp') ?>" alt="鮨ダイニング 天空">
					<figcaption>寿司餐厅「天空」</figcaption>
				  </figure>
				  <figure class="card wide">
					<img src="<?= asset('/_assets/images/gtn/sec2-6.webp') ?>" alt="懐石料理と天ぷら 秋月">
					<figcaption>怀石料理与天妇罗「秋月」</figcaption>
				  </figure>

			<?php else: ?>
					<figure class="card wide">
						<img src="<?= asset('/_assets/images/gtn/sec2-8.webp') ?>" alt="鉄板焼ダイニング 竹彩">
						<figcaption>鉄板焼ダイニング「竹彩」</figcaption>
					  </figure>
					  <figure class="card wide">
						<img src="<?= asset('/_assets/images/gtn/sec2-7.webp') ?>" alt="鮨ダイニング 天空">
						<figcaption>鮨ダイニング「天空」</figcaption>
					  </figure>
					  <figure class="card wide">
						<img src="<?= asset('/_assets/images/gtn/sec2-6.webp') ?>" alt="懐石料理と天ぷら 秋月">
						<figcaption>懐石料理と天ぷら「秋月」</figcaption>
					  </figure>
			<?php endif; ?>
			
		  
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
		<img src="<?= asset('/_assets/images/gtn/sec3-1.webp') ?>" alt="">
	  </figure>

	  <!-- 中：3枚横並び -->
	  <div class="breeze-trio">
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gtn/sec3-2.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gtn/sec3-3.webp') ?>" alt="">
		</figure>
		<figure class="tri">
		  <img src="<?= asset('/_assets/images/gtn/sec3-4.webp') ?>" alt="">
		</figure>
	  </div>

	  <!-- タイトル＋本文 -->
	  <?php if ($lang==='en'): ?>
		  <div class="breeze-head">
			  <h2 class="breeze-title">A pleasant breeze and clear skies create a resort-like atmosphere</h2>
			  <div class="breeze-body">
				<p>A 20-meter-long infinity pool overlooking Nagasaki Port and the cityscape. The pool is equipped with a solid wood deck, jacuzzi, and sofa set. </p>
				<p>During the day, the sea, sky, and pool blend together to create a soothing space reminiscent of an overseas resort hotel. </p>
				<p>As evening falls, the breathtaking night view of Nagasaki—recognized as one of the world's new three great night views—unfolds before your eyes, enveloping you in a romantic and awe-inspiring world. </p>
				<p>The gym and sauna are recommended for those who wish to enjoy exercise or sauna experiences while taking in the stunning views of Nagasaki below. </p>
				<p>Sweat it out comfortably to relieve daily stress and refresh both mind and body. </p>
			  </div>
			</div>

		  <?php elseif ($lang==='ko'): ?>
			  <div class="breeze-head">
				  <h2 class="breeze-title">편안한 바람과 맑게 뻗은 하늘이 리조트 분위기를 연출합니다</h2>
				  <div class="breeze-body">
					<p>나가사키 항구와 도시의 풍경이 내려다보이는 20m 길이의 인피니티 풀. 순수한 목재 데크에 자쿠지, 소파 세트 등이 갖추어져 있으며,</p>
					<p>낮에는 바다와 하늘, 풀이 하나가 되어 해외 리조트 호텔을 연상시키는 힐링 공간이 조성됩니다.</p>
					<p>저녁이 되면 세계 신3대 야경으로 인정받은 나가사키의 야경이 눈앞에 펼쳐지며, 로맨틱하고 감동적인 세계에 휩싸입니다. </p>
					<p>짐과 사우나에서는 아래로 펼쳐지는 나가사키의 풍경을 감상하며 운동이나 사우나 체험을 즐기고 싶은 분들에게 추천합니다. </p>
					<p>편안한 땀을 흘리며 일상적인 피로를 풀어주고, 신체와 정신 모두를 리프레시합니다. </p>
				  </div>
				</div>

		  <?php elseif ($lang==='tc'): ?>
			  <div class="breeze-head">
				  <h2 class="breeze-title">怡人的微風和晴朗的天空營造出度假時光。</h2>
				  <div class="breeze-body">
					<p>長達 20 公尺的無邊際泳池，可眺望長崎港與市中心的美景。實木甲板上設有按摩浴缸、沙發套等設備。</p>
					<p>白天，大海、天空和泳池融為一體，營造出令人聯想到海外度假旅館的療愈空間。</p>
					<p>黃昏之後，被公認為世界三大新夜景之一的長崎夜景在眼前鋪展開來，將您籠罩在浪漫動人的世界中。</p>
					<p>推薦您使用健身房和桑拿房，一邊享受運動和桑拿體驗，一邊欣賞下方的長崎美景。</p>
					<p>讓身心煥然一新，揮灑愉快的汗水，紓解每日的疲勞。</p>
				  </div>
				</div>

		  <?php elseif ($lang==='sc'): ?>
			  <div class="breeze-head">
				  <h2 class="breeze-title">宜人的微风与澄澈的天空共同营造出度假时光的氛围</h2>
				  <div class="breeze-body">
					<p>长达20米的无边际泳池，可俯瞰長崎港及市区街景。泳池周边配备了原木甲板、按摩浴缸、沙发组等设施，</p>
					<p>白天时，海天一色与泳池融为一体，营造出宛如海外度假酒店般的疗愈空间。</p>
					<p>黄昏时分，被评为世界新三大夜景的長崎夜景尽收眼底，让人沉浸在浪漫而令人感动的世界中。</p>
					<p>健身房和桑拿房可俯瞰長崎的景色，适合想要边运动边享受桑拿体验的人。</p>
					<p>流淌着舒适的汗水，缓解日常疲劳，身心焕然一新。</p>
				  </div>
				</div>

		  <?php else: ?>
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

	  <?php endif; ?>

	</div>
  </section>
  <!-- ===== セクション間の背景帯（back1.svg：フルブリード） ===== -->
	<!-- <div class="gtn-divider gtn-divider--back1"></div> -->

  <!-- =========================
	   SECTION 4：客室クオリティ・タイプ／プラン
  ========================== -->
  <section class="gtn-sec gtn-sec--stay">
	<div class="gtn-wrap">

	  <!-- 上：ワイド（客室のワイド写真） -->
	  <figure class="stay-hero">
		<img src="<?= asset('/_assets/images/gtn/sec4-1.webp') ?>" alt="">
	  </figure>


	  <!-- リード本文 -->
	  <?php if ($lang==='en'): ?>
		  <!-- 見出し -->
			  <h2 class="stay-title">Your stay will be a moment to appreciate the essence of luxury.</h2>
		  
			<div class="stay-lead">
				<p>The Premium Harbor Suite is a luxurious room located on the upper floors of the new Royal Terrace building, which has a terrace overlooking the city of Nagasaki. </p>
				<p>In addition to the main building, there are two separate buildings, the Ocean Suite and Tower Suite. </p>
				<p>The interior space features simple decor, with striking ceilings carved in three dimensions and a terrace on the sea side that offers a sense of openness. </p>
				<p>Upon opening the door, you are greeted by large windows facing the sea, offering views that change with the passage of time and the seasons. </p>
				<p>We promise you a high-quality, relaxing hotel stay in a calm and peaceful environment. </p>
			  </div>

	  <?php elseif ($lang==='ko'): ?>
		  <!-- 見出し -->
			  <h2 class="stay-title">그 체류는 고급스러운 본질을 체험하는 특별한 시간이 될 것입니다.
</h2>
		  
			<div class="stay-lead">
				<p>나가사키 시내가 한눈에 내려다보이는 테라스를 갖춘 신관 로열 테라스의 고층에 위치한 럭셔리 객실 ‘프리미엄 하버 스위트’.</p>
				<p>본관 외에도 2동 있는 별관 숙박동 ‘오션 스위트'와 '타워 스위트’.</p>
				<p>단순한 장식의 실내 공간에 입체적으로 조각된 인상적인 천장과 바다 쪽으로 개방감 넘치는 테라스를 갖춘 럭셔리 공간입니다. </p>
				<p>문을 열면 바다 쪽으로 크게 열린 창문이 눈에 들어오며, 시간의 흐름과 계절의 변화에 따라 변하는 풍경을 즐길 수 있습니다. </p>
				<p>차분한 공간에서 보내는 호텔 스테이로, 당신만의 고급스러운 시간을 약속드립니다. </p>
			  </div>

	  <?php elseif ($lang==='tc'): ?>
		  <!-- 見出し -->
			  <h2 class="stay-title">下榻此處，即是發現品質精髓的時刻。</h2>
		  
			<div class="stay-lead">
				<p> Premium Harbour Suite 是位於 Royal Terrace 高層的豪華客房，這棟新建築擁有可俯瞰長崎市區的陽台。</p>
				<p>海洋套房和塔樓套房是主樓之外的兩棟「獨立」住宿大樓。</p>
				<p>豪華空間的內部裝潢簡潔，立體雕刻的天花板令人印象深刻，臨海的露天陽台也令人印象深刻。</p>
				<p>打開房門，迎面而來的是一扇面向大海的大開窗，窗外的景色隨著時間的流逝和四季的變化而變化。</p>
				<p>在寧靜的空間中住宿，我們承諾給您屬於自己的優質時光。</p>
			  </div>

	  <?php elseif ($lang==='sc'): ?>
		  <!-- 見出し -->
			  <h2 class="stay-title">此次住宿将为您带来一场品味高雅本质的难忘体验。</h2>
		  
			<div class="stay-lead">
				<p>位于新馆皇家露台高层的豪华客房“プレミアムハーバースイート”，可俯瞰长崎市全景的露台令人叹为观止。</p>
				<p>除主楼外，另设两栋独立住宿楼“オーシャンスイート”与“タワースイート”。</p>
				<p>室内空间以简约装饰为特色，搭配立体雕刻的独特天花板，以及面向大海的开阔露台，营造出奢华的居住环境。</p>
				<p>推开房门，映入眼帘的是面向大海的落地窗，您可随时间流转与季节更迭，欣赏不断变换的绝美景色。</p>
				<p>在宁静的空间中度过酒店住宿时光，我们承诺为您带来专属的优质体验。</p>
			  </div>

	  <?php else: ?>
		  <!-- 見出し -->
			<h2 class="stay-title">その滞在は上質の本質を知るひと時となる。</h2>

		  <div class="stay-lead">
			  <p>長崎の街を一望できるテラスを構えた新館ロイヤルテラスの高層階に位置するラグジュアリールーム「プレミアムハーバースイート」。</p>
			  <p>本館のほかに2棟ある「離れ」の宿泊棟「オーシャンスイート」「タワースイート」。</p>
			  <p>シンプルな装飾の室内空間に、立体的に彫り込まれた印象的な天井や、海側に開放感あふれるテラスを構えたラグジュアリーな空間。</p>
			  <p>扉を開くと、海側に大きく開いた窓が目に飛び込み、時間の経過や季節の移ろいとともに表情を変える景色を楽しめます。</p>
			  <p>落ち着いた空間で過ごすホテルステイで、あなただけの上質なひとときをお約束します。</p>
			</div>

	  <?php endif; ?>

	  <!-- 下段：客室一覧（表） -->
	  <?php if ($lang==='en'): ?>
		  <div class="stay-spec">
			<div class="spec-head spec-grid">
			  <div>Room Type</div>
			  <div>Size (m²)</div>
			  <div>Number of Rooms</div>
			  <div>Capacity</div>
			  <div>Bed Size</div>
			</div>
			
			<div class="spec-divider"></div>
			
			<div class="spec-row spec-grid">
			  <div>Garden Suite</div>
			  <div>53〜59</div>
			  <div>6rooms</div>
			  <div>1-3 people</div>
			  <div>Twin 1400 x 2000 + extra bed</div>
			</div>
			
			<div class="spec-row spec-grid">
			  <div>Japanese Suite</div>
			  <div>70〜79</div>
			  <div>3 rooms</div>
			  <div>1-6 people</div>
			  <div>Japanese futon</div>
			</div>
			
			<div class="spec-row spec-grid">
			  <div>Ocean Suite</div>
			  <div>46〜54</div>
			  <div>6 rooms</div>
			  <div>1–3 people</div>
			  <div>Twin 1400×2000 + extra bedド</div>
			</div>
			
			<div class="spec-row spec-grid">
			  <div>Tower Suite</div>
			  <div>50〜66</div>
			  <div>6 rooms</div>
			  <div>1–3 people</div>
			  <div>Twin 1400×2000 + extra bed</div>
			</div>
			
			<div class="spec-row spec-grid">
			  <div>Harbor Suite</div>
			  <div>50</div>
			  <div>8 rooms</div>
			  <div>1-3 people</div>
			  <div>v</div>
			</div>
			
			<div class="spec-row spec-grid">
			  <div>Premium Harbor Suite</div>
			  <div>50</div>
			  <div>6 rooms</div>
			  <div>1-3 people</div>
			  <div>Twin 1400×2000 + extra bed</div>
			</div>
			
			<div class="spec-row spec-grid">
			  <div>Royal Suite</div>
			  <div>100</div>
			  <div>1 room</div>
			  <div>1–3 guests</div>
			  <div>Twin 1400×2000 + extra bed</div>
			</div>

	  <?php elseif ($lang==='ko'): ?>
	  <?php elseif ($lang==='tc'): ?>
	  <?php elseif ($lang==='sc'): ?>
	  <?php else: ?>
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
			<div>ガーデンスイート</div>
			<div>53〜59</div>
			<div>6室</div>
			<div>1〜3名</div>
			<div>ツイン 1400×2000＋エキストラベッド</div>
		  </div>
		  
		  <div class="spec-row spec-grid">
			<div>ジャパニーズスイート</div>
			<div>70〜79</div>
			<div>3室</div>
			<div>1〜6名</div>
			<div>和布団</div>
		  </div>
		  
		  <div class="spec-row spec-grid">
			<div>オーシャンスイート</div>
			<div>46〜54</div>
			<div>6室</div>
			<div>1〜3名</div>
			<div>ツイン 1400×2000＋エキストラベッド</div>
		  </div>
		  
		  <div class="spec-row spec-grid">
			<div>タワースイート</div>
			<div>50〜66</div>
			<div>6室</div>
			<div>1〜3名</div>
			<div>ツイン 1400×2000＋エキストラベッド</div>
		  </div>
		  
		  <div class="spec-row spec-grid">
			<div>ハーバースイート</div>
			<div>50</div>
			<div>8室</div>
			<div>1〜3名</div>
			<div>ツイン 1400×2000＋エキストラベッド</div>
		  </div>
		  
		  <div class="spec-row spec-grid">
			<div>プレミアムハーバースイート</div>
			<div>50</div>
			<div>6室</div>
			<div>1〜3名</div>
			<div>ツイン 1400×2000＋エキストラベッド</div>
		  </div>
		  
		  <div class="spec-row spec-grid">
			<div>ロイヤルスイート</div>
			<div>100</div>
			<div>1室</div>
			<div>1〜3名</div>
			<div>ツイン 1400×2000＋エキストラベッド</div>
		  </div>

	  <?php endif; ?>

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
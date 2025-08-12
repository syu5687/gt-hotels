// ---- 固定文言の辞書（DeepLを叩かず即時切替） ----
const DICT = {
  "EN-US": {
	brand: "HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN",
	hero_title: "The pinnacle of an elegant holiday. A high-grade retreat.",
	hero_sub: "A refined Japanese-style space embraced by sea and forest. Hot spring, outdoor pool, and lounge.",
	relax_h: "All for a deeply relaxing getaway.",
	relax_lead: "Large hot-spring bath, heated pool, sauna, relaxation space, and an exclusive premium lounge.",
	relax_spa: "The spa, rich in diverse minerals, is highly regarded by experts.",
	relax_lounge: "Premium lounge on the 2nd floor offers selected drinks and finger foods.",
	relax_pool: "Enjoy a liberating time at the scenic outdoor pool.",
	kitchen_h: "Taste Nagasaki & Sasebo specialties: Live Kitchen × Buffet",
	kitchen_body: "Chefs cook before your eyes: sizzling teppan, crisp tempura, sushi by the piece, and pizzas from a stone oven.",
	kitchen_li1: "Served at 'Buffet Dining THE ONE' on the 1st floor.",
	kitchen_li2: "A wide variety for breakfast and dinner.",
	room_h: "Luxurious views over the Kujukushima Islands.",
	room_lead: "Rooms blend the warmth of tatami with modern comfort for barefoot relaxation.",
	room_chip1: "Ocean-view Japanese-Western Room",
	room_chip2: "Japanese-Western Room",
	room_chip3: "Deluxe Twin",
	room_chip4: "Japanese Room (Bed Type)",
	room_note: "<strong>Check-in</strong> 15:00–22:00 / <strong>Check-out</strong> 11:00",
	cta_h: "Reservations & Inquiries",
	cta_note: "Availability and rates vary by date. Please check the official site for the latest information.",
	cta_btn: "Check availability",
	copyright: "© HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN"
  },
  KO: {
	brand: "HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN",
	hero_title: "성인의 휴일을 위한 최상의 휴식, 하이그레이드 호텔.",
	hero_sub: "바다와 숲에 둘러싸인 세련된 공간. 온천, 야외 수영장, 라운지에서 깊은 휴식을.",
	relax_h: "일상을 떠난 깊은 휴식을 위해.",
	relax_lead: "대욕장 온천, 온수 풀, 사우나, 휴식 공간과 프리미엄 라운지.",
	relax_spa: "다양한 성분이 풍부한 스파는 전문가에게도 높은 평가.",
	relax_lounge: "2층 프리미엄 라운지에서 엄선된 음료와 핑거푸드.",
	relax_pool: "절경의 야외 수영장에서 여유를.",
	kitchen_h: "나가사키 & 사세보 별미 ‘라이브 키친 × 뷔페’",
	kitchen_body: "철판구이, 바삭한 튀김, 한 점씩 쥐는 초밥, 화덕 피자까지 눈앞에서.",
	kitchen_li1: "본관 1층 ‘Buffet Dining THE ONE’ 제공",
	kitchen_li2: "조식·석식 모두 다양한 메뉴",
	room_h: "장대한 구주쿠시마 전망을 만끽.",
	room_lead: "다다미의 따뜻함과 서양식 편안함이 조화된 객실.",
	room_chip1: "오션뷰 화양실",
	room_chip2: "화양실",
	room_chip3: "디럭스 트윈",
	room_chip4: "일본식 룸(베드 타입)",
	room_note: "<strong>체크인</strong> 15:00–22:00 / <strong>체크아웃</strong> 11:00",
	cta_h: "예약·문의",
	cta_note: "객실 상황과 요금은 날짜에 따라 변동됩니다.",
	cta_btn: "빈 객실 확인",
	copyright: "© HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN"
  },
  ZH: {
	brand: "HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN",
	hero_title: "成就大人的極致假期，高品位度假酒店。",
	hero_sub: "被海洋與森林環抱的精緻空間。溫泉、戶外泳池與貴賓酒廊帶來深度放鬆。",
	relax_h: "只為遠離日常、沉浸放鬆。",
	relax_lead: "大型溫泉浴池、溫水泳池、桑拿、休憩空間，另設貴賓酒廊。",
	relax_spa: "含豐富礦物成分的溫泉，廣受專家好評。",
	relax_lounge: "二樓貴賓酒廊提供精選飲品與小食。",
	relax_pool: "在風景絕佳的戶外泳池享受自由時光。",
	kitchen_h: "品嚐長崎＆佐世保名物「現場廚房 × 自助餐」",
	kitchen_body: "鐵板滋滋作響、天婦羅香脆、握壽司現捏、石窯披薩熱騰騰，盡享剛出爐的美味與臨場感。",
	kitchen_li1: "本館一樓「Buffet Dining THE ONE」供應",
	kitchen_li2: "早餐與晚餐皆提供多元選擇",
	room_h: "極目九十九島，盡享奢華景緻。",
	room_lead: "和洋融合的舒適客房，赤足也自在。",
	room_chip1: "海景和洋房",
	room_chip2: "和洋房",
	room_chip3: "豪華雙床房",
	room_chip4: "和室（床鋪型）",
	room_note: "<strong>入住</strong> 15:00–22:00 / <strong>退房</strong> 11:00",
	cta_h: "預訂・洽詢",
	cta_note: "房況與價格依日期變動，請至官網查詢最新資訊。",
	cta_btn: "查看空房",
	copyright: "© HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN"
  }
};

// ---- 画面適用＆DeepLフォールバック（未登録文言があればAPIで翻訳） ----
async function applyLanguage(lang) {
  document.documentElement.lang = lang.startsWith("EN") ? "en" :
								  lang.startsWith("KO") ? "ko" :
								  lang.startsWith("ZH") ? "zh" : "ja";

  const dict = DICT[lang] || {};
  const nodes = document.querySelectorAll("[data-i18n]");
  const missing = [];
  const order = [];

  nodes.forEach((el) => {
	const key = el.getAttribute("data-i18n");
	order.push({ el, key, html: el.innerHTML });
	if (dict[key]) el.innerHTML = dict[key]; else missing.push(el.innerText.trim());
  });

  if (missing.length && lang !== "JA") {
	try {
	  const res = await fetch("/api/translate", {
		method: "POST",
		headers: { "Content-Type": "application/json" },
		body: JSON.stringify({ texts: missing, targetLang: lang })
	  });
	  if (res.ok) {
		const data = await res.json();
		let idx = 0;
		order.forEach(({ el, key }) => {
		  if (!dict[key]) { el.innerText = data.texts[idx++] || el.innerText; }
		});
	  }
	} catch (e) { console.warn("translate fallback failed", e); }
  }

  // UIの活性表示
  document.querySelectorAll(".langbar button").forEach(b => {
	b.classList.toggle("is-active", b.dataset.lang === lang);
  });
  localStorage.setItem("lang", lang);
}

document.addEventListener("DOMContentLoaded", () => {
  const saved = localStorage.getItem("lang") || "JA";
  applyLanguage(saved);

  document.querySelectorAll(".langbar button").forEach(btn => {
	btn.addEventListener("click", () => applyLanguage(btn.dataset.lang));
  });
});
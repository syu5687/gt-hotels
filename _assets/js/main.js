document.addEventListener('DOMContentLoaded', () => {
  // 言語メニュー
  const lang = document.querySelector('.lang');
  const langBtn = document.querySelector('.lang-btn');
  if (lang && langBtn) {
	langBtn.addEventListener('click', () => lang.classList.toggle('open'));
	document.addEventListener('click', (e) => {
	  if (!lang.contains(e.target)) lang.classList.remove('open');
	});
  }

  // Hero 再生/一時停止トグル
  const video   = document.getElementById('heroVideo');
  const playBtn = document.getElementById('playBtn');
  if (video && playBtn) {
	let playing = false;
	playBtn.addEventListener('click', () => {
	  if (playing) {
		video.pause();
		playBtn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>';
	  } else {
		video.play();
		playBtn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>';
	  }
	  playing = !playing;
	});
  }

  // スクロール時に見出しが隠れない（CSSのscroll-margin-topで対応済み）
  // 追加のスムーススクロールが必要なら以下を有効化
  /*
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
	a.addEventListener('click', e=>{
	  const id = a.getAttribute('href');
	  const el = document.querySelector(id);
	  if (el) { e.preventDefault(); el.scrollIntoView({behavior:'smooth', block:'start'}); }
	});
  });
  */
});
const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('#menu');
function closeMenu() {
  menu.close();
  toggle.setAttribute('aria-expanded', 'false');
  toggle.setAttribute('aria-label', 'メニューを開く');
  document.body.classList.remove('menu-open');
}
toggle.addEventListener('click', () => {
  menu.showModal();
  toggle.setAttribute('aria-expanded', 'true');
  toggle.setAttribute('aria-label', 'メニューを閉じる');
  document.body.classList.add('menu-open');
});
const close = document.createElement('button');
close.className = 'menu-close';
close.textContent = '閉じる ×';
close.setAttribute('aria-label', 'メニューを閉じる');
menu.prepend(close);
close.addEventListener('click', closeMenu);
menu.addEventListener('cancel', (event) => { event.preventDefault(); closeMenu(); });
menu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));

const heroVideo = document.querySelector('video.hero-photo');
if (heroVideo) {
const videoToggle = document.querySelector('.hero-video-toggle');
function updateVideoToggle() {
  const paused = heroVideo.paused;
  videoToggle.setAttribute('aria-label', paused ? '映像を再生' : '映像を一時停止');
  videoToggle.innerHTML = paused ? '映像を再生 <span aria-hidden="true">▶</span>' : '映像を一時停止 <span aria-hidden="true">Ⅱ</span>';
}
heroVideo.muted = true;
heroVideo.addEventListener('play', updateVideoToggle);
heroVideo.addEventListener('pause', updateVideoToggle);
heroVideo.addEventListener('error', () => { videoToggle.hidden = true; });
videoToggle.addEventListener('click', () => {
  if (heroVideo.paused) heroVideo.play().catch(updateVideoToggle);
  else heroVideo.pause();
});
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  heroVideo.autoplay = false;
  heroVideo.pause();
} else {
  heroVideo.play().catch(updateVideoToggle);
}
updateVideoToggle();

}

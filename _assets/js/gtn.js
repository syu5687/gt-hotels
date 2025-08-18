// GTN page JS (prefixed)
(function(){
  // iPad 100vh fix
  const setVh = () => {
	const vh = window.innerHeight * 0.01;
	document.querySelector('.gtn')?.style.setProperty('--vh', `${vh}px`);
	document.documentElement.style.setProperty('--vh', `${vh}px`);
  };
  setVh();
  window.addEventListener('resize', setVh);
  window.addEventListener('orientationchange', setVh);

  // Lightbox
  const dlg = document.getElementById('gtn-lightbox');
  if (dlg) {
	document.querySelectorAll('.gtn [data-gtn-lightbox]').forEach(a => {
	  a.addEventListener('click', (e) => {
		e.preventDefault();
		const src = a.getAttribute('href');
		const img = dlg.querySelector('img');
		img.src = src;
		if (typeof dlg.showModal === 'function') dlg.showModal();
	  });
	});
	dlg.querySelector('[data-gtn-close]')?.addEventListener('click', () => dlg.close());
	dlg.addEventListener('click', (e)=>{ if (e.target === dlg) dlg.close(); });
	document.addEventListener('keydown', (e)=>{ if(e.key === 'Escape' && dlg.open) dlg.close(); });
  }
})();
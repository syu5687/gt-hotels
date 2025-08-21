<?php require_once __DIR__.'/../config/app.php'; ?>
<script src="<?= asset('/_assets/js/main.js') ?>" defer></script>

<script>
(function(){
  // 1) 言語決定（?lang= / cookie）
  function getQuery(name){
	const m = location.search.match(new RegExp('[?&]'+name+'=([^&]+)'));
	return m ? decodeURIComponent(m[1]) : '';
  }
  const qLang = getQuery('lang');
  const cookieLang = document.cookie.replace(/(?:(?:^|.*;\s*)lang\s*\=\s*([^;]*).*$)|^.*$/, "$1");
  const lang = qLang || cookieLang || 'ja';

  // cookie更新
  if (qLang) document.cookie = 'lang='+qLang+'; path=/; max-age='+(60*60*24*365);

  if (lang === 'ja') return; // 日本語は何もしない

  // 2) 翻訳対象要素の収集
  const nodes = Array.from(document.querySelectorAll('[data-i18n]'));
  if (!nodes.length) return;

  const items = nodes.map(el => el.textContent.trim());

  // 3) サーバへ一括翻訳リクエスト
  fetch('/api/translate', {
	method:'POST',
	headers:{'Content-Type':'application/json'},
	body: JSON.stringify({
	  lang: lang, // 'en'|'sc'|'tc'
	  items: items
	})
  })
  .then(r => r.json())
  .then(d => {
	if (!d || !Array.isArray(d.items)) return;
	d.items.forEach((t, i) => {
	  nodes[i].textContent = t || nodes[i].textContent; // 置換
	});
  })
  .catch(console.error);
})();
</script>
</body>
</html>
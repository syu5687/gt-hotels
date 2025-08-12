type Key = string; // `${targetLang}::${text}`

export class LRUCache {
  private max = 2000;
  private map = new Map<Key, string>();

  constructor(max = 2000) { this.max = max; }

  get(key: Key) {
	const v = this.map.get(key);
	if (v !== undefined) { this.map.delete(key); this.map.set(key, v); }
	return v;
  }
  set(key: Key, value: string) {
	if (this.map.has(key)) this.map.delete(key);
	this.map.set(key, value);
	if (this.map.size > this.max) {
	  const first = this.map.keys().next().value;
	  this.map.delete(first);
	}
  }
}
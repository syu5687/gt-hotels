// src/routes/translate.ts
import fetch from 'node-fetch';
import OpenCC from 'opencc';
import crypto from 'crypto';
import { getCache, setCache, saveCache } from '../i18n/cache';

const API_KEY = process.env.DEEPL_API_KEY!;
const API_BASE = process.env.DEEPL_API_BASE || 'https://api-free.deepl.com/v2/translate';

// 簡体→繁體 変換器
const s2t = new OpenCC('s2t.json');

type Target = 'en'|'sc'|'tc';

function hashKey(text: string) {
  return crypto.createHash('sha1').update(text).digest('hex').slice(0,16);
}

function toDeepLCode(lang: Target): 'EN-US'|'ZH' {
  if (lang === 'en') return 'EN-US';
  // sc / tc は DeepL では "ZH"（簡体字）。tc は変換で対応
  return 'ZH';
}

export async function translateOne(
  srcText: string,
  target: Target,
  force = false
): Promise<string> {

  const normText = (srcText || '').trim();
  if (!normText) return '';

  const deepLang = toDeepLCode(target);
  const key = `${target}:${deepLang}:${hashKey(normText)}`;

  if (!force) {
	const hit = getCache(key);
	if (hit) return hit;
  }

  // DeepL へ問い合わせ
  const params = new URLSearchParams();
  params.append('text', normText);
  params.append('target_lang', deepLang);

  const res = await fetch(API_BASE, {
	method: 'POST',
	headers: {
	  'Authorization': `DeepL-Auth-Key ${API_KEY}`,
	  'Content-Type': 'application/x-www-form-urlencoded'
	},
	body: params
  });

  if (!res.ok) {
	const txt = await res.text();
	throw new Error(`DeepL error: ${res.status} ${txt}`);
  }

  const data = await res.json() as any;
  let out = data.translations?.[0]?.text ?? '';

  // 繁體字は簡体 -> 繁体 変換
  if (target === 'tc' && out) {
	out = await s2t.convertPromise(out);
  }

  setCache(key, out);
  saveCache();
  return out;
}

// 複数をまとめて（バッチ）翻訳
export async function translateBatch(
  items: string[],
  target: Target,
  force = false
): Promise<string[]> {
  const results: string[] = [];
  for (const t of items) {
	results.push(await translateOne(t, target, force));
  }
  return results;
}
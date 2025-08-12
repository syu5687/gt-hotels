import type { Request, Response } from "express";
import express from "express";
import * as deepl from "deepl-node";
import { LRUCache } from "../i18n/cache.js";

const router = express.Router();
const cache = new LRUCache(3000);

const translator = (() => {
  const key = process.env.DEEPL_AUTH_KEY;
  if (!key) console.warn("[WARN] DEEPL_AUTH_KEY が未設定です（起動はしますが翻訳APIは失敗します）");
  return key ? new deepl.Translator(key) : null;
})();

type Lang = deepl.TargetLanguageCode;

/** バルク翻訳: { texts: string[], targetLang: "EN-US" } を受け取る */
router.post("/", async (req: Request, res: Response) => {
  try {
	const { texts, targetLang } = req.body as { texts: string[], targetLang: Lang };
	if (!Array.isArray(texts) || !texts.length) return res.status(400).json({ error: "texts が必要です" });
	if (!targetLang) return res.status(400).json({ error: "targetLang が必要です" });
	if (!translator) return res.status(500).json({ error: "DEEPL_AUTH_KEY 未設定" });

	// キャッシュ命中分を先に取り出す
	const out: string[] = new Array(texts.length);
	const missIdx: number[] = [];
	const missTexts: string[] = [];
	texts.forEach((t, i) => {
	  const k = `${targetLang}::${t}`;
	  const c = cache.get(k);
	  if (c) out[i] = c; else { missIdx.push(i); missTexts.push(t); }
	});

	if (missTexts.length) {
	  // レート制御: DeepLは1リクエストに複数文OK。大きすぎ回避のため分割するならここで。
	  const translated = await translator.translateText(missTexts, null, targetLang);
	  translated.forEach((tr, j) => {
		const i = missIdx[j];
		out[i] = tr.text;
		cache.set(`${targetLang}::${texts[i]}`, tr.text);
	  });
	}

	res.json({ texts: out });
  } catch (e: any) {
	console.error("[translate:error]", e?.message || e);
	const code = typeof e?.statusCode === "number" ? e.statusCode : 500;
	res.status(code).json({ error: "翻訳APIエラー", detail: e?.message });
  }
});

export default router;
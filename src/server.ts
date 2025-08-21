/* eslint-disable no-console */
import express, { Request, Response, NextFunction } from "express";
import path from "path";
import fs from "fs/promises";
import crypto from "crypto";
import cors from "cors";

// ========= 基本設定 =========
const app = express();
app.set("trust proxy", 1);
app.use(express.json({ limit: "1mb" }));

// CORS（必要なドメインだけ許可）
const allowOrigins = [
  "https://gt-hotels-665477084949.asia-northeast1.run.app", // PHPサイト
  // 必要に応じて追加
];
app.use(
  cors({
	origin(origin, cb) {
	  if (!origin) return cb(null, true); // サーバ間など Origin 無し許容
	  if (allowOrigins.includes(origin)) return cb(null, true);
	  return cb(new Error("CORS blocked"), false);
	},
  })
);

// ルート直下の静的配信（不要なら削除OK）
const ROOT_DIR = process.cwd();
const ASSETS_DIR = path.join(ROOT_DIR, "_assets");
app.use(
  express.static(ROOT_DIR, {
	extensions: ["html"],
	setHeaders: (res, p) => {
	  if (p.endsWith(".html")) res.setHeader("Cache-Control", "no-store");
	},
  })
);

// 健康チェック
app.get("/healthz", (_req, res) => res.status(200).json({ ok: true }));

// ========= DeepL + キャッシュ =========
type CacheMap = Record<string, string>;

interface ICacheStore {
  load(): Promise<CacheMap>;
  save(map: CacheMap): Promise<void>;
}

class LocalJsonStore implements ICacheStore {
  private file: string;
  constructor() {
	this.file = path.join(ASSETS_DIR, "i18n", "translations-cache.json");
  }
  async load(): Promise<CacheMap> {
	await fs.mkdir(path.dirname(this.file), { recursive: true });
	try {
	  const raw = await fs.readFile(this.file, "utf-8");
	  return raw ? JSON.parse(raw) : {};
	} catch {
	  return {};
	}
  }
  async save(map: CacheMap): Promise<void> {
	await fs.mkdir(path.dirname(this.file), { recursive: true });
	await fs.writeFile(this.file, JSON.stringify(map, null, 2), "utf-8");
  }
}

class GcsStore implements ICacheStore {
  private storage: any;
  private bucketName: string;
  private objectName: string;
  constructor() {
	// eslint-disable-next-line @typescript-eslint/no-var-requires
	const { Storage } = require("@google-cloud/storage");
	this.storage = new Storage();
	this.bucketName = process.env.GCS_BUCKET!;
	this.objectName = process.env.GCS_OBJECT || "translations-cache.json";
  }
  async load(): Promise<CacheMap> {
	const file = this.storage.bucket(this.bucketName).file(this.objectName);
	const [exists] = await file.exists();
	if (!exists) return {};
	const [buf] = await file.download();
	try {
	  return JSON.parse(buf.toString("utf-8"));
	} catch {
	  return {};
	}
  }
  async save(map: CacheMap): Promise<void> {
	const file = this.storage.bucket(this.bucketName).file(this.objectName);
	await file.save(JSON.stringify(map, null, 2), {
	  contentType: "application/json; charset=utf-8",
	  resumable: false,
	  metadata: { cacheControl: "no-store" },
	});
  }
}

const keyHash = (text: string, source: string, target: string) =>
  crypto.createHash("sha256").update(`${source}|${target}|${text}`).digest("hex");

function createStore(): ICacheStore {
  if (process.env.GCS_BUCKET) {
	try {
	  return new GcsStore();
	} catch (e) {
	  console.warn("[i18n] GCS init failed, fallback to local JSON.", (e as Error).message);
	}
  }
  return new LocalJsonStore();
}
const store: ICacheStore = createStore();

let CACHE: CacheMap = {};
(async () => {
  try {
	CACHE = await store.load();
	console.log(`[i18n] cache loaded: ${Object.keys(CACHE).length} entries`);
  } catch (e) {
	console.error("[i18n] cache load error:", e);
	CACHE = {};
  }
})();

async function deeplTranslateBatch(texts: string[], source: string, target: string): Promise<string[]> {
  const url = process.env.DEEPL_API_URL || "https://api-free.deepl.com/v2/translate";
  const body = new URLSearchParams();
  texts.forEach((t) => body.append("text", t));
  body.append("source_lang", source.toUpperCase());
  body.append("target_lang", target.toUpperCase());
  body.append("preserve_formatting", "1");

  const res = await fetch(url, {
	method: "POST",
	headers: {
	  Authorization: `DeepL-Auth-Key ${process.env.DEEPL_API_KEY}`,
	  "Content-Type": "application/x-www-form-urlencoded",
	},
	body,
  });

  if (!res.ok) {
	const msg = await res.text().catch(() => "");
	throw new Error(`DeepL ${res.status}: ${msg}`);
  }

  const json = (await res.json()) as { translations: { text: string }[] };
  return json.translations.map((t) => t.text);
}

// body: { source:"JA", target:"EN", keys:["テキスト1","テキスト2", ...] }
app.post("/api/translate", async (req: Request, res: Response, next: NextFunction) => {
  try {
	const source = String(req.body?.source || "JA").toUpperCase();
	const target = String(req.body?.target || "EN").toUpperCase();
	const keys = Array.isArray(req.body?.keys) ? req.body.keys.map(String) : [];

	if (!keys.length) return res.json({ translations: {}, cached: true });

	const result: Record<string, string> = {};
	const missTexts: string[] = [];
	const missOrder: string[] = [];

	for (const k of keys) {
	  const h = keyHash(k, source, target);
	  if (CACHE[h]) result[k] = CACHE[h];
	  else {
		missTexts.push(k);
		missOrder.push(k);
	  }
	}

	if (missTexts.length) {
	  const translated = await deeplTranslateBatch(missTexts, source, target);
	  translated.forEach((t, i) => {
		const orig = missOrder[i];
		const h = keyHash(orig, source, target);
		CACHE[h] = t;
		result[orig] = t;
	  });
	  await store.save(CACHE);
	}

	res.json({ translations: result, cached: missTexts.length === 0 });
  } catch (err) {
	next(err);
  }
});

// エラーハンドラ
app.use((err: any, _req: Request, res: Response) => {
  console.error(err);
  res.status(500).json({ error: err?.message || "internal-error" });
});

// 起動
const PORT = Number(process.env.PORT || 8080);
app.listen(PORT, () => console.log(`translate-api listening on :${PORT}`));
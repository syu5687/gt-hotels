import { Storage } from "@google-cloud/storage";
import { CacheMap, ICacheStore } from "./types";

export class GcsStore implements ICacheStore {
  private storage = new Storage();
  private bucket = process.env.GCS_BUCKET!;
  private object = process.env.GCS_OBJECT || "translations-cache.json";

  async load(): Promise<CacheMap> {
	const file = this.storage.bucket(this.bucket).file(this.object);
	const [exists] = await file.exists();
	if (!exists) return {};
	const [buf] = await file.download();
	try { return JSON.parse(buf.toString("utf-8")); } catch { return {}; }
  }

  async save(map: CacheMap): Promise<void> {
	const file = this.storage.bucket(this.bucket).file(this.object);
	await file.save(JSON.stringify(map, null, 2), {
	  resumable: false,
	  contentType: "application/json; charset=utf-8",
	  cacheControl: "no-store"
	});
  }
}
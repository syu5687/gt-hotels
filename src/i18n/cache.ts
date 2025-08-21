// src/i18n/cache.ts
import fs from 'fs';
import path from 'path';

const CACHE_PATH = process.env.CACHE_FILE || './_assets/i18n/cache.json';

type CacheShape = Record<string, string>;  // key -> translated text

let memory: CacheShape = {};

function ensureFile() {
  const dir = path.dirname(CACHE_PATH);
  if (!fs.existsSync(dir)) fs.mkdirSync(dir, { recursive: true });
  if (!fs.existsSync(CACHE_PATH)) fs.writeFileSync(CACHE_PATH, JSON.stringify({}), 'utf-8');
}

export function loadCache() {
  ensureFile();
  try {
	memory = JSON.parse(fs.readFileSync(CACHE_PATH, 'utf-8') || '{}');
  } catch {
	memory = {};
  }
}

export function saveCache() {
  ensureFile();
  fs.writeFileSync(CACHE_PATH, JSON.stringify(memory, null, 2), 'utf-8');
}

export function getCache(key: string) {
  return memory[key];
}

export function setCache(key: string, value: string) {
  memory[key] = value;
}

export function delCachePrefix(prefix: string) {
  const keys = Object.keys(memory);
  for (const k of keys) if (k.startsWith(prefix)) delete memory[k];
}

export function clearCache() {
  memory = {};
  saveCache();
}
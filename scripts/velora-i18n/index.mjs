import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export const KEYS = JSON.parse(fs.readFileSync(path.join(__dirname, 'en.json'), 'utf8'));
export const KEY_LIST = Object.keys(KEYS);

/** @type {Record<string, Record<string, string>>} */
export const PACKS = {
  en: KEYS,
};

for (const file of fs.readdirSync(__dirname)) {
  if (!file.endsWith('.json')) continue;
  if (file === 'en.json') continue;
  const code = file.replace(/\.json$/, '');
  PACKS[code] = JSON.parse(fs.readFileSync(path.join(__dirname, file), 'utf8'));
}

export function getPack(lang) {
  const o = PACKS[lang];
  if (!o) throw new Error('missing pack: ' + lang);
  for (const k of KEY_LIST) {
    if (!(k in o)) throw new Error(`${lang} missing key ${k}`);
  }
  return o;
}

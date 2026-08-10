import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export const KEYS = JSON.parse(fs.readFileSync(path.join(__dirname, 'en.json'), 'utf8'));
// KEYS as ordered list from en.json
export const KEY_LIST = Object.keys(KEYS);

/** @type {Record<string, Record<string, string>>} */
export const PACKS = {
  en: KEYS,
  de: JSON.parse(fs.readFileSync(path.join(__dirname, 'de.json'), 'utf8')),
};

for (const file of fs.readdirSync(__dirname)) {
  if (!file.endsWith('.json')) continue;
  if (file === 'en.json' || file === 'de.json' || file === 'de-template.json') continue;
  const code = file.replace(/\.json$/, '');
  PACKS[code] = JSON.parse(fs.readFileSync(path.join(__dirname, file), 'utf8'));
}

export function packArray(lang) {
  const o = PACKS[lang];
  if (!o) throw new Error('missing ' + lang);
  return KEY_LIST.map((k) => {
    if (!(k in o)) throw new Error(`${lang} missing key ${k}`);
    return o[k];
  });
}

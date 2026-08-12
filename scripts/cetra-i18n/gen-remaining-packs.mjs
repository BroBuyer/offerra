/**
 * Generate remaining cetra i18n JSON packs (not fr/it/es/pt).
 * Run: node scripts/cetra-i18n/gen-remaining-packs.mjs
 *
 * Translation tables live in _t-{lang}.json (274 strings, same order as _pt-keys.json).
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const LANGS = ['cs', 'da', 'de', 'el', 'en', 'fi', 'hr', 'hu', 'nl', 'no', 'pl', 'ro', 'sk', 'sv', 'tr'];

const keys = JSON.parse(fs.readFileSync(path.join(__dirname, '_pt-keys.json'), 'utf8'));
if (keys.length !== 274) throw new Error(`Expected 274 keys, got ${keys.length}`);

for (const lang of LANGS) {
  const tablePath = path.join(__dirname, `_t-${lang}.json`);
  if (!fs.existsSync(tablePath)) throw new Error(`Missing translation table: ${tablePath}`);
  const vals = JSON.parse(fs.readFileSync(tablePath, 'utf8'));
  if (!Array.isArray(vals) || vals.length !== keys.length) {
    throw new Error(`${lang}: expected ${keys.length} strings, got ${vals?.length}`);
  }
  const pack = {};
  for (let i = 0; i < keys.length; i++) {
    const to = vals[i];
    if (typeof to !== 'string' || !to.length) throw new Error(`${lang}[${i}] empty`);
    pack[keys[i]] = to;
  }
  // Sanity: SITE_NAME PHP bits must stay exact
  for (const [k, v] of Object.entries(pack)) {
    if (k.includes("<?= e(SITE_NAME) ?>") && !v.includes("<?= e(SITE_NAME) ?>")) {
      throw new Error(`${lang}: lost <?= e(SITE_NAME) ?> in key ${k.slice(0, 40)}`);
    }
    if (k.includes("' . SITE_NAME . '") && !v.includes("' . SITE_NAME . '")) {
      throw new Error(`${lang}: lost ' . SITE_NAME . ' in key ${k.slice(0, 40)}`);
    }
  }
  const out = path.join(__dirname, `${lang}.json`);
  fs.writeFileSync(out, JSON.stringify(pack, null, 2) + '\n', 'utf8');
  console.log('wrote', lang, Object.keys(pack).length);
}

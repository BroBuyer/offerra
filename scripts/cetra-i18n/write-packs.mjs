import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { rows } from './_rows-c.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const langs = ['fr', 'it', 'es'];

/** Prefer typographic apostrophe so PHP single-quoted strings stay valid. */
function safeApostrophes(s) {
  return String(s).replace(/'/g, '\u2019');
}

for (const lang of langs) {
  const idx = langs.indexOf(lang);
  const pack = {};
  for (const [pt, vals] of Object.entries(rows)) {
    let to = vals[idx];
    if (!to || to === pt) continue;
    // FR/IT marketing copy often uses ASCII ' — normalize to ’ for PHP safety.
    if (lang === 'fr' || lang === 'it') to = safeApostrophes(to);
    pack[pt] = to;
  }
  const out = path.join(__dirname, `${lang}.json`);
  fs.writeFileSync(out, JSON.stringify(pack, null, 2) + '\n', 'utf8');
  console.log('wrote', lang, Object.keys(pack).length, 'entries');
}

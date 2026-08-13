/**
 * Translate EN strings via Google Translate (unofficial gtx client).
 * Resumes incomplete JSON files. Usage:
 *   node scripts/recupero-i18n/auto-translate.mjs
 *   node scripts/recupero-i18n/auto-translate.mjs es
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { META } from './meta.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const dir = path.join(__dirname, 'strings');
const en = JSON.parse(fs.readFileSync(path.join(dir, '_en.json'), 'utf8'));

const TL = {
  de: 'de', fr: 'fr', it: 'it', es: 'es', pt: 'pt', nl: 'nl', pl: 'pl',
  cs: 'cs', sk: 'sk', hu: 'hu', ro: 'ro', da: 'da', sv: 'sv', no: 'no',
  fi: 'fi', el: 'el', hr: 'hr', tr: 'tr',
};

const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

async function gtx(text, tl) {
  const url =
    'https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=' +
    encodeURIComponent(tl) +
    '&dt=t&q=' +
    encodeURIComponent(text);
  const res = await fetch(url);
  if (!res.ok) throw new Error(`HTTP ${res.status}`);
  const data = await res.json();
  if (!Array.isArray(data?.[0])) throw new Error('bad payload');
  return data[0].map((part) => part?.[0] || '').join('');
}

function protect(src) {
  return src
    .replaceAll('{brand}', '[[BRAND]]')
    .replaceAll('{email}', '[[EMAIL]]')
    .replaceAll('<strong>', '[[S]]')
    .replaceAll('</strong>', '[[/S]]');
}

function restore(tr) {
  return tr
    .replaceAll('[[BRAND]]', '{brand}')
    .replaceAll('[[EMAIL]]', '{email}')
    .replaceAll('[[S]]', '<strong>')
    .replaceAll('[[/S]]', '</strong>')
    .replace(/\{\s*brand\s*\}/gi, '{brand}')
    .replace(/\{\s*email\s*\}/gi, '{email}');
}

async function translateLang(lang) {
  const tl = TL[lang];
  if (!tl) throw new Error(`Unknown ${lang}`);
  const dest = path.join(dir, `${lang}.json`);
  let out = fs.existsSync(dest) ? JSON.parse(fs.readFileSync(dest, 'utf8')) : {};

  const keys = Object.keys(en).filter((k) => k !== 'ph_phone');
  const pending = keys.filter((k) => !out[k]);

  // Keep hand-made de/fr if already complete and different from EN
  if (pending.length === 0) {
    if (META[lang]?.phonePlaceholder) out.ph_phone = META[lang].phonePlaceholder;
    fs.writeFileSync(dest, JSON.stringify(out, null, 2) + '\n');
    console.log('skip complete', lang);
    return;
  }

  console.log('start', lang, 'pending', pending.length);
  for (let i = 0; i < pending.length; i++) {
    const key = pending[i];
    let tries = 0;
    for (;;) {
      try {
        out[key] = restore(await gtx(protect(en[key]), tl));
        break;
      } catch (err) {
        tries++;
        console.warn('retry', lang, key, err.message);
        if (tries >= 6) {
          out[key] = en[key];
          break;
        }
        await sleep(1000 * tries);
      }
    }
    if (META[lang]?.phonePlaceholder) out.ph_phone = META[lang].phonePlaceholder;
    if (i % 10 === 0 || i === pending.length - 1) {
      fs.writeFileSync(dest, JSON.stringify(out, null, 2) + '\n');
      console.log(lang, `${i + 1}/${pending.length}`);
    }
    await sleep(120);
  }
  fs.writeFileSync(dest, JSON.stringify(out, null, 2) + '\n');
  console.log('WROTE', lang, Object.keys(out).length);
}

const only = process.argv[2];
const langs = only ? [only] : Object.keys(TL);
for (const lang of langs) {
  await translateLang(lang);
}
console.log('ALL DONE');

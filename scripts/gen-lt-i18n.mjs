/**
 * Generate Lithuanian (lt) i18n source packs via Google Translate gtx.
 * Resumes partial outputs. Usage: node scripts/gen-lt-i18n.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const TL = 'lt';
const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

const TOKEN_RE = /\[\[T\d+\]\]/g;

function protect(src) {
  const tokens = [];
  let s = String(src);

  const stash = (match) => {
    const id = `[[T${tokens.length}]]`;
    tokens.push(match);
    return id;
  };

  // Longer / more specific first
  s = s.replace(/<\?= e\(SITE_NAME\) \?>/g, stash);
  s = s.replace(/<\?= e\(\$brand\) \?>/g, stash);
  s = s.replace(/<\?= e\(\$audience\) \?>/g, stash);
  s = s.replace(/money_min\(\)/g, stash);
  s = s.replace(/geo_country_name\(\)/g, stash);
  s = s.replace(/' \. SITE_NAME \. '/g, stash);
  s = s.replace(/" \. SITE_NAME \. "/g, stash);
  s = s.replace(/' \. SITE_NAME/g, stash);
  s = s.replace(/SITE_NAME \. '/g, stash);
  s = s.replace(/SITE_NAME \. "/g, stash);
  s = s.replace(/\bSITE_NAME\b/g, stash);
  s = s.replace(/\{SITE\}/g, stash);
  s = s.replace(/\{MIN\}/g, stash);
  s = s.replace(/\{CUR\}/g, stash);
  s = s.replace(/\{brand\}/g, stash);
  s = s.replace(/\{email\}/g, stash);
  s = s.replace(/<\/?[a-zA-Z][^>]*>/g, stash);

  return { text: s, tokens };
}

function restore(tr, tokens) {
  let out = String(tr);
  out = out.replace(TOKEN_RE, (m) => {
    const i = Number(m.slice(3, -2));
    return tokens[i] ?? m;
  });
  // Common gtx spacing damage around braces
  out = out
    .replace(/\{\s*SITE\s*\}/gi, '{SITE}')
    .replace(/\{\s*MIN\s*\}/gi, '{MIN}')
    .replace(/\{\s*CUR\s*\}/gi, '{CUR}')
    .replace(/\{\s*brand\s*\}/gi, '{brand}')
    .replace(/\{\s*email\s*\}/gi, '{email}');
  return out;
}

async function gtx(text) {
  const url =
    'https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=' +
    encodeURIComponent(TL) +
    '&dt=t&q=' +
    encodeURIComponent(text);
  const res = await fetch(url);
  if (!res.ok) throw new Error(`HTTP ${res.status}`);
  const data = await res.json();
  if (!Array.isArray(data?.[0])) throw new Error('bad payload');
  return data[0].map((part) => part?.[0] || '').join('');
}

async function translateOne(src) {
  if (src == null || src === '') return src;
  // Pure code / locale remaps — do not send to gtx
  const hard = hardRemap(src);
  if (hard != null) return hard;

  const { text, tokens } = protect(src);
  if (!text.trim()) return src;

  let tries = 0;
  for (;;) {
    try {
      return restore(await gtx(text), tokens);
    } catch (err) {
      tries++;
      console.warn('retry', err.message, src.slice(0, 60));
      if (tries >= 6) return src;
      await sleep(1000 * tries);
    }
  }
}

/** Fixed remaps for locale/country plumbing keys (aurel etc.). */
function hardRemap(src) {
  const map = {
    "'areaServed' => 'United Kingdom'": "'areaServed' => 'Lithuania'",
    "'availableLanguage' => 'en'": "'availableLanguage' => 'lt'",
    "'inLanguage' => 'en'": "'inLanguage' => 'lt'",
    'content="en_GB"': 'content="lt_LT"',
    '"lang": "en-GB"': '"lang": "lt-LT"',
    "window.OFFER_LOCALE||'en-GB'": "window.OFFER_LOCALE||'lt-LT'",
    'money_min()) ?> min.': 'money_min()) ?> nuo',
  };
  if (Object.prototype.hasOwnProperty.call(map, src)) return map[src];
  return null;
}

function loadJson(p) {
  return JSON.parse(fs.readFileSync(p, 'utf8'));
}

function saveJson(p, obj) {
  fs.mkdirSync(path.dirname(p), { recursive: true });
  fs.writeFileSync(p, JSON.stringify(obj, null, 2) + '\n');
}

function writeMjs(p, obj) {
  fs.mkdirSync(path.dirname(p), { recursive: true });
  const lines = ['export default {'];
  for (const [k, v] of Object.entries(obj)) {
    lines.push(`  ${JSON.stringify(k)}: ${JSON.stringify(v)},`);
  }
  lines.push('};\n');
  fs.writeFileSync(p, lines.join('\n'));
}

async function loadMjsDefault(rel) {
  const mod = await import(pathToFileUrl(path.join(ROOT, rel)));
  return { ...(mod.default || {}) };
}

function pathToFileUrl(p) {
  const resolved = path.resolve(p);
  return 'file:///' + resolved.replace(/\\/g, '/');
}

async function translateJsonValues(srcRel, destRel, { phonePlaceholder } = {}) {
  const srcPath = path.join(ROOT, srcRel);
  const destPath = path.join(ROOT, destRel);
  const src = loadJson(srcPath);
  let out = fs.existsSync(destPath) ? loadJson(destPath) : {};
  const keys = Object.keys(src);
  const pending = keys.filter((k) => out[k] == null || out[k] === '');
  console.log(`\n[json] ${destRel} pending ${pending.length}/${keys.length}`);

  for (let i = 0; i < pending.length; i++) {
    const key = pending[i];
    out[key] = await translateOne(src[key]);
    if (i % 10 === 0 || i === pending.length - 1) {
      saveJson(destPath, out);
      console.log(`  ${i + 1}/${pending.length}`);
    }
    await sleep(120);
  }

  if (phonePlaceholder) out.ph_phone = phonePlaceholder;
  saveJson(destPath, out);
  console.log(`WROTE ${destRel} (${Object.keys(out).length})`);
  return out;
}

async function translateMjsKeys(srcRel, destRel) {
  const destPath = path.join(ROOT, destRel);
  const src = await loadMjsDefault(srcRel);
  let out = {};
  if (fs.existsSync(destPath)) {
    try {
      out = await loadMjsDefault(destRel);
    } catch {
      out = {};
    }
  }

  const keys = Object.keys(src);
  const pending = keys.filter((k) => out[k] == null || out[k] === '');
  console.log(`\n[mjs] ${destRel} pending ${pending.length}/${keys.length}`);

  for (let i = 0; i < pending.length; i++) {
    const key = pending[i];
    out[key] = await translateOne(key);
    if (i % 10 === 0 || i === pending.length - 1) {
      writeMjs(destPath, out);
      console.log(`  ${i + 1}/${pending.length}`);
    }
    await sleep(120);
  }

  writeMjs(destPath, out);
  console.log(`WROTE ${destRel} (${Object.keys(out).length})`);
  return out;
}

function patchCetraNames(destRel) {
  const destPath = path.join(ROOT, destRel);
  const out = loadJson(destPath);
  const names = {
    'Carolina Machado': 'Ona Kazlauskė',
    'Felipe Santos': 'Jonas Petrauskas',
    'Beatriz Lima': 'Ieva Jonaitė',
    'Lucas Ferreira': 'Tomas Vaitkus',
    'Gabriela Costa': 'Rasa Petraitytė',
    'Roberto Oliveira': 'Andrius Jankauskas',
    'São Paulo, SP': 'Vilnius',
    'Rio de Janeiro, RJ': 'Kaunas',
    'Belo Horizonte, MG': 'Klaipėda',
    'Brasília, DF': 'Šiauliai',
    'Salvador, BA': 'Panevėžys',
    'Curitiba, PR': 'Alytus',
  };
  for (const [k, v] of Object.entries(names)) {
    if (Object.prototype.hasOwnProperty.call(out, k)) out[k] = v;
  }
  saveJson(destPath, out);
  console.log(`patched cetra LT names in ${destRel}`);
}

// --- run ---
await translateJsonValues('scripts/lumen-i18n/en.json', 'scripts/lumen-i18n/lt.json');
await translateJsonValues('scripts/velora-i18n/en.json', 'scripts/velora-i18n/lt.json');
await translateJsonValues('scripts/cetra-i18n/en.json', 'scripts/cetra-i18n/lt.json');
patchCetraNames('scripts/cetra-i18n/lt.json');
await translateJsonValues('scripts/recupero-i18n/strings/_en.json', 'scripts/recupero-i18n/strings/lt.json', {
  phonePlaceholder: '612 34567',
});
await translateMjsKeys('scripts/thalora-i18n/lv.mjs', 'scripts/thalora-i18n/lt.mjs');
await translateMjsKeys('scripts/aurel-i18n/lv.mjs', 'scripts/aurel-i18n/lt.mjs');
await translateMjsKeys('scripts/lv-i18n/extra-en-lv.mjs', 'scripts/lt-i18n/extra-en-lt.mjs');

console.log('\nALL LT i18n sources generated.');

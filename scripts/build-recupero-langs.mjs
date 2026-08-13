/**
 * Build localized recupero packs under templates/recupero/langs/{lang}/
 * from English source + scripts/recupero-i18n/strings/{lang}.json
 *
 * Usage:
 *   node scripts/build-recupero-langs.mjs
 *   node scripts/build-recupero-langs.mjs de
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { META } from './recupero-i18n/meta.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const LANGS_DIR = path.join(ROOT, 'templates', 'recupero', 'langs');
const EN_DIR = path.join(LANGS_DIR, 'en');
const STRINGS_DIR = path.join(__dirname, 'recupero-i18n', 'strings');

const TARGETS = Object.keys(META);

function rmrf(dir) {
  if (fs.existsSync(dir)) fs.rmSync(dir, { recursive: true, force: true });
}

function copyDir(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const from = path.join(src, entry.name);
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyDir(from, to);
    else fs.copyFileSync(from, to);
  }
}

function phpEscape(str) {
  return String(str)
    .replace(/\\/g, '\\\\')
    .replace(/'/g, "\\'");
}

function writeI18nPhp(lang, strings) {
  const lines = [
    '<?php',
    `/** Recupero ${lang} strings */`,
    'return [',
  ];
  for (const [key, value] of Object.entries(strings)) {
    lines.push(`  '${key}' => '${phpEscape(value)}',`);
  }
  lines.push('];', '');
  return lines.join('\n');
}

function patchConfig(configPath, meta) {
  let s = fs.readFileSync(configPath, 'utf8');
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, `define('SITE_LANG', '${meta.siteLang}')`);
  s = s.replace(/define\('CURRENCY',\s*'[^']*'\)/, `define('CURRENCY', '${meta.currency}')`);
  s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, `define('CRM_COUNTRY', '${meta.crmCountry}')`);
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, `define('FORM_PHONE_COUNTRY', '${meta.phoneCountry}')`);
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, `define('FORM_ALLOWED_COUNTRIES', '${meta.phoneCountry}')`);
  fs.writeFileSync(configPath, s);
}

function patchHead(headPath, meta) {
  let s = fs.readFileSync(headPath, 'utf8');
  s = s.replace(/content="en_GB"/, `content="${meta.ogLocale}"`);
  fs.writeFileSync(headPath, s);
}

function loadEnStrings() {
  const php = fs.readFileSync(path.join(EN_DIR, 'includes', 'i18n.php'), 'utf8');
  const out = {};
  const re = /'([^']+)'\s*=>\s*'((?:\\\\|\\'|[^'])*)'/g;
  let m;
  while ((m = re.exec(php))) {
    out[m[1]] = m[2].replace(/\\'/g, "'").replace(/\\\\/g, '\\');
  }
  return out;
}

function buildLang(lang) {
  const meta = META[lang];
  if (!meta) throw new Error(`Unknown lang ${lang}`);

  const stringsPath = path.join(STRINGS_DIR, `${lang}.json`);
  if (!fs.existsSync(stringsPath)) {
    throw new Error(`Missing strings file: ${stringsPath}`);
  }

  const translated = JSON.parse(fs.readFileSync(stringsPath, 'utf8'));
  const en = loadEnStrings();
  const merged = { ...en, ...translated };
  if (meta.phonePlaceholder) merged.ph_phone = meta.phonePlaceholder;

  const missing = Object.keys(en).filter((k) => !(k in translated) && k !== 'ph_phone');
  if (missing.length) {
    console.warn(`[${lang}] missing ${missing.length} keys (EN fallback): ${missing.slice(0, 8).join(', ')}${missing.length > 8 ? '…' : ''}`);
  }

  const dest = path.join(LANGS_DIR, lang);
  rmrf(dest);
  copyDir(EN_DIR, dest);

  fs.writeFileSync(path.join(dest, 'includes', 'i18n.php'), writeI18nPhp(lang, merged));
  patchConfig(path.join(dest, 'includes', 'config.php'), meta);
  patchHead(path.join(dest, 'includes', 'head.php'), meta);

  console.log(`OK ${lang} (${Object.keys(translated).length} translated keys)`);
}

const only = process.argv[2];
const langs = only ? [only] : TARGETS;

for (const lang of langs) {
  buildLang(lang);
}

console.log(`Done: ${langs.join(', ')}`);

/**
 * Copy templates/aurel/langs/en into langs/{code} and apply EN→target maps.
 *
 * Usage:
 *   node scripts/build-aurel-from-en.mjs cs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { PACKS as THALORA_PACKS } from './thalora-i18n/index.mjs';
import { LOCALES, PACKS } from './aurel-i18n/index.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const SRC = path.join(ROOT, 'templates', 'aurel', 'langs', 'en');
const HELPERS_SRC = path.join(ROOT, 'templates', 'aurel', 'includes', 'helpers.php');
const KEITARO_SRC = path.join(ROOT, 'templates', 'aurel', 'includes', 'keitaro.php');

const TEXT_EXT = new Set(['.php', '.js', '.md', '.txt', '.json', '.xml', '.webmanifest', '.css', '.html', '.htm', '.svg']);
const SKIP_TRANSLATE = new Set([
  'config.php',
  'helpers.php',
  'keitaro.php',
  'LeadProcessor.php',
  'FormToken.php',
  'send.php',
  'form-token.php',
  'visitor-geo.php',
  'kclient.php',
  'KeitaroClickVerifier.php',
  'cwv-collector.js',
  'icon-sprite.php',
]);

function rmrf(dir) {
  if (fs.existsSync(dir)) fs.rmSync(dir, { recursive: true, force: true });
}

function copyTree(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const from = path.join(src, entry.name);
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyTree(from, to);
    else fs.copyFileSync(from, to);
  }
}

function sortedPairs(map) {
  return Object.entries(map).sort((a, b) => b[0].length - a[0].length);
}

function applyMap(content, pairs) {
  let out = content;
  for (const [from, to] of pairs) {
    if (!from || from === to) continue;
    out = out.split(from).join(to);
  }
  return out;
}

function walkFiles(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else out.push(p);
  }
  return out;
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

function leftoverEnglish(dest, map) {
  const needles = Object.keys(map).filter((k) => k.length >= 24);
  const hits = [];
  for (const file of walkFiles(dest)) {
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext)) continue;
    if (SKIP_TRANSLATE.has(path.basename(file))) continue;
    const text = fs.readFileSync(file, 'utf8');
    for (const n of needles) {
      if (text.includes(n)) hits.push(`${path.relative(dest, file).replace(/\\/g, '/')} :: ${n.slice(0, 72)}`);
    }
  }
  return hits;
}

function buildLang(lang) {
  const meta = LOCALES[lang];
  const extra = PACKS[lang];
  if (!meta || !extra) throw new Error(`Unknown aurel lang ${lang}`);

  const dest = path.join(ROOT, 'templates', 'aurel', 'langs', lang);
  rmrf(dest);
  copyTree(SRC, dest);

  if (fs.existsSync(HELPERS_SRC)) {
    fs.copyFileSync(HELPERS_SRC, path.join(dest, 'includes', 'helpers.php'));
  }
  if (fs.existsSync(KEITARO_SRC)) {
    fs.copyFileSync(KEITARO_SRC, path.join(dest, 'includes', 'keitaro.php'));
  }

  const map = { ...(THALORA_PACKS[lang] || {}), ...extra };
  const pairs = sortedPairs(map);
  for (const file of walkFiles(dest)) {
    const base = path.basename(file);
    if (SKIP_TRANSLATE.has(base)) continue;
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext) && base !== '.htaccess') continue;
    const before = fs.readFileSync(file, 'utf8');
    const after = applyMap(before, pairs);
    if (after !== before) fs.writeFileSync(file, after);
  }

  patchConfig(path.join(dest, 'includes', 'config.php'), meta);

  const hits = leftoverEnglish(dest, extra);
  if (hits.length) {
    console.warn(`[${lang}] leftover EN samples (${hits.length}):`);
    for (const h of hits.slice(0, 20)) console.warn('  ', h);
  } else {
    console.log(`[${lang}] no leftover extra-map keys`);
  }

  console.log(`OK aurel ${lang} → ${path.relative(ROOT, dest)}`);
}

const only = process.argv[2];
if (!only) {
  console.error('Usage: node scripts/build-aurel-from-en.mjs <lang>');
  process.exit(1);
}
buildLang(only);

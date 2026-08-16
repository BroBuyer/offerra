/**
 * Build localized thalora packs under templates/thalora/langs/{lang}/
 * from English source at template root + scripts/thalora-i18n/{lang}.mjs
 *
 * Usage:
 *   node scripts/build-thalora-langs.mjs
 *   node scripts/build-thalora-langs.mjs fr
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { LOCALES, PACKS } from './thalora-i18n/index.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const SRC = path.join(ROOT, 'templates', 'thalora');
const LANGS_DIR = path.join(SRC, 'langs');

const TEXT_EXT = new Set(['.php', '.js', '.md', '.txt', '.json', '.xml', '.webmanifest']);
const SKIP_DIRS = new Set(['langs', 'static', 'node_modules']);
const SKIP_FILES = new Set(['config.php', 'helpers.php', 'keitaro.php']);

function rmrf(dir) {
  if (fs.existsSync(dir)) fs.rmSync(dir, { recursive: true, force: true });
}

function shouldCopy(rel, isDir) {
  const parts = rel.split(/[\\/]/).filter(Boolean);
  if (parts.some((p) => SKIP_DIRS.has(p))) return false;
  if (parts[0] === 'integration') {
    if (isDir) return parts.length === 1;
    return path.basename(rel) === 'validation.js';
  }
  if (isDir) return true;
  const ext = path.extname(rel).toLowerCase();
  if (TEXT_EXT.has(ext)) return true;
  return path.basename(rel) === '.htaccess';
}

function copyFiltered(src, dest, rel = '') {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const from = path.join(src, entry.name);
    const nextRel = rel ? `${rel}/${entry.name}` : entry.name;
    if (!shouldCopy(nextRel, entry.isDirectory())) continue;
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyFiltered(from, to, nextRel);
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

function patchConfig(configPath, meta) {
  let s = fs.readFileSync(configPath, 'utf8');
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, `define('SITE_LANG', '${meta.siteLang}')`);
  s = s.replace(/define\('CURRENCY',\s*'[^']*'\)/, `define('CURRENCY', '${meta.currency}')`);
  s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, `define('CRM_COUNTRY', '${meta.crmCountry}')`);
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, `define('FORM_PHONE_COUNTRY', '${meta.phoneCountry}')`);
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, `define('FORM_ALLOWED_COUNTRIES', '${meta.phoneCountry}')`);
  fs.writeFileSync(configPath, s);
}

function walkFiles(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else out.push(p);
  }
  return out;
}

function translateTree(dest, map) {
  const pairs = sortedPairs(map);
  for (const file of walkFiles(dest)) {
    const base = path.basename(file);
    if (SKIP_FILES.has(base)) continue;
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext)) continue;
    const before = fs.readFileSync(file, 'utf8');
    const after = applyMap(before, pairs);
    if (after !== before) fs.writeFileSync(file, after);
  }
}

function leftoverEnglish(dest, map) {
  const needles = Object.keys(map)
    .filter((k) => k.length >= 18)
    .slice(0, 40);
  const hits = [];
  for (const file of walkFiles(dest)) {
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext)) continue;
    const text = fs.readFileSync(file, 'utf8');
    for (const n of needles) {
      if (text.includes(n)) hits.push(`${path.relative(dest, file)} :: ${n.slice(0, 60)}`);
    }
  }
  return hits;
}

function buildLang(lang) {
  const meta = LOCALES[lang];
  const pack = PACKS[lang];
  if (!meta || !pack) throw new Error(`Unknown lang ${lang}`);

  const dest = path.join(LANGS_DIR, lang);
  rmrf(dest);
  copyFiltered(SRC, dest);
  translateTree(dest, pack);
  patchConfig(path.join(dest, 'includes', 'config.php'), meta);

  const hits = leftoverEnglish(dest, pack);
  if (hits.length) {
    console.warn(`[${lang}] leftover EN samples (${hits.length}):`);
    for (const h of hits.slice(0, 12)) console.warn('  ', h);
  }

  console.log(`OK ${lang} → ${path.relative(ROOT, dest)}`);
}

const only = process.argv[2];
const langs = only ? [only] : Object.keys(PACKS);

for (const lang of langs) buildLang(lang);
console.log(`Done: ${langs.join(', ')}`);

/**
 * Build localized audax packs under templates/audax/langs/{code}/
 * from English source at langs/en + scripts/audax-i18n/{lang}.mjs
 *
 * Usage:
 *   node scripts/build-audax-langs.mjs        # all non-en packs
 *   node scripts/build-audax-langs.mjs fr     # single lang
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { LOCALES, PACKS } from './audax-i18n/index.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const SRC = path.join(ROOT, 'templates', 'audax', 'langs', 'en');
const LANGS_DIR = path.join(ROOT, 'templates', 'audax', 'langs');

const TEXT_EXT = new Set(['.php', '.js', '.md', '.txt', '.json', '.xml', '.htaccess']);
const SKIP_COPY_DIRS = new Set(['static', 'tokens']);
const SKIP_TRANSLATE = new Set([
  'helpers.php',
  'keitaro.php',
  'sitemap.php',
  'robots.php',
  'config.php',
]);

function rmrf(dir) {
  if (fs.existsSync(dir)) fs.rmSync(dir, { recursive: true, force: true });
}

function isTextRel(rel) {
  const base = path.basename(rel);
  if (base === '.htaccess') return true;
  return TEXT_EXT.has(path.extname(rel).toLowerCase());
}

function shouldCopy(rel, isDir) {
  const parts = rel.split(/[\\/]/).filter(Boolean);
  if (parts.some((p) => SKIP_COPY_DIRS.has(p))) return false;
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
    else if (isTextRel(nextRel)) {
      const body = fs.readFileSync(from, 'utf8').replace(/\r\n/g, '\n');
      fs.writeFileSync(to, body);
    } else {
      fs.copyFileSync(from, to);
    }
  }
}

function escapeRegExp(s) {
  return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

function replaceSafe(text, from, to) {
  if (!from || from === to || !text.includes(from)) return { text, count: 0 };
  if (from.trim().length < 2 && from.length < 3) {
    return { text, count: 0 };
  }
  const looksLikeToken = /^[\p{L}\p{N}'’]+$/u.test(from) && from.length <= 48;
  if (looksLikeToken) {
    const re = new RegExp(`(?<![\\p{L}\\p{N}_])${escapeRegExp(from)}(?![\\p{L}\\p{N}_])`, 'gu');
    let count = 0;
    const next = text.replace(re, () => {
      count += 1;
      return to;
    });
    return { text: next, count };
  }
  // Phrase replacements still must not match inside a longer word
  // ("7. Information" must not eat "7. Informations").
  if (/[\p{L}\p{N}]$/u.test(from)) {
    const re = new RegExp(`${escapeRegExp(from)}(?![\\p{L}\\p{N}_])`, 'gu');
    let count = 0;
    const next = text.replace(re, () => {
      count += 1;
      return to;
    });
    return { text: next, count };
  }
  const parts = text.split(from);
  return { text: parts.join(to), count: Math.max(0, parts.length - 1) };
}

function walkFiles(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else out.push(p);
  }
  return out;
}

function applyTranslations(langDir, pack) {
  const seenFrom = new Set();
  const pairs = Object.entries(pack)
    .map(([key, to]) => ({ key, from: key, to }))
    .filter((p) => p.from !== p.to)
    .filter((p) => {
      if (seenFrom.has(p.from)) return false;
      seenFrom.add(p.from);
      return true;
    })
    .sort((a, b) => b.from.length - a.from.length);

  const files = walkFiles(langDir).filter((file) => {
    const base = path.basename(file);
    if (SKIP_TRANSLATE.has(base)) return false;
    const ext = path.extname(file).toLowerCase();
    return TEXT_EXT.has(ext) || base === '.htaccess';
  });

  let replacements = 0;
  const missing = [];

  for (const { key, from, to } of pairs) {
    let hit = false;
    for (const file of files) {
      const text = fs.readFileSync(file, 'utf8').replace(/\r\n/g, '\n');
      const { text: next, count } = replaceSafe(text, from, to);
      if (count > 0) {
        fs.writeFileSync(file, next, 'utf8');
        replacements += count;
        hit = true;
      }
    }
    if (!hit) missing.push(key.length > 80 ? `${key.slice(0, 80)}…` : key);
  }

  return { replacements, missing };
}

function patchConfig(configPath, meta) {
  let s = fs.readFileSync(configPath, 'utf8');
  const swap = (name, value) => {
    const next = s.replace(
      new RegExp(`define\\('${name}',\\s*'[^']*'\\)`),
      `define('${name}', '${value}')`,
    );
    if (next === s) throw new Error(`failed to patch ${name} in ${configPath}`);
    s = next;
  };
  swap('SITE_LANG', meta.siteLang);
  swap('CURRENCY', meta.currency);
  swap('CRM_COUNTRY', meta.crmCountry);
  swap('FORM_PHONE_COUNTRY', meta.phoneCountry);
  swap('FORM_ALLOWED_COUNTRIES', meta.phoneCountry);
  fs.writeFileSync(configPath, s);
}

function patchTicker(langDir, tickerLang) {
  if (!tickerLang) return;
  const header = path.join(langDir, 'includes', 'header.php');
  if (!fs.existsSync(header)) return;
  let s = fs.readFileSync(header, 'utf8');
  const next = s.replace(
    /widgets\.tradingview-widget\.com\/w\/[a-z]{2}\//,
    `widgets.tradingview-widget.com/w/${tickerLang}/`,
  );
  if (next !== s) fs.writeFileSync(header, next);
}

function leftoverEnglish(dest, pack) {
  const needles = Object.keys(pack)
    .filter((k) => k.length >= 24)
    .slice(0, 50);
  const hits = [];
  for (const file of walkFiles(dest)) {
    const base = path.basename(file);
    if (SKIP_TRANSLATE.has(base)) continue;
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext)) continue;
    const text = fs.readFileSync(file, 'utf8').replace(/\r\n/g, '\n');
    for (const n of needles) {
      if (text.includes(n)) hits.push(`${path.relative(dest, file)} :: ${n.slice(0, 70)}`);
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
  const { replacements, missing } = applyTranslations(dest, pack);
  patchConfig(path.join(dest, 'includes', 'config.php'), meta);
  patchTicker(dest, meta.tickerLang);

  const hits = leftoverEnglish(dest, pack);
  console.log(
    `[audax-i18n] ${lang}: ${replacements} replacements, ${Object.keys(pack).length} keys` +
      (missing.length ? `, ${missing.length} unused` : ''),
  );
  if (missing.length) {
    console.warn(`[audax-i18n] unused keys (${lang}):`);
    for (const k of missing.slice(0, 20)) console.warn('  ', k);
    if (missing.length > 20) console.warn(`  … +${missing.length - 20} more`);
  }
  if (hits.length) {
    console.warn(`[audax-i18n] leftover EN (${hits.length}):`);
    for (const h of hits.slice(0, 12)) console.warn('  ', h);
  }
  console.log(`OK ${lang} → templates/audax/langs/${lang}`);
}

const only = process.argv[2];
const langs = only ? [only] : Object.keys(PACKS);

for (const lang of langs) {
  if (!PACKS[lang]) {
    console.error(`Unknown lang pack: ${lang}`);
    process.exit(1);
  }
  buildLang(lang);
}
console.log(`Done: ${langs.join(', ')}`);

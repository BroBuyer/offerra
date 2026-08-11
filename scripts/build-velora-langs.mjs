/**
 * Build localized velora packs under templates/velora/langs/{code}/
 *
 * Usage:
 *   node scripts/build-velora-langs.mjs        # all non-en packs
 *   node scripts/build-velora-langs.mjs de     # single lang
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { KEYS, KEY_LIST, PACKS, getPack } from './velora-i18n/index.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..', 'templates', 'velora');
const LANGS_DIR = path.join(ROOT, 'langs');

const TEXT_EXT = new Set([
  '.php',
  '.js',
  '.css',
  '.html',
  '.htm',
  '.md',
  '.txt',
  '.svg',
  '.htaccess',
  '.json',
  '.xml',
  '.webmanifest',
]);

function shouldCopy(rel) {
  const norm = rel.replace(/\\/g, '/');
  if (norm === 'langs' || norm.startsWith('langs/')) return false;
  if (norm.startsWith('.') && norm !== '.htaccess') {
    // allow .htaccess only at known spots; skip .git etc.
    if (!norm.includes('.htaccess')) return false;
  }
  return true;
}

function isTextFile(filePath) {
  const base = path.basename(filePath);
  if (base === '.htaccess') return true;
  return TEXT_EXT.has(path.extname(filePath).toLowerCase());
}

function copyDir(src, dest, rel = '') {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const name = entry.name;
    const childRel = rel ? `${rel}/${name}` : name;
    if (!shouldCopy(childRel)) continue;
    const from = path.join(src, name);
    const to = path.join(dest, name);
    if (entry.isDirectory()) {
      copyDir(from, to, childRel);
    } else if (entry.isFile()) {
      fs.mkdirSync(path.dirname(to), { recursive: true });
      fs.copyFileSync(from, to);
    }
  }
}

function walkFiles(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else if (entry.isFile()) out.push(p);
  }
  return out;
}

function escapeRegExp(s) {
  return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

/** Replace EN→lang without touching identifiers like mockupToday / valPhoneRequired. */
function replaceSafe(text, from, to) {
  if (!from || from === to || !text.includes(from)) return { text, count: 0 };
  // Prefer whole-token match when `from` is a single word / short label.
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
  const parts = text.split(from);
  return { text: parts.join(to), count: Math.max(0, parts.length - 1) };
}

function applyTranslations(langDir, en, pack) {
  // One pair per unique EN string (avoids Contact → Contacto → Contactoo…).
  const seenFrom = new Set();
  const pairs = KEY_LIST.map((k) => ({ key: k, from: en[k], to: pack[k] }))
    .filter((p) => p.from !== p.to)
    .filter((p) => {
      if (seenFrom.has(p.from)) return false;
      seenFrom.add(p.from);
      return true;
    })
    .sort((a, b) => b.from.length - a.from.length);

  const files = walkFiles(langDir).filter(isTextFile);
  let replacements = 0;
  const missing = [];

  for (const { key, from, to } of pairs) {
    let hit = false;
    for (const file of files) {
      const text = fs.readFileSync(file, 'utf8');
      const { text: next, count } = replaceSafe(text, from, to);
      if (count > 0) {
        fs.writeFileSync(file, next, 'utf8');
        replacements += 1;
        hit = true;
      }
    }
    if (!hit) missing.push(key);
  }

  return { replacements, missing };
}

function patchSiteLang(langDir, lang) {
  const configPath = path.join(langDir, 'includes', 'config.php');
  if (!fs.existsSync(configPath)) {
    throw new Error(`missing config.php in ${langDir}`);
  }
  let text = fs.readFileSync(configPath, 'utf8');
  const next = text.replace(
    /define\(\s*'SITE_LANG'\s*,\s*'[^']*'\s*\)/,
    `define('SITE_LANG', '${lang}')`,
  );
  if (next === text) {
    throw new Error(`failed to patch SITE_LANG in ${configPath}`);
  }
  fs.writeFileSync(configPath, next, 'utf8');
}

function buildLang(lang) {
  if (lang === 'en') throw new Error('refusing to overwrite EN root; en is the source template');
  const pack = getPack(lang);
  const dest = path.join(LANGS_DIR, lang);

  fs.rmSync(dest, { recursive: true, force: true });
  copyDir(ROOT, dest);

  const { replacements, missing } = applyTranslations(dest, KEYS, pack);
  patchSiteLang(dest, lang);

  console.log(
    `[velora-i18n] built ${lang}: ${replacements} file-writes, ${KEY_LIST.length} keys` +
      (missing.length ? `, ${missing.length} EN strings not found` : ''),
  );
  if (missing.length) {
    console.warn(`[velora-i18n] missing in sources (${lang}):`, missing.join(', '));
  }
  return { replacements, missing };
}

const arg = process.argv[2];
const targets = arg
  ? [arg]
  : Object.keys(PACKS).filter((l) => l !== 'en');

if (!targets.length) {
  console.error('No language packs to build. Add scripts/velora-i18n/{code}.json');
  process.exit(1);
}

for (const lang of targets) {
  if (!PACKS[lang]) {
    console.error(`Unknown lang pack: ${lang}`);
    process.exit(1);
  }
  buildLang(lang);
}

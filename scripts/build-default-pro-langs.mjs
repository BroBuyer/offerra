/**
 * Build default-pro language packs (text only — no PNG/static bloat).
 *
 * Usage:
 *   node scripts/build-default-pro-langs.mjs
 *   node scripts/build-default-pro-langs.mjs de
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { LANGS, SEO } from './default-pro-i18n/seo.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const SRC = path.join(ROOT, 'templates', 'default-pro');
const DEFAULT_EN = path.join(ROOT, 'templates', 'default');
const DEFAULT_LANGS = path.join(DEFAULT_EN, 'langs');
const OUT = path.join(SRC, 'langs');

const TEXT_EXT = new Set(['.php', '.js', '.css', '.md', '.txt', '.svg', '.json', '.xml', '.html', '.htm']);
const SKIP_TOP = new Set(['langs', 'static']);
const SKIP_FILES = new Set(['kclient.php', 'LeadProcessor.php', 'KeitaroClickVerifier.php']);

function shouldCopy(rel, isDir) {
  const parts = rel.split(/[\\/]/).filter(Boolean);
  if (parts[0] && SKIP_TOP.has(parts[0])) return false;
  if (isDir) {
    if (parts[0] === 'integration') return parts.length === 1;
    return true;
  }
  const base = path.basename(rel);
  if (base === '.htaccess') return true;
  if (SKIP_FILES.has(base)) return false;
  if (parts[0] === 'integration') {
    return base === 'validation.js' || base === 'default-integration.css';
  }
  return TEXT_EXT.has(path.extname(rel).toLowerCase());
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

function walkFiles(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else if (entry.isFile()) out.push(p);
  }
  return out;
}

function extractHtmlTexts(s) {
  const out = [];
  const re = />([^<]{2,})</g;
  let m;
  while ((m = re.exec(s))) {
    const t = m[1].replace(/\s+/g, ' ').trim();
    if (!t || t.includes('<?=') || t.includes('<?php')) continue;
    out.push(t);
  }
  return out;
}

function extractQuoted(s) {
  const out = [];
  const re = /'([^'\\]{3,120})'/g;
  let m;
  while ((m = re.exec(s))) out.push(m[1]);
  return out;
}

function zipPairs(a, b) {
  const map = {};
  if (a.length !== b.length) return map;
  for (let i = 0; i < a.length; i++) {
    if (a[i] && a[i] !== b[i]) map[a[i]] = b[i];
  }
  return map;
}

function mergeMaps(...maps) {
  const out = {};
  for (const map of maps) Object.assign(out, map);
  return out;
}

function defaultPhraseMap(lang) {
  const langRoot = path.join(DEFAULT_LANGS, lang);
  if (!fs.existsSync(langRoot)) return {};
  const map = {};
  const enFiles = walkFiles(DEFAULT_EN).filter((f) => {
    const rel = path.relative(DEFAULT_EN, f).replace(/\\/g, '/');
    return !rel.startsWith('langs/');
  });

  for (const enFile of enFiles) {
    const rel = path.relative(DEFAULT_EN, enFile).replace(/\\/g, '/');
    const langFile = path.join(langRoot, rel);
    if (!fs.existsSync(langFile)) continue;
    const ext = path.extname(enFile).toLowerCase();
    if (!TEXT_EXT.has(ext) && path.basename(enFile) !== '.htaccess') continue;

    const en = fs.readFileSync(enFile, 'utf8');
    const tr = fs.readFileSync(langFile, 'utf8');
    Object.assign(map, zipPairs(extractHtmlTexts(en), extractHtmlTexts(tr)));
    Object.assign(map, zipPairs(extractQuoted(en), extractQuoted(tr)));
  }

  return map;
}

function escapeRegExp(s) {
  return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

function applyMap(text, map) {
  const skipToken = new Set([
    'and', 'the', 'for', 'you', 'with', 'from', 'are', 'was', 'this', 'that',
    'not', 'all', 'can', 'has', 'new', 'our', 'your', 'have', 'will', 'than',
    'into', 'over', 'also', 'just', 'only', 'more', 'some', 'such', 'each',
    'both', 'them', 'they', 'then', 'when', 'what', 'which', 'while', 'about',
    'after', 'under', 'total', 'full',
  ]);
  const pairs = Object.entries(map)
    .filter(([from, to]) => from && to && from !== to && from.length >= 3)
    .filter(([from]) => !skipToken.has(from.toLowerCase()))
    .sort((a, b) => b[0].length - a[0].length);

  let out = text;
  for (const [from, to] of pairs) {
    if (!out.includes(from)) continue;
    const looksLikeToken = /^[\p{L}\p{N}'’]+$/u.test(from) && from.length <= 40;
    if (looksLikeToken) {
      const re = new RegExp(`(?<![\\p{L}\\p{N}_])${escapeRegExp(from)}(?![\\p{L}\\p{N}_])`, 'gu');
      out = out.replace(re, to);
    } else {
      out = out.split(from).join(to);
    }
  }
  return out;
}

function applySeo(text, pack) {
  let out = text;
  out = out.split("page_title('Intelligent trading platform')").join(
    `page_title('${pack.title.replace(/'/g, "\\'")}')`,
  );
  out = out.split("SITE_NAME . ' | Intelligent trading platform'").join(
    `SITE_NAME . ' | ${pack.title.replace(/'/g, "\\'")}'`,
  );
  out = out.split(
    ' is a global trading platform developed for users seeking consistent performance, fast execution and full control of the environment.',
  ).join(`${pack.descBefore}users${pack.descAfter}`);
  out = out.split(' is a global trading platform developed for ').join(pack.descBefore);
  out = out.split(
    ' seeking consistent performance, fast execution and full control of the environment.',
  ).join(pack.descAfter);
  out = out.split('Open <?= e(SITE_NAME) ?>').join(pack.open);
  out = out.split('Create <?= e(SITE_NAME) ?> account').join(pack.create);
  out = out.split('AI trading platform <?= e($brand) ?>:').join(`${pack.h1Lead}<?= e($brand) ?>:`);
  out = out.split('automated analysis &amp; smarter trading').join(pack.h1Accent);
  out = out.split('AI trading platform for <?= e($audience) ?>').join(
    `${pack.h1Lead.trim()} <?= e($audience) ?>`,
  );
  return out;
}

function patchConfig(file, lang) {
  if (!fs.existsSync(file)) return;
  let s = fs.readFileSync(file, 'utf8');
  s = s.replace(/define\s*\(\s*'SITE_LANG'\s*,\s*'[a-z]{2}'\s*\)/i, `define('SITE_LANG', '${lang}')`);
  fs.writeFileSync(file, s);
}

function overlayValidation(dest, lang) {
  const from = path.join(DEFAULT_LANGS, lang, 'integration', 'validation.js');
  const to = path.join(dest, 'integration', 'validation.js');
  if (fs.existsSync(from)) {
    fs.mkdirSync(path.dirname(to), { recursive: true });
    fs.copyFileSync(from, to);
  }
}

function buildLang(lang) {
  const pack = SEO[lang];
  if (!pack) throw new Error(`No SEO pack for ${lang}`);

  const dest = path.join(OUT, lang);
  fs.rmSync(dest, { recursive: true, force: true });
  copyFiltered(SRC, dest);

  const phraseMap = defaultPhraseMap(lang);

  for (const file of walkFiles(dest)) {
    const ext = path.extname(file).toLowerCase();
    const base = path.basename(file);
    if (!['.php', '.js', '.md'].includes(ext) && base !== '.htaccess') continue;
    if (base === 'config.php' || base === 'helpers.php' || base === 'keitaro.php') continue;

    let text = fs.readFileSync(file, 'utf8');
    text = applySeo(text, pack);
    text = applyMap(text, phraseMap);
    fs.writeFileSync(file, text);
  }

  patchConfig(path.join(dest, 'includes', 'config.php'), lang);
  overlayValidation(dest, lang);

  return dest;
}

const only = (process.argv[2] || '').toLowerCase();
const langs = only ? [only] : LANGS;

if (only && !LANGS.includes(only)) {
  console.error(`Unknown lang ${only}. Use one of: ${LANGS.join(', ')}`);
  process.exit(1);
}

for (const lang of langs) {
  const dest = buildLang(lang);
  const files = walkFiles(dest).length;
  console.log(`built ${lang} → ${path.relative(ROOT, dest)} (${files} files)`);
}

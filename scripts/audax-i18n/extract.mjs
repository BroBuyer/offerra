/**
 * List unique user-facing English snippets from templates/audax/langs/en.
 * Used to keep translation packs complete when the EN source changes.
 *
 *   node scripts/audax-i18n/extract.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const SRC = path.resolve(__dirname, '..', '..', 'templates', 'audax', 'langs', 'en');

const SKIP_DIRS = new Set(['static', 'tokens']);
const SKIP_FILES = new Set([
  'helpers.php',
  'keitaro.php',
  'sitemap.php',
  'robots.php',
  'config.php',
  'head.php',
  'LeadProcessor.php',
  'FormToken.php',
  'form-token.php',
  'send.php',
  'visitor-geo.php',
  'kclient.php',
  'KeitaroClickVerifier.php',
]);
const TEXT_EXT = new Set(['.php', '.js', '.md']);

function walk(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    if (entry.isDirectory()) {
      if (SKIP_DIRS.has(entry.name)) continue;
      walk(path.join(dir, entry.name), out);
      continue;
    }
    if (!entry.isFile()) continue;
    if (SKIP_FILES.has(entry.name)) continue;
    if (!TEXT_EXT.has(path.extname(entry.name).toLowerCase())) continue;
    out.push(path.join(dir, entry.name));
  }
  return out;
}

function stripPhp(src) {
  return src
    .replace(/<\?php[\s\S]*?\?>/g, ' ')
    .replace(/<\?=[\s\S]*?\?>/g, ' ')
    .replace(/<\?[\s\S]*?\?>/g, ' ');
}

function decodeLite(s) {
  return s
    .replace(/&nbsp;/g, ' ')
    .replace(/&amp;/g, '&')
    .replace(/&quot;/g, '"')
    .replace(/&#39;/g, "'")
    .replace(/\s+/g, ' ')
    .trim();
}

const chunks = new Set();

for (const file of walk(SRC)) {
  const raw = fs.readFileSync(file, 'utf8');
  const html = stripPhp(raw);

  for (const m of html.matchAll(/>([^<]+)</g)) {
    const text = decodeLite(m[1]);
    if (text.length >= 3 && /[A-Za-z]/.test(text)) chunks.add(text);
  }

  for (const attr of ['placeholder', 'aria-label', 'alt', 'title', 'content']) {
    const re = new RegExp(`${attr}="([^"]+)"`, 'g');
    for (const m of html.matchAll(re)) {
      const text = decodeLite(m[1]);
      if (text.length >= 3 && /[A-Za-z]/.test(text)) chunks.add(text);
    }
  }

  if (file.endsWith('validation.js')) {
    for (const m of raw.matchAll(/'([^']{8,})'/g)) {
      if (/[A-Za-z]/.test(m[1])) chunks.add(m[1]);
    }
  }
}

const list = [...chunks].sort((a, b) => b.length - a.length || a.localeCompare(b));
console.log(list.join('\n'));
console.error(`\n${list.length} unique snippets from ${path.relative(path.resolve(__dirname, '../..'), SRC)}`);

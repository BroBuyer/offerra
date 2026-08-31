/**
 * Copy an English template tree into langs/ja and apply EN→Japanese replacements.
 *
 * Usage:
 *   node scripts/build-ja-from-en.mjs noctra
 *   node scripts/build-ja-from-en.mjs default
 *   node scripts/build-ja-from-en.mjs multilang
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import thaloraJa from './thalora-i18n/ja.mjs';
import extra from './ja-i18n/extra-en-ja.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');

const TEXT_EXT = new Set(['.php', '.js', '.md', '.txt', '.json', '.xml', '.webmanifest', '.css', '.html', '.htm', '.svg']);
const SKIP_DIRS = new Set(['langs', 'static', 'node_modules', '.git']);
const SKIP_TRANSLATE = new Set(['config.php', 'helpers.php', 'keitaro.php']);

const TEMPLATES = {
  noctra: { src: 'templates/noctra', dest: 'templates/noctra/langs/ja' },
  default: { src: 'templates/default', dest: 'templates/default/langs/ja' },
  multilang: { src: 'templates/multilang', dest: 'templates/multilang/langs/ja' },
};

const META = {
  siteLang: 'ja',
  crmCountry: 'JP',
  phoneCountry: 'jp',
  currency: 'JPY',
};

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

function walkFiles(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else out.push(p);
  }
  return out;
}

function patchConfig(configPath) {
  if (!fs.existsSync(configPath)) return;
  let s = fs.readFileSync(configPath, 'utf8');
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, `define('SITE_LANG', '${META.siteLang}')`);
  s = s.replace(/define\('CURRENCY',\s*'[^']*'\)/, `define('CURRENCY', '${META.currency}')`);
  s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, `define('CRM_COUNTRY', '${META.crmCountry}')`);
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, `define('FORM_PHONE_COUNTRY', '${META.phoneCountry}')`);
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, `define('FORM_ALLOWED_COUNTRIES', '${META.phoneCountry}')`);
  fs.writeFileSync(configPath, s);
}

function build(id) {
  const spec = TEMPLATES[id];
  if (!spec) throw new Error(`Unknown template ${id}`);
  const src = path.join(ROOT, spec.src);
  const dest = path.join(ROOT, spec.dest);
  if (!fs.existsSync(src)) throw new Error(`Missing source ${src}`);

  rmrf(dest);
  copyFiltered(src, dest);

  const map = { ...thaloraJa, ...extra };
  const pairs = sortedPairs(map);
  for (const file of walkFiles(dest)) {
    const base = path.basename(file);
    if (SKIP_TRANSLATE.has(base)) continue;
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext) && base !== '.htaccess') continue;
    const before = fs.readFileSync(file, 'utf8');
    let after = applyMap(before, pairs);
    after = after.replace(/(\?\?|=)\s*'SITE_NAME \. /g, '$1 SITE_NAME . ');
    after = after.replace(/(\$page_description = SITE_NAME \. '[^']+。)(;)/g, "$1'$2");
    if (after !== before) fs.writeFileSync(file, after);
  }

  patchConfig(path.join(dest, 'includes', 'config.php'));

  const templateRoot = path.join(ROOT, 'templates', id);
  for (const shared of ['helpers.php', 'keitaro.php']) {
    const from = path.join(templateRoot, 'includes', shared);
    const to = path.join(dest, 'includes', shared);
    if (fs.existsSync(from)) {
      fs.mkdirSync(path.dirname(to), { recursive: true });
      fs.copyFileSync(from, to);
    }
  }

  console.log(`OK ${id} → ${path.relative(ROOT, dest)}`);
}

const only = process.argv[2];
const ids = only ? [only] : Object.keys(TEMPLATES);
for (const id of ids) build(id);
console.log(`Done: ${ids.join(', ')}`);

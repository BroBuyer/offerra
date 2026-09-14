/**
 * Build Lithuanian (lt) packs for every Offerra template.
 * Usage: node scripts/add-lt-lang.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { spawnSync } from 'child_process';
import extra from './lt-i18n/extra-en-lt.mjs';
import { PACKS as THALORA_PACKS } from './thalora-i18n/index.mjs';
import { PACKS as AUREL_PACKS } from './aurel-i18n/index.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');

function run(script, arg) {
  const args = [path.join(ROOT, script)];
  if (arg) args.push(arg);
  console.log(`\n>>> node ${script}${arg ? ' ' + arg : ''}`);
  const res = spawnSync(process.execPath, args, { cwd: ROOT, stdio: 'inherit' });
  if (res.status !== 0) throw new Error(`${script} failed with ${res.status}`);
}

function copyFile(from, to) {
  fs.mkdirSync(path.dirname(to), { recursive: true });
  fs.copyFileSync(from, to);
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

function patchConfig(configPath, extraMeta = {}) {
  if (!fs.existsSync(configPath)) return;
  let s = fs.readFileSync(configPath, 'utf8');
  const meta = {
    siteLang: 'lt',
    currency: 'EUR',
    crmCountry: 'LT',
    phoneCountry: 'lt',
    ...extraMeta,
  };
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, `define('SITE_LANG', '${meta.siteLang}')`);
  s = s.replace(/define\('CURRENCY',\s*'[^']*'\)/, `define('CURRENCY', '${meta.currency}')`);
  s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, `define('CRM_COUNTRY', '${meta.crmCountry}')`);
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, `define('FORM_PHONE_COUNTRY', '${meta.phoneCountry}')`);
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, `define('FORM_ALLOWED_COUNTRIES', '${meta.phoneCountry}')`);
  fs.writeFileSync(configPath, s);
}

function applyExtra(dest, map = extra) {
  const pairs = Object.entries(map).sort((a, b) => b[0].length - a[0].length);
  function walk(dir, out = []) {
    if (!fs.existsSync(dir)) return out;
    for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
      const p = path.join(dir, entry.name);
      if (entry.isDirectory()) walk(p, out);
      else out.push(p);
    }
    return out;
  }
  const textExt = new Set(['.php', '.js', '.md', '.txt', '.json', '.xml', '.css', '.html', '.htm', '.svg']);
  for (const file of walk(dest)) {
    const ext = path.extname(file).toLowerCase();
    if (!textExt.has(ext)) continue;
    if (['config.php', 'helpers.php', 'keitaro.php'].includes(path.basename(file))) continue;
    let text = fs.readFileSync(file, 'utf8');
    const before = text;
    for (const [from, to] of pairs) {
      if (from && from !== to) text = text.split(from).join(to);
    }
    if (text !== before) fs.writeFileSync(file, text);
  }
}

function prepareLumenSkeleton() {
  const src = path.join(ROOT, 'templates', 'lumen');
  const dest = path.join(src, 'langs', 'lt');
  fs.mkdirSync(path.join(dest, 'includes'), { recursive: true });
  fs.mkdirSync(path.join(dest, 'integration'), { recursive: true });
  const files = [
    'includes/config.php',
    'includes/helpers.php',
    'includes/form.php',
    'includes/keitaro.php',
    'includes/payment-icons.php',
    'includes/partners.php',
    'includes/platform-image.php',
    'privacy.php',
    'conditions.php',
    'sitemap.php',
    'robots.php',
    'integration/validation.js',
  ];
  for (const rel of files) {
    const from = path.join(src, rel);
    if (fs.existsSync(from)) copyFile(from, path.join(dest, rel));
  }
}

/** Solano shares aurel copy — build from solano/en with thalora+aurel EN→LT maps. */
function buildSolanoLt() {
  const src = path.join(ROOT, 'templates', 'solano', 'langs', 'en');
  const dest = path.join(ROOT, 'templates', 'solano', 'langs', 'lt');
  if (!fs.existsSync(src)) throw new Error('Missing templates/solano/langs/en');
  if (fs.existsSync(dest)) fs.rmSync(dest, { recursive: true, force: true });
  copyTree(src, dest);

  const map = {
    ...(THALORA_PACKS.lt || {}),
    ...(AUREL_PACKS.lt || {}),
    ...extra,
  };
  applyExtra(dest, map);
  patchConfig(path.join(dest, 'includes', 'config.php'));

  for (const shared of ['helpers.php', 'keitaro.php']) {
    const from = path.join(ROOT, 'templates', 'solano', 'includes', shared);
    const to = path.join(dest, 'includes', shared);
    if (fs.existsSync(from)) copyFile(from, to);
  }
  console.log('OK solano → templates/solano/langs/lt');
}

prepareLumenSkeleton();
run('scripts/build-lumen-langs.mjs', 'lt');
patchConfig(path.join(ROOT, 'templates', 'lumen', 'langs', 'lt', 'includes', 'config.php'));
applyExtra(path.join(ROOT, 'templates', 'lumen', 'langs', 'lt'));
run('scripts/build-recupero-langs.mjs', 'lt');
copyFile(
  path.join(ROOT, 'templates', 'recupero', 'includes', 'helpers.php'),
  path.join(ROOT, 'templates', 'recupero', 'langs', 'lt', 'includes', 'helpers.php'),
);
run('scripts/build-velora-langs.mjs', 'lt');
patchConfig(path.join(ROOT, 'templates', 'velora', 'langs', 'lt', 'includes', 'config.php'));
run('scripts/build-cetra-langs.mjs', 'lt');
copyFile(
  path.join(ROOT, 'templates', 'cetra', 'includes', 'helpers.php'),
  path.join(ROOT, 'templates', 'cetra', 'langs', 'lt', 'includes', 'helpers.php'),
);
run('scripts/build-thalora-langs.mjs', 'lt');
run('scripts/build-aurel-from-en.mjs', 'lt');
run('scripts/build-lt-from-en.mjs');
run('scripts/build-default-pro-langs.mjs', 'lt');
buildSolanoLt();

console.log('\nLT packs built.');

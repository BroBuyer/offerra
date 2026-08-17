/**
 * Build Bahasa Melayu (ms) packs for every Offerra template.
 * Usage: node scripts/add-ms-lang.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { spawnSync } from 'child_process';
import extra from './ms-i18n/extra-en-ms.mjs';

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

function patchConfig(configPath, extra = {}) {
  if (!fs.existsSync(configPath)) return;
  let s = fs.readFileSync(configPath, 'utf8');
  const meta = {
    siteLang: 'ms',
    currency: 'MYR',
    crmCountry: 'MY',
    phoneCountry: 'my',
    ...extra,
  };
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, `define('SITE_LANG', '${meta.siteLang}')`);
  s = s.replace(/define\('CURRENCY',\s*'[^']*'\)/, `define('CURRENCY', '${meta.currency}')`);
  s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, `define('CRM_COUNTRY', '${meta.crmCountry}')`);
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, `define('FORM_PHONE_COUNTRY', '${meta.phoneCountry}')`);
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, `define('FORM_ALLOWED_COUNTRIES', '${meta.phoneCountry}')`);
  fs.writeFileSync(configPath, s);
}

function prepareLumenSkeleton() {
  const src = path.join(ROOT, 'templates', 'lumen');
  const dest = path.join(src, 'langs', 'ms');
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

prepareLumenSkeleton();
run('scripts/build-lumen-langs.mjs', 'ms');
patchConfig(path.join(ROOT, 'templates', 'lumen', 'langs', 'ms', 'includes', 'config.php'));
{
  const dest = path.join(ROOT, 'templates', 'lumen', 'langs', 'ms');
  const pairs = Object.entries(extra).sort((a, b) => b[0].length - a[0].length);
  function walk(dir, out = []) {
    for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
      const p = path.join(dir, entry.name);
      if (entry.isDirectory()) walk(p, out);
      else out.push(p);
    }
    return out;
  }
  for (const file of walk(dest)) {
    const ext = path.extname(file).toLowerCase();
    if (!['.php', '.js'].includes(ext)) continue;
    if (['config.php', 'helpers.php', 'keitaro.php'].includes(path.basename(file))) continue;
    let text = fs.readFileSync(file, 'utf8');
    const before = text;
    for (const [from, to] of pairs) {
      if (from && from !== to) text = text.split(from).join(to);
    }
    if (text !== before) fs.writeFileSync(file, text);
  }
}
run('scripts/build-recupero-langs.mjs', 'ms');
run('scripts/build-velora-langs.mjs', 'ms');
patchConfig(path.join(ROOT, 'templates', 'velora', 'langs', 'ms', 'includes', 'config.php'));
run('scripts/build-cetra-langs.mjs', 'ms');
run('scripts/build-thalora-langs.mjs', 'ms');
run('scripts/build-ms-from-en.mjs');

console.log('\nMS packs built.');

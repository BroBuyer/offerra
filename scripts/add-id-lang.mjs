/**
 * Build Indonesian (id) packs for every Offerra template.
 * Usage: node scripts/add-id-lang.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { spawnSync } from 'child_process';
import extra from './id-i18n/extra-en-id.mjs';
import { applyMsToId } from './id-i18n/ms-to-id.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');

const TEXT_EXT = new Set(['.php', '.js', '.md', '.txt', '.json', '.xml', '.css', '.html', '.htm', '.svg', '.webmanifest']);
const SKIP_TRANSLATE = new Set(['config.php', 'helpers.php', 'keitaro.php', 'LeadProcessor.php', 'FormToken.php', 'send.php', 'form-token.php', 'visitor-geo.php', 'kclient.php', 'KeitaroClickVerifier.php']);

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

function walkFiles(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else out.push(p);
  }
  return out;
}

function patchConfig(configPath, extraMeta = {}) {
  if (!fs.existsSync(configPath)) return;
  let s = fs.readFileSync(configPath, 'utf8');
  const meta = {
    siteLang: 'id',
    currency: 'IDR',
    crmCountry: 'ID',
    phoneCountry: 'id',
    ...extraMeta,
  };
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, `define('SITE_LANG', '${meta.siteLang}')`);
  s = s.replace(/define\('CURRENCY',\s*'[^']*'\)/, `define('CURRENCY', '${meta.currency}')`);
  s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, `define('CRM_COUNTRY', '${meta.crmCountry}')`);
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, `define('FORM_PHONE_COUNTRY', '${meta.phoneCountry}')`);
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, `define('FORM_ALLOWED_COUNTRIES', '${meta.phoneCountry}')`);
  // Malay leftovers in seed comments / locale
  s = s.replace(/ms-MY/g, 'id-ID').replace(/ms_MY/g, 'id_ID');
  fs.writeFileSync(configPath, s);
}

function applyMapToTree(dest, map = extra) {
  const pairs = [
    ...Object.entries(map),
  ].sort((a, b) => b[0].length - a[0].length);

  for (const file of walkFiles(dest)) {
    const base = path.basename(file);
    if (SKIP_TRANSLATE.has(base)) continue;
    const ext = path.extname(file).toLowerCase();
    if (!TEXT_EXT.has(ext)) continue;
    let text = fs.readFileSync(file, 'utf8');
    const before = text;
    text = applyMsToId(text);
    for (const [from, to] of pairs) {
      if (from && from !== to) text = text.split(from).join(to);
    }
    // locale plumbing
    text = text
      .replace(/\bms-MY\b/g, 'id-ID')
      .replace(/\bms_MY\b/g, 'id_ID')
      .replace(/Bahasa Melayu/g, 'Bahasa Indonesia')
      .replace(/'SITE_LANG',\s*'ms'/, "'SITE_LANG', 'id'")
      .replace(/'CRM_COUNTRY',\s*'MY'/, "'CRM_COUNTRY', 'ID'")
      .replace(/'FORM_PHONE_COUNTRY',\s*'my'/, "'FORM_PHONE_COUNTRY', 'id'")
      .replace(/'FORM_ALLOWED_COUNTRIES',\s*'my'/, "'FORM_ALLOWED_COUNTRIES', 'id'")
      .replace(/'CURRENCY',\s*'MYR'/, "'CURRENCY', 'IDR'");
    if (text !== before) fs.writeFileSync(file, text);
  }
}

function prepareLumenSkeleton() {
  const src = path.join(ROOT, 'templates', 'lumen');
  const dest = path.join(src, 'langs', 'id');
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

/** Copy langs/ms → langs/id, remap Malay→Indonesian, refresh shared helpers. */
function cloneMsPack(template, { sharedRoot } = {}) {
  const src = path.join(ROOT, 'templates', template, 'langs', 'ms');
  const dest = path.join(ROOT, 'templates', template, 'langs', 'id');
  if (!fs.existsSync(src)) throw new Error(`Missing ${src}`);
  if (fs.existsSync(dest)) fs.rmSync(dest, { recursive: true, force: true });
  copyTree(src, dest);
  applyMapToTree(dest);
  patchConfig(path.join(dest, 'includes', 'config.php'));

  const root = sharedRoot || path.join(ROOT, 'templates', template);
  for (const shared of ['helpers.php', 'keitaro.php']) {
    const from = path.join(root, 'includes', shared);
    const to = path.join(dest, 'includes', shared);
    if (fs.existsSync(from)) copyFile(from, to);
  }
  console.log(`OK ${template} ← ms remap → langs/id`);
}

// 1) Source dictionaries from ms
run('scripts/gen-id-from-ms.mjs');

// 2) Builder-based templates
prepareLumenSkeleton();
run('scripts/build-lumen-langs.mjs', 'id');
patchConfig(path.join(ROOT, 'templates', 'lumen', 'langs', 'id', 'includes', 'config.php'));
applyMapToTree(path.join(ROOT, 'templates', 'lumen', 'langs', 'id'));

run('scripts/build-recupero-langs.mjs', 'id');
copyFile(
  path.join(ROOT, 'templates', 'recupero', 'includes', 'helpers.php'),
  path.join(ROOT, 'templates', 'recupero', 'langs', 'id', 'includes', 'helpers.php'),
);
applyMapToTree(path.join(ROOT, 'templates', 'recupero', 'langs', 'id'));
patchConfig(path.join(ROOT, 'templates', 'recupero', 'langs', 'id', 'includes', 'config.php'));

run('scripts/build-velora-langs.mjs', 'id');
patchConfig(path.join(ROOT, 'templates', 'velora', 'langs', 'id', 'includes', 'config.php'));
applyMapToTree(path.join(ROOT, 'templates', 'velora', 'langs', 'id'));

run('scripts/build-cetra-langs.mjs', 'id');
copyFile(
  path.join(ROOT, 'templates', 'cetra', 'includes', 'helpers.php'),
  path.join(ROOT, 'templates', 'cetra', 'langs', 'id', 'includes', 'helpers.php'),
);
applyMapToTree(path.join(ROOT, 'templates', 'cetra', 'langs', 'id'));
patchConfig(path.join(ROOT, 'templates', 'cetra', 'langs', 'id', 'includes', 'config.php'));

run('scripts/build-thalora-langs.mjs', 'id');
applyMapToTree(path.join(ROOT, 'templates', 'thalora', 'langs', 'id'));
patchConfig(path.join(ROOT, 'templates', 'thalora', 'langs', 'id', 'includes', 'config.php'));

// Clone+remap from existing ms packs (full prose coverage)
for (const t of ['aurel', 'solano', 'noctra', 'default', 'default-pro', 'multilang']) {
  cloneMsPack(t);
}

console.log('\nID packs built.');

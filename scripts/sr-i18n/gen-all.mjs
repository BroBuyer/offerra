/**
 * Generate Serbian dicts/packs from Croatian sources, then copy hr→sr folders
 * for templates without a key-based builder.
 *
 *   node scripts/sr-i18n/gen-all.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { toSr, mapObject } from './convert.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '../..');

const TEXT_EXT = new Set([
  '.php', '.js', '.mjs', '.css', '.md', '.txt', '.json', '.xml',
  '.html', '.htm', '.svg', '.webmanifest',
]);

function writeJson(file, obj) {
  fs.mkdirSync(path.dirname(file), { recursive: true });
  fs.writeFileSync(file, JSON.stringify(obj, null, 2) + '\n');
}

function dumpMjs(obj) {
  return `export default ${JSON.stringify(obj, null, 2)};\n`;
}

function copyDir(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const from = path.join(src, entry.name);
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyDir(from, to);
    else fs.copyFileSync(from, to);
  }
}

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

function isText(file) {
  const base = path.basename(file);
  if (base === '.htaccess') return true;
  return TEXT_EXT.has(path.extname(file).toLowerCase());
}

function patchCopiedConfig(file) {
  if (!fs.existsSync(file)) return;
  let s = fs.readFileSync(file, 'utf8');
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, "define('SITE_LANG', 'sr')");
  s = s.replace(/define\('CRM_COUNTRY',\s*'HR'\)/, "define('CRM_COUNTRY', 'RS')");
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'hr'\)/, "define('FORM_PHONE_COUNTRY', 'rs')");
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'hr'\)/, "define('FORM_ALLOWED_COUNTRIES', 'rs')");
  s = s.replace(/define\('CURRENCY',\s*'EUR'\)/, "define('CURRENCY', 'RSD')");
  s = s.replace(/content="hr_HR"/g, 'content="sr_RS"');
  s = s.replace(/og:locale['"]\s*,\s*'hr_HR'/g, "og:locale', 'sr_RS'");
  fs.writeFileSync(file, s);
}

async function convertAudax() {
  const ui = (await import('../audax-i18n/hr-ui.mjs')).default;
  const legal = (await import('../audax-i18n/hr-legal.mjs')).default;
  fs.mkdirSync(path.join(ROOT, 'scripts/audax-i18n'), { recursive: true });
  fs.writeFileSync(path.join(ROOT, 'scripts/audax-i18n/sr-ui.mjs'), dumpMjs(mapObject(ui)));
  fs.writeFileSync(path.join(ROOT, 'scripts/audax-i18n/sr-legal.mjs'), dumpMjs(mapObject(legal)));
  fs.writeFileSync(
    path.join(ROOT, 'scripts/audax-i18n/sr.mjs'),
    "import ui from './sr-ui.mjs';\nimport legal from './sr-legal.mjs';\n\nexport default { ...ui, ...legal };\n",
  );
  console.log('audax-i18n sr dicts');
}

async function convertThalora() {
  const hr = (await import('../thalora-i18n/hr.mjs')).default;
  fs.writeFileSync(path.join(ROOT, 'scripts/thalora-i18n/sr.mjs'), dumpMjs(mapObject(hr)));
  console.log('thalora-i18n sr.mjs');
}

async function convertAurelDict() {
  const { REPLACEMENTS } = await import('../aurel-i18n/hr-replacements.mjs');
  const extraPath = path.join(ROOT, 'scripts/aurel-i18n/hr-replacements-extra.mjs');
  let extra = [];
  if (fs.existsSync(extraPath)) {
    const extraMod = await import('../aurel-i18n/hr-replacements-extra.mjs');
    extra = extraMod.REPLACEMENTS
      || Object.entries(extraMod.HR_EXTRA || extraMod.default || {});
  }
  const merged = [...REPLACEMENTS, ...extra];
  const sr = mapObject(merged, { geo: true });
  fs.writeFileSync(
    path.join(ROOT, 'scripts/aurel-i18n/sr.mjs'),
    `/** Extra EN/ES→SR strings for aurel (from hr pack + ekavian). */\nexport default ${JSON.stringify(Object.fromEntries(sr.filter((x) => Array.isArray(x) && x.length >= 2).map(([k, v]) => [k, v])), null, 2)};\n`,
  );
  console.log('aurel-i18n sr.mjs');
}

function convertJsonPack(relFrom, relTo, { geo = false } = {}) {
  const src = path.join(ROOT, relFrom);
  const dest = path.join(ROOT, relTo);
  const json = JSON.parse(fs.readFileSync(src, 'utf8'));
  writeJson(dest, mapObject(json, { geo }));
  console.log(relTo);
}

function copyHrPack(template, { geo = true } = {}) {
  const src = path.join(ROOT, 'templates', template, 'langs', 'hr');
  const dest = path.join(ROOT, 'templates', template, 'langs', 'sr');
  if (!fs.existsSync(src)) {
    console.warn(`skip copy ${template}: no langs/hr`);
    return;
  }
  fs.rmSync(dest, { recursive: true, force: true });
  copyDir(src, dest);
  for (const file of walk(dest)) {
    if (!isText(file)) continue;
    const base = path.basename(file);
    if (base === 'helpers.php' || base === 'keitaro.php' || base === 'config.php') continue;
    const text = fs.readFileSync(file, 'utf8').replace(/\r\n/g, '\n');
    const next = toSr(text, { geo });
    if (next !== text) fs.writeFileSync(file, next);
  }
  patchCopiedConfig(path.join(dest, 'includes', 'config.php'));
  const head = path.join(dest, 'includes', 'head.php');
  if (fs.existsSync(head)) {
    let s = fs.readFileSync(head, 'utf8');
    s = s.replace(/hr_HR/g, 'sr_RS').replace(/hr-HR/g, 'sr-RS');
    fs.writeFileSync(head, s);
  }
  console.log(`copied ${template}/langs/sr`);
}

async function main() {
  await convertAudax();
  await convertThalora();
  await convertAurelDict();

  convertJsonPack('scripts/lumen-i18n/hr.json', 'scripts/lumen-i18n/sr.json');
  convertJsonPack('scripts/recupero-i18n/strings/hr.json', 'scripts/recupero-i18n/strings/sr.json');
  convertJsonPack('scripts/cetra-i18n/hr.json', 'scripts/cetra-i18n/sr.json');

  for (const tpl of ['default', 'solano', 'noctra', 'multilang', 'aurel', 'velora']) {
    copyHrPack(tpl, { geo: true });
  }
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});

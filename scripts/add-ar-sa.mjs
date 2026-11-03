/**
 * Add Arabic (ar) packs + SA geo wiring across templates.
 *   node scripts/add-ar-sa.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const TEMPLATES = path.join(ROOT, 'templates');

const SKIP_DIR = new Set(['tokens', 'node_modules', '.git']);
const TEXT_EXT = new Set([
  '.php', '.js', '.mjs', '.css', '.md', '.txt', '.json', '.xml',
  '.html', '.htm', '.svg', '.webmanifest',
]);

const TEMPLATES_WITH_EN = new Set([
  'audax', 'aurel', 'cetra', 'recupero', 'solano',
]);

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    if (SKIP_DIR.has(entry.name)) continue;
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

function copyDir(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    if (SKIP_DIR.has(entry.name)) continue;
    const from = path.join(src, entry.name);
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyDir(from, to);
    else fs.copyFileSync(from, to);
  }
}

function isText(file) {
  const base = path.basename(file);
  if (base === '.htaccess') return true;
  return TEXT_EXT.has(path.extname(file).toLowerCase());
}

function patchHelpers(file) {
  let s = fs.readFileSync(file, 'utf8');
  const orig = s;

  if (s.includes("'ar' => 'ar-SA'")) {
    // already patched
  } else if (s.includes("'ms' => 'ms-MY'")) {
    s = s.replace("'ms' => 'ms-MY'", "'ms' => 'ms-MY', 'ar' => 'ar-SA'");
  }

  if (s.includes("function html_dir()")) {
    // ok
  } else if (s.includes('function site_locale(): string')) {
    s = s.replace(
      /function site_locale\(\): string\n\{/,
      `function html_dir(): string
{
    return strtolower((string) (defined('SITE_LANG') ? SITE_LANG : 'en')) === 'ar' ? 'rtl' : 'ltr';
}

function site_locale(): string
{`,
    );
  }

  if (s.includes("'SAR'")) {
    // ok
  } else {
    s = s.replace(
      /return match \(strtoupper\(\(string\) CURRENCY\)\) \{\n([\s\S]*?)(\n\s+default => )/g,
      (m, body, def) => {
        if (body.includes("'SAR'")) return m;
        return `return match (strtoupper((string) CURRENCY)) {\n${body}        'SAR' => '﷼',${def}`;
      },
    );
    s = s.replace(
      /return match \(\$code\) \{\n([\s\S]*?)(\n\s+default => \$code,)/,
      (m, body, def) => {
        if (body.includes("'SAR'")) return m;
        return `return match ($code) {\n${body}        'SAR' => '﷼',${def}`;
      },
    );
  }

  if (s.includes("'SA' =>")) {
    // ok
  } else if (s.includes("'AE' => 'the UAE'")) {
    s = s.replace("'AE' => 'the UAE'", "'AE' => 'the UAE', 'SA' => 'Saudi Arabia'");
  }

  if (s.includes("'ar' => 'المتداولون في '.$country")) {
    // ok
  } else if (s.includes("'it' => 'trader in '.$country")) {
    s = s.replace(
      "'it' => 'trader in '.$country,",
      "'it' => 'trader in '.$country,\n        'ar' => 'المتداولون في '.$country,",
    );
  }

  if (s !== orig) fs.writeFileSync(file, s);
}

function patchCopiedPack(dir) {
  for (const file of walk(dir)) {
    if (!isText(file)) continue;
    let s = fs.readFileSync(file, 'utf8');
    const orig = s;

    s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, "define('SITE_LANG', 'ar')");
    s = s.replace(/const SITE_LANG = '[^']*'/, "const SITE_LANG = 'ar'");
    s = s.replace(/define\('CRM_COUNTRY',\s*'[^']*'\)/, "define('CRM_COUNTRY', 'SA')");
    s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'[^']*'\)/, "define('FORM_PHONE_COUNTRY', 'sa')");
    s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'[^']*'\)/, "define('FORM_ALLOWED_COUNTRIES', 'sa')");
    s = s.replace(/define\('CURRENCY',\s*'EUR'\)/, "define('CURRENCY', 'SAR')");
    s = s.replace(/content="[a-z]{2}_[A-Z]{2}"/g, 'content="ar_SA"');
    s = s.replace(/og:locale['"]\s*,\s*'[a-z]{2}_[A-Z]{2}'/g, "og:locale', 'ar_SA'");
    s = s.replace(/html lang="<?= e\(site_locale\(\)\) ?>"/g, 'html lang="<?= e(site_locale()) ?>" dir="<?= e(html_dir()) ?>"');
    s = s.replace(/html lang="<?= e\(SITE_LANG\) ?>"/g, 'html lang="<?= e(SITE_LANG) ?>" dir="<?= e(function_exists(\'html_dir\') ? html_dir() : \'rtl\') ?>"');
    s = s.replace(/<html lang="<?= e\(\$lang\) ?>"/g, '<html lang="<?= e($lang) ?>" dir="<?= $lang === \'ar\' ? \'rtl\' : \'ltr\' ?>"');

    if (s !== orig) fs.writeFileSync(file, s);
  }
}

function templateIds() {
  return fs.readdirSync(TEMPLATES, { withFileTypes: true })
    .filter((e) => e.isDirectory() && !e.name.startsWith('.'))
    .map((e) => e.name)
    .sort();
}

function sourceLangDir(id) {
  const langs = path.join(TEMPLATES, id, 'langs');
  if (!fs.existsSync(langs)) return null;
  if (TEMPLATES_WITH_EN.has(id) && fs.existsSync(path.join(langs, 'en'))) {
    return path.join(langs, 'en');
  }
  if (fs.existsSync(path.join(langs, 'en'))) return path.join(langs, 'en');
  if (fs.existsSync(path.join(langs, 'it'))) return path.join(langs, 'it');
  return null;
}

for (const file of walk(TEMPLATES).filter((f) => f.endsWith(`${path.sep}includes${path.sep}helpers.php`))) {
  if (file.includes(`${path.sep}langs${path.sep}`)) continue;
  patchHelpers(file);
}
console.log('patched root helpers');

for (const id of templateIds()) {
  if (id === 'vespera') continue;
  const src = sourceLangDir(id);
  if (!src) {
    console.log(`skip ${id}: no source lang dir`);
    continue;
  }
  const dest = path.join(TEMPLATES, id, 'langs', 'ar');
  if (fs.existsSync(dest)) {
    fs.rmSync(dest, { recursive: true, force: true });
  }
  copyDir(src, dest);
  patchCopiedPack(dest);
  console.log(`pack ${id} ← ${path.basename(src)}`);
}

const vesperaLangs = path.join(TEMPLATES, 'vespera', 'langs', 'ar');
fs.mkdirSync(vesperaLangs, { recursive: true });
fs.writeFileSync(
  path.join(vesperaLangs, 'index.php'),
  `<?php
declare(strict_types=1);

/** Origin nginx maps /ar/ → langs/ar/index.php. */
require dirname(__DIR__, 2).'/index.php';
`,
);

const vesperaCfg = path.join(TEMPLATES, 'vespera', 'includes', 'config.php');
let cfg = fs.readFileSync(vesperaCfg, 'utf8');
if (!cfg.includes("'ar'")) {
  cfg = cfg.replace(
    "const SUPPORTED_LANGS = ['cs'",
    "const SUPPORTED_LANGS = ['ar', 'cs'",
  );
  if (!cfg.includes("'SA' => 'ar'")) {
    cfg = cfg.replace(
      /'JP' => 'ja',\n\];/,
      "'JP' => 'ja',\n    'SA' => 'ar',\n];",
    );
  }
  fs.writeFileSync(vesperaCfg, cfg);
}

const vesperaHeader = path.join(TEMPLATES, 'vespera', 'includes', 'header.php');
let hdr = fs.readFileSync(vesperaHeader, 'utf8');
if (!hdr.includes('dir=')) {
  hdr = hdr.replace(
    '<html lang="<?= e($lang) ?>" data-theme-mode="dark">',
    '<html lang="<?= e($lang) ?>" dir="<?= $lang === \'ar\' ? \'rtl\' : \'ltr\' ?>" data-theme-mode="dark">',
  );
  fs.writeFileSync(vesperaHeader, hdr);
}

console.log('vespera stubs + config');

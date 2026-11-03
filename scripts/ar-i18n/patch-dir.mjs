import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');

function walk(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

let n = 0;
for (const file of walk(path.join(ROOT, 'templates'))) {
  if (!file.includes(`${path.sep}langs${path.sep}ar${path.sep}`)) continue;
  if (!file.endsWith('.php')) continue;
  let s = fs.readFileSync(file, 'utf8');
  if (s.includes('dir="rtl"') || s.includes("dir='rtl'")) continue;
  const orig = s;
  s = s.replace(
    /<html lang="<\?= e\(site_locale\(\)\) \?>" class="scroll-smooth">/g,
    '<html lang="<?= e(site_locale()) ?>" dir="rtl" class="scroll-smooth">',
  );
  s = s.replace(
    /<html lang="<\?= e\(site_locale\(\)\) \?>">/g,
    '<html lang="<?= e(site_locale()) ?>" dir="rtl">',
  );
  s = s.replace(
    /<html lang="<\?= e\(SITE_LANG\) \?>">/g,
    '<html lang="<?= e(SITE_LANG) ?>" dir="rtl">',
  );
  s = s.replace(
    /<html class="scroll-smooth" lang="<\?= e\(site_locale\(\)\) \?>" data-theme="universal">/g,
    '<html class="scroll-smooth" lang="<?= e(site_locale()) ?>" dir="rtl" data-theme="universal">',
  );
  if (s !== orig) {
    fs.writeFileSync(file, s);
    n++;
  }
}
console.log('dir patched', n);

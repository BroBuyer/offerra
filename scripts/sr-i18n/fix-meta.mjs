import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

const replacements = [
  ["define('ACTIVE_LANG', 'hr')", "define('ACTIVE_LANG', 'sr')"],
  ["'availableLanguage' => 'hr'", "'availableLanguage' => 'sr'"],
  ["'inLanguage' => 'hr'", "'inLanguage' => 'sr'"],
  ["|| 'hr';", "|| 'rs';"],
  ['lang="hr"', 'lang="sr"'],
  ['hreflang="hr"', 'hreflang="sr"'],
];

let n = 0;
for (const file of walk(path.join(ROOT, 'templates'))) {
  if (!file.replace(/\\/g, '/').includes('/langs/sr/')) continue;
  if (!/\.(php|js|html)$/i.test(file)) continue;
  let s = fs.readFileSync(file, 'utf8');
  let next = s;
  for (const [from, to] of replacements) {
    if (next.includes(from)) next = next.split(from).join(to);
  }
  if (next !== s) {
    fs.writeFileSync(file, next);
    n += 1;
    console.log(path.relative(ROOT, file));
  }
}
console.log('fixed', n);

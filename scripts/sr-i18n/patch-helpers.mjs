import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');
const templates = [
  'default', 'default-pro', 'lumen', 'velora', 'cetra', 'recupero',
  'thalora', 'solano', 'noctra', 'aurel', 'multilang',
];

for (const t of templates) {
  const file = path.join(ROOT, 'templates', t, 'includes', 'helpers.php');
  if (!fs.existsSync(file)) {
    console.log('miss', t);
    continue;
  }
  let s = fs.readFileSync(file, 'utf8');
  if (s.includes("'sr' => 'sr-RS'")) {
    console.log('ok', t);
    continue;
  }
  const next = s.replace("'hr' => 'hr-HR',", "'hr' => 'hr-HR', 'sr' => 'sr-RS',");
  if (next === s) {
    console.log('no-hr', t);
    continue;
  }
  fs.writeFileSync(file, next);
  console.log('patched', t);
}

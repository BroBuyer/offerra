import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const php = fs.readFileSync(
  path.resolve(__dirname, '../../templates/recupero/langs/en/includes/i18n.php'),
  'utf8',
);
const out = {};
const re = /'([^']+)'\s*=>\s*'((?:\\'|\\\\|[^'])*)'/g;
let m;
while ((m = re.exec(php))) {
  out[m[1]] = m[2].replace(/\\'/g, "'").replace(/\\\\/g, '\\');
}
const dir = path.join(__dirname, 'strings');
fs.mkdirSync(dir, { recursive: true });
fs.writeFileSync(path.join(dir, '_en.json'), JSON.stringify(out, null, 2) + '\n');
console.log('keys', Object.keys(out).length);

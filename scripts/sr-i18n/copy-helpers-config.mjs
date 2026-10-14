import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');

function cp(from, to) {
  fs.mkdirSync(path.dirname(to), { recursive: true });
  fs.copyFileSync(from, to);
}

// Audax: generated pack has EN helpers — overwrite with root (has geo_sr).
cp(
  path.join(ROOT, 'templates/audax/includes/helpers.php'),
  path.join(ROOT, 'templates/audax/langs/sr/includes/helpers.php'),
);

// Lumen builder does not emit config — copy hr and retarget.
const lumenHr = path.join(ROOT, 'templates/lumen/langs/hr/includes/config.php');
const lumenSr = path.join(ROOT, 'templates/lumen/langs/sr/includes/config.php');
if (fs.existsSync(lumenHr)) {
  let s = fs.readFileSync(lumenHr, 'utf8');
  s = s.replace(/define\('SITE_LANG',\s*'[^']*'\)/, "define('SITE_LANG', 'sr')");
  s = s.replace(/define\('CRM_COUNTRY',\s*'HR'\)/, "define('CRM_COUNTRY', 'RS')");
  s = s.replace(/define\('FORM_PHONE_COUNTRY',\s*'hr'\)/, "define('FORM_PHONE_COUNTRY', 'rs')");
  s = s.replace(/define\('FORM_ALLOWED_COUNTRIES',\s*'hr'\)/, "define('FORM_ALLOWED_COUNTRIES', 'rs')");
  s = s.replace(/define\('CURRENCY',\s*'EUR'\)/, "define('CURRENCY', 'RSD')");
  fs.writeFileSync(lumenSr, s);
}

cp(
  path.join(ROOT, 'templates/lumen/includes/helpers.php'),
  path.join(ROOT, 'templates/lumen/langs/sr/includes/helpers.php'),
);

for (const t of ['default', 'default-pro', 'thalora', 'velora', 'cetra', 'recupero', 'solano', 'noctra', 'aurel', 'multilang']) {
  const root = path.join(ROOT, 'templates', t, 'includes', 'helpers.php');
  const dest = path.join(ROOT, 'templates', t, 'langs', 'sr', 'includes', 'helpers.php');
  if (fs.existsSync(root) && fs.existsSync(path.dirname(dest))) {
    cp(root, dest);
    console.log('helpers', t);
  }
}

console.log('done');

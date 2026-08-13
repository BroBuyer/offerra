import fs from 'fs';

const langs = fs
  .readdirSync('templates/recupero/langs')
  .filter((d) => fs.statSync(`templates/recupero/langs/${d}`).isDirectory())
  .sort();
console.log('langs', langs.length, langs.join(','));

for (const lang of langs) {
  const cfg = fs.readFileSync(`templates/recupero/langs/${lang}/includes/config.php`, 'utf8');
  const head = fs.readFileSync(`templates/recupero/langs/${lang}/includes/head.php`, 'utf8');
  const i18n = fs.readFileSync(`templates/recupero/langs/${lang}/includes/i18n.php`, 'utf8');
  const siteLang = cfg.match(/SITE_LANG',\s*'([^']+)'/)?.[1];
  const phone = cfg.match(/FORM_PHONE_COUNTRY',\s*'([^']+)'/)?.[1];
  const og = head.match(/og:locale" content="([^"]+)"/)?.[1];
  const cta = i18n.match(/'cta_start' => '([^']*)'/)?.[1];
  console.log(lang, { siteLang, phone, og, cta });
}

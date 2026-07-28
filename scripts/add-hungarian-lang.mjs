#!/usr/bin/env node
/**
 * Add Hungarian (hu / Magyar) language packs to default + multilang templates.
 *
 *   node scripts/_write-hu-translations.mjs
 *   node scripts/add-hungarian-lang.mjs
 */
import fs from 'node:fs';
import path from 'node:path';
import https from 'node:https';
import { fileURLToPath } from 'node:url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const repo = path.resolve(__dirname, '..');

function copyDir(src, dest) {
  fs.cpSync(src, dest, { recursive: true });
}

function walkFiles(dir, ext) {
  const files = [];
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const full = path.join(dir, entry.name);
    if (entry.isDirectory()) {
      files.push(...walkFiles(full, ext));
    } else if (entry.name.endsWith(ext)) {
      files.push(full);
    }
  }
  return files;
}

const jsonPath = path.join(__dirname, 'hu-translations.json');
if (!fs.existsSync(jsonPath)) {
  throw new Error('Missing hu-translations.json — run: node scripts/_write-hu-translations.mjs');
}

/** @type {Array<[string, string]>} */
const translations = [
  ...JSON.parse(fs.readFileSync(jsonPath, 'utf8')),
  ["define('SITE_LANG', 'en')", "define('SITE_LANG', 'hu')"],
  ["define('SITE_LANG', 'de')", "define('SITE_LANG', 'hu')"],
  ["define('ACTIVE_LANG', 'de')", "define('ACTIVE_LANG', 'hu')"],
  ["define('ACTIVE_LANG', 'en')", "define('ACTIVE_LANG', 'hu')"],
  ['name="language" value="de"', 'name="language" value="hu"'],
  ['name="language" value="en"', 'name="language" value="hu"'],
  ['Phone', 'Telefon'],
  ['Email', 'E-mail'],
  ['Product', 'Term\u00e9k'],
  ['Offer', 'Aj\u00e1nlat'],
  ['Contact', 'Kapcsolat'],
  ['FAQ', 'GYIK'],
  ['Get Started', 'Kezd\u00e9s'],
  ['Start trading', 'Keresked\u00e9s ind\u00edt\u00e1sa'],
  ['Privacy', 'Adatv\u00e9delem'],
  ['Terms', 'Felt\u00e9telek'],
  ['and', '\u00e9s a'],
  ['Platform stats', 'Platformstatisztik\u00e1k'],
  ['Onboarding', 'Onboarding'],
  ['Crypto, forex, stocks, commodities', 'Kripto, forex, r\u00e9szv\u00e9nyek, \u00e1rucikkek'],
  ['rating', '\u00e9rt\u00e9kel\u00e9s'],
  ['reviews', 'v\u00e9lem\u00e9ny'],
  ['Based on', 'Alapj\u00e1n'],
  ['Join private traders and firms who buy, sell, and manage digital assets with confidence.', 'Csatlakozzon mag\u00e1ntraderekhez \u00e9s c\u00e9gekhez, akik magabiztosan vesznek, eladnak \u00e9s kezelnek digit\u00e1lis eszk\u00f6z\u00f6ket.'],
  ['Create an account with your basic details, complete a short verification step, and deposit a minimum of', 'Hozzon l\u00e9tre fi\u00f3kot az alapadataival, fejezze be a r\u00f6vid ellen\u0151rz\u00e9st, \u00e9s helyezzen el legal\u00e1bb'],
  ['You will get access to the full platform — live charts, trading tools, and guided onboarding.', 'Hozz\u00e1f\u00e9r\u00e9st kap a teljes platformhoz \u2014 \u00e9l\u0151 chartok, keresked\u00e9si eszk\u00f6z\u00f6k \u00e9s vezetett onboarding.'],
  ['We use SSL encryption, two-factor authentication, and secure processing through trusted providers.', 'SSL-titkos\u00edt\u00e1st, k\u00e9tfaktoros hiteles\u00edt\u00e9st \u00e9s megb\u00edzhat\u00f3 szolg\u00e1ltat\u00f3kon kereszt\u00fcli biztons\u00e1gos feldolgoz\u00e1st haszn\u00e1lunk.'],
  ['Your personal data is handled under strict security policies at every level.', 'Szem\u00e9lyes adatait minden szinten szigor\u00fa biztons\u00e1gi szab\u00e1lyok szerint kezelj\u00fck.'],
  ['Request withdrawals anytime from your dashboard.', 'A kifizet\u00e9st b\u00e1rmikor k\u00e9rheti a fi\u00f3kj\u00e1b\u00f3l.'],
  ['Processing usually takes 1 to 3 business days.', 'A feldolgoz\u00e1s \u00e1ltal\u00e1ban 1\u20133 munkanapot vesz ig\u00e9nybe.'],
  ['Fees and timelines are always shown upfront — no surprises.', 'A d\u00edjak \u00e9s hat\u00e1rid\u0151k mindig el\u0151re l\u00e1that\u00f3k \u2014 meglepet\u00e9sek n\u00e9lk\u00fcl.'],
  ['Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace.', 'A vezetett onboarding, az egyszer\u0171 \u00fatmutat\u00f3k \u00e9s az AI-t\u00e1mogatott eszk\u00f6z\u00f6k a saj\u00e1t temp\u00f3j\u00e1ban seg\u00edtenek tanulni.'],
  ['Whether you are a beginner or an experienced trader, support is available 24/7.', 'Ak\u00e1r kezd\u0151, ak\u00e1r tapasztalt trader, a t\u00e1mogat\u00e1s 24/7 el\u00e9rhet\u0151.'],
  ['Access crypto, forex, global stocks, and commodities in one interface.', 'Kripto, forex, glob\u00e1lis r\u00e9szv\u00e9nyek \u00e9s \u00e1rucikkek egy fel\u00fcleten.'],
  ['Real-time data, integrated analytics, and support for manual or automated strategies.', 'Val\u00f3s idej\u0171 adatok, integr\u00e1lt elemz\u00e9sek, valamint manu\u00e1lis \u00e9s automatiz\u00e1lt strat\u00e9gi\u00e1k t\u00e1mogat\u00e1sa.'],
  ['Advanced market analysis with machine learning', 'Fejlett piacelemz\u00e9s g\u00e9pi tanul\u00e1ssal'],
  ['Payment cards, bank transfers, PayPal, e-wallets', 'Bankk\u00e1rty\u00e1k, banki \u00e1tutal\u00e1sok, PayPal, e-p\u00e9nzt\u00e1rc\u00e1k'],
  ['Professional support around the clock for account, trading, and technical questions.', 'Nonstop professzion\u00e1lis t\u00e1mogat\u00e1s fi\u00f3k-, keresked\u00e9si \u00e9s technikai k\u00e9rd\u00e9sekhez.'],
  ['Explore the platform features designed for serious traders.', 'Fedezze fel a komoly tradereknek tervezett platformfunkci\u00f3kat.'],
  ['See current conditions, minimum deposit, and how to begin.', 'Tekintse meg az aktu\u00e1lis felt\u00e9teleket, a minim\u00e1lis befizet\u00e9st \u00e9s a kezd\u00e9s m\u00f3dj\u00e1t.'],
  ['KI-Handelsplattform', 'AI keresked\u00e9si platform'],
  ['Datenschutz', 'Adatv\u00e9delem'],
  ['Nutzungsbedingungen', 'Felhaszn\u00e1l\u00e1si felt\u00e9telek'],
  ['Produkt', 'Term\u00e9k'],
  ['Angebot', 'Aj\u00e1nlat'],
  ['Kontakt', 'Kapcsolat'],
  ['Wir haben Ihre Anfrage bei', 'A(z)'],
  ['Your request with', 'A(z)'],
  ['Start trading', 'Kezdje el a keresked\u00e9st'],
];

function translateContent(content) {
  let out = content;
  // Longer keys first
  const sorted = [...translations].sort((a, b) => b[0].length - a[0].length);
  for (const [from, to] of sorted) {
    if (!from || from === to) continue;
    out = out.split(from).join(to);
  }
  return out;
}

function setupMultilangHu(huDir) {
  const includes = path.join(huDir, 'includes');
  fs.mkdirSync(includes, { recursive: true });
  fs.writeFileSync(
    path.join(includes, 'config.php'),
    "<?php\n\ndefine('ACTIVE_LANG', 'hu');\nrequire_once __DIR__ . '/../../../includes/config.php';\n",
  );
  fs.writeFileSync(
    path.join(includes, 'header.php'),
    "<?php\n\nrequire_once __DIR__ . '/../../../includes/header.php';\n",
  );

  const formPath = path.join(includes, 'form.php');
  if (fs.existsSync(formPath)) {
    let form = fs.readFileSync(formPath, 'utf8');
    form = form.replace(/name="language" value="[^"]*"/, 'name="language" value="hu"');
    form = form.replace(/value="<?= e\(ACTIVE_LANG\) ?>"/, 'value="hu"');
    form = form.replace(/value="<?= e\(SITE_LANG\) ?>"/, 'value="hu"');
    fs.writeFileSync(formPath, form);
  }
}

function overlayEnglishPages(srcRoot, destLangDir, files) {
  for (const rel of files) {
    const src = path.join(srcRoot, rel);
    const dest = path.join(destLangDir, rel);
    if (!fs.existsSync(src)) continue;
    fs.mkdirSync(path.dirname(dest), { recursive: true });
    fs.copyFileSync(src, dest);
  }
}

const pageFiles = [
  'index.php', 'product.php', 'offer.php', 'faq.php', 'contacts.php',
  'sign.php', 'Thanks.php', 'conditions.php', 'privacy.php', 'robots.php', 'sitemap.php',
];

const includeUiFiles = [
  'includes/form.php', 'includes/footer.php', 'includes/header.php', 'includes/schema.php',
  'includes/partners.php', 'includes/payment-icons.php', 'includes/platform-image.php',
];

{
  const deDir = path.join(repo, 'templates/default/langs/de');
  const enRoot = path.join(repo, 'templates/default');
  const huDir = path.join(repo, 'templates/default/langs/hu');
  if (!fs.existsSync(deDir)) throw new Error('Missing donor templates/default/langs/de');
  if (fs.existsSync(huDir)) fs.rmSync(huDir, { recursive: true, force: true });
  copyDir(deDir, huDir);
  console.log('Copied default de → hu');
  overlayEnglishPages(enRoot, huDir, [...pageFiles, ...includeUiFiles]);
  const configPath = path.join(huDir, 'includes/config.php');
  if (fs.existsSync(configPath)) {
    let config = fs.readFileSync(configPath, 'utf8');
    config = config.replace(/define\('SITE_LANG',\s*'[^']*'\)/, "define('SITE_LANG', 'hu')");
    fs.writeFileSync(configPath, config);
  }
  for (const file of [...walkFiles(huDir, '.php'), ...walkFiles(huDir, '.js')]) {
    const original = fs.readFileSync(file, 'utf8');
    const translated = translateContent(original);
    if (translated !== original) fs.writeFileSync(file, translated);
  }
  console.log('Translated default/langs/hu');
}

{
  const deDir = path.join(repo, 'templates/multilang/langs/de');
  const enRoot = path.join(repo, 'templates/multilang');
  const huDir = path.join(repo, 'templates/multilang/langs/hu');
  if (!fs.existsSync(deDir)) throw new Error('Missing donor templates/multilang/langs/de');
  if (fs.existsSync(huDir)) fs.rmSync(huDir, { recursive: true, force: true });
  copyDir(deDir, huDir);
  console.log('Copied multilang de → hu');
  overlayEnglishPages(enRoot, huDir, pageFiles);
  overlayEnglishPages(enRoot, huDir, [
    'includes/form.php', 'includes/footer.php', 'includes/schema.php',
    'includes/partners.php', 'includes/payment-icons.php', 'includes/platform-image.php',
  ]);
  setupMultilangHu(huDir);
  for (const file of walkFiles(huDir, '.php')) {
    const original = fs.readFileSync(file, 'utf8');
    const translated = translateContent(original);
    if (translated !== original) fs.writeFileSync(file, translated);
  }
  console.log('Translated multilang/langs/hu');
}

const flagDir = path.join(repo, 'templates/multilang/static/img/flags');
fs.mkdirSync(flagDir, { recursive: true });
const flagDest = path.join(flagDir, 'hu.png');
await new Promise((resolve, reject) => {
  const file = fs.createWriteStream(flagDest);
  https.get('https://flagcdn.com/24x18/hu.png', (res) => {
    if (res.statusCode && res.statusCode >= 400) {
      reject(new Error(`HTTP ${res.statusCode}`));
      res.resume();
      return;
    }
    res.pipe(file);
    file.on('finish', () => file.close(resolve));
  }).on('error', reject);
});
console.log('Downloaded hu.png');
console.log('Done.');

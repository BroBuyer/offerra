/**
 * Build localized cetra packs under templates/cetra/langs/{lang}/
 * from Portuguese source (langs/pt) + longest-first replacement maps.
 *
 * Usage:
 *   node scripts/build-cetra-langs.mjs
 *   node scripts/build-cetra-langs.mjs de
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { LOCALES as LOCALES_REMAINING } from './cetra-i18n/locales-all.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const LANGS_DIR = path.resolve(__dirname, '..', 'templates', 'cetra', 'langs');
const PT_DIR = path.join(LANGS_DIR, 'pt');
const I18N_DIR = path.join(__dirname, 'cetra-i18n');

const TEXT_EXT = new Set([
  '.php',
  '.js',
  '.css',
  '.html',
  '.htm',
  '.md',
  '.txt',
  '.svg',
  '.json',
  '.xml',
  '.webmanifest',
]);

const LOCALES = {
  fr: {
    siteLang: 'fr',
    crmCountry: 'FR',
    phoneCountry: 'fr',
    currency: 'EUR',
    ogLocale: 'fr_FR',
    phonePlaceholder: '06 12 34 56 78',
    moneyLocale: 'fr-FR',
    moneyPrefix: '',
    moneySuffix: ' €',
  },
  it: {
    siteLang: 'it',
    crmCountry: 'IT',
    phoneCountry: 'it',
    currency: 'EUR',
    ogLocale: 'it_IT',
    phonePlaceholder: '312 345 6789',
    moneyLocale: 'it-IT',
    moneyPrefix: '',
    moneySuffix: ' €',
  },
  es: {
    siteLang: 'es',
    crmCountry: 'ES',
    phoneCountry: 'es',
    currency: 'EUR',
    ogLocale: 'es_ES',
    phonePlaceholder: '612 34 56 78',
    moneyLocale: 'es-ES',
    moneyPrefix: '',
    moneySuffix: ' €',
  },
  ...LOCALES_REMAINING,
};

function walkFiles(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkFiles(p, out);
    else if (entry.isFile()) out.push(p);
  }
  return out;
}

function isTextFile(filePath) {
  const base = path.basename(filePath);
  if (base === '.htaccess') return true;
  return TEXT_EXT.has(path.extname(filePath).toLowerCase());
}

function copyDir(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const from = path.join(src, entry.name);
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyDir(from, to);
    else if (entry.isFile()) {
      fs.mkdirSync(path.dirname(to), { recursive: true });
      fs.copyFileSync(from, to);
    }
  }
}

function escapeRegExp(s) {
  return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

/** Replace PT→lang without corrupting short tokens inside identifiers. */
function replaceSafe(text, from, to) {
  if (!from || from === to || !text.includes(from)) return { text, count: 0 };
  if (from.trim().length < 2 && from.length < 3) return { text, count: 0 };

  const looksLikeToken = /^[\p{L}\p{N}'’]+$/u.test(from) && from.length <= 48;
  if (looksLikeToken) {
    const re = new RegExp(`(?<![\\p{L}\\p{N}_])${escapeRegExp(from)}(?![\\p{L}\\p{N}_])`, 'gu');
    let count = 0;
    const next = text.replace(re, () => {
      count += 1;
      return to;
    });
    return { text: next, count };
  }
  const parts = text.split(from);
  return { text: parts.join(to), count: Math.max(0, parts.length - 1) };
}

function loadPack(lang) {
  const packPath = path.join(I18N_DIR, `${lang}.json`);
  if (!fs.existsSync(packPath)) throw new Error(`Missing pack: ${packPath}`);
  const pack = JSON.parse(fs.readFileSync(packPath, 'utf8'));
  if (!pack || typeof pack !== 'object' || Array.isArray(pack)) {
    throw new Error(`Invalid pack object: ${packPath}`);
  }
  return pack;
}

function applyTranslations(langDir, pack) {
  const seenFrom = new Set();
  const pairs = Object.entries(pack)
    .filter(([from, to]) => from && to && from !== to)
    .filter(([from]) => {
      if (seenFrom.has(from)) return false;
      seenFrom.add(from);
      return true;
    })
    .sort((a, b) => b[0].length - a[0].length);

  const files = walkFiles(langDir).filter(isTextFile);
  let replacements = 0;
  const missing = [];

  for (const [from, to] of pairs) {
    let hit = false;
    for (const file of files) {
      const text = fs.readFileSync(file, 'utf8');
      const { text: next, count } = replaceSafe(text, from, to);
      if (count > 0) {
        fs.writeFileSync(file, next, 'utf8');
        replacements += count;
        hit = true;
      }
    }
    if (!hit) missing.push(from.length > 60 ? `${from.slice(0, 57)}…` : from);
  }

  return { replacements, missing, pairCount: pairs.length };
}

function patchConfig(langDir, loc) {
  const configPath = path.join(langDir, 'includes', 'config.php');
  let text = fs.readFileSync(configPath, 'utf8');
  const patches = [
    [/define\(\s*'SITE_LANG'\s*,\s*'[^']*'\s*\)/, `define('SITE_LANG', '${loc.siteLang}')`],
    [/define\(\s*'CRM_COUNTRY'\s*,\s*'[^']*'\s*\)/, `define('CRM_COUNTRY', '${loc.crmCountry}')`],
    [/define\(\s*'CURRENCY'\s*,\s*'[^']*'\s*\)/, `define('CURRENCY', '${loc.currency}')`],
    [/define\(\s*'FORM_PHONE_COUNTRY'\s*,\s*'[^']*'\s*\)/, `define('FORM_PHONE_COUNTRY', '${loc.phoneCountry}')`],
    [/define\(\s*'FORM_ALLOWED_COUNTRIES'\s*,\s*'[^']*'\s*\)/, `define('FORM_ALLOWED_COUNTRIES', '${loc.phoneCountry}')`],
  ];
  for (const [re, rep] of patches) {
    if (!re.test(text)) throw new Error(`Failed config patch ${re} in ${configPath}`);
    text = text.replace(re, rep);
  }
  fs.writeFileSync(configPath, text, 'utf8');
}

function patchHead(langDir, loc) {
  const headPath = path.join(langDir, 'includes', 'head.php');
  let text = fs.readFileSync(headPath, 'utf8');
  // Escape <?= carefully — bare ? is a regex quantifier.
  text = text.replace(
    /lang="<\?= e\(SITE_LANG\) \?>-BR"/,
    'lang="<?= e(SITE_LANG) ?>"',
  );
  text = text.replace(
    /content="pt_BR"/,
    `content="${loc.ogLocale}"`,
  );
  if (text.includes('-BR')) {
    text = text.replace(/<\?= e\(SITE_LANG\) \?>-BR/g, '<?= e(SITE_LANG) ?>');
  }
  fs.writeFileSync(headPath, text, 'utf8');

  const manifestPath = path.join(langDir, 'static', 'img', 'icons', 'site.webmanifest');
  if (fs.existsSync(manifestPath)) {
    let m = fs.readFileSync(manifestPath, 'utf8');
    m = m.replace(/"lang"\s*:\s*"[^"]*"/, `"lang": "${loc.siteLang}"`);
    fs.writeFileSync(manifestPath, m, 'utf8');
  }
}

function patchPhoneAndMoney(langDir, loc) {
  const files = walkFiles(langDir).filter(isTextFile);
  const moneyRe =
    /function money\(n\)\{n=\+n;return 'R\$'\+n\.toLocaleString\('pt-BR',\{maximumFractionDigits:n>=1000\?0:\(n>=1\?2:4\)\}\);\}/;
  const moneyFn = `function money(n){n=+n;return n.toLocaleString('${loc.moneyLocale}',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+'${loc.moneySuffix}';}`;

  for (const file of files) {
    let text = fs.readFileSync(file, 'utf8');
    let next = text;

    next = next.replaceAll('11 91234-5678', loc.phonePlaceholder);
    next = next.replace(
      /initialCountry:\s*\(hid\s*&&\s*hid\.value\)\s*\|\|\s*'br'/,
      `initialCountry: (hid && hid.value) || '${loc.phoneCountry}'`,
    );
    next = next.replace(moneyRe, moneyFn);
    next = next.replace(
      /return 'R\$'\+n\.toLocaleString\('pt-BR'/g,
      `return n.toLocaleString('${loc.moneyLocale}'`,
    );

    if (next !== text) fs.writeFileSync(file, next, 'utf8');
  }
}

/** Align avatar initials with localized first names after pack replace. */
function patchTestimonialInitials(langDir, lang) {
  const indexPath = path.join(langDir, 'index.php');
  if (!fs.existsSync(indexPath)) return;
  const map = {
    fr: [
      ['<div class="ini">F</div><div><b>Thomas Bernard</b>', '<div class="ini">T</div><div><b>Thomas Bernard</b>'],
      ['<div class="ini">B</div><div><b>Sophie Martin</b>', '<div class="ini">S</div><div><b>Sophie Martin</b>'],
      ['<div class="ini">L</div><div><b>Antoine Lefèvre</b>', '<div class="ini">A</div><div><b>Antoine Lefèvre</b>'],
      ['<div class="ini">G</div><div><b>Léa Moreau</b>', '<div class="ini">L</div><div><b>Léa Moreau</b>'],
      ['<div class="ini">R</div><div><b>Nicolas Petit</b>', '<div class="ini">N</div><div><b>Nicolas Petit</b>'],
    ],
    it: [
      ['<div class="ini">C</div><div><b>Giulia Rossi</b>', '<div class="ini">G</div><div><b>Giulia Rossi</b>'],
      ['<div class="ini">F</div><div><b>Marco Bianchi</b>', '<div class="ini">M</div><div><b>Marco Bianchi</b>'],
      ['<div class="ini">B</div><div><b>Elena Conti</b>', '<div class="ini">E</div><div><b>Elena Conti</b>'],
      ['<div class="ini">G</div><div><b>Chiara Esposito</b>', '<div class="ini">C</div><div><b>Chiara Esposito</b>'],
      ['<div class="ini">R</div><div><b>Andrea Ricci</b>', '<div class="ini">A</div><div><b>Andrea Ricci</b>'],
    ],
    es: [
      ['<div class="ini">F</div><div><b>Pablo Ruiz</b>', '<div class="ini">P</div><div><b>Pablo Ruiz</b>'],
      ['<div class="ini">B</div><div><b>Lucía Torres</b>', '<div class="ini">L</div><div><b>Lucía Torres</b>'],
      ['<div class="ini">L</div><div><b>Javier Ortega</b>', '<div class="ini">J</div><div><b>Javier Ortega</b>'],
      ['<div class="ini">G</div><div><b>María Gómez</b>', '<div class="ini">M</div><div><b>María Gómez</b>'],
      ['<div class="ini">R</div><div><b>Miguel Navarro</b>', '<div class="ini">M</div><div><b>Miguel Navarro</b>'],
    ],
    en: [
      ['<div class="ini">C</div><div><b>Emma Clarke</b>', '<div class="ini">E</div><div><b>Emma Clarke</b>'],
      ['<div class="ini">F</div><div><b>James Wilson</b>', '<div class="ini">J</div><div><b>James Wilson</b>'],
      ['<div class="ini">B</div><div><b>Sophie Hughes</b>', '<div class="ini">S</div><div><b>Sophie Hughes</b>'],
      ['<div class="ini">L</div><div><b>Oliver Bennett</b>', '<div class="ini">O</div><div><b>Oliver Bennett</b>'],
      ['<div class="ini">G</div><div><b>Charlotte Reid</b>', '<div class="ini">C</div><div><b>Charlotte Reid</b>'],
      ['<div class="ini">R</div><div><b>William Hayes</b>', '<div class="ini">W</div><div><b>William Hayes</b>'],
    ],
    de: [
      ['<div class="ini">C</div><div><b>Anna Schneider</b>', '<div class="ini">A</div><div><b>Anna Schneider</b>'],
      ['<div class="ini">F</div><div><b>Thomas Müller</b>', '<div class="ini">T</div><div><b>Thomas Müller</b>'],
      ['<div class="ini">B</div><div><b>Sophie Weber</b>', '<div class="ini">S</div><div><b>Sophie Weber</b>'],
      ['<div class="ini">G</div><div><b>Laura Becker</b>', '<div class="ini">L</div><div><b>Laura Becker</b>'],
      ['<div class="ini">R</div><div><b>Markus Hoffmann</b>', '<div class="ini">M</div><div><b>Markus Hoffmann</b>'],
    ],
    nl: [
      ['<div class="ini">C</div><div><b>Emma de Vries</b>', '<div class="ini">E</div><div><b>Emma de Vries</b>'],
      ['<div class="ini">F</div><div><b>Thomas Jansen</b>', '<div class="ini">T</div><div><b>Thomas Jansen</b>'],
      ['<div class="ini">B</div><div><b>Sophie Bakker</b>', '<div class="ini">S</div><div><b>Sophie Bakker</b>'],
      ['<div class="ini">G</div><div><b>Laura Smit</b>', '<div class="ini">L</div><div><b>Laura Smit</b>'],
      ['<div class="ini">R</div><div><b>Mark de Boer</b>', '<div class="ini">M</div><div><b>Mark de Boer</b>'],
    ],
    pl: [
      ['<div class="ini">C</div><div><b>Anna Kowalska</b>', '<div class="ini">A</div><div><b>Anna Kowalska</b>'],
      ['<div class="ini">F</div><div><b>Tomasz Nowak</b>', '<div class="ini">T</div><div><b>Tomasz Nowak</b>'],
      ['<div class="ini">B</div><div><b>Katarzyna Wiśniewska</b>', '<div class="ini">K</div><div><b>Katarzyna Wiśniewska</b>'],
      ['<div class="ini">L</div><div><b>Łukasz Wójcik</b>', '<div class="ini">Ł</div><div><b>Łukasz Wójcik</b>'],
      ['<div class="ini">G</div><div><b>Magdalena Kamińska</b>', '<div class="ini">M</div><div><b>Magdalena Kamińska</b>'],
      ['<div class="ini">R</div><div><b>Piotr Lewandowski</b>', '<div class="ini">P</div><div><b>Piotr Lewandowski</b>'],
    ],
    cs: [
      ['<div class="ini">C</div><div><b>Eva Nováková</b>', '<div class="ini">E</div><div><b>Eva Nováková</b>'],
      ['<div class="ini">F</div><div><b>Jan Svoboda</b>', '<div class="ini">J</div><div><b>Jan Svoboda</b>'],
      ['<div class="ini">B</div><div><b>Tereza Dvořáková</b>', '<div class="ini">T</div><div><b>Tereza Dvořáková</b>'],
      ['<div class="ini">L</div><div><b>Petr Černý</b>', '<div class="ini">P</div><div><b>Petr Černý</b>'],
      ['<div class="ini">G</div><div><b>Lucie Procházková</b>', '<div class="ini">L</div><div><b>Lucie Procházková</b>'],
      ['<div class="ini">R</div><div><b>Martin Horák</b>', '<div class="ini">M</div><div><b>Martin Horák</b>'],
    ],
    sk: [
      ['<div class="ini">C</div><div><b>Eva Horváthová</b>', '<div class="ini">E</div><div><b>Eva Horváthová</b>'],
      ['<div class="ini">F</div><div><b>Ján Novák</b>', '<div class="ini">J</div><div><b>Ján Novák</b>'],
      ['<div class="ini">B</div><div><b>Zuzana Kováčová</b>', '<div class="ini">Z</div><div><b>Zuzana Kováčová</b>'],
      ['<div class="ini">L</div><div><b>Peter Tóth</b>', '<div class="ini">P</div><div><b>Peter Tóth</b>'],
      ['<div class="ini">G</div><div><b>Lucia Nagyová</b>', '<div class="ini">L</div><div><b>Lucia Nagyová</b>'],
      ['<div class="ini">R</div><div><b>Martin Szabó</b>', '<div class="ini">M</div><div><b>Martin Szabó</b>'],
    ],
    hu: [
      ['<div class="ini">C</div><div><b>Anna Kovács</b>', '<div class="ini">A</div><div><b>Anna Kovács</b>'],
      ['<div class="ini">F</div><div><b>Tamás Nagy</b>', '<div class="ini">T</div><div><b>Tamás Nagy</b>'],
      ['<div class="ini">B</div><div><b>Zsófia Szabó</b>', '<div class="ini">Z</div><div><b>Zsófia Szabó</b>'],
      ['<div class="ini">L</div><div><b>László Tóth</b>', '<div class="ini">L</div><div><b>László Tóth</b>'],
      ['<div class="ini">G</div><div><b>Eszter Horváth</b>', '<div class="ini">E</div><div><b>Eszter Horváth</b>'],
      ['<div class="ini">R</div><div><b>Gábor Kiss</b>', '<div class="ini">G</div><div><b>Gábor Kiss</b>'],
    ],
    ro: [
      ['<div class="ini">C</div><div><b>Elena Popescu</b>', '<div class="ini">E</div><div><b>Elena Popescu</b>'],
      ['<div class="ini">F</div><div><b>Andrei Ionescu</b>', '<div class="ini">A</div><div><b>Andrei Ionescu</b>'],
      ['<div class="ini">B</div><div><b>Maria Dumitru</b>', '<div class="ini">M</div><div><b>Maria Dumitru</b>'],
      ['<div class="ini">L</div><div><b>Alexandru Stan</b>', '<div class="ini">A</div><div><b>Alexandru Stan</b>'],
      ['<div class="ini">G</div><div><b>Ioana Georgescu</b>', '<div class="ini">I</div><div><b>Ioana Georgescu</b>'],
      ['<div class="ini">R</div><div><b>Mihai Radu</b>', '<div class="ini">M</div><div><b>Mihai Radu</b>'],
    ],
    da: [
      ['<div class="ini">C</div><div><b>Anna Nielsen</b>', '<div class="ini">A</div><div><b>Anna Nielsen</b>'],
      ['<div class="ini">F</div><div><b>Thomas Jensen</b>', '<div class="ini">T</div><div><b>Thomas Jensen</b>'],
      ['<div class="ini">B</div><div><b>Sofie Hansen</b>', '<div class="ini">S</div><div><b>Sofie Hansen</b>'],
      ['<div class="ini">G</div><div><b>Emma Andersen</b>', '<div class="ini">E</div><div><b>Emma Andersen</b>'],
      ['<div class="ini">R</div><div><b>Mikkel Christensen</b>', '<div class="ini">M</div><div><b>Mikkel Christensen</b>'],
    ],
    sv: [
      ['<div class="ini">C</div><div><b>Anna Andersson</b>', '<div class="ini">A</div><div><b>Anna Andersson</b>'],
      ['<div class="ini">F</div><div><b>Erik Johansson</b>', '<div class="ini">E</div><div><b>Erik Johansson</b>'],
      ['<div class="ini">B</div><div><b>Sofia Nilsson</b>', '<div class="ini">S</div><div><b>Sofia Nilsson</b>'],
      ['<div class="ini">G</div><div><b>Emma Larsson</b>', '<div class="ini">E</div><div><b>Emma Larsson</b>'],
      ['<div class="ini">R</div><div><b>Mikael Olsson</b>', '<div class="ini">M</div><div><b>Mikael Olsson</b>'],
    ],
    no: [
      ['<div class="ini">C</div><div><b>Anna Hansen</b>', '<div class="ini">A</div><div><b>Anna Hansen</b>'],
      ['<div class="ini">F</div><div><b>Erik Johansen</b>', '<div class="ini">E</div><div><b>Erik Johansen</b>'],
      ['<div class="ini">B</div><div><b>Sofie Olsen</b>', '<div class="ini">S</div><div><b>Sofie Olsen</b>'],
      ['<div class="ini">G</div><div><b>Emma Nilsen</b>', '<div class="ini">E</div><div><b>Emma Nilsen</b>'],
      ['<div class="ini">R</div><div><b>Martin Berg</b>', '<div class="ini">M</div><div><b>Martin Berg</b>'],
    ],
    fi: [
      ['<div class="ini">C</div><div><b>Anna Virtanen</b>', '<div class="ini">A</div><div><b>Anna Virtanen</b>'],
      ['<div class="ini">F</div><div><b>Jukka Korhonen</b>', '<div class="ini">J</div><div><b>Jukka Korhonen</b>'],
      ['<div class="ini">B</div><div><b>Sofia Mäkinen</b>', '<div class="ini">S</div><div><b>Sofia Mäkinen</b>'],
      ['<div class="ini">L</div><div><b>Lauri Nieminen</b>', '<div class="ini">L</div><div><b>Lauri Nieminen</b>'],
      ['<div class="ini">G</div><div><b>Emma Laine</b>', '<div class="ini">E</div><div><b>Emma Laine</b>'],
      ['<div class="ini">R</div><div><b>Mikko Heikkinen</b>', '<div class="ini">M</div><div><b>Mikko Heikkinen</b>'],
    ],
    el: [
      ['<div class="ini">C</div><div><b>Ελένη Παπαδοπούλου</b>', '<div class="ini">Ε</div><div><b>Ελένη Παπαδοπούλου</b>'],
      ['<div class="ini">F</div><div><b>Γιώργος Νικολάου</b>', '<div class="ini">Γ</div><div><b>Γιώργος Νικολάου</b>'],
      ['<div class="ini">B</div><div><b>Μαρία Γεωργίου</b>', '<div class="ini">Μ</div><div><b>Μαρία Γεωργίου</b>'],
      ['<div class="ini">L</div><div><b>Νίκος Δημητρίου</b>', '<div class="ini">Ν</div><div><b>Νίκος Δημητρίου</b>'],
      ['<div class="ini">G</div><div><b>Σοφία Ιωάννου</b>', '<div class="ini">Σ</div><div><b>Σοφία Ιωάννου</b>'],
      ['<div class="ini">R</div><div><b>Ανδρέας Παπαδάκης</b>', '<div class="ini">Α</div><div><b>Ανδρέας Παπαδάκης</b>'],
    ],
    hr: [
      ['<div class="ini">C</div><div><b>Ana Horvat</b>', '<div class="ini">A</div><div><b>Ana Horvat</b>'],
      ['<div class="ini">F</div><div><b>Marko Kovač</b>', '<div class="ini">M</div><div><b>Marko Kovač</b>'],
      ['<div class="ini">B</div><div><b>Petra Babić</b>', '<div class="ini">P</div><div><b>Petra Babić</b>'],
      ['<div class="ini">L</div><div><b>Ivan Jurić</b>', '<div class="ini">I</div><div><b>Ivan Jurić</b>'],
      ['<div class="ini">G</div><div><b>Ivana Marić</b>', '<div class="ini">I</div><div><b>Ivana Marić</b>'],
      ['<div class="ini">R</div><div><b>Tomislav Novak</b>', '<div class="ini">T</div><div><b>Tomislav Novak</b>'],
    ],
    tr: [
      ['<div class="ini">C</div><div><b>Ayşe Yılmaz</b>', '<div class="ini">A</div><div><b>Ayşe Yılmaz</b>'],
      ['<div class="ini">F</div><div><b>Mehmet Kaya</b>', '<div class="ini">M</div><div><b>Mehmet Kaya</b>'],
      ['<div class="ini">B</div><div><b>Elif Demir</b>', '<div class="ini">E</div><div><b>Elif Demir</b>'],
      ['<div class="ini">L</div><div><b>Ahmet Şahin</b>', '<div class="ini">A</div><div><b>Ahmet Şahin</b>'],
      ['<div class="ini">G</div><div><b>Zeynep Çelik</b>', '<div class="ini">Z</div><div><b>Zeynep Çelik</b>'],
      ['<div class="ini">R</div><div><b>Emre Yıldız</b>', '<div class="ini">E</div><div><b>Emre Yıldız</b>'],
    ],
    ja: [
      ['<div class="ini">C</div><div><b>佐藤美咲</b>', '<div class="ini">佐</div><div><b>佐藤美咲</b>'],
      ['<div class="ini">F</div><div><b>田中健太</b>', '<div class="ini">田</div><div><b>田中健太</b>'],
      ['<div class="ini">B</div><div><b>鈴木陽子</b>', '<div class="ini">鈴</div><div><b>鈴木陽子</b>'],
      ['<div class="ini">L</div><div><b>高橋翔</b>', '<div class="ini">高</div><div><b>高橋翔</b>'],
      ['<div class="ini">G</div><div><b>伊藤彩</b>', '<div class="ini">伊</div><div><b>伊藤彩</b>'],
      ['<div class="ini">R</div><div><b>渡辺大輔</b>', '<div class="ini">渡</div><div><b>渡辺大輔</b>'],
    ],
  };
  const pairs = map[lang];
  if (!pairs) return;
  let text = fs.readFileSync(indexPath, 'utf8');
  for (const [from, to] of pairs) text = text.split(from).join(to);
  fs.writeFileSync(indexPath, text, 'utf8');
}

function buildLang(lang) {
  const loc = LOCALES[lang];
  if (!loc) throw new Error(`Unsupported lang: ${lang}`);
  if (!fs.existsSync(PT_DIR)) throw new Error(`Missing PT source: ${PT_DIR}`);

  const pack = loadPack(lang);
  const dest = path.join(LANGS_DIR, lang);

  fs.rmSync(dest, { recursive: true, force: true });
  copyDir(PT_DIR, dest);

  const { replacements, missing, pairCount } = applyTranslations(dest, pack);
  patchConfig(dest, loc);
  patchHead(dest, loc);
  patchPhoneAndMoney(dest, loc);
  patchTestimonialInitials(dest, lang);

  console.log(
    `[cetra-i18n] built ${lang}: ${replacements} replacements across ${pairCount} pairs` +
      (missing.length ? `, ${missing.length} PT strings not found` : ''),
  );
  if (missing.length && missing.length <= 40) {
    console.warn(`[cetra-i18n] missing (${lang}):`, missing.join(' | '));
  } else if (missing.length) {
    console.warn(`[cetra-i18n] missing (${lang}): ${missing.length} (showing 25)`);
    console.warn(missing.slice(0, 25).join(' | '));
  }
  return { replacements, missing };
}

const arg = process.argv[2];
const targets = arg ? [arg] : Object.keys(LOCALES);

for (const lang of targets) {
  if (!LOCALES[lang]) {
    console.error(`Unknown lang: ${lang}`);
    process.exit(1);
  }
  buildLang(lang);
}

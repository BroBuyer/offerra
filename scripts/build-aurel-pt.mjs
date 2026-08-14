/**
 * Convert templates/aurel/langs/pt/ from Spanish (es copy) to European Portuguese (pt-PT).
 *
 * Usage: node scripts/build-aurel-pt.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { REPLACEMENTS } from './aurel-i18n/pt-replacements.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const PT_DIR = path.join(ROOT, 'templates', 'aurel', 'langs', 'pt');

function walkPhp(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walkPhp(p, out);
    else if (entry.isFile() && entry.name.endsWith('.php')) out.push(p);
  }
  return out;
}

function applyReplacements(text, pairs) {
  let next = text;
  let total = 0;
  for (const [from, to] of pairs) {
    if (!from || from === to || !next.includes(from)) continue;
    const parts = next.split(from);
    if (parts.length > 1) {
      next = parts.join(to);
      total += parts.length - 1;
    }
  }
  return { text: next, count: total };
}

function patchFile(rel, patchFn) {
  const filePath = path.join(PT_DIR, rel);
  if (!fs.existsSync(filePath)) {
    console.warn('skip missing', rel);
    return false;
  }
  const before = fs.readFileSync(filePath, 'utf8');
  const after = patchFn(before);
  if (after !== before) {
    fs.writeFileSync(filePath, after, 'utf8');
    return true;
  }
  return false;
}

function patchConfig(text) {
  return text
    .replace(/define\(\s*'SITE_LANG'\s*,\s*'[^']*'\s*\)/, "define('SITE_LANG', 'pt')")
    .replace(/define\(\s*'CRM_COUNTRY'\s*,\s*'[^']*'\s*\)/, "define('CRM_COUNTRY', 'PT')")
    .replace(/define\(\s*'FORM_PHONE_COUNTRY'\s*,\s*'[^']*'\s*\)/, "define('FORM_PHONE_COUNTRY', 'pt')")
    .replace(/define\(\s*'FORM_ALLOWED_COUNTRIES'\s*,\s*'[^']*'\s*\)/, "define('FORM_ALLOWED_COUNTRIES', 'pt')");
}

function patchSchema(text) {
  return text
    .replace(
      /'description'\s*=>\s*'[^']*'/,
      "'description' => 'Plataforma de investimento assistida por IA que associa cada membro a um analista financeiro pessoal.'",
    )
    .replace(/'areaServed'\s*=>\s*'[^']*'/, "'areaServed' => 'Portugal'")
    .replace(/'availableLanguage'\s*=>\s*'[^']*'/, "'availableLanguage' => 'pt'")
    .replace(/'inLanguage'\s*=>\s*'es'/g, "'inLanguage' => 'pt'");
}

function patchHead(text) {
  return text
    .replace(
      /\$page_title\s*=\s*\$page_title\s*\?\?\s*\(SITE_NAME\s*\.\s*'[^']*'\)/,
      "$page_title = $page_title ?? (SITE_NAME . ' ᐉ Controlo total do seu investimento em direto')",
    )
    .replace(
      /\$page_description\s*=\s*\$page_description\s*\?\?\s*\('Sigue en tiempo real[^']*' \. money_min\(\)\)/,
      "$page_description = $page_description ?? ('Acompanhe em tempo real como o seu capital trabalha com ' . SITE_NAME . ': relatórios claros, analista pessoal e IA. Gere rendimento adicional a partir de ' . money_min())",
    )
    .replace(/content="es_ES"/, 'content="pt_PT"')
    .replace(
      /valPhoneInvalid:\s*'[^']*'/,
      "valPhoneInvalid: 'Introduza um número de telefone válido'",
    )
    .replace(
      /valPhoneCountry:\s*'[^']*'/,
      "valPhoneCountry: 'Indicativo de país inválido'",
    )
    .replace(
      /valPhoneShort:\s*'[^']*'/,
      "valPhoneShort: 'O número é demasiado curto'",
    )
    .replace(
      /valPhoneLong:\s*'[^']*'/,
      "valPhoneLong: 'O número é demasiado longo'",
    )
    .replace(/Saltar al contenido/, 'Saltar para o conteúdo');
}

function patchMainJs(text) {
  return text.replace(/es-ES/g, 'pt-PT');
}

function patchWebmanifest(text) {
  return text.replace(/"lang"\s*:\s*"[^"]*"/, '"lang": "pt-PT"');
}

function scanSpanish(text) {
  const hits = [];
  const patterns = [
    /\b(?:ción|ación|mente|usted|tienes|estás|qué|cómo|también|después|número|teléfono|correo electrónico|Gracias|Empezar|Abre tu|Nosotros|Por qué nosotros|CNMV|España|Madrid|Barcelona|Valencia|Sevilla|Bilbao|Málaga)\b/gi,
    /¿[^?]{3,}\?/g,
  ];
  for (const re of patterns) {
    let m;
    while ((m = re.exec(text)) !== null) {
      const line = text.slice(0, m.index).split('\n').length;
      hits.push({ line, match: m[0].slice(0, 80) });
    }
  }
  return hits;
}

const pairs = [...REPLACEMENTS]
  .filter(([from, to]) => from && from !== to)
  .sort((a, b) => b[0].length - a[0].length);

const changed = new Set();
let replacementHits = 0;

for (const file of walkPhp(PT_DIR)) {
  const rel = path.relative(PT_DIR, file).replace(/\\/g, '/');
  const before = fs.readFileSync(file, 'utf8');
  const { text, count } = applyReplacements(before, pairs);
  if (count > 0) {
    fs.writeFileSync(file, text, 'utf8');
    changed.add(rel);
    replacementHits += count;
  }
}

const patches = [
  ['includes/config.php', patchConfig],
  ['includes/schema.php', patchSchema],
  ['includes/head.php', patchHead],
  ['static/js/main.js', patchMainJs],
  ['static/img/icons/site.webmanifest', patchWebmanifest],
];

for (const [rel, fn] of patches) {
  if (patchFile(rel, fn)) changed.add(rel);
}

const keyFiles = [
  'index.php',
  'includes/form.php',
  'includes/header.php',
  'includes/site-footer.php',
  'Thanks.php',
  'faq.php',
];

const remaining = [];
for (const rel of keyFiles) {
  const filePath = path.join(PT_DIR, rel);
  if (!fs.existsSync(filePath)) continue;
  const hits = scanSpanish(fs.readFileSync(filePath, 'utf8'));
  if (hits.length) remaining.push({ file: rel, hits: hits.slice(0, 12) });
}

console.log('build-aurel-pt: done');
console.log('replacement operations:', replacementHits);
console.log('files changed:', changed.size);
console.log([...changed].sort().join('\n'));
if (remaining.length) {
  console.log('\nPossible Spanish remaining in key files:');
  for (const { file, hits } of remaining) {
    console.log(`\n${file}:`);
    for (const h of hits) console.log(`  L${h.line}: ${h.match}`);
  }
} else {
  console.log('\nNo obvious Spanish patterns in key files.');
}

#!/usr/bin/env node
/**
 * Rebuild solano template to match solanobursencia.co (dark + mint, split hero).
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(__dirname, '..');
const solano = path.join(root, 'templates', 'solano');
const liveCss = path.join(solano, '_live-extracted.css');

const CLASS_MAP = [
  // longer / more specific first
  ['solano-form', 'solano-form'],
  ['solano-stack', 'solano-stack'],
  ['form-already-registered', 'form-already-registered'],
  ['leadform', 'leadform'],
  ['ggh3sm', 'nrzt44'],
  ['qou73xg', 'rs0voj6'],
  ['fi3abjs', 'ggca24u'],
  ['ec2hno', 'krccqy8'],
  ['vd7z9k', 'odwy4o'],
  ['lh2p7', 'dx8ngh3'],
  ['br3bd0', 'yd4epmn'],
  ['lifld2', 'jfbcnp'],
  ['cpy3s', 'gjm518'],
  ['xwpsbeh', 'eesqjj4'],
  ['cc8xf', 'vuppvr'],
  ['eaoigpo', 'nnzfxkg'],
  ['ulec2', 'hdhwxf'],
  ['zv820', 'gv6tzn'],
  ['xn7sj9n', 'buytr'],
  ['zpud7', 'sstr1ao'],
  ['tl154k', 'pnylsh'],
  ['ymraes', 'roc33zb'],
  ['vseuxnl', 'do1sdty'],
  ['wxlxk', 'eok92u'],
  ['hu2v3', 'up98m'],
  ['pt6joj', 'amrqy'],
  ['mcitl7d', 'acd048l'],
  ['ohqkun7', 'kstat'],
  ['wnzxg', 'cm9aayi'],
  ['nc427f', 'rtjqp'],
  ['wxts7', 'jn406'],
  ['nmpf6', 'payrow'],
  ['ac7ftax', 'jvrey'],
  ['ouqsg', 'jpbm9'],
  ['rsjue', 'zrxvw'],
  ['kic586', 'ublsk0'],
  ['gwmiq5', 'nxy95'],
  ['fpt0t', 'nfphf'],
  ['gzarw', 'vmfqj'],
  ['pao46', 'fy2oj'],
  ['lzvjboi', 'skip-link'],
  ['nd5hm', 'skip-link'],
  ['ajr3je', 'fai'],
  ['kw4ijl', 'pay-ok'],
  ['mj6v9un', 'show'],
  ['tko58', 'okm3tz'],
];

function remapClasses(text) {
  let out = text;
  for (const [from, to] of CLASS_MAP) {
    if (from === to) continue;
    out = out.replace(new RegExp(`\\b${from}\\b`, 'g'), to);
  }
  return out;
}

function fixHeroSplit(indexPhp) {
  // Convert stacked hero+form into split grid like live site
  let html = indexPhp;

  // Ensure data-hero="split" on hero section
  html = html.replace(
    /<section class="pnylsh"/,
    '<section class="pnylsh" data-hero="split"',
  );

  // Wrap shell in split grid if not already
  if (!html.includes('qg0sgs')) {
    html = html.replace(
      /(<section class="pnylsh"[^>]*>\s*)<div class="nrzt44">/,
      '$1<div class="nrzt44 qg0sgs">\n    <div class="nfb5z">',
    );

    // Close nfb5z before form band, move stats after hero
    html = html.replace(
      /(\s*)(<div class="up98m" id="[^"]+"[^>]*>)/,
      '$1</div>\n$1$2',
    );

    // Move stats block out of hero: close hero after form, then stats
    html = html.replace(
      /(<\/div>\s*)(<div class="acd048l">[\s\S]*?<\/div>\s*)(<\/div>\s*<\/section>)/,
      '$1$3\n\n<section class="sec-sm" aria-label="Indicadores clave">\n <div class="nrzt44">\n$2\n </div>\n</section>',
    );
  }

  return html;
}

function fixHead(headPhp) {
  let h = headPhp;
  h = h.replace(/content="light"/g, 'content="dark"');
  h = h.replace(/color-scheme" content="light"/g, 'color-scheme" content="dark"');
  if (!h.includes('color-scheme:dark only')) {
    h = h.replace(
      /<meta name="theme-color"[^>]*>/,
      '<meta name="theme-color" content="#0a1019" />\n<meta name="color-scheme" content="dark" />\n<style>:root{color-scheme:dark only}</style>',
    );
  }
  h = h.replace(/#fcfcfd|#ffffff|#fff/gi, '#0a1019');
  return h;
}

function fixForm(formPhp) {
  let f = formPhp;
  // stack variant should be column layout matching live form (always stacked fields in card)
  f = f.replace(
    /\$form_variant = \$form_variant \?\? 'band';/,
    "$form_variant = $form_variant ?? 'stack';",
  );
  // CTA button classes already remapped; ensure full width primary
  f = f.replace(
    'class="rs0voj6 ggca24u submit"',
    'class="rs0voj6 ggca24u submit" style="width:100%;justify-content:center"',
  );
  f = f.replace(
    'class="qou73xg fi3abjs submit"',
    'class="rs0voj6 ggca24u submit" style="width:100%;justify-content:center"',
  );
  return f;
}

function walk(dir, exts, fn) {
  for (const ent of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, ent.name);
    if (ent.isDirectory()) walk(p, exts, fn);
    else if (exts.some((e) => ent.name.endsWith(e))) fn(p);
  }
}

const css = fs.readFileSync(liveCss, 'utf8');
// Extra helpers for remapped/legacy bits used by offerra forms
const extras = `
/* offerra form + stats helpers */
.kstat{padding:20px 24px;border-left:1px solid var(--border)}
.kstat:first-child{border-left:0}
.kstat b{display:block;font:800 1.65rem Inter,sans-serif;color:var(--heading)}
.kstat span{color:var(--muted);font-size:.88rem}
.acd048l{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:0;background:var(--surface-2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin-top:24px}
.rtjqp{display:flex;flex-direction:column;gap:12px}
.jn406 label{display:block;font:600 12.5px Inter;color:var(--muted);margin-bottom:6px}
.payrow{display:flex;flex-wrap:wrap;gap:18px;align-items:center;margin:18px 0 0;opacity:.9}
.payrow .fai{height:22px;width:auto;color:var(--muted)}
.payrow .fai.pay-ok{height:18px;color:var(--pos)}
.solano-form .rs0voj6{width:100%;justify-content:center;margin-top:16px}
.solano-stack .rtjqp,.solano-form .xdzqh{display:flex;flex-direction:column;gap:12px}
.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem}
.skip-link:focus{left:0}
.fy2oj.show{opacity:1;pointer-events:auto}
.sec-sm{padding:40px 0}
@media(max-width:900px){.acd048l{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:520px){.acd048l{grid-template-columns:1fr}}
`;

const langsDir = path.join(solano, 'langs');
const langs = fs.readdirSync(langsDir).filter((d) => fs.statSync(path.join(langsDir, d)).isDirectory());

for (const lang of langs) {
  const langPath = path.join(langsDir, lang);
  const cssPath = path.join(langPath, 'static', 'css', 'main.css');
  fs.mkdirSync(path.dirname(cssPath), { recursive: true });
  fs.writeFileSync(cssPath, css + '\n' + extras);

  const indexPath = path.join(langPath, 'index.php');
  if (fs.existsSync(indexPath)) {
    let idx = fs.readFileSync(indexPath, 'utf8');
    idx = remapClasses(idx);
    idx = fixHeroSplit(idx);
    // form id anchors
    idx = idx.replace(/#nl3qm8/g, '#jsyo6');
    idx = idx.replace(/id="nl3qm8"/g, 'id="jsyo6"');
    idx = idx.replace(/id="nlokf"/g, 'id="signup"');
    fs.writeFileSync(indexPath, idx);
  }

  for (const rel of [
    'includes/header.php',
    'includes/form.php',
    'includes/head.php',
    'includes/site-footer.php',
    'static/js/main.js',
  ]) {
    const p = path.join(langPath, rel);
    if (!fs.existsSync(p)) continue;
    let t = fs.readFileSync(p, 'utf8');
    t = remapClasses(t);
    if (rel.endsWith('head.php')) t = fixHead(t);
    if (rel.endsWith('form.php')) t = fixForm(t);
    if (rel.endsWith('header.php')) {
      t = t.replace(/#nl3qm8/g, '#jsyo6');
      t = t.replace(/>Precios</g, '>Pricing<');
      t = t.replace(/>Preguntas</g, '>FAQ<');
      t = t.replace(/>Nosotros</g, '>About<');
    }
    if (rel.endsWith('main.js')) {
      t = t.replace(/okm3tz/g, 'okm3tz');
      // year id already remapped tko58→okm3tz
    }
    fs.writeFileSync(p, t);
  }
}

console.log('Rebuilt solano for langs:', langs.join(', '));

#!/usr/bin/env node
/**
 * Build templates/solano/langs/es from _mirror of solanobursencia.co — exact structure.
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { execSync } from 'child_process';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(__dirname, '..');
const mirror = path.join(root, 'templates', 'solano', '_mirror');
const dest = path.join(root, 'templates', 'solano', 'langs', 'es');
const aurelEs = path.join(root, 'templates', 'aurel', 'langs', 'es');

function ensureDir(p) { fs.mkdirSync(p, { recursive: true }); }
function copyFile(src, dst) {
  ensureDir(path.dirname(dst));
  fs.copyFileSync(src, dst);
}
function copyDir(src, dst) {
  ensureDir(dst);
  for (const ent of fs.readdirSync(src, { withFileTypes: true })) {
    const s = path.join(src, ent.name);
    const d = path.join(dst, ent.name);
    if (ent.isDirectory()) copyDir(s, d);
    else copyFile(s, d);
  }
}

// --- 1) static assets ---
const staticRoot = path.join(dest, 'static');
ensureDir(path.join(staticRoot, 'css'));
ensureDir(path.join(staticRoot, 'js'));
ensureDir(path.join(staticRoot, 'img', 'brand'));
ensureDir(path.join(staticRoot, 'img', 'icons'));
ensureDir(path.join(staticRoot, 'fonts'));

copyFile(path.join(mirror, 'static', 'css', 'main.css'), path.join(staticRoot, 'css', 'main.css'));

// fonts
const fontSrc = path.join(mirror, 'fonts', '66f3f89ececa');
if (fs.existsSync(fontSrc)) {
  copyDir(fontSrc, path.join(staticRoot, 'fonts', '66f3f89ececa'));
  // rewrite font urls in f.css to be relative (already are)
}

// images
const imgMap = [
  ['assets/logo.webp', 'img/brand/logo.webp'],
  ['assets/ogscene.webp', 'img/og.webp'],
  ['assets/platform.webp', 'img/platform.webp'],
  ['assets/platform-640.webp', 'img/platform-640.webp'],
  ['assets/phone.webp', 'img/phone.webp'],
];
for (const [from, to] of imgMap) {
  const s = path.join(mirror, from);
  if (fs.existsSync(s)) copyFile(s, path.join(staticRoot, to));
}

// icons
for (const f of fs.readdirSync(path.join(mirror, 'icons'))) {
  copyFile(path.join(mirror, 'icons', f), path.join(staticRoot, 'img', 'icons', f));
}

// JS from live (keep for parity; form still uses offerra validation)
if (fs.existsSync(path.join(mirror, 's', 'n.js'))) {
  copyFile(path.join(mirror, 's', 'n.js'), path.join(staticRoot, 'js', 'n.js'));
}
if (fs.existsSync(path.join(mirror, 't.js'))) {
  copyFile(path.join(mirror, 't.js'), path.join(staticRoot, 'js', 't.js'));
}

// Fix font path in main.css / head — fonts referenced as /fonts/...
let mainCss = fs.readFileSync(path.join(staticRoot, 'css', 'main.css'), 'utf8');
// nothing extra needed if head links to font css separately

// Fix f.css urls if needed
const fCssPath = path.join(staticRoot, 'fonts', '66f3f89ececa', 'f.css');
if (fs.existsSync(fCssPath)) {
  let fcss = fs.readFileSync(fCssPath, 'utf8');
  // already relative like url(xxx.woff2)
  fs.writeFileSync(fCssPath, fcss);
}

// --- 2) keep offerra plumbing from existing es (integration, helpers, config, keitaro) ---
for (const keep of [
  'includes/config.php',
  'includes/helpers.php',
  'includes/keitaro.php',
  'includes/schema.php',
  'includes/icon-sprite.php',
  'includes/footer.php',
  'integration',
  'robots.php',
  'sitemap.php',
  '404.php',
  'Thanks.php',
  '.htaccess',
]) {
  const fromA = path.join(dest, keep);
  const fromAurel = path.join(aurelEs, keep);
  // already exists in dest from previous solano — leave integration/helpers
  if (!fs.existsSync(fromA) && fs.existsSync(fromAurel)) {
    const st = fs.statSync(fromAurel);
    if (st.isDirectory()) copyDir(fromAurel, fromA);
    else copyFile(fromAurel, fromA);
  }
}

// --- 3) Parse homepage and convert ---
let live = fs.readFileSync(path.join(mirror, 'index.html'), 'utf8');

function brandify(html) {
  return html
    .replace(/Solano Bursencia/g, "<?= e(SITE_NAME) ?>")
    .replace(/solanobursencia\.co/g, "<?= e(parse_url(SITE_URL, PHP_URL_HOST) ?: 'example.com') ?>")
    .replace(/220\s*€/g, "<?= e(money_min()) ?>")
    .replace(/€220/g, "<?= e(money_min()) ?>")
    .replace(/from €220/gi, "desde <?= e(money_min()) ?>");
}

function rewriteUrls(html) {
  const map = [
    ['/how-it-works', "<?= page_url('product.php') ?>"],
    ['/why', "<?= page_url('offer.php') ?>"],
    ['/pricing', "<?= page_url('pricing.php') ?>"],
    ['/faq', "<?= page_url('faq.php') ?>"],
    ['/blog', "<?= page_url('blog.php') ?>"],
    ['/about', "<?= page_url('about.php') ?>"],
    ['/privacy-policy', "<?= page_url('privacy.php') ?>"],
    ['/terms', "<?= page_url('conditions.php') ?>"],
    ['/risk-disclosure', "<?= page_url('risk-disclosure.php') ?>"],
    ['/report-abuse', "<?= page_url('report-abuse.php') ?>"],
    ['/cookie-policy', "<?= page_url('privacy.php') ?>"],
    ['/withdrawal-policy', "<?= page_url('conditions.php') ?>"],
    ['/deposits-withdrawals', "<?= page_url('conditions.php') ?>"],
    ['/kyc', "<?= page_url('conditions.php') ?>"],
    ['/licenses', "<?= page_url('conditions.php') ?>"],
    ['/contact', "<?= page_url('contacts.php') ?>"],
    ['/sign-up', "<?= page_url('sign.php') ?>"],
    ['/assets/logo.webp', "<?= asset('static/img/brand/logo.webp') ?>"],
    ['/assets/ogscene.webp', "<?= asset('static/img/og.webp') ?>"],
    ['/assets/platform.webp', "<?= asset('static/img/platform.webp') ?>"],
    ['/assets/platform-640.webp', "<?= asset('static/img/platform-640.webp') ?>"],
    ['/assets/phone.webp', "<?= asset('static/img/phone.webp') ?>"],
    ['/icons/', "<?= asset('static/img/icons/') ?>"], // careful — partial
    ['/fonts/66f3f89ececa/f.css', "<?= asset_version('static/fonts/66f3f89ececa/f.css') ?>"],
    ['/s/n.js', "<?= asset_version('static/js/n.js') ?>"],
    ['/t.js', "<?= asset_version('static/js/t.js') ?>"],
  ];
  let out = html;
  for (const [from, to] of map) {
    out = out.split(from).join(to);
  }
  // fix botched icons path if partial replace broke things
  out = out.replaceAll("<?= asset('static/img/icons/') ?>favicon", "<?= asset('static/img/icons/favicon");
  out = out.replaceAll("<?= asset('static/img/icons/') ?>apple", "<?= asset('static/img/icons/apple");
  out = out.replaceAll("<?= asset('static/img/icons/') ?>site", "<?= asset('static/img/icons/site");
  // better icon replace:
  return out;
}

function rewriteUrlsSafe(html) {
  let out = html;
  const exact = {
    '/how-it-works': "<?= page_url('product.php') ?>",
    '/why': "<?= page_url('offer.php') ?>",
    '/pricing': "<?= page_url('pricing.php') ?>",
    '/faq': "<?= page_url('faq.php') ?>",
    '/blog': "<?= page_url('blog.php') ?>",
    '/about': "<?= page_url('about.php') ?>",
    '/privacy-policy': "<?= page_url('privacy.php') ?>",
    '/terms': "<?= page_url('conditions.php') ?>",
    '/risk-disclosure': "<?= page_url('risk-disclosure.php') ?>",
    '/report-abuse': "<?= page_url('report-abuse.php') ?>",
    '/cookie-policy': "<?= page_url('privacy.php') ?>",
    '/withdrawal-policy': "<?= page_url('conditions.php') ?>",
    '/deposits-withdrawals': "<?= page_url('conditions.php') ?>",
    '/kyc': "<?= page_url('conditions.php') ?>",
    '/licenses': "<?= page_url('conditions.php') ?>",
    '/contact': "<?= page_url('contacts.php') ?>",
    '/sign-up': "<?= page_url('sign.php') ?>",
    '/assets/logo.webp': "<?= asset('static/img/brand/logo.webp') ?>",
    '/assets/ogscene.webp': "<?= asset('static/img/og.webp') ?>",
    '/assets/platform.webp': "<?= asset('static/img/platform.webp') ?>",
    '/assets/platform-640.webp': "<?= asset('static/img/platform-640.webp') ?>",
    '/assets/phone.webp': "<?= asset('static/img/phone.webp') ?>",
    '/icons/favicon.svg': "<?= asset('static/img/icons/favicon.svg') ?>",
    '/icons/favicon-32.png': "<?= asset('static/img/icons/favicon-32.png') ?>",
    '/icons/favicon-16.png': "<?= asset('static/img/icons/favicon-16.png') ?>",
    '/icons/favicon.ico': "<?= asset('static/img/icons/favicon.ico') ?>",
    '/icons/apple-touch-icon.png': "<?= asset('static/img/icons/apple-touch-icon.png') ?>",
    '/icons/site.webmanifest': "<?= asset('static/img/icons/site.webmanifest') ?>",
    '/icons/icon-192.png': "<?= asset('static/img/icons/icon-192.png') ?>",
    '/fonts/66f3f89ececa/f.css': "<?= asset_version('static/fonts/66f3f89ececa/f.css') ?>",
    '/s/n.js': "<?= asset_version('static/js/n.js') ?>",
    '/t.js': "<?= asset_version('static/js/t.js') ?>",
    '/send.php': "<?= asset('integration/send.php') ?>",
  };
  // replace longer keys first
  const keys = Object.keys(exact).sort((a, b) => b.length - a.length);
  for (const k of keys) {
    out = out.split(k).join(exact[k]);
  }
  // href="/" brand home
  out = out.replace(/href="\/"/g, 'href="<?= page_url() ?>"');
  return out;
}

// Extract <body>...</body> content (without outer body tag scripts we control)
const bodyMatch = live.match(/<body[^>]*>([\s\S]*)<\/body>/i);
if (!bodyMatch) throw new Error('no body');
let body = bodyMatch[1];

// Remove all inline <style> from body (moved to main.css)
body = body.replace(/<style[^>]*>[\s\S]*?<\/style>/gi, '');

// Replace BOTH lead forms with PHP includes
const formPhp = `
<?php
  $form_id = '__FORM_ID__';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Empezar';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'stack';
  require __DIR__ . '/includes/form.php';
?>`;

// Live forms start with <form action="/send.php"
body = body.replace(/<form\b[\s\S]*?<\/form>/gi, (match, offset) => {
  // only replace lead forms (have name=fname)
  if (!/name=["']fname["']/.test(match)) return match;
  const id = /id=["']jsyo6["']/.test(body.slice(Math.max(0, offset - 200), offset))
    || body.slice(Math.max(0, offset - 400), offset).includes('id="jsyo6"')
    ? 'lead-form-hero'
    : 'lead-form-cta';
  // Better: count — first = hero, second = cta
  return match; // handled below with counter
});

let formCount = 0;
body = body.replace(/<form\b[\s\S]*?<\/form>/gi, (match) => {
  if (!/name=["']fname["']/.test(match)) return match;
  formCount += 1;
  const id = formCount === 1 ? 'lead-form-hero' : 'lead-form-cta';
  return formPhp.replace('__FORM_ID__', id);
});

body = brandify(body);
body = rewriteUrlsSafe(body);

// Head from live but converted
const headMatch = live.match(/<head[^>]*>([\s\S]*?)<\/head>/i);
let headInner = headMatch ? headMatch[1] : '';
// strip styles (in main.css) and old links we'll rebuild
headInner = headInner.replace(/<style[^>]*>[\s\S]*?<\/style>/gi, '');
headInner = brandify(headInner);
headInner = rewriteUrlsSafe(headInner);
// force our css link
if (!headInner.includes("static/css/main.css")) {
  headInner += `\n<link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>" />\n`;
} else {
  // replace any leftover stylesheet to main
}
headInner = headInner.replace(/<link rel="stylesheet" href="[^"]*main\.css[^"]*"\s*\/?>/gi, '');
headInner += `<link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>" />\n`;
headInner += `<link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>" />\n`;

const headPhp = `<?php
require_once __DIR__ . '/config.php';
$page_title = $page_title ?? (SITE_NAME . ' ᐉ un ingreso extra con análisis con IA');
$page_description = $page_description ?? ('Un analista financiero personal, apoyado en IA, te acompaña para construir un ingreso adicional con ' . SITE_NAME . '. Genera ingresos desde ' . money_min() . '.');
$page_canonical = $page_canonical ?? page_url();
$active_page = $active_page ?? 'home';
?><!doctype html>
<html lang="<?= e(site_locale()) ?>">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
<meta name="format-detection" content="telephone=no" />
<meta name="referrer" content="strict-origin-when-cross-origin" />
<meta name="robots" content="<?= e($active_page === 'Thanks' ? 'noindex, nofollow' : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1') ?>" />
<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_description) ?>" />
<link rel="canonical" href="<?= e($page_canonical) ?>" />
<meta name="author" content="<?= e(SITE_NAME) ?>" />
<link rel="icon" type="image/svg+xml" href="<?= asset('static/img/icons/favicon.svg') ?>" />
<link rel="icon" type="image/png" sizes="32x32" href="<?= asset('static/img/icons/favicon-32.png') ?>" />
<link rel="icon" type="image/png" sizes="16x16" href="<?= asset('static/img/icons/favicon-16.png') ?>" />
<link rel="shortcut icon" href="<?= asset('static/img/icons/favicon.ico') ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?= asset('static/img/icons/apple-touch-icon.png') ?>" />
<meta name="theme-color" content="#0a1019" />
<meta name="color-scheme" content="dark" />
<style>:root{color-scheme:dark only}</style>
<meta name="darkreader-lock" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="es_ES" />
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>" />
<meta property="og:title" content="<?= e($page_title) ?>" />
<meta property="og:description" content="<?= e($page_description) ?>" />
<meta property="og:url" content="<?= e($page_canonical) ?>" />
<meta property="og:image" content="<?= e(page_url('static/img/og.webp')) ?>" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="stylesheet" href="<?= asset_version('static/fonts/66f3f89ececa/f.css') ?>" />
<link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>" />
<link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" />
<script>
window.APP_LANG = {
  valPhoneInvalid: 'Introduce un teléfono válido',
  valPhoneCountry: 'Código de país no válido',
  valPhoneShort: 'El número es demasiado corto',
  valPhoneLong: 'El número es demasiado largo'
};
window.OFFER_CURRENCY_SYMBOL = <?= json_encode(currency_symbol(), JSON_UNESCAPED_UNICODE) ?>;
window.OFFER_LOCALE = <?= json_encode(site_locale(), JSON_UNESCAPED_UNICODE) ?>;
</script>
<?php require __DIR__ . '/schema.php'; ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body>
<?php require __DIR__ . '/icon-sprite.php'; ?>
`;

// Write form.php from live field labels (Spanish) — stacked
const formFile = `<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$form_submit = $form_submit ?? 'Empezar';
$form_variant = $form_variant ?? 'stack';
$form_class = trim(($form_class ?? 'leadform lead-form solano-form') . ' solano-stack');
$form_subtitle = $form_subtitle ?? null;
$phone_country = form_visitor_phone_country();
$allowed_countries = form_allowed_countries();
$lead_cookie = site_slug() . '_lead';
?>
<form
  name="form"
  method="post"
  id="<?= e($form_id) ?>"
  class="<?= e($form_class) ?>"
  action="<?= asset('integration/send.php') ?>"
  data-form
  data-leadform
  data-lead-cookie="<?= e($lead_cookie) ?>"
  data-cookie-days="<?= (int) FORM_LEAD_COOKIE_DAYS ?>"
>
  <div class="form-already-registered hidden" data-already-registered>
    <div class="form-already-registered__icon" aria-hidden="true">✓</div>
    <p class="form-already-registered__title">Ya estás registrado</p>
    <p class="form-already-registered__text">
      Tu solicitud en <?= e(SITE_NAME) ?> ha sido recibida. Espera la llamada de nuestro asesor.
    </p>
  </div>

  <div data-form-fields>
    <input type="hidden" name="language" value="<?= e(SITE_LANG) ?>">
    <input type="hidden" name="phone_country" value="<?= e($phone_country) ?>">
    <input type="hidden" name="only_countries" value='<?= e(json_encode($allowed_countries)) ?>'>
<?php if (($keitaro_subid = keitaro_subid()) !== ''): ?>
    <input type="hidden" name="subid" value="<?= e($keitaro_subid) ?>">
<?php endif; ?>
    <input type="hidden" name="form_token" value="" autocomplete="off">

    <div class="form-preloader hidden" aria-hidden="true"><div class="spinner"></div></div>

    <div class="rtjqp">
      <div class="jn406 field" data-field="fname">
        <label class="field-label" for="<?= e($form_id) ?>-fname">Nombre</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-fname" type="text" name="fname" placeholder="Nombre" required pattern="[^\\d]+" autocomplete="given-name">
      </div>
      <div class="jn406 field" data-field="lname">
        <label class="field-label" for="<?= e($form_id) ?>-lname">Apellidos</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-lname" type="text" name="lname" placeholder="Apellidos" required pattern="[^\\d]+" autocomplete="family-name">
      </div>
      <div class="jn406 field" data-field="email">
        <label class="field-label" for="<?= e($form_id) ?>-email">Correo electrónico</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-email" type="email" name="email" placeholder="Correo electrónico" required autocomplete="email" inputmode="email">
      </div>
      <div class="jn406 field" data-field="phone">
        <label class="field-label" for="<?= e($form_id) ?>-phone">Teléfono</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-phone" type="tel" name="fullphone" placeholder="612 34 56 78" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
    </div>

    <button type="submit" class="rs0voj6 ggca24u submit" style="width:100%;justify-content:center"><?= e($form_submit) ?></button>

    <div class="payrow" aria-label="Métodos de pago aceptados">
      <svg class="fai" role="img" aria-label="Visa" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>
      <svg class="fai" role="img" aria-label="Mastercard" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>
      <svg class="fai" role="img" aria-label="PayPal" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>
      <svg class="fai" role="img" aria-label="Apple Pay" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>
      <svg class="fai" role="img" aria-label="Transferencia bancaria" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>
      <svg class="fai pay-ok" role="img" aria-label="Seguro" viewBox="0 0 512 512"><use href="#i-shield-halved"/></svg>
    </div>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="jvrey">
      Al continuar, aceptas nuestros Términos y la Política de Privacidad.
      <a href="<?= page_url('privacy.php') ?>">Privacidad</a>
      &amp;
      <a href="<?= page_url('conditions.php') ?>">Condiciones de uso</a>.
    </p>
  </div>
</form>
<?php
// intl-tel-input bootstrapped at page end via footer include
`;

fs.writeFileSync(path.join(dest, 'includes', 'form.php'), formFile);
fs.writeFileSync(path.join(dest, 'includes', 'head.php'), headPhp);

// Empty header — live body already includes header
fs.writeFileSync(path.join(dest, 'includes', 'header.php'), '');
// site-footer empty — footer is in body
fs.writeFileSync(path.join(dest, 'includes', 'site-footer.php'), '');

const indexPhp = `<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ un ingreso extra con análisis con IA';
$page_description = 'Un analista financiero personal, apoyado en IA, te acompaña para construir un ingreso adicional con ' . SITE_NAME . '. Genera ingresos desde ' . money_min() . '.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
${body}
<?php require __DIR__ . '/includes/footer.php'; ?>
`;

fs.writeFileSync(path.join(dest, 'index.php'), indexPhp);
console.log('Wrote index.php, forms=', formCount);

// Append form helper CSS
mainCss = fs.readFileSync(path.join(staticRoot, 'css', 'main.css'), 'utf8');
mainCss += `
/* offerra form helpers */
.rtjqp{display:flex;flex-direction:column;gap:12px}
.jn406 label,.jn406 .field-label{display:block;font:600 12.5px Inter,sans-serif;color:var(--muted);margin-bottom:6px}
.payrow{display:flex;flex-wrap:wrap;gap:18px;align-items:center;margin:18px 0 0;opacity:.9}
.payrow .fai{height:22px;width:auto;color:var(--muted);fill:currentColor}
.payrow .fai.pay-ok{height:18px;color:var(--pos)}
.solano-form .rs0voj6.submit{width:100%;justify-content:center;margin-top:16px}
.field-error{color:var(--neg);font-size:.8rem}
.hidden,.hide{display:none!important}
`;
fs.writeFileSync(path.join(staticRoot, 'css', 'main.css'), mainCss);

// Convert other pages from mirror (simple wrappers)
const pageMap = {
  'how-it-works': 'product.php',
  'why': 'offer.php',
  'pricing': 'pricing.php',
  'faq': 'faq.php',
  'blog': 'blog.php',
  'about': 'about.php',
  'privacy-policy': 'privacy.php',
  'terms': 'conditions.php',
  'risk-disclosure': 'risk-disclosure.php',
  'report-abuse': 'report-abuse.php',
  'contact': 'contacts.php',
  'sign-up': 'sign.php',
};

function extractMain(html) {
  const m = html.match(/<main[^>]*>([\s\S]*?)<\/main>/i);
  if (m) return m[1];
  const b = html.match(/<body[^>]*>([\s\S]*)<\/body>/i);
  return b ? b[1] : html;
}

function extractHeader(html) {
  const m = html.match(/<header[\s\S]*?<\/header>/i);
  return m ? m[0] : '';
}

function extractFooter(html) {
  const m = html.match(/<footer[\s\S]*?<\/footer>/i);
  return m ? m[0] : '';
}

const homeHeader = extractHeader(live);
const homeFooter = extractFooter(live);

for (const [srcName, outName] of Object.entries(pageMap)) {
  const srcPath = path.join(mirror, srcName);
  if (!fs.existsSync(srcPath)) {
    console.warn('missing page', srcName);
    continue;
  }
  let pageHtml = fs.readFileSync(srcPath, 'utf8');
  let main = extractMain(pageHtml);
  // Prefer shared header/footer from home for consistency
  let header = homeHeader || extractHeader(pageHtml);
  let footer = homeFooter || extractFooter(pageHtml);
  main = brandify(main);
  header = brandify(header);
  footer = brandify(footer);
  main = rewriteUrlsSafe(main);
  header = rewriteUrlsSafe(header);
  footer = rewriteUrlsSafe(footer);
  // strip styles
  main = main.replace(/<style[^>]*>[\s\S]*?<\/style>/gi, '');
  header = header.replace(/<style[^>]*>[\s\S]*?<\/style>/gi, '');
  footer = footer.replace(/<style[^>]*>[\s\S]*?<\/style>/gi, '');

  // Replace forms on sign-up / contact if any
  main = main.replace(/<form\b[\s\S]*?<\/form>/gi, (match) => {
    if (!/name=["']fname["']/.test(match)) return match;
    return formPhp.replace('__FORM_ID__', 'lead-form-page');
  });

  const php = `<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ ${srcName}';
$page_description = SITE_NAME;
$page_canonical = page_url('${outName}');
$active_page = '${outName.replace('.php', '')}';
require __DIR__ . '/includes/head.php';
?>
${header}
<main id="top">
${main}
</main>
${footer}
<?php require __DIR__ . '/includes/footer.php'; ?>
`;
  fs.writeFileSync(path.join(dest, outName), php);
  console.log('page', outName);
}

console.log('DONE build es from mirror');

/**
 * Convert mirrored Helios landing (cetrorendoreza.co) into Offerra template `cetra`.
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { execSync } from 'child_process';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');
const MIRROR = path.join(ROOT, '_mirror_cetra');
const VELORA = path.join(ROOT, 'templates', 'velora');
const OUT = path.join(ROOT, 'templates', 'cetra');
const PT = path.join(OUT, 'langs', 'pt');

function rmrf(p) {
  fs.rmSync(p, { recursive: true, force: true });
}
function mkdirp(p) {
  fs.mkdirSync(p, { recursive: true });
}
function copyDir(src, dest) {
  mkdirp(dest);
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const from = path.join(src, entry.name);
    const to = path.join(dest, entry.name);
    if (entry.isDirectory()) copyDir(from, to);
    else fs.copyFileSync(from, to);
  }
}

function copyFile(src, dest) {
  mkdirp(path.dirname(dest));
  fs.copyFileSync(src, dest);
}

const html = fs.readFileSync(path.join(MIRROR, 'index.html'), 'utf8');

// Clean output first, then write everything
rmrf(OUT);
mkdirp(path.join(OUT, 'includes'));
mkdirp(path.join(OUT, 'integration'));
mkdirp(path.join(PT, 'includes'));
mkdirp(path.join(PT, 'integration'));
mkdirp(path.join(PT, 'static', 'css'));
mkdirp(path.join(PT, 'static', 'js'));

// --- CSS ---
const styleMatch = html.match(/<style>([\s\S]*?)<\/style>/);
if (!styleMatch) throw new Error('no <style> block');
let css = styleMatch[1];
// Prefer the indigo accent used on live screenshot as primary identity
css = css.replace(/:root\{[\s\S]*?\}/, (block) => {
  // Keep first :root but force accent to indigo if a second theme exists
  return block
    .replace(/--accent:#b8551d/g, '--accent:#4f46e5')
    .replace(/--accent-2:#c98a2e/g, '--accent-2:#6366f1')
    .replace(/--accent2:#c98a2e/g, '--accent2:#6366f1')
    .replace(/--gold:#c98a2e/g, '--gold:#6366f1')
    .replace(/--champ:#b8551d/g, '--champ:#4f46e5')
    .replace(/--bg:#f7f6f3/g, '--bg:#f5f6fb')
    .replace(/--surface-2:#efece6/g, '--surface-2:#eef0f8')
    .replace(/--text:#1e1c18/g, '--text:#0f172a')
    .replace(/--heading:#100f0c/g, '--heading:#0b1020')
    .replace(/--muted:#6d6a62/g, '--muted:#64748b')
    .replace(/--fog:#3b3831/g, '--fog:#334155')
    .replace(/--border:rgba\(16,15,12,\.12\)/g, '--border:rgba(15,23,42,.12)')
    .replace(/--hover:rgba\(16,15,12,\.04\)/g, '--hover:rgba(15,23,42,.04)')
    .replace(/--track:rgba\(16,15,12,\.09\)/g, '--track:rgba(15,23,42,.09)');
});
// Drop alternate :root theme blocks that reintroduce copper if any after first
// Keep as-is otherwise.

// Fonts are loaded via head.php link to static/fonts/.../f.css (not @import).
css = css.replace(/@import\s+url\([^)]*fonts[^)]*\);\s*/gi, '');

// Offerra form compatibility layer (velora class names used by form.php)
css += `

/* === Offerra form bridge === */
.leadform .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.leadform .field-full{grid-column:1/-1}
.leadform .field{display:flex;flex-direction:column;gap:6px}
.leadform .field-label{font:600 13px Sora,sans-serif;color:var(--fog)}
.leadform .input, .leadform input.input{
  width:100%;border:1px solid var(--border);border-radius:12px;padding:12px 14px;
  background:var(--surface-2);color:var(--text);font:400 15px Inter,system-ui,sans-serif
}
.leadform .btn-block{width:100%;justify-content:center}
.leadform .form-subtitle{color:var(--muted);margin:0 0 14px;font-size:.95rem}
.leadform .form-card-title{margin:0 0 6px;font-size:1.25rem}
.leadform .form-already-registered{text-align:center;padding:18px 8px}
.leadform .form-already-registered.hidden,.leadform .hidden,.hide{display:none!important}
.leadform .field-error{color:var(--neg);font-size:12px;margin-top:4px}
.leadform .form-message{margin-top:12px;padding:10px 12px;border-radius:10px;background:var(--surface-2)}
.payment-icons{display:flex;flex-wrap:wrap;gap:10px;align-items:center;justify-content:center;margin:14px 0 8px}
.payment-icons img{height:22px;width:auto;opacity:.75}
.iti{width:100%}
@media(max-width:640px){.leadform .form-grid{grid-template-columns:1fr}}
`;

mkdirp(path.join(PT, 'static', 'css'));
fs.writeFileSync(path.join(PT, 'static', 'css', 'main.css'), css, 'utf8');

// Copy fonts + assets + icons into static
copyDir(path.join(MIRROR, 'fonts'), path.join(PT, 'static', 'fonts'));
copyDir(path.join(MIRROR, 'assets'), path.join(PT, 'static', 'img', 'brand'));
copyDir(path.join(MIRROR, 'icons'), path.join(PT, 'static', 'img', 'icons'));
if (fs.existsSync(path.join(MIRROR, '_ext', 'assets', 'og.webp'))) {
  copyFile(path.join(MIRROR, '_ext', 'assets', 'og.webp'), path.join(PT, 'static', 'img', 'og-image.webp'));
}

// Fix font css urls: f.css sits next to the .woff2 files
const fontCssPath = path.join(PT, 'static', 'fonts', 'b8a4e4ccd231', 'f.css');
if (fs.existsSync(fontCssPath)) {
  let fcss = fs.readFileSync(fontCssPath, 'utf8');
  fcss = fcss.replace(
    /url\(\s*['"]?\/fonts\/b8a4e4ccd231\/([^)'"\s]+)['"]?\s*\)/g,
    "url('./$1')",
  );
  fs.writeFileSync(fontCssPath, fcss, 'utf8');
}

// --- Body extraction ---
let body = html.match(/<body[^>]*>([\s\S]*)<\/body>/i)[1];

// Remove tracking scripts and cookie consent scripts we don't need as external deps
body = body.replace(/<script async src="\/s\/n\.js"><\/script>/g, '');
body = body.replace(/<script src="\/t\.js"[^>]*><\/script>/g, '');

// Rewrite asset paths
body = body.replace(/src=["']\/assets\/([^"']+)["']/g, "src=\"<?= asset('static/img/brand/$1') ?>\"");
body = body.replace(/src=["']\/icons\/([^"']+)["']/g, "src=\"<?= asset('static/img/icons/$1') ?>\"");
body = body.replace(/href=["']\/icons\/([^"']+)["']/g, "href=\"<?= asset('static/img/icons/$1') ?>\"");

// Brand name -> SITE_NAME (text nodes carefully)
body = body.replace(/Cetro Rendoreza/g, "<?= e(SITE_NAME) ?>");

// Deposit amounts like RRR$1.300 or R$1.300 / RR$ — normalize to MIN_DEPOSIT + CURRENCY
body = body.replace(/RRR?\$\s*([0-9.,]+)\s*mín\.?/gi, "<?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> mín.");
body = body.replace(/a partir de RRR?\$\s*([0-9.,]+)/gi, "a partir de <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?>");
body = body.replace(/RRR?\$([0-9.,]+)/g, "<?= e(CURRENCY) ?> $1");

// Legal links
body = body.replace(/href=["']\/privacy-policy["']/g, "href=\"<?= page_url('privacy.php') ?>\"");
body = body.replace(/href=["']\/terms["']/g, "href=\"<?= page_url('conditions.php') ?>\"");
body = body.replace(/href=["']\/contact["']/g, "href=\"<?= page_url('contacts.php') ?>\"");
body = body.replace(/href=["']\/about["']/g, "href=\"<?= page_url('product.php') ?>\"");
body = body.replace(/href=["']\/pricing["']/g, "href=\"<?= page_url('offer.php') ?>\"");
body = body.replace(/href=["']\/risk-disclosure["']/g, "href=\"<?= page_url('conditions.php') ?>\"");
body = body.replace(/href=["']\/report-abuse["']/g, "href=\"<?= page_url('contacts.php') ?>\"");
body = body.replace(/href=["']\/["']/g, "href=\"<?= page_url() ?>\"");

// Replace both lead forms with Offerra include
const formPhp = `<?php
  $form_id = 'hero-form';
  $form_heading = 'Abra sua conta';
  $form_subtitle = 'Comece em poucos minutos.';
  $form_submit = 'Quero começar';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>`;

const formPhpSignup = `<?php
  $form_id = 'signup-form';
  $form_heading = 'Abra sua conta';
  $form_subtitle = 'Comece em poucos minutos.';
  $form_submit = 'Quero começar';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>`;

// Replace forms - two forms
let formIdx = 0;
body = body.replace(/<form[\s\S]*?<\/form>/gi, () => {
  formIdx += 1;
  return formIdx === 1 ? formPhp : formPhpSignup;
});

// Year footer
body = body.replace(/id="yr">\d{4}/g, 'id="yr"><?= date(\'Y\') ?>');

// Extract header / main / footer roughly
// Keep as single index for now with head/header/footer php wrappers

const headPhp = `<?php
require_once __DIR__ . '/includes/config.php';
$page_title = $page_title ?? page_title('IA e execução em tempo real');
$page_description = $page_description ?? (SITE_NAME . ' — tecnologia de IA que analisa mercados e executa ordens em tempo real, com um analista pessoal ao seu lado.');
$page_canonical = $page_canonical ?? page_url();
$active_page = $active_page ?? 'home';
?><!doctype html>
<html lang="<?= e(SITE_LANG) ?>-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
<meta name="format-detection" content="telephone=no" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_description) ?>" />
<link rel="canonical" href="<?= e($page_canonical) ?>" />
<meta name="author" content="<?= e(SITE_NAME) ?>" />
<link rel="icon" type="image/svg+xml" href="<?= asset('static/img/icons/favicon.svg') ?>" />
<link rel="icon" type="image/png" sizes="32x32" href="<?= asset('static/img/icons/favicon-32.png') ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?= asset('static/img/icons/apple-touch-icon.png') ?>" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>" />
<meta property="og:title" content="<?= e($page_title) ?>" />
<meta property="og:description" content="<?= e($page_description) ?>" />
<meta property="og:url" content="<?= e($page_canonical) ?>" />
<meta property="og:image" content="<?= e(page_url('static/img/og-image.webp')) ?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= e($page_title) ?>" />
<meta name="twitter:description" content="<?= e($page_description) ?>" />
<meta name="twitter:image" content="<?= e(page_url('static/img/og-image.webp')) ?>" />
<link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>" />
<link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" />
<script>window.APP_LANG = <?= json_encode(SITE_LANG) ?>;</script>
<?php require __DIR__ . '/includes/schema.php'; ?>
</head>
<body>
`;

const footerScripts = `
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset_version('static/js/main.js') ?>"></script>
</body>
</html>
`;

// Strip original head-related leftovers if any in body (svg sprite etc keep)
// Remove cookie banner handlers that reference missing endpoints — keep simple dismiss
body = body.replace(/document\.getElementById\('ck-yes'\)[\s\S]*?ck-consent[\s\S]*?;\s*}/g, '');

const indexPhp = `<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('IA e execução em tempo real | Site Oficial');
$page_description = SITE_NAME . ' — tecnologia de IA que analisa mercados e executa ordens em tempo real, com um analista pessoal ao seu lado para construir uma nova fonte de renda.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
${body}
<?php require __DIR__ . '/includes/footer.php'; ?>
`;

// Build shared from velora
for (const f of fs.readdirSync(path.join(VELORA, 'integration'))) {
  const src = path.join(VELORA, 'integration', f);
  if (fs.statSync(src).isFile()) {
    copyFile(src, path.join(OUT, 'integration', f));
  }
}
if (fs.existsSync(path.join(VELORA, 'integration', 'tokens'))) {
  copyDir(path.join(VELORA, 'integration', 'tokens'), path.join(OUT, 'integration', 'tokens'));
}
copyFile(path.join(VELORA, 'includes', 'helpers.php'), path.join(OUT, 'includes', 'helpers.php'));
copyFile(path.join(VELORA, 'includes', 'keitaro.php'), path.join(OUT, 'includes', 'keitaro.php'));

// Copy into PT pack too
copyDir(path.join(OUT, 'integration'), path.join(PT, 'integration'));
copyFile(path.join(OUT, 'includes', 'helpers.php'), path.join(PT, 'includes', 'helpers.php'));
copyFile(path.join(OUT, 'includes', 'keitaro.php'), path.join(PT, 'includes', 'keitaro.php'));

// PT form / payment / schema from velora pt (adapt later)
copyFile(path.join(VELORA, 'langs', 'pt', 'includes', 'form.php'), path.join(PT, 'includes', 'form.php'));
copyFile(path.join(VELORA, 'langs', 'pt', 'includes', 'payment-icons.php'), path.join(PT, 'includes', 'payment-icons.php'));
if (fs.existsSync(path.join(VELORA, 'langs', 'pt', 'static', 'img', 'payments'))) {
  copyDir(path.join(VELORA, 'langs', 'pt', 'static', 'img', 'payments'), path.join(PT, 'static', 'img', 'payments'));
}

// Config PT
const config = `<?php
define('SITE_NAME', 'testizio');
define('SITE_URL', 'https://testizio.com');
define('SITE_LANG', 'pt');
define('MIN_DEPOSIT', '250');
define('CURRENCY', 'BRL');

define('CRM_API_URL', 'https://yourleads.org/api/affiliates/v2/leads');
define('CRM_API_KEY', 'b15dtss21lmvlch8zheq1eukzb8840nw');
define('CRM_AFFILIATE_ID', 'BRO');
define('CRM_FUNNEL', 'testizio');
define('CRM_COUNTRY', 'BR');

define('CRM_AFF_SUB', '');
define('CRM_AFF_SUB2', '');
define('CRM_AFF_SUB3', '');
define('CRM_AFF_SUB4', '');
define('CRM_AFF_SUB5', '');
define('CRM_AFF_SUB6', '');
define('CRM_AFF_SUB7', '');
define('CRM_AFF_SUB8', '');
define('CRM_AFF_SUB9', '');
define('CRM_AFF_SUB10', '');
define('CRM_AFF_SUB11', '');

define('TG_BOT_TOKEN', '8374261466:AAEcvD648TQNYRpSxVjULW02y-0tCk67P-M');
define('TG_CHAT_ID', '8918948320');

define('FORM_PHONE_COUNTRY', 'br');
define('FORM_ALLOWED_COUNTRIES', 'br');
define('FORM_THANK_YOU', 'Thanks.php');
define('FORM_LEAD_COOKIE_DAYS', 30);
define('FORM_TOKEN_SECRET', 'local-dev-form-token-secret-change-me-32b');
define('FORM_TOKEN_TTL', 600);
define('FORM_TOKEN_MIN_AGE', 3);
define('FORM_TOKEN_ISSUE_LIMIT', 8);
define('FORM_TOKEN_SUBMIT_LIMIT', 3);
define('FORM_TOKEN_RATE_WINDOW', 600);
define('FORM_TOKEN_DEBUG', false);

define('KEITARO_ENABLED', true);
define('KEITARO_TRACKER_URL', 'https://clickmetrics38.com');
define('KEITARO_CAMPAIGN_TOKEN', 'TfjmtrpQkfKgQykK');
define('KEITARO_CRM_SUB_FIELD', 'aff_sub3');
define('KEITARO_DEBUG', false);

require_once __DIR__ . '/helpers.php';
offer_send_personalization_headers();
require_once __DIR__ . '/keitaro.php';
keitaro_bootstrap();
`;
fs.writeFileSync(path.join(PT, 'includes', 'config.php'), config);

// head.php / footer.php
fs.writeFileSync(path.join(PT, 'includes', 'head.php'), headPhp.replace("require __DIR__ . '/includes/schema.php';", "require __DIR__ . '/schema.php';").replace("require_once __DIR__ . '/includes/config.php';", "require_once __DIR__ . '/config.php';"));

fs.writeFileSync(
  path.join(PT, 'includes', 'footer.php'),
  `<?php
// Closing scripts for cetra (Helios) template
?>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset_version('static/js/main.js') ?>"></script>
</body>
</html>
`,
);

// Minimal schema
fs.writeFileSync(
  path.join(PT, 'includes', 'schema.php'),
  `<?php
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => SITE_NAME,
  'url' => SITE_URL,
  'description' => SITE_NAME . ' — plataforma de investimento com IA e execução em tempo real.',
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
`,
);

// header stub (nav is inside body from mirror)
fs.writeFileSync(path.join(PT, 'includes', 'header.php'), "<?php\n// Nav is embedded in page body for cetra/Helios layout.\n");

// main.js - extract useful inline scripts from original (markets ticker etc.) without trackers
const inlineScripts = [...html.matchAll(/<script(?![^>]*src=)[^>]*>([\s\S]*?)<\/script>/gi)]
  .map((m) => m[1].trim())
  .filter((s) => s && !s.includes('application/ld+json') && !s.startsWith('{') && !s.includes('@context'));

// Keep scripts that look like UI (faq, markets, cookie)
const keep = inlineScripts.filter((s) =>
  /faq|market|ticker|BTC|accordion|ck-consent|querySelector/i.test(s) && !/fetch\(|send\.php|js_token|n\.js/i.test(s),
);
fs.writeFileSync(
  path.join(PT, 'static', 'js', 'main.js'),
  `/* cetra / Helios UI */\n` + keep.join('\n\n') + '\n',
  'utf8',
);

// Write index
fs.writeFileSync(path.join(PT, 'index.php'), indexPhp, 'utf8');

// Secondary pages - thin wrappers with same chrome
function simplePage(file, title, h1, contentHtml) {
  const php = `<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead(${JSON.stringify(title)});
$page_description = ${JSON.stringify(title)} . ' — ' . SITE_NAME;
$page_canonical = page_url(${JSON.stringify(file)});
$active_page = ${JSON.stringify(file.replace('.php', ''))};
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Abra sua conta</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>${h1}</h1>
      <div class="lede" style="margin-top:18px">
        ${contentHtml}
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Abra sua conta</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos os direitos reservados.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Privacidade</a> · <a href="<?= page_url('conditions.php') ?>">Termos</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
`;
  fs.writeFileSync(path.join(PT, file), php, 'utf8');
}

simplePage('product.php', 'Produto', '<?= e(SITE_NAME) ?> — a plataforma', '<p>Motor de IA com análise humana em tempo real. Opere cripto, forex e ações no mesmo painel, com execução rápida e capital segregado.</p>');
simplePage('offer.php', 'Preços', 'Comece a partir de <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?>', '<p>Acesso completo à plataforma após o depósito mínimo. Sem taxas escondidas — os custos são mostrados com transparência.</p>');
simplePage('faq.php', 'FAQ', 'Perguntas frequentes', '<p>Dúvidas sobre depósito, saques, segurança e onboarding. Abra sua conta e um especialista ajuda no primeiro passo.</p>');
simplePage('contacts.php', 'Contacto', 'Fale conosco', '<p>Email: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></p><?php $form_id="contact-form"; $form_heading="Deixe seus dados"; $form_submit="Enviar"; require __DIR__."/includes/form.php"; ?>');
simplePage('sign.php', 'Cadastro', 'Abra sua conta', '<?php $form_id="sign-form"; $form_heading="Comece em poucos minutos"; $form_submit="Quero começar"; require __DIR__."/includes/form.php"; ?>');
simplePage('privacy.php', 'Privacidade', 'Política de Privacidade', '<p>Esta política descreve como <?= e(SITE_NAME) ?> coleta e protege seus dados pessoais (nome, e-mail, telefone) para criar e gerenciar sua conta.</p>');
simplePage('conditions.php', 'Termos', 'Termos de Utilização', '<p>Ao acessar <?= e(SITE_NAME) ?> você concorda com estes termos. Investir envolve risco, incluindo possível perda de capital. Você deve ter pelo menos 18 anos.</p>');
simplePage('Thanks.php', 'Obrigado', 'Você está dentro.', '<p>Obrigado por se cadastrar em <?= e(SITE_NAME) ?>. Nossa equipe entrará em contato em breve — mantenha o telefone por perto.</p>');
simplePage('404.php', 'Página não encontrada', 'Página não encontrada', '<p>Esse link não existe. <a href="<?= page_url() ?>">Voltar ao início</a>.</p>');

fs.writeFileSync(
  path.join(PT, 'robots.php'),
  `<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: text/plain; charset=UTF-8');
echo "User-agent: *\\nAllow: /\\nSitemap: " . page_url('sitemap.php') . "\\n";
`,
);

fs.writeFileSync(
  path.join(PT, 'sitemap.php'),
  `<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=UTF-8');
$pages = ['', 'product.php', 'offer.php', 'faq.php', 'contacts.php', 'sign.php', 'privacy.php', 'conditions.php'];
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p): ?>
  <url><loc><?= e(page_url($p)) ?></loc></url>
<?php endforeach; ?>
</urlset>
`,
);

fs.writeFileSync(
  path.join(OUT, 'README.md'),
  `# cetra

Helios-based landing imported from cetrorendoreza.co.

- Source language: **pt** (\`langs/pt\`)
- Shared Offerra integration in root \`includes/\` + \`integration/\`
`,
);

// Also put a root config pointing tip for catalog? Root without SITE_LANG is fine — only langs/pt discovered.

console.log('Built templates/cetra with langs/pt');
console.log('index size', fs.statSync(path.join(PT, 'index.php')).size);
console.log('css size', fs.statSync(path.join(PT, 'static', 'css', 'main.css')).size);

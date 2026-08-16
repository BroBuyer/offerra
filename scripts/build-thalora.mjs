import fs from 'node:fs';
import path from 'node:path';

const rawDir = 'C:/Users/Admin/Desktop/offerName/_althera_src';
const outDir = 'C:/Users/Admin/Desktop/offerName/offerra/templates/thalora';

const pages = {
  index: {
    file: path.join(rawDir, 'index.html'),
    out: 'index.php',
    active: 'home',
    title: null,
    desc: null,
  },
  product: { file: path.join(rawDir, 'pages/product.html'), out: 'product.php', active: 'product' },
  offer: { file: path.join(rawDir, 'pages/offer.html'), out: 'offer.php', active: 'offer' },
  contacts: { file: path.join(rawDir, 'pages/contacts.html'), out: 'contacts.php', active: 'contacts' },
  faq: { file: path.join(rawDir, 'pages/faq.html'), out: 'faq.php', active: 'faq' },
  about: { file: path.join(rawDir, 'pages/about.html'), out: 'about.php', active: 'about' },
  sign: { file: path.join(rawDir, 'pages/sign.html'), out: 'sign.php', active: 'sign' },
  privacy: { file: path.join(rawDir, 'pages/privacy.html'), out: 'privacy.php', active: 'privacy' },
  conditions: { file: path.join(rawDir, 'pages/conditions.html'), out: 'conditions.php', active: 'terms' },
};

function extractTag(html, tag) {
  const m = html.match(new RegExp(`<${tag}[^>]*>([\\s\\S]*?)</${tag}>`, 'i'));
  return m ? m[1].trim() : '';
}

function extractMeta(html, name) {
  const m = html.match(new RegExp(`<meta name="${name}" content="([^"]*)"`, 'i'));
  return m ? m[1] : '';
}

function findMatchingDiv(html, start) {
  const open = html.indexOf('<div', start);
  if (open !== start) return -1;
  let i = start;
  let depth = 0;
  while (i < html.length) {
    const nextOpen = html.indexOf('<div', i);
    const nextClose = html.indexOf('</div>', i);
    if (nextClose === -1) return -1;
    if (nextOpen !== -1 && nextOpen < nextClose) {
      depth += 1;
      i = nextOpen + 4;
    } else {
      depth -= 1;
      i = nextClose + 6;
      if (depth === 0) return i;
    }
  }
  return -1;
}

function replaceLeadForms(html, baseId) {
  html = html.replace(/<link rel="stylesheet" href="https:\/\/cdn\.jsdelivr\.net\/npm\/intl-tel-input[^>]*>/g, '');
  html = html.replace(/<style>:root\{--iti-path-flags[\s\S]*?<\/style>/g, '');
  html = html.replace(/<script src="https:\/\/cdn\.jsdelivr\.net\/npm\/intl-tel-input[\s\S]*?<\/script>/g, '');
  html = html.replace(/<link rel="stylesheet" href="\/core\/form\.css[^>]*>/g, '');
  html = html.replace(/<style>\.apx-hp-wrap\{[\s\S]*?<\/style>/g, '');
  html = html.replace(/<script defer src="\/js\/form-aux[^>]*><\/script>/g, '');
  html = html.replace(/<script>window\.defaultLang = "en";<\/script>/g, '');
  html = html.replace(/<script src="\/assets\/js\/lazyload\.min\.js[^>]*><\/script>/g, '');
  html = html.replace(/<script src="\/assets\/js\/scripts\.js[^>]*><\/script>/g, '');

  let n = 0;
  const marker = 'class="apx-lead lead-form-wrap';
  while (html.includes(marker)) {
    const classPos = html.indexOf(marker);
    const start = html.lastIndexOf('<div', classPos);
    const endDiv = findMatchingDiv(html, start);
    if (endDiv < 0) break;
    let end = endDiv;
    const rest = html.slice(end);
    const afterScript = rest.match(/^\s*<script>\s*\(function \(\) \{[\s\S]*?\}\)\(\);\s*<\/script>/);
    if (afterScript) end += afterScript[0].length;
    n += 1;
    const id = n === 1 ? baseId : `${baseId}-${n}`;
    const php = `\n<?php\n  $form_id = ${JSON.stringify(id)};\n  $form_heading = null;\n  $form_submit = 'Create Account';\n  require __DIR__ . '/includes/form.php';\n?>\n`;
    html = html.slice(0, start) + php + html.slice(end);
  }
  return html;
}

function rewriteAssets(html) {
  html = html.replace(/\s(?:src|href|data-src|poster)=["']\/assets\/([^"']+)["']/g, (full, p) => {
    const attr = full.match(/\s([a-z-]+)=/i)[1];
    return ` ${attr}="<?= asset('static/${p}') ?>"`;
  });
  html = html.replace(/srcset=["']([^"']+)["']/g, (_, value) => {
    const rewritten = value.replace(/\/assets\/([^\s,]+)/g, "<?= asset('static/$1') ?>");
    return `srcset="${rewritten}"`;
  });
  html = html.replace(/loadCss\('\/assets\/([^']+)'\)/g, "loadCss(<?= json_encode(asset('static/$1')) ?>)");
  html = html.replace(/loadScript\('\/assets\/([^']+)'\)/g, "loadScript(<?= json_encode(asset('static/$1')) ?>)");
  html = html.replace(/["']\/favicon\.php\?theme=universal["']/g, `"<?= asset('static/img/favicon.svg') ?>"`);
  html = html.replace(/src="\/favicon\.php\?theme=universal"/g, `src="<?= asset('static/img/favicon.svg') ?>"`);
  html = html.replace(/utilsScript:\s*["']\/assets\/vendor\/iti\/utils\.js["']/g, "utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/js/utils.js'");
  return html;
}

function rewriteLinks(html) {
  const map = [
    [/https:\/\/althera-pro\.live\/product\/?/g, "<?= page_url('product.php') ?>"],
    [/https:\/\/althera-pro\.live\/offer\/?/g, "<?= page_url('offer.php') ?>"],
    [/https:\/\/althera-pro\.live\/contacts\/?/g, "<?= page_url('contacts.php') ?>"],
    [/https:\/\/althera-pro\.live\/faq\/?/g, "<?= page_url('faq.php') ?>"],
    [/https:\/\/althera-pro\.live\/about\/?/g, "<?= page_url('about.php') ?>"],
    [/https:\/\/althera-pro\.live\/sign\/?/g, "<?= page_url('sign.php') ?>"],
    [/https:\/\/althera-pro\.live\/privacy\/?/g, "<?= page_url('privacy.php') ?>"],
    [/https:\/\/althera-pro\.live\/conditions\/?/g, "<?= page_url('conditions.php') ?>"],
    [/https:\/\/althera-pro\.live\/?/g, '<?= page_url() ?>'],
    [/href="\/product\/"/g, `href="<?= page_url('product.php') ?>"`],
    [/href="\/offer\/"/g, `href="<?= page_url('offer.php') ?>"`],
    [/href="\/contacts\/"/g, `href="<?= page_url('contacts.php') ?>"`],
    [/href="\/faq\/"/g, `href="<?= page_url('faq.php') ?>"`],
    [/href="\/about\/"/g, `href="<?= page_url('about.php') ?>"`],
    [/href="\/sign\/"/g, `href="<?= page_url('sign.php') ?>"`],
    [/href="\/privacy\/"/g, `href="<?= page_url('privacy.php') ?>"`],
    [/href="\/conditions\/"/g, `href="<?= page_url('conditions.php') ?>"`],
  ];
  for (const [re, to] of map) html = html.replace(re, to);
  return html;
}

function rewriteBrand(html) {
  html = html.replace(/🚀\s*Althera Pro\s*🚀/g, '<?= e(SITE_NAME) ?>');
  html = html.replace(/Althera\s*💎\s*Pro/g, '<?= e(SITE_NAME) ?>');
  html = html.replace(/Althera Pro/g, '<?= e(SITE_NAME) ?>');
  html = html.replace(/£250/g, '<?= e(money_min()) ?>');
  html = html.replace(/£220/g, '<?= e(money_min()) ?>');
  html = html.replace(/<a href="\/cdn-cgi\/l\/email-protection[^"]*"[^>]*>[\s\S]*?<\/a>/g, '<a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>');
  return html;
}

function extractMain(html) {
  const m = html.match(/<main\b[^>]*>([\s\S]*?)<\/main>/i);
  if (!m) throw new Error('No <main> found');
  return m[1];
}

function extractChat(html) {
  const start = html.indexOf('<div id="chat-quiz-root"');
  if (start < 0) return '';
  const styleStart = html.indexOf('<style>\n.cq-pure-custom-form', start);
  const styleEnd = html.indexOf('</style>', styleStart);
  if (styleStart < 0 || styleEnd < 0) {
    const winEnd = html.indexOf('</script>', html.indexOf("document.addEventListener('DOMContentLoaded'", start));
    return html.slice(start, winEnd + 9);
  }
  let block = html.slice(start, styleEnd + 8);
  // drop hidden source form card; we inject ours
  block = block.replace(/<div id="cq-form-card"[\s\S]*?<\/div>\s*(?=<script>window\.defaultLang|<script>|<\/div><script>)/, '');
  block = block.replace(/<div id="cq-form-card"[\s\S]*?<\/form>\s*<\/div>\s*<\/div>/, '');
  block = rewriteAssets(block);
  block = rewriteBrand(block);
  // inject our form into the quiz finale
  block = block.replace(
    "const formCard = document.getElementById('cq-form-card');",
    "let formCard = document.getElementById('cq-form-card');\n            if (!formCard) formCard = document.querySelector('#chat-quiz-root .apx-lead, #cq-form-card');",
  );
  return `<?php\n  $form_id = 'lead-form-chat';\n  $form_heading = null;\n  $form_submit = 'Create Account';\n  $form_hidden = true;\n  require __DIR__ . '/form.php';\n?>\n` + block;
}

function pageWrapper({ title, desc, active, canonical, noindex, body }) {
  const titlePhp = title
    ? title.replace(/Althera Pro/g, "' . SITE_NAME . '").replace(/^' \. SITE_NAME \. '/, 'SITE_NAME . \'').replace(/' \. SITE_NAME \. '$/, '\' . SITE_NAME')
    : null;
  // Keep it simple: PHP string with SITE_NAME concatenated
  const safeTitle = (title || '').replace(/Althera Pro/g, '').replace(/\s+\|/g, ' |').trim();
  const titleExpr = title && title.includes('Althera Pro')
    ? `str_replace('Althera Pro', SITE_NAME, ${JSON.stringify(title)})`
    : JSON.stringify(title || '');
  const descExpr = desc && desc.includes('Althera Pro')
    ? `str_replace('Althera Pro', SITE_NAME, ${JSON.stringify(desc.replace(/⭐|💎/g, '').replace(/\s+/g, ' ').trim())})`
    : JSON.stringify((desc || '').replace(/⭐|💎/g, '').replace(/\s+/g, ' ').trim());

  return `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = ${titleExpr};
$page_description = ${descExpr};
$page_canonical = page_url(${canonical ? JSON.stringify(canonical) : ''});
$active_page = ${JSON.stringify(active)};
${noindex ? '$noindex = true;' : ''}

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
${body}
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
`;
}

function cleanMain(html, formId) {
  let body = extractMain(html);
  body = replaceLeadForms(body, formId);
  body = rewriteAssets(body);
  body = rewriteLinks(body);
  body = rewriteBrand(body);
  return body.trim();
}

const indexHtml = fs.readFileSync(pages.index.file, 'utf8');
fs.writeFileSync(path.join(outDir, 'includes/chat.php'), extractChat(indexHtml), 'utf8');

for (const [key, meta] of Object.entries(pages)) {
  const html = fs.readFileSync(meta.file, 'utf8');
  const title = extractTag(html, 'title');
  const desc = extractMeta(html, 'description');
  const canonical = key === 'index' ? '' : meta.out;
  const body = cleanMain(html, key === 'index' ? 'lead-form-hero' : `lead-form-${key}`);
  const php = pageWrapper({
    title,
    desc,
    active: meta.active,
    canonical,
    body,
  });
  fs.writeFileSync(path.join(outDir, meta.out), php, 'utf8');
  console.log('wrote', meta.out, 'bytes', php.length);
}

const thanks = `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Thank You');
$page_description = 'Your ' . SITE_NAME . ' account request has been received.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>You're in.</h1>
      <p>Thanks for signing up with <?= e(SITE_NAME) ?>. Our team will reach out shortly to finish setting up your account — keep your phone nearby.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
`;
fs.writeFileSync(path.join(outDir, 'Thanks.php'), thanks, 'utf8');

const notfound = `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Page not found');
$page_description = 'The page you requested could not be found on ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Page not found</h1>
      <p>That link doesn’t exist. Head back home or open an account to get started.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Go home</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Open account</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
`;
fs.writeFileSync(path.join(outDir, '404.php'), notfound, 'utf8');

console.log('ok');

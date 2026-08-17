/**
 * Render localized lumen PHP pages from i18n packs.
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { KEY_LIST, packArray, PACKS } from './lumen-i18n/index.mjs';

// Adapt old API
const KEYS = KEY_LIST;
function getPack(lang) {
  return packArray(lang);
}


const __dirname = path.dirname(fileURLToPath(import.meta.url));
const LANGS_DIR = path.resolve(__dirname, '..', 'templates', 'lumen', 'langs');

function bag(lang) {
  const arr = getPack(lang);
  if (arr.length !== KEYS.length) throw new Error(`${lang}: got ${arr.length}, need ${KEYS.length}`);
  const o = {};
  KEYS.forEach((k, i) => { o[k] = arr[i]; });
  return o;
}

function phpSite(s) {
  return s
    .replaceAll('{SITE}', "<?= e(SITE_NAME) ?>")
    .replaceAll('{MIN}', '<?= MIN_DEPOSIT ?>')
    .replaceAll('{CUR}', '<?= CURRENCY ?>')
    .replaceAll('{EMAIL}', '<a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>');
}

function metaSite(s) {
  return phpExpr(s, { siteVar: 'SITE_NAME' });
}

/** Build a safe PHP expression from text that may contain {MIN}/{CUR}/{SITE}. */
function phpExpr(s, { siteVar = '$site' } = {}) {
  const parts = String(s).split(/(\{MIN\}|\{CUR\}|\{SITE\})/);
  const chunks = [];
  for (const part of parts) {
    if (!part) continue;
    if (part === '{MIN}') chunks.push('MIN_DEPOSIT');
    else if (part === '{CUR}') chunks.push('CURRENCY');
    else if (part === '{SITE}') chunks.push(siteVar);
    else chunks.push(`'${part.replace(/\\/g, '\\\\').replace(/'/g, "\\'")}'`);
  }
  return chunks.length ? chunks.join(' . ') : "''";
}

function write(lang, rel, content) {
  const p = path.join(LANGS_DIR, lang, rel);
  fs.mkdirSync(path.dirname(p), { recursive: true });
  fs.writeFileSync(p, content, 'utf8');
}

function buildLang(lang) {
  const t = bag(lang);

  write(lang, 'includes/header.php', `<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?>${t.homeLogo}">
      <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <nav class="nav-desktop" aria-label="${t.mainNav}">
      <a href="<?= page_url() ?>" class="<?= $active_page === 'home' ? 'is-active' : '' ?>">${t.navHome}</a>
      <a href="product.php" class="<?= $active_page === 'product' ? 'is-active' : '' ?>">${t.navPlatform}</a>
      <a href="offer.php" class="<?= $active_page === 'offer' ? 'is-active' : '' ?>">${t.navPricing}</a>
      <a href="faq.php" class="<?= $active_page === 'faq' ? 'is-active' : '' ?>">${t.navFaq}</a>
      <a href="contacts.php" class="<?= $active_page === 'contacts' ? 'is-active' : '' ?>">${t.navContact}</a>
    </nav>

    <div class="header-actions">
      <a href="sign.php" class="btn btn-primary btn-sm">${t.openAccount}</a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-label="${t.openMenu}" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="${t.mobileNav}" hidden>
    <a href="<?= page_url() ?>">${t.navHome}</a>
    <a href="product.php">${t.navPlatform}</a>
    <a href="offer.php">${t.navPricing}</a>
    <a href="faq.php">${t.navFaq}</a>
    <a href="contacts.php">${t.navContact}</a>
    <a href="sign.php" class="btn btn-primary">${t.openAccount}</a>
  </nav>
</header>

<div class="market-tape" aria-hidden="true">
  <div class="container market-tape-inner">
    <span class="tape-item"><strong>BTC</strong> <span data-price="btc">—</span> <span class="tape-up" data-change="btc">—</span></span>
    <span class="tape-item"><strong>ETH</strong> <span data-price="eth">—</span> <span class="tape-up" data-change="eth">—</span></span>
    <span class="tape-item"><strong>SOL</strong> <span data-price="sol">—</span> <span class="tape-down" data-change="sol">—</span></span>
    <span class="tape-item"><strong>XRP</strong> <span data-price="xrp">—</span> <span class="tape-up" data-change="xrp">—</span></span>
    <span class="tape-item"><strong>EUR/USD</strong> <span class="tape-up">+0.12%</span></span>
    <span class="tape-item"><strong>GBP/USD</strong> <span class="tape-down">-0.08%</span></span>
    <span class="tape-item"><strong>${t.markets}</strong> 24/7</span>
  </div>
</div>
`);

  write(lang, 'includes/footer.php', `<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="${t.footerNav}">
        <a href="<?= page_url() ?>">${t.navHome}</a>
        <a href="product.php">${t.navPlatform}</a>
        <a href="offer.php">${t.navPricing}</a>
        <a href="contacts.php">${t.navContact}</a>
        <a href="faq.php">${t.navFaq}</a>
        <a href="privacy.php">${t.privacy}</a>
        <a href="conditions.php">${t.terms}</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?>${t.risk}
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. ${t.reserved}</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>
`);

  write(lang, 'includes/head.php', `<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | ${t.headTitle}';
$page_description = $page_description ?? ${metaSite(t.headDesc)};
$page_canonical = isset($page_canonical) ? canonical_url($page_canonical) : page_url();
$active_page = $active_page ?? 'home';
$og_image = page_url($og_image_path ?? og_image_path());
?>
<!DOCTYPE html>
<html lang="<?= e(site_locale()) ?>" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <link rel="canonical" href="<?= e($page_canonical) ?>">
<?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex, nofollow">
<?php else: ?>
  <meta name="robots" content="index, follow, max-image-preview:large">
<?php endif; ?>

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:url" content="<?= e($page_canonical) ?>">
  <meta property="og:image" content="<?= e($og_image) ?>">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($page_title) ?>">
  <meta name="twitter:description" content="<?= e($page_description) ?>">
  <meta name="twitter:image" content="<?= e($og_image) ?>">

  <link rel="icon" type="image/svg+xml" href="<?= asset('static/img/logo.svg') ?>">
  <?php if (($active_page ?? '') === 'home'): ?>
  <link rel="preload" as="image" href="<?= asset(platform_image_path()) ?>" type="image/png">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('static/css/main.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

  <?php render_schema($active_page === 'home' ? 'home' : 'page', $schema_extra ?? []); ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body>
`);

  write(lang, 'index.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('${t.homeSeo}');
$page_description = ${metaSite(t.homeDesc)};
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="${t.homeAria}">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>${t.h1a}<br><span class="text-accent">${t.h1b}</span></h1>
        <p class="lead">
          ${t.heroLead}
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">${t.ctaStart} <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">${t.ctaHow}</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">${t.howEyebrow}</p>
        <h2>${t.howH2}</h2>
        <p class="lead">${t.howLead}</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>${t.s1t}</h3>
          <p>${t.s1p}</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>${t.s2t}</h3>
          <p>${phpSite(t.s2p)}</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>${t.s3t}</h3>
          <p>${t.s3p}</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">${t.aiEyebrow}</p>
        <h2>${t.aiH2}</h2>
        <p class="lead">
          ${phpSite(t.aiLead)}
        </p>
        <ul class="feature-list">
          <li>${t.ai1}</li>
          <li>${t.ai2}</li>
          <li>${t.ai3}</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">${t.tryPlat}</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="${t.insightAria}">
        <p class="insight-panel__label">${t.insightLabel}</p>
        <p class="insight-panel__title">${t.insightTitle}</p>
        <p class="insight-panel__body">
          ${t.insightBody}
        </p>
        <div class="insight-panel__meta">
          <span>${t.conf}</span>
          <span>${t.updated}</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">${t.joinEyebrow}</p>
        <h2>${t.joinTitleBefore ? `${t.joinTitleBefore} ` : ''}<?= e(SITE_NAME) ?>${t.joinTitleAfter}</h2>
        <p class="lead lead-light">
          ${t.joinLead}
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = '${t.formHome}';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">${t.trustEyebrow}</p>
        <h2>${t.trustH2}</h2>
        <p class="lead">${t.trustLead}</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">${t.navFaq}</p>
        <h2>${t.faqQuick}</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            ${t.faq1q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              ${phpSite(t.faq1a)}
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ${t.faq2q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ${phpSite(t.faq2a)}
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ${t.faq3q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ${t.faq3a}
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">${t.faqMore}</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'product.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.prodSeo}');
$page_description = ${metaSite(t.prodDesc)};
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">${t.navPlatform}</p>
      <h1>${t.prodH1}</h1>
      <p class="lead">${t.prodLead}</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>${t.prodH2}</h2>
        <p class="lead">
          ${t.prodP}
        </p>
        <ul class="feature-list">
          <li>${t.prod1}</li>
          <li>${t.prod2}</li>
          <li>${t.prod3}</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">${t.openAccount}</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'offer.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.offerSeo}');
$page_description = ${metaSite(t.offerDesc)};
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">${t.navPricing}</p>
      <h1>${t.ctaStart} <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">${t.offerLead}</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">${t.offerH2}</h2>
        <p class="prose">
          ${t.minDepositLabel} <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          ${t.offerP2}
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = '${t.offerForm}';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'faq.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.faqSeo}');
$page_description = ${metaSite(t.faqDesc)};
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">${t.navFaq}</p>
      <h1>${t.faqH1}</h1>
      <p class="lead">${t.faqLead}</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            ${t.faqP1q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              ${phpSite(t.faqP1a)}
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ${t.faqP2q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ${phpSite(t.faqP2a)}
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ${t.faqP3q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ${t.faqP3a}
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ${t.faqP4q}
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ${t.faqP4a}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'contacts.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.contactSeo}');
$page_description = ${metaSite(t.contactDesc)};
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">${t.navContact}</p>
      <h1>${t.contactH1}</h1>
      <p class="lead">${t.contactLead}</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">${t.support}</h2>
        <p class="prose">${phpSite(t.supportP)}</p>
        <a href="sign.php" class="btn btn-primary">${t.openAnAccount}</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'sign.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.signSeo}');
$page_description = ${metaSite(t.signDesc)};
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">${t.joinEyebrow}</p>
      <h1>${t.signH1}</h1>
      <p class="lead">${phpSite(t.signLead)}</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = '${t.signForm}';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'Thanks.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.thanksSeo}');
$page_description = ${metaSite(t.thanksDesc)};
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>${t.thanksH1}</h1>
      <p class="lead thanks-lead">
        ${phpSite(t.thanksP)}
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, '404.php', `<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('${t.nfSeo}');
$page_description = ${metaSite(t.nfDesc)};
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>${t.nfSeo}</h1>
      <p class="lead">${t.nfP}</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">${t.goHome}</a>
        <a href="sign.php" class="btn btn-ghost">${t.openAccount}</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
`);

  write(lang, 'includes/schema.php', `<?php
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = $url . '/' . platform_image_path();

    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site,
        'url' => $url,
        'logo' => $url . '/static/img/logo.svg',
        'description' => ${phpExpr(t.schemaOrg)},
    ];

    $website = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $site,
        'url' => $url,
        'publisher' => ['@type' => 'Organization', 'name' => $site],
    ];

    $software = [
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        'name' => $site,
        'operatingSystem' => 'Web, Android, iOS',
        'applicationCategory' => 'FinanceApplication',
        'description' => ${phpExpr(t.schemaApp)},
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => MIN_DEPOSIT,
            'priceCurrency' => CURRENCY,
        ],
    ];

    $faq = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => ${phpExpr(t.faqP1q)},
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => ${phpExpr(t.schemaFaq1a)},
                ],
            ],
            [
                '@type' => 'Question',
                'name' => ${phpExpr(t.schemaFaq2q)},
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => ${phpExpr(t.schemaFaq2a)},
                ],
            ],
            [
                '@type' => 'Question',
                'name' => ${phpExpr(t.schemaFaq3q)},
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => ${phpExpr(t.schemaFaq3a)},
                ],
            ],
            [
                '@type' => 'Question',
                'name' => ${phpExpr(t.faq1q)},
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => ${phpExpr(t.schemaFaq4a)},
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => ${phpExpr(t.schemaHow)} . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => ${phpExpr(t.s1t)}, 'text' => ${phpExpr(t.schemaS1t)}],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => ${phpExpr(t.schemaS2)}, 'text' => ${phpExpr(t.schemaS2t)}],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => ${phpExpr(t.schemaS3)}, 'text' => ${phpExpr(t.schemaS3t)}],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => ${phpExpr(t.schemaS4)}, 'text' => ${phpExpr(t.schemaS4t)}],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => ${phpExpr(t.schemaS5)}, 'text' => ${phpExpr(t.schemaS5t)}],
        ],
    ];

    $blocks = [$organization, $website];

    if ($page === 'home') {
        $blocks[] = $software;
        $blocks[] = $faq;
        $blocks[] = $howto;
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'ImageObject',
            'name' => $site . ' AI Trading Platform',
            'description' => $site . ${phpExpr(t.schemaImgDesc)},
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ${phpExpr(t.schemaCap)},
            'representativeOfPage' => true,
        ];
    }

    if (!empty($extra['breadcrumb'])) {
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $extra['breadcrumb'],
        ];
    }

    foreach ($blocks as $block) {
        echo '<script type="application/ld+json">' . json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\\n";
    }
}
`);
}

const arg = process.argv[2];
const langs = arg ? [arg] : Object.keys(PACKS).filter((l) => l !== 'en');
for (const lang of langs) {
  if (!PACKS[lang]) {
    console.error(`Unknown lang pack: ${lang}`);
    process.exit(1);
  }
  buildLang(lang);
}
console.log('built', langs.join(', '));

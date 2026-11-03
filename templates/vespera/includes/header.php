<?php
/** @var string $lang */
/** @var array $langData */
/** @var string $page */
/** @var array $meta */
/** @var string $phoneCountry */
$nav = $langData['nav'];
$homeUrl = lang_path($lang, 'home');
?>
<!DOCTYPE html>
<html lang="<?= e($lang) ?>" data-theme-mode="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= e($meta['title']) ?></title>
  <meta name="description" content="<?= e($meta['description']) ?>">
  <?php if ($page === 'home'): ?>
  <meta property="og:image" content="<?= e(hero_image_abs()) ?>">
  <meta property="og:image:alt" content="<?= e($langData['earnings']['ai_alt'] ?? SITE_NAME) ?>">
  <meta name="twitter:image" content="<?= e(hero_image_abs()) ?>">
  <?php endif; ?>
  <link rel="canonical" href="<?= e(abs_lang_url($lang, $page)) ?>">
  <?php foreach (SUPPORTED_LANGS as $hl): ?>
  <link rel="alternate" hreflang="<?= e($hl) ?>" href="<?= e(abs_lang_url($hl, $page)) ?>">
  <?php endforeach; ?>
  <link rel="alternate" hreflang="x-default" href="<?= e(abs_lang_url(DEFAULT_LANG, $page)) ?>">
  <link rel="icon" href="<?= e(public_url('assets/icons/favicon.svg')) ?>" type="image/svg+xml">
  <link rel="icon" href="<?= e(public_url('assets/icons/favicon-32.png')) ?>" type="image/png" sizes="32x32">
  <link rel="icon" href="<?= e(public_url('assets/icons/favicon-16.png')) ?>" type="image/png" sizes="16x16">
  <link rel="apple-touch-icon" href="<?= e(public_url('assets/icons/apple-touch-icon.png')) ?>" sizes="180x180">
  <meta name="theme-color" content="#0f766e">
  <script>
    (function () {
      try {
        var t = localStorage.getItem('vespera_theme');
        if (t === 'light' || t === 'dark') document.documentElement.setAttribute('data-theme-mode', t);
        else if (window.matchMedia('(prefers-color-scheme: light)').matches) document.documentElement.setAttribute('data-theme-mode', 'light');
      } catch (e) {}
    })();
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Source+Serif+4:opsz,wght@8..60,500;8..60,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= e(public_url('assets/css/theme-tokens.css')) ?>">
  <link rel="stylesheet" href="<?= e(public_url('assets/css/global.css')) ?>">
  <link rel="stylesheet" href="<?= e(public_url('assets/css/earn.css')) ?>">
  <link rel="stylesheet" href="<?= e(public_url('assets/css/pages.css')) ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/css/intlTelInput.css">
  <script src="<?= e(public_url('assets/js/theme.js')) ?>"></script>
</head>
<body data-phone-country="<?= e($phoneCountry ?? 'us') ?>" data-lang="<?= e($lang) ?>" data-preview-base="<?= e(offer_preview_base() ?? '') ?>">
<canvas id="neural-canvas" aria-hidden="true"></canvas>
<header class="site-header">
  <nav class="nav" aria-label="<?= e($nav['home_aria']) ?>">
    <div class="container nav-inner">
      <a class="nav-logo" href="<?= e($homeUrl) ?>" aria-label="<?= e($nav['home_aria']) ?>">
        <img class="nav-logo-img" src="<?= e(public_url('assets/icons/logo.svg')) ?>" width="32" height="32" alt="" aria-hidden="true">
        <span class="nav-logo-text"><?= e(SITE_NAME) ?></span>
      </a>
      <div class="nav-links">
        <a href="<?= e(lang_path($lang, 'about')) ?>"><?= e($nav['about']) ?></a>
        <a href="<?= e(lang_path($lang, 'product')) ?>"><?= e($nav['product']) ?></a>
        <a href="<?= e(lang_path($lang, 'faq')) ?>"><?= e($nav['faq']) ?></a>
        <a href="<?= e(lang_path($lang, 'contact')) ?>"><?= e($nav['contact']) ?></a>
      </div>
      <div class="nav-actions">
        <label class="visually-hidden" for="lang-switch"><?= e($nav['language']) ?></label>
        <select id="lang-switch" class="lang-switch" data-page="<?= e($page) ?>" aria-label="<?= e($nav['language']) ?>">
          <?php foreach (SUPPORTED_LANGS as $code): ?>
          <option value="<?= e($code) ?>" <?= $code === $lang ? 'selected' : '' ?>><?= e($code) ?></option>
          <?php endforeach; ?>
        </select>
        <button type="button" id="theme-toggle" class="theme-toggle"
          data-label-light="<?= e($nav['theme_light']) ?>"
          data-label-dark="<?= e($nav['theme_dark']) ?>"
          aria-label="<?= e($nav['theme_dark']) ?>">
          <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
          <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 14.5A8.5 8.5 0 1 1 9.5 3 7 7 0 0 0 21 14.5z"/></svg>
        </button>
        <a class="btn-primary sm nav-cta-desktop" href="<?= e($homeUrl) ?>#lead-form"><?= e($nav['cta']) ?></a>
        <button type="button" class="nav-burger" id="nav-burger"
          aria-expanded="false" aria-controls="nav-drawer"
          aria-label="<?= e($nav['menu'] ?? 'Menu') ?>">
          <span class="nav-burger-bar" aria-hidden="true"></span>
          <span class="nav-burger-bar" aria-hidden="true"></span>
          <span class="nav-burger-bar" aria-hidden="true"></span>
        </button>
      </div>
    </div>
    <div class="nav-drawer" id="nav-drawer" hidden>
      <div class="container nav-drawer-inner">
        <a href="<?= e(lang_path($lang, 'about')) ?>"><?= e($nav['about']) ?></a>
        <a href="<?= e(lang_path($lang, 'product')) ?>"><?= e($nav['product']) ?></a>
        <a href="<?= e(lang_path($lang, 'faq')) ?>"><?= e($nav['faq']) ?></a>
        <a href="<?= e(lang_path($lang, 'contact')) ?>"><?= e($nav['contact']) ?></a>
        <a class="btn-primary block" href="<?= e($homeUrl) ?>#lead-form"><?= e($nav['cta']) ?></a>
      </div>
    </div>
  </nav>
  <?php if ($page === 'home'): ?>
  <div class="ticker-bar" aria-hidden="true">
    <div class="ticker-track">
      <?php
      $ticker = $langData['ticker'] ?? [];
      $loop = array_merge($ticker, $ticker);
      foreach ($loop as $i => $item):
      ?>
        <span class="ticker-item">
          <span class="ticker-symbol"><?= e($item['symbol']) ?></span>
          <span class="ticker-price"><?= e($item['price']) ?></span>
          <span class="ticker-change <?= e($item['dir']) ?>"><?= e($item['change']) ?></span>
        </span>
        <span class="ticker-sep">•</span>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>
</header>
<main id="main-content">

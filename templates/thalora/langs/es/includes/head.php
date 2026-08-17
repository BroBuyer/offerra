<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? (SITE_NAME . ' | Plataforma de trading con IA de primer nivel');
$page_description = $page_description ?? ('Accede a criptomonedas, forex y activos globales desde una sola plataforma. ' . SITE_NAME . ' combina analítica en vivo, automatización asistida y soporte experto.');
$page_canonical = isset($page_canonical) ? canonical_url($page_canonical) : page_url();
$active_page = $active_page ?? 'home';
$og_image = page_url($og_image_path ?? og_image_path());
$og_locale = str_replace('-', '_', site_locale());
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="<?= e(site_locale()) ?>" data-theme="universal">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <link rel="canonical" href="<?= e($page_canonical) ?>">
  <link rel="alternate" hreflang="<?= e(SITE_LANG) ?>" href="<?= e($page_canonical) ?>">
  <link rel="alternate" hreflang="x-default" href="<?= e($page_canonical) ?>">
<?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex, nofollow">
<?php else: ?>
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<?php endif; ?>
  <meta name="theme-color" content="#0d7377">
  <meta name="author" content="<?= e(SITE_NAME) ?>">

  <meta property="og:type" content="website">
  <meta property="og:locale" content="<?= e($og_locale) ?>">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:url" content="<?= e($page_canonical) ?>">
  <meta property="og:image" content="<?= e($og_image) ?>">
  <meta property="og:image:alt" content="<?= e(platform_image_alt()) ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($page_title) ?>">
  <meta name="twitter:description" content="<?= e($page_description) ?>">
  <meta name="twitter:image" content="<?= e($og_image) ?>">
  <meta name="twitter:image:alt" content="<?= e(platform_image_alt()) ?>">

  <link rel="icon" type="image/svg+xml" href="<?= asset('static/img/favicon.svg') ?>">
  <link rel="apple-touch-icon" href="<?= asset('static/img/favicon-96.png') ?>">
  <link rel="preload" href="<?= asset('static/fonts/inter-latin.woff2') ?>" as="font" type="font/woff2" crossorigin>
<?php if (($active_page ?? '') === 'home'): ?>
  <link rel="preload" as="image" href="<?= asset(platform_image_path()) ?>" type="image/webp">
<?php else: ?>
  <link rel="preload" href="<?= asset('static/img/logo.webp') ?>" as="image" type="image/webp">
<?php endif; ?>
  <style>
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: #f9f9f9;
      color: #111;
      line-height: 1.5;
    }
    .container-base {
      max-width: 1224px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 1rem;
      padding-right: 1rem;
    }
    .font-special { font-family: Unbounded, Montserrat, ui-sans-serif, sans-serif; }
    .text-primary { color: var(--color-primary, #f97316); }
    img { max-width: 100%; }
    .apx-lead.lead-form-wrap {
      box-sizing: border-box;
      width: 100%;
      margin: 0 auto;
      background: var(--color-primary, #0d7377);
      border-radius: 25px;
      padding: 32px 36px 28px;
      box-shadow: 0 18px 46px rgba(var(--color-primary-rgb, 13, 115, 119), 0.22);
    }
    .apx-lead-badges {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
      min-height: 28px;
      margin-top: 4px;
    }
    .apx-lead-badges img {
      display: block;
      width: 42px;
      height: 28px;
      max-width: none;
      object-fit: contain;
    }
    .apx-lead-badges img:nth-child(4) { width: 75px; }
  </style>
  <link rel="stylesheet" href="<?= asset_version('static/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('static/css/tailwind.min.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('static/css/form.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('static/css/extra.css') ?>">
  <style>
    .apx-lead-badges img {
      width: 42px !important;
      height: 28px !important;
      max-width: none !important;
    }
    .apx-lead-badges img:nth-child(4) { width: 75px !important; }
    .initials {
      color: #4f4580 !important;
      background: #e2e8f0;
    }
  </style>
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/css/intlTelInput.css">
  <style>:root{--iti-path-flags-1x:url("https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/img/flags.png");--iti-path-flags-2x:url("https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/img/flags@2x.png");}</style>
  <script>
  window.APP_LANG = {
    valPhoneInvalid: 'Introduce un número de teléfono válido',
    valPhoneCountry: 'Código de país no válido',
    valPhoneShort: 'El número es demasiado corto',
    valPhoneLong: 'El número es demasiado largo',
    valPhoneEmpty: 'Introduce tu número de teléfono',
    valSessionExpired: 'La sesión ha caducado. Recarga la página e inténtalo de nuevo.',
    valGenericError: 'Algo ha salido mal. Inténtalo de nuevo más tarde.',
    valConnectionError: 'Error de conexión. Comprueba tu conexión a internet e inténtalo de nuevo.'
  };
  window.OFFER_CURRENCY_SYMBOL = <?= json_encode(currency_symbol(), JSON_UNESCAPED_UNICODE) ?>;
  window.OFFER_LOCALE = <?= json_encode(site_locale(), JSON_UNESCAPED_UNICODE) ?>;
  window.defaultLang = <?= json_encode(SITE_LANG, JSON_UNESCAPED_UNICODE) ?>;
  </script>
  <?php render_schema($active_page === 'home' ? 'home' : 'page', $schema_extra ?? []); ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body class="flex min-h-screen flex-col">

<?php
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

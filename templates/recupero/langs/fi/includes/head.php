<?php
require_once __DIR__ . '/config.php';
$page_title = $page_title ?? page_title(t('meta_title_home'));
$page_description = $page_description ?? t('meta_desc_default');
$page_canonical = $page_canonical ?? page_url();
$active_page = $active_page ?? 'home';
?><!doctype html>
<html lang="<?= e(SITE_LANG) ?>">
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
<meta property="og:locale" content="fi_FI" />
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>" />
<meta property="og:title" content="<?= e($page_title) ?>" />
<meta property="og:description" content="<?= e($page_description) ?>" />
<meta property="og:url" content="<?= e($page_canonical) ?>" />
<meta property="og:image" content="<?= e(page_url('static/img/hero/post.png')) ?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= e($page_title) ?>" />
<meta name="twitter:description" content="<?= e($page_description) ?>" />
<meta name="twitter:image" content="<?= e(page_url('static/img/hero/post.png')) ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>" />
<link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" />
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode(t('val_phone_invalid'), JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode(t('val_phone_country'), JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode(t('val_phone_short'), JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode(t('val_phone_long'), JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode(t('val_phone_required'), JSON_UNESCAPED_UNICODE) ?>
};
</script>
<?php require __DIR__ . '/schema.php'; ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body>
<?php require __DIR__ . '/icon-sprite.php'; ?>

<?php
require_once __DIR__ . '/config.php';

/**
 * Pages set $page_title, $page_description, $page_canonical, $page_css and
 * $page_has_form before requiring this file.
 */
$page_title = $page_title ?? page_title_lead(SITE_NAME);
$page_description = $page_description ?? '';
$page_canonical = $page_canonical ?? page_url();
$page_css = $page_css ?? [];
$page_has_form = $page_has_form ?? false;
// Legal pages stay indexable; only the thank-you and 404 opt out.
$page_noindex = $page_noindex ?? false;

$og_image = canonical_url(og_image_path());

/**
 * audax ships split mobile/desktop sheets, preloaded and swapped to stylesheets
 * on load; desktop is gated by the breakpoint. $fallback suppresses the per-file
 * <noscript> where main.css already covers it.
 */
$stylesheet = static function (string $file, bool $fallback = true): void {
    $href = asset('static/css/' . $file);
    $media = str_contains($file, '-desk') ? ' media="(min-width: 769px)"' : '';
    echo '    <link rel="preload" href="' . $href . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'"' . $media . ' />' . "\n";
    if ($fallback) {
        echo '    <noscript><link rel="stylesheet" href="' . $href . '"' . $media . ' /></noscript>' . "\n";
    }
};
?><!doctype html>
<html lang="<?= e(SITE_LANG) ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="color-scheme" content="light" />
    <meta name="theme-color" content="#EE6129" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($page_description) ?>" />
    <meta name="robots" content="<?= $page_noindex ? 'noindex, follow' : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' ?>" />
    <meta name="author" content="<?= e(SITE_NAME) ?>" />
    <meta name="geo.region" content="<?= e(strtoupper(geo_country_code())) ?>" />
    <meta name="geo.placename" content="<?= e(geo_country_name()) ?>" />
    <link rel="canonical" href="<?= e(canonical_url($page_canonical)) ?>" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= e(canonical_url($page_canonical)) ?>" />
    <meta property="og:title" content="<?= e($page_title) ?>" />
    <meta property="og:description" content="<?= e($page_description) ?>" />
    <meta property="og:image" content="<?= e($og_image) ?>" />
    <meta property="og:image:alt" content="<?= e(SITE_NAME) ?>" />
    <meta property="og:locale" content="<?= e(str_replace('-', '_', site_locale())) ?>" />
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?= e(canonical_url($page_canonical)) ?>" />
    <meta property="twitter:title" content="<?= e($page_title) ?>" />
    <meta property="twitter:description" content="<?= e($page_description) ?>" />
    <meta property="twitter:image" content="<?= e($og_image) ?>" />

    <link rel="icon" href="<?= asset('static/images/logo.svg') ?>" type="image/svg+xml" />
    <link rel="preload" as="image" href="<?= asset('static/images/phone.webp') ?>" media="(min-width: 769px)" />
<?php foreach (['RobotoCondensed-Bold', 'RobotoCondensed-ExtraBold', 'RobotoCondensed-Regular'] as $__font): ?>
    <link rel="preload" href="<?= asset('static/fonts/' . $__font . '.woff2') ?>" as="font" type="font/woff2" crossorigin />
<?php endforeach; ?>

<?php
$stylesheet('main-mob.min.css', false);
$stylesheet('main-desk.min.css', false);
foreach ($page_css as $__css) {
    $stylesheet($__css);
}
?>
    <noscript><link rel="stylesheet" href="<?= asset('static/css/main.css') ?>" /></noscript>
    <link rel="stylesheet" href="<?= asset('static/css/seo.css') ?>" />
    <link rel="stylesheet" href="<?= asset('static/css/ticker.css') ?>" />
<?php if ($page_has_form): ?>
    <link rel="stylesheet" href="<?= asset('static/css/forms.css') ?>" />
    <link rel="stylesheet" href="<?= asset('static/css/intlTelInput.css') ?>" />
    <link rel="stylesheet" href="<?= asset('integration/default-integration.css') ?>" />
<?php endif; ?>

<?php require __DIR__ . '/schema.php'; ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
  </head>
  <body>

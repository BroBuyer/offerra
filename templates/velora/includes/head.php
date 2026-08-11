<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Premium AI Trading Engine for Global Markets';
$page_description = $page_description ?? 'A smarter, cleaner way to access global markets with ' . SITE_NAME . ' — structured AI tools for crypto, forex, and equities.';
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
  <?php if (($active_page ?? '') === 'home' || ($active_page ?? '') === 'product'): ?>
  <link rel="preload" as="image" href="<?= asset(platform_image_path()) ?>" type="image/png">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

  <script>
    window.APP_LANG = {
      themeToggleDarkText: '🌙 Dark',
      themeToggleLightText: '☀️ Light',
      themeToggleDarkAria: 'Switch to dark theme',
      themeToggleLightAria: 'Switch to light theme',
      mockupToday: 'Today',
      orderPendingAllocation: 'order pending allocation',
      chatStep1Bot: "Hi! I'm Lisa, your onboarding assistant. Ready to open a trading account in a few quick steps?",
      chatStep1Yes: "Yes, let's start",
      chatStep1More: 'Tell me more first',
      chatStep2Bot: 'Great. Have you traded crypto or forex before?',
      chatStep2New: "I'm new",
      chatStep2Mid: 'Some experience',
      chatStep2Pro: "I'm experienced",
      chatStep3Bot: 'What interests you most right now?',
      chatStep3Crypto: 'Crypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Stocks / indices',
      chatStep3All: 'All of the above',
      chatStep4Bot: "Perfect. I'll prepare a free account form — it takes under 3 minutes and our team will call to finish setup.",
      chatStep4Form: 'Open the form',
      chatMoreReply: 'We guide beginners with a clean dashboard, AI market tips in plain language, and secure funding from your minimum deposit. Shall we continue?',
      chatContinue: "Yes, let's continue",
      chatFormPrompt: "Please enter your details below and submit — I'll stay here if you need anything.",
      valPhoneRequired: 'Enter your phone number',
      valPhoneInvalid: 'Enter a valid phone number',
      valPhoneCountry: 'Invalid country code',
      valPhoneShort: 'The phone number is too short',
      valPhoneLong: 'The phone number is too long',
      valSessionExpired: 'Session expired. Please reload the page and try again.',
      valGenericError: 'Something went wrong. Please try again later.',
      valConnectionError: 'Connection error. Check your internet connection and try again.'
    };
  </script>
  <script>
    (function () {
      try {
        var t = localStorage.getItem('brandTheme') || 'dark';
        document.documentElement.setAttribute('data-theme', t);
      } catch (e) {}
    })();
  </script>

  <?php render_schema($active_page === 'home' ? 'home' : 'page', $schema_extra ?? []); ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body data-theme="dark">
<script>
  (function () {
    try {
      var t = localStorage.getItem('brandTheme') || 'dark';
      document.body.dataset.theme = t;
      document.documentElement.setAttribute('data-theme', t);
    } catch (e) {}
  })();
</script>

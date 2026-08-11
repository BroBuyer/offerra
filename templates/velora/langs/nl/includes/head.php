<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Premium AI-handelsengine voor wereldwijde markten';
$page_description = $page_description ?? 'Een slimmere, overzichtelijkere manier om toegang te krijgen tot wereldwijde markten met ' . SITE_NAME . ' — gestructureerde AI-tools voor crypto, forex en aandelen.';
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
      themeToggleDarkText: '🌙 Donker',
      themeToggleLightText: '☀️ Licht',
      themeToggleDarkAria: 'Overschakelen naar donker thema',
      themeToggleLightAria: 'Overschakelen naar licht thema',
      mockupToday: 'Vandaag',
      orderPendingAllocation: 'order in afwachting van toewijzing',
      chatStep1Bot: "Hoi! Ik ben Lisa, uw onboardingassistent. Klaar om in een paar snelle stappen een handelsaccount te openen?",
      chatStep1Yes: "Ja, laten we beginnen",
      chatStep1More: 'Vertel me eerst meer',
      chatStep2Bot: 'Prima. Heeft u eerder in crypto of forex gehandeld?',
      chatStep2New: "Ik ben nieuw",
      chatStep2Mid: 'Enige ervaring',
      chatStep2Pro: "Ik ben ervaren",
      chatStep3Bot: 'Wat interesseert u op dit moment het meest?',
      chatStep3Crypto: 'Crypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Aandelen / indices',
      chatStep3All: 'Alles hierboven',
      chatStep4Bot: "Perfect. Ik bereid een gratis accountformulier voor — het duurt minder dan 3 minuten en ons team belt om de setup af te ronden.",
      chatStep4Form: 'Open het formulier',
      chatMoreReply: 'We begeleiden beginners met een overzichtelijk dashboard, AI-markttips in gewone taal en veilige financiering vanaf uw minimale storting. Doorgaan?',
      chatContinue: "Ja, laten we doorgaan",
      chatFormPrompt: "Vul hieronder uw gegevens in en dien in — ik blijf hier als u iets nodig heeft.",
      valPhoneRequired: 'Voer uw telefoonnummer in',
      valPhoneInvalid: 'Voer een geldig telefoonnummer in',
      valPhoneCountry: 'Ongeldige landcode',
      valPhoneShort: 'Het telefoonnummer is te kort',
      valPhoneLong: 'Het telefoonnummer is te lang',
      valSessionExpired: 'Sessie verlopen. Herlaad de pagina en probeer het opnieuw.',
      valGenericError: 'Er is iets misgegaan. Probeer het later opnieuw.',
      valConnectionError: 'Verbindingsfout. Controleer uw internetverbinding en probeer het opnieuw.'
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

<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Premium AI-handelsmotor för globala marknader';
$page_description = $page_description ?? 'Ett smartare och tydligare sätt att nå globala marknader med ' . SITE_NAME . ' — strukturerade AI-verktyg för krypto, forex och aktier.';
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
      themeToggleDarkText: '🌙 Mörkt',
      themeToggleLightText: '☀️ Ljust',
      themeToggleDarkAria: 'Byt till mörkt tema',
      themeToggleLightAria: 'Byt till ljust tema',
      mockupToday: 'Idag',
      orderPendingAllocation: 'order väntar på allokering',
      chatStep1Bot: "Hej! Jag är Lisa, din onboardingassistent. Redo att öppna ett handelskonto i några snabba steg?",
      chatStep1Yes: "Ja, låt oss börja",
      chatStep1More: 'Berätta mer först',
      chatStep2Bot: 'Toppen. Har du handlat krypto eller forex tidigare?',
      chatStep2New: "Jag är ny",
      chatStep2Mid: 'Viss erfarenhet',
      chatStep2Pro: "Jag är erfaren",
      chatStep3Bot: 'Vad intresserar dig mest just nu?',
      chatStep3Crypto: 'Krypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Aktier / index',
      chatStep3All: 'Allt ovan',
      chatStep4Bot: "Perfekt. Jag förbereder ett gratis kontformulär — det tar under 3 minuter och vårt team ringer för att slutföra inställningen.",
      chatStep4Form: 'Öppna formuläret',
      chatMoreReply: 'Vi guidar nybörjare med en ren instrumentpanel, AI-marknadstips på enkelt språk och säker finansiering från din minsta insättning. Ska vi fortsätta?',
      chatContinue: "Ja, låt oss fortsätta",
      chatFormPrompt: "Ange dina uppgifter nedan och skicka in — jag stannar kvar om du behöver något.",
      valPhoneRequired: 'Ange ditt telefonnummer',
      valPhoneInvalid: 'Ange ett giltigt telefonnummer',
      valPhoneCountry: 'Ogiltig landskod',
      valPhoneShort: 'Telefonnumret är för kort',
      valPhoneLong: 'Telefonnumret är för långt',
      valSessionExpired: 'Sessionen har gått ut. Ladda om sidan och försök igen.',
      valGenericError: 'Något gick fel. Försök igen senare.',
      valConnectionError: 'Anslutningsfel. Kontrollera din internetanslutning och försök igen.'
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

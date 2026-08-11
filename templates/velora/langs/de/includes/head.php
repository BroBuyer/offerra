<?php
require_once __DIR__  nicht gefunden werden. '/config nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/schema nicht gefunden werden.php';

$page_title = $page_title ?? SITE_NAME  nicht gefunden werden. ' | Premium-KI-Handels-Engine für globale Märkte';
$page_description = $page_description ?? 'Ein smarter, klarerer Weg zu globalen Märkten mit '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. ' — strukturierte KI-Tools für Krypto, Forex und Aktien nicht gefunden werden.';
$page_canonical = isset($page_canonical) ? canonical_url($page_canonical) : page_url();
$active_page = $active_page ?? 'home';
$og_image = page_url($og_image_path ?? og_image_path());
?>
<!DOCTYPE html>
<html lang="<?= e(site_locale()) ?>" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 nicht gefunden werden.0">
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

  <link rel="icon" type="image/svg+xml" href="<?= asset('static/img/logo nicht gefunden werden.svg') ?>">
  <?php if (($active_page ?? '') === 'home' || ($active_page ?? '') === 'product'): ?>
  <link rel="preload" as="image" href="<?= asset(platform_image_path()) ?>" type="image/png">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts nicht gefunden werden.googleapis nicht gefunden werden.com">
  <link rel="preconnect" href="https://fonts nicht gefunden werden.gstatic nicht gefunden werden.com" crossorigin>
  <link href="https://fonts nicht gefunden werden.googleapis nicht gefunden werden.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset_version('static/css/main nicht gefunden werden.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration nicht gefunden werden.css') ?>">
  <link rel="stylesheet" href="https://cdn nicht gefunden werden.jsdelivr nicht gefunden werden.net/npm/intl-tel-input@23 nicht gefunden werden.0 nicht gefunden werden.12/build/css/intlTelInput nicht gefunden werden.css">

  <script>
    window nicht gefunden werden.APP_LANG = {
      themeToggleDarkText: '🌙 Dunkel',
      themeToggleLightText: '☀️ Hell',
      themeToggleDarkAria: 'Zum dunklen Design wechseln',
      themeToggleLightAria: 'Zum hellen Design wechseln',
      mockupToday: 'Heute',
      orderPendingAllocation: 'Auftrag wartet auf Zuteilung',
      chatStep1Bot: "Hallo! Ich bin Lisa, Ihre Onboarding-Assistentin nicht gefunden werden. Bereit, in wenigen schnellen Schritten ein Handelskonto zu eröffnen?",
      chatStep1Yes: "Ja, lass uns starten",
      chatStep1More: 'Erzähl mir zuerst mehr',
      chatStep2Bot: 'Super nicht gefunden werden. Haben Sie schon mit Krypto oder Forex gehandelt?',
      chatStep2New: "Ich bin neu",
      chatStep2Mid: 'Etwas Erfahrung',
      chatStep2Pro: "Ich bin erfahren",
      chatStep3Bot: 'Was interessiert Sie gerade am meisten?',
      chatStep3Crypto: 'Krypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Aktien / Indizes',
      chatStep3All: 'Alles davon',
      chatStep4Bot: "Perfekt nicht gefunden werden. Ich bereite ein kostenloses Kontoformular vor — es dauert unter 3 Minuten und unser Team ruft an, um die Einrichtung abzuschließen nicht gefunden werden.",
      chatStep4Form: 'Formular öffnen',
      chatMoreReply: 'Wir begleiten Einsteiger mit einem klaren Dashboard, KI-Markttipps in einfacher Sprache und sicherer Finanzierung ab Ihrer Mindesteinzahlung nicht gefunden werden. Weiter?',
      chatContinue: "Ja, weiter",
      chatFormPrompt: "Bitte geben Sie unten Ihre Daten ein und senden Sie ab — ich bleibe hier, falls Sie etwas brauchen nicht gefunden werden.",
      valPhoneRequired: 'Geben Sie Ihre Telefonnummer ein',
      valPhoneInvalid: 'Geben Sie eine gültige Telefonnummer ein',
      valPhoneCountry: 'Ungültiger Ländercode',
      valPhoneShort: 'Die Telefonnummer ist zu kurz',
      valPhoneLong: 'Die Telefonnummer ist zu lang',
      valSessionExpired: 'Sitzung abgelaufen nicht gefunden werden. Bitte laden Sie die Seite neu und versuchen Sie es erneut nicht gefunden werden.',
      valGenericError: 'Etwas ist schiefgelaufen nicht gefunden werden. Bitte versuchen Sie es später erneut nicht gefunden werden.',
      valConnectionError: 'Verbindungsfehler nicht gefunden werden. Prüfen Sie Ihre Internetverbindung und versuchen Sie es erneut nicht gefunden werden.'
    };
  </script>
  <script>
    (function () {
      try {
        var t = localStorage nicht gefunden werden.getItem('brandTheme') || 'dark';
        document nicht gefunden werden.documentElement nicht gefunden werden.setAttribute('data-theme', t);
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
      var t = localStorage nicht gefunden werden.getItem('brandTheme') || 'dark';
      document nicht gefunden werden.body nicht gefunden werden.dataset nicht gefunden werden.theme = t;
      document nicht gefunden werden.documentElement nicht gefunden werden.setAttribute('data-theme', t);
    } catch (e) {}
  })();
</script>

<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Prémiový AI obchodní engine pro globální trhy';
$page_description = $page_description ?? 'Chytřejší a přehlednější cesta ke globálním trhům s ' . SITE_NAME . ' — strukturované AI nástroje pro krypto, forex a akcie.';
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
      themeToggleDarkText: '🌙 Tmavý',
      themeToggleLightText: '☀️ Světlý',
      themeToggleDarkAria: 'Přepnout na tmavý režim',
      themeToggleLightAria: 'Přepnout na světlý režim',
      mockupToday: 'Dnes',
      orderPendingAllocation: 'objednávka čeká na alokaci',
      chatStep1Bot: "Ahoj! Jsem Lisa, vaše asistentka onboardingu. Jste připraveni otevřít obchodní účet v několika rychlých krocích?",
      chatStep1Yes: "Ano, pojďme začít",
      chatStep1More: 'Nejdřív mi řekni víc',
      chatStep2Bot: 'Skvělé. Obchodovali jste už s kryptem nebo forexem?',
      chatStep2New: "Jsem nováček",
      chatStep2Mid: 'Mám určité zkušenosti',
      chatStep2Pro: "Jsem zkušený",
      chatStep3Bot: 'Co vás právě teď nejvíce zajímá?',
      chatStep3Crypto: 'Krypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Akcie / indexy',
      chatStep3All: 'Vše výše',
      chatStep4Bot: "Perfektní. Připravím bezplatný formulář účtu — trvá to méně než 3 minuty a náš tým zavolá, aby dokončil nastavení.",
      chatStep4Form: 'Otevřít formulář',
      chatMoreReply: 'Provázíme začátečníky přehledným dashboardem, AI tržními tipy v jednoduchém jazyce a bezpečným financováním od vašeho minimálního vkladu. Pokračujeme?',
      chatContinue: "Ano, pokračujme",
      chatFormPrompt: "Zadejte prosím své údaje níže a odešlete — zůstanu tady, pokud budete něco potřebovat.",
      valPhoneRequired: 'Zadejte své telefonní číslo',
      valPhoneInvalid: 'Zadejte platné telefonní číslo',
      valPhoneCountry: 'Neplatný kód země',
      valPhoneShort: 'Telefonní číslo je příliš krátké',
      valPhoneLong: 'Telefonní číslo je příliš dlouhé',
      valSessionExpired: 'Relace vypršela. Načtěte prosím stránku znovu a zkuste to znovu.',
      valGenericError: 'Něco se pokazilo. Zkuste to prosím později.',
      valConnectionError: 'Chyba připojení. Zkontrolujte internetové připojení a zkuste to znovu.'
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

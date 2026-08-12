<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Prémiový AI obchodný engine pre globálne trhy';
$page_description = $page_description ?? 'Inteligentnejší a prehľadnejší prístup ku globálnym trhom s ' . SITE_NAME . ' — štruktúrované AI nástroje pre krypto, forex a akcie.';
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
      themeToggleLightText: '☀️ Svetlý',
      themeToggleDarkAria: 'Prepnúť na tmavý režim',
      themeToggleLightAria: 'Prepnúť na svetlý režim',
      mockupToday: 'Dnes',
      orderPendingAllocation: 'objednávka čaká na alokáciu',
      chatStep1Bot: "Ahoj! Som Lisa, vaša asistentka onboardingu. Ste pripravení otvoriť obchodný účet v niekoľkých rýchlych krokoch?",
      chatStep1Yes: "Áno, poďme začať",
      chatStep1More: 'Najprv mi povedz viac',
      chatStep2Bot: 'Skvelé. Obchodovali ste už s kryptom alebo forexom?',
      chatStep2New: "Som nováčik",
      chatStep2Mid: 'Mám určité skúsenosti',
      chatStep2Pro: "Som skúsený",
      chatStep3Bot: 'Čo vás práve teraz najviac zaujíma?',
      chatStep3Crypto: 'Krypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Akcie / indexy',
      chatStep3All: 'Všetko vyššie',
      chatStep4Bot: "Perfektné. Pripravím bezplatný formulár účtu — trvá to menej ako 3 minúty a náš tím zavolá, aby dokončil nastavenie.",
      chatStep4Form: 'Otvoriť formulár',
      chatMoreReply: 'Sprevádzame začiatočníkov prehľadným dashboardom, AI trhovými tipmi v jednoduchom jazyku a bezpečným financovaním od vášho minimálneho vkladu. Pokračujeme?',
      chatContinue: "Áno, pokračujme",
      chatFormPrompt: "Zadajte prosím svoje údaje nižšie a odošlite — zostanem tu, ak budete niečo potrebovať.",
      valPhoneRequired: 'Zadajte svoje telefónne číslo',
      valPhoneInvalid: 'Zadajte platné telefónne číslo',
      valPhoneCountry: 'Neplatný kód krajiny',
      valPhoneShort: 'Telefónne číslo je príliš krátke',
      valPhoneLong: 'Telefónne číslo je príliš dlhé',
      valSessionExpired: 'Relácia vypršala. Načítajte prosím stránku znova a skúste to znova.',
      valGenericError: 'Niečo sa pokazilo. Skúste to prosím neskôr.',
      valConnectionError: 'Chyba pripojenia. Skontrolujte internetové pripojenie a skúste to znova.'
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

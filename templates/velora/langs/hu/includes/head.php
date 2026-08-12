<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Prémium AI kereskedési motor a globális piacokhoz';
$page_description = $page_description ?? 'Okosabb, áttekinthetőbb hozzáférés a globális piacokhoz a ' . SITE_NAME . ' segítségével — strukturált AI eszközök kriptóhoz, forexhez és részvényekhez.';
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
      themeToggleDarkText: '🌙 Sötét',
      themeToggleLightText: '☀️ Világos',
      themeToggleDarkAria: 'Váltás sötét témára',
      themeToggleLightAria: 'Váltás világos témára',
      mockupToday: 'Ma',
      orderPendingAllocation: 'megbízás kiosztásra vár',
      chatStep1Bot: "Szia! Lisa vagyok, a belépési asszisens. Készen állsz néhány gyors lépésben kereskedési fiókot nyitni?",
      chatStep1Yes: "Igen, kezdjük",
      chatStep1More: 'Előbb mesélj többet',
      chatStep2Bot: 'Remek. Kereskedtél már kriptóval vagy forexszel?',
      chatStep2New: "Új vagyok",
      chatStep2Mid: 'Van tapasztalatom',
      chatStep2Pro: "Tapasztalt vagyok",
      chatStep3Bot: 'Mi érdekel most leginkább?',
      chatStep3Crypto: 'Kriptó',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Részvények / indexek',
      chatStep3All: 'Mindegyik',
      chatStep4Bot: "Tökéletes. Előkészítem az ingyenes fiók űrlapot — kevesebb mint 3 perc, és csapatunk felhív a beállítás befejezéséhez.",
      chatStep4Form: 'Űrlap megnyitása',
      chatMoreReply: 'Kezdőket tiszta irányítópulttal, érthető AI piaci tippekkel és biztonságos feltöltéssel vezetünk a minimális befizetéstől. Folytassuk?',
      chatContinue: "Igen, folytassuk",
      chatFormPrompt: "Kérjük, adja meg az adatait alább, és küldje el — itt maradok, ha segítségre van szüksége.",
      valPhoneRequired: 'Adja meg telefonszámát',
      valPhoneInvalid: 'Adjon meg érvényes telefonszámot',
      valPhoneCountry: 'Érvénytelen országkód',
      valPhoneShort: 'A telefonszám túl rövid',
      valPhoneLong: 'A telefonszám túl hosszú',
      valSessionExpired: 'A munkamenet lejárt. Kérjük, töltse újra az oldalt, és próbálja újra.',
      valGenericError: 'Valami hiba történt. Kérjük, próbálja újra később.',
      valConnectionError: 'Kapcsolati hiba. Ellenőrizze internetkapcsolatát, és próbálja újra.'
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

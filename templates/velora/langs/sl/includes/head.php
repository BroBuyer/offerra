<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Vrhunski mehanizem trgovanja z umetno inteligenco za svetovne trge';
$page_description = $page_description ?? 'Pametnejši in čistejši način za dostop do svetovnih trgov z' . SITE_NAME . '— strukturirana orodja AI za kripto, forex in delnice.';
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
      themeToggleDarkText: '🌙 Temno',
      themeToggleLightText: '☀️ Svetloba',
      themeToggleDarkAria: 'Preklopite na temno temo',
      themeToggleLightAria: 'Preklopite na svetlo temo',
      mockupToday: 'Danes',
      orderPendingAllocation: 'čakajoča dodelitev naročila',
      chatStep1Bot: "Pozdravljeni. Sem Lisa, vaša pomočnica pri uvajanju. Ste pripravljeni odpreti trgovalni račun v nekaj hitrih korakih?",
      chatStep1Yes: "Ja, začnimo",
      chatStep1More: 'Najprej mi povej več',
      chatStep2Bot: 'super Ali ste že trgovali s kripto ali forex?',
      chatStep2New: "sem nov",
      chatStep2Mid: 'Nekaj ​​izkušenj',
      chatStep2Pro: "Sem izkušena",
      chatStep3Bot: 'Kaj vas trenutno najbolj zanima?',
      chatStep3Crypto: 'Kripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Delnice / indeksi',
      chatStep3All: 'Vse našteto',
      chatStep4Bot: "Popoln. Pripravil bom brezplačen obrazec za račun — traja manj kot 3 minute in naša ekipa bo poklicala, da dokonča nastavitev.",
      chatStep4Form: 'Odpri obrazec',
      chatMoreReply: 'Začetnike vodimo s čisto nadzorno ploščo, tržnimi nasveti AI v preprostem jeziku in zagotovimo financiranje z vašim minimalnim depozitom. Naj nadaljujemo?',
      chatContinue: "Da, nadaljujmo",
      chatFormPrompt: "Spodaj vnesite svoje podatke in jih pošljite — ostal bom tukaj, če boste kaj potrebovali.",
      valPhoneRequired: 'Vnesite svojo telefonsko številko',
      valPhoneInvalid: 'Vnesite veljavno telefonsko številko',
      valPhoneCountry: 'Neveljavna koda države',
      valPhoneShort: 'Telefonska številka je prekratka',
      valPhoneLong: 'Telefonska številka je predolga',
      valSessionExpired: 'Seja je potekla. Ponovno naložite stran in poskusite znova.',
      valGenericError: 'Nekaj ​​je šlo narobe. Poskusite znova pozneje.',
      valConnectionError: 'Napaka pri povezavi. Preverite internetno povezavo in poskusite znova.'
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

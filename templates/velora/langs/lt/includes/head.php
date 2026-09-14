<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Aukščiausios kokybės AI prekybos variklis pasaulinėms rinkoms';
$page_description = $page_description ?? 'Sumanesnis ir švaresnis būdas pasiekti pasaulines rinkas' . SITE_NAME . '- struktūriniai AI įrankiai kriptovaliutų, Forex ir akcijoms.';
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
      themeToggleDarkText: '🌙 Tamsu',
      themeToggleLightText: '☀️ Šviesa',
      themeToggleDarkAria: 'Perjungti į tamsią temą',
      themeToggleLightAria: 'Perjungti į šviesią temą',
      mockupToday: 'Šiandien',
      orderPendingAllocation: 'užsakymas laukia paskirstymo',
      chatStep1Bot: "Sveiki! Aš esu Lisa, jūsų įstojimo padėjėja. Pasiruošę atidaryti prekybos sąskaitą keliais greitais žingsniais?",
      chatStep1Yes: "Taip, pradėkime",
      chatStep1More: 'Pirmiausia papasakok daugiau',
      chatStep2Bot: 'Puiku. Ar anksčiau prekiavote kriptovaliuta ar forex?',
      chatStep2New: "esu naujokas",
      chatStep2Mid: 'Tam tikra patirtis',
      chatStep2Pro: "Aš patyręs",
      chatStep3Bot: 'Kas jus šiuo metu domina labiausiai?',
      chatStep3Crypto: 'Kripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Akcijos / indeksai',
      chatStep3All: 'Visa tai, kas išdėstyta aukščiau',
      chatStep4Bot: "Tobulas. Parengsiu nemokamą paskyros formą – tai užtruks mažiau nei 3 minutes ir mūsų komanda paskambins, kad užbaigtų sąranką.",
      chatStep4Form: 'Atidarykite formą',
      chatMoreReply: 'Pradedantiesiems pateikiame švarų prietaisų skydelį, AI rinkos patarimus paprasta kalba ir saugų finansavimą iš jūsų minimalaus įnašo. Ar tęsime?',
      chatContinue: "Taip, tęskime",
      chatFormPrompt: "Įveskite savo duomenis žemiau ir pateikite – jei ko prireiks, pasiliksiu čia.",
      valPhoneRequired: 'Įveskite savo telefono numerį',
      valPhoneInvalid: 'Įveskite galiojantį telefono numerį',
      valPhoneCountry: 'Netinkamas šalies kodas',
      valPhoneShort: 'Telefono numeris per trumpas',
      valPhoneLong: 'Telefono numeris per ilgas',
      valSessionExpired: 'Sesija baigėsi. Įkelkite puslapį iš naujo ir bandykite dar kartą.',
      valGenericError: 'Kažkas nutiko. Bandykite dar kartą vėliau.',
      valConnectionError: 'Ryšio klaida. Patikrinkite interneto ryšį ir bandykite dar kartą.'
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

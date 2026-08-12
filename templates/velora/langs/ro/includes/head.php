<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Motor premium de tranzacționare AI pentru piețele globale';
$page_description = $page_description ?? 'O cale mai inteligentă și mai clară către piețele globale cu ' . SITE_NAME . ' — instrumente AI structurate pentru cripto, forex și acțiuni.';
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
      themeToggleDarkText: '🌙 Întunecat',
      themeToggleLightText: '☀️ Luminos',
      themeToggleDarkAria: 'Comută la tema întunecată',
      themeToggleLightAria: 'Comută la tema luminoasă',
      mockupToday: 'Astăzi',
      orderPendingAllocation: 'ordin în așteptarea alocării',
      chatStep1Bot: "Salut! Sunt Lisa, asistenta ta de onboarding. Ești gata să deschizi un cont de tranzacționare în câțiva pași rapizi?",
      chatStep1Yes: "Da, să începem",
      chatStep1More: 'Spune-mi mai multe mai întâi',
      chatStep2Bot: 'Excelent. Ai mai tranzacționat cripto sau forex?',
      chatStep2New: "Sunt nou",
      chatStep2Mid: 'Am ceva experiență',
      chatStep2Pro: "Sunt experimentat",
      chatStep3Bot: 'Ce te interesează cel mai mult acum?',
      chatStep3Crypto: 'Cripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Acțiuni / indici',
      chatStep3All: 'Toate de mai sus',
      chatStep4Bot: "Perfect. Voi pregăti un formular de cont gratuit — durează sub 3 minute, iar echipa noastră va suna pentru a finaliza configurarea.",
      chatStep4Form: 'Deschide formularul',
      chatMoreReply: 'Ghidăm începătorii cu un panou curat, sfaturi de piață AI în limbaj simplu și finanțare securizată de la depozitul minim. Continuăm?',
      chatContinue: "Da, să continuăm",
      chatFormPrompt: "Introduceți datele mai jos și trimiteți — rămân aici dacă aveți nevoie de ceva.",
      valPhoneRequired: 'Introduceți numărul de telefon',
      valPhoneInvalid: 'Introduceți un număr de telefon valid',
      valPhoneCountry: 'Cod de țară invalid',
      valPhoneShort: 'Numărul de telefon este prea scurt',
      valPhoneLong: 'Numărul de telefon este prea lung',
      valSessionExpired: 'Sesiunea a expirat. Reîncărcați pagina și încercați din nou.',
      valGenericError: 'Ceva nu a mers bine. Încercați din nou mai târziu.',
      valConnectionError: 'Eroare de conexiune. Verificați conexiunea la internet și încercați din nou.'
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

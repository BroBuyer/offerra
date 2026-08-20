<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Premium AI tirdzniecības dzinējs globālajiem tirgiem';
$page_description = $page_description ?? 'Gudrāks un skaidrāks veids, kā piekļūt globālajiem tirgiem ar ' . SITE_NAME . ' — strukturēti AI rīki kriptovalūtām, forex un akcijām.';
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
      themeToggleDarkText: '🌙 Tumšais',
      themeToggleLightText: '☀️ Gaišais',
      themeToggleDarkAria: 'Pārslēgties uz tumšo tēmu',
      themeToggleLightAria: 'Pārslēgties uz gaišo tēmu',
      mockupToday: 'Šodien',
      orderPendingAllocation: 'rīkojums gaida piešķiršanu',
      chatStep1Bot: "Sveiki! Esmu Lisa, jūsu ievadīšanas asistente. Gatavi atvērt tirdzniecības kontu dažos ātras soļos?",
      chatStep1Yes: "Jā, sāksim",
      chatStep1More: 'Vispirms pastāstiet vairāk',
      chatStep2Bot: 'Lieliski. Vai esat iepriekš tirgojuši kriptovalūtas vai forex?',
      chatStep2New: "Esmu iesācējs",
      chatStep2Mid: 'Neliela pieredze',
      chatStep2Pro: "Esmu pieredzējis",
      chatStep3Bot: 'Kas jūs šobrīd interesē visvairāk?',
      chatStep3Crypto: 'Kriptovalūtas',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Akcijas / indeksi',
      chatStep3All: 'Viss iepriekš minētais',
      chatStep4Bot: "Ideāli. Sagatavošu bezmaksas konta formu — tas aizņem mazāk nekā 3 minūtes, un mūsu komanda piezvanīs, lai pabeigtu iestatīšanu.",
      chatStep4Form: 'Atvērt formu',
      chatMoreReply: 'Mēs vadām iesācējus ar tīru paneli, AI tirgus padomiem vienkāršā valodā un drošu finansēšanu no jūsu minimālās iemaksas. Vai turpināsim?',
      chatContinue: "Jā, turpināsim",
      chatFormPrompt: "Lūdzu, ievadiet savus datus zemāk un iesniedziet — es palikšu šeit, ja jums kaut kas vajadzīgs.",
      valPhoneRequired: 'Ievadiet tālruņa numuru',
      valPhoneInvalid: 'Ievadiet derīgu tālruņa numuru',
      valPhoneCountry: 'Nederīgs valsts kods',
      valPhoneShort: 'Tālruņa numurs ir pārāk īss',
      valPhoneLong: 'Tālruņa numurs ir pārāk garš',
      valSessionExpired: 'Sesija beigusies. Lūdzu, pārlādējiet lapu un mēģiniet vēlreiz.',
      valGenericError: 'Kaut kas nogāja greizi. Lūdzu, mēģiniet vēlāk.',
      valConnectionError: 'Savienojuma kļūda. Pārbaudiet interneta savienojumu un mēģiniet vēlreiz.'
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

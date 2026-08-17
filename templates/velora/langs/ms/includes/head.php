<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Enjin Perdagangan AI Premium untuk Pasaran Global';
$page_description = $page_description ?? 'Cara yang lebih pintar dan kemas untuk mengakses pasaran global dengan ' . SITE_NAME . ' — alat AI berstruktur untuk kripto, forex dan ekuiti.';
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
      themeToggleDarkText: '🌙 Gelap',
      themeToggleLightText: '☀️ Cerah',
      themeToggleDarkAria: 'Tukar ke tema gelap',
      themeToggleLightAria: 'Tukar ke tema cerah',
      mockupToday: 'Hari ini',
      orderPendingAllocation: 'pesanan menunggu peruntukan',
      chatStep1Bot: "Hai! Saya Lisa, pembantu pendaftaran anda. Sedia membuka akaun perdagangan dalam beberapa langkah pantas?",
      chatStep1Yes: "Ya, mari kita mulakan",
      chatStep1More: 'Beritahu saya lebih lanjut dahulu',
      chatStep2Bot: 'Bagus. Pernahkah anda berdagang kripto atau forex sebelum ini?',
      chatStep2New: "Saya baharu",
      chatStep2Mid: 'Ada sedikit pengalaman',
      chatStep2Pro: "Saya berpengalaman",
      chatStep3Bot: 'Apakah yang paling menarik minat anda sekarang?',
      chatStep3Crypto: 'Kripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Saham / indeks',
      chatStep3All: 'Semua yang di atas',
      chatStep4Bot: "Sempurna. Saya akan sediakan borang akaun percuma — ia mengambil masa kurang daripada 3 minit dan pasukan kami akan menelefon untuk menyelesaikan persediaan.",
      chatStep4Form: 'Buka borang',
      chatMoreReply: 'Kami membimbing pemula dengan papan pemuka yang kemas, tip pasaran AI dalam bahasa mudah, dan pembiayaan selamat daripada deposit minimum anda. Mahu teruskan?',
      chatContinue: "Ya, mari kita teruskan",
      chatFormPrompt: "Sila masukkan butiran anda di bawah dan hantar — saya akan kekal di sini jika anda perlukan apa-apa.",
      valPhoneRequired: 'Masukkan nombor telefon anda',
      valPhoneInvalid: 'Masukkan nombor telefon yang sah',
      valPhoneCountry: 'Kod negara tidak sah',
      valPhoneShort: 'Nombor telefon terlalu pendek',
      valPhoneLong: 'Nombor telefon terlalu panjang',
      valSessionExpired: 'Sesi tamat. Muat semula halaman dan cuba lagi.',
      valGenericError: 'Sesuatu tidak kena. Sila cuba lagi kemudian.',
      valConnectionError: 'Ralat sambungan. Periksa sambungan internet anda dan cuba lagi.'
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

<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Premium-tekoälykaupankäyntimoottori globaaleille markkinoille';
$page_description = $page_description ?? 'Älykkäämpi ja selkeämpi tapa päästä globaaleille markkinoille ' . SITE_NAME . ' — strukturoidut tekoälytyökalut kryptolle, forexille ja osakkeille.';
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
      themeToggleDarkText: '🌙 Tumma',
      themeToggleLightText: '☀️ Vaalea',
      themeToggleDarkAria: 'Vaihda tummaan teemaan',
      themeToggleLightAria: 'Vaihda vaaleaan teemaan',
      mockupToday: 'Tänään',
      orderPendingAllocation: 'toimeksianto odottaa kohdistusta',
      chatStep1Bot: "Hei! Olen Lisa, käyttöönottoavustajasi. Valmis avaamaan kaupankäyntitilin muutamassa nopeassa vaiheessa?",
      chatStep1Yes: "Kyllä, aloitetaan",
      chatStep1More: 'Kerro ensin lisää',
      chatStep2Bot: 'Hienoa. Oletko käynyt kauppaa kryptolla tai forexillä aiemmin?',
      chatStep2New: "Olen uusi",
      chatStep2Mid: 'Jonkin verran kokemusta',
      chatStep2Pro: "Olen kokenut",
      chatStep3Bot: 'Mikä kiinnostaa sinua eniten juuri nyt?',
      chatStep3Crypto: 'Crypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Osakkeet / indeksit',
      chatStep3All: 'Kaikki edellä mainitut',
      chatStep4Bot: "Täydellistä. Valmistelen ilmaisen tililomakkeen — se kestää alle 3 minuuttia, ja tiimimme soittaa viimeistelemään käyttöönoton.",
      chatStep4Form: 'Avaa lomake',
      chatMoreReply: 'Ohjaamme aloittelijoita selkeällä kojelaudalla, tekoälyn markkinavinkeillä selkokielellä ja turvallisella rahoituksella vähimmäistalletuksestasi. Jatketaanko?',
      chatContinue: "Kyllä, jatketaan",
      chatFormPrompt: "Syötä tietosi alle ja lähetä — jään tänne, jos tarvitset jotain.",
      valPhoneRequired: 'Syötä puhelinnumerosi',
      valPhoneInvalid: 'Syötä kelvollinen puhelinnumero',
      valPhoneCountry: 'Virheellinen maakoodi',
      valPhoneShort: 'Puhelinnumero on liian lyhyt',
      valPhoneLong: 'Puhelinnumero on liian pitkä',
      valSessionExpired: 'Istunto vanhentui. Lataa sivu uudelleen ja yritä uudelleen.',
      valGenericError: 'Jokin meni pieleen. Yritä myöhemmin uudelleen.',
      valConnectionError: 'Yhteysvirhe. Tarkista internetyhteytesi ja yritä uudelleen.'
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

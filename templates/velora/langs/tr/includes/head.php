<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Küresel piyasalar için premium AI işlem motoru';
$page_description = $page_description ?? 'Küresel piyasalara ' . SITE_NAME . ' ile daha akıllı ve daha sade erişim — kripto, forex ve hisse senetleri için yapılandırılmış AI araçları.';
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
      themeToggleDarkText: '🌙 Koyu',
      themeToggleLightText: '☀️ Açık',
      themeToggleDarkAria: 'Koyu temaya geç',
      themeToggleLightAria: 'Açık temaya geç',
      mockupToday: 'Bugün',
      orderPendingAllocation: 'emir tahsis bekliyor',
      chatStep1Bot: "Merhaba! Ben Lisa, katılım asistanınızım. Birkaç hızlı adımda işlem hesabı açmaya hazır mısınız?",
      chatStep1Yes: "Evet, başlayalım",
      chatStep1More: 'Önce daha fazla bilgi ver',
      chatStep2Bot: 'Harika. Daha önce kripto veya forex işlemi yaptınız mı?',
      chatStep2New: "Yeniyim",
      chatStep2Mid: 'Biraz deneyimim var',
      chatStep2Pro: "Deneyimliyim",
      chatStep3Bot: 'Şu anda en çok ne ilginizi çekiyor?',
      chatStep3Crypto: 'Kripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Hisse / endeksler',
      chatStep3All: 'Hepsi',
      chatStep4Bot: "Mükemmel. Ücretsiz bir hesap formu hazırlayacağım — 3 dakikadan kısa sürer ve ekibimiz kurulumu tamamlamak için arayacak.",
      chatStep4Form: 'Formu aç',
      chatMoreReply: 'Yeni başlayanlara sade bir pano, sade dilde AI piyasa ipuçları ve minimum yatırımınızdan güvenli fonlama ile rehberlik ediyoruz. Devam edelim mi?',
      chatContinue: "Evet, devam edelim",
      chatFormPrompt: "Lütfen bilgilerinizi aşağıya girin ve gönderin — bir şeye ihtiyacınız olursa burada kalacağım.",
      valPhoneRequired: 'Telefon numaranızı girin',
      valPhoneInvalid: 'Geçerli bir telefon numarası girin',
      valPhoneCountry: 'Geçersiz ülke kodu',
      valPhoneShort: 'Telefon numarası çok kısa',
      valPhoneLong: 'Telefon numarası çok uzun',
      valSessionExpired: 'Oturum süresi doldu. Lütfen sayfayı yenileyin ve tekrar deneyin.',
      valGenericError: 'Bir şeyler ters gitti. Lütfen daha sonra tekrar deneyin.',
      valConnectionError: 'Bağlantı hatası. İnternet bağlantınızı kontrol edin ve tekrar deneyin.'
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

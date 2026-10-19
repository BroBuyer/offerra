<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/geo.php';
require_once __DIR__ . '/includes/helpers.php';
if (is_file(__DIR__ . '/includes/keitaro.php')) {
    require_once __DIR__ . '/includes/keitaro.php';
}

$lang = geo_cookie_lang() ?? DEFAULT_LANG;
if (!in_array($lang, SUPPORTED_LANGS, true)) {
    $lang = DEFAULT_LANG;
}

$langData = load_lang($lang);
$page = 'home';
$thanks = $langData['thanks'] ?? [];
$meta = [
    'title' => $thanks['title'] ?? ('Thank you | ' . SITE_NAME),
    'description' => $thanks['lead'] ?? '',
];
$country = geo_detect_country();
$phoneCountry = strtolower($country);

require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="section-eyebrow"><?= e($thanks['eyebrow'] ?? 'Thank you') ?></div>
    <h1 class="page-hero-h1"><?= e($thanks['heading'] ?? 'We received your request') ?></h1>
    <p class="page-hero-desc"><?= e($thanks['lead'] ?? ('Your request has been received by the ' . SITE_NAME . ' team. A specialist will be in touch shortly.')) ?></p>
    <p style="margin-top:1.5rem">
      <a class="btn-primary" href="<?= e(lang_path($lang, 'home')) ?>"><?= e($thanks['back'] ?? 'Back to home') ?></a>
    </p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

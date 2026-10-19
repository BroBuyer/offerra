<?php
/** @var string $lang */
/** @var array $langData */
$nav = $langData['nav'];
$footer = $langData['footer'];
$year = (string) date('Y');
$phoneDisplay = $footer['phone_number'] ?? '+1 212 555 0148';
$phoneTel = preg_replace('/[^\d+]/', '', $phoneDisplay) ?: '+12125550148';
$phoneLabel = $footer['phone_label'] ?? 'Phone';
?>
</main>
<footer class="footer">
  <div class="container">
    <div class="footer-inner">
      <a href="<?= e(lang_path($lang, 'home')) ?>" class="nav-logo" aria-label="<?= e($nav['home_aria']) ?>">
        <img class="nav-logo-img" src="<?= e(public_url('assets/icons/logo.svg')) ?>" width="28" height="28" alt="" aria-hidden="true">
        <span class="nav-logo-text" style="font-size:1rem"><?= e(SITE_NAME) ?></span>
      </a>
      <nav class="footer-nav" aria-label="Footer">
        <a href="<?= e(lang_path($lang, 'about')) ?>"><?= e($nav['about']) ?></a>
        <a href="<?= e(lang_path($lang, 'product')) ?>"><?= e($nav['product']) ?></a>
        <a href="<?= e(lang_path($lang, 'offer')) ?>"><?= e($nav['offer']) ?></a>
        <a href="<?= e(lang_path($lang, 'sign-up')) ?>"><?= e($nav['signup']) ?></a>
        <a href="<?= e(lang_path($lang, 'contact')) ?>"><?= e($nav['contact']) ?></a>
        <a href="<?= e(lang_path($lang, 'faq')) ?>"><?= e($nav['faq']) ?></a>
        <a href="<?= e(lang_path($lang, 'privacy')) ?>"><?= e($nav['privacy']) ?></a>
        <a href="<?= e(lang_path($lang, 'terms')) ?>"><?= e($nav['terms']) ?></a>
        <a href="<?= e(lang_path($lang, 'cookie-policy')) ?>"><?= e($nav['cookies']) ?></a>
        <a href="<?= e(lang_path($lang, 'abuse')) ?>"><?= e($nav['abuse']) ?></a>
      </nav>
      <p class="footer-legal">
        <?= e(str_replace('{year}', $year, $footer['copy'])) ?>
        <span><?= e($phoneLabel) ?>: <a href="tel:<?= e($phoneTel) ?>"><?= e($phoneDisplay) ?></a></span>
        <span><?= e($footer['risk']) ?></span>
      </p>
    </div>
  </div>
</footer>
<script>
  window.APP_LANG = <?= json_encode([
      'valPhoneInvalid' => $langData['form']['val_phone_invalid'] ?? 'Enter a valid phone number',
      'valPhoneCountry' => $langData['form']['val_phone_country'] ?? 'Invalid country code',
      'valPhoneShort' => $langData['form']['val_phone_short'] ?? 'The phone number is too short',
      'valPhoneLong' => $langData['form']['val_phone_long'] ?? 'The phone number is too long',
      'valPhoneRequired' => $langData['form']['val_phone_required'] ?? 'Enter your phone number',
      'valSessionExpired' => $langData['form']['val_session'] ?? 'Session expired. Please reload the page and try again.',
      'valGenericError' => $langData['form']['val_generic'] ?? ($langData['hero']['form_err'] ?? 'Something went wrong. Please try again later.'),
      'valConnectionError' => $langData['form']['val_connection'] ?? 'Connection error. Check your internet connection and try again.',
  ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
</script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/js/intlTelInput.min.js"></script>
<script src="<?= e(public_url('assets/js/widgets.js')) ?>"></script>
<script src="<?= e(public_url('integration/validation.js')) ?>"></script>
</body>
</html>

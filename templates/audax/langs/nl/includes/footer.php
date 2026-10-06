<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Je partner voor betrouwbare trading</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Voettekst">
              <a href="<?= page_url('product.php') ?>">Product</a>
              <a href="<?= page_url('offer.php') ?>">Aanbod</a>
              <a href="<?= page_url('about.php') ?>">Team</a>
              <a href="<?= page_url('contacts.php') ?>">Contact</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Juridisch">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Misbruik melden</a>
              <a href="<?= page_url('privacy.php') ?>">Privacybeleid</a>
              <a href="<?= page_url('conditions.php') ?>">Gebruiksvoorwaarden</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Alle rechten voorbehouden.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="Logo TradingView"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="Logo X"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="Logo YouTube"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Voer een geldig telefoonnummer in', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Ongeldige landcode', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Het telefoonnummer is te kort', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Het telefoonnummer is te lang', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Voer je telefoonnummer in', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sessie verlopen. Vernieuw de pagina en probeer het opnieuw.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Er ging iets mis. Probeer het later opnieuw.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Verbindingsfout. Controleer je internetverbinding en probeer het opnieuw.', JSON_UNESCAPED_UNICODE) ?>
};
</script>
<script src="<?= asset('static/js/main.min.js') ?>" defer></script>
<script src="<?= asset('static/js/ticker.js') ?>" defer></script>
<?php foreach (($page_js ?? []) as $__js): ?>
<script src="<?= asset('static/js/' . $__js) ?>" defer></script>
<?php endforeach; ?>
<?php if (!empty($page_has_form)): ?>
<script src="<?= asset('static/js/intlTelInput.min.js') ?>"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<?php endif; ?>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>

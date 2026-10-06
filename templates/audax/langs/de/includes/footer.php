<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Ihr Partner für verlässliches Trading</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Fußzeile">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Angebot</a>
              <a href="<?= page_url('about.php') ?>">Team</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Rechtliches">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Missbrauch melden</a>
              <a href="<?= page_url('privacy.php') ?>">Datenschutzerklärung</a>
              <a href="<?= page_url('conditions.php') ?>">Nutzungsbedingungen</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Alle Rechte vorbehalten.</p>
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
  valPhoneInvalid: <?= json_encode('Geben Sie eine gültige Telefonnummer ein', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Ungültige Ländervorwahl', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Die Telefonnummer ist zu kurz', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Die Telefonnummer ist zu lang', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Geben Sie Ihre Telefonnummer ein', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sitzung abgelaufen. Laden Sie die Seite neu und versuchen Sie es erneut.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Etwas ist schiefgelaufen. Bitte versuchen Sie es später erneut.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Verbindungsfehler. Prüfen Sie Ihre Internetverbindung und versuchen Sie es erneut.', JSON_UNESCAPED_UNICODE) ?>
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

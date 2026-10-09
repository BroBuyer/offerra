<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Luotettava kumppanisi kaupankäyntiin</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Alatunniste">
              <a href="<?= page_url('product.php') ?>">Tuote</a>
              <a href="<?= page_url('offer.php') ?>">Tarjous</a>
              <a href="<?= page_url('about.php') ?>">Tiimi</a>
              <a href="<?= page_url('contacts.php') ?>">Yhteystiedot</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Oikeudelliset">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Ilmoita väärinkäytöstä</a>
              <a href="<?= page_url('privacy.php') ?>">Tietosuojakäytäntö</a>
              <a href="<?= page_url('conditions.php') ?>">Käyttöehdot</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Kaikki oikeudet pidätetään.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView-logo"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X-logo"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube-logo"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Anna kelvollinen puhelinnumero', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Virheellinen maatunnus', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Puhelinnumero on liian lyhyt', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Puhelinnumero on liian pitkä', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Anna puhelinnumerosi', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Istunto on vanhentunut. Lataa sivu uudelleen ja yritä uudestaan.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Jokin meni pieleen. Yritä myöhemmin uudelleen.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Yhteysvirhe. Tarkista internetyhteys ja yritä uudelleen.', JSON_UNESCAPED_UNICODE) ?>
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

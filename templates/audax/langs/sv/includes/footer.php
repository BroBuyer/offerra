<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Din partner för tillförlitlig handel</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Sidfot">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Erbjudande</a>
              <a href="<?= page_url('about.php') ?>">Team</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Juridik">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Rapportera missbruk</a>
              <a href="<?= page_url('privacy.php') ?>">Integritetspolicy</a>
              <a href="<?= page_url('conditions.php') ?>">Användarvillkor</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Alla rättigheter förbehållna.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView-logotyp"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X-logotyp"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube-logotyp"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Ange ett giltigt telefonnummer', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Ogiltig landskod', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefonnumret är för kort', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefonnumret är för långt', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Ange ditt telefonnummer', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sessionen har löpt ut. Ladda om sidan och försök igen.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Något gick fel. Försök igen senare.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Anslutningsfel. Kontrollera internet och försök igen.', JSON_UNESCAPED_UNICODE) ?>
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

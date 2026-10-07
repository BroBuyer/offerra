<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Din partner for pålitelig trading</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Bunntekst">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Kampanje</a>
              <a href="<?= page_url('about.php') ?>">Team</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Juridisk">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Rapporter misbruk</a>
              <a href="<?= page_url('privacy.php') ?>">Personvernerklæring</a>
              <a href="<?= page_url('conditions.php') ?>">Bruksvilkår</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Alle rettigheter forbeholdt.</p>
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
  valPhoneInvalid: <?= json_encode('Oppgi et gyldig telefonnummer', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Ugyldig landskode', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefonnummeret er for kort', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefonnummeret er for langt', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Oppgi telefonnummeret ditt', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Økten er utløpt. Last inn siden på nytt og prøv igjen.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Noe gikk galt. Prøv igjen senere.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Tilkoblingsfeil. Sjekk internettforbindelsen og prøv igjen.', JSON_UNESCAPED_UNICODE) ?>
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

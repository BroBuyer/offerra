<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Váš partner pre spoľahlivý trading</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Pätička">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Akcia</a>
              <a href="<?= page_url('about.php') ?>">Tím</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Právne informácie">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Nahlásiť zneužitie</a>
              <a href="<?= page_url('privacy.php') ?>">Zásady ochrany osobných údajov</a>
              <a href="<?= page_url('conditions.php') ?>">Podmienky použitia</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Všetky práva vyhradené.</p>
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
  valPhoneInvalid: <?= json_encode('Zadajte platné telefónne číslo', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Neplatný kód krajiny', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefónne číslo je príliš krátke', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefónne číslo je príliš dlhé', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Zadajte svoje telefónne číslo', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Relácia vypršala. Načítajte stránku znova a skúste to znova.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Niečo sa pokazilo. Skúste to znova neskôr.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Chyba pripojenia. Skontrolujte internet a skúste to znova.', JSON_UNESCAPED_UNICODE) ?>
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

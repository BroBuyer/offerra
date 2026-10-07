<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Váš partner pro spolehlivý trading</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Patička">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Akce</a>
              <a href="<?= page_url('about.php') ?>">Tým</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Právní informace">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Nahlásit zneužití</a>
              <a href="<?= page_url('privacy.php') ?>">Zásady ochrany osobních údajů</a>
              <a href="<?= page_url('conditions.php') ?>">Podmínky použití</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Všechna práva vyhrazena.</p>
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
  valPhoneInvalid: <?= json_encode('Zadejte platné telefonní číslo', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Neplatný kód země', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefonní číslo je příliš krátké', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefonní číslo je příliš dlouhé', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Zadejte své telefonní číslo', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Relace vypršela. Načtěte stránku znovu a zkuste to znovu.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Něco se pokazilo. Zkuste to znovu později.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Chyba připojení. Zkontrolujte internet a zkuste to znovu.', JSON_UNESCAPED_UNICODE) ?>
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

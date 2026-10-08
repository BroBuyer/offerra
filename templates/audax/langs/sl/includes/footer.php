<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Tvoj zanesljiv partner pri trgovanju</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Noga">
              <a href="<?= page_url('product.php') ?>">Izdelek</a>
              <a href="<?= page_url('offer.php') ?>">Ponudba</a>
              <a href="<?= page_url('about.php') ?>">Ekipa</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Pravne informacije">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Prijavi zlorabo</a>
              <a href="<?= page_url('privacy.php') ?>">Politika zasebnosti</a>
              <a href="<?= page_url('conditions.php') ?>">Pogoji uporabe</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Vse pravice pridržane.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="Logotip TradingView"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="Logotip X"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="Logotip YouTube"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Vnesi veljavno telefonsko številko', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Neveljavna klicna koda države', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefonska številka je prekratka', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefonska številka je predolga', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Vnesi svojo telefonsko številko', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Seja je potekla. Ponovno naloži stran in poskusi znova.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Nekaj je šlo narobe. Poskusi znova pozneje.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Napaka povezave. Preveri internet in poskusi znova.', JSON_UNESCAPED_UNICODE) ?>
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

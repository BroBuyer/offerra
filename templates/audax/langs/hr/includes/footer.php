<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Tvoj partner za pouzdano trgovanje</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Podnožje">
              <a href="<?= page_url('product.php') ?>">Proizvod</a>
              <a href="<?= page_url('offer.php') ?>">Ponuda</a>
              <a href="<?= page_url('about.php') ?>">Tim</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Pravne informacije">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Prijavi zlouporabu</a>
              <a href="<?= page_url('privacy.php') ?>">Pravila privatnosti</a>
              <a href="<?= page_url('conditions.php') ?>">Uvjeti korištenja</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Sva prava pridržana.</p>
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
  valPhoneInvalid: <?= json_encode('Unesi važeći broj telefona', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Nevažeći pozivni broj zemlje', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Broj telefona je prekratak', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Broj telefona je predug', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Unesi svoj broj telefona', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesija je istekla. Ponovno učitaj stranicu i pokušaj opet.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Nešto je pošlo po krivu. Pokušaj ponovno kasnije.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Pogreška veze. Provjeri internet i pokušaj opet.', JSON_UNESCAPED_UNICODE) ?>
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

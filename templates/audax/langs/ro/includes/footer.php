<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Partenerul tău pentru tranzacționare de încredere</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Subsol">
              <a href="<?= page_url('product.php') ?>">Produs</a>
              <a href="<?= page_url('offer.php') ?>">Ofertă</a>
              <a href="<?= page_url('about.php') ?>">Echipă</a>
              <a href="<?= page_url('contacts.php') ?>">Contact</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Informații legale">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Raportează un abuz</a>
              <a href="<?= page_url('privacy.php') ?>">Politica de confidențialitate</a>
              <a href="<?= page_url('conditions.php') ?>">Termeni de utilizare</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Toate drepturile rezervate.</p>
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
  valPhoneInvalid: <?= json_encode('Introdu un număr de telefon valid', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Prefix de țară invalid', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Numărul de telefon este prea scurt', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Numărul de telefon este prea lung', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Introdu numărul tău de telefon', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesiunea a expirat. Reîncarcă pagina și încearcă din nou.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Ceva nu a mers bine. Încearcă din nou mai târziu.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Eroare de conexiune. Verifică internetul și încearcă din nou.', JSON_UNESCAPED_UNICODE) ?>
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

<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Jūsu uzticamais partneris tirdzniecībā</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Kājene">
              <a href="<?= page_url('product.php') ?>">Produkts</a>
              <a href="<?= page_url('offer.php') ?>">Piedāvājums</a>
              <a href="<?= page_url('about.php') ?>">Komanda</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakti</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Juridiskā informācija">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Ziņot par ļaunprātīgu izmantošanu</a>
              <a href="<?= page_url('privacy.php') ?>">Privātuma politika</a>
              <a href="<?= page_url('conditions.php') ?>">Lietošanas noteikumi</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Visas tiesības aizsargātas.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView logotips"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X logotips"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube logotips"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Ievadiet derīgu tālruņa numuru', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Nederīgs valsts kods', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Tālruņa numurs ir pārāk īss', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Tālruņa numurs ir pārāk garš', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Ievadiet tālruņa numuru', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesija ir beigusies. Pārlādējiet lapu un mēģiniet vēlreiz.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Kaut kas nogāja greizi. Mēģiniet vēlāk.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Savienojuma kļūda. Pārbaudiet internetu un mēģiniet vēlreiz.', JSON_UNESCAPED_UNICODE) ?>
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

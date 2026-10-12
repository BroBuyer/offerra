<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Ο αξιόπιστος συνεργάτης σου για συναλλαγές</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Υποσέλιδο">
              <a href="<?= page_url('product.php') ?>">Προϊόν</a>
              <a href="<?= page_url('offer.php') ?>">Προσφορά</a>
              <a href="<?= page_url('about.php') ?>">Ομάδα</a>
              <a href="<?= page_url('contacts.php') ?>">Επικοινωνία</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Νομικά">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Αναφορά κατάχρησης</a>
              <a href="<?= page_url('privacy.php') ?>">Πολιτική Απορρήτου</a>
              <a href="<?= page_url('conditions.php') ?>">Όροι χρήσης</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Όλα τα δικαιώματα διατηρούνται.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="Λογότυπο TradingView"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="Λογότυπο X"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="Λογότυπο YouTube"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Βάλε έγκυρο αριθμό τηλεφώνου', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Μη έγκυρος κωδικός χώρας', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Ο αριθμός τηλεφώνου είναι πολύ σύντομος', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Ο αριθμός τηλεφώνου είναι πολύ μακρύς', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Βάλε τον αριθμό τηλεφώνου σου', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Η συνεδρία έληξε. Φόρτωσε ξανά τη σελίδα και δοκίμασε πάλι.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Κάτι πήγε στραβά. Δοκίμασε ξανά αργότερα.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Σφάλμα σύνδεσης. Έλεγξε τη σύνδεσή σου στο internet και δοκίμασε πάλι.', JSON_UNESCAPED_UNICODE) ?>
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

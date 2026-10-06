<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Il tuo partner per un trading affidabile</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Piè di pagina">
              <a href="<?= page_url('product.php') ?>">Prodotto</a>
              <a href="<?= page_url('offer.php') ?>">Offerta</a>
              <a href="<?= page_url('about.php') ?>">Team</a>
              <a href="<?= page_url('contacts.php') ?>">Contatti</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Note legali">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Segnala un abuso</a>
              <a href="<?= page_url('privacy.php') ?>">Informativa sulla privacy</a>
              <a href="<?= page_url('conditions.php') ?>">Termini di utilizzo</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Tutti i diritti riservati.</p>
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
  valPhoneInvalid: <?= json_encode('Inserisci un numero di telefono valido', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Prefisso internazionale non valido', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Il numero di telefono è troppo corto', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Il numero di telefono è troppo lungo', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Inserisci il tuo numero di telefono', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sessione scaduta. Ricarica la pagina e riprova.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Si è verificato un errore. Riprova più tardi.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Errore di connessione. Controlla la connessione internet e riprova.', JSON_UNESCAPED_UNICODE) ?>
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

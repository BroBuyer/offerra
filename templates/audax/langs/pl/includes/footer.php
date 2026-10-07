<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Twój partner w niezawodnym tradingu</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Stopka">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Promocja</a>
              <a href="<?= page_url('about.php') ?>">Zespół</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Informacje prawne">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Zgłoś nadużycie</a>
              <a href="<?= page_url('privacy.php') ?>">Polityka prywatności</a>
              <a href="<?= page_url('conditions.php') ?>">Regulamin</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone.</p>
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
  valPhoneInvalid: <?= json_encode('Podaj prawidłowy numer telefonu', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Nieprawidłowy kod kraju', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Numer telefonu jest za krótki', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Numer telefonu jest za długi', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Podaj swój numer telefonu', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesja wygasła. Odśwież stronę i spróbuj ponownie.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Coś poszło nie tak. Spróbuj ponownie później.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Błąd połączenia. Sprawdź internet i spróbuj ponownie.', JSON_UNESCAPED_UNICODE) ?>
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

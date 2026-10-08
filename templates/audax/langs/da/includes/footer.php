<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Din partner for pålidelig handel</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Sidefod">
              <a href="<?= page_url('product.php') ?>">Produkt</a>
              <a href="<?= page_url('offer.php') ?>">Tilbud</a>
              <a href="<?= page_url('about.php') ?>">Team</a>
              <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Juridisk">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Rapportér misbrug</a>
              <a href="<?= page_url('privacy.php') ?>">Privatlivspolitik</a>
              <a href="<?= page_url('conditions.php') ?>">Brugsvilkår</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Alle rettigheder forbeholdes.</p>
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
  valPhoneInvalid: <?= json_encode('Indtast et gyldigt telefonnummer', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Ugyldig landekode', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefonnummeret er for kort', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefonnummeret er for langt', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Indtast dit telefonnummer', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sessionen er udløbet. Genindlæs siden, og prøv igen.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Noget gik galt. Prøv igen senere.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Forbindelsesfejl. Tjek internettet, og prøv igen.', JSON_UNESCAPED_UNICODE) ?>
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

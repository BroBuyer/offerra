<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Jūsų patikimas prekybos partneris</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Poraštė">
              <a href="<?= page_url('product.php') ?>">Produktas</a>
              <a href="<?= page_url('offer.php') ?>">Akcija</a>
              <a href="<?= page_url('about.php') ?>">Komanda</a>
              <a href="<?= page_url('contacts.php') ?>">Kontaktai</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Teisinė informacija">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Pranešti apie piktnaudžiavimą</a>
              <a href="<?= page_url('privacy.php') ?>">Privatumo politika</a>
              <a href="<?= page_url('conditions.php') ?>">Naudojimo sąlygos</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Visos teisės saugomos.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView logotipas"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X logotipas"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube logotipas"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Įveskite galiojantį telefono numerį', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Netinkamas šalies kodas', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefono numeris per trumpas', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefono numeris per ilgas', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Įveskite savo telefono numerį', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesija baigėsi. Įkelkite puslapį iš naujo ir bandykite dar kartą.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Kažkas nutiko. Bandykite dar kartą vėliau.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Ryšio klaida. Patikrinkite interneto ryšį ir bandykite dar kartą.', JSON_UNESCAPED_UNICODE) ?>
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

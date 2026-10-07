<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Megbízható partnered a kereskedésben</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Lábléc">
              <a href="<?= page_url('product.php') ?>">Termék</a>
              <a href="<?= page_url('offer.php') ?>">Ajánlat</a>
              <a href="<?= page_url('about.php') ?>">Csapat</a>
              <a href="<?= page_url('contacts.php') ?>">Kapcsolat</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Jogi információk">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Visszaélés bejelentése</a>
              <a href="<?= page_url('privacy.php') ?>">Adatvédelmi tájékoztató</a>
              <a href="<?= page_url('conditions.php') ?>">Felhasználási feltételek</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Minden jog fenntartva.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView logó"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X logó"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube logó"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Adj meg érvényes telefonszámot', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Érvénytelen országkód', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('A telefonszám túl rövid', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('A telefonszám túl hosszú', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Add meg a telefonszámod', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('A munkamenet lejárt. Töltsd újra az oldalt, és próbáld újra.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Valami hiba történt. Próbáld újra később.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Kapcsolódási hiba. Ellenőrizd az internetet, és próbáld újra.', JSON_UNESCAPED_UNICODE) ?>
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

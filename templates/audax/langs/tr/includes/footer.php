<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Güvenilir işlem için ortağın</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Alt bilgi">
              <a href="<?= page_url('product.php') ?>">Ürün</a>
              <a href="<?= page_url('offer.php') ?>">Teklif</a>
              <a href="<?= page_url('about.php') ?>">Ekip</a>
              <a href="<?= page_url('contacts.php') ?>">İletişim</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Yasal">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Kötüye kullanım bildir</a>
              <a href="<?= page_url('privacy.php') ?>">Gizlilik Politikası</a>
              <a href="<?= page_url('conditions.php') ?>">Kullanım Koşulları</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Tüm hakları saklıdır.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView logosu"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X logosu"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube logosu"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Geçerli bir telefon numarası gir', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Geçersiz ülke kodu', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Telefon numarası çok kısa', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Telefon numarası çok uzun', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Telefon numaranı gir', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Oturum süresi doldu. Sayfayı yenileyip tekrar dene.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Bir şeyler ters gitti. Lütfen daha sonra tekrar dene.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Bağlantı hatası. İnternet bağlantını kontrol edip tekrar dene.', JSON_UNESCAPED_UNICODE) ?>
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

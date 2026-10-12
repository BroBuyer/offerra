<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Rakan berdagang yang boleh dipercayai</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Pengaki">
              <a href="<?= page_url('product.php') ?>">Produk</a>
              <a href="<?= page_url('offer.php') ?>">Tawaran</a>
              <a href="<?= page_url('about.php') ?>">Pasukan</a>
              <a href="<?= page_url('contacts.php') ?>">Hubungi</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Undang-undang">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Laporkan penyalahgunaan</a>
              <a href="<?= page_url('privacy.php') ?>">Dasar Privasi</a>
              <a href="<?= page_url('conditions.php') ?>">Syarat Penggunaan</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Hak cipta terpelihara.</p>
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
  valPhoneInvalid: <?= json_encode('Masukkan nombor telefon yang sah', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Kod negara tidak sah', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Nombor telefon terlalu pendek', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Nombor telefon terlalu panjang', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Masukkan nombor telefon kamu', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesi tamat. Muat semula halaman dan cuba lagi.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Ada masalah. Cuba lagi kemudian.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Ralat sambungan. Semak internet kamu dan cuba lagi.', JSON_UNESCAPED_UNICODE) ?>
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

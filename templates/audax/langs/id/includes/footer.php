<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Mitra trading terpercaya kamu</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Footer">
              <a href="<?= page_url('product.php') ?>">Produk</a>
              <a href="<?= page_url('offer.php') ?>">Penawaran</a>
              <a href="<?= page_url('about.php') ?>">Tim</a>
              <a href="<?= page_url('contacts.php') ?>">Kontak</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Hukum">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Laporkan penyalahgunaan</a>
              <a href="<?= page_url('privacy.php') ?>">Kebijakan Privasi</a>
              <a href="<?= page_url('conditions.php') ?>">Syarat Penggunaan</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Hak cipta dilindungi.</p>
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
  valPhoneInvalid: <?= json_encode('Masukkan nomor telepon yang valid', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Kode negara tidak valid', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Nomor telepon terlalu pendek', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Nomor telepon terlalu panjang', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Masukkan nomor telepon kamu', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesi berakhir. Muat ulang halaman dan coba lagi.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Ada masalah. Coba lagi nanti.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Kesalahan koneksi. Periksa internet kamu dan coba lagi.', JSON_UNESCAPED_UNICODE) ?>
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

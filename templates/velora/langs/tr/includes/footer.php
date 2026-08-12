<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> ana sayfa">
            <div class="logo-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width:60%;height:60%;">
                <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
                <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
                <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
                <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
              </svg>
            </div>
            <span><?= e(SITE_NAME) ?></span>
          </a>
          <p>Küresel varlıklarda net veri takibi sunan modern bir analitik ortam.</p>
        </div>

        <div class="footer-links-col">
          <h4>Platform</h4>
          <ul>
            <li><a href="<?= e(page_url()) ?>#platform">Arayüz</a></li>
            <li><a href="<?= e(page_url()) ?>#features">Özellikler</a></li>
            <li><a href="<?= e(page_url()) ?>#markets">Piyasa özeti</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Sayfalar</h4>
          <ul>
            <li><a href="product.php">Hakkımızda</a></li>
            <li><a href="contacts.php">İletişim</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="sign.php">Kayıt ol</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Yasal</h4>
          <ul>
            <li><a href="conditions.php">Kullanım Koşulları</a></li>
            <li><a href="privacy.php">Gizlilik Politikası</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="disclaimer">
        <strong>⚠️ Risk uyarısı:</strong>
        Dijital varlıklar ve küresel enstrümanlarla işlem yüksek piyasa volatilitesi içerir.
        Strateji ayarlarınızın tam kontrolünü elinizde tutun. <?= e(SITE_NAME) ?>
         üzerindeki otomatik metrikler kesinlikle analitik yardımcılar olarak çalışır.
      </p>
      <div class="footer-meta-links">
        <span>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tüm hakları saklıdır.</span>
      </div>
    </div>
  </div>
</footer>

<?php require __DIR__ . '/chat-widget.php'; ?>

<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset_version('static/js/main.js') ?>"></script>
<script src="<?= asset_version('static/js/chat.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>

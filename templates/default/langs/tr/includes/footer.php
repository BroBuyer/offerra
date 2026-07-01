<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <svg class="logo-mark" width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
          <rect width="28" height="28" rx="8" fill="currentColor"/>
          <path d="M8 18L14 8L20 18" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10 16H18" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round"/>
        </svg>
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Alt bilgi navigasyonu">
        <a href="<?= page_url() ?>">Ana Sayfa</a>
        <a href="product.php">Ürün</a>
        <a href="offer.php">Teklif</a>
        <a href="contacts.php">İletişim</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Gizlilik</a>
        <a href="conditions.php">Koşullar</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?>, bu web sitesindeki bilgilerin kullanımından doğan zarar veya kayıplardan sorumlu değildir.
        Finansal piyasalarda işlem yapmak risk içerir. Yalnızca kaybetmeyi göze alabileceğiniz sermaye ile yatırım yapın. Forex, CFD ve kripto varlıklar
        her yatırımcı için uygun olmayabilir. İşlem yapmadan önce nitelikli bir uzmana danışmayı değerlendirin.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tüm hakları saklıdır.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
</body>
</html>

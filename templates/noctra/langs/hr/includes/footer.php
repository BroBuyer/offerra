<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <svg class="logo-mark" width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
          <rect width="28" height="28" rx="8" fill="currentColor"/>
          <path d="M8 18L14 8L20 18" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10 16H18" stroke="#111827" stroke-width="2.2" stroke-linecap="round"/>
        </svg>
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Navigacija podnožja">
        <a href="<?= page_url() ?>">Početna</a>
        <a href="product.php">Proizvod</a>
        <a href="offer.php">Ponuda</a>
        <a href="contacts.php">Kontakt</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privatnost</a>
        <a href="conditions.php">Uvjeti</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nije odgovoran za gubitke ili štete nastale korištenjem informacija na ovoj stranici.
        Trgovanje na financijskim tržištima uključuje rizik. Ulažite samo sredstva koja si možete priuštiti izgubiti. FX, CFD-ovi i kriptovalute
        možda nisu prikladni za sve investitore. Prije trgovanja razmislite o savjetu kvalificiranog stručnjaka.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Sva prava pridržana.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>


<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>

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

      <nav class="footer-nav" aria-label="Nawigacja w stopce">
        <a href="<?= page_url() ?>">Strona główna</a>
        <a href="product.php">Produkt</a>
        <a href="offer.php">Oferta</a>
        <a href="contacts.php">Kontakt</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Prywatność</a>
        <a href="conditions.php">Regulamin</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nie ponosi odpowiedzialności za straty ani szkody wynikające z korzystania z informacji na tej stronie.
        Handel na rynkach finansowych wiąże się z ryzykiem. Inwestuj wyłącznie środki, których utratę możesz zaakceptować. Forex, CFD i kryptowaluty
        mogą nie być odpowiednie dla wszystkich inwestorów. Przed rozpoczęciem handlu rozważ konsultację z wykwalifikowanym specjalistą.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
<?php if (function_exists('offer_vitals_boot')) { offer_vitals_boot(); } ?>
</body>
</html>

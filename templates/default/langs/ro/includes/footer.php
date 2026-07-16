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

      <nav class="footer-nav" aria-label="Navigazione footer">
        <a href="<?= page_url() ?>">Acasă</a>
        <a href="product.php">Produs</a>
        <a href="offer.php">Ofertă</a>
        <a href="contacts.php">Contact</a>
        <a href="faq.php">Întrebări frecvente</a>
        <a href="privacy.php">Confidențialitate</a>
        <a href="conditions.php">Termini</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nu este responsabil pentru pierderi sau daune rezultate din utilizarea informațiilor de pe acest site.
        Tranzacționarea pe piețele financiare implică riscuri. Investește doar fonduri pe care ți le permiți să le pierzi. Forex, CFD și criptomonede
        s-ar putea să nu fie potrivite pentru toți investitorii. Înainte de a opera, ia în considerare consultarea unui profesionist calificat.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tutti i diritti riservati.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
</body>
</html>

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

      <nav class="footer-nav" aria-label="Πλοήγηση υποσέλιδου">
        <a href="<?= page_url() ?>">Αρχική</a>
        <a href="product.php">Προϊόν</a>
        <a href="offer.php">Προσφορά</a>
        <a href="contacts.php">Επικοινωνία</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Απόρρητο</a>
        <a href="conditions.php">Όροι</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        Η <?= e(SITE_NAME) ?> δεν φέρει ευθύνη για ζημίες ή απώλειες που προκύπτουν από τη χρήση των πληροφοριών αυτού του ιστότοπου.
        Η διαπραγμάτευση στις χρηματοπιστωτικές αγορές ενέχει κινδύνους. Επενδύστε μόνο κεφάλαια που μπορείτε να χάσετε. Forex, CFD και κρυπτονομίσματα
        ενδέχεται να μην είναι κατάλληλα για όλους τους επενδυτές. Πριν ξεκινήσετε, εξετάστε τη συμβουλή ενός εξειδικευμένου επαγγελματία.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Με επιφύλαξη παντός δικαιώματος.</p>
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

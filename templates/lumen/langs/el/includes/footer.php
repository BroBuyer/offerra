<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Πλοήγηση υποσέλιδου">
        <a href="<?= page_url() ?>">Αρχική</a>
        <a href="product.php">Πλατφόρμα</a>
        <a href="offer.php">Τιμολόγηση</a>
        <a href="contacts.php">Επικοινωνία</a>
        <a href="faq.php">Συχνές ερωτήσεις</a>
        <a href="privacy.php">Απόρρητο</a>
        <a href="conditions.php">Όροι</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> δεν φέρει ευθύνη για ζημίες ή απώλειες που προκύπτουν από τη χρήση πληροφοριών σε αυτόν τον ιστότοπο. Η διαπραγμάτευση στις χρηματοπιστωτικές αγορές ενέχει κινδύνους. Επενδύστε μόνο κεφάλαια που μπορείτε να αντέξετε να χάσετε. Το FX, τα CFD και τα κρυπτονομίσματα ενδέχεται να μην είναι κατάλληλα για όλους τους επενδυτές. Εξετάστε το ενδεχόμενο συμβουλής από εξειδικευμένο επαγγελματία πριν διαπραγματευτείτε.
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

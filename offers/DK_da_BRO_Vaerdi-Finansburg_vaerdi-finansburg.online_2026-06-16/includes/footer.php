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

      <nav class="footer-nav" aria-label="Footer navigation">
        <a href="<?= page_url() ?>">Forside</a>
        <a href="product.php">Produkt</a>
        <a href="offer.php">Tilbud</a>
        <a href="contacts.php">Kontakt</a>
        <a href="privacy.php">Privatliv</a>
        <a href="conditions.php">Vilkår</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> er ikke ansvarlig for tab eller skader, der opstår som følge af brugen af oplysningerne på dette website.
        Handel på finansielle markeder indebærer risiko. Investér kun midler, som du har råd til at tabe. FX, CFD’er og kryptovaluta
        er muligvis ikke egnet for alle investorer. Overvej at søge uafhængig rådgivning fra en kvalificeret fagperson, før du handler.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alle rettigheder forbeholdes.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset('integration/validation.js') ?>"></script>
<script src="<?= asset('assets/js/main.js') ?>"></script>
</body>
</html>

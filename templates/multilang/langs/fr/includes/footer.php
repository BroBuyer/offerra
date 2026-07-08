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

      <nav class="footer-nav" aria-label="Navigation du pied de page">
        <a href="<?= page_url() ?>">Accueil</a>
        <a href="product.php">Produit</a>
        <a href="offer.php">Offre</a>
        <a href="contacts.php">Contact</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Confidentialité</a>
        <a href="conditions.php">Conditions</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> décline toute responsabilité en cas de pertes ou de dommages résultant de l'utilisation des informations sur ce site.
        Le trading sur les marchés financiers comporte des risques. N'investissez que des fonds que vous pouvez vous permettre de perdre. Le forex, les CFD et les cryptomonnaies
        peuvent ne pas convenir à tous les investisseurs. Envisagez de consulter un professionnel qualifié avant de trader.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tous droits réservés.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
</body>
</html>

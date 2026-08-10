<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Navegación del pie">
        <a href="<?= page_url() ?>">Inicio</a>
        <a href="product.php">Plataforma</a>
        <a href="offer.php">Precios</a>
        <a href="contacts.php">Contacto</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privacidad</a>
        <a href="conditions.php">Términos</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> no se responsabiliza de pérdidas o daños derivados del uso de la información de este sitio. Operar en los mercados financieros implica riesgo. Invierta solo capital que pueda permitirse perder. El FX, los CFD y las criptomonedas pueden no ser adecuados para todos los inversores. Considere asesoramiento profesional antes de operar.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos los derechos reservados.</p>
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

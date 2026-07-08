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

      <nav class="footer-nav" aria-label="Navegacion del pie de pagina">
        <a href="<?= page_url() ?>">Inicio</a>
        <a href="product.php">Producto</a>
        <a href="offer.php">Oferta</a>
        <a href="contacts.php">Contacto</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privacidad</a>
        <a href="conditions.php">Terminos</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> no se hace responsable de perdidas ni danos derivados del uso de la informacion de este sitio web.
        Operar en los mercados financieros implica riesgos. Invierte solo fondos que puedas permitirte perder. Forex, CFD y criptomonedas
        pueden no ser adecuados para todos los inversores. Antes de operar, considera consultar con un profesional cualificado.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos los derechos reservados.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
</body>
</html>

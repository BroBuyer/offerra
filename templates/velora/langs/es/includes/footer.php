<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> inicio">
            <div class="logo-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width:60%;height:60%;">
                <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
                <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
                <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
                <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
              </svg>
            </div>
            <span><?= e(SITE_NAME) ?></span>
          </a>
          <p>Un entorno de análisis moderno con un seguimiento claro de datos en activos globales.</p>
        </div>

        <div class="footer-links-col">
          <h4>Plataforma</h4>
          <ul>
            <li><a href="<?= e(page_url()) ?>#platform">Interfaz</a></li>
            <li><a href="<?= e(page_url()) ?>#features">Funciones</a></li>
            <li><a href="<?= e(page_url()) ?>#markets">Resumen de mercados</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Páginas</h4>
          <ul>
            <li><a href="product.php">Acerca de</a></li>
            <li><a href="contacts.php">Contacto</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="sign.php">Registrarse</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Legal</h4>
          <ul>
            <li><a href="conditions.php">Términos de uso</a></li>
            <li><a href="privacy.php">Política de privacidad</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="disclaimer">
        <strong>⚠️ Aviso de riesgo:</strong>
        Operar con activos digitales e instrumentos globales implica una alta volatilidad del mercado.
        Mantén el control total de la configuración de tu estrategia. Las métricas automatizadas en <?= e(SITE_NAME) ?>
        funcionan estrictamente como ayudas analíticas.
      </p>
      <div class="footer-meta-links">
        <span>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos los derechos reservados.</span>
      </div>
    </div>
  </div>
</footer>

<?php require __DIR__ . '/chat-widget.php'; ?>

<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset_version('static/js/main.js') ?>"></script>
<script src="<?= asset_version('static/js/chat.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>

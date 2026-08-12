<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Política de privacidad');
$page_description = 'Cómo ' . SITE_NAME . ' recoge, utiliza y protege tus datos personales.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Principal">
      <a href="<?= page_url() ?>#platform">Plataforma</a>
      <a href="<?= page_url() ?>#how">Cómo funciona</a>
      <a href="<?= page_url() ?>#markets">Mercados</a>
      <a href="<?= page_url() ?>#faq">Preguntas frecuentes</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Empezar</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Información legal</span>
      <h1>Política de privacidad</h1>
      <p class="lede">Cómo <?= e(SITE_NAME) ?> recoge, utiliza y protege tus datos personales.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Última actualización: enero de 2025</p>

      <h2>1. Introducción</h2>
      <p><?= e(SITE_NAME) ?> (« nosotros », « nuestra », « nuestros ») se compromete a proteger la privacidad de visitantes y clientes. Esta Política de privacidad explica qué datos personales recogemos, por qué y cómo los tratamos cuando utilizas nuestro sitio y servicios.</p>

      <h2>2. Información que recopilamos</h2>
      <ul>
        <li>Datos de identidad — nombre, fecha de nacimiento, documentos de identificación emitidos por el gobierno para el registro y el cumplimiento KYC/AML.</li>
        <li>Datos de contacto — correo electrónico, número de teléfono, dirección postal.</li>
        <li>Datos financieros — detalles de pago, historial de transacciones, información sobre el origen de los fondos.</li>
        <li>Datos técnicos — dirección IP, tipo de navegador, identificadores de dispositivo, cookies y análisis de uso.</li>
      </ul>

      <h2>3. Cómo utilizamos tus datos</h2>
      <ul>
        <li>Para verificar la identidad y cumplir obligaciones regulatorias.</li>
        <li>Para proporcionar, mantener y mejorar nuestra plataforma y servicios.</li>
        <li>Para procesar pagos y detectar actividades fraudulentas.</li>
        <li>Para comunicarnos contigo sobre tu cuenta, actualizaciones y solicitudes de soporte.</li>
        <li>Para enviar comunicaciones de marketing cuando hayas consentido (puedes darte de baja en cualquier momento).</li>
      </ul>

      <h2>4. Base legal</h2>
      <p>Tratamos datos personales basándonos en uno o más de los siguientes fundamentos legítimos: ejecución de un contrato, cumplimiento de una obligación legal, nuestros intereses legítimos, o tu consentimiento.</p>

      <h2>5. Compartición y divulgación</h2>
      <p>Podemos compartir datos personales con proveedores de pago regulados, socios de verificación KYC/AML, proveedores de infraestructura en la nube, asesores profesionales y autoridades competentes cuando lo exija la ley. No vendemos datos personales.</p>

      <h2>6. Transferencias internacionales</h2>
      <p>Cuando se transfieren datos personales fuera de tu jurisdicción, garantizamos que existan salvaguardas adecuadas, incluidas cláusulas contractuales tipo.</p>

      <h2>7. Conservación de datos</h2>
      <p>Conservamos datos personales durante el tiempo necesario para prestar servicios y cumplir requisitos legales, regulatorios y contables — normalmente al menos cinco años tras el cierre de la cuenta.</p>

      <h2>8. Tus derechos</h2>
      <p>Sujeto a la ley aplicable, puedes solicitar acceso, corrección, eliminación, restricción o portabilidad de tus datos personales, y oponerte a determinado tratamiento. Para ejercer estos derechos, contáctanos en la dirección siguiente.</p>

      <h2>9. Cookies</h2>
      <p>Utilizamos cookies esenciales y analíticos para operar el sitio y comprender el uso. Puedes gestionar las cookies en la configuración de tu navegador.</p>

      <h2>10. Seguridad</h2>
      <p>Aplicamos salvaguardas administrativas, técnicas y físicas diseñadas para proteger los datos personales frente a acceso no autorizado, divulgación, alteración o destrucción. Ningún sistema es perfectamente seguro y no podemos garantizar una seguridad absoluta.</p>

      <h2>11. Cambios</h2>
      <p>Podemos actualizar esta Política de vez en cuando. La versión más reciente estará siempre disponible en esta página con la fecha actualizada.</p>

      <h2>12. Contacto</h2>
      <p>Para cuestiones de privacidad o para ejercer tus derechos, contacta al equipo de Protección de Datos <?= e(SITE_NAME) ?> a través de nuestra <a href="<?= page_url('contacts.php') ?>">página de contacto</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Volver a la página de inicio</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos los derechos reservados ·
      <a href="<?= page_url('privacy.php') ?>">Privacidad</a> ·
      <a href="<?= page_url('conditions.php') ?>">Términos</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

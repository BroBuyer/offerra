<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Política de privacidad');
$page_description = 'Descubre cómo ' . SITE_NAME . ' recoge, usa y protege tus datos personales.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Política de privacidad</h1>
      <p class="lead">Última actualización: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Esta Política de privacidad describe cómo <?= e(SITE_NAME) ?> («nosotros») recoge y trata la información personal cuando usas nuestro sitio web y nuestros servicios.</p>

      <h2>Información que recogemos</h2>
      <p>Podemos recoger: nombre, dirección de correo electrónico, número de teléfono, país de residencia, dirección IP e información que facilitas mediante formularios o solicitudes de soporte.</p>

      <h2>Cómo usamos tu información</h2>
      <ul>
        <li>Para crear y gestionar tu cuenta</li>
        <li>Para dar acceso a la plataforma de trading y soporte al cliente</li>
        <li>Para cumplir obligaciones legales y regulatorias</li>
        <li>Para mejorar nuestros servicios y prevenir el fraude</li>
      </ul>

      <h2>Seguridad de los datos</h2>
      <p>Aplicamos medidas técnicas y organizativas, incluido el cifrado SSL y controles de acceso, para proteger tus datos.</p>

      <h2>Tus derechos</h2>
      <p>Según tu jurisdicción, puedes tener derechos de acceso, corrección o eliminación de tus datos personales. Contacta con <?= e(SUPPORT_EMAIL) ?> para ejercer estos derechos.</p>

      <h2>Contacto</h2>
      <p>¿Preguntas sobre esta política? Escribe a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

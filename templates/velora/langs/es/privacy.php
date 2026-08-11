<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Política de privacidad');
$page_description = 'Descubre cómo ' . SITE_NAME . ' recopila, utiliza y protege tus datos personales.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Política de privacidad</h1>
      <p class="lead">Última actualización: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Esta Política de privacidad describe cómo <?= e(SITE_NAME) ?> («nosotros») recopila y trata información personal cuando utilizas nuestro sitio web y servicios.</p>

      <h2>Información que recopilamos</h2>
      <p>Podemos recopilar: nombre, dirección de correo electrónico, número de teléfono, país de residencia, dirección IP e información que nos facilitas mediante formularios o solicitudes de soporte.</p>

      <h2>Cómo utilizamos tu información</h2>
      <ul>
        <li>Para crear y gestionar tu cuenta</li>
        <li>Para ofrecer acceso a la plataforma de trading y soporte al cliente</li>
        <li>Para cumplir obligaciones legales y regulatorias</li>
        <li>Para mejorar nuestros servicios y prevenir el fraude</li>
      </ul>

      <h2>Seguridad de los datos</h2>
      <p>Aplicamos medidas técnicas y organizativas, incluida la encriptación SSL y controles de acceso, para proteger tus datos.</p>

      <h2>Tus derechos</h2>
      <p>Según tu jurisdicción, puedes tener derechos para acceder, corregir o eliminar tus datos personales. Contacta con <?= e(SUPPORT_EMAIL) ?> para ejercer estos derechos.</p>

      <h2>Contacto</h2>
      <p>¿Preguntas sobre esta política? Escribe a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

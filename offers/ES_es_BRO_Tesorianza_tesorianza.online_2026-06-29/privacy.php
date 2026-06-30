<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Política de privacidad');
$page_description = 'Descubrí cómo ' . SITE_NAME . ' recopila, utiliza y protege tus datos personales.';
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
      <p>Esta Política describe cómo <?= e(SITE_NAME) ?> recopila y trata la información personal cuando utilizás nuestro sitio y nuestros servicios.</p>

      <h2>Información que recopilamos</h2>
      <p>Podemos recopilar: nombre, dirección de correo electrónico, número de teléfono, país de residencia, dirección IP e información proporcionada a través de formularios o solicitudes de asistencia.</p>

      <h2>Cómo utilizamos la información</h2>
      <ul>
        <li>Para crear y gestionar tu cuenta</li>
        <li>Para brindar acceso a la plataforma y atención al cliente</li>
        <li>Para cumplir obligaciones legales y normativas</li>
        <li>Para mejorar los servicios y prevenir fraudes</li>
      </ul>

      <h2>Seguridad de los datos</h2>
      <p>Adoptamos medidas técnicas y organizativas, incluido el cifrado SSL y controles de acceso, para proteger tus datos.</p>

      <h2>Tus derechos</h2>
      <p>Según tu jurisdicción, podés tener derecho a acceder, corregir o eliminar tus datos personales. Contactá a <?= e(SUPPORT_EMAIL) ?> para ejercer esos derechos.</p>

      <h2>Contacto</h2>
      <p>¿Preguntas sobre esta política? Escribí a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

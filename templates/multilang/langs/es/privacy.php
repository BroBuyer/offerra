<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politica de privacidad');
$page_description = 'Descubre como ' . SITE_NAME . ' recopila, usa y protege tus datos personales.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politica de privacidad</h1>
      <p class="lead">Ultima actualizacion: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Esta Politica de privacidad describe como <?= e(SITE_NAME) ?> ("nosotros") recopila y trata datos personales al utilizar nuestro sitio web y servicios.</p>

      <h2>Que informacion recopilamos</h2>
      <p>Podemos recopilar: nombre, direccion de correo electronico, numero de telefono, pais de residencia, direccion IP e informacion que nos facilites mediante formularios o solicitudes de soporte.</p>

      <h2>Como utilizamos tu informacion</h2>
      <ul>
        <li>Para crear y gestionar tu cuenta</li>
        <li>Para proporcionar acceso a la plataforma de trading y soporte al cliente</li>
        <li>Para cumplir obligaciones legales y regulatorias</li>
        <li>Para mejorar nuestros servicios y prevenir el fraude</li>
      </ul>

      <h2>Seguridad de los datos</h2>
      <p>Aplicamos medidas tecnicas y organizativas, incluido cifrado SSL y control de accesos, para proteger tus datos.</p>

      <h2>Tus derechos</h2>
      <p>Segun tu jurisdiccion, puedes tener derecho de acceso, rectificacion o supresion de datos personales. Para ejercer estos derechos, contacta con <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Contacto</h2>
      <p>Tienes preguntas sobre esta politica? Escribenos a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

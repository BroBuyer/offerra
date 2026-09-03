<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Terminos de uso');
$page_description = 'Read the terms and conditions for using the ' . SITE_NAME . ' trading platform and website.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Terminos de uso</h1>
      <p class="lead">Ultima actualizacion: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Al acceder a <?= e(SITE_NAME) ?> aceptas estos terminos de uso. Si no estas de acuerdo, no utilices nuestros servicios.</p>

      <h2>Elegibilidad</h2>
      <p>Debes ser mayor de 18 anos y estar legalmente autorizado para operar instrumentos financieros en tu jurisdiccion.</p>

      <h2>Aviso de riesgos</h2>
      <p>Operar criptomonedas, forex, CFD y otros instrumentos financieros conlleva un riesgo significativo de perdida. El rendimiento pasado no garantiza resultados futuros. Opera solo con capital que puedas permitirte perder.</p>

      <h2>Responsabilidad de la cuenta</h2>
      <p>Eres responsable de la confidencialidad de tus credenciales de acceso y de toda actividad realizada en tu cuenta.</p>

      <h2>Disponibilidad del servicio</h2>
      <p>Nos esforzamos por garantizar disponibilidad continua, pero no podemos asegurar acceso ininterrumpido. El mantenimiento, las condiciones del mercado o incidencias tecnicas pueden afectar al servicio.</p>

      <h2>Limitacion de responsabilidad</h2>
      <p><?= e(SITE_NAME) ?> no se hace responsable de perdidas de trading ni de danos derivados del uso de la informacion de este sitio web. Si es necesario, consulta con un asesor financiero independiente.</p>

      <h2>Contacto</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

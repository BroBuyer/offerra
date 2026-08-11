<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Términos de uso');
$page_description = 'Lee los términos y condiciones para utilizar la plataforma de trading y el sitio web ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Términos de uso</h1>
      <p class="lead">Last updated: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Al acceder a <?= e(SITE_NAME) ?> aceptas estos Términos de uso. Si no estás de acuerdo, no utilices nuestros servicios.</p>

      <h2>Requisitos</h2>
      <p>Debes tener al menos 18 años y estar legalmente autorizado a operar instrumentos financieros en tu jurisdicción.</p>

      <h2>Divulgación de riesgos</h2>
      <p>Operar criptomonedas, forex, CFD y otros instrumentos financieros implica un riesgo significativo de pérdidas. El rendimiento pasado no garantiza resultados futuros. Opera únicamente con el capital que puedas permitirte perder.</p>

      <h2>Responsabilidades de la cuenta</h2>
      <p>Eres responsable de mantener la confidencialidad de las credenciales de tu cuenta y de toda actividad realizada con tu cuenta.</p>

      <h2>Disponibilidad del servicio</h2>
      <p>Nos esforzamos por ofrecer disponibilidad continua, pero no garantizamos el acceso ininterrumpido. El mantenimiento, las condiciones del mercado o problemas técnicos pueden afectar el servicio.</p>

      <h2>Limitación de responsabilidad</h2>
      <p><?= e(SITE_NAME) ?> no se hace responsable de pérdidas de trading o daños derivados del uso de la información en este sitio. Busca asesoramiento financiero independiente cuando corresponda.</p>

      <h2>Contacto</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

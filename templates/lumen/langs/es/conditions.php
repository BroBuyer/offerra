<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Términos de uso');
$page_description = 'Lee los términos y condiciones de uso de la plataforma de trading y el sitio web de ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Términos de uso</h1>
      <p class="lead">Última actualización: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Al acceder a <?= e(SITE_NAME) ?> aceptas estos Términos de uso. Si no estás de acuerdo, no uses nuestros servicios.</p>

      <h2>Elegibilidad</h2>
      <p>Debes tener al menos 18 años y estar legalmente autorizado a operar con instrumentos financieros en tu jurisdicción.</p>

      <h2>Aviso de riesgos</h2>
      <p>Operar con criptomonedas, forex, CFD y otros instrumentos financieros implica un riesgo sustancial de pérdida. El rendimiento pasado no garantiza resultados futuros. Opera solo con capital que puedas permitirte perder.</p>

      <h2>Responsabilidades de la cuenta</h2>
      <p>Eres responsable de mantener la confidencialidad de tus credenciales de cuenta y de toda la actividad realizada bajo tu cuenta.</p>

      <h2>Disponibilidad del servicio</h2>
      <p>Buscamos una disponibilidad continua, pero no garantizamos un acceso ininterrumpido. El mantenimiento, las condiciones de mercado o problemas técnicos pueden afectar al servicio.</p>

      <h2>Limitación de responsabilidad</h2>
      <p><?= e(SITE_NAME) ?> no es responsable de pérdidas de trading ni de daños derivados del uso de la información de este sitio. Busca asesoramiento financiero independiente cuando corresponda.</p>

      <h2>Contacto</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

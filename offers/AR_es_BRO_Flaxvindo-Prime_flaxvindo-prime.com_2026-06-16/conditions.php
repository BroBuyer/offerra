<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Términos de uso');
$page_description = 'Leé los términos y condiciones para el uso del sitio y la plataforma de ' . SITE_NAME . '.';
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
      <p>Al acceder a <?= e(SITE_NAME) ?> aceptás los presentes Términos de uso. Si no estás de acuerdo, te pedimos que no utilices nuestros servicios.</p>

      <h2>Elegibilidad</h2>
      <p>Debés tener al menos 18 años y estar legalmente autorizado a operar instrumentos financieros en tu jurisdicción.</p>

      <h2>Advertencia de riesgos</h2>
      <p>Operar criptomonedas, forex, CFD y otros instrumentos financieros implica un riesgo significativo de pérdida. El rendimiento pasado no garantiza resultados futuros. Operá solo con capital que puedas permitirte perder.</p>

      <h2>Responsabilidad de la cuenta</h2>
      <p>Sos responsable de mantener confidenciales las credenciales de tu cuenta y de todas las actividades realizadas a través de tu cuenta.</p>

      <h2>Disponibilidad del servicio</h2>
      <p>Buscamos garantizar la continuidad del servicio, pero no aseguramos un acceso ininterrumpido. El mantenimiento, las condiciones de mercado o los problemas técnicos pueden afectar la disponibilidad.</p>

      <h2>Limitación de responsabilidad</h2>
      <p><?= e(SITE_NAME) ?> no es responsable por pérdidas de trading o daños derivados del uso de la información presente en este sitio. Si corresponde, solicitá asesoramiento financiero independiente.</p>

      <h2>Contacto</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

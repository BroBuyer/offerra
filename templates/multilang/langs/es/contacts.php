<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contacta con el soporte de ' . SITE_NAME . ' o con nuestro equipo de trading. Estamos disponibles 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Estamos aqui para ayudarte</h1>
      <p class="lead">Soporte profesional 24/7 para consultas de cuenta, trading y cuestiones tecnicas.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Soporte por correo</h3>
          <p style="margin-bottom: 1rem;">Para consultas generales y ayuda con tu cuenta:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tiempo de respuesta</h3>
          <p>Respondemos a la mayoria de solicitudes en pocas horas. Las consultas urgentes de trading se atienden con prioridad.</p>
        </article>
        <article class="feature-card">
          <h3>Listo para empezar?</h3>
          <p style="margin-bottom: 1rem;">Abre tu cuenta en minutos, sin necesidad de llamada.</p>
          <a href="sign.php" class="btn btn-primary">Crear cuenta</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

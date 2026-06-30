<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contactá a la asistencia de ' . SITE_NAME . ' o a nuestro equipo. Estamos disponibles 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Estamos acá para ayudarte</h1>
      <p class="lead">Asistencia profesional 24/7 para consultas sobre cuenta, trading y aspectos técnicos.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Asistencia por correo</h3>
          <p style="margin-bottom: 1rem;">Para consultas generales y soporte de cuenta:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tiempos de respuesta</h3>
          <p>La mayoría de las consultas reciben respuesta en pocas horas. Las urgencias relacionadas con trading tienen prioridad.</p>
        </article>
        <article class="feature-card">
          <h3>¿Listo para empezar?</h3>
          <p style="margin-bottom: 1rem;">Abrí una cuenta en pocos minutos — sin necesidad de llamadas.</p>
          <a href="sign.php" class="btn btn-primary">Crear cuenta</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

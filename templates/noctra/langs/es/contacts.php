<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contacta con el soporte de ' . SITE_NAME . ' — ayuda de cuenta, trading y técnica disponible 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Habla con soporte</h1>
      <p class="lead">Preguntas de cuenta, trading y técnicas — atendidas a cualquier hora.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Soporte por correo</h3>
          <p style="margin-bottom: 1rem;">Para solicitudes de cuenta y generales:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tiempo de respuesta</h3>
          <p>La mayoría de tickets se resuelven en unas horas. Los problemas de trading en vivo tienen prioridad.</p>
        </article>
        <article class="feature-card">
          <h3>¿Prefieres hacerlo tú?</h3>
          <p style="margin-bottom: 1rem;">Abre una cuenta en minutos — sin llamada.</p>
          <a href="sign.php" class="btn btn-primary">Crear cuenta</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

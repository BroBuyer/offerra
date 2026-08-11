<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Página no encontrada');
$page_description = 'No se pudo encontrar la página solicitada en ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Página no encontrada</h1>
      <p class="lead">Ese enlace no existe. Vuelve al inicio o abre una cuenta para empezar.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Volver al inicio</a>
        <a href="sign.php" class="btn btn-ghost">Abrir cuenta</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

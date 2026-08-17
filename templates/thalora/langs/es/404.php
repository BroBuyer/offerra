<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Página no encontrada');
$page_description = 'No se ha encontrado la página solicitada en ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Página no encontrada</h1>
      <p>Ese enlace no existe. Vuelve al inicio o abre una cuenta para empezar.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Volver al inicio</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Abrir cuenta</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

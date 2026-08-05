<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Página no encontrada');
$page_description = 'La página solicitada no está disponible. Vuelve a ' . SITE_NAME . ' para seguir operando.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="not-found">
    <div class="container">
      <div class="not-found-code" aria-hidden="true">404</div>
      <p class="eyebrow" style="justify-content: center;">Página no encontrada</p>
      <h1>Esta página no existe</h1>
      <p class="lead">
        Es posible que el enlace esté desactualizado o mal escrito. Vuelve a la página de inicio para continuar.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Volver al inicio</a>
        <a href="contacts.php" class="btn btn-outline">Contactar con soporte</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

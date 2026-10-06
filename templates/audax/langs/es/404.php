<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Página no encontrada | ' . SITE_NAME;
$page_description = 'Página no encontrada — ' . SITE_NAME;
$page_canonical = page_url('404.php');
$active_page = '404';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
$page_noindex = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Página no encontrada</h1>
            <p>Este enlace no existe. <a href="<?= page_url() ?>">Volver al inicio</a>.</p>
            <p>
              También puedes <a href="<?= page_url('sign.php') ?>">abrir una cuenta</a> o
              <a href="<?= page_url('contacts.php') ?>">contactarnos</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

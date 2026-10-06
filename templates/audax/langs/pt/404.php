<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Página não encontrada | ' . SITE_NAME;
$page_description = 'Página não encontrada — ' . SITE_NAME;
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
            <h1>Página não encontrada</h1>
            <p>Esta ligação não existe. <a href="<?= page_url() ?>">Voltar ao início</a>.</p>
            <p>
              Também podes <a href="<?= page_url('sign.php') ?>">abrir uma conta</a> ou
              <a href="<?= page_url('contacts.php') ?>">contactar-nos</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Pagina non trovata | ' . SITE_NAME;
$page_description = 'Pagina non trovata — ' . SITE_NAME;
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
            <h1>Pagina non trovata</h1>
            <p>Questo link non esiste. <a href="<?= page_url() ?>">Torna alla home</a>.</p>
            <p>
              Puoi anche <a href="<?= page_url('sign.php') ?>">aprire un conto</a> o
              <a href="<?= page_url('contacts.php') ?>">contattarci</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

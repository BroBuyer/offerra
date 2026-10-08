<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Lapa nav atrasta | ' . SITE_NAME;
$page_description = 'Lapa nav atrasta — ' . SITE_NAME;
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
            <h1>Lapa nav atrasta</h1>
            <p>Šī saite nepastāv. <a href="<?= page_url() ?>">Atpakaļ uz sākumu</a>.</p>
            <p>
              Varat arī <a href="<?= page_url('sign.php') ?>">atvērt kontu</a> vai
              <a href="<?= page_url('contacts.php') ?>">sazināties ar mums</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

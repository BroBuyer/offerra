<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Pagina nu a fost găsită | ' . SITE_NAME;
$page_description = 'Pagina nu a fost găsită — ' . SITE_NAME;
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
            <h1>Pagina nu a fost găsită</h1>
            <p>Această legătură nu există. <a href="<?= page_url() ?>">Înapoi la pagina principală</a>.</p>
            <p>
              Poți și <a href="<?= page_url('sign.php') ?>">să deschizi un cont</a> sau
              <a href="<?= page_url('contacts.php') ?>">să ne contactezi</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

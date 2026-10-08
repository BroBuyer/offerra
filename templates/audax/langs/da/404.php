<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Siden blev ikke fundet | ' . SITE_NAME;
$page_description = 'Siden blev ikke fundet — ' . SITE_NAME;
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
            <h1>Siden blev ikke fundet</h1>
            <p>Dette link findes ikke. <a href="<?= page_url() ?>">Til forsiden</a>.</p>
            <p>
              Du kan også <a href="<?= page_url('sign.php') ?>">åbne en konto</a> eller
              <a href="<?= page_url('contacts.php') ?>">kontakte os</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

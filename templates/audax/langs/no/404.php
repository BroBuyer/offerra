<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Siden ble ikke funnet | ' . SITE_NAME;
$page_description = 'Siden ble ikke funnet — ' . SITE_NAME;
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
            <h1>Siden ble ikke funnet</h1>
            <p>Denne lenken finnes ikke. <a href="<?= page_url() ?>">Til forsiden</a>.</p>
            <p>
              Du kan også <a href="<?= page_url('sign.php') ?>">åpne en konto</a> eller
              <a href="<?= page_url('contacts.php') ?>">kontakte oss</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

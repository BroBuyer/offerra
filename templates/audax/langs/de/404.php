<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Seite nicht gefunden | ' . SITE_NAME;
$page_description = 'Seite nicht gefunden — ' . SITE_NAME;
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
            <h1>Seite nicht gefunden</h1>
            <p>Dieser Link existiert nicht. <a href="<?= page_url() ?>">Zur Startseite</a>.</p>
            <p>
              Sie können auch <a href="<?= page_url('sign.php') ?>">ein Konto eröffnen</a> oder
              <a href="<?= page_url('contacts.php') ?>">uns kontaktieren</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

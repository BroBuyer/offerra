<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Stránka nenájdená | ' . SITE_NAME;
$page_description = 'Stránka nenájdená — ' . SITE_NAME;
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
            <h1>Stránka nenájdená</h1>
            <p>Tento odkaz neexistuje. <a href="<?= page_url() ?>">Na úvodnú stránku</a>.</p>
            <p>
              Môžete tiež <a href="<?= page_url('sign.php') ?>">otvoriť účet</a> alebo
              <a href="<?= page_url('contacts.php') ?>">nás kontaktovať</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

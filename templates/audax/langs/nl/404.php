<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Pagina niet gevonden | ' . SITE_NAME;
$page_description = 'Pagina niet gevonden — ' . SITE_NAME;
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
            <h1>Pagina niet gevonden</h1>
            <p>Deze link bestaat niet. <a href="<?= page_url() ?>">Naar de homepage</a>.</p>
            <p>
              Je kunt ook <a href="<?= page_url('sign.php') ?>">een account openen</a> of
              <a href="<?= page_url('contacts.php') ?>">contact met ons opnemen</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

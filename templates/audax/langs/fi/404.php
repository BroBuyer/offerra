<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Sivua ei löytynyt | ' . SITE_NAME;
$page_description = 'Sivua ei löytynyt — ' . SITE_NAME;
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
            <h1>Sivua ei löytynyt</h1>
            <p>Linkkiä ei ole olemassa. <a href="<?= page_url() ?>">Takaisin etusivulle</a>.</p>
            <p>
              Voit myös <a href="<?= page_url('sign.php') ?>">avata tilin</a> tai
              <a href="<?= page_url('contacts.php') ?>">ottaa meihin yhteyttä</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

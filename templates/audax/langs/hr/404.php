<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Stranica nije pronađena | ' . SITE_NAME;
$page_description = 'Stranica nije pronađena — ' . SITE_NAME;
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
            <h1>Stranica nije pronađena</h1>
            <p>Ta poveznica ne postoji. <a href="<?= page_url() ?>">Natrag na početnu</a>.</p>
            <p>
              Možeš i <a href="<?= page_url('sign.php') ?>">otvoriti račun</a> ili
              <a href="<?= page_url('contacts.php') ?>">nas kontaktirati</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

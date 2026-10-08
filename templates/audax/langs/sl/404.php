<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Stran ni najdena | ' . SITE_NAME;
$page_description = 'Stran ni najdena — ' . SITE_NAME;
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
            <h1>Stran ni najdena</h1>
            <p>Ta povezava ne obstaja. <a href="<?= page_url() ?>">Nazaj na začetno</a>.</p>
            <p>
              Lahko tudi <a href="<?= page_url('sign.php') ?>">odpreš račun</a> ali
              <a href="<?= page_url('contacts.php') ?>">nas kontaktiraš</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

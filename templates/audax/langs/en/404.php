<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Page not found | ' . SITE_NAME;
$page_description = 'Page not found — ' . SITE_NAME;
$page_canonical = page_url('404.php');
$active_page = '404';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Page not found</h1>
            <p>That link does not exist. <a href="<?= page_url() ?>">Back to home</a>.</p>
            <p>
              You can also <a href="<?= page_url('sign.php') ?>">open an account</a> or
              <a href="<?= page_url('contacts.php') ?>">contact us</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

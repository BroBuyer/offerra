<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Nie znaleziono strony | ' . SITE_NAME;
$page_description = 'Nie znaleziono strony — ' . SITE_NAME;
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
            <h1>Nie znaleziono strony</h1>
            <p>Ten link nie istnieje. <a href="<?= page_url() ?>">Na stronę główną</a>.</p>
            <p>
              Możesz też <a href="<?= page_url('sign.php') ?>">otworzyć konto</a> albo
              <a href="<?= page_url('contacts.php') ?>">skontaktować się z nami</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

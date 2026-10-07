<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Az oldal nem található | ' . SITE_NAME;
$page_description = 'Az oldal nem található — ' . SITE_NAME;
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
            <h1>Az oldal nem található</h1>
            <p>Ez a hivatkozás nem létezik. <a href="<?= page_url() ?>">Vissza a kezdőlapra</a>.</p>
            <p>
              Nyithatsz <a href="<?= page_url('sign.php') ?>">számlát</a> is, vagy
              <a href="<?= page_url('contacts.php') ?>">lépj velünk kapcsolatba</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

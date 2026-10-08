<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Mulțumim | ' . SITE_NAME;
$page_description = 'Cererea ta a fost primită de echipa ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
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
            <h1>Mulțumim — te contactăm</h1>
            <p>
              Cererea ta a fost primită de echipa <?= e(SITE_NAME) ?>. Un specialist te va
              contacta în curând ca să te ajute să începi.
            </p>
            <p>
              Între timp poți citi mai multe despre
              <a href="<?= page_url('product.php') ?>">cum funcționează platforma</a> sau răsfoiește
              <a href="<?= page_url('faq.php') ?>">întrebările frecvente</a>.
            </p>
            <p><a href="<?= page_url() ?>">Înapoi la pagina principală</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

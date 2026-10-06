<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Vielen Dank | ' . SITE_NAME;
$page_description = 'Ihre Anfrage ist beim Team von ' . SITE_NAME . ' eingegangen.';
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
            <h1>Vielen Dank — wir melden uns</h1>
            <p>
              Ihre Anfrage ist beim Team von <?= e(SITE_NAME) ?> eingegangen. Ein Spezialist
              meldet sich in Kürze, um Ihnen den Einstieg zu erleichtern.
            </p>
            <p>
              In der Zwischenzeit können Sie mehr über
              <a href="<?= page_url('product.php') ?>">die Funktionsweise der Plattform</a> erfahren oder die
              <a href="<?= page_url('faq.php') ?>">häufigen Fragen</a>.
            </p>
            <p><a href="<?= page_url() ?>">Zur Startseite</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

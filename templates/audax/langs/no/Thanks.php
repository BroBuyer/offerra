<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Takk | ' . SITE_NAME;
$page_description = 'Forespørselen din er mottatt av teamet hos ' . SITE_NAME . '.';
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
            <h1>Takk — vi tar kontakt</h1>
            <p>
              Forespørselen din er mottatt av teamet hos <?= e(SITE_NAME) ?>. En spesialist
              tar snart kontakt for å hjelpe deg i gang.
            </p>
            <p>
              I mellomtiden kan du lese mer om
              <a href="<?= page_url('product.php') ?>">hvordan plattformen fungerer</a> eller se
              <a href="<?= page_url('faq.php') ?>">ofte stilte spørsmål</a>.
            </p>
            <p><a href="<?= page_url() ?>">Til forsiden</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

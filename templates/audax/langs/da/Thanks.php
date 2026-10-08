<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tak | ' . SITE_NAME;
$page_description = 'Din forespørgsel er modtaget af teamet hos ' . SITE_NAME . '.';
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
            <h1>Tak — vi tager kontakt</h1>
            <p>
              Din forespørgsel er modtaget af teamet hos <?= e(SITE_NAME) ?>. En specialist
              tager snart kontakt for at hjælpe dig i gang.
            </p>
            <p>
              I mellemtiden kan du læse mere om
              <a href="<?= page_url('product.php') ?>">hvordan platformen fungerer</a> eller se
              <a href="<?= page_url('faq.php') ?>">ofte stillede spørgsmål</a>.
            </p>
            <p><a href="<?= page_url() ?>">Til forsiden</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

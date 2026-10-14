<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hvala | ' . SITE_NAME;
$page_description = 'Tvoj zahtjev zaprimio je tim ' . SITE_NAME . '.';
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
            <h1>Hvala — javit ćemo se</h1>
            <p>
              Tvoj zahtjev zaprimio je tim <?= e(SITE_NAME) ?>. Stručnjak će
              ti se uskoro javiti da ti pomogne početi.
            </p>
            <p>
              U međuvremenu možeš pročitati više o tome
              <a href="<?= page_url('product.php') ?>">kako platforma funkcionira</a> ili pregledati
              <a href="<?= page_url('faq.php') ?>">često postavljana pitanja</a>.
            </p>
            <p><a href="<?= page_url() ?>">Natrag na početnu</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

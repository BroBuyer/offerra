<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kiitos | ' . SITE_NAME;
$page_description = 'Pyyntösi on vastaanotettu ' . SITE_NAME . ' -tiimin toimesta.';
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
            <h1>Kiitos — otamme yhteyttä</h1>
            <p>
              Pyyntösi on vastaanotettu <?= e(SITE_NAME) ?> -tiimin toimesta. Asiantuntija
              ottaa sinuun pian yhteyttä auttaakseen alkuun.
            </p>
            <p>
              Sillä välin voit lukea lisää
              <a href="<?= page_url('product.php') ?>">siitä, miten alusta toimii</a> tai selata
              <a href="<?= page_url('faq.php') ?>">usein kysyttyjä kysymyksiä</a>.
            </p>
            <p><a href="<?= page_url() ?>">Takaisin etusivulle</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

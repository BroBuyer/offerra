<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ačiū | ' . SITE_NAME;
$page_description = 'Jūsų užklausą gavo ' . SITE_NAME . ' komanda.';
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
            <h1>Ačiū — susisieksime</h1>
            <p>
              Jūsų užklausą gavo <?= e(SITE_NAME) ?> komanda. Specialistas
              netrukus susisieks, kad padėtų pradėti.
            </p>
            <p>
              Kol kas galite daugiau sužinoti apie
              <a href="<?= page_url('product.php') ?>">kaip veikia platforma</a> arba peržiūrėti
              <a href="<?= page_url('faq.php') ?>">dažnai užduodamus klausimus</a>.
            </p>
            <p><a href="<?= page_url() ?>">Į pradžią</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

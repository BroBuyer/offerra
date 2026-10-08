<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hvala | ' . SITE_NAME;
$page_description = 'Tvojo zahtevo je prejela ekipa ' . SITE_NAME . '.';
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
            <h1>Hvala — oglasili se bomo</h1>
            <p>
              Tvojo zahtevo je prejela ekipa <?= e(SITE_NAME) ?>. Specialist se ti
              bo kmalu oglasil, da ti pomaga začeti.
            </p>
            <p>
              Medtem lahko prebereš več o tem,
              <a href="<?= page_url('product.php') ?>">kako platforma deluje</a> ali pregledaš
              <a href="<?= page_url('faq.php') ?>">pogosta vprašanja</a>.
            </p>
            <p><a href="<?= page_url() ?>">Nazaj na začetno</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Paldies | ' . SITE_NAME;
$page_description = 'Jūsu pieprasījumu saņēma ' . SITE_NAME . ' komanda.';
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
            <h1>Paldies — sazināsimies</h1>
            <p>
              Jūsu pieprasījumu saņēma <?= e(SITE_NAME) ?> komanda. Speciālists
              drīz sazināsies, lai palīdzētu sākt.
            </p>
            <p>
              Pa to laiku varat lasīt vairāk par to,
              <a href="<?= page_url('product.php') ?>">kā platforma darbojas</a> vai pārlūkot
              <a href="<?= page_url('faq.php') ?>">bieži uzdotos jautājumus</a>.
            </p>
            <p><a href="<?= page_url() ?>">Atpakaļ uz sākumu</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

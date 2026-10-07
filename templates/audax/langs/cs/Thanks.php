<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Děkujeme | ' . SITE_NAME;
$page_description = 'Vaši žádost přijal tým ' . SITE_NAME . '.';
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
            <h1>Děkujeme — ozveme se</h1>
            <p>
              Vaši žádost přijal tým <?= e(SITE_NAME) ?>. Specialista
              se brzy ozve, aby vám pomohl začít.
            </p>
            <p>
              Mezitím si můžete přečíst víc o tom,
              <a href="<?= page_url('product.php') ?>">jak platforma funguje</a> nebo si prohlédnout
              <a href="<?= page_url('faq.php') ?>">často kladené otázky</a>.
            </p>
            <p><a href="<?= page_url() ?>">Na úvodní stránku</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

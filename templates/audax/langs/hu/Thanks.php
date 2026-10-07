<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Köszönjük | ' . SITE_NAME;
$page_description = 'Kérésedet a ' . SITE_NAME . ' csapata megkapta.';
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
            <h1>Köszönjük — hamarosan jelentkezünk</h1>
            <p>
              Kérésedet a <?= e(SITE_NAME) ?> csapata megkapta. Szakértőnk
              hamarosan felveszi veled a kapcsolatot, hogy segítsen elkezdeni.
            </p>
            <p>
              Közben olvashatsz bővebben arról,
              <a href="<?= page_url('product.php') ?>">hogyan működik a platform</a> vagy böngészheted a
              <a href="<?= page_url('faq.php') ?>">gyakran ismételt kérdéseket</a>.
            </p>
            <p><a href="<?= page_url() ?>">Vissza a kezdőlapra</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

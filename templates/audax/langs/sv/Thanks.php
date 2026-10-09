<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tack | ' . SITE_NAME;
$page_description = 'Din förfrågan har tagits emot av teamet hos ' . SITE_NAME . '.';
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
            <h1>Tack — vi hör av oss</h1>
            <p>
              Din förfrågan har tagits emot av teamet hos <?= e(SITE_NAME) ?>. En specialist
              hör av sig strax för att hjälpa dig igång.
            </p>
            <p>
              Under tiden kan du läsa mer om
              <a href="<?= page_url('product.php') ?>">hur plattformen fungerar</a> eller se
              <a href="<?= page_url('faq.php') ?>">vanliga frågor</a>.
            </p>
            <p><a href="<?= page_url() ?>">Till startsidan</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

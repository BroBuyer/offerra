<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Thank you | ' . SITE_NAME;
$page_description = 'Your request has been received by the ' . SITE_NAME . ' team.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Thank you — we will be in touch</h1>
            <p>
              Your request has been received by the <?= e(SITE_NAME) ?> team. A specialist will
              contact you shortly to help you get started.
            </p>
            <p>
              In the meantime you can read more about
              <a href="<?= page_url('product.php') ?>">how the platform works</a> or browse the
              <a href="<?= page_url('faq.php') ?>">frequently asked questions</a>.
            </p>
            <p><a href="<?= page_url() ?>">Back to home</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Bedankt | ' . SITE_NAME;
$page_description = 'Je aanvraag is ontvangen door het team van ' . SITE_NAME . '.';
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
            <h1>Bedankt — we nemen contact op</h1>
            <p>
              Je aanvraag is ontvangen door het team van <?= e(SITE_NAME) ?>. Een specialist
              neemt binnenkort contact op om je op weg te helpen.
            </p>
            <p>
              Ondertussen kun je meer lezen over
              <a href="<?= page_url('product.php') ?>">hoe het platform werkt</a> of de
              <a href="<?= page_url('faq.php') ?>">veelgestelde vragen</a>.
            </p>
            <p><a href="<?= page_url() ?>">Naar de homepage</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

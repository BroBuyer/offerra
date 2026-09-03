<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Takk');
$page_description = 'Kontoansøkningen din hos ' . SITE_NAME . ' er mottatt.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>You're all set</h1>
      <p class="lead thanks-lead">
        Thanks for registering on <?= e(SITE_NAME) ?>.
        A <?= e(SITE_NAME) ?> manager will contact you shortly to finish setting up your account. Keep your phone nearby.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

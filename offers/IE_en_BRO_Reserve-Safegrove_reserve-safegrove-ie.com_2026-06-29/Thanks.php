<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Thank You');
$page_description = 'Your ' . SITE_NAME . ' account request has been received.';
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
      <h1>You're all set!</h1>
      <p class="lead thanks-lead">
        Thank you for registering with <?= e(SITE_NAME) ?>.
        Our team will contact you shortly to complete your account setup. Please keep your phone nearby.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

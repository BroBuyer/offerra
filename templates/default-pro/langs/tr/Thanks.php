<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Thank You');
$page_description = 'Your ' . SITE_NAME . ' account request has been received.'faq.php'Thanks.php'faq'thanks';
$noindex = true/includes/head.php'/includes/head.php'/includes/header.php'/includes/header.php';
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

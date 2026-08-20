<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Paldies');
$page_description = 'Jūsu ' . SITE_NAME . ' konta pieprasījums ir saņemts.';
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
      <h1>Jūs esat pieteikušies.</h1>
      <p class="lead thanks-lead">
        Paldies, ka reģistrējāties <?= e(SITE_NAME) ?>.
        Our team will reach out shortly to finish setting up your account — keep your phone nearby.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

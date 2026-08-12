<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tack');
$page_description = 'Din ' . SITE_NAME . '-kontoförfrågan har mottagits.';
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
      <h1>Du är med.</h1>
      <p class="lead thanks-lead">
        Tack för att du registrerade dig hos <?= e(SITE_NAME) ?>.
        Vårt team hör av sig inom kort för att slutföra kontoinställningen — ha telefonen nära till hands.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

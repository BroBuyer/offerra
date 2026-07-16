<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Mulțumim');
$page_description = 'Am primit solicitarea ta de cont pe ' . SITE_NAME . '.';
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
      <h1>Fatto!</h1>
      <p class="lead thanks-lead">
        Mulțumim că te-ai înregistrat pe <?= e(SITE_NAME) ?>.
        Echipa noastră te va contacta în curând pentru a finaliza configurarea contului. Ține telefonul la îndemână.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

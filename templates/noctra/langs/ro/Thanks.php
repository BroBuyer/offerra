<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Mulțumim');
$page_description = 'Cererea ta de cont la ' . SITE_NAME . ' a fost primită.';
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
      <h1>Ești înăuntru.</h1>
      <p class="lead thanks-lead">
        Mulțumim că te-ai înregistrat la <?= e(SITE_NAME) ?>.
        Echipa noastră te va contacta în curând pentru a finaliza configurarea contului — ține telefonul aproape.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

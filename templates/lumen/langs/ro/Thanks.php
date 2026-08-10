<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Mulțumim');
$page_description = 'Cererea dvs. de cont ' . SITE_NAME . ' a fost primită.';
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
      <h1>Sunteți înăuntru.</h1>
      <p class="lead thanks-lead">
        Mulțumim pentru înregistrarea pe <?= e(SITE_NAME) ?>. Echipa noastră vă va contacta în curând pentru a finaliza configurarea — țineți telefonul la îndemână.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

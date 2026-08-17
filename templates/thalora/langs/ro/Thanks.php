<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Vă mulțumim');
$page_description = 'Am primit cererea de cont pentru ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Sunteți înăuntru.</h1>
      <p>Mulțumim pentru înregistrarea la <?= e(SITE_NAME) ?>. Echipa noastră vă va contacta în curând pentru a finaliza deschiderea contului — țineți telefonul aproape.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

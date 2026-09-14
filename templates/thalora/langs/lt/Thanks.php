<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ačiū');
$page_description = 'Jūsų ' . SITE_NAME . ' paskyros užklausa gauta.';
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
      <h1>Jūs esate.</h1>
      <p>Dėkojame, kad prisiregistravote<?= e(SITE_NAME) ?>. Mūsų komanda netrukus susisieks, kad užbaigtų paskyros sąranką – laikykite telefoną šalia.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

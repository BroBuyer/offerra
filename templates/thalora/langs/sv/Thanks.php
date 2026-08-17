<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tack');
$page_description = 'Din kontoförfrågan hos ' . SITE_NAME . ' har mottagits.';
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
      <h1>Du är inne.</h1>
      <p>Tack för att du registrerade dig hos <?= e(SITE_NAME) ?>. Vårt team kontaktar dig snart för att slutföra kontot — ha telefonen nära.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

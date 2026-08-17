<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tak');
$page_description = 'Anmodningen om ' . SITE_NAME . '-konto er modtaget.';
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
      <h1>Du er inde.</h1>
      <p>Tak fordi du tilmeldte dig hos <?= e(SITE_NAME) ?>. Vores team tager snart kontakt for at færdiggøre kontoopsætningen — hav telefonen i nærheden.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

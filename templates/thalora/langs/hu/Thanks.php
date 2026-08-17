<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Köszönjük');
$page_description = 'Megkaptuk a(z) ' . SITE_NAME . ' fiókkérelmét.';
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
      <h1>Bent van.</h1>
      <p>Köszönjük a regisztrációt a(z) <?= e(SITE_NAME) ?> oldalon. Csapatunk hamarosan felveszi a kapcsolatot a fiók befejezéséhez — tartsa a telefont a közelében.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

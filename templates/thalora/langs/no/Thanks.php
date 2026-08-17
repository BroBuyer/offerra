<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Takk');
$page_description = 'Forespørselen om ' . SITE_NAME . '-konto er mottatt.';
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
      <h1>Du er inne.</h1>
      <p>Takk for at du registrerte deg hos <?= e(SITE_NAME) ?>. Teamet vårt tar snart kontakt for å fullføre kontooppsettet — ha telefonen i nærheten.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

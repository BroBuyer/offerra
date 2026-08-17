<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Bedankt');
$page_description = 'Je aanvraag voor een ' . SITE_NAME . '-account is ontvangen.';
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
      <h1>Je bent binnen.</h1>
      <p>Bedankt voor je aanmelding bij <?= e(SITE_NAME) ?>. Ons team neemt binnenkort contact op om de accountaanmaak af te ronden — houd je telefoon bij de hand.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

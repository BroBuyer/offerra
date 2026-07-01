<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Bedankt');
$page_description = 'Uw accountaanvraag bij ' . SITE_NAME . ' is ontvangen.';
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
      <h1>Gelukt!</h1>
      <p class="lead thanks-lead">
        Bedankt voor uw registratie bij <?= e(SITE_NAME) ?>.
        Ons team neemt binnenkort contact met u op om uw accountinstelling af te ronden. Houd uw telefoon bij de hand.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

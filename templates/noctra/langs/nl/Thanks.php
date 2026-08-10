<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Bedankt');
$page_description = 'Uw ' . SITE_NAME . '-accountaanvraag is ontvangen.';
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
      <h1>U bent erbij.</h1>
      <p class="lead thanks-lead">
        Bedankt voor uw aanmelding bij <?= e(SITE_NAME) ?>.
        Ons team neemt binnenkort contact op om uw account af te ronden — houd uw telefoon bij de hand.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

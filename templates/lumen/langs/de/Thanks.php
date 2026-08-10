<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Danke');
$page_description = 'Ihre Anfrage für ein ' . SITE_NAME . '-Konto ist eingegangen.';
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
      <h1>Sie sind dabei.</h1>
      <p class="lead thanks-lead">
        Danke für Ihre Anmeldung bei <?= e(SITE_NAME) ?>. Unser Team meldet sich in Kürze zur Einrichtung — halten Sie Ihr Telefon bereit.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

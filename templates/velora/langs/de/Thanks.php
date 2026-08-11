<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Vielen Dank');
$page_description = 'Ihre ' . SITE_NAME . '-Kontoanfrage wurde empfangen.';
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
        Danke für die Anmeldung bei <?= e(SITE_NAME) ?>.
        Unser Team meldet sich in Kürze, um Ihr Konto fertig einzurichten — halten Sie Ihr Telefon bereit.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

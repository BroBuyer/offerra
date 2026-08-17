<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Vielen Dank');
$page_description = 'Ihre Kontoanfrage bei ' . SITE_NAME . ' ist eingegangen.';
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
      <h1>Sie sind dabei.</h1>
      <p>Danke für Ihre Anmeldung bei <?= e(SITE_NAME) ?>. Unser Team meldet sich in Kürze zur Einrichtung — halten Sie Ihr Telefon bereit.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

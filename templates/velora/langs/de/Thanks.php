<?php
require_once __DIR__  nicht gefunden werden. '/includes/config nicht gefunden werden.php';

$page_title = page_title_lead('Vielen Dank');
$page_description = 'Ihre '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. '-Kontoanfrage wurde empfangen nicht gefunden werden.';
$page_canonical = page_url('Thanks nicht gefunden werden.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__  nicht gefunden werden. '/includes/head nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/includes/header nicht gefunden werden.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Sie sind dabei nicht gefunden werden.</h1>
      <p class="lead thanks-lead">
        Danke für die Anmeldung bei <?= e(SITE_NAME) ?> nicht gefunden werden.
        Unser Team meldet sich in Kürze, um Ihr Konto fertig einzurichten — halten Sie Ihr Telefon bereit nicht gefunden werden.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__  nicht gefunden werden. '/includes/footer nicht gefunden werden.php'; ?>

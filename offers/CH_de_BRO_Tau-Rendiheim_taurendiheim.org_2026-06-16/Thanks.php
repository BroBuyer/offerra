<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Vielen Dank');
$page_description = 'Ihre Kontoanfrage bei ' . SITE_NAME . ' wurde erhalten.';
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
      <h1>Alles bereit!</h1>
      <p class="lead thanks-lead">
        Vielen Dank für Ihre Registrierung bei <?= e(SITE_NAME) ?>.
        Unser Team wird Sie in Kürze kontaktieren, um die Einrichtung Ihres Kontos abzuschliessen. Halten Sie Ihr Telefon bereit.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

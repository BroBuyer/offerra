<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Grazie');
$page_description = 'Abbiamo ricevuto la tua richiesta per un account ' . SITE_NAME . '.';
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
      <h1>Sei dentro.</h1>
      <p class="lead thanks-lead">
        Grazie per esserti registrato con <?= e(SITE_NAME) ?>.
        Il nostro team ti contatterà a breve per completare la configurazione — tieni il telefono a portata di mano.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Grazie');
$page_description = 'La richiesta di conto ' . SITE_NAME . ' è stata ricevuta.';
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
      <h1>Ci sei.</h1>
      <p>Grazie per esserti registrato su <?= e(SITE_NAME) ?>. Il nostro team ti contatterà a breve per completare l’apertura del conto — tieni il telefono a portata di mano.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

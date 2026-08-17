<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gracias');
$page_description = 'Hemos recibido la solicitud de cuenta de ' . SITE_NAME . '.';
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
      <h1>Ya estás dentro.</h1>
      <p>Gracias por registrarte en <?= e(SITE_NAME) ?>. Nuestro equipo te contactará en breve para completar la apertura de la cuenta — ten el teléfono a mano.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

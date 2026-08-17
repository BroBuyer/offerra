<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Obrigado');
$page_description = 'Recebemos o pedido de conta de ' . SITE_NAME . '.';
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
      <h1>Já estás dentro.</h1>
      <p>Obrigado por te registares em <?= e(SITE_NAME) ?>. A nossa equipa contacta-te em breve para concluir a abertura da conta — tem o telefone à mão.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

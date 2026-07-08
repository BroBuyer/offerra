<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Obrigado');
$page_description = 'O seu pedido de conta na ' . SITE_NAME . ' foi recebido.';
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
      <h1>Está tudo pronto!</h1>
      <p class="lead thanks-lead">
        Obrigado por se registar na <?= e(SITE_NAME) ?>.
        A nossa equipa entrará em contacto consigo em breve para concluir a configuração da sua conta. Mantenha o telefone por perto.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

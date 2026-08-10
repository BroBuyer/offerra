<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contacte o suporte ' . SITE_NAME . ' — ajudamos com financiamento, verificação e primeiros passos.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Estamos aqui para ajudar</h1>
      <p class="lead">Questões sobre a conta, depósitos ou ferramentas de IA — contacte-nos a qualquer momento.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Suporte</h2>
        <p class="prose">Envie-nos um e-mail para <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. O tempo de resposta típico é de poucas horas.</p>
        <a href="sign.php" class="btn btn-primary">Abrir uma conta</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

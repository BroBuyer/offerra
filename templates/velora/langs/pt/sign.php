<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registo');
$page_description = 'Crie a sua conta ' . SITE_NAME . ' e comece a negociar com orientação clara de IA.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Começar</p>
      <h1>Crie a sua conta</h1>
      <p class="lead">Depósito mínimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Demora menos de 3 minutos.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Introduza os seus dados';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

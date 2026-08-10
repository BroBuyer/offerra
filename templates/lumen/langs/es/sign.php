<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registro');
$page_description = 'Crea tu cuenta en ' . SITE_NAME . ' y empieza a invertir con guía clara de IA.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Empezar</p>
      <h1>Abre tu cuenta de inversión</h1>
      <p class="lead">Depósito mínimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Mercados en vivo tras una verificación breve.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Introduce tus datos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

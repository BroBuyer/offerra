<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Precios');
$page_description = 'Empieza en ' . SITE_NAME . ' desde ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — financiación transparente y acceso completo.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Precios</p>
      <h1>Empezar desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Una entrada sencilla. Acceso completo tras el depósito — con ideas de IA y mercados en vivo.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Acceso a la cuenta</h2>
        <p class="prose">
          Depósito mínimo <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Gráficos, herramientas y guía de IA se activan cuando la cuenta está financiada.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Crea tu cuenta';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

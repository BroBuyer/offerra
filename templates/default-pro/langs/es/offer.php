<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Open ' . SITE_NAME . ' from ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — full desk, AI signals, and 24/7 support for ' . market_audience() . '.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Oferta', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?= e(SITE_NAME) ?> offer</p>
      <h1>Start <?= e(SITE_NAME) ?> from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Full <?= e(SITE_NAME) ?> platform for <?= e(market_audience()) ?>. Scale when you are ready.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Acceso inicial</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Full <?= e(SITE_NAME) ?> desk · AI signals · 24/7 support</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Que incluye</div>
          <div class="specs-value">Graficos en tiempo real, trading multiactivo, gestion de cartera y onboarding asistido</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depositos</div>
          <div class="specs-value">Tarjeta, transferencia bancaria, PayPal y monederos electronicos</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retiros</div>
          <div class="specs-value">En cualquier momento · 1-3 dias laborables · Comisiones visibles por adelantado</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet y movil, sin necesidad de instalacion</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Claim your ' . SITE_NAME . ' offer';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

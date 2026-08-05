<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Abre ' . SITE_NAME . ' con un mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — acceso completo a la plataforma, ideas con IA y soporte 24/7.';
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
      <p class="eyebrow">Oferta</p>
      <h1>Acceso a la plataforma desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Todas las funciones desde el primer día — gráficos, señales y soporte incluidos.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Plan inicial</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> mínimo · Plataforma completa · Ideas con IA · Soporte 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Incluido</div>
          <div class="specs-value">Mercados en vivo, trading multi-activo, vista de cartera, inicio guiado</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiación</div>
          <div class="specs-value">Tarjeta, transferencia bancaria, PayPal, monederos electrónicos</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retiros</div>
          <div class="specs-value">En cualquier momento · 1–3 días laborables · Comisiones visibles de antemano</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet, móvil — sin instalación</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Empezar</span>
          <span class="live-pill">Abierta</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Regístrate para desbloquear la oferta';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Elegí el plan de ' . SITE_NAME . ' — empezá con un depósito mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' y desbloqueá el acceso completo a la plataforma.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Oferta', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Oferta</p>
      <h1>Obtené el seguimiento de portafolio — gratis con el registro</h1>
      <p class="lead">Empezá con <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Aumentá cuando estés listo.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Acceso base</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> depósito mínimo · Plataforma completa · Señales con IA · Asistencia 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Qué incluye</div>
          <div class="specs-value">Gráficos en vivo, trading multi-mercado, seguimiento de portafolio, incorporación guiada</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depósitos</div>
          <div class="specs-value">Tarjeta, transferencia, PayPal, billetera electrónica</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retiros</div>
          <div class="specs-value">En cualquier momento · 1–3 días hábiles · Comisiones visibles por adelantado</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet, móvil — sin descarga</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Solicitá la oferta ahora';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

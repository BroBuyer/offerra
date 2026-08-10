<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Abra a ' . SITE_NAME . ' com um mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — acesso total à plataforma, análises IA e suporte 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Oferta', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Oferta</p>
      <h1>Acesso à plataforma a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Todas as funcionalidades desde o primeiro dia — gráficos, sinais e suporte incluídos.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Plano inicial</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> mínimo · Plataforma completa · Análises IA · Suporte 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Incluído</div>
          <div class="specs-value">Mercados em direto, trading multiativos, vista de portefólio, onboarding guiado</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depósitos</div>
          <div class="specs-value">Cartão, transferência bancária, PayPal, carteiras eletrónicas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Levantamentos</div>
          <div class="specs-value">A qualquer momento · 1–3 dias úteis · Taxas mostradas à partida</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet, telemóvel — sem instalação</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Começar</span>
          <span class="live-pill">Aberto</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registe-se para desbloquear a oferta';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

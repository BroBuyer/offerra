<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Escolha o plano da ' . SITE_NAME . ' — comece com um depósito mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' e desbloqueie o acesso completo à plataforma.';
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
      <h1>Obtenha o acompanhamento de portefólio — grátis com o registo</h1>
      <p class="lead">Comece com <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Escale quando estiver pronto.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Acesso inicial</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> depósito mínimo · Plataforma completa · Sinais com IA · Apoio 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">O que está incluído</div>
          <div class="specs-value">Gráficos em tempo real, trading multi-mercado, acompanhamento de portefólio, integração guiada</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiamento</div>
          <div class="specs-value">Cartão, transferência bancária, PayPal, carteiras eletrónicas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Levantamentos</div>
          <div class="specs-value">A qualquer momento · 1–3 dias úteis · Comissões apresentadas antecipadamente</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet, telemóvel — sem necessidade de instalação</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Reclame a sua oferta agora';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

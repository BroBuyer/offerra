<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Produto');
$page_description = 'Explore as ferramentas de trading da ' . SITE_NAME . ' — análise em tempo real, sinais com IA, acesso multi-mercado e estratégias automatizadas.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Produto', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Produto</p>
      <h1>Análise digital concebida para traders</h1>
      <p class="lead">Uma plataforma. Todos os mercados. Ferramentas que acompanham o seu ritmo.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Gráficos em tempo real</h3>
          <p>Feeds de preços em direto, indicadores avançados e profundidade de mercado em todos os ativos suportados.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Motor de sinais com IA</h3>
          <p>Modelos de machine learning destacam configurações de alta probabilidade com contexto claro de entrada e saída.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Suite de automatização</h3>
          <p>Configure bots com parâmetros de risco personalizados — defina e monitorize, ou opere manualmente em paralelo.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Controlos de risco</h3>
          <p>Ferramentas de stop-loss, take-profit e dimensionamento de posição integradas em cada fluxo de trabalho.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Acompanhamento de portefólio</h3>
          <p>Vista unificada de posições, P&amp;L e alocação entre cripto e mercados tradicionais.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Centro de aprendizagem</h3>
          <p>Tutoriais guiados e explicações de mercado para principiantes e traders intermédios.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Experimente a <?= e(SITE_NAME) ?> gratuitamente</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

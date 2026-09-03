<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Produkt');
$page_description = 'Entdecken Sie die Trading-Tools von the ' . SITE_NAME . ' trading desk — real-time analytics, AI signals, multi-market access, and automation for ' . market_audience() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Startseite', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Produkt', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?= e(SITE_NAME) ?> product</p>
      <h1><?= e(SITE_NAME) ?> analytics built for <?= e(market_audience()) ?></h1>
      <p class="lead">One <?= e(SITE_NAME) ?> desk. Every listed market. Tools that keep up with you.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3><?= e(SITE_NAME) ?> real-time charts</h3>
          <p>Live price feeds and indicators across assets available on <?= e(SITE_NAME) ?>.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3><?= e(SITE_NAME) ?> AI signal engine</h3>
          <p>Models on <?= e(SITE_NAME) ?> surface setups with entry and exit context — you still confirm the ticket.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3><?= e(SITE_NAME) ?> automation</h3>
          <p>Configure <?= e(SITE_NAME) ?> bots with custom risk parameters, or trade manually beside them.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3><?= e(SITE_NAME) ?> risk controls</h3>
          <p>Stop-loss, take-profit, and position sizing tools on every <?= e(SITE_NAME) ?> ticket.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3><?= e(SITE_NAME) ?> portfolio tracker</h3>
          <p>Holdings, P&amp;L, and allocation across markets listed on <?= e(SITE_NAME) ?>.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3><?= e(SITE_NAME) ?> learning hub</h3>
          <p>Guided tutorials and market explainers for <?= e(market_audience()) ?> who are new to the desk.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Try <?= e(SITE_NAME) ?> free</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

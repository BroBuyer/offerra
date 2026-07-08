<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Produkt');
$page_description = 'Entdecken Sie die Trading-Tools von ' . SITE_NAME . ' — Echtzeitanalyse, KI-Signale, Zugang zu mehreren Märkten und automatisierte Strategien.';
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
      <p class="eyebrow">Produkt</p>
      <h1>Digitale Analyse, entwickelt für Trader</h1>
      <p class="lead">Eine Plattform. Alle Märkte. Tools, die Ihr Tempo mitgehen.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Echtzeit-Charts</h3>
          <p>Live-Preisfeeds, fortschrittliche Indikatoren und Markttiefe über alle unterstützten Assets hinweg.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>KI-Signal-Engine</h3>
          <p>Modelle des maschinellen Lernens identifizieren Setups mit hoher Wahrscheinlichkeit und klarem Kontext für Ein- und Ausstieg.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatisierungs-Suite</h3>
          <p>Konfigurieren Sie Bots mit individuellem Risikomanagement — überwachen Sie alles oder handeln Sie parallel manuell.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Risikomanagement</h3>
          <p>Stop-Loss-, Take-Profit- und Positionsgrößen-Tools sind in jeden Trading-Workflow integriert.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Portfolio-Tracking</h3>
          <p>Einheitlicher Überblick über Positionen, P&amp;L und Allokation zwischen Krypto- und traditionellen Märkten.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Wissenszentrum</h3>
          <p>Praxisnahe Anleitungen und Markt-Erklärungen für Einsteiger und fortgeschrittene Trader.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary"><?= e(SITE_NAME) ?> kostenlos testen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Produkt');
$page_description = 'Entdecken Sie die Trading-Tools von ' . SITE_NAME . ' — Echtzeitanalysen, KI-Signale, Multi-Markt-Zugang und automatisierte Strategien.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Produkt', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Produkt</p>
      <h1>Digitale Analysen für Trader</h1>
      <p class="lead">Eine Plattform. Alle Märkte. Tools, die mit Ihnen Schritt halten.</p>
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
          <p>Live-Preisfeeds, erweiterte Indikatoren und Markttiefe für alle unterstützten Assets.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>KI-Signal-Engine</h3>
          <p>Machine-Learning-Modelle heben Setups mit hoher Wahrscheinlichkeit hervor — mit klarem Ein- und Ausstiegskontext.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatisierungs-Suite</h3>
          <p>Konfigurieren Sie Bots mit individuellen Risikoparametern — einrichten und überwachen, oder parallel manuell handeln.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Risikokontrollen</h3>
          <p>Integrierte Stop-Loss-, Take-Profit- und Positionsgrössen-Tools in jedem Workflow.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Portfolio-Tracker</h3>
          <p>Einheitliche Übersicht über Positionen, P&amp;L und Allokation zwischen Krypto und traditionellen Märkten.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Lernzentrum</h3>
          <p>Geführte Tutorials und Markterklärungen für Einsteiger und fortgeschrittene Trader.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary"><?= e(SITE_NAME) ?> kostenlos testen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

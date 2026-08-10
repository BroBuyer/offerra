<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Product');
$page_description = 'Udforsk ' . SITE_NAME . '-platformen — live-diagrammer, AI-indsigt, adgang til flere markeder og automatiseringskontroller.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hjem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Produkt', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Produkt</p>
      <h1>Værktøjer bygget til klar handel</h1>
      <p class="lead">Én platform til hver session — diagrammer, signaler, risikokontrol og automatisering uden rod.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Live-diagrammer</h3>
          <p>Streamingpriser og indikatorer på de markeder, du vil handle.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI-indsigt</h3>
          <p>Modeller fremhæver timing og tendenser, så indgange er klarere på hurtige markeder.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatiseringsværktøjer</h3>
          <p>Regelbaserede bots med risikogrænser — kør uden opsyn, eller behold manuel kontrol.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Risikokontrol</h3>
          <p>Stop-loss, take-profit og positionsstørrelse indbygget i arbejdsgangen — ikke tilføjet bagefter.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Porteføljeoversigt</h3>
          <p>Beholdninger, gevinst &amp; tab og fordeling på tværs af crypto og traditionelle markeder ét sted.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Læringsstøtte</h3>
          <p>Korte forklaringer og guidede forløb til dig, der stadig vænner dig til handel.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Prøv <?= e(SITE_NAME) ?></a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

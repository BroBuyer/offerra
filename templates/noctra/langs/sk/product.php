<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Produkt');
$page_description = 'Preskúmajte platformu ' . SITE_NAME . ' — živé grafy, AI prehľady, prístup na viacero trhov a ovládanie automatizácie.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Produkt', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Produkt</p>
      <h1>Nástroje na prehľadné obchodovanie</h1>
      <p class="lead">Jedna platforma pre každú seansu — grafy, signály, riadenie rizika a automatizácia bez zbytočného šumu.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Živé grafy</h3>
          <p>Prúdiace ceny a indikátory naprieč trhmi, ktoré chcete obchodovať.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI prehľady</h3>
          <p>Modely zvýrazňujú načasovanie a trendy, aby vstupy boli v rýchlych trhoch jasnejšie.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Nástroje automatizácie</h3>
          <p>Boty podľa pravidiel s limitmi rizika — bežia bez dozoru, alebo si nechajte ručné prevzatie.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Riadenie rizika</h3>
          <p>Stop-loss, take-profit a veľkosť pozície sú súčasťou workflow — nie dodatočný prílepok.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Prehľad portfólia</h3>
          <p>Držby, zisk a strata a alokácia naprieč kryptom a tradičnými trhmi na jednom mieste.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Podpora učenia</h3>
          <p>Krátke vysvetlenia a sprievodca pre tých, kto si ešte zvyká na obchodovanie.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Vyskúšajte <?= e(SITE_NAME) ?></a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

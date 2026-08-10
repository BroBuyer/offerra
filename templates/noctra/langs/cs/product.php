<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Produkt');
$page_description = 'Prozkoumejte platformu ' . SITE_NAME . ' — živé grafy, AI přehledy, přístup na více trhů a ovládání automatizace.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domů', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Produkt', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Produkt</p>
      <h1>Nástroje pro přehledné obchodování</h1>
      <p class="lead">Jedna platforma pro každou seanci — grafy, signály, řízení rizika a automatizace bez zbytečného šumu.</p>
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
          <p>Proudící ceny a indikátory napříč trhy, které chcete obchodovat.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI přehledy</h3>
          <p>Modely zvýrazňují načasování a trendy, aby vstupy byly v rychlých trzích jasnější.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Nástroje automatizace</h3>
          <p>Boty podle pravidel s limity rizika — běží bez dozoru, nebo si nechte ruční převzetí.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Řízení rizika</h3>
          <p>Stop-loss, take-profit a velikost pozice jsou součástí workflow — ne dodatečný přílepek.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Přehled portfolia</h3>
          <p>Držby, zisk a ztráta a alokace napříč kryptem a tradičními trhy na jednom místě.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Podpora učení</h3>
          <p>Krátká vysvětlení a průvodce pro ty, kdo si teprve zvykají na obchodování.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Vyzkoušejte <?= e(SITE_NAME) ?></a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

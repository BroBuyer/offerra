<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termék');
$page_description = 'Fedezze fel a(z) ' . SITE_NAME . ' platformot — élő chartok, AI betekintések, többpiaci hozzáférés és automatizálás.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Kezdőlap', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Termék', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Termék</p>
      <h1>Eszközök az átlátható kereskedéshez</h1>
      <p class="lead">Egy platform minden sessionhöz — chartok, jelek, kockázatkezelés és automatizálás zsúfoltság nélkül.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Élő chartok</h3>
          <p>Streaming árak és indikátorok a kereskedni kívánt piacokon.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI betekintések</h3>
          <p>A modellek kiemelik az időzítést és a trendeket, hogy a belépések egyértelműbbek legyenek gyors piacokon.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizálási eszközök</h3>
          <p>Szabályalapú botok kockázati limitekkel — felügyelet nélkül futnak, vagy manuális felülírást tarthat.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Kockázatkezelés</h3>
          <p>Stop-loss, take-profit és pozícióméret a munkafolyamat része — nem utólagos toldás.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Portfólió nézet</h3>
          <p>Pozíciók, nyereség és veszteség, valamint allokáció kripto- és hagyományos piacokon egy helyen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Tanulási támogatás</h3>
          <p>Rövid magyarázatok és irányított folyamatok azoknak, akik még ismerkednek a kereskedéssel.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Próbálja ki a(z) <?= e(SITE_NAME) ?></a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

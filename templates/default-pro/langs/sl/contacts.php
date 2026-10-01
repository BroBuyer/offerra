<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakt ' . SITE_NAME . '. Pomoč za ' . market_audience() . ' pri računih, pologih in trgovalni mizi.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt <?= e(SITE_NAME) ?></p>
      <h1>Oglasite se podpori <?= e(SITE_NAME) ?></h1>
      <p class="lead">Pomoč za <?= e(market_audience()) ?> — računi, naročila in miza <?= e(SITE_NAME) ?>, ves dan.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-pošta <?= e(SITE_NAME) ?></h3>
          <p style="margin-bottom: 1rem;">Vprašanja o računu, pologu in mizi za <?= e(market_audience()) ?>:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Odzivni čas <?= e(SITE_NAME) ?></h3>
          <p>Večina zahtevkov <?= e(SITE_NAME) ?> dobi odgovor v nekaj urah. Nujna trgovalna vprašanja imajo prednost.</p>
        </article>
        <article class="feature-card">
          <h3>Pripravljeni začeti z <?= e(SITE_NAME) ?>?</h3>
          <p style="margin-bottom: 1rem;">Odprite račun <?= e(SITE_NAME) ?> v minutah — klic ni potreben.</p>
          <a href="sign.php" class="btn btn-primary">Ustvari račun <?= e(SITE_NAME) ?></a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

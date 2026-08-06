<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Yhteystiedot');
$page_description = 'Ota yhteyttä ' . SITE_NAME . '-tukeen — tili-, kaupankäynti- ja tekninen apu saatavilla 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Yhteystiedot</p>
      <h1>Keskustele tuen kanssa</h1>
      <p class="lead">Tiliin, kaupankäyntiin ja tekniikkaan liittyvät kysymykset — ympäri vuorokauden.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Sähköpostituki</h3>
          <p style="margin-bottom: 1rem;">Tiliä ja yleisiä pyyntöjä varten:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Vastausaika</h3>
          <p>Useimmat pyynnöt käsitellään muutamassa tunnissa. Live-kaupankäyntiin liittyvät asiat priorisoidaan.</p>
        </article>
        <article class="feature-card">
          <h3>Haluatko hoitaa itse?</h3>
          <p style="margin-bottom: 1rem;">Avaa tili minuuteissa — ei puhelua tarvita.</p>
          <a href="sign.php" class="btn btn-primary">Luo tili</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

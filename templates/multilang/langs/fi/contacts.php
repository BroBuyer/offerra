<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Yhteystiedot');
$page_description = 'Ota yhteyttä palvelun ' . SITE_NAME . ' tukeen tai yritystiimiimme. Olemme tavoitettavissa 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Yhteystiedot</p>
      <h1>Olemme täällä auttamassa</h1>
      <p class="lead">Ammattimainen tuki ympäri vuorokauden tili-, kaupankäynti- ja teknisiin kysymyksiin.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Sähköpostituki</h3>
          <p style="margin-bottom: 1rem;">Yleisiin tiedusteluihin ja tiliasioihin:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Vastausaika</h3>
          <p>Useimpiin pyyntöihin vastataan muutamassa tunnissa. Kiireelliset kaupankäyntiasiat priorisoidaan.</p>
        </article>
        <article class="feature-card">
          <h3>Valmis aloittamaan?</h3>
          <p style="margin-bottom: 1rem;">Avaa tili minuuteissa — puhelua ei tarvita.</p>
          <a href="sign.php" class="btn btn-primary">Luo tili</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

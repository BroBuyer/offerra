<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakt ' . SITE_NAME . ' — pomoč pri računu, trgovanju in tehničnih vprašanjih 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Oglasite se podpori</h1>
      <p class="lead">Vprašanja o računu, trgovanju in tehniki — ves dan.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-poštna podpora</h3>
          <p style="margin-bottom: 1rem;">Za račun in splošna vprašanja:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Odzivni čas</h3>
          <p>Večina zahtevkov je rešenih v nekaj urah. Nujna trgovalna vprašanja imajo prednost.</p>
        </article>
        <article class="feature-card">
          <h3>Raje sami?</h3>
          <p style="margin-bottom: 1rem;">Odprite račun v minutah — klic ni potreben.</p>
          <a href="sign.php" class="btn btn-primary">Ustvari račun</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kapcsolat');
$page_description = 'Lépjen kapcsolatba a(z) ' . SITE_NAME . ' támogatással — fiók, kereskedés és technikai segítség 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kapcsolat</p>
      <h1>Beszéljen a támogatással</h1>
      <p class="lead">Fiók-, kereskedési és technikai kérdések — éjjel-nappal.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mail támogatás</h3>
          <p style="margin-bottom: 1rem;">Fiók- és általános kérésekhez:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Válaszidő</h3>
          <p>A legtöbb jegy néhány órán belül megoldódik. Az élő kereskedési problémák prioritást élveznek.</p>
        </article>
        <article class="feature-card">
          <h3>Inkább egyedül intézné?</h3>
          <p style="margin-bottom: 1rem;">Nyisson fiókot percek alatt — hívás nélkül.</p>
          <a href="sign.php" class="btn btn-primary">Fiók létrehozása</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

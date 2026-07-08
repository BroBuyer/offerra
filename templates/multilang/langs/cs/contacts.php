<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktujte podporu ' . SITE_NAME . ' nebo náš obchodní tým. Jsme vám k dispozici 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Jsme tu, abychom vám pomohli</h1>
      <p class="lead">Profesionální podpora 24/7 pro dotazy k účtu, obchodování i technickým záležitostem.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mailová podpora</h3>
          <p style="margin-bottom: 1rem;">Pro obecné dotazy a pomoc s účtem:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Doba odpovědi</h3>
          <p>Na většinu požadavků odpovídáme během několika hodin. Naléhavé dotazy k obchodování řešíme přednostně.</p>
        </article>
        <article class="feature-card">
          <h3>Jste připraveni začít?</h3>
          <p style="margin-bottom: 1rem;">Otevřete si účet během pár minut — bez nutnosti hovoru.</p>
          <a href="sign.php" class="btn btn-primary">Vytvořit účet</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

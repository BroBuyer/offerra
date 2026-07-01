<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Neem contact op met de support van ' . SITE_NAME . ' of ons tradingteam. Wij zijn 24/7 beschikbaar.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Wij staan klaar om u te helpen</h1>
      <p class="lead">Professionele 24/7 ondersteuning voor accountvragen, trading en technische onderwerpen.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mailondersteuning</h3>
          <p style="margin-bottom: 1rem;">Voor algemene vragen en hulp met uw account:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Reactietijd</h3>
          <p>Op de meeste verzoeken reageren we binnen enkele uren. Urgente tradingvragen krijgen prioriteit.</p>
        </article>
        <article class="feature-card">
          <h3>Klaar om te starten?</h3>
          <p style="margin-bottom: 1rem;">Open een account in enkele minuten - zonder telefoongesprek.</p>
          <a href="sign.php" class="btn btn-primary">Account aanmaken</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

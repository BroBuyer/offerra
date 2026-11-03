<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contatti');
$page_description = 'Contatta il supporto ' . SITE_NAME . ' — aiuto su account, trading e tecnico disponibile 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contatti</p>
      <h1>Parla con il supporto</h1>
      <p class="lead">Domande su account, trading e tecniche — coperte a ogni ora.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Supporto email</h3>
          <p style="margin-bottom: 1rem;">Per richieste di account e generali:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tempo di risposta</h3>
          <p>La maggior parte dei ticket si chiude in poche ore. I problemi di trading live hanno priorità.</p>
        </article>
        <article class="feature-card">
          <h3>Preferisci fare da solo?</h3>
          <p style="margin-bottom: 1rem;">Apri un account in pochi minuti — senza chiamata.</p>
          <a href="sign.php" class="btn btn-primary">Crea account</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

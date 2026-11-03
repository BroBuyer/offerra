<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contatti');
$page_description = 'Contatta il supporto ' . SITE_NAME . ' o il nostro team commerciale. Siamo disponibili 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contatti</p>
      <h1>Siamo qui per aiutarti</h1>
      <p class="lead">Supporto professionale 24/7 per domande su account, trading e aspetti tecnici.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Supporto email</h3>
          <p style="margin-bottom: 1rem;">Per richieste generali e assistenza account:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tempi di risposta</h3>
          <p>Rispondiamo alla maggior parte delle richieste entro poche ore. Le questioni urgenti legate al trading hanno priorita.</p>
        </article>
        <article class="feature-card">
          <h3>Pronto a iniziare?</h3>
          <p style="margin-bottom: 1rem;">Apri il tuo account in pochi minuti, senza bisogno di telefonate.</p>
          <a href="sign.php" class="btn btn-primary">Crea account</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

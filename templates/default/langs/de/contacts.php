<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktieren Sie den Support von ' . SITE_NAME . ' oder unser Trading-Team. Wir sind rund um die Uhr für Sie da.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Wir sind für Sie da</h1>
      <p class="lead">Professioneller 24/7 Support für Fragen zu Konto, Trading und technischen Themen.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-Mail-Support</h3>
          <p style="margin-bottom: 1rem;">Für allgemeine Anfragen und Kontohilfe:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Reaktionszeit</h3>
          <p>Auf die meisten Anfragen antworten wir innerhalb weniger Stunden. Dringende Trading-Anliegen bearbeiten wir priorisiert.</p>
        </article>
        <article class="feature-card">
          <h3>Sind Sie bereit zu starten?</h3>
          <p style="margin-bottom: 1rem;">Eröffnen Sie Ihr Konto in wenigen Minuten — ohne Telefonat.</p>
          <a href="sign.php" class="btn btn-primary">Konto erstellen</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

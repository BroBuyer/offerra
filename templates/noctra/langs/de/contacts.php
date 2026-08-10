<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktieren Sie den ' . SITE_NAME . '-Support — Hilfe zu Konto, Trading und Technik rund um die Uhr.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Mit dem Support sprechen</h1>
      <p class="lead">Fragen zu Konto, Trading und Technik — rund um die Uhr abgedeckt.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-Mail-Support</h3>
          <p style="margin-bottom: 1rem;">Für Konto- und allgemeine Anfragen:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Antwortzeit</h3>
          <p>Die meisten Anfragen werden innerhalb weniger Stunden bearbeitet. Live-Trading-Themen haben Vorrang.</p>
        </article>
        <article class="feature-card">
          <h3>Lieber selbstständig?</h3>
          <p style="margin-bottom: 1rem;">Eröffnen Sie in Minuten ein Konto — kein Anruf nötig.</p>
          <a href="sign.php" class="btn btn-primary">Konto erstellen</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

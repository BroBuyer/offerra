<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktieren Sie den Support von ' . SITE_NAME . ' oder unser Team. Wir sind rund um die Uhr für Sie da.';
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
      <p class="lead">Professioneller Support rund um die Uhr bei Fragen zu Konto, Trading und technischen Themen.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-Mail-Support</h3>
          <p style="margin-bottom: 1rem;">Für allgemeine Anfragen und Kontosupport:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Antwortzeiten</h3>
          <p>Die meisten Anfragen werden innerhalb weniger Stunden beantwortet. Dringende Trading-Anliegen haben Priorität.</p>
        </article>
        <article class="feature-card">
          <h3>Bereit zum Start?</h3>
          <p style="margin-bottom: 1rem;">Eröffnen Sie in wenigen Minuten ein Konto — ganz ohne Anruf.</p>
          <a href="sign.php" class="btn btn-primary">Konto eröffnen</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

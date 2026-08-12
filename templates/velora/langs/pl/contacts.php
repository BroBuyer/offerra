<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Skontaktuj się z pomocą ' . SITE_NAME . ' — wsparcie konta, tradingu i techniczne 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Porozmawiaj z pomocą</h1>
      <p class="lead">Pytania o konto, trading i kwestie techniczne — całodobowo.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Pomoc e-mail</h3>
          <p style="margin-bottom: 1rem;">W sprawach konta i ogólnych:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Czas odpowiedzi</h3>
          <p>Większość zgłoszeń załatwiamy w kilka godzin. Problemy z tradingiem na żywo mają priorytet.</p>
        </article>
        <article class="feature-card">
          <h3>Wolisz samodzielnie?</h3>
          <p style="margin-bottom: 1rem;">Otwórz konto w kilka minut — bez telefonu.</p>
          <a href="sign.php" class="btn btn-primary">Utwórz konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Skontaktuj się ze wsparciem ' . SITE_NAME . ' lub naszym zespołem handlowym. Jesteśmy dostępni 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Jesteśmy tu, aby Ci pomóc</h1>
      <p class="lead">Profesjonalne wsparcie 24/7 w sprawach konta, handlu i kwestii technicznych.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Wsparcie e-mail</h3>
          <p style="margin-bottom: 1rem;">W sprawach ogólnych i pomocy z kontem:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Czas odpowiedzi</h3>
          <p>Na większość zgłoszeń odpowiadamy w ciągu kilku godzin. Pilne sprawy tradingowe traktujemy priorytetowo.</p>
        </article>
        <article class="feature-card">
          <h3>Gotowy, aby zacząć?</h3>
          <p style="margin-bottom: 1rem;">Otwórz konto w kilka minut — bez konieczności rozmowy telefonicznej.</p>
          <a href="sign.php" class="btn btn-primary">Utwórz konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

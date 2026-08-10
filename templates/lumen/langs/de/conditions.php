<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nutzungsbedingungen');
$page_description = 'Lesen Sie die Nutzungsbedingungen für die Trading-Plattform und Website von ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Nutzungsbedingungen</h1>
      <p class="lead">Zuletzt aktualisiert: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Mit dem Zugriff auf <?= e(SITE_NAME) ?> stimmen Sie diesen Nutzungsbedingungen zu. Wenn Sie nicht einverstanden sind, nutzen Sie unsere Dienste bitte nicht.</p>

      <h2>Berechtigung</h2>
      <p>Sie müssen mindestens 18 Jahre alt sein und in Ihrer Rechtsordnung rechtlich zum Handel mit Finanzinstrumenten berechtigt sein.</p>

      <h2>Risikohinweis</h2>
      <p>Der Handel mit Kryptowährungen, Devisen, CFDs und anderen Finanzinstrumenten birgt ein erhebliches Verlustrisiko. Vergangene Ergebnisse garantieren keine zukünftigen. Handeln Sie nur mit Kapital, dessen Verlust Sie verkraften können.</p>

      <h2>Kontoverantwortung</h2>
      <p>Sie sind für die Vertraulichkeit Ihrer Zugangsdaten und für alle Aktivitäten unter Ihrem Konto verantwortlich.</p>

      <h2>Verfügbarkeit des Dienstes</h2>
      <p>Wir streben eine durchgehende Verfügbarkeit an, garantieren aber keinen unterbrechungsfreien Zugang. Wartung, Marktbedingungen oder technische Probleme können den Dienst beeinträchtigen.</p>

      <h2>Haftungsbeschränkung</h2>
      <p><?= e(SITE_NAME) ?> haftet nicht für Handelsverluste oder Schäden, die aus der Nutzung von Informationen auf dieser Website entstehen. Holen Sie bei Bedarf unabhängige Finanzberatung ein.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

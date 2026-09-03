<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nutzungsbedingungen');
$page_description = 'Read the terms and conditions for using the ' . SITE_NAME . ' trading platform and website.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Nutzungsbedingungen</h1>
      <p class="lead">Letzte Aktualisierung: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Mit dem Zugriff auf <?= e(SITE_NAME) ?> stimmen Sie diesen Nutzungsbedingungen zu. Wenn Sie nicht einverstanden sind, nutzen Sie unsere Dienste bitte nicht.</p>

      <h2>Teilnahmevoraussetzungen</h2>
      <p>Sie müssen mindestens 18 Jahre alt und rechtlich berechtigt sein, in Ihrer Rechtsordnung mit Finanzinstrumenten zu handeln.</p>

      <h2>Risikohinweis</h2>
      <p>Der Handel mit Kryptowährungen, Forex, CFDs und anderen Finanzinstrumenten ist mit erheblichen Verlustrisiken verbunden. Vergangene Wertentwicklungen sind keine Garantie für zukünftige Ergebnisse. Handeln Sie nur mit Kapital, dessen Verlust Sie sich leisten können.</p>

      <h2>Kontoverantwortung</h2>
      <p>Sie sind für die Vertraulichkeit Ihrer Zugangsdaten sowie für sämtliche Aktivitäten verantwortlich, die über Ihr Konto erfolgen.</p>

      <h2>Verfügbarkeit des Dienstes</h2>
      <p>Wir bemühen uns um eine kontinuierliche Verfügbarkeit, können jedoch keinen unterbrechungsfreien Zugang garantieren. Wartungen, Marktbedingungen oder technische Probleme können den Service beeinträchtigen.</p>

      <h2>Haftungsbeschränkung</h2>
      <p><?= e(SITE_NAME) ?> haftet nicht für Handelsverluste oder Schäden, die aus der Nutzung der Informationen auf dieser Website entstehen. Ziehen Sie bei Bedarf einen unabhängigen Finanzberater hinzu.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

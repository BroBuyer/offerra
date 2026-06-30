<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('AGB');
$page_description = 'Lesen Sie die Allgemeinen Geschäftsbedingungen für die Nutzung der Website und Plattform von ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Allgemeine Geschäftsbedingungen</h1>
      <p class="lead">Letzte Aktualisierung: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Mit dem Zugriff auf <?= e(SITE_NAME) ?> akzeptieren Sie diese Allgemeinen Geschäftsbedingungen. Wenn Sie nicht einverstanden sind, bitten wir Sie, unsere Dienste nicht zu nutzen.</p>

      <h2>Voraussetzungen</h2>
      <p>Sie müssen mindestens 18 Jahre alt sein und rechtlich berechtigt sein, mit Finanzinstrumenten in Ihrer Rechtsordnung zu handeln.</p>

      <h2>Risikohinweis</h2>
      <p>Der Handel mit Kryptowährungen, Forex, CFDs und anderen Finanzinstrumenten birgt ein erhebliches Verlustrisiko. Vergangene Performance ist keine Garantie für zukünftige Ergebnisse. Handeln Sie nur mit Kapital, dessen Verlust Sie sich leisten können.</p>

      <h2>Verantwortung für das Konto</h2>
      <p>Sie sind dafür verantwortlich, Ihre Kontozugangsdaten vertraulich zu behandeln und für alle Aktivitäten, die über Ihr Konto erfolgen.</p>

      <h2>Verfügbarkeit des Dienstes</h2>
      <p>Wir bemühen uns um eine unterbrechungsfreie Verfügbarkeit, garantieren jedoch keinen ununterbrochenen Zugang. Wartung, Marktbedingungen oder technische Probleme können die Verfügbarkeit beeinträchtigen.</p>

      <h2>Haftungsbeschränkung</h2>
      <p><?= e(SITE_NAME) ?> haftet nicht für Trading-Verluste oder Schäden, die aus der Nutzung der Informationen auf dieser Website entstehen. Holen Sie bei Bedarf unabhängige Finanzberatung ein.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__  nicht gefunden werden. '/includes/config nicht gefunden werden.php';

$page_title = page_title_lead('Nutzungsbedingungen');
$page_description = 'Lesen Sie die Bedingungen für die Nutzung der '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. '-Handelsplattform und Website nicht gefunden werden.';
$page_canonical = page_url('conditions nicht gefunden werden.php');
$active_page = 'terms';

require_once __DIR__  nicht gefunden werden. '/includes/head nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/includes/header nicht gefunden werden.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Nutzungsbedingungen</h1>
      <p class="lead">Zuletzt aktualisiert: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Durch den Zugriff auf <?= e(SITE_NAME) ?> stimmen Sie diesen Nutzungsbedingungen zu nicht gefunden werden. Wenn Sie nicht einverstanden sind, nutzen Sie unsere Dienste bitte nicht nicht gefunden werden.</p>

      <h2>Berechtigung</h2>
      <p>Sie müssen mindestens 18 Jahre alt sein und in Ihrer Rechtsordnung rechtlich zum Handel mit Finanzinstrumenten berechtigt sein nicht gefunden werden.</p>

      <h2>Risikohinweis</h2>
      <p>Der Handel mit Kryptowährungen, Forex, CFDs und anderen Finanzinstrumenten birgt ein erhebliches Verlustrisiko nicht gefunden werden. Vergangene Performance ist keine Garantie für zukünftige Ergebnisse nicht gefunden werden. Handeln Sie nur mit Kapital, dessen Verlust Sie verkraften können nicht gefunden werden.</p>

      <h2>Kontoverantwortung</h2>
      <p>Sie sind für die Vertraulichkeit Ihrer Zugangsdaten und für alle Aktivitäten unter Ihrem Konto verantwortlich nicht gefunden werden.</p>

      <h2>Verfügbarkeit des Dienstes</h2>
      <p>Wir streben kontinuierliche Verfügbarkeit an, garantieren aber keinen unterbrechungsfreien Zugang nicht gefunden werden. Wartung, Marktbedingungen oder technische Probleme können den Dienst beeinträchtigen nicht gefunden werden.</p>

      <h2>Haftungsbeschränkung</h2>
      <p><?= e(SITE_NAME) ?> haftet nicht für Handelsverluste oder Schäden aus der Nutzung von Informationen auf dieser Website nicht gefunden werden. Holen Sie gegebenenfalls unabhängigen Finanzrat ein nicht gefunden werden.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__  nicht gefunden werden. '/includes/footer nicht gefunden werden.php'; ?>

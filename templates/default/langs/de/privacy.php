<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Datenschutzerklärung');
$page_description = 'Erfahren Sie, wie ' . SITE_NAME . ' Ihre personenbezogenen Daten erhebt, verwendet und schützt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Datenschutzerklärung</h1>
      <p class="lead">Letzte Aktualisierung: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Diese Datenschutzerklärung beschreibt, wie <?= e(SITE_NAME) ?> („wir“) personenbezogene Daten bei der Nutzung unserer Website und Dienste erhebt und verarbeitet.</p>

      <h2>Welche Informationen wir erfassen</h2>
      <p>Wir können folgende Daten erfassen: Name, E-Mail-Adresse, Telefonnummer, Wohnsitzland, IP-Adresse sowie Informationen, die Sie uns über Formulare oder Supportanfragen bereitstellen.</p>

      <h2>Wie wir Ihre Daten verwenden</h2>
      <ul>
        <li>Zur Erstellung und Verwaltung Ihres Kontos</li>
        <li>Zur Bereitstellung des Zugangs zur Handelsplattform und zum Kundensupport</li>
        <li>Zur Erfüllung rechtlicher und regulatorischer Verpflichtungen</li>
        <li>Zur Verbesserung unserer Dienstleistungen und zur Betrugsprävention</li>
      </ul>

      <h2>Datensicherheit</h2>
      <p>Wir setzen technische und organisatorische Maßnahmen ein, einschließlich SSL-Verschlüsselung und Zugriffskontrollen, um Ihre Daten zu schützen.</p>

      <h2>Ihre Rechte</h2>
      <p>Je nach Ihrer Rechtsordnung haben Sie möglicherweise das Recht auf Auskunft, Berichtigung oder Löschung Ihrer personenbezogenen Daten. Zur Ausübung dieser Rechte kontaktieren Sie bitte <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Kontakt</h2>
      <p>Fragen zu dieser Richtlinie? Schreiben Sie uns an <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

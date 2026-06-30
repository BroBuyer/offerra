<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Datenschutzerklärung');
$page_description = 'Erfahren Sie, wie ' . SITE_NAME . ' Ihre personenbezogenen Daten erhebt, nutzt und schützt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Datenschutzerklärung</h1>
      <p class="lead">Letzte Aktualisierung: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Diese Datenschutzerklärung beschreibt, wie <?= e(SITE_NAME) ?> personenbezogene Daten erhebt und verarbeitet, wenn Sie unsere Website und Dienste nutzen.</p>

      <h2>Welche Daten wir erheben</h2>
      <p>Wir können folgende Daten erheben: Name, E-Mail-Adresse, Telefonnummer, Wohnsitzland, IP-Adresse sowie Informationen, die Sie über Formulare oder Supportanfragen übermitteln.</p>

      <h2>Wie wir die Daten nutzen</h2>
      <ul>
        <li>Zur Erstellung und Verwaltung Ihres Kontos</li>
        <li>Zur Bereitstellung des Plattformzugangs und des Kundensupports</li>
        <li>Zur Erfüllung gesetzlicher und regulatorischer Pflichten</li>
        <li>Zur Verbesserung unserer Dienste und zur Betrugsprävention</li>
      </ul>

      <h2>Datensicherheit</h2>
      <p>Wir setzen technische und organisatorische Massnahmen ein, einschliesslich SSL-Verschlüsselung und Zugriffskontrollen, um Ihre Daten zu schützen.</p>

      <h2>Ihre Rechte</h2>
      <p>Je nach Rechtsordnung haben Sie möglicherweise das Recht auf Zugang, Berichtigung oder Löschung Ihrer personenbezogenen Daten. Kontaktieren Sie <?= e(SUPPORT_EMAIL) ?>, um diese Rechte auszuüben.</p>

      <h2>Kontakt</h2>
      <p>Fragen zu dieser Datenschutzerklärung? Schreiben Sie an <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

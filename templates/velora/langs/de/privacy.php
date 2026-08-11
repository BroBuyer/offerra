<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Datenschutzrichtlinie');
$page_description = 'Erfahren Sie, wie ' . SITE_NAME . ' Ihre personenbezogenen Daten erhebt, nutzt und schützt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Datenschutzrichtlinie</h1>
      <p class="lead">Zuletzt aktualisiert: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Diese Datenschutzrichtlinie beschreibt, wie <?= e(SITE_NAME) ?> („wir“, „uns“) personenbezogene Informationen erhebt und verarbeitet, wenn Sie unsere Website und Dienste nutzen.</p>

      <h2>Welche Informationen wir erheben</h2>
      <p>Wir können erheben: Name, E-Mail-Adresse, Telefonnummer, Wohnsitzland, IP-Adresse sowie Angaben, die Sie über Formulare oder Supportanfragen machen.</p>

      <h2>Wie wir Ihre Informationen nutzen</h2>
      <ul>
        <li>Um Ihr Konto zu erstellen und zu verwalten</li>
        <li>Um Zugang zur Handelsplattform und Kundensupport bereitzustellen</li>
        <li>Um rechtlichen und regulatorischen Pflichten nachzukommen</li>
        <li>Um unsere Dienste zu verbessern und Betrug zu verhindern</li>
      </ul>

      <h2>Datensicherheit</h2>
      <p>Wir setzen technische und organisatorische Maßnahmen um, einschließlich SSL-Verschlüsselung und Zugangskontrollen, um Ihre Daten zu schützen.</p>

      <h2>Ihre Rechte</h2>
      <p>Je nach Rechtsordnung können Sie Rechte auf Auskunft, Berichtigung oder Löschung Ihrer personenbezogenen Daten haben. Kontaktieren Sie <?= e(SUPPORT_EMAIL) ?>, um diese Rechte auszuüben.</p>

      <h2>Kontakt</h2>
      <p>Fragen zu dieser Richtlinie? E-Mail an <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

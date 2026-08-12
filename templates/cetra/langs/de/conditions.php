<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Nutzungsbedingungen');
$page_description = 'Die Regeln, die gelten, wenn Sie auf ' . SITE_NAME . ' zugreifen oder es nutzen.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hauptseite">
      <a href="<?= page_url() ?>#platform">Plattform</a>
      <a href="<?= page_url() ?>#how">So funktioniert es</a>
      <a href="<?= page_url() ?>#markets">Märkte</a>
      <a href="<?= page_url() ?>#faq">Häufig gestellte Fragen</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Starten</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Nutzungsbedingungen</h1>
      <p class="lede">Die Regeln, die gelten, wenn Sie auf <?= e(SITE_NAME) ?> zugreifen oder es nutzen.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Zuletzt aktualisiert: Januar 2025</p>

      <h2>1. Annahme der Bedingungen</h2>
      <p>Durch den Zugriff auf oder die Nutzung der Website und Dienste von <?= e(SITE_NAME) ?> erklären Sie sich mit diesen Nutzungsbedingungen einverstanden. Wenn Sie nicht einverstanden sind, nutzen Sie die Dienste nicht.</p>

      <h2>2. Berechtigung</h2>
      <p>Sie müssen mindestens 18 Jahre alt sein (oder das Volljährigkeitsalter in Ihrer Rechtsordnung) und die Rechtsfähigkeit haben, einen verbindlichen Vertrag einzugehen. Die Dienste werden nicht Einwohnern eingeschränkter Rechtsordnungen angeboten, in denen ein solches Angebot rechtswidrig wäre.</p>

      <h2>3. Kontoregistrierung</h2>
      <p>Sie verpflichten sich, bei der Registrierung genaue, aktuelle und vollständige Angaben zu machen und diese aktuell zu halten. Sie sind für die Vertraulichkeit Ihrer Zugangsdaten und für alle Aktivitäten auf Ihrem Konto verantwortlich.</p>

      <h2>4. Dienste</h2>
      <p><?= e(SITE_NAME) ?> stellt technologische Tools und Bildungsinformationen im Zusammenhang mit Online-Investitionen bereit. Wir sind nicht Ihr Finanzberater. Nichts auf dieser Website stellt personalisierte Anlageberatung, Steuerberatung oder eine Aufforderung zum Kauf oder Verkauf eines Finanzinstruments dar.</p>

      <h2>5. Gebühren</h2>
      <p>Anwendbare Gebühren, Spreads und Provisionen werden auf der Plattform oder im geltenden Gebührenverzeichnis ausgewiesen. Sie sind für alle aus Ihren Aktivitäten entstehenden Steuern verantwortlich.</p>

      <h2>6. Verbotenes Verhalten</h2>
      <ul>
        <li>Nutzung der Dienste für Geldwäsche, Terrorismusfinanzierung, Marktmanipulation oder einen anderen rechtswidrigen Zweck.</li>
        <li>Sich als eine andere Person auszugeben oder falsche Identitätsangaben zu machen.</li>
        <li>Zu versuchen, in irgendeinen Teil der Plattform einzugreifen, ihn zu kompromittieren oder reverse zu engineeren.</li>
        <li>Automatisierte Tools zu nutzen, um auf die Dienste anders zuzugreifen als ausdrücklich erlaubt.</li>
      </ul>

      <h2>7. Geistiges Eigentum</h2>
      <p>Alle Inhalte, Marken, Software und Materialien auf der Website sind Eigentum von <?= e(SITE_NAME) ?> oder ihrer Lizenzgeber und durch geltende Gesetze zum geistigen Eigentum geschützt. Ihnen wird eine begrenzte, nicht ausschließliche, widerrufliche Lizenz zur Nutzung der Dienste für ihren vorgesehenen Zweck gewährt.</p>

      <h2>8. Drittanbieterdienste</h2>
      <p>Die Plattform kann Links zu Drittanbieterdiensten enthalten oder diese integrieren. Wir sind nicht verantwortlich für solche Dienste, ihre Verfügbarkeit, Genauigkeit oder Inhalte.</p>

      <h2>9. Haftungsausschlüsse</h2>
      <p>Die Dienste werden „wie besehen“ und „wie verfügbar“ ohne Gewährleistungen jeglicher Art bereitgestellt. Der Handel birgt ein erhebliches Verlustrisiko. Siehe unsere <a href="<?= page_url('conditions.php') ?>">Risikohinweis</a> für Details.</p>

      <h2>10. Haftungsbeschränkung</h2>
      <p>Soweit gesetzlich zulässig, haftet <?= e(SITE_NAME) ?> nicht für indirekte, zufällige, besondere, Folgeschäden oder Strafschäden oder für entgangenen Gewinn oder Umsatz aus Ihrer Nutzung der Dienste.</p>

      <h2>11. Freistellung</h2>
      <p>Sie erklären sich damit einverstanden, <?= e(SITE_NAME) ?>, seine verbundenen Unternehmen und Mitarbeiter von allen Ansprüchen freizustellen, die aus Ihrer Verletzung dieser Bedingungen oder Ihrem Missbrauch der Dienste entstehen.</p>

      <h2>12. Aussetzung und Kündigung</h2>
      <p>Wir können den Zugang zu den Diensten jederzeit mit oder ohne Vorankündigung aussetzen oder beenden, wenn wir der Ansicht sind, dass Sie diese Bedingungen oder geltendes Recht verletzt haben.</p>

      <h2>13. Anwendbares Recht</h2>
      <p>Diese Bedingungen unterliegen den am Sitz von <?= e(SITE_NAME) ?> geltenden Gesetzen, ohne Rücksicht auf kollisionsrechtliche Grundsätze.</p>

      <h2>14. Änderungen</h2>
      <p>Wir können diese Bedingungen von Zeit zu Zeit ändern. Die fortgesetzte Nutzung der Dienste nach Änderungen gilt als Annahme der geänderten Bedingungen.</p>

      <h2>15. Kontakt</h2>
      <p>Fragen zu diesen Bedingungen können über unsere <a href="<?= page_url('contacts.php') ?>">Kontaktseite</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Zurück zur Startseite</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alle Rechte vorbehalten ·
      <a href="<?= page_url('privacy.php') ?>">Datenschutz</a> ·
      <a href="<?= page_url('conditions.php') ?>">Bedingungen</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

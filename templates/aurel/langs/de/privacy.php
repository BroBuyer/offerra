<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Datenschutzerklärung ᐉ ' . SITE_NAME;
$page_description = 'Wie ' . SITE_NAME . ' Ihre personenbezogenen Daten erhebt, verwendet und schützt.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Rechtliche Hinweise</span>
    <h1>Datenschutzerklärung</h1>
    <p class="rmct9">Wie <?= e(SITE_NAME) ?> Ihre personenbezogenen Daten erhebt, verwendet und schützt.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Zuletzt aktualisiert: Januar 2025</p>

    <h2>1. Einleitung</h2>
    <p><?= e(SITE_NAME) ?> („wir“, „uns“, „unser“) verpflichtet sich, die Privatsphäre von Besuchern und Kunden zu schützen. Diese Datenschutzerklärung erklärt, welche personenbezogenen Daten wir erheben, warum und wie wir sie verarbeiten, wenn Sie unsere Website und Dienste nutzen.</p>

    <h2>2. Welche Daten wir erheben</h2>
    <ul>
      <li><strong>Identitätsdaten</strong> — Name, Geburtsdatum, amtlicher Ausweis zur Identitätsprüfung und KYC/AML-Compliance.</li>
      <li><strong>Kontaktdaten</strong> — E-Mail-Adresse, Telefonnummer, Postanschrift.</li>
      <li><strong>Finanzdaten</strong> — Zahlungsdaten, Transaktionshistorie, Angaben zur Herkunft der Mittel.</li>
      <li><strong>Technische Daten</strong> — IP-Adresse, Browsertyp, Gerätekennungen, Cookies und Nutzungsanalysen.</li>
    </ul>

    <h2>3. Wie wir Ihre Daten nutzen</h2>
    <ul>
      <li>Zur Identitätsprüfung und Erfüllung regulatorischer Pflichten.</li>
      <li>Zur Bereitstellung, Wartung und Verbesserung von Plattform und Diensten.</li>
      <li>Zur Zahlungsabwicklung und Erkennung von Betrug.</li>
      <li>Zur Kommunikation zu Konto, Updates und Support-Anfragen.</li>
      <li>Für Marketing, wenn Sie eingewilligt haben (Abmeldung jederzeit möglich).</li>
    </ul>

    <h2>4. Rechtsgrundlage</h2>
    <p>Wir verarbeiten personenbezogene Daten auf einer oder mehreren der folgenden Grundlagen: Vertragserfüllung, gesetzliche Pflicht, berechtigte Interessen oder Ihre Einwilligung.</p>

    <h2>5. Weitergabe und Offenlegung</h2>
    <p>Wir können personenbezogene Daten an regulierte Zahlungsanbieter, KYC/AML-Partner, Cloud-Anbieter, Berater und zuständige Behörden weitergeben, soweit gesetzlich erforderlich. Wir verkaufen keine personenbezogenen Daten.</p>

    <h2>6. Internationale Übermittlungen</h2>
    <p>Werden Daten außerhalb Ihrer Rechtsordnung übermittelt, stellen wir geeignete Garantien sicher, einschließlich Standardvertragsklauseln.</p>

    <h2>7. Speicherdauer</h2>
    <p>Wir speichern Daten, solange sie für Dienste und rechtliche, regulatorische und buchhalterische Pflichten nötig sind — in der Regel mindestens fünf Jahre nach Kontoschließung.</p>

    <h2>8. Ihre Rechte</h2>
    <p>Nach geltendem Recht können Sie Auskunft, Berichtigung, Löschung, Einschränkung oder Übertragbarkeit verlangen und bestimmten Verarbeitungen widersprechen. Zur Ausübung kontaktieren Sie uns unter der Adresse unten.</p>

    <h2>9. Cookies</h2>
    <p>Wir nutzen essenzielle und Analyse-Cookies zum Betrieb der Website und zum Verständnis der Nutzung. Cookies verwalten Sie in den Browsereinstellungen.</p>

    <h2>10. Sicherheit</h2>
    <p>Wir setzen administrative, technische und physische Schutzmaßnahmen gegen unbefugten Zugriff, Offenlegung, Änderung oder Zerstörung ein. Kein System ist vollkommen sicher, absolute Sicherheit können wir nicht garantieren.</p>

    <h2>11. Änderungen</h2>
    <p>Wir können diese Erklärung von Zeit zu Zeit aktualisieren. Die neueste Fassung steht immer auf dieser Seite mit dem Aktualisierungsdatum.</p>

    <h2>12. Kontakt</h2>
    <p>Bei Datenschutzfragen oder zur Ausübung Ihrer Rechte kontaktieren Sie das Datenschutzteam von <?= e(SITE_NAME) ?> über die Kontaktseite.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Zurück zur Startseite</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

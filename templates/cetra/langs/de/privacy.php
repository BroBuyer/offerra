<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Datenschutzrichtlinie');
$page_description = 'Wie ' . SITE_NAME . ' Ihre personenbezogenen Daten erhebt, nutzt und schützt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
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
      <span class="eyebrow">Rechtliche Informationen</span>
      <h1>Datenschutzrichtlinie</h1>
      <p class="lede">Wie <?= e(SITE_NAME) ?> Ihre personenbezogenen Daten erhebt, nutzt und schützt.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Zuletzt aktualisiert: Januar 2025</p>

      <h2>1. Einleitung</h2>
      <p><?= e(SITE_NAME) ?> („wir“, „unser“, „unsere“) verpflichtet sich, die Privatsphäre von Besuchern und Kunden zu schützen. Diese Datenschutzrichtlinie erklärt, welche personenbezogenen Daten wir erheben, warum und wie wir sie verarbeiten, wenn Sie unsere Website und Dienste nutzen.</p>

      <h2>2. Informationen, die wir erheben</h2>
      <ul>
        <li>Identitätsdaten — Name, Geburtsdatum, behördlich ausgestellte Ausweisdokumente für Registrierung und KYC/AML-Compliance.</li>
        <li>Kontaktdaten — E-Mail-Adresse, Telefonnummer, Postanschrift.</li>
        <li>Finanzdaten — Zahlungsdetails, Transaktionshistorie, Informationen zur Herkunft der Mittel.</li>
        <li>Technische Daten — IP-Adresse, Browsertyp, Gerätekennungen, Cookies und Nutzungsanalysen.</li>
      </ul>

      <h2>3. Wie wir Ihre Daten nutzen</h2>
      <ul>
        <li>Zur Identitätsprüfung und Erfüllung regulatorischer Pflichten.</li>
        <li>Zur Bereitstellung, Wartung und Verbesserung unserer Plattform und Dienste.</li>
        <li>Zur Verarbeitung von Zahlungen und Erkennung betrügerischer Aktivitäten.</li>
        <li>Zur Kommunikation mit Ihnen zu Ihrem Konto, Updates und Supportanfragen.</li>
        <li>Zum Versand von Marketingmitteilungen, wenn Sie zugestimmt haben (Abmeldung jederzeit möglich).</li>
      </ul>

      <h2>4. Rechtsgrundlage</h2>
      <p>Wir verarbeiten personenbezogene Daten auf Grundlage einer oder mehrerer der folgenden rechtmäßigen Grundlagen: Vertragserfüllung, Erfüllung einer rechtlichen Verpflichtung, unsere berechtigten Interessen oder Ihre Einwilligung.</p>

      <h2>5. Weitergabe und Offenlegung</h2>
      <p>Wir können personenbezogene Daten mit regulierten Zahlungsanbietern, KYC/AML-Verifizierungspartnern, Cloud-Infrastrukturanbietern, professionellen Beratern und zuständigen Behörden teilen, wenn gesetzlich erforderlich. Wir verkaufen keine personenbezogenen Daten.</p>

      <h2>6. Internationale Übermittlungen</h2>
      <p>Wenn personenbezogene Daten außerhalb Ihrer Rechtsordnung übermittelt werden, stellen wir sicher, dass angemessene Garantien bestehen, einschließlich Standardvertragsklauseln.</p>

      <h2>7. Datenspeicherung</h2>
      <p>Wir speichern personenbezogene Daten so lange, wie es zur Erbringung der Dienste und zur Erfüllung rechtlicher, regulatorischer und buchhalterischer Anforderungen erforderlich ist — typischerweise mindestens fünf Jahre nach Kontoschließung.</p>

      <h2>8. Ihre Rechte</h2>
      <p>Vorbehaltlich des geltenden Rechts können Sie Auskunft, Berichtigung, Löschung, Einschränkung oder Übertragbarkeit Ihrer personenbezogenen Daten verlangen und bestimmten Verarbeitungen widersprechen. Zur Ausübung dieser Rechte kontaktieren Sie uns unter der unten stehenden Adresse.</p>

      <h2>9. Cookies</h2>
      <p>Wir verwenden essenzielle und analytische Cookies, um die Website zu betreiben und die Nutzung zu verstehen. Sie können Cookies in Ihren Browsereinstellungen verwalten.</p>

      <h2>10. Sicherheit</h2>
      <p>Wir setzen administrative, technische und physische Schutzmaßnahmen ein, um personenbezogene Daten vor unbefugtem Zugriff, Offenlegung, Änderung oder Zerstörung zu schützen. Kein System ist vollkommen sicher, und wir können absolute Sicherheit nicht garantieren.</p>

      <h2>11. Änderungen</h2>
      <p>Wir können diese Richtlinie von Zeit zu Zeit aktualisieren. Die neueste Version ist stets auf dieser Seite mit aktualisiertem Datum verfügbar.</p>

      <h2>12. Kontakt</h2>
      <p>Bei Datenschutzfragen oder zur Ausübung Ihrer Rechte kontaktieren Sie das Datenschutzteam von <?= e(SITE_NAME) ?> über unsere <a href="<?= page_url('contacts.php') ?>">Kontaktseite</a>.</p>

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

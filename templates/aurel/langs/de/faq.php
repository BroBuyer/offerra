<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Häufige Fragen ' . SITE_NAME;
$page_description = 'Fragen, beantwortet — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Fragen</span>
    <h1>Fragen, klar beantwortet</h1>
    <p class="kpnq92g">Was Menschen vor der Kontoeröffnung fragen — und die Antworten, die wir auch am Telefon geben würden.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Fragen zum Geld</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ist <?= e(SITE_NAME) ?> ein Betrug?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nein: <?= e(SITE_NAME) ?> arbeitet mit Identitätsprüfungen, veröffentlicht Bedingungen und Risikohinweis vollständig, und Auszahlungen kehren immer zur ursprünglichen Zahlungsmethode zurück. Jede Anlage birgt jedoch echte Risiken, und keine seriöse Plattform verspricht garantierte Erträge — seien Sie vorsichtig bei jedem, der das tut.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Was kostet die Kontoeröffnung?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Die Kontoeröffnung ist kostenlos. Keine Registrierungsgebühr, kein Abo; Sie zahlen nur den Betrag ein, den Sie investieren möchten.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Wie lange dauern Auszahlungen?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Anträge werden an Werktagen bearbeitet und kehren zur Einzahlungsmethode zurück. Überweisungen dauern länger als Karten oder E-Wallets.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Gibt es einen Mindestbetrag?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, und er ist bewusst niedrig, ab <?= e(money_min()) ?>, damit Sie klein starten und später mehr hinzufügen können. Den genauen Betrag sehen Sie vor jeder Bestätigung.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Häufig gestellte Fragen</h2>
    <div class="fjl4d">
      <details open><summary>Wie hoch ist die Mindesteinzahlung zum Start?</summary><p>Sie können Ihr Konto eröffnen und finanzieren ab <?= e(money_min()) ?> mindestens. Weitere Mittel können Sie hinzufügen, sobald Ihr Plan voranschreitet.</p></details>
      <details><summary>Wie funktionieren Auszahlungen?</summary><p>Fordern Sie jederzeit eine Auszahlung im Dashboard an. Das Geld kehrt zu Ihrer Zahlungsmethode zurück, in den üblichen Bearbeitungszeiten.</p></details>
      <details><summary>Ist mein Geld sicher verwahrt?</summary><p>Konten sind mit Sicherheit auf professionellem Niveau und Identitätsprüfungen geschützt. Wie bei jeder Anlage ist Ihr Kapital gefährdet, und Werte können fallen oder steigen.</p></details>
      <details><summary>Wie lange dauert es, mit dem Investieren zu beginnen?</summary><p>Die meisten Mitglieder schließen die Registrierung in wenigen Minuten ab. Sobald die erste Einzahlung verarbeitet ist, können Sie einen Plan sofort aktivieren.</p></details>
      <details><summary>Gibt es versteckte Gebühren?</summary><p>Alle Kosten sind vor der Verpflichtung transparent sichtbar. Sie sehen immer, was für Ihren Plan gilt — ohne Überraschungen.</p></details>
      <details><summary>Wie alt muss man zur Registrierung mindestens sein?</summary><p>Sie müssen mindestens 18 Jahre alt sein, um ein Konto zu eröffnen und zu investieren. Eine Prüfung kann Alter und Identität bestätigen.</p></details>
      <details><summary>Welche Zahlungsmethoden werden akzeptiert?</summary><p>Übliche Methoden wie Debit- und Kreditkarten, Überweisungen, ausgewählte E-Wallets und Kryptowährungen werden akzeptiert. Die genauen Optionen sehen Sie beim Einzahlungsschritt.</p></details>
      <details><summary>Wann ist der Kundensupport erreichbar?</summary><p>Unser Support-Team ist montags bis freitags von 9:00 bis 18:00 Uhr erreichbar und antwortet auf jede Anfrage innerhalb eines Arbeitstags.</p></details>
      <details><summary>Wie werden Steuern auf Gewinne behandelt?</summary><p>Steuern auf Anlagegewinne hängen von den Regeln Ihres Landes ab und liegen in Ihrer Verantwortung. Wir empfehlen eigene Aufzeichnungen und den Rat eines Steuerberaters.</p></details>
      <details><summary>Was ist die KYC-Prüfung und warum ist sie nötig?</summary><p>KYC (Know Your Customer) ist eine Standardprüfung Ihrer Identität. Sie schützt Konten und ist ein üblicher Teil der Eröffnung eines Anlagekontos.</p></details>
      <details><summary>Brauche ich vorherige Anlageerfahrung?</summary><p>Nein. Jedes Mitglied hat einen persönlichen Finanzanalysten, der Sie bei jedem Schritt führt — Vorkenntnisse der Märkte sind nicht nötig.</p></details>
      <details><summary>Wer verwaltet meine Anlagen?</summary><p>Ein fester Finanzanalyst mit KI-Tools, ausgerichtet auf Ihre Ziele und Ihr Risikoniveau. Der Analyst verbindet Fachwissen mit Technologie — Entscheidungen bleiben menschlich.</p></details>
      <details><summary>Erfüllt die Plattform regulatorische Standards?</summary><p>Ja — sie erfüllt nationale Finanz- und Cybersicherheitsstandards, mit Kontoschutz und integrierter Prüfung.</p></details>
      <details><summary>Kann ich später weiteres Geld einzahlen?</summary><p>Ja. Sie können Ihr Konto jederzeit aufstocken und den Plan mit Ihrem Analysten anpassen, wenn sich Ihre Ziele ändern.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Konto und Sicherheit</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Wie funktioniert die Anmeldung bei <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sie melden sich mit registrierter E-Mail und Passwort auf der Website oder im mobilen Browser an. Bei Zwei-Schritt-Verifizierung geben Sie einen Extra-Code ein; ein vergessenes Passwort setzen Sie auf dem Anmeldebildschirm zurück.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Warum brauchen Sie Ausweisdokumente?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Die Prüfung ist nötig, bevor ein Konto Geld bewegen kann. Sie verhindert auch, dass jemand anderes ein Konto in Ihrem Namen eröffnet.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Brauche ich Vorerfahrung?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nein. Die meisten Mitglieder starten ohne. Ein Spezialist führt Sie durch die ersten Schritte, und ein Demo-Guthaben dient zum Üben.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kann ich es am Telefon nutzen?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, die Plattform läuft im mobilen Browser, nichts muss installiert werden.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Starten — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Nachricht senden</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

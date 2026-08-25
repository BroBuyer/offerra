<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Missbrauch melden ᐉ ' . SITE_NAME;
$page_description = 'Missbrauch melden — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Vertrauen und Sicherheit</span>
    <h1>Missbrauch melden</h1>
    <p class="etpy2">Helfen Sie uns, <?= e(SITE_NAME) ?> sicher zu halten. Melden Sie vermuteten Betrug, Identitätsmissbrauch oder Missbrauch unserer Plattform oder Marke.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Was Sie melden sollten</h2>
    <p>Bitte melden Sie dem Trust-and-Safety-Team eines der Folgenden:</p>
    <ul>
      <li>Phishing-E-Mails, betrügerische Websites oder gefälschte Apps, die sich als <?= e(SITE_NAME) ?> ausgeben.</li>
      <li>Social-Media-Konten, Anzeigen oder Messaging-Kanäle, die unseren Namen, unser Logo oder Marken missbrauchen.</li>
      <li>Vermutete Kontoübernahme, unbefugter Zugriff oder Identitätsdiebstahl.</li>
      <li>Verdächtige Zahlungsaufforderungen, „Recovery-Agenten“ oder Dritte, die behaupten, in unserem Namen zu handeln.</li>
      <li>Marktmissbrauch, Geldwäschebedenken oder jede illegale Aktivität im Zusammenhang mit unseren Diensten.</li>
      <li>Beleidigendes, drohendes oder belästigendes Verhalten gegenüber Mitarbeitern oder Nutzern.</li>
    </ul>

    <h2>So melden Sie</h2>
    <p>Senden Sie uns einen ausführlichen Bericht über einen der Kanäle unten. Wenn möglich, geben Sie an:</p>
    <ul>
      <li>Datum und Uhrzeit des Vorfalls.</li>
      <li>URLs, Screenshots, Nachrichtenköpfe, Absenderadressen oder Telefonnummern.</li>
      <li>Ihre Kontodaten (wenn der Bericht Ihr Konto betrifft).</li>
      <li>Weiterer Kontext, der bei der Untersuchung hilft.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-Mail an Trust and Safety</b>
        <span>Nutzen Sie die Kontaktseite, um unser Trust-and-Safety-Team zu erreichen. Meldungen werden innerhalb eines Arbeitstags vorsortiert.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Sicherheitsmeldung</b>
        <span>Für eine verantwortungsvolle Meldung von Sicherheitslücken in unseren Systemen kontaktieren Sie uns, bevor Sie Details öffentlich machen.</span>
      </div>
    </div>

    <h2>Was passiert als Nächstes?</h2>
    <p>Wir prüfen jede Meldung. Je nach Art können wir um weitere Informationen bitten, mit Zahlungsanbietern oder Hostern zusammenarbeiten, um betrügerische Inhalte zu entfernen, oder Vorgänge an Behörden weitergeben. Wir behandeln Meldungen vertraulich und schützen, wo gesetzlich möglich, die Identität der Melder.</p>

    <h2>Dringende Angelegenheiten</h2>
    <p>Wenn Sie glauben, Opfer einer Straftat geworden zu sein, kontaktieren Sie die örtliche Polizei und uns. Wenn Sie vermuten, dass Ihr Konto kompromittiert ist, ändern Sie sofort das Passwort und benachrichtigen Sie uns umgehend.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Trust and Safety kontaktieren</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Zurück zur Startseite</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

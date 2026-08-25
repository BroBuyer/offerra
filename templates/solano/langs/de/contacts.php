<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Wir sind für Sie da';
$page_description = 'Haben Sie eine Frage zu ' . SITE_NAME . ' oder Ihrem Konto?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kontakt</span>
    <h1>Wir sind für Sie da</h1>
    <p class="kpnq92g">Haben Sie eine Frage zu <?= e(SITE_NAME) ?> oder Ihrem Konto? Unser Support-Team hilft gern. Schreiben Sie uns, wir antworten so schnell wie möglich.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Bevor Sie uns schreiben</h2>
    <p>Die meisten Fragen haben schon eine Antwort auf der Website, und zuerst nachzusehen ist meist schneller als auf eine Antwort zu warten.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Häufige Fragen</a> — Kosten, Auszahlungen, Prüfung und Mindestbeträge.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">So funktioniert es</a> — was nach der Registrierung passiert, Schritt für Schritt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Preise</a> — was kostenlos ist und wo Kosten entstehen können.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Starten — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>So erreichen Sie uns</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanal</th><th scope="col">Am besten für</th><th scope="col">Antwort</th></tr></thead>
      <tbody>
        <tr><td>E-Mail-Support — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Kontofragen, Prüfung, Auszahlungen</td><td>Wir antworten in der Regel innerhalb eines Arbeitstags.</td></tr>
        <tr><td>Rückrufbitte</td><td>Alles, was sich am Telefon leichter erklärt</td><td>Support-Zeiten: Montag bis Freitag, 9:00–18:00</td></tr>
        <tr><td>Missbrauchsmeldung — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Identitätsmissbrauch, Markenmissbrauch, verdächtige Nachrichten</td><td>Prüfung nach Eingang</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Was Sie erwarten können, wenn Sie uns kontaktieren</h2>
    <h3>Welchen Kanal Sie nutzen</h3>
    <p>E-Mail ist die richtige Wahl für alles mit Anhang: Identitätsprüfungen, Auszahlungsfragen, Fragen zu einem Auszug. Das Rückrufformular ist für alles andere, weil die meisten Kontofragen in zwei Minuten Gespräch schneller gelöst sind als in vier Nachrichten.</p>
    <h4>Außerhalb der Support-Zeiten</h4>
    <p>Nachrichten am Abend oder am Wochenende bleiben in der Warteschlange und werden am nächsten Werktag zuerst beantwortet, in der Reihenfolge des Eingangs.</p>
    <h3>Angaben, die sich lohnen</h3>
    <p>Die registrierte E-Mail und das ungefähre Datum reichen, um das Konto zu finden. Senden Sie niemals ein Passwort, eine vollständige Kartennummer oder einen Einmalcode: niemand aus unserem Team wird Sie danach fragen.</p>
    <h4>Wenn etwas nicht stimmt</h4>
    <p>Melden Sie es am selben Tag. Alles mit einer Zahlung, die Sie nicht erkennen, wird sofort bearbeitet, ohne die übliche Warteschlange.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

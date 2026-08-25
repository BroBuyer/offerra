<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Preise ' . SITE_NAME;
$page_description = 'Einfache, transparente Preise — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Einfache, transparente Preise.</h1>
    <p class="kpnq92g">Der Einstieg bei <?= e(SITE_NAME) ?> ist kostenlos. Es gibt keine versteckten Gebühren für die Kontoeröffnung, und Sie zahlen nur ein, was Sie investieren möchten: Plattform und Tools sind enthalten.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Wo Kosten entstehen können</h2>
    <p>Das sind die einzigen Stellen, an denen Geld Ihr Guthaben verlässt für etwas anderes als eine von Ihnen gewählte Anlage.</p>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Position</th><th scope="col">Berechnet von</th><th scope="col">Hinweis</th></tr></thead>
      <tbody>
        <tr><td>Kontoeröffnung</td><td>—</td><td>Kostenlos.</td></tr>
        <tr><td>Plattformzugang</td><td>—</td><td>Enthalten, ohne Abo.</td></tr>
        <tr><td>Marktspread</td><td>Broker</td><td>Die übliche Differenz zwischen Kauf- und Verkaufspreis.</td></tr>
        <tr><td>Netzwerk- / Bankgebühr</td><td>Zahlungsanbieter</td><td>Hängt von der gewählten Methode ab.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapital ist gefährdet. Investieren Sie nur, was Sie sich leisten können zu verlieren.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Konto eröffnen</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Was enthalten ist</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kontoeinrichtung kostenlos: keine Registrierungs- oder Lizenzgebühren.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Keine versteckten Gebühren für Einzahlungen, Auszahlungen oder Kontoführung.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Es können nur übliche Broker-Spreads oder Netzwerkkosten anfallen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Starten Sie mit der Mindesteinzahlung und skalieren Sie in Ihrem Tempo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Wie die Zahlen in der Praxis aussehen</h2>
    <h3>Eine erste Einzahlung, Schritt für Schritt</h3>
    <p>Eine erste Einzahlung ist das gesamte Kostenbild an einem Ort: der Betrag, den Sie senden, der Spread bei der Umrechnung und sonst nichts, bis Sie handeln. Keine monatliche Kontogebühr und keine Gebühr dafür, das Guthaben liegen zu lassen.</p>
    <h4>Was am selben Tag passiert</h4>
    <p>Das Guthaben erscheint, sobald die Zahlung gutgeschrieben ist, und ein Spezialist geht den Plan durch, bevor etwas eröffnet wird. Nichts wird automatisch in Ihrem Namen platziert.</p>
    <h3>Auszahlungen und was sie kosten</h3>
    <p>Auszahlungen kehren zur Zahlungsmethode zurück, über die das Geld kam: das ist eine Vorgabe, keine Präferenz, damit das Konto Ihres bleibt. Die Bearbeitung ist von uns kostenlos; der einzige Abzug kann von Ihrer Bank oder dem Kartenherausgeber kommen.</p>
    <h4>Zeiten, mit denen Sie planen können</h4>
    <p>Anträge an einem Werktag werden am selben Tag geprüft. Kartenerstattungen dauern meist drei bis fünf Werktage, Überweisungen zwei.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

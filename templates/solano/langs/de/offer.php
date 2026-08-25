<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Warum wir ' . SITE_NAME;
$page_description = 'Warum Menschen mit ' . SITE_NAME . ' starten';
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Warum diese Plattform</span>
    <h1>Warum Menschen hier starten</h1>
    <p class="kpnq92g">Kein Verkaufspitch: konkrete, prüfbare Gründe — und die Punkte, die nicht zu jedem passen.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Keine Tabellen. Keine überladenen Bildschirme. Keine Zweifel in letzter Minute</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Plattform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Klassischer Broker</th><th scope="col">Selbst handeln</th></tr></thead>
      <tbody>
        <tr><td>KI-Orderausführung</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">begrenzte Zeiten</td><td style="color:var(--muted)">manuell</td></tr>
        <tr><td>Abdeckung 24/7 über alle Märkte</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">Papierkram</td><td style="color:var(--muted)">Selbst machen</td></tr>
        <tr><td>Orderrouting unter einer Sekunde</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">nur nach Tarif</td><td style="color:var(--muted)">manuell</td></tr>
        <tr><td>Mehrwährungsberichte</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">begrenzte Zeiten</td><td style="color:var(--muted)">Selbst machen</td></tr>
        <tr><td>Kontoeröffnung ohne Papier</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">Papierkram</td><td style="color:var(--muted)">manuell</td></tr>
        <tr><td>Arbitrage zwischen Börsen</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">nur nach Tarif</td><td style="color:var(--muted)">Selbst machen</td></tr>
        <tr><td>Fester persönlicher Betreuer</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">begrenzte Zeiten</td><td style="color:var(--muted)">manuell</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Was Sie bekommen, das ein Do-it-yourself-Setup nicht bietet</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Ausführung unter einer Sekunde auf jedem verbundenen Markt.</b> <?= e(SITE_NAME) ?> hält dauerhafte API-Verbindungen mit geringer Latenz zu jeder unterstützten Börse. Wenn das Modell ein Signal erzeugt, wird die Order gesendet, ausgeführt und im Dashboard erfasst — vor dem nächsten Tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Es läuft 24/7, durch jede Marktsitzung.</b> Krypto pausiert nicht, und <?= e(SITE_NAME) ?> auch nicht. Die Engine analysiert Paare auch an Wochenenden und Feiertagen, damit keine Chance verpasst wird.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Mehrwährungsberichte.</b> Jedes Guthaben, jeder Trade und jede Auszahlung erscheint in Ihrer Landeswährung. Keine versteckten Umrechnungsschritte.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Getrenntes Kapital.</b> Ihr Geld bleibt auf Ihrem eigenen Konto. <?= e(SITE_NAME) ?> hält es nie: die Engine darf nur Orders senden.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Sicherheit auf Bankniveau.</b> TLS-Verschlüsselung auf der gesamten Plattform, Zwei-Schritt-Verifizierung standardmäßig und vierteljährliche Infrastruktur-Audits durch Dritte. Trade-Belege on-chain erfasst.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Drei Anlageklassen, eine Plattform.</b> Die meisten Retail-Plattformen beschränken Sie auf einen Markt. <?= e(SITE_NAME) ?> handelt Kryptowährungen, notierte Aktien und die wichtigsten Währungspaare vom selben Dashboard.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Voreingestellte Risikolimits auf jeder Position.</b> Stop-Loss, maximal akzeptierter Verlust und Kapitalallokationsgrenzen sind nach Anlageklasse konfiguriert. Die Engine schließt jeden Trade, der eine Schwelle überschreitet, und das Ereignis wird in Ihrer Audit-Historie erfasst.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Für wen das wahrscheinlich nicht geeignet ist</h2>
    <p>Klarheit spart allen Zeit. Wenn einer der folgenden Punkte auf Sie zutrifft, ist ein anderer Weg besser.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sie brauchen garantierte Erträge. Keine ehrliche Plattform bietet sie, und wir auch nicht.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sie wollen Geld investieren, auf das Sie nicht verzichten können.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sie handeln mit professionellem Volumen und eigener Ausführungsinfrastruktur.</span></li>
    </ul>
    <p class="jkkyl">Investieren birgt Risiken, einschließlich des möglichen Verlusts eines Teils oder des gesamten Kapitals. Der Wert von Anlagen kann fallen oder steigen, und Sie können weniger zurückerhalten, als Sie eingesetzt haben. Sie sollten kein Geld investieren, dessen Verlust Sie sich nicht leisten können.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Starten — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

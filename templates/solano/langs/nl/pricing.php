<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prijzen ' . SITE_NAME;
$page_description = 'Eenvoudige en transparante prijzen — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Prijzen</span>
    <h1>Eenvoudige en transparante prijzen.</h1>
    <p class="kpnq92g">Beginnen met <?= e(SITE_NAME) ?> is gratis. Geen verborgen kosten voor het openen van een account, en u stort alleen wat u wilt investeren: het platform en de tools zijn inbegrepen.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Waar kosten kunnen ontstaan</h2>
    <p>Dit zijn de enige punten waar geld uw saldo verlaat voor iets anders dan een door u gekozen investering.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Onderdeel</th><th scope="col">Wordt in rekening gebracht door</th><th scope="col">Opmerking</th></tr></thead>
      <tbody>
        <tr><td>Account openen</td><td>—</td><td>Gratis.</td></tr>
        <tr><td>Toegang tot het platform</td><td>—</td><td>Inbegrepen, zonder abonnement.</td></tr>
        <tr><td>Marktspread</td><td>Broker</td><td>Het gebruikelijke verschil tussen koop- en verkoopprijs.</td></tr>
        <tr><td>Netwerk-/bankkosten</td><td>Betalingsprovider</td><td>Hangt af van de methode die u kiest.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapitaal loopt risico. Beleg alleen wat u zich kunt veroorloven te verliezen.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Account openen</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Wat is inbegrepen</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gratis account: geen registratie- of licentiekosten.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Geen verborgen kosten voor stortingen, opnames of accountonderhoud.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Alleen gebruikelijke brokers spreads of netwerkkosten kunnen van toepassing zijn.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Begin vanaf de minimale storting en schaal op in uw eigen tempo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hoe de cijfers er in de praktijk uitzien</h2>
    <h3>Een eerste storting, stap voor stap</h3>
    <p>De eerste storting vat alle kosten op één plek samen: het bedrag dat u stuurt, de spread bij conversie, en verder niets tot u besluit te beleggen. Geen maandelijkse accountfee of kosten voor het laten staan van het saldo.</p>
    <h4>Wat dezelfde dag gebeurt</h4>
    <p>Het saldo verschijnt wanneer de betaling is bevestigd, en een specialist doorloopt het plan voordat er iets wordt geopend. Er wordt niets automatisch op uw naam geplaatst.</p>
    <h3>Opnames en wat ze kosten</h3>
    <p>Opnames gaan terug naar de betaalmethode waarmee het geld binnenkwam: dat is een vereiste, geen voorkeur, zodat het account van u blijft. Verwerking is gratis aan onze kant; de enige mogelijke inhouding komt van uw bank of kaartuitgever.</p>
    <h4>Termijnen waar u op kunt rekenen</h4>
    <p>Aanvragen op werkdagen worden dezelfde dag beoordeeld. Terugbetalingen naar kaart duren meestal drie tot vijf werkdagen, overschrijvingen twee.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Waarom wij ' . SITE_NAME;
$page_description = 'Waarom mensen kiezen om te beginnen met ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Waarom dit platform</span>
    <h1>Waarom mensen hier kiezen om te beginnen</h1>
    <p class="kpnq92g">Geen verkooppraatje: concrete, verifieerbare redenen, en ook de delen die niet voor iedereen passen.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Geen spreadsheets. Geen schermen. Geen last-minute twijfels</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Traditionele broker</th><th scope="col">Zelf beleggen</th></tr></thead>
      <tbody>
        <tr><td>Orderuitvoering met AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">beperkte openingstijden</td><td style="color:var(--muted)">handmatig</td></tr>
        <tr><td>24/7 toezicht op alle markten</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papierwerk</td><td style="color:var(--muted)">Op eigen houtje</td></tr>
        <tr><td>Orderrouting in minder dan een seconde</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">alleen op niveau</td><td style="color:var(--muted)">handmatig</td></tr>
        <tr><td>Rapporten in meerdere valuta</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">beperkte openingstijden</td><td style="color:var(--muted)">Op eigen houtje</td></tr>
        <tr><td>Account openen zonder papierwerk</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papierwerk</td><td style="color:var(--muted)">handmatig</td></tr>
        <tr><td>Arbitrage tussen exchanges</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">alleen op niveau</td><td style="color:var(--muted)">Op eigen houtje</td></tr>
        <tr><td>Toegewezen persoonlijk manager</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">beperkte openingstijden</td><td style="color:var(--muted)">handmatig</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Wat u krijgt en zelf beleggen u niet biedt</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Uitvoering in minder dan een seconde op elke verbonden markt.</b> <?= e(SITE_NAME) ?> onderhoudt permanente low-latency API-verbindingen met elke ondersteunde exchange. Wanneer het model een signaal genereert, wordt de order verzonden, uitgevoerd en in uw dashboard geregistreerd vóór de volgende tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Werkt 24/7, in elke marktsessie.</b> Cryptocurrency rust nooit, en <?= e(SITE_NAME) ?> ook niet. De engine blijft paren analyseren in weekenden en op feestdagen zodat u geen kans mist.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Rapporten in meerdere valuta.</b> Elk saldo, elke transactie en elke opname wordt in uw lokale valuta getoond. Geen verborgen conversiestappen op enig moment.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Gescheiden kapitaal.</b> Uw fondsen blijven op uw eigen rekening. <?= e(SITE_NAME) ?> bewaart ze nooit: de engine heeft alleen toestemming om orders te verzenden.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Beveiliging op bankniveau.</b> TLS-versleuteling op het hele platform, standaard tweestapsverificatie en kwartaal-audits van de infrastructuur door derden. Transactiebonnen geregistreerd op blockchain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Drie activaklassen, één platform.</b> De meeste retailplatforms beperken u tot één markt. <?= e(SITE_NAME) ?> handelt in cryptocurrency, genoteerde aandelen en de belangrijkste valutaparen vanuit hetzelfde dashboard.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Vooraf ingestelde risicolimieten per positie.</b> Stop-loss, maximaal toegestaan verlies en kapitaalallocatielimieten worden per activaklasse ingesteld. De engine sluit automatisch elke transactie die een drempel overschrijdt en het incident wordt in uw auditlog vastgelegd.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Voor wie het waarschijnlijk niet is</h2>
    <p>Het duidelijk zeggen bespaart iedereen tijd. Als een van deze punten op u van toepassing is, past een andere route beter.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>U heeft gegarandeerd rendement nodig. Geen eerlijk platform biedt dat, en wij ook niet.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>U wilt geld beleggen dat u zich niet kunt veroorloven te verliezen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>U handelt op professioneel volume met uw eigen uitvoeringsinfrastructuur.</span></li>
    </ul>
    <p class="jkkyl">Beleggen brengt risico met zich mee, inclusief het mogelijke verlies van een deel of al uw kapitaal. De waarde van beleggingen kan stijgen of dalen, en u kunt minder terugkrijgen dan u heeft geïnvesteerd. Beleg geen geld dat u zich niet kunt veroorloven te verliezen.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Begin — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

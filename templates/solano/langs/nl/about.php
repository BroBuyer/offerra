<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Over ' . SITE_NAME;
$page_description = 'Eén account, één duidelijk overzicht van uw kapitaal — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Het platform</span>
    <h1>Eén account, één duidelijk overzicht van alles</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> bundelt uw saldo, strategie en rendement in één transparant dashboard, zodat elke beslissing geïnformeerd is en elk cijfer zichtbaar is.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>De mensen achter uw account</h2>
    <p>Achter de interface zitten analisten die dagelijks de markten bestuderen, engineers die het platform draaiende houden en supportspecialisten die in uw taal antwoorden.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Marktanalisten die dagelijks de condities herzien, niet eens per kwartaal.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Engineers beschikbaar voor het platform, met permanente monitoring.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Supportspecialisten die registratie, verificatie en opnames afhandelen.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regelgeving, risico en wat wij niet beloven</h2>
    <p>Beleggen brengt risico met zich mee en geen platform elimineert dat. Wat een platform wel kan doen, is transparant zijn: voorwaarden publiceren, klantgeld bij gereguleerde partners houden en documenteren hoe opnames werken.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identiteitsverificatie voordat fondsen op de rekening kunnen worden verplaatst.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Opnames worden teruggestort naar dezelfde methode als de storting.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Voorwaarden, risicowaarschuwing en privacybeleid volledig gepubliceerd.</span></li>
    </ul>
    <p class="jkkyl">Beleggen brengt risico met zich mee, inclusief het mogelijke verlies van een deel of al uw kapitaal. De waarde van beleggingen kan stijgen of dalen, en u kunt minder terugkrijgen dan u heeft geïnvesteerd. Beleg geen geld dat u zich niet kunt veroorloven te verliezen.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Begin — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Bericht verzenden</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hoe het platform is gebouwd</h2>
    <ol class="nxlk2qu">
      <li><h3>Het startpunt</h3><p>Een kleine groep analisten en engineers hoorde steeds dezelfde klacht: de tools bestaan, maar niemand legt ze uit.</p></li>
      <li><h3>Eerste werkende versie</h3><p>De eerste versie deed één ding: een saldo en positie in eenvoudige termen tonen. Al het andere werd verwijderd tot dat onderdeel duidelijk was.</p></li>
      <li><h3>Het menselijke aspect toevoegen</h3><p>Automatisering beantwoordt wat en wanneer; mensen beantwoorden waarom. Supportspecialisten werden toegevoegd zodat elk lid iemand heeft om aan te vragen.</p></li>
      <li><h3>Opening naar meer markten</h3><p>Lokale betaalmethoden, lokale talen en lokale supporttijden.</p></li>
      <li><h3>Waar we nu staan</h3><p>Dezelfde principes op grotere schaal: transparante cijfers, toegankelijke mensen, geen verrassingen in de kleine lettertjes.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Waarom we er zijn</h2>
    <p>De meeste mensen die willen beleggen beginnen nooit, omdat elk pad lijkt bedoeld voor iemand die de terminologie al kent. Wij bouwden het tegenovergestelde: één account, duidelijke taal en een specialist met wie u echt kunt praten.</p>
    <p>Geen jargon waar een eenvoudige zin volstaat, geen kosten die pas na het verplaatsen van geld verschijnen, en geen rendementsbeloften die niemand eerlijk kan garanderen.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Actieve gebruikers</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Verhandeld volume</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Support</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registratie ' . SITE_NAME;
$page_description = 'Open uw account bij ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Begin nu</span>
    <h1>Open uw account</h1>
    <p class="kpnq92g">Een paar gegevens om te beginnen, en een specialist regelt de rest. In deze stap worden geen kosten in rekening gebracht.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Wat daarna gebeurt</h2>
    <ol class="nxlk2qu">
      <li><h3>U verstuurt het formulier</h3><p>Duurt een paar minuten en kost niets.</p></li>
      <li><h3>Een specialist belt u</h3><p>Bevestigt uw gegevens, beantwoordt vragen en legt de volgende stap uit. Geen druk om te storten.</p></li>
      <li><h3>U verifieert en kiest een bedrag</h3><p>Pas dan wordt geld verplaatst, en alleen het bedrag dat u kiest.</p></li>
    </ol>
    <p class="jkkyl">Beleggen brengt risico met zich mee, inclusief het mogelijke verlies van een deel of al uw kapitaal. De waarde van beleggingen kan stijgen of dalen, en u kunt minder terugkrijgen dan u heeft geïnvesteerd. Beleg geen geld dat u zich niet kunt veroorloven te verliezen.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Begin — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Veelgestelde vragen</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Wat u nodig heeft</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Een e-mailadres dat u echt gebruikt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Een telefoonnummer, zodat een specialist u kan bereiken.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Een identiteitsbewijs, voor latere verificatie.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Wat er gebeurt na het versturen van het formulier</h2>
    <h3>Het verificatiegesprek</h3>
    <p>Een specialist belt om de gegevens die u stuurde te bevestigen, vragen te beantwoorden en een redelijk startbedrag met u af te spreken. Het is een gesprek, geen verkoopscript: een account met onrealistische verwachtingen helpt niemand.</p>
    <h4>Hoe lang het duurt</h4>
    <p>Meestal duurt het tien tot vijftien minuten. Als u liever op een specifiek tijdstip wordt gebeld, vermeldt u dat in het formulier en wordt dat gerespecteerd.</p>
    <h3>Identiteitsverificatie uitgelegd</h3>
    <p>Vóór de eerste storting vragen wij een identiteitsbewijs met foto en een recent bewijs van adres. Dezelfde eis als bij elke gereguleerde financiële dienst, zodat een opname alleen naar u kan teruggaan.</p>
    <h4>Wat wordt geaccepteerd</h4>
    <p>Paspoort of identiteitskaart, en een factuur of bankafschrift van de laatste drie maanden. Een scherpe foto met de mobiel is voldoende.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Open uw account</h2>
      <p class="pt6joj">Begin binnen enkele minuten.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Nu beginnen';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

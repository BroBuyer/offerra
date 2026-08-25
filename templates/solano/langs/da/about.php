<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Om ' . SITE_NAME;
$page_description = 'Én konto, ét klart overblik over din kapital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platformen</span>
    <h1>Én konto, ét klart overblik over det hele</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> samler din saldo, strategi og afkast i ét gennemsigtigt dashboard, så hver beslutning er informeret og hvert tal er synligt.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Menneskerne bag din konto</h2>
    <p>Bag interfacet er analytikere, der studerer markederne dagligt, ingeniører, der holder platformen kørende, og supportspecialister, der svarer på dit sprog.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Markedsanalytikere, der gennemgår forholdene dagligt, ikke én gang pr. kvartal.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingeniører tilgængelige for platformen med permanent overvågning.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Supports specialister, der håndterer registrering, verificering og udbetalinger.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regler, risiko og hvad vi ikke lover</h2>
    <p>Investering medfører risiko, og ingen platform fjerner det. Det en platform kan gøre, er at være tydelig: offentliggøre vilkår, holde kundemidler hos regulerede partnere og dokumentere, hvordan udbetalinger fungerer.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identitetsverificering, før midler kan flyttes på kontoen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Udbetalinger returneres til samme metode som indbetalingen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vilkår, risikooplysning og privatlivspolitik offentliggjort i fuld længde.</span></li>
    </ul>
    <p class="jkkyl">Investering medfører risiko, herunder muligt tab af dele eller hele kapitalen. Værdien af investeringer kan stige eller falde, og du kan få mindre tilbage end du investerede. Invester ikke penge, du ikke har råd til at miste.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Send besked</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hvordan platformen blev bygget</h2>
    <ol class="nxlk2qu">
      <li><h3>Udgangspunktet</h3><p>En lille gruppe analytikere og ingeniører hørte altid den samme klage: værktøjerne findes, men ingen forklarer dem.</p></li>
      <li><h3>Første fungerende version</h3><p>Den første version gjorde én ting: vise en saldo og position i enkle termer. Alt andet blev fjernet, indtil den del var klar.</p></li>
      <li><h3>Tilføjelse af det menneskelige</h3><p>Automatisering svarer på hvad og hvornår; mennesker svarer på hvorfor. Supports specialister blev tilføjet, så hvert medlem har nogen at spørge.</p></li>
      <li><h3>Åbning mod flere markeder</h3><p>Lokale betalingsmetoder, lokale sprog og lokale supporttider.</p></li>
      <li><h3>Hvor vi er nu</h3><p>Los mismos principios a mayor escala: cifras transparentes, personas accesibles, sin sorpresas en la letra pequeña.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hvorfor vi er her</h2>
    <p>De fleste, der vil investere, starter aldrig, fordi hver vej synes designet til nogen, der allerede kender ordene. Vi byggede det modsatte: én konto, klart sprog og en specialist, du faktisk kan tale med.</p>
    <p>Intet jargon, hvor en enkel sætning rækker, ingen gebyrer der først dukker op efter pengene er flyttet, og ingen afkastløfter, som ingen ærligt kan garantere.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktive brugere</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Handelsvolumen</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Support</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

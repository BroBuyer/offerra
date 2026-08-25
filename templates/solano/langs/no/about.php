<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Om ' . SITE_NAME;
$page_description = 'Én konto, ett klart overblikk over kapitalen din — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Plattformen</span>
    <h1>Én konto, ett klart overblikk over det hele</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> samler saldoen din, strategi og avkastning i ét gjennomsiktig dashbord, så hver beslutning er informert og hvert tall er synligt.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Menneskerne bag kontoen din</h2>
    <p>Bak grensesnittet er analytikere, der studerer markedene dagligt, ingeniører, der holder plattformen kørende, og supportspesialister, der svarer på ditt sprog.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Markedsanalytikere, der gjennomgår forholdene dagligt, ikke én gang per kvartal.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingeniører tilgjengelige for plattformen med permanent overvåking.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Supportspesialister, der håndterer registrering, verifisering og utbetalinger.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regler, risiko og hvad vi ikke lover</h2>
    <p>Investering innebærer risiko, og ingen plattform fjerner det. Det en plattform kan gøre, er at være tydelig: offentliggjøre vilkår, holde kundemidler hos regulerte partnere og dokumentere, hvordan utbetalinger fungerer.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identitetsverifisering, før midler kan flyttes på kontoen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Utbetalinger returneres til samme metode som innskudden.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vilkår, risikoopplysning og privatlivspolitik offentliggjort i full lengde.</span></li>
    </ul>
    <p class="jkkyl">Investering innebærer risiko, herunder muligt tab af dele eller hele kapitalen. Værdien af investeringer kan stige eller falde, og du kan få mindre tilbage end du investerede. Invester ikke pengerr, du ikke har råd til at miste.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Send melding</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hvordan plattformen blev bygget</h2>
    <ol class="nxlk2qu">
      <li><h3>Utgangspunktet</h3><p>En liten gruppe analytikere og ingeniører hørte alltid den samme klagen: verktøyene finnes, men ingen forklarer dem.</p></li>
      <li><h3>Første fungerende versjon</h3><p>Den første versjonen gjorde én ting: vise en saldo og position i enkle termer. Alt annet ble fjernet, indtil den del var klar.</p></li>
      <li><h3>Tillegg av det menneskelige</h3><p>Automatisering svarer på hva og når; mennesker svarer på hvorfor. Supportspesialister blev lagt til, så hvert medlem har noen å spørre.</p></li>
      <li><h3>Åpning mot flere markeder</h3><p>Lokale betalingsmetoder, lokale sprog og lokale supporttider.</p></li>
      <li><h3>Hvor vi er nu</h3><p>Los mismos principios a mayor escala: cifras transparentes, personas accesibles, sin sorpresas en la letra pequeña.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hvorfor vi er her</h2>
    <p>De fleste som vil investere, starter aldrig, fordi hver vej synes designet til nogen, der allerede kender ordene. Vi byggede det modsatte: én konto, klart språk og en spesialist, du faktisk kan tale med.</p>
    <p>Ikke noe ssjargongg, hvor en enkel sætning rækker, ingen gebyrer der først dukker op efter pengerne er flyttet, og ingen avkastningløfter, som ingen ærligt kan garantere.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktive brukere</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Handelsvolum</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Support</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

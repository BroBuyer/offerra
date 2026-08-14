<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Priser ' . SITE_NAME;
$page_description = 'Enkle og gjennomsiktige priser — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Priser</span>
    <h1>Enkle og gjennomsiktige priser.</h1>
    <p class="kpnq92g">Start med <?= e(SITE_NAME) ?> er gratis. Ingen skjulte gebyrer for at åpne en konto, og du setter inn kun det, du velger å investere: plattformen og værktøjerne er inkludert.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hvor omkostninger kan opstå</h2>
    <p>Dette er de eneste stedene, hvor penger forlader saldoen din for andet end en investering, du selv har valgt.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Post</th><th scope="col">Belastes av</th><th scope="col">Merknad</th></tr></thead>
      <tbody>
        <tr><td>Kontoåpning</td><td>—</td><td>Gratis.</td></tr>
        <tr><td>Adgang til plattformen</td><td>—</td><td>Inkludert, uten abonnement.</td></tr>
        <tr><td>Markedsspread</td><td>Megler</td><td>Den sædvanlige forskel mellem købs- og salgspris.</td></tr>
        <tr><td>Nettverks-/bankgebyr</td><td>Betalingsleverandør</td><td>Afhænger af metoden du vælger.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapital er i risiko. Invester bare det du har råd til å miste.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Åpne en konto</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hva er inkludert</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gratis konto: ingen registrerings- eller lisensgebyrer.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingen skjulte gebyrer for innskudder, utbetalinger eller kontovedlikehold.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kun sædvanlige meglerspreads eller netværksomkostninger kan gælde.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Start fra minimumsinnskudden og skaler i ditt eget tempo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hvordan tallene ser ud i praksis</h2>
    <h3>En første innskudd, trinn for trinn</h3>
    <p>Den første innskudd opsummerer alle omkostninger ét sted: beløpet du sender, spread ved konvertering, og intet andet, før du beslutter at handle. Ingen månedlig kontogebyr eller gebyr for at lade saldoen stå.</p>
    <h4>Hva som sker samme dag</h4>
    <p>Saldoen vises, når betalingen bekreftes, og en spesialist gjennomgår planen, før noget åbnes. Intet plasseres automatisk i ditt navn.</p>
    <h3>Utbetalinger og hvad de koster</h3>
    <p>Utbetalinger går tilbake til den betalingsmetode, pengerne kom ind med: det er et krav, ikke en preferanse, så kontoen forblir din. Behandling er gratis fra våre side; det eneste mulige fradraget kommer fra din bank eller kortutsteder.</p>
    <h4>Frister du kan regne med</h4>
    <p>Forespørseler på virkedage gjennomgås samme dag. Tilbakebetalinger til kort tar typisk tre til fem virkedage, overførsler to.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

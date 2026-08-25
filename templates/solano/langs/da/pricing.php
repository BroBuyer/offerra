<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Priser ' . SITE_NAME;
$page_description = 'Enkle og gennemsigtige priser — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Priser</span>
    <h1>Enkle og gennemsigtige priser.</h1>
    <p class="kpnq92g">Start med <?= e(SITE_NAME) ?> er gratis. Ingen skjulte gebyrer for at åbne en konto, og du indbetaler kun det, du vælger at investere: platformen og værktøjerne er inkluderet.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hvor omkostninger kan opstå</h2>
    <p>Dette er de eneste steder, hvor penge forlader din saldo for andet end en investering, du selv har valgt.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Post</th><th scope="col">Opkræves af</th><th scope="col">Bemærkning</th></tr></thead>
      <tbody>
        <tr><td>Kontoåbning</td><td>—</td><td>Gratis.</td></tr>
        <tr><td>Adgang til platformen</td><td>—</td><td>Inkluderet, uden abonnement.</td></tr>
        <tr><td>Markedsspread</td><td>Mægler</td><td>Den sædvanlige forskel mellem købs- og salgspris.</td></tr>
        <tr><td>Netværks-/bankgebyr</td><td>Betalingsudbyder</td><td>Afhænger af den metode, du vælger.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapital er i risiko. Invester kun det, du har råd til at miste.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Åbn en konto</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hvad er inkluderet</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gratis konto: ingen registrerings- eller licensgebyrer.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingen skjulte gebyrer for indbetalinger, udbetalinger eller kontovedligeholdelse.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kun sædvanlige mæglerspreads eller netværksomkostninger kan gælde.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Start fra minimumsindbetalingen og skaler i dit eget tempo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hvordan tallene ser ud i praksis</h2>
    <h3>En første indbetaling, trin for trin</h3>
    <p>Den første indbetaling opsummerer alle omkostninger ét sted: beløbet du sender, spread ved konvertering, og intet andet, før du beslutter at handle. Ingen månedlig kontogebyr eller gebyr for at lade saldoen stå.</p>
    <h4>Hvad der sker samme dag</h4>
    <p>Saldoen vises, når betalingen bekræftes, og en specialist gennemgår planen, før noget åbnes. Intet placeres automatisk i dit navn.</p>
    <h3>Udbetalinger og hvad de koster</h3>
    <p>Udbetalinger går tilbage til den betalingsmetode, pengene kom ind med: det er et krav, ikke en præference, så kontoen forbliver din. Behandling er gratis fra vores side; det eneste mulige fradrag kommer fra din bank eller kortudsteder.</p>
    <h4>Frister du kan regne med</h4>
    <p>Anmodninger på hverdage gennemgås samme dag. Tilbagebetalinger til kort tager typisk tre til fem hverdage, overførsler to.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

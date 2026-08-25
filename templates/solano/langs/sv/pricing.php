<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Priser ' . SITE_NAME;
$page_description = 'Enkla, transparenta priser — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Enkla, transparenta priser.</h1>
    <p class="kpnq92g">Att komma igång med <?= e(SITE_NAME) ?> är gratis. Inga dolda avgifter för att öppna ett konto, och du sätter bara in det du väljer att investera: plattformen och dess verktyg ingår.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Var kostnader kan uppstå</h2>
    <p>Det här är de enda ställena där pengar lämnar saldot för något annat än en investering du har valt.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Post</th><th scope="col">Debiteras av</th><th scope="col">Kommentar</th></tr></thead>
      <tbody>
        <tr><td>Kontoöppning</td><td>—</td><td>Gratis.</td></tr>
        <tr><td>Tillgång till plattformen</td><td>—</td><td>Ingår, utan abonnemang.</td></tr>
        <tr><td>Marknadsspread</td><td>Mäklare</td><td>Den vanliga skillnaden mellan köp- och säljpris.</td></tr>
        <tr><td>Nätverks- / bankavgift</td><td>Betalleverantör</td><td>Beror på den metod du väljer.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapitalet är i risk. Investera bara det du har råd att förlora.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Öppna ditt konto</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Vad som ingår</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gratis kontoöppning: inga registrerings- eller licensavgifter.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inga dolda avgifter på insättningar, uttag eller kontohantering.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Endast vanliga mäklarspreadar eller nätverkskostnader kan tillkomma.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Börja från minsta insättning och skala i din egen takt.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hur siffrorna ser ut i praktiken</h2>
    <h3>En första insättning, steg för steg</h3>
    <p>En första insättning är hela kostnadsbilden på ett ställe: beloppet du skickar, spreaden vid växling och inget mer förrän du beslutar att handla. Ingen kontoavgift i slutet av månaden och ingen avgift för att låta saldot vara.</p>
    <h4>Vad som händer samma dag</h4>
    <p>Saldot syns när betalningen har gått igenom, och en specialist går igenom planen innan något öppnas. Ingenting läggs automatiskt i ditt namn.</p>
    <h3>Uttag och vad de kostar</h3>
    <p>Uttag går tillbaka till den betalningsmetod pengarna kom från: det är ett krav, inte ett önskemål, så att kontot förblir ditt. Handläggningen är gratis från vår sida; det enda avdrag du kan se är det din egen bank eller kortutgivare tar.</p>
    <h4>Tider du kan planera efter</h4>
    <p>Förfrågningar på en arbetsdag granskas samma dag. Återbetalningar till kort går vanligtvis igenom inom tre till fem arbetsdagar, banköverföringar inom två.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

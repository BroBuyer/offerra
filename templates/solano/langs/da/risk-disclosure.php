<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Risikooplysning ᐉ ' . SITE_NAME;
$page_description = 'Risikooplysning — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Vigtigt</span>
    <h1>Risikooplysning</h1>
    <p class="rmct9">Læs venligst denne advarsel omhyggeligt, før du bruger <?= e(SITE_NAME) ?> eller relaterede tjenester.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Seneste opdatering: januar 2025</p>

    <div class="ntr9c">
      <strong>Investering medfører risici.</strong> Værdien af investeringer kan falde såvel som stige. Du kan miste dele af eller hele din investerede kapital. <strong>Tidligere afkast er ikke en indikator for fremtidige resultater.</strong> Invester kun penge, du har råd til at miste.
    </div>

    <h2>1. Generel advarsel</h2>
    <p>Handel og investering i finansielle instrumenter, kryptovaluta og andre digitale aktiver medfører et højt risikoniveau og er muligvis ikke egnet for alle investorer. Før du beslutter at bruge <?= e(SITE_NAME) ?>, bør du omhyggeligt overveje dine investeringsmål, erfaringsniveau og risikotolerance.</p>

    <h2>2. Markedsrisiko</h2>
    <p>Priser på finansielle instrumenter og digitale aktiver kan svinge betydeligt over korte perioder på grund af markedsforhold, makroøkonomiske begivenheder, regulatoriske udviklinger, likviditetsforhold og andre faktorer uden for vores kontrol. Tab kan overstige indledende indskud ved gearede produkter.</p>

    <h2>3. Volatilitet i digitale aktiver</h2>
    <p>Kryptovaluta og andre digitale aktiver er særligt volatile. Deres værdi kan påvirkes af netværksbegivenheder, forks, børssammenbrud, hacking eller pludseligt tillidstab. Der er ingen garanti for, at et digitalt aktiv bevarer en bestemt værdi eller forbliver omsætteligt.</p>

    <h2>4. Gearing-risiko</h2>
    <p>Når gearing er tilgængelig, forstærker den både gevinster og tab. En relativt lille markedsbevægelse kan forårsage en proportionalt større bevægelse i værdien af din position og kan resultere i totalt tab af dine midler eller beløb, der overstiger dit indskud.</p>

    <h2>5. Teknologi- og eksekveringsrisiko</h2>
    <p>Online handelsplatforme kan påvirkes af afbrydelser såsom systemfejl, forsinkelser, forbindelsesproblemer og cyberangreb. Disse kan forhindre, at ordrer udføres til de anmodede priser, eller at de slet ikke udføres.</p>

    <h2>6. Ingen investeringsrådgivning</h2>
    <p>Information fra <?= e(SITE_NAME) ?>, herunder signaler genereret af kunstig intelligens, skærme, uddannelse eller analyser, er udelukkende til informationsformål og udgør ikke personlig investeringsrådgivning, anbefaling eller opfordring til at købe eller sælge finansielle instrumenter. Du er alene ansvarlig for dine investeringsbeslutninger.</p>

    <h2>7. Tidligere afkast</h2>
    <p><strong>Tidligere afkast er ikke en pålidelig indikator for fremtidigt afkast.</strong> Backtests, simuleringer, modelafkast og hypotetiske resultater har iboende begrænsninger og afspejler ikke reelle handelsresultater.</p>

    <h2>8. Regulatoriske og skattemæssige overvejelser</h2>
    <p>Den regulatoriske behandling af finansielle instrumenter og digitale aktiver varierer efter jurisdiktion og udvikler sig. Du er ansvarlig for at forstå og overholde gældende love, herunder skatteforpligtelser, der følger af din aktivitet.</p>

    <h2>9. Søg uafhængig rådgivning</h2>
    <p>Hvis du er i tvivl om, hvorvidt et produkt eller en tjeneste tilbudt via <?= e(SITE_NAME) ?> er passende, bør du søge uafhængig professionel rådgivning, før du fortsætter.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tilbage til forsiden</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

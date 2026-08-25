<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Risikoopplysning ᐉ ' . SITE_NAME;
$page_description = 'Risikoopplysning — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Viktig</span>
    <h1>Risikoopplysning</h1>
    <p class="rmct9">Les denne advarselen nøye før du bruker <?= e(SITE_NAME) ?> eller relaterte tjenester.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Sist oppdatert: januar 2025</p>

    <div class="ntr9c">
      <strong>Investering innebærer risiko.</strong> Verdien av investeringer kan falle så vel som stige. Du kan miste deler av eller hele den investerte kapitalen. <strong>Tidligere avkastning er ikke en indikator på fremtidige resultater.</strong> Invester bare penger du har råd til å miste.
    </div>

    <h2>1. Generell advarsel</h2>
    <p>Handel og investering i finansielle instrumenter, kryptovaluta og andre digitale aktiva innebærer et høyt risikonivå og er kanskje ikke egnet for alle investorer. Før du bestemmer deg for å bruke <?= e(SITE_NAME) ?>, bør du nøye vurdere investeringsmålene dine, erfaringsnivå og risikotoleranse.</p>

    <h2>2. Markedsrisiko</h2>
    <p>Priser på finansielle instrumenter og digitale aktiva kan svinge betydelig over korte perioder på grunn av markedsforhold, makroøkonomiske hendelser, regulatoriske utviklinger, likviditetsforhold og andre faktorer utenfor vår kontroll. Tap kan overstige innledende innskudd ved girede produkter.</p>

    <h2>3. Volatilitet i digitale aktiva</h2>
    <p>Kryptovaluta og andre digitale aktiva er spesielt volatile. Verdien kan påvirkes av nettverkshendelser, forks, børssammenbrudd, hacking eller plutselig tillitstap. Det er ingen garanti for at et digitalt aktiv beholder en bestemt verdi eller forblir omsettelig.</p>

    <h2>4. Giring-risiko</h2>
    <p>Når giring er tilgjengelig, forsterker den både gevinster og tap. En relativt liten markedsbevegelse kan forårsake en proporsjonalt større bevegelse i verdien av posisjonen din og kan resultere i totalt tap av midlene dine eller beløp som overstiger innskuddet ditt.</p>

    <h2>5. Teknologi- og utførelsesrisiko</h2>
    <p>Online handelsplattformer kan påvirkes av avbrudd som systemfeil, forsinkelser, tilkoblingsproblemer og cyberangrep. Disse kan forhindre at ordrer utføres til de forespurte prisene, eller at de ikke utføres i det hele tatt.</p>

    <h2>6. Ingen investeringsrådgivning</h2>
    <p>Informasjon fra <?= e(SITE_NAME) ?>, inkludert signaler generert av kunstig intelligens, skjermer, opplæring eller analyser, er utelukkende til informasjonsformål og utgjør ikke personlig investeringsrådgivning, anbefaling eller oppfordring til å kjøpe eller selge finansielle instrumenter. Du er alene ansvarlig for investeringsbeslutningene dine.</p>

    <h2>7. Tidligere avkastning</h2>
    <p><strong>Tidligere avkastning er ikke en pålitelig indikator på fremtidig avkastning.</strong> Backtests, simuleringer, modellavkastning og hypotetiske resultater har iboende begrensninger og gjenspeiler ikke reelle handelsresultater.</p>

    <h2>8. Regulatoriske og skattemessige hensyn</h2>
    <p>Den regulatoriske behandlingen av finansielle instrumenter og digitale aktiva varierer etter jurisdiksjon og utvikler seg. Du er ansvarlig for å forstå og overholde gjeldende lover, inkludert skatteforpliktelser som følge av aktiviteten din.</p>

    <h2>9. Søk uavhengig rådgivning</h2>
    <p>Hvis du er i tvil om et produkt eller en tjeneste tilbudt via <?= e(SITE_NAME) ?> er passende, bør du søke uavhengig profesjonell rådgivning før du fortsetter.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tilbake til forsiden</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

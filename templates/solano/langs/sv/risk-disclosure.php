<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Riskinformation ᐉ ' . SITE_NAME;
$page_description = 'Riskinformation — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Viktigt</span>
    <h1>Riskinformation</h1>
    <p class="rmct9">Läs det här meddelandet noga innan du använder <?= e(SITE_NAME) ?> eller någon relaterad tjänst.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Senast uppdaterad: januari 2025</p>

    <div class="ntr9c">
      <strong>Investeringar innebär risk.</strong> Värdet på investeringar kan både sjunka och stiga. Du kan förlora en del eller hela det kapital du investerar. <strong>Historisk avkastning är ingen tillförlitlig indikator på framtida resultat.</strong> Investera bara pengar du har råd att förlora.
    </div>

    <h2>1. Allmän varning</h2>
    <p>Handel och investeringar i finansiella instrument, kryptovalutor och andra digitala tillgångar innebär en hög risknivå och kanske inte passar alla investerare. Innan du beslutar att använda <?= e(SITE_NAME) ?> bör du noga överväga dina investeringsmål, din erfarenhetsnivå och din risktolerans.</p>

    <h2>2. Marknadsrisk</h2>
    <p>Priser på finansiella instrument och digitala tillgångar kan svänga kraftigt på kort tid på grund av marknadsförhållanden, makroekonomiska händelser, reglering, likviditet och andra faktorer utanför vår kontroll. Förluster kan överstiga den ursprungliga insättningen på produkter med hävstång.</p>

    <h2>3. Volatilitet i digitala tillgångar</h2>
    <p>Kryptovalutor och andra digitala tillgångar är särskilt volatila. Deras värde kan påverkas av nätverkshändelser, forkar, börsavbrott, hacking eller ett plötsligt förtroendefall. Det finns ingen garanti för att en digital tillgång behåller ett visst värde eller förblir handelsbar.</p>

    <h2>4. Hävstångsrisk</h2>
    <p>När hävstång finns förstärker den både vinster och förluster. En relativt liten marknadsrörelse kan ge en proportionellt större rörelse i värdet på din position, och kan leda till total förlust av dina medel eller till belopp som överstiger din insättning.</p>

    <h2>5. Teknik- och utföranderisk</h2>
    <p>Handelsplattformar online kan påverkas av störningar som systemfel, förseningar, anslutningsproblem och cyberattacker. Det kan hindra ordrar från att utföras till begärt pris, eller från att utföras överhuvudtaget.</p>

    <h2>6. Ingen investeringsrådgivning</h2>
    <p>Information från <?= e(SITE_NAME) ?>, inklusive signaler genererade av artificiell intelligens, översikter, utbildning eller analys, är endast till information och utgör inte personlig investeringsrådgivning, en rekommendation eller en uppmaning att köpa eller sälja något finansiellt instrument. Du ansvarar ensam för dina egna investeringsbeslut.</p>

    <h2>7. Historisk avkastning</h2>
    <p><strong>Historisk avkastning är ingen tillförlitlig indikator på framtida avkastning.</strong> Backtester, simuleringar, modellavkastning och hypotetiska resultat har inneboende begränsningar och speglar inte faktiska handelsresultat.</p>

    <h2>8. Regulatoriska och skattemässiga aspekter</h2>
    <p>Den regulatoriska behandlingen av finansiella instrument och digitala tillgångar varierar mellan jurisdiktioner och utvecklas. Du ansvarar för att förstå och följa de lagar som gäller för dig, inklusive skattemässiga skyldigheter som uppstår från din verksamhet.</p>

    <h2>9. Sök oberoende rådgivning</h2>
    <p>Om du tvekar om lämpligheten hos någon produkt eller tjänst som erbjuds via <?= e(SITE_NAME) ?> bör du söka oberoende professionell rådgivning innan du går vidare.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tillbaka till startsidan</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

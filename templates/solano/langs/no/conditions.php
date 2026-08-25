<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Bruksvilkår ᐉ ' . SITE_NAME;
$page_description = 'Bruksvilkår for ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridisk</span>
    <h1>Bruksvilkår</h1>
    <p class="rmct9">Reglene som gjelder når du bruker <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Sist oppdatert: januar 2025</p>

    <h2>1. Aksept av vilkår</h2>
    <p>Ved å bruke nettsiden og tjenestene hos <?= e(SITE_NAME) ?> godtar du å være bundet av disse bruksvilkårene. Hvis du ikke er enig, må du ikke bruke tjenestene.</p>

    <h2>2. Kvalifikasjon</h2>
    <p>Du må være minst 18 år (eller myndighetsalderen i din jurisdiksjon) og juridisk i stand til å inngå en bindende avtale. Tjenestene tilbys ikke til innbyggere i begrensede jurisdiksjoner der et slikt tilbud ville være ulovlig.</p>

    <h2>3. Kontoregistrering</h2>
    <p>Du godtar å oppgi nøyaktige, aktuelle og fullstendige opplysninger ved registrering og å holde disse opplysningene oppdatert. Du er ansvarlig for å holde innloggingsopplysningene dine konfidensielle og for all aktivitet på kontoen din.</p>

    <h2>4. Tjenester</h2>
    <p><?= e(SITE_NAME) ?> leverer teknologiske verktøy og opplæringsinformasjon om nettinvestering. Vi er ikke din finansielle rådgiver. Ingenting på dette nettstedet utgjør personlig investeringsrådgivning, skatterådgivning eller en oppfordring til å kjøpe eller selge finansielle instrumenter.</p>

    <h2>5. Gebyrer</h2>
    <p>Gjeldende gebyrer, spreads og provisjoner opplyses i plattformen eller i den relevante gebyrtabellen. Du er ansvarlig for skatter som følge av aktiviteten din.</p>

    <h2>6. Forbudt oppførsel</h2>
    <ul>
      <li>Å bruke tjenestene til hvitvasking, terrorfinansiering, markedsmanipulasjon eller ethvert ulovlig formål.</li>
      <li>Å utgi seg for å være en annen person eller oppgi falske identitetsopplysninger.</li>
      <li>Å forsøke å forstyrre, kompromittere eller reverse-engineere deler av plattformen.</li>
      <li>Å bruke automatiserte verktøy for å få tilgang til tjenestene på andre måter enn uttrykkelig tillatt.</li>
    </ul>

    <h2>7. Immaterielle rettigheter</h2>
    <p>Alt innhold, varemerker, programvare og materialer på nettsiden tilhører <?= e(SITE_NAME) ?> eller dets lisensgivere og er beskyttet av gjeldende immaterialrett. Du får en begrenset, ikke-eksklusiv, tilbakekallelig lisens til å bruke tjenestene til det tiltenkte formålet.</p>

    <h2>8. Tredjepartstjenester</h2>
    <p>Plattformen kan inneholde lenker til eller integrere med tredjepartstjenester. Vi er ikke ansvarlige for slike tjenester eller deres tilgjengelighet, nøyaktighet eller innhold.</p>

    <h2>9. Ansvarsfraskrivelser</h2>
    <p>Tjenestene leveres «som de er» og «som tilgjengelig» uten garantier av noe slag. Trading innebærer betydelig risiko for tap. Se vår <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Risikoopplysning</a> for flere detaljer.</p>

    <h2>10. Ansvarsbegrensning</h2>
    <p>I den grad loven tillater det, er <?= e(SITE_NAME) ?> ikke ansvarlig for indirekte, tilfeldige, spesielle, følge- eller straffeskader, heller ikke tap av fortjeneste eller inntekter som følge av din bruk av tjenestene.</p>

    <h2>11. Skadesløserhold</h2>
    <p>Du godtar å holde <?= e(SITE_NAME) ?>, dets datterselskaper og personale skadesløse for krav eller rettssaker som oppstår som følge av ditt brudd på disse vilkårene eller misbruk av tjenestene.</p>

    <h2>12. Suspensjon og oppsigelse</h2>
    <p>Vi kan suspendere eller avslutte tilgang til tjenestene når som helst, med eller uten forutgående varsel, hvis vi mener at du har brutt disse vilkårene eller gjeldende lov.</p>

    <h2>13. Gjeldende lov</h2>
    <p>Disse vilkårene er underlagt gjeldende lov i <?= e(SITE_NAME) ?>'s hjemsted, uten hensyn til lovkonfliktregler.</p>

    <h2>14. Endringer</h2>
    <p>Vi kan endre disse vilkårene fra tid til annen. Fortsatt bruk av tjenestene etter endringer utgjør aksept av de reviderte vilkårene.</p>

    <h2>15. Kontakt</h2>
    <p>Spørsmål om disse vilkårene kan sendes via kontaktsiden vår.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tilbake til forsiden</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

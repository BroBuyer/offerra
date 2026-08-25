<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Brugsvilkår ᐉ ' . SITE_NAME;
$page_description = 'Brugsvilkår for ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridisk</span>
    <h1>Brugsvilkår</h1>
    <p class="etpy2">Reglerne der gælder, når du tilgår eller bruger <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Seneste opdatering: januar 2025</p>

    <h2>1. Accept af vilkår</h2>
    <p>Ved at tilgå eller bruge websiden og tjenesterne hos <?= e(SITE_NAME) ?> accepterer du at være bundet af disse brugsvilkår. Hvis du ikke er enig, må du ikke bruge tjenesterne.</p>

    <h2>2. Berettigelse</h2>
    <p>Du skal være mindst 18 år (eller myndighedsalderen i din jurisdiktion) og juridisk i stand til at indgå en bindende aftale. Tjenesterne tilbydes ikke til beboere i begrænsede jurisdiktioner, hvor et sådant tilbud ville være ulovligt.</p>

    <h2>3. Kontoregistrering</h2>
    <p>Du accepterer at give præcise, aktuelle og fuldstændige oplysninger ved registrering og at holde disse oplysninger opdaterede. Du er ansvarlig for at holde dine loginoplysninger fortrolige og for al aktivitet på din konto.</p>

    <h2>4. Tjenester</h2>
    <p><?= e(SITE_NAME) ?> leverer teknologiske værktøjer og uddannelsesmæssig information om online investering. Vi er ikke din finansielle rådgiver. Intet på dette site udgør personlig investeringsrådgivning, skatterådgivning eller en opfordring til at købe eller sælge finansielle instrumenter.</p>

    <h2>5. Gebyrer</h2>
    <p>Gældende gebyrer, spreads og provisioner oplyses i platformen eller i den relevante gebyrtabel. Du er ansvarlig for skatter, der opstår som følge af din aktivitet.</p>

    <h2>6. Forbudt adfærd</h2>
    <ul>
      <li>At bruge tjenesterne til hvidvask, terrorfinansiering, markedsmanipulation eller ethvert ulovligt formål.</li>
      <li>At udgive sig for at være en anden person eller give falske identitetsoplysninger.</li>
      <li>At forsøge at forstyrre, kompromittere eller reverse-engineere dele af platformen.</li>
      <li>At bruge automatiserede værktøjer til at tilgå tjenesterne på andre måder end udtrykkeligt tilladt.</li>
    </ul>

    <h2>7. Immaterielle rettigheder</h2>
    <p>Alt indhold, varemærker, software og materialer på websiden tilhører <?= e(SITE_NAME) ?> eller dets licensgivere og er beskyttet af gældende immaterialret. Du får en begrænset, ikke-eksklusiv, tilbagekaldelig licens til at bruge tjenesterne til det tilsigtede formål.</p>

    <h2>8. Tredjepartstjenester</h2>
    <p>Platformen kan indeholde links til eller integrere med tredjepartstjenester. Vi er ikke ansvarlige for sådanne tjenester eller deres tilgængelighed, nøjagtighed eller indhold.</p>

    <h2>9. Ansvarsfraskrivelser</h2>
    <p>Tjenesterne leveres "som de er" og "som tilgængelige" uden garantier af nogen art. Trading medfører betydelig risiko for tab. Se vores <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Risikooplysning</a> for flere detaljer.</p>

    <h2>10. Ansvarsbegrænsning</h2>
    <p>I det omfang loven tillader det, er <?= e(SITE_NAME) ?> ikke ansvarlig for indirekte, tilfældige, særlige, følge- eller strafskader, ej heller tab af fortjeneste eller indtægter, der følger af din brug af tjenesterne.</p>

    <h2>11. Skadesløsholdelse</h2>
    <p>Du accepterer at holde <?= e(SITE_NAME) ?>, dets datterselskaber og personale skadesløse for krav eller retssager, der opstår som følge af dit brud på disse vilkår eller misbrug af tjenesterne.</p>

    <h2>12. Suspendering og opsigelse</h2>
    <p>Vi kan suspendere eller opsige adgang til tjenesterne når som helst, med eller uden forudgående varsel, hvis vi mener, at du har overtrådt disse vilkår eller gældende lov.</p>

    <h2>13. Gældende lov</h2>
    <p>Disse vilkår er underlagt gældende lov i <?= e(SITE_NAME) ?>'s hjemsted, uden hensyn til lovkonfliktregler.</p>

    <h2>14. Ændringer</h2>
    <p>Vi kan ændre disse vilkår fra tid til anden. Fortsat brug af tjenesterne efter ændringer udgør accept af de reviderede vilkår.</p>

    <h2>15. Kontakt</h2>
    <p>Spørgsmål om disse vilkår kan sendes via vores kontaktside.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tilbage til forsiden</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

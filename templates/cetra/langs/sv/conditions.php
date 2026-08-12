<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Användarvillkor');
$page_description = 'Reglerna som gäller när du öppnar eller använder ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hoved">
      <a href="<?= page_url() ?>#platform">Rapportera missbruk</a>
      <a href="<?= page_url() ?>#how">Så fungerar det</a>
      <a href="<?= page_url() ?>#markets">Markeder</a>
      <a href="<?= page_url() ?>#faq">Marknader</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Kom igång</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Användarvillkor</h1>
      <p class="lede">Reglerna som gäller när du öppnar eller använder <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Senest opdateret: januar 2025</p>

      <h2>1. Accept af vilkår</h2>
      <p>Ved at tilgå eller bruge websitet og tjenesterne fra <?= e(SITE_NAME) ?> accepterer du at være bundet af disse vilkår for brug. Hvis du ikke er enig, må du ikke bruge tjenesterne.</p>

      <h2>2. Berettigelse</h2>
      <p>Du skal være mindst 18 år (eller myndighedsalderen i din jurisdiktion) og have retlig handleevne til at indgå en bindende aftale. Tjenesterne tilbydes ikke til beboere i begrænsede jurisdiktioner hvor et sådant tilbud ville være ulovligt.</p>

      <h2>3. Kontoregistrering</h2>
      <p>Du accepterer at give nøjagtige, aktuelle og fuldstændige oplysninger under registreringen og holde dem opdaterede. Du er ansvarlig for fortroligheden af dine legitimationsoplysninger og for al aktivitet på din konto.</p>

      <h2>4. Tjenester</h2>
      <p><?= e(SITE_NAME) ?> leverer teknologiske værktøjer og uddannelsesmæssig information relateret til onlineinvestering. Vi er ikke din finansielle rådgiver. Intet på dette site udgør personlig investeringsrådgivning, skatterådgivning eller en opfordring til at købe eller sælge et finansielt instrument.</p>

      <h2>5. Gebyrer</h2>
      <p>Gældende gebyrer, spreads og provisioner oplyses på platformen eller i den gældende gebyrfortegnelse. Du er ansvarlig for skatter der følger af dine aktiviteter.</p>

      <h2>6. Forbudt adfærd</h2>
      <ul>
        <li>At bruge tjenesterne til hvidvask, terrorfinansiering, markedmanipulation eller ethvert ulovligt formål.</li>
        <li>At udgive sig for at være en anden person eller give falske identitetsoplysninger.</li>
        <li>At forsøge at interferere med, kompromittere eller reverse-engineere nogen del af platformen.</li>
        <li>At bruge automatiserede værktøjer til at tilgå tjenesterne på anden måde end udtrykkeligt tilladt.</li>
      </ul>

      <h2>7. Immaterielle rettigheder</h2>
      <p>Alt indhold, varemærker, software og materialer på sitet tilhører <?= e(SITE_NAME) ?> eller dens licensgivere og er beskyttet af gældende lov om immaterielle rettigheder. Du tildeles en begrænset, ikke-eksklusiv, tilbagekaldelig licens til at bruge tjenesterne til deres tilsigtede formål.</p>

      <h2>8. Tredjepartstjenester</h2>
      <p>Platformen kan indeholde links til eller integrere tredjepartstjenester. Vi er ikke ansvarlige for sådanne tjenester, deres tilgængelighed, nøjagtighed eller indhold.</p>

      <h2>9. Ansvarsfraskrivelser</h2>
      <p>Tjenesterne leveres „som de er“ og „efter tilgængelighed“ uden garantier af nogen art. Handel indebærer væsentlig risiko for tab. Se vores <a href="<?= page_url('conditions.php') ?>">Risikooplysning</a> for detaljer.</p>

      <h2>10. Ansvarsbegrænsning</h2>
      <p>I det maksimale omfang tilladt ved lov er <?= e(SITE_NAME) ?> ikke ansvarlig for indirekte, tilfældige, særlige, følgeskader eller straffeskader eller tab af fortjeneste eller omsætning som følge af din brug af tjenesterne.</p>

      <h2>11. Skadesløsholdelse</h2>
      <p>Du accepterer at holde <?= e(SITE_NAME) ?>, dens tilknyttede selskaber og personale skadesløse for ethvert krav der følger af din overtrædelse af disse vilkår eller dit misbrug af tjenesterne.</p>

      <h2>12. Suspension og ophør</h2>
      <p>Vi kan suspendere eller ophøre adgangen til tjenesterne når som helst, med eller uden varsel, hvis vi mener at du har overtrådt disse vilkår eller gældende ret.</p>

      <h2>13. Gældende lov</h2>
      <p>Disse vilkår er underlagt lovgivningen der gælder på <?= e(SITE_NAME) ?>'s hjemsted, uden hensyn til lovkonfliktprincipper.</p>

      <h2>14. Ændringer</h2>
      <p>Vi kan ændre disse vilkår fra tid til anden. Fortsat brug af tjenesterne efter ændringer udgør accept af de reviderede vilkår.</p>

      <h2>15. Kontakt</h2>
      <p>Spørgsmål om disse vilkår kan sendes via vores <a href="<?= page_url('contacts.php') ?>">kontaktside</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Tilbage til forsiden</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Vanliga frågor. ·
      <a href="<?= page_url('privacy.php') ?>">Integritet</a> ·
      <a href="<?= page_url('conditions.php') ?>">Villkor</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

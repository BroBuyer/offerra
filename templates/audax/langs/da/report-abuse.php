<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Rapportér misbrug | ' . SITE_NAME;
$page_description = 'Rapportér misbrug eller mistænkelig aktivitet på ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Rapportér misbrug</h1>
            <p class="bold-title">1. Rapportering af misbrug</p>
            <p>
              1.1. Hvis du er stødt på upassende indhold på vores websted, så rapportér det til
              os via kontaktformularen.
            </p>
            <p>Kontakt os: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. I dette afsnit kan du oplyse om misbrug eller indhold,
              der overtræder vores regler.
            </p>
            <p>
              1.3. Din rapport er vigtig. Angiv konkrete detaljer, så vi kan
              undersøge sagen grundigt.
            </p>
            <p>Når du indsender en rapport, accepterer du også vores privatlivspolitik.</p>
            <p class="bold-title">2. Hvem kan rapportere</p>
            <p>
              2.1. Hvis du er blevet udsat for misbrug eller har set upassende adfærd, har du
              ret til at rapportere det.
            </p>
            <p>2.1.1. Du skal være mindst 18 år for at indsende en rapport.</p>
            <p>2.1.2. Rapporten skal være sandfærdig og baseret på fakta.</p>
            <p>2.1.3. Brug af rapporteringsformularen skal være lovlig i dit land.</p>
            <p>2.2. Vi er ikke ansvarlige for falske eller ondsindede rapporter.</p>
            <p class="bold-title">3. Rapporteringsprocedure</p>
            <p>3.1. Vi forbeholder os retten til at undersøge alle rapporter om misbrug.</p>
            <p>3.2. Hvis en rapport anses for berettiget, tager vi de nødvendige skridt.</p>
            <p class="bold-title">4. Forbudte handlinger ved rapportering</p>
            <p>4.1. Brug af formularen til ondsindede formål er ikke tilladt.</p>
            <p>4.1.1. Falske eller vildledende rapporter er ikke tilladt.</p>
            <p>4.1.2. Det er ikke tilladt at chikanere andre brugere via rapporteringssystemet.</p>
            <p>4.1.3. Brug af bots eller automatisering til at indsende rapporter er forbudt.</p>
            <p>4.1.4. Ethvert forsøg på at manipulere rapporteringssystemet vil blive undersøgt.</p>
            <p>4.1.5. Brug af systemet til at sprede urigtige oplysninger er forbudt.</p>
            <p>4.1.6. Forsøg på at hindre en undersøgelse er ikke tilladt.</p>
            <p>4.1.7. Brug af systemet til trusler er ikke tilladt.</p>
            <p>4.1.8. Enhver ulovlig handling i forbindelse med rapportering vil blive sanktioneret.</p>
            <p>4.1.9. Forsøg på at omgå rapporteringsreglerne er ikke tilladt.</p>
            <p>4.1.10. Ethvert misbrug af rapporteringssystemet tages alvorligt.</p>
            <p class="bold-title">5. Immaterielle rettigheder ved rapportering</p>
            <p>
              5.1. Indhold, du indsender ved rapportering af misbrug, giver dig ingen ejendomsrettigheder.
            </p>
            <p>5.2. Ved at indsende en rapport får brugere ingen rettigheder til webstedets indhold.</p>
            <p>5.3. Rapporter bruges udelukkende til undersøgelse.</p>
            <p>5.4. Tredjeparter må ikke kopiere eller ændre rapporter.</p>
            <p class="bold-title">6. Ansvarsbegrænsning ved rapportering</p>
            <p>6.1. Når du indsender en rapport, påtager du dig ansvaret for indholdet.</p>
            <p>6.2. Vi er ikke ansvarlige for følger af indsendte rapporter.</p>
            <p>6.3. Ethvert tab som følge af en rapport er brugerens ansvar.</p>
            <p>6.4. Vi påtager os ikke ansvar for skade forårsaget af rapporter.</p>
            <p>
              6.5. Tekniske problemer med rapporteringssystemet er ikke vores ansvar.
            </p>
            <p class="bold-title">7. Information om rapporteringsproceduren</p>
            <p>
              7.1. Når du bruger rapporteringssystemet, accepterer du, at vi kan kontakte dig for mere information.
            </p>
            <p>7.2. Rapporter behandles fortroligt.</p>
            <p>7.3. Brugere anbefales at gemme en kopi af deres rapporter.</p>
            <p class="bold-title">8. Flere links og ressourcer</p>
            <p>8.1. Mere om, hvordan du rapporterer misbrug, finder du i vores regler.</p>
            <p>8.2. Links til eksterne kilder er ikke en anbefaling fra os.</p>
            <p>8.3. Vi anbefaler, at du tjekker hver kilde, før du bruger den.</p>
            <p class="bold-title">9. Almindelige bestemmelser om rapporter</p>
            <p>
              9.1. Vi forbeholder os retten til at ændre, suspendere eller afslutte rapporteringsproceduren
              når som helst.
            </p>
            <p>
              9.2. Vilkårene for denne procedure kan ændres når som helst. Fortsat brug af
              rapporteringstjenesten efter sådanne ændringer gælder som accept af de nye vilkår.
            </p>
            <p>9.3. Ved at indsende en rapport accepterer brugeren disse vilkår fuldt ud.</p>
            <p>
              9.4. Enhver aftale eller erklæring, skriftlig eller mundtlig, der ikke falder ind under de
              specifikke punkter i disse vilkår, er ugyldig og binder ingen af parterne.
            </p>
            <p>
              9.5. En rettighed givet i disse vilkår, som ikke udøves — enten på grund af samtykke,
              forsømmelse eller manglende evne — anses for frafaldet. Delvis eller fuld udøvelse af en rettighed
              udelukker eller begrænser ikke senere udøvelse.
            </p>
            <p>
              9.6. Hvis en kompetent domstol erklærer en bestemmelse i disse vilkår ugyldig, skal den
              anses for ugyldig. Resten af vilkårene gælder dog stadig fuldt ud.
            </p>
            <p>
              9.7. Det anerkendes, at disse vilkår gør det muligt for tredjeparter at drive webstedet,
              og at de kan overdrage rettigheder og pligter. Brugeren må ikke overdrage
              sine rettigheder og pligter til en anden part.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

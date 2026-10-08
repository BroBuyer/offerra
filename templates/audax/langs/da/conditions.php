<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Brugsvilkår | ' . SITE_NAME;
$page_description = 'Brugsvilkår for platformen ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Brugsvilkår</h1>
            <p class="bold-title">1. Indledning</p>
            <p>1.1. Accept af disse vilkår er nødvendig for at bruge vores tjenester.</p>
            <p>1.2. Disse vilkår udgør en juridisk bindende aftale.</p>
            <p>1.3. Fortsat brug af webstedet gælder som accept af vilkårene.</p>
            <p>
              1.4. Ved spørgsmål kan du kontakte os via
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Brugsret</p>
            <p>2.1. Du skal være mindst 18 år for at bruge tjenesterne.</p>
            <p>2.1.1. Du skal bo i et land, hvor tjenesterne er lovlige.</p>
            <p>2.1.2. Du må ikke stå på en sanktionsliste.</p>
            <p>2.1.3. Du skal have retlig handleevne til at indgå aftaler.</p>
            <p>2.2. Vi er ikke ansvarlige for brug af uegnede personer.</p>
            <p class="bold-title">3. Brugerkonto</p>
            <p>3.1. Du er ansvarlig for sikkerheden på din konto.</p>
            <p>3.2. Del ikke din adgangskode med tredjeparter.</p>
            <p class="bold-title">4. Forbudte handlinger</p>
            <p>4.1. Brug af tjenesterne til ulovlige formål er ikke tilladt.</p>
            <p>4.1.1. Hvidvask er strengt forbudt.</p>
            <p>4.1.2. Svig vil blive anmeldt til de relevante myndigheder.</p>
            <p>4.1.3. Brug af bots eller automatiseringssoftware er ikke tilladt.</p>
            <p>4.1.4. Ethvert forsøg på at manipulere systemet vil blive undersøgt.</p>
            <p>4.1.5. Spredning af urigtige oplysninger er forbudt.</p>
            <p>4.1.6. Forsøg på at hindre undersøgelser er ikke tilladt.</p>
            <p>4.1.7. Trusler mod andre brugere er forbudt.</p>
            <p>4.1.8. Enhver ulovlig handling vil blive sanktioneret.</p>
            <p>4.1.9. Forsøg på at omgå retningslinjer er ikke tilladt.</p>
            <p>4.1.10. Ethvert misbrug af systemet tages alvorligt.</p>
            <p class="bold-title">5. Immaterielle rettigheder</p>
            <p>5.1. Alt indhold på webstedet er vores åndsværk.</p>
            <p>5.2. Brugere får ingen rettigheder til webstedets indhold.</p>
            <p>5.3. Indhold må ikke kopieres uden tilladelse.</p>
            <p>5.4. Tredjeparter må ikke ændre indhold.</p>
            <p class="bold-title">6. Ansvarsbegrænsning</p>
            <p>6.1. Brug af tjenesterne sker på eget ansvar.</p>
            <p>6.2. Vi er ikke ansvarlige for tab som følge af brug af tjenesterne.</p>
            <p>6.3. Ethvert tab som følge af brug af webstedet er brugerens ansvar.</p>
            <p>6.4. Vi påtager os ikke ansvar for skade forårsaget af brug af webstedet.</p>
            <p>6.5. Tekniske problemer er ikke vores ansvar.</p>
            <p class="bold-title">7. Information</p>
            <p>7.1. Når du bruger tjenesterne, accepterer du at blive kontaktet.</p>
            <p>7.2. Information behandles fortroligt.</p>
            <p>7.3. Brugere anbefales at føre optegnelser.</p>
            <p class="bold-title">8. Links og yderligere ressourcer</p>
            <p>8.1. Mere information finder du i vores regler.</p>
            <p>8.2. Eksterne links er ikke en anbefaling.</p>
            <p>8.3. Vi anbefaler at tjekke kilder før brug.</p>
            <p class="bold-title">9. Almindelige bestemmelser</p>
            <p>9.1. Vi forbeholder os retten til når som helst at ændre tjenesterne.</p>
            <p>9.2. Vilkårene kan ændres når som helst.</p>
            <p>9.3. Når du bruger tjenesterne, accepterer du disse vilkår.</p>
            <p>9.4. Mundtlige aftaler er ikke gyldige.</p>
            <p>9.5. Uudnyttede rettigheder anses ikke for frafaldet.</p>
            <p>
              9.6. Hvis en bestemmelse erklæres ugyldig, gælder de øvrige stadig.
            </p>
            <p>9.7. Tjenesterne kan drives af eksterne udbydere.</p>
            <p>
              9.8. Disse vilkår er underlagt retten <?= e(geo_in()) ?>. Alle tvister indbringes for
              den kompetente domstol <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

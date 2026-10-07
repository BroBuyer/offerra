<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Bruksvilkår | ' . SITE_NAME;
$page_description = 'Bruksvilkår for plattformen ' . SITE_NAME . '.';
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
            <h1>Bruksvilkår</h1>
            <p class="bold-title">1. Innledning</p>
            <p>1.1. Aksept av disse vilkårene er nødvendig for å bruke tjenestene våre.</p>
            <p>1.2. Disse vilkårene utgjør en juridisk bindende avtale.</p>
            <p>1.3. Fortsatt bruk av nettstedet gjelder som aksept av vilkårene.</p>
            <p>
              1.4. Ved spørsmål kan du kontakte oss via
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Bruksrett</p>
            <p>2.1. Du må være minst 18 år for å bruke tjenestene.</p>
            <p>2.1.1. Du må bo i et land der tjenestene er lovlige.</p>
            <p>2.1.2. Du må ikke stå på en sanksjonsliste.</p>
            <p>2.1.3. Du må ha rettslig handleevne til å inngå avtaler.</p>
            <p>2.2. Vi er ikke ansvarlige for bruk av uegnede personer.</p>
            <p class="bold-title">3. Brukerkonto</p>
            <p>3.1. Du er ansvarlig for sikkerheten til kontoen din.</p>
            <p>3.2. Ikke del passordet ditt med tredjeparter.</p>
            <p class="bold-title">4. Forbudte handlinger</p>
            <p>4.1. Bruk av tjenestene til ulovlige formål er ikke tillatt.</p>
            <p>4.1.1. Hvitvasking er strengt forbudt.</p>
            <p>4.1.2. Svindel vil bli anmeldt til aktuelle myndigheter.</p>
            <p>4.1.3. Bruk av boter eller automatiseringsprogramvare er ikke tillatt.</p>
            <p>4.1.4. Ethvert forsøk på å manipulere systemet vil bli undersøkt.</p>
            <p>4.1.5. Spredning av uriktig informasjon er forbudt.</p>
            <p>4.1.6. Forsøk på å hindre undersøkelser er ikke tillatt.</p>
            <p>4.1.7. Trusler mot andre brukere er forbudt.</p>
            <p>4.1.8. Enhver ulovlig handling vil bli sanksjonert.</p>
            <p>4.1.9. Forsøk på å omgå retningslinjer er ikke tillatt.</p>
            <p>4.1.10. Ethvert misbruk av systemet tas på alvor.</p>
            <p class="bold-title">5. Immaterielle rettigheter</p>
            <p>5.1. Alt innhold på nettstedet er vår åndsverk.</p>
            <p>5.2. Brukere får ingen rettigheter til nettstedets innhold.</p>
            <p>5.3. Innhold kan ikke kopieres uten tillatelse.</p>
            <p>5.4. Tredjeparter kan ikke endre innhold.</p>
            <p class="bold-title">6. Ansvarsbegrensning</p>
            <p>6.1. Bruk av tjenestene skjer på eget ansvar.</p>
            <p>6.2. Vi er ikke ansvarlige for tap som følge av bruk av tjenestene.</p>
            <p>6.3. Ethvert tap som følge av bruk av nettstedet er brukerens ansvar.</p>
            <p>6.4. Vi påtar oss ikke ansvar for skade forårsaket av bruk av nettstedet.</p>
            <p>6.5. Tekniske problemer er ikke vårt ansvar.</p>
            <p class="bold-title">7. Informasjon</p>
            <p>7.1. Ved å bruke tjenestene godtar du å bli kontaktet.</p>
            <p>7.2. Informasjon behandles konfidensielt.</p>
            <p>7.3. Brukere anbefales å oppbevare dokumentasjon.</p>
            <p class="bold-title">8. Lenker og flere ressurser</p>
            <p>8.1. Mer informasjon finner du i retningslinjene våre.</p>
            <p>8.2. Eksterne lenker er ikke en anbefaling.</p>
            <p>8.3. Vi anbefaler at du sjekker kilder før bruk.</p>
            <p class="bold-title">9. Alminnelige bestemmelser</p>
            <p>9.1. Vi forbeholder oss retten til å endre tjenestene når som helst.</p>
            <p>9.2. Vilkårene kan endres når som helst.</p>
            <p>9.3. Ved å bruke tjenestene godtar du disse vilkårene.</p>
            <p>9.4. Muntlige avtaler er ikke gyldige.</p>
            <p>9.5. Rettigheter som ikke utøves, anses ikke som frafalt.</p>
            <p>
              9.6. Hvis en bestemmelse erklæres ugyldig, gjelder de øvrige bestemmelsene fortsatt.
            </p>
            <p>9.7. Tjenestene kan administreres av eksterne leverandører.</p>
            <p>
              9.8. Disse vilkårene er underlagt lovgivningen <?= e(geo_in()) ?>. Alle tvister skal bringes inn for den
              kompetente domstolen <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

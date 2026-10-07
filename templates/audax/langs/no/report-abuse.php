<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Rapporter misbruk | ' . SITE_NAME;
$page_description = 'Rapporter misbruk eller mistenkelig aktivitet på ' . SITE_NAME . '.';
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
            <h1>Rapporter misbruk</h1>
            <p class="bold-title">1. Rapportering av misbruk</p>
            <p>
              1.1. Hvis du har sett upassende innhold på nettstedet vårt, rapporter det til
              oss via kontaktskjemaet.
            </p>
            <p>Kontakt oss: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. I denne delen kan du gi informasjon om misbruk eller innhold
              som bryter med retningslinjene våre.
            </p>
            <p>
              1.3. Rapporten din er viktig. Oppgi konkrete detaljer slik at vi kan
              undersøke saken grundig.
            </p>
            <p>Ved å sende inn en rapport godtar du også personvernerklæringen vår.</p>
            <p class="bold-title">2. Hvem kan rapportere</p>
            <p>
              2.1. Hvis du har blitt utsatt for misbruk eller har sett upassende atferd, har du
              rett til å rapportere det.
            </p>
            <p>2.1.1. Du må være minst 18 år for å sende inn en rapport.</p>
            <p>2.1.2. Rapporten må være sannferdig og basert på fakta.</p>
            <p>2.1.3. Bruk av rapporteringsskjemaet må være lovlig i landet ditt.</p>
            <p>2.2. Vi er ikke ansvarlige for falske eller ondsinnede rapporter.</p>
            <p class="bold-title">3. Rapporteringsprosedyre</p>
            <p>3.1. Vi forbeholder oss retten til å undersøke alle rapporter om misbruk.</p>
            <p>3.2. Hvis en rapport anses som berettiget, tar vi nødvendige tiltak.</p>
            <p class="bold-title">4. Forbudte handlinger ved rapportering</p>
            <p>4.1. Bruk av skjemaet til ondsinnede formål er ikke tillatt.</p>
            <p>4.1.1. Falske eller villedende rapporter er ikke tillatt.</p>
            <p>4.1.2. Det er ikke tillatt å trakassere andre brukere via rapporteringssystemet.</p>
            <p>4.1.3. Bruk av boter eller automatisering for å sende inn rapporter er forbudt.</p>
            <p>4.1.4. Ethvert forsøk på å manipulere rapporteringssystemet vil bli undersøkt.</p>
            <p>4.1.5. Bruk av systemet til å spre uriktig informasjon er forbudt.</p>
            <p>4.1.6. Forsøk på å hindre en undersøkelse er ikke tillatt.</p>
            <p>4.1.7. Bruk av systemet til trusler er ikke tillatt.</p>
            <p>4.1.8. Enhver ulovlig handling knyttet til rapportering vil bli sanksjonert.</p>
            <p>4.1.9. Forsøk på å omgå rapporteringsreglene er ikke tillatt.</p>
            <p>4.1.10. Ethvert misbruk av rapporteringssystemet tas på alvor.</p>
            <p class="bold-title">5. Immaterielle rettigheter ved rapportering</p>
            <p>
              5.1. Innhold du sender inn ved rapportering av misbruk, gir deg ingen eierrettigheter.
            </p>
            <p>5.2. Ved å sende inn en rapport får brukere ingen rettigheter til nettstedets innhold.</p>
            <p>5.3. Rapporter brukes utelukkende til undersøkelse.</p>
            <p>5.4. Tredjeparter kan ikke kopiere eller endre rapporter.</p>
            <p class="bold-title">6. Ansvarsbegrensning ved rapportering</p>
            <p>6.1. Ved å sende inn en rapport påtar du deg ansvaret for innholdet.</p>
            <p>6.2. Vi er ikke ansvarlige for følger av innsendte rapporter.</p>
            <p>6.3. Ethvert tap som følge av en rapport er brukerens ansvar.</p>
            <p>6.4. Vi påtar oss ikke ansvar for skade forårsaket av rapporter.</p>
            <p>
              6.5. Tekniske problemer med rapporteringssystemet er ikke vårt ansvar.
            </p>
            <p class="bold-title">7. Informasjon om rapporteringsprosedyren</p>
            <p>
              7.1. Ved å bruke rapporteringssystemet godtar du at vi kan kontakte deg for mer informasjon.
            </p>
            <p>7.2. Rapporter behandles konfidensielt.</p>
            <p>7.3. Brukere anbefales å beholde en kopi av rapportene sine.</p>
            <p class="bold-title">8. Flere lenker og ressurser</p>
            <p>8.1. Mer om hvordan du rapporterer misbruk, finner du i retningslinjene våre.</p>
            <p>8.2. Lenker til eksterne kilder er ikke en anbefaling fra oss.</p>
            <p>8.3. Vi anbefaler at du sjekker hver kilde før du bruker den.</p>
            <p class="bold-title">9. Alminnelige bestemmelser om rapporter</p>
            <p>
              9.1. Vi forbeholder oss retten til å endre, suspendere eller avslutte rapporteringsprosedyren
              når som helst.
            </p>
            <p>
              9.2. Vilkårene for denne prosedyren kan endres når som helst. Fortsatt bruk av
              rapporteringstjenesten etter slike endringer gjelder som aksept av de nye vilkårene.
            </p>
            <p>9.3. Ved å sende inn en rapport godtar brukeren disse vilkårene fullt ut.</p>
            <p>
              9.4. Enhver avtale eller erklæring, skriftlig eller muntlig, som ikke faller inn under de
              spesifikke punktene i disse vilkårene, er ugyldig og binder ingen av partene.
            </p>
            <p>
              9.5. En rettighet gitt i disse vilkårene som ikke utøves — enten på grunn av samtykke,
              forsømmelse eller manglende evne — anses som frafalt. Delvis eller full utøvelse av en rettighet
              utelukker eller begrenser ikke senere utøvelse.
            </p>
            <p>
              9.6. Hvis en kompetent domstol erklærer en bestemmelse i disse vilkårene ugyldig, skal den
              anses som ugyldig. Resten av vilkårene gjelder likevel fullt ut.
            </p>
            <p>
              9.7. Det erkjennes at disse vilkårene gjør det mulig for tredjeparter å drive nettstedet,
              og at de kan overdra rettigheter og plikter. Brukeren kan ikke overdra
              sine rettigheter og plikter til en annen part.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

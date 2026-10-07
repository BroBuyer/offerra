<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Personvernerklæring | ' . SITE_NAME;
$page_description = 'Personvernerklæring for ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Personvernerklæring</h1>
            <p>
              Personopplysningene og aktivaene dine er svært viktige for oss. Vi forplikter oss
              fullt ut til å beskytte dem.
            </p>
            <p>
              <?= e(SITE_NAME) ?> samler inn og lagrer nødvendige data for tradingtransaksjonene dine. Hvordan
              disse dataene samles inn og lagres, beskrives i personvernerklæringen nedenfor.
            </p>
            <p>Erklæringen vår bygger på følgende prinsipper:</p>
            <p class="circle">
              For å sikre størst mulig åpenhet om prosessene våre for innsamling og
              lagring av personopplysningene dine:
            </p>
            <p>
              Målet vårt er at du skal forstå hvordan vi samler inn og behandler dataene dine, slik at du kan ta
              informerte valg. Vi bruker tydelige retningslinjer og prosesser for databehandling på
              dette nettstedet. Erklæringen beskriver i detalj metodene vi bruker for å gi deg
              klar og konkret informasjon om databruk. Du har kontrollen.
            </p>
            <p>
              Vi varsler deg umiddelbart når vi anser det som nødvendig. Åpenhet er
              grunnleggende viktig for oss.
            </p>
            <p>
              Fagteamet vårt er alltid tilgjengelig for å svare på alle spørsmål om ethvert aspekt
              ved prosessene våre, inkludert pliktene våre etter lovgivningen <?= e(geo_in()) ?> og EU-
              regelverket. Du kan kontakte oss via:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Annen bruk av personopplysninger er ikke tillatt fra vår side, unntatt som beskrevet i
              personvernerklæringen.
            </p>
            <p>
              Vi kan behandle personopplysninger til følgende formål, blant annet for å sikre riktig
              funksjon av <?= e(SITE_NAME) ?>-tjenestene og knytte brukere til tredjeparts
              tradingplattformer. Behandling kan også være nødvendig for å vedlikeholde og forbedre
              nettstedets funksjoner og tjenester; for å beskytte rettighetene våre og oppfylle juridiske og andre
              forpliktelser. Til slutt brukes dataene, når det er nødvendig, til administrative
              og andre forretningsfunksjoner knyttet til tjenestene vi leverer til deg som kunde.
            </p>
            <p>
              For å tilby tjenester av høyere kvalitet tilpasset preferansene og behovene dine, bruker <?= e(SITE_NAME) ?>
              personopplysninger.
            </p>
            <p class="circle">
              For å bruke nødvendige verktøy til å beskytte personopplysningene dine og ivareta
              rettighetene dine knyttet til dem:
            </p>
            <p>
              Du kan når som helst kontakte oss og få tilgang til alle personopplysningene dine. Vi kan også
              endre eller slette dem ved behov. I tillegg behandler vi forespørsler om å overføre
              dataene til deg eller en tredjepart du utpeker. Vi tilbyr denne tjenesten slik at du
              kan utøve personvern- og kontrollrettighetene dine fullt ut.
            </p>
            <p class="circle">Beskytt personopplysningene dine:</p>
            <p>
              Sikkerhetssystemene våre holder høy kvalitet og har tiltak på banknivå. Selv om
              absolutt beskyttelse ikke kan garanteres, forplikter vi oss til å holde systemene
              på et høyt nivå og styrke tiltakene som allerede er innført.
            </p>
            <p>
              Vi har omfattende personvernretningslinjer og førsteklasses sikkerhetssystemer.
            </p>
            <p class="bold-title">1. Virkeområde</p>
            <p>
              Denne erklæringen beskriver prosedyrene våre for innsamling, behandling og utlevering av alle
              opplysninger om fysiske personer.
            </p>
            <p>
              Bestemmelsene i erklæringen gjelder alle fysiske personer som kan identifiseres eller er
              identifisert. Særlig for hver fysisk person som kan identifiseres i tilknytning til
              data som er betrodd oss, som vi har tilgang til og/eller som vi kan kombinere.
            </p>
            <p>
              Databehandling, slik det er definert i personvernerklæringen, omfatter særlig lagring,
              forvaltning og organisering av personopplysninger.
            </p>
            <p>
              Vi samler ikke inn, og forsøker heller ikke å samle inn, informasjon om personer under 18 år.
              Personer under 18 år får heller ikke bruke plattformen vår til noe
              formål. Hvis vi oppdager at en bruker er under 18 år, sletter vi dataene umiddelbart.
            </p>
            <p class="bold-title">2. Hvilke personopplysninger samler vi inn?</p>
            <p>
              Ved registrering samler vi inn personopplysninger som trengs for å bruke tjenestene. Ved behov
              kan vi også be om opplysninger til verifisering, for eksempel for å
              bekrefte kontoeierskap. For å forbedre og opprettholde kvaliteten på
              tjenestene samler vi inn og analyserer informasjon om bruken din av plattformen og
              relaterte tredjepartstjenester.
            </p>
            <p class="bold-title">
              3. Du er under ingen omstendigheter forpliktet til å gi personopplysningene dine til selskapet.
            </p>
            <p>
              Selv om du ikke er forpliktet til å gi oss dataene dine, kan valget om ikke å gjøre det
              føre til begrensninger i tjenestene. Det kan også føre til
              begrensninger i bruken av plattformen.
            </p>
            <p class="bold-title">
              4. Hvilke personopplysninger samler vi inn? Når du besøker nettstedet, kan vi samle inn følgende
              personopplysninger:
            </p>
            <p>
              Vi samler ikke inn data som identifiserer deg direkte. Vi registrerer blant annet
              kontoaktivitet, IP-adresser og dato og tid for tilgang. For vedlikehold,
              sikkerhet og support lagrer vi systemfeilmeldinger, nettleserinformasjon og typen
              enhet du bruker for å åpne kontoen. Vi registrerer også språket som er satt på kontoen.
            </p>
            <p>
              Når det gjelder personopplysninger, samler vi inn og lagrer utelukkende informasjon
              du oppgir når du kobler til en tredjeparts tradingplattform via tjenestene våre.
            </p>
            <p>
              Personopplysninger du har gitt til tredjepartsplattformer, kan blant annet omfatte:
              fullt navn, adresse, telefonnummer og e-postadresse.
            </p>
            <p class="bold-title">
              5. Hvorfor trenger selskapet personopplysningene mine, og er behandlingen lovlig?
            </p>
            <p>
              Selskapet samler inn, lagrer og behandler personopplysningene dine utelukkende til de
              formålene som er angitt i erklæringen. All beskrevet bruk og behandling er i samsvar med
              gjeldende lovgivning <?= e(geo_in()) ?> og EU-regelverket.
            </p>
            <p>
              Selskapet vil bare forvalte, behandle eller overføre dataene dine i samsvar med
              gjeldende regler <?= e(geo_in()) ?>. Relevante behandlingsgrunnlag står nedenfor:
            </p>
            <p class="circle">
              Du har gitt samtykke til at selskapet lagrer og behandler personopplysningene dine.
              Ved å sende inn dataene dine gir du oss fullmakt til å videresende dem til den
              aktuelle tredjeparts tradingplattformen. I tillegg har du gitt samtykke til
              behandling av personopplysningene dine til ett eller flere formål.
            </p>
            <p class="circle">
              For å forbedre tjenester, fremme eller forsvare rettskrav og beskytte berettigede
              interesser kan det blant annet være nødvendig at selskapet lagrer og
              behandler personopplysningene dine.
            </p>
            <p class="circle">For å oppfylle rettslige forpliktelser er databehandling nødvendig.</p>
            <p>
              Hvis du vil vite mer om behandlingen selskapet er forpliktet til å
              utføre, kan du gjerne kontakte oss på e-post.
            </p>
            <p>
              Nedenfor finner du konkrete formål og behandlingsgrunnlaget som gir oss
              adgang til å behandle personopplysningene dine.
            </p>
            <p class="green">Formål</p>
            <p class="green">Behandlingsgrunnlag</p>
            <p>
              1. For å lette tilgangen din til digital trading, og utelukkende på din forespørsel, vil vi
              dele personopplysningene dine med tredjepartsplattformer. Dataene dine kan samles inn
              og deles med tredjeparter, utelukkende på din forespørsel og etter ditt valg.
            </p>
            <p>
              Du har gitt samtykke til behandling av personopplysningene dine til ett eller flere formål.
            </p>
            <p>
              2. Gi oss nødvendig informasjon slik at vi raskt og
              effektivt kan svare på forespørsler, bekymringer og spørsmål om tjenestene.
            </p>
            <p>
              For å ivareta berettigede interesser til selskapet eller en navngitt tredjepart
              er behandling av personopplysninger nødvendig.
            </p>
            <p>
              3. For å oppfylle rettslige og administrative forpliktelser er behandling av personopplysninger nødvendig.
            </p>
            <p>For å oppfylle rettslige forpliktelser må vi behandle visse personopplysninger.</p>
            <p>
              4. For å forbedre tjenestene trenger vi anonymiserte data og må følge bruken,
              inkludert feilmeldinger.
            </p>
            <p>
              For å beskytte berettigede interesser til selskapet og eksterne tjenesteleverandører
              er behandling og lagring av personopplysninger nødvendig.
            </p>
            <p>5. Dette er nødvendig for å forebygge svindel og misbruk av tjenesten.</p>
            <p>
              For å sikre berettigede interesser til selskapet og tredjeparts tjenesteleverandører
              er behandling og lagring av personopplysninger nødvendig.
            </p>
            <p>
              6. Kravene til tjenesten forplikter oss til å overvåke og behandle data for
              forretningsutvikling, strategiske beslutninger, overvåking, etterlevelse og
              andre forretningsaktiviteter.
            </p>
            <p>
              For å beskytte berettigede interesser til selskapet og eksterne tjenesteleverandører
              er behandling og lagring av personopplysninger nødvendig.
            </p>
            <p>
              7. Vi bruker statistiske og analytiske verktøy for å støtte beslutninger på tvers av et bredt
              spekter av tjenestene og i den strategiske planleggingen.
            </p>
            <p>
              For å beskytte berettigede interesser til selskapet og våre eksterne tjenesteleverandører
              er behandling og lagring av personopplysninger nødvendig.
            </p>
            <p>
              8. I den utstrekning det er nødvendig for å beskytte rettigheter, eiendom og interesser til
              selskapet og tredjeparts tjenesteleverandører, og i samsvar med lokale lover og
              gjeldende regler, kontrakter og egne vilkår, kan vi behandle
              personopplysninger. Slik behandling skjer utelukkende etter nødvendige og
              fastsatte prosedyrer.
            </p>
            <p>
              For å beskytte berettigede interesser til selskapet og hver tredjeparts
              tjenesteleverandør er behandling og lagring av personopplysninger nødvendig.
            </p>
            <p class="bold-title">6. Deling av personopplysninger med tredjeparter</p>
            <p>
              For lagring og behandling av IP-adresser, for spørreundersøkelser og bruksanalyse
              og relaterte tjenester kan selskapet dele anonymiserte data med
              eksterne tjenesteleverandører.
            </p>
            <p>
              På din forespørsel deler vi visse personopplysninger du har gitt, med eksterne
              tjenesteleverandører. I så fall er behandlingen underlagt den virksomhetens
              personvernerklæring. Dette kan omfatte ulike digitale tradingplattformer.
            </p>
            <p>
              For å forbedre kundeservicen og optimalisere tjenestene generelt,
              kan selskapet dele personopplysninger med tilknyttede selskaper og forretningspartnere.
            </p>
            <p>
              Når loven krever det, eller for å beskytte rettighetene og eiendommen til selskapet og relaterte
              tredjeparter, kan vi dele data med relevante rettslige eller tilsynsmyndigheter.
            </p>
            <p>
              I forbindelse med vesentlige forretningstransaksjoner, som salg av selskapet,
              innhenting av investering eller kredittsøknad, kan relevante data deles
              på lovlig og hensiktsmessig vis. Det gjelder også fusjoner, omstruktureringer,
              konsolideringer eller insolvens i samsvar med loven.
            </p>
            <p class="bold-title">7. Informasjonskapsler og tredjepartstjenester</p>
            <p>
              Til nettstedanalyse og i samarbeid med reklamebyråer kan informasjonskapsler og andre
              lignende teknologier brukes i samsvar med loven og vanlig praksis.
            </p>
            <p>
              Informasjonskapsler, små tekstfiler som lagres på enheten når du besøker et nettsted, brukes til å
              samle informasjon om nettleseratferd, preferanser og andre data. Formålet
              er å tilpasse og forbedre brukeropplevelsen. De hjelper oss å huske
              innstillingene og preferansene dine og tilpasse tilbudet. De brukes også
              til nettstedanalyse og statistikk for planlegging.
            </p>
            <p>
              Nettstedet bruker generelt to typer informasjonskapsler: øktkapsler, som bare
              lagres under nettleserøkten og slettes når du lukker nettleseren;
              og vedvarende informasjonskapsler, som blir liggende etter at økten er over. De siste
              gjør at nettstedet kjenner deg igjen som tilbakevendende besøkende og forenkler bruken.
            </p>
            <p class="bold-title">Typer informasjonskapsler:</p>
            <p>Informasjonskapsler kan brukes etter behov avhengig av formål:</p>
            <p class="green">Type informasjonskapsel</p>
            <p>Disse informasjonskapslene er strengt nødvendige</p>
            <p class="green">Formål</p>
            <p>
              Informasjonskapsler brukes til å kjenne deg igjen som kunde, slik at vi kan gi deg informasjonen,
              innstillingene og tjenestene du har bedt om.
              De gjør også navigasjonen på nettstedet enklere og gir tilgang til det.
            </p>
            <p>
              Vi bruker informasjonskapsler slik at enheten kan laste ned og spille av innhold. De gir også
              tilgang til nødvendige funksjoner og retur til tidligere besøkte sider.
            </p>
            <p class="green">Tilleggsinformasjon</p>
            <p>
              For rask og enkel tilgang til nettstedet lagrer informasjonskapsler visse
              personopplysninger, som brukernavn og dato for siste tilgang, hvis du ber nettstedet om å
              huske deg når du logger inn.
            </p>
            <p>Øktkapsler slettes når du lukker nettleseren.</p>
            <p class="green">Type informasjonskapsel</p>
            <p>Funksjonelle informasjonskapsler</p>
            <p class="green">Formål</p>
            <p>
              Med informasjonskapsler kan vi lagre og bruke innstillingene og preferansene dine sikkert.
              De gjør det også mulig å kjenne deg igjen når du besøker nettstedet på nytt.
            </p>
            <p class="green">Tilleggsinformasjon</p>
            <p>
              Vedvarende informasjonskapsler blir liggende etter nettleserøkten og er aktive til
              utløpsdatoen.
            </p>
            <p class="green">Type informasjonskapsel</p>
            <p>Ytelsesinformasjonskapsler</p>
            <p class="green">Formål</p>
            <p>
              For å forbedre tjenestene samler vi statistikk via informasjonskapsler. Disse
              gir oss informasjon om nettstedets ytelse og bruk.
            </p>
            <p class="green">Tilleggsinformasjon</p>
            <p>
              All informasjon som lagres via informasjonskapsler, er anonym og gjør det ikke mulig å identifisere personer.
            </p>
            <p>
              Øktkapsler slettes når du lukker nettleseren, mens vedvarende informasjonskapsler
              forblir aktive til utløpsdatoen eller på ubestemt tid, med mindre du sletter dem manuelt.
            </p>
            <p>Blokkere eller slette informasjonskapsler</p>
            <p>
              Hvis du vil fjerne eller blokkere informasjonskapsler, må du gjøre det i
              nettleserinnstillingene. Følgende lenker har detaljerte instruksjoner for de mest brukte nettleserne.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokkering av informasjonskapsler kan føre til at noen funksjoner ikke virker som de skal.
            </p>
            <p class="bold-title">Hvor lenge vi lagrer personopplysninger</p>
            <p>
              Personopplysningene dine lagres bare så lenge det er strengt nødvendig for de aktuelle
              prosessene, som beskrevet andre steder i denne erklæringen. Lengre lagring kan skje hvis
              lokale lover, regler eller interne retningslinjer krever det.
            </p>
            <p>
              Personopplysningene dine deles på din forespørsel og etter ditt valg med tredjeparts
              tradingplattformer i 12 måneder. Når perioden utløper, og med ditt
              samtykke, deles dataene i ytterligere 12 måneder.
            </p>
            <p>
              Prosedyrene våre innebærer jevnlig vurdering av alle personopplysninger for å avgjøre om
              de fortsatt trengs.
            </p>
            <p class="bold-title">
              9. Overføring av personopplysninger til tredjeland eller internasjonale organisasjoner
            </p>
            <p>
              Når det er nødvendig for tjenestene og/eller av sikkerhetsgrunner, kan vi overføre
              personopplysninger til andre land (utenfor ditt) og til internasjonale organisasjoner
              etter omfattende sikkerhetsprotokoller. Vi iverksetter personverntiltak på
              høyt nivå for å beskytte informasjonen din og sikre tilgangen din til rettsmidler
              og lovfestede rettigheter til enhver tid.
            </p>
            <p>
              I Det europeiske økonomiske samarbeidsområdet (EØS) gjelder personvern og garantier for alle innbyggere.
            </p>
            <p class="circle">
              Overføringer skjer alltid under EUs jurisdiksjon og tilsyn, i samsvar
              med personvernstandardene og protokollene i artikkel 45 nr. 3 i forordning
              (EU) 2016/679 fra Europaparlamentet og Rådet av 27. april 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Enhver overføring av data mellom offentlige organer skjer etter artikkel
              46 nr. 2. Dette er en juridisk bindende og håndhevbar avtale.
            </p>
            <p class="circle">
              Europakommisjonens standardkontraktsklausuler etter artikkel 46 nr. 2 bokstav c GDPR fastsetter
              vilkårene for overføring, og slike overføringer skjer i samsvar med
              disse. Du kan lese bestemmelsene på
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Mer informasjon om de konkrete sikkerhetstiltakene selskapet har iverksatt for å
              beskytte personopplysningene dine ved overføring til tredjeland, kan du sende en forespørsel
              på e-post til <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Beskyttelse av personopplysninger</p>
            <p>
              Personopplysninger beskyttes av tekniske og organisatoriske tiltak på høyeste
              nivå, brukt i samsvar med referanseprosedyrer. Disse prosedyrene er effektive
              for å hindre ødeleggelse av data ved ulovlige eller uforutsette hendelser, samt
              tap eller endring av dem.
            </p>
            <p>
              Selv om vi bruker størst mulig omhu og prosedyrer som oppfyller de strengeste
              personvernstandardene og loven, kan det under ingen omstendigheter garanteres
              at personopplysningene dine er feilfrie. Derfor kan vi ikke påta oss ansvar hvis
              personopplysninger rammes av tilfeldig, immateriell eller følgeskade eller utlevering.
              Dette omfatter situasjoner utenfor vår kontroll, som utlevering på grunn av overføringsfeil,
              uautorisert tilgang fra tredjeparter eller lignende årsaker.
            </p>
            <p>
              Når vi mottar juridisk bindende forespørsler fra tilsynsmyndigheter eller andre
              offentlige organer med lovfestet myndighet, kan vi være forpliktet til å videresende
              personopplysningene dine til disse organene. Etter videresending på grunnlag av en rettslig plikt har vi
              ingen kontroll over hvordan disse organene behandler, lagrer eller beskytter dataene.
            </p>
            <p>
              Alt som sendes over internett, inkludert personopplysninger, innebærer en
              viss risiko for avlytting og er ikke 100 % sikkert. Selskapet kan ikke garantere
              sikkerheten til data som sendes på nett.
            </p>
            <p class="bold-title">11. Lenker til tredjepartsnettsteder</p>
            <p>
              På dette nettstedet finner du lenker til tredjepartsapper og -nettsteder. Merk at
              de ikke er knyttet til selskapet og ikke er under dets kontroll, og at
              personvernerklæringen vår ikke gjelder for disse tredjepartene. De opererer etter egne
              prosedyrer og prioriteringer for innsamling og behandling av personopplysninger; derfor
              påtar vi oss ikke ansvar for slike aktiviteter. Bruk dem etter eget skjønn.
            </p>
            <p>
              Sjekk alltid personvernerklæringen til selskapet eller tjenesten når du besøker nettstedet deres
              før du oppgir personopplysninger. Vurder om reglene deres for innsamling, bruk og
              behandling stemmer med preferansene dine. Hvis du deler data, gjør det
              direkte hos leverandøren.
            </p>
            <p class="bold-title">12. Oppdateringer av erklæringen</p>
            <p>
              Vi forbeholder oss retten til å oppdatere eller endre denne erklæringen når som helst. Vi informerer deg
              om endringer via nettstedet og aktuelle kanaler. Den oppdaterte versjonen av personvern-
              erklæringen publiseres på nettstedet, og den reviderte erklæringen gjelder
              fra publisering, med mindre noe annet er angitt.
            </p>
            <p class="bold-title">13. Dine rettigheter knyttet til personopplysninger</p>
            <p>
              Du har kontrollen og det siste ordet over bruken av alle personopplysningene dine. Det
              omfatter å kontrollere nøyaktigheten, rette feil og retten til sletting eller
              begrensning av behandlingen vår — både i omfang og art.
            </p>
            <p>Innbyggere i EØS finner relevant informasjon på denne siden:</p>
            <p>
              Personopplysningene dine er beskyttet av rettighetene som beskrives her. Ved å sende e-post til
              adressen nedenfor kan du utøve disse rettighetene umiddelbart.
            </p>
            <p>Tilgang til rettighetene dine</p>
            <p>
              Hvis personopplysningene du har gitt, er korrekte, kan du når som helst få tilgang til dem. Alle
              personopplysninger vi behandler, er tilgjengelige for oss og dermed kontrollerbare.
            </p>
            <p>
              Du kan når som helst be om personopplysningene dine til kontroll, og de vil bli gjort
              tilgjengelige for deg i elektronisk form. Hvis du ber om flere kopier av
              behandlede data utover den kopien som allerede er gitt, kan et rimelig gebyr kreves.
            </p>
            <p>
              Rettigheter som er anerkjent i lov og personvernerklæring, må ikke berøre rettighetene til
              tredjeparter. Selskapet forbeholder seg retten til å nekte eller begrense tilgang til personopplysninger
              hvis det krenker rettighetene og frihetene til tredjeparter.
            </p>
            <p>Rett til retting</p>
            <p>
              Enhver feil i personopplysningene dine, enten på grunn av utelatelse eller uriktig informasjon,
              kan rettes av deg eller selskapet for å sikre riktig behandling.
            </p>
            <p>Rett til sletting</p>
            <p>
              Du har rett til å be om sletting av personopplysningene dine i følgende
              tilfeller: 1) hvis de er behandlet uten samtykke eller utenfor lovens rammer; 2)
              på din forespørsel, hvis du vil at de skal slettes og selskapet ikke har noen rettslig plikt til å
              beholde dem; 3) hvis du motsetter deg behandlingen eller ikke lenger samtykker, selv om den
              er lovlig og dekket av våre interesser eller tredjeparts interesser; og 4) hvis loven
              pålegger oss å slette dem.
            </p>
            <p>
              Retten til sletting gjelder ikke hvis rettslige forpliktelser i EU eller
              i en medlemsstat står i veien. Den gjelder heller ikke hvis dataene trengs for å fremme eller
              forsvare rettskrav.
            </p>
            <p>Rett til begrensning av behandlingen</p>
            <p>
              Du har rett til å be om begrensning av behandlingen av personopplysningene dine hvis du
              mener de inneholder unøyaktigheter.
            </p>
            <p>
              Hvis du ber om begrensning av bruken av personopplysningene dine, begrenser vi behandlingen, unntatt i
              følgende tilfeller: 1) hvis gjeldende lovgivning i Den europeiske union eller i en av dens
              medlemsstater hindrer det; 2) med ditt samtykke, dersom det er nødvendig for å forsvare eller fremme
              rettskrav; 3) for å beskytte rettighetene til en annen fysisk person.
            </p>
            <p>Rett til dataportabilitet</p>
            <p>
              Du har rett til å få tilgang til og kontrollere personopplysningene du har gitt, i den
              utstrekning du har samtykket til innsamlingen, og hvis behandlingen
              skjer via automatiserte systemer.
            </p>
            <p>
              Du har rett til å be om overføring av alle personopplysningene dine til et annet selskap eller
              en annen organisasjon, så langt det er teknisk mulig. Denne retten berører ikke
              retten til sletting. Den gjelder ikke hvis utøvelsen krenker rettighetene
              eller frihetene til en annen fysisk person.
            </p>
            <p>Rett til å motsette seg behandling</p>
            <p>
              Uten at det berører selskapets rett til å ivareta berettigede interesser eller
              interessene til en tredjepart som opptrer som tjenesteleverandør, har du rett til å motsette deg
              behandling og be om at den stanses. Denne retten gjelder ikke hvis det foreligger et tvingende
              rettslig behov for å fortsette behandlingen, enten for å forsvare rettskrav eller for å fremme
              rettskrav. I slike tilfeller kan vi fortsette behandlingen av personopplysningene dine.
            </p>
            <p>
              Du kan når som helst motsette deg behandling av personopplysningene dine til direkte markedsføring.
            </p>
            <p>
              Rett til å trekke tilbake samtykke
            </p>
            <p>
              Du kan når som helst trekke tilbake samtykket til vår behandling av personopplysningene dine,
              med umiddelbar virkning. Tilbaketrekkingen har ingen tilbakevirkende kraft på behandling som
              er utført før tilbaketrekkingen.
            </p>
            <p>
              Hvis du av en eller annen grunn er misfornøyd, har du rett til å klage til et
              rettslig, tilsyns- eller annet kontrollorgan.
            </p>
            <p>
              Hvis du mener at rettighetene og frihetene dine knyttet til behandlingen av personopplysningene dine
              er krenket, har EUs medlemsstater tilsyns- og kontrollorganer
              til dette formålet. Du kan klage til disse organene hvis du synes det er hensiktsmessig.
            </p>
            <p>
              Punkt 13 beskriver situasjoner der rettighetene dine knyttet til personopplysninger kan bli
              begrenset av EUs eller medlemsstatenes lovgivning.
            </p>
            <p>
              Når vi mottar forespørselen din om personopplysningene og behandlingen, gir vi deg
              tilgang til den etterspurte informasjonen, som beskrevet i punkt 13 i denne erklæringen.
              Vi kan forlenge fristen med inntil to måneder avhengig av omfanget av forespørselen
              og arten av spørsmålet. Ved behov varsler vi deg om forlengelsen
              innen én måned etter at vi mottok forespørselen.
            </p>
            <p>
              Vi sender den etterspurte informasjonen elektronisk og kostnadsfritt, med mindre
              dette strider mot loven eller bestemmelsene i punkt 13. Vi forbeholder oss retten til å
              kreve et rimelig gebyr eller avslå en forespørsel hvis den anses som grunnløs, overdreven eller gjentatt.
            </p>
            <p>
              Vi forbeholder oss retten til å be om ekstra identitetsverifisering hvis det er
              rimelig tvil om personen som sender inn en forespørsel om personopplysninger, for å
              beskytte og sikre dataene.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

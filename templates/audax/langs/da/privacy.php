<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privatlivspolitik | ' . SITE_NAME;
$page_description = 'Privatlivspolitik for ' . SITE_NAME . '.';
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
            <h1>Privatlivspolitik</h1>
            <p>
              Dine personoplysninger og dine aktiver er af største betydning for os. Vi er fuldt
              forpligtet til at beskytte dem.
            </p>
            <p>
              <?= e(SITE_NAME) ?> indsamler og opbevarer de data, der er nødvendige for dine transaktioner. Hvordan
              de indsamles og opbevares, beskrives i den følgende privatlivspolitik.
            </p>
            <p>Vores politik bygger på følgende principper:</p>
            <p class="circle">
              For at sikre maksimal gennemsigtighed om, hvordan vi indsamler og
              opbevarer dine personoplysninger:
            </p>
            <p>
              Vi vil, at du forstår, hvordan vi indsamler og behandler data, så du kan træffe
              informerede valg. Vi anvender tydelige retningslinjer og processer for databehandling på
              dette websted. Politikken beskriver i detaljer de metoder, vi bruger til at give
              dig klar og konkret information om dataanvendelse. Kontrollen er din.
            </p>
            <p>
              Vi underretter dig straks, når vi finder det nødvendigt. Gennemsigtighed er
              af grundlæggende betydning for os.
            </p>
            <p>
              Vores specialistteam er altid klar til at besvare spørgsmål om ethvert aspekt
              af vores processer, herunder forpligtelser efter retten <?= e(geo_in()) ?> og EU-
              regler. Du kan kontakte os på:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Anden brug af personoplysninger fra vores side er ikke tilladt, undtagen som fastsat i
              privatlivspolitikken.
            </p>
            <p>
              Vi kan behandle personoplysninger til følgende formål, herunder at sikre korrekt
              drift af <?= e(SITE_NAME) ?>-tjenester og at forbinde brugere med tredjeparts
              handelsplatforme. Behandling kan også være nødvendig for at vedligeholde og forbedre
              webstedets funktioner og tjenester; at beskytte vores rettigheder og opfylde juridiske og andre
              forpligtelser. Endelig bruges dataene efter behov til administrative
              og andre forretningsfunktioner i forbindelse med de tjenester, du som kunde får.
            </p>
            <p>
              For at tilbyde tjenester af højere kvalitet tilpasset dine præferencer og behov bruger <?= e(SITE_NAME) ?>
              personoplysninger.
            </p>
            <p class="circle">
              For at bruge de nødvendige værktøjer til at beskytte dine personoplysninger og sikre dine
              rettigheder i forhold til dem:
            </p>
            <p>
              Du kan når som helst kontakte os og få adgang til alle dine data. Vi kan også
              ændre eller slette dem efter behov. Desuden behandler vi anmodninger om at overføre disse
              data til dig eller en tredjepart, du udpeger. Vi tilbyder denne service, så du
              fuldt ud kan udøve dine privatlivs- og kontrolrettigheder.
            </p>
            <p class="circle">Beskyt dine personoplysninger:</p>
            <p>
              Vores sikkerhedssystemer er af høj kvalitet og omfatter foranstaltninger på bankniveau. Selvom
              absolut beskyttelse ikke kan garanteres, forpligter vi os til løbende at holde systemerne
              på højeste niveau og styrke de allerede indførte foranstaltninger.
            </p>
            <p>
              Vi har en omfattende privatlivspolitik og førsteklasses sikkerhedssystemer.
            </p>
            <p class="bold-title">1. Anvendelsesområde</p>
            <p>
              Denne politik beskriver, hvordan vi indsamler, behandler og videregiver alle
              data om fysiske personer.
            </p>
            <p>
              Politikkens bestemmelser gælder for alle fysiske personer, der kan identificeres eller er
              identificeret. Specifikt for hver fysisk person, der kan identificeres i forbindelse med
              data, der er betroet os, som vi har adgang til, og/eller som vi kan kombinere.
            </p>
            <p>
              Databehandling i privatlivspolitikkens forstand omfatter især opbevaring,
              forvaltning og organisering af personoplysninger.
            </p>
            <p>
              Vi indsamler ikke og forsøger ikke at indsamle oplysninger om personer under 18
              år. Personer under 18 år må heller ikke bruge vores platform til noget
              formål. Hvis vi opdager, at en bruger er under 18 år, sletter vi dataene straks.
            </p>
            <p class="bold-title">2. Hvilke personoplysninger indsamler vi?</p>
            <p>
              Ved tilmelding indsamler vi de personoplysninger, der er nødvendige for at bruge tjenesterne. Hvis det er nødvendigt,
              kan vi også anmode om data til verifikation, for eksempel for at
              bekræfte kontoejerskab. For at forbedre og fastholde den højeste kvalitet af vores
              tjenester indsamler og analyserer vi oplysninger om din brug af platformen og
              relaterede tredjepartstjenester.
            </p>
            <p class="bold-title">
              3. Du er under ingen omstændigheder forpligtet til at give virksomheden dine personoplysninger.
            </p>
            <p>
              Selvom du ikke er forpligtet til at give os dine data, kan beslutningen om ikke at gøre det
              medføre begrænsninger i tjenesterne. Det kan også føre til
              begrænsninger i brugen af platformen.
            </p>
            <p class="bold-title">
              4. Hvilke personoplysninger indsamler vi? Når du besøger webstedet, kan vi indsamle følgende
              personoplysninger:
            </p>
            <p>
              Vi indsamler ikke data, der identificerer dig personligt. Vi registrerer blandt andet
              kontoaktivitet, IP-adresser samt adgangsdatoer og -tidspunkter. Til vedligeholdelse,
              sikkerhed og support gemmer vi systemfejlrapporter, browseroplysninger og den type
              enhed, du logger ind fra. Vi registrerer også det sprog, der er sat på kontoen.
            </p>
            <p>
              Hvad angår personoplysninger, indsamler og opbevarer vi udelukkende oplysninger,
              du giver, når du opretter forbindelse til en tredjeparts handelsplatform via vores tjenester.
            </p>
            <p>
              Personoplysninger, du har givet til tredjepartsplatforme, kan omfatte:
              fulde navn, adresse, telefonnummer og e-mailadresse.
            </p>
            <p class="bold-title">
              5. Hvorfor har virksomheden brug for mine data, og er behandlingen lovlig?
            </p>
            <p>
              Virksomheden indsamler, opbevarer og behandler dine personoplysninger udelukkende til
              de formål, der er angivet i politikken. Al nævnt brug og behandling er i overensstemmelse med
              gældende ret <?= e(geo_in()) ?> og EU-regler.
            </p>
            <p>
              Virksomheden vil kun forvalte, behandle eller overføre dine data i overensstemmelse med
              gældende regler <?= e(geo_in()) ?>. De relevante retsgrundlag er anført nedenfor:
            </p>
            <p class="circle">
              Du har givet samtykke til, at virksomheden opbevarer og behandler dine personoplysninger.
              Når du giver data til virksomheden, bemyndiger du os til at videresende dem til den relevante
              tredjeparts handelsplatform. Desuden har du givet samtykke til
              behandling af dine personoplysninger til ét eller flere formål.
            </p>
            <p class="circle">
              For at forbedre tjenester, indgive eller forsvare krav og beskytte legitime
              interesser kan det blandt andet være nødvendigt for virksomheden at opbevare og
              behandle dine personoplysninger.
            </p>
            <p class="circle">For at opfylde retlige forpligtelser er databehandling nødvendig.</p>
            <p>
              Hvis du vil vide mere om den behandling, virksomheden er forpligtet til at
              udføre, er du velkommen til at skrive til os på e-mail.
            </p>
            <p>
              Nedenfor finder du de konkrete formål og det retsgrundlag, der giver os
              ret til at behandle dine personoplysninger.
            </p>
            <p class="green">Formål</p>
            <p class="green">Retsgrundlag</p>
            <p>
              1. For at lette din adgang til digital handel og — udelukkende efter din anmodning —
              deler vi dine personoplysninger med tredjepartsplatforme. Dine data kan indsamles
              og deles med tredjeparter udelukkende efter din anmodning og efter dit skøn.
            </p>
            <p>
              Du har givet samtykke til behandling af dine personoplysninger til ét eller flere formål.
            </p>
            <p>
              2. Giv os de nødvendige oplysninger, så vi kan svare hurtigt og
              effektivt på dine anmodninger, bekymringer og spørgsmål om tjenesterne.
            </p>
            <p>
              For at varetage virksomhedens eller en navngiven tredjeparts legitime interesser
              er behandling af personoplysninger nødvendig.
            </p>
            <p>
              3. For at opfylde vores retlige og administrative forpligtelser er behandling af personoplysninger nødvendig.
            </p>
            <p>For at opfylde vores retlige forpligtelser skal vi behandle visse personoplysninger.</p>
            <p>
              4. For at forbedre tjenesterne har vi brug for anonymiserede data og skal overvåge brugen,
              herunder fejlrapporter.
            </p>
            <p>
              For at beskytte virksomhedens og eksterne tjenesteudbyderes legitime interesser
              er behandling og opbevaring af personoplysninger nødvendig.
            </p>
            <p>5. Dette er nødvendigt for at forebygge svig og misbrug af tjenesten.</p>
            <p>
              For at sikre virksomhedens og tredjepartsudbyderes legitime interesser
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Tjenestens krav forpligter os til at overvåge og behandle data til
              forretningsudvikling, strategiske beslutninger, overvågning, overholdelse og
              andre forretningsaktiviteter.
            </p>
            <p>
              For at beskytte virksomhedens og eksterne tjenesteudbyderes legitime interesser
              er behandling og opbevaring af personoplysninger nødvendig.
            </p>
            <p>
              7. Vi bruger statistiske og dataanalytiske værktøjer til at understøtte beslutninger på et bredt
              spektrum af tjenester og i den strategiske planlægning.
            </p>
            <p>
              For at beskytte virksomhedens og vores eksterne tjenesteudbyderes legitime interesser
              er behandling og opbevaring af personoplysninger nødvendig.
            </p>
            <p>
              8. I det omfang det er nødvendigt for at beskytte virksomhedens og tredjepartsudbyderes
              rettigheder, ejendom og interesser, i overensstemmelse med alle lokale love og
              gældende regler, kontrakter og vores egne vilkår, kan vi behandle
              personoplysninger. Sådan behandling sker udelukkende efter nødvendige og
              fastlagte procedurer.
            </p>
            <p>
              For at beskytte virksomhedens og hver enkelt ekstern
              tjenesteudbyders legitime interesser er behandling og opbevaring af personoplysninger nødvendig.
            </p>
            <p class="bold-title">6. Deling af personoplysninger med tredjeparter</p>
            <p>
              Til opbevaring og behandling af IP-adresser, til undersøgelser og brugsanalyse
              og relaterede tjenester kan virksomheden dele anonymiserede data med
              eksterne tjenesteudbydere.
            </p>
            <p>
              Efter din anmodning deler vi nogle af de personoplysninger, du har givet, med eksterne
              tjenesteudbydere. I så fald er behandlingen underlagt den pågældende
              virksomheds privatlivspolitik. Det kan omfatte forskellige digitale handelsplatforme.
            </p>
            <p>
              For at forbedre kundeservice og generelt optimere tjenesterne
              kan virksomheden dele personoplysninger med tilknyttede selskaber og forretningspartnere.
            </p>
            <p>
              Når loven kræver det, eller for at beskytte virksomhedens og relaterede
              tredjeparters rettigheder og ejendom, kan vi dele data med relevante juridiske eller tilsynsmyndigheder.
            </p>
            <p>
              I forbindelse med kritiske forretningsoperationer, f.eks. salg af virksomheden,
              tiltrækning af investering eller en kreditansøgning, kan relevante data deles
              lovligt og passende. Det gælder også fusioner, omstruktureringer,
              konsolideringer eller virksomhedens insolvens i overensstemmelse med loven.
            </p>
            <p class="bold-title">7. Cookies og tredjepartstjenester</p>
            <p>
              Til webstedsanalyse og i samarbejde med reklamebureauer kan cookies og andre
              lignende teknologier bruges i overensstemmelse med loven og almindelig praksis.
            </p>
            <p>
              Cookies — små tekstfiler, der gemmes på din enhed, når du besøger et websted — bruges til at
              indsamle oplysninger om din browsingadfærd, præferencer og andre data. Deres
              formål er at tilpasse og forbedre oplevelsen. De hjælper os med at huske dine
              indstillinger og præferencer og tilpasse tilbuddet. De bruges også til
              webstedsanalyse og statistik til planlægning.
            </p>
            <p>
              Webstedet bruger som regel to typer cookies: sessionscookies, der kun gemmes
              under browsersessionen og slettes, når du lukker browseren;
              og vedvarende cookies, der bliver efter sessionen. De sidstnævnte
              gør det muligt for webstedet at genkende dig som tilbagevendende besøgende og letter brugen.
            </p>
            <p class="bold-title">Cookietyper:</p>
            <p>Cookies kan bruges efter behov afhængigt af formålet:</p>
            <p class="green">Cookietype</p>
            <p>Disse cookies er strengt nødvendige</p>
            <p class="green">Formål</p>
            <p>
              Cookies bruges til at genkende dig som kunde, så vi kan levere de oplysninger,
              indstillinger og tjenester, du har anmodet om.
              De letter også navigationen og adgangen til webstedet.
            </p>
            <p>
              Vi bruger cookies, så din enhed kan downloade og afspille indhold. De giver også
              adgang til væsentlige funktioner og tilbagevenden til tidligere besøgte sider.
            </p>
            <p class="green">Yderligere information</p>
            <p>
              For at gøre adgangen hurtig og enkel gemmer og behandler cookies visse
              personoplysninger, f.eks. brugernavn og seneste adgangsdato, hvis du beder webstedet om at
              huske dig, når du logger ind.
            </p>
            <p>Sessionscookies slettes, når du lukker webbrowseren.</p>
            <p class="green">Cookietype</p>
            <p>Funktionelle cookies</p>
            <p class="green">Formål</p>
            <p>
              Med cookies kan vi sikkert gemme og anvende dine indstillinger og præferencer.
              De gør det også muligt at genkende dig ved næste besøg.
            </p>
            <p class="green">Yderligere information</p>
            <p>
              Vedvarende cookies bliver efter browsersessionen og er aktive indtil
              udløbsdatoen.
            </p>
            <p class="green">Cookietype</p>
            <p>Ydelsescookies</p>
            <p class="green">Formål</p>
            <p>
              For at forbedre tjenesterne indsamler vi statistik med cookies. De
              giver os oplysninger om webstedets ydelse og brugen af det.
            </p>
            <p class="green">Yderligere information</p>
            <p>
              Al information, der gemmes via cookies, er anonym og gør det ikke muligt at identificere personer.
            </p>
            <p>
              Sessionscookies slettes, når du lukker browseren, mens vedvarende
              forbliver aktive indtil udløb eller på ubestemt tid, medmindre du sletter dem manuelt.
            </p>
            <p>Cookies blokeres eller slettes</p>
            <p>
              Hvis du vil fjerne eller blokere cookies, skal du gøre det i
              browserens indstillinger. Linksene nedenfor har detaljerede vejledninger til de mest populære browsere.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokering af cookies kan medføre, at nogle funktioner ikke virker som tilsigtet.
            </p>
            <p class="bold-title">Hvor længe vi opbevarer personoplysninger</p>
            <p>
              Personoplysninger opbevares kun så længe, det er strengt nødvendigt for de påkrævede
              processer, som angivet i andre afsnit af denne politik. Længere opbevaring er mulig, hvis
              lokale regler eller virksomhedens interne politik kræver det.
            </p>
            <p>
              Dine personoplysninger deles efter din anmodning og efter dit skøn med tredjeparts
              handelsplatforme i 12 måneder. Når perioden udløber, og med dit
              samtykke, deles dataene i yderligere 12 måneder.
            </p>
            <p>
              Vores procedurer indebærer regelmæssig vurdering af alle personoplysninger for at afgøre, om
              de stadig er nødvendige.
            </p>
            <p class="bold-title">
              9. Overførsel af personoplysninger til tredjelande eller internationale organisationer
            </p>
            <p>
              Når det er nødvendigt for tjenesterne og/eller af sikkerhedshensyn, kan vi overføre
              personoplysninger til andre lande (uden for dit) og til internationale organisationer
              efter omfattende sikkerhedsprotokoller. Vi gennemfører databeskyttelsesforanstaltninger på
              højt niveau for at beskytte oplysningerne og sikre din adgang til retsmidler
              og lovbestemte rettigheder til enhver tid.
            </p>
            <p>
              I Det Europæiske Økonomiske Samarbejdsområde (EØS) har alle indbyggere databeskyttelse og garantier.
            </p>
            <p class="circle">
              Overførsler sker altid under EU-jurisdiktion og -tilsyn, i overensstemmelse med
              databeskyttelsesstandarder og -protokoller i artikel 45, stk. 3, i
              Europa-Parlamentets og Rådets forordning (EU) 2016/679 af 27. april 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Enhver overførsel af data mellem offentlige organer sker i henhold til artikel
              46, stk. 2. Det er en juridisk bindende og håndhævelig aftale.
            </p>
            <p class="circle">
              Europa-Kommissionens standardkontraktbestemmelser efter GDPR artikel 46, stk. 2, litra c, fastsætter
              betingelserne for overførsel, og sådanne overførsler sker i overensstemmelse med
              dem. Du kan se bestemmelserne på
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Mere om de konkrete sikkerhedsforanstaltninger, virksomheden har truffet for at
              beskytte personoplysninger under overførsel til tredjelande, kan du sende en anmodning
              pr. e-mail til <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Beskyttelse af personoplysninger</p>
            <p>
              Personoplysninger beskyttes af tekniske og organisatoriske foranstaltninger på højeste
              niveau i overensstemmelse med referenceprocedurer. Disse procedurer er effektive
              til at forhindre ødelæggelse af data som følge af ulovlige eller uforudsete hændelser samt
              tab eller ændring.
            </p>
            <p>
              Selvom vi udviser størst mulig omhu og procedurer, der opfylder de strengeste
              databeskyttelsesstandarder og loven, kan det under ingen omstændigheder garanteres,
              at personoplysninger er fejlfri. Derfor kan vi ikke påtage os ansvar, hvis
              personoplysninger lider utilsigtet, immateriel eller følgeskade eller videregivelse.
              Det omfatter situationer uden for vores kontrol, f.eks. videregivelse som følge af transmissions-
              fejl, uautoriseret adgang fra tredjeparter eller lignende årsager.
            </p>
            <p>
              Når vi modtager juridisk bindende anmodninger fra tilsynsmyndigheder eller andre
              offentlige organer med lovbestemte beføjelser, kan vi være forpligtet til at videresende
              dine personoplysninger til disse organer. Når de er videregivet på grundlag af en retlig forpligtelse, har vi ingen
              kontrol over, hvordan disse organer behandler, opbevarer eller beskytter dine data.
            </p>
            <p>
              Alt, der sendes over internettet, herunder personoplysninger, rummer en vis
              risiko for aflytning og er ikke 100 % sikkert. Virksomheden kan ikke garantere
              sikkerheden for data, der sendes online.
            </p>
            <p class="bold-title">11. Links til tredjepartswebsteder</p>
            <p>
              På dette websted finder du links til tredjepartsapplikationer og -websteder. Bemærk,
              at de ikke er forbundet med virksomheden og ikke er under dens kontrol, og at vores
              privatlivspolitik ikke gælder for dem. De arbejder efter deres egne
              procedurer og prioriteter for indsamling og behandling af personoplysninger, og derfor
              påtar vi os ikke ansvar for disse aktiviteter. Brug dem efter eget skøn.
            </p>
            <p>
              Tjek altid virksomhedens eller tjenestens privatlivspolitik, når du besøger deres websted
              før du giver personoplysninger. Kontroller, om deres regler for indsamling, brug og
              behandling matcher dine præferencer. Hvis du beslutter at dele data, så del dem
              direkte med tjenesteudbyderen.
            </p>
            <p class="bold-title">12. Opdateringer af politikken</p>
            <p>
              Vi forbeholder os retten til når som helst at opdatere eller ændre denne politik. Vi informerer dig
              om ændringer via webstedet og relevante kanaler. Den opdaterede version af privatlivs-
              politikken offentliggøres på webstedet, og den reviderede politik træder i kraft
              straks efter offentliggørelse, medmindre andet er angivet.
            </p>
            <p class="bold-title">13. Dine rettigheder vedrørende personoplysninger</p>
            <p>
              Du har kontrollen og det sidste ord over brugen af alle dine personoplysninger. Det
              omfatter at kontrollere nøjagtigheden, rette fejl og retten til sletning eller
              begrænsning af vores behandling — både i omfang og art.
            </p>
            <p>EØS-indbyggere finder relevant information på denne side:</p>
            <p>
              Dine personoplysninger er beskyttet af de rettigheder, der beskrives her. Ved at sende en e-mail til
              adressen nedenfor kan du straks udøve disse rettigheder.
            </p>
            <p>Adgang til dine rettigheder</p>
            <p>
              Hvis de personoplysninger, du har givet, er nøjagtige, kan du tilgå dem når som helst. Alle
              personoplysninger, vi behandler, er tilgængelige for os og dermed kontrollerbare.
            </p>
            <p>
              Du kan når som helst anmode om dine personoplysninger til kontrol, og de vil blive stillet
              til rådighed i elektronisk form. Hvis du anmoder om yderligere kopier af dine
              behandlede data ud over den allerede udleverede kopi, kan der opkræves et rimeligt gebyr.
            </p>
            <p>
              Rettigheder anerkendt i lov og privatlivspolitik må ikke berøre tredjeparts
              rettigheder. Virksomheden forbeholder sig retten til at nægte eller begrænse adgang til personoplysninger,
              hvis det krænker tredjeparts rettigheder og friheder.
            </p>
            <p>Ret til berigtigelse</p>
            <p>
              Enhver fejl i dine personoplysninger, hvad enten det skyldes udeladelse eller unøjagtige oplysninger,
              kan rettes af dig eller virksomheden, så behandlingen er korrekt.
            </p>
            <p>Ret til sletning af data</p>
            <p>
              Du har ret til at anmode om sletning af dine personoplysninger i følgende
              tilfælde: 1) hvis de er behandlet uden samtykke eller uden for lovens rammer; 2)
              efter din anmodning, hvis du vil have dem slettet, og virksomheden ikke har en retlig pligt til
              at opbevare dem; 3) hvis du gør indsigelse mod behandlingen eller trækker samtykket tilbage, selv om den er
              lovlig og baseret på vores eller tredjeparts interesser; og 4) hvis loven
              forpligter os til at slette dem.
            </p>
            <p>
              Retten til sletning gælder ikke, hvis der er retlige forpligtelser i EU eller
              medlemsstatslovgivning. Den gælder heller ikke, hvis dataene er nødvendige for at forfølge eller
              forsvare retlige krav.
            </p>
            <p>Ret til begrænsning af databehandling</p>
            <p>
              Du har ret til at anmode om begrænsning af behandlingen af dine personoplysninger, hvis du
              mener, at de indeholder unøjagtigheder.
            </p>
            <p>
              Hvis du anmoder om begrænsning af brugen af dine personoplysninger, begrænser vi behandlingen, undtagen i
              følgende tilfælde: 1) hvis gældende lovgivning i Den Europæiske Union eller en af dens
              medlemsstater forhindrer det; 2) med dit samtykke, hvis det er nødvendigt for at forsvare eller forfølge
              retlige krav; 3) for at beskytte en anden fysisk persons rettigheder.
            </p>
            <p>Ret til dataportabilitet</p>
            <p>
              Du har ret til at tilgå og kontrollere de personoplysninger, du har givet, i det omfang
              du har givet samtykke til indsamlingen, og hvis behandlingen
              sker i automatiserede systemer.
            </p>
            <p>
              Du har ret til at anmode om overførsel af alle dine personoplysninger til et andet selskab eller
              en organisation, i det omfang det er teknisk muligt. Denne ret påvirker ikke din
              ret til sletning. Den gælder ikke, hvis udøvelsen krænker
              en anden fysisk persons rettigheder eller friheder.
            </p>
            <p>Ret til at gøre indsigelse mod databehandling</p>
            <p>
              Uden at det berører virksomhedens ret til at varetage vores legitime interesser eller
              en tredjeparts, der handler som tjenesteudbyder, har du ret til at gøre indsigelse mod
              behandlingen og anmode om, at den ophører. Denne ret gælder ikke, hvis der er et presserende
              retligt behov for at fortsætte behandlingen — enten for at forsvare sig mod krav eller for at forfølge
              retlige krav. I sådanne tilfælde kan vi fortsætte behandlingen af dine data.
            </p>
            <p>
              Du kan når som helst gøre indsigelse mod behandling af dine personoplysninger til direkte markedsføring.
            </p>
            <p>
              Ret til at trække samtykke tilbage
            </p>
            <p>
              Du kan når som helst trække dit samtykke til behandling af personoplysninger tilbage
              med øjeblikkelig virkning. Tilbagekaldelsen har ingen tilbagevirkende kraft på behandling,
              der er sket før tilbagekaldelsen.
            </p>
            <p>
              Hvis du af en eller anden grund er utilfreds, har du ret til at indgive en klage til en
              juridisk, tilsyns- eller anden kontrolmyndighed.
            </p>
            <p>
              Hvis du mener, at dine rettigheder og friheder i forbindelse med behandlingen af dine personoplysninger
              er blevet krænket, har EU-medlemsstaterne tilsyns- og kontrol-
              myndigheder til det formål. Du kan indgive en klage til disse organer, hvis du finder det hensigtsmæssigt.
            </p>
            <p>
              Afsnit 13 beskriver situationer, hvor dine rettigheder vedrørende personoplysninger kan blive
              begrænset af Den Europæiske Unions eller medlemsstaternes love.
            </p>
            <p>
              Når vi modtager din anmodning om personoplysninger og behandlingen af dem, giver vi
              dig adgang til de ønskede oplysninger som angivet i afsnit 13 i denne politik.
              Vi kan forlænge denne frist med op til to måneder afhængigt af anmodningens omfang
              og dens art. Om nødvendigt underretter vi dig om forlængelsen
              inden for en måned efter, at vi har modtaget anmodningen.
            </p>
            <p>
              Vi sender de ønskede oplysninger elektronisk og uden beregning, medmindre det
              strider mod loven eller bestemmelserne i afsnit 13. Vi forbeholder os retten til at
              opkræve et rimeligt gebyr eller afvise en anmodning, hvis den anses for ugrundet, overdreven eller gentagen.
            </p>
            <p>
              Vi forbeholder os retten til at anmode om yderligere identitetsverifikation, hvis der er
              rimelig tvivl om den person, der indgiver en anmodning om personoplysninger, for at
              beskytte og sikre datasikkerheden.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

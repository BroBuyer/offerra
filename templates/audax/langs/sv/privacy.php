<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Integritetspolicy | ' . SITE_NAME;
$page_description = 'Integritetspolicy för ' . SITE_NAME . '.';
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
            <h1>Integritetspolicy</h1>
            <p>
              Dina personuppgifter och dina tillgångar är av största vikt för oss. Vi är fullt
              engagerade i att skydda dem.
            </p>
            <p>
              <?= e(SITE_NAME) ?> samlar in och lagrar de uppgifter som behövs för dina transaktioner. Hur
              de samlas in och lagras beskrivs i följande integritetspolicy.
            </p>
            <p>Vår policy bygger på följande principer:</p>
            <p class="circle">
              För att säkerställa maximal transparens kring hur vi samlar in och
              lagrar dina personuppgifter:
            </p>
            <p>
              Vi vill att du ska förstå hur vi samlar in och behandlar uppgifter så att du kan fatta
              informera beslut. Vi tillämpar tydliga riktlinjer och processer för databehandling på
              denna webbplats. Policyn beskriver i detalj de metoder vi använder för att ge
              dig tydlig och konkret information om dataanvändning. Du har kontrollen.
            </p>
            <p>
              Vi meddelar dig omedelbart när vi anser det nödvändigt. Transparens är
              av grundläggande betydelse för oss.
            </p>
            <p>
              Vårt specialistteam finns alltid tillgängligt för att svara på frågor om alla aspekter
              av våra processer, inklusive skyldigheter enligt lagen <?= e(geo_in()) ?> och EU-
              regler. Du kan kontakta oss på:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Annan användning av personuppgifter från vår sida är inte tillåten, utom enligt
              integritetspolicyn.
            </p>
            <p>
              Vi kan behandla personuppgifter för följande ändamål, bland annat för att säkerställa korrekt
              drift av <?= e(SITE_NAME) ?>-tjänster och att koppla användare till tredjeparts
              handelsplattformar. Behandling kan också behövas för att underhålla och förbättra
              webbplatsens funktioner och tjänster; skydda våra rättigheter och uppfylla juridiska och andra
              skyldigheter. Slutligen används uppgifterna vid behov för administrativa
              och andra affärsfunktioner i samband med tjänsterna du som kund får.
            </p>
            <p>
              För att erbjuda tjänster av högre kvalitet anpassade efter dina preferenser och behov använder <?= e(SITE_NAME) ?>
              personuppgifter.
            </p>
            <p class="circle">
              För att använda nödvändiga verktyg för att skydda dina personuppgifter och säkra dina
              rättigheter i förhållande till dem:
            </p>
            <p>
              Du kan när som helst kontakta oss och få tillgång till alla dina uppgifter. Vi kan också
              ändra eller radera dem vid behov. Dessutom hanterar vi begäranden om att överföra dessa
              uppgifter till dig eller tredje part som du utser. Vi erbjuder denna tjänst så att du
              fullt ut kan utöva dina integritets- och kontrollrättigheter.
            </p>
            <p class="circle">Skydda dina personuppgifter:</p>
            <p>
              Våra säkerhetssystem är av hög kvalitet och omfattar åtgärder på banknivå. Även om
              absolut skydd inte kan garanteras förbinder vi oss att kontinuerligt hålla systemen
              på högsta nivå och stärka redan införda åtgärder.
            </p>
            <p>
              Vi har en omfattande integritetspolicy och säkerhetssystem i första klass.
            </p>
            <p class="bold-title">1. Tillämpningsområde</p>
            <p>
              Denna policy beskriver hur vi samlar in, behandlar och lämnar ut alla
              uppgifter om fysiska personer.
            </p>
            <p>
              Policyns bestämmelser gäller alla fysiska personer som kan identifieras eller är
              identifierade. Särskilt varje fysisk person som kan identifieras i samband med
              uppgifter som anförtros oss, som vi har tillgång till och/eller som vi kan kombinera.
            </p>
            <p>
              Databehandling i integritetspolicyns mening omfattar särskilt lagring,
              förvaltning och organisering av personuppgifter.
            </p>
            <p>
              Vi samlar inte in och försöker inte samla in information om personer under 18
              år. Personer under 18 år får heller inte använda vår plattform för något
              ändamål. Om vi upptäcker att en användare är under 18 år raderar vi uppgifterna omedelbart.
            </p>
            <p class="bold-title">2. Vilka personuppgifter samlar vi in?</p>
            <p>
              Vid registrering samlar vi in de personuppgifter som krävs för att använda tjänsterna. Vid behov
              kan vi också begära uppgifter för verifiering, till exempel för att
              bekräfta kontoinnehav. För att förbättra och upprätthålla högsta kvalitet på våra
              tjänster samlar och analyserar vi information om din användning av plattformen och
              relaterade tredjepartstjänster.
            </p>
            <p class="bold-title">
              3. Du är under inga omständigheter skyldig att lämna dina personuppgifter till företaget.
            </p>
            <p>
              Även om du inte är skyldig att lämna dina uppgifter till oss kan beslutet att inte göra det
              medföra begränsningar i tjänsterna. Det kan också leda till
              begränsningar i användningen av plattformen.
            </p>
            <p class="bold-title">
              4. Vilka personuppgifter samlar vi in? När du besöker webbplatsen kan vi samla in följande
              personuppgifter:
            </p>
            <p>
              Vi samlar inte in uppgifter som identifierar dig personligen. Vi registrerar bland annat
              kontoaktivitet, IP-adresser samt datum och tid för åtkomst. För underhåll,
              säkerhet och support lagrar vi systemfelrapporter, webbläsarinformation och vilken typ av
              enhet du loggar in från. Vi registrerar också vilket språk som är inställt på kontot.
            </p>
            <p>
              När det gäller personuppgifter samlar och lagrar vi enbart information
              som du lämnar när du ansluter till en tredjeparts handelsplattform via våra tjänster.
            </p>
            <p>
              Personuppgifter du har lämnat till tredjepartsplattformar kan omfatta:
              fullständigt namn, adress, telefonnummer och e-postadress.
            </p>
            <p class="bold-title">
              5. Varför behöver företaget mina uppgifter och är behandlingen laglig?
            </p>
            <p>
              Företaget samlar in, lagrar och behandlar dina personuppgifter enbart för
              de ändamål som anges i policyn. All nämnd användning och behandling sker i enlighet med
              tillämplig lag <?= e(geo_in()) ?> och EU-regler.
            </p>
            <p>
              Företaget kommer endast att hantera, behandla eller överföra dina uppgifter i enlighet med
              tillämpliga regler <?= e(geo_in()) ?>. Relevanta rättsliga grunder anges nedan:
            </p>
            <p class="circle">
              Du har gett samtycke till att företaget lagrar och behandlar dina personuppgifter.
              När du lämnar uppgifter till företaget ger du oss befogenhet att vidarebefordra dem till relevant
              tredjeparts handelsplattform. Dessutom har du gett samtycke till
              behandling av dina personuppgifter för ett eller flera ändamål.
            </p>
            <p class="circle">
              För att förbättra tjänster, väcka eller försvara rättsliga anspråk och skydda legitima
              intressen kan det bland annat behövas att företaget lagrar och
              behandlar dina personuppgifter.
            </p>
            <p class="circle">För att uppfylla rättsliga skyldigheter är databehandling nödvändig.</p>
            <p>
              Om du vill veta mer om den behandling företaget är skyldigt att
              utföra är du välkommen att kontakta oss via e-post.
            </p>
            <p>
              Nedan hittar du de specifika ändamålen och den rättsliga grund som ger oss
              rätt att behandla dina personuppgifter.
            </p>
            <p class="green">Ändamål</p>
            <p class="green">Rättslig grund</p>
            <p>
              1. För att underlätta din tillgång till digital handel och — enbart på din begäran —
              delar vi dina personuppgifter med tredjepartsplattformar. Dina uppgifter kan samlas in
              och delas med tredje part enbart på din begäran och efter ditt gottfinnande.
            </p>
            <p>
              Du har gett samtycke till behandling av dina personuppgifter för ett eller flera ändamål.
            </p>
            <p>
              2. Ge oss nödvändig information så att vi kan svara snabbt och
              effektivt på dina förfrågningar, frågor och funderingar om tjänsterna.
            </p>
            <p>
              För att tillvarata företagets eller en namngiven tredje parts legitima intressen
              är behandling av personuppgifter nödvändig.
            </p>
            <p>
              3. För att uppfylla våra rättsliga och administrativa skyldigheter är behandling av personuppgifter nödvändig.
            </p>
            <p>För att uppfylla våra rättsliga skyldigheter måste vi behandla vissa personuppgifter.</p>
            <p>
              4. För att förbättra tjänsterna behöver vi anonymiserade uppgifter och måste övervaka användningen,
              inklusive felrapporter.
            </p>
            <p>
              För att skydda företagets och externa tjänsteleverantörers legitima intressen
              är behandling och lagring av personuppgifter nödvändig.
            </p>
            <p>5. Detta är nödvändigt för att förebygga bedrägeri och missbruk av tjänsten.</p>
            <p>
              För att säkerställa företagets och tredjepartsleverantörers legitima intressen
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Tjänstens krav förpliktar oss att övervaka och behandla uppgifter för
              affärsutveckling, strategiska beslut, övervakning, regelefterlevnad och
              andra affärsaktiviteter.
            </p>
            <p>
              För att skydda företagets och externa tjänsteleverantörers legitima intressen
              är behandling och lagring av personuppgifter nödvändig.
            </p>
            <p>
              7. Vi använder statistiska verktyg och dataanalys för att stödja beslut inom ett brett
              spektrum av tjänster och i strategisk planering.
            </p>
            <p>
              För att skydda företagets och våra externa tjänsteleverantörers legitima intressen
              är behandling och lagring av personuppgifter nödvändig.
            </p>
            <p>
              8. I den utsträckning som behövs för att skydda företagets och tredjepartsleverantörers
              rättigheter, egendom och intressen, i enlighet med alla lokala lagar och
              tillämpliga regler, avtal och våra egna villkor, kan vi behandla
              personuppgifter. Sådan behandling sker enbart enligt nödvändiga och
              fastställda procedurer.
            </p>
            <p>
              För att skydda företagets och varje enskild extern
              tjänsteleverantörs legitima intressen är behandling och lagring av personuppgifter nödvändig.
            </p>
            <p class="bold-title">6. Delning av personuppgifter med tredje part</p>
            <p>
              För lagring och behandling av IP-adresser, för undersökningar och användaranalys
              och relaterade tjänster kan företaget dela anonymiserade uppgifter med
              externa tjänsteleverantörer.
            </p>
            <p>
              På din begäran delar vi vissa personuppgifter du har lämnat med externa
              tjänsteleverantörer. I så fall omfattas behandlingen av den aktuella
              företagets integritetspolicy. Det kan omfatta olika digitala handelsplattformar.
            </p>
            <p>
              För att förbättra kundservice och generellt optimera tjänsterna
              kan företaget dela personuppgifter med närstående bolag och affärspartners.
            </p>
            <p>
              När lagen kräver det, eller för att skydda företagets och relaterade
              tredje parts rättigheter och egendom, kan vi dela uppgifter med relevanta juridiska eller tillsynsmyndigheter.
            </p>
            <p>
              Inom ramen för kritiska affärstransaktioner, t.ex. försäljning av företaget,
              inhämtning av investering eller kreditansökan, kan relevanta uppgifter delas
              på ett lagligt och lämpligt sätt. Det gäller även fusioner, omstruktureringar,
              konsolideringar eller företagets insolvens i enlighet med lagen.
            </p>
            <p class="bold-title">7. Cookies och tjänster från tredje part</p>
            <p>
              För webbanalys och i samarbete med reklambyråer kan cookies och andra
              liknande tekniker användas i enlighet med lagen och sedvanlig praxis.
            </p>
            <p>
              Cookies — små textfiler som lagras på din enhet när du besöker en webbplats — används för att
              samla in information om ditt surfbeteende, preferenser och annan data. Deras
              syfte är att anpassa och förbättra din upplevelse. De hjälper oss att komma ihåg dina
              inställningar och preferenser och anpassa vårt erbjudande. De används också till
              webbanalys och statistik för planering.
            </p>
            <p>
              Webbplatsen använder i regel två typer av cookies: sessionscookies som lagras
              endast under webbläsarsessionen och raderas när du stänger webbläsaren;
              och permanenta cookies som finns kvar efter sessionen. De senare
              gör det möjligt för webbplatsen att känna igen dig som återkommande besökare och underlätta användningen.
            </p>
            <p class="bold-title">Cookietyper:</p>
            <p>Cookies kan användas efter behov beroende på syfte:</p>
            <p class="green">Cookietyp</p>
            <p>Dessa cookies är absolut nödvändiga</p>
            <p class="green">Ändamål</p>
            <p>
              Cookies används för att identifiera dig som kund så att vi kan leverera den information,
              de inställningar och tjänster du har begärt.
              De underlättar också navigering och åtkomst till webbplatsen.
            </p>
            <p>
              Vi använder cookies så att din enhet kan ladda ner och streama innehåll. De ger också
              tillgång till viktiga funktioner och återvändande till tidigare besökta sidor.
            </p>
            <p class="green">Ytterligare information</p>
            <p>
              För snabb och enkel åtkomst lagrar och behandlar cookies vissa
              personuppgifter, t.ex. användarnamn och senaste inloggningsdatum, om du ber webbplatsen att
              komma ihåg dig när du loggar in.
            </p>
            <p>Sessionscookies raderas när du stänger webbläsaren.</p>
            <p class="green">Cookietyp</p>
            <p>Funktionella cookies</p>
            <p class="green">Ändamål</p>
            <p>
              Med cookies kan vi säkert lagra och tillämpa dina inställningar och preferenser.
              De gör det också möjligt att känna igen dig vid nästa besök.
            </p>
            <p class="green">Ytterligare information</p>
            <p>
              Permanenta cookies finns kvar efter webbläsarsessionen och är aktiva till
              utgångsdatumet.
            </p>
            <p class="green">Cookietyp</p>
            <p>Prestandacookies</p>
            <p class="green">Ändamål</p>
            <p>
              För att förbättra tjänsterna samlar vi statistik med cookies. De
              ger oss information om webbplatsens prestanda och användning.
            </p>
            <p class="green">Ytterligare information</p>
            <p>
              All information som lagras via cookies är anonym och gör det inte möjligt att identifiera individer.
            </p>
            <p>
              Sessionscookies raderas när du stänger webbläsaren, medan permanenta
              cookies förblir aktiva till utgångsdatum eller på obestämd tid om du inte raderar dem manuellt.
            </p>
            <p>Cookies blockeras eller raderas</p>
            <p>
              Om du vill ta bort eller blockera cookies måste du göra det i
              webbläsarens inställningar. Länkarna nedan har detaljerade instruktioner för de vanligaste webbläsarna.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blockering av cookies kan göra att vissa funktioner inte fungerar som avsett.
            </p>
            <p class="bold-title">Hur länge vi sparar personuppgifter</p>
            <p>
              Personuppgifter lagras endast så länge som är absolut nödvändigt för de
              processer som anges i andra avsnitt av denna policy. Längre lagring är möjlig om
              lokala regler eller företagets interna policy kräver det.
            </p>
            <p>
              Dina personuppgifter delas på din begäran och efter ditt gottfinnande med tredjeparts
              handelsplattformar i 12 månader. När perioden löper ut och med ditt
              samtycke delas uppgifterna i ytterligare 12 månader.
            </p>
            <p>
              Våra rutiner innebär regelbunden bedömning av alla personuppgifter för att avgöra om
              de fortfarande behövs.
            </p>
            <p class="bold-title">
              9. Överföring av personuppgifter till tredjeländer eller internationella organisationer
            </p>
            <p>
              När det behövs för tjänsterna och/eller av säkerhetsskäl kan vi överföra
              personuppgifter till andra länder (utanför ditt) och till internationella organisationer
              med omfattande säkerhetsprotokoll. Vi genomför dataskyddsåtgärder på
              högsta nivå för att skydda informationen och säkerställa din tillgång till rättsmedel
              och lagstadgade rättigheter till varje tid.
            </p>
            <p>
              Inom Europeiska ekonomiska samarbetsområdet (EES) har alla invånare dataskydd och garantier.
            </p>
            <p class="circle">
              Överföringar sker alltid under EU:s jurisdiktion och tillsyn, i enlighet med
              dataskyddsstandarder och protokoll i artikel 45, stycke 3, i
              Europaparlamentets och rådets förordning (EU) 2016/679 av den 27 april 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Varje överföring av uppgifter mellan offentliga organ sker enligt artikel
              46, stycke 2. Det är ett juridiskt bindande och verkställbart avtal.
            </p>
            <p class="circle">
              Europeiska kommissionens standardavtalsklausuler enligt GDPR artikel 46, stycke 2, punkt c fastställer
              villkoren för överföring, och sådana överföringar sker i enlighet med
              dem. Du kan se bestämmelserna på
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Mer om de specifika säkerhetsåtgärder företaget har vidtagit för att
              skydda personuppgifter vid överföring till tredjeländer kan du skicka en begäran
              via e-post till <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Skydd av personuppgifter</p>
            <p>
              Personuppgifter skyddas av tekniska och organisatoriska åtgärder på högsta
              nivå i enlighet med referensprocedurer. Dessa procedurer är effektiva
              för att förhindra förstörelse av data till följd av olagliga eller oförutsedda händelser samt
              förlust eller ändring.
            </p>
            <p>
              Även om vi tillämpar största möjliga omsorg och procedurer som uppfyller de strängaste
              dataskyddsstandarderna och lagen kan det under inga omständigheter garanteras
              att personuppgifter är felfria. Därför kan vi inte ta ansvar om
              personuppgifter drabbas av oavsiktlig, immateriell eller följdskada eller utlämnande.
              Det omfattar situationer utanför vår kontroll, t.ex. utlämnande till följd av
              överföringsfel, obehörig åtkomst från tredje part eller liknande orsaker.
            </p>
            <p>
              När vi får juridiskt bindande begäranden från tillsynsmyndigheter eller andra
              offentliga organ med lagstadgade befogenheter kan vi vara skyldiga att vidarebefordra
              dina personuppgifter till dessa organ. När de har lämnats ut på grund av rättslig skyldighet har vi ingen
              kontroll över hur dessa organ behandlar, lagrar eller skyddar dina uppgifter.
            </p>
            <p>
              Allt som skickas över internet, inklusive personuppgifter, medför en viss
              risk för avlyssning och är inte 100 % säkert. Företaget kan inte garantera
              säkerheten för uppgifter som skickas online.
            </p>
            <p class="bold-title">11. Länkar till webbplatser från tredje part</p>
            <p>
              På denna webbplats finns länkar till applikationer och webbplatser från tredje part. Observera
              att de inte är kopplade till företaget och inte står under dess kontroll, och att vår
              integritetspolicy inte gäller för dem. De arbetar enligt sina egna
              rutiner och prioriteringar för insamling och behandling av personuppgifter, och därför
              tar vi inte ansvar för dessa aktiviteter. Använd dem efter eget gottfinnande.
            </p>
            <p>
              Kontrollera alltid företagets eller tjänstens integritetspolicy när du besöker deras webbplats
              innan du lämnar personuppgifter. Kontrollera om deras regler för insamling, användning och
              behandling stämmer med dina preferenser. Om du bestämmer dig för att dela uppgifter, dela dem
              direkt med tjänsteleverantören.
            </p>
            <p class="bold-title">12. Uppdateringar av policyn</p>
            <p>
              Vi förbehåller oss rätten att när som helst uppdatera eller ändra denna policy. Vi informerar dig
              om ändringar via webbplatsen och relevanta kanaler. Den uppdaterade versionen av integritets-
              policyn publiceras på webbplatsen, och den reviderade policyn träder i kraft
              omedelbart vid publicering, om inte annat anges.
            </p>
            <p class="bold-title">13. Dina rättigheter gällande personuppgifter</p>
            <p>
              Du har kontrollen och sista ordet över användningen av alla dina personuppgifter. Det
              omfattar att kontrollera riktigheten, rätta fel och rätten till radering eller
              begränsning av vår behandling — både i omfattning och art.
            </p>
            <p>På denna sida hittar EES-invånare relevant information:</p>
            <p>
              Dina personuppgifter skyddas av de rättigheter som beskrivs här. Genom att skicka e-post till
              adressen nedan kan du omedelbart utöva dessa rättigheter.
            </p>
            <p>Tillgång till dina rättigheter</p>
            <p>
              Om de personuppgifter du har lämnat är korrekta kan du när som helst få tillgång till dem. Alla
              personuppgifter vi behandlar är tillgängliga för oss och därmed kontrollerbara.
            </p>
            <p>
              Du kan när som helst begära dina personuppgifter för kontroll, och de kommer att göras
              tillgängliga i elektronisk form. Om du begär ytterligare kopior av dina
              behandlade uppgifter utöver den redan lämnade kopian kan en skälig avgift tas ut.
            </p>
            <p>
              Rättigheter enligt lag och integritetspolicy får inte påverka tredje parts
              rättigheter. Företaget förbehåller sig rätten att neka eller begränsa tillgång till personuppgifter
              om det kränker tredje parts rättigheter och friheter.
            </p>
            <p>Rätt till rättelse</p>
            <p>
              Varje fel i dina personuppgifter, vare sig det beror på utelämnande eller felaktig information,
              kan rättas av dig eller företaget så att behandlingen blir korrekt.
            </p>
            <p>Rätt till radering av uppgifter</p>
            <p>
              Du har rätt att begära radering av dina personuppgifter i följande
              fall: 1) om de behandlades utan ditt samtycke eller utanför lagens ramar; 2)
              på din begäran, om du vill att de raderas och företaget inte har rättslig skyldighet att
              behålla dem; 3) om du invänder mot behandlingen eller återkallar samtycket, även om den är
              laglig och baserad på våra eller tredje parts intressen; och 4) om lagen
              förpliktar oss att radera dem.
            </p>
            <p>
              Rätten till radering gäller inte om det finns rättsliga skyldigheter inom EU eller
              medlemsstaternas lagstiftning. Den gäller heller inte om uppgifterna behövs för att fullfölja eller
              försvara rättsliga anspråk.
            </p>
            <p>Rätt till begränsning av databehandling</p>
            <p>
              Du har rätt att begära begränsning av behandlingen av dina personuppgifter om du
              anser att de innehåller felaktigheter.
            </p>
            <p>
              Om du begär begränsning av användningen av dina personuppgifter begränsar vi behandlingen, utom i
              följande fall: 1) om tillämplig lagstiftning inom Europeiska unionen eller en av dess
              medlemsstater förhindrar det; 2) med ditt samtycke, om det behövs för att försvara eller fullfölja
              rättsliga anspråk; 3) för att skydda en annan fysisk persons rättigheter.
            </p>
            <p>Rätt till dataportabilitet</p>
            <p>
              Du har rätt att få tillgång till och kontrollera personuppgifter du har lämnat, i den
              utsträckning du har gett samtycke till insamlingen och om behandlingen
              sker i automatiserade system.
            </p>
            <p>
              Du har rätt att begära överföring av alla dina personuppgifter till ett annat företag eller
              organisation, i den utsträckning det är tekniskt möjligt. Denna rätt påverkar inte din
              rätt till radering. Den gäller inte om utövandet kränker
              en annan fysisk persons rättigheter eller friheter.
            </p>
            <p>Rätt att invända mot databehandling</p>
            <p>
              Utan att det påverkar företagets rätt att tillvarata våra legitima intressen eller
              en tredje part som agerar som tjänsteleverantör har du rätt att invända mot
              behandlingen och begära att den upphör. Denna rätt gäller inte om det finns ett brådskande
              rättsligt behov av att fortsätta behandlingen — antingen för att försvara sig mot anspråk eller för att fullfölja
              rättsliga anspråk. I sådana fall kan vi fortsätta behandla dina uppgifter.
            </p>
            <p>
              Du kan när som helst invända mot behandling av dina personuppgifter för direktmarknadsföring.
            </p>
            <p>
              Rätt att återkalla samtycke
            </p>
            <p>
              Du kan när som helst återkalla ditt samtycke till behandling av personuppgifter
              med omedelbar verkan. Återkallelsen har ingen retroaktiv effekt på behandling som
              skett före återkallelsen.
            </p>
            <p>
              Om du av någon anledning är missnöjd har du rätt att lämna klagomål till en
              juridisk, tillsyns- eller annan kontrollmyndighet.
            </p>
            <p>
              Om du anser att dina rättigheter och friheter i samband med behandlingen av dina personuppgifter
              har kränkts har EU:s medlemsstater tillsyns- och kontroll-
              myndigheter för detta ändamål. Du kan lämna klagomål till dessa organ om du anser det lämpligt.
            </p>
            <p>
              Avsnitt 13 beskriver situationer där dina rättigheter gällande personuppgifter kan
              begränsas av Europeiska unionens eller medlemsstaternas lagar.
            </p>
            <p>
              När vi tar emot din begäran om personuppgifter och behandlingen av dem ger vi
              dig tillgång till den begärda informationen enligt avsnitt 13 i denna policy.
              Vi kan förlänga denna period med upp till två månader beroende på begäranens omfattning
              och art. Vid behov meddelar vi dig om förlängningen
              inom en månad efter att vi mottagit begäran.
            </p>
            <p>
              Vi skickar den begärda informationen elektroniskt och utan kostnad, om inte
              det strider mot lagen eller bestämmelserna i avsnitt 13. Vi förbehåller oss rätten att
              ta ut en skälig avgift eller avslå en begäran om den anses ogrundad, överdriven eller upprepad.
            </p>
            <p>
              Vi förbehåller oss rätten att begära ytterligare identitetsverifiering om det finns
              rimlig misstanke om personen som lämnar en begäran om personuppgifter, för att
              skydda och säkerställa datasäkerheten.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

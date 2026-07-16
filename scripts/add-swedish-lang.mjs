import fs from 'node:fs';
import path from 'node:path';
import https from 'node:https';

const repo = path.resolve('.');

function copyDir(src, dest) {
    fs.cpSync(src, dest, { recursive: true });
}

function walkFiles(dir, ext) {
    const files = [];
    for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
        const full = path.join(dir, entry.name);
        if (entry.isDirectory()) {
            files.push(...walkFiles(full, ext));
        } else if (entry.name.endsWith(ext)) {
            files.push(full);
        }
    }
    return files;
}

// Norwegian → Swedish (longer phrases first).
const translations = [
    ["define('SITE_LANG', 'no')", "define('SITE_LANG', 'sv')"],
    ["define('ACTIVE_LANG', 'no')", "define('ACTIVE_LANG', 'sv')"],
    ["name=\"language\" value=\"no\"", 'name="language" value="sv"'],
    ['no-NO', 'sv-SE'],
    ['Norsk', 'Svenska'],

    ['AI-handelsplattform', 'AI-handelsplattform'],
    ['Handle krypto, forex og globale markeder med', 'Handla krypto, forex och globala marknader med'],
    ['Sanntidsanalyse, AI-støttede signaler og en plattform bygget for hastighet og oversikt.', 'Realtidsanalys, AI-stödda signaler och en plattform byggd för hastighet och översikt.'],
    ['Handle smartere.', 'Handla smartare.'],
    ['Reager raskere.', 'Reagera snabbare.'],
    ['Den nye standarden for krypto og handel på flere markeder.', 'Den nya standarden för krypto och handel på flera marknader.'],
    ['Avansert sikkerhet, transparente gebyrer,', 'Avancerad säkerhet, transparenta avgifter,'],
    ['AI-drevne innsikter og et grensesnitt som følger tempoet ditt.', 'AI-drivna insikter och ett gränssnitt som följer ditt tempo.'],
    ['SSL-sikret', 'SSL-säkrat'],
    ['24/7-støtte', '24/7-support'],
    ['Rask utførelse', 'Snabb utförande'],
    ['Start å handle', 'Börja handla'],
    ['Åpne og konto på 2 minutter', 'Öppna ditt konto på 2 minuter'],
    ['Åpne konto på 2 minutter', 'Öppna konto på 2 minuter'],
    ['Plattformstatistikk', 'Plattformsstatistik'],
    ['Tilgjengelige valutaer', 'Tillgängliga valutor'],
    ['Verifiserte brukere', 'Verifierade användare'],
    ['Handelsvolum', 'Handelsvolym'],
    ['Støttede land', 'Stödda länder'],
    ['Oversikt handelsplattform', 'Översikt handelsplattform'],
    ['Handelsplattform', 'Handelsplattform'],
    ['Profesjonelle diagrammer.', 'Professionella diagram.'],
    ['Klar for mobil.', 'Redo för mobil.'],
    ['Et rent grensesnitt inspirert av moderne børser – sanntids BTC/USDT-data, porteføljeoversikt', 'Ett rent gränssnitt inspirerat av moderna börser – realtids BTC/USDT-data, portföljöversikt'],
    ['og handel med ett klikk. Designet for å gi deg trygghet fra første innlogging.', 'och handel med ett klick. Designat för att ge dig trygghet från första inloggningen.'],
    ['Sanntids lysestakediagrammer', 'Realtids ljusstakediagram'],
    ['Portefølje og P/L med et blikk', 'Portfölj och P/L med en blick'],
    ['Sikker kontodashboard', 'Säker kontodashboard'],
    ['Prøv plattformen', 'Prova plattformen'],
    ['Hvorfor', 'Varför'],
    ['Alt du trenger for å handle med trygghet', 'Allt du behöver för att handla med trygghet'],
    ['Sikkerhet, hastighet og intelligens – samlet i en tydelig plattform for moderne tradere.', 'Säkerhet, hastighet och intelligens – samlat i en tydlig plattform för moderna traders.'],
    ['Banksikkerhet', 'Banksäkerhet'],
    ['SSL-kryptering, 2FA og sikker fondsforvaltning beskytter dataene og kapitalen din i alle steg.', 'SSL-kryptering, 2FA och säker fondförvaltning skyddar dina data och ditt kapital i varje steg.'],
    ['AI-markedssignaler', 'AI-marknadssignaler'],
    ['Presise sanntidsinnsikter hjelper deg å se muligheter og ta raskere, mer informerte beslutninger.', 'Precisa realtidsinsikter hjälper dig att se möjligheter och fatta snabbare, mer informerade beslut.'],
    ['Automatisert trading', 'Automatiserad trading'],
    ['AI-assisterte boter jobber 24/7 for effektiv strategieksekvering – mens du beholder full kontroll.', 'AI-assisterade bots arbetar 24/7 för effektiv strategiexekvering – medan du behåller full kontroll.'],
    ['Tilgang til flere markeder', 'Tillgång till flera marknader'],
    ['Handle krypto, forex, aksjer og råvarer i ett samlet miljø.', 'Handla krypto, forex, aktier och råvaror i en samlad miljö.'],
    ['Lav latens-utførelse', 'Låg latens-utförande'],
    ['Optimalisert infrastruktur for stabil ordreutførelse, også i perioder med høy markedsvolatilitet.', 'Optimerad infrastruktur för stabil orderutförande, även i perioder med hög marknadsvolatilitet.'],
    ['Rent grensesnitt', 'Rent gränssnitt'],
    ['Minimalistisk design som reduserer støy, slik at du kan fokusere på strategi – ikke navigasjon.', 'Minimalistisk design som minskar brus, så att du kan fokusera på strategi – inte navigering.'],
    ['Markeder i sanntid', 'Marknader i realtid'],
    ['Handle Bitcoin, Ethereum og mer', 'Handla Bitcoin, Ethereum och mer'],
    ['Livepriser, avanserte indikatorer og en profesjonell oversikt over markedene du bryr deg om.', 'Livepriser, avancerade indikatorer och en professionell översikt över marknaderna du bryr dig om.'],
    ['Gå til markedene', 'Gå till marknaderna'],
    ['Live markedspriser', 'Live marknadspriser'],
    ['Hvordan komme i gang', 'Hur du kommer igång'],
    ['Fra registrering til første trade på få minutter', 'Från registrering till första trade på några minuter'],
    ['En tydelig vei – uten unødvendig kompleksitet eller usikkerhet.', 'En tydlig väg – utan onödig komplexitet eller osäkerhet.'],
    ['Opprett kontoen din', 'Skapa ditt konto'],
    ['Registrer deg med dine opplysninger og få umiddelbar, sikker tilgang til plattformen.', 'Registrera dig med dina uppgifter och få omedelbar, säker tillgång till plattformen.'],
    ['Bekreft e-posten', 'Bekräfta e-posten'],
    ['Bekreft adressen din og lås opp hele tradingopplevelsen.', 'Bekräfta din adress och lås upp hela tradingupplevelsen.'],
    ['Sett inn midler', 'Sätt in medel'],
    ['Sett inn minst', 'Sätt in minst'],
    ['via bankoverføring, kort eller e-plånbok.', 'via banköverföring, kort eller e-plånbok.'],
    ['Sett strategien', 'Sätt strategin'],
    ['Velg risikonivå og preferanser – manuelt eller med AI-assistert automatisering.', 'Välj risknivå och preferenser – manuellt eller med AI-assisterad automatisering.'],
    ['Start å handle', 'Börja handla'],
    ['Gå inn i markedet med livediagrammer, profesjonelle verktøy og støtte alltid tilgjengelig.', 'Gå in på marknaden med livediagram, professionella verktyg och support alltid tillgänglig.'],
    ['Åpne kontoen din nå', 'Öppna ditt konto nu'],
    ['Innskudd', 'Insättning'],
    ['Sett inn med metoder du allerede bruker', 'Sätt in med metoder du redan använder'],
    ['Kort, e-lommebøker og bankoverføringer – beskyttet med SSL-kryptering.', 'Kort, e-plånböcker och banköverföringar – skyddade med SSL-kryptering.'],
    ['innskudd og kontofinansiering', 'insättning och kontofinansiering'],
    ['Pålitelig infrastruktur', 'Pålitlig infrastruktur'],
    ['Bygget med ledende bransjepartnere', 'Byggd med ledande branschpartners'],
    ['Anmeldelser', 'Recensioner'],
    ['Hva traderne sier', 'Vad traders säger'],
    ['Uavhengig trader', 'Oberoende trader'],
    ['Kryptointusiast', 'Kryptoentusiast'],
    ['Digital aktør', 'Digital aktör'],
    ['Privat investor', 'Privat investerare'],
    ['Ofte stilte spørsmål', 'Vanliga frågor'],
    ['Hvordan kan jeg komme i gang?', 'Hur kan jag komma igång?'],
    ['Opprett en konto med grunnleggende opplysninger, fullfør en kort verifisering og sett inn minst', 'Skapa ett konto med grundläggande uppgifter, slutför en kort verifiering och sätt in minst'],
    ['Du får full tilgang til plattformen – inkludert livediagrammer og tradingverktøy.', 'Du får full tillgång till plattformen – inklusive livediagram och tradingverktyg.'],
    ['Er pengene og dataene mine trygge?', 'Är mina pengar och data säkra?'],
    ['Vi bruker SSL-kryptering, tofaktorautentisering og sikker behandling via pålitelige leverandører.', 'Vi använder SSL-kryptering, tvåfaktorsautentisering och säker behandling via pålitliga leverantörer.'],
    ['Personopplysningene dine behandles etter strenge sikkerhetsregler på alle nivåer.', 'Dina personuppgifter behandlas enligt strikta säkerhetsregler på alla nivåer.'],
    ['Når kan jeg ta ut gevinsten?', 'När kan jag ta ut vinsten?'],
    ['Du kan be om uttak når som helst fra dashbordet.', 'Du kan begära uttag när som helst från dashboarden.'],
    ['Behandlingen tar vanligvis 1–3 virkedager.', 'Behandlingen tar vanligtvis 1–3 arbetsdagar.'],
    ['Gebyrer og tidsfrister vises alltid på forhånd – uten overraskelser.', 'Avgifter och tidsfrister visas alltid i förväg – utan överraskningar.'],
    ['Trenger jeg tradingerfaring?', 'Behöver jag tradingerfarenhet?'],
    ['Ikke i det hele tatt.', 'Inte alls.'],
    ['Veiledet onboarding, enkle guider og AI-støttede verktøy hjelper deg å lære i ditt tempo.', 'Vägledd onboarding, enkla guider och AI-stödda verktyg hjälper dig att lära i din egen takt.'],
    ['Enten du er nybegynner eller erfaren trader, er støtten tilgjengelig 24/7.', 'Oavsett om du är nybörjare eller erfaren trader är supporten tillgänglig 24/7.'],
    ['Hvilke markeder kan jeg handle?', 'Vilka marknader kan jag handla?'],
    ['Få tilgang til kryptovaluta, forex, globale aksjer og råvarer i ett grensesnitt.', 'Få tillgång till kryptovaluta, forex, globala aktier och råvaror i ett gränssnitt.'],
    ['Sanntidsdata, innebygd analyse og støtte for både manuelle og automatiserte strategier.', 'Realtidsdata, inbyggd analys och stöd för både manuella och automatiserade strategier.'],
    ['Nøkkelfunksjoner med et blikk', 'Nyckelfunktioner med en blick'],
    ['AI-tradingmotor', 'AI-tradingmotor'],
    ['Avansert markedsanalyse med maskinlæring', 'Avancerad marknadsanalys med maskininlärning'],
    ['Finansieringsmetoder', 'Finansieringsmetoder'],
    ['Betalingskort, bankoverføringer, PayPal, e-lommebøker', 'Betalkort, banköverföringar, PayPal, e-plånböcker'],
    ['Enhetstilgang', 'Enhetsåtkomst'],
    ['Web, nettbrett og mobil – fullt responsivt', 'Webb, surfplatta och mobil – helt responsivt'],
    ['Signalnøyaktighet', 'Signalnoggrannhet'],
    ['Opptil 85 % for støttede AI-strategier', 'Upp till 85 % för stödda AI-strategier'],
    ['Krypto, forex, aksjer, råvarer', 'Krypto, forex, aktier, råvaror'],
    ['Rask kontooppsett med veiledet verifisering', 'Snabb kontoinställning med vägledd verifiering'],
    ['Profesjonell støtte 24/7', 'Professionell support 24/7'],
    ['Kontakt oss', 'Kontakta oss'],
    ['Vurdering', 'Betyg'],
    ['anmeldelser', 'recensioner'],
    ['Basert på', 'Baserat på'],
    ['vurderinger', 'betyg'],
    ['Klar til å handle på en plattform bygget for klarhet?', 'Redo att handla på en plattform byggd för tydlighet?'],
    ['Bli med private tradere og bedrifter som kjøper, selger og forvalter digitale aktiva med tillit.', 'Gå med privata traders och företag som köper, säljer och förvaltar digitala tillgångar med förtroende.'],
    ['Åpne kontoen din på 2 minutter', 'Öppna ditt konto på 2 minuter'],
    ['Du er allerede registrert', 'Du är redan registrerad'],
    ['Vi har mottatt forespørselen din hos', 'Vi har mottagit din förfrågan hos'],
    ['Du vil snart bli oppringt av en av våre spesialister.', 'Du kommer snart att bli uppringd av en av våra specialister.'],
    ['Fornavn', 'Förnamn'],
    ['Etternavn', 'Efternamn'],
    ['E-post', 'E-post'],
    ['Telefon', 'Telefon'],
    ['Opprett gratis konto', 'Skapa gratis konto'],
    ['kontoregistrering', 'kontoregistrering'],
    ['Ved å sende inn opplysningene dine godtar du vår', 'Genom att skicka in dina uppgifter godkänner du vår'],
    ['Personvernerklæring', 'Integritetspolicy'],
    ['Vilkår for bruk', 'Användarvillkor'],
    ['Hovednavigasjon', 'Huvudnavigering'],
    ['Hjem', 'Hem'],
    ['Produkt', 'Produkt'],
    ['Tilbud', 'Erbjudande'],
    ['Kontakt', 'Kontakt'],
    ['FAQ', 'FAQ'],
    ['Kom i gang', 'Kom igång'],
    ['Åpne meny', 'Öppna meny'],
    ['Mobilnavigasjon', 'Mobilnavigering'],
    ['Takk', 'Tack'],
    ['Forespørselen din er mottatt', 'Din förfrågan har mottagits'],
    ['Skriv inn et gyldig telefonnummer', 'Ange ett giltigt telefonnummer'],
    ['Ugyldig landskode', 'Ogiltig landskod'],
    ['Telefonnummeret er for kort', 'Telefonnumret är för kort'],
    ['Telefonnummeret er for langt', 'Telefonnumret är för långt'],
    ['Skriv inn telefonnummeret ditt', 'Ange ditt telefonnummer'],
    ['Markeder', 'Marknader'],
    ['Innskudd', 'Insättningar'],
    ['Live', 'Live'],
    ['Skriv inn opplysningene dine nedenfor', 'Ange dina uppgifter nedan'],
    ['Åpne tradingkontoen din', 'Öppna ditt tradingkonto'],
    ['Bli med tusenvis av tradere. Minste innskudd', 'Gå med tusentals traders. Minsta insättning'],
    ['Opprett kontoen din på ', 'Skapa ditt konto på '],
    [' og start å handle krypto, forex og globale markeder med AI-assisterte verktøy.', ' och börja handla krypto, forex och globala marknader med AI-assisterade verktyg.'],
    ['Oppdag tradingverktøyene til ', 'Upptäck tradingverktygen hos '],
    [' – sanntidsanalyse, AI-signaler, tilgang til flere markeder og automatiserte strategier.', ' – realtidsanalys, AI-signaler, tillgång till flera marknader och automatiserade strategier.'],
    ['Digital analyse laget for tradere', 'Digital analys skapad för traders'],
    ['Én plattform. Alle markeder. Verktøy som følger tempoet ditt.', 'En plattform. Alla marknader. Verktyg som följer ditt tempo.'],
    ['AI-signalmotor', 'AI-signalmotor'],
    ['Maskinlæringsmodeller fremhever setup med høy sannsynlighet – med tydelig kontekst for inngang og utgang.', 'Maskininlärningsmodeller lyfter fram setup med hög sannolikhet – med tydlig kontext för ingång och utgång.'],
    ['Konfigurer boter med tilpasset risikostyring: overvåk og optimaliser, eller handle manuelt parallelt.', 'Konfigurera bots med anpassad riskhantering: övervaka och optimera, eller handla manuellt parallellt.'],
    ['Stop-loss, take-profit og posisjonsstørrelse er innebygd i hver arbeidsflyt.', 'Stop-loss, take-profit och positionsstorlek är inbyggda i varje arbetsflöde.'],
    ['Praktiske guider og markedforklaringer for nybegynnere og mellomnivå.', 'Praktiska guider och marknadsförklaringar för nybörjare och mellannivå.'],
    ['Velg tilbudet fra ', 'Välj erbjudandet från '],
    [' – start med et minsteinnskudd på ', ' – börja med en minsta insättning på '],
    [' og lås opp full plattformtilgang.', ' och lås upp full plattformsåtkomst.'],
    ['Få gratis porteføljeforvaltning ved registrering', 'Få gratis portföljförvaltning vid registrering'],
    ['Start fra ', 'Börja från '],
    ['. Når du er klar, kan du vokse videre.', '. När du är redo kan du växa vidare.'],
    ['minste innskudd', 'minsta insättning'],
    ['Full plattform', 'Full plattform'],
    ['AI-signaler', 'AI-signaler'],
    ['Vi har mottatt kontoforespørselen din hos ', 'Vi har mottagit din kontoförfrågan hos '],
    ['Takk for at du registrerte deg hos ', 'Tack för att du registrerade dig hos '],
    ['Teamet vårt kontakter deg snart for å fullføre kontooppsettet. Ha telefonen i nærheten.', 'Vårt team kontaktar dig snart för att slutföra kontoinställningen. Ha telefonen nära till hands.'],
    ['Registreringen tok noen minutter, kostnadene er transparente og supporten svarer faktisk. En jevn og pålitelig opplevelse jeg fortsetter å stole på.', 'Registreringen tog några minuter, kostnaderna är transparenta och supporten svarar faktiskt. En smidig och pålitlig upplevelse jag fortsätter att lita på.'],
    ['Her begynte jeg endelig å trade krypto uten angrer. Raskt oppsett og alt forklart tydelig. Et utmerket valg, spesielt for å komme godt i gang.', 'Här började jag äntligen tradea krypto utan ånger. Snabb installation och allt förklarat tydligt. Ett utmärkt val, särskilt för en bra start.'],
    ['Stabilt og pålitelig. Enkel kontoåpning, tydelige vilkår og et team som kan faget. En overraskende behagelig tradingopplevelse.', 'Stabilt och pålitligt. Enkel kontoöppning, tydliga villkor och ett team som kan ämnet. En överraskande behaglig tradingupplevelse.'],
    ['Trading føles ikke lenger så komplisert. Enkel registrering, tydelige kostnader og støtte når det trengs. For nybegynnere gjør det virkelig en forskjell.', 'Trading känns inte längre så komplicerat. Enkel registrering, tydliga kostnader och support när det behövs. För nybörjare gör det verkligen skillnad.'],
    ['Er midlene og dataene mine trygge?', 'Är mina medel och data säkra?'],
    ['Behandlingen tar vanligvis 1–3 virkedager. Kostnader og tidsfrister oppgis alltid på forhånd, uten overraskelser.', 'Behandlingen tar vanligtvis 1–3 arbetsdagar. Kostnader och tidsfrister anges alltid i förväg, utan överraskningar.'],
    ['Absolutt ikke. Veiledet onboarding, intuitive guider og AI-støttede verktøy hjelper deg å vokse i ditt tempo. Og uansett erfaringsnivå er støtten tilgjengelig 24/7.', 'Absolut inte. Vägledd onboarding, intuitiva guider och AI-stödda verktyg hjälper dig att växa i din egen takt. Och oavsett erfarenhetsnivå är supporten tillgänglig 24/7.'],
    ['Plattform', 'Plattform'],
    ['Klar til å trade på en plattform laget for maksimal klarhet?', 'Redo att tradea på en plattform skapad för maximal tydlighet?'],
    ['Tilkoblingsfeil. Kontroller internettforbindelsen og prøv igjen.', 'Anslutningsfel. Kontrollera internetanslutningen och försök igen.'],
    ['Noe gikk galt. Prøv igjen senere.', 'Något gick fel. Försök igen senare.'],
    ['Svar om trading, funksjoner, sikkerhet, kostnader og hvordan du starter med ', 'Svar om trading, funktioner, säkerhet, kostnader och hur du startar med '],
    ['Alt du trenger å vite før du starter.', 'Allt du behöver veta innan du startar.'],
    ['Vi bruker SSL-kryptering, tofaktorautentisering og verifiserte betalingsleverandører. Sikkerhet er innebygd på alle nivåer i plattformen.', 'Vi använder SSL-kryptering, tvåfaktorsautentisering och verifierade betalningsleverantörer. Säkerhet är inbyggd på alla nivåer i plattformen.'],
    ['Hva koster det?', 'Vad kostar det?'],
    ['Kostnadene er transparente og vises før du bekrefter hver transaksjon. Ingen skjulte gebyrer på innskudd eller uttak.', 'Kostnaderna är transparenta och visas innan du bekräftar varje transaktion. Inga dolda avgifter på insättningar eller uttag.'],
    ['Kan jeg bruke automatisert trading?', 'Kan jag använda automatiserad trading?'],
    ['Ja. Sett opp AI-assisterte boter etter risikoprofilen din, eller handle manuelt – du kan bytte modus når som helst.', 'Ja. Sätt upp AI-assisterade bots efter din riskprofil, eller handla manuellt – du kan byta läge när som helst.'],
    ['Du kan be om uttak fra dashbordet. Behandlingen tar vanligvis 1–3 virkedager, avhengig av valgt metode.', 'Du kan begära uttag från dashboarden. Behandlingen tar vanligtvis 1–3 arbetsdagar, beroende på vald metod.'],
    ['Kontakt support', 'Kontakta support'],
    ['Vi er her for å hjelpe', 'Vi är här för att hjälpa'],
    ['Profesjonell støtte 24/7 for spørsmål om konto, trading og tekniske forhold.', 'Professionell support 24/7 för frågor om konto, trading och tekniska förhållanden.'],
    ['Vi svarer på de fleste henvendelser innen noen timer. Hastende tradingrelaterte saker prioriteres.', 'Vi svarar på de flesta förfrågningar inom några timmar. Brådskande tradingrelaterade ärenden prioriteras.'],
    ['Åpne kontoen din på få minutter – uten telefonanrop.', 'Öppna ditt konto på några minuter – utan telefonsamtal.'],
    ['Se bruksvilkårene for tradingplattformen og nettstedet ', 'Se användarvillkoren för tradingplattformen och webbplatsen '],
    ['Du må være minst 18 år og lovlig autorisert til å handle finansielle instrumenter i din jurisdiksjon.', 'Du måste vara minst 18 år och lagligt behörig att handla finansiella instrument i din jurisdiktion.'],
    ['Trading av kryptovaluta, forex, CFD-er og andre finansielle instrumenter innebærer betydelig taprisiko. Tidligere resultater garanterer ikke fremtidige. Handle kun med kapital du har råd til å tape.', 'Trading av kryptovaluta, forex, CFD:er och andra finansiella instrument innebär betydande förlustrisk. Tidigare resultat garanterar inte framtida. Handla endast med kapital du har råd att förlora.'],
    ['Du er ansvarlig for konfidensialiteten til påloggingsopplysningene dine og all aktivitet via kontoen din.', 'Du är ansvarig för konfidentialiteten i dina inloggningsuppgifter och all aktivitet via ditt konto.'],
    ['er ikke ansvarlig for tradingtap eller skader som følge av bruk av informasjon på dette nettstedet. Søk om nødvendig uavhengig finansiell rådgivning.', 'är inte ansvarig för tradingförluster eller skador till följd av användning av information på denna webbplats. Sök vid behov oberoende finansiell rådgivning.'],
    ['Personvern', 'Integritet'],
    ['er ikke ansvarlig for tap eller skader som følge av bruk av informasjon på dette nettstedet.', 'är inte ansvarig för förluster eller skador till följd av användning av information på denna webbplats.'],
    ['Trading på finansmarkeder innebærer risiko. Invester kun midler du har råd til å tape. Forex, CFD-er og kryptovaluta', 'Trading på finansmarknader innebär risk. Investera endast medel du har råd att förlora. Forex, CFD:er och kryptovaluta'],
    ['passer kanskje ikke for alle investorer. Vurder råd fra en kvalifisert profesjonell før du handler.', 'passar kanske inte för alla investerare. Överväg råd från en kvalificerad professionell innan du handlar.'],
    ['Godkjente betalingsmetoder for ', 'Godkända betalningsmetoder för '],
    ['Partner for etterlevelse og finansiell sikkerhet', 'Partner för efterlevnad och finansiell säkerhet'],
    ['AI-assistert for kryptovaluta, forex og globale markeder.', 'AI-assisterad för kryptovaluta, forex och globala marknader.'],
    ['intelligent med sanntids markedsanalyse og AI-assisterte signaler.', 'intelligent med realtids marknadsanalys och AI-assisterade signaler.'],
    ['Hvordan starte å trade med ', 'Hur du börjar tradea med '],
    ['Registrer deg med grunnleggende opplysninger og få sikker tilgang til plattformen.', 'Registrera dig med grundläggande uppgifter och få säker tillgång till plattformen.'],
    ['Bekreft e-posten din', 'Bekräfta din e-post'],
    ['Bekreft e-posten og lås opp full plattformtilgang.', 'Bekräfta e-posten och lås upp full plattformsåtkomst.'],
    ['Gå inn i markedet med tillit takket være sanntidsdata og AI-innsikt.', 'Gå in på marknaden med förtroende tack vare realtidsdata och AI-insikter.'],
    [' mobil tradinggrensesnitt med live BTC/USDT-diagram og porteføljeverktøy', ' mobil tradinggränssnitt med live BTC/USDT-diagram och portföljverktyg'],
    ['Denne personvernerklæringen beskriver hvordan ', 'Denna integritetspolicy beskriver hur '],
    [' ("vi") samler inn og behandler personopplysninger når du bruker nettstedet og tjenestene våre.', ' ("vi") samlar in och behandlar personuppgifter när du använder vår webbplats och våra tjänster.'],
    ['For å opprette og administrere kontoen din', 'För att skapa och administrera ditt konto'],
    ['Vi anvender tekniske og organisatoriske tiltak, inkludert SSL-kryptering og tilgangskontroll, for å beskytte dataene dine.', 'Vi tillämpar tekniska och organisatoriska åtgärder, inklusive SSL-kryptering och åtkomstkontroll, för att skydda dina data.'],
    ['Beroende på din jurisdiktion kan du ha rett til innsyn, retting eller sletting av personopplysninger. For å utøve disse rettighetene, kontakt ', 'Beroende på din jurisdiktion kan du ha rätt till tillgång, rättelse eller radering av personuppgifter. För att utöva dessa rättigheter, kontakta '],
    ['Sessionen har gått ut. Ladda om sidan och försök igen.', 'Sessionen har gått ut. Ladda om sidan och försök igen.'],
    ['Session expired. Please reload the page and try again.', 'Sessionen har gått ut. Ladda om sidan och försök igen.'],
    // leftovers often left in EN inside no templates
    ['Create free account', 'Skapa gratis konto'],
    ['First name', 'Förnamn'],
    ['Last name', 'Efternamn'],
    ['Email', 'E-post'],
    ['Phone', 'Telefon'],
    ["You're already registered", 'Du är redan registrerad'],
    ['Your request with', 'Din förfrågan hos'],
    ['has been received. Please wait for a call from our manager.', 'har mottagits. Vänta på ett samtal från vår manager.'],
    ['By submitting your details you agree to our', 'Genom att skicka in dina uppgifter godkänner du vår'],
    ['Privacy Policy', 'Integritetspolicy'],
    ['Terms of Use', 'Användarvillkor'],
];

function translateContent(content) {
    let out = content;
    for (const [from, to] of translations) {
        out = out.split(from).join(to);
    }
    return out;
}

function setupMultilangSv(svDir) {
    const includes = path.join(svDir, 'includes');
    fs.writeFileSync(
        path.join(includes, 'config.php'),
        "<?php\n\ndefine('ACTIVE_LANG', 'sv');\nrequire_once __DIR__ . '/../../../includes/config.php';\n",
    );
    fs.writeFileSync(
        path.join(includes, 'header.php'),
        "<?php\n\nrequire_once __DIR__ . '/../../../includes/header.php';\n",
    );

    const formPath = path.join(includes, 'form.php');
    if (fs.existsSync(formPath)) {
        let form = fs.readFileSync(formPath, 'utf8');
        form = form.replace(/name="language" value="[^"]*"/, 'name="language" value="sv"');
        fs.writeFileSync(formPath, form);
    }
}

for (const template of ['default', 'multilang']) {
    const noDir = path.join(repo, 'templates', template, 'langs', 'no');
    const svDir = path.join(repo, 'templates', template, 'langs', 'sv');

    if (!fs.existsSync(noDir)) {
        console.warn('Skip missing', noDir);
        continue;
    }

    if (fs.existsSync(svDir)) {
        fs.rmSync(svDir, { recursive: true, force: true });
    }

    copyDir(noDir, svDir);
    console.log('Copied', template, 'no -> sv');

    if (template === 'multilang') {
        setupMultilangSv(svDir);
    } else {
        const configPath = path.join(svDir, 'includes', 'config.php');
        if (fs.existsSync(configPath)) {
            let config = fs.readFileSync(configPath, 'utf8');
            config = config.replace(/define\('SITE_LANG', 'no'\)/, "define('SITE_LANG', 'sv')");
            // default no config may already be other lang from template sample
            config = config.replace(/define\('SITE_LANG', '[^']+'\)/, "define('SITE_LANG', 'sv')");
            fs.writeFileSync(configPath, config);
        }
    }

    for (const file of [...walkFiles(svDir, '.php'), ...walkFiles(svDir, '.js')]) {
        const original = fs.readFileSync(file, 'utf8');
        const translated = translateContent(original);
        if (translated !== original) {
            fs.writeFileSync(file, translated);
        }
    }
}

const flagDir = path.join(repo, 'templates/multilang/static/img/flags');
fs.mkdirSync(flagDir, { recursive: true });
const flagDest = path.join(flagDir, 'se.png');

await new Promise((resolve, reject) => {
    const file = fs.createWriteStream(flagDest);
    https
        .get('https://flagcdn.com/24x18/se.png', (res) => {
            if (res.statusCode && res.statusCode >= 400) {
                reject(new Error(`HTTP ${res.statusCode}`));
                res.resume();
                return;
            }
            res.pipe(file);
            file.on('finish', () => file.close(resolve));
        })
        .on('error', reject);
});

// Also place in default static if present
const defaultFlagDir = path.join(repo, 'templates/default/static/img/flags');
if (fs.existsSync(path.dirname(defaultFlagDir))) {
    fs.mkdirSync(defaultFlagDir, { recursive: true });
    fs.copyFileSync(flagDest, path.join(defaultFlagDir, 'se.png'));
}

console.log('Downloaded se.png flag');
console.log('Done.');

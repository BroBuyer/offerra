import fs from 'node:fs';
import path from 'node:path';
import https from 'node:https';

const repo = path.resolve('.');

function copyDir(src, dest) {
    fs.cpSync(src, dest, { recursive: true });
}

function walkPhpFiles(dir) {
    const files = [];
    for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
        const full = path.join(dir, entry.name);
        if (entry.isDirectory()) {
            files.push(...walkPhpFiles(full));
        } else if (entry.name.endsWith('.php') || entry.name.endsWith('.js')) {
            files.push(full);
        }
    }
    return files;
}

// Norwegian → Danish (longer phrases first).
const translations = [
    ["define('SITE_LANG', 'no')", "define('SITE_LANG', 'da')"],
    ['AI-handelsplattform', 'AI-handelsplatform'],
    ['Handle smartere.', 'Handl smartere.'],
    ['Reager raskere.', 'Reager hurtigere.'],
    ['Den nye standarden for krypto og handel på flere markeder.', 'Den nye standard for krypto og handel på tværs af markeder.'],
    ['Avansert sikkerhet, transparente gebyrer,', 'Avanceret sikkerhed, gennemsigtige gebyrer,'],
    ['AI-drevne innsikter og et grensesnitt som følger tempoet ditt.', 'AI-drevne indsigter og en grænseflade, der følger dit tempo.'],
    ['SSL-sikret', 'SSL-sikret'],
    ['24/7-støtte', '24/7-support'],
    ['Rask utførelse', 'Hurtig udførelse'],
    ['Start å handle', 'Begynd at handle'],
    ['Åpne og konto på 2 minutter', 'Åbn en konto på 2 minutter'],
    ['Plattformstatistikk', 'Platformstatistik'],
    ['Tilgjengelige valutaer', 'Tilgængelige valutaer'],
    ['Verifiserte brukere', 'Verificerede brugere'],
    ['Handelsvolum', 'Handelsvolumen'],
    ['Støttede land', 'Understøttede land'],
    ['Oversikt handelsplattform', 'Overblik handelsplatform'],
    ['Handelsplattform', 'Handelsplatform'],
    ['Profesjonelle diagrammer.', 'Professionelle diagrammer.'],
    ['Optimalisert for mobil.', 'Optimeret til mobil.'],
    ['Et tydelig grensesnitt inspirert av moderne børser – sanntids BTC/USDT-data, porteføljeforvaltning', 'En tydelig grænseflade inspireret af moderne børser – realtids BTC/USDT-data, porteføljeforvaltning'],
    ['og handel med ett klikk. Designet for å gi tillit fra første innlogging.', 'og handel med ét klik. Designet til at give tillid fra første login.'],
    ['Sanntids candlestick-diagrammer', 'Realtids candlestick-diagrammer'],
    ['Portefølje og P/L på et øyeblikk', 'Portefølje og P/L på et øjeblik'],
    ['Sikkert kontodashbord', 'Sikkert kontodashboard'],
    ['Prøv plattformen', 'Prøv platformen'],
    ['Alt du trenger for trygg handel', 'Alt hvad du har brug for til sikker handel'],
    ['Sikkerhet, hastighet og intelligens – i og oversiktlig plattform for moderne tradere.', 'Sikkerhed, hastighed og intelligens – i en overskuelig platform for moderne tradere.'],
    ['Sikkerhet på banknivå', 'Sikkerhed på bankniveau'],
    ['SSL-kryptering, 2FA og sikker kapitalforvaltning beskytter dataene og kapitalen din i hvert steg.', 'SSL-kryptering, 2FA og sikker kapitalforvaltning beskytter dine data og kapital i hvert trin.'],
    ['AI-markedsignaler', 'AI-markedsignaler'],
    ['Nøyaktige sanntidsinnsikter hjelper deg å gjenkjenne muligheter raskere og ta bedre funderte beslutninger.', 'Nøjagtige realtidsindsigter hjælper dig med at genkende muligheder hurtigere og træffe bedre informerede beslutninger.'],
    ['Automatisert handel', 'Automatiseret handel'],
    ['AI-støttede roboter jobber 24/7 med effektiv utførelse av strategier, mens du beholder kontrollen.', 'AI-understøttede robotter arbejder 24/7 med effektiv udførelse af strategier, mens du beholder kontrollen.'],
    ['Tilgang til flere markeder', 'Adgang til flere markeder'],
    ['Handle krypto, forex, aksjer og råvarer i ett enhetlig miljø.', 'Handl krypto, forex, aktier og råvarer i ét samlet miljø.'],
    ['Utførelse med lav latens', 'Udførelse med lav latenstid'],
    ['Optimalisert infrastruktur for stabil ordreutførelse, også under høy markedsvolatilitet.', 'Optimeret infrastruktur til stabil ordreudførelse, også under høj markedsvolatilitet.'],
    ['Tydelig grensesnitt', 'Tydelig grænseflade'],
    ['Minimalistisk design reduserer distraksjoner, slik at du fokuserer på strategi i stedet for navigasjon.', 'Minimalistisk design reducerer distraktioner, så du fokuserer på strategi frem for navigation.'],
    ['Sanntidsmarkeder', 'Realtidsmarkeder'],
    ['Handle Bitcoin, Ethereum og flere eiendeler', 'Handl Bitcoin, Ethereum og flere aktiver'],
    ['Sanntidspriser, avanserte indikatorer og og profesjonell oversikt over markedene som betyr noe for deg.', 'Realtidspriser, avancerede indikatorer og professionelt overblik over markederne, der betyder noget for dig.'],
    ['Gå til markedene', 'Gå til markederne'],
    ['Sanntids markedspriser', 'Realtids markedspriser'],
    ['Slik kommer du i gang', 'Sådan kommer du i gang'],
    ['Fra registrering til din første handel på få minuten', 'Fra registrering til din første handel på få minutter'],
    ['En tydelig prosess uten unødvendig kompleksitet eller usikkerhet.', 'En tydelig proces uden unødvendig kompleksitet eller usikkerhed.'],
    ['Opprett og konto', 'Opret en konto'],
    ['Registrer deg med opplysningene dine og få umiddelbar sikker tilgang til plattformen.', 'Registrer dig med dine oplysninger og få øjeblikkelig sikker adgang til platformen.'],
    ['Bekreft e-posten din', 'Bekræft din e-mail'],
    ['Bekreft adressen din og lås opp det fullstendige handelsmiljøet.', 'Bekræft din adresse og lås op for det fulde handelsmiljø.'],
    ['Sett inn midler', 'Indsæt midler'],
    ['Sett inn minst', 'Indsæt mindst'],
    ['via bankoverføring, kort eller e-lommebok.', 'via bankoverførsel, kort eller e-pung.'],
    ['Sett opp strategien din', 'Opsæt din strategi'],
    ['Velg risikonivå og preferanser – manuelt eller med AI-støttet automatisering.', 'Vælg risikoniveau og præferencer – manuelt eller med AI-understøttet automatisering.'],
    ['Gå inn i markedet med sanntidsdiagrammer, verktøy og støtte når du trenger det.', 'Gå ind på markedet med realtidsdiagrammer, værktøjer og support, når du har brug for det.'],
    ['Åpne og konto nå', 'Åbn en konto nu'],
    ['Innskudd', 'Indbetaling'],
    ['Sett inn med betalingsmetoder du allerede stoler på', 'Indsæt med betalingsmetoder, du allerede stoler på'],
    ['Kort, e-lommebøker og bankoverføringer – beskyttet med SSL-kryptering.', 'Kort, e-punge og bankoverførsler – beskyttet med SSL-kryptering.'],
    ['innskudd og kontofinansiering', 'indbetaling og kontofinansiering'],
    ['Pålitelig infrastruktur', 'Pålidelig infrastruktur'],
    ['Bygget med ledende partnere i bransjen', 'Bygget med førende partnere i branchen'],
    ['Anmeldelser', 'Anmeldelser'],
    ['Hva tradere sier', 'Hvad tradere siger'],
    ['Registreringen tok bare noen minutter, gebyrene er transparente og supporten svarer virkelig raskt.', 'Registreringen tog kun få minutter, gebyrerne er gennemsigtige, og supporten svarer virkelig hurtigt.'],
    ['En smidig og pålitelig opplevelse – og plattform jeg gjerne forblir aktiv på.', 'En smidig og pålidelig oplevelse – en platform, jeg gerne forbliver aktiv på.'],
    ['Uavhengig trader', 'Uafhængig trader'],
    ['Jeg startet endelig med kryptohandel her – uten noen anger.', 'Jeg begyndte endelig at handle krypto her – uden nogen fortrydelse.'],
    ['Rask oppsett og alt forklart tydelig.', 'Hurtig opsætning og alt forklaret tydeligt.'],
    ['Et sterkt valg, spesielt for nybegynnere.', 'Et stærkt valg, især for begyndere.'],
    ['Kryptoentusiast', 'Kryptoentusiast'],
    ['Stabil og pålitelig.', 'Stabil og pålidelig.'],
    ['Å åpne en konto er enkelt, vilkårene er tydelige og teamet vet hva det gjør.', 'At åbne en konto er nemt, vilkårene er tydelige, og teamet ved, hvad det laver.'],
    ['En overraskende komfortabel handelsopplevelse.', 'En overraskende komfortabel handelsoplevelse.'],
    ['Digital-asset operator', 'Digital-asset operatør'],
    ['Trading føles ikke lenger komplisert.', 'Trading føles ikke længere kompliceret.'],
    ['Enkel registrering, tydelige gebyrer og støtte når jeg trenger det.', 'Enkel registrering, tydelige gebyrer og support, når jeg har brug for det.'],
    ['For og nybegynner gjør det og stor forskjell.', 'For en begynder gør det en stor forskel.'],
    ['Privatinvestor', 'Privatinvestor'],
    ['Ofte stilte spørsmål', 'Ofte stillede spørgsmål'],
    ['Hvordan kommer jeg i gang?', 'Hvordan kommer jeg i gang?'],
    ['med grunnleggende opplysninger, fullfør og kort verifisering og sett inn minst', 'med grundlæggende oplysninger, gennemfør en kort verificering og indsæt mindst'],
    ['Du får tilgang til hele plattformen – sanntidsdiagrammer, handelsverktøy og veiledet onboarding.', 'Du får adgang til hele platformen – realtidsdiagrammer, handelsværktøjer og vejledt onboarding.'],
    ['Er pengene og dataene mine trygge?', 'Er mine penge og data sikre?'],
    ['Vi bruker SSL-kryptering, tofaktorautentisering og sikker behandling via pålitelige leverandører.', 'Vi bruger SSL-kryptering, tofaktorgodkendelse og sikker behandling via pålidelige leverandører.'],
    ['Dine personopplysninger behandles på alle nivåer i henhold til strenge sikkerhetsstandarder.', 'Dine personoplysninger behandles på alle niveauer i henhold til strenge sikkerhedsstandarder.'],
    ['Når kan jeg ta ut gevinsten min?', 'Hvornår kan jeg hæve min gevinst?'],
    ['Du kan når som helst be om uttak via dashbordet ditt.', 'Du kan til enhver tid anmode om udbetaling via dit dashboard.'],
    ['Behandling tar vanligvis 1 til 3 virkedager.', 'Behandling tager normalt 1 til 3 hverdage.'],
    ['Gebyrer og behandlingstid er alltid synlige på forhånd – uten overraskelser.', 'Gebyrer og behandlingstid er altid synlige på forhånd – uden overraskelser.'],
    ['Trenger jeg handelserfaring?', 'Har jeg brug for handelserfaring?'],
    ['Absolutt ikke.', 'Absolut ikke.'],
    ['Veiledet onboarding, tydelige veiledninger og AI-støttede verktøy hjelper deg å lære i ditt eget tempo.', 'Vejledt onboarding, tydelige vejledninger og AI-understøttede værktøjer hjælper dig med at lære i dit eget tempo.'],
    ['Enten du er nybegynner eller erfaren trader, er støtte tilgjengelig 24/7.', 'Uanset om du er begynder eller erfaren trader, er support tilgængelig 24/7.'],
    ['Hvilke markeder kan jeg handle på?', 'Hvilke markeder kan jeg handle på?'],
    ['Få tilgang til krypto, forex, globale aksjer og råvarer i ett grensesnitt.', 'Få adgang til krypto, forex, globale aktier og råvarer i én grænseflade.'],
    ['Sanntidsdata, integrerte analyser og støtte for manuelle og automatiserte strategier.', 'Realtidsdata, integrerede analyser og support til manuelle og automatiserede strategier.'],
    ['Plattform', 'Platform'],
    ['Viktigste funksjoner på et øyeblikk', 'Vigtigste funktioner på et øjeblik'],
    ['Avansert markedsanalyse med maskinlæring', 'Avanceret markedsanalyse med maskinlæring'],
    ['Finansieringsmetoder', 'Finansieringsmetoder'],
    ['Betalingskort, bankoverføringer, PayPal, e-lommebøker', 'Betalingskort, bankoverførsler, PayPal, e-punge'],
    ['Tilgang per enhet', 'Adgang pr. enhed'],
    ['Web, nettbrett og mobil – fullt responsiv', 'Web, tablet og mobil – fuldt responsiv'],
    ['Signalnøyaktighet', 'Signalnøjagtighed'],
    ['Opptil 85 % med støttede AI-strategier', 'Op til 85 % med understøttede AI-strategier'],
    ['Krypto, forex, aksjer, råvarer', 'Krypto, forex, aktier, råvarer'],
    ['Rask kontooppsett med veiledet verifisering', 'Hurtig kontoopsætning med vejledt verificering'],
    ['Profesjonell 24/7-støtte –', 'Professionel 24/7-support –'],
    ['Kontakt oss', 'Kontakt os'],
    ['Pålitelig', 'Pålidelig'],
    ['Vurdering av', 'Vurdering af'],
    ['anmeldelser · Basert på', 'anmeldelser · Baseret på'],
    ['vurderinger', 'vurderinger'],
    ['Er du klar til å handle på og plattform bygget for oversikt?', 'Er du klar til at handle på en platform bygget til overblik?'],
    ['Bli med private tradere og bedrifter som trygt kjøper, selger og forvalter digitale eiendeler.', 'Bliv en del af private tradere og virksomheder, der trygt køber, sælger og forvalter digitale aktiver.'],
    ['Opprett kontoen din gratis', 'Opret din konto gratis'],
    ['Sanntidsanalyse, AI-støttede signaler og en plattform bygget for hastighet og oversikt.', 'Realtidsanalyse, AI-understøttede signaler og en platform bygget til hastighed og overblik.'],
    ['Handle krypto, forex og globale markeder med', 'Handl krypto, forex og globale markeder med'],
    ['Du er allerede registrert', 'Du er allerede registreret'],
    ['Vi har mottatt forespørselen din hos', 'Vi har modtaget din anmodning hos'],
    ['Du blir snart oppringt av og spesialist.', 'Du bliver snart ringet op af en specialist.'],
    ['Fornavn', 'Fornavn'],
    ['Etternavn', 'Efternavn'],
    ['E-postadresse', 'E-mailadresse'],
    ['Telefonnummer', 'Telefonnummer'],
    ['Opprett gratis konto', 'Opret gratis konto'],
    ['kontoregistrering', 'kontoregistrering'],
    ['Ved å sende inn opplysningene dine godtar du vår', 'Ved at indsende dine oplysninger accepterer du vores'],
    ['Personvernbeleid', 'Privatlivspolitik'],
    ['Bruksvilkår', 'Brugervilkår'],
];

function translateContent(content) {
    let out = content;
    for (const [from, to] of translations) {
        out = out.split(from).join(to);
    }
    return out;
}

function setupMultilangDa(daDir) {
    const includes = path.join(daDir, 'includes');
    fs.writeFileSync(
        path.join(includes, 'config.php'),
        "<?php\n\ndefine('ACTIVE_LANG', 'da');\nrequire_once __DIR__ . '/../../../includes/config.php';\n",
    );
    fs.writeFileSync(
        path.join(includes, 'header.php'),
        "<?php\n\nrequire_once __DIR__ . '/../../../includes/header.php';\n",
    );

    const formPath = path.join(includes, 'form.php');
    if (fs.existsSync(formPath)) {
        let form = fs.readFileSync(formPath, 'utf8');
        form = form.replace(/name="language" value="[^"]*"/, 'name="language" value="da"');
        fs.writeFileSync(formPath, form);
    }
}

for (const template of ['default', 'multilang']) {
    const noDir = path.join(repo, 'templates', template, 'langs', 'no');
    const daDir = path.join(repo, 'templates', template, 'langs', 'da');

    if (!fs.existsSync(noDir)) {
        console.warn('Skip missing', noDir);
        continue;
    }

    if (fs.existsSync(daDir)) {
        fs.rmSync(daDir, { recursive: true, force: true });
    }

    copyDir(noDir, daDir);
    console.log('Copied', template, 'no -> da');

    if (template === 'multilang') {
        setupMultilangDa(daDir);
    } else {
        const configPath = path.join(daDir, 'includes', 'config.php');
        if (fs.existsSync(configPath)) {
            let config = fs.readFileSync(configPath, 'utf8');
            config = config.replace(/define\('SITE_LANG', 'no'\)/, "define('SITE_LANG', 'da')");
            fs.writeFileSync(configPath, config);
        }
    }

    for (const file of walkPhpFiles(daDir)) {
        const original = fs.readFileSync(file, 'utf8');
        const translated = translateContent(original);
        if (translated !== original) {
            fs.writeFileSync(file, translated);
        }
    }
}

const flagDir = path.join(repo, 'templates/multilang/static/img/flags');
fs.mkdirSync(flagDir, { recursive: true });
const flagDest = path.join(flagDir, 'dk.png');

await new Promise((resolve, reject) => {
    const file = fs.createWriteStream(flagDest);
    https
        .get('https://flagcdn.com/24x18/dk.png', (res) => {
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

console.log('Downloaded dk.png flag');
console.log('Done.');

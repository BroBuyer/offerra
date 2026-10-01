/**
 * Proofread Slovenian lander copy: glue, gender, calques, leftover English.
 * Usage: node scripts/proofread-sl.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const SL_ROOT = path.join(ROOT, 'templates');

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

function slFiles() {
  const files = [];
  for (const tpl of fs.readdirSync(SL_ROOT, { withFileTypes: true })) {
    if (!tpl.isDirectory()) continue;
    const sl = path.join(SL_ROOT, tpl.name, 'langs', 'sl');
    if (fs.existsSync(sl)) files.push(...walk(sl));
  }
  return files.filter((f) => /\.(php|js|mjs|md|json|html|css)$/i.test(f));
}

/** Longer phrases first. */
const PHRASES = [
  [
    "<?= e($brand) ?> is an advanced AI-powered trading platform that analyses financial markets in real time\n          and delivers automated trading insights for <?= e($audience) ?>. The smart assistant helps you spot setups,\n          manage risk, and keep decisions on one screen — without a complex desktop terminal.",
    "<?= e($brand) ?> je napredna trgovalna platforma z umetno inteligenco. V realnem času analizira finančne trge\n          in pripravi samodejne vpoglede za <?= e($audience) ?>. Pametni pomočnik pomaga prepoznati priložnosti,\n          upravljati tveganje in sprejemati odločitve na enem zaslonu — brez zapletenega namiznega terminala.",
  ],
  [
    "<?= e($brand) ?> is an AI-assisted trading platform that analyses financial markets in real time and highlights setups with alerts and risk tools for <?= e($audience) ?>.",
    "<?= e($brand) ?> je trgovalna platforma z umetno inteligenco: v realnem času analizira trge in označi priložnosti z opozorili ter orodji za tveganje za <?= e($audience) ?>.",
  ],
  [
    "<?= e($brand) ?> is an AI-assisted trading platform for <?= e($audience) ?>. It analyses markets in real time and puts charts, alerts, and account tools on one dashboard.",
    "<?= e($brand) ?> je trgovalna platforma z umetno inteligenco za <?= e($audience) ?>. V realnem času analizira trge in na eni nadzorni plošči združi grafikone, opozorila in orodja računa.",
  ],
  [
    "<?= e($brand) ?> is built like a modern exchange: live BTC/USDT data, portfolio tracking,\n          and one-tap tickets. Watchlists, alerts, and account status stay in sync so <?= e($audience) ?>\n          can follow the same book from a browser or a phone.",
    "<?= e($brand) ?> je zasnovan kot sodobna borza: podatki BTC/USDT v živo, spremljanje portfelja\n          in naročila z enim tapom. Seznami spremljanja, opozorila in status računa ostanejo usklajeni, da <?= e($audience) ?>\n          vidi isto knjigo v brskalniku ali na telefonu.",
  ],
  [
    "<?= e($brand) ?> combines AI-assisted analysis, configurable alerts, and a dashboard for <?= e($audience) ?>\n        who want to monitor several assets in one place. The aim is not a promised return. <?= e($brand) ?> gives\n        tools to read volatility, set operating limits, and keep a written trail from registration to withdrawal.",
    "<?= e($brand) ?> združuje analizo z umetno inteligenco, nastavljiva opozorila in nadzorno ploščo za <?= e($audience) ?>,\n        ki želijo spremljati več sredstev na enem mestu. Cilj ni obljubljen donos. <?= e($brand) ?> ponuja\n        orodja za branje volatilnosti, nastavitev omejitev in sledenje od registracije do dviga.",
  ],
  [
    "The analysis engine processes price streams, volumes, and technical signals across timeframes, highlighting\n        configurations that deserve attention without replacing your judgement. Filter by market, set alert thresholds,\n        and receive summaries when conditions change. Historical context sits next to recent moves so a spike is never\n        shown without a baseline.",
    "Analizni sistem obdela tokove cen, obseg in tehnične signale po časovnih okvirih ter označi\n        nastavitve, ki zaslužijo pozornost — ne nadomešča vaše presoje. Filtrirajte po trgu, nastavite pragove opozoril\n        in prejemajte povzetke, ko se pogoji spremenijo. Zgodovina stoji ob zadnjih premikih, da skok nikoli\n        ni prikazan brez izhodišča.",
  ],
  [
    "Risk management is part of the <?= e($brand) ?> flow: exposure limits, position-size reminders, and pre-confirm\n        summaries. Online trading involves a risk of losing capital; no algorithm removes volatility or guarantees results.\n        Fees, spread, and account status stay on one <?= e($brand) ?> screen before you send an order.",
    "Upravljanje tveganja je del toka <?= e($brand) ?>: omejitve izpostavljenosti, opomniki velikosti pozicije in povzetki\n        pred potrditvijo. Spletno trgovanje prinaša tveganje izgube kapitala; noben algoritem ne odstrani volatilnosti in ne jamči rezultatov.\n        Provizije, razpon in status računa ostanejo na enem zaslonu <?= e($brand) ?>, preden pošljete naročilo.",
  ],
  [
    "After registration, a guided path explains verification, the minimum deposit of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>,\n        applicable fees, and credit times. <?= e($brand) ?> support assists with documents, withdrawals, and mobile setup.\n        Explore the product pages before exposing significant amounts.",
    "Po registraciji vodena pot razloži preverjanje, najmanjši polog <?= MIN_DEPOSIT ?> <?= CURRENCY ?>,\n        veljavne provizije in čase knjiženja. Podpora <?= e($brand) ?> pomaga pri dokumentih, dvigih in nastavitvi na telefonu.\n        Pred večjimi zneski si oglejte strani izdelka.",
  ],
  [
    "SSL, 2FA, and documented deposit/withdrawal steps. <?= e($brand) ?> keeps credentials and session controls in the account area.",
    "SSL, 2FA in dokumentirani koraki pologa ter dviga. <?= e($brand) ?> hrani poverilnice in nadzor seje v območju računa.",
  ],
  [
    "The <?= e($brand) ?> engine highlights setups from price, volume, and technical streams so you spend less time hunting across tabs.",
    "Sistem <?= e($brand) ?> označi priložnosti iz cene, obsega in tehničnih tokov, da manj časa preklapljate med zavihki.",
  ],
  [
    "Use <?= e($brand) ?> bots with your risk profile, or stay fully manual. You confirm size, fees, and exposure before an order goes out.",
    "Uporabite bote <?= e($brand) ?> s svojim profilom tveganja ali ostanite povsem ročni. Velikost, provizije in izpostavljenost potrdite, preden gre naročilo ven.",
  ],
  [
    "Crypto, FX, indices, and other listed instruments share one <?= e($brand) ?> book with common limits.",
    "Kripto, FX, indeksi in drugi navedeni instrumenti delijo eno knjigo <?= e($brand) ?> s skupnimi omejitvami.",
  ],
  [
    "<?= e($brand) ?> routes orders through an optimized stack so peak sessions stay usable.",
    "<?= e($brand) ?> usmerja naročila skozi optimiziran sklad, da ostanejo obremenjene seje uporabne.",
  ],
  [
    "Market data, notes, and the account panel stay distinct so <?= e($audience) ?> can read a setup without noise.",
    "Tržni podatki, zapiski in plošča računa ostanejo ločeni, da <?= e($audience) ?> preberejo priložnost brez šuma.",
  ],
  [
    "Real-time prices and professional-grade views inside <?= e($brand) ?> — the same pairs <?= e($audience) ?> watch on a typical desk.",
    "Cene v realnem času in profesionalni pogledi v <?= e($brand) ?> — isti pari, ki jih <?= e($audience) ?> spremljajo na običajni mizi.",
  ],
  [
    "Registration is free. Access to the full <?= e($brand) ?> desk follows verification and the stated minimum deposit.",
    "Registracija je brezplačna. Dostop do polne mize <?= e($brand) ?> sledi preverjanju in navedenemu najmanjšemu pologu.",
  ],
  [
    "Complete the form with name, email, and phone. A <?= e($brand) ?> manager may call to confirm the account.",
    "Izpolnite obrazec z imenom, e-pošto in telefonom. Upravitelj <?= e($brand) ?> lahko pokliče za potrditev računa.",
  ],
  [
    "Finish guided checks and set risk preferences. <?= e($brand) ?> support can walk <?= e($audience) ?> through onboarding.",
    "Opravite vodene preverjanja in nastavite preference tveganja. Podpora <?= e($brand) ?> lahko <?= e($audience) ?> vodi skozi uvajanje.",
  ],
  [
    "Fund with card, transfer, or e-wallet. <?= e($brand) ?> shows fees before you confirm.",
    "Napolnite z kartico, nakazilom ali elektronsko denarnico. <?= e($brand) ?> pred potrditvijo pokaže provizije.",
  ],
  [
    "Define risk and alerts. Stay manual or let <?= e($brand) ?> automation assist execution.",
    "Določite tveganje in opozorila. Ostanite ročni ali naj avtomatizacija <?= e($brand) ?> pomaga pri izvedbi.",
  ],
  [
    "Live charts, tickets, and 24/7 support stay in the same dashboard.",
    "Grafikoni v živo, naročila in podpora 24/7 ostanejo na isti nadzorni plošči.",
  ],
  [
    "Short and long horizons with synthetic indicators and <?= e($brand) ?> alerts, organised by market.",
    "Kratki in dolgi horizonti s sintetičnimi indikatorji in opozorili <?= e($brand) ?>, razporejeni po trgih.",
  ],
  [
    "Limits, size reminders, and confirmations before <?= e($brand) ?> tickets go out.",
    "Omejitve, opomniki velikosti in potrditve, preden gredo naročila <?= e($brand) ?> ven.",
  ],
  [
    "Browser or phone with synced <?= e($brand) ?> preferences — positions, alerts, and support in one layout.",
    "Brskalnik ali telefon z usklajenimi nastavitvami <?= e($brand) ?> — pozicije, opozorila in podpora v eni postavitvi.",
  ],
  [
    "Cards, e-wallets, and bank transfers — shown inside <?= e($brand) ?> before you confirm.",
    "Kartice, elektronske denarnice in bančna nakazila — prikazana v <?= e($brand) ?> pred potrditvijo.",
  ],
  [
    "Registration on <?= e($brand) ?> took minutes, fees were on screen, and support actually replied. The desk is the one I keep open.",
    "Registracija na <?= e($brand) ?> je trajala minute, provizije so bile na zaslonu in podpora je res odgovorila. To je miza, ki jo imam odprto.",
  ],
  [
    "First crypto tickets through <?= e($brand) ?> were clearer than I expected. Setup was short, and the AI notes on <?= e($brand) ?> helped me not stare at five apps.",
    "Prva kripto naročila prek <?= e($brand) ?> so bila jasnejša, kot sem pričakoval. Nastavitev je bila kratka, zapiski UI na <?= e($brand) ?> pa so mi prihranili pet aplikacij.",
  ],
  [
    "<?= e($brand) ?> felt stable during busy hours. Account opening was simple and the terms sat next to the deposit button.",
    "<?= e($brand) ?> je bil v obremenjenih urah stabilen. Odprtje računa je bilo preprosto, pogoji pa ob gumbu za polog.",
  ],
  [
    "As a beginner I needed a guided path. <?= e($brand) ?> signup, fees, and support were in one place — that is why I stayed.",
    "Kot začetnik sem potreboval vodeno pot. Prijava, provizije in podpora <?= e($brand) ?> so bili na enem mestu — zato sem ostal.",
  ],
  [
    "No. <?= e($brand) ?> guides registration, deposit, and basic navigation. Advanced tools stay available when you are ready.",
    "Ne. <?= e($brand) ?> vodi registracijo, polog in osnovno navigacijo. Napredna orodja ostanejo na voljo, ko ste pripravljeni.",
  ],
  [
    "<?= e($brand) ?> uses encrypted connections, account verification, and documented deposit/withdrawal steps. Trading still involves a risk of losing capital.",
    "<?= e($brand) ?> uporablja šifrirane povezave, preverjanje računa ter dokumentirane korake pologa in dviga. Trgovanje še vedno prinaša tveganje izgube kapitala.",
  ],
  [
    "<?= e($brand) ?> does not guarantee returns. Results depend on capital, strategy, volatility, and how you manage risk.",
    "<?= e($brand) ?> ne jamči donosov. Rezultati so odvisni od kapitala, strategije, volatilnosti in tega, kako upravljate tveganje.",
  ],
  [
    "<?= e($brand) ?> covers digital assets and multi-market instruments in one dashboard, with alerts and assisted automation.",
    "<?= e($brand) ?> pokriva digitalna sredstva in instrumente več trgov na eni nadzorni plošči, z opozorili in podprto avtomatizacijo.",
  ],
  [
    "Yes. <?= e($brand) ?> is built for modern phones and browsers, with preferences synced across devices.",
    "Da. <?= e($brand) ?> je narejen za sodobne telefone in brskalnike, nastavitve pa se uskladijo med napravami.",
  ],
  [
    "Use the <?= e($brand) ?> <a href=\"contacts.php\">contact page</a> for accounts, deposits, withdrawals, and platform questions.",
    "Uporabite <a href=\"contacts.php\">kontaktno stran</a> <?= e($brand) ?> za račune, pologe, dvige in vprašanja o platformi.",
  ],
  [
    "Complete the <?= e($brand) ?> form, finish verification, and open the dashboard. Minimum deposit is <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.",
    "Izpolnite obrazec <?= e($brand) ?>, opravite preverjanje in odprite nadzorno ploščo. Najmanjši polog je <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.",
  ],
  [
    "Create a <?= e($brand) ?> account, verify your email, and deposit a minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You then get charts, tools, and onboarding guides inside <?= e($brand) ?>.",
    "Ustvarite račun <?= e($brand) ?>, potrdite e-pošto in položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Nato v <?= e($brand) ?> dobite grafikone, orodja in vodnike za uvajanje.",
  ],
  [
    "Cards, bank transfers, PayPal, e-wallets — from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>",
    "Kartice, bančna nakazila, PayPal, elektronske denarnice — od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>",
  ],
  [
    "Open a <?= e($brand) ?> account for <?= e($audience) ?>. Trading involves risk — only use capital you can afford to expose.",
    "Odprite račun <?= e($brand) ?> za <?= e($audience) ?>. Trgovanje prinaša tveganje — uporabite le kapital, ki si ga lahko privoščite izgubiti.",
  ],
  [
    "A simple platform for crypto and multi-asset trading — strong security, clear pricing,\n          helpful AI insights, and an interface that stays easy to follow.",
    "Preprosta platforma za kripto in trgovanje z več sredstvi — močna varnost, jasne cene,\n          koristni vpogledi umetne inteligence in vmesnik, ki ostane pregleden.",
  ],
  [
    "A new standard in crypto and multi-market trading. Advanced security, transparent fees,\n          AI-driven insights, and an interface that stays out of your way.",
    "Nov standard pri kripto in trgovanju na več trgih. Napredna varnost, pregledne provizije,\n          vpogledi umetne inteligence in vmesnik, ki ne moti.",
  ],
  [
    "welcome: `pozdravljena Jaz sem Olivia, tvoja<?= e(SITE_NAME) ?>vodnik po vkrcanju. Vaš dostop je vnaprej odobren. Začnimo graditi vaš profil.`,",
    "welcome: `Pozdravljeni. Sem Olivia, vaša vodnica pri uvajanju na <?= e(SITE_NAME) ?>. Dostop je že predhodno odobren. Začnimo z vašim profilom.`,",
  ],
  [
    "q1: `Prosimo, potrdite, da ste prebivalec<?= e(geo_country_in()) ?>v celoti izpolnjevati zakonske zahteve.`,",
    "q1: `Potrdite, da ste prebivalec <?= e(geo_country_in()) ?> in v celoti izpolnjujete zakonske zahteve.`,",
  ],
  [
    "q2: `super Izberite svojo starostno skupino, da vam lahko priporočimo ustrezne finančne produkte:`,",
    "q2: `Odlično. Izberite starostno skupino, da vam predlagamo ustrezne finančne produkte:`,",
  ],
  [
    '"zdravo Sem Lisa, tvoja pomočnica pri vkrcanju. Ste pripravljeni odpreti trgovalni račun v nekaj hitrih korakih?",',
    '"Pozdravljeni. Sem Lisa, vaša pomočnica pri uvajanju. Ste pripravljeni odpreti trgovalni račun v nekaj hitrih korakih?",',
  ],
  [
    'chatStep1Bot: "zdravo Sem Lisa, tvoja pomočnica pri vkrcanju. Ste pripravljeni odpreti trgovalni račun v nekaj hitrih korakih?",',
    'chatStep1Bot: "Pozdravljeni. Sem Lisa, vaša pomočnica pri uvajanju. Ste pripravljeni odpreti trgovalni račun v nekaj hitrih korakih?",',
  ],
];

const SHORT = [
  ['SSL Varnod', 'SSL varnost'],
  ['SSL Secured', 'SSL varnost'],
  ['Fast Execution', 'Hitra izvedba'],
  ['Fast order execution', 'Hitra izvedba naročil'],
  ['Customer support available 24/7', 'Podpora strankam 24/7'],
  ['Varno encrypted connection (SSL)', 'Šifrirana povezava SSL'],
  ['Registered users', 'Registrirani uporabniki'],
  ['Reported volume', 'Poročani obseg'],
  ['Countries supported', 'Podprte države'],
  ['Create your free account', 'Ustvarite brezplačen račun'],
  ['Get started', 'Začnite'],
  ['Get Started', 'Začnite'],
  ['Sign Up', 'Prijava'],
  ["'Sign Up'", "'Prijava'"],
  ['page_title_lead(\'Sign Up\')', "page_title_lead('Prijava')"],
  ['Open your <?= e(SITE_NAME) ?> trading account', 'Odprite trgovalni račun <?= e(SITE_NAME) ?>'],
  ['Open your <?= e($brand) ?> account', 'Odprite račun <?= e($brand) ?>'],
  ["$form_heading = 'Open your ' . $brand . ' account'", "$form_heading = 'Odprite račun ' . $brand"],
  ["$form_heading = 'Create your ' . $brand . ' account'", "$form_heading = 'Ustvarite račun ' . $brand"],
  ["$form_heading = 'Enter your details for ' . SITE_NAME", "$form_heading = 'Vnesite podatke za ' . SITE_NAME"],
  ['Start with <?= e($brand) ?>', 'Začnite z <?= e($brand) ?>'],
  ['Try <?= e($brand) ?>', 'Preizkusite <?= e($brand) ?>'],
  ['Try <?= e(SITE_NAME) ?> free', 'Preizkusite <?= e(SITE_NAME) ?> brezplačno'],
  ['Why <?= e($brand) ?>', 'Zakaj <?= e($brand) ?>'],
  ['What you get inside <?= e($brand) ?>', 'Kaj dobite v <?= e($brand) ?>'],
  ['<?= e($brand) ?> security stack', 'Varnostni sklad <?= e($brand) ?>'],
  ['AI signals on <?= e($brand) ?>', 'Signali UI na <?= e($brand) ?>'],
  ['Assisted automation', 'Podprta avtomatizacija'],
  ['Multi-asset <?= e($brand) ?> desk', 'Miza <?= e($brand) ?> za več sredstev'],
  ['Low-latency tickets', 'Naročila z nizko zakasnitvijo'],
  ['Clean <?= e($brand) ?> UI', 'Pregleden vmesnik <?= e($brand) ?>'],
  ['Live markets', 'Trgi v živo'],
  ['Trade Bitcoin, Ethereum, and more on <?= e($brand) ?>', 'Trgujte Bitcoin, Ethereum in več na <?= e($brand) ?>'],
  ['Get <?= e($brand) ?> market access', 'Dostop do trgov <?= e($brand) ?>'],
  ['<?= e($brand) ?> markets', 'Trgi <?= e($brand) ?>'],
  ['Getting started', 'Kako začeti'],
  ['How to start with <?= e($brand) ?>', 'Kako začeti z <?= e($brand) ?>'],
  ['1. Register on <?= e($brand) ?>', '1. Registracija na <?= e($brand) ?>'],
  ['2. Verify the account', '2. Preverite račun'],
  ['4. Set <?= e($brand) ?> limits', '4. Nastavite omejitve <?= e($brand) ?>'],
  ['5. Trade in the <?= e($brand) ?> desk', '5. Trgujte na mizi <?= e($brand) ?>'],
  ['Open a <?= e($brand) ?> account', 'Odprite račun <?= e($brand) ?>'],
  ['Informed trading', 'Informirano trgovanje'],
  ['How <?= e($brand) ?> supports decisions on financial markets', 'Kako <?= e($brand) ?> podpira odločitve na finančnih trgih'],
  ['Multi-timeframe analysis', 'Analiza več časovnih okvirov'],
  ['Integrated risk tools', 'Vgrajena orodja za tveganje'],
  ['One dashboard', 'Ena nadzorna plošča'],
  ['Funding', 'Financiranje'],
  ['Fund your <?= e($brand) ?> account with methods you already use', 'Napolnite račun <?= e($brand) ?> z načini, ki jih že uporabljate'],
  ['Zaupanja vreden infrastructure', 'Zaupanja vredna infrastruktura'],
  ['<?= e($brand) ?> runs on industry-standard partners', '<?= e($brand) ?> teče na uveljavljenih partnerjih'],
  ['Views on <?= e($brand) ?>', 'Mnenja o <?= e($brand) ?>'],
  ['What <?= e($audience) ?> say about <?= e($brand) ?>', 'Kaj <?= e($audience) ?> pravijo o <?= e($brand) ?>'],
  ['<?= e($brand) ?> user', 'uporabnik <?= e($brand) ?>'],
  ['What to know before you start with <?= e($brand) ?>', 'Kaj vedeti, preden začnete z <?= e($brand) ?>'],
  ['What is <?= e($brand) ?> and how does it work?', 'Kaj je <?= e($brand) ?> in kako deluje?'],
  ['Do I need trading experience to use <?= e($brand) ?>?', 'Ali potrebujem izkušnje s trgovanjem za <?= e($brand) ?>?'],
  ['Are my data and funds handled securely on <?= e($brand) ?>?', 'Ali so moji podatki in sredstva na <?= e($brand) ?> varno obravnavani?'],
  ['What returns can I expect on <?= e($brand) ?>?', 'Kakšne donose lahko pričakujem na <?= e($brand) ?>?'],
  ['Which markets are available on <?= e($brand) ?>?', 'Kateri trgi so na voljo na <?= e($brand) ?>?'],
  ['Can I use <?= e($brand) ?> on mobile?', 'Ali lahko <?= e($brand) ?> uporabljam na telefonu?'],
  ['How do I contact <?= e($brand) ?> support?', 'Kako stopim v stik s podporo <?= e($brand) ?>?'],
  ['How do I start with <?= e($brand) ?> today?', 'Kako danes začnem z <?= e($brand) ?>?'],
  ['What is <?= e($brand) ?>?', 'Kaj je <?= e($brand) ?>?'],
  ['How do I get started with <?= e($brand) ?>?', 'Kako začnem z <?= e($brand) ?>?'],
  ['<?= e($brand) ?> platform', 'Platforma <?= e($brand) ?>'],
  ['<?= e($brand) ?> capabilities at a glance', 'Zmožnosti <?= e($brand) ?> na prvi pogled'],
  ['<?= e($brand) ?> AI engine', 'Sistem UI <?= e($brand) ?>'],
  ['Market analysis powered by machine learning', 'Tržna analiza s strojnim učenjem'],
  ['<?= e($brand) ?> on web, tablet, and mobile', '<?= e($brand) ?> na spletu, tablici in telefonu'],
  ['Crypto, forex, stocks, commodities in one <?= e($brand) ?> book', 'Kripto, forex, delnice, surovine v eni knjigi <?= e($brand) ?>'],
  ['Onboarding', 'Uvajanje'],
  ['Guided <?= e($brand) ?> verification for <?= e($audience) ?>', 'Vodeno preverjanje <?= e($brand) ?> za <?= e($audience) ?>'],
  ['<?= e($brand) ?> reviews', 'Ocene <?= e($brand) ?>'],
  ['reviews · Na podlagi', 'ocen · Na podlagi'],
  ['ratings of <?= e($brand) ?>', 'ocen <?= e($brand) ?>'],
  ['Ready to use <?= e($brand) ?>?', 'Pripravljeni na <?= e($brand) ?>?'],
  ['Join <?= e(SITE_NAME) ?>', 'Pridružite se <?= e(SITE_NAME) ?>'],
  ['For <?= e(market_audience()) ?>. Minimum deposit', 'Za <?= e(market_audience()) ?>. Najmanjši polog'],
  ['name\' => \'Home\'', "name' => 'Domov'"],
  ['name\' => \'Sign Up\'', "name' => 'Prijava'"],
  ["page_title('AI and real-time execution | Uradna stran')", "page_title('UI in izvedba v realnem času | Uradna stran')"],
  ['<a href="#how">Kako deluje.</a>', '<a href="#how">Kako deluje</a>'],
  ['dostopa<span class="text-accent">svetovnih trgih</span>', 'dostopa do <span class="text-accent">svetovnih trgov</span>'],
  ['Trade crypto and other markets.<br><span class="text-accent">Get started with <?= e(SITE_NAME) ?></span>', 'Trgujte s kriptovalutami in drugimi trgi.<br><span class="text-accent">Začnite z <?= e(SITE_NAME) ?></span>'],
  ['Trade smarter.<br><span class="text-accent">Move faster.</span>', 'Trgujte pametneje.<br><span class="text-accent">Ukrepajte hitreje.</span>'],
  ["$form_heading = 'Odpri svojoaccount in 2 minutes'", "$form_heading = 'Odprite račun v 2 minutah'"],
  ['<h1>Odpri svojotrading account</h1>', '<h1>Odprite trgovalni račun</h1>'],
  ['AI-poweredtrgovalna platforma', 'Trgovalna platforma z umetno inteligenco'],
  ['Platforma highlights', 'Prednosti platforme'],
  ['<span>Get started</span>', '<span>Začnite</span>'],
  ['Live markets after verification.', 'Trgi v živo po preverjanju.'],
  ["'Trade crypto and other markets on ' . SITE_NAME . ' — secure account, clear pricing, helpful AI tools, and fast order execution.'", "'Trgujte s kriptovalutami in drugimi trgi na ' . SITE_NAME . ' — varen račun, jasne cene, koristna orodja UI in hitra izvedba naročil.'"],
  ["'Create your ' . SITE_NAME . ' account and start trading crypto, forex, and other markets.'", "'Ustvarite račun ' . SITE_NAME . ' in začnite trgovati s kriptovalutami, forexom in drugimi trgi.'"],
  ["'Create your ' . SITE_NAME . ' account and start trading crypto, forex, and global markets with AI-powered tools.'", "'Ustvarite račun ' . SITE_NAME . ' in začnite trgovati s kriptovalutami, forexom in svetovnimi trgi z orodji UI.'"],
  ["'Create your ' . SITE_NAME . ' account and start trading with AI-powered tools. For ' . market_audience() . '. Minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '.'", "'Ustvarite račun ' . SITE_NAME . ' in začnite trgovati z orodji UI. Za ' . market_audience() . '. Najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . '.'"],
  ["'Trade crypto, forex, and global markets with ' . SITE_NAME . '. Real-time analytics, AI-assisted signals, and a platform built for speed and clarity.'", "'Trgujte s kriptovalutami, forexom in svetovnimi trgi na ' . SITE_NAME . '. Analitika v realnem času, signali z umetno inteligenco in platforma, zasnovana za hitrost in jasnost.'"],
  ["'Explore the ' . SITE_NAME . ' trading desk — real-time analytics, AI signals, multi-market access, and automation for ' . market_audience() . '.'", "'Raziščite trgovalno mizo ' . SITE_NAME . ' — analitika v realnem času, signali UI, dostop do več trgov in avtomatizacija za ' . market_audience() . '.'"],
  ["'FAQ for ' . $brand . ' — how the AI trading platform works for ' . $audience", "'Pogosta vprašanja o ' . $brand . ' — kako trgovalna platforma z umetno inteligenco deluje za ' . $audience"],
  ["'Kontakt ' . SITE_NAME . ' support. Help for ' . market_audience() . ' on accounts, deposits, and the trading desk.'", "'Kontakt ' . SITE_NAME . '. Pomoč za ' . market_audience() . ' pri računih, pologih in trgovalni mizi.'"],
  ['<h1>Pogosta vprašanja about <?= e($brand) ?></h1>', '<h1>Pogosta vprašanja o <?= e($brand) ?></h1>'],
  ['What <?= e($audience) ?> usually ask before opening a <?= e($brand) ?> account.', 'Kar <?= e($audience) ?> običajno vprašajo pred odprtjem računa <?= e($brand) ?>.'],
  ['<?= e(SITE_NAME) ?> product', 'Izdelek <?= e(SITE_NAME) ?>'],
  ['<?= e(SITE_NAME) ?> analytics built for <?= e(market_audience()) ?>', 'Analitika <?= e(SITE_NAME) ?> za <?= e(market_audience()) ?>'],
  ['One <?= e(SITE_NAME) ?> desk. Every listed market. Tools that keep up with you.', 'Ena miza <?= e(SITE_NAME) ?>. Vsi navedeni trgi. Orodja, ki sledijo vam.'],
  ['<?= e(SITE_NAME) ?> real-time charts', 'Grafikoni <?= e(SITE_NAME) ?> v realnem času'],
  ['Live price feeds and indicators across assets available on <?= e(SITE_NAME) ?>.', 'Tokovi cen v živo in indikatorji za sredstva na <?= e(SITE_NAME) ?>.'],
  ['<?= e(SITE_NAME) ?> AI signal engine', 'Sistem signalov UI <?= e(SITE_NAME) ?>'],
  ['Models on <?= e(SITE_NAME) ?> surface setups with entry and exit context — you still confirm the ticket.', 'Modeli na <?= e(SITE_NAME) ?> pokažejo priložnosti z vstopom in izstopom — naročilo še vedno potrdite vi.'],
  ['<?= e(SITE_NAME) ?> automation', 'Avtomatizacija <?= e(SITE_NAME) ?>'],
  ['Configure <?= e(SITE_NAME) ?> bots with custom risk parameters, or trade manually beside them.', 'Nastavite bote <?= e(SITE_NAME) ?> z lastnimi parametri tveganja ali trgujte ročno ob njih.'],
  ['<?= e(SITE_NAME) ?> risk controls', 'Nadzor tveganja <?= e(SITE_NAME) ?>'],
  ['Stop-loss, take-profit, and position sizing tools on every <?= e(SITE_NAME) ?> ticket.', 'Orodja stop-loss, take-profit in velikosti pozicije na vsakem naročilu <?= e(SITE_NAME) ?>.'],
  ['<?= e(SITE_NAME) ?> portfolio tracker', 'Sledilnik portfelja <?= e(SITE_NAME) ?>'],
  ['Holdings, P&amp;L, and allocation across markets listed on <?= e(SITE_NAME) ?>.', 'Imetja, dobiček in izguba ter razporeditev po trgih na <?= e(SITE_NAME) ?>.'],
  ['<?= e(SITE_NAME) ?> learning hub', 'Središče učenja <?= e(SITE_NAME) ?>'],
  ['Guided tutorials and market explainers for <?= e(market_audience()) ?> who are new to the desk.', 'Vodene vadnice in razlage trga za <?= e(market_audience()) ?>, ki so novi na mizi.'],
  ['<?= e(SITE_NAME) ?> contact', 'Kontakt <?= e(SITE_NAME) ?>'],
  ['Talk to <?= e(SITE_NAME) ?> support', 'Oglasite se podpori <?= e(SITE_NAME) ?>'],
  ['Help for <?= e(market_audience()) ?> — accounts, tickets, and the <?= e(SITE_NAME) ?> desk, around the clock.', 'Pomoč za <?= e(market_audience()) ?> — računi, naročila in miza <?= e(SITE_NAME) ?>, ves dan.'],
  ['<?= e(SITE_NAME) ?> email', 'E-pošta <?= e(SITE_NAME) ?>'],
  ['Account, deposit, and desk questions for <?= e(market_audience()) ?>:', 'Vprašanja o računu, pologu in mizi za <?= e(market_audience()) ?>:'],
  ['<?= e(SITE_NAME) ?> response time', 'Odzivni čas <?= e(SITE_NAME) ?>'],
  ['Most <?= e(SITE_NAME) ?> tickets are answered within a few hours. Urgent trading issues are prioritised.', 'Večina zahtevkov <?= e(SITE_NAME) ?> dobi odgovor v nekaj urah. Nujna trgovalna vprašanja imajo prednost.'],
  ['Ready to start with <?= e(SITE_NAME) ?>?', 'Pripravljeni začeti z <?= e(SITE_NAME) ?>?'],
  ['Open a <?= e(SITE_NAME) ?> account in minutes — no call required.', 'Odprite račun <?= e(SITE_NAME) ?> v minutah — klic ni potreben.'],
  ['Security, speed, and AI-assisted analysis — one platform for <?= e($audience) ?> who want a single desk for several assets.', 'Varnost, hitrost in analiza z umetno inteligenco — ena platforma za <?= e($audience) ?>, ki želijo eno mizo za več sredstev.'],
  ['<?= e($brand) ?> workspace', 'Delovni prostor <?= e($brand) ?>'],
  ['The <?= e($brand) ?> dashboard<br>on desktop and mobile', 'Nadzorna plošča <?= e($brand) ?><br>na računalniku in telefonu'],
  ['Real-time candlestick charts inside <?= e($brand) ?>', 'Svečni grafikoni v realnem času v <?= e($brand) ?>'],
  ['Portfolio &amp; P/L on the <?= e($brand) ?> home screen', 'Portfelj in D/I na začetnem zaslonu <?= e($brand) ?>'],
  ['Secure <?= e($brand) ?> account area', 'Varno območje računa <?= e($brand) ?>'],
  ['aria-label="<?= e($brand) ?> platform statistics"', 'aria-label="Statistika platforme <?= e($brand) ?>"'],
  ['aria-label="<?= e($brand) ?> trading platform preview"', 'aria-label="Predogled trgovalne platforme <?= e($brand) ?>"'],
  ['Trgi on <?= e($brand) ?>', 'Trgi na <?= e($brand) ?>'],
  ['$payment_context = $brand . \' account funding and deposits\'', "$payment_context = 'Financiranje računa in pologi ' . $brand"],
  ['Počisti namige za nakup/držanje/gledanje', 'Jasni namigi za nakup, držanje ali spremljanje'],
  ['do vašega prvega položaja', 'do vaše prve pozicije'],
  ['do vašega prvega položaja', 'do vaše prve pozicije'],
  ['prvega položaja', 'prve pozicije'],
  ['velikost položaja', 'velikost pozicije'],
  ['doseže položaje', 'doseže pozicije'],
  ['ravnotežje in položaj', 'stanje in pozicijo'],
  ['Ustvarite svojo <?= e(SITE_NAME) ?>', 'Ustvarite svoj <?= e(SITE_NAME) ?>'],
  ['Vaša zahteva z<?= e(SITE_NAME) ?>je bilo prejeto', 'Vaša zahteva za <?= e(SITE_NAME) ?> je bila prejeta'],
  ['Vaša zahteva z <?= e(SITE_NAME) ?> je bilo prejeto', 'Vaša zahteva za <?= e(SITE_NAME) ?> je bila prejeta'],
  ['je bilo prejeto', 'je bila prejeta'],
  ['podprto izmenjavo', 'podprto borzo'],
  ['izpadi izmenjave', 'izpadi borze'],
  ['motor ima samo dovoljenje', 'sistem ima samo dovoljenje'],
  ['motor ima samo dovoljenje za usmerjanje ukazov', 'sistem ima samo dovoljenje za usmerjanje ukazov'],
  ['Postopek vkrcanja', 'Postopek uvajanja'],
  ['Enostavno vkrcanje', 'Enostavno uvajanje'],
  ['Naše vkrcanje', 'Naše uvajanje'],
  ['Hitro in brezhibno vkrcanje', 'Hitro in tekoče uvajanje'],
  ['pomočnica pri vkrcanju', 'pomočnica pri uvajanju'],
  ['Pomočnik pri vkrcanju', 'Pomočnica pri uvajanju'],
  ['vodeno vkrcanje', 'vodeno uvajanje'],
  ['pri vkrcanju', 'pri uvajanju'],
  ['varnemu vkrcanju', 'varnemu uvajanju'],
  ['od vkrcanja', 'od uvajanja'],
  ['vkrcanja', 'uvajanja'],
  ['vkrcanju', 'uvajanju'],
  ['vkrcanje', 'uvajanje'],
  ['a4_1: `Zaposlen ali svoboden`', 'a4_1: `Zaposlen ali samostojni podjetnik`'],
  ['aria-label="drobtina"', 'aria-label="potek strani"'],
  ['<strong>Spreads</strong> from 0.1', '<strong>Razponi</strong> od 0.1'],
  ['<strong>Speed</strong> under 40ms', '<strong>Hitrost</strong> pod 40 ms'],
];

function fixGlue(s) {
  s = s.replace(/(\?>)(?=[\p{L}\p{N}])/gu, '$1 ');
  s = s.replace(/([\p{L}\p{N}])(?=<\?=)/gu, '$1 ');
  s = s.replace(/([?!.:,;])<\?=/g, '$1 <?=');
  s = s.replace(/—<\?=/g, '— <?=');
  s = s.replace(/–<\?=/g, '– <?=');
  s = s.replace(/(\S) {2,}<\?=/g, '$1 <?=');
  s = s.replace(/\?> {2,}(?=\S)/g, '?> ');
  s = s.replace(/\n <?= e\(/g, '\n          <?= e(');
  return s;
}

const BATCH2 = [
  ['počutite vrhunske in ostanete preprosti', 'ostane pregledna in preprosta'],
  ['Ustvarjen za začetnike', 'Ustvarjena za začetnike'],
  ['AI-Powered Trgovalna platforma', 'Trgovalna platforma z umetno inteligenco'],
  ['Professional charts.<br>Mobile-ready.', 'Profesionalni grafikoni.<br>Pripravljeni za telefon.'],
  [
    "A clean interface built like a modern exchange — live BTC/USDT data, portfolio tracking,\n          and one-tap execution. Designed to build confidence from your first login.",
    "Pregleden vmesnik, zasnovan kot sodobna borza — podatki BTC/USDT v živo, spremljanje portfelja\n          in izvedba z enim tapom. Zasnovan tako, da že od prve prijave gradi zaupanje.",
  ],
  ['Real-time candlestick charts', 'Svečni grafikoni v realnem času'],
  ['Portfolio &amp; P/L at a glance', 'Portfelj in D/I na prvi pogled'],
  ['Varno account dashboard', 'Varna nadzorna plošča računa'],
  ['Try the platform', 'Preizkusite platformo'],
  ['Everything you need to trade with confidence', 'Vse, kar potrebujete za samozavestno trgovanje'],
  ['Varnost, speed, and intelligence — combined in one clean platform designed for modern traders.', 'Varnost, hitrost in inteligenca — združene v eni pregledni platformi za sodobne trgovce.'],
  ['Trgovalna platforma preview', 'Predogled trgovalne platforme'],
  ["'Kontakt ' . SITE_NAME . ' support — account, trading, and technical help available 24/7.'", "'Kontakt ' . SITE_NAME . ' — pomoč pri računu, trgovanju in tehničnih vprašanjih 24/7.'"],
  ['<h1>Talk to support</h1>', '<h1>Oglasite se podpori</h1>'],
  ['Account, trading, and technical questions — covered around the clock.', 'Vprašanja o računu, trgovanju in tehniki — ves dan.'],
  ['<h3>E-pošta support</h3>', '<h3>E-poštna podpora</h3>'],
  ['For account and general requests:', 'Za račun in splošna vprašanja:'],
  ['<h3>Response time</h3>', '<h3>Odzivni čas</h3>'],
  ['Most tickets clear within a few hours. Live trading issues are prioritized.', 'Večina zahtevkov je rešenih v nekaj urah. Nujna trgovalna vprašanja imajo prednost.'],
  ['<h3>Prefer self-serve?</h3>', '<h3>Raje sami?</h3>'],
  ['Odpri račun in minutes — no call required.', 'Odprite račun v minutah — klic ni potreben.'],
  ["'Open ' . SITE_NAME . ' from ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — full desk, AI signals, and 24/7 support for ' . market_audience() . '.'", "'Odprite ' . SITE_NAME . ' od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — polna miza, signali UI in podpora 24/7 za ' . market_audience() . '.'"],
  ['<?= e(SITE_NAME) ?> offer', 'Ponudba <?= e(SITE_NAME) ?>'],
  ['Start <?= e(SITE_NAME) ?> from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>', 'Začnite z <?= e(SITE_NAME) ?> od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>'],
  ['Full <?= e(SITE_NAME) ?> platform for <?= e(market_audience()) ?>. Scale when you are ready.', 'Polna platforma <?= e(SITE_NAME) ?> za <?= e(market_audience()) ?>. Širite, ko ste pripravljeni.'],
  ['Starter access', 'Začetni dostop'],
  ['minimum · Full <?= e(SITE_NAME) ?> desk · AI signals · 24/7 support', 'minimum · Polna miza <?= e(SITE_NAME) ?> · signali UI · podpora 24/7'],
  ["What's included", 'Kaj je vključeno'],
  ['Live charts, multi-market trading, portfolio tracker, guided onboarding', 'Grafikoni v živo, trgovanje na več trgih, sledilnik portfelja, vodeno uvajanje'],
  ['Live charts, multi-market trading, portfolio tracker, guided uvajanje', 'Grafikoni v živo, trgovanje na več trgih, sledilnik portfelja, vodeno uvajanje'],
  ['Card, bank transfer, PayPal, e-wallets', 'Kartica, bančno nakazilo, PayPal, elektronske denarnice'],
  ['Withdrawals', 'Dvigi'],
  ['Anytime · 1–3 business days · Fees shown upfront', 'Kadarkoli · 1–3 delovne dni · Provizije prikazane vnaprej'],
  ['Devices', 'Naprave'],
  ['Web, tablet, mobile — no download required', 'Splet, tablica, telefon — prenos ni potreben'],
  ["$form_heading = 'Claim your ' . SITE_NAME . ' offer'", "$form_heading = 'Prevzemite ponudbo ' . SITE_NAME"],
  ['page_title_lead(\'Terms of Use\')', "page_title_lead('Pogoji uporabe')"],
  ['<h1>Terms of Use</h1>', '<h1>Pogoji uporabe</h1>'],
  ["'Read the terms and conditions for using the ' . SITE_NAME . ' trading platform and website.'", "'Preberite pogoje uporabe trgovalne platforme in spletnega mesta ' . SITE_NAME . '.'"],
  ['By accessing <?= e(SITE_NAME) ?> you agree to these Terms of Use. If you do not agree, please do not use our services.', 'Z dostopom do <?= e(SITE_NAME) ?> se strinjate s temi pogoji uporabe. Če se ne strinjate, storitev ne uporabljajte.'],
  ['<h2>Eligibility</h2>', '<h2>Upravičenost</h2>'],
  ['You must be at least 18 years old and legally permitted to trade financial instruments in your jurisdiction.', 'Morate biti stari vsaj 18 let in v svoji jurisdikciji zakonito smeti trgovati s finančnimi instrumenti.'],
  ['<h2>Account responsibilities</h2>', '<h2>Odgovornosti računa</h2>'],
  ['You are responsible for maintaining the confidentiality of your account credentials and for all activity under your account.', 'Odgovorni ste za zaupnost poverilnic računa in za vso dejavnost na računu.'],
  ['<h2>Service availability</h2>', '<h2>Razpoložljivost storitve</h2>'],
  ['We strive for continuous availability but do not guarantee uninterrupted access. Maintenance, market conditions, or technical issues may affect service.', 'Prizadevamo si za stalno dosegljivost, a ne jamčimo neprekinjenega dostopa. Vzdrževanje, razmere na trgu ali tehnične težave lahko vplivajo na storitev.'],
  ['<h2>Limitation of liability</h2>', '<h2>Omejitev odgovornosti</h2>'],
  ['<?= e(SITE_NAME) ?> is not liable for trading losses or damages arising from use of information on this site. Seek independent financial advice where appropriate.', '<?= e(SITE_NAME) ?> ni odgovoren za trgovalne izgube ali škodo zaradi uporabe informacij na tem mestu. Po potrebi poiščite neodvisen finančni nasvet.'],
  ['Trading cryptocurrencies, forex, CFDs, and other financial instruments involves substantial risk of loss. Past performance does not guarantee future results. Only trade with capital you can afford to lose.', 'Trgovanje s kriptovalutami, forexom, CFD-ji in drugimi finančnimi instrumenti prinaša precejšnje tveganje izgube. Pretekla uspešnost ne jamči prihodnjih rezultatov. Trgujte le s kapitalom, ki si ga lahko privoščite izgubiti.'],
  [
    `A fantastictrgovalna platforma is <?= e(SITE_NAME) ?>! The
                  registration process is straightforward, fees are
                  transparent, and the support team is highly professional,
                  making the trading experience smooth and efficient. I am
                  very satisfied with the service and would recommend it to
                  anyone interested in trading.`,
    `Odlična trgovalna platforma je <?= e(SITE_NAME) ?>! Registracija
                  je preprosta, provizije so pregledne, ekipa podpore pa zelo
                  profesionalna, zato je trgovanje tekoče in učinkovito. S storitvijo
                  sem zelo zadovoljen in jo priporočam vsakomur, ki ga zanima trgovanje.`,
  ],
  [
    `Finally decided to try cryptocurrency and chose <?= e(SITE_NAME) ?> — very pleased with the choice. Registration was
                  straightforward and completed in minutes, with transparent
                  pricing from the outset. It feels like a dependable
                  platform, particularly for those new to the space.`,
    `Končno sem se odločil poskusiti kriptovalute in izbral <?= e(SITE_NAME) ?> — z izbiro sem zelo zadovoljen. Registracija je
                  bila preprosta in končana v minutah, cene pa so bile od začetka
                  pregledne. Deluje kot zanesljiva platforma, zlasti za tiste,
                  ki so v tem prostoru novi.`,
  ],
  [
    `A dependable partner in the cryptocurrency trading sector.
                  Straightforward account setup, transparent conditions and
                  knowledgeable assistance. Trading on this platform is
                  genuinely enjoyable.`,
    `Zanesljiv partner pri trgovanju s kriptovalutami.
                  Preprosta nastavitev računa, pregledni pogoji in
                  poučena pomoč. Trgovanje na tej platformi je
                  res prijetno.`,
  ],
  [
    `Thanks to <?= e(SITE_NAME) ?>, I've found crypto trading
                  straightforward and accessible. The registration process was
                  smooth, and I appreciate the clarity around fees. As someone
                  new to trading, I feel well-supported and confident using
                  this platform.`,
    `Zaradi <?= e(SITE_NAME) ?> se mi zdi trgovanje s kriptovalutami
                  preprosto in dostopno. Registracija je potekla gladko,
                  cenim pa tudi jasnost glede provizij. Kot nekdo, ki je
                  v trgovanju nov, se počutim podprtega in samozavestnega
                  na tej platformi.`,
  ],
  ['page_title_lead(\'Privacy Policy\')', "page_title_lead('Politika zasebnosti')"],
  ['<h1>Privacy Policy</h1>', '<h1>Politika zasebnosti</h1>'],
  ["'Learn how ' . SITE_NAME . ' collects, uses, and protects your personal data.'", "'Kako ' . SITE_NAME . ' zbira, uporablja in varuje vaše osebne podatke.'"],
  ['This Privacy Policy describes how <?= e(SITE_NAME) ?> ("we", "us") collects and processes personal information when you use our website and services.', 'Ta politika zasebnosti opisuje, kako <?= e(SITE_NAME) ?> (»mi«) zbira in obdeluje osebne podatke, ko uporabljate naše spletno mesto in storitve.'],
  ['<h2>Information we collect</h2>', '<h2>Katere podatke zbiramo</h2>'],
  ['We may collect: name, email address, phone number, country of residence, IP address, and information you provide through forms or support requests.', 'Lahko zbiramo: ime, e-poštni naslov, telefonsko številko, državo prebivališča, naslov IP in podatke, ki jih navedete v obrazcih ali zahtevkih za podporo.'],
  ['<h2>How we use your information</h2>', '<h2>Kako uporabljamo vaše podatke</h2>'],
  ['To create and manage your account', 'Za ustvarjanje in upravljanje vašega računa'],
  ['To provide trading platform access and customer support', 'Za dostop do trgovalne platforme in podporo strankam'],
  ['To comply with legal and regulatory obligations', 'Za izpolnjevanje zakonskih in regulativnih obveznosti'],
  ['To improve our services and prevent fraud', 'Za izboljšanje storitev in preprečevanje goljufij'],
  ['<h2>Data security</h2>', '<h2>Varnost podatkov</h2>'],
  ['We implement technical and organisational measures including SSL encryption and access controls to protect your data.', 'Izvajamo tehnične in organizacijske ukrepe, vključno s šifriranjem SSL in nadzorom dostopa, da zaščitimo vaše podatke.'],
  ['<h2>Your rights</h2>', '<h2>Vaše pravice</h2>'],
  ['Depending on your jurisdiction, you may have rights to access, correct, or delete your personal data. Contact <?= e(SUPPORT_EMAIL) ?> to exercise these rights.', 'Glede na jurisdikcijo imate lahko pravico do dostopa, popravka ali izbrisa osebnih podatkov. Pišite na <?= e(SUPPORT_EMAIL) ?>, da uveljavite te pravice.'],
  ['<h1>Platforma access from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>', '<h1>Dostop do platforme od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>'],
  ['Full features from day one — charts, signals, and support included.', 'Vse funkcije od prvega dne — grafikoni, signali in podpora vključeni.'],
  ['Starter plan', 'Začetni načrt'],
  ["'Open ' . SITE_NAME . ' with a ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimum — full platform access, AI insights, and Podpora 24/7.'", "'Odprite ' . SITE_NAME . ' z najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — poln dostop do platforme, vpogledi UI in podpora 24/7.'"],
];

function apply(text) {
  let s = text;
  const byLen = (a, b) => b[0].length - a[0].length;
  for (const [from, to] of [...PHRASES, ...SHORT, ...BATCH2].sort(byLen)) {
    if (from && from !== to) s = s.split(from).join(to);
  }
  s = fixGlue(s);
  s = s.replace(/mailto: <\?=/g, 'mailto:<?=');
  s = s.replace(/svojo <?= e\(SITE_NAME\) ?> račun/g, 'svoj <?= e(SITE_NAME) ?> račun');
  s = s.replace(/SITE_NAME\) \?>račun/g, 'SITE_NAME) ?> račun');
  return s;
}

const skipNames = new Set(['config.php', 'keitaro.php', 'kclient.php', 'helpers.php']);
let n = 0;
for (const file of slFiles()) {
  if (skipNames.has(path.basename(file))) continue;
  const before = fs.readFileSync(file, 'utf8');
  const after = apply(before);
  if (after !== before) {
    fs.writeFileSync(file, after);
    n++;
  }
}

console.log(`proofread ${n} Slovenian files`);

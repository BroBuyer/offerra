/**
 * Finish Slovenian visible copy: leftover English/Italian and mixed glue.
 * Usage: node scripts/finish-sl-visible.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const SKIP_NAMES = new Set([
  'config.php',
  'helpers.php',
  'keitaro.php',
  'kclient.php',
  'LeadProcessor.php',
  'FormToken.php',
  'send.php',
  'visitor-geo.php',
  'form-token.php',
  'KeitaroClickVerifier.php',
]);

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
  for (const tpl of fs.readdirSync(path.join(ROOT, 'templates'), { withFileTypes: true })) {
    if (!tpl.isDirectory()) continue;
    const sl = path.join(ROOT, 'templates', tpl.name, 'langs', 'sl');
    if (fs.existsSync(sl)) files.push(...walk(sl));
  }
  return files.filter((f) => {
    if (SKIP_NAMES.has(path.basename(f))) return false;
    return /\.(php|js)$/i.test(f);
  });
}

/** Longer phrases first. */
const MAP = [
  // Screenshot / form
  ['Create free account', 'Ustvarite brezplačen račun'],
  ['<a href="privacy.php">Politika zasebnosti</a> and', '<a href="privacy.php">Politiko zasebnosti</a> in'],
  ['<a href="privacy.php">Politika zasebnosti</a> i\n', '<a href="privacy.php">Politiko zasebnosti</a> in\n'],
  ['Ready to trade on a platform built for clarity?', 'Pripravljeni trgovati na platformi, zasnovani za jasnost?'],
  ['Join private traders and businesses who buy, sell, and manage digital assets with confidence.', 'Pridružite se zasebnim trgovcem in podjetjem, ki z zaupanjem kupujejo, prodajajo in upravljajo digitalna sredstva.'],
  ["$form_heading = 'Enter your details below'", "$form_heading = 'Vnesite podatke spodaj'"],
  ["$form_heading = 'Enter your details'", "$form_heading = 'Vnesite svoje podatke'"],
  ["$form_heading = 'Claim your offer now'", "$form_heading = 'Izkoristite ponudbo zdaj'"],
  ["$form_heading = 'Register to unlock the offer'", "$form_heading = 'Registrirajte se in odklenite ponudbo'"],
  ['Join thousands of traders. Minimalni depozit', 'Pridružite se tisočim trgovcev. Najmanjši polog'],
  ['Why <?= e(SITE_NAME) ?>', 'Zakaj <?= e(SITE_NAME) ?>'],
  ['aria-label="<?= e(SITE_NAME) ?> home"', 'aria-label="<?= e(SITE_NAME) ?> — domov"'],
  ['aria-label="Footer navigation"', 'aria-label="Navigacija v nogi strani"'],
  ['<a href="privacy.php">Privacy</a>', '<a href="privacy.php">Zasebnost</a>'],
  ['<a href="conditions.php">Terms</a>', '<a href="conditions.php">Pogoji</a>'],
  ['$payment_context = \'account registration\'', "$payment_context = 'registracija računa'"],
  ['$payment_context = \'account funding and deposits\'', "$payment_context = 'financiranje računa in pologi'"],

  // Stats / features
  ['aria-label="Platforma statistics"', 'aria-label="Statistika platforme"'],
  ['Currencies available', 'Razpoložljive valute'],
  ['Trading volume', 'Obseg trgovanja'],
  ['<h3>Bank-grade security</h3>', '<h3>Varnost na ravni bank</h3>'],
  ['SSL encryption, 2FA, and secure fund handling protect your data and capital at every step.', 'Šifriranje SSL, 2FA in varno ravnanje s sredstvi varujeta vaše podatke in kapital na vsakem koraku.'],
  ['<h3>AI market signals</h3>', '<h3>Tržni signali UI</h3>'],
  ['Accurate, real-time insights help you spot opportunities and make informed decisions faster.', 'Natančni vpogledi v realnem času pomagajo prepoznati priložnosti in hitreje sprejemati odločitve.'],
  ['<h3>Automated trading</h3>', '<h3>Samodejno trgovanje</h3>'],
  ['AI-powered bots work around the clock to execute strategies efficiently while you stay in control.', 'Boti z umetno inteligenco delujejo ves čas in učinkovito izvajajo strategije, vi pa ohranite nadzor.'],
  ['<h3>Multi-market access</h3>', '<h3>Dostop do več trgov</h3>'],
  ['Trade crypto, forex, stocks, and commodities from a single unified environment.', 'Trgujte s kriptovalutami, forexom, delnicami in surovinami v enem okolju.'],
  ['<h3>Low-latency execution</h3>', '<h3>Izvedba z nizko zakasnitvijo</h3>'],
  ['Optimized infrastructure delivers stable order execution even during peak market activity.', 'Optimizirana infrastruktura omogoča stabilno izvedbo naročil tudi ob vrhuncu tržne aktivnosti.'],
  ['<h3>Clean interface</h3>', '<h3>Pregleden vmesnik</h3>'],
  ['Minimal design that reduces noise so you can focus on strategy, not navigation.', 'Minimalistična zasnova zmanjša šum, da se osredotočite na strategijo, ne na navigacijo.'],
  ['<h2>Trade Bitcoin, Ethereum, and more</h2>', '<h2>Trgujte z Bitcoinom, Ethereumom in več</h2>'],
  ['Real-time prices, advanced indicators, and a professional-grade view of the markets you care about.', 'Cene v realnem času, napredni indikatorji in profesionalni pregled trgov, ki vas zanimajo.'],
  ['Get market access', 'Dostop do trgov'],
  ['aria-label="Live market prices"', 'aria-label="Cene trgov v živo"'],
  ['<h2>From signup to your first trade in minutes</h2>', '<h2>Od prijave do prvega posla v nekaj minutah</h2>'],
  ['A guided path — no complexity, no guesswork.', 'Vodena pot — brez zapletenosti in ugibanja.'],
  ['Prijavite se with your details and get instant, secure access to the platform.', 'Prijavite se s svojimi podatki in takoj dobite varen dostop do platforme.'],
  ['Confirm your address to unlock the full trading environment.', 'Potrdite naslov, da odklenete celotno trgovalno okolje.'],
  ['Define risk level and preferences — go manual or let AI automation handle execution.', 'Določite raven tveganja in nastavitve — ročno ali naj avtomatizacija UI izvede naročila.'],
  ['Enter the market with live charts, tools, and support whenever you need it.', 'Vstopite na trg z grafikoni v živo, orodji in podporo, kadar koli jo potrebujete.'],
  ['Deposit with methods you already trust', 'Položite z načini, ki jim že zaupate'],
  ['Cards, e-wallets, and bank transfers — secured with SSL encryption.', 'Kartice, e-denarnice in bančna nakazila — zaščitena s šifriranjem SSL.'],
  ['Built on industry-standard partners', 'Zgrajena na uveljavljenih partnerskih standardih'],
  ['What traders are saying', 'Kaj pravijo trgovci'],
  ['Registration took minutes, fees are transparent, and support actually responds. Smooth, reliable experience — a platform I\'m happy to stick with.', 'Registracija je trajala nekaj minut, provizije so pregledne, podpora pa res odgovarja. Gladka, zanesljiva izkušnja — platforma, pri kateri ostanem.'],
  ['Independent trader', 'Neodvisni trgovec'],
  ['Finally tried crypto trading here — no regrets. Setup was quick, everything explained clearly. Solid choice especially if you\'re just getting started.', 'Končno sem tu preizkusil kripto trgovanje — brez obžalovanja. Nastavitev je bila hitra, vse jasno razloženo. Dobra izbira, zlasti če šele začenjate.'],
  ['Crypto enthusiast', 'Kripto navdušenec'],
  ['Stable and dependable. Account opening was simple, terms were clear, and the team knows their stuff. Surprisingly comfortable trading experience.', 'Stabilno in zanesljivo. Odprtje računa je bilo preprosto, pogoji jasni, ekipa pa pozna delo. Presenetljivo udobna izkušnja trgovanja.'],
  ['Digital assets operator', 'Operater digitalnih sredstev'],
  ['Trading no longer feels overwhelming. Simple signup, clear fees, and support when I need it. As a beginner, that makes all the difference.', 'Trgovanje ni več preobremenjujoče. Preprosta prijava, jasne provizije in podpora, ko jo potrebujem. Kot začetniku mi to pomeni vse.'],
  ['Private investor', 'Zasebni vlagatelj'],
  ['<h2>Common questions</h2>', '<h2>Pogosta vprašanja</h2>'],
  ['How do I get started?', 'Kako začnem?'],
  ['Create an account with your basic details, complete a short verification step, and deposit the minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You\'ll unlock the full platform — live charts, trading tools, and guided onboarding.', 'Ustvarite račun z osnovnimi podatki, opravite kratko preverjanje in položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Odklenili boste celotno platformo — grafikone v živo, trgovalna orodja in vodeno uvajanje.'],
  ['Is my money and data safe?', 'Ali sta moj denar in podatki varna?'],
  ['We use SSL encryption, two-factor authentication, and secure processing through trusted providers. Your personal data is handled under strict security policies at every level.', 'Uporabljamo šifriranje SSL, dvofaktorsko overjanje in varno obdelavo pri zaupanja vrednih ponudnikih. Osebni podatki so na vseh ravneh obravnavani po strogih varnostnih pravilih.'],
  ['When can I withdraw profits?', 'Kdaj lahko dvignem dobiček?'],
  ['Request withdrawals anytime from your dashboard. Processing usually takes 1–3 business days. Applicable fees and timelines are always shown upfront — no surprises.', 'Dvig zahtevajte kadar koli z nadzorne plošče. Obdelava običajno traja 1–3 delovne dni. Veljavne provizije in roki so vedno prikazani vnaprej — brez presenečenj.'],
  ['Do I need trading experience?', 'Ali potrebujem izkušnje s trgovanjem?'],
  ['Not at all. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace. Whether you\'re new or experienced, support is available 24/7.', 'Sploh ne. Vodeno uvajanje, preprosti vodiči in orodja z umetno inteligenco vam pomagajo učiti se v lastnem tempu. Ne glede na izkušnje je podpora na voljo 24/7.'],
  ['What markets can I trade?', 'Na katerih trgih lahko trgujem?'],
  ['Access cryptocurrencies, forex, global stocks, and commodities from one interface. Real-time data, integrated analytics, and support for both manual and automated strategies.', 'Do kriptovalut, forexa, svetovnih delnic in surovin dostopate iz enega vmesnika. Podatki v realnem času, vgrajena analitika ter podpora za ročne in samodejne strategije.'],
  ['Core capabilities at a glance', 'Ključne zmožnosti na prvi pogled'],
  ['AI trading engine', 'Sistem trgovanja z UI'],
  ['Advanced market analysis powered by machine learning', 'Napredna tržna analiza s strojnim učenjem'],
  ['Financiranje methods', 'Načini financiranja'],
  ['Credit cards, bank transfers, PayPal, e-wallets', 'Kreditne kartice, bančna nakazila, PayPal, e-denarnice'],
  ['Device access', 'Dostop z naprav'],
  ['Web, tablet, and mobile — fully responsive', 'Splet, tablica in telefon — povsem odzivno'],
  ['Signal accuracy', 'Natančnost signalov'],
  ['Up to 85% on supported AI strategies', 'Do 85 % pri podprtih strategijah UI'],
  ['Crypto, forex, stocks, commodities', 'Kripto, forex, delnice, surovine'],
  ['Fast account setup with guided verification', 'Hitra nastavitev računa z vodenim preverjanjem'],
  ['Professional 24/7 assistance —', 'Strokovna pomoč 24/7 —'],
  ['ocen · Na podlagi<strong>1,842</strong> ratings', 'ocen · Na podlagi <strong>1&nbsp;842</strong> ocen'],

  // Product
  ["'Explore ' . SITE_NAME . ' trading tools — real-time analytics, AI signals, multi-market access, and automated strategies.'", "'Raziščite orodja za trgovanje ' . SITE_NAME . ' — analitika v realnem času, signali UI, dostop do več trgov in samodejne strategije.'"],
  ["'Explore the ' . SITE_NAME . ' platform — live charts, AI insights, multi-market access, and automation controls.'", "'Raziščite platformo ' . SITE_NAME . ' — grafikoni v živo, vpogledi UI, dostop do več trgov in nadzor avtomatizacije.'"],
  ['Digital analytics built for traders', 'Digitalna analitika za trgovce'],
  ['One platform. Every market. Tools that keep up with you.', 'Ena platforma. Vsi trgi. Orodja, ki sledijo vašemu tempu.'],
  ['<h3>Real-time charts</h3>', '<h3>Grafikoni v realnem času</h3>'],
  ['Live price feeds, advanced indicators, and market depth across all supported assets.', 'Tokovi cen v živo, napredni indikatorji in globina trga za vsa podprta sredstva.'],
  ['<h3>AI signal engine</h3>', '<h3>Sistem signalov UI</h3>'],
  ['Machine-learning models surface high-probability setups with clear entry and exit context.', 'Modeli strojnega učenja pokažejo priložnosti z visoko verjetnostjo ter jasnim vstopom in izstopom.'],
  ['<h3>Automation suite</h3>', '<h3>Avtomatizacija</h3>'],
  ['Configure bots with custom risk parameters — set it and monitor, or trade manually side by side.', 'Nastavite bote z lastnimi parametri tveganja — nastavite in spremljajte ali trgujte ročno ob njih.'],
  ['<h3>Risk controls</h3>', '<h3>Nadzor tveganja</h3>'],
  ['Stop-loss, take-profit, and position sizing tools integrated into every workflow.', 'Orodja stop-loss, take-profit in velikosti pozicije so vgrajena v vsak potek dela.'],
  ['<h3>Portfolio tracker</h3>', '<h3>Sledilnik portfelja</h3>'],
  ['Unified view of holdings, P&amp;L, and allocation across crypto and traditional markets.', 'Enoten pregled imetja, dobička in izgube ter razporeditve po kripto in tradicionalnih trgih.'],
  ['<h3>Learning hub</h3>', '<h3>Središče za učenje</h3>'],
  ['Guided tutorials and market explainers for beginners and intermediate traders alike.', 'Vodeni vodiči in razlage trga za začetnike in trgovce srednje ravni.'],
  ['Tools built for clear trading', 'Orodja za pregledno trgovanje'],
  ['One platform for every session — charts, signals, risk controls, and automation without the clutter.', 'Ena platforma za vsako sejo — grafikoni, signali, nadzor tveganja in avtomatizacija brez nereda.'],
  ['<h3>Live charts</h3>', '<h3>Grafikoni v živo</h3>'],
  ['Streaming prices and indicators across the markets you want to trade.', 'Tokovi cen in indikatorjev na trgih, na katerih želite trgovati.'],
  ['<h3>AI insights</h3>', '<h3>Vpogledi UI</h3>'],
  ['Models highlight timing and trends so entries are clearer in fast markets.', 'Modeli poudarijo čas in trende, da so vstopi na hitrih trgih jasnejši.'],
  ['<h3>Automation tools</h3>', '<h3>Orodja avtomatizacije</h3>'],
  ['Rule-based bots with risk limits — run unattended or keep a manual override.', 'Boti s pravili in omejitvami tveganja — naj tečejo sami ali obdržite ročni nadzor.'],
  ['Stop-loss, take-profit, and position size built into the workflow — not bolted on later.', 'Stop-loss, take-profit in velikost pozicije so vgrajeni v potek — ne dodani naknadno.'],
  ['<h3>Portfolio view</h3>', '<h3>Pregled portfelja</h3>'],
  ['Holdings, profit &amp; loss, and allocation across crypto and traditional markets in one place.', 'Imetja, dobiček in izguba ter razporeditev po kripto in tradicionalnih trgih na enem mestu.'],
  ['<h3>Learning support</h3>', '<h3>Podpora pri učenju</h3>'],
  ['Short explainers and guided flows for people still getting comfortable with trading.', 'Kratke razlage in vodeni koraki za tiste, ki se s trgovanjem še spoznavajo.'],
  ['Try <?= e(SITE_NAME) ?>', 'Preizkusite <?= e(SITE_NAME) ?>'],

  // FAQ page
  ["'Answers about trading, features, security, fees, and getting started with ' . SITE_NAME . '.'", "'Odgovori o trgovanju, funkcijah, varnosti, provizijah in začetku z ' . SITE_NAME . '.'"],
  ['Everything you need to know before you start.', 'Vse, kar morate vedeti pred začetkom.'],
  ['Create an account, verify your email, and deposit a minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You\'ll get immediate access to charts, tools, and onboarding guides.', 'Ustvarite račun, potrdite e-pošto in položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Takoj dobite dostop do grafikonov, orodij in vodičev za začetek.'],
  ['Is <?= e(SITE_NAME) ?> safe and legitimate?', 'Ali je <?= e(SITE_NAME) ?> varna in zakonita?'],
  ['We use industry-standard SSL encryption, 2FA, and verified payment processors. Varnost is built into every layer of the platform.', 'Uporabljamo standardno šifriranje SSL, 2FA in preverjene plačilne procesorje. Varnost je vgrajena v vsako plast platforme.'],
  ['What are the fees?', 'Kakšne so provizije?'],
  ['Fees are transparent and displayed before you confirm any transaction. No hidden charges on deposits or withdrawals.', 'Provizije so pregledne in prikazane pred potrditvijo vsake transakcije. Ni skritih stroškov pri pologih ali dvigih.'],
  ['Can I use automated trading?', 'Ali lahko uporabljam samodejno trgovanje?'],
  ['Yes. Configure AI-assisted bots with your risk preferences, or trade manually — switch anytime.', 'Da. Nastavite bote z umetno inteligenco glede na tveganje ali trgujte ročno — preklopite kadar koli.'],
  ['How do withdrawals work?', 'Kako delujejo dvigi?'],
  ['Request a withdrawal from your dashboard. Processing typically takes 1–3 business days depending on your payment method.', 'Dvig zahtevajte z nadzorne plošče. Obdelava običajno traja 1–3 delovne dni, glede na način plačila.'],

  // Contacts / offer
  ["'Kontakt ' . SITE_NAME . ' support or our business team. We are available 24/7.'", "'Kontaktirajte podporo ' . SITE_NAME . ' ali poslovno ekipo. Na voljo smo 24/7.'"],
  ["We're here to help", 'Tukaj smo, da pomagamo'],
  ['Professional support around the clock for account, trading, and technical questions.', 'Strokovna podpora ves dan za vprašanja o računu, trgovanju in tehniki.'],
  ['For general inquiries and account assistance:', 'Za splošna vprašanja in pomoč pri računu:'],
  ['Most requests are answered within a few hours. Urgent trading issues are prioritised.', 'Večina zahtevkov dobi odgovor v nekaj urah. Nujna trgovalna vprašanja imajo prednost.'],
  ['Ready to start?', 'Pripravljeni začeti?'],
  ["'Choose your ' . SITE_NAME . ' plan — start with a ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimum deposit and unlock the fulltrgovalna platforma.'", "'Izberite paket na ' . SITE_NAME . ' — začnite z najmanjšim pologom ' . MIN_DEPOSIT . ' ' . CURRENCY . ' in odklenite celotno trgovalno platformo.'"],
  ['Get your portfolio tracker — free with signup', 'Sledilnik portfelja — brezplačno ob registraciji'],
  ['Start with <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Scale when you\'re ready.', 'Začnite z <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Razširite, ko boste pripravljeni.'],
  ['minimum deposit · Full platform · AI signals · Podpora 24/7', 'najmanjši polog · Celotna platforma · Signali UI · Podpora 24/7'],

  // Thanks / Italian leftovers
  ["page_title_lead('Thank You')", "page_title_lead('Hvala')"],
  ["'Your ' . SITE_NAME . ' account request has been received.'", "'Vaša zahteva za račun ' . SITE_NAME . ' je bila prejeta.'"],
  ["You're all set", 'Vse je pripravljeno'],
  ['Thanks for registering on <?= e(SITE_NAME) ?>.', 'Hvala, da ste se registrirali na <?= e(SITE_NAME) ?>.'],
  ['A <?= e(SITE_NAME) ?> manager will contact you shortly to finish setting up your account. Keep your phone nearby.', 'Upravitelj <?= e(SITE_NAME) ?> vas bo kmalu kontaktiral, da doključimo nastavitev računa. Telefon imejte pri roki.'],
  ['Tutto pronto!', 'Vse je pripravljeno!'],
  ['Grazie per esserti registrato su <?= e(SITE_NAME) ?>.', 'Hvala, da ste se registrirali na <?= e(SITE_NAME) ?>.'],
  ['Il nostro team ti contatterà a breve per completare la configurazione del tuo account. Tieni il telefono a portata di mano.', 'Naša ekipa vas bo kmalu kontaktirala, da doključimo nastavitev računa. Telefon imejte pri roki.'],
  ['Inserisci un numero di telefono valido', 'Vnesite veljavno telefonsko številko'],

  // Footer / legal
  ['<?= e(SITE_NAME) ?> is not responsible for any loss or damage arising from the use of information on this site.', '<?= e(SITE_NAME) ?> ne odgovarja za izgube ali škodo, nastalo z uporabo informacij na tej strani.'],
  ['Trading financial markets involves risk. Only invest funds you can afford to lose. FX, CFDs, and cryptocurrencies', 'Trgovanje na finančnih trgih prinaša tveganje. Vlagajte le sredstva, ki si jih lahko privoščite izgubiti. FX, CFD-ji in kriptovalute'],
  ['may not be suitable for all investors. Consider seeking advice from a qualified professional before trading.', 'morda niso primerni za vse vlagatelje. Pred trgovanjem se posvetujte s kvalificiranim strokovnjakom.'],
  ['This Politika zasebnosti describes how <?= e(SITE_NAME) ?> ("we", "us") collects and processes personal information when you use our website and services.', 'Ta politika zasebnosti opisuje, kako <?= e(SITE_NAME) ?> («mi») zbira in obdeluje osebne podatke, ko uporabljate naše spletno mesto in storitve.'],
  ['To providetrgovalna platforma access and customer support', 'Za dostop do trgovalne platforme in podporo strankam'],
  ['Depending on your jurisdiction, you may have rights to access, correct, or delete your personal data. Kontakt <?= e(SUPPORT_EMAIL) ?> to exercise these rights.', 'Glede na jurisdikcijo imate lahko pravico do dostopa, popravka ali izbrisa osebnih podatkov. Pišite na <?= e(SUPPORT_EMAIL) ?>, da uveljavite te pravice.'],
  ['Questions about this policy? E-pošta', 'Vprašanja o tej politiki? Pišite na'],
  ["'Read the terms and conditions for using the ' . SITE_NAME . 'trgovalna platforma and website.'", "'Preberite pogoje uporabe trgovalne platforme in spletnega mesta ' . SITE_NAME . '.'"],
  ['By accessing <?= e(SITE_NAME) ?> you agree to these Pogoji uporabe. If you do not agree, please do not use our services.', 'Z dostopom do <?= e(SITE_NAME) ?> sprejemate te pogoje uporabe. Če se ne strinjate, storitev ne uporabljajte.'],

  // Head / schema
  ["'Trade smarter with ' . SITE_NAME . ' — real-time analytics, AI signals, and a clean platform built for crypto, forex, and global markets.'", "'Trgujte pametneje z ' . SITE_NAME . ' — analitika v realnem času, signali UI in pregledna platforma za kripto, forex in svetovne trge.'"],
  ["'Trade crypto, forex, and multi-asset markets on ' . SITE_NAME . ' — live terminal UI, AI-assisted signals, and transparent funding.'", "'Trgujte s kriptovalutami, forexom in več sredstvi na ' . SITE_NAME . ' — terminal v živo, signali UI in pregledno financiranje.'"],
  [' |Trgovalna platforma AI', ' | Trgovalna platforma z UI'],
  ["'Trgovalna platforma z umetno inteligenco for crypto, forex, and global markets.'", "'Trgovalna platforma z umetno inteligenco za kripto, forex in svetovne trge.'"],
  ["'Smarttrgovalna platforma with real-time market analysis and AI-assisted signals.'", "'Pametna trgovalna platforma z analizo trgov v realnem času in signali UI.'"],
  ["'@type' => 'Ponudba'", "'@type' => 'Offer'"],
  ['Create an account in minutes, complete a short verification step, and fund your account with a minimum deposit of \' . MIN_DEPOSIT . \' \' . CURRENCY . \'. You will unlock the full platform including live charts and trading tools.', 'Ustvarite račun v minutah, opravite kratko preverjanje in napolnite račun z najmanjšim pologom \' . MIN_DEPOSIT . \' \' . CURRENCY . \'. Odklenili boste celotno platformo z grafikoni v živo in trgovalnimi orodji.'],
  ['We protect accounts with SSL encryption, two-factor authentication, and secure fund handling through trusted payment providers. Your personal data is managed under strict security policies.', 'Račune varujemo s šifriranjem SSL, dvofaktorskim overjanjem in varnim ravnanjem s sredstvi pri zaupanja vrednih ponudnikih. Osebni podatki so obravnavani po strogih varnostnih pravilih.'],
  ['Dvigi can be requested anytime from your account dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown upfront.', 'Dvig lahko zahtevate kadar koli z nadzorne plošče. Obdelava običajno traja 1–3 delovne dni, glede na način. Provizije in roki so prikazani vnaprej.'],
  ['No prior experience is required. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace with Podpora 24/7 available.', 'Predhodne izkušnje niso potrebne. Vodeno uvajanje, preprosti vodiči in orodja UI vam pomagajo učiti se v lastnem tempu. Podpora je na voljo 24/7.'],
  ["'Kako začeti trgovati z' . $site", "'Kako začeti trgovati z ' . $site"],
  ["'Položite najmanj' . MIN_DEPOSIT . ' ' . CURRENCY . 'prek bančnega nakazila", "'Položite najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prek bančnega nakazila"],
  [' mobile trading interface with live BTC/USDT cryptocurrency chart and portfolio tools', ' — mobilni vmesnik za trgovanje z grafikonom BTC/USDT v živo in orodji portfelja'],
  [' | AI Trading Platform — mobile chart view', ' | trgovalna platforma z UI — pogled grafikona na telefonu'],
  ["'How to start trading with ' . $site", "'Kako začeti trgovati z ' . $site"],
  ["'Create your account'", "'Ustvarite račun'"],
  ["'Sign up with your basic details and get secure access to the platform.'", "'Prijavite se z osnovnimi podatki in dobite varen dostop do platforme.'"],
  ["'Verify your email'", "'Potrdite e-pošto'"],
  ["'Confirm your email to unlock full platform access.'", "'Potrdite e-pošto, da odklenete polni dostop do platforme.'"],
  ["'Fund your account'", "'Napolnite račun'"],
  ["'Deposit a minimum of ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bank transfer, card, or e-wallet.'", "'Položite najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . ' z bančnim nakazilom, kartico ali e-denarnico.'"],
  ["'Set your strategy'", "'Določite strategijo'"],
  ["'Choose risk level and trading preferences — manual or automated.'", "'Izberite raven tveganja in nastavitve — ročno ali samodejno.'"],
  ["'Start trading'", "'Začnite trgovati'"],
  ["'Enter the market with confidence using real-time data and AI insights.'", "'Vstopite na trg s podatki v realnem času in vpogledi UI.'"],

  // Payment / partners
  ['$payment_context = $payment_context ?? \'secure checkout\'', "$payment_context = $payment_context ?? 'varno plačilo'"],
  ['Visa — accepted payment method on ', 'Visa — sprejeto plačilo na '],
  ['Mastercard — accepted payment method on ', 'Mastercard — sprejeto plačilo na '],
  ['PayPal — accepted payment method on ', 'PayPal — sprejeto plačilo na '],
  ['Apple Pay — accepted payment method on ', 'Apple Pay — sprejeto plačilo na '],
  ['Google Pay — accepted payment method on ', 'Google Pay — sprejeto plačilo na '],
  ['Bančno nakazilo and SEPA — accepted on ', 'Bančno nakazilo in SEPA — sprejeto na '],
  ['Bank transfer and SEPA — accepted on ', 'Bančno nakazilo in SEPA — sprejeto na '],
  ['aria-label="Accepted payment methods for <?= e($payment_context) ?>"', 'aria-label="Sprejeti načini plačila za <?= e($payment_context) ?>"'],
  ['Varno plačilos accepted', 'Sprejeta varna plačila'],
  ['256-bit SSL encryption — secure data transfer on <?= e(SITE_NAME) ?>', '256-bitno šifriranje SSL — varen prenos podatkov na <?= e(SITE_NAME) ?>'],
  ['Coinbase — technology infrastructure partner', 'Coinbase — partner za tehnološko infrastrukturo'],
  ['TradingView — market data partner', 'TradingView — partner za tržne podatke'],
  ['MetaTrader —trgovalna platforma partner', 'MetaTrader — partner za trgovalno platformo'],
  ['Visa — payment processing partner', 'Visa — partner za obdelavo plačil'],
  ['Mastercard — payment processing partner', 'Mastercard — partner za obdelavo plačil'],
  ['PayPal — payment processing partner', 'PayPal — partner za obdelavo plačil'],
  ['Global banking network partner', 'Partner globalnega bančnega omrežja'],
  ['Financial security compliance partner', 'Partner za finančno varnost in skladnost'],
  ['trusted infrastructure and payment partners', 'zaupanja vredni partnerji za infrastrukturo in plačila'],
  ['Deloitte — audit and advisory partner', 'Deloitte — partnerski revizijski in svetovalni partner'],

  // Noctra leftovers
  ['Follow Bitcoin, Ethereum, and other major pairs in a clear market panel —', 'Spremljajte Bitcoin, Ethereum in druge glavne pare na pregledni plošči —'],
  ['then open your account and place your first trade.', 'nato odprite račun in oddajte prvo naročilo.'],
  ['Clear charts.<br>Ready to trade.', 'Jasni grafikoni.<br>Pripravljeni za trgovanje.'],
  ['A mobile-friendly trading screen with live charts, profit &amp; loss,', 'Trgovalni zaslon za telefon z grafikoni v živo, dobičkom in izgubo'],
  ['and simple one-tap orders — easy to understand from your first login.', 'ter preprostimi naročili z enim tapom — razumljivo že od prve prijave.'],
  ['Live charts and market prices', 'Grafikoni v živo in cene trgov'],
  ['Varno account panel with 2FA', 'Varna plošča računa z 2FA'],
  ['Open the platform', 'Odprite platformo'],
  ['Varnost, speed, and clear tools — without a crowded screen.', 'Varnost, hitrost in jasna orodja — brez prenatrpanega zaslona.'],
  ['SSL encryption, two-factor login, and protected fund flows keep your money and data safer.', 'Šifriranje SSL, dvofaktorska prijava in zaščiteni tokovi sredstev varujejo denar in podatke.'],
  ['Helpful signals that point out timing and trends — useful when prices move quickly.', 'Koristni signali za čas in trende — uporabni, ko se cene hitro premikajo.'],
  ['Optional trading bots can follow your rules around the clock — you stay in control.', 'Izbirni trgovalni boti lahko ves čas sledijo vašim pravilom — nadzor ostane pri vas.'],
  ['Crypto, forex, stocks, and commodities from one simple platform.', 'Kripto, forex, delnice in surovine na eni preprosti platformi.'],
  ['Built for reliable order placement even when markets are busy.', 'Zasnovano za zanesljiva naročila tudi, ko so trgi zasedeni.'],
  ['Less visual noise — more space for the chart and your next order.', 'Manj vizualnega šuma — več prostora za grafikon in naslednje naročilo.'],
  ['Five steps to your first trade', 'Pet korakov do prvega posla'],
  ['A clear path from signup to live markets.', 'Jasna pot od prijave do trgov v živo.'],
  ['Predloži your details and get secure access to the platform.', 'Oddajte podatke in dobite varen dostop do platforme.'],
  ['Verify your address to unlock the full trading environment.', 'Potrdite naslov, da odklenete celotno trgovalno okolje.'],
  ['Trade manually or use AI-assisted tools with clear limits you set.', 'Trgujte ročno ali uporabite orodja UI z jasnimi omejitvami, ki jih nastavite.'],
  ['Use charts, tools, and Podpora 24/7 whenever you need help.', 'Uporabite grafikone, orodja in podporo 24/7, kadar koli potrebujete pomoč.'],
  ['Deposit with methods you already know', 'Položite z načini, ki jih že poznate'],
  ['Cards, wallets, and bank transfers — encrypted end to end.', 'Kartice, denarnice in bančna nakazila — šifrirana od konca do konca.'],
  ['Signup was quick, fees were clear, and support answered. Feels like a platform I can stick with.', 'Prijava je bila hitra, provizije jasne, podpora pa je odgovorila. To je platforma, pri kateri ostanem.'],
  ['Tried crypto here after bouncing between apps — setup was clear and the chart layout finally makes sense.', 'Kripto sem tu preizkusil po skakanju med aplikacijami — nastavitev je bila jasna, postavitev grafikona pa končno smiselna.'],
  ['Orders go through reliably, terms are in plain language, and the team knows the product. A solid platform.', 'Naročila gredo zanesljivo skozi, pogoji so v preprostem jeziku, ekipa pa pozna izdelek. Trdna platforma.'],
  ['As a beginner I needed clarity more than fireworks. Signup, fees, and help when stuck — that was enough.', 'Kot začetnik sem potreboval jasnost, ne ognjemeta. Prijava, provizije in pomoč, ko obtičim — to je zadostovalo.'],
  ['Before you fund your account', 'Preden napolnite račun'],
  ['Create an account, complete a short verification, and deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.', 'Ustvarite račun, opravite kratko preverjanje in položite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.'],
  ['That unlocks charts, tools, and guided onboarding.', 'To odkleni grafikone, orodja in vodeno uvajanje.'],
  ['How is my money and data protected?', 'Kako sta zaščitena moj denar in podatki?'],
  ['We use SSL encryption, two-factor authentication, and trusted payment providers under strict data policies.', 'Uporabljamo šifriranje SSL, dvofaktorsko overjanje in zaupanja vredne ponudnike plačil po strogih pravilih o podatkih.'],
  ['Request payouts anytime from the dashboard. Most methods settle in 1–3 business days with fees shown upfront.', 'Izplačila zahtevajte kadar koli z nadzorne plošče. Večina načinov se poravna v 1–3 delovnih dneh, provizije so prikazane vnaprej.'],
  ['No. Guided steps and AI-assisted tools help you learn at your pace, with Podpora 24/7 available.', 'Ne. Vodeni koraki in orodja UI vam pomagajo učiti se v lastnem tempu, podpora 24/7 je na voljo.'],
  ['Cryptocurrencies, forex, global stocks, and commodities — manual or automated — from one interface.', 'Kriptovalute, forex, svetovne delnice in surovine — ročno ali samodejno — iz enega vmesnika.'],
  ['Market analysis with machine-learning insights', 'Tržna analiza z vpogledi strojnega učenja'],
  ['Fast setup with guided verification', 'Hitra nastavitev z vodenim preverjanjem'],
  ['Ready for a clearer way to trade?', 'Pripravljeni na preglednejši način trgovanja?'],
  ['Join traders who want live markets, clear fees, and a platform that stays easy to use.', 'Pridružite se trgovcem, ki želijo trge v živo, jasne provizije in platformo, ki ostane preprosta za uporabo.'],

  // Validation
  ["'Enter a valid phone number'", "'Vnesite veljavno telefonsko številko'"],
  ["'Invalid country code'", "'Neveljavna koda države'"],
  ["'The phone number is too short'", "'Telefonska številka je prekratka'"],
  ["'The phone number is too long'", "'Telefonska številka je predolga'"],
  ["'Enter your phone number'", "'Vnesite telefonsko številko'"],
  ["'Session expired. Please reload the page and try again.'", "'Seja je potekla. Ponovno naložite stran in poskusite znova.'"],
  ["'Something went wrong. Please try again later.'", "'Nekaj je šlo narobe. Poskusite znova pozneje.'"],

  // Dark-terminal noctra index remaining
  ['Dark market terminal for crypto, forex, and multi-asset trading with AI-assisted signals.', 'Temni tržni terminal za kripto, forex in trgovanje z več sredstvi s signali UI.'],
  ['Exchange-style trading terminal with live markets, portfolio tools, and AI-assisted execution context.', 'Terminal v slogu borze s trgi v živo, orodji portfelja in kontekstom izvedbe UI.'],
  ['Still have questions?', 'Imate še vprašanja?'],
  ['Kontakt support', 'Kontaktirajte podporo'],
  ['doključimo nastavitev računa', 'dokončamo nastavitev računa'],
  ['<h2>Risk disclosure</h2>', '<h2>Razkritje tveganja</h2>'],
  ['<h2>Contact</h2>', '<h2>Kontakt</h2>'],
  ['Portfolio balance at a glance', 'Stanje portfelja na prvi pogled'],
  ['What you get with <?= e(SITE_NAME) ?>', 'Kaj dobite z <?= e(SITE_NAME) ?>'],
  ['What traders say', 'Kaj pravijo trgovci'],
  ['How long do withdrawals take?', 'Kako dolgo trajajo dvigi?'],
  ['Do I need prior trading experience?', 'Ali potrebujem predhodne izkušnje s trgovanjem?'],
  ['Which markets are available?', 'Kateri trgi so na voljo?'],
  ['Is <?= e($brand) ?> safe?', 'Ali je <?= e($brand) ?> varna?'],
  ['<?= e($brand) ?> uses SSL, 2FA, and verified payment processors. Trading still involves a risk of losing capital.', '<?= e($brand) ?> uporablja SSL, 2FA in preverjene plačilne procesorje. Trgovanje še vedno prinaša tveganje izgube kapitala.'],
  ['What are <?= e($brand) ?> fees?', 'Kakšne so provizije <?= e($brand) ?>?'],
  ['<?= e($brand) ?> shows fees before you confirm a transaction. No hidden charges on deposits or withdrawals beyond what the <?= e($brand) ?> screen lists.', '<?= e($brand) ?> pred potrditvijo transakcije pokaže provizije. Ni skritih stroškov pri pologih ali dvigih razen tistih, ki so navedeni na zaslonu <?= e($brand) ?>.'],
  ['Can I use automation on <?= e($brand) ?>?', 'Ali lahko na <?= e($brand) ?> uporabljam avtomatizacijo?'],
  ['Yes. Configure <?= e($brand) ?> AI-assisted bots with your risk preferences, or trade manually — switch anytime inside <?= e($brand) ?>.', 'Da. Nastavite bote <?= e($brand) ?> z umetno inteligenco glede na tveganje ali trgujte ročno — preklopite kadar koli v <?= e($brand) ?>.'],
  ['How do <?= e($brand) ?> withdrawals work?', 'Kako delujejo dvigi na <?= e($brand) ?>?'],
  ['Request a withdrawal from the <?= e($brand) ?> dashboard. Processing typically takes 1–3 business days depending on the method.', 'Dvig zahtevajte z nadzorne plošče <?= e($brand) ?>. Obdelava običajno traja 1–3 delovne dni, glede na način.'],
  ['Does <?= e($brand) ?> work on mobile?', 'Ali <?= e($brand) ?> deluje na telefonu?'],
  ['Yes. <?= e($brand) ?> is responsive. Watchlists and alerts stay in sync between phone and browser.', 'Da. <?= e($brand) ?> je odziven. Seznami spremljanja in opozorila ostanejo usklajeni med telefonom in brskalnikom.'],
  ['How do I contact <?= e($brand) ?>?', 'Kako stopim v stik z <?= e($brand) ?>?'],
  [', security, fees, markets, and how to open an account.', ', varnost, provizije, trgi in kako odpreti račun.'],
  ["'Answers on funding, security, fees, and getting started on ' . SITE_NAME . '.'", "'Odgovori o financiranju, varnosti, provizijah in začetku na ' . SITE_NAME . '.'"],
  ['Straight answers on access, safety, and how the platform works.', 'Neposredni odgovori o dostopu, varnosti in delovanju platforme.'],
  ['Create an account, verify email, and deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Charts, tools, and onboarding unlock immediately after.', 'Ustvarite račun, potrdite e-pošto in položite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafikoni, orodja in uvajanje se odklenijo takoj zatem.'],
  ['How is <?= e(SITE_NAME) ?> secured?', 'Kako je <?= e(SITE_NAME) ?> zaščitena?'],
  ['SSL encryption, two-factor authentication, and verified payment processors sit under every account action.', 'Šifriranje SSL, dvofaktorsko overjanje in preverjeni plačilni procesorji spremljajo vsako dejanje na računu.'],
  ['What about fees?', 'Kaj pa provizije?'],
  ['Fees show before you confirm. No surprise charges on deposits or withdrawals.', 'Provizije so prikazane pred potrditvijo. Ni presenečenj pri pologih ali dvigih.'],
  ['Can I automate trades?', 'Ali lahko avtomatiziram posle?'],
  ['Yes — set up AI-assisted bots with risk limits, or stay fully manual and switch anytime.', 'Da — nastavite bote UI z omejitvami tveganja ali ostanite povsem ročni in preklopite kadar koli.'],
  ['Request from the dashboard. Most methods settle in 1–3 business days depending on the payment method.', 'Zahtevajte z nadzorne plošče. Večina načinov se poravna v 1–3 delovnih dneh, glede na način plačila.'],
  ['Our team will reach out shortly to finish setting up your account — keep your phone nearby.', 'Naša ekipa vas bo kmalu kontaktirala, da dokončamo nastavitev računa. Telefon imejte pri roki.'],
  ['$site . \' is an AI-powered trading platform for \'', '$site . \' je trgovalna platforma z umetno inteligenco za \''],
  [' covering crypto, forex, and global markets.', ' in pokriva kripto, forex ter svetovne trge.'],
  ['$site . \' — AI trading platform for \'', '$site . \' — trgovalna platforma z UI za \''],
  [' with real-time market analysis and assisted signals.', ' z analizo trgov v realnem času in podprtimi signali.'],
  ["'What is ' . $site . ' and how does it work?'", "'Kaj je ' . $site . ' in kako deluje?'"],
  [' is an AI-assisted trading platform that analyses financial markets in real time and highlights setups with alerts and risk tools. Create an account, complete verification, and fund from ', ' je trgovalna platforma z umetno inteligenco, ki v realnem času analizira trge in označi priložnosti z opozorili ter orodji za tveganje. Ustvarite račun, opravite preverjanje in napolnite od '],
  ["'Are my data and funds handled securely on ' . $site . '?'", "'Ali so moji podatki in sredstva na ' . $site . ' varno obravnavani?'"],
  [' protects accounts with SSL encryption, two-factor authentication, and documented deposit and withdrawal steps. Trading still involves a risk of losing capital.', ' varuje račune s šifriranjem SSL, dvofaktorskim overjanjem ter dokumentiranimi koraki pologa in dviga. Trgovanje še vedno prinaša tveganje izgube kapitala.'],
  ["'Dvigi can be requested anytime from the ' . $site . ' dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown on ' . $site . ' before you confirm.'", "'Dvig lahko zahtevate kadar koli z nadzorne plošče ' . $site . '. Obdelava običajno traja 1–3 delovne dni. Provizije in roki so na ' . $site . ' prikazani pred potrditvijo.'"],
  ["'No. ' . $site . ' guides registration, deposit, and basic navigation for ' . market_audience() . '. Advanced tools stay available when you are ready. Support is available 24/7.'", "'Ne. ' . $site . ' vodi registracijo, polog in osnovno navigacijo za ' . market_audience() . '. Napredna orodja ostanejo na voljo, ko ste pripravljeni. Podpora je na voljo 24/7.'"],
  [' does not guarantee returns. Results depend on capital, strategy, volatility, and how you manage risk.', ' ne jamči donosov. Rezultati so odvisni od kapitala, strategije, volatilnosti in tega, kako upravljate tveganje.'],
  [' covers digital assets and multi-market instruments in one dashboard, with alerts and assisted automation for ', ' pokriva digitalna sredstva in instrumente več trgov na eni plošči, z opozorili in podprto avtomatizacijo za '],
  ["'Register on ' . $site", "'Registracija na ' . $site"],
  ["'Sign up with your name, email, and phone to create a ' . $site . ' account.'", "'Prijavite se z imenom, e-pošto in telefonom ter ustvarite račun ' . $site . '.'"],
  ["'Verify the ' . $site . ' account'", "'Preverite račun ' . $site"],
  ["'Finish guided verification and set risk preferences.'", "'Opravite vodeno preverjanje in nastavite preference tveganja.'"],
  ["'Trade in the ' . $site . ' desk'", "'Trgujte na mizi ' . $site"],
  ["'Use live charts, tickets, and support inside ' . $site . '.'", "'Uporabite grafikone v živo, naročila in podporo v ' . $site . '.'"],
  ["'Which markets are available on ' . $site . '?'", "'Kateri trgi so na voljo na ' . $site . '?'"],
];

function apply(s) {
  for (const [from, to] of MAP) {
    if (to === 'KEEP') continue;
    if (s.includes(from)) s = s.split(from).join(to);
  }
  return s;
}

let changed = 0;
for (const file of slFiles()) {
  const before = fs.readFileSync(file, 'utf8');
  const after = apply(before);
  if (after !== before) {
    fs.writeFileSync(file, after);
    changed++;
    console.log('updated', path.relative(ROOT, file));
  }
}
console.log('files_changed', changed);

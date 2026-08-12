<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI og utførelse i sanntid | Offisiell side');
$page_description = SITE_NAME . ' — AI-teknologi som analyserer markeder og utfører ordrer i sanntid, med en personlig analytiker ved din side for å bygge en ny inntektskilde.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Hopp til innhold</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Hoved">
 <a href="#platform">Produkt</a>
 <a href="#how">Sådan virker det.</a>
 <a href="#markets">Markeder i sanntid</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Åpne kontoen din</a>
 <button class="nav-toggle" aria-label="Åpne meny" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">AI i sanntid + menneskelig analyse</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span>AI i sanntid + menneskelig analyse</h1>
 <p class="hero-sub"> — invester nå og se kapitalen din vokse</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Reguleret</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Adskilte midler</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 kunder</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> vurdering</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Beskyttet af SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Support 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Hurtig udførelse</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Start nå — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Åpne kontoen din</h2>
 <p class="sub">Kom i gang på noen minutter.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Jeg vil starte';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Nøgletal">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktive brugere</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Handelsvolumen</span></div>
 <div class="stat"><b>99,1%</b><span>Signaltilgængelighed</span></div>
 <div class="stat"><b>24/7</b><span>Support</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Indeni <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Følg kontoen din i sanntid</h2>
 <p class="lede">Hver ordre udført af din analytiker logges her — indgange, udgange og verificerede resultater på hvert par, streamet live.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Candlestick-grafer og dybde i sanntid på enhver enhed</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ordreafgivelse med ét tryk og øjeblikkelig bekræftelse</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlister og kursalarmer der følger dig</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Start nå</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobil handel med kryptografer i sanntid</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow"> — mobil trading med kryptografer i sanntid</span><h2 id="features-title">Alt du behøver på én hurtig platform.</h2><p class="lede">Ingen grafer at overvåge, ingen ordrer at time. Motoren i <?= e(SITE_NAME) ?> overvåger ordrebøger i sanntid på kryptobørser, globale aktie-API'er og de vigtigste forex-par — og afgiver ordrer i det øjeblik modellerne finder et gunstigt setup.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Udførelse på brøkdele af et sekund på hvert tilsluttet marked</h3><p><?= e(SITE_NAME) ?> opretholder API-forbindelser med lav latens til hver understøttet børs. Når modellen affyrer et signal, routes, udføres og logges ordren på dit dashboard før næste tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktiv 24 timer i døgnet i alle sessioner</h3><p>Kryptomarkedet sover aldrig, og det gør motoren i <?= e(SITE_NAME) ?> heller ikke. Den bliver ved med at scanne par i weekender og på helligdage, så du aldrig misser et vindue.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Rapporter i flere valutaer</h3><p>Hver saldo, hver ordre, hver udbetaling vises i din lokale valuta. Intet skjult konverteringstrin.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Adskilt kapital</h3><p>Dine midler forbliver på din egen konto. <?= e(SITE_NAME) ?> har aldrig forvaltningen — motoren har kun tilladelse til at route ordrer.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Sikkerhed på bankniveau</h3><p>TLS-kryptering på hele platformen, tofaktorgodkendelse som standard og kvartalsvise tredjepartsaudits af infrastrukturen. Handelskvitteringer registreret på blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tre aktivklasser, én platform</h3><p>De fleste detailplatforme er begrænset til ét marked. <?= e(SITE_NAME) ?> handler krypto, børsnoterede aktier og vigtige forex-par i samme dashboard.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Forudindstillede risikogrænser på hver position</h3><p>Stop-loss, maksimalt drawdown og kapitalallokeringsgrænser konfigureres pr. aktivklasse. Motoren lukker automatisk enhver handel der krydser en grænse, og begivenheden logges i din revisionshistorik.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Markeder i sanntid</span>
 <h2 id="markets-title">Handl Bitcoin, Ethereum og mere</h2>
 <p class="lede">Priser i sanntid, avancerede indikatorer og et professionelt overblik over de markeder der betyder noget for dig.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Jeg vil have markedsadgang</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Markeder</span><span class="mkt-live"><i></i>Live</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Sådan virker det</span><h2 id="how-title">Sådan virker det.</h2><p class="lede">Avanceret teknologi og en ægte menneskelig analytiker, der arbejder sammen i sanntid for at hjælpe deg med at bygge en ny indtægtskilde — med vejledning ved hvert trin.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Opret din konto</h3><p>Tilmeld deg på få minutter med kun din e-mail.</p></div>
 <div class="step"><div class="n">2</div><h3>Bekræft din e-mail</h3><p>Bekræft din adresse for at beskytte din konto.</p></div>
 <div class="step"><div class="n">3</div><h3>Innskudd på din konto</h3><p>Tilføj midler fra <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> på din måde.</p></div>
 <div class="step"><div class="n">4</div><h3>Sæt din strategi</h3><p>Vælg dine mål; din analytiker tilpasser planen.</p></div>
 <div class="step"><div class="n">5</div><h3>Begynd at handle</h3><p>Følg guidede signaler og vækst i dit eget tempo.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Innskuddinger</span><h2 id="payment-title">Innskudd med metoder du allerede kender</h2><p class="lede">Innskudd og hæv via sikre, velkendte kanaler — uden skjulte gebyrer.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bankoverføring</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Hvad medlemmerne siger</span><h2 id="reviews-title">Hvad vår investorer siger</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Min analytiker forklarede alt klart. Jeg satte mine mål én gang, og nu følger jeg præcis hvordan min kapital vokser — uden at blive nervøs ved hver bevægelse.“</p><div class="who"><div class="ini">A</div><div><b>Anna Hansen</b><span>Oslo</span></div></div></div>
 <div class="card"><p>„Jeg havde aldrig investeret før — min analytiker klarede strategien og forklarede hvert trin. Ingen tomme løfter, intet pres, og udbetalingerne kommer som forventet.“</p><div class="who"><div class="ini">E</div><div><b>Erik Johansen</b><span>Bergen</span></div></div></div>
 <div class="card"><p>„Jeg startede småt for at teste. Gennemsigtigheden og supporten gav mig tryghed til at bygge videre.“</p><div class="who"><div class="ini">S</div><div><b>Sofie Olsen</b><span>Trondheim</span></div></div></div>
 <div class="card"><p>„Analyserne kommer til mig — jeg godkender eller justerer på få minutter. Det passer perfekt ind i min hverdag uden at forstyrre arbejdet.“</p><div class="who"><div class="ini">L</div><div><b>Lars Andersen</b><span>Stavanger</span></div></div></div>
 <div class="card"><p>„Det der overbeviste mig var gennemsigtigheden: hver beslutning forklares, og jeg ser ræsonnementet før noget sker.“</p><div class="who"><div class="ini">E</div><div><b>Emma Nilsen</b><span>Drammen</span></div></div></div>
 <div class="card"><p>„Supporten er ægte og altid tilgængelig. Min første analyse var hands-on, og platformen har været stabil og forudsigelig siden.“</p><div class="who"><div class="ini">M</div><div><b>Martin Berg</b><span>Tromsø</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Rapporter misbruk</span><h2 id="capabilities-title">Vigtigste funktioner i korthed</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">AI-motor</div>
 <div class="spec-v">Avanceret markedsanalyse med maskinlæring</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Innskuddingsmetoder</div>
 <div class="spec-v">Kreditkort, bankoverførsel, PayPal, digitale wallets</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Adgang på flere platforme</div>
 <div class="spec-v">Web, tablet og mobil — fuldt responsiv</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signalsikkerhed</div>
 <div class="spec-v">Op til 85 % på understøttede AI-strategier</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Markeder</div>
 <div class="spec-v">Kryptovalutaer, forex, aktier og råvarer</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Tilmelding</div>
 <div class="spec-v">Hurtig kontoåbning med guidet verifikation</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Support</div>
 <div class="spec-v">Professionel support døgnet rundt — <a href="<?= page_url('contacts.php') ?>">Send en besked</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Spørgsmål</span><h2 id="faq-title">Ofte stilte spørsmål</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Hvad er minimumsinnskuddingen?</summary><p>Åbn og finansier din konto fra minimumsinnskuddingen. Du kan tilføje saldo undervejs i takt med at din plan skrider frem.</p></details>
 <details><summary>Hvordan fungerer udbetalinger?</summary><p>Anmod om en udbetaling når som helst fra dashboardet. Midlerne vender tilbage til den valgte betalingsmetode under hensyntagen til standard behandlingstider.</p></details>
 <details><summary>Er mine penge sikre?</summary><p>Konti er beskyttet med branchesikkerhed og grundeg verifikation. Som ved enhver investering er din kapital i risiko, og værdier kan falde såvel som stige.</p></details>
 <details><summary>Hvor hurtigt kan jeg starte?</summary><p>De fleste medlemmer afslutter registreringen på få minutter. Når din første innskudding er bekræftet, aktiveres en plan med det samme.</p></details>
 <details><summary>Er der skjulte gebyrer?</summary><p>Omkostninger vises gennemsigtigt før du forpligter dig. Du ved altid præcis hvad der gælder for din plan — ingen overraskelser.</p></details>
 <details><summary>Hvad er minimumsalderen for at registrere sig?</summary><p>Du skal være mindst 18 år for at åbne en konto og investere. Verifikation kan kræves for at bekræfte alder og identitet.</p></details>
 <details><summary>Hvilke betalingsmetoder understøttes?</summary><p>Almindelige metoder som debit- og kreditkort, bankoverførsel, udvalgte e-wallets og kryptovalutaer understøttes. De præcise muligheder vises ved innskuddingstrinnet.</p></details>
 <details><summary>Hvornår er kundesupport tilgængelig?</summary><p>Vores supportteam arbejder mandag til fredag kl. 9–18 og forpligter sig til at besvare hver anmodning inden for én arbejdsdag.</p></details>
 <details><summary>Hvordan håndteres skatter?</summary><p>Skat af investeringsgevinster afhænger af dit lands regler og er dit ansvar. Vi anbefaler at føre regnskab og konsultere en kvalificeret skatterådgiver.</p></details>
 <details><summary>Hvad er KYC, og hvorfor er det obligatorisk?</summary><p>KYC (Know Your Customer) er en standardidentitetskontrol. Den holder konti sikre og er en del af åbningen af enhver investeringskonto.</p></details>
 <details><summary>Har jeg brug for erfaring?</summary><p>Nej. Hvert medlem får en personlig finansanalytiker der guider ved hvert trin, så forudgående markedskendskab ikke er nødvendigt.</p></details>
 <details><summary>Hvem forvalter mine investeringer?</summary><p>En dedikeret finansanalytiker, støttet af AI-værktøjer, der arbejder omkring dine mål og risikoniveau. Analytikeren kombinerer professionel ekspertise med teknologi — beslutningerne forbliver menneskelige.</p></details>
 <details><summary>Er platformen reguleret?</summary><p>Ja — den opfylder nationale finansielle og cybersikkerhedsstandarder med kontobeskyttelse og grundeg verifikation indbygget.</p></details>
 <details><summary>Kan jeg tilføje midler senere?</summary><p>Ja. Du kan finansiere din konto når som helst og justere din plan med din analytiker i takt med at dine mål udvikler sig.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">BETROET</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?>PÅLITELIG</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> anmeldelser · Baseret på <b style="color:var(--text,#fff)">2.334</b> vurderinger</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Start nå</span>
 <h2 id="signup-title" class="cta-h">Åpne kontoen din.</h2>
 <p class="lede">Fortæl os hvordan vi når dig, så hjælper en specialist deg med det første skridt.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Åpne kontoen din</h3>
 <p class="sub">Kom i gang på noen minutter.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Jeg vil starte';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>AI-hastighed, menneskelig beslutning. Kapital er i risiko — invester ansvarligt.</p>
 </div>
 <div><h4>Produkt</h4><div class="foot-links">
 <a href="#platform">Følg kontoen din i sanntid</a><a href="#markets">Markeder i sanntid</a><a href="#how">Sådan virker det.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Virksomhed</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Om oss</a><a href="<?= page_url('offer.php') ?>">Priser</a><a href="<?= page_url('contacts.php') ?>">Kontakt</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Personvern</a><a href="<?= page_url('conditions.php') ?>">Vilkår</a><a href="<?= page_url('conditions.php') ?>">Risikooplysning</a><a href="<?= page_url('contacts.php') ?>">Risikoopplysning</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Alle rettigheder forbeholdes. Investering indebærer risiko, herunder muligt tab af kapital. · Investering indebærer risiko, herunder muligt tab af en del af eller hele den investerede kapital. Værdien af investeringer kan stige eller falde, og du kan få mindre tilbage end du oprindeligt satte ind. Invester ikke penge du ikke har råd til at tabe.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('nb-NO',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' kr';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Vennligst vent\u2026";
 var MSG_ERR = "Vi kunne ikke sende opplysningene dine akkurat n\u00e5. Pr\u00f8v igjen.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'no',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Vi bruker informasjonskapsler for å forbedre opplevelsen din.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Forstået</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

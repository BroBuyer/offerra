<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI en uitvoering in realtime | Officiële site');
$page_description = SITE_NAME . ' — AI-technologie die markten analyseert en orders in realtime uitvoert, met een persoonlijke analist aan uw zijde om een nieuwe inkomstenbron op te bouwen.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Ga naar inhoud</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Hoofd">
 <a href="#platform">Product</a>
 <a href="#how">Hoe het werkt.</a>
 <a href="#markets">Markten in realtime</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Open uw account</a>
 <button class="nav-toggle" aria-label="Menu openen" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">AI in realtime + menselijke analyse</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investeer nu en zie uw kapitaal groeien</h1>
 <p class="hero-sub">Een kunstmatige-intelligentie-engine scant de markten en voert orders uit in fracties van een seconde, terwijl uw persoonlijke analist elke beslissing aanpast aan uw profiel. Geen ervaring nodig — u wordt van begin tot eind begeleid.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Gereguleerd</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Gescheiden fondsen</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 klanten</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> beoordeling</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Beschermd met SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Support 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Snelle uitvoering</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Begin nu — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Open uw account</h2>
 <p class="sub">Begin in enkele minuten.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Ik wil beginnen';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Kernindicatoren">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Actieve gebruikers</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Handelsvolume</span></div>
 <div class="stat"><b>99,1%</b><span>Beschikbaarheid van signalen</span></div>
 <div class="stat"><b>24/7</b><span>Support</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Binnenin <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Volg uw account in realtime</h2>
 <p class="lede">Elke order die uw analist uitvoert, wordt hier vastgelegd — entries, exits en geverifieerde resultaten per paar, live gestreamd.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Candlestick-grafieken en diepte in realtime, op elk apparaat</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Orders met één tip versturen met directe bevestiging</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlists en koersalerts die u volgen</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Nu beginnen</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobiel handelen met crypto-grafieken in realtime</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Het platform</span><h2 id="features-title">Alles wat u nodig heeft, op één snel platform.</h2><p class="lede">Geen grafieken bewaken, geen orders timen. De engine van <?= e(SITE_NAME) ?> bewaakt orderboeken in realtime op crypto-exchanges, wereldwijde aandelen-API's en de belangrijkste forexparen — en plaatst orders zodra de modellen een gunstige setup vinden.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Uitvoering in fracties van een seconde op elke aangesloten beurs</h3><p><?= e(SITE_NAME) ?> onderhoudt API-verbindingen met lage latentie met elke ondersteunde exchange. Wanneer het model een signaal geeft, wordt de order gerouteerd, uitgevoerd en op uw dashboard vastgelegd vóór de volgende tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>24 uur per dag actief, in alle sessies</h3><p>De cryptomarkt slaapt nooit, en de engine van <?= e(SITE_NAME) ?> ook niet. Hij blijft paren scannen in weekenden en op feestdagen, zodat u geen venster mist.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Rapporten in meerdere valuta's</h3><p>Elk saldo, elke order, elke opname verschijnt in uw lokale valuta. Geen verborgen conversiestap.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Gescheiden kapitaal</h3><p>Uw middelen blijven op uw eigen rekening. <?= e(SITE_NAME) ?> heeft nooit de bewaring — de engine mag alleen orders routeren.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Beveiliging op bankniveau</h3><p>TLS-versleuteling over het hele platform, standaard tweefactorauthenticatie en driemaandelijkse infrastructuuraudits door derden. Handelsbewijzen vastgelegd op de blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Drie activaklassen, één platform</h3><p>De meeste retailplatforms beperken zich tot één markt. <?= e(SITE_NAME) ?> handelt crypto, genoteerde aandelen en belangrijke forexparen in hetzelfde dashboard.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Vooraf ingestelde risicolimieten op elke positie</h3><p>Stop-loss, maximale drawdown en kapitaalallocatielimieten worden per activaklasse geconfigureerd. De engine sluit automatisch elke trade die een limiet overschrijdt, en het event wordt in uw auditgeschiedenis vastgelegd.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Markten in realtime</span>
 <h2 id="markets-title">Handel Bitcoin, Ethereum en meer</h2>
 <p class="lede">Prijzen in realtime, geavanceerde indicatoren en een professioneel overzicht van de markten die u interesseren.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Ik wil toegang tot de markten</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Markten</span><span class="mkt-live"><i></i>Live</span></div>
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
 <div class="sec-head"><span class="eyebrow">Hoe het werkt</span><h2 id="how-title">Hoe het werkt.</h2><p class="lede">Geavanceerde technologie en een echte menselijke analist, die in realtime samenwerken om u te helpen een nieuwe inkomstenbron op te bouwen — met begeleiding bij elke stap.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Maak uw account aan</h3><p>Registreer in minuten met alleen uw e-mail.</p></div>
 <div class="step"><div class="n">2</div><h3>Bevestig uw e-mail</h3><p>Verifieer uw adres om uw account te beschermen.</p></div>
 <div class="step"><div class="n">3</div><h3>Stort op uw account</h3><p>Voeg saldo toe vanaf <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> op uw manier.</p></div>
 <div class="step"><div class="n">4</div><h3>Stel uw strategie in</h3><p>Kies uw doelen; uw analist personaliseert het plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Begin met handelen</h3><p>Volg begeleide signalen en groei in uw eigen tempo.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Stortingen</span><h2 id="payment-title">Stort met methoden die u al kent</h2><p class="lede">Stort en neem op via veilige, vertrouwde kanalen — zonder verborgen kosten.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bankoverschrijving</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Wat leden zeggen</span><h2 id="reviews-title">Wat onze beleggers zeggen</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>“Mijn analist legde alles duidelijk uit. Ik stelde mijn doelen één keer in, en nu zie ik precies hoe mijn kapitaal groeit — zonder bij elke beweging gespannen te zijn.”</p><div class="who"><div class="ini">E</div><div><b>Emma de Vries</b><span>Amsterdam</span></div></div></div>
 <div class="card"><p>“Ik had nog nooit belegd — mijn analist regelde de strategie en legde elke stap uit. Geen loze beloftes, geen druk, en opnames komen zoals verwacht.”</p><div class="who"><div class="ini">T</div><div><b>Thomas Jansen</b><span>Rotterdam</span></div></div></div>
 <div class="card"><p>“Ik begon klein om te testen. De transparantie en support gaven me het vertrouwen om verder te bouwen.”</p><div class="who"><div class="ini">S</div><div><b>Sophie Bakker</b><span>Utrecht</span></div></div></div>
 <div class="card"><p>“De analyses komen naar mij — ik keur goed of pas in minuten aan. Het past perfect in mijn routine zonder het werk te verstoren.”</p><div class="who"><div class="ini">L</div><div><b>Lucas Visser</b><span>Den Haag</span></div></div></div>
 <div class="card"><p>“Wat me overtuigde was de transparantie: elke beslissing wordt uitgelegd, en ik zie de redenering vóórdat er iets gebeurt.”</p><div class="who"><div class="ini">L</div><div><b>Laura Smit</b><span>Eindhoven</span></div></div></div>
 <div class="card"><p>“De support is echt en altijd bereikbaar. Mijn eerste analyse was hands-on, en het platform is sindsdien stabiel en voorspelbaar.”</p><div class="who"><div class="ini">M</div><div><b>Mark de Boer</b><span>Groningen</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="capabilities-title">Belangrijkste functies in het kort</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">AI-engine</div>
 <div class="spec-v">Geavanceerde marktanalyse met machine learning</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Stortingsmethoden</div>
 <div class="spec-v">Creditcard, bankoverschrijving, PayPal, digitale wallets</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Toegang op meerdere platforms</div>
 <div class="spec-v">Web, tablet en mobiel — volledig responsive</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signaalnauwkeurigheid</div>
 <div class="spec-v">Tot 85% op ondersteunde AI-strategieën</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Markten</div>
 <div class="spec-v">Cryptovaluta, forex, aandelen en grondstoffen</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registratie</div>
 <div class="spec-v">Snelle accountopening met begeleide verificatie</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Support</div>
 <div class="spec-v">Professionele support 24 uur per dag — <a href="<?= page_url('contacts.php') ?>">Bericht sturen</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Vragen</span><h2 id="faq-title">Veelgestelde vragen.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Wat is de minimale storting?</summary><p>Open en financier uw account vanaf de minimale storting. U kunt na verloop van tijd saldo toevoegen naarmate uw plan vordert.</p></details>
 <details><summary>Hoe werken opnames?</summary><p>Vraag op elk moment een opname aan via het dashboard. Fondsen keren terug naar de gekozen betaalmethode, met inachtneming van standaard verwerkingstijden.</p></details>
 <details><summary>Is mijn geld veilig?</summary><p>Accounts zijn beschermd met beveiliging volgens industriestandaard en strenge verificatie. Zoals bij elke belegging loopt uw kapitaal risico en kunnen waarden dalen of stijgen.</p></details>
 <details><summary>Hoe snel kan ik beginnen?</summary><p>De meeste leden ronden de registratie in enkele minuten af. Zodra uw eerste storting is bevestigd, wordt direct een plan geactiveerd.</p></details>
 <details><summary>Zijn er verborgen kosten?</summary><p>Kosten worden transparant getoond voordat u zich verbindt. U weet altijd precies wat voor uw plan geldt — geen verrassingen.</p></details>
 <details><summary>Wat is de minimumleeftijd om te registreren?</summary><p>U moet minstens 18 jaar zijn om een account te openen en te beleggen. Verificatie kan vereist zijn om leeftijd en identiteit te bevestigen.</p></details>
 <details><summary>Welke betaalmethoden worden ondersteund?</summary><p>Gangbare methoden zoals debit- en creditcard, bankoverschrijving, geselecteerde e-wallets en cryptovaluta worden ondersteund. Exacte opties verschijnen bij de stortingsstap.</p></details>
 <details><summary>Wanneer is de klantenservice beschikbaar?</summary><p>Ons supportteam werkt van maandag tot vrijdag, van 9 tot 18 uur, en verplicht zich elke aanvraag binnen één werkdag te beantwoorden.</p></details>
 <details><summary>Hoe worden belastingen behandeld?</summary><p>Belastingen op beleggingswinsten hangen af van de regels van uw land en zijn uw verantwoordelijkheid. We raden aan administratie bij te houden en een gekwalificeerde belastingadviseur te raadplegen.</p></details>
 <details><summary>Wat is KYC en waarom is het verplicht?</summary><p>KYC (Know Your Customer) is een standaardidentiteitscontrole. Het houdt accounts veilig en hoort bij het openen van elk beleggingsaccount.</p></details>
 <details><summary>Heb ik ervaring nodig?</summary><p>Nee. Elk lid krijgt een persoonlijke financiële analist die bij elke stap begeleidt, dus voorkennis van markten is niet nodig.</p></details>
 <details><summary>Wie beheert mijn beleggingen?</summary><p>Een toegewijde financiële analist, ondersteund door AI-tools, die werkt rond uw doelen en risiconiveau. De analist combineert professionele expertise met technologie — beslissingen blijven menselijk.</p></details>
 <details><summary>Is het platform gereguleerd?</summary><p>Ja — het voldoet aan nationale financiële en cybersecurity-normen, met accountbescherming en strenge verificatie ingebouwd.</p></details>
 <details><summary>Kan ik later saldo toevoegen?</summary><p>Ja. U kunt uw account op elk moment aanvullen en uw plan met uw analist aanpassen naarmate uw doelen evolueren.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">VERTROUWD</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Beoordelingen</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> beoordelingen · Gebaseerd op <b style="color:var(--text,#fff)">2.334</b> beoordelingen</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Begin nu</span>
 <h2 id="signup-title" class="cta-h">Open uw account.</h2>
 <p class="lede">Vertel ons hoe we u kunnen bereiken en een specialist helpt bij de eerste stap.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Open uw account</h3>
 <p class="sub">Begin in enkele minuten.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Ik wil beginnen';
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
 <p>AI-snelheid, menselijke beslissing. Kapitaal loopt risico — beleg verantwoord.</p>
 </div>
 <div><h4>Product</h4><div class="foot-links">
 <a href="#platform">Volg uw account in realtime</a><a href="#markets">Markten in realtime</a><a href="#how">Hoe het werkt.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Bedrijf</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Over ons</a><a href="<?= page_url('offer.php') ?>">Prijzen</a><a href="<?= page_url('contacts.php') ?>">Contact</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privacy</a><a href="<?= page_url('conditions.php') ?>">Voorwaarden</a><a href="<?= page_url('conditions.php') ?>">Risicodisclosure</a><a href="<?= page_url('contacts.php') ?>">Misbruik melden</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Alle rechten voorbehouden. Beleggen brengt risico's met zich mee, inclusief mogelijk verlies van kapitaal. · Beleggen brengt risico's met zich mee, inclusief het mogelijke verlies van een deel of het gehele belegde kapitaal. De waarde van beleggingen kan stijgen of dalen, en u kunt minder terugkrijgen dan u oorspronkelijk heeft ingelegd. Beleg geen geld dat u zich niet kunt veroorloven te verliezen.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('nl-NL',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Even geduld\u2026";
 var MSG_ERR = "Uw gegevens konden nu niet worden verzonden. Probeer het opnieuw.";
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
 initialCountry: (hid && hid.value) || 'nl',
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
<span style="flex:1;min-width:200px">We gebruiken cookies om uw ervaring te verbeteren.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Begrepen</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

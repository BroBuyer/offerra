<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI a vykonávanie v reálnom čase | Oficiálna stránka');
$page_description = SITE_NAME . ' — AI technológia, ktorá analyzuje trhy a vykonáva príkazy v reálnom čase, s osobným analytikom po vašom boku na budovanie nového zdroja príjmov.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Prejsť k obsahu</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Hlavná">
 <a href="#platform">Produkt</a>
 <a href="#how">Ako to funguje.</a>
 <a href="#markets">Trhy v reálnom čase</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Otvorte si účet</a>
 <button class="nav-toggle" aria-label="Otvoriť menu" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">AI v reálnom čase + ľudská analýza</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investujte teraz a sledujte rast kapitálu</h1>
 <p class="hero-sub">Motor umelej inteligencie skenuje trhy a vykonáva príkazy v zlomkoch sekundy, zatiaľ čo váš osobný analytik prispôsobuje každé rozhodnutie vášmu profilu. Žiadne skúsenosti nie sú potrebné — ste vedení od začiatku do konca.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulované</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Oddelené prostriedky</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9 600 klientov</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> hodnotenie</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Chránené SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Podpora 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Rýchle vykonávanie</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Začnite teraz — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Otvorte si účet</h2>
 <p class="sub">Začnite v priebehu niekoľkých minút.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Chcem začať';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Kľúčové ukazovatele">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktívni používatelia</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Objem obchodov</span></div>
 <div class="stat"><b>99,1%</b><span>Dostupnosť signálov</span></div>
 <div class="stat"><b>24/7</b><span>Podpora</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Vnútri <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Sledujte svoj účet v reálnom čase</h2>
 <p class="lede">Každý príkaz vykonaný vaším analytikom je tu zaznamenaný — vstupy, výstupy a overené výsledky pri každom páre, naživo.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sviečkové grafy a hĺbka v reálnom čase na akomkoľvek zariadení</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Odoslanie príkazov jedným ťuknutím s okamžitým potvrdením</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sledovacie zoznamy a cenové upozornenia, ktoré vás sledujú</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Začať teraz</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobilný trading s krypto grafmi v reálnom čase</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="features-title">Všetko, čo potrebujete, na jednej rýchlej platforme.</h2><p class="lede">Bez stráženia grafov, bez časovania príkazov. Motor <?= e(SITE_NAME) ?> monitoruje order booky v reálnom čase na krypto burzách, globálnych akciových API a hlavných forex pároch — a spúšťa príkazy vo chvíli, keď modely nájdu výhodné nastavenie.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Vykonávanie v zlomkoch sekundy na každom pripojenom trhu</h3><p><?= e(SITE_NAME) ?> udržiava API pripojenia s nízkou latenciou ku každej podporovanej burze. Keď model vyšle signál, príkaz je smerovaný, vykonaný a zaznamenaný na vašom paneli pred ďalším tikom.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktívna 24 hodín denne vo všetkých seansách</h3><p>Krypto trh nikdy nespí — a motor <?= e(SITE_NAME) ?> tiež nie. Pokračuje v skenovaní párov cez víkendy a sviatky, aby ste nikdy nepremeškali okno.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Reporty vo viacerých menách</h3><p>Každý zostatok, každý príkaz, každý výber sa zobrazí vo vašej miestnej mene. Žiadny skrytý krok konverzie.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Oddelený kapitál</h3><p>Vaše prostriedky zostávajú na vašom vlastnom účte. <?= e(SITE_NAME) ?> nikdy nemá úschovu — motor má iba oprávnenie smerovať príkazy.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Bezpečnosť na bankovej úrovni</h3><p>Šifrovanie TLS naprieč platformou, dvojfaktorové overenie v predvolenom nastavení a štvrťročné audity infraštruktúry tretími stranami. Potvrdenia obchodov zaznamenané na blockchaine.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tri triedy aktív, jedna platforma</h3><p>Väčšina retailových platforiem sa obmedzuje na jeden trh. <?= e(SITE_NAME) ?> obchoduje krypto, kótované akcie a hlavné forex páry v tom istom paneli.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Prednastavené limity rizika pri každej pozícii</h3><p>Stop-loss, maximálny drawdown a limity alokácie kapitálu sú nastavené podľa triedy aktív. Motor automaticky ukončí akýkoľvek obchod, ktorý prekročí limit, a udalosť sa zaznamená do histórie auditu.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Trhy v reálnom čase</span>
 <h2 id="markets-title">Obchodujte Bitcoin, Ethereum a ďalšie</h2>
 <p class="lede">Ceny v reálnom čase, pokročilé indikátory a profesionálny pohľad na trhy, ktoré vás zaujímajú.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Chcem prístup na trhy</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Trhy</span><span class="mkt-live"><i></i>Naživo</span></div>
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
 <div class="sec-head"><span class="eyebrow">Ako to funguje</span><h2 id="how-title">Ako to funguje.</h2><p class="lede">Špičková technológia a skutočný ľudský analytik, ktorí spolupracujú v reálnom čase, aby vám pomohli vybudovať nový zdroj príjmov — s vedením na každom kroku.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Vytvorte si účet</h3><p>Zaregistrujte sa v priebehu minút iba pomocou e-mailu.</p></div>
 <div class="step"><div class="n">2</div><h3>Potvrďte e-mail</h3><p>Overte adresu na ochranu účtu.</p></div>
 <div class="step"><div class="n">3</div><h3>Vložte na svoj účet</h3><p>Pridajte prostriedky od <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> po svojom.</p></div>
 <div class="step"><div class="n">4</div><h3>Nastavte stratégiu</h3><p>Zvoľte ciele; analytik prispôsobí plán.</p></div>
 <div class="step"><div class="n">5</div><h3>Začnite obchodovať</h3><p>Sledujte vedené signály a rastite vlastným tempom.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Vklady</span><h2 id="payment-title">Vkladajte metódami, ktoré už poznáte</h2><p class="lede">Vkladajte a vyberajte cez bezpečné, známe kanály — bez skrytých poplatkov.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bankový prevod</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Čo hovoria členovia</span><h2 id="reviews-title">Čo hovoria naši investori</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Môj analytik mi všetko jasne vysvetlil. Ciele som nastavil raz a teraz presne vidím, ako kapitál rastie — bez nervozity pri každom pohybe.“</p><div class="who"><div class="ini">E</div><div><b>Eva Horváthová</b><span>Bratislava</span></div></div></div>
 <div class="card"><p>„Nikdy predtým som neinvestoval — analytik sa postaral o stratégiu a vysvetlil každý krok. Žiadne prázdne sľuby, žiadny tlak a výbery prichádzajú podľa očakávania.“</p><div class="who"><div class="ini">J</div><div><b>Ján Novák</b><span>Košice</span></div></div></div>
 <div class="card"><p>„Začal som s málo na vyskúšanie. Transparentnosť a podpora mi dali istotu pokračovať.“</p><div class="who"><div class="ini">Z</div><div><b>Zuzana Kováčová</b><span>Žilina</span></div></div></div>
 <div class="card"><p>„Analýzy ku mne prichádzajú — schvaľujem alebo upravím počas minút. Perfektne sedí do rutiny bez rušenia práce.“</p><div class="who"><div class="ini">P</div><div><b>Peter Tóth</b><span>Prešov</span></div></div></div>
 <div class="card"><p>„Presvedčila ma transparentnosť: každé rozhodnutie je vysvetlené a zdôvodnenie vidím skôr, než sa čokoľvek stane.“</p><div class="who"><div class="ini">L</div><div><b>Lucia Nagyová</b><span>Nitra</span></div></div></div>
 <div class="card"><p>„Podpora je skutočná a vždy dostupná. Prvá analýza bola praktická a platforma je odvtedy stabilná a predvídateľná.“</p><div class="who"><div class="ini">M</div><div><b>Martin Szabó</b><span>Banská Bystrica</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="capabilities-title">Hlavné funkcie v skratke</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">AI motor</div>
 <div class="spec-v">Pokročilá analýza trhu so strojovým učením</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Spôsoby vkladu</div>
 <div class="spec-v">Kreditná karta, bankový prevod, PayPal, digitálne peňaženky</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Viacplatformový prístup</div>
 <div class="spec-v">Web, tablet a mobil — plne responzívny</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Presnosť signálov</div>
 <div class="spec-v">Až 85 % pri podporovaných AI stratégiách</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Trhy</div>
 <div class="spec-v">Kryptomeny, forex, akcie a komodity</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registrácia</div>
 <div class="spec-v">Rýchle otvorenie účtu s vedeným overením</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Podpora</div>
 <div class="spec-v">Profesionálna podpora nonstop — <a href="<?= page_url('contacts.php') ?>">Odoslať správu</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Otázky</span><h2 id="faq-title">Často kladené otázky.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Aký je minimálny vklad?</summary><p>Otvorte a financujte účet od minimálneho vkladu. Zostatok môžete pridávať postupne, ako plán postupuje.</p></details>
 <details><summary>Ako fungujú výbery?</summary><p>Požiadajte o výber kedykoľvek z panela. Prostriedky sa vrátia na zvolenú platobnú metódu pri dodržaní štandardných lehôt spracovania.</p></details>
 <details><summary>Sú moje peniaze v bezpečí?</summary><p>Účty sú chránené zabezpečením priemyselného štandardu a prísnym overením. Ako pri každej investícii je kapitál v riziku a hodnoty môžu klesať aj stúpať.</p></details>
 <details><summary>Ako rýchlo môžem začať?</summary><p>Väčšina členov dokončí registráciu počas niekoľkých minút. Po potvrdení prvého vkladu sa plán aktivuje okamžite.</p></details>
 <details><summary>Sú tu skryté poplatky?</summary><p>Náklady sa zobrazujú transparentne pred záväzkom. Vždy presne viete, čo platí pre váš plán — žiadne prekvapenia.</p></details>
 <details><summary>Aký je minimálny vek na registráciu?</summary><p>Musíte mať aspoň 18 rokov na otvorenie účtu a investovanie. Overenie môže byť vyžadované na potvrdenie veku a identity.</p></details>
 <details><summary>Ktoré platobné metódy sú podporované?</summary><p>Bežné metódy ako debetné a kreditné karty, bankový prevod, vybrané e-peňaženky a kryptomeny sú podporované. Presné možnosti sa zobrazia v kroku vkladu.</p></details>
 <details><summary>Kedy je dostupná zákaznícka podpora?</summary><p>Náš tím podpory funguje od pondelka do piatka, 9–18 hod., a zaväzuje sa odpovedať na každú požiadavku do jedného pracovného dňa.</p></details>
 <details><summary>Ako sa riešia dane?</summary><p>Dane z investičných ziskov závisia od pravidiel vašej krajiny a sú vašou zodpovednosťou. Odporúčame viesť záznamy a konzultovať kvalifikovaného daňového poradcu.</p></details>
 <details><summary>Čo je KYC a prečo je povinné?</summary><p>KYC (Know Your Customer) je štandardné overenie identity. Chrání účty a je súčasťou otvorenia každého investičného účtu.</p></details>
 <details><summary>Potrebujem skúsenosti?</summary><p>Nie. Každý člen dostane osobného finančného analytika, ktorý ho vedie na každom kroku — predchádzajúca znalosť trhov nie je nutná.</p></details>
 <details><summary>Kto spravuje moje investície?</summary><p>Vyhradený finančný analytik podporovaný AI nástrojmi, pracujúci okolo vašich cieľov a úrovne rizika. Analytik kombinuje odbornosť s technológiou — rozhodnutia zostávajú ľudské.</p></details>
 <details><summary>Je platforma regulovaná?</summary><p>Áno — spĺňa národné finančné a kyberbezpečnostné štandardy s ochranou účtu a prísnym overením.</p></details>
 <details><summary>Môžem neskôr pridať prostriedky?</summary><p>Áno. Účet môžete kedykoľvek doplniť a plán upraviť s analytikom, ako sa ciele vyvíjajú.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DÔVERYHODNÉ</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Recenzie</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> recenzií · Na základe <b style="color:var(--text,#fff)">2.334</b> hodnotení</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Začnite teraz</span>
 <h2 id="signup-title" class="cta-h">Otvorte si účet.</h2>
 <p class="lede">Povedzte nám, ako vás kontaktovať, a špecialista vám pomôže s prvým krokom.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Otvorte si účet</h3>
 <p class="sub">Začnite v priebehu niekoľkých minút.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Chcem začať';
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
 <p>Rýchlosť AI, ľudské rozhodnutie. Kapitál je v riziku — investujte zodpovedne.</p>
 </div>
 <div><h4>Produkt</h4><div class="foot-links">
 <a href="#platform">Sledujte svoj účet v reálnom čase</a><a href="#markets">Trhy v reálnom čase</a><a href="#how">Ako to funguje.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Spoločnosť</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">O nás</a><a href="<?= page_url('offer.php') ?>">Ceny</a><a href="<?= page_url('contacts.php') ?>">Kontakt</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Súkromie</a><a href="<?= page_url('conditions.php') ?>">Podmienky</a><a href="<?= page_url('conditions.php') ?>">Upozornenie na riziká</a><a href="<?= page_url('contacts.php') ?>">Nahlásiť zneužitie</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Všetky práva vyhradené. Investovanie zahŕňa riziko vrátane možnej straty kapitálu. · Investovanie zahŕňa riziko vrátane možnej straty časti alebo celého investovaného kapitálu. Hodnota investícií môže stúpať alebo klesať a môžete získať menej, než ste pôvodne vložili. Neinvestujte peniaze, ktoré si nemôžete dovoliť stratiť.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('sk-SK',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Prosím čakajte\u2026";
 var MSG_ERR = "Va\u0161e \u00fadaje sa teraz nepodarilo odosla\u0165. Sk\u00faste to znova.";
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
 initialCountry: (hid && hid.value) || 'sk',
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
<span style="flex:1;min-width:200px">Používame cookies na zlepšenie vášho zážitku.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Rozumiem</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

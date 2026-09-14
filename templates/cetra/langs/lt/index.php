<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI ir vykdymas realiuoju laiku | Oficiali svetainė');
$page_description = SITE_NAME . '– AI technologija, kuri analizuoja rinkas ir realiuoju laiku vykdo užsakymus, o šalia jūsų yra asmeninis analitikas, kuris sukuria naują pajamų srautą.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Pereiti prie turinio</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Pagrindinis">
 <a href="#platform">Produktas</a>
 <a href="#how">Kaip tai veikia.</a>
 <a href="#markets">Realaus laiko rinkos</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Atidarykite paskyrą</a>
 <button class="nav-toggle" aria-label="Atidaryti meniu" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">Realaus laiko AI + žmogaus analizė</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span>– investuokite dabar, stebėkite, kaip auga jūsų kapitalas</h1>
 <p class="hero-sub">Dirbtinio intelekto variklis nuskaito rinkas ir įvykdo užsakymus per sekundės dalis, o jūsų asmeninis analitikas pritaiko kiekvieną sprendimą pagal jūsų profilį. Patirtis nebūtina – Jus veda nuo pradžios iki pabaigos.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Reguliuojama</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Atskirtos lėšos</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9600 klientų</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> įvertinimas</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Apsaugotas SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>24/7 palaikymas</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Greitas vykdymas</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Pradėkite dabar - <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?>min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Atidarykite paskyrą</h2>
 <p class="sub">Pradėkite po kelių minučių.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Noriu pradėti';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Pagrindiniai rodikliai">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktyvūs vartotojai</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Prekybos apimtis</span></div>
 <div class="stat"><b>99,1%</b><span>Signalo prieinamumas</span></div>
 <div class="stat"><b>24/7</b><span>Palaikymas</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Viduje <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Stebėkite savo paskyrą realiuoju laiku</h2>
 <p class="lede">Čia registruojamas kiekvienas jūsų analitiko įvykdytas pavedimas – kiekvienos poros įėjimai, išėjimai ir patikrinti rezultatai, tiesiogiai transliuojami.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Žvakidžių diagramos ir gylis realiuoju laiku, bet kuriame įrenginyje</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Užsakymo pateikimas vienu paspaudimu su momentiniu patvirtinimu</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Stebėjimo sąrašai ir kainų įspėjimai, kurie jus seka</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Pradėkite dabar</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?>- mobilioji prekyba su realaus laiko kriptovaliutų diagramomis</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="features-title">Viskas, ko jums reikia, vienoje greitoje platformoje.</h2><p class="lede">Nėra diagramų, kurias reikia žiūrėti, nėra nurodymų laikui. Variklis <?= e(SITE_NAME) ?> stebi kriptovaliutų biržų, pasaulinių akcijų API ir pagrindinių Forex porų užsakymų knygas realiuoju laiku ir paleidžia užsakymus, kai modeliai nustato palankią sąranką.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Po sekundės vykdymas kiekvienoje prijungtoje vietoje</h3><p><?= e(SITE_NAME) ?> palaiko mažos delsos API ryšius su visais palaikomais mainais. Kai modelis duoda signalą, užsakymas nukreipiamas, vykdomas ir registruojamas prietaisų skydelyje prieš kitą pažymėjimą.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktyvus 24 valandas per parą, per visas sesijas</h3><p>Kriptovaliutų rinka niekada nemiega, kaip ir <?= e(SITE_NAME) ?> variklis. Jis nuolat nuskaito poras savaitgaliais ir švenčių dienomis, todėl niekada nepraleisite lango.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Kelių valiutų ataskaitos</h3><p>Kiekvienas likutis, kiekvienas užsakymas, kiekvienas išėmimas rodomas jūsų vietine valiuta. Nėra paslėpto konversijos žingsnio.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Atskirtas kapitalas</h3><p>Jūsų lėšos lieka jūsų sąskaitoje. <?= e(SITE_NAME) ?> niekada nepriima globos – variklis turi tik leidimą nukreipti užsakymus.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Banko lygio saugumas</h3><p>TLS šifravimas visoje platformoje, dviejų veiksnių autentifikavimas pagal numatytuosius nustatymus ir ketvirtinis trečiųjų šalių infrastruktūros auditas. Prekybos kvitai įrašyti blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Trys turto klasės, viena platforma</h3><p>Dauguma mažmeninės prekybos platformų apsiriboja viena rinka. <?= e(SITE_NAME) ?> valdo kriptovaliutą, listinguojamas akcijas ir pagrindines Forex poras tame pačiame prietaisų skydelyje.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Iš anksto nustatykite rizikos limitus kiekvienai pozicijai</h3><p>Stop-loss, maksimalaus lėšų panaudojimo ir kapitalo paskirstymo limitai yra sukonfigūruoti kiekvienai turto klasei. Variklis automatiškai išeina iš bet kokios prekybos, kuri peržengia limitą, ir įvykis įrašomas į jūsų audito istoriją.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Realaus laiko rinkos</span>
 <h2 id="markets-title">Prekiaukite Bitcoin, Ethereum ir kt</h2>
 <p class="lede">Kainos realiu laiku, pažangūs rodikliai ir profesionalus jums svarbių rinkų vaizdas.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Noriu patekti į rinką</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Rinkos</span><span class="mkt-live"><i></i>Tiesiogiai</span></div>
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
 <div class="sec-head"><span class="eyebrow">Kaip tai veikia</span><h2 id="how-title">Kaip tai veikia.</h2><p class="lede">Pažangiausios technologijos ir tikras žmogiškasis analitikas, dirbantis kartu realiuoju laiku, kad padėtų jums sukurti naują pajamų srautą – su gairėmis kiekviename žingsnyje.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Susikurkite paskyrą</h3><p>Prisiregistruokite per kelias minutes naudodami tik savo el.</p></div>
 <div class="step"><div class="n">2</div><h3>Patvirtinkite savo el</h3><p>Patvirtinkite adresą, kad apsaugotumėte paskyrą.</p></div>
 <div class="step"><div class="n">3</div><h3>Įnešti į savo sąskaitą</h3><p>Pridėti lėšų iš <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?>tavo keliu.</p></div>
 <div class="step"><div class="n">4</div><h3>Nustatykite savo strategiją</h3><p>Pasirinkite savo tikslus; jūsų analitikas suasmenina planą.</p></div>
 <div class="step"><div class="n">5</div><h3>Pradėkite prekiauti</h3><p>Sekite vadovaujamus signalus ir augkite savo tempu.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Indėliai</span><h2 id="payment-title">Įneškite pinigų naudodami jums jau žinomus metodus</h2><p class="lede">Įneškite ir išimkite saugiais, pažįstamais kanalais – be paslėptų mokesčių.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bankinis pavedimas</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Ką sako nariai</span><h2 id="reviews-title">Ką sako mūsų investuotojai</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>"Mano analitikas viską aiškiai paaiškino. Vieną kartą išsikėliau savo tikslus, o dabar matau, kaip auga mano kapitalas – nesijaudindamas dėl kiekvieno žingsnio."</p><div class="who"><div class="ini">O</div><div><b>Ona Kazlauskė</b><span>Vilnius</span></div></div></div>
 <div class="card"><p>"Aš niekada anksčiau neinvestavau – mano analitikas tvarkė strategiją ir paaiškino kiekvieną žingsnį. Jokių tuščių pažadų, jokio spaudimo ir pasitraukimai ateina tada, kai tikimasi."</p><div class="who"><div class="ini">J</div><div><b>Jonas Petrauskas</b><span>Kaunas</span></div></div></div>
 <div class="card"><p>„Pradėjau maža, kad išbandyčiau. Skaidrumas ir palaikymas suteikė man pasitikėjimo toliau kurti.</p><div class="who"><div class="ini">I</div><div><b>Ieva Jonaitė</b><span>Klaipėda</span></div></div></div>
 <div class="card"><p>"Analizė ateina man – aš patvirtinu arba pakoreguoju per kelias minutes. Tai puikiai tinka mano kasdienybei, netrukdant darbui."</p><div class="who"><div class="ini">T</div><div><b>Tomas Vaitkus</b><span>Šiauliai</span></div></div></div>
 <div class="card"><p>„Mane nugalėjo skaidrumas: kiekvienas sprendimas yra paaiškinamas, o motyvus matau prieš kas nors nutinka.</p><div class="who"><div class="ini">R</div><div><b>Rasa Petraitytė</b><span>Panevėžys</span></div></div></div>
 <div class="card"><p>"Palaikymas yra tikras ir visada prieinamas. Mano pirmoji analizė buvo praktinė, o nuo to laiko platforma buvo stabili ir nuspėjama."</p><div class="who"><div class="ini">A</div><div><b>Andrius Jankauskas</b><span>Alytus</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="capabilities-title">Pagrindinės funkcijos iš pirmo žvilgsnio</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">AI variklis</div>
 <div class="spec-v">Išplėstinė rinkos analizė naudojant mašininį mokymąsi</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Indėlių būdai</div>
 <div class="spec-v">Kreditinė kortelė, banko pavedimas, PayPal, skaitmeninės piniginės</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Kelių platformų prieiga</div>
 <div class="spec-v">Žiniatinklis, planšetinis kompiuteris ir mobilusis telefonas – visiškai reaguoja</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signalo tikslumas</div>
 <div class="spec-v">Iki 85 % palaikomų AI strategijų</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Rinkos</div>
 <div class="spec-v">Kriptovaliutos, Forex, akcijos ir prekės</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registruotis</div>
 <div class="spec-v">Greitas sąskaitos atidarymas su vadovaujamu patvirtinimu</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Palaikymas</div>
 <div class="spec-v">Profesionalus palaikymas visą parą – <a href="<?= page_url('contacts.php') ?>">Siųsti žinutę</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Klausimai</span><h2 id="faq-title">Dažnai užduodami klausimai.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Koks yra minimalus depozitas?</summary><p>Atidarykite ir papildykite savo sąskaitą nuo minimalaus įnašo. Vykdydami planą, laikui bėgant galite pridėti balansą.</p></details>
 <details><summary>Kaip veikia išėmimai?</summary><p>Informacijos suvestinėje bet kuriuo metu pateikti užklausą dėl pašalinimo. Lėšos grąžinamos į jūsų pasirinktą mokėjimo būdą, atsižvelgiant į standartinį apdorojimo laiką.</p></details>
 <details><summary>Ar mano pinigai saugūs?</summary><p>Paskyros apsaugotos taikant pramonės standarto saugumą ir griežtą patvirtinimą. Kaip ir bet kuriai investicijai, jūsų kapitalui gresia pavojus, o vertės gali kristi ir kilti.</p></details>
 <details><summary>Kaip greitai galiu pradėti?</summary><p>Dauguma narių registraciją užbaigia per kelias minutes. Patvirtinus pirmąjį įnašą, planas suaktyvinamas iš karto.</p></details>
 <details><summary>Ar yra paslėptų mokesčių?</summary><p>Išlaidos aiškiai parodomos prieš įsipareigojant. Visada tiksliai žinosite, kas taikoma jūsų planui – jokių netikėtų mokesčių.</p></details>
 <details><summary>Koks minimalus amžius norint užsiregistruoti?</summary><p>Norėdami atidaryti sąskaitą ir investuoti, turite būti bent 18 metų. Gali prireikti patvirtinimo, kad būtų patvirtintas jūsų amžius ir tapatybė.</p></details>
 <details><summary>Kokie mokėjimo būdai palaikomi?</summary><p>Palaikomi įprasti metodai, tokie kaip debeto ir kredito kortelės, banko pavedimas, tam tikros elektroninės piniginės ir kriptovaliutos. Tikslios parinktys rodomos indėlio žingsnyje.</p></details>
 <details><summary>Kada galimas klientų aptarnavimas?</summary><p>Mūsų palaikymo komanda dirba pirmadieniais–penktadieniais 9–18 val. ir įsipareigoja atsakyti į kiekvieną užklausą per vieną darbo dieną.</p></details>
 <details><summary>Kaip tvarkomi mokesčiai?</summary><p>Investicijų pelno mokesčiai priklauso nuo jūsų šalies taisyklių ir yra jūsų atsakomybė. Rekomenduojame vesti apskaitą ir pasikonsultuoti su kvalifikuotu mokesčių konsultantu.</p></details>
 <details><summary>Kas yra KYC ir kodėl jis reikalingas?</summary><p>KYC (Know Your Customer) yra standartinis tapatybės patikrinimas. Jis apsaugo sąskaitas ir yra bet kurios investicinės sąskaitos atidarymo dalis.</p></details>
 <details><summary>Ar man reikia patirties?</summary><p>Ne. Kiekvienas narys gauna asmeninį finansų analitiką, kuris jiems vadovauja kiekviename žingsnyje, todėl nereikia jokių išankstinių žinių apie rinką.</p></details>
 <details><summary>Kas valdo mano investicijas?</summary><p>Atsidavęs finansų analitikas, remiamas AI įrankiais, siekiantis jūsų tikslų ir rizikos lygio. Analitikas sujungia profesionalią patirtį su technologijomis – sprendimai lieka žmogiški.</p></details>
 <details><summary>Ar platforma reguliuojama?</summary><p>Taip – ​​ji atitinka nacionalinius finansinio ir kibernetinio saugumo standartus, įtaisyta paskyros apsauga ir griežtas patikrinimas.</p></details>
 <details><summary>Ar galiu vėliau pridėti lėšų?</summary><p>Taip. Galite bet kada finansuoti savo sąskaitą ir koreguoti planą su analitiku, kai jūsų tikslai vystosi.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">PATIKIMA</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?>Atsiliepimai</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b>atsiliepimai · Remiantis<b style="color:var(--text,#fff)">2.334</b>reitingai</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Pradėkite dabar</span>
 <h2 id="signup-title" class="cta-h">Atidarykite savo sąskaitą.</h2>
 <p class="lede">Pasakykite mums, kaip su jumis susisiekti, ir specialistas padės žengti pirmąjį žingsnį.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Atidarykite paskyrą</h3>
 <p class="sub">Pradėkite po kelių minučių.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Noriu pradėti';
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
 <p>AI greitis, žmogaus sprendimas. Rizikos kapitalas – investuokite atsakingai.</p>
 </div>
 <div><h4>Produktas</h4><div class="foot-links">
 <a href="#platform">Stebėkite savo paskyrą realiuoju laiku</a><a href="#markets">Realaus laiko rinkos</a><a href="#how">Kaip tai veikia.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Įmonė</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Apie</a><a href="<?= page_url('offer.php') ?>">Kainodara</a><a href="<?= page_url('contacts.php') ?>">Susisiekite</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privatumas</a><a href="<?= page_url('conditions.php') ?>">Sąlygos</a><a href="<?= page_url('conditions.php') ?>">Rizikos atskleidimas</a><a href="<?= page_url('contacts.php') ?>">Pranešti apie piktnaudžiavimą</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Visos teisės saugomos. Investavimas yra susijęs su rizika, įskaitant galimą kapitalo praradimą. · Investavimas yra susijęs su rizika, įskaitant galimą dalies arba viso investuoto kapitalo praradimą. Investicijų vertė gali kilti arba mažėti, o jūs galite atgauti mažiau, nei įdėjote iš pradžių. Neinvestuokite pinigų, kurių negalite sau leisti prarasti.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('lt-LT',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Palaukite\u2026";
 var MSG_ERR = "Šiuo metu negalime pateikti jūsų informacijos. Bandykite dar kartą.";
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
 initialCountry: (hid && hid.value) || 'lt',
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
<span style="flex:1;min-width:200px">Mes naudojame slapukus, kad pagerintume jūsų patirtį.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Supratau</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

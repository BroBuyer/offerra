<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('MI un izpilde reāllaikā | Oficiālā vietne');
$page_description = SITE_NAME . ' — MI tehnoloģija, kas analizē tirgus un izpilda rīkojumus reāllaikā, ar personīgo analītiķi jūsu pusē, lai veidotu jaunu ienākumu avotu.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Pāriet uz saturu</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Galvenā">
 <a href="#platform">Produkts</a>
 <a href="#how">Kā tas darbojas.</a>
 <a href="#markets">Tirgi reāllaikā</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Atveriet savu kontu</a>
 <button class="nav-toggle" aria-label="Atvērt izvēlni" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">MI reāllaikā + cilvēka analīze</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — ieguldiet tagad, vērojiet, kā jūsu kapitāls pieaug</h1>
 <p class="hero-sub">Mākslīgā intelekta dzinējs skenē tirgus un izpilda rīkojumus sekundes daļās, kamēr jūsu personīgais analītiķis pielāgo katru lēmumu jūsu profilam. Pieredze nav nepieciešama — jūs tiekiet vadīti no sākuma līdz beigām.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulēts</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Segregēti līdzekļi</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9600 klienti</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> vērtējums</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Aizsargāts ar SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Atbalsts 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Ātra izpilde</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Sāciet tagad — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Atveriet savu kontu</h2>
 <p class="sub">Sāciet dažu minūšu laikā.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Sākt tagad';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Galvenie rādītāji">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktīvie lietotāji</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Tirdzniecības apjoms</span></div>
 <div class="stat"><b>99,1%</b><span>Signālu pieejamība</span></div>
 <div class="stat"><b>24/7</b><span>Atbalsts</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Iekšā <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Sekojiet savam kontam reāllaikā</h2>
 <p class="lede">Katrs jūsu analītiķa izpildītais rīkojums tiek reģistrēts šeit — ieejas, izejas un pārbaudītie rezultāti katrā pārī, pārraidīti tiešraidē.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sveču diagrammas un tirgus dziļums reāllaikā jebkurā ierīcē</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Rīkojumu iesniegšana ar vienu pieskārienu un tūlītēja apstiprināšana</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Uzraudzības saraksti un cenu brīdinājumi, kas jūs seko</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Sākt tagad</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobilā tirdzniecība ar kriptovalūtu diagrammām reāllaikā</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="features-title">Viss, kas jums nepieciešams, vienā ātrā platformā.</h2><p class="lede">Nav diagrammu, ko vērot, nav rīkojumu, ko laika ziņā mērīt. <?= e(SITE_NAME) ?> dzinējs uzrauga piedāvājumu grāmatas reāllaikā kriptobiržās, globālo akciju API un galvenajos forex pāros — un izdod rīkojumus brīdī, kad modeļi atrod izdevīgu situāciju.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Izpilde sekundes daļās katrā savienotajā vietā</h3><p><?= e(SITE_NAME) ?> uztur zema latentuma API savienojumus ar katru atbalstīto biržu. Kad modelis izdod signālu, rīkojums tiek novirzīts, izpildīts un reģistrēts jūsu panelī pirms nākamā tikšķa.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktīva 24 stundas diennaktī visās sesijās</h3><p>Kriptotirgus nekad negul, un arī <?= e(SITE_NAME) ?> dzinējs ne. Tas turpina skenēt pārus nedēļas nogalēs un svētku dienās, lai jūs nekad nezaudētu iespēju.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Pārskati vairākās valūtās</h3><p>Katrs atlikums, katrs rīkojums, katra izmaksa tiek rādīta jūsu vietējā valūtā. Nav slēptu konversijas soļu.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Segregēts kapitāls</h3><p>Jūsu līdzekļi paliek jūsu pašu kontā. <?= e(SITE_NAME) ?> nekad neveic glabāšanu — dzinējam ir tikai atļauja novirzīt rīkojumus.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Bankas līmeņa drošība</h3><p>TLS šifrēšana visā platformā, divfaktoru autentifikācija pēc noklusējuma un ceturkšņa trešo pušu infrastruktūras auditi. Darījumu kvītis reģistrētas blokķēdē.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Trīs aktīvu klases, viena platforma</h3><p>Lielākā daļa mazumtirdzniecības platformu ir ierobežotas ar vienu tirgu. <?= e(SITE_NAME) ?> darbojas ar kriptovalūtām, biržā kotētām akcijām un galvenajiem forex pāriem vienā panelī.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Iepriekš iestatīti riska limiti katrā pozīcijā</h3><p>Stop-loss, maksimālais kritums un kapitāla sadales limiti tiek konfigurēti katrai aktīvu klasei. Dzinējs automātiski iziet no jebkura darījuma, kas šķērso limitu, un notikums tiek reģistrēts jūsu audita vēsturē.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Tirgi reāllaikā</span>
 <h2 id="markets-title">Tirgojiet Bitcoin, Ethereum un daudz ko citu</h2>
 <p class="lede">Cenas reāllaikā, uzlaboti rādītāji un profesionāls skats uz jums interesējošajiem tirgiem.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Vēlos piekļuvi tirgiem</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Tirgi</span><span class="mkt-live"><i></i>Tiešraide</span></div>
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
 <div class="sec-head"><span class="eyebrow">Kā tas darbojas</span><h2 id="how-title">Kā tas darbojas.</h2><p class="lede">Modernākā tehnoloģija un īsts cilvēka analītiķis, kas strādā kopā reāllaikā, lai palīdzētu veidot jaunu ienākumu avotu — ar vadību katrā solī.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Izveidojiet savu kontu</h3><p>Reģistrējieties dažu minūšu laikā, izmantojot tikai e-pastu.</p></div>
 <div class="step"><div class="n">2</div><h3>Apstipriniet savu e-pastu</h3><p>Pārbaudiet savu adresi, lai aizsargātu kontu.</p></div>
 <div class="step"><div class="n">3</div><h3>Iemaksājiet savā kontā</h3><p>Pievienojiet līdzekļus no <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> pēc sava ieskata.</p></div>
 <div class="step"><div class="n">4</div><h3>Nosakiet savu stratēģiju</h3><p>Izvēlieties savus mērķus; jūsu analītiķis personalizē plānu.</p></div>
 <div class="step"><div class="n">5</div><h3>Sāciet tirgot</h3><p>Sekojiet vadītajiem signāliem un augiet savā ritmā.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Iemaksas</span><h2 id="payment-title">Iemaksājiet ar jums zināmiem veidiem</h2><p class="lede">Iemaksājiet un izņemiet caur drošiem un pazīstamiem kanāliem — bez slēptām komisijām.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bankas pārskaitījums</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Ko saka dalībnieki</span><h2 id="reviews-title">Ko saka mūsu ieguldītāji</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>“Mans analītiķis visu skaidri izskaidroja. Es noteicu mērķus vienreiz, un tagad precīzi redzu, kā mans kapitāls pieaug — bez satraukuma par katru kustību.”</p><div class="who"><div class="ini">A</div><div><b>Anna Kalniņa</b><span>Rīga</span></div></div></div>
 <div class="card"><p>“Nekad iepriekš nebiju ieguldījis — mans analītiķis rūpējās par stratēģiju un izskaidroja katru soli. Bez tukšiem solījumiem, bez spiediena, un izmaksas pienāk, kad gaidīts.”</p><div class="who"><div class="ini">J</div><div><b>Jānis Bērziņš</b><span>Daugavpils</span></div></div></div>
 <div class="card"><p>“Sāku ar nelielu summu, lai izmēģinātu. Caurspīdīgums un atbalsts man deva pārliecību turpināt no turienes.”</p><div class="who"><div class="ini">I</div><div><b>Ilze Ozola</b><span>Liepāja</span></div></div></div>
 <div class="card"><p>“Analīzes nonāk pie manis — apstiprinu vai pielāgoju dažu minūšu laikā. Tas ideāli iekļaujas manā rutīnā, netraucējot darbu.”</p><div class="who"><div class="ini">M</div><div><b>Mārtiņš Liepiņš</b><span>Jelgava</span></div></div></div>
 <div class="card"><p>“Mani pārliecināja caurspīdīgums: katrs lēmums tiek izskaidrots, un es redzu pamatojumu pirms kaut kas notiek.”</p><div class="who"><div class="ini">E</div><div><b>Elīna Jansone</b><span>Ventspils</span></div></div></div>
 <div class="card"><p>“Atbalsts ir īsts un vienmēr pieejams. Mana pirmā analīze bija praktiska, un platforma kopš tā laika ir bijusi stabila un paredzama.”</p><div class="who"><div class="ini">A</div><div><b>Andris Krūmiņš</b><span>Jūrmala</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="capabilities-title">Galvenās funkcijas īsumā</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">MI dzinējs</div>
 <div class="spec-v">Uzlabota tirgus analīze ar mašīnmācīšanos</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Iemaksu veidi</div>
 <div class="spec-v">Kredītkarte, bankas pārskaitījums, PayPal, digitālie maki</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Vairāku platformu piekļuve</div>
 <div class="spec-v">Tīmeklis, planšetdators un mobilais — pilnībā responsīvs</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signālu precizitāte</div>
 <div class="spec-v">Līdz 85 % atbalstītajās MI stratēģijās</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Tirgi</div>
 <div class="spec-v">Kriptovalūtas, forex, akcijas un izejvielas</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Reģistrācija</div>
 <div class="spec-v">Ātra konta atvēršana ar vadītu verificēšanu</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Atbalsts</div>
 <div class="spec-v">Profesionāls atbalsts visu diennakti — <a href="<?= page_url('contacts.php') ?>">Nosūtīt ziņojumu</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Jautājumi</span><h2 id="faq-title">Bieži uzdotie jautājumi.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Kāda ir minimālā iemaksa?</summary><p>Atveriet un finansējiet kontu no minimālās iemaksas. Varat papildināt atlikumu laika gaitā, kad jūsu plāns progresē.</p></details>
 <details><summary>Kā darbojas izmaksas?</summary><p>Pieprasiet izmaksu jebkurā laikā no paneļa. Līdzekļi atgriežas jūsu izvēlētajā maksājuma veidā, ievērojot standarta apstrādes termiņus.</p></details>
 <details><summary>Vai mana nauda ir drošībā?</summary><p>Konti tiek aizsargāti ar nozares standarta drošību un stingru verificēšanu. Tāpat kā jebkurā ieguldījumā, jūsu kapitāls ir pakļauts riskam, un vērtības var kristies tikpat, cik pieaugt.</p></details>
 <details><summary>Cik ātri es varu sākt?</summary><p>Lielākā daļa dalībnieku reģistrāciju pabeidz dažu minūšu laikā. Tiklīdz pirmā iemaksa ir apstiprināta, plāns aktivizējas nekavējoties.</p></details>
 <details><summary>Vai ir slēptas komisijas?</summary><p>Izmaksas tiek rādītas caurspīdīgi pirms jūs apņematies. Jūs vienmēr precīzi zināsiet, kas attiecas uz jūsu plānu — bez pārsteiguma maksām.</p></details>
 <details><summary>Kāds ir minimālais vecums reģistrācijai?</summary><p>Jums jābūt vismaz 18 gadus vecam, lai atvērtu kontu un ieguldītu. Var tikt pieprasīta verificēšana, lai apstiprinātu vecumu un identitāti.</p></details>
 <details><summary>Kādi maksājumu veidi tiek atbalstīti?</summary><p>Tiek atbalstīti izplatīti veidi, piemēram, debetkartes un kredītkartes, bankas pārskaitījums, atlasītie e-maki un kriptovalūtas. Precīzās iespējas parādās iemaksas solī.</p></details>
 <details><summary>Kad ir pieejams klientu atbalsts?</summary><p>Mūsu atbalsta komanda strādā no pirmdienas līdz piektdienai no 9:00 līdz 18:00 un apņemas atbildēt uz katru pieprasījumu vienas darba dienas laikā.</p></details>
 <details><summary>Kā tiek risināti nodokļi?</summary><p>Nodokļi par ieguldījumu peļņu ir atkarīgi no jūsu valsts noteikumiem un ir jūsu atbildība. Iesakām saglabāt uzskaiti un konsultēties ar kvalificētu nodokļu konsultantu.</p></details>
 <details><summary>Kas ir KYC un kāpēc tas ir obligāts?</summary><p>KYC (Know Your Customer) ir standarta identitātes pārbaude. Tā uztur kontus drošībā un ir daļa no jebkura ieguldījumu konta atvēršanas.</p></details>
 <details><summary>Vai man nepieciešama pieredze?</summary><p>Nē. Katrs dalībnieks saņem personīgo finanšu analītiķi, kas viņu vada katrā solī, tāpēc iepriekšējas tirgus zināšanas nav nepieciešamas.</p></details>
 <details><summary>Kas pārvalda manus ieguldījumus?</summary><p>Veltīts finanšu analītiķis, ko atbalsta MI rīki, strādājot atbilstoši jūsu mērķiem un riska līmenim. Analītiķis apvieno profesionālo ekspertīzi ar tehnoloģiju — lēmumi paliek cilvēka ziņā.</p></details>
 <details><summary>Vai platforma ir regulēta?</summary><p>Jā — tā atbilst nacionālajiem finanšu un kiberdrošības standartiem, ar iebūvētu konta aizsardzību un stingru verificēšanu.</p></details>
 <details><summary>Vai varu vēlāk pievienot līdzekļus?</summary><p>Jā. Varat papildināt kontu jebkurā laikā un pielāgot plānu ar savu analītiķi, kad mērķi mainās.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">UZTICAMS</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Atsauksmes</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> atsauksmes · Pamatojoties uz <b style="color:var(--text,#fff)">2.334</b> vērtējumiem</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Sāciet tagad</span>
 <h2 id="signup-title" class="cta-h">Atveriet savu kontu.</h2>
 <p class="lede">Pastāstiet, kā ar jums sazināties, un speciālists palīdzēs spert pirmo soli.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Atveriet savu kontu</h3>
 <p class="sub">Sāciet dažu minūšu laikā.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Sākt tagad';
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
 <p>MI ātrums, cilvēka lēmums. Kapitāls ir pakļauts riskam — ieguldiet atbildīgi.</p>
 </div>
 <div><h4>Produkts</h4><div class="foot-links">
 <a href="#platform">Sekojiet savam kontam reāllaikā</a><a href="#markets">Tirgi reāllaikā</a><a href="#how">Kā tas darbojas.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Uzņēmums</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Par mums</a><a href="<?= page_url('offer.php') ?>">Cenas</a><a href="<?= page_url('contacts.php') ?>">Kontakti</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privātuma politika</a><a href="<?= page_url('conditions.php') ?>">Lietošanas noteikumi</a><a href="<?= page_url('conditions.php') ?>">Risku informācija</a><a href="<?= page_url('contacts.php') ?>">Ziņot par pārkāpumu</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Visas tiesības aizsargātas. Ieguldīšana ietver risku, tostarp iespējamu kapitāla zaudējumu. · Ieguldīšana ietver risku, tostarp iespējamu daļas vai visa ieguldītā kapitāla zaudējumu. Ieguldījumu vērtība var pieaugt vai kristies, un jūs varat atgūt mazāk, nekā sākotnēji ieguldījāt. Neieguldiet naudu, ko nevarat atļauties zaudēt.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('lv-LV',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Lūdzu, uzgaidiet\u2026";
 var MSG_ERR = "Pa\u0161laik neizdev\u0101s nos\u016bt\u012bt j\u016bsu datus. L\u016bdzu, m\u0113\u0123iniet v\u0113lreiz.";
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
 initialCountry: (hid && hid.value) || 'lv',
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
<span style="flex:1;min-width:200px">Mēs izmantojam sīkdatnes, lai uzlabotu jūsu pieredzi.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Saprotu</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

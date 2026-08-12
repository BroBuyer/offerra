<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Tekoäly ja reaaliaikainen toteutus | Virallinen sivusto');
$page_description = SITE_NAME . ' — tekoälyteknologia, joka analysoi markkinoita ja toteuttaa toimeksiantoja reaaliajassa henkilökohtaisen analyytikon kanssa uuden tulolähteen rakentamiseksi.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Siirry sisältöön</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Etusivu">
 <a href="#platform">Tuote</a>
 <a href="#how">Miten se toimii.</a>
 <a href="#markets">Reaaliaikaiset markkinat</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Avaa tilisi</a>
 <button class="nav-toggle" aria-label="Avaa valikko" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">Reaaliaikainen tekoäly + ihmisanalyysi</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — sijoita nyt ja näe pääomasi kasvavan</h1>
 <p class="hero-sub">Tekoälymoottori skannaa markkinoita ja toteuttaa toimeksiantoja sekunnin murto-osissa, kun henkilökohtainen analyytikkosi mukauttaa jokaisen päätöksen profiiliisi. Kokemusta ei tarvita — sinua ohjataan alusta loppuun.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Säännelty</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Erotellut varat</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9 600 asiakasta</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> arvio</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>SSL-suojattu</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Tuki 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Nopea toteutus</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Aloita nyt — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Avaa tilisi</h2>
 <p class="sub">Aloita muutamassa minuutissa.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Haluan aloittaa';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Avainluvut">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktiiviset käyttäjät</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Kaupankäyntivolyymi</span></div>
 <div class="stat"><b>99,1%</b><span>Signaalien saatavuus</span></div>
 <div class="stat"><b>24/7</b><span>Tuki</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Sisällä <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Seuraa tiliäsi reaaliajassa</h2>
 <p class="lede">Jokainen analyytikkosi toteuttama toimeksianto kirjataan tänne — sisään- ja uloskäynnit sekä varmennetut tulokset jokaiselle parille, suorana.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kynttiläkaaviot ja syvyys reaaliajassa millä tahansa laitteella</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Toimeksiantojen lähetys yhdellä napautuksella ja välitön vahvistus</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Seurantalistat ja hintahälytykset, jotka seuraavat sinua</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Aloita nyt</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobiilikauppa reaaliaikaisilla kryptokaavioilla</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Alusta</span><h2 id="features-title">Kaikki tarvitsemasi yhdellä nopealla alustalla.</h2><p class="lede">Ei kaavioiden vahtimista, ei toimeksiantojen ajoitusta. <?= e(SITE_NAME) ?>-moottori seuraa order bookeja reaaliajassa kryptopörsseissä, globaaleissa osake-API:issa ja tärkeimmissä forex-pareissa — ja laukaisee toimeksiantoja heti, kun mallit löytävät edullisen asetelman.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Toteutus sekunnin murto-osissa jokaisella yhdistetyllä markkinapaikalla</h3><p><?= e(SITE_NAME) ?> ylläpitää matalan viiveen API-yhteyksiä jokaiseen tuettuun pörssiin. Kun malli antaa signaalin, toimeksianto reititetään, toteutetaan ja kirjataan kojelaudallesi ennen seuraavaa tickiä.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktiivinen 24 tuntia vuorokaudessa kaikissa sessioissa</h3><p>Kryptomarkkina ei nuku koskaan, eikä <?= e(SITE_NAME) ?>-moottorikaan. Se jatkaa parien skannausta viikonloppuisin ja pyhinä, jotta et missaa ikkunaa.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Raportit useissa valuutoissa</h3><p>Jokainen saldo, toimeksianto ja nosto näkyy paikallisessa valuutassasi. Ei piilotettua muunnosvaihetta.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Eroteltu pääoma</h3><p>Varasi pysyvät omalla tililläsi. <?= e(SITE_NAME) ?> ei koskaan pidä säilytystä — moottorilla on vain oikeus reitittää toimeksiantoja.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Pankkitason tietoturva</h3><p>TLS-salaus koko alustalla, kaksivaiheinen todennus oletuksena ja neljännesvuosittaiset kolmannen osapuolen infrastruktuuriauditoinnit. Kauppakuitit kirjattu lohkoketjuun.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Kolme omaisuusluokkaa, yksi alusta</h3><p>Useimmat vähittäisalustat rajoittuvat yhteen markkinaan. <?= e(SITE_NAME) ?> käy kauppaa kryptolla, listatuilla osakkeilla ja tärkeimmillä forex-pareilla samassa kojelaudassa.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ennalta asetetut riskirajat jokaisessa positiossa</h3><p>Stop-loss, enimmäisdrawdown ja pääoman allokointirajat määritetään omaisuusluokittain. Moottori sulkee automaattisesti minkä tahansa kaupan, joka ylittää rajan, ja tapahtuma kirjataan auditointihistoriaan.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Reaaliaikaiset markkinat</span>
 <h2 id="markets-title">Käy kauppaa Bitcoinilla, Ethereumilla ja muilla</h2>
 <p class="lede">Reaaliaikaiset hinnat, edistyneet indikaattorit ja ammattimainen näkymä sinulle tärkeisiin markkinoihin.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Haluan markkinapääsyn</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Markkinat</span><span class="mkt-live"><i></i>Live</span></div>
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
 <div class="sec-head"><span class="eyebrow">Miten se toimii</span><h2 id="how-title">Miten se toimii.</h2><p class="lede">Huipputeknologia ja oikea ihmisanalyytikko työskentelevät yhdessä reaaliajassa auttaakseen sinua rakentamaan uuden tulolähteen — ohjauksella jokaisessa vaiheessa.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Luo tilisi</h3><p>Rekisteröidy minuuteissa pelkällä sähköpostilla.</p></div>
 <div class="step"><div class="n">2</div><h3>Vahvista sähköposti</h3><p>Vahvista osoitteesi tilisi suojaamiseksi.</p></div>
 <div class="step"><div class="n">3</div><h3>Talleta tilillesi</h3><p>Lisää varoja alkaen <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> omalla tavallasi.</p></div>
 <div class="step"><div class="n">4</div><h3>Aseta strategiasi</h3><p>Valitse tavoitteesi; analyytikko personoi suunnitelman.</p></div>
 <div class="step"><div class="n">5</div><h3>Aloita kaupankäynti</h3><p>Seuraa ohjattuja signaaleja ja kasva omaan tahtiisi.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Talletukset</span><h2 id="payment-title">Talleta jo tuntemillasi tavoilla</h2><p class="lede">Talleta ja nosta turvallisten, tuttujen kanavien kautta — ilman piilotettuja maksuja.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Pankkisiirto</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Mitä jäsenet sanovat</span><h2 id="reviews-title">Mitä sijoittajamme sanovat</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>”Analyytikkoni selitti kaiken selkeästi. Asetin tavoitteet kerran, ja nyt näen tarkalleen, miten pääomani kasvaa — ilman hermostumista jokaisesta liikkeestä.”</p><div class="who"><div class="ini">A</div><div><b>Anna Virtanen</b><span>Helsinki</span></div></div></div>
 <div class="card"><p>”En ollut sijoittanut aiemmin — analyytikkoni hoiti strategian ja selitti jokaisen askeleen. Ei tyhjiä lupauksia, ei painostusta, ja nostot saapuvat odotetusti.”</p><div class="who"><div class="ini">J</div><div><b>Jukka Korhonen</b><span>Tampere</span></div></div></div>
 <div class="card"><p>”Aloitin pienesti testatakseni. Läpinäkyvyys ja tuki antoivat luottamusta jatkaa.”</p><div class="who"><div class="ini">S</div><div><b>Sofia Mäkinen</b><span>Turku</span></div></div></div>
 <div class="card"><p>”Analyysit tulevat minulle — hyväksyn tai säädän minuuteissa. Sopii täydellisesti rutiiniini häiritsemättä työtä.”</p><div class="who"><div class="ini">L</div><div><b>Lauri Nieminen</b><span>Oulu</span></div></div></div>
 <div class="card"><p>”Läpinäkyvyys vakuutti minut: jokainen päätös selitetään, ja näen perustelut ennen kuin mitään tapahtuu.”</p><div class="who"><div class="ini">E</div><div><b>Emma Laine</b><span>Jyväskylä</span></div></div></div>
 <div class="card"><p>”Tuki on aitoa ja aina saatavilla. Ensimmäinen analyysini oli käytännönläheinen, ja alusta on ollut vakaa ja ennakoitava siitä lähtien.”</p><div class="who"><div class="ini">M</div><div><b>Mikko Heikkinen</b><span>Kuopio</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Alusta</span><h2 id="capabilities-title">Tärkeimmät ominaisuudet lyhyesti</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Tekoälymoottori</div>
 <div class="spec-v">Edistynyt markkina-analyysi koneoppimisella</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Talletustavat</div>
 <div class="spec-v">Luottokortti, pankkisiirto, PayPal, digitaaliset lompakot</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Monialustainen käyttö</div>
 <div class="spec-v">Web, tabletti ja mobiili — täysin responsiivinen</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signaalitarkkuus</div>
 <div class="spec-v">Jopa 85 % tuetuissa tekoälystrategioissa</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Markkinat</div>
 <div class="spec-v">Kryptovaluutat, forex, osakkeet ja raaka-aineet</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Rekisteröinti</div>
 <div class="spec-v">Nopea tilinavaus ohjatulla vahvistuksella</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Tuki</div>
 <div class="spec-v">Ammattimainen tuki ympäri vuorokauden — <a href="<?= page_url('contacts.php') ?>">Lähetä viesti</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Kysymykset</span><h2 id="faq-title">Usein kysytyt kysymykset.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Mikä on minimitalletus?</summary><p>Avaa ja rahoita tilisi minimitalletuksesta. Voit lisätä saldoa ajan myötä suunnitelman edetessä.</p></details>
 <details><summary>Miten nostot toimivat?</summary><p>Pyydä nostoa milloin tahansa kojelaudalta. Varat palautuvat valitsemallesi maksutavalle tavanomaisten käsittelyaikojen mukaisesti.</p></details>
 <details><summary>Onko rahani turvassa?</summary><p>Tilejä suojataan alan standarditurvallisuudella ja tiukalla vahvistuksella. Kuten kaikessa sijoittamisessa, pääomasi on riskissä ja arvot voivat laskea tai nousta.</p></details>
 <details><summary>Kuinka nopeasti voin aloittaa?</summary><p>Useimmat jäsenet viimeistelevät rekisteröinnin muutamassa minuutissa. Kun ensimmäinen talletus on vahvistettu, suunnitelma aktivoituu heti.</p></details>
 <details><summary>Onko piilotettuja maksuja?</summary><p>Kustannukset näytetään läpinäkyvästi ennen sitoutumista. Tiedät aina tarkalleen, mikä koskee suunnitelmaasi — ei yllätyksiä.</p></details>
 <details><summary>Mikä on vähimmäisikä rekisteröitymiseen?</summary><p>Sinun on oltava vähintään 18-vuotias avataksesi tilin ja sijoittaaksesi. Vahvistus voi olla tarpeen iän ja henkilöllisyyden varmistamiseksi.</p></details>
 <details><summary>Mitkä maksutavat tuetaan?</summary><p>Yleiset tavat kuten debit- ja luottokortit, pankkisiirto, valitut e-lompakot ja kryptovaluutat tuetaan. Tarkat vaihtoehdot näkyvät talletusvaiheessa.</p></details>
 <details><summary>Milloin asiakastuki on saatavilla?</summary><p>Tukitiimimme toimii maanantaista perjantaihin klo 9–18 ja sitoutuu vastaamaan jokaiseen pyyntöön yhden arkipäivän kuluessa.</p></details>
 <details><summary>Miten verot käsitellään?</summary><p>Sijoitusvoittojen verot riippuvat maasi säännöistä ja ovat sinun vastuullasi. Suosittelemme kirjanpitoa ja pätevän veroneuvojan konsultointia.</p></details>
 <details><summary>Mikä on KYC ja miksi se on pakollinen?</summary><p>KYC (Know Your Customer) on standardi henkilöllisyyden tarkistus. Se pitää tilit turvassa ja kuuluu jokaisen sijoitustilin avaamiseen.</p></details>
 <details><summary>Tarvitsenko kokemusta?</summary><p>Ei. Jokainen jäsen saa henkilökohtaisen talousanalyytikon, joka ohjaa joka vaiheessa — aiempaa markkinatietoa ei tarvita.</p></details>
 <details><summary>Kuka hallinnoi sijoituksiani?</summary><p>Omistautunut talousanalyytikko tekoälytyökalujen tukemana, työskennellen tavoitteidesi ja riskitasosi ympärillä. Analyytikko yhdistää ammattiosaamisen teknologiaan — päätökset pysyvät inhimillisinä.</p></details>
 <details><summary>Onko alusta säännelty?</summary><p>Kyllä — se täyttää kansalliset rahoitus- ja kyberturvallisuusstandardit, ja tilisuoja sekä tiukka vahvistus on rakennettu sisään.</p></details>
 <details><summary>Voinko lisätä varoja myöhemmin?</summary><p>Kyllä. Voit rahoittaa tiliäsi milloin tahansa ja säätää suunnitelmaa analyytikon kanssa tavoitteidesi kehittyessä.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">LUOTETTAVA</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Arvostelut</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> arvostelua · Perustuu <b style="color:var(--text,#fff)">2.334</b> arvioon</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Aloita nyt</span>
 <h2 id="signup-title" class="cta-h">Avaa tilisi.</h2>
 <p class="lede">Kerro, miten tavoitamme sinut, niin asiantuntija auttaa ensimmäisessä askeleessa.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Avaa tilisi</h3>
 <p class="sub">Aloita muutamassa minuutissa.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Haluan aloittaa';
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
 <p>Tekoälyn nopeus, ihmisen päätös. Pääoma on riskissä — sijoita vastuullisesti.</p>
 </div>
 <div><h4>Tuote</h4><div class="foot-links">
 <a href="#platform">Seuraa tiliäsi reaaliajassa</a><a href="#markets">Reaaliaikaiset markkinat</a><a href="#how">Miten se toimii.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Yritys</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Tietoa meistä</a><a href="<?= page_url('offer.php') ?>">Hinnat</a><a href="<?= page_url('contacts.php') ?>">Yhteystiedot</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Tietosuoja</a><a href="<?= page_url('conditions.php') ?>">Ehdot</a><a href="<?= page_url('conditions.php') ?>">Riskitiedote</a><a href="<?= page_url('contacts.php') ?>">Ilmoita väärinkäytöstä</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Kaikki oikeudet pidätetään. Sijoittamiseen liittyy riski, mukaan lukien mahdollinen pääoman menetys. · Sijoittamiseen liittyy riski, mukaan lukien mahdollinen osan tai koko sijoitetun pääoman menetys. Sijoitusten arvo voi nousta tai laskea, ja saatat saada takaisin vähemmän kuin alun perin panostit. Älä sijoita rahaa, jonka menetystä et voi sietää.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('fi-FI',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Odota hetki\u2026";
 var MSG_ERR = "Tietojasi ei voitu l\u00e4hett\u00e4\u00e4 juuri nyt. Yrit\u00e4 uudelleen.";
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
 initialCountry: (hid && hid.value) || 'fi',
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
<span style="flex:1;min-width:200px">Käytämme evästeitä kokemuksesi parantamiseksi.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Selvä</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('MI és valós idejű végrehajtás | Hivatalos oldal');
$page_description = SITE_NAME . ' — MI-technológia, amely elemzi a piacokat és valós időben hajt végre megbízásokat, személyes elemzővel az Ön oldalán egy új jövedelemforrás építéséhez.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Ugrás a tartalomhoz</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Főoldal">
 <a href="#platform">Termék</a>
 <a href="#how">Hogyan működik.</a>
 <a href="#markets">Valós idejű piacok</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Nyissa meg fiókját</a>
 <button class="nav-toggle" aria-label="Menü megnyitása" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">Valós idejű MI + emberi elemzés</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — fektessen be most, és nézze tőkéje növekedését</h1>
 <p class="hero-sub">Egy mesterségesintelligencia-motor beolvassa a piacokat és másodperctöredékek alatt hajt végre megbízásokat, miközben személyes elemzője minden döntést az Ön profiljához igazít. Nincs szükség tapasztalatra — elejétől végéig vezetjük.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Szabályozott</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Elkülönített alapok</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9 600 ügyfél</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> értékelés</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>SSL-lel védve</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>24/7 támogatás</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Gyors végrehajtás</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Kezdje most — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> perc</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Nyissa meg fiókját</h2>
 <p class="sub">Kezdjen néhány perc alatt.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Szeretnék kezdeni';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Kulcsmutatók">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktív felhasználók</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Kereskedési volumen</span></div>
 <div class="stat"><b>99,1%</b><span>Jelzések elérhetősége</span></div>
 <div class="stat"><b>24/7</b><span>Támogatás</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Belül <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Kövesse fiókját valós időben</h2>
 <p class="lede">Minden, az elemzője által végrehajtott megbízás itt naplózódik — belépések, kilépések és ellenőrzött eredmények minden párra, élőben.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gyertyadiagramok és mélység valós időben, bármely eszközön</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Megbízás egy koppintással, azonnali visszaigazolással</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Figyelőlisták és árriasztások, amelyek követik Önt</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Kezdje most</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobil kereskedés valós idejű kriptodiagramokkal</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">A platform</span><h2 id="features-title">Minden, amire szüksége van, egy gyors platformon.</h2><p class="lede">Nincs diagramfigyelés, nincs megbízás-időzítés. A <?= e(SITE_NAME) ?> motorja valós időben figyeli a order bookokat a kriptotőzsdéken, a globális részvény-API-kon és a főbb forex párokon — és megbízásokat indít, amint a modellek kedvező felállást találnak.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Másodperctöredéknyi végrehajtás minden csatlakoztatott helyszínen</h3><p>A <?= e(SITE_NAME) ?> alacsony késleltetésű API-kapcsolatokat tart fenn minden támogatott tőzsdével. Amikor a modell jelet ad, a megbízás az irányítópulton irányításra, végrehajtásra és naplózásra kerül a következő tick előtt.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>24 órán át aktív, minden szekcióban</h3><p>A kriptopiac sosem alszik, és a <?= e(SITE_NAME) ?> motorja sem. Hétvégéken és ünnepnapokon is szkenneli a párokat, hogy soha ne maradjon le egy ablakról.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Jelentések több valutában</h3><p>Minden egyenleg, minden megbízás, minden kifizetés a helyi valutájában jelenik meg. Nincs rejtett átváltási lépés.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Elkülönített tőke</h3><p>Az Ön eszközei a saját számláján maradnak. A <?= e(SITE_NAME) ?> soha nem rendelkezik letéttel — a motor csak megbízások irányítására jogosult.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Banki szintű biztonság</h3><p>TLS-titkosítás a teljes platformon, alapértelmezett kétfaktoros hitelesítés és negyedéves harmadik fél infrastruktúra-auditok. Kereskedési bizonylatok a blockchainen rögzítve.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Három eszközosztály, egy platform</h3><p>A legtöbb lakossági platform egyetlen piacra korlátozódik. A <?= e(SITE_NAME) ?> kriptót, jegyzett részvényeket és főbb forex párokat kezel ugyanazon a vezérlőpulton.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Előre beállított kockázati limitek minden pozíción</h3><p>A stop-loss, a maximális drawdown és a tőkeallokációs limitek eszközosztályonként vannak beállítva. A motor automatikusan kilép minden limitet átlépő ügyletből, és az esemény az auditelőzménybe kerül.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Valós idejű piacok</span>
 <h2 id="markets-title">Kereskedjen Bitcoinnal, Ethereummal és többel</h2>
 <p class="lede">Valós idejű árak, fejlett indikátorok és professzionális kép a számottevő piacokról.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Piaci hozzáférést szeretnék</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Piacok</span><span class="mkt-live"><i></i>Élő</span></div>
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
 <div class="sec-head"><span class="eyebrow">Hogyan működik</span><h2 id="how-title">Hogyan működik.</h2><p class="lede">Csúcstechnológia és valódi emberi elemző, akik valós időben dolgoznak együtt, hogy új jövedelemforrást építsen — útmutatással minden lépésnél.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Hozza létre fiókját</h3><p>Regisztráljon percek alatt csak e-maillel.</p></div>
 <div class="step"><div class="n">2</div><h3>Erősítse meg e-mailjét</h3><p>Ellenőrizze címét a fiók védelméhez.</p></div>
 <div class="step"><div class="n">3</div><h3>Helyezzen be a fiókjára</h3><p>Adjon hozzá forrásokat innen: <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> a saját módján.</p></div>
 <div class="step"><div class="n">4</div><h3>Állítsa be stratégiáját</h3><p>Válassza ki céljait; elemzője személyre szabja a tervet.</p></div>
 <div class="step"><div class="n">5</div><h3>Kezdjen kereskedni</h3><p>Kövesse a vezetett jeleket, és növekedjen a saját tempójában.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Befizetések</span><h2 id="payment-title">Fizessen be már ismert módokon</h2><p class="lede">Fizessen be és vegyen fel biztonságos, ismerős csatornákon — rejtett díjak nélkül.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Banki átutalás</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Mit mondanak a tagok</span><h2 id="reviews-title">Mit mondanak befektetőink</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Az elemzőm mindent világosan elmagyarázott. Egyszer állítottam be a céljaimat, és most pontosan látom, hogyan nő a tőkém — anélkül, hogy minden mozgásnál ideges lennék.”</p><div class="who"><div class="ini">A</div><div><b>Anna Kovács</b><span>Budapest</span></div></div></div>
 <div class="card"><p>„Soha nem fektettem be korábban — az elemzőm kezelte a stratégiát és elmagyarázott minden lépést. Nincs üres ígéret, nincs nyomás, és a kifizetések az elvárt módon érkeznek.”</p><div class="who"><div class="ini">T</div><div><b>Tamás Nagy</b><span>Debrecen</span></div></div></div>
 <div class="card"><p>„Kicsiben kezdtem a teszteléshez. Az átláthatóság és a támogatás adott magabiztosságot a továbblépéshez.”</p><div class="who"><div class="ini">Z</div><div><b>Zsófia Szabó</b><span>Szeged</span></div></div></div>
 <div class="card"><p>„Az elemzések hozzám érkeznek — percek alatt jóváhagyok vagy módosítok. Tökéletesen illeszkedik a rutinomba, a munka zavarása nélkül.”</p><div class="who"><div class="ini">L</div><div><b>László Tóth</b><span>Pécs</span></div></div></div>
 <div class="card"><p>„Az átláthatóság győzött meg: minden döntés magyarázott, és a gondolatmenetet látom, mielőtt bármi történne.”</p><div class="who"><div class="ini">E</div><div><b>Eszter Horváth</b><span>Győr</span></div></div></div>
 <div class="card"><p>„A támogatás valódi és mindig elérhető. Az első elemzésem gyakorlatias volt, és a platform azóta stabil és kiszámítható.”</p><div class="who"><div class="ini">G</div><div><b>Gábor Kiss</b><span>Miskolc</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="capabilities-title">Főbb funkciók röviden</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">MI-motor</div>
 <div class="spec-v">Fejlett piacelemzés gépi tanulással</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Befizetési módok</div>
 <div class="spec-v">Hitelkártya, banki átutalás, PayPal, digitális tárcák</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Többplatformos hozzáférés</div>
 <div class="spec-v">Web, tablet és mobil — teljesen reszponzív</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Jelzéspontosság</div>
 <div class="spec-v">Akár 85% a támogatott MI-stratégiáknál</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Piacok</div>
 <div class="spec-v">Kriptovaluták, forex, részvények és árucikkek</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Regisztráció</div>
 <div class="spec-v">Gyors számlanyitás vezetett ellenőrzéssel</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Támogatás</div>
 <div class="spec-v">Professzionális támogatás éjjel-nappal — <a href="<?= page_url('contacts.php') ?>">Üzenet küldése</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Kérdések</span><h2 id="faq-title">Gyakran ismételt kérdések.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Mi a minimális befizetés?</summary><p>Nyissa meg és finanszírozza fiókját a minimális befizetéstől. Egyenleget később is hozzáadhat, ahogy a terve halad.</p></details>
 <details><summary>Hogyan működnek a kifizetések?</summary><p>Kérjen kifizetést bármikor a vezérlőpultról. Az összeg a választott fizetési módra tér vissza a szokásos feldolgozási idők betartásával.</p></details>
 <details><summary>Biztonságban van a pénzem?</summary><p>A fiókokat iparági szintű biztonság és szigorú ellenőrzés védi. Mint minden befektetésnél, tőkéje kockázatnak van kitéve, és az értékek csökkenhetnek vagy növekedhetnek.</p></details>
 <details><summary>Milyen gyorsan kezdhetek?</summary><p>A legtöbb tag néhány perc alatt befejezi a regisztrációt. Az első befizetés megerősítése után a terv azonnal aktiválódik.</p></details>
 <details><summary>Vannak rejtett díjak?</summary><p>A költségek átláthatóan jelennek meg, mielőtt elköteleződik. Mindig pontosan tudja, mi vonatkozik a tervére — nincsenek meglepetések.</p></details>
 <details><summary>Mi a minimális életkor a regisztrációhoz?</summary><p>Legalább 18 évesnek kell lennie fiók nyitásához és befektetéshez. Az életkor és a személyazonosság megerősítéséhez ellenőrzés szükséges lehet.</p></details>
 <details><summary>Melyik fizetési módok támogatottak?</summary><p>Gyakori módok, mint debit- és hitelkártya, banki átutalás, kiválasztott e-pénztárcák és kriptovaluták támogatottak. A pontos lehetőségek a befizetési lépésnél jelennek meg.</p></details>
 <details><summary>Mikor érhető el az ügyfélszolgálat?</summary><p>Támogató csapatunk hétfőtől péntekig, 9–18 óráig működik, és vállalja, hogy minden megkeresésre egy munkanapon belül válaszol.</p></details>
 <details><summary>Hogyan kezelik az adókat?</summary><p>A befektetési nyereség adója az Ön országának szabályaitól függ, és az Ön felelőssége. Ajánljuk a nyilvántartást és minősített adótanácsadó konzultációját.</p></details>
 <details><summary>Mi a KYC, és miért kötelező?</summary><p>A KYC (Know Your Customer) szabványos személyazonosság-ellenőrzés. Biztonságban tartja a fiókokat, és minden befektetési számla megnyitásának része.</p></details>
 <details><summary>Szükségem van tapasztalatra?</summary><p>Nem. Minden tag személyes pénzügyi elemzőt kap, aki minden lépésnél vezet — előzetes piaci tudás nem szükséges.</p></details>
 <details><summary>Ki kezeli a befektetéseimet?</summary><p>Dedikált pénzügyi elemző, MI-eszközökkel támogatva, az Ön céljai és kockázati szintje körül dolgozva. Az elemző a szakmai szakértelmet a technológiával ötvözi — a döntések emberiek maradnak.</p></details>
 <details><summary>Szabályozott a platform?</summary><p>Igen — megfelel a nemzeti pénzügyi és kiberbiztonsági szabványoknak, beépített fiókvédelemmel és szigorú ellenőrzéssel.</p></details>
 <details><summary>Hozzáadhatok később forrásokat?</summary><p>Igen. Bármikor feltöltheti fiókját, és elemzőjével igazíthatja tervét, ahogy céljai fejlődnek.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">MEGBÍZHATÓ</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Értékelések</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> értékelés · Alapján <b style="color:var(--text,#fff)">2.334</b> értékelés</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Kezdje most</span>
 <h2 id="signup-title" class="cta-h">Nyissa meg fiókját.</h2>
 <p class="lede">Mondja el, hogyan érhetjük el, és egy szakértő segít az első lépésben.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Nyissa meg fiókját</h3>
 <p class="sub">Kezdjen néhány perc alatt.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Szeretnék kezdeni';
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
 <p>MI-sebesség, emberi döntés. A tőke kockázatnak van kitéve — fektessen be felelősséggel.</p>
 </div>
 <div><h4>Termék</h4><div class="foot-links">
 <a href="#platform">Kövesse fiókját valós időben</a><a href="#markets">Valós idejű piacok</a><a href="#how">Hogyan működik.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Cég</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Rólunk</a><a href="<?= page_url('offer.php') ?>">Árak</a><a href="<?= page_url('contacts.php') ?>">Kapcsolat</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Adatvédelem</a><a href="<?= page_url('conditions.php') ?>">Feltételek</a><a href="<?= page_url('conditions.php') ?>">Kockázati tájékoztató</a><a href="<?= page_url('contacts.php') ?>">Visszaélés bejelentése</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Minden jog fenntartva. A befektetés kockázattal jár, beleértve a tőke esetleges elvesztését. · A befektetés kockázattal jár, beleértve a befektetett tőke egy részének vagy egészének esetleges elvesztését. A befektetések értéke nőhet vagy csökkenhet, és kevesebbet kaphat vissza, mint amennyit eredetileg betett. Ne fektessen be olyan pénzt, amelyet nem engedhet meg magának elveszíteni.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('hu-HU',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' Ft';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Kérjük, várjon\u2026";
 var MSG_ERR = "Az adatait most nem siker\u00fclt elk\u00fcldeni. Pr\u00f3b\u00e1lja \u00fajra.";
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
 initialCountry: (hid && hid.value) || 'hu',
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
<span style="flex:1;min-width:200px">Sütiket használunk a jobb élmény érdekében.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Értem</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

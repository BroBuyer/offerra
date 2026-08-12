<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('UI i izvršenje u stvarnom vremenu | Službena stranica');
$page_description = SITE_NAME . ' — UI tehnologija koja analizira tržišta i izvršava naloge u stvarnom vremenu, uz osobnog analitičara uz vas za izgradnju novog izvora prihoda.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Skoči na sadržaj</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Glavna">
 <a href="#platform">Proizvod</a>
 <a href="#how">Kako funkcionira.</a>
 <a href="#markets">Tržišta u stvarnom vremenu</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Otvorite svoj račun</a>
 <button class="nav-toggle" aria-label="Otvori izbornik" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">UI u stvarnom vremenu + ljudska analiza</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investirajte sada i gledajte kako kapital raste</h1>
 <p class="hero-sub">Motor umjetne inteligencije skenira tržišta i izvršava naloge u djelićima sekunde, dok vaš osobni analitičar prilagođava svaku odluku vašem profilu. Iskustvo nije potrebno — vodimo vas od početka do kraja.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulirano</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Odvojeni fondovi</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 klijenata</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> ocjena</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Zaštićeno SSL-om</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Podrška 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Brzo izvršenje</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Započnite sada — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Otvorite svoj račun</h2>
 <p class="sub">Započnite u nekoliko minuta.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Želim početi';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Ključni pokazatelji">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktivni korisnici</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Obujam trgovanja</span></div>
 <div class="stat"><b>99,1%</b><span>Dostupnost signala</span></div>
 <div class="stat"><b>24/7</b><span>Podrška</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Iznutra <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Pratite svoj račun u stvarnom vremenu</h2>
 <p class="lede">Svaki nalog koji izvrši vaš analitičar ovdje je zabilježen — ulazi, izlazi i verificirani rezultati za svaki par, uživo.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Svijećni grafikoni i dubina u stvarnom vremenu, na bilo kojem uređaju</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Slanje naloga jednim dodirom uz trenutačnu potvrdu</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Popisi praćenja i cjenovne obavijesti koje vas prate</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Započni sada</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobilno trgovanje s krypto grafikonima u stvarnom vremenu</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="features-title">Sve što trebate, na jednoj brzoj platformi.</h2><p class="lede">Bez praćenja grafikona, bez tajminga naloga. Motor <?= e(SITE_NAME) ?> prati knjige naloga u stvarnom vremenu na krypto burzama, globalnim dioničkim API-jima i glavnim forex parovima — i pokreće naloge čim modeli pronađu povoljan setup.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Izvršenje u djelićima sekunde na svakom povezanom tržištu</h3><p><?= e(SITE_NAME) ?> održava API veze niske latencije sa svakom podržanom burzom. Kada model pošalje signal, nalog se usmjerava, izvršava i bilježi na nadzornu ploču prije sljedećeg ticka.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktivno 24 sata dnevno, u svim sesijama</h3><p>Krypto tržište nikad ne spava — niti motor <?= e(SITE_NAME) ?>. Nastavlja skenirati parove vikendom i praznicima kako ne biste propustili prozor.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Izvještaji u više valuta</h3><p>Svaki saldo, svaki nalog, svako podizanje prikazuje se u vašoj lokalnoj valuti. Nema skrivenog koraka konverzije.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Odvojeni kapital</h3><p>Vaša sredstva ostaju na vašem vlastitom računu. <?= e(SITE_NAME) ?> nikad nema skrbništvo — motor ima samo dozvolu za usmjeravanje naloga.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Sigurnost bankarske razine</h3><p>TLS enkripcija na cijeloj platformi, dvofaktorska autentifikacija prema zadanim postavkama i tromjesečni auditi infrastrukture od trećih strana. Potvrde trgovanja zabilježene na blockchainu.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tri klase imovine, jedna platforma</h3><p>Većina maloprodajnih platformi ograničena je na jedno tržište. <?= e(SITE_NAME) ?> trguje krypto, uvrštenim dionicama i glavnim forex parovima na istoj nadzornoj ploči.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Unaprijed postavljeni limiti rizika na svakoj poziciji</h3><p>Stop-loss, maksimalni drawdown i limiti alokacije kapitala konfigurirani su po klasi imovine. Motor automatski zatvara svaku trgovinu koja premaši limit, a događaj se bilježi u povijesti audita.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Tržišta u stvarnom vremenu</span>
 <h2 id="markets-title">Trgujte Bitcoinom, Ethereumom i više</h2>
 <p class="lede">Cijene u stvarnom vremenu, napredni indikatori i profesionalan pogled na tržišta koja vas zanimaju.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Želim pristup tržištima</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Tržišta</span><span class="mkt-live"><i></i>Uživo</span></div>
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
 <div class="sec-head"><span class="eyebrow">Kako funkcionira</span><h2 id="how-title">Kako funkcionira.</h2><p class="lede">Vrhunska tehnologija i pravi ljudski analitičar, koji rade zajedno u stvarnom vremenu, pomažu vam izgraditi novi izvor prihoda — uz vodstvo na svakom koraku.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Stvorite svoj račun</h3><p>Registrirajte se u minutama samo e-mailom.</p></div>
 <div class="step"><div class="n">2</div><h3>Potvrdite e-mail</h3><p>Potvrdite adresu radi zaštite računa.</p></div>
 <div class="step"><div class="n">3</div><h3>Uplatite na svoj račun</h3><p>Dodajte sredstva od <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> na svoj način.</p></div>
 <div class="step"><div class="n">4</div><h3>Postavite strategiju</h3><p>Odaberite ciljeve; analitičar personalizira plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Počnite trgovati</h3><p>Slijedite vođene signale i rastite vlastitim tempom.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Uplate</span><h2 id="payment-title">Uplatite metodama koje već poznajete</h2><p class="lede">Uplaćujte i podižite putem sigurnih, poznatih kanala — bez skrivenih naknada.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bankovni transfer</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Što kažu članovi</span><h2 id="reviews-title">Što kažu naši investitori</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Moj analitičar mi je sve jasno objasnio. Ciljeve sam postavio jednom i sada točno vidim kako kapital raste — bez nervoze pri svakom pokretu.”</p><div class="who"><div class="ini">A</div><div><b>Ana Horvat</b><span>Zagreb</span></div></div></div>
 <div class="card"><p>„Nikad prije nisam investirao — analitičar je preuzeo strategiju i objasnio svaki korak. Bez praznih obećanja, bez pritiska, a isplate stižu kako se očekuje.”</p><div class="who"><div class="ini">M</div><div><b>Marko Kovač</b><span>Split</span></div></div></div>
 <div class="card"><p>„Počeo sam s malo za test. Transparentnost i podrška dale su mi sigurnost da nastavim.”</p><div class="who"><div class="ini">P</div><div><b>Petra Babić</b><span>Rijeka</span></div></div></div>
 <div class="card"><p>„Analize dolaze do mene — odobrim ili prilagodim u minutama. Savršeno se uklapa u rutinu bez ometanja posla.”</p><div class="who"><div class="ini">I</div><div><b>Ivan Jurić</b><span>Osijek</span></div></div></div>
 <div class="card"><p>„Uvjerila me transparentnost: svaka odluka je objašnjena i vidim obrazloženje prije nego što se išta dogodi.”</p><div class="who"><div class="ini">I</div><div><b>Ivana Marić</b><span>Zadar</span></div></div></div>
 <div class="card"><p>„Podrška je stvarna i uvijek dostupna. Prva analiza bila je praktična, a platforma je od tada stabilna i predvidljiva.”</p><div class="who"><div class="ini">T</div><div><b>Tomislav Novak</b><span>Pula</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="capabilities-title">Glavne značajke, ukratko</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">UI motor</div>
 <div class="spec-v">Napredna analiza tržišta uz strojno učenje</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Načini uplate</div>
 <div class="spec-v">Kreditna kartica, bankovni transfer, PayPal, digitalni novčanici</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Višeplatformski pristup</div>
 <div class="spec-v">Web, tablet i mobitel — potpuno responzivno</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Točnost signala</div>
 <div class="spec-v">Do 85% na podržanim UI strategijama</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Tržišta</div>
 <div class="spec-v">Kriptovalute, forex, dionice i robe</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registracija</div>
 <div class="spec-v">Brzo otvaranje računa uz vođenu verificaciju</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Podrška</div>
 <div class="spec-v">Profesionalna podrška non-stop — <a href="<?= page_url('contacts.php') ?>">Pošalji poruku</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Pitanja</span><h2 id="faq-title">Često postavljana pitanja.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Koliki je minimalni depozit?</summary><p>Otvorite i financirajte račun od minimalnog depozita. Saldo možete dodavati tijekom vremena kako plan napreduje.</p></details>
 <details><summary>Kako funkcioniraju isplate?</summary><p>Zatražite isplatu bilo kada s nadzorne ploče. Sredstva se vraćaju na odabranu metodu plaćanja uz poštivanje standardnih rokova obrade.</p></details>
 <details><summary>Je li moj novac siguran?</summary><p>Računi su zaštićeni industrijskom sigurnošću i strogom verificacijom. Kao kod svake investicije, kapital je izložen riziku i vrijednosti mogu pasti ili porasti.</p></details>
 <details><summary>Koliko brzo mogu početi?</summary><p>Većina članova završi registraciju u nekoliko minuta. Nakon potvrde prve uplate plan se odmah aktivira.</p></details>
 <details><summary>Postoje li skrivene naknade?</summary><p>Troškovi se prikazuju transparentno prije obveze. Uvijek točno znate što vrijedi za vaš plan — bez iznenađenja.</p></details>
 <details><summary>Koja je minimalna dob za registraciju?</summary><p>Morate imati najmanje 18 godina za otvaranje računa i ulaganje. Verifikacija može biti potrebna za potvrdu dobi i identiteta.</p></details>
 <details><summary>Koje metode plaćanja su podržane?</summary><p>Uobičajene metode kao debitne i kreditne kartice, bankovni transfer, odabrani e-novčanici i kriptovalute su podržane. Točne opcije pojavljuju se u koraku uplate.</p></details>
 <details><summary>Kada je dostupna korisnička podrška?</summary><p>Naš tim podrške radi od ponedjeljka do petka, 9–18 sati, i obvezuje se odgovoriti na svaki zahtjev unutar jednog radnog dana.</p></details>
 <details><summary>Kako se tretiraju porezi?</summary><p>Porezi na investicijske dobiti ovise o pravilima vaše zemlje i vaša su odgovornost. Preporučujemo vođenje evidencije i konzultaciju kvalificiranog poreznog savjetnika.</p></details>
 <details><summary>Što je KYC i zašto je obavezan?</summary><p>KYC (Know Your Customer) je standardna provjera identiteta. Čuva račune sigurnima i dio je otvaranja svakog investicijskog računa.</p></details>
 <details><summary>Trebam li iskustvo?</summary><p>Ne. Svaki član dobiva osobnog financijskog analitičara koji ga vodi na svakom koraku, pa prethodno znanje o tržištima nije potrebno.</p></details>
 <details><summary>Tko upravlja mojim ulaganjima?</summary><p>Posvećeni financijski analitičar, podržan UI alatima, koji radi oko vaših ciljeva i razine rizika. Analitičar kombinira stručnost s tehnologijom — odluke ostaju ljudske.</p></details>
 <details><summary>Je li platforma regulirana?</summary><p>Da — zadovoljava nacionalne financijske i kibernetičke standarde, uz zaštitu računa i strogu verificaciju.</p></details>
 <details><summary>Mogu li kasnije dodati sredstva?</summary><p>Da. Račun možete financirati bilo kada i prilagoditi plan s analitičarem kako se ciljevi razvijaju.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">POUZDANO</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Recenzije</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> recenzija · Na temelju <b style="color:var(--text,#fff)">2.334</b> ocjena</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Započnite sada</span>
 <h2 id="signup-title" class="cta-h">Otvorite svoj račun.</h2>
 <p class="lede">Recite nam kako vas kontaktirati i stručnjak će pomoći pri prvom koraku.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Otvorite svoj račun</h3>
 <p class="sub">Započnite u nekoliko minuta.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Želim početi';
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
 <p>Brzina UI-ja, ljudska odluka. Kapital je izložen riziku — investirajte odgovorno.</p>
 </div>
 <div><h4>Proizvod</h4><div class="foot-links">
 <a href="#platform">Pratite svoj račun u stvarnom vremenu</a><a href="#markets">Tržišta u stvarnom vremenu</a><a href="#how">Kako funkcionira.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Tvrtka</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">O nama</a><a href="<?= page_url('offer.php') ?>">Cijene</a><a href="<?= page_url('contacts.php') ?>">Kontakt</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privatnost</a><a href="<?= page_url('conditions.php') ?>">Uvjeti</a><a href="<?= page_url('conditions.php') ?>">Objava rizika</a><a href="<?= page_url('contacts.php') ?>">Prijavi zlouporabu</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Sva prava pridržana. Ulaganje uključuje rizik, uključujući mogući gubitak kapitala. · Ulaganje uključuje rizik, uključujući mogući gubitak dijela ili cijelog uloženog kapitala. Vrijednost ulaganja može rasti ili padati i možete dobiti manje nego što ste prvotno uložili. Ne ulažite novac koji si ne možete priuštiti izgubiti.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('hr-HR',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Molimo pričekajte\u2026";
 var MSG_ERR = "Va\u0161e podatke trenuta\u010dno nismo mogli poslati. Poku\u0161ajte ponovno.";
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
 initialCountry: (hid && hid.value) || 'hr',
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
<span style="flex:1;min-width:200px">Koristimo kolačiće za poboljšanje vašeg iskustva.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Razumijem</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('IA și execuție în timp real | Site oficial');
$page_description = SITE_NAME . ' — tehnologie IA care analizează piețele și execută ordine în timp real, cu un analist personal alături pentru a construi o nouă sursă de venit.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Sari la conținut</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Principal">
 <a href="#platform">Produs</a>
 <a href="#how">Cum funcționează.</a>
 <a href="#markets">Piețe în timp real</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Deschide-ți contul</a>
 <button class="nav-toggle" aria-label="Deschide meniul" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">IA în timp real + analiză umană</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investește acum și vezi capitalul crescând</h1>
 <p class="hero-sub">Un motor de inteligență artificială scanează piețele și execută ordine în fracțiuni de secundă, în timp ce analistul tău personal adaptează fiecare decizie la profilul tău. Nu e nevoie de experiență — ești ghidat de la început până la final.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Reglementat</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Fonduri segregate</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 clienți</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> evaluare</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protejat prin SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Asistență 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Execuție rapidă</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Începe acum — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Deschide-ți contul</h2>
 <p class="sub">Începe în câteva minute.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Vreau să încep';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Indicatori-cheie">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Utilizatori activi</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Volum tranzacționat</span></div>
 <div class="stat"><b>99,1%</b><span>Disponibilitatea semnalelor</span></div>
 <div class="stat"><b>24/7</b><span>Asistență</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">În interior <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Urmărește-ți contul în timp real</h2>
 <p class="lede">Fiecare ordin executat de analistul tău este înregistrat aici — intrări, ieșiri și rezultate verificate pe fiecare pereche, în direct.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Grafice candlestick și adâncime în timp real, pe orice dispozitiv</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Trimitere de ordine cu o atingere și confirmare instantanee</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Liste de urmărire și alerte de preț care te urmează</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Începe acum</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — trading mobil cu grafice crypto în timp real</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="features-title">Tot ce ai nevoie, pe o singură platformă rapidă.</h2><p class="lede">Fără grafice de urmărit, fără ordine de cronometrat. Motorul <?= e(SITE_NAME) ?> monitorizează order book-urile în timp real pe exchange-uri crypto, API-uri de acțiuni globale și principalele perechi forex — și declanșează ordine în momentul în care modelele găsesc o configurație avantajoasă.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Execuție în fracțiuni de secundă pe fiecare piață conectată</h3><p><?= e(SITE_NAME) ?> menține conexiuni API cu latență redusă cu fiecare exchange suportat. Când modelul emite un semnal, ordinul este rutată, executat și înregistrat pe tabloul de bord înainte de următorul tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Activ 24 de ore pe zi, în toate sesiunile</h3><p>Piața crypto nu doarme niciodată, iar motorul <?= e(SITE_NAME) ?> nici el. Continuă să scaneze perechile în weekenduri și sărbători, ca să nu ratezi nicio fereastră.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Rapoarte în mai multe monede</h3><p>Fiecare sold, fiecare ordin, fiecare retragere apare în moneda ta locală. Nicio etapă ascunsă de conversie.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Capital segregat</h3><p>Fondurile tale rămân în propriul cont. <?= e(SITE_NAME) ?> nu are niciodată custodia — motorul are doar permisiunea de a ruta ordine.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Securitate de nivel bancar</h3><p>Criptare TLS pe întreaga platformă, autentificare în doi pași implicit și audituri trimestriale de infrastructură de terți. Chitanțe de tranzacții înregistrate pe blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Trei clase de active, o singură platformă</h3><p>Majoritatea platformelor de retail se limitează la o singură piață. <?= e(SITE_NAME) ?> operează crypto, acțiuni listate și principalele perechi forex în același tablou de bord.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Limite de risc prestabilite pe fiecare poziție</h3><p>Stop-loss, drawdown maxim și limite de alocare a capitalului sunt configurate pe clasă de active. Motorul iese automat din orice tranzacție care depășește o limită, iar evenimentul este înregistrat în istoricul de audit.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Piețe în timp real</span>
 <h2 id="markets-title">Tranzacționează Bitcoin, Ethereum și multe altele</h2>
 <p class="lede">Prețuri în timp real, indicatori avansați și o viziune profesională a piețelor care te interesează.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Vreau acces la piețe</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Piețe</span><span class="mkt-live"><i></i>Live</span></div>
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
 <div class="sec-head"><span class="eyebrow">Cum funcționează</span><h2 id="how-title">Cum funcționează.</h2><p class="lede">Tehnologie de vârf și un analist uman real, care lucrează împreună în timp real, pentru a te ajuta să construiești o nouă sursă de venit — cu îndrumare la fiecare pas.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Creează-ți contul</h3><p>Înregistrează-te în câteva minute doar cu e-mailul.</p></div>
 <div class="step"><div class="n">2</div><h3>Confirmă e-mailul</h3><p>Verifică adresa pentru a-ți proteja contul.</p></div>
 <div class="step"><div class="n">3</div><h3>Depune în contul tău</h3><p>Adaugă fonduri de la <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> în felul tău.</p></div>
 <div class="step"><div class="n">4</div><h3>Stabilește strategia</h3><p>Alege obiectivele; analistul personalizează planul.</p></div>
 <div class="step"><div class="n">5</div><h3>Începe să tranzacționezi</h3><p>Urmează semnalele ghidate și crește în ritmul tău.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Depuneri</span><h2 id="payment-title">Depune cu metode pe care le cunoști deja</h2><p class="lede">Depune și retrage prin canale sigure și familiare — fără comisioane ascunse.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Transfer bancar</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Ce spun membrii</span><h2 id="reviews-title">Ce spun investitorii noștri</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Analistul meu mi-a explicat totul clar. Mi-am setat obiectivele o singură dată și acum văd exact cum crește capitalul — fără anxietate la fiecare mișcare.”</p><div class="who"><div class="ini">E</div><div><b>Elena Popescu</b><span>București</span></div></div></div>
 <div class="card"><p>„Nu investisem niciodată înainte — analistul meu s-a ocupat de strategie și a explicat fiecare pas. Fără promisiuni goale, fără presiune, iar retragerile ajung când trebuie.”</p><div class="who"><div class="ini">A</div><div><b>Andrei Ionescu</b><span>Cluj-Napoca</span></div></div></div>
 <div class="card"><p>„Am început cu puțin ca să testez. Transparența și suportul mi-au dat încredere să continui.”</p><div class="who"><div class="ini">M</div><div><b>Maria Dumitru</b><span>Timișoara</span></div></div></div>
 <div class="card"><p>„Analizele ajung la mine — aprob sau ajustez în câteva minute. Se potrivește perfect rutinei, fără să deranjeze munca.”</p><div class="who"><div class="ini">A</div><div><b>Alexandru Stan</b><span>Iași</span></div></div></div>
 <div class="card"><p>„M-a convins transparența: fiecare decizie este explicată și văd raționamentul înainte să se întâmple ceva.”</p><div class="who"><div class="ini">I</div><div><b>Ioana Georgescu</b><span>Constanța</span></div></div></div>
 <div class="card"><p>„Suportul este real și mereu accesibil. Prima analiză a fost practică, iar platforma a fost stabilă și previzibilă de atunci.”</p><div class="who"><div class="ini">M</div><div><b>Mihai Radu</b><span>Brașov</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platformă</span><h2 id="capabilities-title">Funcții principale, pe scurt</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Motor IA</div>
 <div class="spec-v">Analiză avansată a pieței cu învățare automată</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Metode de depunere</div>
 <div class="spec-v">Card de credit, transfer bancar, PayPal, portofele digitale</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Acces multiplatformă</div>
 <div class="spec-v">Web, tabletă și mobil — pe deplin responsiv</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Precizia semnalelor</div>
 <div class="spec-v">Până la 85% la strategiile IA suportate</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Piețe</div>
 <div class="spec-v">Criptomonede, forex, acțiuni și mărfuri</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Înregistrare</div>
 <div class="spec-v">Deschidere rapidă de cont cu verificare ghidată</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Asistență</div>
 <div class="spec-v">Asistență profesională non-stop — <a href="<?= page_url('contacts.php') ?>">Trimite un mesaj</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Întrebări</span><h2 id="faq-title">Întrebări frecvente.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Care este depozitul minim?</summary><p>Deschide și finanțează contul de la depozitul minim. Poți adăuga sold pe parcurs pe măsură ce planul avansează.</p></details>
 <details><summary>Cum funcționează retragerile?</summary><p>Solicită o retragere oricând din tabloul de bord. Fondurile revin la metoda de plată aleasă, respectând termenele standard de procesare.</p></details>
 <details><summary>Banii mei sunt în siguranță?</summary><p>Conturile sunt protejate cu securitate de nivel industrial și verificare riguroasă. Ca la orice investiție, capitalul este la risc și valorile pot scădea sau crește.</p></details>
 <details><summary>Cât de repede pot începe?</summary><p>Majoritatea membrilor finalizează înregistrarea în câteva minute. După confirmarea primei depuneri, un plan se activează imediat.</p></details>
 <details><summary>Există comisioane ascunse?</summary><p>Costurile sunt afișate transparent înainte să te angajezi. Știi întotdeauna exact ce se aplică planului tău — fără surprize.</p></details>
 <details><summary>Care este vârsta minimă pentru înregistrare?</summary><p>Trebuie să ai cel puțin 18 ani pentru a deschide un cont și a investi. Poate fi necesară verificarea pentru a confirma vârsta și identitatea.</p></details>
 <details><summary>Ce metode de plată sunt suportate?</summary><p>Metode comune precum carduri de debit și credit, transfer bancar, e-wallet-uri selectate și criptomonede sunt suportate. Opțiunile exacte apar la pasul de depunere.</p></details>
 <details><summary>Când este disponibil suportul pentru clienți?</summary><p>Echipa noastră de suport lucrează de luni până vineri, 9–18, și se angajează să răspundă fiecărei solicitări în maximum o zi lucrătoare.</p></details>
 <details><summary>Cum sunt tratate taxele?</summary><p>Taxele pe câștigurile din investiții depind de regulile țării tale și sunt responsabilitatea ta. Recomandăm păstrarea evidențelor și consultarea unui consilier fiscal calificat.</p></details>
 <details><summary>Ce este KYC și de ce este obligatoriu?</summary><p>KYC (Know Your Customer) este o verificare standard a identității. Păstrează conturile în siguranță și face parte din deschiderea oricărui cont de investiții.</p></details>
 <details><summary>Am nevoie de experiență?</summary><p>Nu. Fiecare membru primește un analist financiar personal care îl ghidează la fiecare pas, deci nu e nevoie de cunoștințe anterioare despre piețe.</p></details>
 <details><summary>Cine îmi gestionează investițiile?</summary><p>Un analist financiar dedicat, sprijinit de instrumente IA, care lucrează în jurul obiectivelor și nivelului tău de risc. Analistul combină expertiza profesională cu tehnologia — deciziile rămân umane.</p></details>
 <details><summary>Platforma este reglementată?</summary><p>Da — respectă standardele financiare și de securitate cibernetică naționale, cu protecție a contului și verificare riguroasă integrate.</p></details>
 <details><summary>Pot adăuga fonduri mai târziu?</summary><p>Da. Poți alimenta contul oricând și poți ajusta planul cu analistul pe măsură ce obiectivele evoluează.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DE ÎNCREDERE</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Recenzii</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> recenzii · Pe baza a <b style="color:var(--text,#fff)">2.334</b> evaluări</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Începe acum</span>
 <h2 id="signup-title" class="cta-h">Deschide-ți contul.</h2>
 <p class="lede">Spune-ne cum să te contactăm și un specialist te ajută la primul pas.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Deschide-ți contul</h3>
 <p class="sub">Începe în câteva minute.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Vreau să încep';
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
 <p>Viteza IA, decizia umană. Capitalul este la risc — investește responsabil.</p>
 </div>
 <div><h4>Produs</h4><div class="foot-links">
 <a href="#platform">Urmărește-ți contul în timp real</a><a href="#markets">Piețe în timp real</a><a href="#how">Cum funcționează.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Companie</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Despre</a><a href="<?= page_url('offer.php') ?>">Prețuri</a><a href="<?= page_url('contacts.php') ?>">Contact</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Confidențialitate</a><a href="<?= page_url('conditions.php') ?>">Termeni</a><a href="<?= page_url('conditions.php') ?>">Dezvăluirea riscurilor</a><a href="<?= page_url('contacts.php') ?>">Raportează un abuz</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Toate drepturile rezervate. Investițiile implică riscuri, inclusiv posibila pierdere de capital. · Investițiile implică riscuri, inclusiv posibila pierdere a unei părți sau a întregului capital investit. Valoarea investițiilor poate crește sau scădea și poți primi înapoi mai puțin decât ai plasat inițial. Nu investi bani pe care nu ți-i poți permite să îi pierzi.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('ro-RO',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' lei';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Te rugăm să aștepți\u2026";
 var MSG_ERR = "Nu am putut trimite datele acum. \u00cencearc\u0103 din nou.";
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
 initialCountry: (hid && hid.value) || 'ro',
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
<span style="flex:1;min-width:200px">Folosim cookie-uri pentru a-ți îmbunătăți experiența.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Am înțeles</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

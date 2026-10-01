<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI Trgovalna platforma');
$page_description = 'Trgujte s kriptovalutami in drugimi trgi na ' . SITE_NAME . ' — varen račun, jasne cene, koristna orodja UI in hitra izvedba naročil.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Razponi</strong> od 0.1</span>
      <span class="tape-item"><strong>Hitrost</strong> pod 40 ms</span>
      <span class="tape-item"><strong>Trgi</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Trgovalna platforma z umetno inteligenco</div>
        <h1>Trgujte s kriptovalutami in drugimi trgi.<br><span class="text-accent">Začnite z <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Preprosta platforma za kripto in trgovanje z več sredstvi — močna varnost, jasne cene,
          koristni vpogledi umetne inteligence in vmesnik, ki ostane pregleden.
        </p>
        <div class="hero-badges" aria-label="Prednosti platforme">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Šifrirana povezava SSL
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Podpora strankam 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hitra izvedba naročil
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start today — min. deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Ustvari račun</span>
          <span class="live-pill">Varno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Prijavite se in under 2 minutes';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Trgi v živo</p>
        <h2>Spremljajte cene v realnem času. Začnite, ko ste pripravljeni.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Spremljajte Bitcoin, Ethereum in druge glavne pare na pregledni plošči —
          nato odprite račun in oddajte prvo naročilo.
        </p>
        <a href="sign.php" class="btn btn-primary">Odprite dostop do trgov</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Cene trgov v živo">
        <div class="exchange-panel-header">
          <span>Trgi</span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="Predogled trgovalne platforme">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platforma</p>
        <h2>Jasni grafikoni.<br>Pripravljeni za trgovanje.</h2>
        <p class="lead">
          Trgovalni zaslon za telefon z grafikoni v živo, dobičkom in izgubo
          ter preprostimi naročili z enim tapom — razumljivo že od prve prijave.
        </p>
        <ul class="platform-points">
          <li>Grafikoni v živo in cene trgov</li>
          <li>Stanje portfelja na prvi pogled</li>
          <li>Varna plošča računa z 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Odprite platformo</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Lastnosti</p>
        <h2>Kaj dobite z <?= e(SITE_NAME) ?></h2>
        <p class="lead">Varnost, hitrost in jasna orodja — brez prenatrpanega zaslona.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Močna varnost računa</h3>
            <p>Šifriranje SSL, dvofaktorska prijava in zaščiteni tokovi sredstev varujejo denar in podatke.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Vpogledi UI v trg</h3>
            <p>Koristni signali za čas in trende — uporabni, ko se cene hitro premikajo.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Avtomatizacija, ko jo želite</h3>
            <p>Izbirni trgovalni boti lahko ves čas sledijo vašim pravilom — nadzor ostane pri vas.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Več trgov na enem mestu</h3>
            <p>Kripto, forex, delnice in surovine na eni preprosti platformi.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Hitra obdelava naročil</h3>
            <p>Zasnovano za zanesljiva naročila tudi, ko so trgi zasedeni.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Pregledna, preprosta postavitev</h3>
            <p>Manj vizualnega šuma — več prostora za grafikon in naslednje naročilo.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Kako začeti</p>
        <h2>Pet korakov do prvega posla</h2>
        <p class="lead">Jasna pot od prijave do trgov v živo.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Odpri račun</h3>
            <p>Oddajte podatke in dobite varen dostop do platforme.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Potrdite e-pošto</h3>
            <p>Potrdite naslov, da odklenete celotno trgovalno okolje.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Dodajte sredstva</h3>
            <p>Deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via card, bank transfer, or e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Izberite način trgovanja</h3>
            <p>Trgujte ročno ali uporabite orodja UI z jasnimi omejitvami, ki jih nastavite.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Trgujte v živo</h3>
            <p>Uporabite grafikone, orodja in podporo 24/7, kadar koli potrebujete pomoč.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Začni zdaj</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Payments</p>
      <h2 style="margin-bottom: 0.75rem;">Položite z načini, ki jih že poznate</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartice, denarnice in bančna nakazila — šifrirana od konca do konca.</p>
      <?php
      $payment_context = 'financiranje računa in pologi';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructure</p>
        <h2>Partnerska infrastruktura</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Ocene</p>
        <h2>Kaj pravijo trgovci</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Prijava je bila hitra, provizije jasne, podpora pa je odgovorila. To je platforma, pri kateri ostanem.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Neodvisni trgovec</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kripto sem tu preizkusil po skakanju med aplikacijami — nastavitev je bila jasna, postavitev grafikona pa končno smiselna.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Naročila gredo zanesljivo skozi, pogoji so v preprostem jeziku, ekipa pa pozna izdelek. Trdna platforma.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital assets trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kot začetnik sem potreboval jasnost, ne ognjemeta. Prijava, provizije in pomoč, ko obtičim — to je zadostovalo.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Zasebni vlagatelj</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Preden napolnite račun</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako začnem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ustvarite račun, opravite kratko preverjanje in položite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              To odkleni grafikone, orodja in vodeno uvajanje.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako sta zaščitena moj denar in podatki?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Uporabljamo šifriranje SSL, dvofaktorsko overjanje in zaupanja vredne ponudnike plačil po strogih pravilih o podatkih.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako dolgo trajajo dvigi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Izplačila zahtevajte kadar koli z nadzorne plošče. Večina načinov se poravna v 1–3 delovnih dneh, provizije so prikazane vnaprej.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali potrebujem predhodne izkušnje s trgovanjem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ne. Vodeni koraki in orodja UI vam pomagajo učiti se v lastnem tempu, podpora 24/7 je na voljo.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kateri trgi so na voljo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kriptovalute, forex, svetovne delnice in surovine — ročno ali samodejno — iz enega vmesnika.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Overview</p>
        <h2>Platforma na prvi pogled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI tools</div>
          <div class="specs-value">Tržna analiza z vpogledi strojnega učenja</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiranje</div>
          <div class="specs-value">Cards, bank transfers, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Naprave</div>
          <div class="specs-value">Web, tablet, mobile — fully responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AI signal quality</div>
          <div class="specs-value">Up to 85% on supported strategies*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trgi</div>
          <div class="specs-value">Kripto, forex, delnice, surovine</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uvajanje</div>
          <div class="specs-value">Hitra nastavitev z vodenim preverjanjem</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podpora</div>
          <div class="specs-value">Podpora 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktirajte nas</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Rated</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Ocene <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> ocen · Na podlagi <strong>1&nbsp;842</strong> ocen
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pripravljeni na preglednejši način trgovanja?</h2>
        <p class="lead">Pridružite se trgovcem, ki želijo trge v živo, jasne provizije in platformo, ki ostane preprosta za uporabo.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Odpri račun</span>
          <span class="live-pill">Free</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Ustvarite brezplačen račun';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Trgovalna platforma z umetno inteligenco');
$page_description = 'Trgujte s kriptovalutami, forexom in svetovnimi trgi na ' . SITE_NAME . '. Analitika v realnem času, signali z umetno inteligenco in platforma, zasnovana za hitrost in jasnost.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">AI Trgovalna platforma</p>
        <h1>Trgujte pametneje.<br><span class="text-accent">Ukrepajte hitreje.</span></h1>
        <p class="lead">
          Nov standard pri kripto in trgovanju na več trgih. Napredna varnost, pregledne provizije,
          vpogledi umetne inteligence in vmesnik, ki ne moti.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL varnost
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 Podpora
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hitra izvedba
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Začni trgovati — <?= MIN_DEPOSIT ?> <?= CURRENCY ?> min.</a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Odprite račun v 2 minutah';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statistika platforme">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Razpoložljive valute</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Preverjeni uporabniki</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Obseg trgovanja</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podprte države</div>
      </div>
    </div>
  </section>

  <!-- Platforma phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Predogled trgovalne platforme">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Trgovalna platforma</p>
        <h2>Profesionalni grafikoni.<br>Pripravljeni za telefon.</h2>
        <p class="lead">
          Pregleden vmesnik, zasnovan kot sodobna borza — podatki BTC/USDT v živo, spremljanje portfelja
          in izvedba z enim tapom. Zasnovan tako, da že od prve prijave gradi zaupanje.
        </p>
        <ul class="platform-points">
          <li>Svečni grafikoni v realnem času</li>
          <li>Portfelj in D/I na prvi pogled</li>
          <li>Varna nadzorna plošča računa</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Preizkusite platformo</a>
      </div>
    </div>
  </section>

  <!-- Lastnosti -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Zakaj <?= e(SITE_NAME) ?></p>
        <h2>Vse, kar potrebujete za samozavestno trgovanje</h2>
        <p class="lead">Varnost, hitrost in inteligenca — združene v eni pregledni platformi za sodobne trgovce.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Varnost na ravni bank</h3>
          <p>Šifriranje SSL, 2FA in varno ravnanje s sredstvi varujejo vaše podatke in kapital na vsakem koraku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Tržni signali UI</h3>
          <p>Natančni vpogledi v realnem času pomagajo prepoznati priložnosti in hitreje sprejemati odločitve.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Samodejno trgovanje</h3>
          <p>Boti z umetno inteligenco delujejo ves čas in učinkovito izvajajo strategije, vi pa ohranite nadzor.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Dostop do več trgov</h3>
          <p>Trgujte s kriptovalutami, forexom, delnicami in surovinami v enem okolju.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Izvedba z nizko zakasnitvijo</h3>
          <p>Optimizirana infrastruktura omogoča stabilno izvedbo naročil tudi ob vrhuncu tržne aktivnosti.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Pregleden vmesnik</h3>
          <p>Minimalistična zasnova zmanjša šum, da se osredotočite na strategijo, ne na navigacijo.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Trgi v živo -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Trgi v živo</p>
        <h2>Trgujte z Bitcoinom, Ethereumom in več</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Cene v realnem času, napredni indikatorji in profesionalni pregled trgov, ki vas zanimajo.
        </p>
        <a href="sign.php" class="btn btn-primary">Dostop do trgov</a>
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

  <!-- Kako deluje -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Kako začeti</p>
        <h2>Od prijave do prvega posla v nekaj minutah</h2>
        <p class="lead">Vodena pot — brez zapletenosti in ugibanja.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Ustvarite svoj račun</h3>
          <p>Prijavite se s svojimi podatki in takoj dobite varen dostop do platforme.</p>
        </article>
        <article class="step-card">
          <h3>Potrdite svoj e-poštni naslov</h3>
          <p>Potrdite naslov, da odklenete celotno trgovalno okolje.</p>
        </article>
        <article class="step-card">
          <h3>Financirajte svoj račun</h3>
          <p>Položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?> prek bančnega nakazila, kartice ali e-denarnice.</p>
        </article>
        <article class="step-card">
          <h3>Določite svojo strategijo</h3>
          <p>Določite raven tveganja in nastavitve — ročno ali naj avtomatizacija UI izvede naročila.</p>
        </article>
        <article class="step-card">
          <h3>Začni trgovati</h3>
          <p>Vstopite na trg z grafikoni v živo, orodji in podporo, kadar koli jo potrebujete.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Odpri račun now</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Financiranje</p>
      <h2 style="margin-bottom: 0.75rem;">Položite z načini, ki jim že zaupate</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartice, e-denarnice in bančna nakazila — zaščitena s šifriranjem SSL.</p>
      <?php
      $payment_context = 'financiranje računa in pologi';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Zaupanja vredna infrastruktura</p>
        <h2>Zgrajena na uveljavljenih partnerskih standardih</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Ocene -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Ocene</p>
        <h2>Kaj pravijo trgovci</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registracija je trajala nekaj minut, provizije so pregledne, podpora pa res odgovarja. Gladka, zanesljiva izkušnja — platforma, pri kateri ostanem.</p>
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
          <p class="review-text">Končno sem tu preizkusil kripto trgovanje — brez obžalovanja. Nastavitev je bila hitra, vse jasno razloženo. Dobra izbira, zlasti če šele začenjate.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto navdušenec</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilno in zanesljivo. Odprtje računa je bilo preprosto, pogoji jasni, ekipa pa pozna delo. Presenetljivo udobna izkušnja trgovanja.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operater digitalnih sredstev</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trgovanje ni več preobremenjujoče. Preprosta prijava, jasne provizije in podpora, ko jo potrebujem. Kot začetniku mi to pomeni vse.</p>
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

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Pogosta vprašanja</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako začnem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ustvarite račun z osnovnimi podatki, opravite kratko preverjanje in položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Odklenili boste celotno platformo — grafikone v živo, trgovalna orodja in vodeno uvajanje.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali sta moj denar in podatki varna?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Uporabljamo šifriranje SSL, dvofaktorsko overjanje in varno obdelavo pri zaupanja vrednih ponudnikih. Osebni podatki so na vseh ravneh obravnavani po strogih varnostnih pravilih.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kdaj lahko dvignem dobiček?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Dvig zahtevajte kadar koli z nadzorne plošče. Obdelava običajno traja 1–3 delovne dni. Veljavne provizije in roki so vedno prikazani vnaprej — brez presenečenj.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali potrebujem izkušnje s trgovanjem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sploh ne. Vodeno uvajanje, preprosti vodiči in orodja z umetno inteligenco vam pomagajo učiti se v lastnem tempu. Ne glede na izkušnje je podpora na voljo 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Na katerih trgih lahko trgujem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Do kriptovalut, forexa, svetovnih delnic in surovin dostopate iz enega vmesnika. Podatki v realnem času, vgrajena analitika ter podpora za ročne in samodejne strategije.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platforma specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Platforma</p>
        <h2>Ključne zmožnosti na prvi pogled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Sistem trgovanja z UI</div>
          <div class="specs-value">Napredna tržna analiza s strojnim učenjem</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Načini financiranja</div>
          <div class="specs-value">Kreditne kartice, bančna nakazila, PayPal, e-denarnice</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dostop z naprav</div>
          <div class="specs-value">Splet, tablica in telefon — povsem odzivno</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Natančnost signalov</div>
          <div class="specs-value">Do 85 % pri podprtih strategijah UI</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trgi</div>
          <div class="specs-value">Kripto, forex, delnice, surovine</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uvajanje</div>
          <div class="specs-value">Hitra nastavitev računa z vodenim preverjanjem</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podpora</div>
          <div class="specs-value">Strokovna pomoč 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktirajte nas</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Zaupanja vreden</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> Ocene</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> ocen · Na podlagi <strong>1&nbsp;842</strong> ocen
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pripravljeni trgovati na platformi, zasnovani za jasnost?</h2>
        <p class="lead">Pridružite se zasebnim trgovcem in podjetjem, ki z zaupanjem kupujejo, prodajajo in upravljajo digitalna sredstva.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Ustvarite brezplačen račun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

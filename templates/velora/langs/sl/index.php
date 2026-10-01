<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Vrhunski mehanizem trgovanja z umetno inteligenco za svetovne trge');
$page_description = SITE_NAME . '— pametnejši in čistejši način dostopa do svetovnih trgov s strukturiranimi orodji umetne inteligence za kripto, forex in delnice.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: pametnejši in čistejši način dostopa<span class="text-accent">svetovnih trgih</span></h1>

          <p class="hero-desc">
            Novi v trgovanju?<?= e(SITE_NAME) ?>ponuja strukturirana orodja, podprta z umetno inteligenco, ki so zasnovana za preglednost vašega potovanja.
            Raziščite kripto, forex in delnice brez tehničnega kaosa.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Začni trgovati —<?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Odkrijte funkcije</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Zaščiten s protokolom SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vodena pot za začetnike
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Ustvarite svoj račun</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Traja manj kot 3 minute. Nič pristojbin za namestitev.';
            $form_submit = 'Ustvarite brezplačen račun';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">Sredstva, s katerimi se trguje</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">hitro</div>
            <div class="stat-label">Nastavitev računa</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Podpora</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Varno</div>
            <div class="stat-label">Obdelava podatkov</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Pameten delovni prostor</div>

          <h2 class="section-title">
            Profesionalne lestvice.<br>
            <span class="text-accent">Ustvarjen za preproste odločitve.</span>
          </h2>

          <p class="section-subtitle">
            Oglejte si cene v živo in ukrepajte s čistim vmesnikom, zasnovanim za zmanjšanje kognitivne obremenitve in čustvenega trgovanja.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Z AI obogateni grafikoni v realnem času
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sistem za izvajanje trga z enim dotikom
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Oglejte si funkcije platforme</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Na voljo je takojšnja izvedba</h4>
                <p>
                  Če želite takoj usmeriti to naročilo in zajeti aktivno raven cene, aktivirajte varno<?= e(SITE_NAME) ?>terminal.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Ustvari varen račun
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Nadzorna plošča BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                V ŽIVO
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Danes
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Prodaja</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Nakup</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Zmogljivosti platforme</div>
        <h2 class="section-title">Vse, kar potrebujete za samozavestno trgovanje<?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Varnost, hitrost in nevronska tržna inteligenca združeni v jasni predstavitvi</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Varnost bančnega razreda</h3>
          <p>Šifriranje SSL, varna obdelava podatkov in popolnoma zaščitena arhitektura računa.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Tržna analiza AI</h3>
          <p>Izračuni strojnega učenja v realnem času, osredotočeni na zajemanje izrazitih tržnih premikov.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Viri z nizko zakasnitvijo</h3>
          <p>Agilna infrastruktura, osredotočena na hitro obdelavo naročil v obdobjih visoke aktivnosti.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Sredstva v realnem času</div>
          <h2 class="section-title">Poenoteno<?= e(SITE_NAME) ?>nadzorna plošča za globalne meritve</h2>
          <p class="section-subtitle">
            Sledite premikom sredstev v realnem času, spremljajte zagon in uporabite samodejno analizo umetne inteligence za hitro preslikavo vzorcev.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operativna učinkovitost:</strong>
              Tradicionalno trgovanje pomeni ročno spremljanje na stotine indikatorjev.
              <?= e(SITE_NAME) ?>algoritmi obdelajo na tisoče sprememb cen vsako milisekundo,
              ustvarjanje jasnih matematičnih modelov, tako da lahko zgodaj ujamete poteze.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Dostop do trgov</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Sredstvo</span>
              <span style="text-align:right; padding-right:16px;">Cena</span>
              <span style="text-align:right;">24h sprememba</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Postopek vkrcanja</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?>omogoča začetek brez stresa</h2>
        <p class="section-subtitle">Nimate predhodnih izkušenj s kripto? Naš samodejni vodnik vas vodi skozi vsak korak.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Varna prijava</h3>
            <p>Vnesite osnovne kontaktne podatke prek našega visoko šifriranega sistema obrazcev.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Nastavitev, vodena z AI</h3>
            <p>Platforma ponuja možnosti vmesnika, prilagojene vašim željam.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Zagotovljeno financiranje</h3>
            <p>Aktivirajte svoj obseg trgovanja prek standardnih, zanesljivih plačilnih tirnic.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Razporedite signale</h3>
            <p>Začnite komunicirati z globalnimi trgi z uporabo živčnih podatkovnih virov v živo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">Mobilni dostop</div>
          <h2 class="section-title">Vaš portfelj, v vašem žepu</h2>
          <p class="section-subtitle">
            Polno<?= e(SITE_NAME) ?>motor, stisnjen v hitro mobilno izkušnjo z domačim občutkom.
            Sledite sredstvom, sklepajte posle in sledite signalom umetne inteligence od koder koli.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Potisna opozorila za kritične premike cen
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrična prijava s šifriranim lokalnim pomnilnikom
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Popolna zbirka grafikonov, optimizirana za dotik
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Pridobite izkušnjo aplikacije</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Uravnotežen okvir</div>
        <h2 class="section-title">Pregledni parametri delovanja</h2>
        <p class="section-subtitle">
          Verjamemo v popolno poštenost. Tukaj je tisto, kar ločuje naš sistem od drugih — in kje so običajno omejitve industrije.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Ključne prednosti</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistična nadzorna plošča, prilagojena institucionalni hitrosti izvajanja.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Nevronska analitika, ki deluje 24/7 na vseh sredstvih.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Brez skritih transakcijskih marž ali presenetljivih stroškov upravljanja.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neposredna arhitektura kriptografskega računa SSL.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vodena integracija, ki traja nekaj minut, ne dni.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Druge platforme</div>
          <h3>Skupne omejitve industrije</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Natrpane nadzorne plošče, polne oglasov, ki upočasnjujejo odločitve.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statična poročila ob koncu dneva namesto neprekinjene analize v živo.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Skriti razmiki, provizije za dvige in nejasne cene.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Skupna zastarela infrastruktura z neenakomerno zaščito podatkov.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Počasno, s papirologijo veliko preverjanje, ki lahko traja več dni.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Primerjava odraža tipične vzorce v trgovini na drobno in je ilustrativna; ponudbe konkurence se razlikujejo.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Glavne funkcije platforme na prvi pogled</h2>
        <p class="section-subtitle">Preglejte funkcionalne parametre, ki so vgrajeni v vaš okvir za dostop do računa.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Zmogljivost</th>
              <th>Funkcionalna podrobnost</th>
              <th class="cap-table-center">Vključeno</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Okvir za trgovanje z umetno inteligenco</strong></td>
              <td>Algoritemska obdelava, ki zagotavlja dinamične makrostrukturne izračune.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
            <tr>
              <td><strong>Združeni viri</strong></td>
              <td>Konsolidirani grafikoni v realnem času za sodobne globalne indekse in žetone.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilnost med platformami</strong></td>
              <td>Popolnoma odzivno upodabljanje na mobilnih napravah, namiznih in tabličnih računalnikih.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
            <tr>
              <td><strong>Pokritost z več sredstvi</strong></td>
              <td>Poenoten dostop do kripto, forex in delniških indeksov iz enega sloja računa.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
            <tr>
              <td><strong>Samodejna opozorila o tveganjih</strong></td>
              <td>Nastavljiva obvestila, ki označujejo nenavadno volatilnost, preden doseže položaje.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
            <tr>
              <td><strong>Šifrirani trezor podatkov</strong></td>
              <td>Osebni podatki in podatki o računu so izolirani za večplastnimi kriptografskimi kontrolami dostopa.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 človeška podpora</strong></td>
              <td>Tehnični operaterji v živo pripravljeni takoj odgovoriti na vprašanja o nastavitvah.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Vključeno">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Depoziti</div>
      <h2 class="section-title">Financirajte svoj račun z metodami, ki jih že poznate</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kartice, e-denarnice in bančna nakazila – vse zaščiteno z 256-bitnim šifriranjem SSL.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Sprejeti depoziti in načini financiranja">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Bančno nakazilo</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Zaščiteno s SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Zanesljiva infrastruktura</div>
        <h2 class="section-title">Izdelano s partnerji v industriji</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Povratne informacije uporabnikov</div>
        <h2 class="section-title">Kaj trgovci pravijo o<?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Iskrene povratne informacije naše globalne večtržne skupnosti.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 od 5 zvezdic">★★★★★</div>
            <p class="review-text">
              Kot začetnika me je kriptovaluta prestrašila.<?= e(SITE_NAME) ?>naredil armaturno ploščo tako intuitivno, da sem se počutil samozavestnega v nekaj minutah. Analiza AI je kristalno jasna.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Preverjen maloprodajni operater · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 od 5 zvezdic">★★★★★</div>
            <p class="review-text">
              Čist vmesnik mi prihrani ure. Umetna inteligenca, ki filtrira hrup trga do glavnih trendov, je spremenila moj način upravljanja dnevnih pozicij.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analitik kripto sredstev · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 od 5 zvezdic">★★★★★</div>
            <p class="review-text">
              Izvajanje z nizko zakasnitvijo in pametnimi opozorili mi omogoča prilagajanje ciljev sproti brez zagona več programov.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Zasebni upravitelj portfelja · Nemčija</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 od 5 zvezdic">★★★★★</div>
            <p class="review-text">
              Podpora je odgovorila v dveh minutah, medtem ko sem konfiguriral preverjanje. Izjemen okvir storitev institucionalne ravni.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritemski trgovec · Francija</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: opolnomočenje trgovcev z institucionalno arhitekturo AI
        </h2>

        <p class="seo-intro">
          Sodobna interakcija sredstev zahteva popolno jasnost. Ko so podatkovni okviri natrpani s promocijskimi pasicami
          ali težke plasti vmesnika, zmogljivost uporabnika pade.<?= e(SITE_NAME) ?>rešuje sistemsko zapletenost z uvajanjem
          elegantno, odzivno osnovno okolje, optimizirano za dolgoročno strateško izvajanje. Vsak modul platforme,
          od vkrcanja do izvajanja v živo, temelji na istem načelu: odstranite šum, tako da so osnovni podatki
          lahko govori sama zase – brez žrtvovanja globine, ki jo pričakujejo izkušeni udeleženci.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Napredno<span>sredstva za kripto trgovanje</span></h3>
            <p>
              Likvidnost verige blokov se hitro razvija, zaradi česar je infrastruktura z nizko zakasnitvijo kritična.
              <?= e(SITE_NAME) ?>povezuje vozlišča po meri z glavnimi prizorišči digitalnih sredstev, kar zagotavlja povratne informacije o cenah v živo.
              Čiste vizualne metrike spremenijo kaotične večverižne strukture v organizirane, berljive podatkovne kanale.
            </p>
            <p>
              Poleg neobdelanih podatkov o cenah platforma kontekstualizira premike obsega in globino likvidnosti, tako da so nenadni skoki
              lažje interpretirati — ne le reaktivne signale. Ta doslednost je najbolj pomembna pri nestanovitnih sejah, ko
              razdrobljena orodja upočasnijo odločitve točno takrat, ko je jasnost najbolj potrebna.
            </p>
          </div>

          <div class="seo-block">
            <h3>Globoko<span>analiza nevronskega trga</span></h3>
            <p>
              Avtomatizirani algoritmi analizirajo dohodne tržne podatke za izračun strukturnih premikov med forexom in mednarodnim blagom.
              <?= e(SITE_NAME) ?>destilira zapletene izračune v jasne trende podatkov, ki podpirajo neodvisno presojo, namesto da bi jo nadomestili.
            </p>
            <p>
              Ker modeli delujejo neprekinjeno in ne po določenem urniku, se spremembe zagona pojavijo takoj, ko se zgodijo
              namesto v zapoznelem povzetku. Rezultat je raziskovalna plast, ki podpira neodvisno presojo
              medtem ko je končna odločitev v rokah uporabnika.
            </p>
          </div>

          <div class="seo-block">
            <h3>Brez trenja<span>nastavitev računa</span></h3>
            <p>
              Skladnost ni nujno zapletena. Naš strukturiran registracijski sistem ščiti zasebne nastavitve
              prek varnih postopkov preverjanja, zasnovanih tako, da trajajo manj kot tri minute od začetka do dostopa do terminala.
            </p>
            <p>
              Vsako polje v potovanju pojasnjuje, zakaj je vprašano, tako da začetnikom nikoli ni treba ugibati namena
              korak preverjanja. Po oddaji se šifrirana preverjanja identitete izvajajo v ozadju, medtem ko ostalo
              po nadzorni plošči je še vedno mogoče v celoti brskati.
            </p>
          </div>

          <div class="seo-block">
            <h3>Institucionalna kakovost<span>kontrole tveganja</span></h3>
            <p>
              Določanje velikosti pozicij, omejitve izpostavljenosti in samodejni indikatorji nestanovitnosti strnejo zgodovinsko profesionalna namizna orodja
              v preproste preklopnike — tako novejši udeleženci podedujejo dnevno disciplino od izkušenih trgovcev.
            </p>
            <p>
              Opozorila je mogoče konfigurirati glede na sredstvo, zato je pozornost namenjena samo trgom, ki to resnično upravičujejo.
              Ta osredotočeni pristop pomaga preprečiti utrujenost zaradi opozorila, zaradi katere ljudje pogosto ignorirajo obvestila
              na manj selektivnih platformah.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Center za podporo</div>
        <h2 class="section-title">Pogosta vprašanja</h2>
        <p class="section-subtitle">Takojšnji postopkovni odgovori o registraciji in dostopu do platforme.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Kako naj začnem z<?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Izpolnite zgornji obrazec za registracijo, sledite našemu varnemu vkrcanju po korakih,
              in aktivirajte nastavitve računa prek našega strukturiranega sistema za obdelavo plačil.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ali potrebujem napredno kripto izkušnjo?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              št.<?= e(SITE_NAME) ?>ponuja način nadzorne plošče za začetnike, avtomatizirana analitična pojasnila,
              in poenostavljeni delovni prostori za pomoč novim trgovcem pri varni navigaciji.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Kakšna je minimalna zahteva za trgovanje?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Standardna osnovna aktivacija je<?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Ta služi kot operativni kapital za trgovanje in ostaja pod vašim ročnim nadzorom.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ali obstajajo skriti operativni stroški?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              št.<?= e(SITE_NAME) ?>deluje s popolno transparentnostjo cen.
              Ne uporabljamo nepričakovanih marž za dostop do platforme ali skritih izračunov dvigov.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Kako deluje komponenta inteligence AI?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nevronski sistemi ocenjujejo globoke statistične označevalce nestanovitnosti v več tržnih plasteh,
              pretvarjanje neobdelane telemetrije v poenostavljene trendne črte za lažjo oceno.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ali so moji osebni podatki v celoti zaščiteni?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              ja Vsak cevovod računa je prikrit z varno zaščito SSL in robustnimi kriptografskimi protokoli
              za popolno izolacijo obsegov zasebnih podatkov.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>Pripravljen na doživetje<?= e(SITE_NAME) ?>jasnost?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Pridružite se sodobnemu sistemu, optimiziranemu za hitro delovanje, zaščito podatkov in pregleden dostop.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Ustvarite svoj račun</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Ustvarite brezplačen račun';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

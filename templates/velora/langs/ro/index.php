<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Motor premium de tranzacționare AI pentru piețele globale');
$page_description = SITE_NAME . ' — o cale mai inteligentă și mai clară către piețele globale, cu instrumente AI structurate pentru cripto, forex și acțiuni.';
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
          <h1><?= e(SITE_NAME) ?>: o cale mai inteligentă și mai clară către <span class="text-accent">piețele globale</span></h1>

          <p class="hero-desc">
            Nou în tranzacționare? <?= e(SITE_NAME) ?> oferă instrumente structurate asistate de AI, concepute să vă mențină parcursul transparent.
            Explorați cripto, forex și acțiuni fără haosul tehnic.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Începe tranzacționarea — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Descoperă funcțiile</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Protejat prin protocol SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Parcurs ghidat pentru începători
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Creează-ți contul</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Durează mai puțin de 3 minute. Zero taxe de configurare.';
            $form_submit = 'Creează cont gratuit';
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
            <div class="stat-label">Active tranzacționabile</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Rapid</div>
            <div class="stat-label">Configurare cont</div>
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
            <div class="stat-label">Suport</div>
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
            <div class="stat-value">Securizat</div>
            <div class="stat-label">Procesare date</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Spațiu de lucru inteligent</div>

          <h2 class="section-title">
            Grafice profesionale.<br>
            <span class="text-accent">Concepute pentru decizii simple.</span>
          </h2>

          <p class="section-subtitle">
            Urmăriți prețurile live și acționați dintr-o interfață curată, concepută să reducă încărcarea cognitivă și tranzacționarea emoțională.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Grafice îmbogățite cu AI în timp real
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sistem de execuție pe piață cu o singură atingere
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Vezi funcțiile platformei</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Execuție instantanee disponibilă</h4>
                <p>
                  Pentru a direcționa imediat acest ordin și a captura nivelul de preț activ, activați terminalul securizat <?= e(SITE_NAME) ?>.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Creează cont securizat
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Panou BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                LIVE
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Astăzi
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Vinde</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Cumpără</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Capabilități platformă</div>
        <h2 class="section-title">Tot ce ai nevoie pentru a tranzacționa cu încredere pe <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Securitate, viteză și inteligență neurală de piață într-o prezentare clară</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Securitate de nivel bancar</h3>
          <p>Criptare SSL, procesare securizată a datelor și o arhitectură de cont complet protejată.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Analiză de piață AI</h3>
          <p>Calcule de machine learning în timp real, axate pe captarea schimbărilor marcante ale pieței.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Feed-uri cu latență redusă</h3>
          <p>Infrastructură agilă axată pe procesarea rapidă a ordinelor în perioade de activitate ridicată.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Active în timp real</div>
          <h2 class="section-title">Panou unificat <?= e(SITE_NAME) ?> pentru indicatori globali</h2>
          <p class="section-subtitle">
            Urmăriți mișcările activelor în timp real, monitorizați momentumul și folosiți analiza AI automatizată pentru a cartografia rapid tiparele.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Eficiență operațională:</strong>
              Tranzacționarea tradițională înseamnă urmărirea manuală a sute de indicatori.
              <?= e(SITE_NAME) ?> algoritmii procesează mii de schimbări de preț în fiecare milisecundă,
              producând modele matematice clare, astfel încât să prindeți mișcările devreme.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Accesează piețele</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Activ</span>
              <span style="text-align:right; padding-right:16px;">Preț</span>
              <span style="text-align:right;">Schimbare 24h</span>
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
        <div class="section-label">Proces de onboarding</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> face ca începutul să fie fără stres</h2>
        <p class="section-subtitle">Fără experiență în cripto? Ghidul nostru automatizat vă conduce prin fiecare pas.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Înregistrare securizată</h3>
            <p>Introduceți datele de contact de bază prin sistemul nostru de formulare puternic criptat.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Configurare ghidată de AI</h3>
            <p>Platforma prezintă opțiuni de interfață adaptate preferințelor dvs.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Finanțare securizată</h3>
            <p>Activați intervalul de tranzacționare prin canale de plată standard și de încredere.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Implementare semnale</h3>
            <p>Începeți să interacționați cu piețele globale folosind feed-uri neurale de date live.</p>
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
          <div class="section-label">Acces mobil</div>
          <h2 class="section-title">Portofoliul tău, în buzunar</h2>
          <p class="section-subtitle">
            Motorul complet <?= e(SITE_NAME) ?> comprimat într-o experiență mobilă rapidă, cu senzație nativă.
            Urmăriți active, executați tranzacții și urmăriți semnalele AI de oriunde.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Alerte push pentru mișcări critice de preț
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Autentificare biometrică cu stocare locală criptată
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suită completă de grafice optimizată pentru touch
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Obține experiența aplicației</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Cadru echilibrat</div>
        <h2 class="section-title">Parametri operaționali transparenți</h2>
        <p class="section-subtitle">
          Credem în onestitate absolută. Iată ce ne diferențiază — și unde se situează de obicei limitele industriei.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Avantaje cheie</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Panou minimalist optimizat pentru viteza de execuție instituțională.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Analiză neurală 24/7 pe toate activele.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Zero marje ascunse de tranzacție sau taxe surpriză de administrare.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Arhitectură de cont criptografică SSL directă.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Integrare ghidată în minute, nu zile.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Alte platforme</div>
          <h3>Limite comune în industrie</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Panouri aglomerate, încărcate de reclame, care încetinesc deciziile.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Rapoarte statice de sfârșit de zi în loc de analiză live continuă.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Spread-uri ascunse, taxe de retragere și prețuri neclare.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Infrastructură partajată, învechită, cu protecție neuniformă a datelor.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Verificare lentă, cu multă birocrație, care poate dura zile.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Comparația reflectă tipare tipice în tranzacționarea retail și este ilustrativă; ofertele concurenților variază.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Funcții de bază ale platformei dintr-o privire</h2>
        <p class="section-subtitle">Revizuiți parametrii funcționali integrați în cadrul de acces la cont.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Capabilitate</th>
              <th>Detaliu funcțional</th>
              <th class="cap-table-center">Inclus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Cadru de tranzacționare AI</strong></td>
              <td>Procesare algoritmică cu calcule macrostructurale dinamice.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
            <tr>
              <td><strong>Feed-uri agregate</strong></td>
              <td>Grafice consolidate în timp real pentru indici globali moderni și tokenuri.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilitate cross-platform</strong></td>
              <td>Redare complet responsivă pe mobil, desktop și tablete.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
            <tr>
              <td><strong>Acoperire multi-activ</strong></td>
              <td>Acces unificat la cripto, forex și indici de acțiuni dintr-un singur strat de cont.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
            <tr>
              <td><strong>Alerte automate de risc</strong></td>
              <td>Notificări configurabile care semnalează volatilitate neobișnuită înainte să afecteze pozițiile.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
            <tr>
              <td><strong>Seif de date criptat</strong></td>
              <td>Date personale și de cont izolate în spatele unor controale criptografice de acces stratificate.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>Suport uman 24/7</strong></td>
              <td>Operatori tehnici live, gata să răspundă imediat la întrebări de configurare.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inclus">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Depozite</div>
      <h2 class="section-title">Alimentează-ți contul cu metode pe care le cunoști deja</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Carduri, portofele electronice și transferuri bancare — toate protejate prin criptare SSL pe 256 de biți.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Metode acceptate de depunere și finanțare">
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
          <span>Transfer bancar</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Protejat SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Infrastructură fiabilă</div>
        <h2 class="section-title">Construit cu parteneri de nivel industrial</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Feedback utilizatori</div>
        <h2 class="section-title">Ce spun traderii despre <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Feedback onest din comunitatea noastră globală multi-piață.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 din 5 stele">★★★★★</div>
            <p class="review-text">
              Ca începător, cripto mă intimida. <?= e(SITE_NAME) ?> a făcut panoul atât de intuitiv încât m-am simțit încrezător în câteva minute. Analiza AI este cristal de clară.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Operator retail verificat · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 din 5 stele">★★★★★</div>
            <p class="review-text">
              Interfața curată îmi economisește ore. Filtrarea zgomotului de piață de către AI până la trendurile principale a schimbat modul în care gestionez pozițiile zilnice.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analist active cripto · Canada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 din 5 stele">★★★★★</div>
            <p class="review-text">
              Execuție cu latență redusă plus alerte inteligente îmi permit să ajustez țintele din mers, fără a lansa mai multe programe.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Manager portofoliu privat · Germania</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 din 5 stele">★★★★★</div>
            <p class="review-text">
              Suportul a răspuns în două minute când configura verificarea. Cadru de servicii excepțional, de nivel instituțional.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Trader algoritmic · Franța</p>
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
          <?= e(SITE_NAME) ?>: împuternicirea traderilor cu arhitectură AI instituțională
        </h2>

        <p class="seo-intro">
          Interacțiunea modernă cu activele cere claritate absolută. Când cadrele de date sunt aglomerate cu bannere promoționale
          sau straturi grele de interfață, performanța utilizatorului scade. <?= e(SITE_NAME) ?> rezolvă complexitatea sistemică prin implementarea
          unui mediu central elegant și responsiv, optimizat pentru execuție strategică pe termen lung. Fiecare modul al platformei,
          de la onboarding la execuție live, este construit în jurul aceluiași principiu: elimină zgomotul, astfel încât datele subiacente
          să vorbească de la sine — fără a sacrifica profunzimea pe care participanții experimentați o așteaptă.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Active avansate de <span>tranzacționare cripto</span></h3>
            <p>
              Lichiditatea blockchain evoluează rapid, făcând infrastructura cu latență redusă critică.
              <?= e(SITE_NAME) ?> conectează noduri personalizate la principalele piețe de active digitale, oferind bucle de feedback live pentru prețuri.
              Metricile vizuale clare transformă structurile multi-chain haotice în canale de date organizate și lizibile.
            </p>
            <p>
              Dincolo de feed-urile de preț brute, platforma contextualizează schimbările de volum și adâncimea lichidității, astfel încât spike-urile bruște
              sunt mai ușor de interpretat — nu doar semnale reactive. Această consistență contează cel mai mult în sesiunile volatile, când
              instrumentele fragmentate încetinesc deciziile exact când claritatea este cel mai necesară.
            </p>
          </div>

          <div class="seo-block">
            <h3>Analiză profundă <span>neurală de piață</span></h3>
            <p>
              Algoritmii automatizați analizează datele de piață primite pentru a calcula schimbări structurale în forex și mărfuri internaționale.
              <?= e(SITE_NAME) ?> distilează calcule complexe în trenduri clare de date care susțin judecata independentă, nu o înlocuiesc.
            </p>
            <p>
              Deoarece modelele rulează continuu, nu după un program fix, schimbările de momentum apar pe măsură ce se întâmplă,
              nu într-un rezumat întârziat. Rezultatul este un strat de cercetare care susține judecata independentă,
              păstrând decizia finală în mâinile utilizatorului.
            </p>
          </div>

          <div class="seo-block">
            <h3>Configurare de cont <span>fără fricțiune</span></h3>
            <p>
              Conformitatea nu trebuie să fie complicată. Pipeline-ul nostru structurat de înregistrare protejează setările private
              prin procese de verificare securizate, concepute să dureze sub trei minute de la start până la accesul la.
            </p>
            <p>
              Fiecare câmp din parcurs explică de ce este solicitat, astfel încât începătorii să nu trebuiască să ghicească scopul unui
              pas de verificare. Odată trimis, verificările criptate de identitate rulează în fundal, în timp ce restul
              panoului rămâne complet navigabil.
            </p>
          </div>

          <div class="seo-block">
            <h3>Controale de risc <span>de calitate instituțională</span></h3>
            <p>
              Dimensionarea pozițiilor, limitele de expunere și indicatorii automatici de volatilitate condensează instrumente profesionale de birou,
              în comutatoare simple — astfel încât participanții noi moștenesc disciplina zilnică a traderilor experimentați.
            </p>
            <p>
              Alertele sunt configurabile pe activ, astfel încât atenția este atrasă doar către piețele care chiar merită.
              Această abordare concentrată ajută la prevenirea oboselii de alerte care duce adesea oamenii să ignore notificările
              pe platforme mai puțin selective.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Centru de suport</div>
        <h2 class="section-title">Întrebări frecvente</h2>
        <p class="section-subtitle">Răspunsuri procedurale imediate despre înregistrare și acces la platformă.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Cum încep cu <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Completați formularul de înregistrare de mai sus, urmați onboarding-ul nostru securizat pas cu pas,
              și activați setările contului prin sistemul nostru structurat de procesare a plăților.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Am nevoie de experiență avansată în cripto?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nu. <?= e(SITE_NAME) ?> oferă un mod de panou pentru începători, explicații analitice automate,
              și spații de lucru simplificate pentru a ajuta noii traderi să navigheze în siguranță.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Care este cerința minimă pentru a tranzacționa?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Activarea de bază standard este <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Aceasta servește ca capital operațional de tranzacționare și rămâne sub controlul dvs. manual.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Există taxe operaționale ascunse?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nu. <?= e(SITE_NAME) ?> operează cu transparență absolută a prețurilor.
              Nu aplicăm marje neașteptate de acces la platformă sau calcule ascunse de retragere.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Cum funcționează componenta de inteligență AI?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sistemele neurale evaluează markeri statistici profunzi de volatilitate pe mai multe straturi de piață,
              convertind telemetria brută în linii de trend simplificate pentru o evaluare mai ușoară.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Datele mele personale sunt complet protejate?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Da. Fiecare pipeline de cont este mascat folosind protecție SSL securizată plus protocoale criptografice robuste
              pentru a izola complet domeniile de date private.
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
          <h2>Gata să experimentați claritatea <?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Alăturați-vă unui sistem modern optimizat pentru operațiuni rapide, protecția datelor și acces transparent.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Creează-ți contul</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Creează cont gratuit';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

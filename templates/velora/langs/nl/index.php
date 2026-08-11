<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Premium AI-handelsengine voor wereldwijde markten');
$page_description = SITE_NAME . ' — een slimmere, overzichtelijkere manier om toegang te krijgen tot wereldwijde markten met gestructureerde AI-tools voor crypto, forex en aandelen.';
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
          <h1><?= e(SITE_NAME) ?>: een slimmere, overzichtelijkere manier om toegang te krijgen tot <span class="text-accent">wereldwijde markten</span></h1>

          <p class="hero-desc">
            Nieuw in handelen? <?= e(SITE_NAME) ?> biedt gestructureerde AI-ondersteunde tools die uw traject transparant houden.
            Verken crypto, forex en aandelen zonder technische chaos.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Begin met handelen — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Ontdek functies</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Beschermd door SSL-protocol
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Begeleide route voor beginners
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Maak uw account aan</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Kost minder dan 3 minuten. Geen opstartkosten.';
            $form_submit = 'Gratis account aanmaken';
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
            <div class="stat-label">Verhandelbare activa</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Snel</div>
            <div class="stat-label">Accountinstelling</div>
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
            <div class="stat-label">Ondersteuning</div>
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
            <div class="stat-value">Veilig</div>
            <div class="stat-label">Gegevensverwerking</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Slimme werkruimte</div>

          <h2 class="section-title">
            Professionele grafieken.<br>
            <span class="text-accent">Gemaakt voor eenvoudige beslissingen.</span>
          </h2>

          <p class="section-subtitle">
            Bekijk live prijzen en handel vanuit een overzichtelijke interface, ontworpen om cognitieve belasting en emotioneel handelen te verminderen.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Door AI verrijkte grafieken in realtime
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Marktexecutie met één tip
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Bekijk platformfuncties</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Directe executie beschikbaar</h4>
                <p>
                  Om deze order direct te routeren en het actieve prijsniveau vast te leggen, activeert u uw beveiligde <?= e(SITE_NAME) ?> terminal.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Beveiligd account aanmaken
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD-dashboard</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                DIRECT
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Vandaag
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Verkopen</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Kopen</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platformmogelijkheden</div>
        <h2 class="section-title">Alles wat u nodig heeft om met vertrouwen te handelen op <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Beveiliging, snelheid en neurale marktintelligentie gecombineerd in een heldere presentatie</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Beveiliging op bankniveau</h3>
          <p>SSL-encryptie, veilige gegevensverwerking en een volledig beschermde accountarchitectuur.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI-marktanalyse</h3>
          <p>Realtime machinelearning-berekeningen gericht op het vastleggen van duidelijke marktverschuivingen.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Feeds met lage latentie</h3>
          <p>Wendbare infrastructuur gericht op snelle orderverwerking tijdens periodes met hoge activiteit.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Realtime activa</div>
          <h2 class="section-title">Geünificeerd <?= e(SITE_NAME) ?> dashboard voor wereldwijde metrics</h2>
          <p class="section-subtitle">
            Volg activabewegingen in realtime, monitor momentum en gebruik geautomatiseerde AI-analyse om patronen snel in kaart te brengen.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operationele efficiëntie:</strong>
              Traditioneel handelen betekent honderden indicatoren handmatig in de gaten houden.
              <?= e(SITE_NAME) ?> algoritmen verwerken duizenden prijswijzigingen elke milliseconde,
              en produceren heldere wiskundige modellen zodat u bewegingen vroeg kunt oppikken.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Toegang tot de markten</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Activa</span>
              <span style="text-align:right; padding-right:16px;">Prijs</span>
              <span style="text-align:right;">24u-verandering</span>
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
        <div class="section-label">Onboardingproces</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> maakt starten stressvrij</h2>
        <p class="section-subtitle">Geen eerdere crypto-ervaring? Onze geautomatiseerde gids begeleidt u bij elke stap.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Veilige registratie</h3>
            <p>Voer basiscontactgegevens in via ons sterk versleutelde formuliersysteem.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI-geleide instelling</h3>
            <p>Het platform toont interface-opties afgestemd op uw voorkeuren.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Veilige financiering</h3>
            <p>Activeer uw handelsbereik via standaard, betrouwbare betaalmethoden.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Signalen inzetten</h3>
            <p>Begin te interageren met wereldwijde markten via live neurale datafeeds.</p>
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
          <div class="section-label">Mobiele toegang</div>
          <h2 class="section-title">Uw portefeuille, in uw zak</h2>
          <p class="section-subtitle">
            De volledige <?= e(SITE_NAME) ?> engine samengevat in een snelle, native aanvoelende mobiele ervaring.
            Volg activa, voer transacties uit en volg AI-signalen vanaf elke locatie.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Pushmeldingen voor kritieke prijsbewegingen
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrische login met versleutelde lokale opslag
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Volledige grafiekenset geoptimaliseerd voor aanraken
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Krijg de app-ervaring</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Gebalanceerd kader</div>
        <h2 class="section-title">Transparante operationele parameters</h2>
        <p class="section-subtitle">
          Wij geloven in absolute eerlijkheid. Dit onderscheidt ons systeem — en waar de industriegrenzen meestal liggen.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Belangrijkste voordelen</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistisch dashboard afgestemd op institutionele executiesnelheid.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neurale analytics die 24/7 over activa draaien.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Geen verborgen transactiemarges of onverwachte beheerkosten.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Directe SSL-cryptografische accountarchitectuur.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Begeleide integratie die minuten kost, geen dagen.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Andere platforms</div>
          <h3>Veelvoorkomende industriegrenzen</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Rommelige, advertentierijke dashboards die beslissingen vertragen.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statische eindedagrapporten in plaats van continue live-analyse.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Verborgen spreads, opnamekosten en onduidelijke prijzen.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Gedeelde verouderde infrastructuur met ongelijke gegevensbescherming.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Trage, papierwerkzware verificatie die dagen kan duren.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        De vergelijking weerspiegelt typische patronen in retailhandel en is illustratief; aanbiedingen van concurrenten verschillen.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Kernplatformfuncties in één oogopslag</h2>
        <p class="section-subtitle">Bekijk de functionele parameters die in uw accounttoegangskader zijn ingebouwd.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Mogelijkheid</th>
              <th>Functioneel detail</th>
              <th class="cap-table-center">Inbegrepen</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI-handelskader</strong></td>
              <td>Algoritmische verwerking die dynamische macrostructurele berekeningen levert.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
            <tr>
              <td><strong>Geaggregeerde feeds</strong></td>
              <td>Realtime geconsolideerde grafieken voor moderne wereldwijde indices en tokens.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
            <tr>
              <td><strong>Cross-platformstabiliteit</strong></td>
              <td>Volledig responsieve weergave op mobiel, desktop en tablets.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
            <tr>
              <td><strong>Multi-assetdekking</strong></td>
              <td>Geünificeerde toegang tot crypto, forex en aandelenindices vanuit één accountlaag.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
            <tr>
              <td><strong>Geautomatiseerde risicomeldingen</strong></td>
              <td>Configureerbare meldingen die ongebruikelijke volatiliteit signaleren voordat deze posities raakt.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
            <tr>
              <td><strong>Versleutelde datakluis</strong></td>
              <td>Persoonlijke en accountgegevens geïsoleerd achter gelaagde cryptografische toegangscontroles.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 menselijke support</strong></td>
              <td>Live technische operators klaar om direct setupvragen te beantwoorden.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Inbegrepen">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Stortingen</div>
      <h2 class="section-title">Financier uw account met methoden die u al kent</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kaarten, e-wallets en bankoverschrijvingen — allemaal beschermd door 256-bits SSL-encryptie.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Geaccepteerde stortings- en financieringsmethoden">
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
          <span>Bankoverschrijving</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL-beschermd</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Betrouwbare infrastructuur</div>
        <h2 class="section-title">Gebouwd met partners van industrieniveau</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Gebruikersfeedback</div>
        <h2 class="section-title">Wat handelaren zeggen over <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Eerlijke feedback van onze wereldwijde multi-marktgemeenschap.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 van de 5 sterren">★★★★★</div>
            <p class="review-text">
              Als beginner intimideerde crypto me. <?= e(SITE_NAME) ?> maakte het dashboard zo intuïtief dat ik binnen enkele minuten vertrouwen had. De AI-analyse is kristalhelder.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Geverifieerde retailoperator · VK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 van de 5 sterren">★★★★★</div>
            <p class="review-text">
              De overzichtelijke interface bespaart me uren. AI die marktruis filtert tot hoofdtrends veranderde hoe ik dagelijkse posities beheer.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Cryptoactiva-analist · Canada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 van de 5 sterren">★★★★★</div>
            <p class="review-text">
              Executie met lage latentie plus slimme alerts laten me doelen onderweg bijstellen zonder meerdere programma’s te openen.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Privéportefeuillebeheerder · Duitsland</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 van de 5 sterren">★★★★★</div>
            <p class="review-text">
              Support antwoordde binnen twee minuten terwijl ik de verificatie configureerde. Uitzonderlijke service van institutioneel niveau.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmische handelaar · Frankrijk</p>
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
          <?= e(SITE_NAME) ?>: handelaren versterken met institutionele AI-architectuur
        </h2>

        <p class="seo-intro">
          Moderne interactie met activa vereist absolute helderheid. Wanneer datakaders overladen zijn met promotiebanners
          of zware interfacelagen, daalt de prestatie van de gebruiker. <?= e(SITE_NAME) ?> lost systemische complexiteit op door
          een elegant, responsief kernmilieu te bieden, geoptimaliseerd voor strategische executie op lange termijn. Elke platformmodule,
          van onboarding tot live-executie, is gebouwd rond hetzelfde principe: verwijder de ruis zodat de onderliggende data
          voor zichzelf kan spreken — zonder de diepgang op te offeren die ervaren deelnemers verwachten.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Geavanceerde <span>crypto-handelsactiva</span></h3>
            <p>
              Blockchainliquiditeit evolueert snel, waardoor infrastructuur met lage latentie cruciaal is.
              <?= e(SITE_NAME) ?> verbindt aangepaste nodes met grote digitale-activa-venues en levert live prijsfeedbacklussen.
              Heldere visuele metrics zetten chaotische multi-chainstructuren om in georganiseerde, leesbare datakanalen.
            </p>
            <p>
              Naast ruwe prijsfeeds contextualiseert het platform volumeverschuivingen en liquiditeitsdiepte, zodat plotselinge pieken
              makkelijker te interpreteren zijn — niet alleen reactieve signalen. Die consistentie telt het meest in volatiele sessies, wanneer
              gefragmenteerde tools beslissingen precies vertragen wanneer helderheid het hardst nodig is.
            </p>
          </div>

          <div class="seo-block">
            <h3>Diepe <span>neurale marktanalyse</span></h3>
            <p>
              Geautomatiseerde algoritmen analyseren binnenkomende marktgegevens om structurele verschuivingen in forex en internationale commodities te berekenen.
              <?= e(SITE_NAME) ?> destilleert complexe berekeningen tot heldere datatrends die onafhankelijk oordeel ondersteunen in plaats van te vervangen.
            </p>
            <p>
              Omdat modellen continu draaien in plaats van op een vast schema, verschijnen momentumwijzigingen terwijl ze gebeuren
              in plaats van in een vertraagde samenvatting. Het resultaat is een researchlaag die onafhankelijk oordeel ondersteunt
              terwijl de definitieve beslissing in handen van de gebruiker blijft.
            </p>
          </div>

          <div class="seo-block">
            <h3>Wrijvingsloze <span>accountinstelling</span></h3>
            <p>
              Compliance hoeft niet ingewikkeld te zijn. Onze gestructureerde registratiepijplijn beschermt privé-instellingen
              via veilige verificatieprocessen die ontworpen zijn om minder dan drie minuten te duren van start tot terminaltoegang.
            </p>
            <p>
              Elk veld in het traject legt uit waarom het wordt gevraagd, zodat beginners nooit hoeven te raden naar het doel van een
              verificatiestap. Na indiening lopen versleutelde identiteitscontroles op de achtergrond terwijl de rest van het
              dashboard volledig navigeerbaar blijft.
            </p>
          </div>

          <div class="seo-block">
            <h3>Risicocontroles van <span>institutionele kwaliteit</span></h3>
            <p>
              Positiegrootte, blootstellingslimieten en automatische volatiliteitsindicatoren condenseren historisch professionele desktools
              tot eenvoudige schakelaars — zodat nieuwere deelnemers dagelijkse discipline van ervaren handelaren overnemen.
            </p>
            <p>
              Alerts zijn per activa configureerbaar, zodat aandacht alleen naar markten gaat die dat echt verdienen.
              Deze gerichte aanpak helpt alertmoeheid te voorkomen, die er vaak toe leidt dat mensen meldingen negeren
              op minder selectieve platforms.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Supportcentrum</div>
        <h2 class="section-title">Veelgestelde vragen</h2>
        <p class="section-subtitle">Directe procedurele antwoorden over registratie en platformtoegang.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Hoe begin ik met <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Vul het registratieformulier hierboven in, volg onze veilige stapsgewijze onboarding,
              en activeer uw accountinstellingen via ons gestructureerde betalingsverwerkingssysteem.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Heb ik geavanceerde crypto-ervaring nodig?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nee. <?= e(SITE_NAME) ?> biedt een beginnervriendelijke dashboardmodus, geautomatiseerde analytische uitleg,
              en vereenvoudigde werkruimtes om nieuwe handelaren veilig te laten navigeren.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Wat is de minimale vereiste om te handelen?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              De standaard basisactivatie is <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Dit dient als operationeel handelskapitaal en blijft onder uw handmatige controle.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Zijn er verborgen operationele kosten?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nee. <?= e(SITE_NAME) ?> werkt met absolute prijstransparantie.
              We passen geen onverwachte platformtoegangsmarges of verborgen opnameberekeningen toe.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Hoe werkt de AI-intelligentiecomponent?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neurale systemen evalueren diepe statistische volatiliteitsmarkers over meerdere marktlagen,
              en zetten ruwe telemetrie om in vereenvoudigde trendlijnen voor eenvoudigere beoordeling.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Zijn mijn persoonlijke gegevens volledig beschermd?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ja. Elke accountpijplijn wordt gemaskeerd met veilige SSL-bescherming plus robuuste cryptografische protocollen
              om privégegevensbereiken volledig te isoleren.
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
          <h2>Klaar om de helderheid van <?= e(SITE_NAME) ?> te ervaren?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Sluit u aan bij een modern systeem geoptimaliseerd voor snelle operaties, gegevensbescherming en transparante toegang.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Maak uw account aan</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Gratis account aanmaken';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Premium AI-handelsmotor för globala marknader');
$page_description = SITE_NAME . ' — ett smartare och tydligare sätt att nå globala marknader med strukturerade AI-verktyg för krypto, forex och aktier.';
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
          <h1><?= e(SITE_NAME) ?>: ett smartare och tydligare sätt att nå <span class="text-accent">globala marknader</span></h1>

          <p class="hero-desc">
            Ny inom trading? <?= e(SITE_NAME) ?> erbjuder strukturerade AI-assisterade verktyg som håller din resa transparent.
            Utforska krypto, forex och aktier utan tekniskt kaos.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Börja handla — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Upptäck funktioner</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Skyddad av SSL-protokoll
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Guidad väg för nybörjare
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Skapa ditt konto</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Tar mindre än 3 minuter. Inga uppläggningsavgifter.';
            $form_submit = 'Skapa gratis konto';
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
            <div class="stat-label">Handlingsbara tillgångar</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Snabbt</div>
            <div class="stat-label">Kontoinställning</div>
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
            <div class="stat-label">Hjälp</div>
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
            <div class="stat-value">Säkert</div>
            <div class="stat-label">Databehandling</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Smart arbetsyta</div>

          <h2 class="section-title">
            Professionella diagram.<br>
            <span class="text-accent">Byggda för enkla beslut.</span>
          </h2>

          <p class="section-subtitle">
            Följ livepriser och agera från ett rent gränssnitt designat för att minska kognitiv belastning och emotionell handel.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI-förstärkta diagram i realtid
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Marknadsexekvering med ett tryck
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Se plattformsfunktioner</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Omedelbar exekvering tillgänglig</h4>
                <p>
                  För att omedelbart dirigera denna order och fånga den aktiva prisnivån, aktivera din säkra <?= e(SITE_NAME) ?>-terminal.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Skapa säkert konto
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD-instrumentpanel</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                LIVE
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Idag
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Sälj</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Köp</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Plattformsfunktioner</div>
        <h2 class="section-title">Allt du behöver för att handla med självförtroende på <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Säkerhet, hastighet och neural marknadsintelligens i en tydlig presentation</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Säkerhet i bankklass</h3>
          <p>SSL-kryptering, säker databehandling och en fullt skyddad kontostruktur.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI-marknadsanalys</h3>
          <p>Maskininlärningsberäkningar i realtid fokuserade på att fånga tydliga marknadsförskjutningar.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Låglatensflöden</h3>
          <p>Agil infrastruktur fokuserad på snabb orderhantering under perioder med hög aktivitet.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Tillgångar i realtid</div>
          <h2 class="section-title">Enhetlig <?= e(SITE_NAME) ?>-instrumentpanel för globala mått</h2>
          <p class="section-subtitle">
            Följ tillgångsrörelser i realtid, övervaka momentum och använd automatiserad AI-analys för att snabbt kartlägga mönster.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operativ effektivitet:</strong>
              Traditionell handel innebär att manuellt bevaka hundratals indikatorer.
              <?= e(SITE_NAME) ?>-algoritmer bearbetar tusentals prisförändringar varje millisekund,
              och producerar tydliga matematiska modeller så att du kan fånga rörelser tidigt.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Få tillgång till marknaderna</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Tillgång</span>
              <span style="text-align:right; padding-right:16px;">Pris</span>
              <span style="text-align:right;">24 h-förändring</span>
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
        <div class="section-label">Onboardingprocess</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> gör det enkelt att komma igång</h2>
        <p class="section-subtitle">Ingen tidigare kryptoerfarenhet? Vår automatiserade guide leder dig genom varje steg.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Säker registrering</h3>
            <p>Ange grundläggande kontaktuppgifter via vårt kraftigt krypterade formulärsystem.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI-guidad inställning</h3>
            <p>Plattformen presenterar gränssnittsalternativ anpassade efter dina preferenser.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Säker finansiering</h3>
            <p>Aktivera ditt handelsintervall via standardiserade, pålitliga betalningskanaler.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Distribuera signaler</h3>
            <p>Börja interagera med globala marknader med live neurala dataflöden.</p>
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
          <div class="section-label">Mobil åtkomst</div>
          <h2 class="section-title">Din portfölj i fickan</h2>
          <p class="section-subtitle">
            Hela <?= e(SITE_NAME) ?>-motorn komprimerad till en snabb mobilupplevelse med naturlig känsla.
            Följ tillgångar, genomför affärer och följ AI-signaler var som helst.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push-varningar vid kritiska prisrörelser
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrisk inloggning med krypterad lokal lagring
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Fullständig diagramsvit optimerad för pekskärm
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Skaffa appupplevelsen</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Balanserat ramverk</div>
        <h2 class="section-title">Transparenta driftparametrar</h2>
        <p class="section-subtitle">
          Vi tror på absolut ärlighet. Här är vad som särskiljer vårt system — och var branschgränserna vanligtvis ligger.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Viktiga fördelar</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistisk instrumentpanel finjusterad för institutionell exekveringshastighet.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neural analys som körs dygnet runt över tillgångar.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Inga dolda transaktionsmarginaler eller överraskande förvaltningsavgifter.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Direkt SSL-kryptografisk kontostruktur.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Guidad integration på minuter, inte dagar.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Andra plattformar</div>
          <h3>Vanliga branschbegränsningar</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Röriga, reklamtunga instrumentpaneler som saktar ner beslut.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statiska dagsrapporter istället för kontinuerlig liveanalys.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Dolda spreads, uttagsavgifter och otydlig prissättning.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Delad föråldrad infrastruktur med ojämn dataskydd.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Långsam, papperskrävande verifiering som kan ta dagar.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Jämförelsen återspeglar typiska mönster inom detaljhandel och är illustrativ; konkurrenters erbjudanden varierar.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Kärnfunktioner i plattformen på en blick</h2>
        <p class="section-subtitle">Granska de funktionella parametrar som är inbyggda i ditt kontoåtkomstramverk.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Funktion</th>
              <th>Funktionell detalj</th>
              <th class="cap-table-center">Ingår</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI-handelsramverk</strong></td>
              <td>Algoritmisk bearbetning som ger dynamiska makrostrukturella beräkningar.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
            <tr>
              <td><strong>Aggregerade flöden</strong></td>
              <td>Konsoliderade diagram i realtid för moderna globala index och tokens.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
            <tr>
              <td><strong>Plattformsövergripande stabilitet</strong></td>
              <td>Fullt responsiv rendering på mobil, desktop och surfplatta.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
            <tr>
              <td><strong>Täckning av flera tillgångar</strong></td>
              <td>Enhetlig åtkomst till krypto, forex och aktieindex från ett kontolager.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automatiserade riskvarningar</strong></td>
              <td>Konfigurerbara aviseringar som flaggar ovanlig volatilitet innan den påverkar positioner.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
            <tr>
              <td><strong>Krypterat datavalv</strong></td>
              <td>Personliga och kontodata isolerade bakom lager av kryptografiska åtkomstkontroller.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 mänsklig support</strong></td>
              <td>Live tekniska operatörer redo att svara på installationsfrågor direkt.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Ingår">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Insättningar</div>
      <h2 class="section-title">Finansiera ditt konto med metoder du redan känner till</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kort, e-plånböcker och banköverföringar — allt skyddat med 256-bitars SSL-kryptering.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Accepterade insättnings- och finansieringsmetoder">
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
          <span>Banköverföring</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL-skyddad</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Pålitlig infrastruktur</div>
        <h2 class="section-title">Byggd med branschledande partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Användarfeedback</div>
        <h2 class="section-title">Vad traders säger om <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Ärlig feedback från vår globala flermarknadsgemenskap.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 av 5 stjärnor">★★★★★</div>
            <p class="review-text">
              Som nybörjare kändes krypto skrämmande. <?= e(SITE_NAME) ?> gjorde instrumentpanelen så intuitiv att jag kände mig trygg inom några minuter. AI-analysen är kristallklar.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Verifierad retailhandlare · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 av 5 stjärnor">★★★★★</div>
            <p class="review-text">
              Det rena gränssnittet sparar mig timmar. AI som filtrerar bort marknadsbrus till huvudtrender har förändrat hur jag hanterar dagliga positioner.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Kryptoanalytiker · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 av 5 stjärnor">★★★★★</div>
            <p class="review-text">
              Låglatensexekvering plus smarta varningar låter mig justera mål i farten utan att starta flera program.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Privat portföljförvaltare · Tyskland</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 av 5 stjärnor">★★★★★</div>
            <p class="review-text">
              Hjälp svarade på två minuter medan jag konfigurerade verifiering. Enastående service i institutionell klass.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmisk trader · Frankrike</p>
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
          <?= e(SITE_NAME) ?>: stärker traders med institutionell AI-arkitektur
        </h2>

        <p class="seo-intro">
          Modern tillgångsinteraktion kräver absolut tydlighet. När dataramverk är fulla av reklambanners
          eller tunga gränssnittslager sjunker användarnas prestation. <?= e(SITE_NAME) ?> löser systemisk komplexitet genom att distribuera
          en elegant, responsiv kärnmiljö optimerad för långsiktig strategisk exekvering. Varje plattformsmodul,
          från onboarding till liveexekvering, bygger på samma princip: ta bort bruset så att underliggande data
          kan tala för sig själv — utan att offra det djup erfarna deltagare förväntar sig.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Avancerade <span>kryptohandelstillgångar</span></h3>
            <p>
              Blockchainlikviditet utvecklas snabbt, vilket gör låglatensinfrastruktur kritisk.
              <?= e(SITE_NAME) ?> kopplar anpassade noder till stora digitala tillgångsmarknadsplatser och ger liveprisåterkoppling.
              Tydliga visuella mått förvandlar kaotiska multi-chain-strukturer till organiserade, läsbara datakanaler.
            </p>
            <p>
              Utöver råa prisflöden kontextualiserar plattformen volymförskjutningar och likviditetsdjup så att plötsliga toppar är
              lättare att tolka — inte bara reaktiva signaler. Den konsekvensen är viktigast i volatila sessioner, när
              fragmenterade verktyg saktar ner beslut precis när tydlighet behövs som mest.
            </p>
          </div>

          <div class="seo-block">
            <h3>Djup <span>neural marknadsanalys</span></h3>
            <p>
              Automatiserade algoritmer analyserar inkommande marknadsdata för att beräkna strukturella förskjutningar inom forex och internationella råvaror.
              <?= e(SITE_NAME) ?> destillerar komplexa beräkningar till tydliga datatrender som stödjer oberoende omdöme snarare än ersätter det.
            </p>
            <p>
              Eftersom modeller körs kontinuerligt snarare än enligt fast schema visas momentumförändringar när de sker
              istället för i en försenad sammanfattning. Resultatet är ett forskningslager som stödjer oberoende omdöme
              och lämnar det slutgiltiga beslutet i användarens händer.
            </p>
          </div>

          <div class="seo-block">
            <h3>Friktionsfri <span>kontoinställning</span></h3>
            <p>
              Compliance behöver inte vara komplicerat. Vår strukturerade registreringspipeline skyddar privata inställningar
              genom säkra verifieringsprocesser designade att ta under tre minuter från start till terminalåtkomst.
            </p>
            <p>
              Varje fält i resan förklarar varför det efterfrågas, så nybörjare aldrig behöver gissa syftet med ett
              verifieringssteg. När det skickats körs krypterade identitetskontroller i bakgrunden medan resten av
              instrumentpanelen förblir fullt navigerbar.
            </p>
          </div>

          <div class="seo-block">
            <h3>Riskkontroller i <span>institutionell kvalitet</span></h3>
            <p>
              Positionsstorlek, exponeringsgränser och automatiska volatilitetsindikatorer kondenserar historiskt professionella deskverktyg
              till enkla växlar — så att nyare deltagare ärver daglig disciplin från erfarna traders.
            </p>
            <p>
              Varningar är konfigurerbara per tillgång, så uppmärksamheten riktas bara mot marknader som verkligen förtjänar det.
              Detta fokuserade tillvägagångssätt hjälper till att förebygga varningströtthet som ofta får folk att ignorera aviseringar
              på mindre selektiva plattformar.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Supportcenter</div>
        <h2 class="section-title">Vanliga frågor</h2>
        <p class="section-subtitle">Omedelbara svar om registrering och plattformsåtkomst.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Hur kommer jag igång med <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Fyll i registreringsformuläret ovan, följ vår säkra steg-för-steg-onboarding
              och aktivera dina kontoinställningar via vårt strukturerade betalningssystem.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Behöver jag avancerad kryptoerfarenhet?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nej. <?= e(SITE_NAME) ?> erbjuder ett nybörjarläge för instrumentpanelen, automatiserade analytiska förklaringar,
              och förenklade arbetsytor som hjälper nya traders att navigera säkert.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Vad är minimikravet för att handla?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Standardbasaktivering är <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Det fungerar som operativt handelskapital och förblir under din manuella kontroll.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Finns det dolda driftsavgifter?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nej. <?= e(SITE_NAME) ?> arbetar med absolut prisgenomskinlighet.
              Vi tillämpar inga oväntade plattformsåtkomstmarginaler eller dolda uttagsberäkningar.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Hur fungerar AI-intelligenskomponenten?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neurala system utvärderar djupa statistiska volatilitetsmarkörer över flera marknadslager
              och omvandlar rå telemetri till förenklade trendlinjer för enklare bedömning.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Är mina personuppgifter fullt skyddade?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ja. Varje kontopipeline maskeras med säker SSL-skydd och robusta kryptografiska protokoll
              för att helt isolera privata dataområden.
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
          <h2>Redo att uppleva <?= e(SITE_NAME) ?> tydlighet?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Gå med i ett modernt system optimerat för snabba operationer, dataskydd och transparent åtkomst.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Skapa ditt konto</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Skapa gratis konto';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

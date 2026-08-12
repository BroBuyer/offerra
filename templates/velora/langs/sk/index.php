<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Prémiový AI obchodný engine pre globálne trhy');
$page_description = SITE_NAME . ' — inteligentnejší a prehľadnejší prístup ku globálnym trhom so štruktúrovanými AI nástrojmi pre krypto, forex a akcie.';
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
          <h1><?= e(SITE_NAME) ?>: inteligentnejší a prehľadnejší prístup k <span class="text-accent">globálnym trhom</span></h1>

          <p class="hero-desc">
            Nováčik v obchodovaní? <?= e(SITE_NAME) ?> ponúka štruktúrované AI nástroje navrhnuté tak, aby vaša cesta zostala transparentná.
            Preskúmajte krypto, forex a akcie bez technického chaosu.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Začať obchodovať — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Objaviť funkcie</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Chránené protokolom SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vedená cesta pre začiatočníkov
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Vytvoriť účet</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Trvá menej ako 3 minúty. Žiadne poplatky za nastavenie.';
            $form_submit = 'Vytvoriť bezplatný účet';
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
            <div class="stat-label">Obchodovateľné aktíva</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Rýchlo</div>
            <div class="stat-label">Nastavenie účtu</div>
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
            <div class="stat-value">Bezpečne</div>
            <div class="stat-label">Spracovanie údajov</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Inteligentné pracovné prostredie</div>

          <h2 class="section-title">
            Profesionálne grafy.<br>
            <span class="text-accent">Navrhnuté pre jednoduché rozhodnutia.</span>
          </h2>

          <p class="section-subtitle">
            Sledujte živé ceny a konajte z prehľadného rozhrania navrhnutého na zníženie kognitívnej záťaže a emočného obchodovania.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI obohatené grafy v reálnom čase
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Systém exekúcie na trhu jedným ťuknutím
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Zobraziť funkcie platformy</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Okamžitá exekúcia k dispozícii</h4>
                <p>
                  Ak chcete túto objednávku okamžite smerovať a zachytiť aktívnu cenovú úroveň, aktivujte svoj zabezpečený <?= e(SITE_NAME) ?> terminál.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Vytvoriť zabezpečený účet
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Dashboard BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                NAŽIVO
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Dnes
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Predať</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Kúpiť</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Možnosti platformy</div>
        <h2 class="section-title">Všetko, čo potrebujete na sebavedomé obchodovanie na <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Bezpečnosť, rýchlosť a neurónová trhová inteligencia v prehľadnej prezentácii</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Bezpečnosť na úrovni banky</h3>
          <p>SSL šifrovanie, bezpečné spracovanie údajov a plne chránená architektúra účtu.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI analýza trhu</h3>
          <p>Výpočty strojového učenia v reálnom čase zamerané na zachytenie výrazných trhových posunov.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Nízkolatenčné feedy</h3>
          <p>Agilná infraštruktúra zameraná na rýchle spracovanie objednávok v obdobiach vysokej aktivity.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Aktíva v reálnom čase</div>
          <h2 class="section-title">Jednotný <?= e(SITE_NAME) ?> dashboard pre globálne metriky</h2>
          <p class="section-subtitle">
            Sledujte pohyby aktív v reálnom čase, monitorujte momentum a využívajte automatizovanú AI analýzu na rýchle mapovanie vzorov.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Prevádzková efektivita:</strong>
              Tradičné obchodovanie znamená manuálne sledovanie stoviek indikátorov.
              <?= e(SITE_NAME) ?> algoritmy spracúvajú tisíce cenových zmien každú milisekundu,
              a vytvárajú jasné matematické modely, aby ste pohyby zachytili včas.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Prístup na trhy</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Aktívum</span>
              <span style="text-align:right; padding-right:16px;">Cena</span>
              <span style="text-align:right;">Zmena za 24 h</span>
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
        <div class="section-label">Proces onboardingu</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> robí začiatok bez stresu</h2>
        <p class="section-subtitle">Nemáte skúsenosti s kryptom? Náš automatizovaný sprievodca vás prevedie každým krokom.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Bezpečná registrácia</h3>
            <p>Zadajte základné kontaktné údaje prostredníctvom nášho silne šifrovaného formulára.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Nastavenie s AI sprievodcom</h3>
            <p>Platforma ponúkne možnosti rozhrania prispôsobené vašim preferenciám.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Bezpečné financovanie</h3>
            <p>Aktivujte svoj obchodný rozsah prostredníctvom štandardných, spoľahlivých platobných kanálov.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Nasadenie signálov</h3>
            <p>Začnite interagovať s globálnymi trhmi pomocou živých neurónových dátových feedov.</p>
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
          <div class="section-label">Mobilný prístup</div>
          <h2 class="section-title">Vaše portfólio vo vrecku</h2>
          <p class="section-subtitle">
            Celý <?= e(SITE_NAME) ?> engine skomprimovaný do rýchleho mobilného zážitku s natívnym pocitom.
            Sledujte aktíva, vykonávajte obchody a sledujte AI signály odkiaľkoľvek.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push upozornenia na kritické cenové pohyby
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrické prihlásenie so šifrovaným lokálnym úložiskom
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Kompletná sada grafov optimalizovaná pre dotyk
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Získať aplikáciu</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Vyvážený rámec</div>
        <h2 class="section-title">Transparentné prevádzkové parametre</h2>
        <p class="section-subtitle">
          Veríme v absolútnu úprimnosť. Tu je to, čím sa náš systém odlišuje — a kde zvyčajne ležia limity odvetvia.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Kľúčové výhody</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistický dashboard ladený na rýchlosť exekúcie na inštitucionálnej úrovni.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neurónová analytika bežiaca 24/7 naprieč aktívami.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Žiadne skryté transakčné marže ani prekvapivé poplatky za správu.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Priama kryptografická architektúra účtu so SSL.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vedená integrácia trvá minúty, nie dni.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Iné platformy</div>
          <h3>Bežné limity odvetvia</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Preplnené dashboardy plné reklám, ktoré spomaľujú rozhodovanie.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statické denné reporty namiesto kontinuálnej živej analýzy.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Skryté spready, poplatky za výber a nejasné ceny.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Zdieľaná zastaraná infraštruktúra s nerovnomernou ochranou údajov.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Pomalá, papierovo náročná verifikácia, ktorá môže trvať dni.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Porovnanie odráža typické vzorce v retailovom obchodovaní a slúži na ilustráciu; ponuky konkurentov sa líšia.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Kľúčové funkcie platformy na prvý pohľad</h2>
        <p class="section-subtitle">Prezrite si funkčné parametre zabudované do rámca prístupu k vášmu účtu.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Schopnosť</th>
              <th>Funkčný detail</th>
              <th class="cap-table-center">Zahrnuté</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI obchodný rámec</strong></td>
              <td>Algoritmické spracovanie poskytujúce dynamické makrostrukturálne výpočty.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
            <tr>
              <td><strong>Agregované feedy</strong></td>
              <td>Konsolidované grafy v reálnom čase pre moderné globálne indexy a tokeny.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilita naprieč platformami</strong></td>
              <td>Plne responzívne vykresľovanie na mobile, desktope a tabletoch.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
            <tr>
              <td><strong>Pokrytie viacerých aktív</strong></td>
              <td>Jednotný prístup ku kryptu, forexu a akciovým indexom z jednej vrstvy účtu.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automatizované rizikové upozornenia</strong></td>
              <td>Konfigurovateľné oznámenia upozorňujúce na nezvyčajnú volatilitu skôr, než zasiahne pozície.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
            <tr>
              <td><strong>Šifrovaný dátový trezor</strong></td>
              <td>Osobné a účtové údaje izolované za vrstvenými kryptografickými kontrolami prístupu.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 ľudská podpora</strong></td>
              <td>Technickí operátori v reálnom čase pripravení okamžite odpovedať na otázky k nastaveniu.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuté">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Vklady</div>
      <h2 class="section-title">Financujte účet metódami, ktoré už poznáte</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Karty, e-peňaženky a bankové prevody — všetko chránené 256-bitovým SSL šifrovaním.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Akceptované metódy vkladu a financovania">
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
          <span>Bankový prevod</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Chránené SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Spoľahlivá infraštruktúra</div>
        <h2 class="section-title">Postavené s partnermi na úrovni odvetvia</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Spätná väzba používateľov</div>
        <h2 class="section-title">Čo obchodníci hovoria o <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Úprimná spätná väzba z našej globálnej komunity naprieč trhmi.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hviezdičiek">★★★★★</div>
            <p class="review-text">
              Ako začiatočníka ma krypto desilo. <?= e(SITE_NAME) ?> urobil dashboard tak intuitívny, že som sa cítil isto už za pár minút. AI analýza je krištáľovo jasná.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Overený retailový obchodník · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hviezdičiek">★★★★★</div>
            <p class="review-text">
              Prehľadné rozhranie mi šetrí hodiny. AI, ktorá filtruje trhový šum na hlavné trendy, zmenila spôsob, akým spravujem denné pozície.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analytik krypto aktív · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hviezdičiek">★★★★★</div>
            <p class="review-text">
              Nízkolatenčná exekúcia plus inteligentné upozornenia mi umožňujú upraviť ciele za behu bez spúšťania viacerých programov.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Súkromný správca portfólia · Nemecko</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hviezdičiek">★★★★★</div>
            <p class="review-text">
              Podpora odpovedala za dve minúty, zatiaľ čo som nastavoval verifikáciu. Výnimočný servisný rámec na inštitucionálnej úrovni.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmický obchodník · Francúzsko</p>
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
          <?= e(SITE_NAME) ?>: posilňovanie obchodníkov inštitucionálnou AI architektúrou
        </h2>

        <p class="seo-intro">
          Moderná interakcia s aktívami vyžaduje absolútnu jasnosť. Keď sú dátové rámce preplnené propagačnými bannermi
          alebo ťažkými vrstvami rozhrania, výkon používateľa klesá. <?= e(SITE_NAME) ?> rieši systémovú zložitosť nasadením
          elegantného, responzívneho jadrového prostredia optimalizovaného pre dlhodobú strategickú exekúciu. Každý modul platformy,
          od onboardingu po živú exekúciu, stavia na rovnakom princípe: odstrániť šum, aby mohli základné údaje
          hovoriť samy za seba — bez obetovania hĺbky, ktorú skúsení účastníci očakávajú.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Pokročilé <span>krypto obchodné aktíva</span></h3>
            <p>
              Likvidita blockchainu sa rýchlo vyvíja, čo robí nízkolatenčnú infraštruktúru kritickou.
              <?= e(SITE_NAME) ?> prepája vlastné uzly s hlavnými digitálnymi trhmi a poskytuje živé spätné väzby cien.
              Prehľadné vizuálne metriky premieňajú chaotické multi-chain štruktúry na organizované, čitateľné dátové kanály.
            </p>
            <p>
              Okrem surových cenových feedov platforma kontextualizuje posuny objemu a hĺbku likvidity, takže náhle skoky sú
              ľahšie interpretovateľné — nielen reaktívne signály. Táto konzistencia je najdôležitejšia vo volatilných reláciách, keď
              fragmentované nástroje spomaľujú rozhodovanie presne v okamihu, keď je jasnosť najviac potrebná.
            </p>
          </div>

          <div class="seo-block">
            <h3>Hlboká <span>neurónová analýza trhu</span></h3>
            <p>
              Automatizované algoritmy analyzujú prichádzajúce trhové údaje na výpočet štrukturálnych posunov naprieč forexom a medzinárodnými komoditami.
              <?= e(SITE_NAME) ?> destiluje zložité výpočty do jasných dátových trendov, ktoré podporujú nezávislé úsudky skôr než ich nahrádzajú.
            </p>
            <p>
              Pretože modely bežia kontinuálne skôr než podľa pevného harmonogramu, zmeny momenta sa objavujú, ako nastávajú
              namiesto v oneskorenom súhrne. Výsledkom je výskumná vrstva podporujúca nezávislé úsudky
              a ponechávajúca konečné rozhodnutie v rukách používateľa.
            </p>
          </div>

          <div class="seo-block">
            <h3>Bezproblémové <span>nastavenie účtu</span></h3>
            <p>
              Compliance nemusí byť zložitý. Náš štruktúrovaný registračný pipeline chráni súkromné nastavenia
              prostredníctvom bezpečných verifikačných procesov navrhnutých tak, aby trvali menej ako tri minúty od začiatku po prístup k terminálu.
            </p>
            <p>
              Každé pole v procese vysvetľuje, prečo je požadované, aby začiatočníci nemuseli hádať účel
              verifikačného kroku. Po odoslaní bežia šifrované identity kontroly na pozadí, zatiaľ čo zvyšok
              dashboardu zostáva plne prehliadateľný.
            </p>
          </div>

          <div class="seo-block">
            <h3>Rizikové kontroly <span>inštitucionálnej kvality</span></h3>
            <p>
              Veľkosť pozície, limity expozície a automatické indikátory volatility zhusťujú historicky profesionálne nástroje obchodného stola
              do jednoduchých prepínačov — aby noví účastníci zdedili dennú disciplínu od skúsených obchodníkov.
            </p>
            <p>
              Upozornenia sú konfigurovateľné podľa aktíva, takže pozornosť je upútaná len na trhy, ktoré to skutočne vyžadujú.
              Tento cielený prístup pomáha predchádzať únave z upozornení, ktorá často vedie k ignorovaniu notifikácií
              na menej selektívnych platformách.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Centrum podpory</div>
        <h2 class="section-title">Často kladené otázky</h2>
        <p class="section-subtitle">Okamžité odpovede k registrácii a prístupu na platformu.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Ako začať s <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Vyplňte registračný formulár vyššie, postupujte podľa nášho bezpečného krok za krokom onboardingu
              a aktivujte nastavenia účtu prostredníctvom nášho štruktúrovaného platobného systému.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Potrebujem pokročilé skúsenosti s kryptom?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nie. <?= e(SITE_NAME) ?> ponúka režim dashboardu pre začiatočníkov, automatizované analytické vysvetlenia,
              a zjednodušené pracovné prostredia, ktoré pomáhajú novým obchodníkom bezpečne sa orientovať.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Aká je minimálna požiadavka na obchodovanie?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Štandardná základná aktivácia je <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Slúži ako prevádzkový obchodný kapitál a zostáva pod vašou manuálnou kontrolou.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Existujú skryté prevádzkové poplatky?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nie. <?= e(SITE_NAME) ?> funguje s absolútnou cenovou transparentnosťou.
              Neúčtujeme neočakávané marže za prístup k platforme ani skryté výpočty výberov.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ako funguje komponenta AI inteligencie?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neurónové systémy vyhodnocujú hlboké štatistické markery volatility naprieč viacerými trhovými vrstvami
              a prevádzajú surovú telemetriu do zjednodušených trendových línií pre ľahšie posúdenie.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Sú moje osobné údaje plne chránené?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Áno. Každý pipeline účtu je maskovaný pomocou bezpečnej SSL ochrany a robustných kryptografických protokolov
              na úplnú izoláciu súkromných dátových rozsahov.
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
          <h2>Pripravení zažiť jasnosť <?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Pripojte sa k modernému systému optimalizovanému pre rýchle operácie, ochranu údajov a transparentný prístup.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Vytvoriť účet</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Vytvoriť bezplatný účet';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

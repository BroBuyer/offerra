<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Prémiový AI obchodní engine pro globální trhy');
$page_description = SITE_NAME . ' — chytřejší a přehlednější cesta ke globálním trhům se strukturovanými AI nástroji pro krypto, forex a akcie.';
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
          <h1><?= e(SITE_NAME) ?>: chytřejší a přehlednější cesta k <span class="text-accent">globálním trhům</span></h1>

          <p class="hero-desc">
            Nováček v obchodování? <?= e(SITE_NAME) ?> nabízí strukturované AI nástroje navržené tak, aby vaše cesta zůstala transparentní.
            Prozkoumejte krypto, forex a akcie bez technického chaosu.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Začít obchodovat — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Objevit funkce</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Chráněno protokolem SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vedená cesta pro začátečníky
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Vytvořit účet</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Trvá méně než 3 minuty. Žádné poplatky za nastavení.';
            $form_submit = 'Vytvořit bezplatný účet';
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
            <div class="stat-label">Obchodovatelné aktiva</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Rychle</div>
            <div class="stat-label">Nastavení účtu</div>
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
            <div class="stat-value">Bezpečně</div>
            <div class="stat-label">Zpracování dat</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Chytré pracovní prostředí</div>

          <h2 class="section-title">
            Profesionální grafy.<br>
            <span class="text-accent">Navrženo pro jednoduchá rozhodnutí.</span>
          </h2>

          <p class="section-subtitle">
            Sledujte živé ceny a jednejte z přehledného rozhraní navrženého ke snížení kognitivní zátěže a emočního obchodování.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI obohacené grafy v reálném čase
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Systém exekuce na trhu jedním klepnutím
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Zobrazit funkce platformy</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Okamžitá exekuce k dispozici</h4>
                <p>
                  Chcete-li tuto objednávku okamžitě směrovat a zachytit aktivní cenovou úroveň, aktivujte svůj zabezpečený <?= e(SITE_NAME) ?> terminál.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Vytvořit zabezpečený účet
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Dashboard BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                ŽIVĚ
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Prodat</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Koupit</button>
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
        <h2 class="section-title">Vše, co potřebujete k sebevědomému obchodování na <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Bezpečnost, rychlost a neuronová tržní inteligence v přehledné prezentaci</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Bezpečnost na úrovni banky</h3>
          <p>SSL šifrování, bezpečné zpracování dat a plně chráněná architektura účtu.</p>
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
          <p>Výpočty strojového učení v reálném čase zaměřené na zachycení výrazných tržních posunů.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Nízkolatenční feedy</h3>
          <p>Agilní infrastruktura zaměřená na rychlé zpracování objednávek v obdobích vysoké aktivity.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Aktiva v reálném čase</div>
          <h2 class="section-title">Jednotný <?= e(SITE_NAME) ?> dashboard pro globální metriky</h2>
          <p class="section-subtitle">
            Sledujte pohyby aktiv v reálném čase, monitorujte momentum a využívejte automatizovanou AI analýzu k rychlému mapování vzorců.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Provozní efektivita:</strong>
              Tradiční obchodování znamená manuální sledování stovek indikátorů.
              <?= e(SITE_NAME) ?> algoritmy zpracovávají tisíce cenových změn každou milisekundu,
              a vytvářejí jasné matematické modely, abyste pohyby zachytili včas.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Přístup na trhy</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Aktivum</span>
              <span style="text-align:right; padding-right:16px;">Cena</span>
              <span style="text-align:right;">Změna za 24 h</span>
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
        <h2 class="section-title"><?= e(SITE_NAME) ?> dělá začátek bez stresu</h2>
        <p class="section-subtitle">Nemáte zkušenosti s kryptem? Náš automatizovaný průvodce vás provede každým krokem.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Bezpečná registrace</h3>
            <p>Zadejte základní kontaktní údaje prostřednictvím našeho silně šifrovaného formuláře.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Nastavení s AI průvodcem</h3>
            <p>Platforma nabídne možnosti rozhraní přizpůsobené vašim preferencím.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Bezpečné financování</h3>
            <p>Aktivujte svůj obchodní rozsah prostřednictvím standardních, spolehlivých platebních kanálů.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Nasazení signálů</h3>
            <p>Začněte interagovat s globálními trhy pomocí živých neuronových datových feedů.</p>
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
          <div class="section-label">Mobilní přístup</div>
          <h2 class="section-title">Vaše portfolio v kapse</h2>
          <p class="section-subtitle">
            Celý <?= e(SITE_NAME) ?> engine zkomprimovaný do rychlého mobilního zážitku s nativním pocitem.
            Sledujte aktiva, provádějte obchody a sledujte AI signály odkudkoli.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push upozornění na kritické cenové pohyby
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrické přihlášení se šifrovaným lokálním úložištěm
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Kompletní sada grafů optimalizovaná pro dotyk
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Získat aplikaci</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Vyvážený rámec</div>
        <h2 class="section-title">Transparentní provozní parametry</h2>
        <p class="section-subtitle">
          Věříme v absolutní upřímnost. Zde je to, čím se náš systém odlišuje — a kde obvykle leží limity odvětví.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Klíčové výhody</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistický dashboard laděný na rychlost exekuce na institucionální úrovni.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neuronová analytika běžící 24/7 napříč aktivy.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Žádné skryté transakční marže ani překvapivé poplatky za správu.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Přímá kryptografická architektura účtu se SSL.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vedená integrace trvá minuty, ne dny.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Jiné platformy</div>
          <h3>Běžné limity odvětví</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Přeplněné dashboardy plné reklam, které zpomalují rozhodování.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statické denní reporty místo kontinuální živé analýzy.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Skryté spready, poplatky za výběr a nejasné ceny.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Sdílená zastaralá infrastruktura s nerovnoměrnou ochranou dat.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Pomalá, papírově náročná verifikace, která může trvat dny.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Srovnání odráží typické vzorce v retailovém obchodování a slouží k ilustraci; nabídky konkurentů se liší.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Klíčové funkce platformy na první pohled</h2>
        <p class="section-subtitle">Prohlédněte si funkční parametry vestavěné do rámce přístupu k vašemu účtu.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Schopnost</th>
              <th>Funkční detail</th>
              <th class="cap-table-center">Zahrnuto</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI obchodní rámec</strong></td>
              <td>Algoritmické zpracování poskytující dynamické makrostrukturální výpočty.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
            <tr>
              <td><strong>Agregované feedy</strong></td>
              <td>Konsolidované grafy v reálném čase pro moderní globální indexy a tokeny.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilita napříč platformami</strong></td>
              <td>Plně responzivní vykreslování na mobilu, desktopu a tabletech.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
            <tr>
              <td><strong>Pokrytí více aktiv</strong></td>
              <td>Jednotný přístup ke kryptu, forexu a akciovým indexům z jedné vrstvy účtu.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automatizovaná riziková upozornění</strong></td>
              <td>Konfigurovatelná oznámení upozorňující na neobvyklou volatilitu dříve, než zasáhne pozice.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
            <tr>
              <td><strong>Šifrovaný datový trezor</strong></td>
              <td>Osobní a účetní data izolovaná za vrstvenými kryptografickými kontrolami přístupu.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 lidská podpora</strong></td>
              <td>Techničtí operátoři v reálném čase připraveni okamžitě odpovědět na otázky k nastavení.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Zahrnuto">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Vklady</div>
      <h2 class="section-title">Financujte účet metodami, které už znáte</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Karty, e-peněženky a bankovní převody — vše chráněno 256bitovým SSL šifrováním.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Akceptované metody vkladu a financování">
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
          <span>Bankovní převod</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Chráněno SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Spolehlivá infrastruktura</div>
        <h2 class="section-title">Postaveno s partnery na úrovni odvětví</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Zpětná vazba uživatelů</div>
        <h2 class="section-title">Co obchodníci říkají o <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Upřímná zpětná vazba z naší globální komunity napříč trhy.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hvězdiček">★★★★★</div>
            <p class="review-text">
              Jako začátečník mě krypto děsilo. <?= e(SITE_NAME) ?> udělal dashboard tak intuitivní, že jsem se cítil jistě během pár minut. AI analýza je křišťálově jasná.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Ověřený retailový obchodník · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hvězdiček">★★★★★</div>
            <p class="review-text">
              Přehledné rozhraní mi šetří hodiny. AI, která filtruje tržní šum na hlavní trendy, změnila způsob, jak spravuji denní pozice.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analytik krypto aktiv · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hvězdiček">★★★★★</div>
            <p class="review-text">
              Nízkolatenční exekuce plus chytrá upozornění mi umožňují upravit cíle za běhu bez spouštění více programů.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Soukromý správce portfolia · Německo</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 z 5 hvězdiček">★★★★★</div>
            <p class="review-text">
              Podpora odpověděla za dvě minuty, zatímco jsem nastavoval verifikaci. Výjimečný servisní rámec na institucionální úrovni.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmický obchodník · Francie</p>
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
          <?= e(SITE_NAME) ?>: posilování obchodníků institucionální AI architekturou
        </h2>

        <p class="seo-intro">
          Moderní interakce s aktivy vyžaduje absolutní jasnost. Když jsou datové rámce přeplněné propagačními bannery
          nebo těžkými vrstvami rozhraní, výkon uživatele klesá. <?= e(SITE_NAME) ?> řeší systémovou složitost nasazením
          elegantního, responzivního jádrového prostředí optimalizovaného pro dlouhodobou strategickou exekuci. Každý modul platformy,
          od onboardingu po živou exekuci, staví na stejném principu: odstranit šum, aby mohla základní data
          mluvit sama za sebe — bez obětování hloubky, kterou zkušení účastníci očekávají.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Pokročilá <span>krypto obchodní aktiva</span></h3>
            <p>
              Likvidita blockchainu se rychle vyvíjí, což činí nízkolatenční infrastrukturu kritickou.
              <?= e(SITE_NAME) ?> propojuje vlastní uzly s hlavními digitálními tržišti a poskytuje živé smyčky zpětné vazby cen.
              Přehledné vizuální metriky proměňují chaotické multi-chain struktury v organizované, čitelné datové kanály.
            </p>
            <p>
              Kromě surových cenových feedů platforma kontextualizuje posuny objemu a hloubku likvidity, takže náhlé skoky jsou
              snadněji interpretovatelné — nejen reaktivní signály. Tato konzistence je nejdůležitější v volatilních seancích, kdy
              fragmentované nástroje zpomalují rozhodování přesně v okamžiku, kdy je jasnost nejvíce potřeba.
            </p>
          </div>

          <div class="seo-block">
            <h3>Hluboká <span>neuronová analýza trhu</span></h3>
            <p>
              Automatizované algoritmy analyzují příchozí tržní data k výpočtu strukturálních posunů napříč forexem a mezinárodními komoditami.
              <?= e(SITE_NAME) ?> destiluje složité výpočty do jasných datových trendů, které podporují nezávislé úsudky spíše než je nahrazují.
            </p>
            <p>
              Protože modely běží kontinuálně spíše než podle pevného harmonogramu, změny momenta se objevují, jak nastávají
              místo v opožděném souhrnu. Výsledkem je výzkumná vrstva podporující nezávislé úsudky
              a ponechávající konečné rozhodnutí v rukou uživatele.
            </p>
          </div>

          <div class="seo-block">
            <h3>Bezproblémové <span>nastavení účtu</span></h3>
            <p>
              Compliance nemusí být složitý. Náš strukturovaný registrační pipeline chrání soukromá nastavení
              prostřednictvím bezpečných verifikačních procesů navržených tak, aby trvaly méně než tři minuty od začátku po přístup k terminálu.
            </p>
            <p>
              Každé pole v procesu vysvětluje, proč je požadováno, aby začátečníci nemuseli hádat účel
              verifikačního kroku. Po odeslání běží šifrované identity kontroly na pozadí, zatímco zbytek
              dashboardu zůstává plně prohlížitelný.
            </p>
          </div>

          <div class="seo-block">
            <h3>Rizikové kontroly <span>institucionální kvality</span></h3>
            <p>
              Velikost pozice, limity expozice a automatické indikátory volatility zhušťují historicky profesionální nástroje obchodního stolu
              do jednoduchých přepínačů — aby noví účastníci zdědili denní disciplínu od zkušených obchodníků.
            </p>
            <p>
              Upozornění jsou konfigurovatelná podle aktiva, takže pozornost je upoutána pouze na trhy, které to skutečně vyžadují.
              Tento cílený přístup pomáhá předcházet únavě z upozornění, která často vede k ignorování notifikací
              na méně selektivních platformách.
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
        <p class="section-subtitle">Okamžité odpovědi k registraci a přístupu na platformu.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Jak začít s <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Vyplňte registrační formulář výše, postupujte podle našeho bezpečného krok za krokem onboardingu
              a aktivujte nastavení účtu prostřednictvím našeho strukturovaného platebního systému.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Potřebuji pokročilé zkušenosti s kryptem?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ne. <?= e(SITE_NAME) ?> nabízí režim dashboardu pro začátečníky, automatizovaná analytická vysvětlení,
              a zjednodušená pracovní prostředí, která pomáhají novým obchodníkům bezpečně se orientovat.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Jaká je minimální požadavek k obchodování?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Standardní základní aktivace je <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Slouží jako provozní obchodní kapitál a zůstává pod vaší manuální kontrolou.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Existují skryté provozní poplatky?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ne. <?= e(SITE_NAME) ?> funguje s absolutní cenovou transparentností.
              Neúčtujeme neočekávané marže za přístup k platformě ani skryté výpočty výběrů.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Jak funguje komponenta AI inteligence?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neuronové systémy vyhodnocují hluboké statistické markery volatility napříč více tržními vrstvami
              a převádějí surovou telemetrii do zjednodušených trendových linií pro snazší posouzení.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Jsou moje osobní data plně chráněna?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ano. Každý pipeline účtu je maskován pomocí bezpečné SSL ochrany a robustních kryptografických protokolů
              k úplné izolaci soukromých datových rozsahů.
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
          <h2>Připraveni zažít jasnost <?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Připojte se k modernímu systému optimalizovanému pro rychlé operace, ochranu dat a transparentní přístup.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Vytvořit účet</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Vytvořit bezplatný účet';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

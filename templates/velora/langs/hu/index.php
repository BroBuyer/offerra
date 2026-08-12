<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Prémium AI kereskedési motor a globális piacokhoz');
$page_description = SITE_NAME . ' — okosabb, áttekinthetőbb hozzáférés a globális piacokhoz strukturált AI eszközökkel kriptóhoz, forexhez és részvényekhez.';
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
          <h1><?= e(SITE_NAME) ?>: okosabb, áttekinthetőbb hozzáférés a <span class="text-accent">globális piacokhoz</span></h1>

          <p class="hero-desc">
            Új a kereskedésben? <?= e(SITE_NAME) ?> strukturált, AI-támogatott eszközöket kínál, amelyek átláthatóvá teszik az utadat.
            Fedezze fel a kriptót, a forexet és a részvényeket technikai káosz nélkül.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Kereskedés indítása — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Funkciók felfedezése</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              SSL protokollal védve
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vezetett út kezdőknek
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Fiók létrehozása</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Kevesebb mint 3 perc. Nulla beállítási díj.';
            $form_submit = 'Ingyenes fiók létrehozása';
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
            <div class="stat-label">Kereskedhető eszközök</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Gyors</div>
            <div class="stat-label">Fiókbeállítás</div>
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
            <div class="stat-label">Támogatás</div>
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
            <div class="stat-value">Biztonságos</div>
            <div class="stat-label">Adatfeldolgozás</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Okos munkaterület</div>

          <h2 class="section-title">
            Professzionális chartok.<br>
            <span class="text-accent">Egyszerű döntésekhez tervezve.</span>
          </h2>

          <p class="section-subtitle">
            Kövesse az élő árakat, és lépjen fel egy letisztult felületről, amely csökkenti a kognitív terhelést és az érzelmi kereskedést.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI-gazdagított chartok valós időben
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Egyérintéses piaci végrehajtási rendszer
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Platformfunkciók megtekintése</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Azonnali végrehajtás elérhető</h4>
                <p>
                  A megbízás azonnali továbbításához és az aktív árszint rögzítéséhez aktiválja biztonságos <?= e(SITE_NAME) ?> terminálját.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Biztonságos fiók létrehozása
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD irányítópult</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                ÉLŐ
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Ma
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Eladás</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Vétel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platform képességei</div>
        <h2 class="section-title">Minden, amire szüksége van a magabiztos kereskedéshez a <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Biztonság, sebesség és neurális piaci intelligencia egy áttekinthető megjelenésben</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Banki szintű biztonság</h3>
          <p>SSL titkosítás, biztonságos adatfeldolgozás és teljesen védett fiókarchitektúra.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI piaci elemzés</h3>
          <p>Valós idejű gépi tanulási számítások a jelentős piaci elmozdulások felismerésére.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Alacsony késleltetésű feedek</h3>
          <p>Agilis infrastruktúra a gyors megbízási feldolgozáshoz nagy aktivitású időszakokban.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Valós idejű eszközök</div>
          <h2 class="section-title">Egységes <?= e(SITE_NAME) ?> irányítópult a globális mutatókhoz</h2>
          <p class="section-subtitle">
            Kövesse az eszközök mozgását valós időben, figyelje a momentumot, és használja az automatizált AI elemzést a minták gyors feltérképezéséhez.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operatív hatékonyság:</strong>
              A hagyományos kereskedés több száz indikátor manuális figyelését jelenti.
              <?= e(SITE_NAME) ?> algoritmusai minden milliszekundumban több ezer árváltozást dolgoznak fel,
              és világos matematikai modelleket állítanak elő, hogy időben észrevegye a mozgásokat.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Hozzáférés a piacokhoz</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Eszköz</span>
              <span style="text-align:right; padding-right:16px;">Ár</span>
              <span style="text-align:right;">24 órás változás</span>
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
        <div class="section-label">Belépési folyamat</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> stresszmentessé teszi a kezdést</h2>
        <p class="section-subtitle">Nincs kriptó tapasztalata? Automatizált útmutatónk végigvezeti minden lépésen.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Biztonságos regisztráció</h3>
            <p>Adja meg alapvető elérhetőségeit erősen titkosított űrlaprendszerünkön keresztül.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI-vezérelt beállítás</h3>
            <p>A platform az Ön preferenciáihoz igazított felületi lehetőségeket mutat be.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Biztonságos feltöltés</h3>
            <p>Aktiválja kereskedési tartományát szabványos, megbízható fizetési csatornákon keresztül.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Jelek aktiválása</h3>
            <p>Kezdjen el kapcsolódni a globális piacokhoz élő neurális adatfeedekkel.</p>
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
          <div class="section-label">Mobil hozzáférés</div>
          <h2 class="section-title">Portfóliója a zsebében</h2>
          <p class="section-subtitle">
            A teljes <?= e(SITE_NAME) ?> motor gyors, natív érzetű mobilélménybe sűrítve.
            Kövesse az eszközöket, hajtson végre ügyleteket, és figyelje az AI jeleket bárhonnan.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push értesítések kritikus ármozgásoknál
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrikus bejelentkezés titkosított helyi tárolással
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Teljes chartcsomag érintésre optimalizálva
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">App élmény kipróbálása</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Kiegyensúlyozott keretrendszer</div>
        <h2 class="section-title">Átlátható működési paraméterek</h2>
        <p class="section-subtitle">
          Az abszolút őszinteségben hiszünk. Íme, ami megkülönbözteti rendszerünket — és hol szoktak lenni az iparági korlátok.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Fő előnyök</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalista irányítópult intézményi végrehajtási sebességre hangolva.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neurális analitika 0–24 az eszközökön.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Nulla rejtett tranzakciós margó vagy meglepetés kezelési díj.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Közvetlen SSL kriptográfiai fiókarchitektúra.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vezetett integráció percek alatt, nem napok alatt.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Más platformok</div>
          <h3>Gyakori iparági korlátok</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Zsúfolt, reklámokkal terhelt irányítópultok, amelyek lassítják a döntéseket.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statikus napvégi jelentések folyamatos élő elemzés helyett.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Rejtett spreadek, kifizetési díjak és átláthatatlan árképzés.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Megosztott, elavult infrastruktúra egyenetlen adatvédelemmel.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Lassú, papíralapú ellenőrzés, amely napokig tarthat.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Az összehasonlítás a kiskereskedelmi kereskedés tipikus mintáit tükrözi és illusztratív; a versenytársak ajánlatai eltérnek.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">A platform alapfunkciói egy pillantásra</h2>
        <p class="section-subtitle">Tekintse át a fiókhozzáférési keretrendszerbe épített funkcionális paramétereket.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Képesség</th>
              <th>Funkcionális részlet</th>
              <th class="cap-table-center">Tartalmazza</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI kereskedési keretrendszer</strong></td>
              <td>Algoritmikus feldolgozás dinamikus makrostrukturális számításokkal.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
            <tr>
              <td><strong>Aggregált feedek</strong></td>
              <td>Valós idejű, konszolidált chartok modern globális indexekhez és tokenekhez.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
            <tr>
              <td><strong>Platformok közötti stabilitás</strong></td>
              <td>Teljesen reszponzív megjelenítés mobilon, asztali gépen és táblagépen.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
            <tr>
              <td><strong>Többeszközös lefedettség</strong></td>
              <td>Egységes hozzáférés kriptóhoz, forexhez és részvényindexekhez egy fiókrétegből.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automatizált kockázati riasztások</strong></td>
              <td>Konfigurálható értesítések szokatlan volatilitásról, mielőtt az pozíciókat érintené.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
            <tr>
              <td><strong>Titkosított adattároló</strong></td>
              <td>Személyes és fiókadatok rétegezett kriptográfiai hozzáférés-vezérlés mögött izolálva.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>0–24 emberi támogatás</strong></td>
              <td>Élő technikai operátorok, akik azonnal válaszolnak a beállítási kérdésekre.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Tartalmazza">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Befizetések</div>
      <h2 class="section-title">Töltse fel fiókját már ismert módszerekkel</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kártyák, e-pénztárcák és banki átutalások — mindegyik 256 bites SSL titkosítással védve.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Elfogadott befizetési és finanszírozási módok">
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
          <span>Banki átutalás</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL védett</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Megbízható infrastruktúra</div>
        <h2 class="section-title">Iparági szintű partnerekkel építve</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Felhasználói visszajelzések</div>
        <h2 class="section-title">Mit mondanak a kereskedők a <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Őszinte visszajelzések globális, többpiacú közösségünkből.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 a 5 csillagból">★★★★★</div>
            <p class="review-text">
              Kezdőként a kriptó ijesztő volt. <?= e(SITE_NAME) ?> olyan intuitívvá tette az irányítópultot, hogy perceken belül magabiztosnak éreztem magam. Az AI elemzés kristálytiszta.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Ellenőrzött kiskereskedelmi operátor · Egyesült Királyság</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 a 5 csillagból">★★★★★</div>
            <p class="review-text">
              A letisztult felület órákat spórol nekem. Az AI, amely a piaci zajt a fő trendekre szűri, megváltoztatta a napi pozíciók kezelését.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Kriptó eszköz analista · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 a 5 csillagból">★★★★★</div>
            <p class="review-text">
              Alacsony késleltetésű végrehajtás és okos riasztások lehetővé teszik, hogy útközben módosítsam a célokat anélkül, hogy több programot indítanék.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Magán portfoliókezelő · Németország</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 a 5 csillagból">★★★★★</div>
            <p class="review-text">
              A támogatás két percen belül válaszolt, miközben az ellenőrzést állítottam be. Kivételes, intézményi szintű szolgáltatási keretrendszer.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmikus kereskedő · Franciaország</p>
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
          <?= e(SITE_NAME) ?>: kereskedők megerősítése intézményi AI architektúrával
        </h2>

        <p class="seo-intro">
          A modern eszközinterakció abszolút tisztaságot követel. Ha az adatkeretrendszerek reklámbannerrel vannak tele
          vagy nehéz felületi rétegekkel, a felhasználói teljesítmény csökken. <?= e(SITE_NAME) ?> a rendszerszintű komplexitást egy elegáns, reszponzív magkörnyezet telepítésével oldja meg,
          amely hosszú távú stratégiai végrehajtásra optimalizált. Minden platformmodul,
          a belépéstől az élő végrehajtásig, ugyanazon elven épül: eltávolítjuk a zajt, hogy az alapul szolgáló adatok
          magukért beszéljenek — anélkül, hogy feláldoznánk a mélységet, amit a tapasztalt résztvevők elvárnak.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Fejlett <span>kriptó kereskedési eszközök</span></h3>
            <p>
              A blokklánc likviditás gyorsan fejlődik, ezért az alacsony késleltetésű infrastruktúra kritikus.
              <?= e(SITE_NAME) ?> egyedi csomópontokat kapcsol a fő digitális eszköz helyszínekhez, élő ár-visszacsatolási hurkokat biztosítva.
              A tiszta vizuális mutatók a kaotikus több láncú struktúrákat rendezett, olvasható adatcsatornákká alakítják.
            </p>
            <p>
              A nyers árfeedeken túl a platform kontextusba helyezi a volumenváltozásokat és a likviditási mélységet, így a hirtelen csúcsok
              könnyebben értelmezhetők — nem csak reaktív jelek. Ez a következetesség a leginkább volatilis sessionökben számít, amikor
              a széttagolt eszközök pont akkor lassítják a döntéseket, amikor a legnagyobb szükség van a tisztaságra.
            </p>
          </div>

          <div class="seo-block">
            <h3>Mély <span>neurális piaci elemzés</span></h3>
            <p>
              Az automatizált algoritmusok elemzik a beérkező piaci adatokat, hogy kiszámítsák a strukturális elmozdulásokat a forexen és a nemzetközi árucikkeken.
              <?= e(SITE_NAME) ?> az összetett számításokat világos adattrendekké sűríti, amelyek támogatják az önálló megítélést ahelyett, hogy helyettesítenék.
            </p>
            <p>
              Mivel a modellek folyamatosan futnak, nem pedig fix ütemezés szerint, a momentum változások akkor jelennek meg, amikor történnek,
              nem késleltetett összefoglalóban. Az eredmény egy kutatási réteg, amely támogatja az önálló megítélést,
              miközben a végső döntés a felhasználó kezében marad.
            </p>
          </div>

          <div class="seo-block">
            <h3>Súrlódásmentes <span>fiókbeállítás</span></h3>
            <p>
              A megfelelőségnek nem kell bonyolultnak lennie. Strukturált regisztrációs folyamatunk védi a privát beállításokat
              biztonságos ellenőrzési folyamatokon keresztül, amelyek a kezdéstől a terminálhozzáférésig három perc alatt tartanak.
            </p>
            <p>
              Az út minden mezője elmagyarázza, miért kérjük, így a kezdőknek soha nem kell kitalálniuk egy
              ellenőrzési lépés célját. Beküldés után a titkosított személyazonosság-ellenőrzések a háttérben futnak, miközben az irányítópult
              többi része teljesen böngészhető marad.
            </p>
          </div>

          <div class="seo-block">
            <h3>Intézményi minőségű <span>kockázatkezelés</span></h3>
            <p>
              A pozícióméretezés, kitettségi limitek és automatikus volatilitási mutatók történelmileg professzionális asztali eszközöket
              egyszerű kapcsolókká sűrítenek — így az új résztvevők örökölhetik a tapasztalt kereskedők napi fegyelmét.
            </p>
            <p>
              A riasztások eszközönként konfigurálhatók, így a figyelem csak azokra a piacokra irányul, amelyek valóban megérdemlik.
              Ez a fókuszált megközelítés segít megelőzni a riasztás-fáradtságot, amely gyakran arra készteti az embereket, hogy figyelmen kívül hagyják az értesítéseket
              kevésbé szelektív platformokon.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Támogatási központ</div>
        <h2 class="section-title">Gyakran ismételt kérdések</h2>
        <p class="section-subtitle">Azonnali eljárási válaszok a regisztrációról és a platformhozzáférésről.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Hogyan kezdjek el a <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Töltse ki a fenti regisztrációs űrlapot, kövesse biztonságos lépésről lépésre belépési folyamatunkat,
              és aktiválja fiókbeállításait strukturált fizetésfeldolgozó rendszerünkön keresztül.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Szükségem van haladó kriptó tapasztalatra?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nem. <?= e(SITE_NAME) ?> kezdő irányítópult módot, automatizált analitikai magyarázatokat
              és egyszerűsített munkaterületeket kínál, hogy az új kereskedők biztonságosan navigálhassanak.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Mi a minimális követelmény a kereskedéshez?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              A szabványos alapaktiválás <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Ez operatív kereskedési tőkeként szolgál, és manuális ellenőrzése alatt marad.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Vannak rejtett működési díjak?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nem. <?= e(SITE_NAME) ?> abszolút átláthatósággal működik.
              Nem alkalmazunk váratlan platformhozzáférési margókat vagy rejtett kifizetési számításokat.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Hogyan működik az AI intelligencia komponens?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              A neurális rendszerek mély statisztikai volatilitási markereket értékelnek több piaci rétegen,
              és a nyers telemetriát egyszerűsített trendvonalakká alakítják a könnyebb értékeléshez.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>A személyes adataim teljesen védettek?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Igen. Minden fiókfolyamat biztonságos SSL védelemmel és robusztus kriptográfiai protokollokkal van maszkolva,
              hogy a privát adattartományok teljesen izoláltak legyenek.
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
          <h2>Készen áll a <?= e(SITE_NAME) ?> tisztaságának megtapasztalására?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Csatlakozzon egy modern rendszerhez, amely a gyors működésre, adatvédelemre és átlátható hozzáférésre van optimalizálva.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Fiók létrehozása</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Ingyenes fiók létrehozása';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

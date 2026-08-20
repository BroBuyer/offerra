<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Premium AI tirdzniecības dzinējs globālajiem tirgiem');
$page_description = SITE_NAME . ' — gudrāks un skaidrāks veids, kā piekļūt globālajiem tirgiem ar strukturētiem AI rīkiem kriptovalūtām, forex un akcijām.';
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
          <h1><?= e(SITE_NAME) ?>: gudrāks un skaidrāks veids, kā piekļūt <span class="text-accent">globālajiem tirgiem</span></h1>

          <p class="hero-desc">
            Jauns tirdzniecībā? <?= e(SITE_NAME) ?> piedāvā strukturētus AI atbalstītus rīkus, kas uztur jūsu ceļu caurspīdīgu.
            Izpētiet kriptovalūtas, forex un akcijas bez tehniskā haosa.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Sākt tirdzniecību — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Iepazīt funkcijas</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Aizsargāts ar SSL protokolu
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vadīts ceļš iesācējiem
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Izveidojiet kontu</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Aizņem mazāk nekā 3 minūtes. Bez iestatīšanas maksām.';
            $form_submit = 'Izveidot bezmaksas kontu';
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
            <div class="stat-label">Tirgojami aktīvi</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Ātri</div>
            <div class="stat-label">Konta iestatīšana</div>
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
            <div class="stat-label">Atbalsts</div>
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
            <div class="stat-value">Droši</div>
            <div class="stat-label">Datu apstrāde</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Viedā darba vide</div>

          <h2 class="section-title">
            Profesionāli grafiki.<br>
            <span class="text-accent">Veidoti vienkāršiem lēmumiem.</span>
          </h2>

          <p class="section-subtitle">
            Sekojiet cenām reāllaikā un rīkojieties no tīras saskarnes, kas samazina kognitīvo slodzi un emocionālu tirdzniecību.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI bagātināti grafiki reāllaikā
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Tirgus izpildes sistēma ar vienu pieskārienu
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Skatīt platformas funkcijas</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Pieejama tūlītēja izpilde</h4>
                <p>
                  Lai nekavējoties novirzītu šo rīkojumu un fiksētu aktīvo cenas līmeni, aktivizējiet drošo <?= e(SITE_NAME) ?> termināli.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Izveidot drošu kontu
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD panelis</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                LIVE
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Šodien
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Pārdot</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Pirkt</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platformas iespējas</div>
        <h2 class="section-title">Viss, kas nepieciešams, lai tirgotos pārliecinoši ar <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Drošība, ātrums un neironu tirgus inteliģence apvienota skaidrā prezentācijā</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Bankas līmeņa drošība</h3>
          <p>SSL šifrēšana, droša datu apstrāde un pilnībā aizsargāta konta arhitektūra.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI tirgus analīze</h3>
          <p>Reāllaika mašīnmācīšanās aprēķini, kas vērsti uz izteiktu tirgus izmaiņu uztveršanu.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Zemas latentuma plūsmas</h3>
          <p>Veikla infrastruktūra, kas vērsta uz ātru rīkojumu apstrādi augstas aktivitātes periodos.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Reāllaika aktīvi</div>
          <h2 class="section-title">Vienots <?= e(SITE_NAME) ?> panelis globālajiem rādītājiem</h2>
          <p class="section-subtitle">
            Sekojiet aktīvu kustībām reāllaikā, uzraugiet impulsu un izmantojiet automatizētu AI analīzi, lai ātri kartētu modeļus.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operacionālā efektivitāte:</strong>
              Tradicionālā tirdzniecība nozīmē manuāli sekot simtiem rādītāju.
              <?= e(SITE_NAME) ?> algoritmi apstrādā tūkstošiem cenu izmaiņu katru milisekundi,
              radot skaidrus matemātiskus modeļus, lai jūs varētu agri uztvert kustības.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Piekļūt tirgiem</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Aktīvs</span>
              <span style="text-align:right; padding-right:16px;">Cena</span>
              <span style="text-align:right;">24h izmaiņa</span>
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
        <div class="section-label">Ievadīšanas process</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> padara sākšanu bez stresa</h2>
        <p class="section-subtitle">Nav iepriekšējas kriptovalūtu pieredzes? Mūsu automatizētais ceļvedis jūs izved cauri katram solim.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Droša reģistrācija</h3>
            <p>Ievadiet pamata kontaktinformāciju caur mūsu augsti šifrēto formu sistēmu.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI vadīta iestatīšana</h3>
            <p>Platforma piedāvā saskarnes opcijas, kas pielāgotas jūsu preferencēm.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Droša finansēšana</h3>
            <p>Aktivizējiet savu tirdzniecības diapazonu ar standarta, uzticamiem maksājumu kanāliem.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Ievietot signālus</h3>
            <p>Sāciet mijiedarbību ar globālajiem tirgiem, izmantojot reāllaika neironu datu plūsmas.</p>
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
          <div class="section-label">Mobilā piekļuve</div>
          <h2 class="section-title">Jūsu portfelis jūsu kabatā</h2>
          <p class="section-subtitle">
            Pilnais <?= e(SITE_NAME) ?> dzinējs saspiests ātrā, vietējai līdzīgā mobilajā pieredzē.
            Sekojiet aktīviem, izpildiet darījumus un sekojiet AI signāliem no jebkuras vietas.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push brīdinājumi par kritiskām cenu kustībām
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometriskā pieteikšanās ar šifrētu lokālo krātuvi
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Pilna grafiku komplekts, optimizēts pieskārienam
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Iegūt lietotnes pieredzi</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Līdzsvarots ietvars</div>
        <h2 class="section-title">Caurspīdīgi darbības parametri</h2>
        <p class="section-subtitle">
          Mēs ticam absolūtai godīgumam. Lūk, kas atšķir mūsu sistēmu — un kur parasti atrodas nozares ierobežojumi.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Galvenās priekšrocības</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimālistisks panelis, pielāgots institucionālam izpildes ātrumam.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neironu analītika, kas darbojas 24/7 visos aktīvos.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Bez slēptām darījumu starpībām vai negaidītām pārvaldības maksām.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Tieša SSL kriptogrāfiska konta arhitektūra.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vadīta integrācija, kas aizņem minūtes, nevis dienas.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Citas platformas</div>
          <h3>Izplatīti nozares ierobežojumi</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Pārpildīti, reklāmām bagāti paneļi, kas palēnina lēmumus.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statiski dienas beigu pārskati nevis nepārtraukta reāllaika analīze.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Slēptās starpības, izņemšanas maksas un neskaidra cenu noteikšana.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Koplietota novecojusi infrastruktūra ar nevienmērīgu datu aizsardzību.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Lēna, dokumentiem smaga verifikācija, kas var aizņemt dienas.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Salīdzinājums atspoguļo tipiskus modeļus mazumtirdzniecības tirdzniecībā un ir ilustratīvs; konkurentu piedāvājumi atšķiras.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Galvenās platformas funkcijas īsumā</h2>
        <p class="section-subtitle">Pārskatiet funkcionālos parametrus, kas iebūvēti jūsu konta piekļuves ietvarā.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Iespēja</th>
              <th>Funkcionāla detaļa</th>
              <th class="cap-table-center">Iekļauts</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI tirdzniecības ietvars</strong></td>
              <td>Algoritmiska apstrāde, kas nodrošina dinamiskus makrostrukturālus aprēķinus.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
            <tr>
              <td><strong>Apkopotas plūsmas</strong></td>
              <td>Reāllaika konsolidēti grafiki mūsdienu globālajiem indeksiem un tokeniem.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
            <tr>
              <td><strong>Starpplatformu stabilitāte</strong></td>
              <td>Pilnībā responsīva atveidošana mobilajās ierīcēs, datoros un planšetēs.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
            <tr>
              <td><strong>Vairāku aktīvu pārklājums</strong></td>
              <td>Vienota piekļuve kriptovalūtām, forex un akciju indeksiem no viena konta slāņa.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automatizēti riska brīdinājumi</strong></td>
              <td>Konfigurējami paziņojumi, kas atzīmē neparastu svārstīgumu, pirms tas ietekmē pozīcijas.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
            <tr>
              <td><strong>Šifrēta datu glabātuve</strong></td>
              <td>Personiskie un konta dati izolēti aiz slāņveida kriptogrāfiskām piekļuves kontrolēm.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 cilvēku atbalsts</strong></td>
              <td>Reāllaika tehniskie operatori, kas gatavi nekavējoties atbildēt uz iestatīšanas jautājumiem.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Iekļauts">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Iemaksas</div>
      <h2 class="section-title">Papildiniet kontu ar metodēm, kuras jau pazīstat</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kartes, e-makus un bankas pārskaitījumi — viss aizsargāts ar 256 bitu SSL šifrēšanu.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Pieņemtās iemaksu un finansēšanas metodes">
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
          <span>Bankas pārskaitījums</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL aizsargāts</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Uzticama infrastruktūra</div>
        <h2 class="section-title">Veidots ar nozares līmeņa partneriem</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Lietotāju atsauksmes</div>
        <h2 class="section-title">Ko tirgotāji saka par <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Godīgas atsauksmes no mūsu globālās vairāku tirgu kopienas.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 no 5 zvaigznēm">★★★★★</div>
            <p class="review-text">
              Kā iesācējam kriptovalūtas mani biedēja. <?= e(SITE_NAME) ?> padarīja paneli tik intuitīvu, ka jutījos pārliecināts dažu minūšu laikā. AI analīze ir kristāldzidra.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Verificēts mazumtirdzniecības operators · Apvienotā Karaliste</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 no 5 zvaigznēm">★★★★★</div>
            <p class="review-text">
              Tīrā saskarne man ietaupa stundas. AI filtrēšana, kas samazina tirgus troksni līdz galvenajām tendencēm, mainīja, kā es pārvaldu ikdienas pozīcijas.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Kriptovalūtu aktīvu analītiķis · Kanāda</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 no 5 zvaigznēm">★★★★★</div>
            <p class="review-text">
              Zemas latentuma izpilde plus viedie brīdinājumi ļauj pielāgot mērķus uz vietas, nepalaižot vairākas programmas.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Privāts portfeļa pārvaldnieks · Vācija</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 no 5 zvaigznēm">★★★★★</div>
            <p class="review-text">
              Atbalsts atbildēja divu minūšu laikā, kamēr konfigurēju verifikāciju. Izcils institucionāla līmeņa servisa ietvars.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmiskais tirgotājs · Francija</p>
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
          <?= e(SITE_NAME) ?>: sniedzot tirgotājiem institucionālu AI arhitektūru
        </h2>

        <p class="seo-intro">
          Mūsdienu aktīvu mijiedarbība prasa absolūtu skaidrību. Kad datu ietvari ir pārpildīti ar reklāmas baneriem
          vai smagiem saskarnes slāņiem, lietotāja veiktspēja samazinās. <?= e(SITE_NAME) ?> atrisina sistēmisko sarežģītību, ieviešot
          elegantu, responsīvu pamatvidi, kas optimizēta ilgtermiņa stratēģiskai izpildei. Katrs platformas modulis,
          no ievadīšanas līdz reāllaika izpildei, ir veidots ap to pašu principu: noņemt troksni, lai pamatā esošie dati
          varētu runāt paši par sevi — nezaudējot dziļumu, ko pieredzējuši dalībnieki sagaida.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Uzlaboti <span>kriptovalūtu tirdzniecības aktīvi</span></h3>
            <p>
              Blokķēdes likviditāte attīstās ātri, padarot zemas latentuma infrastruktūru kritiski svarīgu.
              <?= e(SITE_NAME) ?> savieno pielāgotus mezglus ar galvenajām digitālo aktīvu vietām, nodrošinot reāllaika cenu atgriezeniskās saites ciklus.
              Tīri vizuālie rādītāji pārvērš haotiskas vairāku ķēžu struktūras organizētos, lasāmos datu kanālos.
            </p>
            <p>
              Papildus neapstrādātām cenu plūsmām platforma kontekstualizē apjoma izmaiņas un likviditātes dziļumu, lai pēkšņi lēcieni būtu
              vieglāk interpretējami — ne tikai reaktīvi signāli. Šī konsekvence ir vissvarīgākā svārstīgos periodos, kad
              sadrumstaloti rīki palēnina lēmumus tieši tad, kad skaidrība ir visvairāk nepieciešama.
            </p>
          </div>

          <div class="seo-block">
            <h3>Dziļa <span>neironu tirgus analīze</span></h3>
            <p>
              Automatizēti algoritmi analizē ienākošos tirgus datus, lai aprēķinātu strukturālas izmaiņas forex un starptautiskajās precēs.
              <?= e(SITE_NAME) ?> pārveido sarežģītus aprēķinus skaidrās datu tendencēs, kas atbalsta neatkarīgu spriedumu, nevis to aizstāj.
            </p>
            <p>
              Tā kā modeļi darbojas nepārtraukti, nevis pēc fiksēta grafika, impulsa izmaiņas parādās, kad tās notiek,
              nevis aizkavētā kopsavilkumā. Rezultāts ir izpētes slānis, kas atbalsta neatkarīgu spriedumu,
              vienlaikus atstājot galīgo lēmumu lietotāja rokās.
            </p>
          </div>

          <div class="seo-block">
            <h3>Bezrūpīga <span>konta iestatīšana</span></h3>
            <p>
              Atbilstībai nav jābūt sarežģītai. Mūsu strukturētais reģistrācijas cauruļvads aizsargā privātos iestatījumus
              caur drošiem verifikācijas procesiem, kas paredzēti, lai no sākuma līdz termināļa piekļuvei aizņemtu mazāk nekā trīs minūtes.
            </p>
            <p>
              Katrs lauks ceļojumā izskaidro, kāpēc tas tiek prasīts, tāpēc iesācējiem nekad nav jāmin verifikācijas soļa
              mērķis. Pēc iesniegšanas šifrētas identitātes pārbaudes darbojas fonā, kamēr pārējā
              paneļa saturs joprojām ir pilnībā pārlūkojams.
            </p>
          </div>

          <div class="seo-block">
            <h3>Institucionālas kvalitātes <span>riska kontroles</span></h3>
            <p>
              Pozīcijas lielums, ekspozīcijas limiti un automātiskie svārstīguma rādītāji kondensē vēsturiski profesionālus darba galda rīkus
              vienkāršos pārslēdzējos — tāpēc jaunāki dalībnieki manto ikdienas disciplīnu no pieredzējušiem tirgotājiem.
            </p>
            <p>
              Brīdinājumi ir konfigurējami pa aktīviem, tāpēc uzmanība tiek pievērsta tikai tirgiem, kas to patiešām pelnījuši.
              Šī koncentrētā pieeja palīdz novērst brīdinājumu nogurumu, kas bieži liek cilvēkiem ignorēt paziņojumus
              mazāk selektīvās platformās.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Atbalsta centrs</div>
        <h2 class="section-title">Bieži uzdotie jautājumi</h2>
        <p class="section-subtitle">Tūlītējas procesuālās atbildes par reģistrāciju un platformas piekļuvi.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Kā sākt darbu ar <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Aizpildiet reģistrācijas formu iepriekš, sekojiet mūsu drošajai soli pa solim ievadīšanai,
              un aktivizējiet konta iestatījumus caur mūsu strukturēto maksājumu apstrādes sistēmu.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Vai man nepieciešama padziļināta kriptovalūtu pieredze?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nē. <?= e(SITE_NAME) ?> piedāvā iesācēju paneļa režīmu, automatizētus analītiskos skaidrojumus,
              un vienkāršotas darba vietas, lai palīdzētu jauniem tirgotājiem droši orientēties.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Kāda ir minimālā prasība tirdzniecībai?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Standarta bāzes aktivizācija ir <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Tas kalpo kā operacionālais tirdzniecības kapitāls un paliek jūsu manuālā kontrolē.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Vai ir slēptas operacionālās maksas?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nē. <?= e(SITE_NAME) ?> darbojas ar absolūtu cenu caurspīdīgumu.
              Mēs nepiemērojam negaidītas platformas piekļuves starpības vai slēptus izņemšanas aprēķinus.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Kā darbojas AI inteliģences komponente?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neironu sistēmas novērtē dziļus statistiskos svārstīguma marķierus vairākos tirgus slāņos,
              pārveidojot neapstrādātu telemetriju vienkāršotās tendences līnijās vieglākai novērtēšanai.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Vai mani personiskie dati ir pilnībā aizsargāti?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Jā. Katrs konta cauruļvads ir maskēts, izmantojot drošu SSL aizsardzību plus robustus kriptogrāfiskos protokolus,
              lai pilnībā izolētu privāto datu diapazonus.
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
          <h2>Gatavi pieredzēt <?= e(SITE_NAME) ?> skaidrību?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Pievienojieties mūsdienīgai sistēmai, kas optimizēta ātrām operācijām, datu aizsardzībai un caurspīdīgai piekļuvei.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Izveidojiet kontu</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Izveidot bezmaksas kontu';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

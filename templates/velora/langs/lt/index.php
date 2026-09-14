<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Aukščiausios kokybės AI prekybos variklis pasaulinėms rinkoms');
$page_description = SITE_NAME . '— išmanesnis ir švaresnis būdas pasiekti pasaulines rinkas naudojant struktūrizuotus AI įrankius, skirtus kriptovaliutams, Forex ir akcijoms.';
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
          <h1><?= e(SITE_NAME) ?>: protingesnis ir švaresnis prieigos būdas<span class="text-accent">pasaulinėse rinkose</span></h1>

          <p class="hero-desc">
            Naujokas prekiaujant?<?= e(SITE_NAME) ?>siūlo struktūrizuotus dirbtinio intelekto įrankius, sukurtus tam, kad jūsų kelionė būtų skaidri.
            Išbandykite kriptovaliutą, Forex ir akcijas be techninio chaoso.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Pradėti prekybą -<?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Atraskite funkcijas</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Apsaugotas SSL protokolu
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Nurodytas kelias pradedantiesiems
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Susikurkite paskyrą</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Trunka mažiau nei 3 minutes. Nuliniai nustatymo mokesčiai.';
            $form_submit = 'Sukurti nemokamą paskyrą';
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
            <div class="stat-label">Prekiaujamas turtas</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Greitai</div>
            <div class="stat-label">Paskyros nustatymas</div>
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
            <div class="stat-label">Palaikymas</div>
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
            <div class="stat-value">Saugus</div>
            <div class="stat-label">Duomenų apdorojimas</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Išmani darbo vieta</div>

          <h2 class="section-title">
            Profesionalios diagramos.<br>
            <span class="text-accent">Sukurta priimti paprastus sprendimus.</span>
          </h2>

          <p class="section-subtitle">
            Stebėkite kainas tiesiogiai ir veikite naudodami švarią sąsają, skirtą pažinimo apkrovai ir emocinei prekybai sumažinti.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI praturtintos diagramos realiuoju laiku
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vieno mygtuko rinkos vykdymo sistema
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Peržiūrėkite platformos funkcijas</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Galimas momentinis vykdymas</h4>
                <p>
                  Norėdami nedelsiant nukreipti šį užsakymą ir užfiksuoti aktyvų kainų lygį, suaktyvinkite saugų<?= e(SITE_NAME) ?>terminalas.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Sukurkite saugią paskyrą
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD prietaisų skydelis</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                GYVAI
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Šiandien
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Parduodu</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Pirkti</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platformos galimybės</div>
        <h2 class="section-title">Viskas, ko reikia norint prekiauti su pasitikėjimu<?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Saugumas, greitis ir neuroninės rinkos žvalgyba sujungta aiškiame pristatyme</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Banko lygio saugumas</h3>
          <p>SSL šifravimas, saugus duomenų apdorojimas ir visiškai apsaugota paskyros architektūra.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI rinkos analizė</h3>
          <p>Realaus laiko mašininio mokymosi skaičiavimai, skirti fiksuoti ryškius rinkos pokyčius.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Mažos delsos sklaidos kanalai</h3>
          <p>Judri infrastruktūra, orientuota į greitą užsakymų apdorojimą didelio aktyvumo laikotarpiais.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Realaus laiko turtas</div>
          <h2 class="section-title">Suvienodinta<?= e(SITE_NAME) ?>pasaulinės metrikos prietaisų skydelis</h2>
          <p class="section-subtitle">
            Stebėkite turto judėjimą realiuoju laiku, stebėkite pagreitį ir naudokite automatinę AI analizę, kad greitai atvaizduotų modelius.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Veikimo efektyvumas:</strong>
              Tradicinė prekyba reiškia šimtų rodiklių stebėjimą rankiniu būdu.
              <?= e(SITE_NAME) ?>algoritmai apdoroja tūkstančius kainų pokyčių kas milisekundę,
              sukurti aiškius matematinius modelius, kad galėtumėte anksti pastebėti judesius.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Patekti į rinkas</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Turtas</span>
              <span style="text-align:right; padding-right:16px;">Kaina</span>
              <span style="text-align:right;">24h pakeitimas</span>
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
        <div class="section-label">Prisijungimo procesas</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?>leidžia pradėti be streso</h2>
        <p class="section-subtitle">Neturite ankstesnės kriptovaliutų patirties? Mūsų automatinis vadovas padės jums atlikti kiekvieną žingsnį.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Saugi registracija</h3>
            <p>Įveskite pagrindinę kontaktinę informaciją naudodami mūsų labai užšifruotą formų sistemą.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI valdoma sąranka</h3>
            <p>Platformoje pateikiamos sąsajos parinktys, pritaikytos jūsų pageidavimams.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Saugus finansavimas</h3>
            <p>Suaktyvinkite savo prekybos diapazoną naudodami standartinius, patikimus mokėjimo bėgius.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Paskirstykite signalus</h3>
            <p>Pradėkite bendrauti su pasaulinėmis rinkomis naudodami tiesioginius neuroninių duomenų srautus.</p>
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
          <div class="section-label">Mobilioji prieiga</div>
          <h2 class="section-title">Jūsų portfelis, jūsų kišenėje</h2>
          <p class="section-subtitle">
            Pilnas<?= e(SITE_NAME) ?>variklis suglaudintas į greitą vietinio pojūtį mobiliesiems.
            Stebėkite turtą, vykdykite sandorius ir sekite AI signalus iš bet kurios vietos.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Perspėjimai apie kritinius kainų pokyčius
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrinis prisijungimas su šifruota vietine saugykla
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Visas diagramų rinkinys, optimizuotas prisilietimui
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Gaukite programos patirtį</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Subalansuotas karkasas</div>
        <h2 class="section-title">Skaidrūs veikimo parametrai</h2>
        <p class="section-subtitle">
          Mes tikime absoliučiu sąžiningumu. Štai kas išskiria mūsų sistemą ir kur paprastai slypi pramonės ribos.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Pagrindiniai privalumai</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistinis prietaisų skydelis, pritaikytas instituciniam vykdymo greičiui.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neuroninė analizė, veikianti 24 valandas per parą, 7 dienas per savaitę.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Nulis paslėptų sandorių maržos ar netikėtų valdymo mokesčių.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Tiesioginė SSL kriptografinė paskyros architektūra.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Vadovaujama integracija, kuri trunka kelias minutes, o ne dienas.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Kitos platformos</div>
          <h3>Bendros pramonės ribos</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Netvarkingos, daug skelbimų talpinančios informacijos suvestinės, kurios sulėtina sprendimų priėmimą.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Statinės dienos pabaigos ataskaitos vietoj nuolatinės tiesioginės analizės.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Paslėpti skirtumai, išėmimo mokesčiai ir neaiški kainodara.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Bendrinama pasenusi infrastruktūra su netolygia duomenų apsauga.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Lėtas, daug dokumentų reikalaujantis patvirtinimas, kuris gali užtrukti kelias dienas.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Palyginimas atspindi tipinius mažmeninės prekybos modelius ir yra iliustratyvus; konkurentų pasiūlymai skiriasi.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Trumpai apie pagrindines platformos funkcijas</h2>
        <p class="section-subtitle">Peržiūrėkite funkcinius parametrus, integruotus į paskyros prieigos sistemą.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Galimybė</th>
              <th>Funkcinė detalė</th>
              <th class="cap-table-center">Įtraukta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI prekybos sistema</strong></td>
              <td>Algoritminis apdorojimas, teikiantis dinaminius makrostruktūrinius skaičiavimus.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
            <tr>
              <td><strong>Suvestiniai kanalai</strong></td>
              <td>Realaus laiko konsoliduotos šiuolaikinių pasaulinių indeksų ir žetonų diagramos.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilumas tarp platformų</strong></td>
              <td>Visiškai reaguojantis atvaizdavimas mobiliuosiuose, staliniuose ir planšetiniuose kompiuteriuose.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
            <tr>
              <td><strong>Daugelio turto aprėptis</strong></td>
              <td>Vieninga prieiga prie kriptovaliutų, Forex ir akcijų indeksų iš vieno sąskaitos sluoksnio.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automatiniai įspėjimai apie pavojų</strong></td>
              <td>Konfigūruojami pranešimai, pažymintys neįprastą nepastovumą prieš jam pasiekiant pozicijas.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
            <tr>
              <td><strong>Šifruota duomenų saugykla</strong></td>
              <td>Asmeniniai ir paskyros duomenys, atskirti už daugiasluoksnių kriptografinių prieigos valdiklių.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 žmogiškoji pagalba</strong></td>
              <td>Tiesioginiai techniniai operatoriai, pasiruošę nedelsiant atsakyti į sąrankos klausimus.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Įtraukta">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Indėliai</div>
      <h2 class="section-title">Finansuokite savo sąskaitą jau žinomais būdais</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kortelės, el. piniginės ir banko pavedimai – visa tai apsaugota 256 bitų SSL šifravimu.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Priimami indėlių ir finansavimo būdai">
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
          <span>Bankinis pavedimas</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL apsaugotas</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Patikima infrastruktūra</div>
        <h2 class="section-title">Sukurta su pramonės lygio partneriais</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Vartotojų atsiliepimai</div>
        <h2 class="section-title">Ką sako prekybininkai<?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Nuoširdūs atsiliepimai iš mūsų pasaulinės kelių rinkų bendruomenės.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 iš 5 žvaigždučių">★★★★★</div>
            <p class="review-text">
              Mane, kaip pradedančiąją, kriptovaliuta įbaugino.<?= e(SITE_NAME) ?>prietaisų skydelis tapo toks intuityvus, kad per kelias minutes jaučiausi pasitikintis. AI analizė yra visiškai aiški.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Patvirtintas mažmeninės prekybos operatorius · JK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 iš 5 žvaigždučių">★★★★★</div>
            <p class="review-text">
              Švari sąsaja sutaupo valandų. AI filtruojantis rinkos triukšmas iki pagrindinių tendencijų pakeitė mano kasdienių pozicijų valdymą.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Kripto turto analitikas · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 iš 5 žvaigždučių">★★★★★</div>
            <p class="review-text">
              Mažos delsos vykdymas ir išmanieji įspėjimai leidžia reguliuoti tikslus skrydžio metu, nepaleidžiant kelių programų.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Privatus portfelio valdytojas · Vokietija</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 iš 5 žvaigždučių">★★★★★</div>
            <p class="review-text">
              Pagalba atsakė per dvi minutes, kol konfigūravau patvirtinimą. Išskirtinė institucinio lygio paslaugų sistema.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritminis treideris · Prancūzija</p>
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
          <?= e(SITE_NAME) ?>: įgalinti prekybininkus institucine AI architektūra
        </h2>

        <p class="seo-intro">
          Šiuolaikinė turto sąveika reikalauja visiško aiškumo. Kai duomenų sistemos yra užgriozdintos reklaminiais baneriais
          arba sunkus sąsajos sluoksniai, vartotojo našumas krenta.<?= e(SITE_NAME) ?>sisteminį sudėtingumą išsprendžia diegiant
          elegantiška, reaguojanti pagrindinė aplinka, optimizuota ilgalaikiam strateginiam vykdymui. Kiekvienas platformos modulis,
          nuo įdiegimo iki tiesioginio vykdymo, yra sukurta pagal tą patį principą: pašalinkite triukšmą, kad pamatytumėte duomenis
          gali kalbėti už save – neprarandant gylio, kurio tikisi patyrę dalyviai.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Išplėstinė<span>kriptovaliutų prekybos turtas</span></h3>
            <p>
              „Blockchain“ likvidumas greitai vystosi, todėl mažo delsos trukmės infrastruktūra yra labai svarbi.
              <?= e(SITE_NAME) ?>sujungia pasirinktinius mazgus su pagrindinėmis skaitmeninio turto vietomis, suteikdamas tiesiogines kainų grįžtamojo ryšio kilpas.
              Švari vaizdinė metrika paverčia chaotiškas kelių grandžių struktūras organizuotais, skaitomais duomenų kanalais.
            </p>
            <p>
              Be neapdorotų kainų informacijos šaltinių, platforma kontekstualizuoja apimties pokyčius ir likvidumo gylį, todėl staigūs šuoliai
              lengviau interpretuoti – ne tik reaktyvius signalus. Šis nuoseklumas yra svarbiausias nepastoviose sesijose, kai
              suskaidytos priemonės sulėtina sprendimus būtent tada, kai aiškumo reikia labiausiai.
            </p>
          </div>

          <div class="seo-block">
            <h3>Giliai<span>nervinės rinkos analizė</span></h3>
            <p>
              Automatizuoti algoritmai analizuoja gaunamus rinkos duomenis, kad apskaičiuotų Forex ir tarptautinių prekių struktūrinius pokyčius.
              <?= e(SITE_NAME) ?>sudėtingus skaičiavimus paverčia aiškiomis duomenų tendencijomis, kurios patvirtina nepriklausomą sprendimą, o ne jį pakeičia.
            </p>
            <p>
              Kadangi modeliai veikia nuolat, o ne pagal fiksuotą tvarkaraštį, pagreičio pokyčiai atsiranda jiems vykstant
              vietoj atidėtos santraukos. Rezultatas yra tyrimo sluoksnis, kuris palaiko nepriklausomą sprendimą
              išlaikant galutinį sprendimą vartotojo rankose.
            </p>
          </div>

          <div class="seo-block">
            <h3>Be trinties<span>paskyros nustatymas</span></h3>
            <p>
              Atitiktis neturi būti sudėtinga. Mūsų struktūrinis registracijos vamzdynas apsaugo privačius nustatymus
              naudojant saugius tikrinimo procesus, kurie truks mažiau nei tris minutes nuo pradžios iki prieigos prie terminalo.
            </p>
            <p>
              Kiekviename kelionės lauke paaiškinama, kodėl jo prašoma, todėl pradedantiesiems niekada nereikės atspėti a tikslo
              patikrinimo žingsnis. Pateikus šifruotus tapatybės patikrinimus, jie atliekami fone, o kiti
              prietaisų skydelis lieka visiškai naršomas.
            </p>
          </div>

          <div class="seo-block">
            <h3>Institucinė-kokybė<span>rizikos kontrolės</span></h3>
            <p>
              Pozicijos dydžio nustatymas, poveikio ribos ir automatiniai nepastovumo indikatoriai sutrumpina istoriškai profesionalius stalo įrankius
              į paprastus perjungimus – taigi naujesni dalyviai kasdienę drausmę paveldi iš patyrusių prekiautojų.
            </p>
            <p>
              Įspėjimus galima konfigūruoti pagal išteklius, todėl dėmesys atkreipiamas tik į rinkas, kurios tai tikrai pateisina.
              Šis kryptingas požiūris padeda išvengti perspėjimo nuovargio, dėl kurio žmonės dažnai ignoruoja pranešimus
              mažiau selektyviose platformose.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Palaikymo centras</div>
        <h2 class="section-title">Dažnai užduodami klausimai</h2>
        <p class="section-subtitle">Greiti procedūriniai atsakymai apie registraciją ir prieigą prie platformos.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Kaip man pradėti<?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Užpildykite aukščiau esančią registracijos formą, vadovaukitės mūsų saugiu žingsnis po žingsnio prisijungimu,
              ir suaktyvinkite paskyros nustatymus naudodami mūsų struktūrizuotą mokėjimų apdorojimo sistemą.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ar man reikia pažangios kriptovaliutos patirties?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nr.<?= e(SITE_NAME) ?>siūlo pradedančiųjų prietaisų skydelio režimą, automatinius analitinius paaiškinimus,
              ir supaprastintos darbo vietos, padedančios naujiems prekiautojams saugiai naršyti.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Koks yra minimalus reikalavimas prekybai?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Standartinis bazinis aktyvinimas yra<?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Jis naudojamas kaip operatyvinis prekybos kapitalas ir lieka jūsų rankiniu būdu valdomas.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ar yra paslėptų veiklos mokesčių?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Nr.<?= e(SITE_NAME) ?>veikia su absoliučiu kainodaros skaidrumu.
              Netaikome netikėtų platformos prieigos ribų ar paslėptų išėmimo skaičiavimų.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Kaip veikia AI intelekto komponentas?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neuroninės sistemos įvertina gilius statistinius nepastovumo žymenis keliuose rinkos sluoksniuose,
              neapdorotos telemetrijos konvertavimas į supaprastintas tendencijų linijas, kad būtų lengviau įvertinti.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ar mano asmens duomenys yra visiškai apsaugoti?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Taip. Kiekvienas paskyros kanalas yra užmaskuotas naudojant saugią SSL apsaugą ir patikimus kriptografinius protokolus
              visiškai atskirti privačių duomenų diapazonus.
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
          <h2>Pasiruošę patirti<?= e(SITE_NAME) ?>aiškumas?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Prisijunkite prie modernios sistemos, optimizuotos greitoms operacijoms, duomenų apsaugai ir skaidriai prieigai.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Susikurkite paskyrą</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Sukurti nemokamą paskyrą';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Premium-tekoälykaupankäyntimoottori globaaleille markkinoille');
$page_description = SITE_NAME . ' — älykkäämpi ja selkeämpi tapa päästä globaaleille markkinoille strukturoiduilla tekoälytyökaluilla kryptolle, forexille ja osakkeille.';
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
          <h1><?= e(SITE_NAME) ?>: älykkäämpi ja selkeämpi tapa päästä <span class="text-accent">globaaleille markkinoille</span></h1>

          <p class="hero-desc">
            Uusi kaupankäynnissä? <?= e(SITE_NAME) ?> tarjoaa strukturoituja tekoälyavusteisia työkaluja, jotka pitävät matkasi läpinäkyvänä.
            Tutustu kryptoon, forexiin ja osakkeisiin ilman teknistä kaaosta.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Aloita kaupankäynti — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Tutustu ominaisuuksiin</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Suojattu SSL-protokollalla
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Ohjattu polku aloittelijoille
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Luo tilisi</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Kestää alle 3 minuuttia. Ei perustamismaksuja.';
            $form_submit = 'Luo ilmainen tili';
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
            <div class="stat-label">Kaupankäyntikelpoiset varat</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Nopea</div>
            <div class="stat-label">Tilin luonti</div>
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
            <div class="stat-label">Tuki</div>
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
            <div class="stat-value">Turvallinen</div>
            <div class="stat-label">Tiedonkäsittely</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Älykäs työtila</div>

          <h2 class="section-title">
            Ammattilaiskaaviot.<br>
            <span class="text-accent">Tehty yksinkertaisiin päätöksiin.</span>
          </h2>

          <p class="section-subtitle">
            Seuraa live-hintoja ja toimi selkeästä käyttöliittymästä, joka vähentää kognitiivista kuormaa ja emotionaalista kaupankäyntiä.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Tekoälyllä rikastetut kaaviot reaaliajassa
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Yhden napautuksen markkinatoimeenpano
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Katso alustan ominaisuudet</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Välitön toimeenpano saatavilla</h4>
                <p>
                  Ohjataksesi tämän toimeksiannon heti ja tavoittaaksesi aktiivisen hintatason aktivoi turvallinen <?= e(SITE_NAME) ?> -terminaalisi.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Luo turvallinen tili
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD -kojelauda</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                SUORA
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Tänään
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Myy</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Osta</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Alustan ominaisuudet</div>
        <h2 class="section-title">Kaikki tarvittava luottavaiseen kaupankäyntiin palvelussa <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Turvallisuus, nopeus ja neuronaalinen markkinatieto yhdistettynä selkeään esitykseen</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Pankkitason turvallisuus</h3>
          <p>SSL-salaus, turvallinen tiedonkäsittely ja täysin suojattu tilirakenne.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Tekoälymarkkina-analyysi</h3>
          <p>Reaaliaikaiset koneoppimislaskelmat, jotka keskittyvät merkittyihin markkinamuutoksiin.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Pienen viiveen syötteet</h3>
          <p>Ketterä infrastruktuuri, joka keskittyy nopeaan toimeksiantojen käsittelyyn vilkkaina jaksoina.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Reaaliaikaiset varat</div>
          <h2 class="section-title">Yhtenäinen <?= e(SITE_NAME) ?> -kojelauda globaaleille mittareille</h2>
          <p class="section-subtitle">
            Seuraa varojen liikkeitä reaaliajassa, tarkkaile momenttia ja käytä automaattista tekoälyanalyysiä kuvioiden nopeaan kartoitukseen.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Toiminnallinen tehokkuus:</strong>
              Perinteinen kaupankäynti tarkoittaa satojen indikaattoreiden manuaalista seurantaa.
              <?= e(SITE_NAME) ?> -algoritmit käsittelevät tuhansia hinnanmuutoksia joka millisekunti,
              tuottaen selkeitä matemaattisia malleja, jotta ehdit mukaan liikkeisiin ajoissa.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Siirry markkinoille</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Vara</span>
              <span style="text-align:right; padding-right:16px;">Hinta</span>
              <span style="text-align:right;">24 h muutos</span>
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
        <div class="section-label">Käyttöönottoprosessi</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> tekee aloittamisesta stressitöntä</h2>
        <p class="section-subtitle">Ei aiempaa kryptokokemusta? Automaattinen oppaamme ohjaa sinut joka vaiheessa.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Turvallinen rekisteröityminen</h3>
            <p>Syötä perustiedot voimakkaasti salatun lomakejärjestelmämme kautta.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Tekoälyohjattu käyttöönotto</h3>
            <p>Alusta esittää mieltymyksiisi räätälöityjä käyttöliittymävaihtoehtoja.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Turvallinen rahoitus</h3>
            <p>Aktivoi kaupankäyntialueesi vakioiduilla, luotettavilla maksukanavilla.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Ota signaalit käyttöön</h3>
            <p>Aloita vuorovaikutus globaalien markkinoiden kanssa live-neuraalisyötteillä.</p>
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
          <div class="section-label">Mobiilikäyttö</div>
          <h2 class="section-title">Salkkusi taskussasi</h2>
          <p class="section-subtitle">
            Koko <?= e(SITE_NAME) ?> -moottori tiivistettynä nopeaksi natiivintuntuiseksi mobiilikokemukseksi.
            Seuraa varoja, toteuta kauppoja ja seuraa tekoälysignaaleja mistä tahansa.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push-ilmoitukset kriittisistä hinnanliikkeistä
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometrinen kirjautuminen salatulla paikallisella tallennuksella
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Täysi kaaviopaketti kosketukselle optimoituna
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Kokeile sovelluskokemusta</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Tasapainoinen kehys</div>
        <h2 class="section-title">Läpinäkyvät toimintaparametrit</h2>
        <p class="section-subtitle">
          Uskomme ehdottomaan rehellisyyteen. Tässä on, mikä erottaa järjestelmämme — ja missä alan rajat yleensä kulkevat.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Keskeiset edut</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalistinen kojelauda, viritetty institutionaaliseen toimeenpanonopeuteen.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neuraalianalytiikka käynnissä 24/7 kaikissa varoissa.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Ei piilotettuja kaupankäyntimarginaaleja tai yllätyksellisiä hallinnointimaksuja.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suora SSL-salattu tilirakenne.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Ohjattu käyttöönotto minuuteissa, ei päivissä.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Muut alustat</div>
          <h3>Alan yleiset rajoitteet</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Sekavat, mainosraskaat kojelaudat, jotka hidastavat päätöksiä.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Staattiset päivänloppuraportit jatkuvan live-analyysin sijaan.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Piilotettuja spreadejä, nostomaksuja ja epäselvää hinnoittelua.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Jaettu vanhentunut infrastruktuuri epätasaisella tietosuojalla.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Hidas, paperityökeskeinen tunnistautuminen, joka voi kestää päiviä.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Vertailu heijastaa tyypillisiä malleja vähittäiskaupankäynnissä ja on havainnollistava; kilpailijoiden tarjoukset vaihtelevat.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Alustan ydintoiminnot yhdellä silmäyksellä</h2>
        <p class="section-subtitle">Tutustu toiminnallisiin parametreihin, jotka on rakennettu tilisi käyttöoikeuskehykseen.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Ominaisuus</th>
              <th>Toiminnallinen yksityiskohta</th>
              <th class="cap-table-center">Sisältyy</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Tekoälykaupankäyntikehys</strong></td>
              <td>Algoritminen käsittely, joka tuottaa dynaamisia makrostrukturaalisia laskelmia.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
            <tr>
              <td><strong>Aggregoidut syötteet</strong></td>
              <td>Reaaliaikaiset yhdistetyt kaaviot moderneille globaaleille indekseille ja tokeneille.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
            <tr>
              <td><strong>Alustojen välinen vakaus</strong></td>
              <td>Täysin responsiivinen renderöinti mobiilissa, työpöydällä ja tableteilla.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
            <tr>
              <td><strong>Monivarojen kattavuus</strong></td>
              <td>Yhtenäinen pääsy kryptoon, forexiin ja osakeindekseihin yhdestä tilitasosta.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automaattiset riskihälytykset</strong></td>
              <td>Konfiguroitavat ilmoitukset, jotka merkitsevät epätavallista volatiliteettia ennen kuin se osuu positioihin.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
            <tr>
              <td><strong>Salattu tietovarasto</strong></td>
              <td>Henkilö- ja tilitiedot eristettynä kerroksellisten kryptografisten käyttöoikeuksien taakse.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 ihmistuki</strong></td>
              <td>Live-tekniset asiantuntijat valmiina vastaamaan käyttöönottokysymyksiin heti.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Sisältyy">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Talletukset</div>
      <h2 class="section-title">Rahoita tilisi tutuilla menetelmillä</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kortit, digilompakot ja tilisiirrot — kaikki suojattu 256-bittisellä SSL-salauksella.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Hyväksytyt talletus- ja rahoitusmenetelmät">
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
          <span>Tilisiirto</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL-suojattu</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Luotettava infrastruktuuri</div>
        <h2 class="section-title">Rakennettu alan tason kumppaneiden kanssa</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Käyttäjäpalaute</div>
        <h2 class="section-title">Mitä kaupankävijät sanovat palvelusta <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Rehellistä palautetta globaalilta monimarkkinayhteisöltämme.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 tähteä viidestä">★★★★★</div>
            <p class="review-text">
              Aloittelijana krypto pelotti minua. <?= e(SITE_NAME) ?> teki kojelaudasta niin intuitiivisen, että tunsin oloni varmaksi minuuteissa. Tekoälyanalyysi on kristallinkirkasta.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Vahvistettu vähittäiskaupankävijä · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 tähteä viidestä">★★★★★</div>
            <p class="review-text">
              Selkeä käyttöliittymä säästää tuntikaupalla. Tekoälyn markkinakohinan suodatus päätrendeiksi muutti tapani hallita päivittäisiä positioita.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Kryptoanalyytikko · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 tähteä viidestä">★★★★★</div>
            <p class="review-text">
              Pienen viiveen toimeenpano ja älykkäät hälytykset antavat säätää tavoitteita lennossa ilman useita ohjelmia.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Yksityinen salkunhoitaja · Saksa</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 tähteä viidestä">★★★★★</div>
            <p class="review-text">
              Tuki vastasi kahdessa minuutissa, kun konfiguroin tunnistautumista. Poikkeuksellinen institutionaalisen tason palvelukehys.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritminen kaupankävijä · Ranska</p>
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
          <?= e(SITE_NAME) ?>: voimaannuttaa kaupankävijöitä institutionaalisella tekoälyarkkitehtuurilla
        </h2>

        <p class="seo-intro">
          Nykyaikainen varojen käsittely vaatii ehdotonta selkeyttä. Kun tietokehykset täyttyvät mainosbannereista
          tai raskaista käyttöliittymäkerroksista, käyttäjän suorituskyky heikkenee. <?= e(SITE_NAME) ?> ratkaisee rakenteellisen monimutkaisuuden ottamalla käyttöön
          elegantin, responsiivisen ydinympäristön, joka on optimoitu pitkäjänteiseen strategiseen toimeenpanoon. Jokainen alustamoduuli,
          käyttöönotosta live-toimeenpanoon, rakentuu saman periaatteen ympärille: poista kohina, jotta taustalla oleva data
          saa puhua puolestaan — tinkimättä kokeneiden osallistujien odottamasta syvyydestä.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Edistyneet <span>kryptokaupankäyntivarat</span></h3>
            <p>
              Lohkoketjun likviditeetti kehittyy nopeasti, joten pienen viiveen infrastruktuuri on kriittistä.
              <?= e(SITE_NAME) ?> yhdistää omat solmut keskeisiin digitaalisten varojen kauppapaikkoihin ja tarjoaa live-hintapalautteet.
              Selkeät visuaaliset mittarit muuttavat kaoottiset moniketjurakenteet järjestetyiksi, luettaviksi datakanaviksi.
            </p>
            <p>
              Raakahintasyötteiden lisäksi alusta kontekstualisoi volyymin muutoksia ja likviditeetin syvyyttä, jotta äkilliset piikit on
              helpompi tulkita — eivät vain reaktiivisia signaaleja. Tämä johdonmukaisuus korostuu volatiliteettisissa sessioissa, kun
              sirpaleiset työkalut hidastavat päätöksiä juuri silloin, kun selkeyttä tarvitaan eniten.
            </p>
          </div>

          <div class="seo-block">
            <h3>Syvä <span>neuraalinen markkina-analyysi</span></h3>
            <p>
              Automaattiset algoritmit analysoivat saapuvaa markkinadataa laskeakseen rakenteellisia muutoksia forexissä ja kansainvälisissä hyödykkeissä.
              <?= e(SITE_NAME) ?> tiivistää monimutkaiset laskelmat selkeiksi datatrendeiksi, jotka tukevat itsenäistä harkintaa eivätkä korvaa sitä.
            </p>
            <p>
              Koska mallit pyörivät jatkuvasti eivätkä kiinteällä aikataululla, momenttimuutokset näkyvät tapahtumahetkellä
              eivätkä viivästettynä yhteenvedtona. Tuloksena on tutkimuskerros, joka tukee itsenäistä harkintaa
              ja jättää lopullisen päätöksen käyttäjälle.
            </p>
          </div>

          <div class="seo-block">
            <h3>Kitkaton <span>tilin luonti</span></h3>
            <p>
              Vaatimustenmukaisuuden ei tarvitse olla monimutkaista. Strukturoitu rekisteröintiputkistomme suojaa yksityiset asetukset
              turvallisilla tunnistautumisprosesseilla, jotka on suunniteltu kestämään alle kolme minuuttia alusta terminaaliin.
            </p>
            <p>
              Jokainen kenttä matkan varrella selittää, miksi sitä kysytään, joten aloittelijoiden ei tarvitse arvailla
              tunnistautumisvaiheen tarkoitusta. Lähetyksen jälkeen salatut henkilöllisyystarkistukset pyörivät taustalla, kun loput
              kojelaudasta pysyy täysin selattavana.
            </p>
          </div>

          <div class="seo-block">
            <h3>Institutionaalisen tason <span>riskinhallinta</span></h3>
            <p>
              Position koko, altistumisrajat ja automaattiset volatiliteetti-indikaattorit tiivistävät historiallisesti ammattilaisten työpöytätyökalut
              yksinkertaisiksi kytkimiksi — jotta uudemmat osallistujat perivät päivittäisen kurinalaisuuden kokeneilta kaupankävijöiltä.
            </p>
            <p>
              Hälytykset ovat konfiguroitavissa varakohtaisesti, joten huomio ohjautuu vain todella oleellisille markkinoille.
              Tämä kohdennettu lähestymistapa auttaa estämään hälytysväsymystä, joka usein johtaa ilmoitusten ohittamiseen
              vähemmän valikoivilla alustoilla.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Tukikeskus</div>
        <h2 class="section-title">Usein kysytyt kysymykset</h2>
        <p class="section-subtitle">Välittömät menettelyvastaukset rekisteröitymisestä ja alustan käytöstä.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Miten aloitan palvelun <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Täytä yllä oleva rekisteröintilomake, seuraa turvallista vaihe vaiheelta -käyttöönottoa
              ja aktivoi tiliasetuksesi strukturoidun maksunkäsittelyjärjestelmämme kautta.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Tarvitsenko edistynyttä kryptokokemusta?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ei. <?= e(SITE_NAME) ?> tarjoaa aloittelijan kojelaudan, automaattisia analyyttisiä selityksiä,
              ja yksinkertaistettuja työtiloja, jotka auttavat uusia kaupankävijöitä navigoimaan turvallisesti.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Mikä on vähimmäisvaatimus kaupankäyntiin?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Vakioperusaktivointi on <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Tämä toimii operatiivisena kaupankäyntipääomana ja pysyy manuaalisessa hallinnassasi.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Onko piilotettuja toimintamaksuja?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ei. <?= e(SITE_NAME) ?> toimii ehdottoman hinnoittelun läpinäkyvyyden periaatteella.
              Emme lisää odottamattomia alustan käyttömarginaaleja emmekä piilotettuja nostolaskelmia.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Miten tekoälykomponentti toimii?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neuraaliset järjestelmät arvioivat syviä tilastollisia volatiliteettimerkkejä useissa markkinakerroksissa
              ja muuntavat raakatelemetrian yksinkertaistetuiksi trendiviivoiksi helpompaa arviointia varten.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Onko henkilötietoni täysin suojattu?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Kyllä. Jokainen tiliputkisto on peitetty turvallisella SSL-suojauksella sekä vahvoilla kryptografisilla protokolilla,
              jotka eristävät yksityiset tietoalueet täysin.
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
          <h2>Valmis kokemaan <?= e(SITE_NAME) ?> -selkeyden?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Liity moderniin järjestelmään, joka on optimoitu nopeisiin toimintoihin, tietosuojaan ja läpinäkyvään käyttöön.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Luo tilisi</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Luo ilmainen tili';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

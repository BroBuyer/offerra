<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Premium AI Trading Engine for Global Markets');
$page_description = SITE_NAME . ' — a smarter, cleaner way to access global markets with structured AI tools for crypto, forex, and equities.';
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
          <h1><?= e(SITE_NAME) ?>: a smarter, cleaner way to access <span class="text-accent">global markets</span></h1>

          <p class="hero-desc">
            New to trading? <?= e(SITE_NAME) ?> offers structured AI-assisted tools designed to keep your journey transparent.
            Explore crypto, forex, and equities without the technical chaos.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Start trading — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Discover features</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Protected by SSL protocol
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Guided path for beginners
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Create your account</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Takes less than 3 minutes. Zero setup fees.';
            $form_submit = 'Create free account';
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
            <div class="stat-label">Tradable assets</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Fast</div>
            <div class="stat-label">Account setup</div>
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
            <div class="stat-label">Support</div>
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
            <div class="stat-value">Secure</div>
            <div class="stat-label">Data processing</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Smart workspace</div>

          <h2 class="section-title">
            Professional charts.<br>
            <span class="text-accent">Built for simple decisions.</span>
          </h2>

          <p class="section-subtitle">
            Watch live prices and act from a clean interface designed to reduce cognitive load and emotional trading.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI-enriched charts in real time
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              One-tap market execution system
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">See platform features</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Instant execution available</h4>
                <p>
                  To route this order immediately and capture the active price level, activate your secure <?= e(SITE_NAME) ?> terminal.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Create secure account
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD dashboard</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                LIVE
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Today
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Sell</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Buy</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platform capabilities</div>
        <h2 class="section-title">Everything you need to trade with confidence on <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Security, speed, and neural market intelligence combined in a clear presentation</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Bank-grade security</h3>
          <p>SSL encryption, secure data processing, and a fully protected account architecture.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI market analysis</h3>
          <p>Real-time machine-learning calculations focused on capturing marked market shifts.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Low-latency feeds</h3>
          <p>Agile infrastructure focused on fast order processing during high-activity periods.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Real-time assets</div>
          <h2 class="section-title">Unified <?= e(SITE_NAME) ?> dashboard for global metrics</h2>
          <p class="section-subtitle">
            Track asset moves in real time, monitor momentum, and use automated AI analysis to map patterns quickly.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operational efficiency:</strong>
              Traditional trading means watching hundreds of indicators manually.
              <?= e(SITE_NAME) ?> algorithms process thousands of price changes every millisecond,
              producing clear mathematical models so you can catch moves early.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Access the markets</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Asset</span>
              <span style="text-align:right; padding-right:16px;">Price</span>
              <span style="text-align:right;">24h change</span>
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
        <div class="section-label">Onboarding process</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> makes getting started stress-free</h2>
        <p class="section-subtitle">No prior crypto experience? Our automated guide walks you through every step.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Secure signup</h3>
            <p>Enter basic contact details through our highly encrypted form system.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI-guided setup</h3>
            <p>The platform presents interface options tailored to your preferences.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Secure funding</h3>
            <p>Activate your trading range via standard, reliable payment rails.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Deploy signals</h3>
            <p>Start interacting with global markets using live neural data feeds.</p>
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
          <div class="section-label">Mobile access</div>
          <h2 class="section-title">Your portfolio, in your pocket</h2>
          <p class="section-subtitle">
            The full <?= e(SITE_NAME) ?> engine compressed into a fast native-feel mobile experience.
            Track assets, execute trades, and follow AI signals from anywhere.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push alerts for critical price moves
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Biometric login with encrypted local storage
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Full chart suite optimized for touch
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Get the app experience</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Balanced framework</div>
        <h2 class="section-title">Transparent operating parameters</h2>
        <p class="section-subtitle">
          We believe in absolute honesty. Here is what sets our system apart — and where industry limits usually sit.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Key advantages</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalist dashboard tuned for institutional execution speed.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Neural analytics running 24/7 across assets.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Zero hidden transaction margins or surprise management fees.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Direct SSL cryptographic account architecture.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Guided integration that takes minutes, not days.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Other platforms</div>
          <h3>Common industry limits</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Cluttered, ad-heavy dashboards that slow decisions.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Static end-of-day reports instead of continuous live analysis.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Hidden spreads, withdrawal fees, and unclear pricing.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Shared outdated infrastructure with uneven data protection.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Slow, paperwork-heavy verification that can take days.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Comparison reflects typical patterns in retail trading and is illustrative; competitor offers vary.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Core platform features at a glance</h2>
        <p class="section-subtitle">Review the functional parameters built into your account access framework.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Capability</th>
              <th>Functional detail</th>
              <th class="cap-table-center">Included</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI trading framework</strong></td>
              <td>Algorithmic processing providing dynamic macro-structural calculations.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Aggregated feeds</strong></td>
              <td>Real-time consolidated charts for modern global indices and tokens.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Cross-platform stability</strong></td>
              <td>Fully responsive rendering on mobile, desktop, and tablets.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Multi-asset coverage</strong></td>
              <td>Unified access to crypto, forex, and equity indices from one account layer.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Automated risk alerts</strong></td>
              <td>Configurable notifications flagging unusual volatility before it hits positions.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Encrypted data vault</strong></td>
              <td>Personal and account data isolated behind layered cryptographic access controls.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 human support</strong></td>
              <td>Live technical operators ready to answer setup questions immediately.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Deposits</div>
      <h2 class="section-title">Fund your account with methods you already know</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Cards, e-wallets, and bank transfers — all protected by 256-bit SSL encryption.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Accepted deposit and funding methods">
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
          <span>Bank transfer</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL protected</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Reliable infrastructure</div>
        <h2 class="section-title">Built with industry-grade partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">User feedback</div>
        <h2 class="section-title">What traders say about <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Honest feedback from our global multi-market community.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              As a beginner, crypto intimidated me. <?= e(SITE_NAME) ?> made the dashboard so intuitive I felt confident within minutes. The AI analysis is crystal clear.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Verified retail operator · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              The clean interface saves me hours. AI filtering market noise down to main trends changed how I manage daily positions.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Crypto asset analyst · Canada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              Low-latency execution plus smart alerts lets me adjust targets on the fly without launching multiple programs.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Private portfolio manager · Germany</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              Support replied in two minutes while I was configuring verification. Exceptional institutional-grade service framework.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algorithmic trader · France</p>
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
          <?= e(SITE_NAME) ?>: empowering traders with institutional AI architecture
        </h2>

        <p class="seo-intro">
          Modern asset interaction demands absolute clarity. When data frameworks are cluttered with promotional banners
          or heavy interface layers, user performance drops. <?= e(SITE_NAME) ?> solves systemic complexity by deploying
          an elegant, responsive core environment optimized for long-term strategic execution. Every platform module,
          from onboarding to live execution, is built around the same principle: remove the noise so the underlying data
          can speak for itself — without sacrificing the depth experienced participants expect.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Advanced <span>crypto trading assets</span></h3>
            <p>
              Blockchain liquidity evolves quickly, making low-latency infrastructure critical.
              <?= e(SITE_NAME) ?> connects custom nodes to major digital asset venues, providing live price feedback loops.
              Clean visual metrics turn chaotic multi-chain structures into organized, readable data channels.
            </p>
            <p>
              Beyond raw price feeds, the platform contextualizes volume shifts and liquidity depth so sudden spikes are
              easier to interpret — not just reactive signals. That consistency matters most in volatile sessions, when
              fragmented tools slow decisions exactly when clarity is needed most.
            </p>
          </div>

          <div class="seo-block">
            <h3>Deep <span>neural market analysis</span></h3>
            <p>
              Automated algorithms analyze incoming market data to calculate structural shifts across forex and international commodities.
              <?= e(SITE_NAME) ?> distills complex calculations into clear data trends that support independent judgment rather than replacing it.
            </p>
            <p>
              Because models run continuously rather than on a fixed schedule, momentum changes appear as they happen
              instead of in a delayed summary. The result is a research layer that supports independent judgment
              while keeping the final decision in the user’s hands.
            </p>
          </div>

          <div class="seo-block">
            <h3>Frictionless <span>account setup</span></h3>
            <p>
              Compliance does not have to be complicated. Our structured registration pipeline protects private settings
              through secure verification processes designed to last under three minutes from start to terminal access.
            </p>
            <p>
              Each field in the journey explains why it is asked, so beginners never have to guess the purpose of a
              verification step. Once submitted, encrypted identity checks run in the background while the rest of the
              dashboard remains fully browsable.
            </p>
          </div>

          <div class="seo-block">
            <h3>Institutional-quality <span>risk controls</span></h3>
            <p>
              Position sizing, exposure limits, and automatic volatility indicators condense historically professional desk tools
              into simple toggles — so newer participants inherit daily discipline from experienced traders.
            </p>
            <p>
              Alerts are configurable by asset, so attention is drawn only to markets that truly warrant it.
              This focused approach helps prevent alert fatigue that often leads people to ignore notifications
              on less selective platforms.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Support center</div>
        <h2 class="section-title">Frequently asked questions</h2>
        <p class="section-subtitle">Immediate procedural answers about registration and platform access.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>How do I get started with <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Fill in the registration form above, follow our secure step-by-step onboarding,
              and activate your account settings through our structured payment processing system.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Do I need advanced crypto experience?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              No. <?= e(SITE_NAME) ?> offers a beginner dashboard mode, automated analytical explanations,
              and simplified workspaces to help new traders navigate safely.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>What is the minimum requirement to trade?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              The standard base activation is <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              This serves as operational trading capital and remains under your manual control.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Are there hidden operational fees?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              No. <?= e(SITE_NAME) ?> operates with absolute pricing transparency.
              We do not apply unexpected platform access margins or hidden withdrawal calculations.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>How does the AI intelligence component work?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Neural systems evaluate deep statistical volatility markers across multiple market layers,
              converting raw telemetry into simplified trend lines for easier assessment.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Is my personal data fully protected?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Yes. Every account pipeline is masked using secure SSL protection plus robust cryptographic protocols
              to fully isolate private data ranges.
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
          <h2>Ready to experience <?= e(SITE_NAME) ?> clarity?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Join a modern system optimized for fast operations, data protection, and transparent access.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Create your account</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Create free account';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

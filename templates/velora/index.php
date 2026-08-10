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

  <section class="hero-section" id="signup" aria-label="Introduction">
    <div class="container hero-grid">
      <div>
        <h1><?= e(SITE_NAME) ?>: a smarter, cleaner way to access global markets</h1>
        <p class="lead">
          New to trading? <?= e(SITE_NAME) ?> offers structured AI-assisted tools designed to keep your journey transparent.
          Explore crypto, forex, and equities without the technical chaos.
        </p>
        <div class="hero-actions">
          <a href="#mainSignupCard" class="btn btn-primary">Start trading — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="#features" class="btn btn-ghost">Discover features</a>
        </div>
        <div class="hero-badges">
          <span class="hero-badge">Protected by SSL</span>
          <span class="hero-badge">Guided path for beginners</span>
        </div>
      </div>

      <div class="signup-card" id="mainSignupCard">
        <h3>Create your account</h3>
        <p class="lead">Takes less than 3 minutes. Zero setup fees.</p>
        <?php
        $form_id = 'hero-form';
        $form_submit = 'Create free account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-soft" aria-label="Key stats">
    <div class="container">
      <div class="stats-row" data-reveal>
        <div class="stat-card"><strong>80+</strong><span>Tradable assets</span></div>
        <div class="stat-card"><strong>Fast</strong><span>Account setup</span></div>
        <div class="stat-card"><strong>24/7</strong><span>Support</span></div>
        <div class="stat-card"><strong>Secure</strong><span>Data processing</span></div>
      </div>
    </div>
  </section>

  <section class="section" id="platform" aria-label="Platform workspace">
    <div class="container platform-split">
      <div data-reveal>
        <p class="eyebrow">Smart workspace</p>
        <h2>Professional charts.<br>Built for simple decisions.</h2>
        <p class="lead">
          Watch live prices and act from a clean interface designed to reduce cognitive load and emotional trading.
        </p>
        <ul class="feature-bullets">
          <li>AI-enriched charts in real time</li>
          <li>One-tap market execution system</li>
        </ul>
        <a href="#features" class="btn btn-ghost">See platform features</a>
      </div>

      <div class="mockup-shell" data-reveal id="mockupChart">
        <div class="mockup-overlay" id="mockupOverlay">
          <div class="mockup-overlay-card">
            <h4 id="overlayHeadline">Instant execution available</h4>
            <p>To route this order immediately and capture the active price level, activate your secure <?= e(SITE_NAME) ?> terminal.</p>
            <a href="#signup" class="btn btn-primary" onclick="document.getElementById('mockupOverlay').classList.remove('show')">Create secure account</a>
          </div>
        </div>
        <div class="mockup-head">
          <h4>BTC / USD dashboard</h4>
          <span class="live-pill">Live</span>
        </div>
        <div class="mockup-price" id="mockupPrice">$67,420.50</div>
        <div class="mockup-change" id="mockupChange">+0.15% Today</div>
        <div class="mockup-chart" id="mockupChartTrack" aria-hidden="true">
          <div class="chart-bar" style="height:40%"></div>
          <div class="chart-bar" style="height:55%"></div>
          <div class="chart-bar" style="height:48%"></div>
          <div class="chart-bar" style="height:62%"></div>
          <div class="chart-bar" style="height:58%"></div>
          <div class="chart-bar" style="height:70%"></div>
          <div class="chart-bar" style="height:65%"></div>
          <div class="chart-bar" style="height:78%"></div>
          <div class="chart-bar" style="height:72%"></div>
          <div class="chart-bar" style="height:85%"></div>
          <div class="chart-bar" style="height:80%"></div>
          <div class="chart-bar" style="height:90%"></div>
        </div>
        <div class="mockup-actions">
          <button type="button" class="btn btn-danger-soft" data-mock-action="sell">Sell</button>
          <button type="button" class="btn btn-success-soft" data-mock-action="buy">Buy</button>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-soft" id="features" aria-label="Platform capabilities">
    <div class="container">
      <div class="section-intro section-intro--center" data-reveal>
        <p class="eyebrow">Platform capabilities</p>
        <h2>Everything you need to trade with confidence</h2>
        <p class="lead" style="margin-inline:auto">Security, speed, and neural market intelligence combined in a clear presentation.</p>
      </div>
      <div class="feature-grid">
        <article class="feature-card" data-reveal id="security">
          <h3>Bank-grade security</h3>
          <p>SSL encryption, secure data processing, and a fully protected account architecture.</p>
        </article>
        <article class="feature-card" data-reveal>
          <h3>AI market analysis</h3>
          <p>Real-time machine-learning calculations focused on capturing marked market shifts.</p>
        </article>
        <article class="feature-card" data-reveal>
          <h3>Low-latency feeds</h3>
          <p>Agile infrastructure focused on fast order processing during high-activity periods.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="markets" aria-label="Live markets">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Real-time assets</p>
        <h2>Unified dashboard for global metrics</h2>
        <p class="lead">
          Track asset moves in real time, monitor momentum, and use automated AI analysis to map patterns quickly.
        </p>
      </div>
      <div class="callout-box" data-reveal>
        <strong>Operational efficiency:</strong>
        Traditional trading means watching hundreds of indicators manually.
        <?= e(SITE_NAME) ?> algorithms process thousands of price changes every millisecond,
        producing clear mathematical models so you can catch moves early.
      </div>
      <div class="markets-table-wrap" data-reveal style="margin-top:24px">
        <table class="markets-table">
          <thead>
            <tr><th>Asset</th><th>Price</th><th>24h change</th></tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">₿</span> BTC Bitcoin</div></td>
              <td id="t-btc-p">$67,420.50</td>
              <td id="t-btc-c" class="chg-up">+0.15%</td>
            </tr>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">Ξ</span> ETH Ethereum</div></td>
              <td id="t-eth-p">$3,450.25</td>
              <td id="t-eth-c" class="chg-up">+2.10%</td>
            </tr>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">S</span> SOL Solana</div></td>
              <td id="t-sol-p">$184.80</td>
              <td id="t-sol-c" class="chg-down">-0.65%</td>
            </tr>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">B</span> BNB BNB Chain</div></td>
              <td id="t-bnb-p">$582.40</td>
              <td id="t-bnb-c" class="chg-up">+1.05%</td>
            </tr>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">X</span> XRP Ripple</div></td>
              <td id="t-xrp-p">$0.5920</td>
              <td id="t-xrp-c" class="chg-down">-1.42%</td>
            </tr>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">A</span> ADA Cardano</div></td>
              <td id="t-ada-p">$0.4850</td>
              <td id="t-ada-c" class="chg-up">+0.88%</td>
            </tr>
            <tr>
              <td><div class="asset-cell"><span class="asset-dot">D</span> DOT Polkadot</div></td>
              <td id="t-dot-p">$6.75</td>
              <td id="t-dot-c" class="chg-down">-0.12%</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="margin-top:20px" data-reveal>
        <a href="#signup" class="btn btn-primary">Access the markets</a>
      </p>
    </div>
  </section>

  <section class="section section-soft" id="onboarding" aria-label="Onboarding">
    <div class="container">
      <div class="section-intro section-intro--center" data-reveal>
        <p class="eyebrow">Onboarding process</p>
        <h2><?= e(SITE_NAME) ?> makes getting started stress-free</h2>
        <p class="lead" style="margin-inline:auto">No prior crypto experience? Our automated guide walks you through every step.</p>
      </div>
      <div class="steps-grid">
        <article class="step-card" data-reveal>
          <span class="step-num">1</span>
          <h3>Secure signup</h3>
          <p>Enter basic contact details through our highly encrypted form system.</p>
        </article>
        <article class="step-card" data-reveal>
          <span class="step-num">2</span>
          <h3>AI-guided setup</h3>
          <p>The platform presents interface options tailored to your preferences.</p>
        </article>
        <article class="step-card" data-reveal>
          <span class="step-num">3</span>
          <h3>Secure funding</h3>
          <p>Activate your trading range via standard, reliable payment rails.</p>
        </article>
        <article class="step-card" data-reveal>
          <span class="step-num">4</span>
          <h3>Deploy signals</h3>
          <p>Start interacting with global markets using live neural data feeds.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="mobile-app" aria-label="Mobile access">
    <div class="container split-2">
      <div class="phone-mock" data-reveal aria-hidden="true">
        <div class="phone-mock__bar"></div>
        <div class="phone-mock__row wide"></div>
        <div class="phone-mock__row"></div>
        <div class="phone-mock__row"></div>
        <div class="phone-mock__row"></div>
      </div>
      <div data-reveal>
        <p class="eyebrow">Mobile access</p>
        <h2>Your portfolio, in your pocket</h2>
        <p class="lead">
          The full <?= e(SITE_NAME) ?> engine compressed into a fast native-feel mobile experience.
          Track assets, execute trades, and follow AI signals from anywhere.
        </p>
        <ul class="feature-bullets">
          <li>Push alerts for critical price moves</li>
          <li>Biometric login with encrypted local storage</li>
          <li>Full chart suite optimized for touch</li>
        </ul>
        <a href="#signup" class="btn btn-primary">Get the app experience</a>
      </div>
    </div>
  </section>

  <section class="section section-soft" aria-label="Comparison">
    <div class="container">
      <div class="section-intro section-intro--center" data-reveal>
        <p class="eyebrow">Balanced framework</p>
        <h2>Transparent operating parameters</h2>
        <p class="lead" style="margin-inline:auto">Absolute honesty about what sets our system apart — and where industry limits usually sit.</p>
      </div>
      <div class="compare-grid">
        <article class="compare-card is-positive" data-reveal>
          <p class="eyebrow"><?= e(SITE_NAME) ?></p>
          <h3>Key advantages</h3>
          <ul>
            <li>Minimalist dashboard tuned for institutional execution speed.</li>
            <li>Neural analytics running 24/7 across assets.</li>
            <li>Zero hidden transaction margins or surprise management fees.</li>
            <li>Direct SSL cryptographic account architecture.</li>
            <li>Guided integration that takes minutes, not days.</li>
          </ul>
        </article>
        <article class="compare-card is-negative" data-reveal>
          <p class="eyebrow">Other platforms</p>
          <h3>Common industry limits</h3>
          <ul>
            <li>Cluttered, ad-heavy dashboards that slow decisions.</li>
            <li>Static end-of-day reports instead of continuous live analysis.</li>
            <li>Hidden spreads, withdrawal fees, and unclear pricing.</li>
            <li>Shared outdated infrastructure with uneven data protection.</li>
            <li>Slow, paperwork-heavy verification that can take days.</li>
          </ul>
        </article>
      </div>
      <p class="compare-note" data-reveal>
        Comparison reflects typical patterns in retail trading and is illustrative; competitor offers vary.
      </p>
    </div>
  </section>

  <section class="section" aria-label="Capability matrix">
    <div class="container">
      <div class="section-intro" data-reveal>
        <h2>Core platform features at a glance</h2>
        <p class="lead">Review the functional parameters built into your account access framework.</p>
      </div>
      <div class="cap-table-wrap" data-reveal>
        <table class="cap-table">
          <thead>
            <tr><th>Capability</th><th>Functional detail</th><th>Included</th></tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI trading framework</strong></td>
              <td>Algorithmic processing providing dynamic macro-structural calculations.</td>
              <td class="cap-check">✓</td>
            </tr>
            <tr>
              <td><strong>Aggregated feeds</strong></td>
              <td>Real-time consolidated charts for modern global indices and tokens.</td>
              <td class="cap-check">✓</td>
            </tr>
            <tr>
              <td><strong>Cross-platform stability</strong></td>
              <td>Fully responsive rendering on mobile, desktop, and tablets.</td>
              <td class="cap-check">✓</td>
            </tr>
            <tr>
              <td><strong>Multi-asset coverage</strong></td>
              <td>Unified access to crypto, forex, and equity indices from one account layer.</td>
              <td class="cap-check">✓</td>
            </tr>
            <tr>
              <td><strong>Automated risk alerts</strong></td>
              <td>Configurable notifications flagging unusual volatility before it hits positions.</td>
              <td class="cap-check">✓</td>
            </tr>
            <tr>
              <td><strong>Encrypted data vault</strong></td>
              <td>Personal and account data isolated behind layered cryptographic access controls.</td>
              <td class="cap-check">✓</td>
            </tr>
            <tr>
              <td><strong>24/7 human support</strong></td>
              <td>Live technical operators ready to answer setup questions immediately.</td>
              <td class="cap-check">✓</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section section-soft" id="payments" aria-label="Payments">
    <div class="container" data-reveal>
      <p class="eyebrow">Deposits</p>
      <h2>Fund your account with methods you already know</h2>
      <p class="lead">Cards, e-wallets, and bank transfers — all protected by 256-bit SSL encryption.</p>
      <div class="pay-list">
        <span class="pay-chip">Visa</span>
        <span class="pay-chip">Mastercard</span>
        <span class="pay-chip">PayPal</span>
        <span class="pay-chip">Apple Pay</span>
        <span class="pay-chip">Google Pay</span>
        <span class="pay-chip">Bank transfer</span>
        <span class="pay-chip">SSL protected</span>
      </div>
    </div>
  </section>

  <section class="section" id="partners" aria-label="Partners">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Reliable infrastructure</p>
        <h2>Built with industry-grade partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section section-soft" id="reviews" aria-label="Reviews">
    <div class="container">
      <div class="section-intro section-intro--center" data-reveal>
        <p class="eyebrow">User feedback</p>
        <h2>What traders say about <?= e(SITE_NAME) ?></h2>
        <p class="lead" style="margin-inline:auto">Honest feedback from our global multi-market community.</p>
      </div>
      <div class="reviews-grid">
        <article class="review-card" data-reveal>
          <div class="review-stars">★★★★★</div>
          <p>As a beginner, crypto intimidated me. <?= e(SITE_NAME) ?> made the dashboard so intuitive I felt confident within minutes. The AI analysis is crystal clear.</p>
          <div class="review-author">
            <span class="review-avatar">MT</span>
            <div><strong>Michael Turner</strong><span>Verified retail operator · UK</span></div>
          </div>
        </article>
        <article class="review-card" data-reveal>
          <div class="review-stars">★★★★★</div>
          <p>The clean interface saves me hours. AI filtering market noise down to main trends changed how I manage daily positions.</p>
          <div class="review-author">
            <span class="review-avatar">AM</span>
            <div><strong>Anna Mitchell</strong><span>Crypto asset analyst · Canada</span></div>
          </div>
        </article>
        <article class="review-card" data-reveal>
          <div class="review-stars">★★★★★</div>
          <p>Low-latency execution plus smart alerts lets me adjust targets on the fly without launching multiple programs.</p>
          <div class="review-author">
            <span class="review-avatar">DK</span>
            <div><strong>David Kovacs</strong><span>Private portfolio manager · Germany</span></div>
          </div>
        </article>
        <article class="review-card" data-reveal>
          <div class="review-stars">★★★★★</div>
          <p>Support replied in two minutes while I was configuring verification. Exceptional institutional-grade service framework.</p>
          <div class="review-author">
            <span class="review-avatar">EL</span>
            <div><strong>Elena Laurent</strong><span>Algorithmic trader · France</span></div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" aria-label="About the platform">
    <div class="container seo-block narrow" data-reveal>
      <h2><?= e(SITE_NAME) ?>: empowering traders with institutional AI architecture</h2>
      <p>
        Modern asset interaction demands absolute clarity. When data frameworks are cluttered with promotional banners
        or heavy interface layers, user performance drops. <?= e(SITE_NAME) ?> solves systemic complexity by deploying
        an elegant, responsive core environment optimized for long-term strategic execution.
      </p>
      <h3>Advanced crypto trading assets</h3>
      <p>
        Blockchain liquidity evolves quickly, making low-latency infrastructure critical.
        <?= e(SITE_NAME) ?> connects custom nodes to major digital asset venues, providing live price feedback loops.
        Clean visual metrics turn chaotic multi-chain structures into organized, readable data channels.
      </p>
      <h3>Deep neural market analysis</h3>
      <p>
        Automated algorithms analyze incoming market data to calculate structural shifts across forex and international commodities.
        <?= e(SITE_NAME) ?> distills complex calculations into clear data trends that support independent judgment rather than replacing it.
      </p>
      <h3>Frictionless account setup</h3>
      <p>
        Compliance does not have to be complicated. Our structured registration pipeline protects private settings
        through secure verification processes designed to last under three minutes from start to terminal access.
      </p>
      <h3>Institutional-quality risk controls</h3>
      <p>
        Position sizing, exposure limits, and automatic volatility indicators condense historically professional desk tools
        into simple toggles — so newer participants inherit daily discipline from experienced traders.
      </p>
    </div>
  </section>

  <section class="section section-soft" id="faq" aria-label="FAQ">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Support center</p>
        <h2>Frequently asked questions</h2>
        <p class="lead">Immediate procedural answers about registration and platform access.</p>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            How do I get started with <?= e(SITE_NAME) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height:none">
            <div class="faq-content-inner">
              Fill in the registration form above, follow our secure step-by-step onboarding,
              and activate your account settings through our structured payment processing system.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Do I need advanced crypto experience?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              No. <?= e(SITE_NAME) ?> offers a beginner dashboard mode, automated analytical explanations,
              and simplified workspaces to help new traders navigate safely.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            What is the minimum requirement to trade?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              The standard base activation is <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              This serves as operational trading capital and remains under your manual control.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Are there hidden operational fees?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              No. <?= e(SITE_NAME) ?> operates with absolute pricing transparency.
              We do not apply unexpected platform access margins or hidden withdrawal calculations.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How does the AI intelligence component work?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Neural systems evaluate deep statistical volatility markers across multiple market layers,
              converting raw telemetry into simplified trend lines for easier assessment.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Is my personal data fully protected?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes. Every account pipeline is masked using secure SSL protection plus robust cryptographic protocols
              to fully isolate private data ranges.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Open the full FAQ page →</a></p>
    </div>
  </section>

  <section class="section" id="final-cta" aria-label="Final call to action">
    <div class="container final-cta" data-reveal>
      <div>
        <h2>Ready to experience <?= e(SITE_NAME) ?> clarity?</h2>
        <p class="lead">
          Join a modern system optimized for fast operations, data protection, and transparent access.
        </p>
      </div>
      <div class="signup-card">
        <h3>Create your account</h3>
        <?php
        $form_id = 'final-cta-form';
        $form_submit = 'Create free account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI Trading Platform');
$page_description = 'Trade crypto and multi-asset markets on ' . SITE_NAME . ' — secure SSL access, AI-driven analytics, transparent pricing, and fast execution.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Spread</strong> from 0.1 pip</span>
      <span class="tape-item"><strong>Latency</strong> &lt; 40ms</span>
      <span class="tape-item"><strong>Session</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-powered trading platform</div>
        <h1>Trade crypto and other markets.<br><span class="text-accent">Optimize performance with <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          An innovative desk for crypto and multi-asset trading — stronger security, transparent pricing,
          AI-driven analytics, and an interface that stays clear under pressure.
        </p>
        <div class="hero-badges" aria-label="Platform highlights">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Secure connection with full SSL protocol
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Customer support available 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Extremely fast order execution
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start today — min. deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Account desk</span>
          <span class="live-pill">Secure</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Create access in under 2 minutes';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Order book view</p>
        <h2>Watch the tape. Enter with intent.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Live BTC, ETH, and major pairs with a terminal-style panel — prices, direction, and
          a path straight into your first funded session.
        </p>
        <a href="sign.php" class="btn btn-primary">Unlock market access</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live market prices">
        <div class="exchange-panel-header">
          <span>Markets</span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="Trading platform preview">
    <div class="container platform-layout platform-layout--media-first">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
      <div class="platform-copy">
        <p class="eyebrow">Workspace</p>
        <h2>Charts first.<br>Execution ready.</h2>
        <p class="lead">
          A mobile-ready desk with candlesticks, portfolio P/L, and one-tap orders —
          designed so your first login already feels familiar.
        </p>
        <ul class="platform-points">
          <li>Real-time candles and pair depth</li>
          <li>Portfolio &amp; exposure at a glance</li>
          <li>Hardened account panel with 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Launch workspace</a>
      </div>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Desk capabilities</p>
        <h2>What the terminal is built for</h2>
        <p class="lead">Security, speed, and signal clarity — without burying you in clutter.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Hardened account layer</h3>
            <p>SSL, 2FA, and controlled fund flows so capital and credentials stay protected.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI market context</h3>
            <p>Signals that highlight timing and structure — useful when the tape moves fast.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automation when you want it</h3>
            <p>Bots can run rules around the clock while you keep override control.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Multi-market book</h3>
            <p>Crypto, forex, equities, and commodities from one continuous workspace.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Low-latency routing</h3>
            <p>Infrastructure tuned for stable fills when volatility spikes.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Minimal UI chrome</h3>
            <p>Fewer panels fighting for attention — more room for the chart and the order.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Onboarding</p>
        <h2>Five steps to your first fill</h2>
        <p class="lead">A straight path from signup to live markets.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Open an account</h3>
            <p>Submit your details and receive secure access to the desk.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Confirm email</h3>
            <p>Verify your address to unlock the full trading environment.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Fund the book</h3>
            <p>Deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via card, transfer, or e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Set risk &amp; mode</h3>
            <p>Choose manual control or AI-assisted automation with clear limits.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Trade live</h3>
            <p>Enter with charts, tools, and 24/7 support on stand-by.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Start onboarding</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Funding rails</p>
      <h2 style="margin-bottom: 0.75rem;">Deposit through rails you already trust</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cards, wallets, and bank transfers — encrypted end to end.</p>
      <?php
      $payment_context = 'account funding and deposits';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructure</p>
        <h2>Partners behind the desk</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Trader notes</p>
        <h2>Feedback from the floor</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Onboarding was quick, fees were spelled out, and support answered. Feels like a desk I can stick with.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Independent trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Tried crypto here after bouncing between apps — setup was clear and the chart layout finally makes sense.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stable fills, plain-language terms, and a team that knows the product. Quietly solid desk.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital assets desk</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">As a beginner I needed clarity more than fireworks. Signup, fees, and help when stuck — that was enough.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Private investor</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Before you fund</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do I get started?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Create an account, complete a short verification, and deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              That unlocks charts, tools, and guided onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How is capital and data protected?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We use SSL, two-factor authentication, and processing through trusted providers under strict data policies.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How long do withdrawals take?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Request payouts anytime from the dashboard. Most methods settle in 1–3 business days with fees shown upfront.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Do I need prior trading experience?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              No. Guided flows and AI-assisted tools help you learn at your pace, with 24/7 support available.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Which markets are available?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Cryptocurrencies, forex, global equities, and commodities — manual or automated — from one interface.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Spec sheet</p>
        <h2>Core stack at a glance</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI engine</div>
          <div class="specs-value">Market analysis with machine-learning context</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Funding</div>
          <div class="specs-value">Cards, bank transfers, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Devices</div>
          <div class="specs-value">Web, tablet, mobile — fully responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signal quality</div>
          <div class="specs-value">Up to 85% on supported AI strategies</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markets</div>
          <div class="specs-value">Crypto, forex, stocks, commodities</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Fast setup with guided verification</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">24/7 desk — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contact us</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Rated</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> scorecard</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> reviews · Based on <strong>1,842</strong> ratings
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ready for a cleaner trading desk?</h2>
        <p class="lead">Join traders who want live markets, clear fees, and execution without the clutter.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Open access</span>
          <span class="live-pill">Free</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Register your terminal login';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

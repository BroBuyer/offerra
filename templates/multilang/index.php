<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-Powered Trading Platform');
$page_description = 'Trade crypto, forex, and global markets with ' . SITE_NAME . '. Real-time analytics, AI-assisted signals, and a platform built for speed and clarity.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">AI Trading Platform</p>
        <h1>Trade smarter.<br><span class="text-accent">Move faster.</span></h1>
        <p class="lead">
          A new standard in crypto and multi-market trading. Advanced security, transparent fees,
          AI-driven insights, and an interface that stays out of your way.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL Secured
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 Support
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Fast Execution
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Start trading — <?= MIN_DEPOSIT ?> <?= CURRENCY ?> min.</a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Open your account in 2 minutes';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Platform statistics">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Currencies available</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Verified users</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Trading volume</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Countries supported</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Trading platform preview">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Trading platform</p>
        <h2>Professional charts.<br>Mobile-ready.</h2>
        <p class="lead">
          A clean interface built like a modern exchange — live BTC/USDT data, portfolio tracking,
          and one-tap execution. Designed to build confidence from your first login.
        </p>
        <ul class="platform-points">
          <li>Real-time candlestick charts</li>
          <li>Portfolio &amp; P/L at a glance</li>
          <li>Secure account dashboard</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Try the platform</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Why <?= e(SITE_NAME) ?></p>
        <h2>Everything you need to trade with confidence</h2>
        <p class="lead">Security, speed, and intelligence — combined in one clean platform designed for modern traders.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Bank-grade security</h3>
          <p>SSL encryption, 2FA, and secure fund handling protect your data and capital at every step.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI market signals</h3>
          <p>Accurate, real-time insights help you spot opportunities and make informed decisions faster.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automated trading</h3>
          <p>AI-powered bots work around the clock to execute strategies efficiently while you stay in control.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Multi-market access</h3>
          <p>Trade crypto, forex, stocks, and commodities from a single unified environment.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Low-latency execution</h3>
          <p>Optimized infrastructure delivers stable order execution even during peak market activity.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Clean interface</h3>
          <p>Minimal design that reduces noise so you can focus on strategy, not navigation.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Live markets</p>
        <h2>Trade Bitcoin, Ethereum, and more</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Real-time prices, advanced indicators, and a professional-grade view of the markets you care about.
        </p>
        <a href="sign.php" class="btn btn-primary">Get market access</a>
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

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Getting started</p>
        <h2>From signup to your first trade in minutes</h2>
        <p class="lead">A guided path — no complexity, no guesswork.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Create your account</h3>
          <p>Sign up with your details and get instant, secure access to the platform.</p>
        </article>
        <article class="step-card">
          <h3>Verify your email</h3>
          <p>Confirm your address to unlock the full trading environment.</p>
        </article>
        <article class="step-card">
          <h3>Fund your account</h3>
          <p>Deposit a minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via bank transfer, card, or e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Set your strategy</h3>
          <p>Define risk level and preferences — go manual or let AI automation handle execution.</p>
        </article>
        <article class="step-card">
          <h3>Start trading</h3>
          <p>Enter the market with live charts, tools, and support whenever you need it.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Open account now</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Funding</p>
      <h2 style="margin-bottom: 0.75rem;">Deposit with methods you already trust</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cards, e-wallets, and bank transfers — secured with SSL encryption.</p>
      <?php
      $payment_context = 'account funding and deposits';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Trusted infrastructure</p>
        <h2>Built on industry-standard partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Reviews</p>
        <h2>What traders are saying</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registration took minutes, fees are transparent, and support actually responds. Smooth, reliable experience — a platform I'm happy to stick with.</p>
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
          <p class="review-text">Finally tried crypto trading here — no regrets. Setup was quick, everything explained clearly. Solid choice especially if you're just getting started.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto enthusiast</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stable and dependable. Account opening was simple, terms were clear, and the team knows their stuff. Surprisingly comfortable trading experience.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital assets operator</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trading no longer feels overwhelming. Simple signup, clear fees, and support when I need it. As a beginner, that makes all the difference.</p>
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

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Common questions</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do I get started?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Create an account with your basic details, complete a short verification step, and deposit the minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You'll unlock the full platform — live charts, trading tools, and guided onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Is my money and data safe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We use SSL encryption, two-factor authentication, and secure processing through trusted providers. Your personal data is handled under strict security policies at every level.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            When can I withdraw profits?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Request withdrawals anytime from your dashboard. Processing usually takes 1–3 business days. Applicable fees and timelines are always shown upfront — no surprises.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Do I need trading experience?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Not at all. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace. Whether you're new or experienced, support is available 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            What markets can I trade?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Access cryptocurrencies, forex, global stocks, and commodities from one interface. Real-time data, integrated analytics, and support for both manual and automated strategies.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Platform</p>
        <h2>Core capabilities at a glance</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI trading engine</div>
          <div class="specs-value">Advanced market analysis powered by machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Funding methods</div>
          <div class="specs-value">Credit cards, bank transfers, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Device access</div>
          <div class="specs-value">Web, tablet, and mobile — fully responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signal accuracy</div>
          <div class="specs-value">Up to 85% on supported AI strategies</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markets</div>
          <div class="specs-value">Crypto, forex, stocks, commodities</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Fast account setup with guided verification</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Professional 24/7 assistance — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contact us</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Trusted</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> Reviews</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> reviews · Based on <strong>1,842</strong> ratings
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ready to trade on a platform built for clarity?</h2>
        <p class="lead">Join private traders and businesses who buy, sell, and manage digital assets with confidence.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Create your free account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

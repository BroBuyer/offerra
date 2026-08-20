<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI Tirdzniecības platforma');
$page_description = 'Trade crypto and other markets on ' . SITE_NAME . ' — secure account, clear pricing, helpful AI tools, and fast order execution.';
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
      <span class="tape-item"><strong>Spreads</strong> from 0.1</span>
      <span class="tape-item"><strong>Speed</strong> under 40ms</span>
      <span class="tape-item"><strong>Tirgi</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-powered tirdzniecības platformas funkcijas</div>
        <h1>Trade crypto and other markets.<br><span class="text-accent">Get started with <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          A simple platform for crypto and multi-asset trading — strong security, clear pricing,
          helpful AI insights, and an interface that stays easy to follow.
        </p>
        <div class="hero-badges" aria-label="Platforma highlights">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Droši encrypted connection (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Customer support available 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Fast order execution
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start today — min. deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Izveidot kontu</span>
          <span class="live-pill">Droši</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Reģistrēties in under 2 minutes';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Live markets</p>
        <h2>See prices in real time. Start when you are ready.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Follow Bitcoin, Ethereum, and other major pairs in a clear market panel —
          then open your account and place your first trade.
        </p>
        <a href="sign.php" class="btn btn-primary">Open market access</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live market prices">
        <div class="exchange-panel-header">
          <span>Tirgi</span>
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

  <section class="platform-section" id="platform" aria-label="Tirdzniecības platforma preview">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platforma</p>
        <h2>Clear charts.<br>Ready to trade.</h2>
        <p class="lead">
          A mobile-friendly trading screen with live charts, profit &amp; loss,
          and simple one-tap orders — easy to understand from your first login.
        </p>
        <ul class="platform-points">
          <li>Live charts and market prices</li>
          <li>Portfolio balance at a glance</li>
          <li>Droši account panel with 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Open the platform</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funkcijas</p>
        <h2>What you get with <?= e(SITE_NAME) ?></h2>
        <p class="lead">Drošība, speed, and clear tools — without a crowded screen.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Strong account security</h3>
            <p>SSL encryption, two-factor login, and protected fund flows keep your money and data safer.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI market insights</h3>
            <p>Helpful signals that point out timing and trends — useful when prices move quickly.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automation when you want it</h3>
            <p>Optional trading bots can follow your rules around the clock — you stay in control.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Several markets in one place</h3>
            <p>Crypto, forex, stocks, and commodities from one simple platform.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Fast order handling</h3>
            <p>Built for reliable order placement even when markets are busy.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Clean, simple layout</h3>
            <p>Less visual noise — more space for the chart and your next order.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Getting started</p>
        <h2>Five steps to your first trade</h2>
        <p class="lead">A clear path from signup to live markets.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Atvērt kontu</h3>
            <p>Iesniegt your details and get secure access to the platform.</p>
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
            <h3>Pievienot līdzekļus</h3>
            <p>Deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via card, bank transfer, or e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Choose how you trade</h3>
            <p>Trade manually or use AI-assisted tools with clear limits you set.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Trade live</h3>
            <p>Use charts, tools, and Atbalsts 24/7 whenever you need help.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Sākt tagad</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Payments</p>
      <h2 style="margin-bottom: 0.75rem;">Deposit with methods you already know</h2>
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
        <h2>Infrastructure partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Atsauksmes</p>
        <h2>What traders say</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Signup was quick, fees were clear, and support answered. Feels like a platform I can stick with.</p>
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
          <p class="review-text">Orders go through reliably, terms are in plain language, and the team knows the product. A solid platform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital assets trader</div>
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
        <h2>Before you fund your account</h2>
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
            How is my money and data protected?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We use SSL encryption, two-factor authentication, and trusted payment providers under strict data policies.
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
              No. Guided steps and AI-assisted tools help you learn at your pace, with Atbalsts 24/7 available.
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
              Cryptocurrencies, forex, global stocks, and commodities — manual or automated — from one interface.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Overview</p>
        <h2>Platforma at a glance</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI tools</div>
          <div class="specs-value">Market analysis with machine-learning insights</div>
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
          <div class="specs-label">AI signal quality</div>
          <div class="specs-value">Up to 85% on supported strategies*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Tirgi</div>
          <div class="specs-value">Crypto, forex, stocks, commodities</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Fast setup with guided verification</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Atbalsts</div>
          <div class="specs-value">Atbalsts 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Sazinieties ar mums</a></div>
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
          <strong>342</strong> reviews · Pamatojoties uz <strong>1,842</strong> ratings
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ready for a clearer way to trade?</h2>
        <p class="lead">Join traders who want live markets, clear fees, and a platform that stays easy to use.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Atvērt kontu</span>
          <span class="live-pill">Free</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Create your free account';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

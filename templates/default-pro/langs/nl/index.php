<?php
require_once __DIR__ . '/includes/config.php';

$brand = SITE_NAME;
$market = market_country_name();
$audience = market_audience();

$page_title = page_title('Intelligent tradingplatform');
$page_description = $brand . ' is een wereldwijd tradingplatform ontwikkeld voor ' . $audience
    . ' die consistente prestaties, snelle uitvoering en volledige controle over de omgeving zoeken.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">AI-tradingplatform <?= e($audience) ?></p>
        <h1>AI-tradingplatform <?= e($brand) ?>:<br><span class="text-accent">geautomatiseerde analyse en slimmer traden</span></h1>
        <p class="lead">
          <?= e($brand) ?> is an advanced AI-powered trading platform that analyses financial markets in real time
          and delivers automated trading insights for <?= e($audience) ?>. The smart assistant helps you spot setups,
          manage risk, and keep decisions on one screen — without a complex desktop terminal.
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
        <a href="sign.php" class="btn btn-primary">Start met <?= e($brand) ?> — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Open your ' . $brand . ' account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="stats" aria-label="<?= e($brand) ?> platform statistics">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Markets on <?= e($brand) ?></div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Registered users</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Reported volume</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Countries supported</div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="<?= e($brand) ?> trading platform preview">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow"><?= e($brand) ?> workspace</p>
        <h2>The <?= e($brand) ?> dashboard<br>on desktop and mobile</h2>
        <p class="lead">
          <?= e($brand) ?> is built like a modern exchange: live BTC/USDT data, portfolio tracking,
          and one-tap tickets. Watchlists, alerts, and account status stay in sync so <?= e($audience) ?>
          can follow the same book from a browser or a phone.
        </p>
        <ul class="platform-points">
          <li>Real-time candlestick charts inside <?= e($brand) ?></li>
          <li>Portfolio &amp; P/L on the <?= e($brand) ?> home screen</li>
          <li>Secure <?= e($brand) ?> account area</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Probeer <?= e($brand) ?></a>
      </div>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Why <?= e($brand) ?></p>
        <h2>What you get inside <?= e($brand) ?></h2>
        <p class="lead">Security, speed, and AI-assisted analysis — one platform for <?= e($audience) ?> who want a single desk for several assets.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3><?= e($brand) ?> security stack</h3>
          <p>SSL, 2FA, and documented deposit/withdrawal steps. <?= e($brand) ?> keeps credentials and session controls in the account area.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI signals on <?= e($brand) ?></h3>
          <p>The <?= e($brand) ?> engine highlights setups from price, volume, and technical streams so you spend less time hunting across tabs.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Assisted automation</h3>
          <p>Use <?= e($brand) ?> bots with your risk profile, or stay fully manual. You confirm size, fees, and exposure before an order goes out.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Multi-asset <?= e($brand) ?> desk</h3>
          <p>Crypto, FX, indices, and other listed instruments share one <?= e($brand) ?> book with common limits.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Low-latency tickets</h3>
          <p><?= e($brand) ?> routes orders through an optimized stack so peak sessions stay usable.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Clean <?= e($brand) ?> UI</h3>
          <p>Market data, notes, and the account panel stay distinct so <?= e($audience) ?> can read a setup without noise.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Live markets</p>
        <h2>Trade Bitcoin, Ethereum, and more on <?= e($brand) ?></h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Real-time prices and professional-grade views inside <?= e($brand) ?> — the same pairs <?= e($audience) ?> watch on a typical desk.
        </p>
        <a href="sign.php" class="btn btn-primary">Get <?= e($brand) ?> market access</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live market prices">
        <div class="exchange-panel-header">
          <span><?= e($brand) ?> markets</span>
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

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Getting started</p>
        <h2>How to start with <?= e($brand) ?></h2>
        <p class="lead">Registration is gratis. Access to the full <?= e($brand) ?> desk follows verification and the stated minimum deposit.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>1. Register on <?= e($brand) ?></h3>
          <p>Complete the form with name, email, and phone. A <?= e($brand) ?> manager may call to confirm the account.</p>
        </article>
        <article class="step-card">
          <h3>2. Verify the account</h3>
          <p>Finish guided checks and set risk preferences. <?= e($brand) ?> support can walk <?= e($audience) ?> through onboarding.</p>
        </article>
        <article class="step-card">
          <h3>3. Deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h3>
          <p>Fund with card, transfer, or e-wallet. <?= e($brand) ?> shows fees before you confirm.</p>
        </article>
        <article class="step-card">
          <h3>4. Set <?= e($brand) ?> limits</h3>
          <p>Define risk and alerts. Stay manual or let <?= e($brand) ?> automation assist execution.</p>
        </article>
        <article class="step-card">
          <h3>5. Trade in the <?= e($brand) ?> desk</h3>
          <p>Live charts, tickets, and 24/7 support stay in the same dashboard.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Open a <?= e($brand) ?> account</a>
      </div>
    </div>
  </section>

  <section class="section" id="about-platform" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container seo-prose">
      <p class="eyebrow">Informed trading</p>
      <h2>How <?= e($brand) ?> supports decisions on financial markets</h2>
      <p>
        <?= e($brand) ?> combines AI-assisted analysis, configurable alerts, and a dashboard for <?= e($audience) ?>
        who want to monitor several assets in one place. The aim is not a promised return. <?= e($brand) ?> gives
        tools to read volatility, set operating limits, and keep a written trail from registration to withdrawal.
      </p>
      <p>
        The analysis engine processes price streams, volumes, and technical signals across timeframes, highlighting
        configurations that deserve attention without replacing your judgement. Filter by market, set alert thresholds,
        and receive summaries when conditions change. Historical context sits next to recent moves so a spike is never
        shown without a baseline.
      </p>
      <p>
        Risk management is part of the <?= e($brand) ?> flow: exposure limits, position-size reminders, and pre-confirm
        summaries. Online trading involves a risk of losing capital; no algorithm removes volatility or guarantees results.
        Fees, spread, and account status stay on one <?= e($brand) ?> screen before you send an order.
      </p>
      <p>
        After registration, a guided path explains verification, the minimum deposit of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>,
        applicable fees, and credit times. <?= e($brand) ?> support assists with documents, withdrawals, and mobile setup.
        Ontdek de trading tools van the product pages before exposing significant amounts.
      </p>
      <div class="seo-grid">
        <article class="feature-card">
          <h3>Multi-timeframe analysis</h3>
          <p>Short and long horizons with synthetic indicators and <?= e($brand) ?> alerts, organised by market.</p>
        </article>
        <article class="feature-card">
          <h3>Integrated risk tools</h3>
          <p>Limits, size reminders, and confirmations before <?= e($brand) ?> tickets go out.</p>
        </article>
        <article class="feature-card">
          <h3>One dashboard</h3>
          <p>Browser or phone with synced <?= e($brand) ?> preferences — positions, alerts, and support in one layout.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Stortingen</p>
      <h2 style="margin-bottom: 0.75rem;">Fund your <?= e($brand) ?> account with methods you already use</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cards, e-wallets, and bank transfers — shown inside <?= e($brand) ?> before you confirm.</p>
      <?php
      $payment_context = $brand . ' stortingen en accountfinanciering';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Trusted infrastructure</p>
        <h2><?= e($brand) ?> runs on industry-standard partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Views on <?= e($brand) ?></p>
        <h2>What <?= e($audience) ?> say about <?= e($brand) ?></h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registration on <?= e($brand) ?> took minutes, fees were on screen, and support actually replied. The desk is the one I keep open.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role"><?= e($brand) ?> user</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">First crypto tickets through <?= e($brand) ?> were clearer than I expected. Setup was short, and the AI notes on <?= e($brand) ?> helped me not stare at five apps.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role"><?= e($brand) ?> user</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text"><?= e($brand) ?> felt stable during busy hours. Account opening was simple and the terms sat next to the deposit button.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role"><?= e($brand) ?> user</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">As a beginner I needed a guided path. <?= e($brand) ?> signup, fees, and support were in one place — that is why I stayed.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role"><?= e($brand) ?> user</div>
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
        <h2>What to know before you start with <?= e($brand) ?></h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            What is <?= e($brand) ?> and how does it work?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e($brand) ?> is an AI-assisted trading platform that analyses financial markets in real time and highlights setups with alerts and risk tools for <?= e($audience) ?>.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Do I need trading experience to use <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              No. <?= e($brand) ?> guides registration, deposit, and basic navigation. Advanced tools stay available when you are ready.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Are my data and funds handled securely on <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e($brand) ?> uses encrypted connections, account verification, and documented deposit/withdrawal steps. Trading still involves a risk of losing capital.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            What returns can I expect on <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e($brand) ?> does not guarantee returns. Results depend on capital, strategy, volatility, and how you manage risk.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Which markets are available on <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e($brand) ?> covers digital assets and multi-market instruments in one dashboard, with alerts and assisted automation.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Can I use <?= e($brand) ?> on mobile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes. <?= e($brand) ?> is built for modern phones and browsers, with preferences synced across devices.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do I contact <?= e($brand) ?> support?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Use the <?= e($brand) ?> <a href="contacts.php">contact page</a> for accounts, deposits, withdrawals, and platform questions.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do I start with <?= e($brand) ?> today?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Complete the <?= e($brand) ?> form, finish verification, and open the dashboard. Minimum deposit is <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow"><?= e($brand) ?> platform</p>
        <h2><?= e($brand) ?> capabilities at a glance</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label"><?= e($brand) ?> AI engine</div>
          <div class="specs-value">Market analysis powered by machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Stortingen</div>
          <div class="specs-value">Cards, bank transfers, PayPal, e-wallets — from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Apparaten</div>
          <div class="specs-value"><?= e($brand) ?> on web, tablet, and mobile</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markets</div>
          <div class="specs-value">Crypto, forex, stocks, commodities in one <?= e($brand) ?> book</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Guided <?= e($brand) ?> verification for <?= e($audience) ?></div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">24/7 <?= e($brand) ?> assistance — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contact</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Trusted</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e($brand) ?> reviews</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> reviews · Based on <strong>1,842</strong> ratings of <?= e($brand) ?>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ready to use <?= e($brand) ?>?</h2>
        <p class="lead">Open a <?= e($brand) ?> account for <?= e($audience) ?>. Trading involves risk — only use capital you can afford to expose.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Maak een account aan bij ' . $brand . ' account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-alapú kereskedési platform');
$page_description = 'Kripto, forex és globális piacok kereskedése a ' . SITE_NAME . '. Valós idejű elemzések, AI-támogatott jelek és egy gyors, átlátható platform.';
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
        <p class="eyebrow">AI kereskedési platform</p>
        <h1>Kereskedjen okosabban.<br><span class="text-accent">Lépjen gyorsabban.</span></h1>
        <p class="lead">
          Új szabvány a kripto- és többpiaci kereskedésben. Fejlett biztonság, átlátható díjak,
          AI-vezérelt betekintések és egy felület, amely nem lassítja le.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-védelem
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 ügyfélszolgálat
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Gyors végrehajtás
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Kereskedés indítása — <?= MIN_DEPOSIT ?> <?= CURRENCY ?> min.</a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Nyissa meg számláját 2 perc alatt';
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
        <div class="stat-label">Elérhető valuták</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Ellenőrzött felhasználók</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Kereskedési volumen</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Támogatott országok</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Kereskedési platform preview">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Kereskedési platform</p>
        <h2>Professzionális chartok.<br>Mobile-ready.</h2>
        <p class="lead">
          A clean interface built like a modern exchange — live BTC/USDT data, portfolio tracking,
          és a one-tap execution. Designed to build confidence from your first login.
        </p>
        <ul class="platform-points">
          <li>Valós idejű gyertyadiagramok</li>
          <li>Portfolio &amp; P/L at a glance</li>
          <li>Biztonságos fiókpanel</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Próbálja ki a platformot</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Miért <?= e(SITE_NAME) ?></p>
        <h2>Minden, amire szüksége van a magabiztos kereskedéshez</h2>
        <p class="lead">Security, speed, és a intelligence — combined in one clean platform designed for modern traders.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Banki szintű biztonság</h3>
          <p>SSL encryption, 2FA, és a secure fund hés aling protect your data és a capital at every step.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI piaci jelek</h3>
          <p>Accurate, real-time insights help you spot opportunities és a make informed decisions faster.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizált kereskedés</h3>
          <p>AI-powered bots work around the clock to execute strategies efficiently while you stay in control.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Többpiaci hozzáférés</h3>
          <p>Trade crypto, forex, stocks, és a commodities from a single unified environment.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Alacsony késleltetésű végrehajtás</h3>
          <p>Optimized infrastructure delivers stable order execution even during peak market activity.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Tiszta felület</h3>
          <p>Minimal design that reduces noise so you can focus on strategy, not navigation.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Élő piacok -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Élő piacok</p>
        <h2>Bitcoin, Ethereum és további eszközök</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Real-time prices, advanced indicators, és a a professional-grade view of the markets you care about.
        </p>
        <a href="sign.php" class="btn btn-primary">Get market access</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Élő piaci árak">
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
          <h3>Hozza létre fiókját</h3>
          <p>Sign up with your details és a get instant, secure access to the platform.</p>
        </article>
        <article class="step-card">
          <h3>Erősítse meg e-mailjét</h3>
          <p>Erősítse meg címét a teljes kereskedési környezet feloldásához.</p>
        </article>
        <article class="step-card">
          <h3>Töltse fel számláját</h3>
          <p>Helyezzen el legalább <?= MIN_DEPOSIT ?> <?= CURRENCY ?> banki átutalással, kártyával vagy e-pénztárcával.</p>
        </article>
        <article class="step-card">
          <h3>Állítsa be stratégiáját</h3>
          <p>Define risk level és a preferences — go manual or let AI automation hés ale execution.</p>
        </article>
        <article class="step-card">
          <h3>Kereskedés indítása</h3>
          <p>Lépjen a piacra élő chartokkal, eszközökkel és támogatással, amikor szüksége van rá.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Számla megnyitása most</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Befizetés</p>
      <h2 style="margin-bottom: 0.75rem;">Fizessen olyan módokon, amelyekben már megbízik</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cards, e-wallets, és a bank transfers — secured with SSL encryption.</p>
      <?php
      $payment_context = 'account funding és a deposits';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Megbízható infrastruktúra</p>
        <h2>Built on industry-stés aard partners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Vélemények -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Vélemények</p>
        <h2>What traders are saying</h2>
      </div>

      <div class="vélemény-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registration took minutes, fees are transparent, és a support actually responds. Smooth, reliable experience — a platform I'm happy to stick with.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Független trader</div>
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
              <div class="review-role">Kripto-rajongó</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stable és a dependable. Account opening was simple, terms were clear, és a the team knows their stuff. Surprisingly comfortable trading experience.</p>
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
          <p class="review-text">Trading no longer feels overwhelming. Simple signup, clear fees, és a support when I need it. As a beginner, that makes all the difference.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Magánbefektető</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- GYIK -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">GYIK</p>
        <h2>Common questions</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            How do I get started?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Create an account with your basic details, complete a short verification step, és a deposit the minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You'll unlock the full platform — live charts, trading tools, és a guided onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            Is my money és a data safe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL-titkosítást, kétfaktoros hitelesítést és megbízható szolgáltatókon keresztüli biztonságos feldolgozást használunk. Személyes adatait minden szinten szigorú biztonsági szabályok szerint kezeljük.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            When can I withdraw profits?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A kifizetést bármikor kérheti a fiókjából. Processing usually takes 1–3 business days. Applicable fees és a timelines are always shown upfront — no surprises.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            Szükségem van kereskedési tapasztalatra?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Egyáltalán nem. A vezetett onboarding, az egyszerű útmutatók és az AI-támogatott eszközök a saját tempójában segítenek tanulni. Whether you're new or experienced, support is available 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            What markets can I trade?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Access cryptocurrencies, forex, global stocks, és a commodities from one interface. Real-time data, integrated analytics, és a support for both manual és a automated strategies.
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
          <div class="specs-label">AI kereskedési motor</div>
          <div class="specs-value">Advanced market analysis powered by machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Befizetési módok</div>
          <div class="specs-value">Credit cards, bank transfers, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Eszközhozzáférés</div>
          <div class="specs-value">Web, tablet és mobil — teljesen reszponzív</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Jelpontosság</div>
          <div class="specs-value">Akár 85% a támogatott AI stratégiáknál</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markets</div>
          <div class="specs-value">Kripto, forex, részvények, árucikkek</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Fast account setup with guided verification</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Ügyfélszolgálat</div>
          <div class="specs-value">Professional 24/7 assistance — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Lépjen kapcsolatba velünk</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Megbízható</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> Vélemények</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> vélemény · Alapján <strong>1,842</strong> értékeléss
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-bés a">
    <div class="container cta-bés a-grid">
      <div>
        <h2>Készen áll kereskedni egy átláthatóságra tervezett platformon?</h2>
        <p class="lead">Join private traders és a businesses who buy, sell, és a manage digital assets with confidence.</p>
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

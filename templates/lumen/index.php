<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI Investing Platform');
$page_description = 'A simple investing platform powered by AI — clear markets, guided decisions, and fast account setup on ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introduction">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Invest with clarity.<br><span class="text-accent">Let AI keep it simple.</span></h1>
        <p class="lead">
          A modern investing platform that explains the markets in plain language,
          highlights useful AI insights, and helps you place trades without the clutter.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">See how it works</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Built for beginners</p>
        <h2>Three steps. Then you’re trading.</h2>
        <p class="lead">No terminal jargon — just a clear path from signup to your first position.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Open your account</h3>
          <p>Share a few details. Verification is short and guided.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Fund securely</h3>
          <p>Deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?> with trusted payment methods.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Trade with AI help</h3>
          <p>Follow plain-language insights and place orders when you’re ready.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI that stays useful</p>
        <h2>Signals you can actually understand</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> turns market noise into short, readable prompts —
          so you spend less time guessing and more time deciding.
        </p>
        <ul class="feature-list">
          <li>Clear buy / hold / watch cues</li>
          <li>Risk reminders before you confirm</li>
          <li>An interface that stays calm under pressure</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Try the platform</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Example insight">
        <p class="insight-panel__label">Live insight</p>
        <p class="insight-panel__title">BTC / USD · steady momentum</p>
        <p class="insight-panel__body">
          Volatility is cooling. AI suggests watching the next session before sizing up —
          you stay in control of every order.
        </p>
        <div class="insight-panel__meta">
          <span>Confidence high</span>
          <span>Updated just now</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Get started</p>
        <h2>Create your <?= e(SITE_NAME) ?> account</h2>
        <p class="lead lead-light">
          Join a platform designed to feel premium and stay simple —
          AI guidance included from day one.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Open in under 2 minutes';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Trusted rails</p>
        <h2>Infrastructure partners</h2>
        <p class="lead">Payments and market access through established providers.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Quick answers</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Do I need trading experience?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              No. <?= e(SITE_NAME) ?> is built for first-time investors — AI tips are written in plain language.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            What is the minimum deposit?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              You can start from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Fees stay visible before you confirm.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Is support available?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes — our team is available around the clock to help with funding and account setup.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Read the full FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

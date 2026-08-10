<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-tradingplatform');
$page_description = 'Handel in crypto en andere markten op ' . SITE_NAME . ' — veilig account, duidelijke prijzen, nuttige AI-tools en snelle orderuitvoering.';
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
      <span class="tape-item"><strong>Spreads</strong> vanaf 0,1</span>
      <span class="tape-item"><strong>Snelheid</strong> onder 40 ms</span>
      <span class="tape-item"><strong>Markten</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-ondersteund tradingplatform</div>
        <h1>Handel in crypto en andere markten.<br><span class="text-accent">Start met <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Een eenvoudig platform voor crypto- en multi-asset trading — sterke beveiliging, duidelijke prijzen,
          nuttige AI-inzichten en een interface die makkelijk te volgen blijft.
        </p>
        <div class="hero-badges" aria-label="Platformhoogtepunten">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Veilige versleutelde verbinding (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Klantensupport beschikbaar 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Snelle orderuitvoering
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start vandaag — min. storting <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Account aanmaken</span>
          <span class="live-pill">Veilig</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Meld u aan in minder dan 2 minuten';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Live markten</p>
        <h2>Zie prijzen in realtime. Start wanneer u klaar bent.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Volg Bitcoin, Ethereum en andere belangrijke paren in een duidelijk marktpanel —
          open daarna uw account en plaats uw eerste trade.
        </p>
        <a href="sign.php" class="btn btn-primary">Open markttoegang</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live marktprijzen">
        <div class="exchange-panel-header">
          <span>Markten</span>
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

  <section class="platform-section" id="platform" aria-label="Voorbeeld van het tradingplatform">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platform</p>
        <h2>Duidelijke grafieken.<br>Klaar om te handelen.</h2>
        <p class="lead">
          Een mobielvriendelijk tradingsscherm met live grafieken, winst &amp; verlies
          en eenvoudige one-tap orders — makkelijk te begrijpen vanaf de eerste login.
        </p>
        <ul class="platform-points">
          <li>Live grafieken en marktprijzen</li>
          <li>Portfoliobalans in één oogopslag</li>
          <li>Veilig accountpaneel met 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Open het platform</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Functies</p>
        <h2>Wat u krijgt met <?= e(SITE_NAME) ?></h2>
        <p class="lead">Beveiliging, snelheid en duidelijke tools — zonder een druk scherm.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Sterke accountbeveiliging</h3>
            <p>SSL-versleuteling, tweefactorlogin en beschermde fondsstromen houden uw geld en gegevens veiliger.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI-marktinzichten</h3>
            <p>Nuttige signalen over timing en trends — handig wanneer prijzen snel bewegen.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatisering wanneer u wilt</h3>
            <p>Optionele tradingbots kunnen uw regels de klok rond volgen — u blijft in control.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Meerdere markten op één plek</h3>
            <p>Crypto, forex, aandelen en grondstoffen vanaf één eenvoudig platform.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Snelle orderafhandeling</h3>
            <p>Gebouwd voor betrouwbare orderplaatsing, ook als markten druk zijn.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Schone, eenvoudige layout</h3>
            <p>Minder visuele ruis — meer ruimte voor de grafiek en uw volgende order.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Aan de slag</p>
        <h2>Vijf stappen naar uw eerste trade</h2>
        <p class="lead">Een duidelijk pad van aanmelden naar live markten.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Open een account</h3>
            <p>Dien uw gegevens in en krijg veilige toegang tot het platform.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Bevestig e-mail</h3>
            <p>Verifieer uw adres om de volledige tradingomgeving te ontgrendelen.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Voeg saldo toe</h3>
            <p>Stort vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via kaart, bankoverschrijving of e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Kies hoe u handelt</h3>
            <p>Trade handmatig of gebruik AI-ondersteunde tools met duidelijke limieten die u instelt.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Trade live</h3>
            <p>Gebruik grafieken, tools en 24/7 support wanneer u hulp nodig heeft.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Nu starten</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Betalingen</p>
      <h2 style="margin-bottom: 0.75rem;">Stort met methoden die u al kent</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kaarten, wallets en bankoverschrijvingen — end-to-end versleuteld.</p>
      <?php
      $payment_context = 'accountfunding en stortingen';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructuur</p>
        <h2>Infrastructuurpartners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Reviews</p>
        <h2>Wat traders zeggen</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Aanmelden ging snel, kosten waren duidelijk en support antwoordde. Voelt als een platform om bij te blijven.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Onafhankelijke trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Probeerde hier crypto na heen en weer tussen apps — setup was duidelijk en de grafieklayout klopt eindelijk.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Cryptotrader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Orders gaan betrouwbaar door, voorwaarden in gewone taal, en het team kent het product. Een solide platform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader in digitale assets</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Als beginner had ik duidelijkheid nodig, geen vuurwerk. Aanmelden, kosten en hulp bij vastlopen — dat was genoeg.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Particuliere belegger</div>
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
        <h2>Voordat u uw account stort</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe begin ik?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Maak een account aan, rond een korte verificatie af en stort vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Dat ontgrendelt grafieken, tools en begeleid onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe zijn mijn geld en gegevens beschermd?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We gebruiken SSL-versleuteling, tweefactorauthenticatie en vertrouwde betaalproviders onder strikte databeleid.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe lang duren opnames?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vraag uitbetalingen altijd aan via het dashboard. De meeste methoden worden in 1–3 werkdagen afgehandeld met kosten vooraf zichtbaar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Heb ik eerdere tradingervaring nodig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nee. Begeleide stappen en AI-ondersteunde tools helpen u in uw eigen tempo te leren, met 24/7 support.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Welke markten zijn beschikbaar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Cryptovaluta, forex, wereldwijde aandelen en grondstoffen — handmatig of geautomatiseerd — vanuit één interface.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Overzicht</p>
        <h2>Platform in één oogopslag</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI-tools</div>
          <div class="specs-value">Marktanalyse met machinelearning-inzichten</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Funding</div>
          <div class="specs-value">Kaarten, bankoverschrijvingen, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Apparaten</div>
          <div class="specs-value">Web, tablet, mobiel — volledig responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AI-signaalkwaliteit</div>
          <div class="specs-value">Tot 85% op ondersteunde strategieën*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markten</div>
          <div class="specs-value">Crypto, forex, aandelen, grondstoffen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Snelle setup met begeleide verificatie</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">24/7 support — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contact</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Beoordeeld</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> scorecard</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> reviews · Gebaseerd op <strong>1.842</strong> ratings
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Klaar voor een duidelijker manier van traden?</h2>
        <p class="lead">Sluit u aan bij traders die live markten, duidelijke kosten en een makkelijk platform willen.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Account openen</span>
          <span class="live-pill">Gratis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Maak uw gratis account aan';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

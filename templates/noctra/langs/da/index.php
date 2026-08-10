<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-handelsplatform');
$page_description = 'Handl crypto og andre markeder på ' . SITE_NAME . ' — sikker konto, klare priser, nyttige AI-værktøjer og hurtig ordreeksekvering.';
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
      <span class="tape-item"><strong>Spreads</strong> fra 0,1</span>
      <span class="tape-item"><strong>Hastighed</strong> under 40 ms</span>
      <span class="tape-item"><strong>Markeder</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-drevet handelsplatform</div>
        <h1>Handl crypto og andre markeder.<br><span class="text-accent">Kom i gang med <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          En enkel platform til crypto- og multiaktivhandel — stærk sikkerhed, klare priser,
          nyttig AI-indsigt og en grænseflade, der er nem at følge.
        </p>
        <div class="hero-badges" aria-label="Platformhøjdepunkter">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Sikker krypteret forbindelse (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Kundesupport tilgængelig 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hurtig ordreeksekvering
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start i dag — min. indskud <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Opret konto</span>
          <span class="live-pill">Sikker</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Tilmeld dig på under 2 minutter';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Live markeder</p>
        <h2>Se priser i realtid. Start, når du er klar.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Følg Bitcoin, Ethereum og andre store par i et klart markedspanel —
          åbn derefter din konto, og placer din første handel.
        </p>
        <a href="sign.php" class="btn btn-primary">Åbn markedsadgang</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live markedspriser">
        <div class="exchange-panel-header">
          <span>Markeder</span>
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

  <section class="platform-section" id="platform" aria-label="Forhåndsvisning af handelsplatform">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platform</p>
        <h2>Klare diagrammer.<br>Klar til at handle.</h2>
        <p class="lead">
          En mobilvenlig handelsskærm med live-diagrammer, gevinst &amp; tab
          og enkle ordrer med ét tryk — nem at forstå fra første login.
        </p>
        <ul class="platform-points">
          <li>Live-diagrammer og markedspriser</li>
          <li>Porteføljesaldo med et blik</li>
          <li>Sikkert kontopanel med 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Åbn platformen</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funktioner</p>
        <h2>Det du får med <?= e(SITE_NAME) ?></h2>
        <p class="lead">Sikkerhed, hastighed og klare værktøjer — uden en overfyldt skærm.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Stærk kontosikkerhed</h3>
            <p>SSL-kryptering, tofaktorlogin og beskyttede pengestrømme holder dine penge og data mere sikre.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI-markedsindsigt</h3>
            <p>Nyttige signaler, der peger på timing og tendenser — nyttige, når priserne bevæger sig hurtigt.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatisering, når du vil</h3>
            <p>Valgfrie handelsbots kan følge dine regler døgnet rundt — du beholder kontrollen.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Flere markeder ét sted</h3>
            <p>Crypto, forex, aktier og råvarer fra én enkel platform.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Hurtig ordrehåndtering</h3>
            <p>Bygget til pålidelig ordreplacering, også når markederne er travle.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Rent, enkelt layout</h3>
            <p>Mindre visuelt støj — mere plads til diagrammet og din næste ordre.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Kom godt i gang</p>
        <h2>Fem trin til din første handel</h2>
        <p class="lead">En klar vej fra tilmelding til live markeder.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Åbn en konto</h3>
            <p>Send dine oplysninger, og få sikker adgang til platformen.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Bekræft e-mail</h3>
            <p>Bekræft din adresse for at låse det fulde handelsmiljø op.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Tilføj midler</h3>
            <p>Indbetal fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via kort, bankoverførsel eller e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Vælg, hvordan du handler</h3>
            <p>Handl manuelt, eller brug AI-assisterede værktøjer med klare grænser, du sætter.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Handl live</h3>
            <p>Brug diagrammer, værktøjer og support døgnet rundt, når du har brug for hjælp.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Start nu</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Betalinger</p>
      <h2 style="margin-bottom: 0.75rem;">Indbetal med metoder, du allerede kender</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kort, wallets og bankoverførsler — krypteret fra ende til anden.</p>
      <?php
      $payment_context = 'kontofinansiering og indbetalinger';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktur</p>
        <h2>Infrastrukturpartnere</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Anmeldelser</p>
        <h2>Hvad handlere siger</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Tilmelding var hurtig, gebyrerne klare, og supporten svarede. Føles som en platform, jeg kan blive ved med.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Uafhængig trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Prøvede crypto her efter at have hoppet mellem apps — opsætningen var klar, og diagramlayoutet giver endelig mening.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto-trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ordrer går pålideligt igennem, vilkårene er på almindeligt sprog, og teamet kender produktet. En solid platform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Handler i digitale aktiver</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Som begynder havde jeg mere brug for klarhed end fyrværkeri. Tilmelding, gebyrer og hjælp, når jeg sad fast — det var nok.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Privat investor</div>
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
        <h2>Før du indbetaler på din konto</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan kommer jeg i gang?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Opret en konto, gennemfør en kort verificering, og indbetal fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Det låser diagrammer, værktøjer og guidet onboarding op.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan er mine penge og data beskyttet?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi bruger SSL-kryptering, tofaktorgodkendelse og betroede betalingsudbydere under strenge datapolitikker.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvor lang tid tager udbetalinger?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Anmod om udbetalinger når som helst fra dashboardet. De fleste metoder afvikles på 1–3 hverdage med gebyrer vist på forhånd.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Skal jeg have tidligere handelserfaring?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nej. Guidede trin og AI-assisterede værktøjer hjælper dig med at lære i dit tempo, med support døgnet rundt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvilke markeder er tilgængelige?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptovalutaer, forex, globale aktier og råvarer — manuelt eller automatiseret — fra én grænseflade.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Overblik</p>
        <h2>Platformen i korte træk</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI-værktøjer</div>
          <div class="specs-value">Markedsanalyse med maskinlæringsindsigt</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Indbetaling</div>
          <div class="specs-value">Kort, bankoverførsler, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheder</div>
          <div class="specs-value">Web, tablet, mobil — fuldt responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AI-signalkvalitet</div>
          <div class="specs-value">Op til 85 % på understøttede strategier*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markeder</div>
          <div class="specs-value">Crypto, forex, aktier, råvarer</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Hurtig opsætning med guidet verificering</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Support 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt os</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Bedømt</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?>-scorekort</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> anmeldelser · Baseret på <strong>1,842</strong> bedømmelser
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Klar til en klarere måde at handle på?</h2>
        <p class="lead">Slut dig til handlere, der vil have live markeder, klare gebyrer og en platform, der forbliver nem at bruge.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Åbn konto</span>
          <span class="live-pill">Gratis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Opret din gratis konto';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

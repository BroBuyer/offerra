<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-handelsplattform');
$page_description = 'Handla krypto, forex och globala marknader med ' . SITE_NAME . '. Realtidsanalys, AI-stödda signaler och en plattform byggd för hastighet och översikt.';
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
        <p class="eyebrow">AI-handelsplattform</p>
        <h1>Handla smartare.<br><span class="text-accent">Reagera snabbare.</span></h1>
        <p class="lead">
          Den nya standarden för krypto och handel på flera marknader. Avancerad säkerhet, transparenta avgifter,
          AI-drivna insikter och ett gränssnitt som följer ditt tempo.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-säkrat
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7-support
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Snabb utförande
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Börja handla – min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Öppna ditt konto på 2 minuter';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Plattformsstatistik">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Tillgängliga valutor</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Verifierade användare</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Handelsvolym</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Stödda länder</div>
      </div>
    </div>
  </section>

  <!-- Plattform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Översikt handelsplattform">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Handelsplattform</p>
        <h2>Professionella diagram.<br>Optimalisert for mobil.</h2>
        <p class="lead">
          Ett tydligt gränssnitt inspirerat av moderna börser – realtids BTC/USDT-data, portföljförvaltning
          og handel med ett klikk. Designet for å gi tillit fra første innlogging.
        </p>
        <ul class="platform-points">
          <li>Realtids candlestick-diagram</li>
          <li>Portfölj og P/L på et øyeblikk</li>
          <li>Sikkert kontodashbord</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prova plattformen</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Varför <?= e(SITE_NAME) ?></p>
        <h2>Alt du trenger for trygg handel</h2>
        <p class="lead">Säkerhet, hastighet og intelligens – i og oversiktlig plattform for moderne tradere.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Säkerhet på banknivå</h3>
          <p>SSL-kryptering, 2FA og sikker kapitalforvaltning beskytter dataene og kapitalen din i hvert steg.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI-markedsignaler</h3>
          <p>Nøyaktige realtidsinnsikter hjelper deg å gjenkjenne muligheter raskere og ta bedre funderte beslutninger.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatisert handel</h3>
          <p>AI-supportde roboter jobber 24/7 med effektiv utførelse av strategier, mens du beholder kontrollen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Tillgång till flera marknader</h3>
          <p>Handla krypto, forex, aktier och råvaror i en enhetlig miljö.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Utførelse med lav latens</h3>
          <p>Optimalisert infrastruktur for stabil ordreutførelse, også under høy markedsvolatilitet.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Tydligt gränssnitt</h3>
          <p>Minimalistisk design reduserer distraksjoner, slik at du fokuserer på strategi i stedet for navigasjon.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Realtidsmarknader</p>
        <h2>Handla Bitcoin, Ethereum och fler tillgångar</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Realtidspriser, avancerade indikatorer och en professionell översikt över marknaderna som betyder något för dig.
        </p>
        <a href="sign.php" class="btn btn-primary">Gå till marknaderna</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Realtids marknadspriser">
        <div class="exchange-panel-header">
          <span>Marknader</span>
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
        <p class="eyebrow">Slik kommer du i gang</p>
        <h2>Fra registrering til din første handel på få minuten</h2>
        <p class="lead">En tydelig prosess uten unødvendig kompleksitet eller usäkerhet.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Skapa ditt konto</h3>
          <p>Registrer deg med opplysningene dine og få umiddelbar sikker tillgång til plattformen.</p>
        </article>
        <article class="step-card">
          <h3>Bekräfta e-posten din</h3>
          <p>Bekreft adressen din og lås opp det fullstendige handelsmiljøet.</p>
        </article>
        <article class="step-card">
          <h3>Sätt in medel</h3>
          <p>Sätt in minst <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via bankoverføring, kort eller e-lommebok.</p>
        </article>
        <article class="step-card">
          <h3>Sett opp strategien din</h3>
          <p>Velg risikonivå og preferanser – manuelt eller med AI-supportt automatisering.</p>
        </article>
        <article class="step-card">
          <h3>Börja handla</h3>
          <p>Gå inn i markedet med realtidsdiagrammer, verktøy og support når du trenger det.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Åpne og konto nå</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Insättning</p>
      <h2 style="margin-bottom: 0.75rem;">Sett inn med betalingsmetoder du allerede stoler på</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kort, e-plånböcker och banköverföringar – skyddade med SSL-kryptering.</p>
      <?php
      $payment_context = 'insättning och kontofinansiering';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Pålitlig infrastruktur</p>
        <h2>Bygget med ledende partnere i bransjen</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Recensioner -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recensioner</p>
        <h2>Hva tradere sier</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registreringen tok bare noen minutter, gebyrene er transparente og supporten svarer virkelig raskt. En smidig og pålitelig opplevelse – og plattform jeg gjerne forblir aktiv på.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Oberoende trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Jeg startet endelig med kryptohandel her – uten noen anger. Rask oppsett og alt forklart tydelig. Et sterkt valg, spesielt for nybegynnere.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kryptoentusiast</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabil og pålitelig. Å åpne en konto er enkelt, vilkårene er tydelige og teamet vet hva det gjør. En overraskende komfortabel handelsopplevelse.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital-asset operator</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trading føles ikke lenger komplisert. Enkel registrering, tydelige gebyrer og support når jeg trenger det. For og nybegynner gjør det og stor forskjell.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Privatinvestor</div>
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
        <h2>Vanliga frågor</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan kommer jeg i gang?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Skapa ditt konto med grunnleggende opplysninger, fullfør og kort verifisering og sett inn minst <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Du får tillgång till hela plattformen – realtidsdiagram, handelsverktyg och vägledd onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Är mina pengar och data säkra?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi använder SSL-kryptering, tvåfaktorsautentisering och säker behandling via pålitliga leverantörer. Dine personopplysninger behandles på alle nivåer i henhold til strenge säkerhetsstandarder.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Når kan jeg ta ut gevinsten min?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du kan når som helst be om uttak via dashbordet ditt. Behandling tar vanligvis 1 til 3 arbetsdagar. Gebyrer og behandlingstid er alltid synlige på forhånd – uten overraskelser.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Trenger jeg handelserfaring?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Absolutt ikke. Vägledd onboarding, tydelige veiledninger og AI-supportde verktøy hjelper deg å lære i ditt eget tempo. Enten du er nybegynner eller erfaren trader, er support tilgjengelig 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvilke markeder kan jeg handla på?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Få tillgång till krypto, forex, globala aktier och råvaror i ett gränssnitt. Realtidsdata, integrerade analyser och stöd för manuella och automatiserade strategier.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Plattform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Plattform</p>
        <h2>Viktigste funksjoner på et øyeblikk</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI trading-engine</div>
          <div class="specs-value">Avancerad marknadsanalys med maskininlärning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Finansieringsmetoder</div>
          <div class="specs-value">Betalkort, banköverföringar, PayPal, e-plånböcker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Tillgång per enhet</div>
          <div class="specs-value">Web, nettbrett og mobil – fullt responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signalnoggrannhet</div>
          <div class="specs-value">Opptil 85 % med supportde AI-strategier</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Marknader</div>
          <div class="specs-value">Krypto, forex, aktier, råvaror</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Snabb kontoinställning med vägledd verifiering</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Profesjonell 24/7-support – <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakta oss</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Pålitelig</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Betyg av <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recensioner · Baserat på <strong>1&nbsp;842</strong> betyg
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Er du klar til å handla på og plattform bygget for oversikt?</h2>
        <p class="lead">Bli med private tradere og bedrifter som trygt kjøper, selger og forvalter digitale eiendeler.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Skapa ditt konto gratis';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

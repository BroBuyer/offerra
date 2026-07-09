<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-handelsplatform');
$page_description = 'Handl krypto, forex og globale markeder med ' . SITE_NAME . '. Realtidsanalyse, AI-understøttede signaler og en platform bygget til hastighed og overblik.';
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
        <p class="eyebrow">AI-handelsplatform</p>
        <h1>Handl smartere.<br><span class="text-accent">Reager hurtigere.</span></h1>
        <p class="lead">
          Den nye standard for krypto og handel på tværs af markeder. Avanceret sikkerhed, gennemsigtige gebyrer,
          AI-drevne indsigter og en grænseflade, der følger dit tempo.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-sikret
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7-support
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hurtig udførelse
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Begynd at handle – min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Åbn en konto på 2 minutter';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Platformstatistik">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Tilgængelige valutaer</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Verificerede brugere</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Handelsvolumen</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Understøttede land</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Overblik handelsplatform">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Handelsplatform</p>
        <h2>Professionelle diagrammer.<br>Optimeret til mobil.</h2>
        <p class="lead">
          En tydelig grænseflade inspireret af moderne børser – realtids BTC/USDT-data, porteføljeforvaltning
          og handel med ét klik. Designet til at give tillid fra første login.
        </p>
        <ul class="platform-points">
          <li>Realtids candlestick-diagrammer</li>
          <li>Portefølje og P/L på et øjeblik</li>
          <li>Sikkert kontodashboard</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prøv platformen</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Hvorfor <?= e(SITE_NAME) ?></p>
        <h2>Alt hvad du har brug for til sikker handel</h2>
        <p class="lead">Sikkerhed, hastighed og intelligens – i en overskuelig platform for moderne tradere.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sikkerhed på bankniveau</h3>
          <p>SSL-kryptering, 2FA og sikker kapitalforvaltning beskytter dine data og kapital i hvert trin.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI-markedsignaler</h3>
          <p>Nøjagtige realtidsindsigter hjælper dig med at genkende muligheder hurtigere og træffe bedre informerede beslutninger.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatiseret handel</h3>
          <p>AI-understøttede robotter arbejder 24/7 med effektiv udførelse af strategier, mens du beholder kontrollen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Adgang til flere markeder</h3>
          <p>Handl krypto, forex, aktier og råvarer i ét samlet miljø.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Udførelse med lav latenstid</h3>
          <p>Optimeret infrastruktur til stabil ordreudførelse, også under høj markedsvolatilitet.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Tydelig grænseflade</h3>
          <p>Minimalistisk design reducerer distraktioner, så du fokuserer på strategi frem for navigation.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Realtidsmarkeder</p>
        <h2>Handl Bitcoin, Ethereum og flere aktiver</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Realtidspriser, avancerede indikatorer og professionelt overblik over markederne, der betyder noget for dig.
        </p>
        <a href="sign.php" class="btn btn-primary">Gå til markederne</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Realtids markedspriser">
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

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Sådan kommer du i gang</p>
        <h2>Fra registrering til din første handel på få minutter</h2>
        <p class="lead">En tydelig proces uden unødvendig kompleksitet eller usikkerhed.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Opret en konto</h3>
          <p>Registrer dig med dine oplysninger og få øjeblikkelig sikker adgang til platformen.</p>
        </article>
        <article class="step-card">
          <h3>Bekræft din e-mail</h3>
          <p>Bekræft din adresse og lås op for det fulde handelsmiljø.</p>
        </article>
        <article class="step-card">
          <h3>Indsæt midler</h3>
          <p>Indsæt mindst <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via bankoverførsel, kort eller e-pung.</p>
        </article>
        <article class="step-card">
          <h3>Opsæt din strategi</h3>
          <p>Vælg risikoniveau og præferencer – manuelt eller med AI-understøttet automatisering.</p>
        </article>
        <article class="step-card">
          <h3>Begynd at handle</h3>
          <p>Gå ind på markedet med realtidsdiagrammer, værktøjer og support, når du har brug for det.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Åbn en konto nu</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Indbetaling</p>
      <h2 style="margin-bottom: 0.75rem;">Indsæt med betalingsmetoder, du allerede stoler på</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kort, e-punge og bankoverførsler – beskyttet med SSL-kryptering.</p>
      <?php
      $payment_context = 'indbetaling og kontofinansiering';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Pålidelig infrastruktur</p>
        <h2>Bygget med førende partnere i branchen</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Anmeldelser -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Anmeldelser</p>
        <h2>Hvad tradere siger</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registreringen tog kun få minutter, gebyrerne er gennemsigtige, og supporten svarer virkelig hurtigt. En smidig og pålidelig oplevelse – en platform, jeg gerne forbliver aktiv på.</p>
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
          <p class="review-text">Jeg begyndte endelig at handle krypto her – uden nogen fortrydelse. Hurtig opsætning og alt forklaret tydeligt. Et stærkt valg, især for begyndere.</p>
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
          <p class="review-text">Stabil og pålidelig. At åbne en konto er nemt, vilkårene er tydelige, og teamet ved, hvad det laver. En overraskende komfortabel handelsoplevelse.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital-asset operatør</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trading føles ikke længere kompliceret. Enkel registrering, tydelige gebyrer og support, når jeg har brug for det. For en begynder gør det en stor forskel.</p>
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
        <h2>Ofte stillede spørgsmål</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan kommer jeg i gang?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Opret en konto med grundlæggende oplysninger, gennemfør en kort verificering og indsæt mindst <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Du får adgang til hele platformen – realtidsdiagrammer, handelsværktøjer og vejledt onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Er mine penge og data sikre?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi bruger SSL-kryptering, tofaktorgodkendelse og sikker behandling via pålidelige leverandører. Dine personoplysninger behandles på alle niveauer i henhold til strenge sikkerhedsstandarder.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvornår kan jeg hæve min gevinst?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du kan til enhver tid anmode om udbetaling via dit dashboard. Behandling tager normalt 1 til 3 hverdage. Gebyrer og behandlingstid er altid synlige på forhånd – uden overraskelser.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Har jeg brug for handelserfaring?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Absolut ikke. Vejledt onboarding, tydelige vejledninger og AI-understøttede værktøjer hjælper dig med at lære i dit eget tempo. Uanset om du er begynder eller erfaren trader, er support tilgængelig 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvilke markeder kan jeg handle på?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Få adgang til krypto, forex, globale aktier og råvarer i én grænseflade. Realtidsdata, integrerede analyser og support til manuelle og automatiserede strategier.
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
        <h2>Vigtigste funktioner på et øjeblik</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI trading-engine</div>
          <div class="specs-value">Avanceret markedsanalyse med maskinlæring</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Finansieringsmetoder</div>
          <div class="specs-value">Betalingskort, bankoverførsler, PayPal, e-punge</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Adgang pr. enhed</div>
          <div class="specs-value">Web, tablet og mobil – fuldt responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signalnøjagtighed</div>
          <div class="specs-value">Op til 85 % med understøttede AI-strategier</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markeder</div>
          <div class="specs-value">Krypto, forex, aktier, råvarer</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Hurtig kontoopsætning med vejledt verificering</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Støtte</div>
          <div class="specs-value">Profesjonell 24/7-support – <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt os</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Pålidelig</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Vurdering af <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> anmeldelser · Baseret på <strong>1&nbsp;842</strong> vurderinger
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Er du klar til at handle på en platform bygget til overblik?</h2>
        <p class="lead">Bliv en del af private tradere og virksomheder, der trygt køber, sælger og forvalter digitale aktiver.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Opret din konto gratis';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Handelsplatform');
$page_description = 'Handl krypto, forex og globale markeder med ' . SITE_NAME . '. Realtidsanalyse, AI-assisterede signaler og en platform designet til hastighed og overblik.';
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
        <p class="eyebrow">AI-assisteret handelsplatform</p>
        <h1>Handl smartere.<br><span class="text-accent">Reagér hurtigere.</span></h1>
        <p class="lead">
          En ny standard for krypto- og multi-markedshandel. Avanceret sikkerhed, gennemsigtige omkostninger,
          AI-drevne indsigter og en enkel brugerflade.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-beskyttet
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Support 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hurtig eksekvering
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Kom i gang — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Åbn din konto på 2 minutter';
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
        <div class="stat-label">Understøttede lande</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Forhåndsvisning af handelsplatform">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Handelsplatform</p>
        <h2>Professionelle grafer.<br>Optimeret til mobil.</h2>
        <p class="lead">
          En ren brugerflade som på en moderne børs — BTC/USDT-data i realtid, porteføljeoverblik
          og eksekvering med ét tryk. Skabt til at føles trygt fra første login.
        </p>
        <ul class="platform-points">
          <li>Live candlestick-grafer</li>
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
        <h2>Alt, du behøver for at handle med ro i maven</h2>
        <p class="lead">Sikkerhed, hastighed og indsigt — samlet i en enkel platform til moderne handlende.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sikkerhed på bankniveau</h3>
          <p>SSL-kryptering, 2FA og sikker håndtering af midler beskytter dine data og din kapital i alle trin.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI-markedssignaler</h3>
          <p>Præcise indsigter i realtid, der hjælper dig med at spotte muligheder og træffe hurtigere beslutninger.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatiseret handel</h3>
          <p>AI-assisterede bots kan arbejde 24/7 med at eksekvere strategier effektivt, mens du bevarer kontrollen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Adgang til flere markeder</h3>
          <p>Handl krypto, forex, aktier og råvarer i én og samme brugerflade.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Lav latenstid</h3>
          <p>Optimeret infrastruktur for stabil ordreeksekvering — også i perioder med høj aktivitet.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Enkel brugerflade</h3>
          <p>Et minimalistisk design, der reducerer støj: mere fokus på strategi, mindre på navigation.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Live markeder</p>
        <h2>Handl Bitcoin, Ethereum og meget mere</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Priser i realtid, avancerede indikatorer og et professionelt overblik over de markeder, du følger.
        </p>
        <a href="sign.php" class="btn btn-primary">Få adgang til markederne</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Markedspriser i realtid">
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
        <h2>Fra registrering til første handel på få minutter</h2>
        <p class="lead">En guidet proces — uden unødig kompleksitet.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Opret din konto</h3>
          <p>Registrér dig med dine oplysninger og få sikker adgang til platformen med det samme.</p>
        </article>
        <article class="step-card">
          <h3>Bekræft din e-mail</h3>
          <p>Bekræft din adresse for at få fuld adgang til platformen.</p>
        </article>
        <article class="step-card">
          <h3>Indsæt på din konto</h3>
          <p>Indsæt mindst <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via bankoverførsel, kort eller e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Indstil strategi</h3>
          <p>Vælg risikoniveau og præferencer — manuelt eller med AI-assisteret automatisering.</p>
        </article>
        <article class="step-card">
          <h3>Start med at handle</h3>
          <p>Gå i gang med live grafer, værktøjer og support, når du har brug for det.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Åbn konto nu</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Indbetaling</p>
      <h2 style="margin-bottom: 0.75rem;">Indsæt med metoder, du kender</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kort, e-wallets og bankoverførsel — beskyttet med SSL-kryptering.</p>
      <?php
      $payment_context = 'indbetaling og kontoopsætning';
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
        <h2>Bygget med stærke samarbejdspartnere</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Trust -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Tryghed</p>
        <h2>Fokus på sikkerhed og overblik</h2>
        <p class="lead">En neutral og professionel oplevelse — med klare vilkår, sikker adgang og support, når du har brug for det.</p>
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
              Opret en konto med dine basisoplysninger, gennemfør et kort verifikationstrin og indsæt mindst <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Derefter får du fuld adgang til platformen — live grafer, handelsværktøjer og guidet onboarding.
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
              Vi bruger SSL-kryptering, totrinsgodkendelse og sikre processer via pålidelige udbydere. Dine personoplysninger behandles efter strenge sikkerhedsprocedurer.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvornår kan jeg hæve?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du kan anmode om udbetaling når som helst fra dit område. Behandlingen tager typisk 1–3 hverdage. Gebyrer og tidsrammer vises altid på forhånd.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Skal jeg have erfaring med handel?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nej. Guidet onboarding, enkle vejledninger og AI-assisterede værktøjer hjælper dig i dit tempo. Uanset om du er ny eller erfaren, er support tilgængelig 24/7.
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
              Få adgang til kryptovaluta, forex, globale aktier og råvarer fra én brugerflade. Realtidsdata, integreret analyse og støtte til manuelle eller automatiserede strategier.
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
        <h2>Nøglefunktioner i overblik</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI-handelsmotor</div>
          <div class="specs-value">Avanceret markedsanalyse baseret på machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Indbetalingsmetoder</div>
          <div class="specs-value">Kort, bankoverførsel, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Adgang fra enheder</div>
          <div class="specs-value">Web, tablet og mobil — fuldt responsivt</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signalpræcision</div>
          <div class="specs-value">Designet til at give klare indikationer og kontekst</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markeder</div>
          <div class="specs-value">Krypto, forex, aktier, råvarer</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Hurtig opsætning med guidet verifikation</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Professionel support 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt os</a></div>
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
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">En platform skabt til at komme godt i gang</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Guidet onboarding, hjælpsom support og tydelige værktøjer, så du kan handle med mere ro.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Klar til at handle på en platform skabt til overblik?</h2>
        <p class="lead">Kom i gang med en enkel opsætning og et klart workflow — uden unødige trin.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Opret din gratis konto';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-handelsplattform');
$page_description = 'Handle krypto og andre markeder på ' . SITE_NAME . ' — sikker konto, klare priser, nyttige AI-verktøy og rask ordreutførelse.';
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
      <span class="tape-item"><strong>Hastighet</strong> under 40 ms</span>
      <span class="tape-item"><strong>Markeder</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-drevet handelsplattform</div>
        <h1>Handle krypto og andre markeder.<br><span class="text-accent">Kom i gang med <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          En enkel plattform for krypto- og multiaktiva-handel — sterk sikkerhet, klare priser,
          nyttig AI-innsikt og et grensesnitt som er lett å følge.
        </p>
        <div class="hero-badges" aria-label="Plattformhøydepunkter">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Sikker kryptert tilkobling (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Kundestøtte tilgjengelig 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Rask ordreutførelse
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start i dag — min. innskudd <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Opprett konto</span>
          <span class="live-pill">Sikker</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registrer deg på under 2 minutter';
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
        <h2>Se priser i sanntid. Start når du er klar.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Følg Bitcoin, Ethereum og andre store par i et klart markedspanel —
          åpne deretter kontoen, og plasser din første handel.
        </p>
        <a href="sign.php" class="btn btn-primary">Åpne markedstilgang</a>
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

  <section class="platform-section" id="platform" aria-label="Forhåndsvisning av handelsplattform">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Plattform</p>
        <h2>Klare diagrammer.<br>Klar til å handle.</h2>
        <p class="lead">
          En mobilvennlig handelsskjerm med live-diagrammer, gevinst &amp; tap
          og enkle ordrer med ett trykk — lett å forstå fra første innlogging.
        </p>
        <ul class="platform-points">
          <li>Live-diagrammer og markedspriser</li>
          <li>Porteføljesaldo med et blikk</li>
          <li>Sikkert kontopanel med 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Åpne plattformen</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funksjoner</p>
        <h2>Det du får med <?= e(SITE_NAME) ?></h2>
        <p class="lead">Sikkerhet, hastighet og klare verktøy — uten en overfylt skjerm.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Sterk kontosikkerhet</h3>
            <p>SSL-kryptering, tofaktorinnlogging og beskyttede pengestrømmer holder pengene og dataene dine tryggere.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI-markedsinnsikt</h3>
            <p>Nyttige signaler som peker på timing og trender — nyttige når prisene beveger seg raskt.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatisering når du vil</h3>
            <p>Valgfrie handelsboter kan følge reglene dine døgnet rundt — du beholder kontrollen.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Flere markeder på ett sted</h3>
            <p>Krypto, forex, aksjer og råvarer fra én enkel plattform.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Rask ordrehåndtering</h3>
            <p>Bygget for pålitelig ordreplassering også når markedene er travle.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Rent, enkelt oppsett</h3>
            <p>Mindre visuelt støy — mer plass til diagrammet og neste ordre.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Kom i gang</p>
        <h2>Fem steg til din første handel</h2>
        <p class="lead">En klar vei fra registrering til live markeder.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Åpne en konto</h3>
            <p>Send inn opplysningene dine, og få sikker tilgang til plattformen.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Bekreft e-post</h3>
            <p>Bekreft adressen for å låse opp hele handelsmiljøet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Legg til midler</h3>
            <p>Sett inn fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via kort, bankoverføring eller e-lommebok.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Velg hvordan du handler</h3>
            <p>Handle manuelt, eller bruk AI-assisterte verktøy med klare grenser du setter.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Handle live</h3>
            <p>Bruk diagrammer, verktøy og support døgnåpent når du trenger hjelp.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Start nå</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Betalinger</p>
      <h2 style="margin-bottom: 0.75rem;">Sett inn med metoder du allerede kjenner</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kort, lommebøker og bankoverføringer — kryptert ende til ende.</p>
      <?php
      $payment_context = 'kontofinansiering og innskudd';
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
        <h2>Hva tradere sier</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registreringen var rask, gebyrene klare, og supporten svarte. Føles som en plattform jeg kan bli med.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Uavhengig trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Prøvde krypto her etter å ha hoppet mellom apper — oppsettet var klart, og diagramlayouten gir endelig mening.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kryptotrader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ordrer går pålitelig gjennom, vilkårene er på vanlig språk, og teamet kjenner produktet. En solid plattform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Handler i digitale aktiva</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Som nybegynner trengte jeg klarhet mer enn fyrverkeri. Registrering, gebyrer og hjelp når jeg satt fast — det var nok.</p>
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
        <h2>Før du setter inn midler</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan kommer jeg i gang?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Opprett en konto, fullfør en kort verifisering, og sett inn fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Det låser opp diagrammer, verktøy og guidet onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan er pengene og dataene mine beskyttet?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi bruker SSL-kryptering, tofaktorautentisering og pålitelige betalingsleverandører under strenge datapolicies.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvor lang tid tar uttak?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Be om utbetalinger når som helst fra dashboardet. De fleste metoder avregnes på 1–3 virkedager med gebyrer vist på forhånd.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Trenger jeg tidligere handelserfaring?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nei. Guidede steg og AI-assisterte verktøy hjelper deg å lære i ditt tempo, med support døgnåpent.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvilke markeder er tilgjengelige?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptovalutaer, forex, globale aksjer og råvarer — manuelt eller automatisert — fra ett grensesnitt.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Oversikt</p>
        <h2>Plattformen i korte trekk</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI-verktøy</div>
          <div class="specs-value">Markedsanalyse med maskinlæringsinnsikt</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Innskudd</div>
          <div class="specs-value">Kort, bankoverføringer, PayPal, e-lommebøker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheter</div>
          <div class="specs-value">Nett, nettbrett, mobil — fullt responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AI-signalkvalitet</div>
          <div class="specs-value">Opptil 85 % på støttede strategier*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markeder</div>
          <div class="specs-value">Krypto, forex, aksjer, råvarer</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Rask oppsett med guidet verifisering</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Support 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt oss</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Vurdert</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?>-scorekort</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> anmeldelser · Basert på <strong>1,842</strong> vurderinger
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Klar for en klarere måte å handle på?</h2>
        <p class="lead">Bli med tradere som vil ha live markeder, klare gebyrer og en plattform som forblir lett å bruke.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Åpne konto</span>
          <span class="live-pill">Gratis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Opprett gratis konto';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

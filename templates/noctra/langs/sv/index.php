<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-handelsplattform');
$page_description = 'Handla krypto och andra marknader på ' . SITE_NAME . ' — säkert konto, tydliga priser, användbara AI-verktyg och snabb orderexekvering.';
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
      <span class="tape-item"><strong>Spreads</strong> från 0,1</span>
      <span class="tape-item"><strong>Hastighet</strong> under 40 ms</span>
      <span class="tape-item"><strong>Marknader</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-driven handelsplattform</div>
        <h1>Handla krypto och andra marknader.<br><span class="text-accent">Kom igång med <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          En enkel plattform för crypto- och handel med flera tillgångar — stark säkerhet, tydliga priser,
          hjälpsamma AI-insikter och ett gränssnitt som är lätt att följa.
        </p>
        <div class="hero-badges" aria-label="Plattformens höjdpunkter">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Säker krypterad anslutning (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Kundsupport tillgänglig 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Snabb orderexekvering
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Börja idag — min. insättning <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Skapa konto</span>
          <span class="live-pill">Säker</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registrera dig på under 2 minuter';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Live marknader</p>
        <h2>Se priser i realtid. Börja när du är redo.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Följ Bitcoin, Ethereum och andra stora par i en tydlig marknadspanel —
          öppna sedan ditt konto och lägg din första affär.
        </p>
        <a href="sign.php" class="btn btn-primary">Öppna marknadsåtkomst</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live marknadspriser">
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

  <section class="platform-section" id="platform" aria-label="Förhandsvisning av handelsplattform">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Plattform</p>
        <h2>Tydliga diagram.<br>Redo att handla.</h2>
        <p class="lead">
          En mobilvänlig handelsskärm med livediagram, vinst &amp; förlust
          och enkla order med ett tryck — lätt att förstå från första inloggningen.
        </p>
        <ul class="platform-points">
          <li>Livediagram och marknadspriser</li>
          <li>Portföljsaldo med en blick</li>
          <li>Säkert kontopanel med 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Öppna plattformen</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funktioner</p>
        <h2>Det du får med <?= e(SITE_NAME) ?></h2>
        <p class="lead">Säkerhet, hastighet och tydliga verktyg — utan en överfull skärm.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Stark kontosäkerhet</h3>
            <p>SSL-kryptering, tvåfaktorsinloggning och skyddade kapitalflöden håller dina pengar och data säkrare.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI-marknadsinsikter</h3>
            <p>Användbara signaler som pekar på timing och trender — användbara när priserna rör sig snabbt.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatisering när du vill</h3>
            <p>Valfria handelsbotar kan följa dina regler dygnet runt — du behåller kontrollen.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Flera marknader på ett ställe</h3>
            <p>Crypto, forex, aktier och råvaror från en enkel plattform.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Snabb orderhantering</h3>
            <p>Byggd för pålitlig orderläggning även när marknaderna är hektiska.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Rent, enkelt layout</h3>
            <p>Mindre visuellt brus — mer plats för diagrammet och din nästa order.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Kom igång</p>
        <h2>Fem steg till din första affär</h2>
        <p class="lead">En tydlig väg från registrering till live marknader.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Öppna ett konto</h3>
            <p>Skicka dina uppgifter och få säker åtkomst till plattformen.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Bekräfta e-post</h3>
            <p>Bekräfta din adress för att låsa upp hela handelsmiljön.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Lägg till medel</h3>
            <p>Sätt in från <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via kort, banköverföring eller e-plånbok.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Välj hur du handlar</h3>
            <p>Handla manuellt eller använd AI-assisterade verktyg med tydliga gränser du sätter.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Handla live</h3>
            <p>Använd diagram, verktyg och support dygnet runt när du behöver hjälp.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Börja nu</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Betalningar</p>
      <h2 style="margin-bottom: 0.75rem;">Sätt in med metoder du redan känner till</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kort, plånböcker och banköverföringar — krypterat end-to-end.</p>
      <?php
      $payment_context = 'kontofinansiering och insättningar';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktur</p>
        <h2>Infrastrukturpartners</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recensioner</p>
        <h2>Vad handlare säger</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registreringen gick snabbt, avgifterna var tydliga och supporten svarade. Känns som en plattform jag kan stanna kvar på.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Oberoende handlare</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Testade crypto här efter att ha hoppat mellan appar — uppsättningen var tydlig och diagramlayouten är äntligen begriplig.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto-handlare</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Order går pålitligt igenom, villkoren är på enkelt språk och teamet kan produkten. En stabil plattform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Handlare i digitala tillgångar</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Som nybörjare behövde jag tydlighet mer än fyrverkerier. Registrering, avgifter och hjälp när jag fastnade — det räckte.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Privat investerare</div>
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
        <h2>Innan du sätter in pengar på ditt konto</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur kommer jag igång?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Skapa ett konto, slutför en kort verifiering och sätt in från <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Det låser upp diagram, verktyg och guidad onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur skyddas mina pengar och data?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi använder SSL-kryptering, tvåfaktorsautentisering och betrodda betalningsleverantörer enligt strikta datapolicyer.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur lång tid tar uttag?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Begär uttag när som helst från kontopanelen. De flesta metoder slutförs på 1–3 vardagar med avgifter visade i förväg.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Behöver jag tidigare handelserfarenhet?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nej. Guidade steg och AI-assisterade verktyg hjälper dig att lära dig i din egen takt, med support dygnet runt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vilka marknader är tillgängliga?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptovalutor, forex, globala aktier och råvaror — manuellt eller automatiserat — från ett gränssnitt.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Översikt</p>
        <h2>Plattformen i korthet</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI-verktyg</div>
          <div class="specs-value">Marknadsanalys med maskininlärningsinsikter</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Insättning</div>
          <div class="specs-value">Kort, banköverföringar, PayPal, e-plånböcker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheter</div>
          <div class="specs-value">Webb, surfplatta, mobil — fullt responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AI-signalkvalitet</div>
          <div class="specs-value">Upp till 85 % på strategier som stöds*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Marknader</div>
          <div class="specs-value">Crypto, forex, aktier, råvaror</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Snabb setup med guidad verifiering</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Support 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakta oss</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Betygsatt</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?>-poängkort</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recensioner · Baserat på <strong>1,842</strong> betyg
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Redo för ett tydligare sätt att handla?</h2>
        <p class="lead">Gå med handlare som vill ha live marknader, tydliga avgifter och en plattform som förblir enkel att använda.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Öppna konto</span>
          <span class="live-pill">Gratis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Skapa ditt gratis konto';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

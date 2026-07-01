<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-handelsplatform');
$page_description = 'Handel in crypto, forex en wereldwijde markten met ' . SITE_NAME . '. Realtime analyse, AI-ondersteunde signalen en een platform gebouwd voor snelheid en overzicht.';
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
        <h1>Handel slimmer.<br><span class="text-accent">Reageer sneller.</span></h1>
        <p class="lead">
          De nieuwe standaard voor crypto en multi-market trading. Geavanceerde beveiliging, transparante kosten,
          AI-gedreven inzichten en een interface die uw tempo volgt.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-beveiligd
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 ondersteuning
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Snelle uitvoering
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Start met handelen — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Open een account in 2 minuten';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Platformstatistieken">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Beschikbare valuta</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Geverifieerde gebruikers</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Handelsvolume</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Ondersteunde landen</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Overzicht handelsplatform">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Handelsplatform</p>
        <h2>Professionele grafieken.<br>Geoptimaliseerd voor mobiel.</h2>
        <p class="lead">
          Een heldere interface geinspireerd op moderne exchanges - realtime BTC/USDT-data, portefeuillebeheer
          en handelen met een klik. Ontworpen om direct vertrouwen te geven vanaf uw eerste login.
        </p>
        <ul class="platform-points">
          <li>Realtime candlestick-grafieken</li>
          <li>Portefeuille en P/L in een oogopslag</li>
          <li>Beveiligd accountdashboard</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Probeer het platform</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Waarom <?= e(SITE_NAME) ?></p>
        <h2>Alles wat u nodig heeft voor zelfverzekerd handelen</h2>
        <p class="lead">Beveiliging, snelheid en intelligentie - in een overzichtelijk platform voor moderne traders.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Beveiliging op bankniveau</h3>
          <p>SSL-encryptie, 2FA en veilige fondsenbeheer beschermen uw data en kapitaal bij elke stap.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI-marktsignalen</h3>
          <p>Nauwkeurige realtime inzichten helpen u kansen sneller te herkennen en beter onderbouwde beslissingen te nemen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Geautomatiseerd handelen</h3>
          <p>AI-ondersteunde bots werken 24/7 aan efficiënte uitvoering van strategieen, terwijl u de controle behoudt.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Toegang tot meerdere markten</h3>
          <p>Handel in crypto, forex, aandelen en grondstoffen binnen een uniforme omgeving.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Uitvoering met lage latentie</h3>
          <p>Geoptimaliseerde infrastructuur voor stabiele orderuitvoering, ook tijdens hoge marktvolatiliteit.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Heldere interface</h3>
          <p>Minimalistisch ontwerp beperkt afleiding, zodat u zich op strategie richt in plaats van op navigatie.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Realtime markten</p>
        <h2>Handel in Bitcoin, Ethereum en meer activa</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Realtime prijzen, geavanceerde indicatoren en een professioneel overzicht van de markten die voor u tellen.
        </p>
        <a href="sign.php" class="btn btn-primary">Ga naar de markten</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Realtime marktprijzen">
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

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Hoe te starten</p>
        <h2>Van registratie naar uw eerste trade in enkele minuten</h2>
        <p class="lead">Een helder proces zonder onnodige complexiteit of onzekerheid.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Maak een account aan</h3>
          <p>Registreer met uw gegevens en krijg direct veilige toegang tot het platform.</p>
        </article>
        <article class="step-card">
          <h3>Verifieer uw e-mail</h3>
          <p>Bevestig uw adres en ontgrendel de volledige handelsomgeving.</p>
        </article>
        <article class="step-card">
          <h3>Stort middelen</h3>
          <p>Stort minimaal <?= MIN_DEPOSIT ?> <?= CURRENCY ?> via bankoverschrijving, kaart of e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Stel uw strategie in</h3>
          <p>Kies uw risiconiveau en voorkeuren - handmatig of met AI-ondersteunde automatisering.</p>
        </article>
        <article class="step-card">
          <h3>Start met handelen</h3>
          <p>Ga de markt op met realtime grafieken, tools en ondersteuning wanneer u die nodig heeft.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Open nu een account</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Stortingen</p>
      <h2 style="margin-bottom: 0.75rem;">Stort met betaalmethoden die u al vertrouwt</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kaarten, e-wallets en bankoverschrijvingen - beschermd met SSL-encryptie.</p>
      <?php
      $payment_context = 'stortingen en accountfinanciering';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Vertrouwde infrastructuur</p>
        <h2>Gebouwd met toonaangevende partners in de sector</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Reviews</p>
        <h2>Wat traders zeggen</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registreren duurde maar enkele minuten, de kosten zijn transparant en de support reageert echt snel. Een soepele en betrouwbare ervaring - een platform waarop ik graag actief blijf.</p>
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
          <p class="review-text">Ik ben hier eindelijk met crypto trading gestart - zonder enige spijt. Snelle setup en alles duidelijk uitgelegd. Een sterke keuze, vooral voor beginners.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto-enthousiast</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabiel en betrouwbaar. Een account openen is eenvoudig, de voorwaarden zijn duidelijk en het team weet wat het doet. Een verrassend comfortabele handelservaring.</p>
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
          <p class="review-text">Handelen voelt niet langer ingewikkeld. Eenvoudige registratie, heldere kosten en ondersteuning wanneer ik die nodig heb. Voor een beginner maakt dat een groot verschil.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Particuliere investeerder</div>
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
        <h2>Veelgestelde vragen</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe kan ik beginnen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Maak een account aan met basisgegevens, rond een korte verificatie af en stort minimaal <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. U krijgt toegang tot het volledige platform - realtime grafieken, trading tools en begeleide onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Zijn mijn geld en gegevens veilig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We gebruiken SSL-encryptie, tweestapsverificatie en veilige verwerking via vertrouwde providers. Uw persoonsgegevens worden op alle niveaus verwerkt volgens strikte beveiligingsnormen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wanneer kan ik mijn winst opnemen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              U kunt op elk moment een opname aanvragen via uw dashboard. Verwerking duurt meestal 1 tot 3 werkdagen. Kosten en doorlooptijden zijn altijd vooraf zichtbaar - zonder verrassingen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Heb ik tradingervaring nodig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Helemaal niet. Begeleide onboarding, duidelijke handleidingen en AI-ondersteunde tools helpen u leren in uw eigen tempo. Of u nu beginner bent of ervaren trader, ondersteuning is 24/7 beschikbaar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Op welke markten kan ik handelen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Krijg toegang tot crypto, forex, wereldwijde aandelen en grondstoffen binnen een interface. Realtime data, geintegreerde analyses en ondersteuning voor handmatige en geautomatiseerde strategieen.
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
        <h2>Belangrijkste mogelijkheden in een oogopslag</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI trading-engine</div>
          <div class="specs-value">Geavanceerde marktanalyse met machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financieringsmethoden</div>
          <div class="specs-value">Betaalkaarten, bankoverschrijvingen, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Toegang per apparaat</div>
          <div class="specs-value">Web, tablet en mobiel - volledig responsief</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signaalnauwkeurigheid</div>
          <div class="specs-value">Tot 85% bij ondersteunde AI-strategieen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markten</div>
          <div class="specs-value">Crypto, forex, aandelen, grondstoffen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Snelle accountsetup met begeleide verificatie</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Ondersteuning</div>
          <div class="specs-value">Professionele 24/7 support - <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Neem contact op</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Vertrouwd</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Beoordeling van <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> reviews · Gebaseerd op <strong>1&nbsp;842</strong> beoordelingen
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Bent u klaar om te handelen op een platform gebouwd voor overzicht?</h2>
        <p class="lead">Sluit u aan bij particuliere traders en bedrijven die met vertrouwen digitale activa kopen, verkopen en beheren.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Maak gratis uw account aan';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

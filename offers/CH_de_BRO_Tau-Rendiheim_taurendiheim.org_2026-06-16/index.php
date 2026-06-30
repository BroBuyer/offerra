<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Trading-Plattform');
$page_description = 'Handeln Sie Krypto, Forex und globale Märkte mit ' . SITE_NAME . '. Echtzeitanalysen, KI-gestützte Signale und eine Plattform für Geschwindigkeit und Übersichtlichkeit.';
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
        <p class="eyebrow">KI-gestützte Trading-Plattform</p>
        <h1>Handeln Sie intelligenter.<br><span class="text-accent">Reagieren Sie schneller.</span></h1>
        <p class="lead">
          Ein neuer Standard für Krypto- und Multi-Markt-Trading. Erweiterte Sicherheit, transparente Gebühren,
          KI-gestützte Einblicke und eine schlanke Oberfläche.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-geschützt
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Support rund um die Uhr
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Schnelle Ausführung
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Jetzt handeln — mind. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Eröffnen Sie Ihr Konto in 2 Minuten';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Plattformstatistiken">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Verfügbare Währungen</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Verifizierte Nutzer</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Handelsvolumen</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Unterstützte Länder</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Vorschau der Trading-Plattform">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Trading-Plattform</p>
        <h2>Professionelle Charts.<br>Optimiert für Mobilgeräte.</h2>
        <p class="lead">
          Eine klare Oberfläche wie bei einer modernen Börse — Echtzeitdaten BTC/USDT, Portfolio-Überblick
          und Ausführung per Fingertipp. Entwickelt, damit Sie sich vom ersten Login an sicher fühlen.
        </p>
        <ul class="platform-points">
          <li>Echtzeit-Candlestick-Charts</li>
          <li>Portfolio und P/L auf einen Blick</li>
          <li>Sicheres Konto-Dashboard</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Plattform testen</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Warum <?= e(SITE_NAME) ?></p>
        <h2>Alles, was Sie für sicheres Trading brauchen</h2>
        <p class="lead">Sicherheit, Geschwindigkeit und Intelligenz — vereint auf einer schlanken Plattform für moderne Trader.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sicherheit auf Bankniveau</h3>
          <p>SSL-Verschlüsselung, 2FA und sichere Mittelverwaltung schützen Ihre Daten und Ihr Kapital in jedem Schritt.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>KI-Marktsignale</h3>
          <p>Präzise Echtzeit-Einblicke, um Chancen zu erkennen und schnellere, fundiertere Entscheidungen zu treffen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatisiertes Trading</h3>
          <p>KI-gestützte Bots arbeiten rund um die Uhr, um Strategien effizient auszuführen — Sie behalten stets die Kontrolle.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Multi-Markt-Zugang</h3>
          <p>Handeln Sie Krypto, Forex, Aktien und Rohstoffe über eine einzige Oberfläche.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Niedrige Latenz bei der Ausführung</h3>
          <p>Optimierte Infrastruktur für stabile Orderausführung auch in Spitzenzeiten.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Übersichtliche Oberfläche</h3>
          <p>Schlankes Design, das Ablenkungen reduziert: mehr Fokus auf die Strategie, weniger auf die Navigation.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Live-Märkte</p>
        <h2>Handeln Sie Bitcoin, Ethereum und mehr</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Echtzeitpreise, erweiterte Indikatoren und eine professionelle Marktansicht für die Märkte, die Sie interessieren.
        </p>
        <a href="sign.php" class="btn btn-primary">Märkte öffnen</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Echtzeit-Marktpreise">
        <div class="exchange-panel-header">
          <span>Märkte</span>
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
        <p class="eyebrow">So starten Sie</p>
        <h2>Von der Registrierung bis zum ersten Trade in wenigen Minuten</h2>
        <p class="lead">Ein geführter Ablauf — ohne Komplexität, ohne Unsicherheit.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Konto eröffnen</h3>
          <p>Registrieren Sie sich mit Ihren Daten und erhalten Sie sofortigen, sicheren Zugang zur Plattform.</p>
        </article>
        <article class="step-card">
          <h3>E-Mail bestätigen</h3>
          <p>Bestätigen Sie Ihre Adresse, um den vollen Plattformzugang freizuschalten.</p>
        </article>
        <article class="step-card">
          <h3>Konto finanzieren</h3>
          <p>Zahlen Sie mindestens <?= MIN_DEPOSIT ?> <?= CURRENCY ?> per Überweisung, Karte oder E-Wallet ein.</p>
        </article>
        <article class="step-card">
          <h3>Strategie festlegen</h3>
          <p>Legen Sie Risikoniveau und Präferenzen fest — manuell oder mit KI-Unterstützung.</p>
        </article>
        <article class="step-card">
          <h3>Mit dem Trading beginnen</h3>
          <p>Steigen Sie mit Live-Charts, Tools und Support ein, wenn Sie ihn brauchen.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Jetzt Konto eröffnen</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Einzahlungen</p>
      <h2 style="margin-bottom: 0.75rem;">Einzahlen mit Methoden, die Sie kennen</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karten, E-Wallets und Überweisungen — geschützt durch SSL-Verschlüsselung.</p>
      <?php
      $payment_context = 'Einzahlungen und Kontofinanzierung';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Zuverlässige Infrastruktur</p>
        <h2>Mit Partnern auf Industrieniveau</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Erfahrungsberichte</p>
        <h2>Was Trader sagen</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Die Registrierung war sehr schnell, die Gebühren transparent und der Support antwortet wirklich. Eine reibungslose und zuverlässige Erfahrung — eine Plattform, die ich gerne weiter nutze.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Unabhängiger Trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ich habe hier endlich Krypto-Trading ausprobiert — keine Reue. Schnelle Einrichtung und klare Erklärungen. Eine gute Wahl, besonders für Einsteiger.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Krypto-Enthusiastin</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabil und zuverlässig. Einfache Kontoeröffnung, klare Bedingungen und ein kompetentes Team. Eine überraschend komfortable Trading-Erfahrung.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital-Asset-Händler</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trading fühlt sich nicht mehr kompliziert an. Einfache Registrierung, klare Gebühren und Support, wenn man ihn braucht. Als Einsteiger macht das wirklich einen Unterschied.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Privatanlegerin</div>
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
        <h2>Häufige Fragen</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie kann ich starten?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Eröffnen Sie ein Konto mit Ihren Basisdaten, schliessen Sie einen kurzen Verifizierungsschritt ab und zahlen Sie mindestens <?= MIN_DEPOSIT ?> <?= CURRENCY ?> ein. Sie erhalten vollen Zugang zur Plattform — Live-Charts, Trading-Tools und geführtes Onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Sind mein Geld und meine Daten sicher?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Wir verwenden SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sichere Prozesse über vertrauenswürdige Anbieter. Ihre persönlichen Daten werden auf jeder Ebene nach strengen Sicherheitsrichtlinien behandelt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wann kann ich Gewinne abheben?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Fordern Sie Auszahlungen jederzeit über Ihr persönliches Konto an. Die Bearbeitung dauert in der Regel 1–3 Werktage. Gebühren und Zeitrahmen werden immer im Voraus angezeigt — ohne Überraschungen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Benötige ich Trading-Erfahrung?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nein. Geführtes Onboarding, einfache Tutorials und KI-gestützte Tools helfen Ihnen, in Ihrem eigenen Tempo zu lernen. Ob Einsteiger oder erfahrener Trader — Support ist rund um die Uhr verfügbar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            An welchen Märkten kann ich handeln?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Greifen Sie auf Kryptowährungen, Forex, globale Aktien und Rohstoffe über eine einzige Oberfläche zu. Echtzeitdaten, integrierte Analysen und Unterstützung für manuelle oder automatisierte Strategien.
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
        <p class="eyebrow">Plattform</p>
        <h2>Hauptfunktionen auf einen Blick</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">KI-Trading-Engine</div>
          <div class="specs-value">Erweiterte Marktanalyse auf Basis von Machine Learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Einzahlungsmethoden</div>
          <div class="specs-value">Karten, Überweisungen, PayPal, E-Wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Gerätezugang</div>
          <div class="specs-value">Web, Tablet und Mobil — vollständig responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signalgenauigkeit</div>
          <div class="specs-value">Bis zu 85 % bei unterstützten KI-Strategien</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Märkte</div>
          <div class="specs-value">Krypto, Forex, Aktien, Rohstoffe</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Schnelle Einrichtung mit geführter Verifizierung</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Professioneller Support rund um die Uhr — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Vertrauenswürdig</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Eine Plattform für Einsteiger</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Geführtes Onboarding, persönlicher Support und klare Tools für mehr Sicherheit beim Trading.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Bereit zum Trading auf einer Plattform für Klarheit?</h2>
        <p class="lead">Schliessen Sie sich privaten Tradern und Unternehmen an, die digitale Assets mit Vertrauen kaufen, verkaufen und verwalten.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Eröffnen Sie Ihr kostenloses Konto';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

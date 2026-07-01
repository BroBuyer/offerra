<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('KI-Handelsplattform');
$page_description = 'Handeln Sie Kryptowährungen, Forex und globale Märkte mit ' . SITE_NAME . '. Echtzeitanalyse, KI-gestützte Signale und eine Plattform, die auf Geschwindigkeit und Übersichtlichkeit ausgelegt ist.';
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
        <p class="eyebrow">KI-Handelsplattform</p>
        <h1>Handeln Sie smarter.<br><span class="text-accent">Reagieren Sie schneller.</span></h1>
        <p class="lead">
          Der neue Standard für Krypto- und Multi-Markt-Trading. Fortschrittliche Sicherheit, transparente Gebühren,
          KI-gestützte Insights und eine Oberfläche, die Ihr Tempo mitgeht.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-gesichert
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 Support
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
        $form_heading = 'Konto in 2 Minuten eröffnen';
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
  <section class="platform-section" id="platform" aria-label="Übersicht der Handelsplattform">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Handelsplattform</p>
        <h2>Professionelle Charts.<br>Für Mobile optimiert.</h2>
        <p class="lead">
          Klare, von modernen Börsen inspirierte Oberfläche — BTC/USDT-Daten in Echtzeit, Portfolioverwaltung
          und One-Click-Trading. Entwickelt, um Ihnen vom ersten Login an Sicherheit zu geben.
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
        <h2>Alles, was Sie für souveränes Trading brauchen</h2>
        <p class="lead">Sicherheit, Geschwindigkeit und Intelligenz — in einer übersichtlichen Plattform für moderne Trader.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sicherheit auf Bankniveau</h3>
          <p>SSL-Verschlüsselung, 2FA und sichere Kapitalverwaltung schützen Ihre Daten und Ihr Kapital in jedem Schritt.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>KI-Marktsignale</h3>
          <p>Präzise Echtzeit-Insights helfen Ihnen, Chancen zu erkennen und schneller fundierte Entscheidungen zu treffen.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatisiertes Trading</h3>
          <p>KI-gestützte Bots arbeiten rund um die Uhr an der effizienten Ausführung Ihrer Strategien, während Sie die Kontrolle behalten.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Zugang zu mehreren Märkten</h3>
          <p>Handeln Sie Kryptowährungen, Forex, Aktien und Rohstoffe in einer einheitlichen Umgebung.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Niedrige Latenz bei Ausführung</h3>
          <p>Optimierte Infrastruktur für stabile Orderausführung auch bei hoher Marktvolatilität.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Klare Benutzeroberfläche</h3>
          <p>Das minimalistische Design reduziert Ablenkungen, damit Sie sich auf Strategie statt Navigation konzentrieren.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Märkte in Echtzeit</p>
        <h2>Handeln Sie Bitcoin, Ethereum und weitere Assets</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Echtzeitpreise, fortschrittliche Indikatoren und professionelle Marktübersichten für die Märkte, die für Sie relevant sind.
        </p>
        <a href="sign.php" class="btn btn-primary">Märkte betreten</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Marktpreise in Echtzeit">
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
        <h2>Von der Registrierung zum ersten Trade in wenigen Minuten</h2>
        <p class="lead">Ein klarer Prozess ohne unnötige Komplexität oder Unsicherheit.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Konto erstellen</h3>
          <p>Registrieren Sie sich mit Ihren Daten und erhalten Sie sofort sicheren Zugang zur Plattform.</p>
        </article>
        <article class="step-card">
          <h3>E-Mail bestätigen</h3>
          <p>Bestätigen Sie Ihre Adresse und schalten Sie die vollständige Handelsumgebung frei.</p>
        </article>
        <article class="step-card">
          <h3>Kapital einzahlen</h3>
          <p>Zahlen Sie mindestens <?= MIN_DEPOSIT ?> <?= CURRENCY ?> per Banküberweisung, Karte oder E-Wallet ein.</p>
        </article>
        <article class="step-card">
          <h3>Strategie festlegen</h3>
          <p>Wählen Sie Ihr Risikoniveau und Ihre Präferenzen — manuell oder mit KI-gestützter Automatisierung.</p>
        </article>
        <article class="step-card">
          <h3>Handel starten</h3>
          <p>Starten Sie mit Echtzeit-Charts, starken Tools und Support genau dann, wenn Sie ihn brauchen.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Konto jetzt eröffnen</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Einzahlungen</p>
      <h2 style="margin-bottom: 0.75rem;">Zahlen Sie mit Methoden ein, denen Sie bereits vertrauen</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karten, E-Wallets und Banküberweisungen — geschützt durch SSL-Verschlüsselung.</p>
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
        <p class="eyebrow">Vertrauenswürdige Infrastruktur</p>
        <h2>Aufgebaut mit führenden Partnern der Branche</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Bewertungen</p>
        <h2>Was Trader sagen</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Die Registrierung dauerte nur wenige Minuten, die Gebühren sind transparent und der Support reagiert wirklich. Eine reibungslose und verlässliche Erfahrung — eine Plattform, mit der ich gerne weiterarbeite.</p>
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
          <p class="review-text">Hier habe ich endlich Krypto-Trading ausprobiert — ohne einen Moment zu bereuen. Schnelles Setup und alles klar erklärt. Eine starke Wahl, besonders für den Einstieg.</p>
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
          <p class="review-text">Stabil und zuverlässig. Die Kontoeröffnung ist einfach, die Bedingungen sind klar und das Team weiß, was es tut. Eine überraschend komfortable Trading-Erfahrung.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digital-Asset-Operator</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trading wirkt nicht mehr so kompliziert. Einfache Registrierung, klare Gebühren und Support, wenn ich ihn brauche. Für Einsteiger macht das einen großen Unterschied.</p>
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
        <h2>Häufig gestellte Fragen</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie kann ich starten?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Erstellen Sie ein Konto mit Ihren Basisdaten, schließen Sie eine kurze Verifizierung ab und zahlen Sie mindestens <?= MIN_DEPOSIT ?> <?= CURRENCY ?> ein. Sie erhalten Zugriff auf die gesamte Plattform — Echtzeit-Charts, Trading-Tools und geführtes Onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Sind meine Gelder und Daten sicher?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Wir verwenden SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sichere Abwicklung über vertrauenswürdige Anbieter. Ihre personenbezogenen Daten verarbeiten wir auf allen Ebenen nach strengen Sicherheitsstandards.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wann kann ich meine Gewinne auszahlen lassen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sie können Auszahlungen jederzeit über Ihr Dashboard beantragen. Die Bearbeitung dauert in der Regel 1 bis 3 Werktage. Gebühren und Zeitrahmen werden immer vorab angezeigt — ohne Überraschungen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Brauche ich Handelserfahrung?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gar nicht. Geführtes Onboarding, einfache Anleitungen und KI-gestützte Tools helfen Ihnen, in Ihrem eigenen Tempo zu lernen. Ob Einsteiger oder erfahrener Trader — der Support ist rund um die Uhr erreichbar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Auf welchen Märkten kann ich handeln?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Erhalten Sie Zugang zu Kryptowährungen, Forex, globalen Aktien und Rohstoffen in einer Oberfläche. Echtzeitdaten, integrierte Analysen und Unterstützung für manuelle wie automatisierte Strategien.
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
        <h2>Zentrale Funktionen auf einen Blick</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">KI-Trading-Engine</div>
          <div class="specs-value">Fortgeschrittene Marktanalyse mit maschinellem Lernen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Finanzierungsmethoden</div>
          <div class="specs-value">Zahlungskarten, Banküberweisungen, PayPal, E-Wallets</div>
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
          <div class="specs-value">Schnelles Konto-Setup mit geführter Verifizierung</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Professioneller 24/7 Support — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktieren Sie uns</a></div>
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
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Bewertung von <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> Rezensionen · Basierend auf <strong>1&nbsp;842</strong> Bewertungen
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Sind Sie bereit, auf einer Plattform zu handeln, die auf Klarheit ausgelegt ist?</h2>
        <p class="lead">Schließen Sie sich privaten Tradern und Unternehmen an, die digitale Assets sicher kaufen, verkaufen und verwalten.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Erstellen Sie Ihr kostenloses Konto';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

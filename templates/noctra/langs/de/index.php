<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('KI-Trading-Plattform');
$page_description = 'Handeln Sie Krypto und weitere Märkte auf ' . SITE_NAME . ' — sicheres Konto, klare Preise, hilfreiche KI-Tools und schnelle Orderausführung.';
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
      <span class="tape-item"><strong>Spreads</strong> ab 0,1</span>
      <span class="tape-item"><strong>Geschwindigkeit</strong> unter 40 ms</span>
      <span class="tape-item"><strong>Märkte</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> KI-gestützte Trading-Plattform</div>
        <h1>Handeln Sie Krypto und weitere Märkte.<br><span class="text-accent">Starten Sie mit <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Eine einfache Plattform für Krypto- und Multi-Asset-Trading — starke Sicherheit, klare Preise,
          hilfreiche KI-Analysen und eine Oberfläche, die leicht zu verstehen bleibt.
        </p>
        <div class="hero-badges" aria-label="Plattform-Highlights">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Sichere verschlüsselte Verbindung (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Kundensupport rund um die Uhr
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Schnelle Orderausführung
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Heute starten — Min. Einzahlung <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Konto erstellen</span>
          <span class="live-pill">Sicher</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'In unter 2 Minuten anmelden';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Live-Märkte</p>
        <h2>Kurse in Echtzeit sehen. Starten, wenn Sie bereit sind.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Folgen Sie Bitcoin, Ethereum und anderen wichtigen Paaren in einem klaren Marktpanel —
          dann eröffnen Sie Ihr Konto und platzieren Ihren ersten Trade.
        </p>
        <a href="sign.php" class="btn btn-primary">Marktzugang öffnen</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live-Marktpreise">
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

  <section class="platform-section" id="platform" aria-label="Vorschau der Trading-Plattform">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Plattform</p>
        <h2>Klare Charts.<br>Bereit zum Handeln.</h2>
        <p class="lead">
          Eine mobilfreundliche Trading-Oberfläche mit Live-Charts, Gewinn &amp; Verlust
          und einfachen Ein-Tipp-Orders — leicht verständlich ab dem ersten Login.
        </p>
        <ul class="platform-points">
          <li>Live-Charts und Marktkurse</li>
          <li>Portfoliostand auf einen Blick</li>
          <li>Sicheres Kontopanel mit 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Plattform öffnen</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funktionen</p>
        <h2>Das bekommen Sie mit <?= e(SITE_NAME) ?></h2>
        <p class="lead">Sicherheit, Tempo und klare Tools — ohne überladene Oberfläche.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Starke Kontosicherheit</h3>
            <p>SSL-Verschlüsselung, Zwei-Faktor-Login und geschützte Geldflüsse halten Ihr Geld und Ihre Daten sicherer.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>KI-Marktanalysen</h3>
            <p>Hilfreiche Signale zu Timing und Trends — nützlich, wenn Kurse schnell bewegen.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatisierung nach Wunsch</h3>
            <p>Optionale Trading-Bots können Ihre Regeln rund um die Uhr befolgen — Sie behalten die Kontrolle.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Mehrere Märkte an einem Ort</h3>
            <p>Krypto, Devisen, Aktien und Rohstoffe auf einer einfachen Plattform.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Schnelle Orderverarbeitung</h3>
            <p>Gebaut für zuverlässige Orderplatzierung — auch wenn die Märkte hektisch sind.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Klare, einfache Oberfläche</h3>
            <p>Weniger visuelle Ablenkung — mehr Raum für Chart und nächste Order.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Erste Schritte</p>
        <h2>Fünf Schritte zu Ihrem ersten Trade</h2>
        <p class="lead">Ein klarer Weg von der Anmeldung zu den Live-Märkten.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Konto eröffnen</h3>
            <p>Senden Sie Ihre Daten und erhalten Sie sicheren Zugang zur Plattform.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>E-Mail bestätigen</h3>
            <p>Verifizieren Sie Ihre Adresse, um die volle Trading-Umgebung freizuschalten.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Guthaben einzahlen</h3>
            <p>Zahlen Sie ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?> per Karte, Banküberweisung oder E-Wallet ein.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Handelsweise wählen</h3>
            <p>Handeln Sie manuell oder nutzen Sie KI-gestützte Tools mit klaren Limits, die Sie setzen.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Live handeln</h3>
            <p>Nutzen Sie Charts, Tools und Support rund um die Uhr, wann immer Sie Hilfe brauchen.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Jetzt starten</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Zahlungen</p>
      <h2 style="margin-bottom: 0.75rem;">Einzahlen mit Methoden, die Sie kennen</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karten, Wallets und Überweisungen — durchgängig verschlüsselt.</p>
      <?php
      $payment_context = 'Kontoaufladung und Einzahlungen';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktur</p>
        <h2>Infrastrukturpartner</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Bewertungen</p>
        <h2>Was Trader sagen</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Anmeldung war schnell, Gebühren klar, Support hat geantwortet. Fühlt sich wie eine Plattform an, bei der ich bleibe.</p>
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
          <p class="review-text">Habe hier Krypto ausprobiert, nachdem ich zwischen Apps gewechselt habe — Einrichtung klar und das Chart-Layout ergibt endlich Sinn.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Krypto-Traderin</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Orders gehen zuverlässig durch, Bedingungen in klarer Sprache, und das Team kennt das Produkt. Eine solide Plattform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Händler digitaler Assets</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Als Anfänger brauchte ich Klarheit statt Feuerwerk. Anmeldung, Gebühren und Hilfe bei Problemen — das hat gereicht.</p>
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

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Bevor Sie Ihr Konto aufladen</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie starte ich?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Erstellen Sie ein Konto, schließen Sie eine kurze Verifizierung ab und zahlen Sie ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?> ein.
              Danach freigeschaltet: Charts, Tools und geführte Einführung.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie sind mein Geld und meine Daten geschützt?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Wir nutzen SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und vertrauenswürdige Zahlungsanbieter unter strengen Datenrichtlinien.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie lange dauern Auszahlungen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Fordern Sie Auszahlungen jederzeit im Dashboard an. Die meisten Methoden werden in 1–3 Werktagen abgewickelt — Gebühren im Voraus sichtbar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Brauche ich Trading-Erfahrung?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nein. Geführte Schritte und KI-gestützte Tools helfen Ihnen, in Ihrem Tempo zu lernen — Support rund um die Uhr.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Welche Märkte sind verfügbar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptowährungen, Devisen, globale Aktien und Rohstoffe — manuell oder automatisiert — über eine Oberfläche.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Überblick</p>
        <h2>Plattform auf einen Blick</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">KI-Tools</div>
          <div class="specs-value">Marktanalyse mit Machine-Learning-Einblicken</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Einzahlung</div>
          <div class="specs-value">Karten, Banküberweisungen, PayPal, E-Wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Geräte</div>
          <div class="specs-value">Web, Tablet, Mobil — voll responsiv</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">KI-Signalqualität</div>
          <div class="specs-value">Bis zu 85 % bei unterstützten Strategien*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Märkte</div>
          <div class="specs-value">Krypto, Devisen, Aktien, Rohstoffe</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Schnelle Einrichtung mit geführter Verifizierung</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">Support 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Bewertet</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> Scorecard</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> Bewertungen · Basierend auf <strong>1.842</strong> Ratings
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Bereit für eine klarere Art zu handeln?</h2>
        <p class="lead">Schließen Sie sich Tradern an, die Live-Märkte, klare Gebühren und eine leicht bedienbare Plattform wollen.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Konto eröffnen</span>
          <span class="live-pill">Kostenlos</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Kostenloses Konto erstellen';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title("Motore di operazioni con AI premium per i mercati globali");
$page_description = SITE_NAME . ' — un modo più intelligente e più pulito di accedere ai mercati globali con strumenti AI strutturati per crypto, forex e azioni.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: un modo più intelligente e più pulito per accedere ai <span class="text-accent">mercati globali</span></h1>

          <p class="hero-desc">
            Ti avvicini alle operazioni? <?= e(SITE_NAME) ?> offre strumenti AI strutturati, pensati per rendere il tuo percorso trasparente.
            Scopri crypto, forex e azioni senza il caos tecnico.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Inizia a fare operazioni — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Scopri le funzioni</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Protetto dal protocollo SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Percorso guidato per principianti
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Crea il tuo account</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Richiede meno di 3 minuti. Nessuna tassa di configurazione.';
            $form_submit = 'Crea un account gratuito';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">Asset negoziabili</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Veloce</div>
            <div class="stat-label">Configurazione account</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Assistenza</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Sicuro</div>
            <div class="stat-label">Elaborazione dati</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Spazio di lavoro intelligente</div>

          <h2 class="section-title">
            Grafici professionali.<br>
            <span class="text-accent">Creati per decisioni semplici.</span>
          </h2>

          <p class="section-subtitle">
            Guarda i prezzi in tempo reale e agisci da un’interfaccia pulita, progettata per ridurre il carico cognitivo e le operazioni emotive.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Grafici arricchiti dall’AI in tempo reale
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sistema di esecuzione del mercato con un solo tap
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Vedi le funzioni della piattaforma</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Esecuzione istantanea disponibile</h4>
                <p>
                  Per instradare questo ordine immediatamente e acquisire il livello di prezzo attivo, attiva il tuo terminale sicuro <?= e(SITE_NAME) ?>.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Crea un account sicuro
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Pannello BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                IN DIRETTA
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0,15% Oggi
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Vendi</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Compra</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Funzionalita della piattaforma</div>
        <h2 class="section-title">Tutto cio di cui hai bisogno per fare operazioni con fiducia su <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Sicurezza, velocita e intelligenza neurale del mercato, presentate in modo chiaro</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Sicurezza di livello bancario</h3>
          <p>Crittografia SSL, elaborazione dei dati sicura e un’architettura dell’account completamente protetta.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Analisi di mercato con AI</h3>
          <p>Calcoli di machine learning in tempo reale, focalizzati sulla cattura dei cambiamenti di mercato più evidenti.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Flussi a bassa latenza</h3>
          <p>Infrastruttura agile, focalizzata su un’elaborazione rapida degli ordini durante i periodi di alta attivita.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Asset in tempo reale</div>
          <h2 class="section-title">Dashboard unificato di <?= e(SITE_NAME) ?> per metriche globali</h2>
          <p class="section-subtitle">
            Segui le variazioni degli asset in tempo reale, monitora lo slancio e usa l’analisi AI automatizzata per individuare i pattern in modo rapido.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Efficacia operativa:</strong>
              Nelle operazioni tradizionali bisogna osservare centinaia di indicatori manualmente.
              Gli algoritmi di <?= e(SITE_NAME) ?> elaborano migliaia di variazioni di prezzo ogni millisecondo,
              producendo modelli matematici chiari così da cogliere i movimenti in anticipo.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Accedi ai mercati</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Attivo</span>
              <span style="text-align:right; padding-right:16px;">Prezzo</span>
              <span style="text-align:right;">Variazione 24h</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Processo di onboarding</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> rende l’inizio senza stress</h2>
        <p class="section-subtitle">Nessuna esperienza pregressa con la crypto? La nostra guida automatizzata ti accompagna in ogni fase.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Registrazione sicura</h3>
            <p>Inserisci i dati di contatto di base tramite il nostro sistema di moduli altamente cifrato.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Configurazione guidata dall’AI</h3>
            <p>La piattaforma propone opzioni di interfaccia adatte alle tue preferenze.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Finanziamento sicuro</h3>
            <p>Attiva la tua gamma di operazioni tramite circuiti di pagamento standard e affidabili.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Distribuisci i segnali</h3>
            <p>Inizia a interagire con i mercati globali usando feed di dati neurali in tempo reale.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

          <div>
            <div class="section-label">Accesso da mobile</div>
            <h2 class="section-title">Il tuo portafoglio, a portata di mano</h2>
          <p class="section-subtitle">
              Il motore completo di <?= e(SITE_NAME) ?> compresso in un’esperienza mobile rapida, con una sensazione nativa.
              Monitora gli asset, esegui le operazioni e segui i segnali AI da qualsiasi luogo.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Avvisi push per i movimenti di prezzo critici
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Accesso biometrico con archiviazione locale cifrata
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suite di grafici completa ottimizzata per il touch
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Scopri l’esperienza dell’app</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Quadro equilibrato</div>
        <h2 class="section-title">Parametri di funzionamento trasparenti</h2>
          <p class="section-subtitle">
          Crediamo in un’assoluta onestà. Ecco cosa distingue il nostro sistema — e dove di solito si trovano i limiti del settore.
        </p>
      </div>

      <div class="comparison-grid">
          <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Punti di forza</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Dashboard minimalista ottimizzata per la velocità di esecuzione istituzionale.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Analisi neurale attiva 24/7 su tutti gli asset.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Nessun margine di transazione nascosto o commissioni di gestione a sorpresa.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Architettura dell’account crittografata SSL diretta.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Integrazione guidata che richiede minuti, non giorni.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Altre piattaforme</div>
          <h3>Limiti comuni del settore</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Dashboard ingombre, ricche di pubblicità, che rallentano le decisioni.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Report statici di fine giornata invece di un’analisi live continua.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Spread nascosti, commissioni di prelievo e prezzi poco chiari.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Infrastruttura condivisa e obsoleta con protezione dei dati disomogenea.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Verifica lenta e piena di burocrazia, che può richiedere giorni.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Il confronto riflette schemi tipici delle operazioni retail ed è solo indicativo; le offerte dei competitor variano.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Funzionalità principali della piattaforma in breve</h2>
        <p class="section-subtitle">Rivedi i parametri funzionali inclusi nella tua struttura di accesso all’account.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Funzione</th>
              <th>Dettaglio funzionale</th>
              <th class="cap-table-center">Incluso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Framework di operazioni con AI</strong></td>
              <td>Elaborazione algoritmica che fornisce calcoli dinamici macro-strutturali.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Feed aggregati</strong></td>
              <td>Grafici consolidati in tempo reale per indici globali moderni e token.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilità cross-piattaforma</strong></td>
              <td>Rendering completamente responsive su mobile, desktop e tablet.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Copertura multi-asset</strong></td>
              <td>Accesso unificato a crypto, forex e indici azionari da un unico livello di account.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Avvisi di rischio automatizzati</strong></td>
              <td>Notifiche configurabili che segnalano volatilità insolita prima che colpisca le posizioni.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Vault di dati cifrati</strong></td>
              <td>Dati personali e dell’account isolati dietro controlli di accesso crittografati a strati.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>Assistenza umana 24/7</strong></td>
              <td>Operatori tecnici live pronti a rispondere immediatamente alle domande di configurazione.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Depositi</div>
      <h2 class="section-title">Finanzia il tuo account con metodi che conosci già</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Carte, portafogli elettronici e bonifici bancari — tutti protetti da cifratura SSL a 256 bit.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Metodi di deposito e finanziamento accettati">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Bonifico bancario</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Protetto da SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Infrastruttura affidabile</div>
        <h2 class="section-title">Realizzato con partner di livello industriale</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Feedback degli utenti</div>
        <h2 class="section-title">Cosa dicono i trader su <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Feedback onesti della nostra community globale multi-mercato.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 stelle su 5">★★★★★</div>
            <p class="review-text">
              Da principiante, la crypto mi metteva in ansia. <?= e(SITE_NAME) ?> ha reso il dashboard così intuitivo che mi sono sentito sicuro in pochi minuti. L’analisi dell’AI è chiarissima.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Operatore retail verificato · Regno Unito</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 stelle su 5">★★★★★</div>
            <p class="review-text">
              L’interfaccia pulita mi fa risparmiare ore. Il filtro dell’AI che riduce il rumore del mercato alle tendenze principali ha cambiato il modo in cui gestisco le mie posizioni ogni giorno.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analista di asset crypto · Canada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 stelle su 5">★★★★★</div>
            <p class="review-text">
              L’esecuzione a bassa latenza, insieme agli avvisi intelligenti, mi permette di adeguare gli obiettivi al volo senza dover avviare più programmi.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Responsabile di portafoglio privato · Germania</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 stelle su 5">★★★★★</div>
            <p class="review-text">
              L’assistenza mi ha risposto in due minuti mentre stavo configurando la verifica. Un servizio eccezionale, a livello istituzionale.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Trader algoritmico · Francia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: un’architettura IA istituzionale per dare potere ai trader
        </h2>

        <p class="seo-intro">
          L’interazione moderna con gli asset richiede una chiarezza assoluta. Quando i framework dei dati sono
          sovraccarichi di banner promozionali o di interfacce troppo pesanti, le prestazioni dell’utente calano.
          <?= e(SITE_NAME) ?> elimina la complessità sistemica offrendo un ambiente core elegante e reattivo, ottimizzato
          per l’esecuzione strategica a lungo termine. Ogni modulo della piattaforma, dall’onboarding all’esecuzione live,
          si basa sullo stesso principio: rimuovere il rumore, così i dati sottostanti possono parlare da soli — senza
          rinunciare alla profondità che si aspettano i partecipanti più esperti.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Asset crypto per operazioni <span>avanzati</span></h3>
            <p>
              La liquidità delle blockchain cambia rapidamente, rendendo indispensabile un’infrastruttura a bassa latenza.
              <?= e(SITE_NAME) ?> collega nodi personalizzati alle principali sedi di asset digitali, fornendo cicli di feedback sui prezzi in tempo reale.
              Le metriche visive chiare trasformano strutture multi-chain caotiche in canali di dati organizzati e leggibili.
            </p>
            <p>
              Oltre ai flussi di prezzo grezzi, la piattaforma contestualizza le variazioni di volume e la profondità di liquidità,
              così i picchi improvvisi risultano più facili da interpretare — non solo segnali reattivi. Questa coerenza
              conta soprattutto nelle sessioni volatili, quando strumenti frammentati rallentano le decisioni proprio
              nel momento in cui la chiarezza è più necessaria.
            </p>
          </div>

          <div class="seo-block">
            <h3>Analisi di mercato <span>neuronale approfondita</span></h3>
            <p>
              Algoritmi automatizzati analizzano i dati di mercato in arrivo per calcolare cambiamenti strutturali su forex e materie prime internazionali.
              <?= e(SITE_NAME) ?> trasforma calcoli complessi in trend di dati chiari, che supportano un giudizio indipendente senza sostituirlo.
            </p>
            <p>
              Poiché i modelli funzionano in modo continuo e non secondo un calendario fisso, le variazioni di slancio
              si vedono mentre accadono, invece che in un riepilogo ritardato. Il risultato è uno strato di ricerca
              che supporta il giudizio indipendente mantenendo la decisione finale nelle mani dell’utente.
            </p>
          </div>

          <div class="seo-block">
            <h3>Configurazione dell’account <span>senza attrito</span></h3>
            <p>
              La conformità non deve essere complicata. Il nostro processo di registrazione strutturato protegge le impostazioni private
              tramite verifiche sicure progettate per durare meno di tre minuti dall’inizio all’accesso al terminale.
            </p>
            <p>
              Ogni campo del percorso spiega perché viene richiesto, così i principianti non devono mai indovinare lo scopo
              di una fase di verifica. Dopo l’invio, i controlli di identità crittografati partono in background mentre il resto
              della dashboard resta completamente navigabile.
            </p>
          </div>

          <div class="seo-block">
            <h3>Controlli del rischio di <span>qualità istituzionale</span></h3>
            <p>
              Il dimensionamento delle posizioni, i limiti di esposizione e gli indicatori automatici della volatilità condensano strumenti storicamente professionali
              in semplici interruttori — così i partecipanti più nuovi ereditano la disciplina quotidiana dai trader esperti.
            </p>
            <p>
              Gli avvisi si configurano per asset, quindi l’attenzione viene attirata solo sui mercati che lo meritano davvero.
              Questo approccio mirato aiuta a prevenire la stanchezza da notifiche, che spesso porta le persone a ignorare
              gli avvisi su piattaforme meno selettive.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
        <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Centro assistenza</div>
        <h2 class="section-title">Domande frequenti</h2>
        <p class="section-subtitle">Risposte immediate e procedurali su registrazione e accesso alla piattaforma.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Come iniziare con <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Compila il modulo di registrazione qui sopra, segui il nostro onboarding sicuro passo-passo
              e attiva le impostazioni del tuo account tramite il nostro sistema strutturato di elaborazione dei pagamenti.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Serve un’esperienza crypto avanzata?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              No. <?= e(SITE_NAME) ?> offre una modalità dashboard per principianti, spiegazioni analitiche automatizzate
              e spazi di lavoro semplificati per aiutare i nuovi trader a muoversi in sicurezza.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Qual è il requisito minimo per fare operazioni?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              L’attivazione base standard è di <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Questo serve come capitale operativo per le operazioni e resta sotto il tuo controllo manuale.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ci sono commissioni operative nascoste?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              No. <?= e(SITE_NAME) ?> opera con una trasparenza totale sui prezzi.
              Non applichiamo margini di accesso alla piattaforma inattesi né calcoli di prelievo nascosti.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Come funziona il componente di intelligenza IA?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              I sistemi neurali analizzano marcatori statistici della volatilità su più livelli di mercato,
              trasformando i dati grezzi in linee di tendenza semplificate per una valutazione più semplice.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>I miei dati personali sono completamente protetti?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sì. Ogni percorso dell’account è protetto con una SSL sicura e con protocolli crittografici robusti,
              per isolare completamente gli intervalli di dati privati.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>Pronto a provare la chiarezza di <?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Entra in un sistema moderno ottimizzato per operazioni rapide, protezione dei dati e accesso trasparente.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Crea il tuo account</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Crea un account gratuito';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

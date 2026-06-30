<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Piattaforma di trading');
$page_description = 'Fai trading di crypto, forex e mercati globali con ' . SITE_NAME . '. Analisi in tempo reale, segnali assistiti da AI e una piattaforma progettata per velocità e chiarezza.';
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
        <p class="eyebrow">Piattaforma di trading con AI</p>
        <h1>Fai trading in modo più intelligente.<br><span class="text-accent">Agisci più velocemente.</span></h1>
        <p class="lead">
          Un nuovo standard per il trading crypto e multi‑mercato. Sicurezza avanzata, commissioni trasparenti,
          insight guidati dall’AI e un’interfaccia essenziale.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL protetto
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Assistenza 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Esecuzione rapida
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Inizia a fare trading — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Apri il tuo account in 2 minuti';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statistiche della piattaforma">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Valute disponibili</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Utenti verificati</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Volume di trading</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Paesi supportati</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Anteprima piattaforma di trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Piattaforma di trading</p>
        <h2>Grafici professionali.<br>Ottimizzata per mobile.</h2>
        <p class="lead">
          Un’interfaccia pulita, come un exchange moderno — dati BTC/USDT in tempo reale, monitoraggio del portafoglio
          ed esecuzione con un tocco. Progettata per darti sicurezza fin dal primo accesso.
        </p>
        <ul class="platform-points">
          <li>Grafici candlestick in tempo reale</li>
          <li>Portafoglio e P/L a colpo d’occhio</li>
          <li>Dashboard account sicura</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prova la piattaforma</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Perché <?= e(SITE_NAME) ?></p>
        <h2>Tutto ciò che ti serve per fare trading con fiducia</h2>
        <p class="lead">Sicurezza, velocità e intelligenza — riunite in una piattaforma pulita pensata per i trader moderni.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sicurezza di livello bancario</h3>
          <p>Crittografia SSL, 2FA e gestione sicura dei fondi proteggono i tuoi dati e il tuo capitale in ogni fase.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Segnali di mercato AI</h3>
          <p>Insight accurati in tempo reale per individuare opportunità e prendere decisioni più rapide e consapevoli.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Trading automatizzato</h3>
          <p>Bot assistiti da AI lavorano 24/7 per eseguire strategie in modo efficiente, mentre tu resti sempre in controllo.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Accesso multi‑mercato</h3>
          <p>Opera su crypto, forex, azioni e materie prime da un’unica interfaccia.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Esecuzione a bassa latenza</h3>
          <p>Infrastruttura ottimizzata per un’esecuzione stabile degli ordini anche nei momenti di picco.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interfaccia pulita</h3>
          <p>Design essenziale che riduce le distrazioni: più focus sulla strategia, meno sulla navigazione.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercati live</p>
        <h2>Fai trading su Bitcoin, Ethereum e molto altro</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Prezzi in tempo reale, indicatori avanzati e una vista professionale dei mercati che ti interessano.
        </p>
        <a href="sign.php" class="btn btn-primary">Accedi ai mercati</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Prezzi di mercato in tempo reale">
        <div class="exchange-panel-header">
          <span>Mercati</span>
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
        <p class="eyebrow">Come iniziare</p>
        <h2>Dalla registrazione alla prima operazione in pochi minuti</h2>
        <p class="lead">Un percorso guidato — senza complessità, senza incertezze.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Crea il tuo account</h3>
          <p>Registrati con i tuoi dati e ottieni accesso immediato e sicuro alla piattaforma.</p>
        </article>
        <article class="step-card">
          <h3>Verifica la tua email</h3>
          <p>Conferma l’indirizzo per sbloccare l’accesso completo alla piattaforma.</p>
        </article>
        <article class="step-card">
          <h3>Finanzia il tuo account</h3>
          <p>Deposita un minimo di <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tramite bonifico, carta o e‑wallet.</p>
        </article>
        <article class="step-card">
          <h3>Imposta la strategia</h3>
          <p>Definisci livello di rischio e preferenze — manuale o con automazione assistita da AI.</p>
        </article>
        <article class="step-card">
          <h3>Inizia a fare trading</h3>
          <p>Entra nel mercato con grafici live, strumenti e supporto quando ne hai bisogno.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Apri l’account ora</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Depositi</p>
      <h2 style="margin-bottom: 0.75rem;">Deposita con metodi che già conosci</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Carte, e‑wallet e bonifici — protetti con crittografia SSL.</p>
      <?php
      $payment_context = 'depositi e finanziamento account';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruttura affidabile</p>
        <h2>Costruita con partner di livello industriale</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recensioni</p>
        <h2>Cosa dicono i trader</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">La registrazione è stata velocissima, commissioni trasparenti e assistenza che risponde davvero. Esperienza fluida e affidabile — una piattaforma che continuo a usare volentieri.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Trader indipendente</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ho provato finalmente il trading crypto qui — nessun rimpianto. Setup rapido e spiegazioni chiare. Ottima scelta, soprattutto se stai iniziando.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Appassionata di crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabile e affidabile. Apertura account semplice, termini chiari e team competente. Un’esperienza di trading sorprendentemente comoda.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operatore di asset digitali</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Il trading non sembra più complicato. Registrazione semplice, commissioni chiare e supporto quando serve. Da principiante, fa davvero la differenza.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investitrice privata</div>
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
        <h2>Domande comuni</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Come posso iniziare?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crea un account con i tuoi dati di base, completa un breve passaggio di verifica e deposita il minimo di <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Sbloccherai l’accesso completo alla piattaforma — grafici live, strumenti di trading e onboarding guidato.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            I miei soldi e i miei dati sono al sicuro?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizziamo crittografia SSL, autenticazione a due fattori e processi sicuri tramite provider affidabili. I tuoi dati personali sono gestiti con rigorose politiche di sicurezza a ogni livello.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quando posso prelevare i profitti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Richiedi prelievi in qualsiasi momento dalla tua area personale. L’elaborazione richiede di solito 1–3 giorni lavorativi. Commissioni e tempistiche sono sempre mostrate in anticipo — senza sorprese.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Serve esperienza di trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Assolutamente no. Onboarding guidato, tutorial semplici e strumenti assistiti da AI ti aiutano a imparare al tuo ritmo. Che tu sia alle prime armi o esperto, l’assistenza è disponibile 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Su quali mercati posso fare trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accedi a criptovalute, forex, azioni globali e materie prime da un’unica interfaccia. Dati in tempo reale, analisi integrate e supporto per strategie manuali o automatizzate.
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
        <p class="eyebrow">Piattaforma</p>
        <h2>Funzionalità principali a colpo d’occhio</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motore di trading AI</div>
          <div class="specs-value">Analisi di mercato avanzata basata su machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metodi di deposito</div>
          <div class="specs-value">Carte, bonifici, PayPal, e‑wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Accesso da dispositivi</div>
          <div class="specs-value">Web, tablet e mobile — totalmente responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Accuratezza dei segnali</div>
          <div class="specs-value">Fino all’85% sulle strategie AI supportate</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercati</div>
          <div class="specs-value">Crypto, forex, azioni, materie prime</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configurazione rapida con verifica guidata</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Assistenza</div>
          <div class="specs-value">Supporto professionale 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contattaci</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Affidabile</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Una piattaforma pensata per chi inizia</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Onboarding guidato, assistenza dedicata e strumenti chiari per fare trading con maggiore tranquillità.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pronto a fare trading su una piattaforma pensata per la chiarezza?</h2>
        <p class="lead">Unisciti a trader privati e aziende che comprano, vendono e gestiscono asset digitali con fiducia.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Crea il tuo account gratuito';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Piattaforma di trading AI');
$page_description = 'Fai trading su criptovalute, forex e mercati globali con ' . SITE_NAME . '. Analisi in tempo reale, segnali supportati dall\'AI e una piattaforma progettata per velocita e chiarezza.';
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
        <p class="eyebrow">Piattaforma di trading AI</p>
        <h1>Fai trading in modo piu intelligente.<br><span class="text-accent">Reagisci piu velocemente.</span></h1>
        <p class="lead">
          Il nuovo standard per il trading crypto e multi-mercato. Sicurezza avanzata, costi trasparenti,
          insight guidati dall'AI e un'interfaccia che accelera le tue decisioni.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL protetto
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Supporto 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Esecuzione rapida
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Inizia a fare trading - min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Apri il tuo conto in 2 minuti';
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
  <section class="platform-section" id="platform" aria-label="Panoramica della piattaforma di trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Piattaforma di trading</p>
        <h2>Grafici professionali.<br>Pronta per mobile.</h2>
        <p class="lead">
          Interfaccia pulita ispirata agli exchange moderni, con dati BTC/USDT in tempo reale, gestione del portafoglio
          e operativita con un solo clic. Progettata per darti sicurezza fin dal primo accesso.
        </p>
        <ul class="platform-points">
          <li>Grafici a candele in tempo reale</li>
          <li>Portafoglio e P/L a colpo d'occhio</li>
          <li>Dashboard conto sicura</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prova la piattaforma</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Perche <?= e(SITE_NAME) ?></p>
        <h2>Tutto cio che ti serve per operare con fiducia</h2>
        <p class="lead">Sicurezza, velocita e intelligenza in una piattaforma chiara progettata per i trader moderni.</p>
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
          <p>Insight precisi in tempo reale ti aiutano a individuare opportunita e prendere decisioni piu rapide e informate.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Trading automatizzato</h3>
          <p>I bot assistiti dall'AI operano 24/7 per un'esecuzione efficiente delle strategie, mentre mantieni il pieno controllo.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Accesso multi-mercato</h3>
          <p>Fai trading su crypto, forex, azioni e materie prime in un unico ambiente integrato.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Esecuzione a bassa latenza</h3>
          <p>Infrastruttura ottimizzata per un'esecuzione stabile degli ordini anche durante elevata volatilita di mercato.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interfaccia pulita</h3>
          <p>Design minimale che riduce le distrazioni e ti permette di concentrarti sulla strategia, non sulla navigazione.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercati in tempo reale</p>
        <h2>Fai trading su Bitcoin, Ethereum e altri asset</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Prezzi live, indicatori avanzati e una panoramica professionale dei mercati che ti interessano.
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
        <h2>Dalla registrazione al primo trade in pochi minuti</h2>
        <p class="lead">Un percorso chiaro, senza complessita o incertezze inutili.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Crea il tuo account</h3>
          <p>Registrati con i tuoi dati e ottieni accesso immediato e sicuro alla piattaforma.</p>
        </article>
        <article class="step-card">
          <h3>Verifica l'email</h3>
          <p>Conferma il tuo indirizzo e sblocca l'esperienza di trading completa.</p>
        </article>
        <article class="step-card">
          <h3>Deposita fondi</h3>
          <p>Versa almeno <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tramite bonifico bancario, carta o e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Imposta la strategia</h3>
          <p>Scegli livello di rischio e preferenze: manuale o con automazione assistita dall'AI.</p>
        </article>
        <article class="step-card">
          <h3>Inizia a fare trading</h3>
          <p>Entra sul mercato con grafici live, strumenti professionali e supporto sempre disponibile.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Apri ora il tuo account</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Depositi</p>
      <h2 style="margin-bottom: 0.75rem;">Deposita con i metodi che gia utilizzi</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Carte, e-wallet e bonifici bancari, protetti da crittografia SSL.</p>
      <?php
      $payment_context = 'depositi e finanziamento del conto';
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
        <h2>Costruita con partner leader del settore</h2>
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
          <p class="review-text">La registrazione ha richiesto pochi minuti, i costi sono trasparenti e il supporto risponde davvero. Un'esperienza fluida e affidabile su cui continuo a fare affidamento.</p>
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
          <p class="review-text">Qui ho iniziato finalmente a fare trading crypto senza alcun rimpianto. Setup rapido e tutto spiegato con chiarezza. Ottima scelta, soprattutto per partire con il piede giusto.</p>
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
          <p class="review-text">Stabile e affidabile. Apertura conto semplice, condizioni chiare e un team competente. Un'esperienza di trading sorprendentemente confortevole.</p>
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
          <p class="review-text">Il trading non sembra piu complicato come prima. Registrazione semplice, costi chiari e supporto quando serve. Per chi inizia, fa davvero la differenza.</p>
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
        <h2>Domande frequenti</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Come posso iniziare?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crea il tuo account con i dati di base, completa una breve verifica e deposita almeno <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Avrai accesso completo alla piattaforma: grafici live, strumenti di trading e onboarding assistito.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            I miei fondi e i miei dati sono al sicuro?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizziamo crittografia SSL, autenticazione a due fattori e processi sicuri tramite provider affidabili. I tuoi dati personali vengono trattati secondo rigorosi standard di sicurezza.
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
              Puoi richiedere un prelievo in qualsiasi momento dalla dashboard. L'elaborazione richiede in genere da 1 a 3 giorni lavorativi. Costi e tempi sono sempre indicati in anticipo, senza sorprese.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Devo avere esperienza di trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Assolutamente no. Onboarding assistito, guide intuitive e strumenti supportati dall'AI ti aiutano a crescere al tuo ritmo. E per ogni livello di esperienza, il supporto e disponibile 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Su quali mercati posso operare?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accedi a criptovalute, forex, azioni globali e materie prime in un'unica interfaccia. Dati in tempo reale, analisi integrate e supporto per strategie sia manuali sia automatizzate.
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
        <h2>Funzionalita chiave a colpo d'occhio</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motore di trading AI</div>
          <div class="specs-value">Analisi di mercato avanzata con machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metodi di finanziamento</div>
          <div class="specs-value">Carte di pagamento, bonifici bancari, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Accesso da dispositivo</div>
          <div class="specs-value">Web, tablet e mobile, completamente responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Precisione dei segnali</div>
          <div class="specs-value">Fino all'85% sulle strategie AI supportate</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercati</div>
          <div class="specs-value">Crypto, forex, azioni, materie prime</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configurazione rapida dell'account con verifica assistita</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Supporto</div>
          <div class="specs-value">Supporto professionale 24/7 - <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contattaci</a></div>
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
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Valutazione <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recensioni · Basato su <strong>1&nbsp;842</strong> valutazioni
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pronto a fare trading su una piattaforma progettata per la massima chiarezza?</h2>
        <p class="lead">Unisciti a trader privati e aziende che acquistano, vendono e gestiscono asset digitali con fiducia.</p>
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

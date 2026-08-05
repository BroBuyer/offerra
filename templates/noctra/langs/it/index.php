<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Piattaforma di trading con IA');
$page_description = 'Fai trading di crypto e altri mercati su ' . SITE_NAME . ' — account sicuro, prezzi chiari, strumenti IA utili ed esecuzione rapida degli ordini.';
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
      <span class="tape-item"><strong>Spread</strong> da 0,1</span>
      <span class="tape-item"><strong>Velocità</strong> sotto i 40 ms</span>
      <span class="tape-item"><strong>Mercati</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Piattaforma di trading con IA</div>
        <h1>Fai trading di crypto e altri mercati.<br><span class="text-accent">Inizia con <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Una piattaforma semplice per il trading di crypto e multi-asset — sicurezza solida, prezzi chiari,
          insight IA utili e un'interfaccia facile da seguire.
        </p>
        <div class="hero-badges" aria-label="Punti di forza della piattaforma">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Connessione crittografata sicura (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Assistenza clienti disponibile 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Esecuzione rapida degli ordini
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Inizia oggi — deposito min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Crea account</span>
          <span class="live-pill">Sicuro</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registrati in meno di 2 minuti';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercati in tempo reale</p>
        <h2>Vedi i prezzi in tempo reale. Inizia quando sei pronto.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Segui Bitcoin, Ethereum e altre coppie principali in un pannello chiaro —
          poi apri il tuo account e inserisci il primo ordine.
        </p>
        <a href="sign.php" class="btn btn-primary">Apri l'accesso ai mercati</a>
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

  <section class="platform-section" id="platform" aria-label="Anteprima della piattaforma di trading">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Piattaforma</p>
        <h2>Grafici chiari.<br>Pronti per il trading.</h2>
        <p class="lead">
          Una schermata di trading pensata per il mobile con grafici live, profitto e perdita,
          e ordini con un tap — facile da capire dal primo accesso.
        </p>
        <ul class="platform-points">
          <li>Grafici e prezzi di mercato in tempo reale</li>
          <li>Saldo del portafoglio a colpo d'occhio</li>
          <li>Area account sicura con 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Apri la piattaforma</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funzionalità</p>
        <h2>Cosa ottieni con <?= e(SITE_NAME) ?></h2>
        <p class="lead">Sicurezza, velocità e strumenti chiari — senza uno schermo affollato.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Sicurezza account solida</h3>
            <p>Crittografia SSL, accesso a due fattori e flussi fondi protetti per tutelare meglio denaro e dati.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Insight di mercato con IA</h3>
            <p>Segnali utili che evidenziano timing e trend — utili quando i prezzi si muovono in fretta.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automazione quando la vuoi</h3>
            <p>I bot di trading opzionali possono seguire le tue regole 24 ore su 24 — resti tu al controllo.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Più mercati in un unico posto</h3>
            <p>Crypto, forex, azioni e materie prime da un'unica piattaforma semplice.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Gestione rapida degli ordini</h3>
            <p>Pensata per inserire ordini in modo affidabile anche quando i mercati sono agitati.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Layout pulito e semplice</h3>
            <p>Meno rumore visivo — più spazio per il grafico e il tuo prossimo ordine.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Per iniziare</p>
        <h2>Cinque passi al tuo primo trade</h2>
        <p class="lead">Un percorso chiaro dalla registrazione ai mercati live.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Apri un account</h3>
            <p>Invia i tuoi dati e ottieni accesso sicuro alla piattaforma.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Conferma l'email</h3>
            <p>Verifica il tuo indirizzo per sbloccare l'ambiente di trading completo.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Aggiungi fondi</h3>
            <p>Deposita da <?= MIN_DEPOSIT ?> <?= CURRENCY ?> con carta, bonifico bancario o e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Scegli come operare</h3>
            <p>Opera manualmente o usa strumenti assistiti dall'IA con limiti chiari che imposti tu.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Opera in tempo reale</h3>
            <p>Usa grafici, strumenti e supporto 24/7 ogni volta che ti serve aiuto.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Inizia ora</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Pagamenti</p>
      <h2 style="margin-bottom: 0.75rem;">Deposita con metodi che già conosci</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Carte, wallet e bonifici — crittografati end-to-end.</p>
      <?php
      $payment_context = 'finanziamento account e depositi';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruttura</p>
        <h2>Partner di infrastruttura</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recensioni</p>
        <h2>Cosa dicono i trader</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrazione veloce, commissioni chiare e il supporto ha risposto. Sembra una piattaforma con cui restare.</p>
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
          <p class="review-text">Ho provato le crypto qui dopo aver saltato tra le app — l'avvio era chiaro e il layout dei grafici finalmente ha senso.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Trader crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Gli ordini passano in modo affidabile, i termini sono in linguaggio semplice e il team conosce il prodotto. Una piattaforma solida.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader di asset digitali</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Da principiante mi serviva chiarezza più che effetti speciali. Registrazione, commissioni e aiuto quando mi bloccavo — bastava così.</p>
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

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Prima di finanziare il tuo account</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Come inizio?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crea un account, completa una breve verifica e deposita da <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Così sblocchi grafici, strumenti e un onboarding guidato.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Come sono protetti i miei soldi e i miei dati?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Usiamo crittografia SSL, autenticazione a due fattori e fornitori di pagamento affidabili sotto politiche dati rigorose.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quanto ci vogliono i prelievi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Richiedi i pagamenti in qualsiasi momento dalla dashboard. La maggior parte dei metodi si regola in 1–3 giorni lavorativi, con le commissioni mostrate in anticipo.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Serve esperienza di trading precedente?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              No. Passi guidati e strumenti assistiti dall'IA ti aiutano a imparare al tuo ritmo, con supporto 24/7 disponibile.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quali mercati sono disponibili?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Criptovalute, forex, azioni globali e materie prime — manuale o automatico — da un'unica interfaccia.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Panoramica</p>
        <h2>La piattaforma in sintesi</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Strumenti IA</div>
          <div class="specs-value">Analisi di mercato con insight di machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Finanziamento</div>
          <div class="specs-value">Carte, bonifici bancari, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivi</div>
          <div class="specs-value">Web, tablet, mobile — completamente responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Qualità segnali IA</div>
          <div class="specs-value">Fino all'85% sulle strategie supportate*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercati</div>
          <div class="specs-value">Crypto, forex, azioni, materie prime</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Setup rapido con verifica guidata</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Supporto</div>
          <div class="specs-value">Supporto 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contattaci</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Valutata</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Punteggio <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recensioni · Basato su <strong>1.842</strong> valutazioni
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pronto per un modo più chiaro di fare trading?</h2>
        <p class="lead">Unisciti a trader che vogliono mercati live, commissioni chiare e una piattaforma facile da usare.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Apri account</span>
          <span class="live-pill">Gratis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Crea il tuo account gratuito';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

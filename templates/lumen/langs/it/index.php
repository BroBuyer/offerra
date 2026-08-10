<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Piattaforma di investimento con IA');
$page_description = 'Una piattaforma di investimento semplice basata sull’IA — mercati chiari, decisioni guidate e apertura account rapida su ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introduzione">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investi con chiarezza.<br><span class="text-accent">Lascia che l’IA lo tenga semplice.</span></h1>
        <p class="lead">
          Una piattaforma moderna che spiega i mercati in linguaggio semplice, evidenzia insight IA utili e ti aiuta a piazzare ordini senza confusione.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Inizia da <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Scopri come funziona</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Pensata per i principianti</p>
        <h2>Tre passaggi. Poi inizi a operare.</h2>
        <p class="lead">Niente gergo da terminale — un percorso chiaro dalla registrazione alla prima posizione.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Apri il tuo account</h3>
          <p>Bastano pochi dati. La verifica è breve e guidata.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Deposita in sicurezza</h3>
          <p>Deposita da <?= MIN_DEPOSIT ?> <?= CURRENCY ?> con metodi di pagamento affidabili.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Opera con l’aiuto dell’IA</h3>
          <p>Segui insight in linguaggio semplice e piazza ordini quando sei pronto.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">IA davvero utile</p>
        <h2>Segnali che puoi davvero capire</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> trasforma il rumore di mercato in messaggi brevi e leggibili — meno indovinelli, più decisioni.
        </p>
        <ul class="feature-list">
          <li>Indicazioni chiare compra / tieni / osserva</li>
          <li>Promemoria sul rischio prima della conferma</li>
          <li>Un’interfaccia che resta calma sotto pressione</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prova la piattaforma</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Esempio di insight">
        <p class="insight-panel__label">Insight live</p>
        <p class="insight-panel__title">BTC / USD · momentum stabile</p>
        <p class="insight-panel__body">
          La volatilità si sta attenuando. L’IA suggerisce di osservare la prossima sessione prima di aumentare la size — resti tu al controllo di ogni ordine.
        </p>
        <div class="insight-panel__meta">
          <span>Confidenza alta</span>
          <span>Aggiornato proprio ora</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Inizia</p>
        <h2>Crea il tuo account <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Unisciti a una piattaforma premium che resta semplice — guida IA inclusa dal primo giorno.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Apri in meno di 2 minuti';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Infrastrutture affidabili</p>
        <h2>Partner infrastrutturali</h2>
        <p class="lead">Pagamenti e accesso ai mercati tramite provider consolidati.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Risposte rapide</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Serve esperienza di trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              No. <?= e(SITE_NAME) ?> è pensata per chi investe per la prima volta — i consigli IA sono in linguaggio semplice.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Qual è il deposito minimo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Puoi iniziare da <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Le commissioni restano visibili prima della conferma.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Il supporto è disponibile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sì — il nostro team è disponibile 24 ore su 24 per depositi e configurazione dell’account.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Leggi la FAQ completa →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Offerta | ' . SITE_NAME . ' - Inizia il tuo percorso';
$page_description = 'Inizia a fare trading su ' . SITE_NAME . '. Iscriviti gratis ora.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Crea oggi il tuo conto su <?= e(SITE_NAME) ?>. La dashboard del portafoglio è
              pronta!
            </h1>
            <p>
              In meno di 5 minuti crei il conto gratuito, effettui un deposito e inizi a
              fare trading. Inizia oggi: è l’occasione di costruire un futuro finanziario solido.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Iscriviti</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Come funziona</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Icona apertura conto" />
                <h3>Apertura del conto</h3>
                <p>
                  Puoi creare il conto in pochi secondi. Accedi subito ai nostri
                  strumenti di trading e alle opportunità che ti aspettano.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Icona deposito" />
                <h3>Deposita fondi</h3>
                <p>Deposita i fondi per iniziare a fare trading.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Icona acquisto e vendita" />
                <h3>Compra e vendi</h3>
                <p>
                  Rafforza il portafoglio con fiducia. Entra nel mercato senza
                  esitare!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Non fartelo scappare! Unisciti a migliaia di trader che ottengono risultati!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Segui il portafoglio con saldi aggiornati e guadagni in tempo reale.</h3>
            </div>
            <div class="half right">
              <p>
                Non perdere nessun dettaglio grazie all’analisi approfondita di <?= e(SITE_NAME) ?> su
                schemi di trading e dati sempre aggiornati. Segui tutte le statistiche chiave
                — saldo, profitti e variazioni di prezzo. Con questi strumenti
                massimizzi i rendimenti e prendi decisioni di investimento consapevoli. Il futuro
                è adesso: inizia oggi!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Inizia</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prodotto | ' . SITE_NAME . ' - Piattaforma di trading IA';
$page_description = SITE_NAME . ' : piattaforma di IA avanzata per le criptovalute ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
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
              Con <?= e(SITE_NAME) ?>, l’analisi digitale ti aiuta a far crescere il patrimonio
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Grazie a un’intelligenza artificiale di primo piano e ad algoritmi avanzati, <?= e(SITE_NAME) ?>
              analizza in continuazione i mercati globali. La piattaforma individua così in tempi rapidi
              le opportunità più promettenti. È il momento di fare il passo verso il successo con
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Inizia</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>La tua piattaforma di trading digitale tutto-in-uno</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vantaggio 1"
                  />
                </div>
                <h3>Gestione delle criptovalute</h3>
                <p>Gestisci facilmente tutti i tuoi asset digitali in un unico posto.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vantaggio 2"
                  />
                </div>
                <h3>Consulta le informazioni su tutti i tuoi asset da un’unica piattaforma e un’unica interfaccia</h3>
                <p>Ottimizza la gestione finanziaria con una visione d’insieme chiara.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vantaggio 3"
                  />
                </div>
                <h3>Mercati dei capitali</h3>
                <p>Resta un passo avanti grazie a dati e analisi in tempo reale.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vantaggio 4"
                  />
                </div>
                <h3>Accesso mobile</h3>
                <p>
                  Il nostro sito mobile completamente ottimizzato ti consente di seguire il portafoglio in qualsiasi momento, ovunque tu sia.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vantaggio 5"
                  />
                </div>
                <h3>Statistiche in diretta</h3>
                <p>
                  Segui rendimenti e analisi con una precisione eccezionale, ogni secondo della
                  giornata.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Scarica l’app oggi e gestisci le tue finanze in tempo reale dallo smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Iscriviti</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Scopri l’analisi IA all’avanguardia della piattaforma <?= e(SITE_NAME) ?> e un’interfaccia di trading
            di asset intuitiva <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funzionalità 1" />
              </div>
              <div class="text">
                <h4>Portafoglio</h4>
                <p>
                  Rafforza il tuo profilo finanziario con le nostre strategie di trading collaudate e
                  innovative.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funzionalità 2" />
              </div>
              <div class="text">
                <h4>Analisi crypto</h4>
                <p>
                  Sfrutta l’ultima generazione di intelligenza artificiale <?= e(SITE_NAME) ?> e i suoi
                  algoritmi avanzati di apprendimento automatico per individuare rapidamente le opportunità redditizie.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funzionalità 3" />
              </div>
              <div class="text">
                <h4>Acquisto semplificato</h4>
                <p>
                  Offriamo funzionalità avanzate e un accompagnamento per negoziare le criptovalute
                  in modo semplice e intuitivo. Nessun costo nascosto, esecuzione ultra-rapida. È la tua
                  occasione per massimizzare i guadagni di trading con la potenza dell’IA!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funzionalità 4" />
              </div>
              <div class="text">
                <h4>Asset digitali</h4>
                <p>
                  Cogli l’occasione di massimizzare i profitti sul trading di asset, siano
                  criptovalute o altri strumenti. Costruisci un portafoglio diversificato con il nostro software
                  e i nostri algoritmi di apprendimento automatico. È il momento di fare il passo e iniziare
                  il tuo percorso di trading!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

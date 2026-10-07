<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - AI-tradingplattform';
$page_description = SITE_NAME . ' : avansert AI-plattform for kryptovaluta ' . geo_in() . '.';
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
              Med <?= e(SITE_NAME) ?> bruker du digital analyse for å bygge formue
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Takket være kunstig intelligens i toppklasse og avanserte algoritmer analyserer <?= e(SITE_NAME) ?>
              de globale markedene hele tiden. Slik fanger plattformen raskt opp
              de mest lovende mulighetene. Nå er tiden for å ta steget mot suksess med
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start nå</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Din digitale alt-i-ett-tradingplattform</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Fordel 1"
                  />
                </div>
                <h3>Forvaltning av kryptovaluta</h3>
                <p>Administrer alle digitale aktiva på ett sted.</p>
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
                    alt="Fordel 2"
                  />
                </div>
                <h3>Se informasjon om alle aktiva via én plattform og ett grensesnitt</h3>
                <p>Optimaliser økonomien med et klart overblikk.</p>
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
                    alt="Fordel 3"
                  />
                </div>
                <h3>Kapitalmarkeder</h3>
                <p>Hold deg foran markedet — med data og innsikt i sanntid.</p>
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
                    alt="Fordel 4"
                  />
                </div>
                <h3>Mobiltilgang</h3>
                <p>
                  Den fullt optimaliserte mobilsiden lar deg følge porteføljen når som helst, hvor som helst.
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
                    alt="Fordel 5"
                  />
                </div>
                <h3>Live-statistikk</h3>
                <p>
                  Følg avkastning og analyser med høy presisjon, hvert sekund av
                  dagen.
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
              Last ned appen i dag og styr økonomien i sanntid fra smarttelefonen.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrer</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Oppdag AI-analysen på <?= e(SITE_NAME) ?>-plattformen og et intuitivt tradinggrensesnitt
            for aktiva <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funksjon 1" />
              </div>
              <div class="text">
                <h4>Portefølje</h4>
                <p>
                  Styrk den finansielle profilen din med våre gjennomprøvde og innovative trading-
                  strategier.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funksjon 2" />
              </div>
              <div class="text">
                <h4>Kryptoanalyse</h4>
                <p>
                  Utnytt siste generasjon kunstig intelligens fra <?= e(SITE_NAME) ?> og de
                  avanserte maskinlæringsalgoritmene for å fange opp lønnsomme muligheter raskt.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funksjon 3" />
              </div>
              <div class="text">
                <h4>Enkelt kjøp</h4>
                <p>
                  Vi tilbyr avanserte funksjoner og støtte for å handle kryptovaluta
                  enkelt og intuitivt. Ingen skjulte gebyrer, lynrask utførelse. Dette er din
                  mulighet til å øke tradinggevinsten med kraften i AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funksjon 4" />
              </div>
              <div class="text">
                <h4>Digitale aktiva</h4>
                <p>
                  Grip sjansen til å maksimere gevinst fra handel i aktiva — enten det er
                  kryptovaluta eller andre instrumenter. Bygg en diversifisert portefølje med programvaren
                  og maskinlæringsalgoritmene våre. Nå er tiden for å ta steget og starte
                  tradingen din.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

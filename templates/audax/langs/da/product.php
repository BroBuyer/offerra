<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - AI-handelsplatform';
$page_description = SITE_NAME . ' : avanceret AI-platform til kryptovaluta ' . geo_in() . '.';
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
              Med <?= e(SITE_NAME) ?> bruger du digital analyse til at bygge formue
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Takket være kunstig intelligens i topklasse og avancerede algoritmer analyserer <?= e(SITE_NAME) ?>
              de globale markeder hele tiden. Så fanger platformen hurtigt
              de mest lovende muligheder. Nu er tiden til at tage skridtet mod succes med
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start nu</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Din digitale alt-i-én-handelsplatform</h2>
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
                <h3>Forvaltning af kryptovaluta</h3>
                <p>Administrer alle digitale aktiver ét sted.</p>
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
                <h3>Se information om alle aktiver via én platform og én grænseflade</h3>
                <p>Optimér økonomien med et klart overblik.</p>
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
                <p>Hold dig foran markedet — med data og indsigt i realtid.</p>
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
                <h3>Mobiladgang</h3>
                <p>
                  Den fuldt optimerede mobilside lader dig følge porteføljen når som helst, hvor som helst.
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
                <h3>Live-statistik</h3>
                <p>
                  Følg afkast og analyser med høj præcision, hvert sekund af
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
              Download appen i dag, og styr økonomien i realtid fra din smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Tilmeld</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Opdag AI-analysen på <?= e(SITE_NAME) ?>-platformen og en intuitiv handelsgrænseflade
            for aktiver <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funktion 1" />
              </div>
              <div class="text">
                <h4>Portefølje</h4>
                <p>
                  Styrk din finansielle profil med vores gennemprøvede og innovative handels-
                  strategier.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funktion 2" />
              </div>
              <div class="text">
                <h4>Kryptoanalyse</h4>
                <p>
                  Udnyt seneste generation af kunstig intelligens fra <?= e(SITE_NAME) ?> og de
                  avancerede maskinlæringsalgoritmer til hurtigt at fange profitable muligheder.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funktion 3" />
              </div>
              <div class="text">
                <h4>Nemt køb</h4>
                <p>
                  Vi tilbyder avancerede funktioner og støtte til at handle kryptovaluta
                  enkelt og intuitivt. Ingen skjulte gebyrer, lynhurtig udførelse. Dette er din
                  mulighed for at øge handelsgevinsten med kraften i AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funktion 4" />
              </div>
              <div class="text">
                <h4>Digitale aktiver</h4>
                <p>
                  Grib chancen for at maksimere gevinst fra handel med aktiver — uanset om det er
                  kryptovaluta eller andre instrumenter. Byg en diversificeret portefølje med vores software
                  og maskinlæringsalgoritmer. Nu er tiden til at tage skridtet og starte
                  din handel.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - AI-handelsplattform';
$page_description = SITE_NAME . ' : avancerad AI-plattform för kryptovaluta ' . geo_in() . '.';
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
              Med <?= e(SITE_NAME) ?> använder du digital analys för att bygga förmögenhet
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Tack vare artificiell intelligens i toppklass och avancerade algoritmer analyserar <?= e(SITE_NAME) ?>
              de globala marknaderna hela tiden. Så fångar plattformen snabbt
              de mest lovande möjligheterna. Nu är det dags att ta steget mot framgång med
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Starta nu</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Din digitala allt-i-ett-handelsplattform</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Fördel 1"
                  />
                </div>
                <h3>Förvaltning av kryptovaluta</h3>
                <p>Hantera alla digitala tillgångar på ett ställe.</p>
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
                    alt="Fördel 2"
                  />
                </div>
                <h3>Se information om alla tillgångar via en plattform och ett gränssnitt</h3>
                <p>Optimera ekonomin med en tydlig överblick.</p>
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
                    alt="Fördel 3"
                  />
                </div>
                <h3>Kapitalmarknader</h3>
                <p>Håll dig före marknaden — med data och insikt i realtid.</p>
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
                    alt="Fördel 4"
                  />
                </div>
                <h3>Mobilåtkomst</h3>
                <p>
                  Den helt optimerade mobilsidan låter dig följa portföljen när som helst, var som helst.
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
                    alt="Fördel 5"
                  />
                </div>
                <h3>Livestatistik</h3>
                <p>
                  Följ avkastning och analyser med hög precision, varje sekund av
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
              Ladda ner appen i dag och styr ekonomin i realtid från din smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrera</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Upptäck AI-analysen på <?= e(SITE_NAME) ?>-plattformen och ett intuitivt handelsgränssnitt
            för tillgångar <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funktion 1" />
              </div>
              <div class="text">
                <h4>Portfölj</h4>
                <p>
                  Stärk din finansiella profil med våra beprövade och innovativa handels-
                  strategier.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funktion 2" />
              </div>
              <div class="text">
                <h4>Kryptoanalys</h4>
                <p>
                  Utnyttja senaste generationen av artificiell intelligens från <?= e(SITE_NAME) ?> och de
                  avancerade maskininlärningsalgoritmerna för att snabbt fånga lönsamma möjligheter.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funktion 3" />
              </div>
              <div class="text">
                <h4>Enkla köp</h4>
                <p>
                  Vi erbjuder avancerade funktioner och stöd för att handla kryptovaluta
                  enkelt och intuitivt. Inga dolda avgifter, blixtsnabb utförande. Det här är din
                  möjlighet att öka handelsvinsten med kraften i AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funktion 4" />
              </div>
              <div class="text">
                <h4>Digitala tillgångar</h4>
                <p>
                  Ta chansen att maximera vinst från handel med tillgångar — oavsett om det är
                  kryptovaluta eller andra instrument. Bygg en diversifierad portfölj med vår programvara
                  och maskininlärningsalgoritmer. Nu är det dags att ta steget och starta
                  din handel.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Product | ' . SITE_NAME . ' - AI-tradingplatform';
$page_description = SITE_NAME . ' : geavanceerd AI-platform voor cryptovaluta ' . geo_in() . '.';
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
              Met <?= e(SITE_NAME) ?> gebruik je digitale analyses om vermogen merkbaar op te bouwen
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Dankzij eersteklas kunstmatige intelligentie en geavanceerde algoritmen analyseert <?= e(SITE_NAME) ?>
              voortdurend de wereldwijde markten. Zo herkent het platform snel
              de meest kansrijke gelegenheden. Nu is het moment om de stap naar succes te zetten met
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
          <h2>Jouw digitale all-in-one-tradingplatform</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Voordeel 1"
                  />
                </div>
                <h3>Beheer van cryptovaluta</h3>
                <p>Beheer al je digitale assets op één plek.</p>
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
                    alt="Voordeel 2"
                  />
                </div>
                <h3>Bekijk informatie over al je assets via één platform en één interface</h3>
                <p>Optimaliseer je financiën met een helder overzicht.</p>
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
                    alt="Voordeel 3"
                  />
                </div>
                <h3>Kapitaalmarkten</h3>
                <p>Blijf de markt voor — met data en inzichten in realtime.</p>
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
                    alt="Voordeel 4"
                  />
                </div>
                <h3>Mobiele toegang</h3>
                <p>
                  Onze volledig geoptimaliseerde mobiele site laat je de portefeuille altijd en overal volgen.
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
                    alt="Voordeel 5"
                  />
                </div>
                <h3>Live statistieken</h3>
                <p>
                  Volg rendement en analyses met hoge precisie, elke seconde van de
                  dag.
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
              Download de app vandaag en beheer je financiën in realtime vanaf je smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registreren</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Ontdek de AI-analyses van het platform <?= e(SITE_NAME) ?> en een intuïtieve tradinginterface
            voor assets <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Functie 1" />
              </div>
              <div class="text">
                <h4>Portefeuille</h4>
                <p>
                  Versterk je financiële profiel met onze bewezen en innovatieve trading-
                  strategieën.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Functie 2" />
              </div>
              <div class="text">
                <h4>Crypto-analyse</h4>
                <p>
                  Benut de nieuwste generatie kunstmatige intelligentie van <?= e(SITE_NAME) ?> en haar
                  geavanceerde machinelearning-algoritmen om winstgevende kansen snel te herkennen.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Functie 3" />
              </div>
              <div class="text">
                <h4>Eenvoudig kopen</h4>
                <p>
                  We bieden geavanceerde functies en begeleiding om cryptovaluta
                  eenvoudig en intuïtief te verhandelen. Geen verborgen kosten, ultrasnelle uitvoering. Dit is jouw
                  kans om tradingwinst te vergroten met de kracht van AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Functie 4" />
              </div>
              <div class="text">
                <h4>Digitale assets</h4>
                <p>
                  Grijp de kans om winst uit de handel in assets te maximaliseren — of het nu
                  cryptovaluta of andere instrumenten zijn. Bouw een gediversifieerde portefeuille met onze software
                  en onze machinelearning-algoritmen. Nu is het moment om de stap te zetten en
                  je trading te beginnen.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

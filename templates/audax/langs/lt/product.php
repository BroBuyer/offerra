<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produktas | ' . SITE_NAME . ' - DI prekybos platforma';
$page_description = SITE_NAME . ' : pažangi DI platforma kriptovaliutoms ' . geo_in() . '.';
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
              Su <?= e(SITE_NAME) ?> skaitmeninė analizė padeda auginti turtą
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Dėl aukščiausios klasės dirbtinio intelekto ir pažangių algoritmų <?= e(SITE_NAME) ?>
              nuolat analizuoja pasaulines rinkas. Taip platforma greitai aptinka
              perspektyviausias galimybes. Dabar metas žengti žingsnį sėkmės link su
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Pradėkite dabar</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Jūsų skaitmeninė viskas viename prekybos platforma</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Privalumas 1"
                  />
                </div>
                <h3>Kriptovaliutų valdymas</h3>
                <p>Lengvai valdykite visą skaitmeninį turtą vienoje vietoje.</p>
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
                    alt="Privalumas 2"
                  />
                </div>
                <h3>Matykite viso turto informaciją vienoje platformoje ir sąsajoje</h3>
                <p>Optimizuokite finansus su aiškia apžvalga.</p>
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
                    alt="Privalumas 3"
                  />
                </div>
                <h3>Kapitalo rinkos</h3>
                <p>Būkite priekyje rinkos — su duomenimis ir įžvalgomis realiuoju laiku.</p>
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
                    alt="Privalumas 4"
                  />
                </div>
                <h3>Mobilioji prieiga</h3>
                <p>
                  Visiškai pritaikyta mobili svetainė leidžia stebėti portfelį bet kada, bet kur.
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
                    alt="Privalumas 5"
                  />
                </div>
                <h3>Statistika gyvai</h3>
                <p>
                  Stebėkite grąžą ir analizę itin tiksliai, kiekvieną
                  dienos sekundę.
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
              Atsisiųskite programėlę šiandien ir valdykite finansus realiuoju laiku iš telefono.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registruotis</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Atraskite <?= e(SITE_NAME) ?> platformos DI analizę ir intuityvią turto prekybos
            sąsają <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkcija 1" />
              </div>
              <div class="text">
                <h4>Portfelis</h4>
                <p>
                  Sustiprinkite finansinį profilį mūsų patikrintomis ir inovatyviomis prekybos
                  strategijomis.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkcija 2" />
              </div>
              <div class="text">
                <h4>Kriptoanalizė</h4>
                <p>
                  Pasinaudokite naujausios kartos <?= e(SITE_NAME) ?> dirbtiniu intelektu ir jo
                  pažangiais mašininio mokymosi algoritmais, kad greitai rastumėte pelningas galimybes.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkcija 3" />
              </div>
              <div class="text">
                <h4>Paprastas pirkimas</h4>
                <p>
                  Siūlome pažangias funkcijas ir palaikymą paprastai ir intuityviai
                  kriptovaliutų prekybai. Jokių paslėptų mokesčių, itin greitas vykdymas. Tai jūsų
                  galimybė padidinti prekybos pelną DI galia.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkcija 4" />
              </div>
              <div class="text">
                <h4>Skaitmeninis turtas</h4>
                <p>
                  Pasinaudokite proga maksimaliai padidinti pelną iš turto prekybos — nesvarbu,
                  kriptovaliutos ar kiti instrumentai. Sukurkite diversifikuotą portfelį su mūsų programine įranga
                  ir mašininio mokymosi algoritmais. Dabar metas žengti žingsnį ir pradėti
                  savo prekybą.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

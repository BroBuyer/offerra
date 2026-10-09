<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tuote | ' . SITE_NAME . ' - Tekoälykaupankäyntialusta';
$page_description = SITE_NAME . ' : kehittynyt tekoälyalusta kryptovaluutoille ' . geo_in() . '.';
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
              Palvelussa <?= e(SITE_NAME) ?> voit hyödyntää digitaalista analytiikkaa vahvaan varallisuuden kasvuun
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Huipputason tekoälymme ja kehittyneiden algoritmiemme ansiosta <?= e(SITE_NAME) ?>
              analysoi globaaleja markkinoita jatkuvasti. Näin alustamme tunnistaa nopeasti
              lupaavimmat mahdollisuudet. Nyt on aika ottaa askel kohti menestystä
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Aloita nyt</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Digitaalinen kaupankäyntialustasi kaikkea varten</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Hyöty 1"
                  />
                </div>
                <h3>Kryptovaluuttojen hallinta</h3>
                <p>Hallitse kaikkia digitaalisia varojasi yhdessä paikassa.</p>
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
                    alt="Hyöty 2"
                  />
                </div>
                <h3>Näe tiedot kaikista varoistasi yhdeltä alustalta ja käyttöliittymältä</h3>
                <p>Optimoi taloutesi selkeällä kokonaiskuvalla.</p>
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
                    alt="Hyöty 3"
                  />
                </div>
                <h3>Pääomamarkkinat</h3>
                <p>Pysy markkinoiden edellä — reaaliaikaisella datalla ja näkemyksillä.</p>
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
                    alt="Hyöty 4"
                  />
                </div>
                <h3>Mobiilikäyttö</h3>
                <p>
                  Täysin optimoitu mobiilisivustomme antaa seurata salkkuasi milloin ja missä tahansa.
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
                    alt="Hyöty 5"
                  />
                </div>
                <h3>Live-tilastot</h3>
                <p>
                  Seuraa tuottoasi ja analytiikkaa erittäin tarkasti, joka sekunti
                  päivästä.
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
              Lataa sovellus tänään ja hallitse talouttasi reaaliajassa älypuhelimestasi.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Rekisteröidy</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Tutustu <?= e(SITE_NAME) ?> -alustan huipputason tekoälyanalytiikkaan ja intuitiiviseen
            kaupankäyntikäyttöliittymään varoille <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Ominaisuus 1" />
              </div>
              <div class="text">
                <h4>Salkku</h4>
                <p>
                  Vahvista talousprofiiliasi toimivilla ja innovatiivisilla kaupankäynti-
                  strategioillamme.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Ominaisuus 2" />
              </div>
              <div class="text">
                <h4>Kryptoanalyysi</h4>
                <p>
                  Hyödynnä <?= e(SITE_NAME) ?> -palvelun uusinta tekoälygeneraatiota ja sen
                  kehittyneitä koneoppimisalgoritmeja löytääksesi nopeasti tuottoisia mahdollisuuksia.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Ominaisuus 3" />
              </div>
              <div class="text">
                <h4>Helppo ostaminen</h4>
                <p>
                  Tarjoamme kehittyneitä ominaisuuksia ja tukea kryptovaluuttojen kaupankäyntiin
                  yksinkertaisesti ja intuitiivisesti. Ei piilomaksuja, salamannopea toteutus. Tämä on
                  mahdollisuutesi maksimoida kaupankäyntivoitot tekoälyn avulla!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Ominaisuus 4" />
              </div>
              <div class="text">
                <h4>Digitaaliset varat</h4>
                <p>
                  Hyödynnä mahdollisuus maksimoida voitto varojen kaupankäynnistä — olipa kyse
                  kryptovaluutoista tai muista instrumenteista. Rakenna hajautettu salkku ohjelmistollamme
                  ja koneoppimisalgoritmeillamme. Nyt on aika ottaa askel ja aloittaa
                  kaupankäyntisi!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

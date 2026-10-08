<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Izdelek | ' . SITE_NAME . ' - AI trgovalna platforma';
$page_description = SITE_NAME . ' : napredna AI platforma za kriptovalute ' . geo_in() . '.';
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
              Z <?= e(SITE_NAME) ?> digitalna analiza pomaga graditi premoženje
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Zahvaljujoč vrhunski umetni inteligenci in naprednim algoritmom <?= e(SITE_NAME) ?>
              nenehno analizira globalne trge. Platforma tako hitro prepozna
              najbolj obetavne priložnosti. Zdaj je čas za korak k uspehu z
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Začni zdaj</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Tvoja digitalna trgovalna platforma all-in-one</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Prednost 1"
                  />
                </div>
                <h3>Upravljanje kriptovalut</h3>
                <p>Enostavno upravljaj vso digitalno imetje na enem mestu.</p>
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
                    alt="Prednost 2"
                  />
                </div>
                <h3>Vidiš informacije o vsem imetju na eni platformi in v enem vmesniku</h3>
                <p>Optimiziraj finance s jasnim pregledom.</p>
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
                    alt="Prednost 3"
                  />
                </div>
                <h3>Kapitalski trgi</h3>
                <p>Bodi pred trgom — s podatki in vpogledi v realnem času.</p>
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
                    alt="Prednost 4"
                  />
                </div>
                <h3>Mobilni dostop</h3>
                <p>
                  Popolnoma prilagojena mobilna stran omogoča spremljanje portfelja kadarkoli in kjerkoli.
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
                    alt="Prednost 5"
                  />
                </div>
                <h3>Statistika v živo</h3>
                <p>
                  Spremljaj donos in analitiko visoke natančnosti vsako sekundo
                  dneva.
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
              Prenesi aplikacijo danes in upravljaj finance v realnem času s telefona.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registracija</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Odkrij AI analizo platforme <?= e(SITE_NAME) ?> in intuitiven trgovalni
            vmesnik za imetje <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkcija 1" />
              </div>
              <div class="text">
                <h4>Portfelj</h4>
                <p>
                  Okrepi finančni profil z našimi preverjenimi in inovativnimi trgovalnimi
                  strategijami.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkcija 2" />
              </div>
              <div class="text">
                <h4>Kriptoanaliza</h4>
                <p>
                  Izkoristi najnovejšo generacijo umetne inteligence <?= e(SITE_NAME) ?> in njene
                  napredne algoritme strojnega učenja za hitro iskanje donosnih priložnosti.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkcija 3" />
              </div>
              <div class="text">
                <h4>Enostaven nakup</h4>
                <p>
                  Ponujamo napredne funkcije in podporo za enostavno in intuitivno trgovanje
                  s kriptovalutami. Brez skritih provizij, bliskovito izvajanje. To je tvoja
                  priložnost, da povečaš dobiček od trgovanja z močjo AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkcija 4" />
              </div>
              <div class="text">
                <h4>Digitalno imetje</h4>
                <p>
                  Izkoristi priložnost, da maksimiraš dobiček od trgovanja z imetjem — bodisi
                  kriptovalutami ali drugimi instrumenti. Zgradi diverzificiran portfelj z našo programsko opremo
                  in algoritmi strojnega učenja. Zdaj je čas za ta korak in začetek
                  tvojega trgovanja.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

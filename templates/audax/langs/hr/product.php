<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Proizvod | ' . SITE_NAME . ' - AI trgovačka platforma';
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
              Uz <?= e(SITE_NAME) ?> digitalna analiza pomaže graditi imovinu
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Zahvaljujući vrhunskoj umjetnoj inteligenciji i naprednim algoritmima <?= e(SITE_NAME) ?>
              kontinuirano analizira globalna tržišta. Platforma tako brzo prepoznaje
              najperspektivnije prilike. Sada je vrijeme za korak prema uspjehu uz
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Počni sada</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Tvoja digitalna trgovačka platforma all-in-one</h2>
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
                <h3>Upravljanje kriptovalutama</h3>
                <p>Jednostavno upravljaj svom digitalnom imovinom na jednom mjestu.</p>
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
                <h3>Vidiš informacije o svoj imovini na jednoj platformi i u jednom sučelju</h3>
                <p>Optimiziraj financije uz jasan pregled.</p>
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
                <h3>Tržišta kapitala</h3>
                <p>Budi ispred tržišta — uz podatke i uvide u stvarnom vremenu.</p>
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
                <h3>Mobilni pristup</h3>
                <p>
                  Potpuno optimizirana mobilna stranica omogućuje praćenje portfelja bilo kada i bilo gdje.
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
                <h3>Statistika uživo</h3>
                <p>
                  Prati prinos i analitiku visoke preciznosti svake sekunde
                  dana.
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
              Preuzmi aplikaciju danas i upravljaj financijama u stvarnom vremenu s telefona.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registracija</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Otkrij AI analizu platforme <?= e(SITE_NAME) ?> i intuitivno trgovačko
            sučelje za imovinu <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Značajka 1" />
              </div>
              <div class="text">
                <h4>Portfelj</h4>
                <p>
                  Ojačaj financijski profil našim provjerenim i inovativnim trgovačkim
                  strategijama.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Značajka 2" />
              </div>
              <div class="text">
                <h4>Kriptoanaliza</h4>
                <p>
                  Iskoristi najnoviju generaciju umjetne inteligencije <?= e(SITE_NAME) ?> i njezine
                  napredne algoritme strojnog učenja za brzo pronalaženje profitabilnih prilika.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Značajka 3" />
              </div>
              <div class="text">
                <h4>Jednostavna kupnja</h4>
                <p>
                  Nudimo napredne značajke i podršku za jednostavno i intuitivno trgovanje
                  kriptovalutama. Nema skrivenih naknada, munjevito izvršenje. To je tvoja
                  prilika da povećaš dobit od trgovanja snagom AI-ja.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Značajka 4" />
              </div>
              <div class="text">
                <h4>Digitalna imovina</h4>
                <p>
                  Iskoristi priliku da maksimiziraš dobit od trgovanja imovinom — bilo
                  kriptovalutama ili drugim instrumentima. Izgradi diverzificirani portfelj našim softverom
                  i algoritmima strojnog učenja. Sada je vrijeme za taj korak i početak
                  tvog trgovanja.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Termék | ' . SITE_NAME . ' - AI kereskedési platform';
$page_description = SITE_NAME . ' : fejlett AI-platform kriptovalutákhoz ' . geo_in() . '.';
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
              A <?= e(SITE_NAME) ?> digitális elemzése segíti a vagyonépítést
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Első osztályú mesterséges intelligenciánk és fejlett algoritmusaink révén a <?= e(SITE_NAME) ?>
              folyamatosan elemzi a globális piacokat. A platform így gyorsan azonosítja
              a legígéretesebb lehetőségeket. Itt az ideje lépni a siker felé a
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Kezdd el most</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Az all-in-one digitális kereskedési platformod</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Előny 1"
                  />
                </div>
                <h3>Kriptovaluta-kezelés</h3>
                <p>Könnyen kezeld az összes digitális eszközt egy helyen.</p>
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
                    alt="Előny 2"
                  />
                </div>
                <h3>Egy platformon és felületen látod az összes eszközöd adatait</h3>
                <p>Optimalizáld a pénzügyeket tiszta áttekintéssel.</p>
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
                    alt="Előny 3"
                  />
                </div>
                <h3>Tőkepiacok</h3>
                <p>Maradj a piac előtt — valós idejű adatokkal és áttekintésekkel.</p>
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
                    alt="Előny 4"
                  />
                </div>
                <h3>Mobilhozzáférés</h3>
                <p>
                  Teljesen optimalizált mobilwebünkkel bármikor, bárhol követheted a portfóliót.
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
                    alt="Előny 5"
                  />
                </div>
                <h3>Élő statisztikák</h3>
                <p>
                  Kövesd a hozamot és az elemzéseket nagy pontossággal, a nap
                  minden másodpercében.
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
              Töltsd le az alkalmazást ma, és kezeld a pénzügyeket valós időben a telefonról.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Regisztráció</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Fedezd fel a <?= e(SITE_NAME) ?> AI-elemzését és az intuitív eszköz-
            kereskedési felületet <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkció 1" />
              </div>
              <div class="text">
                <h4>Portfólió</h4>
                <p>
                  Erősítsd a pénzügyi profilod bevált és innovatív kereskedési
                  stratégiáinkkal.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkció 2" />
              </div>
              <div class="text">
                <h4>Kriptoanalízis</h4>
                <p>
                  Használd a <?= e(SITE_NAME) ?> legújabb generációs mesterséges intelligenciáját és
                  fejlett gépi tanulási algoritmusait a jövedelmező lehetőségek gyors megtalálásához.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkció 3" />
              </div>
              <div class="text">
                <h4>Egyszerű vásárlás</h4>
                <p>
                  Fejlett funkciókat és támogatást adunk az egyszerű, intuitív
                  kriptokereskedéshez. Nincs rejtett díj, villámgyors végrehajtás. Ez a te
                  lehetőséged, hogy AI-erővel növeld a kereskedési nyereséget.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkció 4" />
              </div>
              <div class="text">
                <h4>Digitális eszközök</h4>
                <p>
                  Használd ki a lehetőséget, hogy maximalizáld az eszközkereskedés nyereségét — legyen szó
                  kriptovalutáról vagy más instrumentumokról. Építs diverzifikált portfóliót szoftverünkkel
                  és gépi tanulási algoritmusokkal. Itt az ideje megtenni a lépést, és elkezdeni
                  a kereskedést.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

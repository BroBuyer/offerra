<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ajánlat | ' . SITE_NAME . ' - Kezdd el';
$page_description = 'Kezdj el kereskedni a ' . SITE_NAME . ' platformon. Regisztrálj most ingyen.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
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
              Nyiss számlát ma a <?= e(SITE_NAME) ?> platformon. A portfólió irányítópultja
              kész.
            </h1>
            <p>
              Kevesebb mint 5 perc alatt ingyenes számlát nyitsz, befizetsz, és elkezdesz
              kereskedni. Kezdd ma: ez a lehetőség egy szilárd pénzügyi alapra.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Regisztráció</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Hogyan működik</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Számlanyitás ikon" />
                <h3>Számlanyitás</h3>
                <p>
                  A számlát néhány másodperc alatt megnyithatod. Azonnal hozzáférsz a
                  kereskedési eszközökhöz és a várakozó lehetőségekhez.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Befizetés ikon" />
                <h3>Fizess be</h3>
                <p>Fizess be, hogy elkezdhess kereskedni.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Vétel és eladás ikon" />
                <h3>Vétel és eladás</h3>
                <p>
                  Erősítsd a portfóliót magabiztosan. Lépj a piacra
                  habozás nélkül.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Ne maradj le! Csatlakozz ezernyi traderhez, akik eredményeket érnek el.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Kövesd a portfóliót folyamatos egyenlegfrissítéssel és valós idejű nyereséggel.</h3>
            </div>
            <div class="half right">
              <p>
                Ne maradj le a részletekről a <?= e(SITE_NAME) ?> mélyreható elemzésével a
                kereskedési mintákról és a folyamatosan frissülő adatokról. Követed a kulcsmutatókat
                — egyenleg, nyereség és áringadozás. Ezekkel az eszközökkel
                növeled a hozamot, és átgondolt befektetési döntéseket hozol. A jövő
                most van: kezdd el ma.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Kezdd el most</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

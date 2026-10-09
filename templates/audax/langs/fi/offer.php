<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tarjous | ' . SITE_NAME . ' - Aloita matkasi';
$page_description = 'Aloita kaupankäynti palvelussa ' . SITE_NAME . '. Rekisteröidy nyt ilmaiseksi.';
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
              Luo tilisi tänään palvelussa <?= e(SITE_NAME) ?>. Henkilökohtainen salkkukojelautasi on
              valmis!
            </h1>
            <p>
              Alle 5 minuutissa voit luoda ilmaisen tilin, tallettaa ja aloittaa
              kaupankäynnin. Aloita tänään: tässä on mahdollisuutesi rakentaa vakaa taloudellinen tulevaisuus.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Rekisteröidy</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Näin se toimii</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Tilin luonti -kuvake" />
                <h3>Tilin luominen</h3>
                <p>
                  Voit luoda tilisi muutamassa sekunnissa. Saat heti pääsyn
                  kaupankäyntityökaluihimme ja odottaviin mahdollisuuksiin.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Talletuskuvake" />
                <h3>Talleta varoja</h3>
                <p>Talleta varoja aloittaaksesi kaupankäynnin.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Osto- ja myyntikuvake" />
                <h3>Aloita ostaminen ja myyminen</h3>
                <p>
                  Vahvista salkkuasi luottavaisin mielin. Hyppää markkinoille ilman
                  epäröintiä!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Älä jää paitsi! Liity tuhansien tuloksia saavien kauppiaiden joukkoon!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Seuraa salkkuasi jatkuvilla saldopäivityksillä ja reaaliaikaisella tuotolla.</h3>
            </div>
            <div class="half right">
              <p>
                Älä missaa yhtään yksityiskohtaa <?= e(SITE_NAME) ?> -palvelun syvällisellä analyysillä
                kaupankäyntimalleista ja jatkuvasti päivittyvästä datasta. Voit seurata kaikkia keskeisiä lukuja
                — saldoa, voittoja ja kurssivaihteluja. Näillä tehokkailla työkaluilla
                maksimoit tuottosi ja teet harkittuja sijoituspäätöksiä. Tulevaisuus
                on nyt: aloita tänään!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Aloita nyt</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Akcija | ' . SITE_NAME . ' - Pradėkite';
$page_description = 'Pradėkite prekybą ' . SITE_NAME . '. Registruokitės nemokamai dabar.';
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
              Atidarykite paskyrą šiandien <?= e(SITE_NAME) ?>. Portfelio valdymo sritis
              paruošta.
            </h1>
            <p>
              Per mažiau nei 5 minutes atidarysite nemokamą paskyrą, įnešite lėšų ir pradėsite
              prekybą. Pradėkite šiandien: tai galimybė sukurti tvirtą finansinį pagrindą.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registruotis</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Kaip tai veikia</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Paskyros atidarymo piktograma" />
                <h3>Paskyros atidarymas</h3>
                <p>
                  Paskyrą galite atidaryti per kelias sekundes. Iš karto gausite prieigą prie
                  prekybos įrankių ir jūsų laukiančių galimybių.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Įnašo piktograma" />
                <h3>Įneškite lėšas</h3>
                <p>Įneškite lėšas, kad pradėtumėte prekybą.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Pirkimo ir pardavimo piktograma" />
                <h3>Pirkimas ir pardavimas</h3>
                <p>
                  Sustiprinkite portfelį užtikrintai. Ženkite į rinką be
                  dvejonių.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Nepraleiskite progos! Prisijunkite prie tūkstančių prekiautojų, kurie pasiekia rezultatų.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Stebėkite portfelį su nuolatiniais balanso atnaujinimais ir pelnu realiuoju laiku.</h3>
            </div>
            <div class="half right">
              <p>
                Nepraleiskite detalių dėl <?= e(SITE_NAME) ?> išsamios
                prekybos modelių analizės ir nuolat atnaujinamų duomenų. Stebite visus pagrindinius rodiklius
                — balansą, pelną ir kainų svyravimus. Šiais įrankiais
                didinate grąžą ir priimate apgalvotus investicinius sprendimus. Ateitis
                yra dabar: pradėkite šiandien.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Pradėkite dabar</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

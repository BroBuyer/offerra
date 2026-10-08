<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ofertă | ' . SITE_NAME . ' - Începe';
$page_description = 'Începe să tranzacționezi pe ' . SITE_NAME . '. Înregistrează-te acum gratuit.';
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
              Deschide un cont astăzi pe <?= e(SITE_NAME) ?>. Panoul portofoliului este
              gata.
            </h1>
            <p>
              În mai puțin de 5 minute îți deschizi contul gratuit, depui și începi
              să tranzacționezi. Începe astăzi: e ocazia unui fundament financiar solid.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Înregistrare</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Cum funcționează</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Pictogramă creare cont" />
                <h3>Crearea contului</h3>
                <p>
                  Îți poți crea contul în câteva secunde. Primești imediat acces la
                  instrumentele de tranzacționare și oportunitățile care te așteaptă.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Pictogramă depunere" />
                <h3>Depune fonduri</h3>
                <p>Depune fonduri ca să începi să tranzacționezi.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Pictogramă cumpărare și vânzare" />
                <h3>Cumpărare și vânzare</h3>
                <p>
                  Consolidează-ți portofoliul cu încredere. Intră pe piață fără
                  ezitare.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Nu rata! Alătură-te miilor de traderi care obțin rezultate.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Urmărește portofoliul cu actualizări continue ale soldului și profit în timp real.</h3>
            </div>
            <div class="half right">
              <p>
                Nu rata detaliile mulțumită analizei aprofundate <?= e(SITE_NAME) ?> a
                modelelor de tranzacționare și datelor actualizate constant. Urmărești toți indicatorii-cheie
                — sold, profit și fluctuații de preț. Cu aceste instrumente
                îți crești randamentul și iei decizii de investiție informate. Viitorul
                este acum: începe astăzi.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Începe acum</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produs | ' . SITE_NAME . ' - platformă de tranzacționare AI';
$page_description = SITE_NAME . ' : platformă AI avansată pentru criptomonede ' . geo_in() . '.';
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
              Cu <?= e(SITE_NAME) ?> analiza digitală te ajută să-ți crești averea
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Datorită inteligenței artificiale de top și algoritmilor avansați, <?= e(SITE_NAME) ?>
              analizează continuu piețele globale. Platforma identifică astfel rapid
              cele mai promițătoare oportunități. Acum e momentul pentru un pas spre succes cu
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Începe acum</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Platforma ta digitală de tranzacționare all-in-one</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Avantaj 1"
                  />
                </div>
                <h3>Gestionarea criptomonedelor</h3>
                <p>Gestionează ușor toate activele digitale într-un singur loc.</p>
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
                    alt="Avantaj 2"
                  />
                </div>
                <h3>Vezi informațiile despre toate activele pe o singură platformă și interfață</h3>
                <p>Optimizează-ți finanțele cu o imagine clară.</p>
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
                    alt="Avantaj 3"
                  />
                </div>
                <h3>Piețe de capital</h3>
                <p>Rămâi înaintea pieței — cu date și insight-uri în timp real.</p>
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
                    alt="Avantaj 4"
                  />
                </div>
                <h3>Acces mobil</h3>
                <p>
                  Site-ul mobil complet optimizat îți permite să urmărești portofoliul oricând, oriunde.
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
                    alt="Avantaj 5"
                  />
                </div>
                <h3>Statistici live</h3>
                <p>
                  Urmărește randamentul și analitica cu precizie ridicată, în fiecare secundă
                  a zilei.
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
              Descarcă aplicația astăzi și gestionează-ți finanțele în timp real de pe telefon.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Înregistrare</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Descoperă analiza AI a platformei <?= e(SITE_NAME) ?> și interfața intuitivă de
            tranzacționare a activelor <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funcție 1" />
              </div>
              <div class="text">
                <h4>Portofoliu</h4>
                <p>
                  Consolidează-ți profilul financiar cu strategiile noastre de tranzacționare
                  verificate și inovatoare.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funcție 2" />
              </div>
              <div class="text">
                <h4>Analiză crypto</h4>
                <p>
                  Folosește cea mai nouă generație de inteligență artificială <?= e(SITE_NAME) ?> și
                  algoritmii săi avansați de învățare automată pentru a găsi rapid oportunități profitabile.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funcție 3" />
              </div>
              <div class="text">
                <h4>Cumpărare simplă</h4>
                <p>
                  Oferim funcții avansate și suport pentru o tranzacționare simplă și intuitivă a
                  criptomonedelor. Fără comisioane ascunse, execuție ultra-rapidă. Este șansa ta
                  de a-ți crește profitul din tranzacționare cu puterea AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funcție 4" />
              </div>
              <div class="text">
                <h4>Active digitale</h4>
                <p>
                  Profită de ocazie să maximizezi profitul din tranzacționarea activelor — fie
                  criptomonede, fie alte instrumente. Construiește un portofoliu diversificat cu software-ul nostru
                  și algoritmii de învățare automată. Acum e momentul pentru acest pas și începutul
                  tranzacționării tale.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

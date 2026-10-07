<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - obchodná platforma AI';
$page_description = SITE_NAME . ' : pokročilá AI platforma pre kryptomeny ' . geo_in() . '.';
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
              S <?= e(SITE_NAME) ?> digitálna analýza pomáha budovať majetok
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Vďaka umelej inteligencii najvyššej triedy a pokročilým algoritmom <?= e(SITE_NAME) ?>
              neustále analyzuje globálne trhy. Platforma tak rýchlo zachytí
              najsľubnejšie príležitosti. Teraz je čas urobiť krok k úspechu s
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Začať teraz</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Vaša digitálna obchodná platforma all-in-one</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Výhoda 1"
                  />
                </div>
                <h3>Správa kryptomien</h3>
                <p>Ľahko spravujte všetky digitálne aktíva na jednom mieste.</p>
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
                    alt="Výhoda 2"
                  />
                </div>
                <h3>Vidíte informácie o všetkých aktívach na jednej platforme a v jednom rozhraní</h3>
                <p>Optimalizujte financie vďaka jasnému prehľadu.</p>
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
                    alt="Výhoda 3"
                  />
                </div>
                <h3>Kapitálové trhy</h3>
                <p>Buďte pred trhom — vďaka dátam a prehľadom v reálnom čase.</p>
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
                    alt="Výhoda 4"
                  />
                </div>
                <h3>Mobilný prístup</h3>
                <p>
                  Plne optimalizovaný mobilný web umožňuje sledovať portfólio kedykoľvek a kdekoľvek.
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
                    alt="Výhoda 5"
                  />
                </div>
                <h3>Štatistiky naživo</h3>
                <p>
                  Sledujte výnos a analýzy s vysokou presnosťou každú sekundu
                  dňa.
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
              Stiahnite si aplikáciu dnes a spravujte financie v reálnom čase z telefónu.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrovať</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Objavte AI analýzu platformy <?= e(SITE_NAME) ?> a intuitívne obchodné
            rozhranie pre aktíva <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkcia 1" />
              </div>
              <div class="text">
                <h4>Portfólio</h4>
                <p>
                  Posilnite finančný profil našimi osvedčenými a inovatívnymi obchodnými
                  stratégiami.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkcia 2" />
              </div>
              <div class="text">
                <h4>Kryptoanalýza</h4>
                <p>
                  Využite najnovšiu generáciu umelej inteligencie <?= e(SITE_NAME) ?> a jej
                  pokročilé algoritmy strojového učenia na rýchle nájdenie ziskových príležitostí.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkcia 3" />
              </div>
              <div class="text">
                <h4>Ľahký nákup</h4>
                <p>
                  Ponúkame pokročilé funkcie a podporu pre jednoduché a intuitívne obchodovanie
                  kryptomien. Žiadne skryté poplatky, bleskové vykonanie. To je vaša
                  príležitosť zvýšiť zisk z tradingu silou AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkcia 4" />
              </div>
              <div class="text">
                <h4>Digitálne aktíva</h4>
                <p>
                  Využite šancu maximalizovať zisk z obchodovania aktív — či už
                  kryptomeny, alebo iné nástroje. Zostavte diverzifikované portfólio naším softvérom
                  a algoritmami strojového učenia. Teraz je čas urobiť ten krok a začať
                  svoj trading.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

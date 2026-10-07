<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - obchodní platforma AI';
$page_description = SITE_NAME . ' : pokročilá AI platforma pro kryptoměny ' . geo_in() . '.';
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
              S <?= e(SITE_NAME) ?> digitální analýza pomáhá budovat majetek
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Díky umělé inteligenci nejvyšší třídy a pokročilým algoritmům <?= e(SITE_NAME) ?>
              neustále analyzuje globální trhy. Platforma tak rychle zachytí
              nejslibnější příležitosti. Teď je čas udělat krok k úspěchu s
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Začít nyní</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Vaše digitální obchodní platforma all-in-one</h2>
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
                <h3>Správa kryptoměn</h3>
                <p>Snadno spravujte všechna digitální aktiva na jednom místě.</p>
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
                <h3>Vidíte informace o všech aktivech na jedné platformě a v jednom rozhraní</h3>
                <p>Optimalizujte finance díky jasnému přehledu.</p>
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
                <p>Buďte před trhem — díky datům a přehledům v reálném čase.</p>
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
                <h3>Mobilní přístup</h3>
                <p>
                  Plně optimalizovaný mobilní web umožňuje sledovat portfolio kdykoli a kdekoli.
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
                <h3>Statistiky živě</h3>
                <p>
                  Sledujte výnos a analýzy s vysokou přesností každou sekundu
                  dne.
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
              Stáhněte si aplikaci dnes a spravujte finance v reálném čase z telefonu.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrovat</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Objevte AI analýzu platformy <?= e(SITE_NAME) ?> a intuitivní obchodní
            rozhraní pro aktiva <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkce 1" />
              </div>
              <div class="text">
                <h4>Portfolio</h4>
                <p>
                  Posilte finanční profil našimi osvědčenými a inovativními obchodními
                  strategiemi.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkce 2" />
              </div>
              <div class="text">
                <h4>Kryptoanalýza</h4>
                <p>
                  Využijte nejnovější generaci umělé inteligence <?= e(SITE_NAME) ?> a její
                  pokročilé algoritmy strojového učení k rychlému nalezení ziskových příležitostí.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkce 3" />
              </div>
              <div class="text">
                <h4>Snadný nákup</h4>
                <p>
                  Nabízíme pokročilé funkce a podporu pro jednoduché a intuitivní obchodování
                  kryptoměn. Žádné skryté poplatky, bleskové provedení. To je vaše
                  příležitost zvýšit zisk z tradingu silou AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkce 4" />
              </div>
              <div class="text">
                <h4>Digitální aktiva</h4>
                <p>
                  Využijte šanci maximalizovat zisk z obchodování aktiv — ať už
                  kryptoměny, nebo jiné nástroje. Sestavte diverzifikované portfolio naším softwarem
                  a algoritmy strojového učení. Teď je čas udělat ten krok a začít
                  svůj trading.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

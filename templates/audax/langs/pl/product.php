<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - platforma tradingowa AI';
$page_description = SITE_NAME . ' : zaawansowana platforma AI dla kryptowalut ' . geo_in() . '.';
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
              Z <?= e(SITE_NAME) ?> cyfrowa analityka pomaga budować majątek
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Dzięki sztucznej inteligencji najwyższej klasy i zaawansowanym algorytmom <?= e(SITE_NAME) ?>
              nieustannie analizuje globalne rynki. Dzięki temu platforma szybko wychwytuje
              najbardziej obiecujące okazje. Teraz czas zrobić krok ku sukcesowi z
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Zacznij teraz</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Twoja cyfrowa platforma tradingowa all-in-one</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Korzyść 1"
                  />
                </div>
                <h3>Zarządzanie kryptowalutami</h3>
                <p>Łatwo zarządzaj całym cyfrowym majątkiem w jednym miejscu.</p>
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
                    alt="Korzyść 2"
                  />
                </div>
                <h3>Zobacz informacje o wszystkich aktywach na jednej platformie i w jednym interfejsie</h3>
                <p>Optymalizuj finanse dzięki jasnemu przeglądowi.</p>
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
                    alt="Korzyść 3"
                  />
                </div>
                <h3>Rynki kapitałowe</h3>
                <p>Bądź przed rynkiem — dzięki danym i wglądom w czasie rzeczywistym.</p>
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
                    alt="Korzyść 4"
                  />
                </div>
                <h3>Dostęp mobilny</h3>
                <p>
                  W pełni zoptymalizowana strona mobilna pozwala śledzić portfel kiedy chcesz, gdzie chcesz.
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
                    alt="Korzyść 5"
                  />
                </div>
                <h3>Statystyki na żywo</h3>
                <p>
                  Śledź zwrot i analitykę z dużą precyzją, każdej sekundy
                  dnia.
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
              Pobierz aplikację dziś i zarządzaj finansami w czasie rzeczywistym ze smartfona.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Zarejestruj</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Odkryj analitykę AI platformy <?= e(SITE_NAME) ?> i intuicyjny interfejs tradingu
            aktywami <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkcja 1" />
              </div>
              <div class="text">
                <h4>Portfel</h4>
                <p>
                  Wzmocnij profil finansowy naszymi sprawdzonymi i innowacyjnymi strategiami
                  tradingowymi.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkcja 2" />
              </div>
              <div class="text">
                <h4>Analiza krypto</h4>
                <p>
                  Wykorzystaj najnowszą generację sztucznej inteligencji <?= e(SITE_NAME) ?> i jej
                  zaawansowane algorytmy uczenia maszynowego, by szybko znajdować zyskowne okazje.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkcja 3" />
              </div>
              <div class="text">
                <h4>Łatwy zakup</h4>
                <p>
                  Oferujemy zaawansowane funkcje i wsparcie, by handlować kryptowalutami
                  prosto i intuicyjnie. Bez ukrytych opłat, błyskawiczna realizacja. To Twoja
                  szansa, by zwiększyć zysk z tradingu mocą AI.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkcja 4" />
              </div>
              <div class="text">
                <h4>Aktywa cyfrowe</h4>
                <p>
                  Wykorzystaj szansę, by maksymalizować zysk z handlu aktywami — niezależnie czy to
                  kryptowaluty, czy inne instrumenty. Zbuduj zdywersyfikowany portfel naszym oprogramowaniem
                  i algorytmami uczenia maszynowego. Teraz czas zrobić ten krok i rozpocząć
                  swój trading.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

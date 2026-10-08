<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkts | ' . SITE_NAME . ' - AI tirdzniecības platforma';
$page_description = SITE_NAME . ' : progresīva AI platforma kriptovalūtām ' . geo_in() . '.';
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
              Ar <?= e(SITE_NAME) ?> digitālā analīze palīdz veidot bagātību
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Pateicoties augstākās klases mākslīgajam intelektam un progresīviem algoritmiem, <?= e(SITE_NAME) ?>
              nepārtraukti analizē globālos tirgus. Platforma tā ātri atpazīst
              visperspektīvākās iespējas. Tagad ir laiks spert soli pretī panākumiem ar
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Sāciet tagad</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Jūsu digitālā tirdzniecības platforma all-in-one</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Priekšrocība 1"
                  />
                </div>
                <h3>Kriptovalūtu pārvaldība</h3>
                <p>Ērti pārvaldiet visus digitālos aktīvus vienuviet.</p>
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
                    alt="Priekšrocība 2"
                  />
                </div>
                <h3>Redzat informāciju par visiem aktīviem vienā platformā un saskarnē</h3>
                <p>Optimizējiet finanses ar skaidru pārskatu.</p>
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
                    alt="Priekšrocība 3"
                  />
                </div>
                <h3>Kapitāla tirgi</h3>
                <p>Esiet priekšā tirgum — ar datiem un ieskatiem reāllaikā.</p>
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
                    alt="Priekšrocība 4"
                  />
                </div>
                <h3>Mobilā piekļuve</h3>
                <p>
                  Pilnībā pielāgotā mobilā vietne ļauj sekot portfelim jebkurā laikā un vietā.
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
                    alt="Priekšrocība 5"
                  />
                </div>
                <h3>Statistika tiešraidē</h3>
                <p>
                  Sekojiet ienesīgumam un analitikai ar augstu precizitāti katru sekundi
                  dienā.
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
              Lejupielādējiet lietotni šodien un pārvaldiet finanses reāllaikā no tālruņa.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Reģistrēties</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Atklājiet <?= e(SITE_NAME) ?> platformas AI analīzi un intuitīvo
            aktīvu tirdzniecības saskarni <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funkcija 1" />
              </div>
              <div class="text">
                <h4>Portfelis</h4>
                <p>
                  Nostipriniet finanšu profilu ar mūsu pārbaudītajām un inovatīvajām tirdzniecības
                  stratēģijām.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funkcija 2" />
              </div>
              <div class="text">
                <h4>Kriptoanalīze</h4>
                <p>
                  Izmantojiet jaunākās paaudzes <?= e(SITE_NAME) ?> mākslīgo intelektu un tā
                  progresīvos mašīnmācīšanās algoritmus, lai ātri atrastu ienesīgas iespējas.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funkcija 3" />
              </div>
              <div class="text">
                <h4>Vienkārša pirkšana</h4>
                <p>
                  Piedāvājam progresīvas funkcijas un atbalstu vienkāršai un intuitīvai
                  kriptovalūtu tirdzniecībai. Bez slēptām komisijām, zibenīga izpilde. Tā ir jūsu
                  iespēja palielināt tirdzniecības peļņu ar AI spēku.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funkcija 4" />
              </div>
              <div class="text">
                <h4>Digitālie aktīvi</h4>
                <p>
                  Izmantojiet iespēju maksimizēt peļņu no aktīvu tirdzniecības — vai tās būtu
                  kriptovalūtas, vai citi instrumenti. Veidojiet diversificētu portfeli ar mūsu programmatūru
                  un mašīnmācīšanās algoritmiem. Tagad ir laiks šim solim un sākt
                  jūsu tirdzniecību.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

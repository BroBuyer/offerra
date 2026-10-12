<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ürün | ' . SITE_NAME . ' - Yapay zekâ işlem platformu';
$page_description = SITE_NAME . ' : kripto paralar için gelişmiş yapay zekâ platformu ' . geo_in() . '.';
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
              <?= e(SITE_NAME) ?> ile <?= e(geo_in()) ?> dijital analitikle güçlü bir servet büyümesi hedefleyebilirsin
            </h1>
            <p>
              Üst düzey yapay zekâmız ve gelişmiş algoritmalarımız sayesinde <?= e(SITE_NAME) ?>
              küresel piyasaları sürekli analiz eder. Böylece platformumuz hızla
              en kârlı fırsatları tespit eder. Başarıya doğru adım atmak için şimdi tam zamanı
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Hemen başla</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Hepsi bir arada dijital işlem platformun</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Fayda 1"
                  />
                </div>
                <h3>Kripto para yönetimi</h3>
                <p>Tüm dijital varlıklarını tek yerden kolayca yönet.</p>
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
                    alt="Fayda 2"
                  />
                </div>
                <h3>Tüm varlıklarınla ilgili bilgilere tek platform ve arayüzden eriş</h3>
                <p>Net bir genel bakışla finansını optimize et.</p>
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
                    alt="Fayda 3"
                  />
                </div>
                <h3>Sermaye piyasaları</h3>
                <p>Gerçek zamanlı veri ve içgörülerle piyasada bir adım önde ol.</p>
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
                    alt="Fayda 4"
                  />
                </div>
                <h3>Mobil erişim</h3>
                <p>
                  Tam optimize mobil sitemizle portföyünü istediğin zaman, istediğin yerden takip et.
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
                    alt="Fayda 5"
                  />
                </div>
                <h3>Canlı istatistikler</h3>
                <p>
                  Getirini ve analitiğini olağanüstü hassasiyetle takip et — günün
                  her saniyesinde.
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
              Uygulamayı bugün indir ve finansını akıllı telefonundan gerçek zamanlı yönet.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Kayıt ol</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            <?= e(SITE_NAME) ?> platformunun son teknoloji yapay zekâ analitiğini ve sezgisel
            varlık işlem arayüzünü <?= e(geo_in()) ?> keşfet.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Özellik 1" />
              </div>
              <div class="text">
                <h4>Portföy</h4>
                <p>
                  Kanıtlanmış ve yenilikçi işlem stratejilerimizle finansal profilini
                  güçlendir.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Özellik 2" />
              </div>
              <div class="text">
                <h4>Kripto analizi</h4>
                <p>
                  <?= e(SITE_NAME) ?> yapay zekâsının en yeni neslini ve gelişmiş makine öğrenimi
                  algoritmalarını kullanarak hızla kârlı fırsatları bul.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Özellik 3" />
              </div>
              <div class="text">
                <h4>Kolay alım</h4>
                <p>
                  Kripto paraları basit ve sezgisel şekilde işlemek için gelişmiş özellikler ve destek sunuyoruz.
                  Gizli ücret yok, ultra hızlı işlem. Yapay zekânın gücüyle işlem kârını maksimize etme
                  fırsatın burada!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Özellik 4" />
              </div>
              <div class="text">
                <h4>Dijital varlıklar</h4>
                <p>
                  Varlık işleminden kârı maksimize etme fırsatını değerlendir — ister
                  kripto ister diğer varlıklar olsun. Yazılımımız ve makine öğrenimi algoritmalarımızla çeşitlendirilmiş portföy oluştur.
                  O adımı atmak ve işlem yolculuğuna başlamak için şimdi
                  tam zamanı!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

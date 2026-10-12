<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Teklif | ' . SITE_NAME . ' - Yolculuğuna başla';
$page_description = 'İşleme başla: ' . SITE_NAME . '. Ücretsiz hemen kayıt ol.';
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
              Bugün <?= e(SITE_NAME) ?>'de hesabını oluştur. Kişisel portföy panelin
              hazır!
            </h1>
            <p>
              5 dakikadan kısa sürede ücretsiz hesabını açabilir, yatırım yapabilir ve
              işleme başlayabilirsin. Bugün başla: sağlam bir finansal gelecek kurma fırsatın burada.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Kayıt ol</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Nasıl çalışır</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Hesap oluşturma simgesi" />
                <h3>Hesap oluşturma</h3>
                <p>
                  Hesabını birkaç saniyede oluşturabilirsin. İşlem araçlarımıza ve seni bekleyen
                  fırsatlara anında erişirsin.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Yatırım simgesi" />
                <h3>Para yatır</h3>
                <p>İşleme başlamak için para yatırman yeterli.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Alım satım simgesi" />
                <h3>Alım satıma başla</h3>
                <p>
                  Portföyünü güvenle güçlendir. Piyasaya
                  tereddüt etmeden atıl!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Kaçırma! Binlerce başarılı trader'a katıl!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Sürekli bakiye güncellemeleri ve gerçek zamanlı kârla portföyünü takip et.</h3>
            </div>
            <div class="half right">
              <p>
                <?= e(SITE_NAME) ?>'in işlem kalıpları ve sürekli güncellenen veriler üzerindeki derinlemesine analiziyle
                hiçbir ayrıntıyı kaçırma. Bakiye, kâr ve fiyat dalgalanmaları gibi tüm önemli istatistiklerini
                takip edebilirsin. Bu güçlü araçlarla getirini maksimize eder, bilinçli ve stratejik yatırım kararları
                alırsın. Gelecek
                şimdi: bugün başla!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Hemen başla</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tawaran | ' . SITE_NAME . ' - Mulakan perjalanan kamu';
$page_description = 'Mula berdagang di ' . SITE_NAME . '. Daftar sekarang secara percuma.';
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
              Cipta akaun kamu hari ini di <?= e(SITE_NAME) ?>. Papan pemuka portfolio peribadi kamu sudah
              sedia!
            </h1>
            <p>
              Dalam masa kurang 5 minit kamu boleh cipta akaun percuma, buat deposit dan mula
              berdagang. Mula hari ini: ini peluang kamu untuk bina masa depan kewangan yang kukuh.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Daftar</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Cara ia berfungsi</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikon penciptaan akaun" />
                <h3>Penciptaan akaun</h3>
                <p>
                  Kamu boleh cipta akaun dalam beberapa saat. Kamu akan dapat akses segera ke
                  alat dagangan kami dan peluang yang menanti kamu.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikon deposit" />
                <h3>Depositkan wang</h3>
                <p>Hanya depositkan wang untuk mula berdagang.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikon beli dan jual" />
                <h3>Mula beli dan jual</h3>
                <p>
                  Perkukuh portfolio kamu dengan yakin. Terjun ke pasaran tanpa
                  ragu-ragu!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Jangan lepaskan! Sertai beribu-ribu pedagang yang berjaya!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Jejak portfolio kamu dengan kemas kini baki berterusan dan keuntungan masa nyata.</h3>
            </div>
            <div class="half right">
              <p>
                Jangan terlepas satu butiran pun dengan analisis mendalam <?= e(SITE_NAME) ?> tentang
                corak dagangan dan data yang sentiasa dikemas kini. Kamu boleh jejak semua statistik utama
                seperti baki, keuntungan dan turun naik harga. Dengan alat berkuasa ini kamu
                maksimumkan pulangan dan buat keputusan pelaburan yang tepat dan strategik. Masa depan
                adalah sekarang: mula hari ini!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Mula sekarang</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

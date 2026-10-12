<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Penawaran | ' . SITE_NAME . ' - Mulai perjalanan kamu';
$page_description = 'Mulai trading di ' . SITE_NAME . '. Daftar sekarang gratis.';
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
              Buat akun kamu hari ini di <?= e(SITE_NAME) ?>. Dasbor portofolio pribadi kamu sudah
              siap!
            </h1>
            <p>
              Dalam waktu kurang dari 5 menit kamu bisa buat akun gratis, setor dana, dan mulai
              berdagang. Mulai hari ini: ini peluang kamu untuk bangun masa depan keuangan yang solid.
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
            <h2>Cara kerjanya</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikon pembuatan akun" />
                <h3>Pembuatan akun</h3>
                <p>
                  Kamu bisa buat akun dalam beberapa detik. Kamu langsung dapat akses ke
                  alat trading kami dan peluang yang menanti kamu.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikon deposit" />
                <h3>Setor dana</h3>
                <p>Cukup setor dana untuk mulai berdagang.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikon beli dan jual" />
                <h3>Mulai beli dan jual</h3>
                <p>
                  Perkuat portofolio kamu dengan yakin. Terjun ke pasar tanpa
                  ragu!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Jangan lewatkan! Gabung bersama ribuan trader sukses!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Lacak portofolio kamu dengan update saldo terus-menerus dan keuntungan real-time.</h3>
            </div>
            <div class="half right">
              <p>
                Jangan lewatkan satu detail pun dengan analisis mendalam <?= e(SITE_NAME) ?> tentang
                pola trading dan data yang terus diperbarui. Kamu bisa lacak semua statistik utama
                seperti saldo, keuntungan, dan fluktuasi harga. Dengan alat kuat ini kamu
                maksimalkan imbal hasil dan buat keputusan investasi yang tepat dan strategis. Masa depan
                adalah sekarang: mulai hari ini!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Mulai sekarang</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Terima kasih | ' . SITE_NAME;
$page_description = 'Permintaan kamu telah diterima oleh pasukan ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
$page_noindex = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Terima kasih — kami akan menghubungi kamu</h1>
            <p>
              Permintaan kamu telah diterima oleh pasukan <?= e(SITE_NAME) ?>. Seorang pakar akan
              menghubungi kamu sebentar lagi untuk bantu kamu bermula.
            </p>
            <p>
              Sementara itu kamu boleh baca lagi tentang
              <a href="<?= page_url('product.php') ?>">cara platform berfungsi</a> atau layari
              <a href="<?= page_url('faq.php') ?>">soalan lazim</a>.
            </p>
            <p><a href="<?= page_url() ?>">Kembali ke laman utama</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

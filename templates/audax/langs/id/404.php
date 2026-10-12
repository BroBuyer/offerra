<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Halaman tidak ditemukan | ' . SITE_NAME;
$page_description = 'Halaman tidak ditemukan — ' . SITE_NAME;
$page_canonical = page_url('404.php');
$active_page = '404';
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
            <h1>Halaman tidak ditemukan</h1>
            <p>Tautan itu tidak ada. <a href="<?= page_url() ?>">Kembali ke beranda</a>.</p>
            <p>
              Kamu juga bisa <a href="<?= page_url('sign.php') ?>">buka akun</a> atau
              <a href="<?= page_url('contacts.php') ?>">hubungi kami</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

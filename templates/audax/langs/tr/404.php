<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Sayfa bulunamadı | ' . SITE_NAME;
$page_description = 'Sayfa bulunamadı — ' . SITE_NAME;
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
            <h1>Sayfa bulunamadı</h1>
            <p>Bu bağlantı mevcut değil. <a href="<?= page_url() ?>">Ana sayfaya dön</a>.</p>
            <p>
              Ayrıca <a href="<?= page_url('sign.php') ?>">hesap açabilir</a> veya
              <a href="<?= page_url('contacts.php') ?>">bizimle iletişime geçebilirsin</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

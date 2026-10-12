<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Teşekkürler | ' . SITE_NAME;
$page_description = 'Talebin ' . SITE_NAME . ' ekibi tarafından alındı.';
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
            <h1>Teşekkürler — seninle iletişime geçeceğiz</h1>
            <p>
              Talebin <?= e(SITE_NAME) ?> ekibi tarafından alındı. Bir uzman
              başlamana yardımcı olmak için kısa süre içinde seninle iletişime geçecek.
            </p>
            <p>
              Bu arada daha fazlasını okuyabilirsin:
              <a href="<?= page_url('product.php') ?>">platform nasıl çalışır</a> veya
              <a href="<?= page_url('faq.php') ?>">sık sorulan sorulara göz at</a>.
            </p>
            <p><a href="<?= page_url() ?>">Ana sayfaya dön</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

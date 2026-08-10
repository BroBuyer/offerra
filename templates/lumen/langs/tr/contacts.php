<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('İletişim');
$page_description = '' . SITE_NAME . ' desteğiyle iletişime geçin — fonlama, doğrulama ve başlangıçta yardımcı oluruz.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">İletişim</p>
      <h1>Yardıma hazırız</h1>
      <p class="lead">Hesabınız, yatırımlarınız veya yapay zekâ araçları hakkında sorular — istediğiniz zaman yazın.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Destek</h2>
        <p class="prose">Bize <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a> adresinden yazın. Tipik yanıt süresi birkaç saattir.</p>
        <a href="sign.php" class="btn btn-primary">Hesap açın</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

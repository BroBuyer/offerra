<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('İletişim');
$page_description = ' ' . SITE_NAME . ' desteğiyle iletişime geçin — fonlama, doğrulama ve başlangıç konusunda yardımcı oluruz.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">İletişim</p>
      <h1>Yardım için buradayız</h1>
      <p class="lead">Hesabınız, yatırımlarınız veya AI araçları hakkında sorular — istediğiniz zaman ulaşın.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Destek</h2>
        <p class="prose">Bize <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a> adresinden e-posta gönderin. Tipik yanıt süresi birkaç saatin altındadır.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Veya bilgilerinizi bırakın';
          $form_submit = 'Talep gönder';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakti');
$page_description = 'Sazinieties ar ' . SITE_NAME . ' atbalstu — mēs palīdzam ar finansēšanu, verifikāciju un sākšanu.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakti</p>
      <h1>Mēs esam šeit, lai palīdzētu</h1>
      <p class="lead">Jautājumi par jūsu kontu, iemaksām vai AI rīkiem — sazinieties jebkurā laikā.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Atbalsts</h2>
        <p class="prose">Rakstiet mums uz <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Tipiskais atbildes laiks ir dažu stundu laikā.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Vai atstājiet savus datus';
          $form_submit = 'Nosūtīt pieprasījumu';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

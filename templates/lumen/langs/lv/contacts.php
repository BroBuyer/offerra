<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakti');
$page_description = 'Sazinieties ar ' . SITE_NAME . ' atbalstu — palīdzam ar finansējumu, verifikāciju un sākšanu.';
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
      <p class="lead">Jautājumi par kontu, iemaksām vai AI rīkiem — sazinieties jebkurā laikā.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Atbalsts</h2>
        <p class="prose">Rakstiet mums uz <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Tipiskais atbildes laiks ir dažas stundas.</p>
        <a href="sign.php" class="btn btn-primary">Atvērt kontu</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

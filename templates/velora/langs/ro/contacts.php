<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactați suportul ' . SITE_NAME . ' — vă ajutăm cu finanțare, verificare și început.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Suntem aici să vă ajutăm</h1>
      <p class="lead">Întrebări despre cont, depozite sau instrumente AI — contactați-ne oricând.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Suport</h2>
        <p class="prose">Scrieți-ne la <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Timpul tipic de răspuns este sub câteva ore.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Sau lăsați datele dvs.';
          $form_submit = 'Trimite cererea';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina nu a fost găsită');
$page_description = 'Pagina solicitată nu a putut fi găsită pe ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Pagina nu a fost găsită</h1>
      <p class="lead">Acel link nu există. Reveniți acasă sau deschideți un cont pentru a începe.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Acasă</a>
        <a href="sign.php" class="btn btn-ghost">Deschide cont</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

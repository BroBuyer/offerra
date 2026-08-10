<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagină negăsită');
$page_description = 'Pagina solicitată nu a fost găsită pe ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Pagină negăsită</h1>
      <p class="lead">Acea legătură nu există. Reveniți acasă sau deschideți un cont pentru a începe.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Mergi acasă</a>
        <a href="sign.php" class="btn btn-ghost">Deschide cont</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

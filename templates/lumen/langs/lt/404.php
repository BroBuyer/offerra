<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Puslapis nerastas');
$page_description = 'Puslapio, kurio prašėte, nepavyko rasti ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Puslapis nerastas</h1>
      <p class="lead">Tos nuorodos nėra. Grįžkite namo arba atidarykite paskyrą, kad pradėtumėte.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Eik namo</a>
        <a href="sign.php" class="btn btn-ghost">Atidaryti sąskaitą</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

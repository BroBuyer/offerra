<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Puslapis nerastas');
$page_description = 'Puslapio, kurio prašėte, rasti nepavyko' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Puslapis nerastas</h1>
      <p>ta nuoroda neegzistuoja. Grįžkite namo arba atidarykite paskyrą, kad pradėtumėte.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Eik namo</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Atidaryti sąskaitą</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Obrigado ᐉ ' . SITE_NAME;
$page_description = 'O seu pedido foi recebido pela equipa de ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Mensagem recebida</span>
      <h1>Obrigado — entraremos em contacto</h1>
      <p>O seu pedido foi recebido pela equipa de <?= e(SITE_NAME) ?>. Um especialista entrará em contacto em breve para o ajudar a começar. Entretanto, sinta-se à vontade para explorar a plataforma.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Voltar à página inicial</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Explorar a plataforma</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

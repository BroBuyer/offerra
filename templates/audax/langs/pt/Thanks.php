<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Obrigado | ' . SITE_NAME;
$page_description = 'O teu pedido foi recebido pela equipa da ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
$page_noindex = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Obrigado — entraremos em contacto</h1>
            <p>
              O teu pedido foi recebido pela equipa da <?= e(SITE_NAME) ?>. Um especialista
              entra em contacto contigo em breve para te ajudar a começar.
            </p>
            <p>
              Entretanto podes saber mais sobre o
              <a href="<?= page_url('product.php') ?>">funcionamento da plataforma</a> ou consultar as
              <a href="<?= page_url('faq.php') ?>">perguntas frequentes</a>.
            </p>
            <p><a href="<?= page_url() ?>">Voltar ao início</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

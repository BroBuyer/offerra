<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Plataforma');
$page_description = 'Veja como ' . SITE_NAME . ' mantém o investimento simples com insights de IA, preços claros e um espaço de trading calmo.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Plataforma</p>
      <h1>Tudo o que precisa. Nada do que não precisa.</h1>
      <p class="lead">Um espaço focado para investimento em cripto e multiativos — guiado por IA, desenhado para clareza.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>IA que fica em segundo plano</h2>
        <p class="lead">
          Os insights aparecem quando ajudam — curtos, legíveis e fáceis de aplicar. Confirma sempre cada trade.
        </p>
        <ul class="feature-list">
          <li>Resumos de mercado em linguagem clara</li>
          <li>Watchlists sugeridas para principiantes</li>
          <li>Lembretes antes de dimensionar uma posição</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Abrir conta</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

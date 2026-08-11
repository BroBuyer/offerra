<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sobre a plataforma');
$page_description = 'Veja como ' . SITE_NAME . ' mantém o trading claro com insights de IA, feeds de baixa latência e um espaço de trabalho calmo.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Sobre</p>
      <h1>Arquitetura de IA institucional, tornada acessível</h1>
      <p class="lead">Um espaço focado para trading em cripto e multiativos — guiado por IA, desenhado para clareza.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>IA que permanece útil</h2>
        <p class="lead">
          Os insights aparecem quando ajudam — curtos, legíveis e fáceis de aplicar.
          Confirma sempre cada operação.
        </p>
        <ul class="feature-bullets">
          <li>Resumos de mercado em linguagem clara</li>
          <li>Watchlists sugeridas para principiantes</li>
          <li>Lembretes antes de dimensionar uma posição</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Abrir conta</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

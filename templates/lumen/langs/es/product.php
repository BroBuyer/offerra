<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Plataforma');
$page_description = 'Descubre cómo ' . SITE_NAME . ' simplifica la inversión con ideas de IA, precios claros y un espacio de trading calmado.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Plataforma</p>
      <h1>Todo lo que necesitas. Nada de más.</h1>
      <p class="lead">Un espacio enfocado para cripto y multi-activo — guiado por IA, diseñado para la claridad.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>IA en segundo plano</h2>
        <p class="lead">
          Las ideas aparecen cuando ayudan — cortas, legibles y accionables. Tú confirmas cada operación.
        </p>
        <ul class="feature-list">
          <li>Resúmenes de mercado en lenguaje sencillo</li>
          <li>Listas de seguimiento sugeridas para principiantes</li>
          <li>Recordatorios antes de dimensionar una posición</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Abrir cuenta</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

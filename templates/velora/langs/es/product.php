<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Acerca de la plataforma');
$page_description = 'Descubre cómo ' . SITE_NAME . ' mantiene el trading claro con insights de IA, feeds de baja latencia y un espacio de trabajo tranquilo.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Acerca de</p>
      <h1>Una arquitectura de IA “institucional”, hecha sencilla</h1>
      <p class="lead">Un espacio de trabajo enfocado para trading de cripto y multi-activos — guiado por IA y diseñado para la claridad.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>Una IA que sigue siendo útil</h2>
        <p class="lead">
          Los insights aparecen cuando ayudan: breves, legibles y fáciles de aplicar.
          Tú confirmas siempre cada operación.
        </p>
        <ul class="feature-bullets">
          <li>Resúmenes del mercado en lenguaje sencillo</li>
          <li>Listas de seguimiento sugeridas para principiantes</li>
          <li>Recordatorios antes de dimensionar una posición</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Abrir cuenta</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

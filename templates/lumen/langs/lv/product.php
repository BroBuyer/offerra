<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platformaa');
$page_description = 'Uzziniet, kā ' . SITE_NAME . ' saglabā ieguldījumus vienkāršus ar AI atziņām, skaidrām cenām un mierīgu tirdzniecības darba vietu.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platformaa</p>
      <h1>Viss, kas jums nepieciešams. Nekas lieks.</h1>
      <p class="lead">Koncentrēta darba vieta kriptovalūtu un vairāku aktīvu ieguldījumiem — vadīta ar AI, veidota skaidrībai.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI, kas paliek fonā</h2>
        <p class="lead">
          Atziņas parādās tad, kad tās palīdz — īsas, lasāmas un viegli izmantojamas. Jūs vienmēr apstiprināt katru darījumu paši.
        </p>
        <ul class="feature-list">
          <li>Tirgus kopsavilkumi vienkāršā valodā</li>
          <li>Ieteiktie novērošanas saraksti iesācējiem</li>
          <li>Atgādinājumi pirms pozīcijas apjoma noteikšanas</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Atvērt kontu</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

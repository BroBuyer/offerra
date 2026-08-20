<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Par platformu');
$page_description = 'Skatiet, kā ' . SITE_NAME . ' uztur tirdzniecību skaidru ar AI ieskatiem, zemas latentuma plūsmām un mierīgu darba vidi.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Par mums</p>
      <h1>Institucionāla AI arhitektūra, padarīta pieejama</h1>
      <p class="lead">Koncentrēta darba vide kriptovalūtu un vairāku aktīvu tirdzniecībai — vadīta ar AI, veidota skaidrībai.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI, kas paliek noderīgs</h2>
        <p class="lead">
          Ieskati parādās, kad tie palīdz — īsi, lasāmi un viegli izmantojami.
          Jūs vienmēr apstiprināt katru darījumu paši.
        </p>
        <ul class="feature-bullets">
          <li>Tirgus kopsavilkumi vienkāršā valodā</li>
          <li>Ieteiktie novērošanas saraksti iesācējiem</li>
          <li>Atgādinājumi pirms pozīcijas izmēra noteikšanas</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Atvērt kontu</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

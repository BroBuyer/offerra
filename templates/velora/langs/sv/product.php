<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Om plattformen');
$page_description = 'Se hur ' . SITE_NAME . ' håller handeln tydlig med AI-insikter, låglatensflöden och en lugn arbetsyta.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Om oss</p>
      <h1>Institutionell AI-arkitektur, gjord tillgänglig</h1>
      <p class="lead">En fokuserad arbetsyta för krypto och flertillgångshandel — guidad av AI, designad för tydlighet.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI som förblir användbar</h2>
        <p class="lead">
          Insikter visas när de hjälper — korta, läsbara och enkla att agera på.
          Du bekräftar alltid varje affär själv.
        </p>
        <ul class="feature-bullets">
          <li>Marknadssammanfattningar på enkelt språk</li>
          <li>Föreslagna bevakningslistor för nybörjare</li>
          <li>Påminnelser innan du dimensionerar en position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Öppna konto</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platforma');
$page_description = 'Pogledajte kako ' . SITE_NAME . ' drži ulaganje jednostavnim uz AI uvide, jasne cijene i miran prostor za trgovanje.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platforma</p>
      <h1>Sve što vam treba. Ništa suvišno.</h1>
      <p class="lead">Fokusirani prostor za kripto i multi-asset ulaganje — vođen AI-jem, osmišljen za jasnoću.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI koji ostaje u pozadini</h2>
        <p class="lead">
          Uvidi se pojavljuju kada pomažu — kratki, čitljivi i lako primjenjivi. Svaku trgovinu potvrđujete sami.
        </p>
        <ul class="feature-list">
          <li>Sažeci tržišta jednostavnim jezikom</li>
          <li>Predložene watchliste za početnike</li>
          <li>Podsjetnici prije dimenzioniranja pozicije</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otvori račun</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

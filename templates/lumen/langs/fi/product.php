<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Alusta');
$page_description = 'Katso, miten ' . SITE_NAME . ' pitää sijoittamisen yksinkertaisena tekoälynäkemyksillä, selkeällä hinnoittelulla ja rauhallisella kaupankäyntitilalla.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Alusta</p>
      <h1>Kaikki mitä tarvitset. Ei mitään turhaa.</h1>
      <p class="lead">Keskittynyt työtila krypto- ja moniomaisuussijoittamiseen — tekoälyn ohjaama, selkeyttä varten suunniteltu.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>Tekoäly, joka pysyy taustalla</h2>
        <p class="lead">
          Näkemykset näkyvät, kun ne auttavat — lyhyitä, luettavia ja helppoja hyödyntää. Vahvistat aina jokaisen kaupan itse.
        </p>
        <ul class="feature-list">
          <li>Markkinayhteenvedot selkeällä kielellä</li>
          <li>Ehdotetut seurantalistat aloittelijoille</li>
          <li>Muistutukset ennen position koon asettamista</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Avaa tili</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

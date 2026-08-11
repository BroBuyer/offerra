<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tietoa alustasta');
$page_description = 'Katso, miten ' . SITE_NAME . ' pitää kaupankäynnin selkeänä tekoälynäkemyksillä, pienen viiveen syötteillä ja rauhallisella työtilalla.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tietoa meistä</p>
      <h1>Institutionaalinen tekoälyarkkitehtuuri, lähestyttävästi</h1>
      <p class="lead">Keskittynyt työtila krypto- ja monivarakaupankäyntiin — tekoälyn ohjaamana, selkeyttä varten suunniteltuna.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>Tekoäly, joka pysyy hyödyllisenä</h2>
        <p class="lead">
          Näkemykset ilmestyvät, kun ne auttavat — lyhyitä, luettavia ja helppoja toimia.
          Vahvistat aina jokaisen kaupan itse.
        </p>
        <ul class="feature-bullets">
          <li>Markkinayhteenvedot selkokielellä</li>
          <li>Ehdotetut seurantalistat aloittelijoille</li>
          <li>Muistutukset ennen position koon määrittämistä</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Avaa tili</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

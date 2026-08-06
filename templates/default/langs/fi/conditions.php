<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Käyttöehdot');
$page_description = 'Lue ' . SITE_NAME . '-kaupankäyntialustan ja verkkosivuston käyttöehdot.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Käyttöehdot</h1>
      <p class="lead">Viimeksi päivitetty: <?= date('j.n.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Käyttämällä <?= e(SITE_NAME) ?>-palvelua hyväksyt nämä käyttöehdot. Jos et hyväksy niitä, älä käytä palveluitamme.</p>

      <h2>Kelpoisuus</h2>
      <p>Sinun on oltava vähintään 18-vuotias ja lain mukaan oikeutettu käymään kauppaa rahoitusvälineillä oikeusalueellasi.</p>

      <h2>Riskien ilmoitus</h2>
      <p>Kaupankäynti kryptovaluutoilla, forexillä, CFD:illä ja muilla rahoitusvälineillä sisältää merkittävän tappioriskin. Aiempi tuotto ei takaa tulevaa. Käy kauppaa vain pääomalla, jonka voit menettää.</p>

      <h2>Tilin vastuut</h2>
      <p>Olet vastuussa tilitunnustesi salassapidosta ja kaikesta tililläsi tapahtuvasta toiminnasta.</p>

      <h2>Palvelun saatavuus</h2>
      <p>Pyrimme jatkuvaan saatavuuteen, mutta emme takaa keskeytyksetöntä käyttöä. Huolto, markkinaolosuhteet tai tekniset ongelmat voivat vaikuttaa palveluun.</p>

      <h2>Vastuunrajoitus</h2>
      <p><?= e(SITE_NAME) ?> ei ole vastuussa kaupankäyntitappioista tai vahingoista, jotka johtuvat tällä sivustolla olevan tiedon käytöstä. Hae tarvittaessa riippumatonta taloudellista neuvontaa.</p>

      <h2>Yhteystiedot</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

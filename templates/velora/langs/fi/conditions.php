<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Käyttöehdot');
$page_description = 'Lue käyttöehdot palvelun ' . SITE_NAME . ' kaupankäyntialustan ja verkkosivuston käytölle.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Käyttöehdot</h1>
      <p class="lead">Viimeksi päivitetty: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Käyttämällä palvelua <?= e(SITE_NAME) ?> hyväksyt nämä käyttöehdot. Jos et hyväksy, älä käytä palveluitamme.</p>

      <h2>Kelpoisuus</h2>
      <p>Sinun on oltava vähintään 18-vuotias ja laillisesti oikeutettu käymään kauppaa rahoitusinstrumenteilla asuinpaikkasi oikeudenkäyttöalueella.</p>

      <h2>Riskitiedote</h2>
      <p>Kryptovaluuttojen, forexin, CFD:iden ja muiden rahoitusinstrumenttien kaupankäyntiin liittyy huomattava tappioriski. Aiempi tuotto ei takaa tulevia tuloksia. Käy kauppaa vain pääomalla, jonka voit menettää.</p>

      <h2>Tilivastuut</h2>
      <p>Olet vastuussa tilitunnistetietojesi luottamuksellisuuden säilyttämisestä ja kaikesta tilisi alla tapahtuvasta toiminnasta.</p>

      <h2>Palvelun saatavuus</h2>
      <p>Pyrimme jatkuvaan saatavuuteen, mutta emme takaa keskeytymätöntä käyttöä. Huolto, markkinaolosuhteet tai tekniset ongelmat voivat vaikuttaa palveluun.</p>

      <h2>Vastuunrajoitus</h2>
      <p><?= e(SITE_NAME) ?> ei ole vastuussa kaupankäyntitappioista tai vahingoista, jotka aiheutuvat tämän sivuston tietojen käytöstä. Hae tarvittaessa itsenäistä taloudellista neuvontaa.</p>

      <h2>Yhteystiedot</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

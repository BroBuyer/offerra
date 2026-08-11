<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tietosuojakäytäntö');
$page_description = 'Lue, miten ' . SITE_NAME . ' kerää, käyttää ja suojaa henkilötietojasi.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Tietosuojakäytäntö</h1>
      <p class="lead">Viimeksi päivitetty: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tämä tietosuojakäytäntö kuvaa, miten <?= e(SITE_NAME) ?> ("me") kerää ja käsittelee henkilötietoja, kun käytät verkkosivustoamme ja palveluitamme.</p>

      <h2>Keräämämme tiedot</h2>
      <p>Voimme kerätä: nimen, sähköpostiosoitteen, puhelinnumeron, asuinmaan, IP-osoitteen sekä tiedot, jotka annat lomakkeiden tai tukipyyntöjen kautta.</p>

      <h2>Miten käytämme tietojasi</h2>
      <ul>
        <li>Tilisi luomiseen ja hallintaan</li>
        <li>Kaupankäyntialustan käytön ja asiakastuen tarjoamiseen</li>
        <li>Lakisääteisten ja sääntelyvelvoitteiden noudattamiseen</li>
        <li>Palveluidemme parantamiseen ja petosten estämiseen</li>
      </ul>

      <h2>Tietoturva</h2>
      <p>Käytämme teknisiä ja organisatorisia toimenpiteitä, mukaan lukien SSL-salaus ja käyttöoikeuksien hallinta, tietojesi suojaamiseksi.</p>

      <h2>Oikeutesi</h2>
      <p>Asuinpaikastasi riippuen sinulla voi olla oikeus tarkastaa, korjata tai poistaa henkilötietosi. Ota yhteyttä <?= e(SUPPORT_EMAIL) ?> käyttääksesi näitä oikeuksia.</p>

      <h2>Yhteystiedot</h2>
      <p>Kysymyksiä tästä käytännöstä? Lähetä sähköpostia <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

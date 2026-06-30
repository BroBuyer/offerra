<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politika privatnosti');
$page_description = 'Saznajte kako ' . SITE_NAME . ' prikuplja, koristi i štiti vaše osobne podatke.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politika privatnosti</h1>
      <p class="lead">Zadnje ažuriranje: <?= date('j. n. Y.') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ova Politika privatnosti opisuje kako <?= e(SITE_NAME) ?> («mi») prikuplja i obrađuje osobne podatke kada koristite našu web stranicu i usluge.</p>

      <h2>Podaci koje prikupljamo</h2>
      <p>Možemo prikupljati: ime, adresu e-pošte, broj telefona, državu prebivališta, IP adresu i podatke koje pružate putem obrazaca ili zahtjeva za podršku.</p>

      <h2>Kako koristimo vaše podatke</h2>
      <ul>
        <li>Za stvaranje i upravljanje vašim računom</li>
        <li>Za pružanje pristupa trgovačkoj platformi i korisničke podrške</li>
        <li>Za ispunjavanje zakonskih i regulatornih obveza</li>
        <li>Za poboljšanje naših usluga i sprječavanje prijevara</li>
      </ul>

      <h2>Sigurnost podataka</h2>
      <p>Primjenjujemo tehničke i organizacijske mjere, uključujući SSL enkripciju i kontrole pristupa, kako bismo zaštitili vaše podatke.</p>

      <h2>Vaša prava</h2>
      <p>Ovisno o vašoj jurisdikciji, možete imati pravo pristupa, ispravka ili brisanja osobnih podataka. Kontaktirajte <?= e(SUPPORT_EMAIL) ?> kako biste ostvarili ta prava.</p>

      <h2>Kontakt</h2>
      <p>Pitanja o ovoj politici? Pošaljite e-poštu na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

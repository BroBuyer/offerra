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
      <p>Ova Politika privatnosti opisuje kako <?= e(SITE_NAME) ?> („mi“) prikuplja i obrađuje osobne podatke kada koristite našu web stranicu i usluge.</p>

      <h2>Podaci koje prikupljamo</h2>
      <p>Možemo prikupljati: ime, e-adresu, broj telefona, zemlju prebivališta, IP adresu i podatke koje navedete u obrascima ili zahtjevima za podršku.</p>

      <h2>Kako koristimo vaše podatke</h2>
      <ul>
        <li>Za stvaranje i upravljanje računom</li>
        <li>Za pristup trgovačkoj platformi i korisničku podršku</li>
        <li>Za ispunjavanje pravnih i regulatornih obveza</li>
        <li>Za poboljšanje usluga i sprječavanje prijevara</li>
      </ul>

      <h2>Sigurnost podataka</h2>
      <p>Primjenjujemo tehničke i organizacijske mjere uključujući SSL enkripciju i kontrole pristupa radi zaštite vaših podataka.</p>

      <h2>Vaša prava</h2>
      <p>Ovisno o jurisdikciji, možete imati pravo na pristup, ispravak ili brisanje osobnih podataka. Kontaktirajte <?= e(SUPPORT_EMAIL) ?> za ostvarivanje tih prava.</p>

      <h2>Kontakt</h2>
      <p>Pitanja o ovoj politici? Pošaljite e-poštu na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

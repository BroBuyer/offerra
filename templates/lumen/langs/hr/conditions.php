<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Uvjeti korištenja');
$page_description = 'Pročitajte uvjete korištenja trgovačke platforme i web stranice ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Uvjeti korištenja</h1>
      <p class="lead">Zadnje ažuriranje: <?= date('j. n. Y.') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Pristupom <?= e(SITE_NAME) ?> pristajete na ove Uvjete korištenja. Ako se ne slažete, nemojte koristiti naše usluge.</p>

      <h2>Prihvatljivost</h2>
      <p>Morate imati najmanje 18 godina i biti pravno ovlašteni trgovati financijskim instrumentima u svojoj jurisdikciji.</p>

      <h2>Objava rizika</h2>
      <p>Trgovanje kriptovalutama, forexom, CFD-ovima i drugim financijskim instrumentima uključuje značajan rizik gubitka. Prošla izvedba ne jamči buduće rezultate. Trgujte samo kapitalom koji si možete priuštiti izgubiti.</p>

      <h2>Odgovornosti računa</h2>
      <p>Odgovorni ste za čuvanje povjerljivosti podataka za prijavu i za svu aktivnost pod svojim računom.</p>

      <h2>Dostupnost usluge</h2>
      <p>Težimo kontinuiranoj dostupnosti, ali ne jamčimo neprekinuti pristup. Održavanje, tržišni uvjeti ili tehnički problemi mogu utjecati na uslugu.</p>

      <h2>Ograničenje odgovornosti</h2>
      <p><?= e(SITE_NAME) ?> nije odgovoran za trgovačke gubitke ili štete nastale korištenjem informacija na ovoj stranici. Po potrebi potražite neovisni financijski savjet.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

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
      <p>Pristupom na <?= e(SITE_NAME) ?> prihvaćate ove Uvjete korištenja. Ako se ne slažete, molimo ne koristite naše usluge.</p>

      <h2>Podobnost</h2>
      <p>Morate imati najmanje 18 godina i biti zakonski ovlašteni za trgovanje financijskim instrumentima u svojoj jurisdikciji.</p>

      <h2>Objava rizika</h2>
      <p>Trgovanje kriptovalutama, forexom, CFD-ovima i drugim financijskim instrumentima uključuje značajan rizik gubitka. Prošli rezultati ne jamče buduće rezultate. Trgujte samo kapitalom koji si možete priuštiti izgubiti.</p>

      <h2>Odgovornosti računa</h2>
      <p>Odgovorni ste za čuvanje povjerljivosti pristupnih podataka računa i za svu aktivnost na računu.</p>

      <h2>Dostupnost usluge</h2>
      <p>Nastojimo osigurati kontinuiranu dostupnost, ali ne jamčimo neprekidan pristup. Održavanje, tržišni uvjeti ili tehnički problemi mogu utjecati na uslugu.</p>

      <h2>Ograničenje odgovornosti</h2>
      <p><?= e(SITE_NAME) ?> ne odgovara za gubitke od trgovanja ili štetu nastalu korištenjem informacija na ovoj stranici. Potražite neovisni financijski savjet gdje je to prikladno.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Lietošanas noteikumi');
$page_description = 'Izlasiet noteikumus un nosacījumus ' . SITE_NAME . ' tirdzniecības platformas un vietnes lietošanai.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Lietošanas noteikumi</h1>
      <p class="lead">Pēdējoreiz atjaunināts: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Piekļūstot <?= e(SITE_NAME) ?>, jūs piekrītat šiem Lietošanas noteikumiem. Ja nepiekrītat, lūdzu, neizmantojiet mūsu pakalpojumus.</p>

      <h2>Atbilstība</h2>
      <p>Jums jābūt vismaz 18 gadus vecam un juridiski atļautam tirgot finanšu instrumentus savā jurisdikcijā.</p>

      <h2>Riska informācija</h2>
      <p>Kriptovalūtu, forex, CFD un citu finanšu instrumentu tirdzniecība ietver būtisku zaudējumu risku. Pagātnes rezultāti negarantē nākotnes rezultātus. Tirgojiet tikai ar kapitālu, ko varat atļauties zaudēt.</p>

      <h2>Konta atbildība</h2>
      <p>Jūs esat atbildīgs par konta akreditācijas datu konfidencialitātes uzturēšanu un par visu aktivitāti savā kontā.</p>

      <h2>Pakalpojuma pieejamība</h2>
      <p>Mēs cenšamies nodrošināt nepārtrauktu pieejamību, taču negarantējam nepārtrauktu piekļuvi. Apkope, tirgus apstākļi vai tehniskas problēmas var ietekmēt pakalpojumu.</p>

      <h2>Atbildības ierobežojums</h2>
      <p><?= e(SITE_NAME) ?> nav atbildīgs par tirdzniecības zaudējumiem vai bojājumiem, kas radušies no informācijas izmantošanas šajā vietnē. Attiecīgā gadījumā meklējiet neatkarīgu finanšu konsultāciju.</p>

      <h2>Kontakti</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

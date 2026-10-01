<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pogoji uporabe');
$page_description = 'Preberite pravila in pogoje za uporabo' . SITE_NAME . 'trgovalna platforma in spletno mesto.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Pogoji uporabe</h1>
      <p class="lead">Zadnja posodobitev: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Z dostopom <?= e(SITE_NAME) ?> se strinjate s temi pogoji uporabe. Če se ne strinjate, vas prosimo, da ne uporabljate naših storitev.</p>

      <h2>Upravičenost</h2>
      <p>Biti morate stari najmanj 18 let in imeti morate zakonsko dovoljenje za trgovanje s finančnimi instrumenti v vaši jurisdikciji.</p>

      <h2>Razkritje tveganja</h2>
      <p>Trgovanje s kriptovalutami, forexom, CFD-ji in drugimi finančnimi instrumenti vključuje veliko tveganje izgube. Pretekla uspešnost ne zagotavlja prihodnjih rezultatov. Trgujte samo s kapitalom, ki si ga lahko privoščite izgubiti.</p>

      <h2>Odgovornosti računa</h2>
      <p>Odgovorni ste za ohranjanje zaupnosti poverilnic vašega računa in za vse dejavnosti v vašem računu.</p>

      <h2>Razpoložljivost storitve</h2>
      <p>Prizadevamo si za stalno razpoložljivost, vendar ne zagotavljamo neprekinjenega dostopa. Vzdrževanje, tržni pogoji ali tehnične težave lahko vplivajo na storitev.</p>

      <h2>Omejitev odgovornosti</h2>
      <p><?= e(SITE_NAME) ?> ni odgovoren za izgube ali škodo pri trgovanju, ki izhaja iz uporabe informacij na tem spletnem mestu. Po potrebi poiščite neodvisen finančni nasvet.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

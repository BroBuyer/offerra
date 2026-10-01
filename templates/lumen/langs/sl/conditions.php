<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pogoji uporabe');
$page_description = 'Preberite pogoje uporabe trgovalne platforme in spletnega mesta ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Pogoji uporabe</h1>
      <p class="lead">Nazadnje posodobljeno: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>By accessing <?= e(SITE_NAME) ?> you agree to these Pogoji uporabe. If you do not agree, please do not use our services.</p>

      <h2>Upravičenost</h2>
      <p>Morate biti stari vsaj 18 let in v svoji jurisdikciji zakonito smeti trgovati s finančnimi instrumenti.</p>

      <h2>Razkritje tveganja</h2>
      <p>Trgovanje s kriptovalutami, forexom, CFD-ji in drugimi finančnimi instrumenti prinaša precejšnje tveganje izgube. Pretekla uspešnost ne jamči prihodnjih rezultatov. Trgujte le s kapitalom, ki si ga lahko privoščite izgubiti.</p>

      <h2>Odgovornosti računa</h2>
      <p>Odgovorni ste za zaupnost poverilnic računa in za vso dejavnost na računu.</p>

      <h2>Razpoložljivost storitve</h2>
      <p>Prizadevamo si za stalno dosegljivost, a ne jamčimo neprekinjenega dostopa. Vzdrževanje, razmere na trgu ali tehnične težave lahko vplivajo na storitev.</p>

      <h2>Omejitev odgovornosti</h2>
      <p><?= e(SITE_NAME) ?> ni odgovoren za trgovalne izgube ali škodo zaradi uporabe informacij na tem mestu. Po potrebi poiščite neodvisen finančni nasvet.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

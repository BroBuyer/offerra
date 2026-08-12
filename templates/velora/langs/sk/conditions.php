<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Podmienky používania');
$page_description = 'Prečítajte si podmienky používania ' . SITE_NAME . ' obchodnej platformy a webových stránok.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Podmienky používania</h1>
      <p class="lead">Naposledy aktualizované: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prístupom k <?= e(SITE_NAME) ?> súhlasíte s týmito podmienkami používania. Ak nesúhlasíte, nepoužívajte prosím naše služby.</p>

      <h2>Spôsobilosť</h2>
      <p>Musíte mať aspoň 18 rokov a mať v jurisdikcii právne oprávnenie obchodovať s finančnými nástrojmi.</p>

      <h2>Upozornenie na riziká</h2>
      <p>Obchodovanie s kryptomenami, forexom, CFD a ďalšími finančnými nástrojmi zahŕňa podstatné riziko straty. Minulá výkonnosť nezaručuje budúce výsledky. Obchodujte len s kapitálom, ktorého stratu si môžete dovoliť.</p>

      <h2>Zodpovednosť za účet</h2>
      <p>Ste zodpovední za zachovanie dôvernosti prihlasovacích údajov a za všetku aktivitu pod vaším účtom.</p>

      <h2>Dostupnosť služby</h2>
      <p>Usilujeme sa o nepretržitú dostupnosť, ale nezaručujeme neprerušený prístup. Údržba, trhové podmienky alebo technické problémy môžu ovplyvniť službu.</p>

      <h2>Obmedzenie zodpovednosti</h2>
      <p><?= e(SITE_NAME) ?> nenesie zodpovednosť za obchodné straty ani škody vzniknuté z použitia informácií na týchto stránkach. V prípade potreby vyhľadajte nezávislé finančné poradenstvo.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

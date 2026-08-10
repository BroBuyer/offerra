<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Podmienky používania');
$page_description = 'Prečítajte si podmienky používania obchodnej platformy a webu ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Podmienky používania</h1>
      <p class="lead">Posledná aktualizácia: <?= date('j. n. Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prístupom na <?= e(SITE_NAME) ?> súhlasíte s týmito Podmienkami používania. Ak nesúhlasíte, služby nepoužívajte.</p>

      <h2>Spôsobilosť</h2>
      <p>Musíte mať aspoň 18 rokov a byť právne oprávnení obchodovať finančné nástroje vo svojej jurisdikcii.</p>

      <h2>Upozornenie na riziká</h2>
      <p>Obchodovanie kryptomien, forexu, CFD a ďalších finančných nástrojov nesie podstatné riziko straty. Minulá výkonnosť nezaručuje budúce výsledky. Obchodujte len s kapitálom, ktorý si môžete dovoliť stratiť.</p>

      <h2>Zodpovednosť za účet</h2>
      <p>Zodpovedáte za utajenie prihlasovacích údajov a za všetku aktivitu pod svojím účtom.</p>

      <h2>Dostupnosť služby</h2>
      <p>Usilujeme o nepretržitú dostupnosť, ale neručíme za neprerušovaný prístup. Údržba, trhové podmienky alebo technické problémy môžu službu ovplyvniť.</p>

      <h2>Obmedzenie zodpovednosti</h2>
      <p><?= e(SITE_NAME) ?> nezodpovedá za obchodné straty ani škody vzniknuté použitím informácií na tomto webe. Podľa potreby vyhľadajte nezávislé finančné poradenstvo.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

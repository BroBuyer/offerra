<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Podmienky používania');
$page_description = 'Prečítajte si podmienky používania stránky a platformy ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Podmienky používania</h1>
      <p class="lead">Posledná aktualizácia: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prístupom na <?= e(SITE_NAME) ?> súhlasíte s týmito Podmienkami používania. Ak nesúhlasíte, nepoužívajte naše služby.</p>

      <h2>Oprávnenosť</h2>
      <p>Musíte mať aspoň 18 rokov a byť právne oprávnený obchodovať s finančnými nástrojmi vo vašej jurisdikcii.</p>

      <h2>Upozornenie na riziko</h2>
      <p>Obchodovanie s kryptomenami, forexom, CFD a inými finančnými nástrojmi nesie významné riziko straty. Minulá výkonnosť nezaručuje budúce výsledky. Obchodujte len s kapitálom, ktorý si môžete dovoliť stratiť.</p>

      <h2>Zodpovednosť za účet</h2>
      <p>Ste zodpovední za zachovanie dôvernosti prihlasovacích údajov a za všetky aktivity vykonané cez váš účet.</p>

      <h2>Dostupnosť služby</h2>
      <p>Snažíme sa zabezpečiť kontinuitu služby, ale nezaručujeme nepretržitý prístup. Údržba, trhové podmienky alebo technické problémy môžu ovplyvniť dostupnosť.</p>

      <h2>Obmedzenie zodpovednosti</h2>
      <p><?= e(SITE_NAME) ?> nenesie zodpovednosť za obchodné straty ani škody vyplývajúce z používania informácií na tejto stránke. V prípade potreby vyhľadajte nezávislé finančné poradenstvo.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

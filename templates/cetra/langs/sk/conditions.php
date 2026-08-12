<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Podmienky používania');
$page_description = 'Pravidlá, ktoré platia, keď pristupujete k ' . SITE_NAME . ' alebo ho používate.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hlavná">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Ako to funguje</a>
      <a href="<?= page_url() ?>#markets">Trhy</a>
      <a href="<?= page_url() ?>#faq">Často kladené otázky</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Začať</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Podmienky používania</h1>
      <p class="lede">Pravidlá, ktoré platia, keď pristupujete k <?= e(SITE_NAME) ?> alebo ho používate.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Posledná aktualizácia: január 2025</p>

      <h2>1. Prijatie podmienok</h2>
      <p>Prístupom k webu a službám <?= e(SITE_NAME) ?> alebo ich používaním súhlasíte s týmito Podmienkami používania. Ak nesúhlasíte, služby nepoužívajte.</p>

      <h2>2. Spôsobilosť</h2>
      <p>Musíte mať aspoň 18 rokov (alebo vek plnoletosti vo vašej jurisdikcii) a právnu spôsobilosť uzavrieť záväznú zmluvu. Služby nie sú ponúkané obyvateľom obmedzených jurisdikcií, kde by takáto ponuka bola nezákonná.</p>

      <h2>3. Registrácia účtu</h2>
      <p>Súhlasíte s poskytnutím presných, aktuálnych a úplných informácií pri registrácii a s ich udržiavaním v aktuálnom stave. Ste zodpovední za dôvernosť prihlasovacích údajov a za všetku aktivitu na účte.</p>

      <h2>4. Služby</h2>
      <p><?= e(SITE_NAME) ?> poskytuje technologické nástroje a vzdelávacie informácie súvisiace s online investovaním. Nie sme váš finančný poradca. Nič na tomto webe nepredstavuje personalizované investičné poradenstvo, daňové poradenstvo ani výzvu na nákup alebo predaj finančného nástroja.</p>

      <h2>5. Poplatky</h2>
      <p>Platné poplatky, spready a provízie sú uvedené na platforme alebo v platnom sadzobníku. Ste zodpovední za všetky dane vyplývajúce z vašich aktivít.</p>

      <h2>6. Zakázané správanie</h2>
      <ul>
        <li>Používanie služieb na pranie špinavých peňazí, financovanie terorizmu, manipuláciu trhu alebo akýkoľvek nezákonný účel.</li>
        <li>Vydávanie sa za inú osobu alebo poskytovanie nepravdivých údajov o totožnosti.</li>
        <li>Pokusy o zásah, kompromitáciu alebo reverse engineering akejkoľvek časti platformy.</li>
        <li>Používanie automatizovaných nástrojov na prístup k službám inak než výslovne povoleným spôsobom.</li>
      </ul>

      <h2>7. Duševné vlastníctvo</h2>
      <p>Celý obsah, ochranné známky, softvér a materiály na webe sú majetkom <?= e(SITE_NAME) ?> alebo jej poskytovateľov licencie a sú chránené platnými zákonmi o duševnom vlastníctve. Je vám udelená obmedzená, nevýhradná, odvolateľná licencia na používanie služieb na zamýšľaný účel.</p>

      <h2>8. Služby tretích strán</h2>
      <p>Platforma môže obsahovať odkazy na služby tretích strán alebo ich integrovať. Nie sme zodpovední za takéto služby, ich dostupnosť, presnosť ani obsah.</p>

      <h2>9. Vylúčenie zodpovednosti</h2>
      <p>Služby sú poskytované „ako sú“ a „podľa dostupnosti“ bez záruk akéhokoľvek druhu. Obchodovanie zahŕňa podstatné riziko straty. Pozrite naše <a href="<?= page_url('conditions.php') ?>">Upozornenie na riziká</a> pre podrobnosti.</p>

      <h2>10. Obmedzenie zodpovednosti</h2>
      <p>V maximálnom rozsahu povolenom zákonom <?= e(SITE_NAME) ?> nenesie zodpovednosť za nepriame, náhodné, osobitné, následné alebo sankčné škody ani za stratu zisku alebo výnosov vyplývajúcu z používania služieb.</p>

      <h2>11. Odškodnenie</h2>
      <p>Súhlasíte s odškodnením a zbavením zodpovednosti <?= e(SITE_NAME) ?>, jej pridružených spoločností a personálu za akýkoľvek nárok vyplývajúci z porušenia týchto Podmienok alebo zneužitia služieb.</p>

      <h2>12. Pozastavenie a ukončenie</h2>
      <p>Môžeme pozastaviť alebo ukončiť prístup k službám kedykoľvek, s oznámením alebo bez neho, ak sa domnievame, že ste porušili tieto Podmienky alebo platné právo.</p>

      <h2>13. Rozhodné právo</h2>
      <p>Tieto Podmienky sa riadia právom platným v sídle <?= e(SITE_NAME) ?>, bez ohľadu na zásady kolízie právnych noriem.</p>

      <h2>14. Zmeny</h2>
      <p>Tieto Podmienky môžeme čas od času meniť. Pokračujúce používanie služieb po zmenách predstavuje prijatie revidovaných Podmienok.</p>

      <h2>15. Kontakt</h2>
      <p>Otázky k týmto Podmienkam možno zaslať prostredníctvom našej <a href="<?= page_url('contacts.php') ?>">kontaktnej stránky</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Späť na úvodnú stránku</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Všetky práva vyhradené ·
      <a href="<?= page_url('privacy.php') ?>">Súkromie</a> ·
      <a href="<?= page_url('conditions.php') ?>">Podmienky</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

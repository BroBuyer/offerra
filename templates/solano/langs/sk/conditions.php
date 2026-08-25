<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Podmienky používania ᐉ ' . SITE_NAME;
$page_description = 'Podmienky používania ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Právne informácie</span>
    <h1>Podmienky používania</h1>
    <p class="etpy2">Pravidlá, ktoré platia, keď pristupujete k <?= e(SITE_NAME) ?> alebo ju používate.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Posledná aktualizácia: január 2025</p>

    <h2>1. Prijatie podmienok</h2>
    <p>Prístupom k webu a službám <?= e(SITE_NAME) ?> súhlasíte s týmito podmienkami. Ak nesúhlasíte, služby nepoužívajte.</p>

    <h2>2. Spôsobilosť</h2>
    <p>Musíte mať aspoň 18 rokov (alebo vek plnoletosti vo vašej jurisdikcii) a byť právne spôsobilí uzavrieť záväznú zmluvu. Služby sa neponúkajú obyvateľom obmedzených jurisdikcií, kde by to bolo nezákonné.</p>

    <h2>3. Registrácia účtu</h2>
    <p>Súhlasíte, že pri registrácii uvediete presné, aktuálne a úplné údaje a budete ich udržiavať aktuálne. Zodpovedáte za dôvernosť prihlasovacích údajov a za všetku aktivitu na účte.</p>

    <h2>4. Služby</h2>
    <p><?= e(SITE_NAME) ?> poskytuje technologické nástroje a vzdelávacie informácie k online investovaniu. Nie sme váš finančný poradca. Nič na webe nie je personalizované investičné ani daňové poradenstvo ani výzva na nákup či predaj nástroja.</p>

    <h2>5. Poplatky</h2>
    <p>Poplatky, spready a provízie sú uvedené na platforme alebo v sadzobníku. Zodpovedáte za dane z vašej činnosti.</p>

    <h2>6. Zakázané konanie</h2>
    <ul>
      <li>Používanie služieb na pranie peňazí, financovanie terorizmu, manipuláciu trhu alebo akýkoľvek nezákonný účel.</li>
      <li>Vydávanie sa za inú osobu alebo uvádzanie nepravdivých identifikačných údajov.</li>
      <li>Pokusy narušiť, kompromitovať alebo reverse-engineovať ktorúkoľvek časť platformy.</li>
      <li>Používanie automatizovaných nástrojov na prístup k službám inak, ako je výslovne povolené.</li>
    </ul>

    <h2>7. Duševné vlastníctvo</h2>
    <p>Celý obsah, ochranné známky, softvér a materiály na webe sú majetkom <?= e(SITE_NAME) ?> alebo poskytovateľov licencií a chráni ich právo duševného vlastníctva. Získavate obmedzenú, nevýhradnú, odvolateľnú licenciu na použitie služieb na zamýšľaný účel.</p>

    <h2>8. Služby tretích strán</h2>
    <p>Platforma môže obsahovať odkazy na služby tretích strán alebo sa s nimi integrovať. Za tieto služby, dostupnosť, presnosť ani obsah nenesieme zodpovednosť.</p>

    <h2>9. Vylúčenie záruk</h2>
    <p>Služby sa poskytujú „tak, ako sú“ a „ako sú dostupné“ bez záruk akéhokoľvek druhu. Obchodovanie nesie podstatné riziko straty. Pozrite <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Upozornenie na riziká</a> pre ďalšie podrobnosti.</p>

    <h2>10. Obmedzenie zodpovednosti</h2>
    <p>V maximálnom rozsahu povolenom zákonom <?= e(SITE_NAME) ?> nenesie zodpovednosť za nepriame, nahodilé, osobitné, následné alebo sankčné škody ani za stratu zisku alebo výnosov z používania služieb.</p>

    <h2>11. Odškodnenie</h2>
    <p>Súhlasíte, že odškodníte a zbavíte <?= e(SITE_NAME) ?>, pridružené spoločnosti a zamestnancov nárokov vzniknutých z porušenia týchto podmienok alebo zneužitia služieb.</p>

    <h2>12. Pozastavenie a ukončenie</h2>
    <p>Prístup k službám môžeme kedykoľvek pozastaviť alebo ukončiť, s oznámením aj bez neho, ak sa domnievame, že ste porušili tieto podmienky alebo zákon.</p>

    <h2>13. Rozhodné právo</h2>
    <p>Tieto podmienky sa riadia právom sídla <?= e(SITE_NAME) ?>, bez ohľadu na kolízne normy.</p>

    <h2>14. Zmeny</h2>
    <p>Tieto podmienky môžeme čas od času meniť. Ďalšie používanie služieb po zmene znamená prijatie revidovaných podmienok.</p>

    <h2>15. Kontakt</h2>
    <p>Otázky k týmto podmienkam môžete poslať cez kontaktnú stránku.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Späť na úvod</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

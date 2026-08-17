<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Podmínky používání ᐉ ' . SITE_NAME;
$page_description = 'Podmínky používání ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Právní informace</span>
    <h1>Podmínky používání</h1>
    <p class="rmct9">Pravidla, která platí, když přistupujete k <?= e(SITE_NAME) ?> nebo je používáte.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Poslední aktualizace: leden 2025</p>

    <h2>1. Přijetí podmínek</h2>
    <p>Přístupem k webu a službám <?= e(SITE_NAME) ?> souhlasíte s těmito podmínkami. Pokud nesouhlasíte, služby nepoužívejte.</p>

    <h2>2. Způsobilost</h2>
    <p>Musíte mít alespoň 18 let (nebo věk zletilosti ve vaší jurisdikci) a být právně způsobilí uzavřít závaznou smlouvu. Služby se nenabízejí obyvatelům omezených jurisdikcí, kde by to bylo nezákonné.</p>

    <h2>3. Registrace účtu</h2>
    <p>Souhlasíte, že při registraci uvedete přesné, aktuální a úplné údaje a budete je udržovat aktuální. Zodpovídáte za důvěrnost přihlašovacích údajů a za veškerou aktivitu na účtu.</p>

    <h2>4. Služby</h2>
    <p><?= e(SITE_NAME) ?> poskytuje technologické nástroje a vzdělávací informace k online investování. Nejsme váš finanční poradce. Nic na webu není personalizované investiční ani daňové poradenství ani výzva k nákupu či prodeji nástroje.</p>

    <h2>5. Poplatky</h2>
    <p>Poplatky, spready a provize jsou uvedeny na platformě nebo v sazebníku. Zodpovídáte za daně z vaší činnosti.</p>

    <h2>6. Zakázané jednání</h2>
    <ul>
      <li>Používání služeb k praní peněz, financování terorismu, manipulaci trhu nebo jakémukoli nezákonnému účelu.</li>
      <li>Vydávání se za jinou osobu nebo uvádění nepravdivých identifikačních údajů.</li>
      <li>Pokusy narušit, kompromitovat nebo reverse-engineovat kteroukoli část platformy.</li>
      <li>Používání automatizovaných nástrojů k přístupu ke službám jinak, než je výslovně povoleno.</li>
    </ul>

    <h2>7. Duševní vlastnictví</h2>
    <p>Veškerý obsah, ochranné známky, software a materiály na webu jsou majetkem <?= e(SITE_NAME) ?> nebo poskytovatelů licencí a chrání je právo duševního vlastnictví. Získáváte omezenou, nevýhradní, odvolatelnou licenci k použití služeb k zamýšlenému účelu.</p>

    <h2>8. Služby třetích stran</h2>
    <p>Platforma může obsahovat odkazy na služby třetích stran nebo se s nimi integrovat. Za tyto služby, dostupnost, přesnost ani obsah neneseme odpovědnost.</p>

    <h2>9. Vyloučení záruk</h2>
    <p>Služby se poskytují „tak, jak jsou“ a „jak jsou dostupné“ bez záruk jakéhokoli druhu. Obchodování nese podstatné riziko ztráty. Viz <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Upozornění na rizika</a> pro další podrobnosti.</p>

    <h2>10. Omezení odpovědnosti</h2>
    <p>V maximálním rozsahu povoleném zákonem <?= e(SITE_NAME) ?> nenese odpovědnost za nepřímé, nahodilé, zvláštní, následné nebo sankční škody ani za ztrátu zisku nebo výnosů z používání služeb.</p>

    <h2>11. Odškodnění</h2>
    <p>Souhlasíte, že odškodníte a zbavíte <?= e(SITE_NAME) ?>, přidružené společnosti a zaměstnance nároků vzniklých z porušení těchto podmínek nebo zneužití služeb.</p>

    <h2>12. Pozastavení a ukončení</h2>
    <p>Přístup ke službám můžeme kdykoli pozastavit nebo ukončit, s oznámením i bez něj, pokud se domníváme, že jste porušili tyto podmínky nebo zákon.</p>

    <h2>13. Rozhodné právo</h2>
    <p>Tyto podmínky se řídí právem sídla <?= e(SITE_NAME) ?>, bez ohledu na kolizní normy.</p>

    <h2>14. Změny</h2>
    <p>Tyto podmínky můžeme čas od času měnit. Další používání služeb po změně znamená přijetí revidovaných podmínek.</p>

    <h2>15. Kontakt</h2>
    <p>Otázky k těmto podmínkám můžete poslat přes kontaktní stránku.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Zpět na úvod</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Podmienky použitia | ' . SITE_NAME;
$page_description = 'Podmienky použitia platformy ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Podmienky použitia</h1>
            <p class="bold-title">1. Úvod</p>
            <p>1.1. Na používanie služieb je potrebný súhlas s týmito podmienkami.</p>
            <p>1.2. Tieto podmienky tvoria právne záväznú dohodu.</p>
            <p>1.3. Ďalšie používanie webu znamená prijatie podmienok.</p>
            <p>
              1.4. S otázkami nás môžeš kontaktovať na
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Právo používať</p>
            <p>2.1. Služby môžu používať iba osoby staršie ako 18 rokov.</p>
            <p>2.1.1. Musíš žiť v krajine, kde sú služby zákonné.</p>
            <p>2.1.2. Nesmieš figurovať na sankčnom zozname.</p>
            <p>2.1.3. Musíš mať spôsobilosť na právne úkony.</p>
            <p>2.2. Neneseme zodpovednosť za použitie neoprávnenými používateľmi.</p>
            <p class="bold-title">3. Používateľský účet</p>
            <p>3.1. Zodpovedáš za zabezpečenie svojho účtu.</p>
            <p>3.2. Nezdieľaj heslo s tretími stranami.</p>
            <p class="bold-title">4. Zakázané činnosti</p>
            <p>4.1. Použitie služieb na nezákonné účely nie je dovolené.</p>
            <p>4.1.1. Pranie peňazí je prísne zakázané.</p>
            <p>4.1.2. Podvod bude nahlásený príslušným orgánom.</p>
            <p>4.1.3. Použitie botov alebo automatizačného softvéru nie je dovolené.</p>
            <p>4.1.4. Každý pokus o manipuláciu so systémom bude prešetrovaný.</p>
            <p>4.1.5. Šírenie nepravdivých informácií je zakázané.</p>
            <p>4.1.6. Pokusy brániť prešetrovaniu nie sú dovolené.</p>
            <p>4.1.7. Výhrážky voči ostatným používateľom sú zakázané.</p>
            <p>4.1.8. Každá nezákonná činnosť bude sankcionovaná.</p>
            <p>4.1.9. Pokusy obísť pravidlá nie sú dovolené.</p>
            <p>4.1.10. Každé zneužitie systému berieme vážne.</p>
            <p class="bold-title">5. Duševné vlastníctvo</p>
            <p>5.1. Všetok obsah webu je naším duševným vlastníctvom.</p>
            <p>5.2. Používatelia nezískavajú práva k obsahu webu.</p>
            <p>5.3. Obsah sa nesmie kopírovať bez súhlasu.</p>
            <p>5.4. Tretie strany nesmú obsah meniť.</p>
            <p class="bold-title">6. Obmedzenie zodpovednosti</p>
            <p>6.1. Služby používaš na vlastné riziko.</p>
            <p>6.2. Neneseme zodpovednosť za straty z používania služieb.</p>
            <p>6.3. Akákoľvek strata z používania webu ide na vrub používateľa.</p>
            <p>6.4. Neprijímame zodpovednosť za škody spôsobené používaním webu.</p>
            <p>6.5. Technické problémy neneseme.</p>
            <p class="bold-title">7. Informácie</p>
            <p>7.1. Používaním služieb súhlasíš s kontaktovaním.</p>
            <p>7.2. S informáciami zaobchádzame dôverne.</p>
            <p>7.3. Používateľom odporúčame uchovávať záznamy.</p>
            <p class="bold-title">8. Odkazy a ďalšie zdroje</p>
            <p>8.1. Viac informácií nájdeš v našich zásadách.</p>
            <p>8.2. Vonkajšie odkazy nie sú odporúčaním.</p>
            <p>8.3. Odporúčame overiť zdroje pred použitím.</p>
            <p class="bold-title">9. Všeobecné ustanovenia</p>
            <p>9.1. Vyhradzujeme si právo služby kedykoľvek zmeniť.</p>
            <p>9.2. Podmienky sa môžu kedykoľvek zmeniť.</p>
            <p>9.3. Používaním služieb tieto podmienky prijímaš.</p>
            <p>9.4. Ústne dohody nie sú platné.</p>
            <p>9.5. Nevykonané práva sa nepovažujú za vzdanie.</p>
            <p>
              9.6. Ak bude ustanovenie vyhlásené za neplatné, ostatné zostávajú v platnosti.
            </p>
            <p>9.7. Služby môžu spravovať externí poskytovatelia.</p>
            <p>
              9.8. Na tieto podmienky sa vzťahuje právo <?= e(geo_in()) ?>. Všetky spory budú predložené
              príslušnému súdu <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

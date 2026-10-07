<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nahlásiť zneužitie | ' . SITE_NAME;
$page_description = 'Nahlásiť zneužitie alebo podozrivú aktivitu na ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Nahlásiť zneužitie</h1>
            <p class="bold-title">1. Hlásenie zneužitia</p>
            <p>
              1.1. Ak na webe narazíš na nevhodný obsah, nahlás to
              nám cez kontaktný formulár.
            </p>
            <p>Kontakt: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. V tejto časti môžeš uviesť informácie o zneužití alebo obsahu,
              ktorý porušuje naše zásady.
            </p>
            <p>
              1.3. Tvoje hlásenie je pre nás dôležité. Uveď konkrétne podrobnosti, aby sme mohli
              vec riadne prešetriť.
            </p>
            <p>Odoslaním hlásenia tiež súhlasíš so zásadami ochrany osobných údajov.</p>
            <p class="bold-title">2. Kto môže hlásiť</p>
            <p>
              2.1. Ak si sa stal obeťou zneužitia alebo si si všimol nevhodné správanie, máš
              právo to nahlásiť.
            </p>
            <p>2.1.1. Hlásenie môžu podávať iba osoby staršie ako 18 rokov.</p>
            <p>2.1.2. Hlásenie musí byť pravdivé a založené na faktoch.</p>
            <p>2.1.3. Použitie formulára musí byť v tvojej krajine zákonné.</p>
            <p>2.2. Neneseme zodpovednosť za nepravdivé alebo zlomyselné hlásenia.</p>
            <p class="bold-title">3. Postup hlásenia</p>
            <p>3.1. Vyhradzujeme si právo prešetrovať všetky hlásenia zneužitia.</p>
            <p>3.2. Ak bude hlásenie uznané za oprávnené, prijmeme potrebné opatrenia.</p>
            <p class="bold-title">4. Zakázané činnosti pri hlásení</p>
            <p>4.1. Použitie formulára na zlomyselné účely nie je dovolené.</p>
            <p>4.1.1. Nepravdivé alebo zavádzajúce hlásenia nie sú dovolené.</p>
            <p>4.1.2. Obťažovanie ostatných používateľov cez systém hlásení nie je dovolené.</p>
            <p>4.1.3. Použitie botov alebo automatizácie na podávanie hlásení je zakázané.</p>
            <p>4.1.4. Každý pokus o manipuláciu so systémom hlásení bude prešetrovaný.</p>
            <p>4.1.5. Použitie systému na šírenie nepravdivých informácií je zakázané.</p>
            <p>4.1.6. Pokusy brániť prešetrovaniu nie sú dovolené.</p>
            <p>4.1.7. Použitie systému na vyhrážanie nie je dovolené.</p>
            <p>4.1.8. Každá nezákonná činnosť spojená s hlásením bude sankcionovaná.</p>
            <p>4.1.9. Pokusy obísť pravidlá hlásenia nie sú dovolené.</p>
            <p>4.1.10. Každé zneužitie systému hlásení berieme vážne.</p>
            <p class="bold-title">5. Duševné vlastníctvo pri hlásení</p>
            <p>
              5.1. Obsah odoslaný pri hlásení ti nedáva žiadne vlastnícke práva.
            </p>
            <p>5.2. Podaním hlásenia používatelia nezískavajú práva k obsahu webu.</p>
            <p>5.3. Hlásenia slúžia výhradne na prešetrovanie.</p>
            <p>5.4. Tretie strany nesmú hlásenia kopírovať ani meniť.</p>
            <p class="bold-title">6. Obmedzenie zodpovednosti pri hlásení</p>
            <p>6.1. Odoslaním hlásenia preberáš zodpovednosť za jeho obsah.</p>
            <p>6.2. Neneseme zodpovednosť za dôsledky podaných hlásení.</p>
            <p>6.3. Akákoľvek strata vyplývajúca z hlásenia ide na vrub používateľa.</p>
            <p>6.4. Neprijímame zodpovednosť za škody spôsobené hláseniami.</p>
            <p>
              6.5. Technické problémy systému hlásení neneseme.
            </p>
            <p class="bold-title">7. Informácie o postupe hlásenia</p>
            <p>
              7.1. Používaním systému hlásení súhlasíš, že ťa môžeme kontaktovať kvôli ďalším informáciám.
            </p>
            <p>7.2. S hláseniami zaobchádzame dôverne.</p>
            <p>7.3. Používateľom odporúčame uchovať kópiu hlásení.</p>
            <p class="bold-title">8. Ďalšie odkazy a zdroje</p>
            <p>8.1. Viac o hlásení zneužitia nájdeš v našich zásadách.</p>
            <p>8.2. Odkazy na vonkajšie zdroje nie sú naším odporúčaním.</p>
            <p>8.3. Odporúčame overiť každý zdroj pred použitím.</p>
            <p class="bold-title">9. Všeobecné ustanovenia k hláseniam</p>
            <p>
              9.1. Vyhradzujeme si právo zmeniť, pozastaviť alebo ukončiť postup hlásenia
              kedykoľvek.
            </p>
            <p>
              9.2. Podmienky tohto postupu sa môžu kedykoľvek zmeniť. Ďalšie používanie
              služby hlásení po takých zmenách znamená prijatie nových podmienok.
            </p>
            <p>9.3. Podaním hlásenia používateľ tieto podmienky plne prijíma.</p>
            <p>
              9.4. Akákoľvek dohoda alebo vyhlásenie, písomné aj ústne, ktoré nespadá pod
              konkrétne body týchto podmienok, je neplatné a nezaväzuje žiadnu zo strán.
            </p>
            <p>
              9.5. Právo priznané týmito podmienkami, ktoré sa nevykoná — kvôli súhlasu,
              nedbanlivosti alebo neschopnosti — sa považuje za vzdanie. Čiastočný alebo plný výkon práva
              nevylučuje ani neobmedzuje neskorší výkon.
            </p>
            <p>
              9.6. Ak príslušný súd vyhlási ustanovenie týchto podmienok za neplatné, bude
              považované za neplatné. Zvyšok podmienok však zostáva v plnej platnosti.
            </p>
            <p>
              9.7. Berie sa na vedomie, že tieto podmienky umožňujú prevádzku webu tretími
              stranami, ktoré môžu prevádzať práva a povinnosti. Používateľ nesmie previesť
              svoje práva a povinnosti na inú stranu.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

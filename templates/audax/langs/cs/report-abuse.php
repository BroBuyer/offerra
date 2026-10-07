<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nahlásit zneužití | ' . SITE_NAME;
$page_description = 'Nahlásit zneužití nebo podezřelou aktivitu na ' . SITE_NAME . '.';
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
            <h1>Nahlásit zneužití</h1>
            <p class="bold-title">1. Hlášení zneužití</p>
            <p>
              1.1. Pokud na webu narazíš na nevhodný obsah, nahlás to
              nám přes kontaktní formulář.
            </p>
            <p>Kontakt: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. V této části můžeš uvést informace o zneužití nebo obsahu,
              který porušuje naše zásady.
            </p>
            <p>
              1.3. Tvoje hlášení je pro nás důležité. Uveď konkrétní podrobnosti, abychom mohli
              věc řádně prošetřit.
            </p>
            <p>Odesláním hlášení také souhlasíš se zásadami ochrany osobních údajů.</p>
            <p class="bold-title">2. Kdo může hlásit</p>
            <p>
              2.1. Pokud ses stal obětí zneužití nebo jsi si všiml nevhodného chování, máš
              právo to nahlásit.
            </p>
            <p>2.1.1. Hlášení mohou podávat pouze osoby starší 18 let.</p>
            <p>2.1.2. Hlášení musí být pravdivé a založené na faktech.</p>
            <p>2.1.3. Použití formuláře musí být v tvé zemi zákonné.</p>
            <p>2.2. Neneseme odpovědnost za nepravdivá nebo zlomyslná hlášení.</p>
            <p class="bold-title">3. Postup hlášení</p>
            <p>3.1. Vyhrazujeme si právo šetřit všechna hlášení zneužití.</p>
            <p>3.2. Pokud bude hlášení shledáno oprávněným, přijmeme potřebná opatření.</p>
            <p class="bold-title">4. Zakázané činnosti při hlášení</p>
            <p>4.1. Použití formuláře ke zlomyslným účelům není dovoleno.</p>
            <p>4.1.1. Nepravdivá nebo zavádějící hlášení nejsou dovolena.</p>
            <p>4.1.2. Obtěžování ostatních uživatelů přes systém hlášení není dovoleno.</p>
            <p>4.1.3. Použití botů nebo automatizace k podávání hlášení je zakázáno.</p>
            <p>4.1.4. Každý pokus o manipulaci se systémem hlášení bude šetřen.</p>
            <p>4.1.5. Použití systému k šíření nepravdivých informací je zakázáno.</p>
            <p>4.1.6. Pokusy bránit šetření nejsou dovoleny.</p>
            <p>4.1.7. Použití systému k vyhrožování není dovoleno.</p>
            <p>4.1.8. Každá nezákonná činnost spojená s hlášením bude sankcionována.</p>
            <p>4.1.9. Pokusy obejít pravidla hlášení nejsou dovoleny.</p>
            <p>4.1.10. Každé zneužití systému hlášení bereme vážně.</p>
            <p class="bold-title">5. Duševní vlastnictví při hlášení</p>
            <p>
              5.1. Obsah odeslaný při hlášení ti nedává žádná vlastnická práva.
            </p>
            <p>5.2. Podáním hlášení uživatelé nezískávají práva k obsahu webu.</p>
            <p>5.3. Hlášení slouží výhradně k šetření.</p>
            <p>5.4. Třetí strany nesmějí hlášení kopírovat ani měnit.</p>
            <p class="bold-title">6. Omezení odpovědnosti při hlášení</p>
            <p>6.1. Odesláním hlášení přebíráš odpovědnost za jeho obsah.</p>
            <p>6.2. Neneseme odpovědnost za důsledky podaných hlášení.</p>
            <p>6.3. Jakákoli ztráta vyplývající z hlášení jde na vrub uživatele.</p>
            <p>6.4. Nepřijímáme odpovědnost za škody způsobené hlášeními.</p>
            <p>
              6.5. Technické problémy systému hlášení neneseme.
            </p>
            <p class="bold-title">7. Informace o postupu hlášení</p>
            <p>
              7.1. Používáním systému hlášení souhlasíš, že tě můžeme kontaktovat kvůli dalším informacím.
            </p>
            <p>7.2. S hlášeními zacházíme důvěrně.</p>
            <p>7.3. Uživatelům doporučujeme uchovat kopii hlášení.</p>
            <p class="bold-title">8. Další odkazy a zdroje</p>
            <p>8.1. Více o hlášení zneužití najdeš v našich zásadách.</p>
            <p>8.2. Odkazy na vnější zdroje nejsou naším doporučením.</p>
            <p>8.3. Doporučujeme ověřit každý zdroj před použitím.</p>
            <p class="bold-title">9. Obecná ustanovení k hlášením</p>
            <p>
              9.1. Vyhrazujeme si právo změnit, pozastavit nebo ukončit postup hlášení
              kdykoli.
            </p>
            <p>
              9.2. Podmínky tohoto postupu se mohou kdykoli změnit. Další používání
              služby hlášení po takových změnách znamená přijetí nových podmínek.
            </p>
            <p>9.3. Podáním hlášení uživatel tyto podmínky plně přijímá.</p>
            <p>
              9.4. Jakákoli dohoda nebo prohlášení, písemné i ústní, které nespadá pod
              konkrétní body těchto podmínek, je neplatné a nezavazuje žádnou ze stran.
            </p>
            <p>
              9.5. Právo přiznané těmito podmínkami, které se nevykoná — kvůli souhlasu,
              nedbalosti nebo neschopnosti — se považuje za vzdání. Částečný nebo plný výkon práva
              nevylučuje ani neomezuje pozdější výkon.
            </p>
            <p>
              9.6. Pokud příslušný soud prohlásí ustanovení těchto podmínek za neplatné, bude
              považováno za neplatné. Zbytek podmínek však zůstává v plné platnosti.
            </p>
            <p>
              9.7. Bere se na vědomí, že tyto podmínky umožňují provoz webu třetími
              stranami, které mohou převádět práva a povinnosti. Uživatel nesmí převést
              svá práva a povinnosti na jinou stranu.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

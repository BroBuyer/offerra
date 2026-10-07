<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Podmínky použití | ' . SITE_NAME;
$page_description = 'Podmínky použití platformy ' . SITE_NAME . '.';
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
            <h1>Podmínky použití</h1>
            <p class="bold-title">1. Úvod</p>
            <p>1.1. K používání služeb je nutný souhlas s těmito podmínkami.</p>
            <p>1.2. Tyto podmínky tvoří právně závaznou dohodu.</p>
            <p>1.3. Další používání webu znamená přijetí podmínek.</p>
            <p>
              1.4. S otázkami nás můžeš kontaktovat na
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Právo používat</p>
            <p>2.1. Služby mohou používat pouze osoby starší 18 let.</p>
            <p>2.1.1. Musíš žít v zemi, kde jsou služby zákonné.</p>
            <p>2.1.2. Nesmíš figurovat na sankčním seznamu.</p>
            <p>2.1.3. Musíš mít způsobilost k právním úkonům.</p>
            <p>2.2. Neneseme odpovědnost za použití neoprávněnými uživateli.</p>
            <p class="bold-title">3. Uživatelský účet</p>
            <p>3.1. Odpovídáš za zabezpečení svého účtu.</p>
            <p>3.2. Nesdílej heslo s třetími stranami.</p>
            <p class="bold-title">4. Zakázané činnosti</p>
            <p>4.1. Použití služeb k nezákonným účelům není dovoleno.</p>
            <p>4.1.1. Praní peněz je přísně zakázáno.</p>
            <p>4.1.2. Podvod bude nahlášen příslušným orgánům.</p>
            <p>4.1.3. Použití botů nebo automatizačního softwaru není dovoleno.</p>
            <p>4.1.4. Každý pokus o manipulaci se systémem bude šetřen.</p>
            <p>4.1.5. Šíření nepravdivých informací je zakázáno.</p>
            <p>4.1.6. Pokusy bránit šetření nejsou dovoleny.</p>
            <p>4.1.7. Výhrůžky vůči ostatním uživatelům jsou zakázány.</p>
            <p>4.1.8. Každá nezákonná činnost bude sankcionována.</p>
            <p>4.1.9. Pokusy obejít pravidla nejsou dovoleny.</p>
            <p>4.1.10. Každé zneužití systému bereme vážně.</p>
            <p class="bold-title">5. Duševní vlastnictví</p>
            <p>5.1. Veškerý obsah webu je naším duševním vlastnictvím.</p>
            <p>5.2. Uživatelé nezískávají práva k obsahu webu.</p>
            <p>5.3. Obsah se nesmí kopírovat bez souhlasu.</p>
            <p>5.4. Třetí strany nesmějí obsah měnit.</p>
            <p class="bold-title">6. Omezení odpovědnosti</p>
            <p>6.1. Služby používáš na vlastní riziko.</p>
            <p>6.2. Neneseme odpovědnost za ztráty z používání služeb.</p>
            <p>6.3. Jakákoli ztráta z používání webu jde na vrub uživatele.</p>
            <p>6.4. Nepřijímáme odpovědnost za škody způsobené používáním webu.</p>
            <p>6.5. Technické problémy neneseme.</p>
            <p class="bold-title">7. Informace</p>
            <p>7.1. Používáním služeb souhlasíš s kontaktováním.</p>
            <p>7.2. S informacemi zacházíme důvěrně.</p>
            <p>7.3. Uživatelům doporučujeme uchovávat záznamy.</p>
            <p class="bold-title">8. Odkazy a další zdroje</p>
            <p>8.1. Více informací najdeš v našich zásadách.</p>
            <p>8.2. Vnější odkazy nejsou doporučením.</p>
            <p>8.3. Doporučujeme ověřit zdroje před použitím.</p>
            <p class="bold-title">9. Obecná ustanovení</p>
            <p>9.1. Vyhrazujeme si právo služby kdykoli změnit.</p>
            <p>9.2. Podmínky se mohou kdykoli změnit.</p>
            <p>9.3. Používáním služeb tyto podmínky přijímáš.</p>
            <p>9.4. Ústní dohody nejsou platné.</p>
            <p>9.5. Nevykonaná práva se nepovažují za vzdání.</p>
            <p>
              9.6. Pokud bude ustanovení prohlášeno za neplatné, zbývající zůstávají v platnosti.
            </p>
            <p>9.7. Služby mohou spravovat externí poskytovatelé.</p>
            <p>
              9.8. Na tyto podmínky se vztahuje právo <?= e(geo_in()) ?>. Veškeré spory budou předloženy
              příslušnému soudu <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

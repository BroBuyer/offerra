<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Naudojimo sąlygos');
$page_description = 'Perskaitykite naudojimosi sąlygas' . SITE_NAME . 'prekybos platforma ir svetainė.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Naudojimo sąlygos</h1>
      <p class="lead">Paskutinį kartą atnaujinta:<?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prieinant<?= e(SITE_NAME) ?>sutinkate su šiomis naudojimo sąlygomis. Jei nesutinkate, prašome nesinaudoti mūsų paslaugomis.</p>

      <h2>Tinkamumas</h2>
      <p>Turite būti ne jaunesni kaip 18 metų ir turėti teisinį leidimą prekiauti finansinėmis priemonėmis jūsų jurisdikcijoje.</p>

      <h2>Rizikos atskleidimas</h2>
      <p>Prekyba kriptovaliutomis, Forex, CFD ir kitomis finansinėmis priemonėmis yra susijusi su didele nuostolių rizika. Ankstesni rezultatai negarantuoja ateities rezultatų. Prekiaukite tik su kapitalu, kurį galite sau leisti prarasti.</p>

      <h2>Sąskaitos pareigos</h2>
      <p>Jūs esate atsakingi už savo paskyros kredencialų konfidencialumo palaikymą ir už visą veiklą su paskyra.</p>

      <h2>Paslaugos prieinamumas</h2>
      <p>Mes siekiame nuolatinio pasiekiamumo, bet negarantuojame nepertraukiamos prieigos. Priežiūra, rinkos sąlygos arba techninės problemos gali turėti įtakos aptarnavimui.</p>

      <h2>Atsakomybės apribojimas</h2>
      <p><?= e(SITE_NAME) ?>nėra atsakinga už prekybos nuostolius ar žalą, atsiradusią dėl informacijos naudojimo šioje svetainėje. Jei reikia, kreipkitės į nepriklausomą finansinę konsultaciją.</p>

      <h2>Susisiekite</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

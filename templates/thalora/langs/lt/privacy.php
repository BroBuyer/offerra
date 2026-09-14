<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privatumo apžvalga | Duomenų apsauga adresu' . SITE_NAME;
$page_description = 'Suprask kaip' . SITE_NAME . 'saugo jūsų duomenis pagal mūsų išsamią privatumo politiką.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Privatumo politika', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="duonos trupinys"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Namai</a>
  <span class="breadcrumb-item">Privatumo politika</span>
</nav>
<h1>Mūsų įsipareigojimas apsaugoti jūsų privatumą</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Paskutinį kartą atnaujinta: 2026-07-08</p>
    <p>At <?= e(SITE_NAME) ?>(„Mes“, „Mus“), jūsų asmens duomenų apsauga yra prioritetas. Šiame pareiškime paaiškinama, kaip renkame, naudojame ir saugome jūsų informaciją.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Duomenų tvarkymo skaidrumas</p>
    <p>
      Siekiame atvirumo tvarkant duomenis. Susisiekite su mumis adresu      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Duomenų naudojimo tikslas</p>
    <p>Jūsų informaciją naudojame siekdami teikti paslaugas, tobulinti savo platformą ir vykdyti teisinius įsipareigojimus.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Prieiga prie Jūsų duomenų</p>
    <p>Bet kuriuo metu galite prašyti prieigos prie savo asmens duomenų, juos ištaisyti arba ištrinti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Saugumo praktika</p>
    <p>Taikome tvirtas saugumo priemones, tačiau negalime pažadėti visiškos jūsų asmens duomenų apsaugos.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informacija, kurią renkame</h2>
    <p>Renkame informaciją, įskaitant IP adresus, įrenginio specifiką, naršyklės tipus ir visus jūsų tiesiogiai pateiktus duomenis.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Tvarkymo pagrindas</h2>
    <p>Tvarkome jūsų duomenis remiantis jūsų sutikimu, teisėtais interesais ir galiojančių įstatymų laikymusi.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Dalijimasis duomenimis</h2>
    <p>Jūsų informacija gali būti bendrinama su patikimais partneriais, paslaugų teikėjais ir teisinėmis institucijomis, kai to teisiškai reikalaujama.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Slapukų naudojimas</h2>
    <p>Slapukai palaiko svetainės funkcionalumą ir vartotojų analizę, tačiau, jei norite, galite pasirinkti juos išjungti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Duomenų saugojimo laikotarpis</h2>
    <p>Jūsų informaciją saugome tik tiek, kiek tai būtina nurodytiems tikslams įgyvendinti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Tarptautinis duomenų perdavimas</h2>
    <p>Duomenys gali būti perduodami tarpvalstybiniu mastu taikant atitinkamas apsaugos priemones.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Nuorodos į kitas svetaines</h2>
    <p>Mes neprisiimame atsakomybės už išorines svetaines, kurių nuoroda pateikiama per mūsų platformą, ar jų praktiką.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Šios politikos atnaujinimai</h2>
    <p>Ši privatumo politika kartais gali būti atnaujinama.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Jūsų teisinės teisės</h2>
    <p>Jūs turite teisę pasiekti, keisti, ištrinti, apriboti duomenų tvarkymą, perkelti savo asmeninę informaciją, atšaukti sutikimą ir, jei reikia, pateikti skundus.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

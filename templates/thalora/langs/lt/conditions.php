<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Taisyklės ir sąlygos | Vartotojo sutartis su' . SITE_NAME;
$page_description = 'Peržiūrėkite ' . SITE_NAME . ' platformos sąlygas, prekybos taisykles ir klientų aptarnavimo politiką.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Taisyklės ir sąlygos', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="duonos trupinys" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Pagrindinis puslapis</a>
            <span class="breadcrumb-item">Taisyklės ir sąlygos</span>
        </nav>
        <h1>Taisyklės ir sąlygos</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Įvadas</h2>
    <p>Šioje svetainėje pateikiama informacija apie trečiųjų šalių prekybos paslaugas. Tęsdami sutinkate su šiomis sąlygomis ir mūsų privatumo politika. Sąlygos gali būti atnaujintos.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Naudotojo tinkamumas</h2>
    <p>Turite būti bent 18 metų amžiaus ir turėti teisinį leidimą sutikti su šiomis sąlygomis pagal vietinius įstatymus. Mes neprisiimame atsakomybės už netinkamą platformos naudojimą.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Prieigos apribojimai</h2>
    <p>Prieiga gali būti apribota tam tikruose regionuose arba ten, kur taikomi reguliavimo apribojimai. Kai kurios paslaugos gali būti nepasiekiamos konkrečiose vietose.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Tinkamas naudojimas</h2>
    <p>Draudžiama neteisėtai naudotis šia svetaine, įskaitant neteisėtą veiklą, teisių pažeidimą, žalingo turinio platinimą ar automatizuotus robotus. Už pažeidimus paskyra gali būti laikinai sustabdyta.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Intelektinė nuosavybė</h2>
    <p>Visas turinys, prekių ženklai ir intelektinė nuosavybė priklauso mums arba mūsų filialams. Svetainės naudojimas yra asmeninis; neleidžiama kopijuoti ar keisti turinio.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Atsakomybės atsisakymas</h2>
    <p>Paslaugos ir svetainė teikiami „tokia, kokia yra“. Mes neprisiimame atsakomybės už klaidas, nuostolius ar žalą, atsiradusią dėl naudojimo.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Trečiųjų šalių turinys</h2>
    <p>Gali būti įtrauktas trečiųjų šalių turinys arba nuorodos, tačiau jų tikslumas ar prieinamumas negarantuojamas; patikrinkite savarankiškai.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Išorinės nuorodos</h2>
    <p>Patogumui siūlomos išorinės nuorodos. Mes nepatvirtiname ir nekontroliuojame šių svetainių ir neprisiimame atsakomybės už jų turinį.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Papildomos sąlygos</h2>
    <p>Mes galime atnaujinti paslaugas ir sąlygas savo nuožiūra. Šios sąlygos sudaro visą sutartį. Teisių neįgyvendinimas nereiškia atsisakymo.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

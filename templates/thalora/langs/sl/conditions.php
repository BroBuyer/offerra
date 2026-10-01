<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Pogoji | Uporabniška pogodba z' . SITE_NAME;
$page_description = 'Preglejte ' . SITE_NAME . ' pogoje platforme, pravila trgovanja in politike podpore strankam.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Pogoji in določila', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="potek strani" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domača stran</a>
            <span class="breadcrumb-item">Pogoji in določila</span>
        </nav>
        <h1>Pogoji</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Uvod</h2>
    <p>To spletno mesto ponuja informacije o storitvah trgovanja tretjih oseb. Če nadaljujete, se strinjate s temi pogoji in našo politiko zasebnosti. Pogoji se lahko posodobijo.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Upravičenost uporabnika</h2>
    <p>Biti morate stari najmanj 18 let in imeti zakonsko dovoljenje, da sprejmete te pogoje v skladu z vašo lokalno zakonodajo. Zavračamo odgovornost za nepravilno uporabo platforme.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Omejitve dostopa</h2>
    <p>Dostop je lahko omejen v nekaterih regijah ali kjer obstajajo zakonske omejitve. Nekatere storitve morda niso na voljo na določenih lokacijah.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Ustrezna uporaba</h2>
    <p>Nepooblaščena uporaba tega spletnega mesta je prepovedana, vključno z nezakonitimi dejavnostmi, kršenjem pravic, distribucijo škodljive vsebine ali avtomatiziranimi roboti. Kršitve lahko povzročijo blokado računa.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Intelektualna lastnina</h2>
    <p>Vsa vsebina, blagovne znamke in intelektualna lastnina so v naši lasti ali naših podružnicah. Uporaba spletnega mesta je osebna; kopiranje ali spreminjanje vsebine ni dovoljeno.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Zavrnitev odgovornosti</h2>
    <p>Storitve in spletna stran so na voljo "takšne kot so". Ne prevzemamo odgovornosti za napake, izgube ali škodo, ki je posledica uporabe.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Vsebina tretjih oseb</h2>
    <p>Vsebina ali povezave tretjih oseb so lahko vključene, vendar ni zagotovljena njihova točnost ali razpoložljivost; preverite neodvisno.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Zunanje povezave</h2>
    <p>Za udobje so na voljo zunanje povezave. Teh spletnih mest ne podpiramo ali nadzorujemo in ne prevzemamo nobene odgovornosti za njihovo vsebino.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Dodatni pogoji</h2>
    <p>Storitve in pogoje lahko posodobimo po lastni presoji. Ti pogoji predstavljajo celotno pogodbo. Neuveljavljanje pravic ne pomeni odpovedi.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

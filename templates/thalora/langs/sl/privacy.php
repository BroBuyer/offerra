<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Pregled zasebnosti | Varstvo podatkov pri' . SITE_NAME;
$page_description = 'Razumeti, kako' . SITE_NAME . 'varuje vaše podatke z našim podrobnim pravilnikom o zasebnosti.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Politika zasebnosti', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="potek strani"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Domov</a>
  <span class="breadcrumb-item">Politika zasebnosti</span>
</nav>
<h1>Naša predanost varovanju vaše zasebnosti</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Zadnja posodobitev: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?>(»mi«, »nas«), je varstvo vaših osebnih podatkov prednostna naloga. Ta izjava pojasnjuje, kako zbiramo, uporabljamo in varujemo vaše podatke.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparentnost pri ravnanju s podatki</p>
    <p>
      Prizadevamo si za odprtost pri ravnanju z našimi podatki. Pišite nam na      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Namen uporabe podatkov</p>
    <p>Vaše podatke uporabljamo za zagotavljanje storitev, izboljšanje naše platforme in izpolnjevanje zakonskih obveznosti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Dostop do vaših podatkov</p>
    <p>Kadarkoli lahko zahtevate vpogled, popravek ali izbris svojih osebnih podatkov.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Varnostne prakse</p>
    <p>Uporabljamo stroge varnostne ukrepe, vendar ne moremo obljubiti popolne zaščite vaših osebnih podatkov.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informacije, ki jih zbiramo</h2>
    <p>Zbiramo informacije, vključno z naslovi IP, posebnostmi naprave, vrstami brskalnikov in vsemi podatki, ki jih posredujete neposredno.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Razlogi za obdelavo</h2>
    <p>Naše ravnanje z vašimi podatki temelji na vaši privolitvi, zakonitih interesih in skladnosti z veljavno zakonodajo.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Skupna raba podatkov</h2>
    <p>Vaši podatki bodo morda razkriti zaupanja vrednim partnerjem, ponudnikom storitev in pravnim organom, ko to zahteva zakon.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Uporaba piškotkov</h2>
    <p>Piškotki podpirajo funkcionalnost spletnega mesta in analizo uporabnikov, vendar jih lahko po želji onemogočite.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Obdobje hrambe podatkov</h2>
    <p>Vaše podatke hranimo le toliko časa, kolikor je potrebno za izpolnitev opisanih namenov.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Mednarodni prenosi podatkov</h2>
    <p>Podatki se lahko prenašajo prek meja z ustreznimi zaščitnimi ukrepi.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Povezave do drugih spletnih mest</h2>
    <p>Ne prevzemamo odgovornosti za zunanja spletna mesta, povezana prek naše platforme, ali njihove prakse.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Posodobitve tega pravilnika</h2>
    <p>Ta pravilnik o zasebnosti se lahko občasno posodobi.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Vaše zakonske pravice</h2>
    <p>Imate pravico do dostopa, spreminjanja, brisanja, omejevanja obdelave podatkov, premikanja osebnih podatkov, preklica soglasja in vložitve pritožb, če je potrebno.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

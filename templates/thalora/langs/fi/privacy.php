<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Tietosuoja | Tietojen suojaus palvelussa ' . SITE_NAME;
$page_description = 'Katso, miten ' . SITE_NAME . ' suojaa tietosi tietosuojakäytännössä.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Tietosuojakäytäntö', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigointipolku"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Etusivu</a>
  <span class="breadcrumb-item">Tietosuojakäytäntö</span>
</nav>
<h1>Sitoumuksemme yksityisyytesi suojaamiseen</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Viimeksi päivitetty: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («me»), henkilötietojesi suojaaminen on prioriteetti. Tämä seloste kertoo, miten keräämme, käytämme ja suojaamme tietojasi.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Läpinäkyvyys tietojen käsittelyssä</p>
    <p>
      Pyrimme avoimuuteen tietojen käsittelyssä. Ota yhteyttä osoitteeseen      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Tietojen käytön tarkoitus</p>
    <p>Käytämme tietojasi palvelujen tarjoamiseen, alustan parantamiseen ja lakisääteisten velvoitteiden täyttämiseen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Pääsy tietoihisi</p>
    <p>Voit milloin tahansa pyytää pääsyä, oikaisua tai henkilötietojen poistamista.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Tietoturvakäytännöt</p>
    <p>Sovellamme vankkoja tietoturvatoimia ilman takeita ehdottomasta suojasta.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Keräämämme tiedot</h2>
    <p>Keräämme muun muassa IP-osoitteita, laitteen tietoja, selaintyyppejä ja tietoja, jotka annat suoraan.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Käsittelyn perusteet</h2>
    <p>Käsittely perustuu suostumukseen, oikeutettuihin etuihin ja sovellettavan lain noudattamiseen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Tietojen jakaminen</h2>
    <p>Tietojasi voidaan jakaa luotettaville kumppaneille, palveluntarjoajille ja viranomaisille, kun laki sitä edellyttää.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Evästeet</h2>
    <p>Evästeet tukevat sivuston toimintaa ja käytön analyysiä; voit poistaa ne käytöstä, jos haluat.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Säilytysaika</h2>
    <p>Säilytämme tietoja vain niin kauan kuin on tarpeen ilmoitettuihin tarkoituksiin.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Kansainväliset siirrot</h2>
    <p>Tietoja voidaan siirtää rajojen yli asianmukaisin suojatoimin.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Linkit muille sivustoille</h2>
    <p>Emme vastaa alustalta linkitetyistä ulkoisista sivustoista emmekä niiden käytännöistä.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Tämän käytännön päivitykset</h2>
    <p>Tätä tietosuojakäytäntöä voidaan päivittää.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Oikeutesi</h2>
    <p>Sinulla on oikeus pääsyyn, oikaisuun, poistamiseen, käsittelyn rajoittamiseen, tietojen siirtoon, suostumuksen peruuttamiseen ja valituksen tekemiseen.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Ehdot | Käyttäjäsopimus palvelussa ' . SITE_NAME;
$page_description = 'Lue alustan ehdot, kaupankäyntisäännöt ja tukikäytännöt palvelussa ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Ehdot', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigointipolku" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Etusivu</a>
            <span class="breadcrumb-item">Ehdot</span>
        </nav>
        <h1>Käyttöehdot</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Johdanto</h2>
    <p>Tämä sivusto kertoo kolmansien osapuolten kaupankäyntipalveluista. Jatkamalla hyväksyt nämä ehdot ja tietosuojakäytännön. Ehtoja voidaan päivittää.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Käyttäjän kelpoisuus</h2>
    <p>Sinun on oltava vähintään 18-vuotias ja oikeudellisesti oikeutettu hyväksymään nämä ehdot paikallisen lain mukaan. Emme vastaa alustan virheellisestä käytöstä.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Pääsyn rajoitukset</h2>
    <p>Pääsyä voidaan rajoittaa tietyillä alueilla tai sääntelyrajoitusten vuoksi. Jotkin palvelut voivat olla tietyissä paikoissa poissa käytöstä.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Asianmukainen käyttö</h2>
    <p>Luvaton käyttö on kielletty, mukaan lukien laiton toiminta, oikeuksien loukkaus, haitallinen sisältö tai botit. Rikkomukset voivat johtaa tilin jäädyttämiseen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Immateriaalioikeudet</h2>
    <p>Kaikki sisältö, tavaramerkit ja immateriaalioikeudet kuuluvat meille tai konserniyhtiöille. Sivuston käyttö on henkilökohtaista; sisällön kopiointi tai muokkaaminen ei ole sallittua.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Vastuuvapaus</h2>
    <p>Palvelut ja sivusto tarjotaan «sellaisenaan». Emme vastaa virheistä, tappioista emmekä käytöstä aiheutuvista vahingoista.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Kolmansien osapuolten sisältö</h2>
    <p>Kolmansien osapuolten sisältöä tai linkkejä voi esiintyä ilman takuuta tarkkuudesta tai saatavuudesta; tarkista itse.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Ulkoiset linkit</h2>
    <p>Ulkoiset linkit ovat mukavuudeksi. Emme tue emmekä hallitse näitä sivustoja emmekä vastaa niiden sisällöstä.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Lisäehdot</h2>
    <p>Voimme päivittää palveluja ja ehtoja. Nämä ehdot muodostavat koko sopimuksen. Oikeuksien käyttämättä jättäminen ei merkitse luopumista.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privacy | Gegevensbescherming bij ' . SITE_NAME;
$page_description = 'Ontdek hoe ' . SITE_NAME . ' je gegevens beschermt met ons privacybeleid.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Privacybeleid', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigatiepad"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
  <span class="breadcrumb-item">Privacybeleid</span>
</nav>
<h1>Onze inzet voor jouw privacy</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Laatst bijgewerkt: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («wij»), is bescherming van persoonsgegevens een prioriteit. Deze verklaring legt uit hoe we je informatie verzamelen, gebruiken en beschermen.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparantie in gegevensverwerking</p>
    <p>
      We streven naar openheid over gegevensverwerking. Neem contact op via      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Doel van gegevensgebruik</p>
    <p>We gebruiken je informatie om diensten te leveren, het platform te verbeteren en wettelijke verplichtingen na te komen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Toegang tot je gegevens</p>
    <p>Je kunt altijd inzage, correctie of verwijdering van je persoonsgegevens vragen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Beveiligingspraktijken</p>
    <p>We gebruiken stevige beveiligingsmaatregelen, zonder absolute bescherming te kunnen garanderen.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informatie die we verzamelen</h2>
    <p>We verzamelen onder meer IP-adressen, apparaatgegevens, browsertypes en gegevens die je zelf verstrekt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Grondslagen voor verwerking</h2>
    <p>Verwerking steunt op toestemming, gerechtvaardigde belangen en naleving van toepasselijke wetten.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Delen van gegevens</h2>
    <p>Je gegevens kunnen worden gedeeld met vertrouwde partners, leveranciers en autoriteiten wanneer de wet dat vereist.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Cookies ondersteunen de werking van de site en gebruiksanalyse; je kunt ze uitschakelen als je dat wilt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Bewaartermijn</h2>
    <p>We bewaren informatie alleen zolang nodig voor de beschreven doelen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Internationale doorgifte</h2>
    <p>Gegevens kunnen over de grens worden doorgegeven, met passende waarborgen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Links naar andere sites</h2>
    <p>We nemen geen verantwoordelijkheid voor externe sites die vanaf het platform worden gelinkt, noch voor hun praktijken.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Updates van dit beleid</h2>
    <p>Dit privacybeleid kan worden bijgewerkt.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Jouw rechten</h2>
    <p>Je hebt recht op inzage, rectificatie, wissing, beperking van verwerking, dataportabiliteit, intrekking van toestemming en het indienen van een klacht.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

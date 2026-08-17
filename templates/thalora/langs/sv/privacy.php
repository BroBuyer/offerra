<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Integritet | Dataskydd hos ' . SITE_NAME;
$page_description = 'Se hur ' . SITE_NAME . ' skyddar dina uppgifter i vår integritetspolicy.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Integritetspolicy', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="sökväg"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Hem</a>
  <span class="breadcrumb-item">Integritetspolicy</span>
</nav>
<h1>Vårt åtagande att skydda din integritet</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Senast uppdaterad: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («vi», «oss») prioriterar skyddet av dina personuppgifter. Denna redogörelse förklarar hur vi samlar in, använder och skyddar din information.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparens i datahantering</p>
    <p>
      Vi strävar efter öppenhet kring hur vi hanterar data. Kontakta oss på      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Syfte med dataanvändning</p>
    <p>Vi använder din information för att tillhandahålla tjänster, förbättra plattformen och uppfylla lagkrav.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Åtkomst till dina uppgifter</p>
    <p>Du kan när som helst begära åtkomst till, rättelse av eller radering av dina personuppgifter.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Säkerhetspraxis</p>
    <p>Vi tillämpar robusta säkerhetsåtgärder men kan inte lova ett absolut skydd av dina personuppgifter.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Information vi samlar in</h2>
    <p>Vi samlar in bland annat IP-adresser, enhetsuppgifter, webbläsartyper och uppgifter som du lämnar direkt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Rättslig grund för behandling</h2>
    <p>Behandlingen bygger på samtycke, berättigade intressen och efterlevnad av tillämplig lag.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Delning av uppgifter</h2>
    <p>Dina uppgifter kan delas med betrodda partners, tjänsteleverantörer och myndigheter när lagen kräver det.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Cookies stöder webbplatsens funktion och användningsanalys; du kan stänga av dem om du vill.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Lagringstid</h2>
    <p>Vi sparar uppgifter bara så länge det behövs för de angivna syftena.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Internationella överföringar</h2>
    <p>Uppgifter kan överföras över gränser med lämpliga skyddsåtgärder.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Länkar till andra webbplatser</h2>
    <p>Vi ansvarar inte för externa webbplatser som länkas från plattformen eller för deras praxis.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Uppdateringar av denna policy</h2>
    <p>Denna integritetspolicy kan uppdateras.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Dina rättigheter</h2>
    <p>Du har rätt till åtkomst, rättelse, radering, begränsning av behandling, dataportabilitet, att återkalla samtycke och att lämna klagomål.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

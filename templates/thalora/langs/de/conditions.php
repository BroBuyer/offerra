<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'AGB | Nutzungsvereinbarung mit ' . SITE_NAME;
$page_description = 'Lesen Sie die Plattformbedingungen, Handelsregeln und Support-Richtlinien von ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('AGB', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="Navigationspfad" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Startseite</a>
            <span class="breadcrumb-item">AGB</span>
        </nav>
        <h1>Allgemeine Geschäftsbedingungen</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Einleitung</h2>
    <p>Diese Website informiert über Trading-Dienste Dritter. Mit dem Fortfahren akzeptieren Sie diese Bedingungen und die Datenschutzerklärung. Die Bedingungen können aktualisiert werden.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Nutzungsberechtigung</h2>
    <p>Sie müssen mindestens 18 Jahre alt und nach lokalem Recht berechtigt sein, diese Bedingungen anzunehmen. Wir schließen Haftung für unsachgemäße Nutzung aus.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Zugangsbeschränkungen</h2>
    <p>Der Zugang kann in bestimmten Regionen oder bei regulatorischen Beschränkungen eingeschränkt sein. Manche Dienste sind an einzelnen Orten nicht verfügbar.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Zulässige Nutzung</h2>
    <p>Unbefugte Nutzung ist untersagt, einschließlich illegaler Aktivitäten, Rechtsverletzungen, schädlicher Inhalte oder Bots. Verstöße können zur Kontosperrung führen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Geistiges Eigentum</h2>
    <p>Alle Inhalte, Marken und Schutzrechte gehören uns oder verbundenen Unternehmen. Die Nutzung ist persönlich; Kopieren oder Ändern von Inhalten ist nicht gestattet.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Haftungsausschluss</h2>
    <p>Dienste und Website werden «wie besehen» bereitgestellt. Wir übernehmen keine Verantwortung für Fehler, Verluste oder Schäden aus der Nutzung.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Inhalte Dritter</h2>
    <p>Inhalte oder Links Dritter können erscheinen, ohne Garantie für Richtigkeit oder Verfügbarkeit; prüfen Sie selbst.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Externe Links</h2>
    <p>Externe Links dienen der Bequemlichkeit. Wir befürworten oder kontrollieren diese Seiten nicht und schließen Haftung für deren Inhalt aus.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Weitere Bestimmungen</h2>
    <p>Wir können Dienste und Bedingungen aktualisieren. Diese Bedingungen bilden die gesamte Vereinbarung. Nichtausübung von Rechten bedeutet keinen Verzicht.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

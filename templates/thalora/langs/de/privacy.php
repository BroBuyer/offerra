<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Datenschutz | Schutz Ihrer Daten bei ' . SITE_NAME;
$page_description = 'Erfahren Sie, wie ' . SITE_NAME . ' Ihre Daten in der Datenschutzerklärung schützt.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Datenschutzerklärung', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="Navigationspfad"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Startseite</a>
  <span class="breadcrumb-item">Datenschutzerklärung</span>
</nav>
<h1>Unser Engagement für Ihren Datenschutz</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Zuletzt aktualisiert: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («wir») hat der Schutz Ihrer personenbezogenen Daten Vorrang. Diese Erklärung beschreibt, wie wir Informationen erheben, nutzen und schützen.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparenz bei der Datenverarbeitung</p>
    <p>
      Wir wollen Klarheit über unsere Datenverarbeitung. Kontakt:      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Zweck der Datennutzung</p>
    <p>Wir nutzen Ihre Informationen zur Leistungserbringung, Plattformverbesserung und Erfüllung gesetzlicher Pflichten.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Zugang zu Ihren Daten</p>
    <p>Sie können jederzeit Auskunft, Berichtigung oder Löschung Ihrer personenbezogenen Daten verlangen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Sicherheitspraktiken</p>
    <p>Wir setzen robuste Sicherheitsmaßnahmen ein, können aber keinen absoluten Schutz zusichern.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informationen, die wir erheben</h2>
    <p>Wir erheben u. a. IP-Adressen, Gerätedaten, Browsertypen sowie Angaben, die Sie uns direkt mitteilen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Rechtsgrundlagen der Verarbeitung</h2>
    <p>Die Verarbeitung stützt sich auf Einwilligung, berechtigte Interessen und geltendes Recht.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Weitergabe von Daten</h2>
    <p>Ihre Daten können an vertrauenswürdige Partner, Dienstleister und Behörden weitergegeben werden, wenn das Recht es verlangt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Cookies unterstützen die Website und die Nutzungsanalyse; Sie können sie deaktivieren, wenn Sie möchten.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Speicherdauer</h2>
    <p>Wir speichern Informationen nur so lange, wie es für die genannten Zwecke nötig ist.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Internationale Übermittlungen</h2>
    <p>Daten können grenzüberschreitend übermittelt werden, mit angemessenen Schutzmaßnahmen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Links zu anderen Seiten</h2>
    <p>Wir übernehmen keine Verantwortung für verlinkte externe Websites oder deren Praktiken.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Aktualisierungen dieser Erklärung</h2>
    <p>Diese Datenschutzerklärung kann aktualisiert werden.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Ihre Rechte</h2>
    <p>Sie haben Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung der Verarbeitung, Datenübertragbarkeit, Widerruf der Einwilligung und Beschwerde.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

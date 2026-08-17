<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Über ' . SITE_NAME . ' | Die Handelsplattform im Detail';
$page_description = 'Erfahren Sie mehr über Mission, Technologie und das Engagement von ' . SITE_NAME . ' für ein sicheres Trading-Erlebnis.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Über uns', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="Navigationspfad"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Startseite</a>
            <span class="breadcrumb-item">Wer wir sind</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Unsere Identität</h1>
                      <p class="lead">Plattform, Funktionen und verantwortungsvolles Trading.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> verbindet Marktzugang und Analysetools auf einer schlanken Plattform.</p>
            <p>Wir setzen auf robuste Sicherheit und transparente, verständliche Abläufe.</p>
            <p>Trading birgt Risiken; Renditen können nicht garantiert werden.</p>
            <p>Das Onboarding ist klar: Konto anlegen, E-Mail bestätigen, mindestens <?= e(money_min()) ?> einzahlen und ins Dashboard. Wechseln Sie zwischen manuell und unterstützt, setzen Sie Limits und steuern Sie Risiko nach Ihrem Profil.</p>            <p>Support hilft bei Konten, Zahlungen, Auszahlungen und Funktionen. Keine persönliche Anlageberatung. Bei dringenden Anliegen während aktiver Trades nennen Sie Konto-E-Mail und Dashboard-Status.</p>            <p>Einsteiger und erfahrene Trader finden eine klare Umgebung: Tutorials auf der einen, fortgeschrittene Steuerung und Performance-Tracking auf der anderen Seite. Wir messen <?= e(SITE_NAME) ?> an der Qualität der Erfahrung — nicht an aggressivem Marketing. Vor der Registrierung lesen Sie FAQ, Bedingungen und Datenschutz: Risiken, Auszahlungszeiten und Kontoanforderungen.</p>            <p>At <?= e(SITE_NAME) ?> finden Sie geführte Abläufe, Monitoring-Tools und operativen Support für transparente Konto- und Zahlungsprozesse — ohne Versprechen konkreter Marktergebnisse.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Heute registrieren</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Wie können wir Ihnen helfen?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Konto erstellen';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

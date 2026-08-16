<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Informazioni su ' . SITE_NAME . ' | La piattaforma di trading nel dettaglio';
$page_description = 'Scopri la missione, la tecnologia e l’impegno di ' . SITE_NAME . ' per un’esperienza di trading sicura.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Chi siamo', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="percorso di navigazione"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
            <span class="breadcrumb-item">Chi siamo</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>La nostra identità</h1>
                      <p class="lead">Piattaforma, funzionalità e trading responsabile.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> unisce accesso al mercato e strumenti di analisi su una piattaforma unica e fluida.</p>
            <p>Puntiamo su misure di sicurezza solide e processi trasparenti, facili da capire.</p>
            <p>Il trading comporta rischi e i rendimenti non possono essere garantiti.</p>
            <p>L’onboarding è semplice: crea il conto, conferma l’email, versa un minimo di <?= e(money_min()) ?>, poi accedi alla dashboard. Passa dal modo manuale a quello assistito, imposta limiti e gestisci il rischio in base al tuo profilo.</p>            <p>Il supporto aiuta per conti, pagamenti, prelievi e funzioni della piattaforma. Non fornisce consulenza di investimento personalizzata. In caso di urgenza durante un trade attivo, indica l’email del conto e lo stato della dashboard.</p>            <p>Principianti e trader esperti trovano un ambiente chiaro: tutorial da un lato, controlli avanzati e monitoraggio delle performance dall’altro. Misuriamo <?= e(SITE_NAME) ?> in base alla qualità dell’esperienza — non al marketing aggressivo. Prima di registrarti, leggi FAQ, termini e privacy: rischi, tempi di prelievo e requisiti del conto.</p>            <p>At <?= e(SITE_NAME) ?>, trovi flussi guidati, strumenti di monitoraggio e supporto operativo centrato su processi di conto e pagamento trasparenti, senza promettere risultati di mercato.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Registrati oggi</a>
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
            <h2>Come possiamo aiutarti?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Crea account';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

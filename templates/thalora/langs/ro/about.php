<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Despre ' . SITE_NAME . ' | Platforma de tranzacționare în detaliu';
$page_description = 'Descoperiți misiunea, tehnologia și angajamentul ' . SITE_NAME . ' față de o experiență de tranzacționare sigură.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Despre noi', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="fir de navigare"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Acasă</a>
            <span class="breadcrumb-item">Cine suntem</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Identitatea noastră</h1>
                      <p class="lead">Platformă, funcții și tranzacționare responsabilă.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> unește accesul pe piață și instrumentele analitice pe o singură platformă clară.</p>
            <p>Punem accent pe măsuri solide de securitate și pe procese transparente, ușor de înțeles.</p>
            <p>Tranzacționarea implică riscuri, iar randamentele nu pot fi garantate.</p>
            <p>Onboarding-ul e simplu: creați contul, confirmați e-mailul, depuneți cel puțin <?= e(money_min()) ?>, apoi accesați panoul. Comutați între modul manual și cel asistat, setați limite și gestionați riscul după profil.</p>            <p>Suportul ajută la conturi, plăți, retrageri și funcțiile platformei. Nu oferă consiliere de investiții personalizată. Pentru o urgență în timpul unei tranzacții active, indicați e-mailul contului și starea panoului.</p>            <p>Începătorii și traderii experimentați găsesc un mediu clar: ghiduri pe o parte, controale avansate și urmărirea performanței pe cealaltă. Măsurăm <?= e(SITE_NAME) ?> prin calitatea experienței — nu prin marketing agresiv. Înainte de înregistrare, citiți FAQ, termenii și confidențialitatea: riscuri, timpi de retragere și cerințe de cont.</p>            <p>At <?= e(SITE_NAME) ?> găsiți fluxuri ghidate, instrumente de urmărire și suport operațional axat pe procese transparente de cont și plăți, fără promisiuni de rezultate de piață specifice.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Înregistrați-vă astăzi</a>
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
            <h2>Cum vă putem ajuta?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Creează cont';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

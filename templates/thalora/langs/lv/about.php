<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Par ' . SITE_NAME . ' | Visaptveroši tirdzniecības platformas ieskati';
$page_description = 'Iepazīstiet ' . SITE_NAME . ' misiju, tehnoloģiju un apņemšanos nodrošināt drošu tirdzniecības pieredzi.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Par mums', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigācijas ceļš"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Sākums</a>
            <span class="breadcrumb-item">Kas mēs esam</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Mūsu identitāte</h1>
                      <p class="lead">Platforma, funkcijas un atbildīga tirdzniecība.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> apvieno tirgus piekļuvi ar analītiskajiem rīkiem vienā, racionalizētā platformā.</p>
            <p>Mēs koncentrējamies uz robustiem drošības pasākumiem un caurspīdīgiem, viegli saprotamiem procesiem.</p>
            <p>Ņemiet vērā, ka tirdzniecība ietver riskus un peļņa nav garantēta.</p>
            <p>Mūsu ieviešana ir vienkārša: reģistrējiet kontu, apstipriniet e-pastu, iemaksājiet vismaz <?= e(money_min()) ?>, pēc tam piekļūstiet vadības panelim. Pārslēdzieties starp manuālo un atbalstīto režīmu, iestatiet limitus un pārvaldiet risku atbilstoši profilam.</p>            <p>Atbalsts ir pieejams jautājumiem par kontiem, maksājumiem, izņemšanām un platformas funkcijām. Tas nesniedz personalizētus ieguldījumu padomus. Steidzamos jautājumos aktīvu darījumu laikā, lūdzu, norādiet konta e-pastu un vadības paneļa statusu.</p>            <p>Gan jaunpienācēji, gan pieredzējuši tirgotāji atrod skaidru vidi: ceļveži un sākotnējā vadība vienā pusē, modernās vadīklas un veiktspējas izsekošana otrā. Mēs vērtējam <?= e(SITE_NAME) ?> pēc pieredzes kvalitātes — nevis agresīva mārketinga. Pirms reģistrācijas, lūdzu, pārskatiet BUJ, noteikumus un privātuma politiku, lai izprastu riskus, izņemšanas termiņus un konta prasības.</p>            <p>At <?= e(SITE_NAME) ?>, atradīsiet vadītas darba plūsmas, uzraudzības rīkus un operacionālu atbalstu, kas vērsts uz caurspīdīgiem kontu un maksājumu procesiem, nesolot konkrētus tirgus rezultātus.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Reģistrējieties šodien</a>
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
            <h2>Kā varam jums palīdzēt šodien?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Izveidot kontu';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'O ' . SITE_NAME . ' | Obchodná platforma v detailoch';
$page_description = 'Spoznajte misiu, technológiu a záväzok ' . SITE_NAME . ' k bezpečnému obchodnému zážitku.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('O nás', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigačná cesta"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domov</a>
            <span class="breadcrumb-item">Kto sme</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Naša identita</h1>
                      <p class="lead">Platforma, funkcie a zodpovedné obchodovanie.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> spája prístup na trh a analytické nástroje na jednej, prehľadnej platforme.</p>
            <p>Kladie sa dôraz na solídne bezpečnostné opatrenia a transparentné, ľahko pochopiteľné procesy.</p>
            <p>Obchodovanie nesie riziko a výnosy nemožno zaručiť.</p>
            <p>Onboarding je jednoduchý: vytvorte účet, potvrďte e-mail, vložte aspoň <?= e(money_min()) ?>, a prejdite na panel. Prepínajte manuálny a podporovaný režim, nastavujte limity a spravujte riziko podľa profilu.</p>            <p>Podpora pomáha pri účtoch, platbách, výberoch a funkciách platformy. Neposkytuje osobné investičné poradenstvo. Pri naliehavej veci počas aktívneho obchodu uveďte e-mail účtu a stav panela.</p>            <p>Začiatočníci aj skúsení traderi nájdu jasné prostredie: tutoriály na jednej strane, pokročilé ovládanie a sledovanie výkonu na druhej. Meriame <?= e(SITE_NAME) ?> kvalitou zážitku — nie agresívnym marketingom. Pred registráciou si prečítajte FAQ, podmienky a súkromie: riziká, časy výberov a požiadavky na účet.</p>            <p>At <?= e(SITE_NAME) ?> nájdete vedené toky, nástroje sledovania a prevádzkovú podporu zameranú na transparentné procesy účtu a platieb, bez sľubov konkrétnych trhových výsledkov.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Zaregistrujte sa dnes</a>
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
            <h2>Ako vám môžeme pomôcť?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Vytvoriť účet';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

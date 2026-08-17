<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'O ' . SITE_NAME . ' | Obchodní platforma v detailech';
$page_description = 'Poznejte misi, technologii a závazek ' . SITE_NAME . ' k bezpečnému obchodnímu zážitku.';
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
            aria-label="navigační cesta"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domů</a>
            <span class="breadcrumb-item">Kdo jsme</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Naše identita</h1>
                      <p class="lead">Platforma, funkce a odpovědné obchodování.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> spojuje přístup na trh a analytické nástroje na jedné, přehledné platformě.</p>
            <p>Klade se důraz na solidní bezpečnostní opatření a transparentní, snadno pochopitelné procesy.</p>
            <p>Obchodování nese riziko a výnosy nelze zaručit.</p>
            <p>Onboarding je jednoduchý: vytvořte účet, potvrďte e-mail, vložte alespoň <?= e(money_min()) ?>, a přejděte na panel. Přepínejte manuální a podporovaný režim, nastavujte limity a spravujte riziko podle profilu.</p>            <p>Podpora pomáhá při účtech, platbách, výběrech a funkcích platformy. Neposkytuje osobní investiční poradenství. Při naléhavé věci během aktivního obchodu uveďte e-mail účtu a stav panelu.</p>            <p>Začátečníci i zkušení tradeři najdou jasné prostředí: tutoriály na jedné straně, pokročilé ovládání a sledování výkonu na druhé. Měříme <?= e(SITE_NAME) ?> kvalitou zážitku — ne agresivním marketingem. Před registrací si přečtěte FAQ, podmínky a soukromí: rizika, časy výběrů a požadavky na účet.</p>            <p>At <?= e(SITE_NAME) ?> najdete vedené toky, nástroje sledování a provozní podporu zaměřenou na transparentní procesy účtu a plateb, bez slibů konkrétních tržních výsledků.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Zaregistrujte se dnes</a>
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
            <h2>Jak vám můžeme pomoci?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Vytvořit účet';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

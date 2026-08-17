<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'O ' . SITE_NAME . ' | Platforma tradingowa w szczegółach';
$page_description = 'Poznaj misję, technologię i zaangażowanie ' . SITE_NAME . ' w bezpieczne doświadczenie tradingowe.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('O nas', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="ścieżka nawigacji"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Strona główna</a>
            <span class="breadcrumb-item">Kim jesteśmy</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Nasza tożsamość</h1>
                      <p class="lead">Platforma, funkcje i odpowiedzialny trading.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> łączy dostęp do rynku i narzędzia analityczne na jednej, sprawnej platformie.</p>
            <p>Stawiamy na solidne środki bezpieczeństwa i przejrzyste, łatwe do zrozumienia procesy.</p>
            <p>Trading wiąże się z ryzykiem, a zwrotów nie można gwarantować.</p>
            <p>Onboarding jest prosty: utwórz konto, potwierdź e-mail, wpłać minimum <?= e(money_min()) ?>, i wejdź do panelu. Przełączaj tryb ręczny i wspomagany, ustawiaj limity i zarządzaj ryzykiem według profilu.</p>            <p>Wsparcie pomaga przy kontach, płatnościach, wypłatach i funkcjach platformy. Nie daje osobistej porady inwestycyjnej. Przy pilnej sprawie podczas aktywnej transakcji podaj e-mail konta i status panelu.</p>            <p>Początkujący i doświadczeni traderzy znajdują jasne środowisko: tutoriale z jednej strony, zaawansowane sterowanie i śledzenie wyników z drugiej. Mierzymy <?= e(SITE_NAME) ?> jakością doświadczenia — nie agresywnym marketingiem. Przed rejestracją przeczytaj FAQ, warunki i prywatność: ryzyka, czasy wypłat i wymagania konta.</p>            <p>At <?= e(SITE_NAME) ?>, znajdziesz prowadzone przepływy, narzędzia monitoringu i wsparcie operacyjne skupione na przejrzystych procesach konta i płatności, bez obietnic konkretnych wyników rynkowych.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Zarejestruj się dziś</a>
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
            <h2>Jak możemy Ci pomóc?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Utwórz konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Regulamin | Umowa użytkownika z ' . SITE_NAME;
$page_description = 'Zapoznaj się z warunkami platformy, zasadami tradingu i politykami wsparcia ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Regulamin', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="ścieżka nawigacji" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Strona główna</a>
            <span class="breadcrumb-item">Regulamin</span>
        </nav>
        <h1>Regulamin</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Wprowadzenie</h2>
    <p>Ta strona przedstawia usługi tradingowe stron trzecich. Kontynuując, akceptujesz te warunki i politykę prywatności. Warunki mogą być aktualizowane.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Uprawnienia użytkownika</h2>
    <p>Musisz mieć co najmniej 18 lat i być prawnie uprawniony do przyjęcia tych warunków zgodnie z lokalnym prawem. Wyłączamy odpowiedzialność za niewłaściwe użycie platformy.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Ograniczenia dostępu</h2>
    <p>Dostęp może być ograniczony w niektórych regionach lub przy ograniczeniach regulacyjnych. Niektóre usługi mogą być niedostępne w określonych miejscach.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Właściwe użycie</h2>
    <p>Nieautoryzowane użycie jest zabronione, w tym działalność niezgodna z prawem, naruszenie praw, rozpowszechnianie szkodliwych treści lub boty. Naruszenia mogą skutkować zawieszeniem konta.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Własność intelektualna</h2>
    <p>Cała treść, znaki towarowe i prawa własności intelektualnej należą do nas lub naszych podmiotów powiązanych. Użycie strony jest osobiste; kopiowanie lub zmiana treści jest niedozwolona.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Wyłączenie odpowiedzialności</h2>
    <p>Usługi i strona są dostarczane «tak jak są». Nie przyjmujemy odpowiedzialności za błędy, straty ani szkody wynikające z użycia.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Treści stron trzecich</h2>
    <p>Mogą pojawić się treści lub linki stron trzecich bez gwarancji dokładności lub dostępności; weryfikuj samodzielnie.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Linki zewnętrzne</h2>
    <p>Linki zewnętrzne są podane dla wygody. Nie popieramy ani nie kontrolujemy tych stron i wyłączamy odpowiedzialność za ich treść.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Postanowienia dodatkowe</h2>
    <p>Możemy aktualizować usługi i warunki. Te warunki stanowią całą umowę. Niewykonanie prawa nie oznacza zrzeczenia się.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Regulamin | ' . SITE_NAME;
$page_description = 'Regulamin platformy ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Regulamin</h1>
            <p class="bold-title">1. Wstęp</p>
            <p>1.1. Akceptacja tych warunków jest wymagana, by korzystać z naszych usług.</p>
            <p>1.2. Te warunki stanowią prawnie wiążącą umowę.</p>
            <p>1.3. Dalsze korzystanie ze strony oznacza akceptację warunków.</p>
            <p>
              1.4. W razie pytań możesz skontaktować się z nami pod
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Prawo do korzystania</p>
            <p>2.1. Z usług mogą korzystać wyłącznie osoby pełnoletnie.</p>
            <p>2.1.1. Musisz mieszkać w kraju, w którym usługi są legalne.</p>
            <p>2.1.2. Nie możesz figurować na liście sankcyjnej.</p>
            <p>2.1.3. Musisz mieć zdolność do czynności prawnych.</p>
            <p>2.2. Nie odpowiadamy za korzystanie przez osoby nieuprawnione.</p>
            <p class="bold-title">3. Konto użytkownika</p>
            <p>3.1. Odpowiadasz za bezpieczeństwo swojego konta.</p>
            <p>3.2. Nie udostępniaj hasła osobom trzecim.</p>
            <p class="bold-title">4. Działania zabronione</p>
            <p>4.1. Korzystanie z usług w celach niezgodnych z prawem jest niedozwolone.</p>
            <p>4.1.1. Pranie pieniędzy jest surowo zabronione.</p>
            <p>4.1.2. Oszustwo zostanie zgłoszone właściwym organom.</p>
            <p>4.1.3. Używanie botów lub oprogramowania automatyzującego jest niedozwolone.</p>
            <p>4.1.4. Każda próba manipulacji systemem będzie badana.</p>
            <p>4.1.5. Rozpowszechnianie nieprawdziwych informacji jest zabronione.</p>
            <p>4.1.6. Próby utrudniania dochodzeń są niedozwolone.</p>
            <p>4.1.7. Groźby wobec innych użytkowników są zabronione.</p>
            <p>4.1.8. Każda nielegalna działalność będzie sankcjonowana.</p>
            <p>4.1.9. Próby obchodzenia zasad są niedozwolone.</p>
            <p>4.1.10. Każde nadużycie systemu traktujemy poważnie.</p>
            <p class="bold-title">5. Własność intelektualna</p>
            <p>5.1. Cała treść serwisu stanowi naszą własność intelektualną.</p>
            <p>5.2. Użytkownicy nie nabywają praw do treści serwisu.</p>
            <p>5.3. Treści nie wolno kopiować bez zgody.</p>
            <p>5.4. Osoby trzecie nie mogą zmieniać treści.</p>
            <p class="bold-title">6. Ograniczenie odpowiedzialności</p>
            <p>6.1. Korzystasz z usług na własne ryzyko.</p>
            <p>6.2. Nie odpowiadamy za straty wynikające z korzystania z usług.</p>
            <p>6.3. Wszelka strata wynikająca z korzystania ze strony obciąża użytkownika.</p>
            <p>6.4. Nie przyjmujemy odpowiedzialności za szkody spowodowane korzystaniem ze strony.</p>
            <p>6.5. Problemy techniczne nie leżą po naszej stronie.</p>
            <p class="bold-title">7. Informacje</p>
            <p>7.1. Korzystając z usług, zgadzasz się na kontakt.</p>
            <p>7.2. Informacje traktujemy poufnie.</p>
            <p>7.3. Użytkownikom zalecamy przechowywanie dokumentacji.</p>
            <p class="bold-title">8. Linki i dodatkowe źródła</p>
            <p>8.1. Więcej informacji znajdziesz w naszych zasadach.</p>
            <p>8.2. Linki zewnętrzne nie stanowią rekomendacji.</p>
            <p>8.3. Zalecamy weryfikację źródeł przed użyciem.</p>
            <p class="bold-title">9. Postanowienia ogólne</p>
            <p>9.1. Zastrzegamy sobie prawo do zmiany usług w dowolnym momencie.</p>
            <p>9.2. Warunki mogą się zmieniać w dowolnym momencie.</p>
            <p>9.3. Korzystając z usług, akceptujesz te warunki.</p>
            <p>9.4. Umowy ustne są nieważne.</p>
            <p>9.5. Niewykonane prawa nie uważa się za zrzeczone.</p>
            <p>
              9.6. Jeśli postanowienie zostanie uznane za nieważne, pozostałe pozostają w mocy.
            </p>
            <p>9.7. Usługi mogą być zarządzane przez zewnętrznych dostawców.</p>
            <p>
              9.8. Do tych warunków stosuje się prawo <?= e(geo_in()) ?>. Wszelkie spory będą kierowane do
              właściwego sądu <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zgłoś nadużycie | ' . SITE_NAME;
$page_description = 'Zgłoś nadużycie lub podejrzaną aktywność na ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Zgłoś nadużycie</h1>
            <p class="bold-title">1. Zgłaszanie nadużyć</p>
            <p>
              1.1. Jeśli na naszej stronie zauważysz nieodpowiednie treści, zgłoś to
              nam przez formularz kontaktowy.
            </p>
            <p>Kontakt: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. W tej części możesz podać informacje o nadużyciu lub treści
              naruszającej nasze zasady.
            </p>
            <p>
              1.3. Twoje zgłoszenie jest dla nas ważne. Podaj konkretne szczegóły, abyśmy mogli
              rzetelnie zbadać sprawę.
            </p>
            <p>Składając zgłoszenie, akceptujesz także naszą politykę prywatności.</p>
            <p class="bold-title">2. Kto może zgłaszać</p>
            <p>
              2.1. Jeśli padłeś ofiarą nadużycia lub zauważyłeś niewłaściwe zachowanie, masz
              prawo to zgłosić.
            </p>
            <p>2.1.1. Zgłoszenie mogą składać wyłącznie osoby pełnoletnie.</p>
            <p>2.1.2. Zgłoszenie musi być prawdziwe i oparte na faktach.</p>
            <p>2.1.3. Korzystanie z formularza zgłoszeniowego musi być legalne w Twoim kraju.</p>
            <p>2.2. Nie odpowiadamy za fałszywe lub złośliwe zgłoszenia.</p>
            <p class="bold-title">3. Procedura zgłaszania</p>
            <p>3.1. Zastrzegamy sobie prawo do badania wszystkich zgłoszeń nadużyć.</p>
            <p>3.2. Jeśli zgłoszenie zostanie uznane za zasadne, podejmiemy niezbędne działania.</p>
            <p class="bold-title">4. Działania zabronione przy zgłaszaniu</p>
            <p>4.1. Używanie formularza w celach złośliwych jest niedozwolone.</p>
            <p>4.1.1. Fałszywe lub wprowadzające w błąd zgłoszenia są niedozwolone.</p>
            <p>4.1.2. Nękanie innych użytkowników przez system zgłoszeń jest niedozwolone.</p>
            <p>4.1.3. Używanie botów lub automatyzacji do składania zgłoszeń jest zabronione.</p>
            <p>4.1.4. Każda próba manipulacji systemem zgłoszeń będzie badana.</p>
            <p>4.1.5. Używanie systemu do rozpowszechniania nieprawdziwych informacji jest zabronione.</p>
            <p>4.1.6. Próby utrudniania dochodzenia są niedozwolone.</p>
            <p>4.1.7. Używanie systemu do gróźb jest niedozwolone.</p>
            <p>4.1.8. Każda nielegalna działalność związana ze zgłoszeniami będzie sankcjonowana.</p>
            <p>4.1.9. Próby obchodzenia zasad zgłaszania są niedozwolone.</p>
            <p>4.1.10. Każde nadużycie systemu zgłoszeń traktujemy poważnie.</p>
            <p class="bold-title">5. Własność intelektualna przy zgłaszaniu</p>
            <p>
              5.1. Treść przesłana przy zgłoszeniu nadużycia nie daje Ci praw własności.
            </p>
            <p>5.2. Składając zgłoszenie, użytkownicy nie nabywają praw do treści serwisu.</p>
            <p>5.3. Zgłoszenia służą wyłącznie celom dochodzeniowym.</p>
            <p>5.4. Osoby trzecie nie mogą kopiować ani zmieniać zgłoszeń.</p>
            <p class="bold-title">6. Ograniczenie odpowiedzialności przy zgłaszaniu</p>
            <p>6.1. Składając zgłoszenie, przyjmujesz odpowiedzialność za jego treść.</p>
            <p>6.2. Nie odpowiadamy za skutki złożonych zgłoszeń.</p>
            <p>6.3. Wszelka strata wynikająca ze zgłoszenia obciąża użytkownika.</p>
            <p>6.4. Nie przyjmujemy odpowiedzialności za szkody spowodowane zgłoszeniami.</p>
            <p>
              6.5. Problemy techniczne systemu zgłoszeń nie leżą po naszej stronie.
            </p>
            <p class="bold-title">7. Informacje o procedurze zgłaszania</p>
            <p>
              7.1. Korzystając z systemu zgłoszeń, zgadzasz się, że możemy się z Tobą skontaktować po więcej informacji.
            </p>
            <p>7.2. Zgłoszenia traktujemy poufnie.</p>
            <p>7.3. Użytkownikom zalecamy zachowanie kopii zgłoszeń.</p>
            <p class="bold-title">8. Dodatkowe linki i źródła</p>
            <p>8.1. Więcej o zgłaszaniu nadużyć znajdziesz w naszych zasadach.</p>
            <p>8.2. Linki do źródeł zewnętrznych nie stanowią naszej rekomendacji.</p>
            <p>8.3. Zalecamy sprawdzenie każdego źródła przed użyciem.</p>
            <p class="bold-title">9. Postanowienia ogólne dotyczące zgłoszeń</p>
            <p>
              9.1. Zastrzegamy sobie prawo do zmiany, zawieszenia lub zakończenia procedury zgłaszania
              w dowolnym momencie.
            </p>
            <p>
              9.2. Warunki tej procedury mogą się zmieniać w dowolnym momencie. Dalsze korzystanie z
              usługi zgłoszeń po takich zmianach oznacza akceptację nowych warunków.
            </p>
            <p>9.3. Składając zgłoszenie, użytkownik w pełni akceptuje te warunki.</p>
            <p>
              9.4. Każda umowa lub oświadczenie, pisemne lub ustne, które nie wchodzi w
              konkretne punkty tych warunków, jest nieważne i nie wiąże żadnej ze stron.
            </p>
            <p>
              9.5. Prawo przyznane tymi warunkami, z którego się nie korzysta — z powodu zgody,
              zaniedbania lub niemożności — uważa się za zrzeczone. Częściowe lub pełne wykonanie prawa
              nie wyklucza ani nie ogranicza późniejszego korzystania z niego.
            </p>
            <p>
              9.6. Jeśli właściwy sąd uzna postanowienie tych warunków za nieważne, będzie ono
              uznane za nieważne. Pozostałe warunki pozostają jednak w pełni w mocy.
            </p>
            <p>
              9.7. Przyjmuje się, że te warunki umożliwiają osobom trzecim prowadzenie serwisu
              i przenoszenie praw oraz obowiązków. Użytkownik nie może przenieść
              swoich praw i obowiązków na inną stronę.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

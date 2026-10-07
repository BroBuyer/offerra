<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Polityka prywatności | ' . SITE_NAME;
$page_description = 'Polityka prywatności ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Polityka prywatności</h1>
            <p>
              Twoje dane osobowe i aktywa są dla nas niezwykle ważne. W pełni
              zobowiązujemy się je chronić.
            </p>
            <p>
              <?= e(SITE_NAME) ?> zbiera i przechowuje dane niezbędne do Twoich transakcji. Sposób
              ich zbierania i przechowywania opisuje poniższa polityka prywatności.
            </p>
            <p>Nasza polityka opiera się na następujących zasadach:</p>
            <p class="circle">
              W celu zapewnienia maksymalnej przejrzystości procesów zbierania i
              przechowywania Twoich danych osobowych:
            </p>
            <p>
              Chcemy, abyś rozumiał, jak zbieramy i przetwarzamy dane, byś mógł podejmować
              świadome decyzje. Stosujemy jasne zasady i procesy przetwarzania danych na
              tej stronie. Polityka szczegółowo opisuje metody, którymi przekazujemy
              jasne i konkretne informacje o użyciu danych. Kontrola należy do Ciebie.
            </p>
            <p>
              Powiadomimy Cię niezwłocznie, gdy uznamy to za konieczne. Przejrzystość jest dla nas
              kluczowa.
            </p>
            <p>
              Nasz zespół specjalistów jest zawsze gotowy, by odpowiedzieć na wszystkie pytania o każdy aspekt
              naszych procesów, w tym obowiązki według prawa <?= e(geo_in()) ?> i przepisów
              UE. Możesz się z nami skontaktować pod:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Inne wykorzystanie danych osobowych z naszej strony jest niedozwolone, poza przypadkami opisanymi w
              polityce prywatności.
            </p>
            <p>
              Możemy przetwarzać dane osobowe w następujących celach, w tym w celu zapewnienia prawidłowego
              działania usług <?= e(SITE_NAME) ?> i łączenia użytkowników z platformami tradingowymi
              osób trzecich. Przetwarzanie może być też potrzebne do utrzymania i ulepszania
              funkcji i usług serwisu; ochrony naszych praw oraz spełnienia obowiązków prawnych i innych.
              Na koniec dane służą, w razie potrzeby, funkcjom administracyjnym
              i innym funkcjom biznesowym związanym z usługami świadczonymi Tobie jako klientowi.
            </p>
            <p>
              Aby oferować usługi wyższej jakości dopasowane do Twoich preferencji i potrzeb, <?= e(SITE_NAME) ?>
              używa danych osobowych.
            </p>
            <p class="circle">
              W celu stosowania niezbędnych narzędzi ochrony danych osobowych i zabezpieczenia Twoich
              praw z nimi związanych:
            </p>
            <p>
              W każdej chwili możesz się z nami skontaktować i uzyskać dostęp do wszystkich swoich danych. Możemy też
              je w razie potrzeby zmienić lub usunąć. Dodatkowo obsługujemy wnioski o przekazanie tych
              danych Tobie lub wskazanej osobie trzeciej. Oferujemy tę usługę, abyś mógł
              w pełni realizować prawa do prywatności i kontroli.
            </p>
            <p class="circle">Chroń swoje dane osobowe:</p>
            <p>
              Nasze systemy bezpieczeństwa spełniają wysoki standard i obejmują środki na poziomie bankowym. Choć
              nie można zagwarantować pełnej ochrony, zobowiązujemy się stale utrzymywać systemy
              na wysokim poziomie i wzmacniać już wdrożone środki.
            </p>
            <p>
              Mamy kompleksowe zasady prywatności i systemy bezpieczeństwa najwyższej klasy.
            </p>
            <p class="bold-title">1. Zakres stosowania</p>
            <p>
              Ta polityka opisuje procedury zbierania, przetwarzania i ujawniania wszystkich
              danych osób fizycznych.
            </p>
            <p>
              Postanowienia polityki dotyczą wszystkich osób fizycznych, które można zidentyfikować lub które są
              zidentyfikowane. W szczególności każdej osoby fizycznej, którą można zidentyfikować w związku z
              danymi nam powierzonymi, do których mamy dostęp i/lub które możemy łączyć.
            </p>
            <p>
              Przetwarzanie danych w rozumieniu polityki prywatności obejmuje w szczególności przechowywanie,
              zarządzanie i organizację danych osobowych.
            </p>
            <p>
              Nie zbieramy i nie próbujemy zbierać informacji o osobach poniżej 18. roku
              życia. Osoby niepełnoletnie nie mogą też korzystać z naszej platformy w żadnym
              celu. Jeśli ustalimy, że użytkownik ma mniej niż 18 lat, usuniemy te dane niezwłocznie.
            </p>
            <p class="bold-title">2. Jakie dane osobowe zbieramy?</p>
            <p>
              Przy rejestracji zbieramy dane osobowe potrzebne do korzystania z usług. W razie potrzeby
              możemy też poprosić o dane do weryfikacji, na przykład aby
              potwierdzić własność konta. Aby poprawiać i utrzymywać jakość
              usług, zbieramy i analizujemy informacje o korzystaniu z platformy i
              powiązanych usługach osób trzecich.
            </p>
            <p class="bold-title">
              3. W żadnym wypadku nie jesteś zobowiązany przekazywać danych osobowych spółce.
            </p>
            <p>
              Choć nie musisz nam przekazywać danych, decyzja, by tego nie robić,
              może ograniczyć świadczenie usług. Może też prowadzić do
              ograniczeń w korzystaniu z platformy.
            </p>
            <p class="bold-title">
              4. Jakie dane osobowe zbieramy? Odwiedzając stronę, możemy zbierać następujące
              dane osobowe:
            </p>
            <p>
              Nie zbieramy danych, które Cię bezpośrednio identyfikują. Rejestrujemy m.in.
              aktywność konta, adresy IP oraz daty i godziny dostępu. Do konserwacji,
              bezpieczeństwa i wsparcia przechowujemy raporty błędów systemowych, informacje o przeglądarce i typ
              urządzenia, z którego logujesz się na konto. Zapisujemy też język ustawiony na koncie.
            </p>
            <p>
              Jeśli chodzi o dane osobowe, zbieramy i przechowujemy wyłącznie informacje
              podane przy łączeniu się z platformą tradingową osoby trzeciej przez nasze usługi.
            </p>
            <p>
              Dane osobowe przekazane platformom osób trzecich mogą obejmować:
              imię i nazwisko, adres, numer telefonu i adres e-mail.
            </p>
            <p class="bold-title">
              5. Dlaczego spółka potrzebuje moich danych i czy przetwarzanie jest zgodne z prawem?
            </p>
            <p>
              Spółka zbiera, przechowuje i przetwarza Twoje dane osobowe wyłącznie w
              celach określonych w polityce. Wszystkie opisane zastosowania i przetwarzanie są zgodne z
              obowiązującym prawem <?= e(geo_in()) ?> i przepisami UE.
            </p>
            <p>
              Spółka będzie zarządzać, przetwarzać lub przekazywać Twoje dane wyłącznie zgodnie z
              obowiązującymi przepisami <?= e(geo_in()) ?>. Odpowiednie podstawy prawne wymieniono poniżej:
            </p>
            <p class="circle">
              Wyraziłeś zgodę na przechowywanie i przetwarzanie danych osobowych przez
              spółkę. Przekazując dane spółce, upoważniasz nas do ich przekazania odpowiedniej
              platformie tradingowej osoby trzeciej. Dodatkowo wyraziłeś zgodę na
              przetwarzanie danych osobowych w jednym lub więcej celach.
            </p>
            <p class="circle">
              Aby ulepszać usługi, dochodzić lub bronić roszczeń oraz chronić prawnie uzasadnione
              interesy, spółka może m.in. musieć przechowywać i
              przetwarzać Twoje dane osobowe.
            </p>
            <p class="circle">Aby wypełnić obowiązki prawne, przetwarzanie danych jest niezbędne.</p>
            <p>
              Jeśli chcesz wiedzieć więcej o przetwarzaniu, do którego spółka jest zobowiązana,
              napisz do nas e-mailem.
            </p>
            <p>
              Poniżej znajdziesz konkretne cele i podstawę prawną, która nas
              upoważnia do przetwarzania Twoich danych osobowych.
            </p>
            <p class="green">Cel</p>
            <p class="green">Podstawa prawna</p>
            <p>
              1. Aby ułatwić dostęp do cyfrowego tradingu i — wyłącznie na Twoją prośbę —
              udostępnimy dane osobowe platformom osób trzecich. Twoje dane mogą być zbierane
              i udostępniane osobom trzecim wyłącznie na Twoją prośbę i według Twojego wyboru.
            </p>
            <p>
              Wyraziłeś zgodę na przetwarzanie danych osobowych w jednym lub więcej celach.
            </p>
            <p>
              2. Podaj nam potrzebne informacje, abyśmy mogli szybko i
              skutecznie odpowiadać na Twoje prośby, obawy i pytania o usługi.
            </p>
            <p>
              Dla realizacji prawnie uzasadnionych interesów spółki lub wskazanej osoby trzeciej
              przetwarzanie danych osobowych jest niezbędne.
            </p>
            <p>
              3. Aby wypełnić obowiązki prawne i administracyjne, przetwarzanie danych osobowych jest niezbędne.
            </p>
            <p>Aby wypełnić obowiązki prawne, musimy przetwarzać określone dane osobowe.</p>
            <p>
              4. Aby ulepszać usługi, potrzebujemy zanonimizowanych danych i musimy monitorować użycie,
              w tym raporty błędów.
            </p>
            <p>
              Dla ochrony prawnie uzasadnionych interesów spółki i zewnętrznych dostawców
              usług przetwarzanie i przechowywanie danych osobowych jest niezbędne.
            </p>
            <p>5. Jest to konieczne, by zapobiegać oszustwom i nadużyciom usługi.</p>
            <p>
              Aby zapewnić prawnie uzasadnione interesy spółki i dostawców usług osób trzecich,
              przetwarzanie i przechowywanie danych osobowych jest niezbędne.
            </p>
            <p>
              6. Wymogi usługi zobowiązują nas do monitorowania i przetwarzania danych na potrzeby
              rozwoju biznesu, decyzji strategicznych, monitoringu, zgodności z przepisami i
              innej działalności biznesowej.
            </p>
            <p>
              W celu ochrony prawnie uzasadnionych interesów spółki i zewnętrznych dostawców
              usług przetwarzanie i przechowywanie danych osobowych jest niezbędne.
            </p>
            <p>
              7. Używamy narzędzi statystycznych i analitycznych, by wspierać decyzje w szerokim
              spektrum usług i w planowaniu strategicznym.
            </p>
            <p>
              Dla ochrony prawnie uzasadnionych interesów spółki i naszych zewnętrznych dostawców
              usług przetwarzanie i przechowywanie danych osobowych jest niezbędne.
            </p>
            <p>
              8. W zakresie niezbędnym do ochrony praw, mienia i interesów
              spółki oraz dostawców usług osób trzecich, zgodnie z lokalnymi przepisami oraz
              obowiązującymi regulacjami, umowami i własnymi warunkami, możemy przetwarzać
              dane osobowe. Takie przetwarzanie odbywa się wyłącznie według niezbędnych i
              ustalonych procedur.
            </p>
            <p>
              Dla ochrony prawnie uzasadnionych interesów spółki i każdego zewnętrznego
              dostawcy usług przetwarzanie i przechowywanie danych osobowych jest niezbędne.
            </p>
            <p class="bold-title">6. Udostępnianie danych osobowych osobom trzecim</p>
            <p>
              Do przechowywania i przetwarzania adresów IP, ankiet i analizy użycia
              oraz powiązanych usług spółka może udostępniać zanonimizowane dane
              zewnętrznym dostawcom usług.
            </p>
            <p>
              Na Twoją prośbę udostępnimy niektóre podane dane osobowe zewnętrznym
              dostawcom usług. W takim przypadku przetwarzanie podlega polityce prywatności
              tej firmy. Może to obejmować różne cyfrowe platformy tradingowe.
            </p>
            <p>
              W celu poprawy obsługi klienta i ogólnej optymalizacji usług
              spółka może udostępniać dane osobowe spółkom powiązanym i partnerom biznesowym.
            </p>
            <p>
              Gdy wymaga tego prawo lub w celu ochrony praw i mienia spółki oraz powiązanych
              osób trzecich możemy udostępniać dane właściwym organom prawnym lub nadzorczym.
            </p>
            <p>
              W ramach istotnych operacji biznesowych, takich jak sprzedaż spółki,
              pozyskanie inwestycji lub wniosek kredytowy, odpowiednie dane mogą być
              udostępniane zgodnie z prawem. Dotyczy to także fuzji, restrukturyzacji,
              konsolidacji lub niewypłacalności spółki zgodnie z prawem.
            </p>
            <p class="bold-title">7. Pliki cookie i usługi osób trzecich</p>
            <p>
              Do analizy strony i we współpracy z agencjami reklamowymi pliki cookie i inne
              podobne technologie mogą być używane zgodnie z prawem i przyjętą praktyką.
            </p>
            <p>
              Pliki cookie — małe pliki tekstowe zapisywane na urządzeniu przy wizycie na stronie — służą do
              zbierania informacji o zachowaniu w sieci, preferencjach i innych danych. Ich
              celem jest personalizacja i poprawa doświadczenia. Pomagają zapamiętać Twoje
              ustawienia i preferencje oraz dopasować ofertę. Służą też
              analizie strony i statystykom do planowania.
            </p>
            <p>
              Strona zazwyczaj używa dwóch rodzajów cookie: sesyjnych, przechowywanych
              tylko podczas sesji przeglądarki i usuwanych po jej zamknięciu;
              oraz trwałych, które zostają po zakończeniu sesji. Te ostatnie
              pozwalają stronie rozpoznać Cię jako powracającego gościa i ułatwiają korzystanie.
            </p>
            <p class="bold-title">Rodzaje plików cookie:</p>
            <p>Pliki cookie mogą być używane według potrzeby w zależności od celu:</p>
            <p class="green">Rodzaj cookie</p>
            <p>Te pliki cookie są ściśle niezbędne</p>
            <p class="green">Cel</p>
            <p>
              Pliki cookie służą do rozpoznania Cię jako klienta, abyśmy mogli dostarczyć informacje,
              ustawienia i usługi, o które prosiłeś.
              Ułatwiają też nawigację po stronie i dostęp do niej.
            </p>
            <p>
              Używamy cookie, by urządzenie mogło pobierać i odtwarzać treść. Umożliwiają też
              dostęp do niezbędnych funkcji i powrót do wcześniej odwiedzonych stron.
            </p>
            <p class="green">Informacje dodatkowe</p>
            <p>
              Aby dostęp do strony był szybki i prosty, pliki cookie przechowują i przetwarzają niektóre
              dane osobowe, np. nazwę użytkownika i datę ostatniego dostępu, jeśli poprosisz stronę, by
              Cię zapamiętała przy logowaniu.
            </p>
            <p>Cookie sesyjne są usuwane po zamknięciu przeglądarki.</p>
            <p class="green">Rodzaj cookie</p>
            <p>Cookie funkcjonalne</p>
            <p class="green">Cel</p>
            <p>
              Dzięki cookie możemy bezpiecznie zapisywać i stosować Twoje ustawienia i preferencje.
              Pozwalają też rozpoznać Cię przy ponownej wizycie.
            </p>
            <p class="green">Informacje dodatkowe</p>
            <p>
              Trwałe cookie zostają po sesji przeglądarki i pozostają aktywne do
              daty wygaśnięcia.
            </p>
            <p class="green">Rodzaj cookie</p>
            <p>Cookie wydajnościowe</p>
            <p class="green">Cel</p>
            <p>
              Aby ulepszać usługi, zbieramy statystyki za pomocą cookie. Te pliki
              dają nam informacje o wydajności strony i jej użyciu.
            </p>
            <p class="green">Informacje dodatkowe</p>
            <p>
              Wszystkie informacje zapisywane przez cookie są anonimowe i nie pozwalają zidentyfikować osób.
            </p>
            <p>
              Cookie sesyjne są usuwane po zamknięciu przeglądarki, a trwałe
              pozostają aktywne do daty wygaśnięcia lub bezterminowo, chyba że usuniesz je ręcznie.
            </p>
            <p>Blokowanie lub usuwanie cookie</p>
            <p>
              Jeśli chcesz usunąć lub zablokować cookie, zrób to w
              ustawieniach przeglądarki. Poniższe linki zawierają szczegółowe instrukcje dla najpopularniejszych przeglądarek.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokowanie cookie może sprawić, że niektóre funkcje strony nie zadziałają zgodnie z zamysłem.
            </p>
            <p class="bold-title">Jak długo przechowujemy dane osobowe</p>
            <p>
              Dane osobowe przechowujemy tylko tak długo, jak jest to ściśle potrzebne do wymaganych
              procesów, jak opisano w innych częściach tej polityki. Dłuższe przechowywanie jest możliwe, jeśli
              wymagają tego lokalne przepisy lub wewnętrzne zasady spółki.
            </p>
            <p>
              Twoje dane osobowe są udostępniane na Twoją prośbę i według Twojego wyboru platformom tradingowym
              osób trzecich przez 12 miesięcy. Po upływie tego okresu i za Twoją
              zgodą dane są udostępniane przez kolejne 12 miesięcy.
            </p>
            <p>
              Nasze procedury przewidują regularną ocenę wszystkich danych osobowych, by ustalić, czy
              są nadal potrzebne.
            </p>
            <p class="bold-title">
              9. Przekazywanie danych osobowych do państw trzecich lub organizacji międzynarodowych
            </p>
            <p>
              Gdy jest to potrzebne do usług i/lub ze względów bezpieczeństwa, możemy przekazywać
              dane osobowe do innych krajów (poza Twoim) i do organizacji międzynarodowych
              zgodnie z kompleksowymi protokołami bezpieczeństwa. Stosujemy środki ochrony danych na
              wysokim poziomie, by chronić informacje i zapewnić dostęp do środków prawnych
              i uprawnień ustawowych w każdym momencie.
            </p>
            <p>
              W Europejskim Obszarze Gospodarczym (EOG) wszyscy mieszkańcy korzystają z ochrony danych i gwarancji.
            </p>
            <p class="circle">
              Przekazywania zawsze odbywają się pod jurysdykcją i nadzorem UE, zgodnie
              ze standardami i protokołami ochrony danych z art. 45 ust. 3 rozporządzenia
              (UE) 2016/679 Parlamentu Europejskiego i Rady z dnia 27 kwietnia 2016 r.
              (&ldquo;RODO&rdquo;).
            </p>
            <p class="circle">
              Każde przekazanie danych między organami publicznymi odbywa się na podstawie art.
              46 ust. 2. Jest to prawnie wiążąca i wykonalna umowa.
            </p>
            <p class="circle">
              Standardowe klauzule umowne Komisji Europejskiej według art. 46 ust. 2 lit. c RODO określają
              warunki przekazywania, a takie przekazywania odbywają się zgodnie z
              nimi. Postanowienia możesz zobaczyć pod
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Więcej o konkretnych środkach bezpieczeństwa, które spółka zastosowała, by
              chronić dane osobowe przy przekazywaniu do państw trzecich, możesz wysłać wniosek
              e-mailem na <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Ochrona danych osobowych</p>
            <p>
              Dane osobowe chronią środki techniczne i organizacyjne najwyższego
              poziomu, stosowane według procedur referencyjnych. Te procedury skutecznie
              zapobiegają zniszczeniu danych wskutek zdarzeń bezprawnych lub nieprzewidzianych, a także
              ich utracie lub zmianie.
            </p>
            <p>
              Choć stosujemy największą staranność i procedury spełniające najsurowsze
              standardy ochrony danych i prawo, w żadnych okolicznościach nie można zagwarantować,
              że dane osobowe są wolne od błędów. Dlatego nie przyjmujemy odpowiedzialności, jeśli
              dane osobowe doznają szkody przypadkowej, niemajątkowej lub następczej albo ujawnienia.
              Obejmuje to sytuacje poza naszą kontrolą, np. ujawnienie wskutek błędów transmisji,
              nieuprawnionego dostępu osób trzecich lub podobnych przyczyn.
            </p>
            <p>
              Gdy otrzymamy prawnie wiążące wnioski organów nadzorczych lub innych
              organów z uprawnieniami ustawowymi, możemy być zobowiązani przekazać Twoje dane
              osobowe tym organom. Po przekazaniu na podstawie obowiązku prawnego nie mamy
              wpływu na to, jak te organy przetwarzają, przechowują lub chronią Twoje dane.
            </p>
            <p>
              Wszystko przesyłane przez internet, w tym dane osobowe, niesie pewne
              ryzyko przechwycenia i nie jest w 100% bezpieczne. Spółka nie może zagwarantować
              bezpieczeństwa danych wysyłanych online.
            </p>
            <p class="bold-title">11. Linki do stron osób trzecich</p>
            <p>
              Na tej stronie znajdziesz linki do aplikacji i witryn osób trzecich. Pamiętaj,
              że nie są one powiązane ze spółką ani pod jej kontrolą, a nasza
              polityka prywatności nie dotyczy tych osób trzecich. Działają według własnych
              procedur i priorytetów przy zbieraniu i przetwarzaniu danych osobowych, dlatego
              nie przyjmujemy odpowiedzialności za tę działalność. Korzystaj z nich według własnego uznania.
            </p>
            <p>
              Zawsze sprawdzaj politykę prywatności firmy lub usługi, odwiedzając jej stronę
              zanim podasz dane osobowe. Oceń, czy ich zasady zbierania, używania i
              przetwarzania odpowiadają Twoim preferencjom. Jeśli udostępniasz dane, zrób to
              bezpośrednio u dostawcy.
            </p>
            <p class="bold-title">12. Aktualizacje polityki</p>
            <p>
              Zastrzegamy sobie prawo do aktualizacji lub zmiany tej polityki w dowolnym momencie. Poinformujemy Cię
              o zmianach przez stronę i odpowiednie kanały. Zaktualizowana wersja polityki
              prywatności zostanie opublikowana na stronie, a zmieniona polityka obowiązuje
              od publikacji, chyba że wskazano inaczej.
            </p>
            <p class="bold-title">13. Twoje prawa dotyczące danych osobowych</p>
            <p>
              Masz kontrolę i ostatnie słowo nad użyciem wszystkich swoich danych osobowych. Obejmuje to
              weryfikację poprawności, poprawianie błędów oraz prawo do usunięcia lub
              ograniczenia naszego przetwarzania — zarówno co do zakresu, jak i charakteru.
            </p>
            <p>Mieszkańcy EOG znajdą na tej stronie informacje dla nich istotne:</p>
            <p>
              Twoje dane osobowe chronią prawa opisane tutaj. Wysyłając e-mail na
              adres poniżej, możesz te prawa zrealizować natychmiast.
            </p>
            <p>Dostęp do swoich praw</p>
            <p>
              Jeśli podane dane osobowe są poprawne, możesz mieć do nich dostęp w każdej chwili. Wszystkie
              dane osobowe, które przetwarzamy, są nam dostępne, a więc weryfikowalne.
            </p>
            <p>
              W każdej chwili możesz poprosić o dane osobowe do weryfikacji, a zostaną one
              udostępnione w formie elektronicznej. Jeśli poprosisz o dodatkowe kopie
              przetwarzanych danych poza już przekazaną kopią, może zostać pobrana rozsądna opłata.
            </p>
            <p>
              Prawa uznane w ustawie i polityce prywatności nie mogą naruszać praw osób
              trzecich. Spółka zastrzega sobie prawo odmowy lub ograniczenia dostępu do danych osobowych,
              jeśli naruszałoby to prawa i wolności osób trzecich.
            </p>
            <p>Prawo do sprostowania</p>
            <p>
              Każdy błąd w danych osobowych, czy z powodu pominięcia, czy nieścisłej informacji,
              może zostać poprawiony przez Ciebie lub spółkę, by zapewnić prawidłowe przetwarzanie.
            </p>
            <p>Prawo do usunięcia danych</p>
            <p>
              Masz prawo żądać usunięcia danych osobowych w następujących
              przypadkach: 1) jeśli przetwarzano je bez zgody lub poza granicami prawa; 2)
              na Twój wniosek, jeśli chcesz je usunąć, a spółka nie ma obowiązku prawnego
              ich przechowywać; 3) jeśli sprzeciwiasz się przetwarzaniu lub cofasz zgodę, nawet jeśli jest ono
              zgodne z prawem i oparte na naszych interesach lub interesach osób trzecich; i 4) jeśli prawo
              nakłada na nas obowiązek usunięcia.
            </p>
            <p>
              Prawo do usunięcia nie przysługuje, jeśli stoją temu na przeszkodzie obowiązki prawne UE lub
              państwa członkowskiego. Nie przysługuje też, jeśli dane są potrzebne do dochodzenia lub
              obrony roszczeń.
            </p>
            <p>Prawo do ograniczenia przetwarzania</p>
            <p>
              Masz prawo żądać ograniczenia przetwarzania danych osobowych, jeśli uważasz,
              że zawierają nieścisłości.
            </p>
            <p>
              Jeśli poprosisz o ograniczenie użycia danych osobowych, ograniczymy przetwarzanie, z wyjątkiem
              następujących przypadków: 1) jeśli prawo Unii Europejskiej lub jednego z jej
              państw członkowskich temu przeszkadza; 2) za Twoją zgodą, gdy jest to potrzebne do obrony lub dochodzenia
              roszczeń; 3) by chronić prawa innej osoby fizycznej.
            </p>
            <p>Prawo do przenoszenia danych</p>
            <p>
              Masz prawo dostępu i kontroli podanych danych osobowych w zakresie,
              w jakim wyraziłeś zgodę na ich zbieranie, i jeśli przetwarzanie
              odbywa się w systemach zautomatyzowanych.
            </p>
            <p>
              Masz prawo żądać przekazania wszystkich danych osobowych innej spółce lub
              organizacji, o ile jest to technicznie możliwe. To prawo nie narusza
              prawa do usunięcia danych. Nie przysługuje, jeśli jego wykonanie narusza prawa
              lub wolności innej osoby fizycznej.
            </p>
            <p>Prawo do sprzeciwu wobec przetwarzania</p>
            <p>
              Bez uszczerbku dla prawa spółki do realizacji prawnie uzasadnionych interesów lub
              interesów osoby trzeciej działającej jako dostawca, masz prawo sprzeciwić się
              przetwarzaniu i żądać jego zaprzestania. To prawo nie przysługuje, jeśli zachodzi pilna
              potrzeba prawna kontynuowania przetwarzania — czy to w obronie przed roszczeniami, czy w ich
              dochodzeniu. W takich przypadkach możemy kontynuować przetwarzanie Twoich danych.
            </p>
            <p>
              W każdej chwili możesz sprzeciwić się przetwarzaniu danych osobowych na potrzeby marketingu bezpośredniego.
            </p>
            <p>
              Prawo do wycofania zgody
            </p>
            <p>
              Zgodę na przetwarzanie danych osobowych możesz wycofać w dowolnym momencie,
              ze skutkiem natychmiastowym. Wycofanie nie działa wstecz wobec przetwarzania
              dokonanego przed wycofaniem.
            </p>
            <p>
              Jeśli z jakiegokolwiek powodu jesteś niezadowolony, masz prawo złożyć skargę do
              organu prawnego, nadzorczego lub innego organu kontrolnego.
            </p>
            <p>
              Jeśli uważasz, że Twoje prawa i wolności związane z przetwarzaniem danych osobowych
              zostały naruszone, państwa członkowskie UE mają organy nadzorcze i kontrolne
              w tym celu. Możesz złożyć skargę do tych organów, jeśli uznasz to za stosowne.
            </p>
            <p>
              Punkt 13 opisuje sytuacje, w których Twoje prawa dotyczące danych osobowych mogą być
              ograniczone przepisami Unii Europejskiej lub państw członkowskich.
            </p>
            <p>
              Gdy otrzymamy Twój wniosek dotyczący danych osobowych i ich przetwarzania, damy Ci
              dostęp do żądanych informacji, jak określono w punkcie 13 tej polityki.
              Możemy przedłużyć ten termin o maksymalnie dwa miesiące w zależności od zakresu wniosku
              i charakteru zapytania. W razie potrzeby powiadomimy Cię o przedłużeniu
              w ciągu miesiąca od otrzymania wniosku.
            </p>
            <p>
              Wyślemy żądane informacje elektronicznie i bezpłatnie, chyba że
              jest to sprzeczne z prawem lub postanowieniami punktu 13. Zastrzegamy sobie prawo
              pobrać rozsądną opłatę lub odmówić wniosku, jeśli zostanie uznany za bezzasadny, nadmierny lub powtarzający się.
            </p>
            <p>
              Zastrzegamy sobie prawo żądania dodatkowej weryfikacji tożsamości, jeśli istnieją
              uzasadnione wątpliwości co do osoby składającej wniosek o dane osobowe, aby
              chronić i zapewnić bezpieczeństwo danych.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

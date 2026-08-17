<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Polityka prywatności ᐉ ' . SITE_NAME;
$page_description = 'Jak ' . SITE_NAME . ' zbiera, wykorzystuje i chroni Państwa dane osobowe.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informacje prawne</span>
    <h1>Polityka prywatności</h1>
    <p class="rmct9">Jak <?= e(SITE_NAME) ?> zbiera, wykorzystuje i chroni Państwa dane osobowe.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ostatnia aktualizacja: styczeń 2025</p>

    <h2>1. Wstęp</h2>
    <p><?= e(SITE_NAME) ?> („my”, „nas”, „nasze”) zobowiązuje się chronić prywatność odwiedzających i klientów. Niniejsza Polityka prywatności wyjaśnia, jakie dane osobowe zbieramy, dlaczego i jak je przetwarzamy, gdy korzystają Państwo z naszej strony i usług.</p>

    <h2>2. Jakie dane zbieramy</h2>
    <ul>
      <li><strong>Dane identyfikacyjne</strong> — imię i nazwisko, data urodzenia, dokument tożsamości na potrzeby weryfikacji oraz zgodności z KYC/AML.</li>
      <li><strong>Dane kontaktowe</strong> — adres e-mail, numer telefonu, adres korespondencyjny.</li>
      <li><strong>Dane finansowe</strong> — dane płatnicze, historia transakcji, informacje o źródle środków.</li>
      <li><strong>Dane techniczne</strong> — adres IP, typ przeglądarki, identyfikatory urządzenia, pliki cookies i analityka korzystania.</li>
    </ul>

    <h2>3. Jak wykorzystujemy dane</h2>
    <ul>
      <li>Do weryfikacji tożsamości i wypełniania obowiązków regulacyjnych.</li>
      <li>Do świadczenia, utrzymania i ulepszania platformy oraz usług.</li>
      <li>Do przetwarzania płatności i wykrywania oszustw.</li>
      <li>Do komunikacji w sprawie konta, aktualizacji i zgłoszeń do wsparcia.</li>
      <li>Do komunikacji marketingowej za zgodą (rezygnacja możliwa w dowolnym momencie).</li>
    </ul>

    <h2>4. Podstawa prawna</h2>
    <p>Dane osobowe przetwarzamy na jednej lub kilku podstawach: wykonanie umowy, obowiązek prawny, nasze prawnie uzasadnione interesy lub Państwa zgoda.</p>

    <h2>5. Udostępnianie</h2>
    <p>Dane osobowe możemy udostępniać regulowanym dostawcom płatności, partnerom weryfikacji KYC/AML, dostawcom chmury, doradcom zawodowym oraz właściwym organom, gdy wymaga tego prawo. Danych osobowych nie sprzedajemy.</p>

    <h2>6. Przekazywanie międzynarodowe</h2>
    <p>Gdy dane są przekazywane poza Państwa jurysdykcję, zapewniamy odpowiednie zabezpieczenia, w tym standardowe klauzule umowne.</p>

    <h2>7. Przechowywanie danych</h2>
    <p>Dane przechowujemy tak długo, jak jest to potrzebne do świadczenia usług oraz wymogów prawnych, regulacyjnych i księgowych — zwykle co najmniej pięć lat po zamknięciu konta.</p>

    <h2>8. Państwa prawa</h2>
    <p>Zgodnie z obowiązującym prawem mogą Państwo żądać dostępu, sprostowania, usunięcia, ograniczenia lub przeniesienia danych oraz wnieść sprzeciw wobec określonego przetwarzania. Prawa można wykonać pod adresem poniżej.</p>

    <h2>9. Pliki cookies</h2>
    <p>Używamy niezbędnych i analitycznych plików cookies do działania serwisu i zrozumienia korzystania. Plikami cookies można zarządzać w ustawieniach przeglądarki.</p>

    <h2>10. Bezpieczeństwo</h2>
    <p>Stosujemy zabezpieczenia administracyjne, techniczne i fizyczne chroniące dane osobowe przed nieuprawnionym dostępem, ujawnieniem, zmianą lub zniszczeniem. Żaden system nie jest doskonale bezpieczny i nie gwarantujemy bezpieczeństwa absolutnego.</p>

    <h2>11. Zmiany</h2>
    <p>Niniejszą Politykę możemy od czasu do czasu aktualizować. Najnowsza wersja jest zawsze na tej stronie z datą aktualizacji.</p>

    <h2>12. Kontakt</h2>
    <p>W sprawach prywatności lub wykonania praw prosimy o kontakt z zespołem ochrony danych <?= e(SITE_NAME) ?> przez stronę kontaktową.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Powrót na stronę główną</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Polityka prywatności');
$page_description = 'Jak ' . SITE_NAME . ' zbiera, wykorzystuje i chroni Twoje dane osobowe.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Główna">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Jak to działa</a>
      <a href="<?= page_url() ?>#markets">Rynki</a>
      <a href="<?= page_url() ?>#faq">Często zadawane pytania</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Zacznij</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Informacje prawne</span>
      <h1>Polityka prywatności</h1>
      <p class="lede">Jak <?= e(SITE_NAME) ?> zbiera, wykorzystuje i chroni Twoje dane osobowe.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Ostatnia aktualizacja: styczeń 2025</p>

      <h2>1. Wprowadzenie</h2>
      <p><?= e(SITE_NAME) ?> („my”, „nasz”, „nasze”) zobowiązuje się chronić prywatność odwiedzających i klientów. Niniejsza Polityka prywatności wyjaśnia, jakie dane osobowe zbieramy, dlaczego i jak je przetwarzamy, gdy korzystasz z naszej witryny i usług.</p>

      <h2>2. Informacje, które zbieramy</h2>
      <ul>
        <li>Dane tożsamości — imię i nazwisko, data urodzenia, dokumenty tożsamości wydane przez organ państwowy na potrzeby rejestracji i zgodności KYC/AML.</li>
        <li>Dane kontaktowe — adres e-mail, numer telefonu, adres pocztowy.</li>
        <li>Dane finansowe — szczegóły płatności, historia transakcji, informacje o źródle środków.</li>
        <li>Dane techniczne — adres IP, typ przeglądarki, identyfikatory urządzeń, pliki cookie i analityka użytkowania.</li>
      </ul>

      <h2>3. Jak wykorzystujemy Twoje dane</h2>
      <ul>
        <li>Do weryfikacji tożsamości i spełniania obowiązków regulacyjnych.</li>
        <li>Do świadczenia, utrzymania i ulepszania naszej platformy i usług.</li>
        <li>Do przetwarzania płatności i wykrywania działalności fraudowej.</li>
        <li>Do komunikacji z Tobą w sprawie konta, aktualizacji i zgłoszeń wsparcia.</li>
        <li>Do wysyłania komunikacji marketingowej, gdy wyraziłeś zgodę (możesz zrezygnować w dowolnym momencie).</li>
      </ul>

      <h2>4. Podstawa prawna</h2>
      <p>Przetwarzamy dane osobowe na podstawie jednej lub więcej z następujących podstaw prawnych: wykonanie umowy, spełnienie obowiązku prawnego, nasze prawnie uzasadnione interesy lub Twoja zgoda.</p>

      <h2>5. Udostępnianie i ujawnianie</h2>
      <p>Możemy udostępniać dane osobowe regulowanym dostawcom płatności, partnerom weryfikacji KYC/AML, dostawcom infrastruktury chmurowej, doradcom zawodowym i właściwym organom, gdy wymaga tego prawo. Nie sprzedajemy danych osobowych.</p>

      <h2>6. Transfery międzynarodowe</h2>
      <p>Gdy dane osobowe są przekazywane poza Twoją jurysdykcję, zapewniamy odpowiednie zabezpieczenia, w tym standardowe klauzule umowne.</p>

      <h2>7. Przechowywanie danych</h2>
      <p>Przechowujemy dane osobowe tak długo, jak jest to potrzebne do świadczenia usług i spełniania wymogów prawnych, regulacyjnych i księgowych — zazwyczaj co najmniej pięć lat po zamknięciu konta.</p>

      <h2>8. Twoje prawa</h2>
      <p>Z zastrzeżeniem obowiązującego prawa możesz żądać dostępu, sprostowania, usunięcia, ograniczenia lub przenoszenia swoich danych osobowych oraz sprzeciwić się określonym przetwarzaniom. Aby skorzystać z tych praw, skontaktuj się z nami pod poniższym adresem.</p>

      <h2>9. Pliki cookie</h2>
      <p>Używamy niezbędnych i analitycznych plików cookie do działania witryny i zrozumienia użycia. Plikami cookie możesz zarządzać w ustawieniach przeglądarki.</p>

      <h2>10. Bezpieczeństwo</h2>
      <p>Stosujemy zabezpieczenia administracyjne, techniczne i fizyczne zaprojektowane w celu ochrony danych osobowych przed nieuprawnionym dostępem, ujawnieniem, zmianą lub zniszczeniem. Żaden system nie jest całkowicie bezpieczny i nie możemy zagwarantować absolutnego bezpieczeństwa.</p>

      <h2>11. Zmiany</h2>
      <p>Możemy od czasu do czasu aktualizować tę Politykę. Najnowsza wersja będzie zawsze dostępna na tej stronie z zaktualizowaną datą.</p>

      <h2>12. Kontakt</h2>
      <p>W sprawach prywatności lub w celu skorzystania z praw skontaktuj się z zespołem Ochrony Danych <?= e(SITE_NAME) ?> przez naszą <a href="<?= page_url('contacts.php') ?>">stronę kontaktową</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Powrót do strony głównej</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone ·
      <a href="<?= page_url('privacy.php') ?>">Prywatność</a> ·
      <a href="<?= page_url('conditions.php') ?>">Warunki</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

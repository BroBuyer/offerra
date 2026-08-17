<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Najczęstsze pytania ' . SITE_NAME;
$page_description = 'Pytania, odpowiedzi — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pytania</span>
    <h1>Pytania, odpowiedzi jasne</h1>
    <p class="kpnq92g">O co pytają przed otwarciem konta — i odpowiedzi, które dalibyśmy także przez telefon.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Pytania o pieniądze</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Czy <?= e(SITE_NAME) ?> to oszustwo?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nie: <?= e(SITE_NAME) ?> działa z weryfikacją, publikuje warunki i informację o ryzyku w pełnym brzmieniu, a wypłaty zawsze wracają pierwotną metodą płatności. Każda inwestycja niesie jednak realne ryzyko i żadna poważna platforma nie obiecuje gwarantowanych zysków — ostrożnie wobec tych, którzy to robią.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ile kosztuje otwarcie konta?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Otwarcie konta jest bezpłatne. Bez opłaty rejestracyjnej i bez abonamentu; wpłacają Państwo tylko kwotę, którą zdecydują zainwestować.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ile trwają wypłaty?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Zlecenia realizowane są w dni robocze i wracają metodą wpłaty. Przelewy bankowe trwają dłużej niż karty lub e-portfele.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Czy jest kwota minimalna?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Tak, i jest celowo niska, od <?= e(money_min()) ?>, by można było zacząć od małej kwoty i później dodać. Dokładna kwota widać przed potwierdzeniem.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Najczęściej zadawane pytania</h2>
    <div class="fjl4d">
      <details open><summary>Jaka jest minimalna wpłata na start?</summary><p>Konto można otworzyć i zasilić od <?= e(money_min()) ?> minimum. Dalsze środki można dodać wraz z rozwojem planu inwestycyjnego.</p></details>
      <details><summary>Jak działają wypłaty?</summary><p>Wypłatę można zlecić w dowolnym momencie z panelu. Środki wracają wybraną metodą płatności, w zwykłych terminach realizacji.</p></details>
      <details><summary>Czy moje pieniądze są bezpieczne?</summary><p>Konta chroni zabezpieczenie na poziomie profesjonalnym oraz weryfikacja tożsamości. Jak przy każdej inwestycji, kapitał jest narażony na ryzyko, a wartości mogą spadać i rosnąć.</p></details>
      <details><summary>Ile trwa rozpoczęcie inwestowania?</summary><p>Większość członków kończy rejestrację w kilka minut. Po zaksięgowaniu pierwszej wpłaty plan można aktywować od razu.</p></details>
      <details><summary>Czy są ukryte opłaty?</summary><p>Wszystkie koszty widać przejrzyście przed zobowiązaniem. Zawsze widać, co dotyczy planu — bez niespodzianek.</p></details>
      <details><summary>Jaki jest minimalny wiek rejestracji?</summary><p>Aby otworzyć konto i inwestować, trzeba mieć co najmniej 18 lat. Weryfikacja może potwierdzić wiek i tożsamość.</p></details>
      <details><summary>Jakie metody płatności są akceptowane?</summary><p>Akceptujemy popularne metody: karty debetowe i kredytowe, przelewy bankowe, wybrane e-portfele i kryptowaluty. Dokładne opcje widać przy wpłacie.</p></details>
      <details><summary>Kiedy dostępna jest obsługa klienta?</summary><p>Zespół wsparcia jest dostępny od poniedziałku do piątku, 9:00–18:00, i zobowiązuje się odpowiedzieć na każde zgłoszenie w ciągu jednego dnia roboczego.</p></details>
      <details><summary>Jak rozliczane są podatki od zysków?</summary><p>Podatki od zysków inwestycyjnych zależą od przepisów w Państwa kraju i leżą po stronie klienta. Zalecamy prowadzić własne ewidencje i skonsultować się z doradcą podatkowym.</p></details>
      <details><summary>Czym jest weryfikacja KYC i dlaczego jest wymagana?</summary><p>KYC (Know Your Customer) to standardowa weryfikacja tożsamości. Pomaga chronić konta i jest rutynowym elementem otwarcia konta inwestycyjnego.</p></details>
      <details><summary>Czy potrzebne jest wcześniejsze doświadczenie inwestycyjne?</summary><p>Nie. Każdy członek ma osobistego analityka finansowego, który prowadzi na każdym kroku, więc wcześniejsza znajomość rynków nie jest potrzebna.</p></details>
      <details><summary>Kto zarządza moimi inwestycjami?</summary><p>Dedykowany analityk finansowy ze wsparciem narzędzi AI, zgodnie z Państwa celami i poziomem ryzyka. Łączy wiedzę ekspercką z technologią — decyzje pozostają ludzkie.</p></details>
      <details><summary>Czy platforma spełnia standardy regulacyjne?</summary><p>Tak — spełnia krajowe standardy finansowe i cyberbezpieczeństwa, z ochroną konta i wbudowaną weryfikacją.</p></details>
      <details><summary>Czy później można dodać środki na konto?</summary><p>Tak. Konto można zasilić w dowolnym momencie, a plan dostosować z analitykiem wraz ze zmianą celów.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Konto i bezpieczeństwo</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Jak działa logowanie w <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Logują się Państwo zarejestrowanym e-mailem i hasłem ze strony lub przeglądarki mobilnej. Przy weryfikacji dwuetapowej podaje się kod; zapomniane hasło resetuje się na ekranie logowania.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Dlaczego potrzebne są dokumenty tożsamości?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Weryfikacja jest wymagana, zanim konto może przesuwać środki. Zapobiega też otwarciu konta na Państwa nazwisko przez kogoś innego.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Czy potrzebne jest wcześniejsze doświadczenie?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nie. Większość członków zaczyna bez niego. Specjalista przeprowadza przez pierwsze kroki, a saldo demo służy do ćwiczeń.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Czy można korzystać z telefonu?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Tak, platforma działa w przeglądarce mobilnej, nic nie trzeba instalować.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Zacznij — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Wyślij wiadomość</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

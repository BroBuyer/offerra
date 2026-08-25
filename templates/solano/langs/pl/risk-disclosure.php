<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Informacja o ryzyku ᐉ ' . SITE_NAME;
$page_description = 'Informacja o ryzyku — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Ważne</span>
    <h1>Informacja o ryzyku</h1>
    <p class="etpy2">Prosimy uważnie przeczytać to zawiadomienie przed korzystaniem z <?= e(SITE_NAME) ?> lub powiązanej usługi.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ostatnia aktualizacja: styczeń 2025</p>

    <div class="ntr9c">
      <strong>Inwestowanie wiąże się z ryzykiem.</strong> Wartość inwestycji może spadać i rosnąć. Można stracić część lub całość zainwestowanego kapitału. <strong>Wyniki historyczne nie są wiarygodnym wskaźnikiem przyszłych rezultatów.</strong> Inwestuj tylko pieniądze, których utratę możesz sobie pozwolić.
    </div>

    <h2>1. Ostrzeżenie ogólne</h2>
    <p>Handel i inwestowanie w instrumenty finansowe, kryptowaluty i inne aktywa cyfrowe wiąże się z wysokim ryzykiem i może nie być odpowiednie dla wszystkich inwestorów. Przed skorzystaniem z <?= e(SITE_NAME) ?> należy starannie rozważyć cele inwestycyjne, poziom doświadczenia i tolerancję ryzyka.</p>

    <h2>2. Ryzyko rynkowe</h2>
    <p>Ceny instrumentów finansowych i aktywów cyfrowych mogą w krótkim czasie znacznie się wahać z powodu warunków rynkowych, zdarzeń makroekonomicznych, regulacji, płynności i innych czynników poza naszą kontrolą. Przy produktach z dźwignią straty mogą przekroczyć początkową wpłatę.</p>

    <h2>3. Zmienność aktywów cyfrowych</h2>
    <p>Kryptowaluty i inne aktywa cyfrowe są szczególnie zmienne. Na wartość wpływają zdarzenia sieciowe, forki, awarie giełd, ataki hakerskie lub nagła utrata zaufania. Nie ma gwarancji, że aktywo utrzyma określoną wartość lub pozostanie zbywalne.</p>

    <h2>4. Ryzyko dźwigni</h2>
    <p>Jeśli dźwignia jest dostępna, wzmacnia zyski i straty. Stosunkowo niewielki ruch rynku może spowodować proporcjonalnie większy ruch wartości pozycji i prowadzić do całkowitej utraty środków lub kwot przekraczających wpłatę.</p>

    <h2>5. Ryzyko technologiczne i realizacji</h2>
    <p>Platformy internetowe mogą dotknąć zakłócenia: awarie systemów, opóźnienia, problemy z łącznością i cyberataki. Może to uniemożliwić realizację zleceń po żądanych cenach albo w ogóle.</p>

    <h2>6. Brak porady inwestycyjnej</h2>
    <p>Informacje <?= e(SITE_NAME) ?>, w tym sygnały sztucznej inteligencji, panele, materiały edukacyjne lub analizy, służą wyłącznie do informacji i nie stanowią spersonalizowanej porady inwestycyjnej, rekomendacji ani zachęty do kupna lub sprzedaży instrumentu finansowego. Za decyzje inwestycyjne odpowiadają wyłącznie Państwo.</p>

    <h2>7. Wyniki historyczne</h2>
    <p><strong>Wyniki historyczne nie są wiarygodnym wskaźnikiem przyszłych wyników.</strong> Backtesty, symulacje, modelowe stopy zwrotu i wyniki hipotetyczne mają wrodzone ograniczenia i nie odzwierciedlają rzeczywistych wyników handlu.</p>

    <h2>8. Aspekty regulacyjne i podatkowe</h2>
    <p>Traktowanie regulacyjne instrumentów finansowych i aktywów cyfrowych różni się w zależności od jurysdykcji i się zmienia. Odpowiadają Państwo za zrozumienie i przestrzeganie przepisów, które Państwa dotyczą, w tym obowiązków podatkowych.</p>

    <h2>9. Skorzystaj z niezależnej porady</h2>
    <p>W razie wątpliwości co do przydatności produktu lub usługi oferowanej przez <?= e(SITE_NAME) ?> prosimy przed dalszymi krokami o niezależną poradę specjalistyczną.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Powrót na stronę główną</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

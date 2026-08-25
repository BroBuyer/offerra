<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'O nas ' . SITE_NAME;
$page_description = 'Jedno konto, jasny obraz Państwa kapitału — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>Jedno konto, jasny obraz wszystkiego</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> łączy saldo, strategię i wyniki w jednym przejrzystym panelu, by każda decyzja była świadoma, a każda liczba na widoku.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Ludzie stojący za Państwa kontem</h2>
    <p>Za interfejsem są analitycy, którzy codziennie śledzą rynki, inżynierowie, którzy utrzymują platformę, oraz specjaliści wsparcia, którzy odpowiadają w Państwa języku.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Analitycy rynku, którzy oceniają warunki codziennie, nie raz na kwartał.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inżynierowie do dyspozycji platformy, z monitoringiem całodobowym.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Specjaliści wsparcia przy onboardingu, weryfikacji i wypłatach.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulacje, ryzyko i czego nie obiecujemy</h2>
    <p>Inwestowanie wiąże się z ryzykiem i żadna platforma go nie usuwa. Platforma może być jasna: opublikować warunki, trzymać środki klientów u regulowanych partnerów i udokumentować wypłaty.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Weryfikacja tożsamości, zanim na koncie ruszą środki.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Wypłaty wracają tą samą metodą co wpłata.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Warunki, informacja o ryzyku i polityka prywatności opublikowane w pełnym brzmieniu.</span></li>
    </ul>
    <p class="jkkyl">Inwestowanie wiąże się z ryzykiem, w tym z możliwością utraty części lub całości kapitału. Wartość inwestycji może spadać i rosnąć, a zwrot może być niższy niż wpłacona kwota. Nie należy inwestować środków, których utraty nie można sobie pozwolić.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Zacznij — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Wyślij wiadomość</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Jak powstała platforma</h2>
    <ol class="nxlk2qu">
      <li><h3>Punkt wyjścia</h3><p>Mała grupa analityków i inżynierów wciąż słyszała to samo: narzędzia są, ale nikt ich nie wyjaśnia.</p></li>
      <li><h3>Pierwsza działająca wersja</h3><p>Pierwsza wersja robiła jedno: pokazać saldo i pozycję zrozumiale. Reszta poszła na bok, dopóki ta część nie była jasna.</p></li>
      <li><h3>Strona ludzka</h3><p>Automatyzacja odpowiada na co i kiedy; ludzie na dlaczego. Specjaliści wsparcia doszli, by każdy członek miał kogo zapytać.</p></li>
      <li><h3>Otwarcie na kolejne rynki</h3><p>Lokalne metody płatności, języki i godziny wsparcia.</p></li>
      <li><h3>Gdzie jesteśmy teraz</h3><p>Te same zasady w większej skali: przejrzyste liczby, ludzie, do których można dotrzeć, bez niespodzianek w drobnym druku.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Po co tu jesteśmy</h2>
    <p>Większość osób, które chcą inwestować, nigdy nie zaczyna, bo każda droga wygląda na zaprojektowaną dla kogoś, kto już zna słownik. Zbudowaliśmy odwrotność: jedno konto, jasny język i specjalista, z którym naprawdę można porozmawiać.</p>
    <p>Bez żargonu tam, gdzie wystarczy zwykłe zdanie, bez opłat, które pojawiają się dopiero po ruchu środków, i bez obietnic zysków, których nikt rzetelnie nie zagwarantuje.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktywni użytkownicy</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Wolumen obrotu</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Wsparcie</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

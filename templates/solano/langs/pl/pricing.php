<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Cennik ' . SITE_NAME;
$page_description = 'Prosty, przejrzysty cennik — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Prosty, przejrzysty cennik.</h1>
    <p class="kpnq92g">Start z <?= e(SITE_NAME) ?> jest bezpłatny. Nie ma ukrytych opłat za otwarcie konta, a wpłacają Państwo tylko to, co zdecydują zainwestować: platforma i narzędzia są w cenie.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Gdzie mogą pojawić się koszty</h2>
    <p>To jedyne miejsca, w których środki schodzą z salda z powodu czegoś innego niż wybrana inwestycja.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Pozycja</th><th scope="col">Pobiera</th><th scope="col">Uwaga</th></tr></thead>
      <tbody>
        <tr><td>Otwarcie konta</td><td>—</td><td>Bezpłatnie.</td></tr>
        <tr><td>Dostęp do platformy</td><td>—</td><td>W cenie, bez abonamentu.</td></tr>
        <tr><td>Spread rynkowy</td><td>Broker</td><td>Zwykła różnica między ceną kupna i sprzedaży.</td></tr>
        <tr><td>Opłata sieciowa / bankowa</td><td>Dostawca płatności</td><td>Zależy od wybranej metody.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapitał jest narażony na ryzyko. Inwestuj tylko to, czego utratę możesz sobie pozwolić.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Otwórz konto</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Co jest w cenie</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Założenie konta bezpłatnie: bez opłat rejestracyjnych i licencyjnych.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Bez ukrytych opłat za wpłaty, wypłaty ani prowadzenie konta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Mogą obowiązywać jedynie standardowy spread brokera lub koszty sieciowe.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Zacznij od minimalnej wpłaty i zwiększaj we własnym tempie.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Jak liczby wyglądają w praktyce</h2>
    <h3>Pierwsza wpłata krok po kroku</h3>
    <p>Pierwsza wpłata to cały obraz kosztów w jednym miejscu: kwota, którą Państwo wysyłają, spread przy przewalutowaniu i nic więcej, dopóki nie zdecydują się handlować. Bez miesięcznej opłaty za konto i bez opłaty za pozostawienie salda w spokoju.</p>
    <h4>Co dzieje się tego samego dnia</h4>
    <p>Saldo pojawia się po zaksięgowaniu płatności, a specjalista przechodzi przez plan, zanim cokolwiek zostanie otwarte. Nic nie składa się automatycznie w Państwa imieniu.</p>
    <h3>Wypłaty i ile kosztują</h3>
    <p>Wypłaty wracają metodą, którą środki przyszły: to wymóg, nie preferencja, by konto pozostało Państwa. Realizacja z naszej strony jest bezpłatna; jedyne potrącenie może pochodzić od Państwa banku lub wydawcy karty.</p>
    <h4>Terminy, na których można polegać</h4>
    <p>Zlecenia w dzień roboczy rozpatrywane są tego samego dnia. Zwroty na kartę zwykle w trzy do pięciu dni roboczych, przelewy w ciągu dwóch.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

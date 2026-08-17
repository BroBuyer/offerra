<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Dlaczego my ' . SITE_NAME;
$page_description = 'Dlaczego warto zacząć z ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Dlaczego ta platforma</span>
    <h1>Dlaczego warto zacząć tutaj</h1>
    <p class="kpnq92g">Nie oferta sprzedażowa: konkretne, sprawdzalne powody — oraz to, co nie każdemu pasuje.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Bez arkuszy. Bez zagraconych ekranów. Bez wątpliwości w ostatniej chwili</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Tradycyjny broker</th><th scope="col">Handel na własną rękę</th></tr></thead>
      <tbody>
        <tr><td>Realizacja zleceń AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ograniczone godziny</td><td style="color:var(--muted)">ręcznie</td></tr>
        <tr><td>Pokrycie 24/7 na wszystkich rynkach</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papierologia</td><td style="color:var(--muted)">Samodzielnie</td></tr>
        <tr><td>Routing zleceń poniżej sekundy</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">tylko według pakietu</td><td style="color:var(--muted)">ręcznie</td></tr>
        <tr><td>Raporty w wielu walutach</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ograniczone godziny</td><td style="color:var(--muted)">Samodzielnie</td></tr>
        <tr><td>Otwarcie konta bez papierów</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papierologia</td><td style="color:var(--muted)">ręcznie</td></tr>
        <tr><td>Arbitraż między giełdami</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">tylko według pakietu</td><td style="color:var(--muted)">Samodzielnie</td></tr>
        <tr><td>Dedykowany opiekun</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ograniczone godziny</td><td style="color:var(--muted)">ręcznie</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Co zyskują Państwo, czego samodzielna konfiguracja nie da</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Realizacja poniżej sekundy na każdym podłączonym rynku.</b> <?= e(SITE_NAME) ?> utrzymuje stałe połączenia API o niskiej latencji z każdą obsługiwaną giełdą. Gdy model wygeneruje sygnał, zlecenie jest wysyłane, realizowane i zapisywane w panelu jeszcze przed następnym tikem.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Działa 24/7, w każdej sesji rynkowej.</b> Krypto nie odpoczywa i <?= e(SITE_NAME) ?> też nie. Silnik analizuje pary także w weekendy i święta, by okazja nie umknęła.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Raporty w wielu walutach.</b> Każde saldo, każda transakcja i każda wypłata jest w lokalnej walucie. Bez ukrytych kroków przewalutowania.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Wydzielony kapitał.</b> Państwa środki pozostają na Państwa koncie. <?= e(SITE_NAME) ?> nigdy ich nie przechowuje: silnik ma jedynie uprawnienie do wysyłania zleceń.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Bezpieczeństwo na poziomie bankowym.</b> Szyfrowanie TLS w całej platformie, weryfikacja dwuetapowa domyślnie oraz kwartalne audyty infrastruktury przez stronę trzecią. Potwierdzenia transakcji zapisywane on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Trzy klasy aktywów, jedna platforma.</b> Większość platform detalicznych ogranicza do jednego rynku. <?= e(SITE_NAME) ?> obsługuje kryptowaluty, notowane akcje i główne pary walutowe z tego samego panelu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Wstępnie ustawione limity ryzyka na każdej pozycji.</b> Stop-loss, maksymalna akceptowana strata i limity alokacji kapitału ustawia się według klasy aktywów. Silnik automatycznie zamyka transakcję, która przekroczy próg, a zdarzenie trafia do historii audytu.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Dla kogo to raczej nie jest</h2>
    <p>Szczerość oszczędza czas. Jeśli którakolwiek z poniższych sytuacji Państwa dotyczy, inna droga będzie lepsza.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Potrzebują Państwo gwarantowanych zysków. Żadna rzetelna platforma ich nie oferuje i my też nie.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Chcą Państwo inwestować pieniądze, bez których nie można się obejść.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Handlują Państwo w wolumenie profesjonalnym z własną infrastrukturą realizacji.</span></li>
    </ul>
    <p class="jkkyl">Inwestowanie wiąże się z ryzykiem, w tym z możliwością utraty części lub całości kapitału. Wartość inwestycji może spadać i rosnąć, a zwrot może być niższy niż wpłacona kwota. Nie należy inwestować środków, których utraty nie można sobie pozwolić.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Zacznij — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Jesteśmy, by pomóc';
$page_description = 'Mają Państwo pytanie o ' . SITE_NAME . ' lub o konto?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kontakt</span>
    <h1>Jesteśmy, by pomóc</h1>
    <p class="kpnq92g">Mają Państwo pytanie o <?= e(SITE_NAME) ?> lub o konto? Zespół wsparcia chętnie pomoże. Napisz do nas, a odpowiemy tak szybko, jak to możliwe.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Zanim napiszą Państwo do nas</h2>
    <p>Większość pytań ma już odpowiedź na stronie, a sprawdzenie najpierw jest zwykle szybsze niż czekanie na odpowiedź.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Najczęstsze pytania</a> — koszty, wypłaty, weryfikacja i kwoty minimalne.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Jak to działa</a> — co się dzieje po rejestracji, krok po kroku.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Cennik</a> — co jest bezpłatne i gdzie może pojawić się koszt.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Zacznij — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Jak się z nami skontaktować</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanał</th><th scope="col">Najlepsze do</th><th scope="col">Odpowiedź</th></tr></thead>
      <tbody>
        <tr><td>Wsparcie e-mail — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Pytania o konto, weryfikacja, wypłaty</td><td>Zwykle odpowiadamy w ciągu jednego dnia roboczego.</td></tr>
        <tr><td>Prośba o oddzwonienie</td><td>Wszystko, co łatwiej wyjaśnić telefonem</td><td>Godziny wsparcia: poniedziałek–piątek, 9:00–18:00</td></tr>
        <tr><td>Zgłoszenie nadużycia — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Podszywanie się, nadużycie marki, podejrzane wiadomości</td><td>Rozpatrywane po otrzymaniu</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Czego się spodziewać po kontakcie</h2>
    <h3>Który kanał wybrać</h3>
    <p>E-mail jest właściwym wyborem przy załączniku: weryfikacja tożsamości, pytania o wypłatę, kwestie wyciągu. Formularz oddzwonienia jest na resztę, bo większość pytań o konto rozwiązuje się szybciej w dwóch minutach rozmowy niż w czterech wiadomościach.</p>
    <h4>Poza godzinami wsparcia</h4>
    <p>Wiadomości wieczorem lub w weekend zostają w kolejce i odpowiadamy na nie rano następnego dnia roboczego, w kolejności wpływu.</p>
    <h3>Szczegóły, które warto podać</h3>
    <p>Zarejestrowany e-mail i przybliżona data wystarczą do odnalezienia konta. Nigdy nie wysyłaj hasła, pełnego numeru karty ani kodu jednorazowego: nikt z zespołu o to nie poprosi.</p>
    <h4>Jeśli coś wygląda nie tak</h4>
    <p>Zgłoś to tego samego dnia. Wszystko związane z płatnością, której Państwo nie rozpoznają, obsługujemy od razu, poza zwykłą kolejką.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

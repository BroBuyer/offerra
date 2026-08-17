<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Rejestracja ' . SITE_NAME;
$page_description = 'Otwórz konto w ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Zacznij teraz</span>
    <h1>Otwórz konto</h1>
    <p class="kpnq92g">Kilka danych na start, potem przejmuje specjalista. Na tym etapie nie pobiera się płatności.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Co dalej</h2>
    <ol class="nxlk2qu">
      <li><h3>Wysyłają Państwo formularz</h3><p>Zajmuje kilka minut i nic nie kosztuje.</p></li>
      <li><h3>Specjalista dzwoni</h3><p>Potwierdza dane, odpowiada na pytania i wyjaśnia kolejny krok. Bez presji na wpłatę.</p></li>
      <li><h3>Weryfikują Państwo i wybierają kwotę</h3><p>Dopiero wtedy ruszają środki, i tylko w kwocie, którą Państwo wybiorą.</p></li>
    </ol>
    <p class="jkkyl">Inwestowanie wiąże się z ryzykiem, w tym z możliwością utraty części lub całości kapitału. Wartość inwestycji może spadać i rosnąć, a zwrot może być niższy niż wpłacona kwota. Nie należy inwestować środków, których utraty nie można sobie pozwolić.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Zacznij — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Najczęstsze pytania</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Co będzie potrzebne</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Adres e-mail, który faktycznie Państwo czytają.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Numer telefonu, by specjalista mógł się skontaktować.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Dokument tożsamości na późniejszą weryfikację.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Co się dzieje po wysłaniu formularza</h2>
    <h3>Rozmowa weryfikacyjna</h3>
    <p>Specjalista dzwoni, by potwierdzić przesłane dane, odpowiedzieć na pytania i ustalić rozsądną kwotę startową. Rozmowa to rozmowa, nie skrypt sprzedażowy: konto otwarte na nierealistycznych oczekiwaniach nikomu nie służy.</p>
    <h4>Ile to trwa</h4>
    <p>Zwykle jedna rozmowa od dziesięciu do piętnastu minut. Jeśli wolą Państwo konkretną godzinę, prosimy wpisać ją w formularzu — zostanie dotrzymana.</p>
    <h3>Weryfikacja tożsamości wyjaśniona</h3>
    <p>Przed pierwszą wpłatą poprosimy o dokument ze zdjęciem i aktualny dokument z adresem. Ten sam wymóg ma każda regulowana usługa finansowa — by wypłata mogła wrócić tylko do Państwa.</p>
    <h4>Co jest akceptowane</h4>
    <p>Paszport lub dowód osobisty oraz rachunek za media lub wyciąg bankowy z ostatnich trzech miesięcy. Wystarczy ostre zdjęcie z telefonu.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Otwórz konto</h2>
      <p class="pt6joj">Zacznij w kilka minut.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Zacznij teraz';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

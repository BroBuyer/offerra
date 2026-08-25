<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Înregistrare ' . SITE_NAME;
$page_description = 'Deschideți contul la ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Începeți acum</span>
    <h1>Deschideți contul</h1>
    <p class="kpnq92g">Câteva date pentru început, apoi un specialist preia de acolo. La acest pas nu se percepe nicio plată.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Ce urmează</h2>
    <ol class="nxlk2qu">
      <li><h3>Trimiteți formularul</h3><p>Durează câteva minute și nu costă nimic.</p></li>
      <li><h3>Un specialist sună</h3><p>Confirmă datele, răspunde la întrebări și explică pasul următor. Fără presiune să depuneți.</p></li>
      <li><h3>Vă verificați și alegeți o sumă</h3><p>Abia atunci se mișcă bani, și doar suma pe care o alegeți.</p></li>
    </ol>
    <p class="jkkyl">Investițiile implică riscuri, inclusiv posibila pierdere a unei părți sau a întregului capital investit. Valoarea investițiilor poate scădea sau crește, iar dumneavoastră puteți primi înapoi mai puțin decât ați depus. Nu ar trebui să investiți bani pe care nu vi-i puteți permite să-i pierdeți.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Începeți — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Întrebări frecvente</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>De ce aveți nevoie</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>O adresă de e-mail pe care o citiți cu adevărat.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un număr de telefon, ca un specialist să vă poată contacta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un act de identitate, pentru pasul de verificare de mai târziu.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Ce se întâmplă după ce trimiteți formularul</h2>
    <h3>Apelul de verificare</h3>
    <p>Un specialist sună pentru a confirma datele trimise, a răspunde la întrebări și a conveni o sumă de pornire rezonabilă pentru dumneavoastră. Apelul este o conversație, nu un script de vânzare: un cont deschis pe așteptări nerealiste nu ajută pe nimeni.</p>
    <h4>Cât durează</h4>
    <p>De obicei un apel de zece până la cincisprezece minute. Dacă preferați să fiți sunat la o oră anume, menționați-o în formular și ora este respectată.</p>
    <h3>Verificările de identitate, explicate</h3>
    <p>Înainte de prima depunere vi se va cere un act de identitate cu fotografie și un document recent care arată adresa. Este aceeași cerință pe care o are orice serviciu financiar reglementat — ca o retragere să se poată întoarce doar la dumneavoastră.</p>
    <h4>Ce se acceptă</h4>
    <p>Un pașaport sau o carte de identitate și o factură de utilități sau un extras bancar emis în ultimele trei luni. O fotografie clară făcută cu telefonul este suficientă.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Deschideți contul</h2>
      <p class="pt6joj">Începeți în câteva minute.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Începeți acum';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

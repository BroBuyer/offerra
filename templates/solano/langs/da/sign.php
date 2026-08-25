<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrering ' . SITE_NAME;
$page_description = 'Åbn din konto hos ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kom i gang nu</span>
    <h1>Åbn din konto</h1>
    <p class="kpnq92g">Et par oplysninger for at starte, og en specialist klarer resten. Der opkræves intet i dette trin.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hvad der sker derefter</h2>
    <ol class="nxlk2qu">
      <li><h3>Du sender formularen</h3><p>Tager et par minutter og koster intet.</p></li>
      <li><h3>En specialist ringer til dig</h3><p>Bekræfter dine oplysninger, besvarer spørgsmål og forklarer næste trin. Intet pres om at indbetale.</p></li>
      <li><h3>Du verificerer og vælger et beløb</h3><p>Først derefter flyttes penge, og kun det beløb du vælger.</p></li>
    </ol>
    <p class="jkkyl">Investering medfører risiko, herunder muligt tab af dele eller hele kapitalen. Værdien af investeringer kan stige eller falde, og du kan få mindre tilbage end du investerede. Invester ikke penge, du ikke har råd til at miste.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Ofte stillede spørgsmål</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hvad du har brug for</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>En e-mail du faktisk tjekker.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Et telefonnummer, så en specialist kan kontakte dig.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Et identitetsdokument til senere verificering.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hvad der sker efter du sender formularen</h2>
    <h3>Verificeringsopkaldet</h3>
    <p>En specialist ringer for at bekræfte de oplysninger, du sendte, besvare spørgsmål og aftale et rimeligt startbeløb med dig. Det er en samtale, ikke et salgsscript: en konto med urealistiske forventninger hjælper ingen.</p>
    <h4>Hvor lang tid det tager</h4>
    <p>Det er typisk et opkald på ti til femten minutter. Hvis du foretrækker et bestemt tidspunkt, angiv det i formularen, så respekteres det.</p>
    <h3>Identitetsverificering forklaret</h3>
    <p>Før første indbetaling bedes du om foto-id og nyligt adressebevis. Samme krav som for enhver reguleret finansiel tjeneste, så udbetaling kun kan gå tilbage til dig.</p>
    <h4>Hvad der accepteres</h4>
    <p>Pas eller sygesikringskort, og en regning eller kontoudtog fra de sidste tre måneder. Et skarpt mobilfoto er nok.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Åbn din konto</h2>
      <p class="pt6joj">Kom i gang på få minutter.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Kom i gang nu';
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

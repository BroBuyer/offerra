<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrering ' . SITE_NAME;
$page_description = 'Åpne kontoen din hos ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kom i gang nå</span>
    <h1>Åpne kontoen din</h1>
    <p class="kpnq92g">Et par opplysninger for at starte, og en spesialist klarer resten. Det belastes ingenting i dette trin.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hva som sker derefter</h2>
    <ol class="nxlk2qu">
      <li><h3>Du sender skjemaet</h3><p>Tar noen minutter og koster intet.</p></li>
      <li><h3>En spesialist ringer til deg</h3><p>Bekræfter opplysningene dine, svarer spørgsmål og forklarer neste trinn. Intet press om at indbetale.</p></li>
      <li><h3>Du bekrefter og velger et beløp</h3><p>Først da flyttes pengerr, og kun det beløp du vælger.</p></li>
    </ol>
    <p class="jkkyl">Investering innebærer risiko, herunder muligt tab af dele eller hele kapitalen. Værdien af investeringer kan stige eller falde, og du kan få mindre tilbage end du investerede. Invester ikke pengerr, du ikke har råd til at miste.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Ofte stilte spørsmål</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hva du har brug for</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>En e-post du faktisk sjekker.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Et telefonnummer, så en spesialist kan kontakte deg.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Et identitetsdokument til senere verifisering.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hva som sker efter du sender skjemaet</h2>
    <h3>Verifiseringsopkaldet</h3>
    <p>En spesialist ringer for at bekræfte de opplysninger, du sendte, svare spørgsmål og aftale et rimeligt startbeløp med deg. Det er en samtale, ikke et salgsscript: en konto med urealistiske forventninger hjelper ingen.</p>
    <h4>Hvor lang tid det tager</h4>
    <p>Det er typisk en samtale på ti til femten minutter. Hvis du foretrekker et bestemt tidspunkt, angiv det i skjemaet, så respekteres det.</p>
    <h3>Identitetsverifisering forklaret</h3>
    <p>Før første innskudd bedes du om foto-ID og nylig adressebekreftelse. Samme krav som for enhver regulert finansiel tjeneste, så utbetaling kun kan gå tilbake til deg.</p>
    <h4>Hva som accepteres</h4>
    <p>Pass eller nasjonalt ID-kort, og en regning eller kontoutskrift fra de sidste tre måneder. Et skarpt mobilbilde er nok.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Åpne kontoen din</h2>
      <p class="pt6joj">Kom i gang på få minutter.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Kom i gang nå';
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

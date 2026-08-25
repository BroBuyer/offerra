<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Reģistrācija ' . SITE_NAME;
$page_description = 'Atveriet kontu pie ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Sākt tagad</span>
    <h1>Atveriet kontu</h1>
    <p class="kpnq92g">Daži dati sākumā, tad to pārņem speciālists. Šajā solī maksājums netiek ņemts.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kas notiek tālāk</h2>
    <ol class="nxlk2qu">
      <li><h3>Nosūtāt formu</h3><p>Aizņem dažas minūtes un neko nemaksā.</p></li>
      <li><h3>Speciālists piezvana</h3><p>Apstiprina datus, atbild uz jautājumiem un izskaidro nākamo soli. Nekāda spiediena uz iemaksu.</p></li>
      <li><h3>Verificējaties un izvēlaties summu</h3><p>Tikai tad kustas nauda, un tikai summa, ko izvēlaties.</p></li>
    </ol>
    <p class="jkkyl">Ieguldīšana ietver risku, tostarp iespējamu daļas vai visa kapitāla zaudējumu. Ieguldījumu vērtība var kristies un celties, un jūs varat atgūt mazāk, nekā sākotnēji ieguldījāt. Nevajadzētu ieguldīt naudu, kuras zaudējumu nevarat atļauties.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Sākt — <?= e(money_min()) ?> no</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">BUJ</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kas jums būs nepieciešams</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>E-pasta adrese, kuru patiešām lasāt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tālruņa numurs, lai speciālists jūs sasniegtu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Personu apliecinošs dokuments vēlākai verifikācijai.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kas notiek pēc formas nosūtīšanas</h2>
    <h3>Verifikācijas zvans</h3>
    <p>Speciālists piezvana, apstiprina iesniegtos datus, atbild uz jautājumiem un vienojas par saprātīgu sākuma summu. Zvans ir saruna, ne pārdošanas skripts: konts, atvērts uz nereāliem gaidījumiem, nevienam neder.</p>
    <h4>Cik ilgi tas aizņem</h4>
    <p>Parasti viens zvans desmit līdz piecpadsmit minūtes. Ja vēlaties zvanu noteiktā laikā, norādiet to formā, un laiks tiks ievērots.</p>
    <h3>Identitātes pārbaudes izskaidrotas</h3>
    <p>Pirms pirmās iemaksas jums lūgs fotogrāfiju ar personas dokumentu un nesenu dokumentu ar adresi. Tā pati prasība ir katram regulētam finanšu pakalpojumam — lai izņemšana varētu atgriezties tikai jums.</p>
    <h4>Kas tiek pieņemts</h4>
    <p>Pase vai personas apliecība un komunālo pakalpojumu rēķins vai bankas izraksts pēdējo trīs mēnešu laikā. Pietiek ar skaidru foto no telefona.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Atveriet kontu</h2>
      <p class="pt6joj">Sāciet dažu minūšu laikā.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Sākt tagad';
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

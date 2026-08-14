<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registracija ' . SITE_NAME;
$page_description = 'Otvorite račun kod ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Započnite odmah</span>
    <h1>Otvorite račun</h1>
    <p class="kpnq92g">Nekoliko podataka za početak, a stručnjak brine o ostatku. U ovom koraku se ništa ne naplaćuje.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Što slijedi</h2>
    <ol class="nxlk2qu">
      <li><h3>Šaljete obrazac</h3><p>Traje nekoliko minuta i ništa ne košta.</p></li>
      <li><h3>Stručnjak vas zove</h3><p>Potvrđuje podatke, odgovara na pitanja i objašnjava sljedeći korak. Bez pritiska na uplatu.</p></li>
      <li><h3>Provjeravate i birate iznos</h3><p>Tek tada se premještaju novci, i samo u iznosu koji vi odaberete.</p></li>
    </ol>
    <p class="jkkyl">Ulaganje uključuje rizik, uključujući mogući gubitak dijela ili cijelog kapitala. Vrijednost ulaganja može rasti ili padati, i moguće je da vratite manje nego što ste uložili. Ne ulažite novac koji si ne možete priuštiti izgubiti.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Započnite — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Često postavljana pitanja</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Što vam treba</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>E-pošta koju stvarno provjeravate.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Telefon, kako bi vas stručnjak mogao kontaktirati.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identifikacijski dokument za kasniju provjeru.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Što se događa nakon slanja obrasca</h2>
    <h3>Provjerni poziv</h3>
    <p>Stručnjak zove kako bi potvrdio podatke koje ste poslali, odgovorio na pitanja i dogovorio razuman početni iznos. To je razgovor, ne prodajni scenarij: račun otvoren s nerealnim očekivanjima ne služi nikome.</p>
    <h4>Koliko traje</h4>
    <p>Obično je poziv od deset do petnaest minuta. Ako preferirate određeno vrijeme, navedite u obrascu i poštovat će se.</p>
    <h3>Provjera identiteta, objašnjeno</h3>
    <p>Prije prve uplate tražit će se identifikacijski dokument s fotografijom i nedavni dokaz o adresi. Isti je zahtjev kao kod svake regulirane financijske usluge i postoji kako bi isplata mogla ići samo vama.</p>
    <h4>Što se prihvaća</h4>
    <p>Putovnica ili osobna iskaznica te račun ili bankovni izvod iz posljednja tri mjeseca. Dovoljna je jasna fotografija snimljena mobitelom.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Otvorite račun</h2>
      <p class="pt6joj">Započnite u nekoliko minuta.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Započnite sada';
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

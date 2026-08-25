<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakti ' . SITE_NAME . ' ᐉ Mēs esam šeit, lai palīdzētu';
$page_description = 'Vai jums ir jautājums par ' . SITE_NAME . ' vai jūsu kontu?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kontakti</span>
    <h1>Mēs esam šeit, lai palīdzētu</h1>
    <p class="kpnq92g">Vai jums ir jautājums par <?= e(SITE_NAME) ?> vai jūsu kontu? Atbalsta komanda labprāt palīdzēs. Rakstiet mums, un atbildēsim, cik ātri iespējams.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Pirms rakstāt mums</h2>
    <p>Lielākajai daļai jautājumu jau ir atbilde vietnē, un pārbaudīt vispirms parasti ir ātrāk nekā gaidīt atbildi.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">BUJ</a> — izmaksas, izņemšanas, verifikācija un minimālās summas.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Kā tas darbojas</a> — kas notiek pēc reģistrācijas, soli pa solim.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Cenas</a> — kas ir bezmaksas un kur var rasties izmaksas.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Sākt — <?= e(money_min()) ?> no</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kā ar mums sazināties</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanāls</th><th scope="col">Labākais priekš</th><th scope="col">Atbilde</th></tr></thead>
      <tbody>
        <tr><td>E-pasta atbalsts — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Jautājumi par kontu, verifikācija, izņemšanas</td><td>Parasti atbildam vienas darba dienas laikā.</td></tr>
        <tr><td>Pieprasījums pēc atzvana</td><td>Viss, ko vieglāk izskaidrot pa tālruni</td><td>Atbalsta stundas: pirmdiena līdz piektdiena, 9:00–18:00</td></tr>
        <tr><td>Ziņojums par ļaunprātīgu izmantošanu — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Uzdošanās par mums, zīmola ļaunprātīga izmantošana, aizdomīgi ziņojumi</td><td>Izskatīts pēc saņemšanas</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Ko gaidīt, kad sazināties</h2>
    <h3>Kurš kanāls jāizmanto</h3>
    <p>E-pasts ir pareizā izvēle visam ar pielikumu: identitātes pārbaudes, jautājumi par izņemšanu, jautājumi par izrakstu. Atzvana forma ir pārējam, jo lielākā daļa jautājumu par kontu atrisinās ātrāk divās sarunas minūtēs nekā četros ziņojumos.</p>
    <h4>Ārpus atbalsta stundām</h4>
    <p>Ziņojumi vakarā vai nedēļas nogalē paliek rindā un tiek atbildēti nākamajā darba dienā, secībā, kādā ienāca.</p>
    <h3>Detaļas, ko vērts iekļaut</h3>
    <p>Reģistrētais e-pasts un aptuvenais datums pietiek, lai atrastu kontu. Nekad nesūtiet paroli, pilnu kartes numuru vai vienreizējo kodu: neviens no komandas to nejautās.</p>
    <h4>Ja kaut kas neizskatās pareizi</h4>
    <p>Ziņojiet tajā pašā dienā. Viss, kas saistīts ar maksājumu, kuru neatpazīstat, tiek risināts nekavējoties, ārpus parastās rindas.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

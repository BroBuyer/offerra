<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Obrnite se na ' . SITE_NAME . ' ᐉ Tukaj smo, da vam pomagamo';
$page_description = 'Imate vprašanje o ' . SITE_NAME . ' ali vašem računu?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/KontaktPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Stik </span>
    <h1>Tukaj smo, da pomagamo</h1>
    <p class="kpnq92g">Imate vprašanje o <?= e(SITE_NAME) ?> ali vašem računu? Naša ekipa za podporo vam bo z veseljem pomagala. Pišite nam in odgovorili vam bomo v najkrajšem možnem času.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Preden nam pišete</h2>
    <p>Večina vprašanj že ima odgovor na spletnem mestu in prvo preverjanje je običajno hitrejše od čakanja na odgovor.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Pogosta vprašanja</a>— stroški, dvigi, preverjanje in minimalni zneski.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Kako deluje</a>— kaj se zgodi po vaši registraciji, korak za korakom.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Cene</a>— kaj je brezplačno in kje se lahko pojavijo stroški.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začetek — <?= e(money_min()) ?> od</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kako nas kontaktirati</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanal</th><th scope="col">Najboljše za</th><th scope="col">Odziv</th></tr></thead>
      <tbody>
        <tr><td>Podpora po e-pošti —<a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Vprašanja o računu, preverjanje, dvigi</td><td>Običajno odgovorimo v enem delovnem dnevu.</td></tr>
        <tr><td>Zahteva za povratni klic</td><td>Vse, kar je lažje razložiti po telefonu</td><td>Ure podpore: od ponedeljka do petka, 9.00–18.00</td></tr>
        <tr><td>Prijava zlorabe —<a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Lažno predstavljanje, zloraba blagovne znamke, sumljiva sporočila</td><td>Pregledano ob prejemu</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kaj pričakovati, ko stopite v stik</h2>
    <h3>Kateri kanal uporabiti</h3>
    <p>E-pošta je prava izbira za vse, kar ima prilogo: preverjanje identitete, poizvedbe o umiku, vprašanja o izjavi. Obrazec za povratni klic je za vse ostalo, saj se večina vprašanj o računu reši hitreje v dveh minutah pogovora kot v štirih sporočilih.</p>
    <h4>Izven ur podpore</h4>
    <p>Sporočila, poslana zvečer ali ob koncu tedna, ostanejo v čakalni vrsti in nanje odgovorijo prvi naslednji delovni dan, po vrstnem redu, kot so prispela.</p>
    <h3>Podrobnosti, ki jih je vredno vključiti</h3>
    <p>Registriran e-poštni naslov in približen datum tega, kar sprašujete, sta dovolj za iskanje računa. Nikoli ne pošiljajte gesla, celotne številke kartice ali enkratne kode: noben član naše ekipe vas ne bo nikoli vprašal za to.</p>
    <h4>Če nekaj ne izgleda v redu</h4>
    <p>Sporoči še isti dan. Vse, kar vključuje plačilo, ki ga ne poznate, se obravnava takoj, brez čakanja v običajni čakalni vrsti.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

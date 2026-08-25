<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Ovdje smo da vam pomognemo';
$page_description = 'Imate li pitanja o ' . SITE_NAME . ' ili vašem računu?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contacto</span>
    <h1>Ovdje smo da vam pomognemo</h1>
    <p class="kpnq92g">Imate li pitanja o <?= e(SITE_NAME) ?> ili vašem računu? Naš tim podrške rado će vam pomoći. Pišite nam i odgovorit ćemo što je prije moguće.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Prije nego što nam pišete</h2>
    <p>Većina pitanja već ima odgovor na stranici, a provjera prije obično je brža od čekanja odgovora.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Često postavljana pitanja</a> — troškovi, isplate, provjera i minimalni iznosi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Kako funkcionira</a> — što se događa nakon registracije, korak po korak.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Cijene</a> — što je besplatno i gdje se može pojaviti trošak.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Započnite — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kako nas kontaktirati</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>Podrška putem e-pošte — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Pitanja o računu, provjeri, isplatama</td><td>Obično odgovaramo u roku od jednog radnog dana.</td></tr>
        <tr><td>Callback request</td><td>Sve što je lakše objasniti razgovorom</td><td>Radno vrijeme podrške: ponedjeljak–petak, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/denunciar-abuso</a></td><td>Krađa identiteta, zlouporaba brenda, sumnjive poruke</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Što očekivati kad nas kontaktirate</h2>
    <h3>Koji kanal koristiti</h3>
    <p>E-pošta je prikladna za sve s prilogom: provjere identiteta, upite o isplatama, sumnje o izvodu. Obrazac za povratni poziv služi za sve ostalo, jer se većina pitanja o računu brže rješava u dva minuta razgovora nego u četiri poruke.</p>
    <h4>Izvan radnog vremena</h4>
    <p>Poruke poslane navečer ili tijekom vikenda stavljaju se u red i odgovaraju se rano sljedeći radni dan, redoslijedom dolaska.</p>
    <h3>Podaci koje je dobro uključiti</h3>
    <p>Registrirana e-pošta i približan datum upita dovoljni su za pronalaženje računa. Nikada ne šaljite lozinku, puni broj kartice ni jednokratni kod: nitko iz našeg tima to nikada neće tražiti.</p>
    <h4>Ako nešto ne izgleda ispravno</h4>
    <p>Prijavite isti dan. Svaka situacija vezana uz plaćanje koje ne prepoznajete rješava se odmah, bez uobičajenog reda čekanja.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

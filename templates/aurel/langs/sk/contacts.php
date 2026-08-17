<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Sme tu, aby sme pomohli';
$page_description = 'Máte otázku k ' . SITE_NAME . ' alebo k vášmu účtu?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kontakt</span>
    <h1>Sme tu, aby sme pomohli</h1>
    <p class="kpnq92g">Máte otázku k <?= e(SITE_NAME) ?> alebo k účtu? Tím podpory rád pomôže. Napíšte nám a odpovieme, hneď ako to pôjde.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kým nám napíšete</h2>
    <p>Väčšina otázok už má odpoveď na webe a overiť to najprv je zvyčajne rýchlejšie ako čakať na odpoveď.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Časté otázky</a> — náklady, výbery, overenie a minimálne sumy.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Ako to funguje</a> — čo sa stane po registrácii, krok za krokom.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Ceny</a> — čo je zadarmo a kde sa môže objaviť náklad.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začať — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ako nás kontaktovať</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanál</th><th scope="col">Najlepšie pre</th><th scope="col">Odozva</th></tr></thead>
      <tbody>
        <tr><td>E-mailová podpora — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Otázky k účtu, overenie, výbery</td><td>Zvyčajne odpovieme do jedného pracovného dňa.</td></tr>
        <tr><td>Žiadosť o spätný hovor</td><td>Čokoľvek, čo sa lepšie vysvetlí telefónom</td><td>Hodiny podpory: pondelok až piatok, 9:00–18:00</td></tr>
        <tr><td>Hlásenie zneužitia — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Vydávanie sa za nás, zneužitie značky, podozrivé správy</td><td>Posúdené po prijatí</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Čo čakať, keď sa ozvete</h2>
    <h3>Ktorý kanál použiť</h3>
    <p>E-mail je správna voľba pre čokoľvek s prílohou: overenie identity, otázky k výberu, otázky k výpisu. Formulár na spätný hovor je na zvyšok, pretože väčšina otázok k účtu sa vyrieši rýchlejšie v dvoch minútach hovoru ako v štyroch správach.</p>
    <h4>Mimo hodín podpory</h4>
    <p>Správy večer alebo cez víkend ostanú vo fronte a odpovieme na ne hneď nasledujúci pracovný deň, v poradí, v akom prišli.</p>
    <h3>Podrobnosti, ktoré stoja za to uviesť</h3>
    <p>Registrovaný e-mail a približný dátum stačia na nájdenie účtu. Nikdy neposielajte heslo, celé číslo karty ani jednorazový kód: nikto z tímu vás o to nepožiada.</p>
    <h4>Ak niečo nevyzerá v poriadku</h4>
    <p>Nahláste to v ten istý deň. Čokoľvek s platbou, ktorú nespoznávate, riešime ihneď, mimo bežnej fronty.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

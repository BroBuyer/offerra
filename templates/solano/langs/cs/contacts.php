<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Jsme tu, abychom pomohli';
$page_description = 'Máte otázku k ' . SITE_NAME . ' nebo k vašemu účtu?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kontakt</span>
    <h1>Jsme tu, abychom pomohli</h1>
    <p class="kpnq92g">Máte otázku k <?= e(SITE_NAME) ?> nebo k účtu? Tým podpory rád pomůže. Napište nám a odpovíme, jakmile to půjde.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Než nám napíšete</h2>
    <p>Většina otázek už má odpověď na webu a ověřit to nejdřív je obvykle rychlejší než čekat na odpověď.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Časté dotazy</a> — náklady, výběry, ověření a minimální částky.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Jak to funguje</a> — co se stane po registraci, krok za krokem.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Ceny</a> — co je zdarma a kde se může objevit náklad.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začít — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Jak nás kontaktovat</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanál</th><th scope="col">Nejlepší pro</th><th scope="col">Odezva</th></tr></thead>
      <tbody>
        <tr><td>E-mailová podpora — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Otázky k účtu, ověření, výběry</td><td>Obvykle odpovíme do jednoho pracovního dne.</td></tr>
        <tr><td>Žádost o zpětný hovor</td><td>Cokoli, co se lépe vysvětlí telefonem</td><td>Hodiny podpory: pondělí až pátek, 9:00–18:00</td></tr>
        <tr><td>Hlášení zneužití — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Vydávání se za nás, zneužití značky, podezřelé zprávy</td><td>Posouzeno po přijetí</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Co čekat, když se ozvete</h2>
    <h3>Který kanál použít</h3>
    <p>E-mail je správná volba pro cokoli s přílohou: ověření identity, dotazy k výběru, otázky k výpisu. Formulář na zpětný hovor je na zbytek, protože většina otázek k účtu se vyřeší rychleji ve dvou minutách hovoru než ve čtyřech zprávách.</p>
    <h4>Mimo hodiny podpory</h4>
    <p>Zprávy večer nebo o víkendu zůstanou ve frontě a odpovíme na ně hned následující pracovní den, v pořadí, v jakém přišly.</p>
    <h3>Podrobnosti, které stojí za to uvést</h3>
    <p>Registrovaný e-mail a přibližné datum stačí k nalezení účtu. Nikdy neposílejte heslo, celé číslo karty ani jednorázový kód: nikdo z týmu vás o to nepožádá.</p>
    <h4>Pokud něco nevypadá v pořádku</h4>
    <p>Nahlaste to tentýž den. Cokoli s platbou, kterou nepoznáváte, řešíme ihned, mimo běžnou frontu.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Proč my ' . SITE_NAME;
$page_description = 'Proč lidé začínají s ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Proč tato platforma</span>
    <h1>Proč lidé začínají tady</h1>
    <p class="kpnq92g">Žádný prodejní pitch: konkrétní, ověřitelné důvody — i to, co nesedí každému.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Žádné tabulky. Žádné zahlcené obrazovky. Žádné pochybnosti na poslední chvíli</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Tradiční broker</th><th scope="col">Obchodování na vlastní pěst</th></tr></thead>
      <tbody>
        <tr><td>Provádění pokynů AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">omezené hodiny</td><td style="color:var(--muted)">ručně</td></tr>
        <tr><td>Pokrytí 24/7 na všech trzích</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papírování</td><td style="color:var(--muted)">Sami</td></tr>
        <tr><td>Směrování pokynů pod sekundu</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">jen podle tarifu</td><td style="color:var(--muted)">ručně</td></tr>
        <tr><td>Více měn v reportech</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">omezené hodiny</td><td style="color:var(--muted)">Sami</td></tr>
        <tr><td>Otevření účtu bez papírů</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papírování</td><td style="color:var(--muted)">ručně</td></tr>
        <tr><td>Arbitráž mezi burzami</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">jen podle tarifu</td><td style="color:var(--muted)">Sami</td></tr>
        <tr><td>Vyhrazený osobní manažer</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">omezené hodiny</td><td style="color:var(--muted)">ručně</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Co získáte, co si-udělej-sám nastavení nedá</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Provádění pod sekundu na každém připojeném trhu.</b> <?= e(SITE_NAME) ?> udržuje trvalá API spojení s nízkou latencí ke každé podporované burze. Když model vygeneruje signál, pokyn je odeslán, vyplněn a zapsán na panelu ještě před dalším tikem.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Běží 24/7, v každé tržní seanci.</b> Krypto nespí a <?= e(SITE_NAME) ?> také ne. Engine analyzuje páry i o víkendech a svátcích, aby příležitost neunikla.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Více měn v reportech.</b> Každý zůstatek, každý obchod i výběr je v místní měně. Žádné skryté kroky konverze.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Oddělený kapitál.</b> Vaše prostředky zůstávají na vašem účtu. <?= e(SITE_NAME) ?> je nikdy nedrží: engine má jen oprávnění odesílat pokyny.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Zabezpečení na úrovni bank.</b> Šifrování TLS napříč platformou, dvoufázové ověření ve výchozím nastavení a čtvrtletní audity infrastruktury třetí stranou. Potvrzení obchodů na chainu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Tři třídy aktiv, jedna platforma.</b> Většina retailových platforem vás omezí na jeden trh. <?= e(SITE_NAME) ?> obchoduje kryptoměny, kótované akcie i hlavní měnové páry ze stejného panelu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Přednastavené limity rizika na každé pozici.</b> Stop-loss, maximální přijatelná ztráta a stropy alokace kapitálu se nastavují podle třídy aktiv. Engine automaticky uzavře obchod, který překročí práh, a událost se zapíše do auditní historie.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Pro koho to pravděpodobně není</h2>
    <p>Přímost šetří čas. Pokud vás popisuje něco z následujícího, jiná cesta bude lepší.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Chcete garantované výnosy. Žádná poctivá platforma je nenabízí a my také ne.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Chcete investovat peníze, bez kterých se neobejdete.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Obchodujete v profesionálním objemu s vlastní exekuční infrastrukturou.</span></li>
    </ul>
    <p class="jkkyl">Investování nese riziko, včetně možné ztráty části nebo veškerého kapitálu. Hodnota investic může klesat i stoupat a můžete získat zpět méně, než jste vložili. Neměli byste investovat peníze, jejichž ztrátu si nemůžete dovolit.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začít — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

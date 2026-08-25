<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hvorfor os ' . SITE_NAME;
$page_description = 'Hvorfor folk vælger at starte med ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Hvorfor denne platform</span>
    <h1>Hvorfor folk vælger at starte her</h1>
    <p class="kpnq92g">Ikke salgstale: konkrete, verificerbare grunde — og også de dele, der ikke passer til alle.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Ingen regneark. Ingen skærme. Ingen sidste-øjebliks tvivl</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Traditionel mægler</th><th scope="col">Handle selv</th></tr></thead>
      <tbody>
        <tr><td>Ordreudførelse med AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">begrænset åbningstid</td><td style="color:var(--muted)">manuel</td></tr>
        <tr><td>24/7 overvågning på alle markeder</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papirarbejde</td><td style="color:var(--muted)">På egen hånd</td></tr>
        <tr><td>Ordre-routing på under et sekund</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">kun efter niveau</td><td style="color:var(--muted)">manuel</td></tr>
        <tr><td>Rapporter i flere valutaer</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">begrænset åbningstid</td><td style="color:var(--muted)">På egen hånd</td></tr>
        <tr><td>Kontooprettelse uden papirarbejde</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papirarbejde</td><td style="color:var(--muted)">manuel</td></tr>
        <tr><td>Arbitrage mellem børser</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">kun efter niveau</td><td style="color:var(--muted)">På egen hånd</td></tr>
        <tr><td>Tildelt personlig manager</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">begrænset åbningstid</td><td style="color:var(--muted)">manuel</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hvad du får, og selv at handle ikke giver dig</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Eksekvering på under et sekund på hvert tilsluttet marked.</b> <?= e(SITE_NAME) ?> opretholder permanente lav-latens API-forbindelser til hver understøttet børs. Når modellen genererer et signal, sendes ordren, udføres og registreres i dit dashboard før næste tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Fungerer 24/7 i hver markedssession.</b> Kryptovaluta hviler aldrig, og <?= e(SITE_NAME) ?> heller ikke. Motoren fortsætter med at analysere par i weekender og på helligdage, så du aldrig misser en mulighed.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Rapporter i flere valutaer.</b> Hver saldo, hver handel og hver udbetaling vises i din lokale valuta. Ingen skjulte konverteringstrin på noget tidspunkt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Adskilt kapital.</b> Dine midler forbliver på din egen konto. <?= e(SITE_NAME) ?> opbevarer dem aldrig: motoren har kun tilladelse til at sende ordrer.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Sikkerhed på bankniveau.</b> TLS-kryptering på hele platformen, totrinsbekræftelse som standard og kvartalsvise infrastruktur-revisioner af tredjeparter. Handelskvitteringer registreret på blockchain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Tre aktivklasser, én platform.</b> De fleste retail-platforme begrænser dig til ét marked. <?= e(SITE_NAME) ?> handler kryptovaluta, børsnoterede aktier og de vigtigste valutapar fra samme dashboard.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Foruddefinerede risikogrænser for hver position.</b> Stop-loss, maksimalt tilladt tab og kapitalallokeringslofter konfigureres pr. aktivklasse. Motoren lukker automatisk enhver handel, der overskrider en grænse, og hændelsen registreres i din auditlog.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Hvem det sandsynligvis ikke er for</h2>
    <p>At sige det tydeligt sparer alle tid. Hvis et af disse punkter beskriver dig, passer en anden vej bedre.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Du har brug for garanteret afkast. Ingen ærlig platform tilbyder det, og det gør vi heller ikke.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Du vil investere penge, du ikke har råd til at miste.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Du handler i professionelt volumen med egen eksekveringsinfrastruktur.</span></li>
    </ul>
    <p class="jkkyl">Investering medfører risiko, herunder muligt tab af dele eller hele kapitalen. Værdien af investeringer kan stige eller falde, og du kan få mindre tilbage end du investerede. Invester ikke penge, du ikke har råd til at miste.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

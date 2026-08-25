<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Neden biz ' . SITE_NAME;
$page_description = 'İnsanlar neden ' . SITE_NAME . ' ile başlıyor';
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Neden bu platform</span>
    <h1>İnsanlar neden burada başlıyor</h1>
    <p class="kpnq92g">Satış konuşması değil: somut, kontrol edilebilir nedenler — ve herkese uymayacak kısımlar.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Tablo yok. Kalabalık ekran yok. Son dakika şüphesi yok</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Geleneksel aracı kurum</th><th scope="col">Kendi başınıza işlem</th></tr></thead>
      <tbody>
        <tr><td>YZ emir yürütmesi</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">sınırlı saatler</td><td style="color:var(--muted)">elle</td></tr>
        <tr><td>Tüm piyasalarda 7/24 kapsama</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">evrak işi</td><td style="color:var(--muted)">Kendiniz yapın</td></tr>
        <tr><td>Saniyenin altında emir yönlendirme</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">yalnızca tarife göre</td><td style="color:var(--muted)">elle</td></tr>
        <tr><td>Çoklu para biriminde raporlama</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">sınırlı saatler</td><td style="color:var(--muted)">Kendiniz yapın</td></tr>
        <tr><td>Kâğıtsız hesap açılışı</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">evrak işi</td><td style="color:var(--muted)">elle</td></tr>
        <tr><td>Borsalar arası arbitraj</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">yalnızca tarife göre</td><td style="color:var(--muted)">Kendiniz yapın</td></tr>
        <tr><td>Özel kişisel yönetici</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">sınırlı saatler</td><td style="color:var(--muted)">elle</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kendin-yap bir kurulumun vermediğini burada ne alırsınız</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Bağlı her piyasada saniyenin altında yürütme.</b> <?= e(SITE_NAME) ?> desteklenen her borsayla kalıcı, düşük gecikmeli API bağlantıları tutar. Model sinyal ürettiğinde emir bir sonraki tick’ten önce gönderilir, gerçekleşir ve panelinize kaydedilir.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Her piyasa seansında 7/24 çalışır.</b> Kripto durmaz, <?= e(SITE_NAME) ?> da durmaz. Motor, bir fırsatın kaçmaması için hafta sonları ve tatillerde de çiftleri analiz etmeye devam eder.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Çoklu para biriminde raporlama.</b> Her bakiye, her işlem ve her çekim yerel para biriminizde gösterilir. Hiçbir noktada gizli dönüşüm adımı yoktur.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Ayrılmış sermaye.</b> Fonlarınız kendi hesabınızda kalır. <?= e(SITE_NAME) ?> bunları asla tutmaz: motorun yalnızca emir gönderme izni vardır.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Banka düzeyinde güvenlik.</b> Platform genelinde TLS şifreleme, varsayılan iki adımlı doğrulama ve üç aylık üçüncü taraf altyapı denetimleri. İşlem makbuzları zincir üzerinde kaydedilir.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Üç varlık sınıfı, bir platform.</b> Çoğu bireysel platform sizi tek bir piyasayla sınırlar. <?= e(SITE_NAME) ?> aynı panelden kripto paralar, borsada işlem gören hisseler ve başlıca döviz çiftleriyle işlem yapar.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Her pozisyonda önceden ayarlanmış risk limitleri.</b> Stop-loss, kabul edilen maksimum zarar ve sermaye tahsis tavanları varlık sınıfına göre ayarlanır. Motor eşiği aşan her işlemi otomatik kapatır ve olay denetim geçmişinize kaydedilir.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Bu muhtemelen kime göre değil</h2>
    <p>Açık olmak herkesin zamanını kazandırır. Aşağıdakilerden herhangi biri sizi tanımlıyorsa farklı bir yol daha uygun olur.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Garantili getiri istiyorsunuz. Hiçbir dürüst platform bunları sunmaz, biz de sunmayız.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Olmadan edemeyeceğiniz parayı yatırmak istiyorsunuz.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kendi yürütme altyapınızla profesyonel hacimde işlem yapıyorsunuz.</span></li>
    </ul>
    <p class="jkkyl">Yatırım, yatırdığınız sermayenin bir kısmının veya tamamının kaybı olasılığı dahil risk içerir. Yatırımların değeri düşebilir veya yükselebilir ve başlangıçta koyduğunuzdan daha azını geri alabilirsiniz. Kaybetmeyi göze alamayacağınız parayı yatırmamalısınız.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Başlayın — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

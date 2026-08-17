<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Blog ' . SITE_NAME;
$page_description = 'Kurallarda neler değişiyor ve sizin için ne anlama geliyor — ' . SITE_NAME;
$page_canonical = page_url("blog.php");
$active_page = "blog";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="vd7z9k">Notlar</span>
    <h1>Kurallarda neler değişiyor ve sizin için ne anlama geliyor</h1>
    <p class="kpnq92g">Piyasanızdaki bireysel yatırımcıları etkileyen kurallar üzerine kısa, pratik yazılar: hukuki jargon yok, abartı yok.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <ul class="cngnn7" itemscope itemtype="https://schema.org/Blog">
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-1" itemprop="url"><?= e(SITE_NAME) ?> 2026 incelemesi: yeni kripto kuralları bireysel yatırımcılar için ne anlama geliyor</a></h2>
        <p itemprop="description">Düzenleyici, kripto hizmetlerinin bireysel müşterilere nasıl sunulduğunu sıkılaştırıyor. İşte sade hali ve önemli tarihler.</p>
        <a class="hwtx8q" href="/blog-1">Notu okuyun →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-2" itemprop="url">Yatırım yapmadan önce bir yatırım platformunu nasıl değerlendirirsiniz</a></h2>
        <p itemprop="description">On dakika süren ve herhangi bir inceleme sitesinden daha fazlasını söyleyen beş kontrol.</p>
        <a class="hwtx8q" href="/blog-2">Notu okuyun →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-3" itemprop="url">Piyasanızda <?= e(SITE_NAME) ?> ile ilk yatırımınızın düşündüğünüzden küçük olması neden gerekir</a></h2>
        <p itemprop="description">Bir platformun nasıl davrandığını öğrenmenin en ucuz yolu, ona çalışacak çok az şey vermektir.</p>
        <a class="hwtx8q" href="/blog-3">Notu okuyun →</a>
      </li>
    </ul>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Başlayın — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">SSS</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Sonraki notlar nasıl okunur</h2>
    <h3>Yeni başlayanlar için yazıldı</h3>
    <p>Buradaki her not, piyasalarda önceden eğitiminiz olmadığını varsayar. Bir terimden kaçınılamıyorsa ilk geçtiği yerde açıklanır; bir kural ülkeye göre değişiyorsa atlanmaz, belirtilir.</p>
    <h4>Ne bulamazsınız</h4>
    <p>Fiyat tahmini yok, sinyal yok. Garantili getiri olarak sunulan her şey bu sektördeki en net uyarı işaretidir ve bir tane daha eklemeyeceğiz.</p>
    <h3>Bu ne sıklıkla güncellenir</h3>
    <p>Notlar, dayanak kurallar değiştiğinde gözden geçirilir: yeni bir düzenleme, yeni bir raporlama yükümlülüğü, yatırımların ele alınışında bir değişiklik. Her nottaki tarih son inceleme tarihidir, ilk yazıldığı tarih değil.</p>
    <h4>Konu önerin</h4>
    <p>Notların yanıtlamadığı bir soru varsa iletişim sayfasından gönderin; tekrarlayan sorular genellikle sonraki not olur.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

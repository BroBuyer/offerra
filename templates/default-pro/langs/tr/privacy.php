<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gizlilik Politikasi');
$page_description = 'Learn how ' . SITE_NAME . ' collects, uses, and protects your personal data.'faq.php'privacy.php'faq'privacy'/includes/head.php'/includes/head.php'/includes/header.php'/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Gizlilik Politikasi</h1>
      <p class="lead">Son guncelleme: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Bu Gizlilik Politikasi, <?= e(SITE_NAME) ?> ("biz") tarafindan web sitemiz ve hizmetlerimiz kullanilirken kisisel verilerin nasil toplandigini ve islendigini aciklar.</p>

      <h2>Hangi bilgileri topluyoruz</h2>
      <p>Su verileri toplayabiliriz: ad, e-posta adresi, telefon numarasi, ikamet ulkesi, IP adresi ve formlar veya destek talepleri araciligiyla bize ilettiginiz bilgiler.</p>

      <h2>Bilgilerinizi nasil kullaniyoruz</h2>
      <ul>
        <li>Hesabinizi olusturmak ve yonetmek icin</li>
        <li>Islem platformuna erisim ve musteri destegi saglamak icin</li>
        <li>Yasal ve duzenleyici yukumlulukleri yerine getirmek icin</li>
        <li>Hizmetlerimizi gelistirmek ve dolandiriciligi onlemek icin</li>
      </ul>

      <h2>Veri guvenligi</h2>
      <p>Verilerinizi korumak icin SSL sifreleme ve erisim yonetimi dahil teknik ve organizasyonel onlemler uyguluyoruz.</p>

      <h2>Haklariniz</h2>
      <p>Bulundugunuz yargi alanina bagli olarak kisisel verilerinize erisim, duzeltme veya silme haklarina sahip olabilirsiniz. Bu haklari kullanmak icin <?= e(SUPPORT_EMAIL) ?> adresiyle iletisime gecin.</p>

      <h2>Iletisim</h2>
      <p>Bu politika hakkinda sorulariniz varsa bize su adresten ulasin: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

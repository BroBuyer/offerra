<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gizlilik Politikası');
$page_description = ' ' . SITE_NAME . ' kişisel verilerinizi nasıl topladığını, kullandığını ve koruduğunu öğrenin.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Gizlilik Politikası</h1>
      <p class="lead">Son güncelleme: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Bu Gizlilik Politikası, <?= e(SITE_NAME) ?> ("biz") web sitemizi ve hizmetlerimizi kullandığınızda kişisel bilgileri nasıl topladığını ve işlediğini açıklar.</p>

      <h2>Topladığımız bilgiler</h2>
      <p>Toplayabileceğimiz bilgiler: ad, e-posta adresi, telefon numarası, ikamet ülkesi, IP adresi ve formlar veya destek talepleri aracılığıyla sağladığınız bilgiler.</p>

      <h2>Bilgilerinizi nasıl kullanıyoruz</h2>
      <ul>
        <li>Hesabınızı oluşturmak ve yönetmek için</li>
        <li>İşlem platformu erişimi ve müşteri desteği sağlamak için</li>
        <li>Yasal ve düzenleyici yükümlülüklere uymak için</li>
        <li>Hizmetlerimizi iyileştirmek ve dolandırıcılığı önlemek için</li>
      </ul>

      <h2>Veri güvenliği</h2>
      <p>Verilerinizi korumak için SSL şifreleme ve erişim kontrolleri dahil teknik ve organizasyonel önlemler uyguluyoruz.</p>

      <h2>Haklarınız</h2>
      <p>Yargı alanınıza bağlı olarak kişisel verilerinize erişme, düzeltme veya silme haklarına sahip olabilirsiniz. Bu hakları kullanmak için <?= e(SUPPORT_EMAIL) ?> ile iletişime geçin.</p>

      <h2>İletişim</h2>
      <p>Bu politika hakkında sorularınız mı var? E-posta gönderin: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

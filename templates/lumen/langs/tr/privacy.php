<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gizlilik Politikası');
$page_description = SITE_NAME . ' kişisel verilerinizi nasıl toplar, kullanır ve korur öğrenin.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Gizlilik Politikası</h1>
      <p class="lead">Son güncelleme: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Bu Gizlilik Politikası, web sitemizi ve hizmetlerimizi kullandığınızda <?= e(SITE_NAME) ?> („biz”) kişisel bilgileri nasıl topladığını ve işlediğini açıklar.</p>

      <h2>Topladığımız bilgiler</h2>
      <p>Şunları toplayabiliriz: ad, e-posta adresi, telefon numarası, ikamet ülkesi, IP adresi ve formlar veya destek talepleri aracılığıyla sağladığınız bilgiler.</p>

      <h2>Bilgilerinizi nasıl kullanırız</h2>
      <ul>
        <li>Hesabınızı oluşturmak ve yönetmek için</li>
        <li>İşlem platformuna erişim ve müşteri desteği sağlamak için</li>
        <li>Yasal ve düzenleyici yükümlülüklere uymak için</li>
        <li>Hizmetlerimizi iyileştirmek ve dolandırıcılığı önlemek için</li>
      </ul>

      <h2>Veri güvenliği</h2>
      <p>Verilerinizi korumak için SSL şifreleme ve erişim kontrolleri dahil teknik ve organizasyonel önlemler uygularız.</p>

      <h2>Haklarınız</h2>
      <p>Yargı bölgenize bağlı olarak kişisel verilerinize erişme, düzeltme veya silme haklarınız olabilir. Bu hakları kullanmak için <?= e(SUPPORT_EMAIL) ?> ile iletişime geçin.</p>

      <h2>İletişim</h2>
      <p>Bu politika hakkında sorularınız mı var? <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a> adresine yazın</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

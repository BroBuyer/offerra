<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kullanım Koşulları');
$page_description = SITE_NAME . ' sitesi ve platformunun kullanımına ilişkin şartları ve koşulları okuyun.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Kullanım Koşulları</h1>
      <p class="lead">Son güncelleme: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p><?= e(SITE_NAME) ?>'a erişerek bu Kullanım Koşullarını kabul etmiş olursunuz. Kabul etmiyorsanız hizmetlerimizi kullanmamanızı rica ederiz.</p>

      <h2>Uygunluk</h2>
      <p>En az 18 yaşında olmalı ve yargı bölgenizde finansal araçlarla işlem yapmak için yasal olarak yetkili olmalısınız.</p>

      <h2>Risk uyarısı</h2>
      <p>Kripto para, forex, CFD ve diğer finansal araçlarla işlem yapmak önemli kayıp riski taşır. Geçmiş performans gelecekteki sonuçları garanti etmez. Yalnızca kaybetmeyi göze alabileceğiniz sermaye ile işlem yapın.</p>

      <h2>Hesap sorumluluğu</h2>
      <p>Hesap kimlik bilgilerinizi gizli tutmaktan ve hesabınız üzerinden gerçekleştirilen tüm faaliyetlerden siz sorumlusunuz.</p>

      <h2>Hizmet kullanılabilirliği</h2>
      <p>Hizmet sürekliliğini sağlamayı hedefliyoruz ancak kesintisiz erişim garanti etmiyoruz. Bakım, piyasa koşulları veya teknik sorunlar kullanılabilirliği etkileyebilir.</p>

      <h2>Sorumluluk sınırlaması</h2>
      <p><?= e(SITE_NAME) ?>, işlem kayıplarından veya bu sitedeki bilgilerin kullanımından kaynaklanan zararlardan sorumlu değildir. Uygun görürseniz bağımsız finansal danışmanlık alın.</p>

      <h2>İletişim</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

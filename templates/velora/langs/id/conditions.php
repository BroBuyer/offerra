<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ketentuan Penggunaan');
$page_description = 'Baca terma dan syarat untuk menggunakan ' . SITE_NAME . ' platform perdagangan dan situs web.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Ketentuan Penggunaan</h1>
      <p class="lead">Terakhir diperbarui: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Dengan mengakses <?= e(SITE_NAME) ?> anda setuju dengan Ketentuan Penggunaan ini. Jika anda tidak bersetuju, silakan jangan gunakan layanan kami.</p>

      <h2>Kelayakan</h2>
      <p>Anda mestilah berumur sekurang-kurangnya 18 tahun dan dibenarkan secara sah untuk berdagang instrumen kewangan di bidang kuasa anda.</p>

      <h2>Pengungkapan risiko</h2>
      <p>Perdagangan mata wang kripto, forex, CFD dan instrumen kewangan lain melibatkan risiko kerugian yang ketara. Prestasi lalu tidak menjamin hasil masa depan. Berdagang hanya dengan modal yang anda mampu rugi.</p>

      <h2>Tanggungjawab akun</h2>
      <p>Anda bertanggungjawab mengekalkan kerahsiaan kelayakan akun Anda dan untuk semua aktiviti di bawah akun Anda.</p>

      <h2>Ketersediaan layanan</h2>
      <p>Kami berusaha untuk ketersediaan berterusan tetapi tidak menjamin akses tanpa gangguan. Penyelenggaraan, keadaan pasar atau isu teknikal mungkin menjejaskan layanan.</p>

      <h2>Had liabiliti</h2>
      <p><?= e(SITE_NAME) ?> tidak bertanggungjawab atas kerugian perdagangan atau kerosakan yang timbul dari penggunaan informasi di laman ini. Dapatkan nasihat kewangan bebas jika sesuai.</p>

      <h2>Hubungi</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

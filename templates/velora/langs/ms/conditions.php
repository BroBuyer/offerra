<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Terma Penggunaan');
$page_description = 'Baca terma dan syarat untuk menggunakan ' . SITE_NAME . ' platform perdagangan dan laman web.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Terma Penggunaan</h1>
      <p class="lead">Kemas kini terakhir: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Dengan mengakses <?= e(SITE_NAME) ?> anda bersetuju dengan Terma Penggunaan ini. Jika anda tidak bersetuju, sila jangan gunakan perkhidmatan kami.</p>

      <h2>Kelayakan</h2>
      <p>Anda mestilah berumur sekurang-kurangnya 18 tahun dan dibenarkan secara sah untuk berdagang instrumen kewangan di bidang kuasa anda.</p>

      <h2>Pendedahan risiko</h2>
      <p>Perdagangan mata wang kripto, forex, CFD dan instrumen kewangan lain melibatkan risiko kerugian yang ketara. Prestasi lalu tidak menjamin hasil masa depan. Berdagang hanya dengan modal yang anda mampu rugi.</p>

      <h2>Tanggungjawab akaun</h2>
      <p>Anda bertanggungjawab mengekalkan kerahsiaan kelayakan akaun anda dan untuk semua aktiviti di bawah akaun anda.</p>

      <h2>Ketersediaan perkhidmatan</h2>
      <p>Kami berusaha untuk ketersediaan berterusan tetapi tidak menjamin akses tanpa gangguan. Penyelenggaraan, keadaan pasaran atau isu teknikal mungkin menjejaskan perkhidmatan.</p>

      <h2>Had liabiliti</h2>
      <p><?= e(SITE_NAME) ?> tidak bertanggungjawab atas kerugian perdagangan atau kerosakan yang timbul daripada penggunaan maklumat di laman ini. Dapatkan nasihat kewangan bebas jika sesuai.</p>

      <h2>Hubungi</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

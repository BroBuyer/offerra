<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Tentang ' . SITE_NAME . ' | Wawasan platform trading yang menyeluruh';
$page_description = 'Ketahui misi, teknologi dan komitmen ' . SITE_NAME . ' untuk pengalaman dagangan yang selamat.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Tentang kami', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="laluan navigasi"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Beranda</a>
            <span class="breadcrumb-item">Siapa kami</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Identiti kami</h1>
                      <p class="lead">Platform, fungsi dan dagangan bertanggungjawab.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> menggabungkan akses pasar dengan alat analisis pada satu platform yang diperkemas.</p>
            <p>Kami menumpukan pada langkah keamanan kukuh dan proses yang telus serta mudah difahami.</p>
            <p>Silakan maklum bahawa dagangan membawa risiko dan pulangan tidak dapat dijamin.</p>
            <p>Onboarding kami mudah: daftar akun Anda, sahkan email, deposit minimum <?= e(money_min()) ?>, kemudian akses papan pemuka anda. Bertukar antara mod manual dan berbantu, tetapkan had dan urus risiko mengikut profil anda.</p>            <p>Dukungan tersedia untuk membantu soalan tentang akun, pembayaran, pengeluaran dan fungsi platform. Ia tidak menyediakan nasihat pelaburan pribadi. Untuk kebimbangan mendesak saat dagangan aktif, silakan berikan email akun dan status papan pemuka anda.</p>            <p>Pendatang baharu dan trader berpengalaman menemui lingkungan yang jelas: tutorial dan panduan awal di satu pihak, kontrol termaju dan penjejakan performa di pihak lain. Kami mengukur <?= e(SITE_NAME) ?> berdasarkan kualiti pengalaman — bukan pemasaran agresif. Sebelum mendaftar, silakan semak Pertanyaan umum, terma dan dasar privasi untuk memahami risiko, masa pengeluaran dan keperluan akun.</p>            <p>At <?= e(SITE_NAME) ?>, anda akan menemui aliran kerja berpandu, alat pemantauan dan dukungan operasi yang tertumpu pada proses akun dan pembayaran yang telus, tanpa menjanjikan hasil pasar tertentu.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Daftar hari ini</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Bagaimana kami bisa membantu anda hari ini?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Buat akun';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

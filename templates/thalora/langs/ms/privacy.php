<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Gambaran privasi | Perlindungan data di ' . SITE_NAME;
$page_description = 'Fahami bagaimana ' . SITE_NAME . ' melindungi data anda melalui Dasar Privasi terperinci kami.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Dasar privasi', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="laluan navigasi"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Laman utama</a>
  <span class="breadcrumb-item">Dasar privasi</span>
</nav>
<h1>Dedikasi kami untuk melindungi privasi anda</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Kemas kini terakhir: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> ("Kami"), melindungi data peribadi anda adalah keutamaan. Kenyataan ini menjelaskan bagaimana kami mengumpul, menggunakan dan melindungi maklumat anda.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Ketelusan dalam pengendalian data</p>
    <p>
      Kami bertujuan untuk keterbukaan tentang pengendalian data kami. Hubungi kami di      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Tujuan penggunaan data</p>
    <p>Kami menggunakan maklumat anda untuk menyediakan perkhidmatan, menambah baik platform kami dan mematuhi kewajipan undang-undang.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Akses kepada data anda</p>
    <p>Anda boleh pada bila-bila masa meminta akses, pembetulan atau pemadaman data peribadi anda.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Amalan keselamatan</p>
    <p>Kami menggunakan langkah keselamatan kukuh tetapi tidak dapat menjanjikan perlindungan mutlak data peribadi anda.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Maklumat yang kami kumpul</h2>
    <p>Kami mengumpul maklumat termasuk alamat IP, butiran peranti, jenis pelayar dan sebarang data yang anda berikan secara langsung.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Asas pemprosesan</h2>
    <p>Pengendalian data anda adalah berdasarkan persetujuan anda, kepentingan sah dan pematuhan undang-undang yang terpakai.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Perkongsian data</h2>
    <p>Butiran anda mungkin dikongsi dengan rakan kongsi dipercayai, penyedia perkhidmatan dan pihak berkuasa undang-undang apabila dikehendaki secara sah.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Penggunaan kuki</h2>
    <p>Kuki menyokong fungsi laman web dan analisis pengguna, tetapi anda boleh memilih untuk menyahaktifkannya jika mahu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Tempoh penyimpanan data</h2>
    <p>Kami menyimpan maklumat anda hanya selama yang diperlukan untuk memenuhi tujuan yang digariskan.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Pemindahan data antarabangsa</h2>
    <p>Data mungkin dipindahkan merentas sempadan dengan perlindungan yang sesuai.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Pautan ke laman lain</h2>
    <p>Kami tidak mengambil tanggungjawab ke atas laman web luaran yang dipautkan melalui platform kami atau amalan mereka.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Kemas kini dasar ini</h2>
    <p>Dasar privasi ini mungkin dikemas kini dari semasa ke semasa.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Hak undang-undang anda</h2>
    <p>Anda mempunyai hak untuk mengakses, meminda, memadam, mengehadkan pemprosesan data, memindahkan maklumat peribadi, menarik balik persetujuan dan membuat aduan jika perlu.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Terma dan syarat | Perjanjian pengguna dengan ' . SITE_NAME;
$page_description = 'Semak terma platform, peraturan dagangan dan dasar sokongan pelanggan ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Terma dan syarat', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="laluan navigasi" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Laman utama</a>
            <span class="breadcrumb-item">Terma dan syarat</span>
        </nav>
        <h1>Terma dan syarat</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Pengenalan</h2>
    <p>Laman web ini menyediakan maklumat tentang perkhidmatan dagangan pihak ketiga. Dengan meneruskan, anda bersetuju dengan Terma ini dan Dasar Privasi kami. Terma mungkin dikemas kini.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Kelayakan pengguna</h2>
    <p>Anda mestilah sekurang-kurangnya 18 tahun dan dibenarkan secara sah untuk menerima Terma ini, mengikut undang-undang tempatan anda. Kami menolak liabiliti untuk penggunaan platform yang tidak wajar.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Had akses</h2>
    <p>Akses mungkin dihadkan di kawasan tertentu atau di mana had kawal selia wujud. Sesetengah perkhidmatan mungkin tidak tersedia di lokasi tertentu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Penggunaan yang sesuai</h2>
    <p>Penggunaan tanpa kebenaran adalah dilarang, termasuk aktiviti haram, pelanggaran hak, pengedaran kandungan berbahaya atau bot automatik. Pelanggaran boleh mengakibatkan penggantungan akaun.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Harta intelek</h2>
    <p>Semua kandungan, tanda dagangan dan harta intelek milik kami atau afiliasi kami. Penggunaan laman adalah peribadi; menyalin atau mengubah suai kandungan tidak dibenarkan.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Penafian liabiliti</h2>
    <p>Perkhidmatan dan laman web disediakan "seadanya." Kami tidak menerima tanggungjawab atas ralat, kerugian atau kerosakan yang timbul daripada penggunaan.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Kandungan pihak ketiga</h2>
    <p>Kandungan atau pautan pihak ketiga mungkin disertakan tetapi tidak dijamin ketepatan atau ketersediaannya; sila sahkan secara bebas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Pautan luaran</h2>
    <p>Pautan luaran ditawarkan untuk kemudahan. Kami tidak mengendors atau mengawal laman ini dan tidak menerima liabiliti atas kandungannya.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Terma tambahan</h2>
    <p>Kami boleh mengemas kini perkhidmatan dan Terma mengikut budi bicara kami. Terma ini merupakan keseluruhan perjanjian. Kegagalan menguatkuasakan hak tidak bermaksud peninggalan.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

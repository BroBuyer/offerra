<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Syarat Penggunaan | ' . SITE_NAME;
$page_description = 'Syarat Penggunaan untuk ' . SITE_NAME . ' platform.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Syarat Penggunaan</h1>
            <p class="bold-title">1. Pendahuluan</p>
            <p>1.1. Penerimaan ketentuan ini diperlukan untuk menggunakan layanan kami.</p>
            <p>1.2. Ketentuan ini merupakan perjanjian yang mengikat secara hukum.</p>
            <p>1.3. Penggunaan situs secara berkelanjutan berarti penerimaan ketentuan.</p>
            <p>
              1.4. Untuk pertanyaan, kamu bisa menghubungi kami di
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Hak penggunaan</p>
            <p>2.1. Kamu harus berusia minimal 18 tahun untuk menggunakan layanan.</p>
            <p>2.1.1. Kamu harus tinggal di negara tempat layanan ini legal.</p>
            <p>2.1.2. Kamu tidak boleh ada dalam daftar sanksi.</p>
            <p>2.1.3. Kamu harus memiliki kecakapan hukum untuk mengadakan kontrak.</p>
            <p>2.2. Kami tidak bertanggung jawab atas penggunaan oleh pengguna yang tidak pantas.</p>
            <p class="bold-title">3. Akun pengguna</p>
            <p>3.1. Kamu bertanggung jawab atas keamanan akunmu.</p>
            <p>3.2. Jangan bagikan kata sandimu kepada pihak ketiga.</p>
            <p class="bold-title">4. Aktivitas terlarang</p>
            <p>4.1. Penggunaan layanan untuk tujuan ilegal tidak diizinkan.</p>
            <p>4.1.1. Pencucian uang dilarang keras.</p>
            <p>4.1.2. Penipuan akan dilaporkan kepada otoritas yang berwenang.</p>
            <p>4.1.3. Penggunaan bot atau perangkat lunak otomatisasi tidak diizinkan.</p>
            <p>4.1.4. Setiap upaya memanipulasi sistem akan diselidiki.</p>
            <p>4.1.5. Menyebarkan informasi palsu dilarang.</p>
            <p>4.1.6. Upaya menghalangi penyelidikan tidak diizinkan.</p>
            <p>4.1.7. Ancaman terhadap pengguna lain dilarang.</p>
            <p>4.1.8. Setiap aktivitas ilegal akan dikenai sanksi.</p>
            <p>4.1.9. Upaya mengakali pedoman tidak diizinkan.</p>
            <p>4.1.10. Setiap upaya menyalahgunakan sistem ditanggapi dengan serius.</p>
            <p class="bold-title">5. Kekayaan intelektual</p>
            <p>5.1. Semua konten di situs adalah kekayaan intelektual kami.</p>
            <p>5.2. Pengguna tidak memperoleh hak atas konten situs.</p>
            <p>5.3. Konten tidak boleh disalin tanpa izin.</p>
            <p>5.4. Pihak ketiga tidak diizinkan mengubah konten.</p>
            <p class="bold-title">6. Pembatasan tanggung jawab</p>
            <p>6.1. Penggunaan layanan menjadi risikomu sendiri.</p>
            <p>6.2. Kami tidak bertanggung jawab atas kerugian yang timbul dari penggunaan layanan.</p>
            <p>6.3. Setiap kerugian yang timbul dari penggunaan situs menjadi tanggung jawab pengguna.</p>
            <p>6.4. Kami tidak menerima tanggung jawab atas kerusakan yang disebabkan oleh penggunaan situs.</p>
            <p>6.5. Masalah teknis bukan tanggung jawab kami.</p>
            <p class="bold-title">7. Informasi</p>
            <p>7.1. Dengan menggunakan layanan, kamu setuju untuk dihubungi.</p>
            <p>7.2. Informasi diperlakukan secara rahasia.</p>
            <p>7.3. Pengguna disarankan menyimpan catatan.</p>
            <p class="bold-title">8. Tautan dan sumber tambahan</p>
            <p>8.1. Untuk informasi lebih lanjut, lihat kebijakan kami.</p>
            <p>8.2. Tautan eksternal tidak berarti dukungan.</p>
            <p>8.3. Kami menyarankan memverifikasi sumber sebelum digunakan.</p>
            <p class="bold-title">9. Ketentuan umum</p>
            <p>9.1. Kami berhak mengubah layanan kapan saja.</p>
            <p>9.2. Ketentuan dapat berubah kapan saja.</p>
            <p>9.3. Dengan menggunakan layanan, kamu menerima ketentuan ini.</p>
            <p>9.4. Perjanjian lisan tidak sah.</p>
            <p>9.5. Hak yang tidak digunakan tidak dianggap dilepaskan.</p>
            <p>
              9.6. Jika suatu ketentuan dinyatakan tidak sah, ketentuan lainnya tetap berlaku.
            </p>
            <p>9.7. Layanan dapat dikelola oleh penyedia eksternal.</p>
            <p>
              9.8. Ketentuan ini tunduk pada hukum <?= e(geo_in()) ?>. Semua sengketa akan diajukan ke
              pengadilan yang berwenang <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Laporkan penyalahgunaan | ' . SITE_NAME;
$page_description = 'Laporkan penyalahgunaan atau aktivitas mencurigakan di ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Laporkan penyalahgunaan</h1>
            <p class="bold-title">1. Melaporkan penyalahgunaan</p>
            <p>
              1.1. Jika kamu menemukan konten yang tidak pantas di situs kami, laporkan ke
               kami melalui formulir kontak kami.
            </p>
            <p>Hubungi kami: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Di bagian ini kamu bisa memberikan informasi tentang perilaku atau konten
              yang melanggar kebijakan kami.
            </p>
            <p>
              1.3. Laporanmu penting bagi kami. Berikan detail yang spesifik agar kami bisa
              menyelidiki insiden tersebut dengan memadai.
            </p>
            <p>Dengan mengirimkan laporan, kamu juga menyetujui Kebijakan Privasi kami.</p>
            <p class="bold-title">2. Kewenangan untuk melapor</p>
            <p>
              2.1. Jika kamu menjadi korban penyalahgunaan atau melihat perilaku yang tidak pantas, kamu
              berhak untuk melaporkannya.
            </p>
            <p>2.1.1. Kamu harus berusia minimal 18 tahun untuk mengirimkan laporan.</p>
            <p>2.1.2. Pastikan laporanmu jujur dan berdasarkan fakta.</p>
            <p>2.1.3. Penggunaan formulir pelaporan harus legal di negaramu.</p>
            <p>2.2. Kami tidak bertanggung jawab atas laporan yang palsu atau berniat jahat.</p>
            <p class="bold-title">3. Prosedur pelaporan</p>
            <p>3.1. Kami berhak menyelidiki semua laporan penyalahgunaan.</p>
            <p>3.2. Jika laporan dianggap sah, kami akan mengambil langkah yang diperlukan.</p>
            <p class="bold-title">4. Aktivitas terlarang saat melapor</p>
            <p>4.1. Penggunaan formulir untuk tujuan jahat tidak diizinkan.</p>
            <p>4.1.1. Mengirimkan laporan palsu atau menyesatkan tidak diizinkan.</p>
            <p>4.1.2. Mengganggu pengguna lain melalui sistem pelaporan tidak diizinkan.</p>
            <p>4.1.3. Penggunaan bot atau otomatisasi untuk mengirim laporan dilarang.</p>
            <p>4.1.4. Setiap upaya memanipulasi sistem pelaporan akan diselidiki.</p>
            <p>4.1.5. Penggunaan sistem untuk menyebarkan informasi palsu dilarang.</p>
            <p>4.1.6. Upaya menghalangi penyelidikan laporan tidak diizinkan.</p>
            <p>4.1.7. Penggunaan sistem untuk mengeluarkan ancaman tidak diizinkan.</p>
            <p>4.1.8. Setiap aktivitas ilegal terkait pelaporan akan dikenai sanksi.</p>
            <p>4.1.9. Upaya mengakali pedoman pelaporan tidak diizinkan.</p>
            <p>4.1.10. Setiap upaya menyalahgunakan sistem pelaporan ditanggapi dengan serius.</p>
            <p class="bold-title">5. Hak kekayaan intelektual saat melapor</p>
            <p>
              5.1. Konten yang kamu kirim saat melaporkan penyalahgunaan tidak memberimu hak kepemilikan apa pun.
            </p>
            <p>5.2. Pengguna tidak memperoleh hak atas konten situs dengan mengirimkan laporan.</p>
            <p>5.3. Laporan digunakan semata-mata untuk keperluan penyelidikan.</p>
            <p>5.4. Pihak ketiga tidak boleh menyalin atau mengubah laporan.</p>
            <p class="bold-title">6. Pembatasan tanggung jawab saat melapor</p>
            <p>6.1. Dengan mengirimkan laporan, kamu menanggung tanggung jawab atas isinya.</p>
            <p>6.2. Kami tidak bertanggung jawab atas akibat dari laporan yang dikirim.</p>
            <p>6.3. Setiap kerugian yang timbul dari laporan menjadi tanggung jawab pengguna.</p>
            <p>6.4. Kami tidak menerima tanggung jawab atas kerusakan yang disebabkan oleh laporan.</p>
            <p>
              6.5. Masalah teknis terkait sistem pelaporan bukan tanggung jawab kami.
            </p>
            <p class="bold-title">7. Informasi tentang prosedur pelaporan</p>
            <p>
              7.1. Dengan menggunakan sistem pelaporan, kamu setuju bahwa kami boleh menghubungimu untuk informasi lebih lanjut.
            </p>
            <p>7.2. Laporan diperlakukan secara rahasia.</p>
            <p>7.3. Pengguna disarankan menyimpan salinan laporannya.</p>
            <p class="bold-title">8. Tautan dan sumber tambahan</p>
            <p>8.1. Untuk informasi lebih lanjut tentang cara melaporkan penyalahgunaan, lihat kebijakan kami.</p>
            <p>8.2. Tautan ke sumber eksternal tidak berarti dukungan kami.</p>
            <p>8.3. Kami menyarankan kamu memverifikasi setiap sumber sebelum menggunakannya.</p>
            <p class="bold-title">9. Ketentuan umum tentang laporan</p>
            <p>
              9.1. Kami berhak mengubah, menangguhkan, atau menghentikan prosedur pelaporan
              kapan saja.
            </p>
            <p>
              9.2. Ketentuan prosedur pelaporan ini dapat berubah kapan saja. Penggunaan berkelanjutan
              layanan pelaporan setelah perubahan tersebut berarti penerimaan ketentuan baru.
            </p>
            <p>9.3. Dengan mengirimkan laporan, pengguna menerima ketentuan ini sepenuhnya.</p>
            <p>
              9.4. Setiap perjanjian atau pernyataan, tertulis atau lisan, yang tidak termasuk dalam
              poin-poin khusus ketentuan ini secara hukum tidak sah dan tidak mengikat salah satu pihak.
            </p>
            <p>
              9.5. Setiap hak yang diberikan oleh ketentuan ini yang tidak digunakan, baik karena persetujuan,
              kelalaian, atau ketidakmampuan, dianggap dilepaskan. Penggunaan sebagian atau penuh suatu hak
              tidak mengecualikan atau membatasi penggunaannya di kemudian hari.
            </p>
            <p>
              9.6. Jika pengadilan yang berwenang menyatakan suatu ketentuan dari syarat ini batal dan tidak sah, ketentuan itu
              dianggap batal. Namun, sisa ketentuan tetap berlaku sepenuhnya.
            </p>
            <p>
              9.7. Diakui bahwa ketentuan ini memungkinkan pengoperasian situs oleh pihak
              ketiga, yang dapat mengalihkan hak dan kewajibannya. Pengguna tidak boleh mengalihkan
              hak dan kewajibannya kepada pihak lain.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

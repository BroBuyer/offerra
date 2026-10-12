<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Laporkan penyalahgunaan | ' . SITE_NAME;
$page_description = 'Laporkan penyalahgunaan atau aktiviti mencurigakan di ' . SITE_NAME . '.';
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
              1.1. Jika kamu menemui kandungan tidak wajar di laman web kami, sila laporkan kepada
               kami melalui borang hubungan kami.
            </p>
            <p>Hubungi kami: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Dalam bahagian ini kamu boleh memberi maklumat tentang tingkah laku atau kandungan
              yang melanggar dasar kami.
            </p>
            <p>
              1.3. Laporan kamu penting bagi kami. Sila berikan butiran khusus supaya kami boleh
              menyiasat insiden itu dengan sewajarnya.
            </p>
            <p>Dengan menghantar laporan, kamu juga bersetuju dengan Dasar Privasi kami.</p>
            <p class="bold-title">2. Kuasa untuk membuat laporan</p>
            <p>
              2.1. Jika kamu menjadi mangsa penyalahgunaan atau perasan tingkah laku tidak wajar, kamu
              berhak untuk melaporkannya.
            </p>
            <p>2.1.1. Kamu mesti berumur sekurang-kurangnya 18 tahun untuk menghantar laporan.</p>
            <p>2.1.2. Pastikan laporan kamu benar dan berasaskan fakta.</p>
            <p>2.1.3. Penggunaan borang laporan mesti sah di negara kamu.</p>
            <p>2.2. Kami tidak bertanggungjawab atas laporan palsu atau berniat jahat.</p>
            <p class="bold-title">3. Prosedur pelaporan</p>
            <p>3.1. Kami berhak menyiasat semua laporan penyalahgunaan.</p>
            <p>3.2. Jika laporan dianggap sah, kami akan mengambil langkah yang perlu.</p>
            <p class="bold-title">4. Aktiviti terlarang semasa membuat laporan</p>
            <p>4.1. Penggunaan borang untuk tujuan berniat jahat tidak dibenarkan.</p>
            <p>4.1.1. Menghantar laporan palsu atau mengelirukan tidak dibenarkan.</p>
            <p>4.1.2. Mengganggu pengguna lain melalui sistem pelaporan tidak dibenarkan.</p>
            <p>4.1.3. Penggunaan bot atau automasi untuk menghantar laporan adalah dilarang.</p>
            <p>4.1.4. Sebarang cubaan memanipulasi sistem pelaporan akan disiasat.</p>
            <p>4.1.5. Penggunaan sistem untuk menyebarkan maklumat palsu adalah dilarang.</p>
            <p>4.1.6. Cubaan menghalang siasatan laporan tidak dibenarkan.</p>
            <p>4.1.7. Penggunaan sistem untuk mengeluarkan ugutan tidak dibenarkan.</p>
            <p>4.1.8. Sebarang aktiviti haram berkaitan pelaporan akan dikenakan penalti.</p>
            <p>4.1.9. Cubaan memintas garis panduan pelaporan tidak dibenarkan.</p>
            <p>4.1.10. Sebarang cubaan menyalahgunakan sistem pelaporan diambil serius.</p>
            <p class="bold-title">5. Hak harta intelek semasa membuat laporan</p>
            <p>
              5.1. Kandungan yang kamu hantar semasa melaporkan penyalahgunaan tidak memberi kamu sebarang hak milik.
            </p>
            <p>5.2. Pengguna tidak memperoleh hak ke atas kandungan laman web dengan menghantar laporan.</p>
            <p>5.3. Laporan digunakan semata-mata untuk tujuan siasatan.</p>
            <p>5.4. Pihak ketiga tidak boleh menyalin atau mengubah laporan.</p>
            <p class="bold-title">6. Had liabiliti semasa membuat laporan</p>
            <p>6.1. Dengan menghantar laporan, kamu menanggung tanggungjawab ke atas kandungannya.</p>
            <p>6.2. Kami tidak bertanggungjawab atas akibat laporan yang dihantar.</p>
            <p>6.3. Sebarang kerugian yang timbul daripada laporan adalah tanggungjawab pengguna.</p>
            <p>6.4. Kami tidak menerima liabiliti atas kerosakan yang disebabkan oleh laporan.</p>
            <p>
              6.5. Masalah teknikal berkaitan sistem pelaporan bukan tanggungjawab kami.
            </p>
            <p class="bold-title">7. Maklumat tentang prosedur pelaporan</p>
            <p>
              7.1. Dengan menggunakan sistem pelaporan, kamu bersetuju bahawa kami boleh menghubungi kamu untuk maklumat lanjut.
            </p>
            <p>7.2. Laporan dilayan secara sulit.</p>
            <p>7.3. Pengguna dinasihatkan supaya menyimpan salinan laporan mereka.</p>
            <p class="bold-title">8. Pautan dan sumber tambahan</p>
            <p>8.1. Untuk maklumat lanjut tentang cara melaporkan penyalahgunaan, lihat dasar kami.</p>
            <p>8.2. Pautan ke sumber luar tidak bermaksud sokongan kami.</p>
            <p>8.3. Kami menasihatkan kamu supaya mengesahkan setiap sumber sebelum menggunakannya.</p>
            <p class="bold-title">9. Peruntukan am tentang laporan</p>
            <p>
              9.1. Kami berhak mengubah, menggantung atau memberhentikan prosedur pelaporan
              pada bila-bila masa.
            </p>
            <p>
              9.2. Syarat prosedur pelaporan ini boleh berubah pada bila-bila masa. Penggunaan berterusan
              perkhidmatan pelaporan selepas perubahan itu bermaksud penerimaan syarat baharu.
            </p>
            <p>9.3. Dengan menghantar laporan, pengguna menerima syarat ini sepenuhnya.</p>
            <p>
              9.4. Sebarang perjanjian atau kenyataan, bertulis atau lisan, yang tidak termasuk dalam
              perkara khusus syarat ini adalah tidak sah di sisi undang-undang dan tidak mengikat mana-mana pihak.
            </p>
            <p>
              9.5. Sebarang hak yang diberikan oleh syarat ini yang tidak digunakan, sama ada kerana persetujuan,
              kecuaian atau ketidakupayaan, dianggap dilepaskan. Penggunaan sebahagian atau penuh sesuatu hak
              tidak menolak atau mengehadkan penggunaannya kemudian.
            </p>
            <p>
              9.6. Jika mahkamah yang mempunyai bidang kuasa mengisytiharkan sesuatu peruntukan syarat ini batal dan tidak sah, ia
              akan dianggap batal. Walau bagaimanapun, baki syarat kekal berkuat kuasa sepenuhnya.
            </p>
            <p>
              9.7. Diakui bahawa syarat ini membolehkan pengoperasian laman web oleh pihak
              ketiga, yang boleh memindahkan hak dan kewajipan mereka. Pengguna tidak boleh memindahkan
              hak dan kewajipan mereka kepada pihak lain.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

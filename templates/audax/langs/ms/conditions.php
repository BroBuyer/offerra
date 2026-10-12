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
            <p class="bold-title">1. Pengenalan</p>
            <p>1.1. Penerimaan syarat ini diperlukan untuk menggunakan perkhidmatan kami.</p>
            <p>1.2. Syarat ini membentuk perjanjian yang mengikat secara undang-undang.</p>
            <p>1.3. Penggunaan berterusan laman web bermaksud penerimaan syarat.</p>
            <p>
              1.4. Untuk soalan, kamu boleh menghubungi kami di
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Hak untuk menggunakan</p>
            <p>2.1. Kamu mesti berumur sekurang-kurangnya 18 tahun untuk menggunakan perkhidmatan.</p>
            <p>2.1.1. Kamu mesti tinggal di negara di mana perkhidmatan ini sah.</p>
            <p>2.1.2. Kamu tidak boleh berada dalam senarai sekatan.</p>
            <p>2.1.3. Kamu mesti mempunyai keupayaan undang-undang untuk memasuki kontrak.</p>
            <p>2.2. Kami tidak bertanggungjawab atas penggunaan oleh pengguna yang tidak sesuai.</p>
            <p class="bold-title">3. Akaun pengguna</p>
            <p>3.1. Kamu bertanggungjawab ke atas keselamatan akaun kamu.</p>
            <p>3.2. Jangan kongsikan kata laluan kamu dengan pihak ketiga.</p>
            <p class="bold-title">4. Aktiviti terlarang</p>
            <p>4.1. Penggunaan perkhidmatan untuk tujuan haram tidak dibenarkan.</p>
            <p>4.1.1. Pengubahan wang haram adalah dilarang sama sekali.</p>
            <p>4.1.2. Penipuan akan dilaporkan kepada pihak berkuasa yang berkenaan.</p>
            <p>4.1.3. Penggunaan bot atau perisian automasi tidak dibenarkan.</p>
            <p>4.1.4. Sebarang cubaan memanipulasi sistem akan disiasat.</p>
            <p>4.1.5. Menyebarkan maklumat palsu adalah dilarang.</p>
            <p>4.1.6. Cubaan menghalang siasatan tidak dibenarkan.</p>
            <p>4.1.7. Ugutan terhadap pengguna lain adalah dilarang.</p>
            <p>4.1.8. Sebarang aktiviti haram akan dikenakan penalti.</p>
            <p>4.1.9. Cubaan memintas garis panduan tidak dibenarkan.</p>
            <p>4.1.10. Sebarang cubaan menyalahgunakan sistem diambil serius.</p>
            <p class="bold-title">5. Harta intelek</p>
            <p>5.1. Semua kandungan di laman web adalah harta intelek kami.</p>
            <p>5.2. Pengguna tidak memperoleh hak ke atas kandungan laman web.</p>
            <p>5.3. Kandungan tidak boleh disalin tanpa kebenaran.</p>
            <p>5.4. Pihak ketiga tidak dibenarkan mengubah kandungan.</p>
            <p class="bold-title">6. Had liabiliti</p>
            <p>6.1. Penggunaan perkhidmatan adalah atas risiko kamu sendiri.</p>
            <p>6.2. Kami tidak bertanggungjawab atas kerugian yang timbul daripada penggunaan perkhidmatan.</p>
            <p>6.3. Sebarang kerugian yang timbul daripada penggunaan laman web adalah tanggungjawab pengguna.</p>
            <p>6.4. Kami tidak menerima liabiliti atas kerosakan yang disebabkan oleh penggunaan laman web.</p>
            <p>6.5. Masalah teknikal bukan tanggungjawab kami.</p>
            <p class="bold-title">7. Maklumat</p>
            <p>7.1. Dengan menggunakan perkhidmatan, kamu bersetuju untuk dihubungi.</p>
            <p>7.2. Maklumat dilayan secara sulit.</p>
            <p>7.3. Pengguna dinasihatkan supaya menyimpan rekod.</p>
            <p class="bold-title">8. Pautan dan sumber tambahan</p>
            <p>8.1. Untuk maklumat lanjut, lihat dasar kami.</p>
            <p>8.2. Pautan luar tidak bermaksud sokongan.</p>
            <p>8.3. Kami mengesyorkan pengesahan sumber sebelum digunakan.</p>
            <p class="bold-title">9. Peruntukan am</p>
            <p>9.1. Kami berhak mengubah perkhidmatan pada bila-bila masa.</p>
            <p>9.2. Syarat boleh berubah pada bila-bila masa.</p>
            <p>9.3. Dengan menggunakan perkhidmatan, kamu menerima syarat ini.</p>
            <p>9.4. Perjanjian lisan tidak sah.</p>
            <p>9.5. Hak yang tidak digunakan tidak dianggap dilepaskan.</p>
            <p>
              9.6. Jika sesuatu peruntukan diisytiharkan tidak sah, peruntukan yang lain kekal berkuat kuasa.
            </p>
            <p>9.7. Perkhidmatan boleh diuruskan oleh penyedia luar.</p>
            <p>
              9.8. Syarat ini tertakluk kepada undang-undang <?= e(geo_in()) ?>. Semua pertikaian akan dikemukakan kepada
              mahkamah yang mempunyai bidang kuasa <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

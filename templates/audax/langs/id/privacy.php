<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kebijakan Privasi | ' . SITE_NAME;
$page_description = 'Kebijakan Privasi untuk ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Kebijakan Privasi</h1>
            <p>
              Data pribadimu dan asetmu sangat penting bagi kami. Kami sepenuhnya
              berkomitmen untuk melindunginya.
            </p>
            <p>
              <?= e(SITE_NAME) ?> mengumpulkan dan menyimpan data penting untuk transaksi trading-mu. Cara
              data ini dikumpulkan dan disimpan dijelaskan dalam Kebijakan Privasi berikut.
            </p>
            <p>Kebijakan kami didasarkan pada prinsip-prinsip berikut:</p>
            <p class="circle">
              Dengan tujuan memastikan transparansi maksimum tentang proses kami mengumpulkan dan
              menyimpan data pribadimu:
            </p>
            <p>
              Tujuan kami adalah agar kamu memahami cara kami mengumpulkan dan memproses datamu sehingga kamu bisa membuat
              keputusan yang terinformasi. Kami menerapkan pedoman dan proses yang jelas untuk pemrosesan data di
              situs ini. Kebijakan kami menjelaskan secara rinci metode khusus yang kami gunakan untuk memberikan
              kamu informasi yang jelas dan konkret tentang penggunaan data. Kamu yang mengendalikan.
            </p>
            <p>
              Kami akan memberitahumu segera jika kami anggap perlu. Transparansi
              sangat penting bagi kami.
            </p>
            <p>
              Tim khusus kami selalu siap menjawab semua pertanyaanmu tentang setiap aspek
              proses kami, termasuk kewajiban kami berdasarkan hukum <?= e(geo_in()) ?> dan peraturan
              UE. Kamu bisa menghubungi kami di:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Tidak ada penggunaan lain atas data pribadi yang diizinkan di pihak kami, kecuali sebagaimana diatur dalam
              Kebijakan Privasi kami.
            </p>
            <p>
              Kami dapat memproses data pribadi untuk tujuan berikut, termasuk memastikan
              berfungsinya layanan <?= e(SITE_NAME) ?> dengan baik dan menghubungkan anggota trading dengan platform
              trading pihak ketiga. Selain itu, pemrosesan dapat diperlukan untuk memelihara dan meningkatkan
              fitur dan layanan situs; untuk melindungi hak kami serta memenuhi kewajiban hukum dan
              kewajiban lainnya. Akhirnya, data ini digunakan, jika diperlukan, untuk fungsi administratif
              dan fungsi bisnis lainnya terkait layanan yang diberikan kepadamu sebagai klien.
            </p>
            <p>
              Untuk menawarkan layanan berkualitas lebih tinggi yang disesuaikan dengan preferensi dan kebutuhanmu, <?= e(SITE_NAME) ?>
              menggunakan data pribadi.
            </p>
            <p class="circle">
              Dengan tujuan menggunakan alat penting untuk melindungi data pribadimu dan menjaga
              hakmu terkait data tersebut:
            </p>
            <p>
              Kapan saja kamu bisa menghubungi kami dan mendapatkan akses ke semua data pribadimu. Kami juga bisa
              mengubah atau menghapusnya jika diperlukan. Selain itu, kami memproses permintaan untuk mentransfer data
              itu kepadamu atau pihak ketiga yang kamu tunjuk. Kami menawarkan layanan dan dukungan ini agar kamu
              bisa menjalankan hak privasi dan pengendalianmu secara optimal.
            </p>
            <p class="circle">Lindungi data pribadimu:</p>
            <p>
              Sistem keamanan kami berkualitas tinggi dan memiliki langkah setingkat perbankan. Meskipun
              perlindungan mutlak tidak dapat dijamin, kami berkomitmen untuk terus menjaga sistem
              pada tingkat tertinggi dan memperkuat langkah yang sudah diterapkan.
            </p>
            <p>
              Kami memiliki kebijakan privasi yang komprehensif dan terperinci serta sistem keamanan kelas satu.
            </p>
            <p class="bold-title">1. Ruang lingkup penerapan</p>
            <p>
              Kebijakan ini menjelaskan prosedur kami untuk mengumpulkan, memproses, dan mengungkapkan semua
              data orang perseorangan.
            </p>
            <p>
              Ketentuan kebijakan kami berlaku untuk semua orang perseorangan yang dapat diidentifikasi atau
              telah diidentifikasi. Khususnya setiap orang perseorangan yang dapat diidentifikasi sehubungan
              dengan data yang dipercayakan kepada kami, yang kami akses dan/atau yang dapat kami gabungkan.
            </p>
            <p>
              Pemrosesan data, sebagaimana didefinisikan dalam Kebijakan Privasi, mencakup khususnya penyimpanan,
              pengelolaan, dan pengorganisasian data pribadi.
            </p>
            <p>
              Kami tidak mengumpulkan maupun mencoba mengumpulkan informasi tentang orang di bawah 18
              tahun. Kami juga tidak mengizinkan orang di bawah 18 tahun menggunakan platform kami untuk tujuan
              apa pun. Jika kami menemukan bahwa pengguna berusia di bawah 18 tahun, kami akan menghapus data itu segera.
            </p>
            <p class="bold-title">2. Data pribadi apa yang kami kumpulkan?</p>
            <p>
              Saat pendaftaran kami mengumpulkan data pribadi yang diperlukan untuk menggunakan layanan kami. Jika perlu,
              kami juga dapat meminta penyerahan data pribadi untuk verifikasi, misalnya untuk
              mengonfirmasi kepemilikan akun. Untuk meningkatkan dan menjaga kualitas tertinggi
              layanan kami, kami mengumpulkan dan menganalisis informasi tentang penggunaanmu atas platform kami dan
              layanan pihak ketiga terkait.
            </p>
            <p class="bold-title">
              3. Dalam keadaan apa pun kamu tidak wajib memberikan data pribadimu kepada perusahaan.
            </p>
            <p>
              Meskipun kamu tidak wajib memberikan datamu kepada kami, keputusan untuk tidak memberikannya
              dapat mengakibatkan keterbatasan dalam pemberian layanan kami. Selain itu, hal itu dapat menyebabkan
              keterbatasan dalam penggunaan platform kami.
            </p>
            <p class="bold-title">
              4. Data pribadi apa yang kami kumpulkan? Dengan mengakses situs kami, kami dapat mengumpulkan
              data pribadi berikut:
            </p>
            <p>
              Kami tidak mengumpulkan data yang mengidentifikasi kamu secara pribadi. Kami mengumpulkan informasi seperti
              aktivitas akunmu, alamat IP pengguna, serta tanggal dan waktu akses. Untuk pemeliharaan,
              keamanan, dan dukungan, kami menyimpan laporan kesalahan sistem, informasi browser, dan jenis
              perangkat yang kamu gunakan untuk mengakses akunmu. Kami juga mencatat bahasa yang diatur di akunmu.
            </p>
            <p>
              Terkait pengumpulan data pribadi, kami mengumpulkan dan menyimpan semata-mata informasi
              yang kamu berikan saat terhubung ke platform trading pihak ketiga melalui layanan kami.
            </p>
            <p>
              Data pribadi yang telah kamu berikan ke platform pihak ketiga dapat mencakup hal berikut:
              nama lengkap, alamat, nomor telepon, dan alamat email.
            </p>
            <p class="bold-title">
              5. Mengapa perusahaan membutuhkan data pribadiku dan apakah pemrosesannya sah?
            </p>
            <p>
              Perusahaan mengumpulkan, menyimpan, dan memproses data pribadimu semata-mata untuk
              tujuan yang diatur dalam kebijakan. Semua penggunaan dan pemrosesan yang disebutkan sesuai dengan
              hukum <?= e(geo_in()) ?> yang berlaku dan peraturan UE.
            </p>
            <p>
              Perusahaan akan mengelola, memproses, atau mentransfer datamu hanya sesuai dengan
              peraturan yang berlaku <?= e(geo_in()) ?>. Dasar hukum yang relevan tercantum di bawah:
            </p>
            <p class="circle">
              Kamu telah memberikan persetujuan untuk penyimpanan dan pemrosesan data pribadimu oleh
              perusahaan. Dengan menyerahkan datamu kepada perusahaan, kamu memberi kami wewenang untuk meneruskannya ke
              platform trading pihak ketiga yang sesuai. Selain itu, kamu telah memberikan persetujuan untuk
              pemrosesan data pribadimu untuk satu atau lebih tujuan.
            </p>
            <p class="circle">
              Untuk meningkatkan layanan, mengajukan atau membela klaim hukum, dan melindungi kepentingan
              yang sah, antara lain, perusahaan mungkin perlu menyimpan dan
              memproses data pribadimu.
            </p>
            <p class="circle">Untuk memenuhi kewajiban hukum, pemrosesan data diperlukan.</p>
            <p>
              Jika kamu ingin informasi lebih lanjut tentang pemrosesan data yang wajib dilakukan
              perusahaan, silakan hubungi kami melalui email.
            </p>
            <p>
              Di bawah ini kamu akan menemukan daftar tujuan khusus dan dasar hukum yang memberi kami wewenang
              untuk memproses data pribadimu.
            </p>
            <p class="green">Tujuan</p>
            <p class="green">Dasar hukum</p>
            <p>
              1. Untuk memudahkan aksesmu ke trading digital dan, semata-mata atas permintaanmu, kami
              akan membagikan data pribadimu dengan platform pihak ketiga. Datamu dapat dikumpulkan
              dan dibagikan kepada pihak ketiga, semata-mata atas permintaan dan kebijaksanaanmu.
            </p>
            <p>
              Kamu telah memberikan persetujuan untuk pemrosesan data pribadimu untuk satu atau lebih tujuan.
            </p>
            <p>
              2. Berikan kami informasi yang diperlukan agar kami dapat merespons dengan cepat dan
              efektif terhadap permintaan, kekhawatiran, dan pertanyaanmu tentang layanan kami.
            </p>
            <p>
              Untuk mengejar kepentingan sah perusahaan atau pihak ketiga yang disebutkan,
              pemrosesan data pribadi diperlukan.
            </p>
            <p>
              3. Untuk memenuhi kewajiban hukum dan administratif kami, pemrosesan data pribadi diperlukan.
            </p>
            <p>Untuk memenuhi kewajiban hukum kami, kami harus memproses data pribadi tertentu.</p>
            <p>
              4. Untuk meningkatkan layanan kami, kami membutuhkan data pribadi yang dianonimkan dan harus memantau penggunaan,
              termasuk laporan kesalahan.
            </p>
            <p>
              Untuk melindungi kepentingan sah perusahaan dan penyedia layanan
              eksternal, pemrosesan dan penyimpanan data pribadi diperlukan.
            </p>
            <p>5. Hal ini diperlukan untuk mencegah penipuan dan penyalahgunaan layanan kami.</p>
            <p>
              Untuk memastikan kepentingan sah perusahaan dan penyedia layanan pihak ketiga,
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Persyaratan layanan kami mewajibkan kami memantau dan melakukan pemrosesan data untuk
              pengembangan bisnis, keputusan strategis, pemantauan dan kepatuhan regulasi, serta
              kegiatan bisnis lainnya.
            </p>
            <p>
              Dengan tujuan melindungi kepentingan sah perusahaan dan penyedia layanan
              eksternal, pemrosesan dan penyimpanan data pribadi diperlukan.
            </p>
            <p>
              7. Kami menggunakan alat statistik dan analisis data untuk mendukung keputusan di spektrum
              luas layanan kami dan dalam perencanaan strategis.
            </p>
            <p>
              Untuk melindungi kepentingan sah perusahaan dan penyedia layanan
              eksternal, pemrosesan dan penyimpanan data pribadi diperlukan.
            </p>
            <p>
              8. Sejauh diperlukan untuk melindungi hak, properti, dan kepentingan
              perusahaan serta penyedia layanan pihak ketiga dan sesuai dengan semua hukum lokal serta
              peraturan yang berlaku, kontrak, dan ketentuan serta pedoman kami sendiri, kami dapat memproses
              data pribadi. Pemrosesan tersebut dilakukan semata-mata menurut prosedur yang diperlukan dan
              telah ditetapkan.
            </p>
            <p>
              Untuk melindungi kepentingan sah perusahaan dan setiap penyedia layanan
              pihak ketiga, pemrosesan dan penyimpanan data pribadi diperlukan.
            </p>
            <p class="bold-title">6. Berbagi data pribadi dengan pihak ketiga</p>
            <p>
              Untuk penyimpanan dan pemrosesan alamat IP, untuk survei dan analisis pengguna,
              serta layanan terkait lainnya, perusahaan dapat membagikan data pribadi yang dianonimkan kepada
              penyedia layanan eksternal.
            </p>
            <p>
              Atas permintaanmu kami akan membagikan sebagian data pribadi yang kamu berikan kepada penyedia
              layanan eksternal. Dalam hal itu, pemrosesan datamu tunduk pada
              Kebijakan Privasi perusahaan tersebut. Ini dapat mencakup berbagai platform trading digital.
            </p>
            <p>
              Dengan tujuan meningkatkan layanan pelanggan dan mengoptimalkan layanan kami secara umum,
              perusahaan dapat membagikan data pribadi kepada perusahaan afiliasi dan mitra bisnisnya.
            </p>
            <p>
              Jika diwajibkan secara hukum atau untuk melindungi hak dan properti perusahaan serta pihak
              ketiga terkait, kami dapat membagikan data kepada otoritas hukum atau pengawas yang relevan.
            </p>
            <p>
              Dalam kerangka operasi bisnis yang penting, seperti penjualan perusahaan,
              memperoleh investasi, atau mengajukan permohonan kredit, data yang relevan dapat dibagikan
              secara sah dan pantas. Hal ini juga berlaku untuk merger, restrukturisasi,
              konsolidasi, atau kepailitan perusahaan sesuai hukum.
            </p>
            <p class="bold-title">7. Cookie dan layanan pihak ketiga</p>
            <p>
              Untuk analisis situs dan bekerja sama dengan agen periklanan, cookie dan teknologi
              serupa lainnya dapat digunakan sesuai hukum dan praktik umum.
            </p>
            <p>
              Cookie, file teks kecil yang disimpan di perangkatmu saat kamu mengunjungi suatu situs, digunakan untuk
              mengumpulkan informasi tentang perilaku penelusuran, preferensi, dan data lainnya. Tujuannya
              adalah mempersonalisasi dan meningkatkan pengalamanmu. Cookie membantu kami mengingat
              pengaturan dan preferensimu serta menyesuaikan penawaran layanan. Cookie juga
              digunakan untuk analisis situs dan memperoleh statistik untuk perencanaan strategis.
            </p>
            <p>
              Umumnya, situs ini menggunakan dua jenis cookie: cookie sesi, yang disimpan
              hanya selama sesi browser dan dihapus saat kamu menutup browser;
              dan cookie persisten, yang tetap ada di browser bahkan setelah sesimu berakhir. Cookie
              yang terakhir memungkinkan situs mengenali kamu sebagai pengunjung yang kembali dan memudahkan penggunaan.
            </p>
            <p class="bold-title">Jenis cookie:</p>
            <p>Cookie dapat digunakan sesuai kebutuhan tergantung tujuannya:</p>
            <p class="green">Jenis cookie</p>
            <p>Cookie ini sangat diperlukan</p>
            <p class="green">Tujuan</p>
            <p>
              Cookie digunakan untuk mengidentifikasi kamu sebagai klien, sehingga kami dapat menyediakan informasi,
              pengaturan, dan layanan yang kamu minta.
              Cookie juga memudahkan navigasi di situs kami dan memungkinkan akses ke situs.
            </p>
            <p>
              Kami menggunakan cookie agar perangkatmu dapat mengunduh dan menayangkan konten. Cookie juga
              memungkinkan akses ke fungsi penting dan kembali ke halaman yang pernah dikunjungi.
            </p>
            <p class="green">Informasi tambahan</p>
            <p>
              Untuk memungkinkan akses cepat dan sederhana ke situs, cookie menyimpan dan memproses data
              pribadi tertentu, seperti nama pengguna dan tanggal akses terakhir, jika kamu meminta situs
              mengingatmu saat masuk.
            </p>
            <p>Cookie sesi dihapus saat kamu menutup browser.</p>
            <p class="green">Jenis cookie</p>
            <p>Cookie fungsional</p>
            <p class="green">Tujuan</p>
            <p>
              Dengan cookie kami dapat menyimpan dan menerapkan pengaturan serta preferensimu secara aman.
              Cookie juga memungkinkan kami mengenali kamu saat kamu mengunjungi situs kami.
            </p>
            <p class="green">Informasi tambahan</p>
            <p>
              Cookie persisten tetap tersimpan setelah sesi browser dan tetap aktif hingga
              tanggal kedaluwarsa.
            </p>
            <p class="green">Jenis cookie</p>
            <p>Cookie kinerja</p>
            <p class="green">Tujuan</p>
            <p>
              Untuk meningkatkan layanan kami, kami mengumpulkan data statistik menggunakan cookie. Cookie ini
              memberi kami informasi tentang kinerja situs dan penggunaannya.
            </p>
            <p class="green">Informasi tambahan</p>
            <p>
              Semua informasi yang disimpan melalui cookie bersifat anonim dan tidak memungkinkan identifikasi individu.
            </p>
            <p>
              Cookie sesi dihapus saat kamu menutup browser, sedangkan cookie persisten
              tetap aktif hingga tanggal kedaluwarsa atau tanpa batas, kecuali kamu menghapusnya secara manual.
            </p>
            <p>Cookie diblokir atau dihapus</p>
            <p>
              Jika kamu ingin menghapus atau memblokir cookie, kamu harus melakukannya di
              pengaturan browser. Lihat tautan berikut untuk petunjuk terperinci bagi browser yang paling populer.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Memblokir cookie dapat membuat beberapa fitur situs tidak berfungsi sebagaimana mestinya.
            </p>
            <p class="bold-title">Berapa lama kami menyimpan data pribadi</p>
            <p>
              Data pribadimu disimpan hanya selama benar-benar diperlukan untuk
              proses yang dibutuhkan, sebagaimana dinyatakan di bagian lain kebijakan ini. Data dapat disimpan lebih lama jika
              diwajibkan oleh hukum dan peraturan lokal serta kebijakan internal perusahaan.
            </p>
            <p>
              Data pribadimu dibagikan atas permintaan dan kebijaksanaanmu kepada platform trading
              pihak ketiga selama 12 bulan. Setelah periode itu berakhir dan dengan
              persetujuanmu, data itu dibagikan selama 12 bulan tambahan.
            </p>
            <p>
              Prosedur kami mengatur penilaian berkala atas semua data pribadi untuk menilai apakah
              data itu masih diperlukan atau tidak.
            </p>
            <p class="bold-title">
              9. Transfer data pribadi ke negara ketiga atau organisasi internasional
            </p>
            <p>
              Jika diperlukan untuk menyediakan layanan kami dan/atau demi keamanan, kami dapat mentransfer
              data pribadi ke negara lain (di luar negaramu) dan ke organisasi internasional
              dengan protokol keamanan yang komprehensif. Kami menerapkan langkah perlindungan data pada
              standar tertinggi untuk melindungi informasimu dan memastikan aksesmu ke upaya hukum
              dan hak menurut undang-undang setiap saat.
            </p>
            <p>
              Di Kawasan Ekonomi Eropa (EEA), semua penduduk menikmati perlindungan data dan jaminan.
            </p>
            <p class="circle">
              Transfer data selalu berlangsung di bawah yurisdiksi dan kewenangan UE, sesuai
              dengan standar dan protokol perlindungan data yang diatur dalam Pasal 45(3) Regulasi
              (UE) 2016/679 Parlemen Eropa dan Dewan tanggal 27 April 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Setiap transfer data antar badan atau otoritas publik berlangsung berdasarkan Pasal
              46(2). Ini adalah perjanjian yang mengikat secara hukum dan dapat ditegakkan.
            </p>
            <p class="circle">
              Klausul kontraktual standar Komisi Eropa berdasarkan Pasal 46.2.c) GDPR menetapkan
              syarat transfer data, dan transfer tersebut berlangsung sesuai dengan
              klausul itu. Kamu dapat melihat ketentuannya di
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Untuk informasi lebih lanjut tentang langkah keamanan khusus yang diambil perusahaan untuk
              melindungi data pribadimu selama transfer ke negara ketiga, kamu dapat mengirim permintaan
              melalui email ke <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Perlindungan data pribadi</p>
            <p>
              Data pribadi dilindungi oleh langkah teknis dan organisatoris pada tingkat
              tertinggi, yang diterapkan sesuai prosedur acuan. Prosedur ini efektif
              mencegah penghancuran data akibat peristiwa yang melanggar hukum atau tidak terduga, serta
              kehilangan atau perubahannya.
            </p>
            <p>
              Meskipun kami menerapkan kehati-hatian sebesar mungkin dan prosedur yang memenuhi standar
              perlindungan data paling ketat serta hukum, dalam segala keadaan tidak dapat dijamin
              bahwa data pribadimu bebas dari kesalahan. Oleh karena itu kami tidak dapat menerima tanggung jawab jika
              data pribadi mengalami kerusakan atau pengungkapan yang tidak disengaja, tidak material, atau konsekuensial.
              Ini mencakup situasi di luar kendali kami, seperti pengungkapan akibat kesalahan transmisi,
              akses tidak sah oleh pihak ketiga, atau penyebab serupa lainnya.
            </p>
            <p>
              Ketika kami menerima permintaan yang mengikat secara hukum dari otoritas pengawas atau badan
              pemerintah lain dengan kewenangan menurut undang-undang, kami mungkin wajib meneruskan data
              pribadimu kepada badan tersebut. Setelah diteruskan berdasarkan kewajiban hukum, kami tidak
              memiliki kendali atas cara badan itu menangani, menyimpan, atau melindungi datamu.
            </p>
            <p>
              Segala yang dikirim melalui internet, termasuk informasi pribadi, membawa risiko
              penyadapan tertentu dan tidak 100% aman. Perusahaan tidak dapat menjamin
              keamanan data yang dikirim secara daring.
            </p>
            <p class="bold-title">11. Tautan ke situs pihak ketiga</p>
            <p>
              Di situs ini kamu akan menemukan tautan ke aplikasi dan situs pihak ketiga. Perhatikan
              bahwa tautan itu tidak terhubung dengan perusahaan maupun di bawah kendalinya, dan bahwa
              Kebijakan Privasi kami tidak berlaku bagi pihak ketiga tersebut. Mereka beroperasi menurut
              prosedur dan prioritas mereka sendiri dalam mengumpulkan dan memproses data pribadi, oleh karena itu
              kami tidak menerima tanggung jawab atas aktivitas tersebut. Gunakan menurut kebijaksanaanmu sendiri.
            </p>
            <p>
              Selalu periksa Kebijakan Privasi perusahaan atau layanan saat kamu mengunjungi situsnya
              sebelum memberikan data pribadi. Verifikasi apakah aturan mereka tentang pengumpulan, penggunaan, dan
              pemrosesan sesuai dengan preferensi dan prioritasmu. Jika kamu memutuskan untuk berbagi data, bagikan
              langsung kepada penyedia layanan.
            </p>
            <p class="bold-title">12. Pembaruan kebijakan</p>
            <p>
              Kami berhak memperbarui atau mengubah kebijakan ini kapan saja. Kami akan memberitahumu
              tentang perubahan melalui situs dan saluran yang relevan. Versi terbaru Kebijakan
              Privasi akan dipublikasikan di situs, dan kebijakan yang direvisi berlaku
              segera setelah publikasi, kecuali dinyatakan lain.
            </p>
            <p class="bold-title">13. Hakmu terkait data pribadi</p>
            <p>
              Kamu memiliki kendali penuh dan kata akhir atas penggunaan semua data pribadimu, yang
              mencakup memverifikasi keakuratannya, memperbaiki kesalahan, serta hak penghapusan atau
              pembatasan pemrosesan data kami, baik dalam lingkup maupun sifatnya.
            </p>
            <p>Di halaman ini penduduk EEA akan menemukan informasi yang relevan bagi mereka:</p>
            <p>
              Data pribadimu dilindungi oleh hak yang dijelaskan di sini. Dengan mengirim email ke
              alamat di bawah, kamu dapat segera menjalankan hak-hak tersebut.
            </p>
            <p>Akses ke hakmu</p>
            <p>
              Jika data pribadi yang kamu berikan akurat, kamu dapat mengaksesnya kapan saja. Semua
              data pribadi yang kami proses tersedia bagi kami dan oleh karena itu dapat diverifikasi.
            </p>
            <p>
              Kapan saja kamu dapat meminta data pribadimu untuk verifikasi, dan data itu akan
              disediakan untukmu dalam bentuk elektronik. Jika kamu meminta salinan tambahan dari data
              yang diproses di luar salinan yang sudah diberikan, biaya yang wajar dapat dikenakan.
            </p>
            <p>
              Hak yang diakui oleh hukum dan Kebijakan Privasi tidak boleh memengaruhi hak pihak
              ketiga. Perusahaan berhak menolak atau membatasi akses ke data pribadi
              jika hal itu melanggar hak dan kebebasan pihak ketiga.
            </p>
            <p>Hak perbaikan kesalahan</p>
            <p>
              Setiap kesalahan dalam data pribadimu, baik karena kelalaian maupun informasi yang tidak akurat,
              dapat diperbaiki oleh kamu atau perusahaan untuk memastikan pemrosesan yang tepat.
            </p>
            <p>Hak penghapusan data</p>
            <p>
              Kamu berhak meminta penghapusan data pribadimu dalam keadaan
              berikut: 1) jika diproses tanpa persetujuanmu atau di luar batas hukum; 2)
              atas permintaanmu, jika kamu ingin data dihapus dan perusahaan tidak memiliki kewajiban hukum untuk
              menyimpannya; 3) jika kamu keberatan terhadap pemrosesan kami atau tidak lagi menyetujuinya, meskipun
              hal itu sah dan tercakup oleh kepentingan kami atau pihak ketiga; dan 4) jika hukum
              mewajibkan kami menghapusnya.
            </p>
            <p>
              Hak penghapusan tidak berlaku jika ada kewajiban hukum UE atau
              perundang-undangan negara anggota. Hak ini juga tidak berlaku jika data diperlukan untuk mengajukan atau
              membela klaim hukum.
            </p>
            <p>Hak pembatasan pemrosesan data</p>
            <p>
              Kamu berhak meminta pembatasan pemrosesan data pribadimu jika kamu
              yakin data itu mengandung ketidakakuratan.
            </p>
            <p>
              Jika kamu meminta pembatasan penggunaan data pribadimu, kami akan membatasi pemrosesannya, kecuali dalam
              kasus berikut: 1) jika perundang-undangan yang berlaku di Uni Eropa atau salah satu
              negara anggotanya mencegahnya; 2) dengan persetujuanmu, jika diperlukan untuk membela atau mengajukan
              klaim hukum; 3) untuk melindungi hak orang perseorangan lain.
            </p>
            <p>Hak portabilitas data</p>
            <p>
              Kamu berhak mengakses dan mengendalikan data pribadi yang telah kamu berikan, sejauh
              kamu telah memberikan persetujuan untuk pengumpulannya dengan cara apa pun dan jika pemrosesannya
              berlangsung melalui sistem otomatis.
            </p>
            <p>
              Kamu berhak meminta transfer semua data pribadimu ke perusahaan atau
              organisasi lain, sejauh secara teknis memungkinkan. Hak ini tidak memengaruhi
              hakmu untuk menghapus datamu. Hak ini tidak berlaku jika pelaksanaannya melanggar hak
              atau kebebasan orang perseorangan lain.
            </p>
            <p>Hak keberatan terhadap pemrosesan data</p>
            <p>
              Tanpa mengurangi hak perusahaan untuk mengejar kepentingan sah kami atau
              kepentingan pihak ketiga yang bertindak sebagai penyedia layanan, kamu berhak keberatan terhadap
              pemrosesan dan meminta penghentiannya. Hak ini tidak berlaku jika ada kebutuhan hukum
              yang mendesak untuk melanjutkan pemrosesan, baik untuk membela diri dari klaim hukum maupun untuk mengajukan
              klaim hukum. Dalam kasus tersebut kami dapat terus memproses data pribadimu.
            </p>
            <p>
              Kapan saja kamu dapat keberatan terhadap pemrosesan data pribadimu untuk tujuan pemasaran langsung.
            </p>
            <p>
              Hak menarik persetujuan
            </p>
            <p>
              Kamu dapat menarik persetujuanmu atas pemrosesan data pribadimu oleh kami kapan saja,
              berlaku segera. Penarikan itu tidak berlaku surut terhadap pemrosesan yang telah
              dilakukan sebelum penarikanmu.
            </p>
            <p>
              Jika kamu tidak puas karena alasan apa pun, kamu berhak mengajukan keluhan kepada
              badan hukum, pengawas, atau badan kontrol lainnya.
            </p>
            <p>
              Jika kamu yakin hak dan kebebasanmu terkait pemrosesan data pribadimu
              telah dilanggar, negara anggota Uni Eropa memiliki badan pengawas dan
              kontrol untuk tujuan itu. Kamu dapat mengajukan keluhan kepada badan tersebut jika kamu anggap pantas.
            </p>
            <p>
              Bagian 13 menjelaskan situasi di mana hakmu terkait data pribadi dapat
              dibatasi oleh hukum Uni Eropa atau negara anggota.
            </p>
            <p>
              Ketika kami menerima permintaanmu terkait data pribadimu dan pemrosesannya, kami akan
              memberimu akses ke informasi yang diminta sebagaimana dinyatakan dalam Bagian 13 kebijakan ini.
              Kami dapat memperpanjang jangka waktu ini hingga dua bulan tergantung pada lingkup permintaan
              dan sifat permintaanmu. Jika perlu, kami akan memberitahumu tentang perpanjangan
              dalam satu bulan setelah menerima permintaanmu.
            </p>
            <p>
              Kami akan mengirimkan informasi yang diminta secara elektronik dan tanpa biaya, kecuali
              hal itu bertentangan dengan hukum atau ketentuan di Bagian 13. Kami berhak
              mengenakan biaya yang wajar atau menolak permintaan jika dianggap tidak berdasar, berlebihan, atau berulang.
            </p>
            <p>
              Kami berhak meminta verifikasi identitas tambahan jika ada
              kecurigaan yang wajar tentang orang yang mengajukan permintaan data pribadi, untuk
              melindungi dan memastikan keamanan data.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

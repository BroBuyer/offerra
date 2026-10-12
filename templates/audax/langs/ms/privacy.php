<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Dasar Privasi | ' . SITE_NAME;
$page_description = 'Dasar Privasi untuk ' . SITE_NAME . '.';
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
            <h1>Dasar Privasi</h1>
            <p>
              Data peribadi dan aset kamu amat penting bagi kami. Kami sepenuhnya
              komited untuk melindunginya.
            </p>
            <p>
              <?= e(SITE_NAME) ?> mengumpul dan menyimpan data penting untuk transaksi dagangan kamu. Cara
              data ini dikumpul dan disimpan diterangkan dalam Dasar Privasi berikut.
            </p>
            <p>Dasar kami berasaskan prinsip berikut:</p>
            <p class="circle">
              Dengan tujuan memastikan ketelusan maksimum tentang proses kami mengumpul dan
              menyimpan data peribadi kamu:
            </p>
            <p>
              Matlamat kami ialah supaya kamu faham cara kami mengumpul dan memproses data kamu agar kamu boleh membuat
              keputusan berasaskan maklumat. Kami menggunakan garis panduan dan proses yang jelas untuk pemprosesan data di
              laman web ini. Dasar kami menerangkan secara terperinci kaedah khusus yang kami guna untuk memberi
              kamu maklumat yang jelas dan konkrit tentang penggunaan data. Kamu yang mengawal.
            </p>
            <p>
              Kami akan memaklumkan kamu dengan segera apabila kami anggap perlu. Ketelusan adalah
              amat penting bagi kami.
            </p>
            <p>
              Pasukan khusus kami sentiasa sedia menjawab semua soalan kamu tentang sebarang aspek
              proses kami, termasuk kewajipan kami di bawah undang-undang <?= e(geo_in()) ?> dan peraturan
              EU. Kamu boleh menghubungi kami di:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Tiada penggunaan lain data peribadi dibenarkan di pihak kami, kecuali seperti yang diperuntukkan dalam
              Dasar Privasi kami.
            </p>
            <p>
              Kami boleh memproses data peribadi untuk tujuan berikut, termasuk memastikan
              fungsi perkhidmatan <?= e(SITE_NAME) ?> yang betul dan menghubungkan ahli dagangan dengan platform
              dagangan pihak ketiga. Selain itu, pemprosesan mungkin perlu untuk mengekalkan dan menambah baik
              ciri dan perkhidmatan laman web; untuk melindungi hak kami dan memenuhi kewajipan undang-undang serta
              kewajipan lain. Akhirnya, data ini digunakan, jika perlu, untuk menyediakan fungsi pentadbiran
              dan perniagaan lain yang berkaitan dengan perkhidmatan yang diberikan kepada kamu, sebagai pelanggan.
            </p>
            <p>
              Untuk menawarkan perkhidmatan berkualiti lebih tinggi yang disesuaikan dengan keutamaan dan keperluan kamu, <?= e(SITE_NAME) ?>
              menggunakan data peribadi.
            </p>
            <p class="circle">
              Dengan tujuan menggunakan alat penting untuk melindungi data peribadi kamu dan menjaga hak
              kamu berhubung dengannya:
            </p>
            <p>
              Pada bila-bila masa kamu boleh menghubungi kami dan mendapatkan akses kepada semua data peribadi kamu. Kami juga boleh
              mengubah atau memadamnya jika perlu. Selain itu, kami memproses permintaan untuk memindahkan data
              itu kepada kamu atau pihak ketiga yang kamu tetapkan. Kami menawarkan perkhidmatan dan sokongan ini supaya kamu
              boleh melaksanakan hak privasi dan kawalan kamu dengan sepenuhnya.
            </p>
            <p class="circle">Lindungi data peribadi kamu:</p>
            <p>
              Sistem keselamatan kami berkualiti tinggi dan mempunyai langkah tahap bank. Walaupun
              perlindungan mutlak tidak dapat dijamin, kami komited untuk sentiasa mengekalkan sistem
              kami pada tahap tertinggi dan mengukuhkan langkah yang sudah dilaksanakan.
            </p>
            <p>
              Kami mempunyai dasar privasi yang menyeluruh dan terperinci serta sistem keselamatan bertaraf tinggi.
            </p>
            <p class="bold-title">1. Skop permohonan</p>
            <p>
              Dasar ini menerangkan prosedur kami untuk mengumpul, memproses dan mendedahkan semua
              data orang perseorangan.
            </p>
            <p>
              Peruntukan dasar kami terpakai kepada semua orang perseorangan yang boleh dikenal pasti atau
              telah dikenal pasti. Khususnya kepada setiap orang perseorangan yang boleh dikenal pasti berhubung
              dengan data yang diamanahkan kepada kami, yang kami ada akses dan/atau yang kami boleh gabungkan.
            </p>
            <p>
              Pemprosesan data, seperti yang ditakrifkan dalam Dasar Privasi, merangkumi khususnya penyimpanan,
              pengurusan dan penyusunan data peribadi.
            </p>
            <p>
              Kami tidak mengumpul dan tidak cuba mengumpul maklumat tentang orang di bawah 18 tahun
              umur. Kami juga tidak membenarkan orang di bawah 18 tahun menggunakan platform kami untuk sebarang
              tujuan. Jika kami mendapati pengguna berumur bawah 18 tahun, kami akan memadam data itu dengan segera.
            </p>
            <p class="bold-title">2. Apakah data peribadi yang kami kumpul?</p>
            <p>
              Semasa pendaftaran kami mengumpul data peribadi yang diperlukan untuk menggunakan perkhidmatan kami. Jika perlu,
              kami juga boleh meminta penyerahan data peribadi untuk pengesahan, contohnya untuk
              mengesahkan pemilikan akaun. Untuk menambah baik dan mengekalkan kualiti tertinggi
              perkhidmatan kami, kami mengumpul dan menganalisis maklumat tentang penggunaan platform kami oleh kamu dan
              perkhidmatan pihak ketiga yang berkaitan.
            </p>
            <p class="bold-title">
              3. Dalam apa jua keadaan, kamu tidak diwajibkan memberikan data peribadi kamu kepada syarikat.
            </p>
            <p>
              Walaupun kamu tidak diwajibkan memberikan data kamu kepada kami, keputusan untuk tidak berbuat demikian
              boleh mengakibatkan had dalam penyediaan perkhidmatan kami. Selain itu, ia boleh membawa
              kepada had dalam penggunaan platform kami.
            </p>
            <p class="bold-title">
              4. Apakah data peribadi yang kami kumpul? Dengan mengakses laman web kami, kami mungkin mengumpul
              data peribadi berikut:
            </p>
            <p>
              Kami tidak mengumpul data yang mengenal pasti kamu secara peribadi. Kami mengumpul maklumat seperti
              aktiviti akaun kamu, alamat IP pengguna, serta tarikh dan masa akses. Untuk penyelenggaraan,
              keselamatan dan sokongan, kami menyimpan laporan ralat sistem, maklumat pelayar, dan jenis
              peranti yang kamu guna untuk mengakses akaun kamu. Kami juga merekod bahasa yang ditetapkan pada akaun kamu.
            </p>
            <p>
              Berhubung pengumpulan data peribadi, kami mengumpul dan menyimpan semata-mata maklumat
              yang kamu berikan semasa menyambung ke platform dagangan pihak ketiga melalui perkhidmatan kami.
            </p>
            <p>
              Data peribadi yang kamu berikan kepada platform pihak ketiga mungkin merangkumi yang berikut:
              nama penuh, alamat, nombor telefon dan alamat e-mel.
            </p>
            <p class="bold-title">
              5. Mengapa syarikat memerlukan data peribadi saya dan adakah pemprosesan itu sah?
            </p>
            <p>
              Syarikat mengumpul, menyimpan dan memproses data peribadi kamu semata-mata untuk
              tujuan yang diperuntukkan dalam dasar. Semua penggunaan dan pemprosesan yang dinyatakan adalah selaras dengan
              undang-undang <?= e(geo_in()) ?> yang terpakai dan peraturan EU.
            </p>
            <p>
              Syarikat akan mengurus, memproses atau memindahkan data kamu hanya selaras dengan
              peraturan yang terpakai <?= e(geo_in()) ?>. Asas undang-undang yang berkenaan disenaraikan di bawah:
            </p>
            <p class="circle">
              Kamu telah memberi persetujuan untuk penyimpanan dan pemprosesan data peribadi kamu oleh
              syarikat. Dengan menyerahkan data kamu kepada syarikat, kamu memberi kuasa kepada kami untuk menghantarnya kepada
              platform dagangan pihak ketiga yang sesuai. Selain itu, kamu telah memberi persetujuan untuk
              pemprosesan data peribadi kamu untuk satu atau lebih tujuan.
            </p>
            <p class="circle">
              Untuk menambah baik perkhidmatan, mengemukakan atau mempertahankan tuntutan undang-undang, dan melindungi kepentingan
              sah, antara lain, syarikat mungkin perlu menyimpan dan
              memproses data peribadi kamu.
            </p>
            <p class="circle">Untuk memenuhi kewajipan undang-undang, pemprosesan data adalah perlu.</p>
            <p>
              Jika kamu mahu maklumat lanjut tentang pemprosesan data yang syarikat diwajibkan
              jalankan, sila hubungi kami melalui e-mel.
            </p>
            <p>
              Di bawah kamu akan menemui senarai tujuan khusus dan asas undang-undang yang memberi kuasa kepada kami
              untuk memproses data peribadi kamu.
            </p>
            <p class="green">Tujuan</p>
            <p class="green">Asas undang-undang</p>
            <p>
              1. Untuk memudahkan akses kamu kepada dagangan digital dan, semata-mata atas permintaan kamu, kami
              akan berkongsi data peribadi kamu dengan platform pihak ketiga. Data kamu mungkin dikumpul
              dan dikongsi dengan pihak ketiga, semata-mata atas permintaan kamu dan mengikut budi bicara kamu.
            </p>
            <p>
              Kamu telah memberi persetujuan untuk pemprosesan data peribadi kamu untuk satu atau lebih tujuan.
            </p>
            <p>
              2. Sila berikan kami maklumat yang perlu supaya kami boleh membalas dengan cepat dan
              berkesan kepada permintaan, kebimbangan dan soalan kamu tentang perkhidmatan kami.
            </p>
            <p>
              Bagi mengejar kepentingan sah syarikat atau pihak ketiga yang dinamakan,
              pemprosesan data peribadi adalah perlu.
            </p>
            <p>
              3. Untuk memenuhi kewajipan undang-undang dan pentadbiran kami, pemprosesan data peribadi adalah perlu.
            </p>
            <p>Untuk memenuhi kewajipan undang-undang kami, kami mesti memproses data peribadi tertentu.</p>
            <p>
              4. Untuk menambah baik perkhidmatan kami, kami memerlukan data peribadi tanpa nama dan mesti memantau penggunaan,
              termasuk laporan ralat.
            </p>
            <p>
              Bagi melindungi kepentingan sah syarikat dan penyedia perkhidmatan
              luar, pemprosesan dan penyimpanan data peribadi adalah perlu.
            </p>
            <p>5. Ini perlu untuk mencegah penipuan dan penyalahgunaan perkhidmatan kami.</p>
            <p>
              Untuk memastikan kepentingan sah syarikat dan penyedia perkhidmatan pihak ketiga,
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Keperluan perkhidmatan kami mewajibkan kami memantau dan menjalankan pemprosesan data untuk
              pembangunan perniagaan, keputusan strategik, pemantauan dan pematuhan kawal selia, serta
              aktiviti perniagaan lain.
            </p>
            <p>
              Dengan tujuan melindungi kepentingan sah syarikat dan penyedia perkhidmatan
              luar, pemprosesan dan penyimpanan data peribadi adalah perlu.
            </p>
            <p>
              7. Kami menggunakan alat statistik dan analisis data untuk menyokong keputusan merentas spektrum
              perkhidmatan kami yang luas dan dalam perancangan strategik.
            </p>
            <p>
              Bagi melindungi kepentingan sah syarikat dan penyedia perkhidmatan luar
              luar, pemprosesan dan penyimpanan data peribadi adalah perlu.
            </p>
            <p>
              8. Setakat yang perlu untuk melindungi hak, harta dan kepentingan
              syarikat serta penyedia perkhidmatan pihak ketiga dan selaras dengan semua undang-undang tempatan dan
              peraturan yang terpakai, kontrak, serta syarat dan garis panduan kami sendiri, kami boleh memproses
              data peribadi. Pemprosesan sedemikian berlaku semata-mata mengikut prosedur yang perlu dan
              telah ditetapkan.
            </p>
            <p>
              Bagi melindungi kepentingan sah syarikat dan setiap penyedia perkhidmatan
              pihak ketiga, pemprosesan dan penyimpanan data peribadi adalah perlu.
            </p>
            <p class="bold-title">6. Perkongsian data peribadi dengan pihak ketiga</p>
            <p>
              Untuk penyimpanan dan pemprosesan alamat IP, untuk menjalankan tinjauan dan analisis pengguna,
              dan untuk perkhidmatan berkaitan lain, syarikat boleh berkongsi data peribadi tanpa nama dengan
              penyedia perkhidmatan luar.
            </p>
            <p>
              Atas permintaan kamu, kami akan berkongsi sebahagian data peribadi yang kamu berikan dengan penyedia
              perkhidmatan luar. Dalam hal itu, pemprosesan data kamu tertakluk kepada
              Dasar Privasi syarikat itu. Ini mungkin merangkumi pelbagai platform dagangan digital.
            </p>
            <p>
              Dengan tujuan menambah baik khidmat pelanggan kami dan mengoptimumkan perkhidmatan kami secara am,
              syarikat boleh berkongsi data peribadi dengan syarikat bersekutu dan rakan niaga.
            </p>
            <p>
              Apabila dikehendaki oleh undang-undang atau untuk melindungi hak dan harta syarikat serta pihak
              ketiga yang berkaitan, kami boleh berkongsi data dengan pihak berkuasa undang-undang atau kawal selia yang berkenaan.
            </p>
            <p>
              Dalam rangka operasi perniagaan penting, seperti jualan syarikat,
              mendapatkan pelaburan, atau mengemukakan permohonan kredit, data yang berkenaan boleh dikongsi
              secara sah dan wajar. Ini juga terpakai kepada penggabungan, penstrukturan semula,
              penyatuan, atau insolvensi syarikat selaras dengan undang-undang.
            </p>
            <p class="bold-title">7. Kuki dan perkhidmatan pihak ketiga</p>
            <p>
              Untuk analisis laman web dan dengan kerjasama agensi pengiklanan, kuki dan teknologi
              serupa lain boleh digunakan selaras dengan undang-undang dan amalan biasa.
            </p>
            <p>
              Kuki, fail teks kecil yang disimpan pada peranti kamu apabila kamu melawat laman web, digunakan untuk
              mengumpul maklumat tentang tingkah laku pelayaran, keutamaan dan data lain kamu. Tujuan
              mereka ialah untuk memperibadikan dan menambah baik pengalaman pengguna kamu. Ia membantu kami mengingat
              tetapan dan keutamaan kamu serta menyesuaikan tawaran perkhidmatan kami. Ia juga
              digunakan untuk analisis laman web dan mendapatkan statistik bagi perancangan strategik.
            </p>
            <p>
              Secara am, laman web ini menggunakan dua jenis kuki: kuki sesi, yang disimpan
              hanya sepanjang sesi pelayar kamu dan dipadam apabila kamu menutup pelayar;
              dan kuki berterusan, yang kekal dalam pelayar kamu walaupun selepas sesi tamat. Kuki
              berterusan membolehkan laman web mengenali kamu sebagai pelawat berulang dan memudahkan penggunaan.
            </p>
            <p class="bold-title">Jenis kuki:</p>
            <p>Kuki boleh digunakan mengikut keperluan bergantung pada tujuan:</p>
            <p class="green">Jenis kuki</p>
            <p>Kuki ini adalah sangat diperlukan</p>
            <p class="green">Tujuan</p>
            <p>
              Kuki digunakan untuk mengenal pasti kamu sebagai pelanggan, supaya kami boleh menyediakan maklumat,
              tetapan dan perkhidmatan yang kamu minta.
              Ia juga memudahkan navigasi di laman web kami dan membolehkan akses kepadanya.
            </p>
            <p>
              Kami menggunakan kuki supaya peranti kamu boleh memuat turun dan menstrim kandungan. Ia juga
              membolehkan akses kepada fungsi penting dan kembali ke halaman yang dilawati sebelum ini.
            </p>
            <p class="green">Maklumat tambahan</p>
            <p>
              Untuk membolehkan akses pantas dan mudah ke laman web, kuki menyimpan dan memproses data
              peribadi tertentu, seperti nama pengguna dan tarikh akses terakhir, jika kamu meminta laman web
              mengingat kamu semasa log masuk.
            </p>
            <p>Kuki sesi dipadam apabila kamu menutup pelayar web.</p>
            <p class="green">Jenis kuki</p>
            <p>Kuki berfungsi</p>
            <p class="green">Tujuan</p>
            <p>
              Dengan kuki, kami boleh menyimpan dan menggunakan tetapan serta keutamaan kamu dengan selamat.
              Ia juga membolehkan kami mengenali kamu apabila kamu melawat laman web kami.
            </p>
            <p class="green">Maklumat tambahan</p>
            <p>
              Kuki berterusan kekal disimpan selepas sesi pelayar kamu dan kekal aktif sehingga
              tarikh luput.
            </p>
            <p class="green">Jenis kuki</p>
            <p>Kuki prestasi</p>
            <p class="green">Tujuan</p>
            <p>
              Untuk menambah baik perkhidmatan kami, kami mengumpul data statistik menggunakan kuki. Kuki ini
              memberi kami maklumat tentang prestasi laman web dan penggunaannya.
            </p>
            <p class="green">Maklumat tambahan</p>
            <p>
              Semua maklumat yang disimpan melalui kuki adalah tanpa nama dan tidak membolehkan pengenalan individu.
            </p>
            <p>
              Kuki sesi dipadam apabila kamu menutup pelayar, manakala kuki berterusan
              kekal aktif sehingga tarikh luput atau tanpa had masa, melainkan kamu memadamnya secara manual.
            </p>
            <p>Kuki disekat atau dipadam</p>
            <p>
              Jika kamu mahu mengalih keluar atau menyekat kuki, kamu mesti berbuat demikian dalam
              tetapan pelayar. Lihat pautan berikut untuk arahan terperinci bagi pelayar yang paling popular.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Menyekat kuki mungkin menyebabkan sesetengah ciri laman web tidak berfungsi seperti yang dimaksudkan.
            </p>
            <p class="bold-title">Berapa lama kami menyimpan data peribadi</p>
            <p>
              Data peribadi kamu disimpan hanya selama yang benar-benar perlu untuk
              proses yang dikehendaki, seperti yang dinyatakan dalam bahagian lain dasar ini. Ia boleh disimpan lebih lama jika
              dikehendaki oleh undang-undang dan peraturan tempatan serta dasar dalaman syarikat.
            </p>
            <p>
              Data peribadi kamu dikongsi atas permintaan kamu dan mengikut budi bicara kamu dengan platform
              dagangan pihak ketiga selama 12 bulan. Selepas tempoh itu tamat dan dengan persetujuan
              kamu, data itu dikongsi selama 12 bulan lagi.
            </p>
            <p>
              Prosedur kami memperuntukkan penilaian berkala semua data peribadi untuk menilai sama ada
              ia masih diperlukan atau tidak.
            </p>
            <p class="bold-title">
              9. Pemindahan data peribadi ke negara ketiga atau organisasi antarabangsa
            </p>
            <p>
              Apabila perlu untuk menyediakan perkhidmatan kami dan/atau atas sebab keselamatan, kami boleh memindahkan
              data peribadi ke negara lain (di luar negara kamu) dan kepada organisasi antarabangsa
              menggunakan protokol keselamatan yang menyeluruh. Kami melaksanakan langkah perlindungan data pada
              piawaian tertinggi untuk melindungi maklumat kamu dan memastikan akses kamu kepada remedi undang-undang
              dan hak statutori pada setiap masa.
            </p>
            <p>
              Di Kawasan Ekonomi Eropah (EEA), semua penduduk menikmati perlindungan data dan jaminan.
            </p>
            <p class="circle">
              Pemindahan data sentiasa berlaku di bawah bidang kuasa dan autoriti EU, selaras
              dengan piawaian dan protokol perlindungan data yang diperuntukkan dalam Perkara 45(3) Peraturan
              (EU) 2016/679 Parlimen Eropah dan Majlis bertarikh 27 April 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Sebarang pemindahan data antara badan awam atau pihak berkuasa berlaku di bawah Perkara
              46(2). Ini ialah perjanjian yang mengikat secara undang-undang dan boleh dikuatkuasakan.
            </p>
            <p class="circle">
              Klausa kontrak standard Suruhanjaya Eropah di bawah Perkara 46.2.c) GDPR menetapkan
              syarat pemindahan data, dan pemindahan sedemikian berlaku selaras dengan
              klausa itu. Kamu boleh melihat peruntukan tersebut di
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Untuk maklumat lanjut tentang langkah keselamatan khusus yang syarikat ambil untuk
              melindungi data peribadi kamu semasa pemindahan ke negara ketiga, kamu boleh menghantar permintaan
              melalui e-mel kepada <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Perlindungan data peribadi</p>
            <p>
              Data peribadi dilindungi oleh langkah teknikal dan organisasi pada tahap
              tertinggi, yang digunakan selaras dengan prosedur rujukan. Prosedur ini berkesan
              mencegah sebarang pemusnahan data akibat peristiwa haram atau tidak dijangka, serta
              kehilangan atau pengubahsuaiannya.
            </p>
            <p>
              Walaupun kami menggunakan penjagaan setinggi mungkin dan prosedur yang memenuhi piawaian
              perlindungan data yang paling ketat serta undang-undang, dalam semua keadaan tidak dapat dijamin
              bahawa data peribadi kamu bebas ralat. Oleh itu kami tidak dapat menerima liabiliti jika
              data peribadi mengalami kerosakan atau pendedahan tidak sengaja, tidak ketara atau berbangkit.
              Ini merangkumi situasi di luar kawalan kami, seperti pendedahan akibat ralat
              penghantaran, akses tanpa kebenaran oleh pihak ketiga, atau punca serupa lain.
            </p>
            <p>
              Apabila kami menerima permintaan yang mengikat secara undang-undang daripada pihak berkuasa kawal selia atau
              badan kerajaan lain yang mempunyai kuasa statutori, kami mungkin diwajibkan menghantar data
              peribadi kamu kepada badan itu. Setelah dihantar berasaskan kewajipan undang-undang, kami tiada
              kawalan ke atas cara badan itu mengurus, menyimpan atau melindungi data kamu.
            </p>
            <p>
              Segala yang dihantar melalui internet, termasuk maklumat peribadi, membawa
              risiko pemintasan tertentu dan tidak 100% selamat. Syarikat tidak dapat menjamin
              keselamatan data yang dihantar dalam talian.
            </p>
            <p class="bold-title">11. Pautan ke laman web pihak ketiga</p>
            <p>
              Di laman web ini kamu akan menemui pautan ke aplikasi dan laman web pihak ketiga. Sila
              ambil perhatian bahawa ia tidak berkaitan dengan syarikat dan tidak di bawah kawalannya, dan bahawa
              Dasar Privasi kami tidak terpakai kepada pihak ketiga itu. Mereka beroperasi mengikut
              prosedur dan keutamaan mereka sendiri untuk mengumpul dan memproses data peribadi, oleh itu
              kami tidak menerima liabiliti atas aktiviti itu. Gunakan mengikut budi bicara kamu sendiri.
            </p>
            <p>
              Sentiasa semak Dasar Privasi syarikat atau perkhidmatan apabila kamu melawat laman web mereka
              sebelum memberikan data peribadi. Sahkan sama ada peraturan mereka untuk pengumpulan, penggunaan dan
              pemprosesan sepadan dengan keutamaan kamu. Jika kamu memutuskan untuk berkongsi data, kongsikan
              terus dengan penyedia perkhidmatan.
            </p>
            <p class="bold-title">12. Kemas kini dasar</p>
            <p>
              Kami berhak mengemas kini atau mengubah dasar ini pada bila-bila masa. Kami akan memaklumkan kamu
              tentang perubahan melalui laman web dan saluran yang berkenaan. Versi terbaru Dasar
              Privasi akan diterbitkan di laman web, dan dasar yang disemak berkuat kuasa
              segera selepas penerbitan, melainkan dinyatakan sebaliknya.
            </p>
            <p class="bold-title">13. Hak kamu berhubung data peribadi</p>
            <p>
              Kamu mempunyai kawalan mutlak dan kata putus ke atas penggunaan semua data peribadi kamu, yang
              merangkumi pengesahan ketepatannya, pembetulan ralat, serta hak untuk pemadaman atau
              sekatan pemprosesan data kami, dari segi skop dan sifatnya.
            </p>
            <p>Di halaman ini, penduduk EEA akan menemui maklumat yang berkenaan bagi mereka:</p>
            <p>
              Data peribadi kamu dilindungi oleh hak yang diterangkan di sini. Dengan menghantar e-mel ke
              alamat di bawah, kamu boleh melaksanakan hak itu dengan segera.
            </p>
            <p>Akses kepada hak kamu</p>
            <p>
              Jika data peribadi yang kamu berikan adalah tepat, kamu boleh mengaksesnya pada bila-bila masa. Semua
              data peribadi yang kami proses tersedia kepada kami dan oleh itu boleh disahkan.
            </p>
            <p>
              Pada bila-bila masa kamu boleh meminta data peribadi kamu untuk pengesahan, dan ia akan
              disediakan kepada kamu dalam bentuk elektronik. Jika kamu meminta salinan tambahan data
              yang diproses di luar salinan yang sudah diberikan, yuran yang munasabah boleh dikenakan.
            </p>
            <p>
              Hak yang diiktiraf oleh undang-undang dan Dasar Privasi tidak boleh menjejaskan hak pihak
              ketiga. Syarikat berhak menolak atau menyekat akses kepada data peribadi
              jika ia melanggar hak dan kebebasan pihak ketiga.
            </p>
            <p>Hak untuk membetulkan ralat</p>
            <p>
              Sebarang ralat dalam data peribadi kamu, sama ada kerana ketinggalan atau maklumat tidak tepat,
              boleh dibetulkan oleh kamu atau syarikat untuk memastikan pemprosesannya yang wajar.
            </p>
            <p>Hak untuk memadam data</p>
            <p>
              Kamu berhak meminta pemadaman data peribadi kamu dalam keadaan
              berikut: 1) jika ia diproses tanpa persetujuan kamu atau di luar had undang-undang; 2)
              atas permintaan kamu, jika kamu mahu ia dipadam dan syarikat tiada kewajipan undang-undang untuk
              menyimpannya; 3) jika kamu membantah pemprosesan kami atau tidak lagi bersetuju dengannya, walaupun ia
              sah dan dilindungi oleh kepentingan kami atau pihak ketiga; dan 4) jika undang-undang
              mewajibkan kami memadamnya.
            </p>
            <p>
              Hak pemadaman tidak terpakai jika terdapat kewajipan undang-undang EU atau
              perundangan negara anggota. Ia juga tidak terpakai jika data diperlukan untuk mengejar atau
              mempertahankan tuntutan undang-undang.
            </p>
            <p>Hak untuk menyekat pemprosesan data</p>
            <p>
              Kamu berhak meminta sekatan pemprosesan data peribadi kamu jika kamu
              percaya ia mengandungi ketidaktepatan.
            </p>
            <p>
              Jika kamu meminta sekatan penggunaan data peribadi kamu, kami akan menyekat pemprosesannya, kecuali dalam
              kes berikut: 1) jika perundangan yang terpakai di Kesatuan Eropah atau salah satu
              negara anggotanya menghalangnya; 2) dengan persetujuan kamu, jika perlu untuk mempertahankan atau mengejar
              tuntutan undang-undang; 3) untuk melindungi hak orang perseorangan lain.
            </p>
            <p>Hak kebolehalihan data</p>
            <p>
              Kamu berhak mengakses dan mengawal data peribadi yang kamu berikan, setakat
              kamu telah memberi persetujuan untuk pengumpulannya dalam apa jua cara dan jika pemprosesannya
              berlaku melalui sistem automatik.
            </p>
            <p>
              Kamu berhak meminta pemindahan semua data peribadi kamu kepada syarikat atau
              organisasi lain, setakat yang mungkin secara teknikal. Hak ini tidak menjejaskan
              hak kamu untuk memadam data kamu. Ia tidak terpakai jika pelaksanaannya melanggar hak
              atau kebebasan orang perseorangan lain.
            </p>
            <p>Hak untuk membantah pemprosesan data</p>
            <p>
              Tanpa menjejaskan hak syarikat untuk mengejar kepentingan sah kami atau
              kepentingan pihak ketiga yang bertindak sebagai penyedia perkhidmatan, kamu berhak membantah
              pemprosesan dan meminta ia dihentikan. Hak ini tidak terpakai jika terdapat keperluan
              undang-undang yang mendesak untuk meneruskan pemprosesan, sama ada untuk mempertahankan tuntutan undang-undang atau untuk mengejar
              tuntutan undang-undang. Dalam kes sedemikian kami boleh terus memproses data peribadi kamu.
            </p>
            <p>
              Pada bila-bila masa kamu boleh membantah pemprosesan data peribadi kamu untuk tujuan pemasaran langsung.
            </p>
            <p>
              Hak untuk menarik balik persetujuan
            </p>
            <p>
              Kamu boleh menarik balik persetujuan kamu untuk pemprosesan data peribadi kamu oleh kami pada bila-bila masa,
              dengan kesan segera. Penarikan balik itu tiada kesan undur ke atas pemprosesan yang dijalankan
              sebelum penarikan balik kamu.
            </p>
            <p>
              Jika kamu tidak berpuas hati atas apa-apa sebab, kamu berhak merafukan aduan kepada
              badan undang-undang, kawal selia atau badan kawalan lain.
            </p>
            <p>
              Jika kamu percaya hak dan kebebasan kamu berhubung pemprosesan data peribadi kamu
              telah dilanggar, negara anggota Kesatuan Eropah mempunyai badan kawal selia dan
              kawalan untuk tujuan itu. Kamu boleh merafukan aduan kepada badan itu jika kamu anggap sesuai.
            </p>
            <p>
              Bahagian 13 menerangkan situasi di mana hak kamu berhubung data peribadi mungkin
              dihadkan oleh undang-undang Kesatuan Eropah atau negara anggota.
            </p>
            <p>
              Apabila kami menerima permintaan kamu berhubung data peribadi kamu dan pemprosesannya, kami akan
              memberi kamu akses kepada maklumat yang diminta seperti yang dinyatakan dalam Bahagian 13 dasar ini.
              Kami boleh memanjangkan tempoh ini sehingga dua bulan bergantung pada skop permintaan
              dan sifat permintaan kamu. Jika perlu, kami akan memaklumkan kamu tentang pelanjutan
              dalam masa satu bulan selepas menerima permintaan kamu.
            </p>
            <p>
              Kami akan menghantar maklumat yang diminta secara elektronik dan percuma, melainkan
              ini bercanggah dengan undang-undang atau peruntukan dalam Bahagian 13. Kami berhak
              mengenakan yuran yang munasabah atau menolak permintaan jika ia dianggap tidak berasas, berlebihan atau berulang.
            </p>
            <p>
              Kami berhak meminta pengesahan identiti tambahan jika terdapat
              syak yang munasabah tentang orang yang menghantar permintaan data peribadi, bagi
              melindungi dan memastikan keselamatan data.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

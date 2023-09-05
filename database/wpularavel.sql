/*
 Navicat Premium Data Transfer

 Source Server         : VieryDB
 Source Server Type    : MySQL
 Source Server Version : 50733 (5.7.33)
 Source Host           : localhost:3306
 Source Schema         : wpularavel

 Target Server Type    : MySQL
 Target Server Version : 50733 (5.7.33)
 File Encoding         : 65001

 Date: 05/09/2023 11:20:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, 1, 1, 'Praktik Kerja Lapangan - CV Argia Teknologi Nusantara', 'praktik-kerja-lapangan-cv-argia-teknologi-nusantara', 'post-images/K14K2nNYizgAW0r31lbmmauLGKcM4GG2Uqk1r0Ah.jpg', 'Praktik Kerja Lapangan - CV Argia Teknologi NusantaraDilaksanakan pada tahun 2020 selama +- 6 bulan....', '<p>Praktik Kerja Lapangan - <strong>CV Argia Teknologi Nusantara</strong></p><p>Dilaksanakan pada tahun 2020 selama +- 6 bulan.</p><p>Mengerjakan berbagai macam proyek dan menyelenggarakan event-event.</p>', NULL, '2023-09-03 15:52:10', '2023-09-03 15:52:10');
INSERT INTO `blogs` VALUES (6, 2, 4, 'FMD - Indonesia vs Turkmenistan', 'fmd-indonesia-vs-turkmenistan', 'post-images/scgUoyTcw0vzwD0B9DPEWQB73EssxeiVVjHewHdZ.jpg', 'Jakarta, CNN Indonesia -- Timnas Indonesia&nbsp;punya rapor positif saat bentrok dengan Turkmenistan...', '<p>Jakarta, CNN Indonesia -- Timnas Indonesia&nbsp;punya rapor positif saat bentrok dengan Turkmenistan. Sempat kalah pada duel pertama, kini Indonesia dominan menang.<br>Pertemuan pertama Indonesia dengan Turkmenistan terjadi pada 31 Maret 2004 di Stadion Olimpiade Ashgabat. Duel ini terjadi dalam Kualifikasi Piala Dunia 2006.<br><br>Di laga perdana itu, Indonesia&nbsp;kalah 1-3. Satu-satunya gol Indonesia dalam duel ini dicetak Budi Sudarsono. Adapun tiga gol Turkmenistan dilesakkan Vladimir Bayramov (2 gol) dan Begencmuhamed Kuliyew.<br><br>Baca artikel CNN Indonesia \"Head to Head Timnas Indonesia vs Turkmenistan\" selengkapnya di sini: <a href=\"https://www.cnnindonesia.com/olahraga/20230904125917-142-994477/head-to-head-timnas-indonesia-vs-turkmenistan\">https://www.cnnindonesia.com/olahraga/20230904125917-142-994477/head-to-head-timnas-indonesia-vs-turkmenistan</a>.<br><br>Download Apps CNN Indonesia sekarang https://app.cnnindonesia.com/</p>', NULL, '2023-09-04 09:08:35', '2023-09-04 09:08:35');
INSERT INTO `blogs` VALUES (7, 2, 3, '5 Pemain Belum Gabung Timnas Indonesia U-23 untuk Kualifikasi Piala Asia U-23 2034, Siapa Saja?', 'timnas-indonesia-u-23', 'post-images/fVeyP5yBAym8Zki21eSvUn1KKfh4hLlgGrpbXocq.jpg', 'Bola.net - Pemusatan latihan (TC) Timnas Indonesia U-23 yang berlangsung di Solo, Jawa Tengah, untuk...', '<p><strong>Bola.net - </strong>Pemusatan latihan (TC) <a href=\"https://www.bola.net/tag/timnas-indonesia-u-23/\">Timnas Indonesia U-23</a> yang berlangsung di Solo, Jawa Tengah, untuk persiapan <a href=\"https://www.bola.net/tag/kualifikasi-piala-asia-u-23-2024/\">Kualifikasi Piala Asia U-23 2024</a> belum diikuti semua pemain yang dipanggil. Dari 27 nama, baru 22 personel yang memenuhi panggilan.</p><p>Lima nama yang belum merapat adalah Pratama Arhan, Elkan William Tio Baggott, Marselino Ferdinan, Ivar Jenner, dan Rafael William Struick. Kelimanya berstatus pemain <i>abroad</i>, atau yang berkarier di luar negeri.</p><p>\"Pratama Arhan rencananya baru bergabung hari ini,\" ujar asisten pelatih Timnas Indonesia, Nova Arianto, saat dihubungi Bola.net, Senin (4/9).</p><p>\"Kalau Elkan William Tio Baggott, Marselino Ferdinan, Ivar Jenner, dan Rafael William, rencananya baru tiba tanggal 5 September,\" katanya menambahkan.</p><p>TC Timnas Indonesia U-23 proyeksi Kualifikasi Piala Asia U-23 2024 akan dimulai hari ini, Senin (4/8). Namun, TC perdana belum dipimpin oleh pelatih Shin Tae-yong.</p><p>\"Hari ini, Timnas Indonesia U-23 latihan perdana sore nanti. <i>Coach</i> Shin Tae-yong baru berangkat ke Solo besok, Selasa (5/9),\" ucap Nova.</p>', NULL, '2023-09-04 14:39:04', '2023-09-04 14:39:04');
INSERT INTO `blogs` VALUES (9, 2, 1, 'Shin Tae-yong: 4 Pemain Timnas Indonesia Cedera dan Absen Lawan Turkmenistan, Promosikan 3 Nama dari Timnas Indonesia U-23', 'shin-tae-yong:-4-pemain-timnas-indonesia-cedera-dan-absen-lawan-turkmenistan,-promosikan-3-nama-dari-timnas-indonesia-u-23', 'post-images/TdYRN6I5ySZCdWtq5Fiqv1BueIOU0HBp0RCvbgHK.jpg', 'Bola.net - Timnas Indonesia menggelar latihan perdana untuk persiapan FIFA Matchday melawan Turkmeni...', '<p><strong>Bola.net - </strong><a href=\"https://www.bola.net/tag/timnas-indonesia/\">Timnas Indonesia</a> menggelar latihan perdana untuk persiapan FIFA Matchday melawan <a href=\"https://www.bola.net/tag/turkmenistan/\">Turkmenistan</a>. Latihan berlangsung di Lapangan Thor, Surabaya, Jawa Timur, pada Senin (4/9/2023).</p><p>Dalam latihan perdana tersebut, empat pemain diketahui mengalami cedera bersama klubnya. Keempatnya yaitu Shayne Pattynama, Yakob Sayuri, Yance Sayuri, dan Dimas Drajad.</p><p>Alhasil, keempatnya tidak dapat membela Timnas Indonesia pada laga kontra Turkmenistan. Duel tersebut bakal digelar di Stadion Gelora Bung Tomo (GBT), Jumat (8/9).</p><p>\"Shayne, Yacob, Yance, dan Dimas, empat orang ini cedera di liga. Jadi kemungkinan besar absen pada pertandingan tanggal 8 September,\" ujar pelatih Timnas Indonesia, Shin Tae-yong disadur dari laman PSSI.</p><p>&nbsp;</p><p>Sebagai gantinya, pelatih asal Korea Selatan itu akan memanggil tiga penggawa Timnas Indonesia U-23. Ketiganya yaitu Alfeandra Dewangga Santosa, Doni Tri Pamungkas, dan Muhammad Dzaky Asraf.</p><p>Ketiganya saat ini sedang berada di Solo, Jawa Tengah, untuk menjalani pemusatan latihan (TC) bersama Timnas Indonesia U-23. TC tersebut digelar buat Kualifikasi Piala Asia U-23 2024.</p><p>\"Tidak ada wajah baru, kami cuma satu kali pertandingan melawan Turkmenistan. Jadi kami akan panggil dari Timnas Indonesia U-23 yakni Dewangga, Donny, dan Dzaky,\" imbuh Shin Tae-yong.</p><p><strong>(Bola.net/Fitri Apriani)</strong></p>', NULL, '2023-09-04 15:38:04', '2023-09-04 15:38:04');
INSERT INTO `blogs` VALUES (10, 7, 1, 'Detail lengkap M4, tanggal, tim peserta dan prize pool', 'detail-lengkap-m4,-tanggal,-tim-peserta-dan-prize-pool', 'post-images/TCvuNFuCLgRWoaI5qjefwjt59Zq7bqtPfrzDMWNy.png', 'M4 World Championship di Indonesia bukan bualan semata! Moonton resmi menyatakan berbagai detail pen...', '<p>M4 World Championship di Indonesia bukan bualan semata! Moonton resmi menyatakan berbagai detail penting tentang turnamen kelas dunia Mobile Legends: Bang Bang (MLBB) tersebut mulai dari tanggal turnamen, tim peserta dan prize pool, Sabtu (20/8).</p><p>Sebagai salah satu kompetisi kelas dunia yang cukup dinantikan oleh para pemain dan penggemar, M4 akhirnya berlabuh di Indonesia sebagai salah satu negara dengan jumlah pemain profesional dan basis penggemar yang sangat masif di seluruh penjuru dunia.</p><p>Walau sebenarnya rencana pelaksanaan kompetisi M2 Championship dulunya akan digelar di Indonesia. Akan tetapi, kondisi pandemi COVID-19 mengakibatkan hal tersebut harus diundur. Kini, kabar gembira tersebut telah hadir untuk kita semua.</p><p>Kompetisi M4 World Championship di Indonesia, akan diadakan di Jakarta, dan dilaksanakan pada tanggal 1-15 January 2023 mendatang.</p><p>Kompetisi kelas dunia tersebut akan diikuti oleh 16 tim esports MLBB terbaik dari seluruh penjuru dunia yang akan bersaing memperebutkan trofi juara dan hadiah uang tunai.</p><p>Berikut adalah detail tim partisipan M4 World Championship:</p><figure class=\"table\"><table><tbody><tr><td><strong>REGION</strong></td><td><strong>TURNAMEN KUALIFIKASI</strong></td><td><strong>LOLOS KE M4</strong></td></tr><tr><td>INDONESIA</td><td>MPL INDONESIA</td><td>RRQ Hoshi, ONIC Esports</td></tr><tr><td>FILIPINA</td><td>MPL PHILIPPINES</td><td>Blacklist International, ECHO</td></tr><tr><td>MALAYSIA</td><td>MPL MALAYSIA</td><td>Team HAQ, Todak</td></tr><tr><td>SINGAPURA</td><td>MPL SINGAPORE</td><td>RSG Singapore</td></tr><tr><td>KAMBOJA</td><td>MPL CAMBODIA</td><td>Burn x Flash</td></tr><tr><td>TIMUR TENGAH</td><td>MPL MENA</td><td>Thrones Esports</td></tr><tr><td>MYANMAR</td><td>MYANMAR QUALIFIER</td><td>Falcon Esports</td></tr><tr><td>TURKI</td><td>TURKEY</td><td>Incendio Supreme</td></tr><tr><td>AMERIKA UTARA</td><td>NORTH AMERICA</td><td>Team Valley</td></tr><tr><td>LATAM</td><td>MLSL</td><td>S11 Gaming, Malvinas Gaming</td></tr><tr><td>BRASIL</td><td>MPL BRAZIL</td><td>RRQ Akira</td></tr><tr><td>THAILAND, LAOS, AND VIETNAM</td><td>MEKONG QUALIFIER</td><td>MDH Esports</td></tr></tbody></table></figure>', NULL, '2023-09-04 16:20:16', '2023-09-04 16:20:16');
INSERT INTO `blogs` VALUES (11, 9, 4, 'Rawon Jadi Sup Terenak di Dunia, Ramen Jepang Kalah', 'rawon-jadi-sup-terenak-di-dunia,-ramen-jepang-kalah', 'post-images/5W71JFVby2jktZjUhDRcO6hTLf90qErjelX3r9F1.jpg', 'Jakarta, CNBC Indonesia - Sup daging khas Jawa Timur, rawon, resmi menjadi sup terenak di dunia menu...', '<p><strong>Jakarta, CNBC Indonesia - </strong>Sup daging khas Jawa Timur, rawon, resmi menjadi sup terenak di dunia menurut daftar \'10 Best Rated Soups in the World\' oleh Taste Atlas pada 2023.</p><p>Menurut daftar yang dirilis pada 31 Juli 2023 tersebut, rawon mendapatkan raihan bintang senilai 4,8. Angka tersebut mengungguli sembilan sup khas negara lainnya yang juga masuk ke dalam daftar tersebut.</p><p>Menariknya, sajian khas Jawa Timur berupa potongan daging dalam kuah hitam ini berhasil mengalahkan sup mi asal Jepang, ramen.</p><p>\"Rawon adalah masakan unik Indonesia yang berasal dari Jawa Timur. Sup beraroma ini dibuat dengan daging sapi yang dimasak perlahan dan bahan-bahan tradisional Indonesia lainnya, seperti daun jeruk, serai, jahe, dan cabai,\" tulis Taste Atlas, dikutip Selasa (1/8/2023).</p><p>Dalam ulasan daftar tersebut, Taste Atlas menyoroti penggunaan buah kluwek atau kenari hitam sebagai \'elemen kunci\' resep rawon. Sebab, buah kluwek terkenal sangat beracun jika dimakan mentah.</p><p>\"Rempah Indonesia yang tidak lazim ini sangat beracun jika dimakan mentah dan selalu harus difermentasi sebelum dikonsumsi,\" tulis Taste Atlas.</p><p>\"Buah kluwek ini dihaluskan dengan bahan dan rempah lainnya, memberikan cita rasa khas yang gurih dan asam serta warna hitam gelap yang unik pada masakan ini,\" lanjut ulasan tersebut.</p><p>Sebagai informasi, rawon adalah sup khas Jawa Timur yang diduga berasal dari Ponorogo. Menurut catatan sejarah, rawon tercatat dalam prasasti Taji dari 902 Masehi melalui kata \'Rarrawan\'. Ciri khas utama yang membedakan rawon dengan sup asal Indonesia lainnya adalah menggunakan buah kluwek.</p><p>Serupa dengan yang diulas oleh Taste Atlas, buah kluwek memberikan warna hitam sebagai ciri khas rawon yang tidak dapat digantikan. Bila tidak menggunakan buah kluwek, rawon hanya akan menjadi sup biasa.</p><p>Berikut daftar lengkap 10 sup terenak di dunia versi Taste Atlas.</p><p>1. Rawon (Surabaya, Indonesia)</p><p>2. Ramen Tonkotsu (Fukuoka, Jepang)</p><p>3. Tom Kha Gai (Thailand)</p><p>4. Sopa de Lima (Yucatan, Meksiko)</p><p>5. Taiwanese Hot Pot (Taiwan)</p><p>6. Ciorba Radauteana (Radauti, Romania)</p><p>7. Bori-bori (Paraguay)</p><p>8. Ramen (Jepang)</p><p>9. Shoyu Ramen (Tokyo, Jepang)</p><p>10. Zurek (Polandia)</p>', NULL, '2023-09-04 16:24:04', '2023-09-04 16:24:04');
INSERT INTO `blogs` VALUES (12, 3, 1, 'Laravel', 'laravel', 'post-images/bzbqhIyF2nMX7ntWSZbkFBqsA9xgH2GhPu9oSKgm.png', 'Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Mode...', '<p><strong>Laravel</strong> adalah kerangka kerja aplikasi web berbasis <a href=\"https://id.wikipedia.org/wiki/PHP\">PHP</a> yang <a href=\"https://id.wikipedia.org/wiki/Sumber_terbuka\">sumber terbuka</a>, menggunakan konsep <a href=\"https://id.wikipedia.org/wiki/MVC\">Model-View-Controller</a> (MVC). Laravel berada dibawah <a href=\"https://id.wikipedia.org/wiki/Lisensi_MIT\">lisensi MIT</a>, dengan menggunakan <a href=\"https://id.wikipedia.org/wiki/GitHub\">GitHub</a> sebagai tempat berbagi kode.<a href=\"https://id.wikipedia.org/wiki/Laravel#cite_note-docs-3.x-3\">[3]</a><a href=\"https://id.wikipedia.org/wiki/Laravel#cite_note-docs-4.x-4\">[4]</a><a href=\"https://id.wikipedia.org/wiki/Laravel#cite_note-sitepoint-5\">[5]</a></p><p>Pada bulan Desember 2013, Laravel menempati kerangka kerja PHP terpopuler dan berada di atas kerangka kerja PHP lain seperti <a href=\"https://id.wikipedia.org/w/index.php?title=Phalcon_(kerangka_kerja)&amp;action=edit&amp;redlink=1\">Phalcon</a>, <a href=\"https://id.wikipedia.org/wiki/Symfony\">Symfony</a>, <a href=\"https://id.wikipedia.org/wiki/CodeIgniter\">CodeIgniter</a>, dan lainnya.<a href=\"https://id.wikipedia.org/wiki/Laravel#cite_note-6\">[6]</a></p><p>&nbsp;</p><p><strong>Sejarah rilis[</strong><a href=\"https://id.wikipedia.org/w/index.php?title=Laravel&amp;veaction=edit&amp;section=1\"><strong>sunting</strong></a><strong> | </strong><a href=\"https://id.wikipedia.org/w/index.php?title=Laravel&amp;action=edit&amp;section=1\"><strong>sunting sumber</strong></a><strong>]</strong></p><p>Versi LTS akan mendapat dukungan selama 2 tahun untuk perbaikan <a href=\"https://id.wikipedia.org/wiki/Kutu_(komputer)\">bug</a> dan dukungan selama 3 tahun untuk perbaikan keamanan. Versi lain yang non-LTS hanya akan mendapatkan dukungan selama 6 bulan untuk perbaikan bug dan dukungan selama 1 tahun untuk perbaikan keamanan.<a href=\"https://id.wikipedia.org/wiki/Laravel#cite_note-7\">[7]</a></p>', NULL, '2023-09-04 16:28:01', '2023-09-04 16:28:01');
INSERT INTO `blogs` VALUES (13, 3, 1, 'React JS: Pengertian, Sejarah, Fitur, Kelebihan, Dan Kekurangan', 'react-js:-pengertian,-sejarah,-fitur,-kelebihan,-dan-kekurangan', 'post-images/vsMVKqoWZdeklOfR3j8NROOiQNh69nHDX9RoUoqJ.jpg', 'Pengertian React JSReact JS adalah open-source library atau pustaka JavaScript yang dikembangkan ole...', '<h2><strong>Pengertian React JS</strong></h2><p>React JS adalah open-source library atau pustaka JavaScript yang dikembangkan oleh Facebook. Ini digunakan untuk membangun antarmuka pengguna interaktif dan aplikasi web dengan cepat dan efisien dengan kode yang jauh lebih sedikit daripada yang anda lakukan dengan vanilla JavaScript.<br><br>Di React, anda dapat mengembangkan aplikasi dengan membuat komponen yang dapat digunakan kembali yang dapat dianggap sebagai blok lego independen. Komponen-komponen ini adalah bagian individual dari antarmuka akhir yang saat dirakit membentuk seluruh antarmuka pengguna aplikasi.<br><br>Peran utama React dalam sebuah aplikasi adalah untuk menangani layer tampilan aplikasi seperti V dalam pola model-view-controller (MVC) dengan memberikan eksekusi rendering terbaik dan paling efisien. Daripada berurusan dengan seluruh antarmuka pengguna sebagai single unit, React JS mendorong pengembang untuk memisahkan UI kompleks ini menjadi komponen individu yang dapat digunakan kembali yang membentuk blok bangunan dari keseluruhan UI. Dengan demikian, kerangka kerja React JS menggabungkan kecepatan dan efisiensi JavaScript dengan metode manipulasi DOM yang lebih efisien untuk merender halaman web lebih cepat dan membuat aplikasi web yang sangat dinamis dan responsif.</p><p>&nbsp;</p><h2><strong>Sejarah React JS</strong></h2><p>Pada tahun 2011, Facebook memiliki basis pengguna yang sangat besar dan menghadapi tugas yang menantang. Facebook ingin menawarkan pengalaman pengguna yang lebih kaya kepada pengguna dengan membangun antarmuka pengguna yang lebih dinamis dan lebih responsif yang cepat dan memiliki kinerja tinggi.<br><br>Jordan Walke, salah satu insinyur perangkat lunak Facebook, menciptakan React untuk melakukan hal itu. React menyederhanakan proses pengembangan dengan menyediakan cara yang lebih terorganisir dan terstruktur untuk membangun antarmuka pengguna yang dinamis dan interaktif dengan komponen yang dapat digunakan kembali.<br><br>Facebook newsfeed menggunakannya terlebih dahulu. Karena pendekatan revolusionernya terhadap manipulasi DOM dan antarmuka pengguna, React secara dramatis mengubah pendekatan Facebook terhadap pengembangan web dan dengan cepat menjadi populer di ekosistem JavaScript setelah dirilis ke komunitas open-source.<br><br>Sekarang, React JS sudah banyak digunakan aplikasi besar seperti Airbnb, Reddit, dan Netflix dalam struktur desainnya.</p><p>&nbsp;</p><h2><strong>Mengapa Menggunakan React JS?</strong></h2><p>Berikut ini adalah beberapa alasan mengapa popularitas React telah melampaui semua framework pengembangan front-end lainnya, diantaranya:<br><br><strong>1.&nbsp;&nbsp; &nbsp;Mudah dalam pembuatan aplikasi dinamis</strong><br>React mempermudah pembuatan aplikasi web dinamis karena memerlukan lebih sedikit pengkodean dan menawarkan lebih banyak fungsionalitas, berbeda dengan JavaScript, di mana pengkodenya sering kali menjadi rumit dengan sangat cepat.<br><br><strong>2.&nbsp;&nbsp; &nbsp;Peningkatan kinerja</strong><br>React menggunakan Virtual DOM, sehingga membuat aplikasi web lebih cepat. Virtual DOM membandingkan status komponen sebelumnya dan hanya memperbarui item di Real DOM yang diubah alih-alih memperbarui semua komponen lagi seperti yang dilakukan aplikasi web konvensional.<br><br><strong>3.&nbsp;&nbsp; &nbsp;Komponen yang dapat digunakan kembali</strong><br>Komponen adalah blok bangunan dari aplikasi React apa pun dan satu aplikasi biasanya terdiri dari beberapa komponen. Komponen ini memiliki logika dan kontrolnya sendiri dan dapat digunakan kembali dalam aplikasi yang berbeda, yang pada gilirannya secara signifikan akan mengurangi waktu pengembangan aplikasi.<br><br><strong>4.&nbsp;&nbsp; &nbsp;Aliran data searah</strong><br>React mengikuti aliran data searah. Ini berarti bahwa saat mendesain aplikasi React, pengembang sering membuat nest child components di dalam komponen induk. Karena data mengalir dalam satu arah, menjadi lebih mudah untuk men-debug kesalahan dan mengetahui di mana masalah terjadi dalam aplikasi.<br><br><strong>5.&nbsp;&nbsp; &nbsp;Kurva pembelajaran kecil</strong><br>React mudah dipelajari karena sebagian besar menggabungkan konsep dasar HTML dan JavaScript dengan beberapa tambahan yang bermanfaat. Namun, seperti halnya alat dan framework lain, anda harus meluangkan waktu untuk mendapatkan pemahaman yang benar tentang library React.<br><br><strong>6.&nbsp;&nbsp; &nbsp;React dapat digunakan untuk pengembangan aplikasi web dan seluler</strong><br>Kita sudah mengetahui bahwa React digunakan untuk pengembangan aplikasi web, tetapi tidak hanya itu yang dapat dilakukannya. Ada framework yang disebut React Native yang berasal dari React itu sendiri yang sangat populer dan digunakan untuk membuat aplikasi seluler yang indah. Jadi, sebenarnya React bisa digunakan untuk pembuatan aplikasi baik web maupun mobile.<br><br><strong>7.&nbsp;&nbsp; &nbsp;Alat khusus untuk debugging mudah</strong><br>Facebook sudah merilis ekstensi Chrome yang bisa digunakan untuk men-debug aplikasi React. Hal ini membuat proses debugging aplikasi web React menjadi lebih cepat dan mudah.</p><p>&nbsp;</p><h2><strong>Fitur Utama React JS</strong></h2><p>React JS dikenal karena memiliki library lengkap yang bisa digunakan bersamaan dengan HTML, selain itu React JS juga memiliki template Material UI dan Core UI yang lengkap. Berikut ini adalah informasi mengenai tiga fitur utama dari React JS.<br><br><strong>1.&nbsp;&nbsp; &nbsp;Declarative</strong><br>React dapat memudahkan untuk membuat tampilan UI menjadi interaktif dan lebih mudah. Rancang tampilan UI yang sederhana untuk setiap halaman pada website dan React akan memperbarui dan merender komponen yang tepat secara efisien saat status data berubah. Tampilan deklaratif membuat kode yang ingin anda tulis lebih dapat diprediksi dan lebih mudah untuk di-debug.<br><br><strong>2.&nbsp;&nbsp; &nbsp;Component-Based</strong><br>Dapat membantu developer untuk membuat encapsulated component yang mengelola statusnya sendiri, kemudian encapsulated component tersebut dirancang untuk membuat tampilan UI yang lebih kompleks. Karena logika komponen ditulis dalam JavaScript alih-alih template, penggunaan React dapat dengan mudah melewatkan rich data melalui aplikasi dan menjauhkan status dari DOM.<br><br><strong>3.&nbsp;&nbsp; &nbsp;Learn Once, Write Anywhere</strong><br>React tidak membuat asumsi tentang sisa stack pengguna yang memungkinkan pengguna mengembangkan fitur baru di React tanpa menulis ulang kode yang ada. React juga dapat merender di server yang menjalankan Node dan menjalankan aplikasi seluler menggunakan React Native.<br>&nbsp;</p><h2><strong>Kelebihan React JS</strong></h2><p>1.&nbsp;&nbsp; &nbsp;Memanfaatkan struktur JavaScript yang dikenal sebagai DOM virtual. Karena DOM virtual JavaScript lebih cepat daripada DOM konvensional, ini akan meningkatkan kecepatan program.<br>2.&nbsp;&nbsp; &nbsp;Dapat digunakan dengan berbagai sistem dan pada sisi klien dan server patut dipuji.<br>3.&nbsp;&nbsp; &nbsp;Komponen dan identifikasi tren membuat aplikasi yang lebih besar lebih mudah dikelola dengan meningkatkan kejelasan.<br>&nbsp;</p><h2><strong>Kekurangan React JS</strong></h2><p>1.&nbsp;&nbsp; &nbsp;Hanya menangani sudut dan jarak aplikasi. Akibatnya, teknik tambahan harus dipilih jika anda menginginkan kumpulan alat pengembangan yang lengkap.<br>2.&nbsp;&nbsp; &nbsp;Mempekerjakan skrip inline dan JSX, yang mungkin tidak nyaman bagi beberapa pemrogram.<br>3.&nbsp;&nbsp; &nbsp;Dokumentasi yang buruk karena React memperbarui dan mempercepat dengan sangat cepat sehingga tidak ada waktu membuat dokumentasi yang lengkap.<br>&nbsp;</p>', NULL, '2023-09-05 04:12:30', '2023-09-05 04:12:30');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Personal', 'personal', '2023-09-03 15:50:15', '2023-09-03 15:50:15');
INSERT INTO `categories` VALUES (2, 'Sports', 'sports', '2023-09-03 15:50:20', '2023-09-03 15:50:20');
INSERT INTO `categories` VALUES (3, 'Web Programming', 'web-programming', '2023-09-03 15:50:29', '2023-09-03 15:50:29');
INSERT INTO `categories` VALUES (4, 'Mobile Programming', 'mobile-programming', '2023-09-03 15:50:38', '2023-09-03 15:50:38');
INSERT INTO `categories` VALUES (6, 'Education', 'education', '2023-09-03 15:50:52', '2023-09-04 15:33:16');
INSERT INTO `categories` VALUES (7, 'Games', 'games', '2023-09-03 15:50:59', '2023-09-03 15:50:59');
INSERT INTO `categories` VALUES (8, 'Anime', 'anime', '2023-09-04 06:31:42', '2023-09-04 06:31:42');
INSERT INTO `categories` VALUES (9, 'Culinary', 'culinary', '2023-09-04 15:33:04', '2023-09-04 15:33:25');
INSERT INTO `categories` VALUES (10, 'Disney', 'disney', '2023-09-04 15:33:44', '2023-09-04 15:33:44');
INSERT INTO `categories` VALUES (11, 'Movie', 'movie', '2023-09-04 15:34:14', '2023-09-04 15:34:14');
INSERT INTO `categories` VALUES (12, 'Music', 'music', '2023-09-04 15:34:20', '2023-09-04 15:34:20');
INSERT INTO `categories` VALUES (13, 'Business', 'business', '2023-09-04 15:34:37', '2023-09-04 15:34:37');
INSERT INTO `categories` VALUES (14, 'Entertainment', 'entertainment', '2023-09-04 15:35:10', '2023-09-04 15:35:10');
INSERT INTO `categories` VALUES (15, 'Sains & Technology', 'sains-&-technology', '2023-09-04 15:36:06', '2023-09-04 15:36:06');
INSERT INTO `categories` VALUES (16, 'News', 'news', '2023-09-04 15:36:40', '2023-09-04 15:36:40');
INSERT INTO `categories` VALUES (17, 'Politics', 'politics', '2023-09-05 03:59:55', '2023-09-05 03:59:55');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_08_18_031254_create_blogs_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_08_18_112805_create_blog_categories_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_09_03_144303_create_social_accounts_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for social_accounts
-- ----------------------------
DROP TABLE IF EXISTS `social_accounts`;
CREATE TABLE `social_accounts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `provider_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `social_accounts_provider_id_unique`(`provider_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of social_accounts
-- ----------------------------
INSERT INTO `social_accounts` VALUES (1, 1, '61929120', 'github', '2023-09-03 15:04:27', '2023-09-03 15:04:27');
INSERT INTO `social_accounts` VALUES (2, 2, '143952653', 'github', '2023-09-03 15:47:51', '2023-09-03 15:47:51');
INSERT INTO `social_accounts` VALUES (3, 1, '105469596566547305919', 'google', '2023-09-03 18:41:40', '2023-09-03 18:41:40');
INSERT INTO `social_accounts` VALUES (4, 3, '103601426175909553688', 'google', '2023-09-03 18:45:07', '2023-09-03 18:45:07');
INSERT INTO `social_accounts` VALUES (5, 4, '103833520213089970611', 'google', '2023-09-04 09:05:55', '2023-09-04 09:05:55');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'VIERY NUGROHO', 'viery_n', 'viery15102002@gmail.com', '2023-09-03 22:25:43', 1, 'VieryNugroho15102002@.com', 'S3kVE0WjDMixj8vJofi2jX28brdHpSSSxJIJrPmFqumADO8Yip1qH2PVl3rH', NULL, '2023-09-04 16:08:41');
INSERT INTO `users` VALUES (2, 'Viery Ngrho', 'vieryngrho', 'vieryngrho@gmail.com', NULL, 1, '$2y$10$9tWspvcAGoJC8IXZrY0JJ.7Dt8CdwAJX/GOMnMuuY1xHDtEResOuW', 'CM0gondGMoc5q33lYLzb9kalLhKaBNgVpW6uKb6kwQvwE5GvxJ44VHLWhRYE', '2023-09-03 15:47:51', '2023-09-04 05:28:33');
INSERT INTO `users` VALUES (3, 'Nasriyah Banggle', 'Bu_Nasriyah_1971', 'nasriyahbanggle@gmail.com', NULL, 0, '$2y$10$zQVjdWSzu2PlI6P8RTjl5OMJiMCDhcCt0.g0Ahppq3FvfYJAHOV/6', 'C3u74SZEu8p87fd8nvrneVmwVvLibOBgu6ezbBy8kmtuj6tWNFGWAq1BIyxm', '2023-09-03 18:45:07', '2023-09-04 14:34:27');
INSERT INTO `users` VALUES (4, 'Bu Nasriyah', 'Bu Nasriyah', 'bunasriyah71@gmail.com', NULL, 0, '$2y$10$j.5gIj0XKiDW/pu4JInBt./AyYQOPHSn4D/xMbJ0hizgWGN3Hn64.', 'XmZ3F6OJtcB5OjJMwbpnnTJHlhTLAUgW9pllLLO69Ntli6Jh5opluwohQKqD', '2023-09-04 09:05:55', '2023-09-04 09:05:55');
INSERT INTO `users` VALUES (5, 'Sunardi', 'Sunardi_1968', 'Sunardi1968@gmail.com', NULL, 0, '$2y$10$qhmZ34UCalC9/sdIHNDWlOLJGdQI.8H8GLFjW7vbS.V/3D6v2SNL.', NULL, '2023-09-05 02:37:56', '2023-09-05 02:37:56');

SET FOREIGN_KEY_CHECKS = 1;

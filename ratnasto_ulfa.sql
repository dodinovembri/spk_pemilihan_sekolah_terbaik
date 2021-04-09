-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2021 at 07:40 PM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratnasto_ulfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternative`
--

CREATE TABLE `alternative` (
  `id` int(11) NOT NULL,
  `alternative_code` varchar(100) DEFAULT NULL,
  `alternative_name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `latitude` double(18,6) DEFAULT NULL,
  `longitude` double(18,6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `voice_number` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `accreditation` varchar(3) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `spp_cost` bigint(20) DEFAULT NULL,
  `entry_fee` bigint(20) DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `requirement_document_description` text DEFAULT NULL,
  `location_document_description` text DEFAULT NULL,
  `accessibility_document_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative`
--

INSERT INTO `alternative` (`id`, `alternative_code`, `alternative_name`, `address`, `latitude`, `longitude`, `email`, `voice_number`, `description`, `image`, `accreditation`, `age`, `spp_cost`, `entry_fee`, `distance`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `requirement_document_description`, `location_document_description`, `accessibility_document_description`) VALUES
(23, 'A1', 'SMA Srijaya Negara Palembang', 'Jl. Ogan Komp FKIP UNSRI, Bukit Lama, Kec. Ilir Barat I, Kota Palembang Prov. Sumatera Selatan', -2.985557, 104.728721, 'srijaya@school.com', '0711-363095', 'SMA Srijaya Negara merupakan Mitra Utama FKIP Unsri dikelola oleh Badan Yayasan Srijaya Negara. Para tenaga pendidik di SMA Srijaya Negara ini sebagian besar merupakan para alumni FKIP Unsri, 60% diantaranya berpendidikan S2. SMA Srijaya Negara telah memberlakukan jam nol, siswa dan guru hadir disekolah pukul 06.40 WIB untuk tadarus Al-Qur’an bersama-sama. Siswa mendapatkan pelajaran tambahan pukul 14.00 WIB s.d. 16.45 WIB untuk hari Senin, Selasa, dan Rabu (Kelas Plus).', '604eed42e1f47.jpg', 'A', 51, 250000, 1800000, 4.4, 1, NULL, NULL, NULL, NULL, 'Keterangan Dokumen Persyaratan test', 'Keterangan Bukti Lokasi test', 'Keterangan Bukti Aksesibilitas test'),
(24, 'A2', 'SMA Ethika Palembang', 'Jl. Sei Seputih No.3264 Plg, Demang Lebar Daun, Kec. Ilir Barat I, Kota Palembang Prov. Sumatera Selatan', -2.961740, 104.736820, 'ethika@sch.co.id', '0711-410248', 'SMA Ethika adalah sekolah menengah atas yang didirikan pada tahun 1990/1991. Dan tahun 1996 SMA Ethika merubah status terdaftar menjadi Diakui sampai dengan sekarang. Jumlah siswa sampai saat ini mencapai 476 yang berada di 12 kelas dengan jumlah guru mencapai 55 Orang. Awal berdiri SMA Ethika pada tahun 1990-1994 dipimpin oleh kepala sekolah Drs. Muhril Alfi. Dan selanjutnya pada tahun 1995 sampai sekarang dipimpin kepala sekolah Drs. Azhari MM.', '6050a2a99451a.jpg', 'B', 30, 150000, 880000, 6.2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'A3', 'SMA Az-Zahrah Palembang', 'Jl. Telaga Komp. Masjid Taqwa Palembang, 30 Ilir, Kec. Ilir Barat Ii, Kota Palembang Prov. Sumatera Selatan', -2.986860, 104.742990, 'smaiazplg@yahoo.com', '0711-355067', '', '6050a96e7619c.jpg', 'A', 23, 500000, 9210000, 1.9, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'A4', 'SMA Xaverius 03 Palembang', 'Jl. Kol Atmo No. 132 Plg, 17 Ilir, Kec. Ilir Timur I, Kota Palembang Prov. Sumatera Selatan', -2.982510, 104.759240, 'humas@smaxaverius3.sch.id', '0711-321158/0711-313082', 'Pada Tahun 1971 SMA Xaverius 1 Puteri pengelolaannya dipercayakan kepada Yayasan Xaverius Pusat. Pada tanggal 18 Januari 1986 seluruh siswanya digabungkan dengan SMA Xaverius 1 Bangau sehingga kapasitas SMA Xaverius 1 Bangau menjadi maksimal. Mengingat daya tamping SMA Xaverius 1 sudah terbatas, sedangkan animo masyarakat terhadap SMA Xaverius begitu besar, Pengurus Yayasan Xaverius Pusat dalam rapatnya tanggal 17 Maret 1987 memutuskan mendirikan SMA Xaverius 3 yang akan beroperasi Tahun Pelajaran 1987/1988. Pada tanggal 30 April 1987 Kantor Wilayah Pendidikan dan Kebudayaan Provinsi Sumatera Selatan memberi izin operasional SMA Xaverius 3 melalui Surat Keputusan No.192/I 114/F.4e/1987 dengan kepala sekolah Drs. Soedadi terhitung 1 Juli 1987.', '6050af46517d3.jpg', 'A', 33, 975000, 13528000, 4.3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'A5', 'SMA Bina Karya Palembang', 'Jl. Letnan Kasnariyansyah 1200 Plg, 20 Ilir I, Kec. Ilir Timur I, Kota Palembang Prov. Sumatera Selatan', -2.957960, 104.731980, 'smabinakarya@gmail.com', '0711-415192', '', '6051fb96235ea.jpg', 'C', 35, 150000, 1800000, 7.3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'A6', 'SMA Kusuma Bangsa Palembang', 'Jl. Residen H. Abdul Rozak Plg, 8 Ilir, Kec. Ilir Timur Ii, Kota Palembang Prov. Sumatera Selatan', -2.949390, 104.776960, 'psb@kumbang.sch.id', '0711-719709/719701', 'SMA Kusuma Bangsa mulai beroperasi pada bulan Juli 2000, sedangkan proses pembangunan gedung sekolah dimulai sejak tahun 1999 s.d. 2000. Berbekal tekad yang kuat dan harus siap bersaing dengan sekolah lain yang sudah mapan, serta tanpa memikirkan risiko kerugian finansial akhirnya dipersiapkanlah segala sesuatu untuk mendirikan sekolah yang bermutu. Persiapan tersebut berupa gedung, tenaga pendidik, tenaga administrasi, dan lain-lain. Semua persiapan akhirnya dilakukan secara maraton dan diselesaikan dalam jangka waktu setahun.\r\nSMA Kusuma Bangsa juga dapat berdiri berkat dukungan orang-orang yang sudah berkecimpung selama puluhan tahun dalam dunia pendidikan, antara lain Bapak A.K.Kinardi (almarhum), Bapak Noersinggih, Bapak F.Penny Effendi dan Bapak Sandhya Jayaprana. Tentunya ada kekhawatiran apakah sekolah ini dapat berjalan dan diminati oleh masyarakat.', '605202231eca1.jpg', 'A', 21, 2000000, 21220000, 9.3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'A7', 'SMA Xaverius 04 Palembang', 'Jl. Bangau No. 60/1258 Plg, 9 Ilir, Kec. Ilir Timur Ii, Kota Palembang Prov. Sumatera Selatan', -2.965890, 104.764400, 'info@smaxaverius4.sch.id', '0711-368630', 'Berawal dari SMA Xaverius 1 sore atau yang lebih dikenal SMA XAverius 1 Filial\"Pada tahun 1980-an SMA Xaverius 1 mengalami perkembangan jumlah peminat yang melebihi daya tampung. Dengan kesepakatan yang ada maka Bapa Drs.T Soedadi memutuskan untuk menerima siswa Xaverius 1 untuk belajar pada sore hari. Tahun ajaran 1987/1988 kelas sore dibubarkan bersamaan dengan berdirinya SMA Xaverius 3. Bulan April 1989 diselenggarakan rapat staf pimpinan SMA Xaverius bersama Pastur Rektor SMA Xaverius 1 dan keputusan yang diambil adalah tahun pelajaran 1989/1990 SMA Xaverius 1 menerima siswa sebanyak 10 kelas. Maka tahun ajaran 1989/1990 dibuka kembali SMA Xaverius 1 Filial (yang sekarang disebut SMA Xaverius 4). Rencana pemisahan SMA Xaverius 1 sore dengan Xaverius 1 pagi menjadi SMA Xaverius 4 dilaksanakan pada tahun ajaran 1994/1995. Akan tetapi, melihat kenyataan bahwa segala sesuatu berjalan dengan baik, maka ada pemikiran lebih awal sehingga diharapkam pada tahun ajaran 1993/1994 SMA Xaverius 4 sudah menerima murid dan bukan lagi sebagai murid SMA Xaverius 1 sore. Selama bulan Oktober dan November 1992 staf pimpinan SMA Xaverius 1 sore bersama staf tata usaha menyiapkan secara fisik data-data usulan pemisahan SMA Xaverius 1 sore menjadi SMA Xaverius 4.', '6054699485c21.jpg', 'A', 27, 420000, 5347000, 6.1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'A8', 'SMA Xaverius 02 Palembang', ' Jl. Sukabangun 1 Plg, Sukabangun, Kec. Sukarami, Kota Palembang Prov. Sumatera Selatan', -2.937880, 104.737630, 'info@smaxaverius2palembang.sch.id', '0711-410903', 'Pada awalnya, SMA Xaverius 2 Palembang ini bernama SMA Santo Louis. SMA Santo Louis didirikan pada tanggal 1 Agustus 1958. Pencetus berdirinya sekolah ini adalah Drs. Jan Dahari, Eddy Haryono dan Suwito. Pada saat senggang mereka membicarakan masalah kemungkinan mendirikan SMA Swasta pada siang hari. Gagasan ini timbul atas dasar kenyataan, bahwa di kota Palembang baru ada satu SMA Negeri. SMA Swasta yang ada belum mampu menyerap semua lulusan SMP. Pembicaraan yang semula tidak resmi, menjadi suatu tekad bulat untuk mendirikan SMA Swasta. Tekad yang didorong oleh semangat pengabdian dalam pendidikan itu, pada akhirnya terwujud. \r\nPembicaraan demi pembicaraan membuahkan keputusan : mencari lokasi yang baik untuk SMA yang akan didirikan. Dipilihlah gedung SD Xaverius 2 di Jalan Kolonel Atmo 4 (belakang gereja Hati Kudus). Gedung ini siang hari tidak terpakai. Ign. Suharno diutus untuk menghubungi frater Overste, untuk membicarakan masalah peminjaman gedung.', '60546ed01903f.jpg', 'A', 62, 450000, 4500000, 9.9, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'A9', 'SMA Methodist 01 Palembang', 'Jl. Jend. Sudirman Km. 3.5 Palembang, Pahlawan, Kec. Kemuning, Kota Palembang Prov. Sumatera Selatan', -2.964010, 104.745930, 'info@methodist1.sch.id', '0711-313861', 'Pada tanggal 1 Mei 1908, Salomon Pakianathan (seorang India) dari Medan datang berkunjung ke Palembang dan pada tabun itu juga dia mendirikan The Methodist Mission School di Tangga Batu (16 Ilir) Palembang, dan Salomon Pakiatnathan sendiri sebagai Kepala Sekolah.\r\n\r\nTahun 1918 sekolah ini pindah dari Tangga Butu (16 Ilir) ke Lorong Kuningan (17 Ilir, Sayangan). Kepala Sekolabnya adalah Mr. March Fruman. Tahun 1922 The Methodist Mission School dari Lorong Kuningan pindah ke Jalan Tengkuruk tempat yang sudah permanen (sekarang ditempati Bank Dagang Indonesia). Seiring dengan itu Kepula Sekolahnyapun berganti dari March Fruman kepada Mr. H.C. Bowr (seorang Amerika). Pada tahun 1935 Mr. H.C. Bowr ini kemudian diganti oleh Dr. Prussner (keturunan Jerman—Arnerika)\r\nPada tahun 1942 Dr. Prussner diganti oleh Mile Ferren sampai Jepang masuk ke Indonesia. Dengan masuknya Jepang ke Indonesia. maka Mac Ferren bersama bangsa Amerika lainnya kernbali ke Amerika, kurena mereka dilarang oleh Jepang melakukan kegiatan apapun di Indonesia.\r\nKarena pendudukan Jepang dan kembalinya orang-orang Amerika ke negeri asalnya, maka kegiatan The Methodist Mission School terpaksa vacum (tutup sementara) yakni tahun 1942-1949 di Palembang.\r\nBaru pada tahun 1950 sekolah ini dibuka kembali dan namanya berubah menjadi: The Methodist English School (MES). Kepala Sekolahnya pada waktu itu adalah Hemnel (bangsa Amerika). Pada masa kepemimpinan Henmel inilah tanah yang menjadi lokasi Komplek Perguruan Methodist I saat ini dibeli Berhubung perkembangan The Methodist English School begitu pesat, sehingga komplek yang di Jalan Tengkuruk dirasakan tidak lagi memadai, maka mulailah dibangun komplek di Jalan Jenderal Sudirman Km 3,5 Palembang.\r\nPada tahun 1958 semua kegiatan MES pindah ke komplek yang baru di Jalan Jenderal Sudirman Km 3,5 Palembang dan Kepala Sekolahnya adalah Rev. Wesley Day (bangsa Amerika). sekolah-sekolah di Indonesia, maka sejak itu MES pun harus tunduk pada peraturan. Babasa pengantar diganti dari Bahasa Inggris menjadi Bahasa Indonesia serta namanyapun di rubah menjadi \"Sekolah Methodist\".', '6054774b49582.jpg', 'A', 70, 530000, 4220000, 6.1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'A10', 'SMA Muhammadiyah 01 Palembang', 'Jl. Balayudha Km. 4,5 No. 21a Plg, Ario Kemuning, Kec. Kemuning, Kota Palembang Prov. Sumatera Selatan', -2.958320, 104.739290, 'info@smamsapalembang.sch.id', '0711-411316', 'SMA Muhammadiyah 1 Palembang didirikan pada tahun 1966 di kawasan Balayudha no 21A Palembang.Awalnya sekolah ini berdiri guna menjawab kebutuhan masyarakat tentang pendidikan. Seiring perkembangan jaman kini sekolah ini dipimpin oleh Drs.Effendi.AS,kelahiran Muara Rupit 1960.', '60547d05801cc.jpg', 'A', 42, 500000, 3800000, 6.7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'A11', 'SMA LTI IGM Palembang', 'Jl. Kol.H.Burlian Km. 9,5 Palembang, Karya Baru, Kec. Alang-Alang Lebar, Kota Palembang Prov. Sumatera Selatan', -2.921720, 104.708980, 'igmsma@gmail.com', '0711-421221/421222', 'SMA LTI IGM didirikan dengan visi untuk menjadi Center of Science bagi pengembangan sumber daya manusia sesuai dengan bidang keahliannya. Upaya nyata untuk mencapai visi tersebut, SMA LTI untuk mencapai visi tersebut adalah.\r\n1.	Pertama. Menyediakan sarana dan prasarana pendidikan dalam menunjang proses Transfer of Science and Technology yang selalu disesuaikan dengan kebutuhan.\r\n2.	Kedua. Melaksanakan kurikulum berbasis Competency dengan dukungan Teknologi Informatika untuk menghasilkan lulusan beakhlak, terampil, kreatif dan mampu menumbusuburkan semangat Entrepreneurship dalam kehidupan nyata serta mampu menyesuaikan diri dalam tatanan global.\r\n3.	Ketiga. Menciptakan suasana belajar-mengajar yang kondusif dan demokratis untuk menumbuhkan semangat kompetisi yang sehat diantara para siswa.\r\n4.	Keempat. Menyiapkan Tenaga Pendidik yang handal dan mampu membentuk karakter siswa sehingga mempunyai daya juang dan motivasi tinggi.', '6054825152e6f.jpg', 'A', 18, 1400000, 19800000, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'A12', 'SMA PUSRI Palembang', 'Jl. Mayor Zen Palembang, Sei Selincah, Kec. Kalidoni, Kota Palembang Prov. Sumatera Selatan', -2.968760, 104.818580, 'smapusri2019@gmail.com', '0711-718451', 'SMA Pusri sebagai salah satu Sekolah terbaik di wilayah Palembang benar-benar berusaha menjaga kualitas calon peserta didiknya.Hal ini terbukti dari salah satu upaya SMA PUSRI dalam menjaring siswa berprestasi di Kota Palembang. Saat ini SMA PUSRI sudah mulai memulai babak baru memasuki dunia maya (cyber) dengan online-nya website ini. Tentunya dengan adanya SMA PUSRI online ini akan bisa membuka pintu baru untuk mengenalkan potensi serta prestasi yang dimilikinya. Yang dengan ini diharapkan akan semakin banyak pihak baik itu stakeholder, alumni ataupun pihak lain yang akan memberikan saran dan masukan untuk pengembangan sekolah kedepan.\r\nTidak ada gading yang tak retak. Itu barangkali pepatah yang senantiasa memberikan peluang yang sebesar-besarnya kepada semua pihak untuk bisa memberikan masukan dan kritik kepada kami dalam pengembangan website ini agar bisa semakin ramai dan menarik.\r\n \r\n- Visi SMA Pusri Palembang\r\n       Menjadikan SMA Unggul Dibidang Teknologi, Akademik, Beriman, Bertaqwa, Cerdas, Terampil, Berwawasan\r\n       Lingkungan dan mampu bersaing di taraf Nasional\r\n \r\n- Misi SMA Pusri Palembang\r\n1. Menghasilkan lulusan yang berkompeten, berkarakter, berakhlak mulia, memiliki jiwa Wirausaha, menguasai IPTEK, beriman, dan bertaqwa\r\nMenyelenggarakan pembelajaran yang berkualitas dan berdasarkan Kurikulum 2013\r\n2. Memanfaatkan TIK dalam kegiatan pembelajaran, administrasikan dan komunikasi\r\n3. Meningkatkan kompetensi tenaga pendidik dan kependidikan.\r\n4. Menciptakan sekolah sebagai tempat pembelajaran yang berwawasan lingkungan\r\n5. Menjalin kerjasama dengan Dunia Industri baik lokal, Nasional maupun Internasional\r\n6. Membangun jiwa intrepreneur warga sekolah\r\n7. Memberikan pelayanan prima bagi warga sekolah dan masyarakat\r\n8. Menggunakan biaya operasional sekolah secara efektif dan efisien demi kemajuan sekolah\r\n9. Meningkatkan kemampuan berbahasa internasional bagi peserta didik, tenaga pendidik dan tenaga kependidikan', '605491faa2202.jpg', 'A', 20, 450000, 6500000, 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'A13', 'SMA Bina Lestari Palembang', 'Jl. Kadir Tkr Palembang, 36 Ilir, Kec. Gandus, Kota Palembang Prov. Sumatera Selatan', -3.013800, 104.741500, 'binalestari@gmail.com', '0711-443302', '', '6054953396ad0.jpg', 'B', 27, 50000, 650000, 1.7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'A14', 'SMA Muhammadiyah 08 Palembang', 'Jl. Tp.Sopyan Kenawas, Gandus, Kec. Gandus, Kota Palembang Prov. Sumatera Selatan', -3.010280, 104.687310, 'smamuhammadiyah8@yahoo.com', '081368908584', '', '6054a03608edd.jpg', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'A15', 'SMA PGRI 02 Palembang', 'Jl. Jend. A Yani Palembang, 9/10 Ulu, Kec. Seberang Ulu I, Kota Palembang Prov. Sumatera Selatan', -2.961190, 104.822500, 'smapgri2palembang@gmail.com', '0711-512248', 'Berdirinya SMA PGRI 2 Palembang pada tahun 1983, timbulnya rencana ini dilatar belakangi oleh tokoh pendidik di SLTP 07 Palembang karena melihat lulusan SLTP di Seberang Ulu tidak dapat melanjutkan SMA dikarenakan daya tampung yang ada pada tiap-tiap sekolah tidak dapat memenuhi siswa baik SMA Negeri maupun Swasta. Oleh karena itu berdasarkan dari keadaan diatas sehingga disepakati untuk mengusulkan suatu rencana untuk mendirikan YPLP-PGRI Dati I Prop. Sumatera Selatan.Berdasarkan surat kuasa dari YPLP-PGRI Dati I Prop. Sumsel Nomor : 48 / E / YPLP-PGRI / XIX / 1983.', '60549b6577310.jpg', 'A', 37, 260000, 3500000, 7.4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_accessibility`
--

CREATE TABLE `alternative_accessibility` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `accessibility` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_accessibility`
--

INSERT INTO `alternative_accessibility` (`id`, `alternative_id`, `accessibility`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Terdapat akses kendaraan umum', 1, NULL, NULL, NULL, NULL),
(2, 24, 'Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat', 1, NULL, NULL, NULL, NULL),
(3, 25, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(4, 26, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(5, 27, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(6, 28, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(7, 35, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(8, 36, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(9, 37, 'Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat', 1, NULL, NULL, NULL, NULL),
(10, 38, 'Tidak Terdapat Akses Kendaraan Umum Namun Lalu Lintas Lancar', 1, NULL, NULL, NULL, NULL),
(11, 39, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(12, 40, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(13, 41, 'Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat', 1, NULL, NULL, NULL, NULL),
(14, 42, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(15, 43, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(16, 44, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL),
(17, 45, 'Terdapat Akses Kendaraan Umum', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_accessibility_asset`
--

CREATE TABLE `alternative_accessibility_asset` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternative_accessibility_asset`
--

INSERT INTO `alternative_accessibility_asset` (`id`, `alternative_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(6, 45, 'pocari.jpg', 1, NULL, NULL, NULL, NULL),
(5, 45, 'pocari 2.jpg', 1, NULL, NULL, NULL, NULL),
(9, 23, 'product7.jpg', 1, NULL, NULL, NULL, NULL),
(10, 23, 'product8.jpg', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_extracurricular`
--

CREATE TABLE `alternative_extracurricular` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `extracurricular` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_extracurricular`
--

INSERT INTO `alternative_extracurricular` (`id`, `alternative_id`, `extracurricular`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(2, 23, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(3, 23, 'Futsal', 1, NULL, NULL, NULL, NULL),
(4, 23, 'Softball', 1, NULL, NULL, NULL, NULL),
(5, 23, 'Sensu', 1, NULL, NULL, NULL, NULL),
(6, 23, 'Irmais ', 1, NULL, NULL, NULL, NULL),
(7, 23, 'Seni Tari', 1, NULL, NULL, NULL, NULL),
(8, 23, 'PMR', 1, NULL, NULL, NULL, NULL),
(9, 23, 'Film', 1, NULL, NULL, NULL, NULL),
(10, 23, 'KIR', 1, NULL, NULL, NULL, NULL),
(11, 23, 'Marching Band', 1, NULL, NULL, NULL, NULL),
(12, 24, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(13, 24, 'Futsal', 1, NULL, NULL, NULL, NULL),
(14, 24, 'Taekwondo', 1, NULL, NULL, NULL, NULL),
(15, 24, 'Pencak Silat', 1, NULL, NULL, NULL, NULL),
(16, 24, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(17, 24, 'Hadroh', 1, NULL, NULL, NULL, NULL),
(18, 24, 'Kultum', 1, NULL, NULL, NULL, NULL),
(19, 24, 'Marawis', 1, NULL, NULL, NULL, NULL),
(20, 25, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(21, 25, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(22, 25, 'Rohis', 1, NULL, NULL, NULL, NULL),
(23, 25, 'PMR', 1, NULL, NULL, NULL, NULL),
(24, 25, 'Tilawah', 1, NULL, NULL, NULL, NULL),
(25, 25, 'Marching Band', 1, NULL, NULL, NULL, NULL),
(26, 25, 'Social Club', 1, NULL, NULL, NULL, NULL),
(27, 25, 'Jurnalistik', 1, NULL, NULL, NULL, NULL),
(28, 25, 'Futsal', 1, NULL, NULL, NULL, NULL),
(29, 25, 'Robotik', 1, NULL, NULL, NULL, NULL),
(30, 25, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(31, 25, 'Seni Tari', 1, NULL, NULL, NULL, NULL),
(32, 25, 'English Club', 1, NULL, NULL, NULL, NULL),
(33, 25, 'Olimpiade Club', 1, NULL, NULL, NULL, NULL),
(34, 26, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(35, 26, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(36, 26, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(37, 26, 'Taekwondo', 1, NULL, NULL, NULL, NULL),
(38, 26, 'Paduan Suara', 1, NULL, NULL, NULL, NULL),
(39, 26, 'IPKA', 1, NULL, NULL, NULL, NULL),
(40, 26, 'ESC', 1, NULL, NULL, NULL, NULL),
(41, 26, 'Seni Lukis', 1, NULL, NULL, NULL, NULL),
(42, 26, 'Basket', 1, NULL, NULL, NULL, NULL),
(43, 26, 'Futsal', 1, NULL, NULL, NULL, NULL),
(44, 26, 'Voli', 1, NULL, NULL, NULL, NULL),
(45, 26, 'Tari', 1, NULL, NULL, NULL, NULL),
(46, 26, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(47, 26, 'Redaksi KARTIKA', 1, NULL, NULL, NULL, NULL),
(48, 26, 'Jurnalistik', 1, NULL, NULL, NULL, NULL),
(49, 26, 'Fotografi dan Videografi ', 1, NULL, NULL, NULL, NULL),
(50, 26, 'Modelling', 1, NULL, NULL, NULL, NULL),
(51, 26, 'Memasak', 1, NULL, NULL, NULL, NULL),
(52, 27, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(53, 27, 'Futsal', 1, NULL, NULL, NULL, NULL),
(54, 27, 'Sepak Bola', 1, NULL, NULL, NULL, NULL),
(55, 27, 'Taekwondo', 1, NULL, NULL, NULL, NULL),
(56, 27, 'Pencak Silat', 1, NULL, NULL, NULL, NULL),
(57, 27, 'Bulutangkis', 1, NULL, NULL, NULL, NULL),
(58, 27, 'Bridge', 1, NULL, NULL, NULL, NULL),
(59, 27, 'Tari', 1, NULL, NULL, NULL, NULL),
(60, 28, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(61, 28, 'Futsal', 1, NULL, NULL, NULL, NULL),
(62, 28, 'Sepak Bola', 1, NULL, NULL, NULL, NULL),
(63, 28, 'Taekwondo', 1, NULL, NULL, NULL, NULL),
(64, 28, 'Pencak Silat', 1, NULL, NULL, NULL, NULL),
(65, 28, 'Bulutangkis', 1, NULL, NULL, NULL, NULL),
(66, 28, 'Bridge', 1, NULL, NULL, NULL, NULL),
(67, 28, 'Tari', 1, NULL, NULL, NULL, NULL),
(68, 35, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(69, 35, 'Futsal', 1, NULL, NULL, NULL, NULL),
(70, 35, 'Sepak Bola', 1, NULL, NULL, NULL, NULL),
(71, 35, 'Taekwondo', 1, NULL, NULL, NULL, NULL),
(72, 35, 'Pencak Silat', 1, NULL, NULL, NULL, NULL),
(73, 35, 'Bulutangkis', 1, NULL, NULL, NULL, NULL),
(74, 35, 'Bridge', 1, NULL, NULL, NULL, NULL),
(75, 35, 'Tari', 1, NULL, NULL, NULL, NULL),
(76, 36, 'Renang', 1, NULL, NULL, NULL, NULL),
(77, 36, 'Futsal', 1, NULL, NULL, NULL, NULL),
(78, 36, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(79, 36, 'Basket', 1, NULL, NULL, NULL, NULL),
(80, 36, 'Bulutangkis', 1, NULL, NULL, NULL, NULL),
(81, 36, 'Memasak', 1, NULL, NULL, NULL, NULL),
(82, 36, 'Video Making', 1, NULL, NULL, NULL, NULL),
(83, 36, 'Fotografi ', 1, NULL, NULL, NULL, NULL),
(84, 36, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(85, 36, 'Broadcasting', 1, NULL, NULL, NULL, NULL),
(86, 36, 'Melukis', 1, NULL, NULL, NULL, NULL),
(87, 36, 'Tenis Lapangan', 1, NULL, NULL, NULL, NULL),
(88, 36, 'Tari', 1, NULL, NULL, NULL, NULL),
(89, 36, 'Teater', 1, NULL, NULL, NULL, NULL),
(90, 36, 'Debate Club', 1, NULL, NULL, NULL, NULL),
(91, 36, 'Kempo', 1, NULL, NULL, NULL, NULL),
(92, 36, 'Paduan Suara', 1, NULL, NULL, NULL, NULL),
(93, 36, 'Manga', 1, NULL, NULL, NULL, NULL),
(94, 36, 'Marching Band', 1, NULL, NULL, NULL, NULL),
(95, 37, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(96, 37, 'Basket', 1, NULL, NULL, NULL, NULL),
(97, 37, 'Voli', 1, NULL, NULL, NULL, NULL),
(98, 37, 'Futsal', 1, NULL, NULL, NULL, NULL),
(99, 37, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(100, 37, 'ECC', 1, NULL, NULL, NULL, NULL),
(101, 37, 'Jurnalistik', 1, NULL, NULL, NULL, NULL),
(102, 37, 'Komputer', 1, NULL, NULL, NULL, NULL),
(103, 37, 'KIR', 1, NULL, NULL, NULL, NULL),
(104, 37, 'Teater', 1, NULL, NULL, NULL, NULL),
(105, 38, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(106, 38, 'Futsal', 1, NULL, NULL, NULL, NULL),
(107, 38, 'Voli', 1, NULL, NULL, NULL, NULL),
(108, 38, 'PMR', 1, NULL, NULL, NULL, NULL),
(109, 38, 'Paduan Suara', 1, NULL, NULL, NULL, NULL),
(110, 38, 'Fotografi ', 1, NULL, NULL, NULL, NULL),
(111, 38, 'Jurnalistik', 1, NULL, NULL, NULL, NULL),
(112, 38, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(113, 38, 'Tari', 1, NULL, NULL, NULL, NULL),
(114, 38, 'KIR', 1, NULL, NULL, NULL, NULL),
(115, 39, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(116, 39, 'Basket', 1, NULL, NULL, NULL, NULL),
(117, 39, 'Voli', 1, NULL, NULL, NULL, NULL),
(118, 39, 'Futsal', 1, NULL, NULL, NULL, NULL),
(119, 39, 'Seni Tari', 1, NULL, NULL, NULL, NULL),
(120, 39, 'PMR', 1, NULL, NULL, NULL, NULL),
(121, 39, 'English Club', 1, NULL, NULL, NULL, NULL),
(122, 39, 'Sains Club', 1, NULL, NULL, NULL, NULL),
(123, 40, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(124, 40, 'Futsal', 1, NULL, NULL, NULL, NULL),
(125, 40, 'Voli', 1, NULL, NULL, NULL, NULL),
(126, 40, 'Basket', 1, NULL, NULL, NULL, NULL),
(127, 40, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(128, 40, 'Seni Tari', 1, NULL, NULL, NULL, NULL),
(129, 40, 'Paduan Suara', 1, NULL, NULL, NULL, NULL),
(130, 40, 'Teater', 1, NULL, NULL, NULL, NULL),
(131, 40, 'Tapak Suci', 1, NULL, NULL, NULL, NULL),
(132, 40, 'Hizbul Wathan', 1, NULL, NULL, NULL, NULL),
(133, 41, 'Olimpiade Sains', 1, NULL, NULL, NULL, NULL),
(134, 41, 'Rohis', 1, NULL, NULL, NULL, NULL),
(135, 41, 'Musikalisasi Puisi', 1, NULL, NULL, NULL, NULL),
(136, 41, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(137, 41, 'Tari', 1, NULL, NULL, NULL, NULL),
(138, 41, 'Basket', 1, NULL, NULL, NULL, NULL),
(139, 41, 'Renang', 1, NULL, NULL, NULL, NULL),
(140, 41, 'Teater', 1, NULL, NULL, NULL, NULL),
(141, 41, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(142, 41, 'PMR', 1, NULL, NULL, NULL, NULL),
(143, 41, 'Robotik', 1, NULL, NULL, NULL, NULL),
(144, 41, 'Atletik', 1, NULL, NULL, NULL, NULL),
(145, 41, 'Futsal', 1, NULL, NULL, NULL, NULL),
(146, 41, 'Green Generation', 1, NULL, NULL, NULL, NULL),
(147, 41, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(148, 41, 'KIR', 1, NULL, NULL, NULL, NULL),
(149, 41, 'English Club', 1, NULL, NULL, NULL, NULL),
(150, 42, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(151, 42, 'Marching Band', 1, NULL, NULL, NULL, NULL),
(152, 42, 'PMR', 1, NULL, NULL, NULL, NULL),
(153, 42, 'Fotografi ', 1, NULL, NULL, NULL, NULL),
(154, 42, 'Desain Grafis', 1, NULL, NULL, NULL, NULL),
(155, 42, 'Basket', 1, NULL, NULL, NULL, NULL),
(156, 42, 'Futsal', 1, NULL, NULL, NULL, NULL),
(157, 42, 'HandBall', 1, NULL, NULL, NULL, NULL),
(158, 42, 'Voli', 1, NULL, NULL, NULL, NULL),
(159, 42, 'Tari', 1, NULL, NULL, NULL, NULL),
(160, 42, 'Seni Musik', 1, NULL, NULL, NULL, NULL),
(161, 43, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(162, 43, 'Voli', 1, NULL, NULL, NULL, NULL),
(163, 43, 'Futsal', 1, NULL, NULL, NULL, NULL),
(164, 43, 'Basket', 1, NULL, NULL, NULL, NULL),
(166, 43, 'Tari', 1, NULL, NULL, NULL, NULL),
(167, 44, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(168, 44, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(169, 44, 'Futsal', 1, NULL, NULL, NULL, NULL),
(170, 44, 'Tapak Suci', 1, NULL, NULL, NULL, NULL),
(171, 44, 'Voli', 1, NULL, NULL, NULL, NULL),
(172, 44, 'Seni Tari', 1, NULL, NULL, NULL, NULL),
(173, 44, 'Paduan Suara', 1, NULL, NULL, NULL, NULL),
(174, 44, 'Tanimas', 1, NULL, NULL, NULL, NULL),
(175, 44, 'English Club', 1, NULL, NULL, NULL, NULL),
(176, 45, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(177, 45, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(178, 45, 'PMR', 1, NULL, NULL, NULL, NULL),
(179, 45, 'Teater', 1, NULL, NULL, NULL, NULL),
(180, 45, 'ESC', 1, NULL, NULL, NULL, NULL),
(181, 45, 'Komunitas Pencinta Komputer', 1, NULL, NULL, NULL, NULL),
(182, 45, 'Anak Matematika', 1, NULL, NULL, NULL, NULL),
(183, 45, 'Pecinta Akuntansi', 1, NULL, NULL, NULL, NULL),
(184, 45, 'Rohis', 1, NULL, NULL, NULL, NULL),
(185, 45, 'Futsal', 1, NULL, NULL, NULL, NULL),
(186, 45, 'Basket', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_facility`
--

CREATE TABLE `alternative_facility` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_facility`
--

INSERT INTO `alternative_facility` (`id`, `alternative_id`, `facility`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Ruang Kelas berAC', 1, NULL, NULL, NULL, NULL),
(2, 23, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(3, 23, 'Lab. IPS', 1, NULL, NULL, NULL, NULL),
(4, 23, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(5, 23, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(6, 23, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(7, 23, 'UKS', 1, NULL, NULL, NULL, NULL),
(8, 23, 'Mushola', 1, NULL, NULL, NULL, NULL),
(9, 23, 'Kantin', 1, NULL, NULL, NULL, NULL),
(10, 23, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(11, 23, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(12, 23, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(13, 23, 'Terdapat Penjaga Sekolah ', 1, NULL, NULL, NULL, NULL),
(14, 23, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(15, 24, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(16, 24, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(17, 24, 'Mushola', 1, NULL, NULL, NULL, NULL),
(18, 24, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(19, 24, 'Aula', 1, NULL, NULL, NULL, NULL),
(20, 24, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(21, 24, 'Wifi', 1, NULL, NULL, NULL, NULL),
(22, 24, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(23, 25, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(24, 25, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(25, 25, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(26, 25, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(27, 25, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(28, 25, 'UKS', 1, NULL, NULL, NULL, NULL),
(29, 25, 'Mushola', 1, NULL, NULL, NULL, NULL),
(30, 25, 'Kantin', 1, NULL, NULL, NULL, NULL),
(31, 25, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(32, 25, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(33, 25, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(34, 25, 'CCTV', 1, NULL, NULL, NULL, NULL),
(35, 25, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(36, 25, 'Wifi', 1, NULL, NULL, NULL, NULL),
(37, 26, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(38, 26, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(39, 26, 'Lab. IPS', 1, NULL, NULL, NULL, NULL),
(40, 26, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(41, 26, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(42, 26, 'UKS', 1, NULL, NULL, NULL, NULL),
(43, 26, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(44, 26, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(45, 26, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(46, 26, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(47, 26, 'Wifi', 1, NULL, NULL, NULL, NULL),
(48, 26, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(49, 27, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(50, 27, 'Lab. IPS', 1, NULL, NULL, NULL, NULL),
(51, 27, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(52, 27, 'UKS', 1, NULL, NULL, NULL, NULL),
(53, 27, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(54, 27, 'Wifi', 1, NULL, NULL, NULL, NULL),
(55, 28, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(56, 28, 'Lab. IPS', 1, NULL, NULL, NULL, NULL),
(57, 28, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(58, 28, 'UKS', 1, NULL, NULL, NULL, NULL),
(59, 28, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(60, 28, 'Wifi', 1, NULL, NULL, NULL, NULL),
(61, 35, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(62, 35, 'Lab. IPS', 1, NULL, NULL, NULL, NULL),
(63, 35, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(64, 35, 'UKS', 1, NULL, NULL, NULL, NULL),
(65, 35, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(66, 36, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(67, 36, 'Kolam Renang', 1, NULL, NULL, NULL, NULL),
(68, 36, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(69, 36, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(70, 36, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(71, 36, 'Mushola', 1, NULL, NULL, NULL, NULL),
(72, 36, 'Kantin', 1, NULL, NULL, NULL, NULL),
(73, 36, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(74, 36, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(75, 36, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(76, 36, 'CCTV', 1, NULL, NULL, NULL, NULL),
(77, 36, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(78, 36, 'Wifi', 1, NULL, NULL, NULL, NULL),
(79, 36, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(80, 37, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(81, 37, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(82, 37, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(83, 37, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(84, 37, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(85, 37, 'UKS', 1, NULL, NULL, NULL, NULL),
(86, 37, 'Kantin', 1, NULL, NULL, NULL, NULL),
(87, 37, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(88, 37, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(89, 37, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(90, 37, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(91, 37, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(92, 38, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(93, 38, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(94, 38, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(95, 38, 'UKS', 1, NULL, NULL, NULL, NULL),
(96, 38, 'Tempat Ibadah', 1, NULL, NULL, NULL, NULL),
(97, 38, 'Kantin', 1, NULL, NULL, NULL, NULL),
(98, 38, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(99, 38, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(100, 38, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(101, 38, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(102, 39, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(103, 39, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(104, 39, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(105, 39, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(106, 39, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(107, 39, 'UKS', 1, NULL, NULL, NULL, NULL),
(108, 39, 'Tempat Ibadah', 1, NULL, NULL, NULL, NULL),
(109, 39, 'Kantin', 1, NULL, NULL, NULL, NULL),
(110, 39, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(111, 39, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(112, 39, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(113, 39, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(114, 39, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(115, 40, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(116, 40, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(117, 40, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(118, 40, 'UKS', 1, NULL, NULL, NULL, NULL),
(119, 40, 'Mushola', 1, NULL, NULL, NULL, NULL),
(120, 40, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(121, 40, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(122, 40, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(123, 40, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(124, 40, 'Wifi', 1, NULL, NULL, NULL, NULL),
(125, 40, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(126, 41, 'Ruang Kelas ber AC', 1, NULL, NULL, NULL, NULL),
(127, 41, 'Kolam Renang', 1, NULL, NULL, NULL, NULL),
(128, 41, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(129, 41, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(130, 41, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(131, 41, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(132, 41, 'UKS', 1, NULL, NULL, NULL, NULL),
(133, 41, 'Mushola', 1, NULL, NULL, NULL, NULL),
(134, 41, 'Kantin', 1, NULL, NULL, NULL, NULL),
(135, 41, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(136, 41, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(137, 41, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(138, 41, 'Ruang Multimedia', 1, NULL, NULL, NULL, NULL),
(139, 41, 'Wifi', 1, NULL, NULL, NULL, NULL),
(140, 41, 'Proyektor', 1, NULL, NULL, NULL, NULL),
(141, 41, 'CCTV', 1, NULL, NULL, NULL, NULL),
(142, 41, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(143, 41, 'Mobil Antar Jemput', 1, NULL, NULL, NULL, NULL),
(144, 42, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(145, 42, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(146, 42, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(147, 42, 'UKS', 1, NULL, NULL, NULL, NULL),
(148, 42, 'Mushola', 1, NULL, NULL, NULL, NULL),
(149, 42, 'Gedung Serba Guna (Aula)', 1, NULL, NULL, NULL, NULL),
(150, 42, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(151, 42, 'Ruang Multimedia', 1, NULL, NULL, NULL, NULL),
(152, 42, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(153, 43, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(154, 43, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(155, 43, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(156, 43, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(157, 43, 'UKS', 1, NULL, NULL, NULL, NULL),
(158, 43, 'Mushola', 1, NULL, NULL, NULL, NULL),
(159, 43, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(160, 43, 'Terdapat Penjaga Sekolah', 1, NULL, NULL, NULL, NULL),
(161, 44, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(162, 44, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(163, 44, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(164, 44, 'UKS', 1, NULL, NULL, NULL, NULL),
(165, 44, 'Masjid', 1, NULL, NULL, NULL, NULL),
(166, 44, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(167, 45, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(168, 45, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(169, 45, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(170, 45, 'UKS', 1, NULL, NULL, NULL, NULL),
(171, 45, 'Mushola', 1, NULL, NULL, NULL, NULL),
(172, 45, 'Kantin', 1, NULL, NULL, NULL, NULL),
(173, 45, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(174, 45, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(175, 45, 'Ruang Multimedia', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_location`
--

CREATE TABLE `alternative_location` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_location`
--

INSERT INTO `alternative_location` (`id`, `alternative_id`, `location`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(2, 23, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(3, 24, 'Di dekat wilayah perkantoran', 1, NULL, NULL, NULL, NULL),
(4, 24, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(5, 24, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(6, 25, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(7, 25, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(8, 26, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(9, 26, 'Di dekat wilayah perkantoran', 1, NULL, NULL, NULL, NULL),
(10, 26, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL),
(11, 27, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(12, 27, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(13, 28, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(14, 28, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(15, 35, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(16, 35, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(17, 36, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(18, 36, 'Di dekat wilayah perkantoran', 1, NULL, NULL, NULL, NULL),
(19, 36, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL),
(20, 37, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(21, 37, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL),
(22, 38, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(23, 38, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(24, 39, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(25, 39, 'Di dekat wilayah perkantoran', 1, NULL, NULL, NULL, NULL),
(26, 39, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL),
(27, 40, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(28, 40, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(29, 40, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL),
(30, 41, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(31, 41, 'Di dekat wilayah perkantoran', 1, NULL, NULL, NULL, NULL),
(32, 42, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(33, 42, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(34, 42, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL),
(35, 43, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(36, 43, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(37, 44, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(38, 44, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(39, 45, 'Di dekat wilayah permukiman warga', 1, NULL, NULL, NULL, NULL),
(40, 45, 'Di pinggir jalan kecil (lorong/gang)', 1, NULL, NULL, NULL, NULL),
(41, 45, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_location_asset`
--

CREATE TABLE `alternative_location_asset` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternative_location_asset`
--

INSERT INTO `alternative_location_asset` (`id`, `alternative_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 45, 'download (3).jpg', 1, NULL, NULL, NULL, NULL),
(4, 45, '1d0e69fee2805d1ac00502db606bd6c6_1.jpg', 1, NULL, NULL, NULL, NULL),
(10, 23, 'product6.jpg', 1, NULL, NULL, NULL, NULL),
(9, 23, 'product5.jpg', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_requirement_document_asset`
--

CREATE TABLE `alternative_requirement_document_asset` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternative_requirement_document_asset`
--

INSERT INTO `alternative_requirement_document_asset` (`id`, `alternative_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(6, 45, 'aisle.jpg', 1, NULL, NULL, NULL, NULL),
(5, 45, 'bulkhead.jpeg', 1, NULL, NULL, NULL, NULL),
(9, 23, 'product1.jpg', 1, NULL, NULL, NULL, NULL),
(10, 23, 'product2.jpg', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_value`
--

CREATE TABLE `alternative_value` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `criterion_value_id` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_value`
--

INSERT INTO `alternative_value` (`id`, `alternative_id`, `criteria_id`, `criterion_value_id`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(226, 24, 11, 1, 1, NULL, NULL, NULL, NULL),
(227, 24, 12, 7, 1, NULL, NULL, NULL, NULL),
(228, 24, 13, 12, 1, NULL, NULL, NULL, NULL),
(229, 24, 14, 16, 1, NULL, NULL, NULL, NULL),
(230, 24, 15, 20, 1, NULL, NULL, NULL, NULL),
(231, 24, 16, 25, 1, NULL, NULL, NULL, NULL),
(232, 24, 17, 32, 1, NULL, NULL, NULL, NULL),
(233, 24, 18, 35, 1, NULL, NULL, NULL, NULL),
(234, 24, 19, 41, 1, NULL, NULL, NULL, NULL),
(235, 25, 11, 1, 1, NULL, NULL, NULL, NULL),
(236, 25, 12, 7, 1, NULL, NULL, NULL, NULL),
(237, 25, 13, 12, 1, NULL, NULL, NULL, NULL),
(238, 25, 14, 18, 1, NULL, NULL, NULL, NULL),
(239, 25, 15, 21, 1, NULL, NULL, NULL, NULL),
(240, 25, 16, 29, 1, NULL, NULL, NULL, NULL),
(241, 25, 17, 30, 1, NULL, NULL, NULL, NULL),
(242, 25, 18, 35, 1, NULL, NULL, NULL, NULL),
(243, 25, 19, 39, 1, NULL, NULL, NULL, NULL),
(244, 26, 11, 1, 1, NULL, NULL, NULL, NULL),
(245, 26, 12, 7, 1, NULL, NULL, NULL, NULL),
(246, 26, 13, 11, 1, NULL, NULL, NULL, NULL),
(247, 26, 14, 17, 1, NULL, NULL, NULL, NULL),
(248, 26, 15, 23, 1, NULL, NULL, NULL, NULL),
(249, 26, 16, 29, 1, NULL, NULL, NULL, NULL),
(250, 26, 17, 30, 1, NULL, NULL, NULL, NULL),
(251, 26, 18, 35, 1, NULL, NULL, NULL, NULL),
(252, 26, 19, 41, 1, NULL, NULL, NULL, NULL),
(253, 35, 11, 3, 1, NULL, NULL, NULL, NULL),
(254, 35, 12, 8, 1, NULL, NULL, NULL, NULL),
(255, 35, 13, 13, 1, NULL, NULL, NULL, NULL),
(256, 35, 14, 17, 1, NULL, NULL, NULL, NULL),
(257, 35, 15, 20, 1, NULL, NULL, NULL, NULL),
(258, 35, 16, 25, 1, NULL, NULL, NULL, NULL),
(259, 35, 17, 32, 1, NULL, NULL, NULL, NULL),
(260, 35, 18, 35, 1, NULL, NULL, NULL, NULL),
(261, 35, 19, 42, 1, NULL, NULL, NULL, NULL),
(262, 36, 11, 1, 1, NULL, NULL, NULL, NULL),
(263, 36, 12, 7, 1, NULL, NULL, NULL, NULL),
(264, 36, 13, 11, 1, NULL, NULL, NULL, NULL),
(265, 36, 14, 18, 1, NULL, NULL, NULL, NULL),
(266, 36, 15, 24, 1, NULL, NULL, NULL, NULL),
(267, 36, 16, 29, 1, NULL, NULL, NULL, NULL),
(268, 36, 17, 30, 1, NULL, NULL, NULL, NULL),
(269, 36, 18, 35, 1, NULL, NULL, NULL, NULL),
(270, 36, 19, 43, 1, NULL, NULL, NULL, NULL),
(271, 37, 11, 1, 1, NULL, NULL, NULL, NULL),
(272, 37, 12, 7, 1, NULL, NULL, NULL, NULL),
(273, 37, 13, 13, 1, NULL, NULL, NULL, NULL),
(274, 37, 14, 18, 1, NULL, NULL, NULL, NULL),
(275, 37, 15, 21, 1, NULL, NULL, NULL, NULL),
(276, 37, 16, 27, 1, NULL, NULL, NULL, NULL),
(277, 37, 17, 30, 1, NULL, NULL, NULL, NULL),
(278, 37, 18, 36, 1, NULL, NULL, NULL, NULL),
(279, 37, 19, 42, 1, NULL, NULL, NULL, NULL),
(280, 38, 11, 1, 1, NULL, NULL, NULL, NULL),
(281, 38, 12, 8, 1, NULL, NULL, NULL, NULL),
(282, 38, 13, 13, 1, NULL, NULL, NULL, NULL),
(283, 38, 14, 15, 1, NULL, NULL, NULL, NULL),
(284, 38, 15, 21, 1, NULL, NULL, NULL, NULL),
(285, 38, 16, 27, 1, NULL, NULL, NULL, NULL),
(286, 38, 17, 30, 1, NULL, NULL, NULL, NULL),
(287, 38, 18, 37, 1, NULL, NULL, NULL, NULL),
(288, 38, 19, 43, 1, NULL, NULL, NULL, NULL),
(289, 39, 11, 1, 1, NULL, NULL, NULL, NULL),
(290, 39, 12, 7, 1, NULL, NULL, NULL, NULL),
(291, 39, 13, 13, 1, NULL, NULL, NULL, NULL),
(292, 39, 14, 15, 1, NULL, NULL, NULL, NULL),
(293, 39, 15, 22, 1, NULL, NULL, NULL, NULL),
(294, 39, 16, 27, 1, NULL, NULL, NULL, NULL),
(295, 39, 17, 30, 1, NULL, NULL, NULL, NULL),
(296, 39, 18, 35, 1, NULL, NULL, NULL, NULL),
(297, 39, 19, 42, 1, NULL, NULL, NULL, NULL),
(298, 40, 11, 1, 1, NULL, NULL, NULL, NULL),
(299, 40, 12, 7, 1, NULL, NULL, NULL, NULL),
(300, 40, 13, 13, 1, NULL, NULL, NULL, NULL),
(301, 40, 14, 17, 1, NULL, NULL, NULL, NULL),
(302, 40, 15, 21, 1, NULL, NULL, NULL, NULL),
(303, 40, 16, 26, 1, NULL, NULL, NULL, NULL),
(304, 40, 17, 32, 1, NULL, NULL, NULL, NULL),
(305, 40, 18, 35, 1, NULL, NULL, NULL, NULL),
(306, 40, 19, 42, 1, NULL, NULL, NULL, NULL),
(307, 41, 11, 1, 1, NULL, NULL, NULL, NULL),
(308, 41, 12, 6, 1, NULL, NULL, NULL, NULL),
(309, 41, 13, 11, 1, NULL, NULL, NULL, NULL),
(310, 41, 14, 18, 1, NULL, NULL, NULL, NULL),
(311, 41, 15, 24, 1, NULL, NULL, NULL, NULL),
(312, 41, 16, 29, 1, NULL, NULL, NULL, NULL),
(313, 41, 17, 30, 1, NULL, NULL, NULL, NULL),
(314, 41, 18, 36, 1, NULL, NULL, NULL, NULL),
(315, 41, 19, 43, 1, NULL, NULL, NULL, NULL),
(316, 42, 11, 1, 1, NULL, NULL, NULL, NULL),
(317, 42, 12, 8, 1, NULL, NULL, NULL, NULL),
(318, 42, 13, 12, 1, NULL, NULL, NULL, NULL),
(319, 42, 14, 18, 1, NULL, NULL, NULL, NULL),
(320, 42, 15, 21, 1, NULL, NULL, NULL, NULL),
(321, 42, 16, 28, 1, NULL, NULL, NULL, NULL),
(322, 42, 17, 32, 1, NULL, NULL, NULL, NULL),
(323, 42, 18, 35, 1, NULL, NULL, NULL, NULL),
(324, 42, 19, 43, 1, NULL, NULL, NULL, NULL),
(325, 43, 11, 2, 1, NULL, NULL, NULL, NULL),
(326, 43, 12, 8, 1, NULL, NULL, NULL, NULL),
(327, 43, 13, 13, 1, NULL, NULL, NULL, NULL),
(328, 43, 14, 18, 1, NULL, NULL, NULL, NULL),
(329, 43, 15, 20, 1, NULL, NULL, NULL, NULL),
(330, 43, 16, 25, 1, NULL, NULL, NULL, NULL),
(331, 43, 17, 30, 1, NULL, NULL, NULL, NULL),
(332, 43, 18, 35, 1, NULL, NULL, NULL, NULL),
(333, 43, 19, 39, 1, NULL, NULL, NULL, NULL),
(334, 44, 11, 3, 1, NULL, NULL, NULL, NULL),
(335, 44, 12, 8, 1, NULL, NULL, NULL, NULL),
(336, 44, 13, 13, 1, NULL, NULL, NULL, NULL),
(337, 44, 14, 18, 1, NULL, NULL, NULL, NULL),
(338, 44, 15, 20, 1, NULL, NULL, NULL, NULL),
(339, 44, 16, 25, 1, NULL, NULL, NULL, NULL),
(340, 44, 17, 30, 1, NULL, NULL, NULL, NULL),
(341, 44, 18, 35, 1, NULL, NULL, NULL, NULL),
(342, 44, 19, 43, 1, NULL, NULL, NULL, NULL),
(370, 45, 11, 1, 1, NULL, NULL, NULL, NULL),
(371, 45, 12, 6, 1, NULL, NULL, NULL, NULL),
(372, 45, 13, 10, 1, NULL, NULL, NULL, NULL),
(373, 45, 14, 15, 1, NULL, NULL, NULL, NULL),
(374, 45, 15, 20, 1, NULL, NULL, NULL, NULL),
(375, 45, 16, 25, 1, NULL, NULL, NULL, NULL),
(376, 45, 17, 30, 1, NULL, NULL, NULL, NULL),
(377, 45, 18, 35, 1, NULL, NULL, NULL, NULL),
(378, 45, 19, 40, 1, NULL, NULL, NULL, NULL),
(397, 23, 11, 1, 1, NULL, NULL, NULL, NULL),
(398, 23, 12, 7, 1, NULL, NULL, NULL, NULL),
(399, 23, 13, 12, 1, NULL, NULL, NULL, NULL),
(400, 23, 14, 16, 1, NULL, NULL, NULL, NULL),
(401, 23, 15, 20, 1, NULL, NULL, NULL, NULL),
(402, 23, 16, 25, 1, NULL, NULL, NULL, NULL),
(403, 23, 17, 32, 1, NULL, NULL, NULL, NULL),
(404, 23, 18, 35, 1, NULL, NULL, NULL, NULL),
(405, 23, 19, 41, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_website`
--

CREATE TABLE `alternative_website` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternative_website`
--

INSERT INTO `alternative_website` (`id`, `alternative_id`, `url`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(6, 45, ' http:\\\\fb.com', 1, NULL, NULL, NULL, NULL),
(5, 45, 'http:\\\\www.google.com', 1, NULL, NULL, NULL, NULL),
(11, 23, 'https://google.com', 1, NULL, NULL, NULL, NULL),
(12, 23, ' https://facebook.com', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `criteria_code` varchar(100) DEFAULT NULL,
  `criteria_description` varchar(100) DEFAULT NULL,
  `criteria_type` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `criteria_code`, `criteria_description`, `criteria_type`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(11, 'C1', 'Akreditasi', 'benefit', 1, NULL, NULL, NULL, NULL),
(12, 'C2', 'Fasilitas', 'benefit', 1, NULL, NULL, NULL, NULL),
(13, 'C3', 'Ekstrakurikuler', 'benefit', 1, NULL, NULL, NULL, NULL),
(14, 'C4', 'Lama Berdiri', 'benefit', 1, NULL, NULL, NULL, NULL),
(15, 'C5', 'Biaya SPP', 'cost', 1, NULL, NULL, NULL, NULL),
(16, 'C6', 'Biaya Masuk', 'cost', 1, NULL, NULL, NULL, NULL),
(17, 'C7', 'Lokasi', 'benefit', 1, NULL, NULL, NULL, NULL),
(18, 'C8', 'Aksesibilitas', 'benefit', 1, NULL, NULL, NULL, NULL),
(19, 'C9', 'Jarak', 'cost', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criterion_value`
--

CREATE TABLE `criterion_value` (
  `id` int(11) NOT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criterion_value`
--

INSERT INTO `criterion_value` (`id`, `criteria_id`, `description`, `value`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 11, ' Akreditasi A', 5, 1, NULL, NULL, NULL, NULL),
(2, 11, ' Akreditasi B', 4, 1, NULL, NULL, NULL, NULL),
(3, 11, ' Akreditasi C', 3, 1, NULL, NULL, NULL, NULL),
(4, 11, ' Belum Terakdreditasi', 1, 1, NULL, NULL, NULL, NULL),
(5, 12, '> 20 Fasilitas', 5, 1, NULL, NULL, NULL, NULL),
(6, 12, ' 16 - 20 Fasilitas', 4, 1, NULL, NULL, NULL, NULL),
(7, 12, ' 11 - 15 Fasilitas', 3, 1, NULL, NULL, NULL, NULL),
(8, 12, ' 6 - 10 Fasilitas', 2, 1, NULL, NULL, NULL, NULL),
(9, 12, '1 - 5 Fasilitas ', 1, 1, NULL, NULL, NULL, NULL),
(10, 13, '> 20 Ekstrakurikuler', 5, 1, NULL, NULL, NULL, NULL),
(11, 13, '16-20 Ekstrakurikuler', 4, 1, NULL, NULL, NULL, NULL),
(12, 13, '11-15 Ekstrakurikuler ', 3, 1, NULL, NULL, NULL, NULL),
(13, 13, '6-10 Ekstrakurikuler', 2, 1, NULL, NULL, NULL, NULL),
(14, 13, '1-5 Ekstrakurikuler', 1, 1, NULL, NULL, NULL, NULL),
(15, 14, '> 60 Tahun', 5, 1, NULL, NULL, NULL, NULL),
(16, 14, '46-60 Tahun', 4, 1, NULL, NULL, NULL, NULL),
(17, 14, '31-45 Tahun', 3, 1, NULL, NULL, NULL, NULL),
(18, 14, '16-30 Tahun', 2, 1, NULL, NULL, NULL, NULL),
(19, 14, '1-15 Tahun', 1, 1, NULL, NULL, NULL, NULL),
(20, 15, '< Rp 250.000', 5, 1, NULL, NULL, NULL, NULL),
(21, 15, 'Rp 251.000 – Rp 500.000', 4, 1, NULL, NULL, NULL, NULL),
(22, 15, 'Rp 501.000 – Rp 750.000', 3, 1, NULL, NULL, NULL, NULL),
(23, 15, 'Rp 751.000 – Rp 1.000.000', 2, 1, NULL, NULL, NULL, NULL),
(24, 15, '> Rp 1.000.000', 1, 1, NULL, NULL, NULL, NULL),
(25, 16, '< Rp 2.000.000', 5, 1, NULL, NULL, NULL, NULL),
(26, 16, 'Rp 2.001.000 – Rp 4.000.000', 4, 1, NULL, NULL, NULL, NULL),
(27, 16, 'Rp 4.001.000 – Rp 6.000.000', 3, 1, NULL, NULL, NULL, NULL),
(28, 16, 'Rp 6.001.000 – Rp 8.000.000', 2, 1, NULL, NULL, NULL, NULL),
(29, 16, '> Rp 8.000.000', 1, 1, NULL, NULL, NULL, NULL),
(30, 17, 'Di pinggir jalan besar (jalan raya)', 5, 1, NULL, NULL, NULL, NULL),
(31, 17, 'Di dekat wilayah perkantoran', 4, 1, NULL, NULL, NULL, NULL),
(32, 17, 'Di dekat wilayah permukiman warga', 3, 1, NULL, NULL, NULL, NULL),
(33, 17, 'Di pinggir jalan kecil (lorong/gang)', 2, 1, NULL, NULL, NULL, NULL),
(34, 17, 'Di dekat wilayah pertokoan', 1, 1, NULL, NULL, NULL, NULL),
(35, 18, 'Terdapat Akses Kendaraan Umum', 5, 1, NULL, NULL, NULL, NULL),
(36, 18, 'Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat', 4, 1, NULL, NULL, NULL, NULL),
(37, 18, 'Tidak Terdapat Akses Kendaraan Umum Namun Lalu Lintas Lancar', 3, 1, NULL, NULL, NULL, NULL),
(38, 18, 'Tidak Terdapat Akses Kendaraan Umum Dan Lalu Lintas Tidak Lancar', 1, 1, NULL, NULL, NULL, NULL),
(39, 19, '< 2 km', 5, 1, NULL, NULL, NULL, NULL),
(40, 19, '2.1 km – 4 km', 4, 1, NULL, NULL, NULL, NULL),
(41, 19, '4.1 km – 6 km', 3, 1, NULL, NULL, NULL, NULL),
(42, 19, '6.1 km – 8 km', 2, 1, NULL, NULL, NULL, NULL),
(43, 19, '> 8 km', 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT 1,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(10, 'Nurul Ulfa', 'ulfa@gmail.com', '23111cf70745859063eec8a99d6206d9', 0, '603b9345de327.png', 1, NULL, NULL, NULL, NULL),
(16, 'Ulfa Nurul', 'nurululfah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '60584f0cbf4af.png', 1, NULL, NULL, NULL, NULL),
(22, 'SMA Srijaya Negara Palembang', 'srijaya@school.com', '14c87745699a0bceba539fa736acede8', 2, '604efa1fa87ca.png', 1, NULL, NULL, NULL, NULL),
(24, 'SMA Ethika Palembang', 'ethika@sch.co.id', '975bde2664a9d938182661fd6799c796', 2, '6050a21b664fc.png', 1, NULL, NULL, NULL, NULL),
(25, 'SMA Az-Zahrah Palembang', 'smaiazplg@yahoo.com', '75824853b6b6646839282a438d99aa18', 2, '6050a8cc9a649.png', 1, NULL, NULL, NULL, NULL),
(26, 'SMA Xaverius 03 Palembang', 'humas@smaxaverius3.sch.id', '5e5d1d7c53a85fa34ac405471ac645cc', 2, '6050ae47ef708.png', 1, NULL, NULL, NULL, NULL),
(31, 'SMA Bina Karya Palembang', 'smabinakarya@gmail.com', '5daf7477c6d495d3befcd67774a8f250', 2, '6051fca12397b.png', 1, NULL, NULL, NULL, NULL),
(32, 'SMA Kusuma Bangsa Palembang', 'psb@kumbang.sch.id', '46a73d36b2ea63f07fa4ac0da87b65e5', 2, '605204e9b99cd.png', 1, NULL, NULL, NULL, NULL),
(37, 'SMA Xaverius 04 Palembang', 'info@smaxaverius4.sch.id', '31751c7960906ba38da5a8321164ee1a', 2, '60546b2d54e5f.png', 1, NULL, NULL, NULL, NULL),
(38, 'SMA Xaverius 02 Palembang', 'info@smaxaverius2palembang.sch.id', 'd40bc691c78c733a34b3eec29607105a', 2, '6054703dc3ed8.png', 1, NULL, NULL, NULL, NULL),
(39, 'SMA Methodist 01 Palembang', 'info@methodist1.sch.id', '0c1ad370017b83e781da4be51dc8e0e3', 2, '6054764d4f190.png', 1, NULL, NULL, NULL, NULL),
(40, 'SMA Muhammadiyah 01 Palembang', 'info@smamsapalembang.sch.id', '812d9b6242265ab6e40086491d755334', 2, '60547bbd85471.png', 1, NULL, NULL, NULL, NULL),
(41, 'SMA LTI IGM Palembang', 'igmsma@gmail.com', 'df38961c863b112c667f756415d9c6ad', 2, '6054898b711a9.png', 1, NULL, NULL, NULL, NULL),
(42, 'SMA PUSRI Palembang', 'smapusri2019@gmail.com', '9f4109012c17fe7c482fd65a8cad5df1', 2, '6054936d4de40.png', 1, NULL, NULL, NULL, NULL),
(43, 'SMA Bina Lestari Palembang', 'binalestari@gmail.com', '28b11d177102ffe353ba050c806c67e2', 2, '6054954cd2378.png', 1, NULL, NULL, NULL, NULL),
(44, 'SMA Muhammadiyah 08 Palembang', 'smamuh8@gmail.com', '5543bbee74b0707d4d28120fcd63d0ce', 2, '6054983a21428.png', 1, NULL, NULL, NULL, NULL),
(45, 'SMA PGRI 02 Palembang', 'smapgri2palembang@gmail.com', 'aebb76e45606af22aada6d614a0363ce', 2, '60549a55d4036.png', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_weight`
--

CREATE TABLE `user_weight` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `importance_scale` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_weight`
--

INSERT INTO `user_weight` (`id`, `user_id`, `criteria_id`, `importance_scale`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(5, 10, 11, 5, 1, NULL, NULL, NULL, NULL),
(6, 10, 12, 5, 1, NULL, NULL, NULL, NULL),
(7, 10, 13, 4, 1, NULL, NULL, NULL, NULL),
(8, 10, 14, 4, 1, NULL, NULL, NULL, NULL),
(9, 10, 15, 5, 1, NULL, NULL, NULL, NULL),
(10, 10, 16, 5, 1, NULL, NULL, NULL, NULL),
(11, 10, 17, 4, 1, NULL, NULL, NULL, NULL),
(12, 10, 18, 4, 1, NULL, NULL, NULL, NULL),
(13, 10, 19, 5, 1, NULL, NULL, NULL, NULL),
(23, 16, 11, 5, 1, NULL, NULL, NULL, NULL),
(24, 16, 12, 3, 1, NULL, NULL, NULL, NULL),
(25, 16, 13, 4, 1, NULL, NULL, NULL, NULL),
(26, 16, 14, 2, 1, NULL, NULL, NULL, NULL),
(27, 16, 15, 4, 1, NULL, NULL, NULL, NULL),
(28, 16, 16, 5, 1, NULL, NULL, NULL, NULL),
(29, 16, 17, 5, 1, NULL, NULL, NULL, NULL),
(30, 16, 18, 4, 1, NULL, NULL, NULL, NULL),
(31, 16, 19, 5, 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_accessibility`
--
ALTER TABLE `alternative_accessibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_accessibility_asset`
--
ALTER TABLE `alternative_accessibility_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_extracurricular`
--
ALTER TABLE `alternative_extracurricular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_facility`
--
ALTER TABLE `alternative_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_location`
--
ALTER TABLE `alternative_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_location_asset`
--
ALTER TABLE `alternative_location_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_requirement_document_asset`
--
ALTER TABLE `alternative_requirement_document_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_value`
--
ALTER TABLE `alternative_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_website`
--
ALTER TABLE `alternative_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_weight`
--
ALTER TABLE `user_weight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `alternative_accessibility`
--
ALTER TABLE `alternative_accessibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `alternative_accessibility_asset`
--
ALTER TABLE `alternative_accessibility_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alternative_extracurricular`
--
ALTER TABLE `alternative_extracurricular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `alternative_facility`
--
ALTER TABLE `alternative_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `alternative_location`
--
ALTER TABLE `alternative_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `alternative_location_asset`
--
ALTER TABLE `alternative_location_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alternative_requirement_document_asset`
--
ALTER TABLE `alternative_requirement_document_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alternative_value`
--
ALTER TABLE `alternative_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `alternative_website`
--
ALTER TABLE `alternative_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `criterion_value`
--
ALTER TABLE `criterion_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_weight`
--
ALTER TABLE `user_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD CONSTRAINT `criterion_value_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`);

--
-- Constraints for table `user_weight`
--
ALTER TABLE `user_weight`
  ADD CONSTRAINT `user_weight_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_weight_ibfk_2` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

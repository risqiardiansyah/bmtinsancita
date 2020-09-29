-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 07:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmtinsancita2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` char(36) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `updater` varchar(32) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `keywords` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `updater`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
('3bc16241-24c1-4774-93ae-3d9a1bd8cb05', 4, 0, '', 'bmt-lembaga-keuangan-paling-dekat-dengan-rakyat', 'BMT Lembaga Keuangan Paling Dekat dengan Rakyat', '<p>Badan Legislasi (Baleg) DPR sedang membahas Bab V dan VII di Omnibus Law RUU Cipta Kerja&nbsp;yang isinya terkait dengan koperasi dan UMKM. Dalam pembahasan ini, klausul soal Koperasi Syariah diusulkan.&nbsp;</p>\r\n<p>Usulan soal koperasi syariah ini disampaikan oleh Fraksi PPP. Anggota Baleg DPR RI dari PPP Syamsurizal mengatakan PPP sebagai partai yang menyalurkan aspirasi umat Islam memang mengusulkan untuk dibuat klausul Koperasi Syariah.</p>\r\n<p>\"Jika saat ini ada bank syariah dan bank konvensional, maka kami kira penting juga dibuat koperasi syariah,\" ujar Syamsurizal saat dikonfirmasi, Rabu (1/7).</p>\r\n<p>Usulan soal ini disampaikan oleh Wakil Ketua Baleg dari Fraksi PPP Achmad Baidowi dalam rapat di DPR pada 29 Juli 2020.&nbsp;</p>\r\n<p>Menurut Syamsurizal, kebutuhan akan regulasi koperasi syariah dinilai wajar mengingat kebutuhan masyarakat Indonesia terhadap konsep syariah terus meningkat. Sehingga, kata dia, perlu diatur konsep syariah sebagai respons positif terhadap keinginan masyarakat dewasa ini.&nbsp;</p>\r\n<p>Syamsurizal menambahkan, konsekuensi dari koperasi syariah ini nantinya kita akan banyak membutuhkan para ulama yang ada dalam Dewan Syariah Nasional MUI untuk memberikan masukan sekaligus terlibat aktif dalam mekanisme kesyariahan di koperasi.</p>\r\n<p>Selain konsep syariah dalam soperasi, PPP juga mengusulkan lembaga penjamin pinjaman keuangan koperasi yang bertujuan untuk memberikan kepastian jaminan simpanan bagi anggota koperasi. Sebab, PPP menilai selama ini banyak koperasi yang tidak berjalan dengan baik bahkan modal awal usahanya habis karena sistem menejemen keuangannya belum ada yang menjamin.&nbsp;</p>\r\n<p>\"Sehingga ke depan diperlukan sebuah lembaga yang bisa memberikan jaminan serta mengawasi keuangan koperasi,\" kata Syamsurizal menambahkan.&nbsp;</p>', 'Publish', 'Berita', 'insan cita, bmt, koperasi', 'bmt-1598509664.jpg', NULL, 0, NULL, NULL, NULL, '2020-08-27 06:27:44', '2020-08-27 00:00:00', '2020-08-27 06:27:44'),
('1f1653a1-6e7b-4b97-8a15-f972bcc0dc59', 4, 0, '', 'sharing-platform-keuangan-mikro-syariah-berbasis-baitul-maal-wat-tamwil-bmt', 'Sharing Platform Keuangan Mikro Syariah Berbasis Baitul Maal Wat Tamwil (BMT)', '<p>Sektor keuangan mikro syariah dapat dibilang menjadi aspek penting dan unggul dari perkembangan ekonomi syariah di Indonesia. BMT sebagai bentuk lembaga keuangan mikro syariah yang terlahir murni dari masyarakat Indonesia, telah menjadi primadona ekonomi syariah nasional yang kini juga telah dikenal di dunia.<br /><br />Progresifnya perkembangan BMT di Indonesia tidak terlepas dari besarnya porsi masyarakat kelas menengah dan bawah di Indonesia. Dari total sekitar 265 juta penduduk, 40% merupakan masyarakat kelas menengah dan 20% digolongkan sebagai kelas bawah, ditambah sebanyak kurang lebih 25,67 juta jiwa dikategorikan sebagai penduduk miskin atau 9,66% jumlah penduduk. Berdasarkan angka tersebut maka diperlukan pengembangan ekonomi umat yang sesuai untuk mayoritas masyarakat, yaitu melalui KUMKM dan optimalisasi dana sosial Islam. Inilah yang menjadikan keberadaan BMT relevan dan sangat diterima oleh masyarakat Indonesia.<br /><br />Pertumbuhan jumlah BMT saat ini bisa dibilang cukup pesat, dimana saat ini sudah berdiri sekitar 4.500 unit, meskipun angka tersebut masih diragukan faktanya di lapangan. Pertumbuhan dan persebaran BMT yang luas tidak diimbangi dengan pendataan yang baik. Hal ini berawal dari belum jelasnya pengaturan BMT di Indonesia, dimana regulasi dan pengawasannya masih tumpang tindih antara antar regulator terkait. Lebih jauh terkait hal tersebut, tidak ada kesesuaian data jumlah BMT yang ada di seluruh Indonesia, baik yang aktif maupun yang sudah tidak aktif, termasuk mengenai posisi keuangannya masing-masing. Selain itu, banyak juga ditemukan BMT yang tidak dapat mempertahankan performa dan eksistensinya.<br /><br />Berdasarkan latar belakang tersebut, Komite Nasional Keuangan Syariah (KNKS) sedang berupaya mendorong pembenahan BMT agar menjadi lebih profesional dan terkelola dengan baik. Langkah awal yang akan dilakukan adalah dengan mengembangkan platform digital berupa core system BMT. Strategi ini diambil oleh KNKS karena faktanya di lapangan masih banyak BMT yang keuangan dan operasionalnya belum menggunakan digital core system padahal dapat memudahkan dan menjadikannya lebih efisien. Harapannya, dengan teraplikasinya sistem tersebut di seluruh BMT di Indonesia, pendataan pun akan jauh lebih baik dan terintegrasi satu sama lain.<br /><br />Hingga saat ini, KNKS sedang beraudiensi dengan berbagai pemangku kepentingan sektor keuangan mikro syariah khususnya BMT untuk mematangkan dan merealisasikan rencana tersebut.</p>', 'Publish', 'Berita', 'lkm, keuangan syariah', '960-640-umkm-katadata-donang-1598509773.jpg', NULL, 0, NULL, NULL, NULL, '2020-08-27 06:29:33', '2020-08-27 00:00:00', '2020-08-27 06:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` char(255) NOT NULL,
  `id_kategori_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_download` varchar(200) DEFAULT NULL,
  `jenis_download` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `id_kategori_download`, `id_user`, `judul_download`, `jenis_download`, `isi`, `gambar`, `website`, `hits`, `tanggal`) VALUES
('582e5add-6371-42fa-a96f-83516ee866b4', 2, 4, 'Stastistik Keuangan', 'Download', '<p>Panduan Stastistik Keuangan</p>', 'imagovisual-a1-841mmx594mm-1594733228.ppt', NULL, 41, '2020-09-29 02:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` char(36) NOT NULL,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_kategori_galeri`, `id_user`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `popup_status`, `urutan`, `status_text`, `tanggal`) VALUES
('9', 4, 4, '12 Juta Pelaku UMKM Bakal Dapat Hibah Rp2,4 Juta per Orang', 'Homepage', '<p>Pemerintah akan memberikan bantuan kepada 12 juta pelaku usaha mikro kecil dan menengah (<strong><a href=\"https://www.cnnindonesia.com/tag/umkm\">UMKM</a></strong>). Setiap pelaku UMKM mendapatkan bantuan senilai Rp2,4 juta.</p>\r\n<p>Menteri Koordinator Bidang Perekonomian Airlangga Hartarto mengatakan bantuan tersebut akan diberikan melalui Lembaga Pengelola Dana Bergulir (LPBD).</p>\r\n<p>\"Pemerintah memberikan bantuan kredit modal kerja yang bentuknya hibah. Itu besarnya untuk 12 juta masyarakat dan besaran hibahnya adalah Rp2,4 juta,\" ujarnya, Kamis (23/7).</p>\r\n<p>Airlangga mengatakan bantuan itu diberikan dalam berbagai bentuk insentif bagi UMKM terdampak&nbsp;covid-19.</p>\r\n<p>\"Apa yang diberikan kepada UMKM adalah penundaan bunga yang 6 persen, sekarang sudah berlaku sampai Desember. Demikian pula untuk KUR Mekaar, pegadaian itu subsidi bunga juga sudah dianggarkan sampai Desember,\" katanya.</p>\r\n<p>Anggaran untuk UMKM mayoritas dialokasikan untuk restrukturisasi kredit UMKM di bank Himbara senilai Rp78,78 triliun. Lalu, subsidi bunga senilai Rp35,28 triliun, belanja imbal jasa penjaminan Rp5 triliun, dan Pajak Penghasilan (PPh) final UMKM ditanggung pemerintah Rp2,4 triliun.</p>\r\n<p>Pemerintah juga menyiapkan dana untuk penjaminan modal kerja UMKM dan pembiayaan koperasi melalui LPBD masing-masing sebesar Rp1 triliun.</p>\r\n<p>Sementara itu, Kementerian Koperasi dan UKM (Kemenkop UKM) mengatakan realisasi belanja program PEN untuk sektor koperasi dan UMKM baru mencapai Rp11,84 triliun per Selasa (21/7). Artinya, penyalurannya baru 9,59 persen dari total pagu anggaran sebesar Rp123,46 triliun.</p>', 'slide-1596357567.png', NULL, NULL, 'Publish', 0, 'Ya', '2020-08-02 08:39:27'),
('11', 4, 4, 'BMT Lembaga Keuangan Paling Dekat dengan Rakyat', 'Homepage', '<p>REPUBLIKA.CO.ID, PONTIANAK -- Tim Pengabdian Masyarakat Universitas Indonesia (UI) dari Fakultas Hukum dan Fakultas Ekonomi dan Bisnis&nbsp;Universitas Indonesia&nbsp;melakukan pengabdian kepada Pengelola Baitul Mal wat Tamwil (BMT)/ koperasi syariah di kantor&nbsp;BMT&nbsp;Al-Mujahidin, Masjid Raya Mujahidin, Pontianak, Kalimantan Barat, pertengahan Agustus lalu (15/10).&nbsp;</p>\r\n<p>Kegiatan ini merupakan kegiatan lanjutan dari pengabdian masyarakat yang dilaksanakan tahun lalu. Tahun ini, tim pengabdian masyarakat Universitas Indonesia melakukan pembekalan terkait peningkatkan pengelolaan pembiayaan oleh BMT di Kota Pontianak. Pengelolaan pembiayaan ini merupakan yang paling sulit dilakukan jika dibandingkan dengan pengumpulan dana. Banyak perbankan sukses mengumpulkan dana, tapi kesulitan dalam menyalurkannya.</p>\r\n<p>&nbsp;&lsquo;Kegiatan ini bukan seremonial belaka. Kita perlu meningkatkan kapasitas BMT dan juga skill pengelolanya agar dapat memenuhi kebutuhan masyarakat kecil.&nbsp; Jangan sampai rentenir yang memenuhi kebutuhan masyrakat,&rdquo; kata Ketua Tim &rdquo; Farida Prihatini, SH, MH, CN dalam rilis yang diterima&nbsp;<em>Republika.co.id,</em>&nbsp;Sabtu (26/10).</p>\r\n<p>Banu Muhammad Haidlir&nbsp; SE, MSE&nbsp; selaku anggota Pengabdi mengatakan, &ldquo;Di dunia ini hanya ada dua lembaga yang mau mengurusi rakyat kecil, yakni BMT dan rentenir. Agar masyarakat bisa bebas dari jeratan rentenir, maka satu-satunya yang dapat membantu masyarakat hanyalah BMT.&rdquo;&nbsp;</p>\r\n<p>Ia menambahkan, meskipun BMT memiliki potensi yang cukup besar untuk membantu perekonomian rakyat kecil, namun ternyata banyak BMT khususnya di Pontianak yang belum mampu melakukan analisis terkait laporan keuangan yang telah mereka buat. Sehingga, hal ini cukup menghambat perkembangan koperasi syariah/ BMT di Pontianak.&nbsp;</p>\r\n<p>&ldquo;Banyak BMT yang jatuh bangun dan tidak dapat bertahan lama. Salah satu penyebabnya selain kurangnya pengetahuan dari pengelola BMT ialah BMT/koperasi syariah hingga saat ini belum menjadi Lembaga Keuangan Mikro.&nbsp; Sehingga, BMT belum diawasi oleh Otoritas Jasa Keuangan,&rdquo; ujarnya.&nbsp;</p>\r\n<p>Hal ini, menurut Banu, merupakan suatu permasalahan yang cukup besar karena setiap aktivitas pengumpulan dan penyaluran uang seperti<a href=\"https://republika.co.id/tag/koperasi-syariah\">&nbsp;koperasi syariah&nbsp;</a>haruslah diawasi. &ldquo;Pengawasan itu merupakan hal yang dibutuhkan bagi koperasi syariah agar pengelolaannya dapat berjalan dan berkembang dengan baik,&rdquo; tuturnya.&nbsp;</p>\r\n<p>&ldquo;Untuk meningkatkan kinerja BMT perlu adanya multi level education (MLE),&rdquo; kata Dr Yeni Salma Barlinti&nbsp; SH, MH yang juga anggota tim Pengabdi.</p>\r\n<p>Yeni&nbsp; menambahkan, calon nasabah BMT harus mengikuti kegiatan adukasi literasi keuangan syariah baru boleh mendapatkan pendanaan. &ldquo;Model MLE ini ditujukan bagi nasabah yang ingin menambah pendanaan dari BMT untuk pembiayaan kedua atau kesekian kalinya,&rdquo; ujarnya.&nbsp;</p>\r\n<p>Kegiatan ini dihadiri oleh perwakilan dari koperasi-koperasi syariah serta mahasiswa ekonomi Islam dari universitas-universitas yang ada di Pontianak, seperti BMT Al Mujahidin, FoSSEI IAIN Pontianak, mahasiswa Universitas Tanjung Pura, dan BMT Halalan Thoyyiba. Dalam kegiatan ini, masing-masing perwakilan BMT diberikan kesempatan untuk mengutarakan permasalahan-permasalahan yang mereka temui dalam mengelola BMT dilanjutkan dengan lokakarya pendampingan pembuatan laporan keuangan syarariah serta analisis laporan keuangan BMT yang dibimbing oleh&nbsp; Banu yang merupakan dosen FEB UI.</p>\r\n<p>Liz Indah selaku Ketua BMT Al Mujahidin mengucapkan terima kasih kepada tim Pengabdian Masyarakat Universitas Indonesia yang telah membantu memberdayakan BMT/koperasi syariah di Pontianak dengan secara berkesinambungan memberikan pembekalan kepada koperasi-koperasi syariah yang ada di Pontianak.&nbsp;</p>\r\n<p>Harapannya ke depan kegiatan ini dapat menghubungkan antara setiap&nbsp;<em>stakeholder,</em>&nbsp;pemerintah, tokoh masyarakat dan penggiat ekonomi syariah. Tim Pengabdian lain yang terlibat dalam program ini adalah Abdul Karim Munthe SSy, SH, MH dan Erizka Permatasari, masing-masing sebagai anggota pengabdi.</p>', 'slide2-1596357642.png', NULL, NULL, 'Publish', 1, 'Ya', '2020-08-02 08:40:43'),
('2fb1e415-54d1-473d-ab9b-f374bb21a911', 4, 4, 'Kerja sama OJK', 'Partner', NULL, 'ojk-otoritas-jasa-keuangan-vector-logo-1596357058.png', NULL, NULL, 'Publish', 1, 'Ya', '2020-08-02 08:30:59'),
('74c1255b-3cd0-4eb2-9ec7-ddc1c7099ab4', 4, 4, 'Kerja sama BI', 'Partner', NULL, 'bank-indonesia-1596357077.png', NULL, NULL, 'Publish', 2, 'Ya', '2020-08-02 08:31:17'),
('3e438371-edfe-486c-8676-94131982fc1c', 4, 4, 'Galeri 1', 'Galeri', NULL, 'ilustrasi-umkm-1598501112.jpeg', NULL, NULL, 'Publish', 1, 'Ya', '2020-08-27 04:05:12'),
('e9e3358d-8675-4d35-a50a-843c850b13ad', 4, 4, 'Galeri 2', 'Galeri', NULL, 'ilustrasi-umkm-1598501094.jpeg', NULL, NULL, 'Publish', 2, 'Ya', '2020-08-27 04:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id_gambar_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_gambar_produk` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_produk`
--

INSERT INTO `gambar_produk` (`id_gambar_produk`, `id_user`, `id_produk`, `nama_gambar_produk`, `gambar`, `keterangan`, `urutan`, `tanggal`) VALUES
(2, 0, 1, '', 'NITRICO_Distributor_Ad_01_b2.jpg', '', 0, '2020-05-29 23:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `tanggal`) VALUES
(9, 0, 'produk', 'produk', 3, 0, '2020-08-27 06:22:40'),
(5, 1, 'kegiatan-organisasi', 'Kegiatan Organisasi', 5, 0, '2020-06-10 22:08:31'),
(8, 0, 'perkoperasian', 'Perkoperasian', 1, 0, '2020-08-27 06:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_download`
--

CREATE TABLE `kategori_download` (
  `id_kategori_download` int(11) NOT NULL,
  `slug_kategori_download` varchar(255) NOT NULL,
  `nama_kategori_download` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_download`
--

INSERT INTO `kategori_download` (`id_kategori_download`, `slug_kategori_download`, `nama_kategori_download`, `urutan`) VALUES
(1, 'product-pricelist', 'Product Pricelist', 1),
(2, 'informasi-nitrico', 'Informasi Nitrico', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori_galeri`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`) VALUES
(4, 'kegiatan', 'Kegiatan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `nama_kategori_produk` varchar(200) NOT NULL,
  `slug_kategori_produk` varchar(200) NOT NULL,
  `urutan` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `nama_kategori_produk`, `slug_kategori_produk`, `urutan`, `keterangan`, `gambar`, `tanggal`) VALUES
(1, 'Produk Simpanan', 'produk-simpanan', 1, '<p>Kategori Keuangan Negara</p>', 'image-no-found-1594716676.png', '2020-07-16 02:59:31'),
(3, 'Produk Pembiayaan', 'produk-pembiayaan', 2, '<p>Kategori Belajar Akuntansi</p>', 'image-no-found-1594716702.png', '2020-07-16 02:59:46'),
(4, 'Kategori Statistik Keuangan', 'kategori-statistik-keuangan', 3, '<p>Kategori Statistik Keuangan</p>', 'image-no-found-1594716725.png', '2020-07-14 08:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(20) DEFAULT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `isi_3` varchar(500) DEFAULT NULL,
  `isi_4` varchar(500) DEFAULT NULL,
  `isi_5` varchar(500) DEFAULT NULL,
  `isi_6` varchar(500) DEFAULT NULL,
  `link_1` varchar(255) DEFAULT NULL,
  `link_2` varchar(255) DEFAULT NULL,
  `link_3` varchar(255) DEFAULT NULL,
  `link_4` varchar(255) DEFAULT NULL,
  `link_5` varchar(255) DEFAULT NULL,
  `link_6` varchar(255) DEFAULT NULL,
  `javawebmedia` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rekening` text DEFAULT NULL,
  `prolog_topik` text DEFAULT NULL,
  `prolog_program` text DEFAULT NULL,
  `prolog_sekretariat` text DEFAULT NULL,
  `prolog_aksi` text DEFAULT NULL,
  `prolog_kolaborasi` text DEFAULT NULL,
  `prolog_sebaran` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `prolog_agenda` text DEFAULT NULL,
  `prolog_wawasan` text DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_timeout` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `judul_pembayaran` varchar(255) DEFAULT NULL,
  `isi_pembayaran` text DEFAULT NULL,
  `gambar_pembayaran` varchar(255) DEFAULT NULL,
  `link_bawah_peta` varchar(255) DEFAULT NULL,
  `text_bawah_peta` varchar(255) NOT NULL,
  `cara_pesan` enum('Keranjang Belanja','Formulir Pemesanan') NOT NULL,
  `setting_title_service_1` varchar(255) NOT NULL,
  `setting_service_1` text NOT NULL,
  `setting_title_service_2` varchar(255) NOT NULL,
  `setting_service_2` text NOT NULL,
  `setting_title_service_3` varchar(255) NOT NULL,
  `setting_service_3` text NOT NULL,
  `setting_title_service_4` varchar(255) NOT NULL,
  `setting_service_4` text NOT NULL,
  `setting_logo_service_1` varchar(255) NOT NULL,
  `setting_logo_service_2` varchar(255) NOT NULL,
  `setting_logo_service_3` varchar(255) NOT NULL,
  `setting_logo_service_4` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `nama_singkat`, `jam_operasional`, `tagline`, `tagline2`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_plus`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_google_plus`, `singkatan`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `isi_1`, `isi_2`, `isi_3`, `isi_4`, `isi_5`, `isi_6`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `javawebmedia`, `gambar`, `video`, `rekening`, `prolog_topik`, `prolog_program`, `prolog_sekretariat`, `prolog_aksi`, `prolog_kolaborasi`, `prolog_sebaran`, `gambar_berita`, `prolog_agenda`, `prolog_wawasan`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `judul_pembayaran`, `isi_pembayaran`, `gambar_pembayaran`, `link_bawah_peta`, `text_bawah_peta`, `cara_pesan`, `setting_title_service_1`, `setting_service_1`, `setting_title_service_2`, `setting_service_2`, `setting_title_service_3`, `setting_service_3`, `setting_title_service_4`, `setting_service_4`, `setting_logo_service_1`, `setting_logo_service_2`, `setting_logo_service_3`, `setting_logo_service_4`, `id_user`, `tanggal`) VALUES
(1, 'Bmtinsan Cita', NULL, '08.00 s/d 16.00', 'Bmtinsan Cita', NULL, '<h3>Tentang Kami</h3>\r\n<p style=\"text-align: justify;\">BMT Insan Cita berdiri pada tahun 2014 didirikan atas dasar komitmen dan kepedulian sosial para alumni Kader Himpunan Mahasiswa Islam terhadap kondisi sektor ekonomi riil, khususnya di kalangan pedagang pasar, pedagang kaki lima, UMKM, industri rumah tangga hingga para petani, yang hingga kini masih belum mendapatkan akses permodalan, serta masih minimnya lembaga keuangan yang dapat memfasilitasi transaksi pembayaran yang benar- benar fleksibel sesuai dengan kondisi keuangan mereka serta benar-benar dapat dipertanggung jawabkan ke-Syariahannya baik dari segi layanan maupun sistem operasionalnya</p>\r\n<h3>Misi Kami</h3>\r\n<p>Menjadi Koperasi Syari\'ah Terdepan dan Modern, Sebagai Mitra Muamalah Ummat</p>\r\n<h3>Mengapa Harus Kami ?</h3>\r\n<ol>\r\n<li>Kami sudah menerapkan Koperasi berbasis teknologi blockchain</li>\r\n<li>Proses pinjaman maksimal hanya 1&nbsp;hari</li>\r\n<li>Berbasis Online</li>\r\n<li>Tanpa Denda Keterlambatan Bunga, tanpa Riba, dan Tanpa Ghoror</li>\r\n<li>Awal pembiayaan hingga Rp 10.000.000,-</li>\r\n<li>Tenor pembiayaan maksimal hingga 2 ( dua ) tahun</li>\r\n</ol>\r\n<h3>Syarat Pinjaman</h3>\r\n<ol>\r\n<li>Min. berusia 19 tahun maks. 52 tahun</li>\r\n<li>Memiliki pekerjaan tetap / usaha berjalan di atas 2 tahun</li>\r\n<li>Warga Negara Indonesia</li>\r\n<li>Siap mengikuti program pembinaan usaha&nbsp;</li>\r\n</ol>', 'Koperasi Syari\'ah Termodern dan Terpercaya', 'https://bmtinsancita.com/', 'admin@bmtinsancita.com', NULL, 'Jl. Widyakrama RT 01 RW 05, Kel. Sudajaya Hilir, Kec. Baros, Kota Sukabumi', '085315196247', '+6285315196247', '085315196247', 'bmt1-1594871636-1595860431.png', 'bmt1-1594871636-1595860453.png', 'Bmtinsan Cita', NULL, 'https://www.facebook.com/bmtinsancita/', NULL, NULL, 'https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q', 'Bmtinsan Cita', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.2328832769667!2d106.92134551174449!3d-6.9542552988144415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6847fd671f0cb7%3A0x867ae77ec39c3e22!2sBilly.Net!5e0!3m2!1sen!2sid!4v1595319130197!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Tempat belajar nyaman', 'fa fa-home', 'Materi Kursus Selalu Update', 'fa fa-laptop', 'Jadwal Flexibel', 'fa fa-thumbs-up', 'Menjaga Amanah', 'fa-check-square-o', 'Tempat belajar nyaman', 'fa-home', 'Online service', 'fa-laptop', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan serasa di rumah sendiri', 'Materi kursus kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', 'Bagi Anda siswa yang ingin belajar, kami menerapkan jadwal flexibel', 'Kami senantiasa menjaga amanah yang diberikan kepada donatur agar sampai di tangan yang berhak.', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan', 'Website kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', 'Our Services', 'Produk Simpanan', 'BERITA DAN AGENDA', '', '', '', '<p>Berawal dari keinginan ibunda Hj.Masah Muhari diakhir hidupnya untuk mewakaan sebagian hartanya dijalan Allah, gayungpun bersambut pada bulan Mei 2011 saat kami akan melaksanakan ibadah umrah, Seorang rekan kami sesama Jamaah bernama ustadzah Hj. Zainur Fahmid memberikan informasi Tentang Anggota yang hendak mewakaan sebidang tanahnya di wilayah Beji Timur. Kami pun memanjatkan doa di kota suci dengan penuh rasa harap pertolongan Allah untuk menunjukan jalan terbaik-Nya, maka sepulang umroh kami mengadakan pertemuan di kediaman Ibu Dra Hj Ratna Mardjanah untuk membicarakan visi misi kami dalam wakaf tersebut dan sepakat untuk mendirikan Istana Yatim Riyadhul Jannah ini.</p>\r\n<p>Nama Riyadhul Jannah Sendiri diambil dari nama pengelola wakaf (H. Ahmad Riyadh Muchtar, Lc) dan pemberi wakaf (Dra Hj Ratna Mardjanah). Istana Yatim Riyadhul Jannah hadir untuk melayani dan memfasilitasi segala kebutuhan anak yatim, terutama pendidikan agama, akhlak dan kehidupan yang layak untuk bekal masa depan mereka yang cerah agar bisa memberi manfaat bagi umat. Harapan kami semoga dengan membangunkan istana untuk anak yatim, maka Allah akan berikan istana-Nya di surga kelak dan kita termasuk manusia yang bisa memberika manfaat bagi sesama sebagaimana sabda Rasulullah SAW yang artinya:&nbsp;</p>\r\n<p>&ldquo;Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lainnya&rdquo;&nbsp;</p>\r\n<p>erimakasih atas segala bentuk bantuan yang dipercayakan kepada kami baik secara materi, tenaga dan kiran serta doa para muhsinin dan muhsinat Istana Yatim Riyadhul Jannah selama ini, mulai dari rencana pendirian hingga berkembang seperti saat ini. Semoga segala amal menjadi shadaqah jariyah disisi-Nya.&nbsp;</p>\r\n<p>&nbsp;</p>', 'logo-1594684339.jpeg', 'fsH_KhUWfho', '<table id=\"dataTables-example\" class=\"table table-bordered\" width=\"100%\">\r\n<thead>\r\n<tr>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"19%\">Nama Bank</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"21%\">Nomor Rekening</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"7%\">Atas nama</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>BCA KCP Margo City</td>\r\n<td>4212548204</td>\r\n<td>Andoyo</td>\r\n</tr>\r\n<tr>\r\n<td>Bank Mandiri KCP Universitas Indonesia</td>\r\n<td>1570001807768</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n<tr>\r\n<td>Bank BNI Syariah Kantor Cabang Jakarta Selatan</td>\r\n<td>0105301001</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Dalam mewujudkan pembangunan berkelanjutan, pemerintah kabupaten anggota LTKL telah mengidentifikasi dan memilih topik yang sesuai dengan kondisi di daerahnya. Ada 5 topik prioritas yang dipilih dengan penerapan yang disesuaikan kembali di masing-masing kabupaten.</p>', NULL, '<p>Setelah Lingkar Temu Kabupaten Lestari (LTKL) diinisiasi, kesekretariatan dibentuk untuk membantu para pemerintah kabupaten anggota bekerja dan berkolaborasi. Walaupun tidak memiliki mandat implementasi, Sekretariat LTKL menjadi vital dalam melancarkan koordinasi, pengumpulan basis data, hingga pelaporan perkembangan. Sekretariat LTKL juga diperkuat dengan kehadiran personil yang telah berpengalaman di bidang management pengetahuan, program pembangunan berkelanjutan hingga kebijakan.</p>', '', '<p>Lingkar Temu Kabupaten Lestari (LTKL) mengedepankan kolaborasi dalam mewududkan pembangunan berkelanjutan. Ada 10 kabupaten yang tersebar di 6 provinsi di Indonesia telah menjadi anggota LTKL.</p>\r\n<p>Hingga kini, berbagai pihak telah ikut berkolaborasi, mulai dari pemerintah kabupaten, sekeretariat LTKL, mitra pembangunan hingga pihak swasta.</p>', '', 'balairung-budiutomo-01.jpg', '<p>Acara yang ditampilkan merupakan kumpulan acara LTKL, mitra, maupun pemerintah kabupaten anggota LTKL, mulai dari acara seminar hingga festival.</p>', '<p>LTKL bukan satu-satunya yang bergerak dalam mewujudkan pembangunan berkelanjutan, serta upaya penanggulangan perubahan iklim. Ikuti terus perkembangan usaha LTKL serta rekan-rekan lain menuju bumi dan Indonesia yang lestari.</p>', 'smtp', 'ssl://mail.javawebmedia.com', '465', '12', 'pendaftaran@javawebmedia.com', 'rasulullah112233', 'Metode Pembayaran Produk', '<p>Anda dapat melakukan pembayaran dengan beberapa cara, yaitu:</p>\r\n<ol>\r\n<li><strong>Pembayaran Tunai</strong>, dapat Anda serahkan secara langsung ke salah satu staff Java Web Media</li>\r\n<li><strong>Pembayar Via Transfer Rekening</strong></li>\r\n</ol>\r\n<p>Lakukan transfer biaya atas layanan dan produk&nbsp;<strong>Java Web Media</strong>&nbsp;ke salah satu rekening di bawah ini.</p>\r\n<h3>Konfirmasi Pembayaran</h3>\r\n<p>Anda dapat melakukan konfirmasi pembayaran melalui:</p>\r\n<ul>\r\n<li><strong>Melalui Email</strong>, silakan kirim bukti pembayaran ke:&nbsp;<strong><a href=\"mailto:contact@javawebmedia.co.id?subject=Konfirmasi%20Pembayaran\">contact@javawebmedia.co.id</a></strong></li>\r\n<li><strong>Melalui Whatsapp</strong>, kirimkan bukti pembayaran Anda ke&nbsp;<strong>+6281210697841</strong></li>\r\n<li><strong>Melalui Formulir Konfirmasi Pembayaran</strong>, Anda dapat mengunggah bukti pembayaran Anda melalui form&nbsp;<strong><a title=\"Konfirmasi Pembayaran\" href=\"https://javawebmedia.com/konfirmasi\">&nbsp;Konfirmasi Pembayaran</a></strong></li>\r\n</ul>', 'payment.jpg', 'Galeri', '', '', 'Global business', '<p>Data privasi anda kami lindungi dengan memenuhi unsur kehati-hatian dan rahasia.</p>', 'Pro Services & Advice', '<p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>', 'Fast online support', '<p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>', 'Fresh business ideas', '<p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>', 'flaticon-increasing5', 'flaticon-file24', 'flaticon-syncing', 'flaticon-royalty', 4, '2020-09-29 16:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_07_13_002413_create_pendaftaran_table', 1),
(2, '2020_07_13_043317_create_service_table', 1),
(3, '2020_07_13_095659_create_pesan_table', 1),
(4, '2020_07_14_031448_create_testimoni_table', 2),
(5, '2020_07_14_044738_create_tim_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `token_transaksi` varchar(255) NOT NULL,
  `tanggal_order` date NOT NULL,
  `nomor_transaksi` int(11) NOT NULL,
  `status_pemesanan` varchar(255) NOT NULL DEFAULT 'Menunggu',
  `nama_pemesan` varchar(255) NOT NULL,
  `telepon_pemesan` varchar(255) NOT NULL,
  `email_pemesan` varchar(255) DEFAULT NULL,
  `alamat` varchar(300) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga_produk` bigint(20) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `ongkir` bigint(20) DEFAULT NULL,
  `total_biaya` bigint(20) DEFAULT NULL,
  `tanggal_pemesanan` datetime DEFAULT NULL,
  `cara_bayar` varchar(255) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `nama_bank_pengirim` varchar(255) DEFAULT NULL,
  `nomor_rekening_pengirim` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_produk`, `id_rekening`, `kode_transaksi`, `token_transaksi`, `tanggal_order`, `nomor_transaksi`, `status_pemesanan`, `nama_pemesan`, `telepon_pemesan`, `email_pemesan`, `alamat`, `jumlah_produk`, `harga_produk`, `total_harga`, `ongkir`, `total_biaya`, `tanggal_pemesanan`, `cara_bayar`, `tanggal_bayar`, `bukti`, `jumlah`, `pengirim`, `nama_bank_pengirim`, `nomor_rekening_pengirim`, `keterangan`, `tanggal_post`, `tanggal_update`) VALUES
(1, 4, 2, 0, 'JWM202006100001', 'kMpUQADBlGkeTQhR7439a6zsqX6dWmzK', '2020-06-10', 1, 'Dikirim', 'Andoyo', '085715100485', 'javawebmedia@gmail.com', 'adadada', 1, 12000, 12000, 0, 0, '2020-06-10 07:57:46', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-10 07:57:46', '2020-06-12 13:53:42'),
(2, 4, 1, 0, 'JWM202006120002', 'wvFD60jruVx9vYJ1aFL4WLOZAeYQXkxx', '2020-06-12', 2, 'Menunggu', 'Eflita Meiyetriani', '085715100485', 'javawebmedia@gmail.com', 'ADADA ADADA ADADA AAFA', 1, 10000, 10000, 0, 0, '2020-06-12 12:12:56', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-12 12:12:56', '2020-06-12 14:13:02'),
(3, 0, 1, 0, 'JWM202006120003', 'alN7qAzNj1lopbjwsWswvKecvWjxQUzv', '2020-06-12', 3, 'Menunggu', 'Rayyan Andoyo', '085715100485', 'lalu-kekah@bkkbn.go.id', 'Perumahan Ferrari', 1, 10000, 10000, 0, 0, '2020-06-12 17:57:42', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-12 17:57:42', '2020-06-12 17:57:42'),
(4, 4, 1, 0, 'JWM202006120004', 'P3uAxeJ3TSvlfYzGRjwgMncwLBQdq3vb', '2020-06-12', 4, 'Konfirmasi', 'Rayyan Andoyo', '085715100485', 'lalu-kekah@bkkbn.go.id', 'Perumahan Ferrari', 1, 10000, 10000, 0, 0, '2020-06-12 17:58:15', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-12 17:58:15', '2020-06-12 18:56:39'),
(5, 4, 1, 2, 'JWM202006120005', 'rrzHk1NcrkK3KvYnqse4XdudWGz3tiZL', '1970-01-01', 5, 'Selesai', 'UDIN SIMALAKAMA', '085715100485', 'javawebmedia@gmail.com', 'Desa Sumberejo', 1, 10000, 10000, 200000, 210000, '2020-06-12 18:19:57', 'Transfer', '2020-06-13', '357-1591985014.jpg', 200000, 'Andoyo', 'BCA', '2424242', NULL, '2020-06-12 18:03:35', '2020-06-12 18:54:33'),
(6, 0, 5, NULL, 'JWM202006180006', 'MxnOVRcARIiPe3vBI4O9YoVxJY0z3B2M', '2020-06-18', 6, 'Menunggu', 'Andoyo', '085715100485', 'javawebmedia@gmail.com', 'adadada adada', 1, 120000, 120000, NULL, NULL, '2020-06-18 07:57:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 07:57:03', '2020-06-18 07:57:03'),
(7, 0, 6, NULL, 'JWM202007130007', 'MCJmwKiPQuJlyGarn3uAQEDPZMFk1l9L', '2020-07-13', 7, 'Menunggu', 'Andi', '08222222', 'teraselektronik@gmail.com', 'dsd', 1, 1800000, 1800000, NULL, NULL, '2020-07-13 09:21:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-13 09:21:46', '2020-07-13 09:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nomer_induk`, `nama_lengkap`, `no_ktp`, `no_kk`, `no_whatsapp`, `pekerjaan`, `created_at`, `updated_at`) VALUES
('815d1d5b-000e-4e50-a18e-47a437f7e8fe', '202007130001', 'Rizky', '3212032810950004', '3212032810950004', '2323232321222', 'sfsf', '2020-07-13 06:10:23', '2020-07-13 06:10:23'),
('9a7096d2-9b94-4079-8efc-e43e393fbb1a', '202007130002', 'Budi', '3212032810950005', '3212032810950005', '3212032810950', 'as', '2020-07-13 20:29:13', '2020-07-13 20:29:13'),
('c56f0b34-bea0-49d7-9468-e025fe7a4e3d', '202007130003', 'Asep chandra hayat', '3204152004820022', '3204153012100020', '085721896772', 'petani', '2020-08-26 20:38:27', '2020-08-26 20:38:27'),
('c6e2ec5a-32b9-4d58-94ff-07f4e2f35cfa', '202007130004', 'Bayu Kusuma', '3270101010101034', '3232323232323243', '0824234466', 'wiraswasta', '2020-09-09 00:27:42', '2020-09-09 00:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `phone`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
('070eecd3-4341-4a5b-a130-feee0785e648', 'cmsku', '02232321212', 'agilgamahdi@yahoo.co.id', 'Informasi', 'sdsd', '2020-07-14 23:23:26', '2020-07-14 23:23:26'),
('5fc17375-7828-4d0d-88b4-a99f38e1f798', '<script> function myFunction() { alert(\"Hello\\nHow are you?\"); } </script>', '822222', 'dian@gmail.com', 'Ghh', '<script> function myFunction() { alert(\"Hello\\nHow are you?\"); } </script>', '2020-09-02 11:11:53', '2020-09-02 11:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` char(36) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `isi` text NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_terendah` int(11) DEFAULT NULL,
  `harga_tertinggi` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `mulai_diskon` date DEFAULT NULL,
  `selesai_diskon` date DEFAULT NULL,
  `besar_diskon` int(12) DEFAULT NULL,
  `jenis_diskon` enum('Potongan','Persentase') DEFAULT NULL,
  `jumlah_order_min` int(11) DEFAULT NULL,
  `jumlah_order_max` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `hits` bigint(20) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_client`, `id_kategori_produk`, `slug_produk`, `kode_produk`, `nama_produk`, `status_produk`, `satuan`, `urutan`, `deskripsi`, `isi`, `client_name`, `harga_jual`, `harga_beli`, `harga_terendah`, `harga_tertinggi`, `gambar`, `keywords`, `mulai_diskon`, `selesai_diskon`, `besar_diskon`, `jenis_diskon`, `jumlah_order_min`, `jumlah_order_max`, `stok`, `berat`, `ukuran`, `hits`, `tanggal_post`, `tanggal`) VALUES
('', 16, 1, 1, 'test', '123', 'Testing', 'Publish', 'kilo gram', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'Ramidi', 20000, 10000, 15000, 20000, '960-640-umkm-katadata-donang-1595168567-1595825277.jpg', 'testing', '2020-09-29', '2020-09-30', 50, 'Potongan', 10, 50, 100, 400, '10x10', 1, '2020-09-29 00:00:00', '2020-09-29 16:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama_produk`, `nama_lengkap`, `email`, `pekerjaan`, `message`, `foto`, `created_at`, `updated_at`) VALUES
('', 'tes', 'testing', 'testing@gmail.com', 'pelajar', 'mantappp', '1-1598500865.png', '2020-09-28 17:00:00', NULL),
('1cf81a0d-7048-4d94-bd7a-dded3007d121', '', 'Samiun', '', 'Pengusaha Toko Online', 'Arif Rahman\r\n\r\nSyarat pembiayaan mudah tanpa ghoror', '1-1598500865.png', NULL, NULL),
('62f8d71f-17ad-4d7a-a834-d946c26fd0ed', '', 'Malika', '', 'Ibu Rumah tangga', 'Susi sulistiawati\r\n\r\nMenyenangkan pinjaman untuk sembako tanpa bunga', '3-1598500905.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `foto`, `nama_lengkap`, `slug_name`, `jabatan`, `telp`, `deskripsi`, `facebook`, `linkedin`, `created_at`, `updated_at`) VALUES
('702f510c-78a1-4c0d-a974-615d0127d879', 'orbobh3nhy3vgeqjlerdtidpwruxchfmnfnj4vj8-1595834013.jpeg', 'Y Elisio Tri Marianto', 'y-elisio-tri-marianto', 'Direktur PT. MMMB', '085315196247', '', 'mandiribersatu', '', NULL, '2020-07-26 17:00:00'),
('c26e61b7-9534-4e54-8b94-7a8dbf5a57bf', 'sko1imh5rmadb4etxq56v41gvnjxerla3d6y510w-1595833974.jpeg', 'Lusiana Intan Hapsari', 'lusiana-intan-hapsari', 'Customer Service', '085315196245', '', '@mandiribersatu', '', NULL, '2020-07-26 17:00:00'),
('ca0092c1-8dbe-4ed9-9c79-e757c3d5bfee', 'lsrkw1g1zpqk3gt8dmcfa196yicqrvrdaul5scai-1595833963.jpeg', 'Yoga', 'yoga', 'Administrasi Kredit', '085315196246', '', '@@mandiribersatu', '', NULL, '2020-07-26 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `kode_rahasia`, `gambar`, `tanggal`) VALUES
(4, 'Gilang Prayoga', 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', NULL, 'testimonials-1.jpg', '2020-08-30 04:19:23'),
(16, 'risqi ardiansyah', 'ardiris19@gmail.com', 'risqi', '8CB2237D0679CA88DB6464EAC60DA96345513964', '1', 'asd', NULL, '2020-09-29 15:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `video` text NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `bahasa` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `bahasa`, `id_user`, `tanggal`) VALUES
(66, 'Redenominasi Rupiah Masuk Rencana Strategis Kementerian Keuangan', 'Video', 'Redenominasi Rupiah Masuk Rencana Strategis Kementerian Keuangan', 'aMDTjgn00lE', 1, 'Indonesia', 4, '2020-07-14 14:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
  ADD PRIMARY KEY (`id_gambar_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `kategori_download`
--
ALTER TABLE `kategori_download`
  ADD PRIMARY KEY (`id_kategori_download`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori_produk`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD UNIQUE KEY `token_transaksi` (`token_transaksi`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftaran_no_ktp_unique` (`no_ktp`),
  ADD UNIQUE KEY `pendaftaran_no_kk_unique` (`no_kk`),
  ADD UNIQUE KEY `pendaftaran_no_whatsapp_unique` (`no_whatsapp`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD UNIQUE KEY `pesan_phone_unique` (`phone`),
  ADD UNIQUE KEY `pesan_email_unique` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
  MODIFY `id_gambar_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_download`
--
ALTER TABLE `kategori_download`
  MODIFY `id_kategori_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

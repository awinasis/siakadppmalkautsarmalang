-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 12:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad_ppmalkautsar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chart`
--

CREATE TABLE `tbl_chart` (
  `id_chart` int(3) NOT NULL,
  `NIS` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi_pengajian` enum('Malam','Shubuh') DEFAULT NULL,
  `keterangan` enum('Hadir','Alpha','Belajar','Nugas','Izin','Izin Terlambat','Nugas','Sakit','Terlambat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chart`
--

INSERT INTO `tbl_chart` (`id_chart`, `NIS`, `tanggal`, `sesi_pengajian`, `keterangan`) VALUES
(1, '201903001', '2021-04-19', 'Shubuh', 'Hadir'),
(2, '201903002', '2021-04-19', 'Shubuh', 'Nugas'),
(9, '201903003', '2021-04-18', 'Malam', 'Alpha'),
(10, '201903004', '2021-04-18', 'Malam', 'Izin'),
(11, '201903005', '2021-04-18', 'Malam', 'Belajar'),
(12, '201903006', '2021-04-18', 'Malam', 'Izin Terlambat'),
(13, '201903007', '2021-04-19', 'Shubuh', 'Terlambat'),
(14, '201903008', '2021-04-19', 'Shubuh', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(3) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat_asal_daerah` text NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_asal_daerah`, `noTelp`) VALUES
(1, 'Amir Hamzah', 'Lampung, 12 April 19', NULL, 'L', 'Lampung Utara', '081649293713');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jk`
--

CREATE TABLE `tbl_jk` (
  `id_jk` int(3) NOT NULL,
  `id_santri` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` enum('Qiraah','kitabah','Reguler','Mubtadin','Mutawasithin','Muntahin','Al-Taannii','Al-Sarii','Al-Idlofi','Hadits Besar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'Qiraah'),
(2, 'kitabah'),
(3, 'Reguler'),
(4, 'Mubtadin'),
(5, 'Mutawasithin'),
(6, 'Muntahin'),
(7, 'Al-Taannii'),
(8, 'Al-Sarii'),
(9, 'Al-Idlofi'),
(10, 'Hadits Besar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum`
--

CREATE TABLE `tbl_kurikulum` (
  `id_kurikulum` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_materi`
--

CREATE TABLE `tbl_materi` (
  `id_materi` int(3) NOT NULL,
  `nama_materi` varchar(70) NOT NULL,
  `kelas` enum('Qiraah','kitabah','Reguler','Mubtadin','Mutawasithin','Muntahin','Al-Taannii','Al-Sarii','Al-Idlofi','Hadits Besar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_materi`
--

INSERT INTO `tbl_materi` (`id_materi`, `nama_materi`, `kelas`) VALUES
(1, 'Bacaan Surat Al-Baqarah', 'Qiraah'),
(2, 'Bacaan Surat Al-Mulk s/d Al-Nas', 'Qiraah'),
(3, 'Tharah', 'Qiraah'),
(4, 'Tajwid', 'Qiraah'),
(5, 'Adab Pencari Ilmu', 'Qiraah'),
(6, 'Huruf Hijaiyah', 'kitabah'),
(7, 'Khat wa Imla\'', 'kitabah'),
(8, 'Kitabah Pegon', 'kitabah'),
(9, 'Tuntunan Tata Krama', 'kitabah'),
(10, 'Makna Al-Qur\'an Juz 1 s.d 30', 'Reguler'),
(11, 'Bacaan Al-Qur\'an', 'Mubtadin'),
(12, 'Kitab Al-Shalat', 'Al-Taannii'),
(13, 'Kitab Al-Adab', 'Al-Taannii'),
(14, 'Kitab Al-Adillah', 'Al-Taannii'),
(15, 'Kitab Al-Shaum', 'Al-Taannii'),
(16, 'Kitab Manasik wa Al-Jihad', 'Al-Taannii'),
(17, 'Kitab Shifat Al-Jannah wa Al-Nar', 'Al-Taannii'),
(18, 'Kitab Al-Da\'awat', 'Al-Taannii'),
(19, 'Kitab Al-Janaiz', 'Al-Taannii'),
(20, 'Kitab Al-Shalat Al-Nawafil', 'Al-Taannii'),
(21, 'Kitab Al-Ahkam', 'Al-Sarii'),
(22, 'Kitab Al-Imarah', 'Al-Sarii'),
(23, 'Kitab Al-Haji', 'Al-Sarii'),
(24, 'Kitab Manasik Al-Haji', 'Al-Sarii'),
(25, 'Kitab Al-Jihad', 'Al-Sarii'),
(26, 'Kitab Al-Imarah min Kanzi Al-\'ummal', 'Al-Sarii'),
(27, 'Kumpulan Khutbah', 'Al-Sarii'),
(28, 'Kitab Al-Faraidl', 'Al-Idlofi'),
(29, 'Kitab Hidayah Al-Mustafidz fi Al-Tajwid', 'Al-Idlofi'),
(30, 'Kitab Mabadi Fi al-Sharfi wa al-Nahwi', 'Al-Idlofi'),
(31, 'Kitab Wujubu Luzum Al-Jama\'ah', 'Al-Idlofi'),
(32, 'Qira\'ah Al-Qur\'an', 'Qiraah'),
(33, 'Hafalan Surat-surat Pendek', 'Qiraah'),
(34, 'Hafalan Do\'a', 'Qiraah'),
(35, 'Kitabah', 'kitabah'),
(36, 'Hafalan Surat-surat Pendek', 'kitabah'),
(37, 'Hafalan Do\'a', 'kitabah'),
(38, 'Bacaan Al-Qur\'an', 'Al-Taannii'),
(39, 'Makna dan Keterangan', 'Al-Taannii'),
(40, 'Hafalan Surat-surat Pendek', 'Al-Taannii'),
(41, 'Hafalan Do\'a', 'Al-Taannii'),
(42, 'Hafalan Dalil-dalil', 'Al-Taannii'),
(43, 'Bacaan Al-Qur\'an', 'Al-Sarii'),
(44, 'Makna dan Keterangan', 'Al-Sarii'),
(45, 'Hafalan Surat-surat Pendek', 'Al-Sarii'),
(46, 'Hafalan Do\'a', 'Al-Sarii'),
(47, 'Hafalan Dalil-dalil', 'Al-Sarii'),
(48, 'Bacaan Al-Qur\'an', 'Al-Idlofi'),
(49, 'Makna dan Keterangan', 'Al-Idlofi'),
(50, 'Hafalan Surat-surat Pendek', 'Al-Idlofi'),
(51, 'Hafalan Do\'a', 'Al-Idlofi'),
(52, 'Hafalan Dalil-dalil', 'Al-Idlofi'),
(53, 'Khutbah/Ceramah', 'Al-Idlofi'),
(54, 'Adzan dan Iqamah', 'Al-Idlofi'),
(55, 'Latihan Mengajar', 'Al-Idlofi'),
(56, 'Hafalan juz 1-5', 'Hadits Besar'),
(57, 'Hafalan juz 6-10', 'Hadits Besar'),
(58, 'Hafalan juz 11-15', 'Hadits Besar'),
(59, 'Hafalan juz 21-25', 'Hadits Besar'),
(60, 'Hafalan juz 26-30', 'Hadits Besar'),
(61, 'Shahih Bukhari juz 1', 'Hadits Besar'),
(62, 'Shahih Bukhari juz 2', 'Hadits Besar'),
(63, 'Shahih Bukhari juz 3', 'Hadits Besar'),
(64, 'Shahih Bukhari juz 4', 'Hadits Besar'),
(65, 'Shahih Bukhari juz 5', 'Hadits Besar'),
(66, 'Shahih Bukhari juz 6', 'Hadits Besar'),
(67, 'Shahih Bukhari juz 7', 'Hadits Besar'),
(68, 'Shahih Bukhari juz 8', 'Hadits Besar'),
(69, 'Musthalah Hadits', 'Hadits Besar'),
(70, 'Syarah al-Asma\' al-Husna', 'Hadits Besar'),
(71, 'Syarah Do\'a ASAD', ''),
(72, 'Hafalan Dalil-dali Lima Bab', 'Hadits Besar'),
(73, 'Hafalan Dalil-dalil Empat Tali Iman', 'Hadits Besar'),
(74, 'Hafalan Dalil-dalil Enam Thobi\'at Luhur', 'Hadits Besar'),
(75, 'Hafalan Dalil-dalil Tri Sukses Generus', 'Hadits Besar'),
(76, 'Fiqih Thaharah', 'Hadits Besar'),
(77, 'Fiqih Shalat', 'Hadits Besar'),
(78, 'Fiqih Zakat', 'Hadits Besar'),
(79, 'Fiqih Puasa', 'Hadits Besar'),
(80, 'Fiqih Haji dan Umrah', 'Hadits Besar'),
(81, 'Wujub Luzum al-Jama\'ah', 'Hadits Besar'),
(82, 'Faraidl', 'Hadits Besar'),
(83, 'Hidayah al-mustafid', 'Hadits Besar'),
(84, 'Nahwu dan Sharaf', 'Hadits Besar'),
(85, 'Asmaullah al-Husna', 'Hadits Besar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaiekstrakurikuler`
--

CREATE TABLE `tbl_nilaiekstrakurikuler` (
  `id_ne` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nilai_1` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL,
  `nilai_2` enum('A','B+','B','B-','C+','C','C-','D','E') DEFAULT NULL,
  `nilai_3` enum('A','B+','B','B-','C+','C','C-','D','E') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaiekstrakurikuler`
--

INSERT INTO `tbl_nilaiekstrakurikuler` (`id_ne`, `NIS`, `nama_santri`, `jenis_kelamin`, `nilai_1`, `nilai_2`, `nilai_3`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 'B+', 'B', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaikonseppraktikum`
--

CREATE TABLE `tbl_nilaikonseppraktikum` (
  `id_kp` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `n11` int(11) NOT NULL,
  `n12` int(11) NOT NULL,
  `n13` int(11) NOT NULL,
  `n14` int(11) NOT NULL,
  `n15` int(11) NOT NULL,
  `n16` int(11) NOT NULL,
  `n17` int(11) NOT NULL,
  `n18` int(11) NOT NULL,
  `n19` int(11) NOT NULL,
  `n20` int(11) NOT NULL,
  `n21` int(11) NOT NULL,
  `n22` int(11) NOT NULL,
  `n23` int(11) NOT NULL,
  `n24` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaikonseppraktikum`
--

INSERT INTO `tbl_nilaikonseppraktikum` (`id_kp`, `NIS`, `nama_santri`, `jenis_kelamin`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `n11`, `n12`, `n13`, `n14`, `n15`, `n16`, `n17`, `n18`, `n19`, `n20`, `n21`, `n22`, `n23`, `n24`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilailimasuksessantri`
--

CREATE TABLE `tbl_nilailimasuksessantri` (
  `id_lss` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nilai_A` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL,
  `nilai_B` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL,
  `nilai_C` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL,
  `nilai_D` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL,
  `nilai_E` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilailimasuksessantri`
--

INSERT INTO `tbl_nilailimasuksessantri` (`id_lss`, `NIS`, `nama_santri`, `jenis_kelamin`, `nilai_A`, `nilai_B`, `nilai_C`, `nilai_D`, `nilai_E`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 'B+', 'B+', 'B', 'B-', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaimateri`
--

CREATE TABLE `tbl_nilaimateri` (
  `id_nm` int(3) NOT NULL,
  `id_materi` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `nilai5` int(11) NOT NULL,
  `nilai6` int(11) NOT NULL,
  `nilai7` int(11) NOT NULL,
  `nilai8` int(11) NOT NULL,
  `nilai9` int(11) NOT NULL,
  `nilai10` int(11) NOT NULL,
  `nilai11` int(11) NOT NULL,
  `nilai12` int(11) NOT NULL,
  `nilai13` int(11) NOT NULL,
  `nilai14` int(11) NOT NULL,
  `nilai15` int(11) NOT NULL,
  `nilai16` int(11) NOT NULL,
  `nilai17` int(11) NOT NULL,
  `nilai18` int(11) NOT NULL,
  `nilai19` int(11) NOT NULL,
  `nilai20` int(11) NOT NULL,
  `nilai21` int(11) NOT NULL,
  `nilai22` int(11) NOT NULL,
  `nilai23` int(11) NOT NULL,
  `nilai24` int(11) NOT NULL,
  `nilai25` int(11) NOT NULL,
  `nilai26` int(11) NOT NULL,
  `nilai27` int(11) NOT NULL,
  `nilai28` int(11) NOT NULL,
  `nilai29` int(11) NOT NULL,
  `nilai30` int(11) NOT NULL,
  `nilai31` int(11) NOT NULL,
  `kelas` enum('Qiraah','kitabah','Reguler','Mubtadin','Mutawasithin','Muntahin','Al-Taannii','Al-Sarii','Al-Idlofi','Hadits Besar') NOT NULL,
  `prosentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaimateri`
--

INSERT INTO `tbl_nilaimateri` (`id_nm`, `id_materi`, `NIS`, `nama_santri`, `jenis_kelamin`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `nilai15`, `nilai16`, `nilai17`, `nilai18`, `nilai19`, `nilai20`, `nilai21`, `nilai22`, `nilai23`, `nilai24`, `nilai25`, `nilai26`, `nilai27`, `nilai28`, `nilai29`, `nilai30`, `nilai31`, `kelas`, `prosentase`) VALUES
(1, 0, 201903002, 'Abdullah Winasis', 'L', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 'Al-Sarii', 30),
(3, 1, 201903001, 'Anggun Milenia Rahman', 'P', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 'Hadits Besar', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaisikapperilaku`
--

CREATE TABLE `tbl_nilaisikapperilaku` (
  `id_sp` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nl1` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl2` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl3` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl4` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl5` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl6` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl7` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl8` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL,
  `nl9` enum('A','B+','B','B-','C+','C','C-','D','E','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaisikapperilaku`
--

INSERT INTO `tbl_nilaisikapperilaku` (`id_sp`, `NIS`, `nama_santri`, `jenis_kelamin`, `nl1`, `nl2`, `nl3`, `nl4`, `nl5`, `nl6`, `nl7`, `nl8`, `nl9`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 'B+', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(3) NOT NULL,
  `NIS` varchar(15) NOT NULL,
  `periode_pembayaran` year(4) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tagihan` varchar(25) NOT NULL,
  `terbayar` varchar(25) NOT NULL,
  `status` enum('LUNAS','BELUM LUNAS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `NIS`, `periode_pembayaran`, `keterangan`, `tagihan`, `terbayar`, `status`) VALUES
(1, '201903002', 2021, 'Pembayaran Uang KBM', '2.640.000', '2.6.40.000', 'LUNAS'),
(2, '201903007', 2021, 'Pembayaran Uang PPM', '2.640.000', '0', 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(3) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `judul_pengumuman` varchar(30) NOT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `visible_pengumuman` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `tgl_dibuat`, `judul_pengumuman`, `isi_pengumuman`, `visible_pengumuman`) VALUES
(3, '2021-04-08', 'Nasehat Pemantapan', 'Notulen Nasehat Cak Emir \"Alim dan Fakih\", 20 Oktober 2019, Cibubur, Rawa Kuda  1. Orang Alim itu harus ditempuh lewat belajar.  2. Tapi jika orang yang paham, itu setelah belajar/ngaji lalu harus diamalkan. Contoh ada muballegh sdh mengaji bukhori bab nikah namun belum nikah, mungkin pas dikaji bab cerai bisa guys-guyu,,, pasti berbeda dgn muballegh yg sdh nikah, dkaji bab cerai mana berani guys-guyu.  3. Pak H. Nurhasan berbeda, beliau berilmu dan paham, kenapa? Karena beliau brani mempraktekkan ilmunya, apa?? Mendirikan Jamaah, temen2nya yg lulusan Mekkah diajak tidak ada yang brani dan tidak ada yg kuat, orang yg berilmu yang tidak mendirikan jamaah, mereka tidak akan tahu bagaimana prakteknya jamaah.   4. Orang Alim itu belum tentu fakih/paham. Tpi org FAKIH itu pasti BAIK. Jadi jangan heran klo ada org pinter murtad dr jamaah,,, karena sdh ada dalilnya dari zamannya nabi dan shohabat ya sudah ada,   5. Orang pinter/Alim itu belum tentu baik, kenapa?  A. Motivasi dia belajar ilmu: a. Ingin jadi ulama/membandingi ulama b. Ingin bisa selalu menjawab pertanyaan, membodohi org yang bodoh c. Ingin jadi pusat perhatian d. Ingin dpet harta dunia, atau ingin menjadi org2 yang dihormati,,  (4 hal ini yang dilarang nabi menjadi pondasi mencari ilmu),,, 4 hal tsb diatas tidak akan diucapkan org,,, (Hidden Agenda)   B. Cobaannya orang Alim,  dipuji, sombong, pamer, ujub, dibisiki setan,, adapun cobaan orang Alim yang sejati adalah iri dengki,, ada cerita, NYATA, asalnya jamaah biasa, dgn kipok hormat, dengan kides hormat, lalu dia mw jadi muballegh, mondok dan tugas, ngaji HB, tugas lagi, pernah jadi muballegh desa, muballegh daerah, lalu dia mw nikah, mw punya rumah, lantas nikah, pindah sambung jadi jamaah biasa, hari pertama memaklumi, tapi terus dibisiki setan, lama2 mengkritisi, tidak hormat, bahkan gembosi pengurus disitu, lalu dibisiki syeton mw jadi pengurus, akhirnya gk kerasa pindah sambung, smpe 100x pindah sambung, karena merasa pol sendiri, akhirnya murtad,,,  6. Jadilah orang yang alim yang fakih, menghormati imam, orang yang harusnya paling bisa mempraktekkan dalil metaati imam, ya harusnya muballegh itu,   7. Ironi, orang Alim itu tidak akan luntur  tapi fakih itu bisa luntur,, berdasarkan dalil, Allah tidak akan menghilangkan ilmu lewat hilangnya ilmu itu dari ulama, tapi lewat mewafatkan ulama, dan yang kedua, kepahaman orang itu tergantung siapa teman dekatnya (pergaulan), bisa jga lewat cobaan harta (seperti ceritanya bal\'am) , _dalilnya nabi, kebanyakan orang munafiknya golonganku nabi ya ahli quro, ahli baca qur\'an,,, sarah nya apa?? Mereka bisa mengajar tapi tidak bsa mengamalkan, bahkan mereka brani menipu umat,  8. Tanda benarnya jamaah ya ini ditandai dengan munculnya ayat2nya Allah yang tampak: a. Akan ada yang insaf (setiap daerahan ribuan org insof, baik diponde atau dikediri)  b. Akan ada yang murtad/keluar dr jamaah (ini karena memenuhi dalil, tpi jgn sampe kita yg murtad, sdh cycle, sesuatu yang akan terus terjadi setiap generasi) jgn smpe kita membantah ayat Allah dengan mengatakan, saya tidak akan terpengaruh, saya cuman liat2 youtube sbntar, liat blog sbntar, itu jgn smpe nggeh,  c. Akan ada yg munafek (munafek itu sifat, jika kita mengerjakan sifat2 tsb, maka akan menyeret kita menjadi org munafek, setiap org itu aslinya punya sifat munafeq, kita tidak boleh merasa aman dr sifat munafek, karena org yg merasa aman dr sifat munafek itu ya org munafek itu, bbrp ciri ya ada banyak, seperti : Klo solat males, seneng di puji, mau enaknya sndiri, males baca quran, males solat sunnah,  maka selalu Berdoalah agar jauh dr sifat munafek yaitu: Allahumma inni audzubika minannifaaqo, wa su\'il akhlaqo, wadoiqil arzaaqo,,  9. Tentang insaf dan murtad, masing2 ada 2 kategori, insaf dari hum masuk ke jamaah, atau jamaah insaf dari pelanggaran2nya, yang dlu nya gk lancar 5 bab nya lalu kena peringatan tobat dan lancar 5 bab ya, bgitu jg org yg murtad, adakalanya murtad dr jamaah kluar dr jamaah, tapi ada jg yg fisiknya dalam jamaah tapi kepahamannya sdh keluar dr jamaah, contoh tidak menghormati imam, tidak mw persenan, bahkan brani mengajak untuk tidak persenan, itu sebenarnya jg sdh murtad,   10. Kita sebagai suami itu menghadapi istri harus punya kesabaran berlapis-lapis,  11. Kita selama masih hidup pasti terus akan menjumpai cobaan, maka harus ttep sabar menetepi jamaah sampai mati,', 1),
(4, '2021-04-06', 'Santri comeback to PPM Malang', 'PENGUMUMAN PENTING  السلام عليكم ورحمة الله وبراكاته  Menyampaikan pengumuman kepada seluruh santri khususnya untuk Santri PPM Malang Raya Asal Jawa Timur.  Berdasarkan hasil musyawarah pengurus PPM dengan mempertimbangkan evaluasi kegiatan belajar mengajar santri dan kelancaran program pembinaan PPM dan perkembangan situasi yang ada. Maka PPM Malang Raya akan mencoba memulai kegiatan pondok new normal secara bertahap. yaitu tahap pertama ini santri yang berasal dari Daerah Jawa Timur Diminta Amal sholih Supaya Kembali ke PPM dan kembali mengikuti program pembinaan di PPM. dengan teknis sebagai berikut :  ~~~~~  1. Kedatangan santri Jawa Timur ke PPM paling lambat hari Minggu 11 April 2021  2. Santri yang kembali ke PPM supaya menunjukkan surat keterangan hasil rapid test yang dikirim ke Ketua Siswa Ma\'hadnya masing-masing sebelum berangkat kembali ke PPM.   3. Santri melakukan konfirmasi terlebih dahulu kepada kesiswaan terkait waktu kedatangan.   4. Santri selama perjalanan kembali ke PPM wajib menerapkan protokol kesehatan.   ~~~~~  Demikian, pengumuman ini kami sampaikan mohon dijadikan perhatian.   Hasil musyawarah ini amalsholih bisa ditetapi masing-masing santri dan diniati dengan niat mukhlis lillah karna Allah. Mugo2 Allah paring aman selamat lancar sehat sukses barokah untuk kita semua. Jadi sarjana mubaligh yang barokah.   الحمدلله جزا كم الله خيرا والسلام عليكم ورحمة الله وبرا كته', 1),
(23, '2021-04-14', 'example', '<p>hello world</p>\r\n', 1),
(25, '2021-04-15', 'test', '<p>test 123</p>\r\n\r\n<p>Assalamualaikum wr.wb</p>\r\n\r\n<p>Nama : Abdullah Winasis</p>\r\n\r\n<p>NIM&nbsp; &nbsp; : 1831710144</p>\r\n\r\n<p>Kelas : MI - 3C</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `NIS`, `nama_santri`, `pesan`, `tanggal`) VALUES
(1, 201903002, 'Abdullah Winasis', 'Assalamualaikum w.r w.b\r\nMengingatkan kembali perihal pembelaan dibulan ramadhan , krena sekrang sudah tanggal 26 dan terakhir pembelaan ditanggal 27 \r\namal sholih bisa segera diselsaikan perihal pembelaan\'\' yang ada di bulan ramdhan \r\nAlhamdulillahi jazakumullohu khoiro', '2021-04-28'),
(2, 0, '', 'Assalamualaikum', '2021-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `NIS`, `nama_santri`) VALUES
(1, 201903002, 'Abdullah Winasis');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_santri`
--

CREATE TABLE `tbl_santri` (
  `id_santri` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `noTelp` varchar(15) DEFAULT NULL,
  `universitas` varchar(30) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `jurusan_prodi` varchar(50) DEFAULT NULL,
  `kelas_santri` enum('Qiraah','kitabah','Reguler','Mubtadin','Mutawasithin','Muntahin','Al-Taannii','Al-Sarii','Al-Idlofi','Hadits Besar') NOT NULL,
  `angkatan_santri` year(4) DEFAULT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `noTelp_ortu` varchar(15) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_santri`
--

INSERT INTO `tbl_santri` (`id_santri`, `NIS`, `nama_santri`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `noTelp`, `universitas`, `fakultas`, `jurusan_prodi`, `kelas_santri`, `angkatan_santri`, `nama_ayah`, `noTelp_ortu`, `password`, `foto`) VALUES
(1, 201903002, 'Abdullah Winasis', 'Kediri', '1999-10-22', 'L', 'Jl Supriyadi, Rt/Rw 004/007 Dsn Papar Selatan, Ds Papar, Kab Kediri, Jawa Timur', 'awinasism2p@gmail.com', '2147483647', 'Politeknik Negeri Malang', '-', 'Teknologi Informasi/Manajemen Informatika', 'Al-Sarii', 2018, 'Maskun Bukhori', '2147483647', 'awinasis31354', 'awin.jpg'),
(10, 201903001, 'Abdillah Yudhatama', 'Malang', '2000-02-02', 'L', 'Jl. Anjasmoro No.35 RT.11 RW.03 Bendo Karang, Pandan Pakisaji, Kabupaten Malang Jawa Timur', 'abdillahyudhatama@gmail.com', '1234567890', 'Brawijaya', 'Pertanian', 'Agroekoteknologi', 'Al-Sarii', 2019, 'X', '0', NULL, NULL),
(11, 201903003, 'Achmad Koirudin Abdullah', 'Sragen', '2001-07-02', 'L', 'Pungkruk, Doyong RT01/000, Miri, Sragen, Jawa Tengah', 'achmadkhoirudinabdullah@gmail.com', '1234567890', 'Negeri Malang', 'Teknik', 'Pendidikan Teknik Elektro', 'Al-Sarii', 2019, '-', '0', NULL, NULL),
(17, 201803018, 'Rena Miftakhul Zulfa', 'Kediri', '1999-04-20', 'P', 'Wates, Kediri, Jawa Timur', 'renamiftaqulzulfa@gmail.com', '081234567890', 'STIKES', '-', 'Kebidanan', 'Hadits Besar', 2018, 'xxx', '81098765431', NULL, NULL),
(18, 201903006, 'Alfeina Zakkya Meriatami', 'Ponorogo', '2000-08-21', 'P', 'Ponorogo', 'alfeinazakkyameriatami@gmail.comm', '081234567865', 'Universitas Negeri Malang', 'Teknik', 'Pendidikan Teknik Informatika', 'Al-Taannii', 2003, 'yyy', '0871234567890', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id_surat` int(3) NOT NULL,
  `nama_surat` varchar(50) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `tgl_update` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `ukuran_file` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_surat`
--

INSERT INTO `tbl_surat` (`id_surat`, `nama_surat`, `kategori`, `tgl_upload`, `tgl_update`, `file`, `ukuran_file`) VALUES
(7, 'Surat Pengajuan Pelaksanaan PKL', 'Surat Pengajuan', '2021-04-26', '2021-04-26', '1619489380_ab70e8c5ea99a567ce09.pdf', 411469),
(8, 'EPBTI', 'Buku Pedoman', '2021-04-26', '2021-04-26', '1619489962_3507fae09adea39e2e4a.pdf', 425761),
(9, 'Digital Entrepreneur', 'Buku Pedoman', '2021-04-26', '2021-04-26', '1619490014_038df55b2847d8dca01f.pdf', 993749);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` varchar(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `foto`) VALUES
(6, 'Abdullah Winasis', '201903002', 'awinasis', 'Admin', '1617705484_c06eb78eb388276be38a.jpg'),
(7, 'Anggun Milenia Rahman', '201903001', 'anggun123', 'Guru', '1617705534_6ffa7df5d359b78fbdda.jpg'),
(8, 'Muhammad Andy Herdiansyah', '201903003', 'andy354', 'Santri', '1617705579_20eaef2b33632b17cf96.jpg'),
(9, 'Rena Miftakhul Zulfa', '201903004', 'renamz31354', 'Santri', '1617705631_e012eb63993e4b1694a3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  ADD PRIMARY KEY (`id_chart`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jk`
--
ALTER TABLE `tbl_jk`
  ADD PRIMARY KEY (`id_jk`),
  ADD UNIQUE KEY `id_santri` (`id_santri`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tbl_nilaiekstrakurikuler`
--
ALTER TABLE `tbl_nilaiekstrakurikuler`
  ADD PRIMARY KEY (`id_ne`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`),
  ADD UNIQUE KEY `jenis_kelamin` (`jenis_kelamin`);

--
-- Indexes for table `tbl_nilaikonseppraktikum`
--
ALTER TABLE `tbl_nilaikonseppraktikum`
  ADD PRIMARY KEY (`id_kp`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `tbl_nilailimasuksessantri`
--
ALTER TABLE `tbl_nilailimasuksessantri`
  ADD PRIMARY KEY (`id_lss`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`),
  ADD UNIQUE KEY `jenis_kelamin` (`jenis_kelamin`);

--
-- Indexes for table `tbl_nilaimateri`
--
ALTER TABLE `tbl_nilaimateri`
  ADD PRIMARY KEY (`id_nm`),
  ADD UNIQUE KEY `id_materi` (`id_materi`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `tbl_nilaisikapperilaku`
--
ALTER TABLE `tbl_nilaisikapperilaku`
  ADD PRIMARY KEY (`id_sp`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`),
  ADD UNIQUE KEY `jenis_kelamin` (`jenis_kelamin`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  ADD PRIMARY KEY (`id_rapor`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  MODIFY `id_chart` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jk`
--
ALTER TABLE `tbl_jk`
  MODIFY `id_jk` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  MODIFY `id_kurikulum` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  MODIFY `id_materi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_nilaiekstrakurikuler`
--
ALTER TABLE `tbl_nilaiekstrakurikuler`
  MODIFY `id_ne` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nilaikonseppraktikum`
--
ALTER TABLE `tbl_nilaikonseppraktikum`
  MODIFY `id_kp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nilailimasuksessantri`
--
ALTER TABLE `tbl_nilailimasuksessantri`
  MODIFY `id_lss` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nilaimateri`
--
ALTER TABLE `tbl_nilaimateri`
  MODIFY `id_nm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nilaisikapperilaku`
--
ALTER TABLE `tbl_nilaisikapperilaku`
  MODIFY `id_sp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  MODIFY `id_rapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id_surat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

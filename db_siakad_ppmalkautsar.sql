-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 11:24 AM
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
-- Table structure for table `tbl_catatansaranpengurus`
--

CREATE TABLE `tbl_catatansaranpengurus` (
  `id_cs` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `catatan_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_catatansaranpengurus`
--

INSERT INTO `tbl_catatansaranpengurus` (`id_cs`, `NIS`, `nama_santri`, `jenis_kelamin`, `catatan_saran`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', '1. Ditingkatkan lagi komunikasinya dalam bersosial (jangan sungkan) 2. \r\n Lebih menjaga lagi dalam kesehatan pribadi 3. Terus disemangati dalam mengejar ketercapaian materi mondok dan kuliahnya'),
(2, 201903001, 'Abdillah Yudhatama', 'L', '1. Ditingkatkan lagi komunikasinya dalam bersosial (jangan sungkan) 2. Lebih menjaga lagi dalam kesehatan pribadi 3. Terus disemangati dalam mengejar ketercapaian materi mondok dan kuliahnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chart`
--

CREATE TABLE `tbl_chart` (
  `id_chart` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chart`
--

INSERT INTO `tbl_chart` (`id_chart`, `NIS`, `nama_santri`) VALUES
(2, 201903002, 'Abdullah Winasis'),
(4, 201903001, 'Abdillah Yudhatama'),
(6, 201903003, 'Achmad Khoirudin Abdullah');

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
(1, 'Amir Hamzah', 'Lampung', '1995-05-04', 'L', 'Lampung Utara', '081649293713');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jk`
--

CREATE TABLE `tbl_jk` (
  `id_jk` int(3) NOT NULL,
  `NIS` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kehadiran`
--

CREATE TABLE `tbl_kehadiran` (
  `id_kehadiran` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `keterangan` enum('Hadir','Alpha','Belajar','Izin','IzinTerlambat','Jaga','Kuliah','Nugas','Sakit','Terlambat') DEFAULT NULL,
  `sesi_pengajian` enum('Malam','Shubuh') DEFAULT NULL,
  `kelas` enum('Qiraah','kitabah','Al-Taannii','Al-Sarii','Reguler','Al-Idlofi','Hadits Besar') DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kehadiran`
--

INSERT INTO `tbl_kehadiran` (`id_kehadiran`, `NIS`, `nama_santri`, `keterangan`, `sesi_pengajian`, `kelas`, `tanggal`) VALUES
(1, 201903002, 'Abdullah Winasis', 'Hadir', 'Malam', 'Reguler', '2021-06-02'),
(2, 201903001, 'Abdillah Yudhatama', 'Belajar', 'Shubuh', 'Al-Sarii', '2021-06-01'),
(3, 201903002, 'Abdullah Winasis', 'Kuliah', 'Shubuh', 'Al-Sarii', '2021-06-01'),
(4, 201903001, 'Abdillah Yudhatama', 'Hadir', 'Shubuh', 'Al-Sarii', '2021-06-04'),
(5, 201903001, 'Abdillah Yudhatama', 'IzinTerlambat', 'Shubuh', 'Al-Sarii', '2021-06-04'),
(6, 201903003, 'Achmad Khoirudin Abdullah', 'Kuliah', 'Malam', 'Reguler', '2021-06-03'),
(8, 201903011, 'anggun milenia rahman', 'Izin', 'Malam', 'Hadits Besar', '2021-06-04'),
(9, 201903001, 'Abdillah Yudhatama', 'Jaga', 'Malam', 'Reguler', '2021-06-08'),
(10, 201903006, 'Alfeina Zakkya Meriatami', 'Hadir', 'Malam', 'Reguler', '2021-06-08'),
(11, 201903003, 'Achmad Khoirudin Abdullah', 'Hadir', 'Malam', 'Reguler', '2021-06-09'),
(12, 201903001, 'Abdillah Yudhatama', 'Hadir', 'Malam', 'Reguler', '2021-06-08');

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
(71, 'Syarah Do\'a ASAD', 'Hadits Besar'),
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
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `nilai_1` enum('A','B+','B','B-','C+','C','C-','D','E') NOT NULL,
  `nilai_2` enum('A','B+','B','B-','C+','C','C-','D','E') DEFAULT NULL,
  `nilai_3` enum('A','B+','B','B-','C+','C','C-','D','E') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaiekstrakurikuler`
--

INSERT INTO `tbl_nilaiekstrakurikuler` (`id_ne`, `NIS`, `nama_santri`, `jenis_kelamin`, `nilai_1`, `nilai_2`, `nilai_3`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 'A', 'B', 'B+'),
(2, 201903001, 'Abdillah Yudhatama', 'L', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaiindeksprestasi`
--

CREATE TABLE `tbl_nilaiindeksprestasi` (
  `id_ip` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nilai_IP1` varchar(5) NOT NULL,
  `nilai_IP2` varchar(5) NOT NULL,
  `nilai_IP3` varchar(5) NOT NULL,
  `nilai_IP4` varchar(5) NOT NULL,
  `nilai_IP5` varchar(5) NOT NULL,
  `nilai_IP6` varchar(5) NOT NULL,
  `nilai_IP7` varchar(5) NOT NULL,
  `nilai_IP8` varchar(5) NOT NULL,
  `nilai_IP9` varchar(5) NOT NULL,
  `nilai_IP10` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaiindeksprestasi`
--

INSERT INTO `tbl_nilaiindeksprestasi` (`id_ip`, `NIS`, `nama_santri`, `jenis_kelamin`, `nilai_IP1`, `nilai_IP2`, `nilai_IP3`, `nilai_IP4`, `nilai_IP5`, `nilai_IP6`, `nilai_IP7`, `nilai_IP8`, `nilai_IP9`, `nilai_IP10`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', '3,45', '3,35', '3,25', '3,65', '3,65', '', '', '', '', ''),
(2, 201903001, 'Abdillah Yudhatama', 'L', '3,55', '3,60', '3,65', '3,70', '', '', '', '', '', '');

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
(1, 201903002, 'Abdullah Winasis', 'L', 85, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 90),
(2, 201903001, 'Abdillah Yudhatama', 'L', 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaikonseppraktikum2`
--

CREATE TABLE `tbl_nilaikonseppraktikum2` (
  `id_kp2` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `n_1` int(11) DEFAULT NULL,
  `n_2` int(11) DEFAULT NULL,
  `n_3` int(11) DEFAULT NULL,
  `n_4` int(11) DEFAULT NULL,
  `n_5` int(11) DEFAULT NULL,
  `n_6` int(11) DEFAULT NULL,
  `n_7` int(11) DEFAULT NULL,
  `n_8` int(11) DEFAULT NULL,
  `n_9` int(11) DEFAULT NULL,
  `n_10` int(11) DEFAULT NULL,
  `n_11` int(11) DEFAULT NULL,
  `n_12` int(11) DEFAULT NULL,
  `n_13` int(11) DEFAULT NULL,
  `n_14` int(11) DEFAULT NULL,
  `n_15` int(11) DEFAULT NULL,
  `n_16` int(11) DEFAULT NULL,
  `n_17` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaikonseppraktikum2`
--

INSERT INTO `tbl_nilaikonseppraktikum2` (`id_kp2`, `NIS`, `nama_santri`, `jenis_kelamin`, `n_1`, `n_2`, `n_3`, `n_4`, `n_5`, `n_6`, `n_7`, `n_8`, `n_9`, `n_10`, `n_11`, `n_12`, `n_13`, `n_14`, `n_15`, `n_16`, `n_17`) VALUES
(1, 201903020, 'Ikbar Nasrullah', 'L', 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilailimasuksessantri`
--

CREATE TABLE `tbl_nilailimasuksessantri` (
  `id_lss` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
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
(1, 201903002, 'Abdullah Winasis', 'L', 'B+', 'B+', 'B+', 'B+', 'B+'),
(2, 201903001, 'Abdillah Yudhatama', 'L', 'A', 'A', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaimateri`
--

CREATE TABLE `tbl_nilaimateri` (
  `id_nm` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `nilai1` int(11) DEFAULT NULL,
  `nilai2` int(11) DEFAULT NULL,
  `nilai3` int(11) DEFAULT NULL,
  `nilai4` int(11) DEFAULT NULL,
  `nilai5` int(11) DEFAULT NULL,
  `nilai6` int(11) DEFAULT NULL,
  `nilai7` int(11) DEFAULT NULL,
  `nilai8` int(11) DEFAULT NULL,
  `nilai9` int(11) DEFAULT NULL,
  `nilai10` int(11) DEFAULT NULL,
  `nilai11` int(11) DEFAULT NULL,
  `nilai12` int(11) DEFAULT NULL,
  `nilai13` int(11) DEFAULT NULL,
  `nilai14` int(11) DEFAULT NULL,
  `nilai15` int(11) DEFAULT NULL,
  `nilai16` int(11) DEFAULT NULL,
  `nilai17` int(11) DEFAULT NULL,
  `nilai18` int(11) DEFAULT NULL,
  `nilai19` int(11) DEFAULT NULL,
  `nilai20` int(11) DEFAULT NULL,
  `nilai21` int(11) DEFAULT NULL,
  `nilai22` int(11) DEFAULT NULL,
  `nilai23` int(11) DEFAULT NULL,
  `nilai24` int(11) DEFAULT NULL,
  `nilai25` int(11) DEFAULT NULL,
  `nilai26` int(11) DEFAULT NULL,
  `nilai27` int(11) DEFAULT NULL,
  `nilai28` int(11) DEFAULT NULL,
  `nilai29` int(11) DEFAULT NULL,
  `nilai30` int(11) DEFAULT NULL,
  `nilai31` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaimateri`
--

INSERT INTO `tbl_nilaimateri` (`id_nm`, `NIS`, `nama_santri`, `jenis_kelamin`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `nilai15`, `nilai16`, `nilai17`, `nilai18`, `nilai19`, `nilai20`, `nilai21`, `nilai22`, `nilai23`, `nilai24`, `nilai25`, `nilai26`, `nilai27`, `nilai28`, `nilai29`, `nilai30`, `nilai31`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 90, 80, 80, 80, 80, 80, 80, 85, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(5, 201903001, 'Abdillah Yudhatama', 'L', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaimateri2`
--

CREATE TABLE `tbl_nilaimateri2` (
  `id_nm2` int(3) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `n_A` int(11) DEFAULT NULL,
  `n_B` int(11) DEFAULT NULL,
  `n_C` int(11) DEFAULT NULL,
  `n_D` int(11) DEFAULT NULL,
  `n_E` int(11) DEFAULT NULL,
  `n_F` int(11) DEFAULT NULL,
  `n_G` int(11) DEFAULT NULL,
  `n_H` int(11) DEFAULT NULL,
  `n_I` int(11) DEFAULT NULL,
  `n_J` int(11) DEFAULT NULL,
  `n_K` int(11) DEFAULT NULL,
  `n_L` int(11) DEFAULT NULL,
  `n_M` int(11) DEFAULT NULL,
  `n_N` int(11) DEFAULT NULL,
  `n_O` int(11) DEFAULT NULL,
  `n_P` int(11) DEFAULT NULL,
  `n_Q` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaimateri2`
--

INSERT INTO `tbl_nilaimateri2` (`id_nm2`, `NIS`, `nama_santri`, `jenis_kelamin`, `n_A`, `n_B`, `n_C`, `n_D`, `n_E`, `n_F`, `n_G`, `n_H`, `n_I`, `n_J`, `n_K`, `n_L`, `n_M`, `n_N`, `n_O`, `n_P`, `n_Q`) VALUES
(1, 201803018, 'Rena Miftakhul Zulfa', 'P', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaisikapperilaku`
--

CREATE TABLE `tbl_nilaisikapperilaku` (
  `id_sp` int(11) NOT NULL,
  `NIS` int(12) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('L','P') DEFAULT NULL,
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

INSERT INTO `tbl_nilaisikapperilaku` (`id_sp`, `NIS`, `nama_santri`, `Jenis_Kelamin`, `nl1`, `nl2`, `nl3`, `nl4`, `nl5`, `nl6`, `nl7`, `nl8`, `nl9`) VALUES
(1, 201903002, 'Abdullah Winasis', 'L', 'B+', 'B+', 'B', 'B+', 'B', 'B', 'A', 'B', 'D'),
(2, 201903001, 'Abdillah Yudhatama', 'P', 'B+', 'E', 'A', 'A', 'A', 'A', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(3) NOT NULL,
  `NIS` varchar(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `periode_pembayaran` year(4) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `tagihan` varchar(25) DEFAULT NULL,
  `terbayar` varchar(25) DEFAULT '0',
  `status_pembayaran` enum('LUNAS','BELUM LUNAS') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `NIS`, `nama_santri`, `periode_pembayaran`, `keterangan`, `tagihan`, `terbayar`, `status_pembayaran`) VALUES
(1, '201903002', 'Abdullah Winasis', 2021, 'Pembayaran Uang KBM', '2.640.000', '2.6.40.000', 'LUNAS'),
(2, '201903001', 'Abdillah Yudhatama', 2021, 'Pembayaran Uang PPM', '2.640.000', '0', 'BELUM LUNAS'),
(4, '201803018', 'Rena Miftakhul Zulfa', 2021, 'Pembayaran Uang KBM PPM', '1.200.000', '1.000.000', 'BELUM LUNAS'),
(5, '201903011', 'Anggun Milenia Rahman', 2021, 'Pembayaran Uang PPM', '2.640.000', '2.640.000', 'LUNAS'),
(7, '201903006', 'Alfeina Zakkya Meriatami', 2021, 'Pembayaran Uang KBM', '1.200.000', '1.200.000', 'LUNAS'),
(16, '201903003', 'Achmad Koirudin Abdullah', 2021, 'Pembayaran Uang KBM', '2.640.000', '1.000.000', 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(3) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `judul_pengumuman` varchar(50) NOT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `visible_pengumuman` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `tgl_dibuat`, `judul_pengumuman`, `isi_pengumuman`, `visible_pengumuman`) VALUES
(1, '2021-04-06', 'Pengembalian santri ke PPM Malang Raya', '<p><strong>PENGUMUMAN PENTING</strong> السلام عليكم ورحمة الله وبراكاته Menyampaikan pengumuman kepada seluruh santri khususnya untuk Santri PPM Malang Raya Asal Jawa Timur. Berdasarkan hasil musyawarah pengurus PPM dengan mempertimbangkan evaluasi kegiatan belajar mengajar santri dan kelancaran program pembinaan PPM dan perkembangan situasi yang ada. Maka PPM Malang Raya akan mencoba memulai kegiatan pondok new normal secara bertahap. yaitu tahap pertama ini santri yang berasal dari Daerah Jawa Timur Diminta Amal sholih Supaya Kembali ke PPM dan kembali mengikuti program pembinaan di PPM. dengan teknis sebagai berikut : ~~~~~ 1. Kedatangan santri Jawa Timur ke PPM paling lambat hari Minggu 11 April 2021 2. Santri yang kembali ke PPM supaya menunjukkan surat keterangan hasil rapid test yang dikirim ke Ketua Siswa Ma&#39;hadnya masing-masing sebelum berangkat kembali ke PPM. 3. Santri melakukan konfirmasi terlebih dahulu kepada kesiswaan terkait waktu kedatangan. 4. Santri selama perjalanan kembali ke PPM wajib menerapkan protokol kesehatan. ~~~~~ Demikian, pengumuman ini kami sampaikan mohon dijadikan perhatian. Hasil musyawarah ini amalsholih bisa ditetapi masing-masing santri dan diniati dengan niat mukhlis lillah karna Allah. Mugo2 Allah paring aman selamat lancar sehat sukses barokah untuk kita semua. Jadi sarjana mubaligh yang barokah. الحمدلله جزا كم الله خيرا والسلام عليكم ورحمة الله وبرا كته</p>\r\n', 1);

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
(5, 201903001, 'Abdillah Yudhatama', 'Batas waktu kepulangan Hari Raya Idhul Fitri. Amalsholihnya semua santri bisa menetapi ijtihad sesuai hasil musyawarah PPM, bahwa H+ 15 syawal semua santri dikembalikan ke PPM. Alhamdulillah Jazza Kumullahukhoiro', '2021-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `id_nm` int(3) DEFAULT NULL,
  `id_kp` int(3) DEFAULT NULL,
  `id_sp` int(3) DEFAULT NULL,
  `id_lss` int(3) DEFAULT NULL,
  `id_ne` int(3) DEFAULT NULL,
  `id_ip` int(3) DEFAULT NULL,
  `id_cs` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `NIS`, `nama_santri`, `id_nm`, `id_kp`, `id_sp`, `id_lss`, `id_ne`, `id_ip`, `id_cs`) VALUES
(1, 201903002, 'Abdullah Winasis', 1, 1, 1, 1, 1, 1, 1),
(8, 201903001, 'Abdillah Yudhatama', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `gol_darah` varchar(5) NOT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `noTelp` varchar(15) DEFAULT NULL,
  `status` enum('Mahasiswa') NOT NULL,
  `universitas` varchar(30) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `jurusan_prodi` varchar(50) DEFAULT NULL,
  `kelas_santri` enum('Qiraah','kitabah','Al-Taannii','Al-Sarii','Al-Idlofi','Hadits Besar') NOT NULL,
  `angkatan_santri` year(4) DEFAULT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(25) DEFAULT NULL,
  `noTelp_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(25) DEFAULT NULL,
  `noTelp_ibu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_santri`
--

INSERT INTO `tbl_santri` (`id_santri`, `NIS`, `nama_santri`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `gol_darah`, `alamat`, `email`, `noTelp`, `status`, `universitas`, `fakultas`, `jurusan_prodi`, `kelas_santri`, `angkatan_santri`, `nama_ayah`, `pekerjaan_ayah`, `noTelp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `noTelp_ibu`) VALUES
(1, 201903002, 'Abdullah Winasis', 'Kediri', '1999-10-22', 'L', 'O', 'Jl Supriyadi, Rt/Rw 004/007 Dsn Papar Selatan, Ds Papar, Kab Kediri, Jawa Timur', 'awinasism2p@gmail.com', '2147483647', 'Mahasiswa', 'Politeknik Negeri Malang', '-', 'Teknologi Informasi/Manajemen Informatika', 'Qiraah', 2018, 'Maskun Bukhori', 'Wiraswasta', '2147483647', 'Binti Maslikah', 'IRT', '-'),
(2, 201903001, 'Abdillah Yudhatama', 'Malang', '2000-02-02', 'L', 'O', 'Jl. Anjasmoro No.35 RT.11 RW.03 Bendo Karang, Pandan Pakisaji, Kabupaten Malang Jawa Timur', 'abdillahyudhatama@gmail.com', '1234567890', 'Mahasiswa', 'Brawijaya', 'Pertanian', 'Agroekoteknologi', 'Qiraah', 2019, 'X', '-', '-', 'Y', '-', '-'),
(3, 201903003, 'Achmad Koirudin Abdullah', 'Sragen', '2001-07-02', 'L', 'O', 'Pungkruk, Doyong RT01/000, Miri, Sragen, Jawa Tengah', 'achmadkhoirudinabdullah@gmail.com', '1234567890', 'Mahasiswa', 'Negeri Malang', 'Teknik', 'Pendidikan Teknik Elektro', 'Qiraah', 2019, '-', '-', '-', '-', '-', '-'),
(4, 201803018, 'Rena Miftakhul Zulfa', 'Kediri', '1999-04-20', 'P', 'O', 'Dsn. Ngletih Barat Rt. 03 Ds. Ngletih Kec. Kandat Kab. Kediri ', 'renamiftaqulzulfa@gmail.com', '6281234567890', 'Mahasiswa', 'STIKES Malang', '-', 'D3 - Kebidanan', 'Qiraah', 2018, 'Irfa\'i', 'Petani', '6281252960925', 'Nur Hidayati', 'IRT', '-'),
(5, 201903006, 'Alfeina Zakkya Meriatami', 'Ponorogo', '2000-08-21', 'P', 'O', 'Ponorogo', 'alfeinazakkyameriatami@gmail.comm', '081234567865', 'Mahasiswa', 'Universitas Negeri Malang', 'Teknik', 'Pendidikan Teknik Informatika', 'Qiraah', 2003, 'X', '-', '0871234567890', 'Y', '-', '-'),
(10, 201903020, 'Ikbar Nasrullah', 'Ponorogo', '1999-10-17', 'L', 'AB', 'Ds. Sambeng RT01 RW 01 Ds. Bringin, Kec. Kauman, Kab. Ponorogo', 'ikbarnasrullah@gmail.com', '6281354123851', 'Mahasiswa', 'STMIK Asia', '-', 'Desain Komunikasi Visual', 'Hadits Besar', 2019, 'Kusnadi', 'Swasta', '6285235060602', 'Siti Umi Hanik', 'IRT', '6285230758300');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id_surat` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
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

INSERT INTO `tbl_surat` (`id_surat`, `NIS`, `nama_santri`, `nama_surat`, `kategori`, `tgl_upload`, `tgl_update`, `file`, `ukuran_file`) VALUES
(7, 201903001, 'Abdillah Yudhatama', 'Surat Pengajuan Pelaksanaan PKL', 'Surat Pengajuan', '2021-04-26', '2021-05-21', '1619489380_ab70e8c5ea99a567ce09.pdf', 411469);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahunakademik`
--

CREATE TABLE `tbl_tahunakademik` (
  `id_ta` int(3) NOT NULL,
  `tahun_akademik` varchar(10) DEFAULT NULL,
  `status_ta` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tahunakademik`
--

INSERT INTO `tbl_tahunakademik` (`id_ta`, `tahun_akademik`, `status_ta`) VALUES
(1, '2019/2020', 0),
(2, '2020/2021', 1),
(3, '2021/2022', 0),
(4, '2022/2023', 0),
(5, '2023/2024', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` int(12) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` varchar(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Abdullah Winasis', 201903002, 'awinasis', 'Admin', '1617705484_c06eb78eb388276be38a.jpg'),
(4, 'Rena Miftakhul Zulfa', 201803018, '201803018', 'Santri', '1617705631_e012eb63993e4b1694a3.jpg'),
(7, 'Amir Hamzah', 1, 'amir123', 'Guru', '1621215341_b83ba22111c656181e0f.jpg'),
(9, 'Abdillah Yudhatama', 201903001, '201903001', 'Santri', '1621783709_ebcc5f4f30e85b5b7e6f.jpg'),
(10, 'Alfeina Zakkya Meriatami', 201903006, '201903006', 'Santri', '1623025041_79ca2d3f3fe65fbd48b6.jpg'),
(11, 'Ikbar Nasrullah', 201903020, '201903020', 'Santri', '1623490056_943542dbc007395b6a94.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catatansaranpengurus`
--
ALTER TABLE `tbl_catatansaranpengurus`
  ADD PRIMARY KEY (`id_cs`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  ADD PRIMARY KEY (`id_chart`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

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
  ADD UNIQUE KEY `id_santri` (`NIS`);

--
-- Indexes for table `tbl_kehadiran`
--
ALTER TABLE `tbl_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

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
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilaiindeksprestasi`
--
ALTER TABLE `tbl_nilaiindeksprestasi`
  ADD PRIMARY KEY (`id_ip`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilaikonseppraktikum`
--
ALTER TABLE `tbl_nilaikonseppraktikum`
  ADD PRIMARY KEY (`id_kp`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilaikonseppraktikum2`
--
ALTER TABLE `tbl_nilaikonseppraktikum2`
  ADD PRIMARY KEY (`id_kp2`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilailimasuksessantri`
--
ALTER TABLE `tbl_nilailimasuksessantri`
  ADD PRIMARY KEY (`id_lss`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilaimateri`
--
ALTER TABLE `tbl_nilaimateri`
  ADD PRIMARY KEY (`id_nm`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilaimateri2`
--
ALTER TABLE `tbl_nilaimateri2`
  ADD PRIMARY KEY (`id_nm2`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_nilaisikapperilaku`
--
ALTER TABLE `tbl_nilaisikapperilaku`
  ADD PRIMARY KEY (`id_sp`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

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
  ADD UNIQUE KEY `id_nm_2` (`id_nm`),
  ADD UNIQUE KEY `id_kp` (`id_kp`),
  ADD UNIQUE KEY `id_sp` (`id_sp`),
  ADD UNIQUE KEY `id_lss` (`id_lss`),
  ADD UNIQUE KEY `id_ne` (`id_ne`),
  ADD UNIQUE KEY `id_ip` (`id_ip`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`),
  ADD UNIQUE KEY `id_nm` (`id_cs`);

--
-- Indexes for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD UNIQUE KEY `id_santri` (`NIS`),
  ADD UNIQUE KEY `nama_santri` (`nama_santri`);

--
-- Indexes for table `tbl_tahunakademik`
--
ALTER TABLE `tbl_tahunakademik`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catatansaranpengurus`
--
ALTER TABLE `tbl_catatansaranpengurus`
  MODIFY `id_cs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  MODIFY `id_chart` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jk`
--
ALTER TABLE `tbl_jk`
  MODIFY `id_jk` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kehadiran`
--
ALTER TABLE `tbl_kehadiran`
  MODIFY `id_kehadiran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id_materi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_nilaiekstrakurikuler`
--
ALTER TABLE `tbl_nilaiekstrakurikuler`
  MODIFY `id_ne` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilaiindeksprestasi`
--
ALTER TABLE `tbl_nilaiindeksprestasi`
  MODIFY `id_ip` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilaikonseppraktikum`
--
ALTER TABLE `tbl_nilaikonseppraktikum`
  MODIFY `id_kp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilaikonseppraktikum2`
--
ALTER TABLE `tbl_nilaikonseppraktikum2`
  MODIFY `id_kp2` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilailimasuksessantri`
--
ALTER TABLE `tbl_nilailimasuksessantri`
  MODIFY `id_lss` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilaimateri`
--
ALTER TABLE `tbl_nilaimateri`
  MODIFY `id_nm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_nilaimateri2`
--
ALTER TABLE `tbl_nilaimateri2`
  MODIFY `id_nm2` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilaisikapperilaku`
--
ALTER TABLE `tbl_nilaisikapperilaku`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  MODIFY `id_rapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id_surat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_tahunakademik`
--
ALTER TABLE `tbl_tahunakademik`
  MODIFY `id_ta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

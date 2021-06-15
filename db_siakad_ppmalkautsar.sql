-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 05:33 PM
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
(2, 201903001, 'Abdillah Yudhatama', 'L', '1. Ditingkatkan lagi komunikasinya dalam bersosial (jangan sungkan) 2. Lebih menjaga lagi dalam kesehatan pribadi 3. Terus disemangati dalam mengejar ketercapaian materi mondok dan kuliahnya'),
(3, 281298, 'csbcka', 'L', 'csxkas\r\n');

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
(2, 201903001, 'Abdillah Yudhatama', 'L', 'B+', 'B', 'A');

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
(1, '2021-04-06', 'Pengembalian santri ke PPM Malang Raya', '<p><strong>PENGUMUMAN PENTING</strong> السلام عليكم ورحمة الله وبراكاته Menyampaikan pengumuman kepada seluruh santri khususnya untuk Santri PPM Malang Raya Asal Jawa Timur. Berdasarkan hasil musyawarah pengurus PPM dengan mempertimbangkan evaluasi kegiatan belajar mengajar santri dan kelancaran program pembinaan PPM dan perkembangan situasi yang ada. Maka PPM Malang Raya akan mencoba memulai kegiatan pondok new normal secara bertahap. yaitu tahap pertama ini santri yang berasal dari Daerah Jawa Timur Diminta Amal sholih Supaya Kembali ke PPM dan kembali mengikuti program pembinaan di PPM. dengan teknis sebagai berikut : ~~~~~ 1. Kedatangan santri Jawa Timur ke PPM paling lambat hari Minggu 11 April 2021 2. Santri yang kembali ke PPM supaya menunjukkan surat keterangan hasil rapid test yang dikirim ke Ketua Siswa Ma&#39;hadnya masing-masing sebelum berangkat kembali ke PPM. 3. Santri melakukan konfirmasi terlebih dahulu kepada kesiswaan terkait waktu kedatangan. 4. Santri selama perjalanan kembali ke PPM wajib menerapkan protokol kesehatan. ~~~~~ Demikian, pengumuman ini kami sampaikan mohon dijadikan perhatian. Hasil musyawarah ini amalsholih bisa ditetapi masing-masing santri dan diniati dengan niat mukhlis lillah karna Allah. Mugo2 Allah paring aman selamat lancar sehat sukses barokah untuk kita semua. Jadi sarjana mubaligh yang barokah. الحمدلله جزا كم الله خيرا والسلام عليكم ورحمة الله وبرا كته</p>\r\n', 1),
(3, '2021-06-14', 'Asrama Liburan Kampus', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">NO</td>\r\n			<td style=\"text-align:center\">Keterangan</td>\r\n			<td style=\"text-align:center\">Status</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">1</td>\r\n			<td>Asrama Liburan Kampus</td>\r\n			<td>Aktif</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">2</td>\r\n			<td>Apel Peraturan</td>\r\n			<td>Aktif</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1);

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
(1, 201903002, 'Abdullah Winasis', 'Kediri', '1999-10-22', 'L', 'O', 'Jl Supriyadi, Rt/Rw 004/007 Dsn Papar Selatan, Ds Papar, Kab Kediri, Jawa Timur', 'awinasism2p@gmail.com', '6287753464813', 'Mahasiswa', 'Politeknik Negeri Malang', '-', 'Teknologi Informasi/Manajemen Informatika', 'Al-Sarii', 2018, 'Maskun Bukhori', 'Wiraswasta', '6281335498131', 'Binti Maslikah', 'IRT', '-'),
(2, 201903001, 'Abdillah Yudhatama', 'Malang', '2001-02-02', 'L', 'A', 'Jl. Anjasmoro No.35 RT.11 RW.03 Bendo Karang, Pandan Pakisaji, Kabupaten Malang', 'abdillahyudhatama@gmail.com', '6289601244036', 'Mahasiswa', 'Brawijaya', 'Pertanian', 'Agroekoteknologi', 'Al-Sarii', 2019, 'Subejan Subianto ', 'Pensiunan', '628125280462', 'Eni Suciati ', 'Pegawai Dinas Koperasi da', '6282244408095'),
(3, 201903003, 'Achmad Koirudin Abdullah', 'Sragen', '2001-07-02', 'L', 'A', 'Pungkruk, Doyong RT01/000, Miri, Sragen, Jawa Tengah', 'achmadkhoirudinabdullah@gmail.com', '628159893596', 'Mahasiswa', 'UM', 'Teknik', 'Pendidikan Teknik Elektro', 'Al-Sarii', 2019, 'Samsudi', 'Supir', '6281393130800', 'Tugiyanti', 'Pedagang', '6281393130800'),
(4, 201803018, 'Rena Miftakhul Zulfa', 'Kediri', '1999-04-20', 'P', 'O', 'Dsn. Ngletih Barat Rt. 03 Ds. Ngletih Kec. Kandat Kab. Kediri ', 'renamiftaqulzulfa@gmail.com', '6281234567890', 'Mahasiswa', 'STIKES Malang', '-', 'D3 - Kebidanan', 'Hadits Besar', 2018, 'Irfa\'i', 'Petani', '6281252960925', 'Nur Hidayati', 'IRT', '-'),
(5, 201903006, 'Alfeina Zakkya Meriatami', 'Ponorogo', '2000-08-21', 'P', 'O', 'Jl. Menur Gg. IA, No.4 RT004/RW002, Kel. Ronowijayan, Kec. Siman, Ponorogo', 'alfeinazakkyameriatami@gmail.comm', '6285648894601', 'Mahasiswa', 'UM', 'Teknik', 'Pendikan Teknik Informatika', 'Al-Sarii', 2019, 'H. Anshori', 'Wiraswasta', '6283845706292', 'Hening Danarwati', 'Guru', '6285736345124'),
(10, 201903020, 'Ikbar Nasrullah', 'Ponorogo', '1999-10-17', 'L', 'AB', 'Ds. Sambeng RT01 RW 01 Ds. Bringin, Kec. Kauman, Kab. Ponorogo', 'ikbarnasrullah@gmail.com', '6281354123851', 'Mahasiswa', 'STMIK Asia', '-', 'Desain Komunikasi Visual', 'Hadits Besar', 2019, 'Kusnadi', 'Swasta', '6285235060602', 'Siti Umi Hanik', 'IRT', '6285230758300'),
(12, 201703001, 'Abbror Aulia Hidayat', 'Kotabaru', '1999-12-04', 'L', 'B', 'Dsn. Bekanang, Ds. Bentengputih RT 03/RW 01, Kec. Karanggeneng, Kab. Lamongan ', 'AbbrorAuliaHidayat@gmail.com', '6285215300248', 'Mahasiswa', 'UM', 'Pendidikan Psikologi', 'Psikologi', 'Hadits Besar', 2017, 'Subakti ', 'PNS', '6281350205674', 'Winarsih ', 'PNS', '6285248050876'),
(13, 201703003, 'Aditya Sindung Firdaus', 'Nganjuk', '1998-06-01', 'L', 'A', 'Jl. Bengawan solo 3, rt/rw : 03/02 Ds. Ringinanom Kec. Nganjuk Kab. Tuban, Jatim', 'AdityaSindungFirdaus@gmail.com', '6285335604985', 'Mahasiswa', 'Polinema', 'Elektro', 'D4 Jaringan Telekomunikasi Digital', 'Hadits Besar', 2017, 'Agus Bayu (alm)', '-', '-', 'Sri Indiyah', 'Pedagang', '6285257605700'),
(14, 201703018, 'Santi Nur Fauzy', 'Sidoarjo', '1998-09-09', 'P', 'A', 'Jl. Panjahitan 16B, Desa Tinalan, Kec. Pesantren, Kota. Kediri, Jatim', 'SantiNurFauzy@gmail.com', '6283814520818', 'Mahasiswa', 'UM', 'Teknik', 'Teknik Elektro/ Pend. Teknik Informatika', 'Hadits Besar', 2017, 'Dadang Hermawan (alm)', '-', '-', 'Nia Kurniati ', 'Pedagang', '6283172940281'),
(15, 201703020, 'Tryska Azizah Novianti', 'Tulungagung', '1998-11-21', 'P', 'B', 'Dsn. Krajan, Ds. Bangunmulyo RT 01/RW 01/ Kec. Pakel, Kab.. Tulungagung ', 'TryskaAzizahNovianti@gmail.com', '628977979376', 'Mahasiswa', 'UM', 'FMIPA', 'Pendidikan Matematika', 'Hadits Besar', 2017, 'Nur Anas', 'Guru ', '628125264935', 'Sri Warasati ', 'Guru ', '6285100798354'),
(16, 201703023, 'Yusron Risqy Maulana', 'Denpasar', '1998-10-24', 'L', 'A', 'Jl. M.H Thamrin 147 RT4/RW9 Dusun Ajung Oloh, Desa Ajung, Kec. Kalisat, Kab. Jember, Jatim', 'YusronRisqyMaulana@gmail.com', '62895411366275', 'Mahasiswa', 'UM', 'FMIPA', 'Kimia', 'Hadits Besar', 2017, 'Agus Haryanto', 'Petani', '6282302475401', 'Mamik Nurhayati', 'Penjahit', '6281585835794'),
(17, 201701020, 'Hasan Argadinata', 'Bayuwangi', '1997-12-04', 'L', 'A', 'Dsn. Pandan Rt. 01 rw. 06 Ds. Kembiritan ec. Genteng Kab. Banyuwangi', 'HasanArgadinata@gmail.com', '6281237460830', 'Mahasiswa', 'UM', 'FIP', 'Administrasi Pendidikan', 'Al-Sarii', 2017, 'Suparno ', 'Petani', '6281335870307', 'Supiah', 'IRT', '6281237460830'),
(18, 201803003, 'Adinda Ainur Rafika ', 'Pasuruan', '1999-12-05', 'P', 'O', 'Dsn. Bajang Rt. 03 Rw. 05 Ds.Kebonwaris Kec. Pandaan Kab. Pasuruan ', 'AdindaAinurRafika@gmail.com', '6289696573067', 'Mahasiswa', 'POLTEKES Malang', 'Kebidanan', 'D3 Kebidanan ', 'Hadits Besar', 2018, 'Bambang Wibisono', 'Karyawan Swasta', '6282257251498', 'Lilik Nuriyati', 'IRT', '-'),
(19, 201803005, 'Aji Andriyanto', 'Mojokerto', '2000-06-19', 'L', 'B', 'Perum Canggu Permai Rt. 05 Rw. 03 Ds. Canggu Kec. Jetis Kab. Mojokerto', 'AjiAndriyanto@gmail.com', '628989923053', 'Mahasiswa', 'UM', 'Ilmu Sosial', 'Pendidikan Kewarganegaraan', 'Al-Sarii', 2018, 'Junaidi Mulyanto', 'Pedagang', '6282234174699', 'Indri Asmoro', '-', '-'),
(20, 201803006, 'Asrori Verdiantoro', 'Kediri', '1999-09-06', 'L', '-', 'Dsn. Krajan Rt. 05 Rt. 07 Ds. Genteng wetan Kec. Genteng Kab. Banyuwangi', 'AsroriVerdiantoro@gmail.com', '6282340968765', 'Mahasiswa', 'STIMIK Asia', '-', '-', 'Al-Sarii', 2018, 'Agusyooso Widodo', 'Wiraswasta (Berdagang)', '6282340968765', 'Siti Kalimah', 'IRT', '6282340968765'),
(21, 201803008, 'Feizal Thoriq Maulana Amputra', 'Balikpapan, 15 Juli ', '2000-07-15', 'L', 'O', 'Jl. Meyjen Sutoyo RT. 60 Kel. Klandasan Ilir ,Balikpapan Kota Kalimantan Timur', 'FeizalThoriqMaulanaAmputra@gmail.com', '6282149271275', 'Mahasiswa', 'Binus', 'IT', 'Teknik Informasi', 'Al-Sarii', 2018, 'H. Amrullah', 'Pegawai Swasta', '628152016600', 'Hj. Tatiek Handayani', 'IRT', '6281257446674'),
(22, 201803011, 'Hafit Diki Maulana', 'Banyuwangi', '1999-03-04', 'L', 'O', 'Dsn. Pandan Rt. 02 rw. 06 Ds. Kembiritan ec. Genteng Kab. Banyuwangi', 'HafitDikiMaulana@gmail.com', '628563582239', 'Mahasiswa', 'UM', 'Teknik', 'Teknik Sipil', 'Al-Sarii', 2018, 'Moch. Nur Huda', 'Buruh', '6282139979570', 'Suparti', 'IRT', '-'),
(23, 201803012, 'Ika Nurul Iza', 'Lumajang', '1999-12-06', 'P', 'O', 'Dsn. Sukosari Rt. 02 Rw. 06 Ds. Pundungsari Kec. Tempursari Lumajang Prov. Jawatimur ', 'IkaNurulIza@gmail.com', '628785328076', 'Mahasiswa', 'UM', 'Ilmu Sosial', 'Hukum dan Kewarganegaraan', 'Hadits Besar', 2018, 'Sutiono', 'Petani', '6282337916210', 'Martini', 'IRT', '-'),
(24, 201803013, 'Kushermawan Bagus Saputra', 'Gresik ', '2000-04-27', 'L', 'A', 'Jl. Kayu 5 No. 20 PPI, Rt. 01 Rw. 06 . Desa Sukomulyo Kec. Manyar Kab. Gresik', 'KushermawanBagusSaputra@gmail.com', '6281366638232', 'Mahasiswa', 'UM', 'Teknik', 'Tata Boga', 'Hadits Besar', 2018, 'Kusyaeri Koesman', 'Purnawirawan', '6281331794065', 'Suhartini', 'Guru', '-'),
(25, 201803014, 'Luluk Dzuriati', 'Tuban', '2000-09-24', 'P', '-', 'Dsn. Rekul Rt. 01 Rw. 01 Ds. Bangunrejo Kec. Soko Kab. Tuban', 'LulukDzuriati@gmail.com', '6285785649633', 'Mahasiswa', 'UM', 'Teknik', 'Pendidikan Tata Boga', 'Hadits Besar', 2018, 'Tajam', 'Petani', '6285334676755', 'Sulasih', 'IRT', '-'),
(26, 201803021, 'Royan Nur Shalafudin', 'Karanganyar', '1999-11-22', 'L', 'O', 'Dsn. Tegalarum Rt. 02 Rw. 13Ds. Cangakan Karanganyar', 'RoyanNurShalafudin@gmail.com', '628989867085', 'Mahasiswa', 'UB', 'Ilmu Administrasi', 'Ilmu Administrasi Bisnis', 'Hadits Besar', 2018, 'Nur Hasim', 'Wiraswasta  ', '6285290412226', 'Siti Nur Marfuah', 'Wiraswasta', '6282225592234'),
(27, 201803024, 'Tondy Raja Panjaitan', 'Bandung', '2000-07-11', 'L', 'O', 'Jl. Sarindit 11 Gang 45 RT. 08 RW. 03 Kel. Wijayaputra Jambi Selatan ,Jambi', 'TondyRajaPanjaitan@gmail.com', '6282372687887', 'Mahasiswa', 'UM', 'Sastra/Seni', 'D3 Game Animasi', 'Al-Sarii', 2018, 'Gumran Panjaitan', 'Pegawai BUMN Telkom', '628127418688', 'Hery Rojani D.S.', '-', '-'),
(28, 201803025, 'Ubeid Fandi Nasrulloh', 'Nganjuk', '2000-03-07', 'L', 'O', 'Dsn. Bajulan Rt. 03 Rt. 01 Ds. Prayungan Kec. Lengkong Kab. Nganjuk Jawatimur', 'UbeidFandiNasrulloh@gmail.com', '62895356857291', 'Mahasiswa', 'UM', 'Ekonomi', 'Pendidikan Ekonomi', 'Hadits Besar', 2018, 'Budianto', 'Petani', '6285203526336', 'Maisaroh', 'Pedagang', '-'),
(29, 201903007, 'Amirul Ikhsan', 'Jakarta', '1999-06-15', 'L', '-', 'Ngemplak RT 4 RW 6 Jetis, Sukoharjo', 'AmirulIkhsan@gmail.com', '6281234852918', 'Mahasiswa', 'Brawijaya', 'Ilmu Administrasi', 'Ilmu Administrasi Publik  ', 'Al-Sarii', 2019, 'Agus Sulaiman ', 'Wiraswasta', '-', 'Susilowati', 'IRT', '6287812546053'),
(30, 201903008, 'Ardea Zakky Kawakibi M', 'Bandung', '2001-01-22', 'L', 'O', 'Perum Rakyat No.54 RT 002/RW 004, Kel. Balongsari, Kec. Magersari, Kota Mojokerto', 'ArdeaZakkyKawakibiM@gmail.com', '62811337423', 'Mahasiswa', 'Brawijaya', 'Ekonomi dan Bisnis', 'Kewirausahaan', 'Al-Sarii', 2019, 'Endra Mochamad Nurdin M', 'Pengusaha', '628113633188', 'Apri Siti Astuti', 'IRT', '62811337423'),
(31, 201903010, 'Dea Ayu Pratiwi', 'Magelang', '2000-06-25', 'P', '-', 'Mungkidan 03/04, Danurejo, Mertoyudan, Magelang, Jawa Tengah', 'DeaAyuPratiwi@gmail.com', '62895394329265', 'Mahasiswa', 'UM', 'Teknik', 'Teknik Mesin', 'Al-Sarii', 2019, 'Mustofa', 'Buruh', '-', 'Sri Sundari', 'IRT', '-'),
(32, 201903011, 'Devi Indra Rachmawati', 'Sidoarjo, 9 Januari ', '2001-01-09', 'P', 'O', 'Ngaresrejo RT16/ RW03, Sukodono, Sidoarjo', 'DeviIndraRachmawati@gmail.com', '0', 'Mahasiswa', 'UM', 'MIPA', 'Pendidikan IPA', 'Al-Sarii', 2019, 'Choirul Anam', 'Karyawan Swasta', '6281333293866', 'Rukhana		', 'IRT', '6281259756433'),
(33, 201903012, 'Dinda Azza Kholilaini		', 'Karawang', '2000-06-06', 'P', 'O', 'Desa Blaran RT06/ RW02, Kec. Barat, Kab. Magetan, Jawa Timur', 'DindaAzzaKholilaini@gmail.com', '0', 'Mahasiswa', 'UM', 'Teknik', 'Pendidikan Teknik Bangunan', 'Al-Sarii', 2019, 'Aljanatin', 'Pegawai Swasta', '6285311031385', 'Ernawati', 'IRT', '6285217619143'),
(34, 201903013, 'Diva Mariska Tarastin	', 'Malang, 15 Juli 2000', '2000-07-15', 'P', 'A', 'Jl. Ahmad Yani RT01/RW01 Lumbangsari, Bululawang, Malang', 'DivaMariskaTarastin@gmail.com', '6281907724634', 'Mahasiswa', 'Polkesma		', 'Gizi', 'D-3 Anafarma', 'Al-Sarii', 2019, 'Hartono', 'Wiraswasta ', '6282143325934', 'Suminten', 'IRT', '6282143325934'),
(35, 201903014, 'Evan Falyakun Ansorullah', 'Kediri', '2000-12-08', 'L', 'O', 'Jl. Brigjen Katamso No.21, Gedog RT002/RW008 Kec. Sananwetan, Kota Blitar', 'EvanFalyakunAnsorullah@gmail.com', '6285855165850', 'Mahasiswa', 'UM', 'Ilmu Pendidikan	', 'Bimbingan dan Konseling', 'Al-Sarii', 2019, 'Sujianto	', 'PNS Guru', '6285235517130', 'Anom Khoirul Farikah', 'IRT', '6285234287522'),
(36, 201903015, 'Faza Khoiru Nisak	', 'Blitar', '2001-01-15', 'P', '-', 'Jl. Moh. Hatta 05 RT03/RW01 Kel. Sentul, Kec. Kepanjen Kidul, Kota Blitar', 'FazaKhoiruNisak@gmail.com', '0', 'Mahasiswa', 'Polkesma		', 'Gizi', 'D-3 Gizi', 'Al-Sarii', 2019, 'Jono 	', 'PNS', '6281333760422', 'Susiati', 'IRT', '-'),
(37, 201903017, 'Hamdan Khoiru Abdillah		', 'Tulungagung', '2001-01-19', 'L', 'O', 'RT 001/ RW 003, Dusun Pelem, Desa Serut, Kec. Boyolangu, Kab. Tulungagung', 'HamdanKhoiruAbdillah@gmail', '6281555878777', 'Mahasiswa', 'UM', 'Sastra	', 'Pendidikan Bahasa Jerman', 'Al-Sarii', 2019, 'Sumaji	', 'Pedagang', '6285232541543', 'Binti Mardiyah', 'IRT', '-'),
(38, 201903018, 'Hamed Wafdulloh Afdholu Safaah', 'Nganjuk', '1998-06-22', 'L', 'O', 'Jalan Ngronggot-Kertosono, Desa Drenges, RT 01 RW 01, Kecamatan Kertosono, Kab.Nganjuk', 'HamedWafdullohAfdholuSafaah@gmail.com', '6281359522985', 'Mahasiswa', 'UM', 'Teknik', 'Pendidikan Teknik Elektro', 'Al-Sarii', 2019, 'Abdul Rozak', 'Pedagang', '6285236214343', 'Lailatul Badriya', 'IRT', '6285236214343'),
(39, 201903019, 'Handoko Wicaksono	', 'Trenggalek', '1998-07-21', 'L', 'B', 'Bangun Jaya, Kec. Pakel, Kab. Tulungagung', 'HandokoWicaksono@gmail.com', '6281354123851', 'Mahasiswa', 'Brawijaya', 'Ekonomi	', 'Pendidikan Administrasi Perkantoran', 'Al-Sarii', 2019, 'Muyoto', 'PNS', '6281332074823', 'Sukanti', 'PNS', '6281359229871'),
(40, 201903021, 'Iman Burhan Rusli		', 'Kediri', '2000-02-20', 'L', '-', 'Ds. Batuaji RT 17 RW 05 Kec. Ringinrejo, Kab. Kediri ', 'ImanBurhanRusli@gmail.com', '6281555831150', 'Mahasiswa', 'UM', 'Teknik', 'Pendidikan Teknik Mesin', 'Al-Sarii', 2019, 'Handoko', 'Petani', '6285749483286', 'Siti Chodijah', 'IRT', '6285749483286'),
(41, 201903023, 'Irvandi Rosyidul Muslich', 'Gresik ', '2000-09-12', 'L', 'A', 'Ds. Sidojangkung RT.03 RW.01, Menganti, Gresik', 'IrvandiRosyidulMuslich@gmail.com', '6282380790536', 'Mahasiswa', 'Polinema', 'Teknik Elektro', '	Teknik Telekomunikasi', 'Al-Sarii', 2019, 'Slamet	', 'Wiraswasta', '6285212019676', 'Siti Rodiyah', 'IRT', '-'),
(42, 201903024, 'Kiki Nurfadhila	', 'Sidoarjo', '1998-11-11', 'P', 'O', 'Dsn. Kesimbukan Ds.Mojoruntut RT01/ RW01 Kec. Krembung, Kab. Sidoarjo', 'KikiNurfadhila@gmail.com', '628385568890', 'Mahasiswa', 'STMIK Asia', '-', '-', 'Al-Sarii', 2019, 'Yamari	', 'CS', '6281318295198', 'Umiati', 'IRT', '6281318295198'),
(43, 201903025, 'Maulina Asykuri		', 'Bojonegoro, 21 Febru', '2001-02-21', 'P', 'B', 'Ds. Tlogohaji RT04/ RW01, Kec. Sumberrejo, Kab. Bojonegoro', 'MaulinaAsykuri@gmail.com', '6285655725119', 'Mahasiswa', 'UM', 'MIPA	', 'Pendidikan Biologi', 'Al-Sarii', 2019, 'Maksun (Sun Arif)	', 'Petani', '6285785832559', 'Endang Supiatun', 'IRT', '6285643110264'),
(44, 201903026, 'Mega Puspa Dewi	', 'Air Molek', '1999-11-14', 'P', '-', 'jln.Sultan Ibrahim rt:02 rw:01 Candirejo - Air Molek ', 'MegaPuspaDewi@gmail.com', '0', 'Mahasiswa', 'UM', 'Ekonomi', 'Manajemen ', 'Al-Sarii', 2019, 'Puguh Yuswanto	', 'wiraswasta', '-', '-', '-', '-'),
(45, 201903027, 'Moch. Ferdy Nur Rozikhin', 'Malang', '2000-02-07', 'L', 'B', 'Komp. LDII Laburan RT.08 Desa Padang Panjang, Kec. Tanta, Kab, Tabalong, Kalimantan Selatan', 'Moch.FerdyNurRozikhin@gmail.com', '628125125435', 'Mahasiswa', 'UIN', 'Syariah	', 'Hukum Keluarga Islam', 'Al-Sarii', 2019, 'H. Isbullah Huda, S.Ap	', 'Karyawan BUMD', '628125125435', 'Hj. Siti Jariah', 'IRT', '6281348590499'),
(46, 201903029, 'Mohamad Yusuf Rifaldi	Aldi', 'Lamongan', '1999-07-28', 'L', '-', 'DS. Karang Langit RTO3/RW01 Kec.Lamongan Kab.Lamongan, Jawa Timur', 'MohamadYusufRifaldi@gmail.com', '0', 'Mahasiswa', 'UM', 'Teknik', 'Teknik Elektro', 'Al-Sarii', 2019, '-', '-', '-', '-', '-', '-'),
(47, 201903030, 'Muhammad Afwan Mufti ', 'Tuban', '2001-02-07', 'L', 'A', 'Kel. Kebonsari I/700 A RT.01 RW.06, Tuban, Jatim', 'MuhammadAfwanMufti@gmail.com', '6285230682677', 'Mahasiswa', 'UM', 'FIS	', 'Pendidikan Sejarah', 'Al-Sarii', 2019, 'Achmad Syeha Budin', 'PNS Guru', '6285230682677', 'Siti Rohanah', 'PNS', '6285230682677'),
(48, 201903031, 'Muhammad Asyra Syafiya Shudur ', 'Jakarta', '2001-11-26', 'L', 'O', 'Komplek Masnaga Jl.Palem 7 Blok F1022 RT002/ RW008 Kel. Jakamulya, Kec. Bekasi Selatan 17146', 'MuhammadAsyraSyafiyaShudur@gmail.com', '6282113347604', 'Mahasiswa', 'Brawijaya', 'MIPA	', 'Fisika', 'Al-Sarii', 2019, 'Sugeng Widodo', 'Swasta', '-', 'Yuliyanty', 'IRT', '6281288360109'),
(49, 201903032, 'Muhammad Pradipa Rosianto ', 'Kediri', '2001-06-29', 'L', '-', 'Jl. Jatisari Permai I C-2, Pepelegi, Waru, Sidoarjo', 'MuhammadPradipaRosiantoPradipa@gmail.com', '6281336752358', 'Mahasiswa', 'Polinema', 'Teknik Mesin	', 'D4 Teknik Mesin', 'Al-Sarii', 2019, 'Sukamto	', 'Karyawan Swasta', '628123573454', 'Ike Rosita', 'IRT', '6281916292696'),
(50, 201903033, 'Nurul Ahsani Alfiah		', 'Pati', '2000-09-15', 'P', '-', 'Dk. Njoga RT04/RW01, Ds. Tambahmulyo, Kec. Gabus, Kab. Pati, Jawa Tengah', 'NurulAhsaniAlfiah@gmail.com', '0', 'Mahasiswa', 'UM', 'MIPA	', 'Kimia ', 'Al-Sarii', 2019, 'Slamet Mujiono	', 'petani, pedagang', '-', '-', '-', '-'),
(51, 201903034, 'Panji Saputro	', 'Kediri', '2001-03-31', 'L', 'B', 'Jl. R. Patah Gg. Belimbing No.40 RT 01 RW 03 Grobogan, Jawa Tengah', 'PanjiSaputro@gmail.com', '6287822622881', 'Mahasiswa', 'Brawijaya', 'Peternakan', 'Peternakan', 'Al-Sarii', 2019, 'Syaiful Hamam	', 'Wiraswasta', '6282328458854	', 'Sri Rohwati	', 'Pedagang kecil	', '6285815475230'),
(52, 201903035, 'Qomarudin Anggi Setiyawan', 'Sukoharjo', '1999-08-07', 'L', 'O', 'Kranggan, RT 003 TW 003, Bakalan, Polokarto, Sukoharjo', 'QomarudinAnggiSetiyawan@gmail.com', '6281809757383', 'Mahasiswa', 'Brawijaya', 'Ekonomi dan Bisnis	', 'Akuntansi ', 'Al-Sarii', 2019, 'Suryadi (Alm.)', '-', '-', 'Waliyem', 'IRT', '-'),
(53, 201903037, 'Raihan Jamal	', 'Bukittinggi', '2001-03-20', 'L', 'B+', 'Jorong Toboh Tangah, Malalak Timur, Malalak, Agam, Sumatera Barat', 'RaihanJamal@gmail.com', '6281261629654', 'Mahasiswa', 'Brawijaya', 'Pertanian	', 'Agribisnis', 'Al-Sarii', 2019, 'M. Zein	', 'Petani ', '6281374431473', 'Betri', 'PNS	', '6285375543137'),
(54, 201903040, 'Rochma Dinda Fahrani', 'Malang', '2000-11-05', 'P', 'A', 'Jl. Ahmad Yani RT01/RW01 No.424, Desa Lumbangsari, Kec. Bululawang, Kab. Malang, Jawa Timur', 'RochmaDindaFahrani@gmail.com', '0', 'Mahasiswa', 'WEARNES', '-', 'KASIMAPR', 'Al-Sarii', 2019, 'Mujiono', 'Pegawai Swasta', '6281331889436', 'Zulaikha', 'IRT', '-'),
(55, 201903042, 'Zainul Arifin', 'Kediri', '1997-08-19', 'L', 'O', 'Jl. Agrowilis RT03/RW08 No. 558 Ds. Semen, Kec. Semen, Kab. Kediri', 'ZainulArifin@gmail.com', '6285736987669', 'Mahasiswa', 'ITN', 'FTSP	', 'Teknik Sipil', 'Al-Sarii', 2019, 'Sukono	', 'Karyawan Swasta', '6281330581616', 'Siti Komariyah', 'IRT', '6282142031549'),
(56, 202003001, 'Mufti Fajar Dzakaria', 'Probolinggo', '2000-10-01', 'L', '-', 'Jl. Pelan Desa muneng leres RT 014, Rw 004, Kec. Sumberasih, Kab. Probolinggo, Jawa Timur', 'MuftiFajarDzakaria@gmail.com', '0', 'Mahasiswa', 'ITN', 'teknik sipil	', 'Arsitektur', 'Al-Sarii', 2019, 'imam suhadi	', 'PNS Pertanian', '-', 'indah eka evandari', '-', '-'),
(57, 201903036, 'Mohamad Yusuf Kurniawan', 'Blitar', '2000-07-11', 'L', 'A-', 'dsn.karanganyar ds.gembongan Rt04 Rw06  kec.ponggok kab.blitar kode pos 66153', 'MohamadYusufKurniawan@gmail.com', '6281330733035', 'Mahasiswa', 'UM', 'FIP	', 'Teknologi Pendidikan ', 'Al-Sarii', 2019, 'Paniran	', 'petani/ pedagang', '6285749276657', 'Suprapti', 'IRT', '62	82141706503');

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
  MODIFY `id_cs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_nm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_pengumuman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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

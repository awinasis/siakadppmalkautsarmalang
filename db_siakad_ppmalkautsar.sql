-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 03:24 AM
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
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(3) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `nama_kegiatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(3) NOT NULL,
  `nama_guru` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(2) NOT NULL,
  `kelas` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'Pegon Bacaan'),
(2, 'Lambatan'),
(3, 'Cepatan'),
(4, 'Pra Saringan dan Saringan'),
(5, 'Hadist Besar');

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
  `nama_materi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_materi`
--

INSERT INTO `tbl_materi` (`id_materi`, `nama_materi`) VALUES
(1, 'Kitabusholah'),
(2, 'Kitabu Sholatinnawafiil'),
(3, 'Kitabul Adab'),
(4, 'Kitabul Jannaiz'),
(5, 'Kitabu Da\'wat'),
(6, 'Kitabu Jannah Wannar'),
(7, 'Kitabu Shoum'),
(8, 'Kitabul Jihad'),
(9, 'Kitabul Manasik Waljihad'),
(10, 'Kitabu Ahkam'),
(11, 'Kitabu Khotbah'),
(12, 'Kitabu Imaroh'),
(13, 'Kitabu Imaroh Walkanzil Umal'),
(14, 'Kitabul Hajji'),
(15, 'Kitabul Manasikil Walhajji'),
(16, 'Kitabul Faroid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(3) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` enum('LUNAS','BELUM LUNAS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(3) NOT NULL,
  `nama_pengumuman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_santri`
--

CREATE TABLE `tbl_santri` (
  `id_santri` int(3) NOT NULL,
  `NIS` int(12) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `noTelp` varchar(13) DEFAULT NULL,
  `universitas` varchar(30) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `jurusan_prodi` varchar(50) DEFAULT NULL,
  `kelas_santri` enum('Pegon Bacaan','Lambatan','Cepatan','Pra Saringan dan Saringan','Hadist Besar') DEFAULT NULL,
  `angkatan_santri` year(4) DEFAULT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `noTelp_ortu` varchar(13) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_santri`
--

INSERT INTO `tbl_santri` (`id_santri`, `NIS`, `nama_santri`, `tempat_tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `noTelp`, `universitas`, `fakultas`, `jurusan_prodi`, `kelas_santri`, `angkatan_santri`, `nama_ayah`, `noTelp_ortu`, `password`, `foto`) VALUES
(1, 201903002, 'Abdullah Winasis', 'Kediri, 22 Oktober 1999', 'Laki-Laki', 'Jl Supriyadi, Rt/Rw 004/007 Dsn Papar Selatan, Ds Papar, Kab Kediri, Jawa Timur', 'awinasism2p@gmail.com', '087881445230', 'Politeknik Negeri Malang', '-', 'Teknologi Informasi/Manajemen Informatika', 'Cepatan', 2018, 'Maskun Bukhori', '081335498131', 'awinasis31354', 'awin.jpg'),
(10, 201903001, 'Abdillah Yudhatama', 'Malang, 2 Februari 2001', 'Laki-Laki', 'Jl. Anjasmoro No.35 RT.11 RW.03 Bendo Karang, Pandan Pakisaji, Kabupaten Malang', 'abdillahyudhatama@gmail.com', '1234567890', 'Brawijaya', 'Pertanian', 'Agroekoteknologi', 'Cepatan', 2019, '', '', NULL, NULL),
(11, 201903003, 'Achmad Koirudin Abdullah', 'Sragen, 2 Juli 2001', 'Laki-Laki', 'Pungkruk, Doyong RT01/000, Miri, Sragen, Jawa Tengah', 'achmadkhoirudinabdullah@gmail.com', '1234567890', 'Negeri Malang', 'Teknik', 'Pendidikan Teknik Elektro', 'Cepatan', 2019, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id_surat` int(3) NOT NULL,
  `nama_surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `foto`) VALUES
(1, 'Abdullah Winasis', '201903002', 'awinasis', 'foto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

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
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

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
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  MODIFY `id_kurikulum` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  MODIFY `id_materi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id_surat` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

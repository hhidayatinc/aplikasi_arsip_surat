-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 04:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `nomor_surat`, `id_kategori`, `judul`, `nama_file`, `created_at`) VALUES
(11, '134/PUDIR I/KM/2022', 2, 'Penyelenggaraan Wisuda Ke 57 Polinema', '220915_Penyelenggaraan Wisuda Ke 57 Polinema.pdf', '2022-09-15 14:46:45'),
(12, '479/PL2.TI/UND/2022 ', 1, 'Undangan Mahasiswa Kuliah Tamu', '220915_Undangan Mahasiswa Kuliah Tamu.pdf', '2022-09-15 14:47:02'),
(13, '12/2022', 2, 'Penguman Tes Akademik Alih Jenjang', '220915_Penguman Tes Akademik Alih Jenjang.pdf', '2022-09-15 14:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Undangan'),
(2, 'Pengumuman'),
(3, 'Nota Dinas'),
(4, 'Pemberitahuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

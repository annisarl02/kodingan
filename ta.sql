-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

CREATE TABLE `bandara` (
  `idbandara` int(11) NOT NULL,
  `nmbandara` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`idbandara`, `nmbandara`, `kota`) VALUES
(1, 'Bandara Internasional Soekarno Hatta', 'Jakarta'),
(2, 'Bandara Internasional Halim Perdanakusuma', 'Jakarta'),
(3, 'Bandara Internasional Supadio', 'Pontianak'),
(4, 'Bandara Internasional Kualanamu', 'Medan'),
(5, 'Bandara Internasional Minangkabau', 'Padang'),
(6, 'Bandara Internasional Sultan Mahmud Badaruddin II', 'Palembang'),
(7, 'Bandara Internasional Sultan Syarif Kasim II', 'Pekanbaru'),
(8, 'Bandara Internasional Husein Sastranegara', 'Bandung'),
(9, 'Bandara Internasional Sultan Iskandarmuda', 'Banda Aceh'),
(10, 'Bandara Internasional Raja Haji Fisabilillah', 'Tanjungpinang'),
(11, 'Bandara Internasional Sultan Thaha', 'Jambi'),
(12, 'Bandara Depati Amir', 'Pangkal Pinang'),
(13, 'Bandara Tjilik Riwut', 'Palangkaraya'),
(14, 'Bandara Internasional Silangit', 'Tapanuli Utara'),
(15, 'Bandara Internasional Kertajati', 'Kertajati'),
(16, 'Bandara Internasional Banyuwangi', 'Banyuwangi'),
(17, 'Bandara Fatmawati Soekarno', 'Bengkulu'),
(18, 'Bandara Internasional H.A.S. Hanandjoeddin', 'Tanjung Pandan'),
(19, 'Bandara Internasional Radin Inten II', 'Lampung');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nmkategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nmkategori`, `keterangan`) VALUES
(0, '', ''),
(1, 'Hijau', 'Hazard Ringan'),
(2, 'Kuning', 'Hazard Sedang'),
(3, 'Merah', 'Hazard Berat\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `idpenumpang` int(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notelp` int(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`idbandara`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`idpenumpang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `idpenumpang` int(14) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

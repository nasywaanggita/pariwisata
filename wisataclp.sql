-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2022 at 09:42 PM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisataclp`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarharga`
--

CREATE TABLE `daftarharga` (
  `iddh` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarharga`
--

INSERT INTO `daftarharga` (`iddh`, `nama`, `harga`) VALUES
(1, 'Pantai Teluk Penyu', '15000'),
(2, 'Benteng Pendem', '15000'),
(3, 'Museum Soesilo Soedarman', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idp` int(10) NOT NULL,
  `nama_p` varchar(30) NOT NULL,
  `no_identitas` varchar(16) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `idnama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `Jml_p` varchar(30) NOT NULL,
  `Jml_ank` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idp`, `nama_p`, `no_identitas`, `no_hp`, `idnama`, `tanggal`, `Jml_p`, `Jml_ank`, `total`) VALUES
(1, 'Iffan Ahmad', '3301032345400002', '081543676993', '3', '2022-04-23', '3', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_identitas` bigint(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jml` int(10) NOT NULL,
  `jml_anak` int(10) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `no_identitas`, `no_hp`, `tanggal`, `jml`, `jml_anak`, `nama_wisata`, `total_harga`, `tanggal_pesan`) VALUES
(18, 'Agung UF', 1234123412312345, '123124125', '2022-04-23', 12, 2, 'Aguahsds', 123124125, '2022-04-22'),
(19, 'Agum', 1234123412312545, '123124125', '2022-04-23', 12, 2, 'Akua', 123124125, '2022-05-22'),
(20, 'Agi F', 1234123412312655, '123124125', '2022-04-23', 12, 2, 'Aguahsds', 123124125, '2022-05-22'),
(21, 'Asai F', 1234123412312655, '123124125', '2022-04-23', 12, 2, 'Aguahsds', 123124125, '2022-01-22'),
(22, 'AHmas', 3234123412312655, '123124125', '2022-04-23', 12, 2, 'Aguahsds', 123124125, '2022-02-22'),
(23, 'Deni', 1234123412342655, '123124125', '2022-04-23', 12, 2, 'Aguahsds', 123124125, '2022-03-22'),
(24, 'Agi F', 1234123412312655, '123124125', '2022-04-23', 12, 2, 'Aguahsds', 123124125, '2022-06-22'),
(27, 'agung kusaeri', 1231234512341234, '09124124', '2022-04-26', 123, 12, 'Museum Soesilo Soedarman', 645000, '2022-04-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarharga`
--
ALTER TABLE `daftarharga`
  ADD PRIMARY KEY (`iddh`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarharga`
--
ALTER TABLE `daftarharga`
  MODIFY `iddh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

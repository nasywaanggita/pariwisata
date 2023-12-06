-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 10.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `daftarharga`
--

CREATE TABLE `daftarharga` (
  `iddh` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftarharga`
--

INSERT INTO `daftarharga` (`iddh`, `nama`, `harga`) VALUES
(1, 'Pantai Teluk Penyu', '15000'),
(2, 'Benteng Pendem', '15000'),
(3, 'Museum Soesilo Soedarman', '5000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`idp`, `nama_p`, `no_identitas`, `no_hp`, `idnama`, `tanggal`, `Jml_p`, `Jml_ank`, `total`) VALUES
(1, 'Nasywa Anggita', '3301032345400002', '081543676993', '3', '2022-04-23', '3', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `no_identitas`, `no_hp`, `tanggal`, `jml`, `jml_anak`, `nama_wisata`, `total_harga`, `tanggal_pesan`) VALUES
(29, 'Khairina Dwi Aristyanti', 1111111111111111, '089999922718', '2023-12-16', 2, 1, 'Pantai Teluk Penyu', 37500, '2023-12-06'),
(30, 'Sidky Ahmad Elman', 2222222222222222, '0878902189101', '2023-12-08', 1, 2, 'Benteng Pendem', 30000, '2023-12-06'),
(31, 'Aditya Bima Indrasta', 3333333333333333, '085098272689', '2023-12-07', 3, 0, 'Museum Soesilo Soedarman', 15000, '2023-12-06'),
(32, 'Nasywa Anggita Putri', 4444444444444444, '0876927291011', '2023-12-08', 2, 0, 'Pantai Teluk Penyu', 30000, '2023-12-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarharga`
--
ALTER TABLE `daftarharga`
  ADD PRIMARY KEY (`iddh`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idp`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarharga`
--
ALTER TABLE `daftarharga`
  MODIFY `iddh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

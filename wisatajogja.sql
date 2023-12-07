-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2023 pada 05.55
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
-- Database: `wisatajogja`
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
(1, 'Malioboro', '15000'),
(2, 'Taman Sari', '15000'),
(3, 'Pantai Parangtritis', '20000');

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
(1, 'Sidky Aditya Khairina Nasywa', '3301032345400002', '081543676993', '3', '2023-12-02', '3', '1', '');

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
(33, 'Nasywa Anggita Putri', 1111111111111111, '085098272689', '2023-12-09', 2, 0, 'Malioboro', 30000, '2023-12-07'),
(34, 'Sidky Ahmad Elman', 2222222222222222, '089999272818', '2023-12-08', 4, 1, 'Taman Sari', 67500, '2023-12-07'),
(35, 'Khairina Dwi Aristyanti', 3333333333333333, '089999922718', '2023-12-10', 2, 1, 'Pantai Parangtritis', 50000, '2023-12-07'),
(36, 'Aditya Bima Indrasta', 4444444444444444, '085098272689', '2023-12-12', 1, 1, 'Malioboro', 22500, '2023-12-07');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

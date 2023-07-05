-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2023 pada 13.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iuran_kas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan` int(2) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `warga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iuran`
--

INSERT INTO `iuran` (`id`, `keterangan`, `tanggal`, `bulan`, `tahun`, `jumlah`, `warga_id`) VALUES
(1, 'LUNAS', '2022-07-01', 7, 2022, 90000, 1),
(2, 'KREDIT', '2022-07-08', 7, 2022, 50000, 2),
(3, 'LUNAS', '2022-07-01', 7, 2022, 90000, 3),
(4, 'LUNAS', '2022-06-26', 6, 2022, 90000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `no_rumah` varchar(10) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama`, `kelamin`, `alamat`, `no_rumah`, `status`) VALUES
(1, '312110034', 'M. AKMAL AL ABDILAH', 'L', 'Cikarang,Bekasi', 'F8 No.12A', 'Aktif'),
(2, '3122210098', 'ROBIYANTO', 'L', 'Cikarang,Bekasi', 'BLOK F-12', 'Aktif'),
(3, '312110027', 'ILHAM MAULANA C.D.N', 'L', 'Cikarang,Bekasi', 'BLOK F-14', 'Aktif'),
(4, '312110604', 'FLANDILAN RUI', 'L', 'Cikarang,Bekasi', 'BLOK F-15', 'Aktif'),
(5, '3121100178', 'AZIZUL DZIKRI', 'L', 'Cikarang,Bekasi', 'BLOK F-16', 'Aktif'),
(6, '212010100', 'SEMPRUL', 'L', 'Cikarang,Bekasi', 'BLOK F-17', 'Tidak Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `nik_UNIQUE` (`nik`) USING BTREE,
  ADD KEY `nama` (`nama`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

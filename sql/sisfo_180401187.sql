-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Jul 2021 pada 20.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_180401187`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `jk`, `tgl_lahir`, `no_hp`, `kelas`, `foto`, `password`, `status`) VALUES
('124124', 'adsafd', 'Laki-laki', '2020-04-14', '123456789012', 'Reg-A4', 'erik.jpg', '827ccb0eea8a706c4c34', 'Aktif'),
('180401185', 'Nefri Andri', 'Laki-laki', '1998-04-04', '123456789012', 'Reg-A2', 'logo-Umri-ok-2018-small.png', '81dc9bdb52d04dc20036', 'Aktif'),
('180401187', 'Wahyu Nuzul Bahri', 'Laki-laki', '2000-12-12', '123456789098', 'Reg-A2', 'wahyu.jpg', 'd8eaf6b35e1e45e5d5c7e9f9fdfe6828', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatausaha`
--

CREATE TABLE `tatausaha` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tatausaha`
--

INSERT INTO `tatausaha` (`nip`, `nama`, `telp`, `password`) VALUES
('1018079001', 'Tri Lestari', '087893487611', 'c344ff95d8a73006c994d11606bceb83'),
('1234', 'wahyu', '12456789098', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

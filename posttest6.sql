-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Okt 2022 pada 03.29
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `nis` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`nis`, `nama`, `tgl_lahir`, `jenis_kelamin`, `kelas`, `gambar`, `tgl_waktu`) VALUES
(21, 'dsfds', 'sdfds', 'Laki-Laki', 'dsfsf', 'eskul.jpg', '2022-10-29 00:14:03'),
(2109106120, 'Hendy Saputra', '2001-07-10', 'Laki-Laki', '12', 'juara2.jpg', '2022-10-29 00:14:40'),
(2109106123, 'siti', '2002-07-10', 'Perempuan', '12 a', 'eskul.jpg', '2022-10-28 22:58:59'),
(2109106131, 'AYANG SARAH', '2003-07-11', 'Perempuan', '12 A', 'foto_hendy3.jpg', '2022-10-29 09:28:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2109106132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

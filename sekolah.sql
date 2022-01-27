-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2022 pada 02.53
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `jk`, `mapel`) VALUES
(2, '190222', 'Tajidup S.Pd', 'Laki-Laki', 'Bahasa Indonesia'),
(4, '190222', 'Muzani Mpd sig', 'Laki-Laki', 'Bahasa Indonesia'),
(5, '54321', 'Mirna S.Ig', 'Perempuan', 'Agama'),
(6, '90321', 'Nurhayati S.Kom', 'Perempuan', 'Matematika'),
(7, '8402926', 'Rizal Hakiki S.Pd', 'Laki-Laki', 'Bahasa Inggris'),
(8, '99765', 'Zaini Amrun S.Pd', 'Laki-Laki', 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `prestasi` varchar(225) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `jk`, `kelas`, `prestasi`, `gambar`) VALUES
(12, '1901010009', 'Muhammad Algi Fary', 'Laki-Laki', 'Mipa-4', 'MVP DBL Kejuaraan Basket Nasional SMA sederajat', '7.jfif'),
(14, '1901010001', 'Muhammad Argian Pogay', 'Laki-Laki', 'Mipa-3', 'MVP Futsal Pocari SMA sederajat', '2.jfif'),
(16, '1901010002', 'Ranisa Gayatri', 'Perempuan', 'Mipa-1', 'Juara 1 Lomba Melukis tinkat Nasional SMA Sederajat', '3.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(1, 'ima algadri', '123', '321', 'admin'),
(2, 'audi pramudia', 'admin', 'admin', 'operator'),
(3, 'lisa', 'lisa', 'lisa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

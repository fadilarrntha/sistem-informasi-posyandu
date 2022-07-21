-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 15.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `ibu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id_anak`, `nik_anak`, `nama_anak`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `ibu_id`) VALUES
(1, '2342342342423432', 'Far Zayyan', 'Tol Kiri', '2020-10-18', 'Laki-Laki', 4),
(2, '2342342342342342', 'Safrudin Zayyan', 'Pekanbaru', '2018-06-13', 'Laki-Laki', 4),
(3, '2342343234323433', 'Sok Dart', 'Tol Kiri', '2021-06-16', 'Laki-Laki', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_dar` varchar(2) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `tempat_lahir_suami` varchar(30) NOT NULL,
  `tgl_lahir_suami` date NOT NULL,
  `pendidikan_suami` varchar(100) NOT NULL,
  `pekerjaan_suami` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibu`
--

INSERT INTO `ibu` (`id_ibu`, `nama_ibu`, `tempat_lahir`, `tgl_lahir`, `gol_dar`, `pendidikan`, `pekerjaan`, `nama_suami`, `tempat_lahir_suami`, `tgl_lahir_suami`, `pendidikan_suami`, `pekerjaan_suami`, `alamat`, `kecamatan`, `kota`, `no_tlp`) VALUES
(4, 'Sonya', 'Pillbox', '1992-06-09', 'A', 'S1', 'EMS', 'Bram', 'Pillbox', '1991-01-10', 'S1', 'Polisi', 'Tol Kiri', 'Paleto', 'Indohome', '0822-3344-5564'),
(6, 'Sage', 'Pillbox', '1975-03-05', 'AB', 'S1', 'PNS', 'Sova', 'Pillbox', '1966-06-14', 'SMA', 'Atlet Panah', 'Tol Kiri', 'Paleto', 'Indohome', '0823-4234-2334');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `anak_id` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `ibu_id` int(20) NOT NULL,
  `tgl_skrng` date NOT NULL,
  `usia` int(11) NOT NULL,
  `imunisasi` varchar(30) NOT NULL,
  `vit_a` enum('Merah','Biru') NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `anak_id`, `tgl_lahir`, `jenis_kelamin`, `ibu_id`, `tgl_skrng`, `usia`, `imunisasi`, `vit_a`, `ket`) VALUES
(1, 1, '2020-10-18', 'Laki-Laki', 4, '2022-01-19', 14, 'Campak', 'Merah', '-'),
(2, 1, '2020-10-18', 'Laki-Laki', 4, '2022-07-19', 20, 'Polio', 'Biru', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `date_time`) VALUES
(1, '2021-01-30 10:23:29'),
(1, '2021-01-30 10:34:46'),
(1, '2021-01-30 10:43:56'),
(1, '2021-01-31 02:28:21'),
(1, '2021-01-31 03:22:35'),
(1, '2021-01-31 09:10:44'),
(1, '2021-01-31 09:26:10'),
(1, '2021-01-31 09:29:54'),
(1, '2021-01-31 09:30:32'),
(1, '2021-02-03 01:44:40'),
(1, '2021-02-05 07:31:28'),
(2, '2021-02-07 11:30:13'),
(1, '2021-02-07 12:51:05'),
(2, '2021-02-07 01:55:44'),
(1, '2021-02-07 01:56:42'),
(1, '2021-02-07 02:20:01'),
(2, '2021-02-07 02:26:00'),
(2, '2021-02-07 05:10:55'),
(1, '2021-02-07 05:12:08'),
(2, '2021-02-07 05:20:27'),
(1, '2021-02-07 05:21:00'),
(1, '2021-02-07 08:28:31'),
(1, '2021-02-07 09:37:56'),
(1, '2021-02-11 03:17:12'),
(1, '2021-02-11 03:21:59'),
(1, '2021-02-11 09:34:17'),
(1, '2021-02-11 09:50:11'),
(1, '2021-02-12 07:32:48'),
(1, '2021-02-12 10:15:28'),
(1, '2021-02-12 10:44:02'),
(1, '2022-05-31 09:31:33'),
(2, '2022-05-31 10:06:16'),
(2, '2022-05-31 10:07:29'),
(1, '2022-06-01 04:14:29'),
(2, '2022-06-01 05:24:59'),
(1, '2022-06-01 06:05:47'),
(2, '2022-06-01 07:19:54'),
(1, '2022-06-01 07:47:29'),
(1, '2022-06-13 11:26:57'),
(1, '2022-06-28 08:31:52'),
(1, '2022-06-29 10:45:50'),
(1, '2022-07-01 04:14:37'),
(1, '2022-07-08 08:21:41'),
(3, '2022-07-08 08:23:21'),
(3, '2022-07-08 08:23:29'),
(1, '2022-07-08 08:35:50'),
(3, '2022-07-08 08:40:12'),
(3, '2022-07-08 08:40:21'),
(3, '2022-07-08 08:47:35'),
(3, '2022-07-08 08:49:07'),
(3, '2022-07-08 08:49:55'),
(3, '2022-07-08 08:50:40'),
(1, '2022-07-08 08:54:17'),
(1, '2022-07-08 08:55:28'),
(3, '2022-07-08 08:56:43'),
(3, '2022-07-08 08:56:56'),
(3, '2022-07-08 08:58:54'),
(1, '2022-07-08 09:13:24'),
(1, '2022-07-09 02:46:56'),
(1, '2022-07-09 02:47:46'),
(3, '2022-07-09 03:09:15'),
(1, '2022-07-09 03:23:43'),
(3, '2022-07-09 03:24:26'),
(8, '2022-07-09 06:06:20'),
(1, '2022-07-09 06:07:17'),
(3, '2022-07-09 06:09:22'),
(11, '2022-07-09 06:19:55'),
(3, '2022-07-09 06:20:32'),
(12, '2022-07-09 07:05:00'),
(12, '2022-07-14 07:23:37'),
(12, '2022-07-14 07:32:00'),
(12, '2022-07-14 07:32:38'),
(12, '2022-07-14 07:44:07'),
(12, '2022-07-18 08:32:24'),
(12, '2022-07-18 08:40:07'),
(12, '2022-07-18 09:30:44'),
(13, '2022-07-18 10:17:52'),
(13, '2022-07-19 07:54:07'),
(12, '2022-07-19 08:08:20'),
(13, '2022-07-19 08:14:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` int(11) NOT NULL,
  `anak_id` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `ibu_id` int(11) NOT NULL,
  `tgl_skrng` date NOT NULL,
  `usia` int(11) NOT NULL,
  `bb` double NOT NULL,
  `tb` double NOT NULL,
  `deteksi` enum('Sesuai','Tidak Sesuai') NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penimbangan`
--

INSERT INTO `penimbangan` (`id_penimbangan`, `anak_id`, `tgl_lahir`, `jenis_kelamin`, `ibu_id`, `tgl_skrng`, `usia`, `bb`, `tb`, `deteksi`, `ket`) VALUES
(1, 1, '2020-10-18', 'Laki-Laki', 4, '2022-01-19', 14, 10, 80, 'Sesuai', '-'),
(2, 1, '2020-10-18', 'Laki-Laki', 4, '2022-07-19', 20, 15, 100, 'Sesuai', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jabatan` enum('Ketua','Bendahara','Sekretaris','Anggota') NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `lama_kerja` int(11) NOT NULL,
  `tugas_pokok` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `jabatan`, `pendidikan_terakhir`, `lama_kerja`, `tugas_pokok`) VALUES
(3, 'Daffa', 'Pekanbaru', '2022-07-10', '0823-4243-5343', 'Anggota', 'S1', 2, 'Admin'),
(4, 'Fadil', 'Rengat', '2022-07-09', '3533-4353-4544', 'Ketua', 'D4', 22, 'ada'),
(5, 'Adin', 'Tol Kiri', '2000-06-21', '0823-2334-3343', 'Ketua', 'D4', 6, 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_users` int(11) NOT NULL,
  `petugas_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_users`, `petugas_id`, `username`, `image`, `password`, `level_id`, `is_active`, `date_created`) VALUES
(12, 4, 'fadil', 'icon-user.png', '$2y$10$9HxIoyhVqO/8DqxGiKAEPuAI0m5koZbH2HXlJiyTWHNfvbj1YGJWq', 'Admin', 1, 1657368038),
(13, 3, 'daffa', 'icon-user.png', '$2y$10$bdTVapBj9VKw.DxKtfhbnOyeBZVZzIalSKYiG8U3lP6mNfFBMPrdW', 'Petugas', 1, 1657758557);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `ibu_id_fk` (`ibu_id`);

--
-- Indeks untuk tabel `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indeks untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`),
  ADD KEY `anak_id_fk` (`anak_id`),
  ADD KEY `ibu_id_f_k` (`ibu_id`);

--
-- Indeks untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`),
  ADD KEY `anak_id_f_k` (`anak_id`),
  ADD KEY `ibu_i_d_fk` (`ibu_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `petugas_id` (`petugas_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_penimbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `anak_id_fk` FOREIGN KEY (`anak_id`) REFERENCES `anak` (`id_anak`),
  ADD CONSTRAINT `ibu_id_f_k` FOREIGN KEY (`ibu_id`) REFERENCES `ibu` (`id_ibu`);

--
-- Ketidakleluasaan untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD CONSTRAINT `anak_id_f_k` FOREIGN KEY (`anak_id`) REFERENCES `anak` (`id_anak`),
  ADD CONSTRAINT `ibu_i_d_fk` FOREIGN KEY (`ibu_id`) REFERENCES `ibu` (`id_ibu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2024 pada 14.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_langgar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nik` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nik`, `nama_guru`, `mata_pelajaran`) VALUES
(334242, 'Wulandari  S.Pd', 'Matematika'),
(9865443, 'reza', 'IPS'),
(12345678, 'Vanessa Angel S.Pd', 'Fisika'),
(12348765, 'Nikita Mirzani  S.Pd', 'Biologi'),
(43215678, 'Ricardo Milos  S.Pd', 'Olahraga'),
(87654321, 'Maria Vania S.Pd', 'Kimia'),
(567854321, 'Johny Shin  S.Pd', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kebaikan`
--

CREATE TABLE `tb_kebaikan` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `wali_id` int(11) NOT NULL,
  `tipe_id` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `poin` int(11) NOT NULL,
  `tanggal_lapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kebaikan`
--

INSERT INTO `tb_kebaikan` (`id`, `nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES
(2, 4151, 3, 567854321, 4, 2, 'vhvhv', 25, '2024-06-06'),
(3, 6272, 3, 567854321, 6, 2, 'sdadasds', 25, '2024-06-08'),
(4, 2345, 1, 567854321, 2, 4, 'Jancok bgt kamu2', 0, '2024-09-28'),
(5, 4151, 3, 43215678, 5, 1, 'baik', 25, '2024-12-04'),
(7, 4151, 3, 334242, 5, 2, 'jj', 25, '2024-12-04'),
(8, 3556, 4, 12345678, 4, 1, 'j', 25, '2024-12-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `sub_class` enum('X','XI','XII') NOT NULL,
  `total_siswa` int(11) NOT NULL,
  `total_poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `wali_kelas`, `nama_kelas`, `sub_class`, `total_siswa`, `total_poin`) VALUES
(1, 'Wulandari  S.Pd', 'XII-RPL-1', 'XII', 40, 0),
(2, 'Maria Vania', 'XII-TKJ-1', 'XII', 40, 0),
(3, 'Nikita Mirzani', 'XI-AP-1', 'XI', 40, 0),
(4, 'Ricardo Milos', 'X-AK-1', 'X', 40, 0),
(5, 'Ricardo Milos', 'XII - RPL', 'XI', 12, 0),
(6, 'Ricardo Milos  S.Pd', 'jj', 'X', 90, 0),
(7, 'reza', 'XII - Busana', 'XI', 10, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `wali_id` int(11) NOT NULL,
  `tipe_id` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `poin` int(11) NOT NULL,
  `tanggal_lapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id`, `nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES
(18, 1234, 4, 334242, 7, 2, 'Tidak Rapi', 25, '2024-06-01'),
(19, 1234, 4, 334242, 5, 2, 'Baju dikeluarkan', 25, '2024-06-02'),
(20, 1254, 4, 12345678, 9, 3, 'Rambut Panjang', 10, '2024-06-02'),
(21, 1254, 3, 12345678, 6, 4, 'Bobo', 50, '2024-06-02'),
(22, 1254, 2, 12345678, 1, 8, 'Buang Sampah', 5, '2024-06-02'),
(23, 2345, 2, 12348765, 3, 3, 'Rambut Panjang', 10, '2024-06-02'),
(24, 1254, 1, 12348765, 2, 4, '1', 50, '2024-12-04'),
(27, 3556, 4, 9865443, 4, 1, 'm', 10, '2024-12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nama_siswa`, `class_id`, `alamat`, `nomor_hp`) VALUES
(1234, 'Deri Rifanudin2', 2, 'Palangka Raya', 8965665),
(1254, 'Eko Wahyu', 1, 'Bekasi', 8965665),
(2345, 'Hanif Ilmi', 1, 'Bekasi', 8965665),
(3556, 'Elevia Shabrina', 4, 'Bekasi', 8965665),
(4151, 'Dewi Karina', 3, 'Bekasi', 8965665),
(5646, 'Sugiarto', 2, 'Bekasi', 8965665),
(6272, 'Joko Susilo', 3, 'Bekasi', 8965665),
(7611, 'Yuliana', 4, 'Bekasi', 8965665),
(34343, 'sasa', 4, 'hj h ', 98899),
(45454, 'htht', 4, '232', 2333333333333),
(211212, 'efef', 4, 'efe', 2323),
(33232323, '2323', 5, '232', 2333333333333),
(222222221, 'efoef', 5, 'efe', 333),
(999999999, 'jakjs', 3, 'kkkkkkk', 82254098080),
(2147483647, 'Lisa', 4, 'Jl. Gatot', 82256099778);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_kebaikan`
--

CREATE TABLE `tb_tipe_kebaikan` (
  `id` int(11) NOT NULL,
  `nama_kebaikan` text NOT NULL,
  `poin_kebaikan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_tipe_kebaikan`
--

INSERT INTO `tb_tipe_kebaikan` (`id`, `nama_kebaikan`, `poin_kebaikan`) VALUES
(1, 'Berperilaku Positif dan Etika', 25),
(2, 'Kehadiran dan Kedisiplinan', 25),
(3, 'Kebersihan di Lingkungan Sekolah', 20),
(4, 'Prestasi Akademik', 50),
(5, 'Kerapian', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_pelanggaran`
--

CREATE TABLE `tb_tipe_pelanggaran` (
  `id` int(11) NOT NULL,
  `nama_pelanggaran` text NOT NULL,
  `poin_pelanggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_tipe_pelanggaran`
--

INSERT INTO `tb_tipe_pelanggaran` (`id`, `nama_pelanggaran`, `poin_pelanggaran`) VALUES
(1, 'Bolos', 10),
(2, 'Baju Tidak Rapi', 25),
(3, 'Rambut Gondrong', 10),
(4, 'Tidur Di Kelas', 50),
(5, 'Berkelahi', 15),
(7, 'Seks Bebas', 50),
(8, 'Buang Sampah Sembarangan', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` enum('Admin','Guru','Kepala Sekolah') NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `remember_me` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama_lengkap`, `email`, `username`, `password`, `level`, `status`, `remember_me`) VALUES
(2, 'Yosefa Aditya Putra2', 'yosefaaditya@gmail.com', 'admin', '$2y$12$5Q5kW.8ufgpKk3AMuYGpVu3Ew4xN85jTtJXOO6Wym3WPgQgw6TPZy', 'Admin', 1, 'PuRrF2IySPM5nDZ8NGvbwlYHkFB5O98sgJad7UGW0Q3JHVAjf4ymx7x6YsRcpu96'),
(3, 'Burhan', 'burhan@udin.coid', 'Burhanadc', '$2y$10$IX73HM8tB5/hEq5jC/RSbuVf4aruw8EieTi0un183Q6PRgLNbStPK', 'Admin', 1, '2reLcE8acgCYoTZPBtiGsjk1pyJFrn9xsaqXQgQtVA2K0dKwv9lVHTHzxqvGFuWw'),
(4, 'Halim', 'ulfiyaumakhoiriyah@gmail.com', 'Nurkholik22', '$2y$10$HQYQqxGCeCnxuQTvlFWV7O.3lVYJC9Gcjo.Ve9mzQpX51fUmgCqOK', 'Guru', 1, ''),
(5, 'Guru', 'guru@gmail.com', 'guruguru', '$2y$10$GG6vxWxshuRDemv7T2vWCu529eKq2GTLtfedprtgl8YProhxRa8t2', 'Guru', 1, 'L7obQYlRVszHIEvma0MmG656Vtc8OSpt517jdjBywWPfq3i2FdkU2yeuRNMLCkUN'),
(6, 'Kepala Sekolah', 'sman1kupe@gmail.com', 'kepsek', '$2y$10$4FznU7ah/9SfC4CP3B4nNOMNTGNyNQjg55fdfHNheZjdxs5DtGZ4S', 'Kepala Sekolah', 1, ''),
(7, 'hendri2', 'hendriansyah113@gmail.com', 'hendri', '$2y$10$j54ZtoGj2olfV/1uUCad3uz.JS3Xm9Mks5184bpawfse1uV0//ubq', 'Kepala Sekolah', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `nomor_hp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_wali`
--

INSERT INTO `tb_wali` (`id`, `nisn`, `nama_wali`, `nomor_hp`) VALUES
(1, 1234, 'Saubi', 8965665),
(2, 1254, 'Saubi', 8965665),
(3, 2345, 'Saubi', 8965665),
(4, 3556, 'Saubi', 8965665),
(5, 4151, 'Bambang', 8965665),
(6, 5646, 'Saubi', 8965665),
(7, 6272, 'Saubi', 8965665),
(8, 7611, 'Saubi', 8965665),
(9, 2147483647, 'Haechan', 82256099778),
(10, 34343, 'hun', 98899);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_website`
--

CREATE TABLE `tb_website` (
  `id` int(1) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_website`
--

INSERT INTO `tb_website` (`id`, `nama_sekolah`, `poin`) VALUES
(1, 'SMAN-1 KUPE', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_kebaikan`
--
ALTER TABLE `tb_kebaikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `class_id` (`class_id`);

--
-- Indeks untuk tabel `tb_tipe_kebaikan`
--
ALTER TABLE `tb_tipe_kebaikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tipe_pelanggaran`
--
ALTER TABLE `tb_tipe_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_website`
--
ALTER TABLE `tb_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kebaikan`
--
ALTER TABLE `tb_kebaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_tipe_kebaikan`
--
ALTER TABLE `tb_tipe_kebaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tipe_pelanggaran`
--
ALTER TABLE `tb_tipe_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_wali`
--
ALTER TABLE `tb_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_website`
--
ALTER TABLE `tb_website`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD CONSTRAINT `fk_tb_pelanggaran_tipe` FOREIGN KEY (`tipe_id`) REFERENCES `tb_tipe_pelanggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

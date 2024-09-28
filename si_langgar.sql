-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 07:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nik`, `teacher_name`, `subject`) VALUES
(1, 12345678, 'Vanessa Angel S.Pd', 'Fisika'),
(2, 87654321, 'Maria Vania S.Pd', 'Kimia'),
(3, 12348765, 'Nikita Mirzani  S.Pd', 'Biologi'),
(4, 43215678, 'Ricardo Milos  S.Pd', 'Olahraga'),
(5, 567854321, 'Johny Shin  S.Pd', 'Bahasa Inggris'),
(6, 334242, 'Wulandari  S.Pd', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebaikan`
--

CREATE TABLE `tb_kebaikan` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `wali_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `point` int(11) NOT NULL,
  `reported_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kebaikan`
--

INSERT INTO `tb_kebaikan` (`id`, `nisn`, `student_id`, `class_id`, `teacher_id`, `wali_id`, `type_id`, `note`, `point`, `reported_on`) VALUES
(2, 4151, 4, 3, 2, 4, 2, 'vhvhv', 25, '2024-06-06'),
(3, 6272, 6, 3, 2, 6, 2, 'sdadasds', 25, '2024-06-08'),
(4, 2345, 2, 1, 2, 2, 4, 'Jancok bgt kamu', 0, '2024-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `wali_name` varchar(50) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `sub_class` enum('X','XI','XII') NOT NULL,
  `total_students` int(11) NOT NULL,
  `total_poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `wali_name`, `class_name`, `sub_class`, `total_students`, `total_poin`) VALUES
(1, 'Vanessa Angel', 'XII-RPL-1', 'XII', 40, 0),
(2, 'Maria Vania', 'XII-TKJ-1', 'XII', 40, 0),
(3, 'Nikita Mirzani', 'XI-AP-1', 'XI', 40, 0),
(4, 'Ricardo Milos', 'X-AK-1', 'X', 40, 0),
(5, 'Ricardo Milos', 'XII - RPL', 'XI', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `wali_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `point` int(11) NOT NULL,
  `reported_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id`, `nisn`, `student_id`, `class_id`, `teacher_id`, `wali_id`, `type_id`, `note`, `point`, `reported_on`) VALUES
(16, 7611, 5, 4, 3, 5, 1, 'Bolos Sekolah', 10, '2024-06-02'),
(18, 3556, 7, 4, 5, 7, 2, 'Tidak Rapi', 25, '2024-06-01'),
(19, 7611, 5, 4, 3, 5, 2, 'Baju dikeluarkan', 25, '2024-06-02'),
(20, 2147483647, 9, 4, 2, 9, 3, 'Rambut Panjang', 10, '2024-06-02'),
(21, 6272, 6, 3, 2, 6, 4, 'Bobo', 50, '2024-06-02'),
(22, 1234, 1, 2, 1, 1, 8, 'Buang Sampah', 5, '2024-06-02'),
(23, 5646, 3, 2, 4, 3, 3, 'Rambut Panjang', 10, '2024-06-02'),
(24, 2147483647, 9, 4, 6, 9, 4, 'Makan Terus', 50, '2024-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone_number` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `std_name`, `class_id`, `address`, `phone_number`) VALUES
(1, 1234, 'Deri Rifanudin', 2, 'Palangka Raya', 8965665),
(2, 2345, 'Hanif Ilmi', 1, 'Bekasi', 8965665),
(3, 5646, 'Sugiarto', 2, 'Bekasi', 8965665),
(4, 4151, 'Dewi Karina', 3, 'Bekasi', 8965665),
(5, 7611, 'Yuliana', 4, 'Bekasi', 8965665),
(6, 6272, 'Joko Susilo', 3, 'Bekasi', 8965665),
(7, 3556, 'Elevia Shabrina', 4, 'Bekasi', 8965665),
(8, 1254, 'Eko Wahyu', 1, 'Bekasi', 8965665),
(9, 2147483647, 'Lisa', 4, 'Jl. Gatot', 82256099778);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_kebaikan`
--

CREATE TABLE `tb_tipe_kebaikan` (
  `id` int(11) NOT NULL,
  `nama_kebaikan` text NOT NULL,
  `poin_kebaikan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tipe_kebaikan`
--

INSERT INTO `tb_tipe_kebaikan` (`id`, `nama_kebaikan`, `poin_kebaikan`) VALUES
(1, 'Berperilaku Positif dan Etika', 25),
(2, 'Kehadiran dan Kedisiplinan', 25),
(3, 'Kebersihan di Lingkungan Sekolah', 20),
(4, 'Prestasi Akademik', 50),
(5, 'Kerapian', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_pelanggaran`
--

CREATE TABLE `tb_tipe_pelanggaran` (
  `id` int(11) NOT NULL,
  `violation_name` text NOT NULL,
  `get_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tipe_pelanggaran`
--

INSERT INTO `tb_tipe_pelanggaran` (`id`, `violation_name`, `get_point`) VALUES
(1, 'Bolos', 10),
(2, 'Baju Tidak Rapi', 25),
(3, 'Rambut Gondrong', 10),
(4, 'Tidur Di Kelas', 50),
(5, 'Berkelahi', 15),
(7, 'Seks Bebas', 50),
(8, 'Buang Sampah Sembarangan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` enum('Admin','Guru','Kepala Sekolah') NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `remember_me` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `full_name`, `email`, `username`, `password`, `level`, `status`, `remember_me`) VALUES
(2, 'Yosefa Aditya Putra', 'yosefaaditya@gmail.com', 'admin', '$2y$12$5Q5kW.8ufgpKk3AMuYGpVu3Ew4xN85jTtJXOO6Wym3WPgQgw6TPZy', 'Admin', 1, 'PuRrF2IySPM5nDZ8NGvbwlYHkFB5O98sgJad7UGW0Q3JHVAjf4ymx7x6YsRcpu96'),
(3, 'Burhan', 'burhan@udin.coid', 'Burhanadc', '$2y$10$IX73HM8tB5/hEq5jC/RSbuVf4aruw8EieTi0un183Q6PRgLNbStPK', 'Admin', 1, '2reLcE8acgCYoTZPBtiGsjk1pyJFrn9xsaqXQgQtVA2K0dKwv9lVHTHzxqvGFuWw'),
(4, 'Halim', 'ulfiyaumakhoiriyah@gmail.com', 'Nurkholik22', '$2y$10$HQYQqxGCeCnxuQTvlFWV7O.3lVYJC9Gcjo.Ve9mzQpX51fUmgCqOK', 'Guru', 1, ''),
(5, 'Guru', 'guru@gmail.com', 'guruguru', '$2y$10$GG6vxWxshuRDemv7T2vWCu529eKq2GTLtfedprtgl8YProhxRa8t2', 'Guru', 1, 'o3CFBtGHtqYmaO5lVHW8d65gXrRwLjmIPcknT79NeApJ0NMJ3sjQZDfBafUxOuCg'),
(6, 'Kepala Sekolah', 'sman1kupe@gmail.com', 'kepsek', '$2y$10$4FznU7ah/9SfC4CP3B4nNOMNTGNyNQjg55fdfHNheZjdxs5DtGZ4S', 'Kepala Sekolah', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `phone_number` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_wali`
--

INSERT INTO `tb_wali` (`id`, `student_id`, `parent_name`, `phone_number`) VALUES
(1, 1, 'Saubi', 8965665),
(2, 2, 'Saubi', 8965665),
(3, 3, 'Saubi', 8965665),
(4, 4, 'Saubi', 8965665),
(5, 5, 'Bambang', 8965665),
(6, 6, 'Saubi', 8965665),
(7, 7, 'Saubi', 8965665),
(8, 8, 'Saubi', 8965665),
(9, 9, 'Haechan', 82256099778);

-- --------------------------------------------------------

--
-- Table structure for table `tb_website`
--

CREATE TABLE `tb_website` (
  `id` int(1) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_website`
--

INSERT INTO `tb_website` (`id`, `school_name`, `point`) VALUES
(1, 'SMAN-1 KUPE', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kebaikan`
--
ALTER TABLE `tb_kebaikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_nisn` (`nisn`),
  ADD KEY `idx_class_id` (`class_id`),
  ADD KEY `idx_teacher_id` (`teacher_id`),
  ADD KEY `idx_reported_on` (`reported_on`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `wali_id` (`wali_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `tb_tipe_kebaikan`
--
ALTER TABLE `tb_tipe_kebaikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tipe_pelanggaran`
--
ALTER TABLE `tb_tipe_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tb_website`
--
ALTER TABLE `tb_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kebaikan`
--
ALTER TABLE `tb_kebaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_tipe_kebaikan`
--
ALTER TABLE `tb_tipe_kebaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tipe_pelanggaran`
--
ALTER TABLE `tb_tipe_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_wali`
--
ALTER TABLE `tb_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_website`
--
ALTER TABLE `tb_website`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

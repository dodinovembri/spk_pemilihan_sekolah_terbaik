-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 01:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ulfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternative`
--

CREATE TABLE `alternative` (
  `id` int(11) NOT NULL,
  `alternative_code` varchar(100) DEFAULT NULL,
  `alternative_name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `latitude` double(18,6) DEFAULT NULL,
  `longitude` double(18,6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `voice_number` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative`
--

INSERT INTO `alternative` (`id`, `alternative_code`, `alternative_name`, `address`, `latitude`, `longitude`, `email`, `voice_number`, `description`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'A1', 'SMA Srijaya Negara Palembang', 'Bukit Lama, Ilir Barat I, Palembang City, South Sumatra 30128', -2.985557, 104.728721, 'srijaya@school.com', '021 7555222', 'SMA  Srijaya   Negara  merupakan  Mitra  Utama FKIP Unsri  dikelola oleh Badan Yayasan Srijaya Negara. Para    tenaga   pendidik   di SMA Srijaya Negara ini sebagian   besar   merupakan   para   alumni FKIP Unsri, 60% diantaranya berpendidikan S2. SMA Srijaya Negara telah  memberlakukan  jam nol,  siswa  dan  guru hadir  disekolah  pukul 06.40  WIB untuk tadarus Al-Qur’an bersama-sama. Siswa mendapatkan pelajaran tambahan  pukul 14.00  WIB s.d.  16.45 WIB untuk  hari  Senin,  Selasa, dan Rabu (Kelas Plus)', NULL, 1, '2021-02-17 05:45:00', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_value`
--

CREATE TABLE `alternative_value` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `criterion_value_id` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_value`
--

INSERT INTO `alternative_value` (`id`, `alternative_id`, `criteria_id`, `criterion_value_id`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(19, 1, 11, 4, 1, NULL, NULL, NULL, NULL),
(20, 1, 12, 7, 1, NULL, NULL, NULL, NULL),
(21, 1, 13, 10, 1, NULL, NULL, NULL, NULL),
(22, 1, 14, 16, 1, NULL, NULL, NULL, NULL),
(23, 1, 15, 21, 1, NULL, NULL, NULL, NULL),
(24, 1, 16, 27, 1, NULL, NULL, NULL, NULL),
(25, 1, 17, 31, 1, NULL, NULL, NULL, NULL),
(26, 1, 18, 36, 1, NULL, NULL, NULL, NULL),
(27, 1, 19, 42, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `criteria_code` varchar(100) DEFAULT NULL,
  `criteria_description` varchar(100) DEFAULT NULL,
  `criteria_type` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `criteria_code`, `criteria_description`, `criteria_type`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(11, 'C1', 'Akreditasi', 'benefit', 1, NULL, NULL, NULL, NULL),
(12, 'C2', 'Fasilitas', 'benefit', 1, NULL, NULL, NULL, NULL),
(13, 'C3', 'Ekstrakurikuler', 'benefit', 1, NULL, NULL, NULL, NULL),
(14, 'C4', 'Lama Berdiri', 'benefit', 1, NULL, NULL, NULL, NULL),
(15, 'C5', 'Biaya SPP', 'cost', 1, NULL, NULL, NULL, NULL),
(16, 'C6', 'Biaya Masuk', 'cost', 1, NULL, NULL, NULL, NULL),
(17, 'C7', 'Lokasi', 'benefit', 1, NULL, NULL, NULL, NULL),
(18, 'C8', 'Aksesibilitas', 'benefit', 1, NULL, NULL, NULL, NULL),
(19, 'C9', 'Jarak', 'cost', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criterion_value`
--

CREATE TABLE `criterion_value` (
  `id` int(11) NOT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criterion_value`
--

INSERT INTO `criterion_value` (`id`, `criteria_id`, `description`, `value`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 11, ' Akreditasi A', 5, 1, NULL, NULL, NULL, NULL),
(2, 11, ' Akreditasi B', 4, 1, NULL, NULL, NULL, NULL),
(3, 11, ' Akreditasi C', 3, 1, NULL, NULL, NULL, NULL),
(4, 11, ' Belum Terakdreditasi', 1, 1, NULL, NULL, NULL, NULL),
(5, 12, '> 20 Fasilitas', 5, 1, NULL, NULL, NULL, NULL),
(6, 12, ' 16 - 20 Fasilitas', 4, 1, NULL, NULL, NULL, NULL),
(7, 12, ' 11 - 15 Fasilitas', 3, 1, NULL, NULL, NULL, NULL),
(8, 12, ' 6 - 10 Fasilitas', 2, 1, NULL, NULL, NULL, NULL),
(9, 12, '1 - 5 Fasilitas ', 1, 1, NULL, NULL, NULL, NULL),
(10, 13, '> 20 Ekstrakurikuler', 5, 1, NULL, NULL, NULL, NULL),
(11, 13, '16-20 Ekstrakurikuler', 4, 1, NULL, NULL, NULL, NULL),
(12, 13, '11-15 Ekstrakurikuler ', 3, 1, NULL, NULL, NULL, NULL),
(13, 13, '6-10 Ekstrakurikuler', 2, 1, NULL, NULL, NULL, NULL),
(14, 13, '1-5 Ekstrakurikuler', 1, 1, NULL, NULL, NULL, NULL),
(15, 14, '> 60 Tahun', 5, 1, NULL, NULL, NULL, NULL),
(16, 14, '46-60 Tahun', 4, 1, NULL, NULL, NULL, NULL),
(17, 14, '31-45 Tahun', 3, 1, NULL, NULL, NULL, NULL),
(18, 14, '16-30 Tahun', 2, 1, NULL, NULL, NULL, NULL),
(19, 14, '1-15 Tahun', 1, 1, NULL, NULL, NULL, NULL),
(20, 15, '< Rp 250.000', 5, 1, NULL, NULL, NULL, NULL),
(21, 15, 'Rp 251.000 – Rp 500.000', 4, 1, NULL, NULL, NULL, NULL),
(22, 15, 'Rp 501.000 – Rp 750.000', 3, 1, NULL, NULL, NULL, NULL),
(23, 15, 'Rp 751.000 – Rp 1.000.000', 2, 1, NULL, NULL, NULL, NULL),
(24, 15, '> Rp 1.000.000', 1, 1, NULL, NULL, NULL, NULL),
(25, 16, '< Rp 2.000.000', 5, 1, NULL, NULL, NULL, NULL),
(26, 16, 'Rp 2.001.000 – Rp 4.000.000', 4, 1, NULL, NULL, NULL, NULL),
(27, 16, 'Rp 4.001.000 – Rp 6.000.000', 3, 1, NULL, NULL, NULL, NULL),
(28, 16, 'Rp 6.001.000 – Rp 8.000.000', 2, 1, NULL, NULL, NULL, NULL),
(29, 16, '> Rp 8.000.000', 1, 1, NULL, NULL, NULL, NULL),
(30, 17, 'Di pinggir jalan besar (jalan raya)', 5, 1, NULL, NULL, NULL, NULL),
(31, 17, 'Di dekat wilayah perkantoran', 4, 1, NULL, NULL, NULL, NULL),
(32, 17, 'Di dekat wilayah permukiman warga', 3, 1, NULL, NULL, NULL, NULL),
(33, 17, 'Di pinggir jalan kecil (lorong/gang)', 2, 1, NULL, NULL, NULL, NULL),
(34, 17, 'Di dekat wilayah pertokoan', 1, 1, NULL, NULL, NULL, NULL),
(35, 18, 'Terdapat Akses Kendaraan Umum', 5, 1, NULL, NULL, NULL, NULL),
(36, 18, 'Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat', 4, 1, NULL, NULL, NULL, NULL),
(37, 18, 'Tidak Terdapat Akses Kendaraan Umum Namun Lalu Lintas Lancar', 3, 1, NULL, NULL, NULL, NULL),
(38, 18, 'Tidak Terdapat Akses Kendaraan Umum Dan Lalu Lintas Tidak Lancar', 1, 1, NULL, NULL, NULL, NULL),
(39, 19, '< 2 km', 5, 1, NULL, NULL, NULL, NULL),
(40, 19, '2.1 km – 4 km', 4, 1, NULL, NULL, NULL, NULL),
(41, 19, '4.1 km – 6 km', 3, 1, NULL, NULL, NULL, NULL),
(42, 19, '6.1 km – 8 km', 2, 1, NULL, NULL, NULL, NULL),
(43, 19, '> 8 km', 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT 1,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(10, 'Nurul Ulfa', 'ulfa@gmail.com', '23111cf70745859063eec8a99d6206d9', NULL, '60329fbbdca17.png', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_weight`
--

CREATE TABLE `user_weight` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `importance_scale` int(11) DEFAULT NULL,
  `weight_fixes` double(18,6) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_weight`
--

INSERT INTO `user_weight` (`id`, `user_id`, `criteria_id`, `importance_scale`, `weight_fixes`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(5, 10, 11, 5, NULL, 1, NULL, NULL, NULL, NULL),
(6, 10, 12, 5, NULL, 1, NULL, NULL, NULL, NULL),
(7, 10, 13, 4, NULL, 1, NULL, NULL, NULL, NULL),
(8, 10, 14, 4, NULL, 1, NULL, NULL, NULL, NULL),
(9, 10, 15, 5, NULL, 1, NULL, NULL, NULL, NULL),
(10, 10, 16, 5, NULL, 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_value`
--
ALTER TABLE `alternative_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_weight`
--
ALTER TABLE `user_weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alternative_value`
--
ALTER TABLE `alternative_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `criterion_value`
--
ALTER TABLE `criterion_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_weight`
--
ALTER TABLE `user_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

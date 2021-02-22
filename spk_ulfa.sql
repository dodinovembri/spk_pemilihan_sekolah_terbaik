-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 01:01 AM
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `criterion_value`
--
ALTER TABLE `criterion_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

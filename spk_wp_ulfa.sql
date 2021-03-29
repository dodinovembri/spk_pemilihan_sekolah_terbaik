-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 08:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_wp_ulfa`
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
  `accreditation` varchar(3) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `spp_cost` bigint(20) DEFAULT NULL,
  `entry_fee` bigint(20) DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative`
--

INSERT INTO `alternative` (`id`, `alternative_code`, `alternative_name`, `address`, `latitude`, `longitude`, `email`, `voice_number`, `description`, `image`, `accreditation`, `age`, `spp_cost`, `entry_fee`, `distance`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(6, 'A3', 'SMA Az-Zahrah Palembang', 'Jl. Telaga Komp. Masjid Taqwa Palembang, 30 Ilir, Kec. Ilir Barat II, Palembang', -2.986860, 104.742990, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(7, 'A4', 'SMA Xaverius 03 Palembang', 'Jl. Kol Atmo No. 132 Plg, 17 Ilir, Kec. Ilir Timur I, Kota Palembang Prov. Sumatera Selatan', -2.982510, 104.759240, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(8, 'A5', 'SMA Bina Karya Palembang', ' Jl. Letnan Kasnariyansyah 1200 Plg, 20 Ilir I, Kec. Ilir Timur I, Kota Palembang Prov. Sumatera Selatan', -2.957960, 104.731980, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(9, 'A6', 'SMA Kusuma Bangsa Palembang', ' Jl. Residen H. Abdul Rozak Plg, 8 Ilir, Kec. Ilir Timur Ii, Kota Palembang Prov. Sumatera Selatan', -2.949390, 104.776960, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(10, 'A7', 'SMA Xaverius 04 Palembang', 'Jl. Bangau No. 60/1258 Plg, 9 Ilir, Kec. Ilir Timur Ii, Kota Palembang Prov. Sumatera Selatan', -2.965890, 104.764400, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(11, 'A8', 'SMA Xaverius 02 Palembang', 'Jl. Sukabangun 1 Plg, Sukabangun, Kec. Sukarami, Kota Palembang Prov. Sumatera Selatan', -2.937880, 104.737630, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(12, 'A9', 'SMA Methodist 01 Palembang', ' Jl. Jend. Sudirman Km. 3.5 Palembang, Pahlawan, Kec. Kemuning, Kota Palembang Prov. Sumatera Selatan', -2.964010, 104.745930, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(13, 'A10', 'SMA Muhammadiyah 01 Palembang', 'Jl. Balayudha Km. 4,5 No. 21a Plg, Ario Kemuning, Kec. Kemuning, Kota Palembang Prov. Sumatera Selatan', -2.958320, 104.739290, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(14, 'A11', 'SMA LTI IGM Palembang', 'Jl. Kol.H.Burlian Km. 9,5 Palembang, Karya Baru, Kec. Alang-Alang Lebar, Kota Palembang Prov. Sumatera Selatan', -2.921720, 104.708980, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(15, 'A12', 'SMA PUSRI Palembang', 'Jl. Mayor Zen Palembang, Sei Selincah, Kec. Kalidoni, Kota Palembang Prov. Sumatera Selatan', -2.968760, 104.818580, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(16, 'A13', 'SMA Bina Lestari Palembang', 'Jl. Kadir Tkr Palembang, 36 Ilir, Kec. Gandus, Kota Palembang Prov. Sumatera Selatan', -3.013800, 104.741500, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(17, 'A14', 'SMA Muhammadiyah 08 Palembang', 'Jl. Tp.Sopyan Kenawas, Gandus, Kec. Gandus, Kota Palembang Prov. Sumatera Selatan', -3.010280, 104.687310, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(18, 'A15', 'SMA PGRI 02 Palembang', 'Jl. Jend. A Yani Palembang, 9/10 Ulu, Kec. Seberang Ulu I, Kota Palembang Prov. Sumatera Selatan', -2.961190, 104.822500, '', '', ' ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(22, 'A16', 'SMA ', 'Jl.', 0.000000, 0.000000, 'sma@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(23, 'A1', 'SMA Srijaya Negara Palembang', 'Jl. Ogan Komp FKIP UNSRI, Bukit Lama, Kec. Ilir Barat I, Kota Palembang Prov. Sumatera Selatan', -2.985557, 104.728721, 'srijaya@school.com', '0711-363095', 'SMA Srijaya Negara merupakan Mitra Utama FKIP Unsri dikelola oleh Badan Yayasan Srijaya Negara. Para tenaga pendidik di SMA Srijaya Negara ini sebagian besar merupakan para alumni FKIP Unsri, 60% diantaranya berpendidikan S2. SMA Srijaya Negara telah memberlakukan jam nol, siswa dan guru hadir disekolah pukul 06.40 WIB untuk tadarus Al-Qur’an bersama-sama. Siswa mendapatkan pelajaran tambahan pukul 14.00 WIB s.d. 16.45 WIB untuk hari Senin, Selasa, dan Rabu (Kelas Plus).', '6061569b11c36.jpg', 'A', 51, 2500000, 10000000, 4.43, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_accessibility`
--

CREATE TABLE `alternative_accessibility` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `accessibility` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_accessibility`
--

INSERT INTO `alternative_accessibility` (`id`, `alternative_id`, `accessibility`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_accessibility_asset`
--

CREATE TABLE `alternative_accessibility_asset` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_accessibility_asset`
--

INSERT INTO `alternative_accessibility_asset` (`id`, `alternative_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'download (3).jpg', 1, NULL, NULL, NULL, NULL),
(2, 23, '1d0e69fee2805d1ac00502db606bd6c6_1.jpg', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_extracurricular`
--

CREATE TABLE `alternative_extracurricular` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `extracurricular` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_extracurricular`
--

INSERT INTO `alternative_extracurricular` (`id`, `alternative_id`, `extracurricular`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Pramuka', 1, NULL, NULL, NULL, NULL),
(2, 23, 'Paskibra', 1, NULL, NULL, NULL, NULL),
(3, 23, 'Futsal', 1, NULL, NULL, NULL, NULL),
(4, 23, 'Softball', 1, NULL, NULL, NULL, NULL),
(5, 23, 'Sensu', 1, NULL, NULL, NULL, NULL),
(6, 23, 'Irmais ', 1, NULL, NULL, NULL, NULL),
(7, 23, 'Seni Tari', 1, NULL, NULL, NULL, NULL),
(8, 23, 'PMR', 1, NULL, NULL, NULL, NULL),
(9, 23, 'Film', 1, NULL, NULL, NULL, NULL),
(10, 23, 'KIR', 1, NULL, NULL, NULL, NULL),
(11, 23, 'Marching Band', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_facility`
--

CREATE TABLE `alternative_facility` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_facility`
--

INSERT INTO `alternative_facility` (`id`, `alternative_id`, `facility`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Ruang Kelas berAC', 1, NULL, NULL, NULL, NULL),
(2, 23, 'Lab. IPA', 1, NULL, NULL, NULL, NULL),
(3, 23, 'Lab. IPS', 1, NULL, NULL, NULL, NULL),
(4, 23, 'Lab. Komputer', 1, NULL, NULL, NULL, NULL),
(5, 23, 'Lab. Bahasa', 1, NULL, NULL, NULL, NULL),
(6, 23, 'Lap. Olahraga', 1, NULL, NULL, NULL, NULL),
(7, 23, 'UKS', 1, NULL, NULL, NULL, NULL),
(8, 23, 'Mushola', 1, NULL, NULL, NULL, NULL),
(9, 23, 'Kantin', 1, NULL, NULL, NULL, NULL),
(10, 23, 'Perpustakaan', 1, NULL, NULL, NULL, NULL),
(11, 23, 'Koperasi', 1, NULL, NULL, NULL, NULL),
(12, 23, 'Ruang Seni', 1, NULL, NULL, NULL, NULL),
(13, 23, 'Terdapat Penjaga Sekolah ', 1, NULL, NULL, NULL, NULL),
(14, 23, 'Proyektor', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_location`
--

CREATE TABLE `alternative_location` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_location`
--

INSERT INTO `alternative_location` (`id`, `alternative_id`, `location`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'Di pinggir jalan besar (jalan raya)', 1, NULL, NULL, NULL, NULL),
(4, 23, 'Di dekat wilayah pertokoan', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_location_asset`
--

CREATE TABLE `alternative_location_asset` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_location_asset`
--

INSERT INTO `alternative_location_asset` (`id`, `alternative_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 23, 'WhatsApp Image 2021-01-11 at 14.55.29.jpeg', 1, NULL, NULL, NULL, NULL),
(4, 23, 'WhatsApp Image 2021-01-11 at 14.55.28.jpeg', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_requirement_document_asset`
--

CREATE TABLE `alternative_requirement_document_asset` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_requirement_document_asset`
--

INSERT INTO `alternative_requirement_document_asset` (`id`, `alternative_id`, `image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'bulkhead.jpeg', 1, NULL, NULL, NULL, NULL),
(2, 23, 'aisle.jpg', 1, NULL, NULL, NULL, NULL);

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
(73, 1, 11, 1, 1, NULL, NULL, NULL, NULL),
(74, 1, 12, 7, 1, NULL, NULL, NULL, NULL),
(75, 1, 13, 12, 1, NULL, NULL, NULL, NULL),
(76, 1, 14, 16, 1, NULL, NULL, NULL, NULL),
(77, 1, 15, 20, 1, NULL, NULL, NULL, NULL),
(78, 1, 16, 25, 1, NULL, NULL, NULL, NULL),
(79, 1, 17, 32, 1, NULL, NULL, NULL, NULL),
(80, 1, 18, 35, 1, NULL, NULL, NULL, NULL),
(81, 1, 19, 41, 1, NULL, NULL, NULL, NULL),
(82, 5, 11, 2, 1, NULL, NULL, NULL, NULL),
(83, 5, 12, 8, 1, NULL, NULL, NULL, NULL),
(84, 5, 13, 13, 1, NULL, NULL, NULL, NULL),
(85, 5, 14, 17, 1, NULL, NULL, NULL, NULL),
(86, 5, 15, 20, 1, NULL, NULL, NULL, NULL),
(87, 5, 16, 25, 1, NULL, NULL, NULL, NULL),
(88, 5, 17, 31, 1, NULL, NULL, NULL, NULL),
(89, 5, 18, 36, 1, NULL, NULL, NULL, NULL),
(90, 5, 19, 42, 1, NULL, NULL, NULL, NULL),
(91, 6, 11, 1, 1, NULL, NULL, NULL, NULL),
(92, 6, 12, 7, 1, NULL, NULL, NULL, NULL),
(93, 6, 13, 12, 1, NULL, NULL, NULL, NULL),
(94, 6, 14, 18, 1, NULL, NULL, NULL, NULL),
(95, 6, 15, 21, 1, NULL, NULL, NULL, NULL),
(96, 6, 16, 29, 1, NULL, NULL, NULL, NULL),
(97, 6, 17, 30, 1, NULL, NULL, NULL, NULL),
(98, 6, 18, 35, 1, NULL, NULL, NULL, NULL),
(99, 6, 19, 39, 1, NULL, NULL, NULL, NULL),
(100, 7, 11, 1, 1, NULL, NULL, NULL, NULL),
(101, 7, 12, 7, 1, NULL, NULL, NULL, NULL),
(102, 7, 13, 11, 1, NULL, NULL, NULL, NULL),
(103, 7, 14, 17, 1, NULL, NULL, NULL, NULL),
(104, 7, 15, 23, 1, NULL, NULL, NULL, NULL),
(105, 7, 16, 29, 1, NULL, NULL, NULL, NULL),
(106, 7, 17, 30, 1, NULL, NULL, NULL, NULL),
(107, 7, 18, 35, 1, NULL, NULL, NULL, NULL),
(108, 7, 19, 41, 1, NULL, NULL, NULL, NULL),
(109, 8, 11, 3, 1, NULL, NULL, NULL, NULL),
(110, 8, 12, 8, 1, NULL, NULL, NULL, NULL),
(111, 8, 13, 13, 1, NULL, NULL, NULL, NULL),
(112, 8, 14, 17, 1, NULL, NULL, NULL, NULL),
(113, 8, 15, 20, 1, NULL, NULL, NULL, NULL),
(114, 8, 16, 25, 1, NULL, NULL, NULL, NULL),
(115, 8, 17, 32, 1, NULL, NULL, NULL, NULL),
(116, 8, 18, 35, 1, NULL, NULL, NULL, NULL),
(117, 8, 19, 42, 1, NULL, NULL, NULL, NULL),
(118, 9, 11, 1, 1, NULL, NULL, NULL, NULL),
(119, 9, 12, 7, 1, NULL, NULL, NULL, NULL),
(120, 9, 13, 11, 1, NULL, NULL, NULL, NULL),
(121, 9, 14, 18, 1, NULL, NULL, NULL, NULL),
(122, 9, 15, 24, 1, NULL, NULL, NULL, NULL),
(123, 9, 16, 29, 1, NULL, NULL, NULL, NULL),
(124, 9, 17, 30, 1, NULL, NULL, NULL, NULL),
(125, 9, 18, 35, 1, NULL, NULL, NULL, NULL),
(126, 9, 19, 43, 1, NULL, NULL, NULL, NULL),
(127, 10, 11, 1, 1, NULL, NULL, NULL, NULL),
(128, 10, 12, 7, 1, NULL, NULL, NULL, NULL),
(129, 10, 13, 13, 1, NULL, NULL, NULL, NULL),
(130, 10, 14, 18, 1, NULL, NULL, NULL, NULL),
(131, 10, 15, 21, 1, NULL, NULL, NULL, NULL),
(132, 10, 16, 27, 1, NULL, NULL, NULL, NULL),
(133, 10, 17, 30, 1, NULL, NULL, NULL, NULL),
(134, 10, 18, 36, 1, NULL, NULL, NULL, NULL),
(135, 10, 19, 42, 1, NULL, NULL, NULL, NULL),
(145, 12, 11, 1, 1, NULL, NULL, NULL, NULL),
(146, 12, 12, 7, 1, NULL, NULL, NULL, NULL),
(147, 12, 13, 13, 1, NULL, NULL, NULL, NULL),
(148, 12, 14, 15, 1, NULL, NULL, NULL, NULL),
(149, 12, 15, 22, 1, NULL, NULL, NULL, NULL),
(150, 12, 16, 27, 1, NULL, NULL, NULL, NULL),
(151, 12, 17, 30, 1, NULL, NULL, NULL, NULL),
(152, 12, 18, 35, 1, NULL, NULL, NULL, NULL),
(153, 12, 19, 42, 1, NULL, NULL, NULL, NULL),
(154, 13, 11, 1, 1, NULL, NULL, NULL, NULL),
(155, 13, 12, 7, 1, NULL, NULL, NULL, NULL),
(156, 13, 13, 13, 1, NULL, NULL, NULL, NULL),
(157, 13, 14, 17, 1, NULL, NULL, NULL, NULL),
(158, 13, 15, 21, 1, NULL, NULL, NULL, NULL),
(159, 13, 16, 26, 1, NULL, NULL, NULL, NULL),
(160, 13, 17, 32, 1, NULL, NULL, NULL, NULL),
(161, 13, 18, 35, 1, NULL, NULL, NULL, NULL),
(162, 13, 19, 42, 1, NULL, NULL, NULL, NULL),
(163, 14, 11, 1, 1, NULL, NULL, NULL, NULL),
(164, 14, 12, 6, 1, NULL, NULL, NULL, NULL),
(165, 14, 13, 11, 1, NULL, NULL, NULL, NULL),
(166, 14, 14, 18, 1, NULL, NULL, NULL, NULL),
(167, 14, 15, 24, 1, NULL, NULL, NULL, NULL),
(168, 14, 16, 29, 1, NULL, NULL, NULL, NULL),
(169, 14, 17, 30, 1, NULL, NULL, NULL, NULL),
(170, 14, 18, 36, 1, NULL, NULL, NULL, NULL),
(171, 14, 19, 43, 1, NULL, NULL, NULL, NULL),
(172, 15, 11, 1, 1, NULL, NULL, NULL, NULL),
(173, 15, 12, 8, 1, NULL, NULL, NULL, NULL),
(174, 15, 13, 12, 1, NULL, NULL, NULL, NULL),
(175, 15, 14, 18, 1, NULL, NULL, NULL, NULL),
(176, 15, 15, 21, 1, NULL, NULL, NULL, NULL),
(177, 15, 16, 28, 1, NULL, NULL, NULL, NULL),
(178, 15, 17, 32, 1, NULL, NULL, NULL, NULL),
(179, 15, 18, 35, 1, NULL, NULL, NULL, NULL),
(180, 15, 19, 43, 1, NULL, NULL, NULL, NULL),
(181, 16, 11, 2, 1, NULL, NULL, NULL, NULL),
(182, 16, 12, 8, 1, NULL, NULL, NULL, NULL),
(183, 16, 13, 13, 1, NULL, NULL, NULL, NULL),
(184, 16, 14, 18, 1, NULL, NULL, NULL, NULL),
(185, 16, 15, 20, 1, NULL, NULL, NULL, NULL),
(186, 16, 16, 25, 1, NULL, NULL, NULL, NULL),
(187, 16, 17, 30, 1, NULL, NULL, NULL, NULL),
(188, 16, 18, 35, 1, NULL, NULL, NULL, NULL),
(189, 16, 19, 39, 1, NULL, NULL, NULL, NULL),
(190, 17, 11, 3, 1, NULL, NULL, NULL, NULL),
(191, 17, 12, 8, 1, NULL, NULL, NULL, NULL),
(192, 17, 13, 13, 1, NULL, NULL, NULL, NULL),
(193, 17, 14, 18, 1, NULL, NULL, NULL, NULL),
(194, 17, 15, 20, 1, NULL, NULL, NULL, NULL),
(195, 17, 16, 25, 1, NULL, NULL, NULL, NULL),
(196, 17, 17, 30, 1, NULL, NULL, NULL, NULL),
(197, 17, 18, 35, 1, NULL, NULL, NULL, NULL),
(198, 17, 19, 43, 1, NULL, NULL, NULL, NULL),
(199, 18, 11, 1, 1, NULL, NULL, NULL, NULL),
(200, 18, 12, 8, 1, NULL, NULL, NULL, NULL),
(201, 18, 13, 12, 1, NULL, NULL, NULL, NULL),
(202, 18, 14, 17, 1, NULL, NULL, NULL, NULL),
(203, 18, 15, 21, 1, NULL, NULL, NULL, NULL),
(204, 18, 16, 26, 1, NULL, NULL, NULL, NULL),
(205, 18, 17, 32, 1, NULL, NULL, NULL, NULL),
(206, 18, 18, 35, 1, NULL, NULL, NULL, NULL),
(207, 18, 19, 42, 1, NULL, NULL, NULL, NULL),
(208, 11, 11, 1, 1, NULL, NULL, NULL, NULL),
(209, 11, 12, 8, 1, NULL, NULL, NULL, NULL),
(210, 11, 13, 13, 1, NULL, NULL, NULL, NULL),
(211, 11, 14, 15, 1, NULL, NULL, NULL, NULL),
(212, 11, 15, 21, 1, NULL, NULL, NULL, NULL),
(213, 11, 16, 27, 1, NULL, NULL, NULL, NULL),
(214, 11, 17, 30, 1, NULL, NULL, NULL, NULL),
(215, 11, 18, 37, 1, NULL, NULL, NULL, NULL),
(216, 11, 19, 43, 1, NULL, NULL, NULL, NULL),
(1144, 23, 11, 2, 1, NULL, NULL, NULL, NULL),
(1145, 23, 12, 6, 1, NULL, NULL, NULL, NULL),
(1146, 23, 13, 10, 1, NULL, NULL, NULL, NULL),
(1147, 23, 14, 16, 1, NULL, NULL, NULL, NULL),
(1148, 23, 15, 20, 1, NULL, NULL, NULL, NULL),
(1149, 23, 16, 26, 1, NULL, NULL, NULL, NULL),
(1150, 23, 17, 30, 1, NULL, NULL, NULL, NULL),
(1151, 23, 18, 36, 1, NULL, NULL, NULL, NULL),
(1152, 23, 19, 40, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_website`
--

CREATE TABLE `alternative_website` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_website`
--

INSERT INTO `alternative_website` (`id`, `alternative_id`, `url`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 23, 'http:\\\\www.google.com', 1, NULL, NULL, NULL, NULL),
(2, 23, ' http:\\\\fb.com', 1, NULL, NULL, NULL, NULL);

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
(10, 'Nurul Ulfa', 'ulfa@gmail.com', '23111cf70745859063eec8a99d6206d9', 0, '603b9345de327.png', 1, NULL, NULL, NULL, NULL),
(16, 'Ulfa Nurul', 'nurululfah@gmail.com', 'dc82a0e0107a31ba5d137a47ab09a26b', 1, NULL, 1, NULL, NULL, NULL, NULL),
(21, 'SMA ', 'sma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, NULL, 1, NULL, NULL, NULL, NULL),
(22, 'SMA Srijaya Negara Palembang', 'srijaya@school.com', '14c87745699a0bceba539fa736acede8', 2, '604efa1fa87ca.png', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_weight`
--

CREATE TABLE `user_weight` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `importance_scale` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_weight`
--

INSERT INTO `user_weight` (`id`, `user_id`, `criteria_id`, `importance_scale`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(5, 10, 11, 5, 1, NULL, NULL, NULL, NULL),
(6, 10, 12, 5, 1, NULL, NULL, NULL, NULL),
(7, 10, 13, 4, 1, NULL, NULL, NULL, NULL),
(8, 10, 14, 4, 1, NULL, NULL, NULL, NULL),
(9, 10, 15, 5, 1, NULL, NULL, NULL, NULL),
(10, 10, 16, 5, 1, NULL, NULL, NULL, NULL),
(11, 10, 17, 4, 1, NULL, NULL, NULL, NULL),
(12, 10, 18, 4, 1, NULL, NULL, NULL, NULL),
(13, 10, 19, 5, 1, NULL, NULL, NULL, NULL),
(23, 16, 11, 5, 1, NULL, NULL, NULL, NULL),
(24, 16, 12, 3, 1, NULL, NULL, NULL, NULL),
(25, 16, 13, 4, 1, NULL, NULL, NULL, NULL),
(26, 16, 14, 2, 1, NULL, NULL, NULL, NULL),
(27, 16, 15, 4, 1, NULL, NULL, NULL, NULL),
(28, 16, 16, 5, 1, NULL, NULL, NULL, NULL),
(29, 16, 17, 5, 1, NULL, NULL, NULL, NULL),
(30, 16, 18, 4, 1, NULL, NULL, NULL, NULL),
(31, 16, 19, 5, 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_accessibility`
--
ALTER TABLE `alternative_accessibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_accessibility_asset`
--
ALTER TABLE `alternative_accessibility_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_extracurricular`
--
ALTER TABLE `alternative_extracurricular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_facility`
--
ALTER TABLE `alternative_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_location`
--
ALTER TABLE `alternative_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_location_asset`
--
ALTER TABLE `alternative_location_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_requirement_document_asset`
--
ALTER TABLE `alternative_requirement_document_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_value`
--
ALTER TABLE `alternative_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_website`
--
ALTER TABLE `alternative_website`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_weight`
--
ALTER TABLE `user_weight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `alternative_accessibility`
--
ALTER TABLE `alternative_accessibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alternative_accessibility_asset`
--
ALTER TABLE `alternative_accessibility_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alternative_extracurricular`
--
ALTER TABLE `alternative_extracurricular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `alternative_facility`
--
ALTER TABLE `alternative_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `alternative_location`
--
ALTER TABLE `alternative_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alternative_location_asset`
--
ALTER TABLE `alternative_location_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alternative_requirement_document_asset`
--
ALTER TABLE `alternative_requirement_document_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alternative_value`
--
ALTER TABLE `alternative_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1153;

--
-- AUTO_INCREMENT for table `alternative_website`
--
ALTER TABLE `alternative_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_weight`
--
ALTER TABLE `user_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD CONSTRAINT `criterion_value_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`);

--
-- Constraints for table `user_weight`
--
ALTER TABLE `user_weight`
  ADD CONSTRAINT `user_weight_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_weight_ibfk_2` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

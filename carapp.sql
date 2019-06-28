-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2019 at 11:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `username`, `password`, `created_at`, `updated_at`) VALUES
('7f4afe40-9989-11e9-b85c-a9cf56ffb037', 'Admin', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2019-06-28 06:45:43', '2019-06-28 06:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `car_type`, `car_model`, `car_amount`, `car_description`, `car_image`, `created_at`, `updated_at`) VALUES
('5edb1ec0-9986-11e9-8c59-edf70b582444', '2006 Dark Grey Automatic Land Rover Discovery III', 'SUV', 'Land Rover', '2,250,000', '<p>Discovery 3 2.7 TDV6 HSE - top of the range. In very good condition. Well maintained</p>', 'https://vimg.cheki.co.ke/xl/1_inventory1948993_1560241383.jpg', '2019-06-28 06:23:20', '2019-06-28 06:23:20'),
('86903ba0-9986-11e9-9ffa-0359c874cdaa', '2012 White Automatic Toyota Fielder', 'Saloon', 'Toyota', '1,220,000', '<p>Alloy Wheels</p>', 'https://vimg.cheki.co.ke/xl/1_inventory1942956_1561288670.jpg', '2019-06-28 06:24:27', '2019-06-28 06:24:27'),
('aa208f20-9986-11e9-b8bb-4fd1e14b5128', '2007 Automatic Land Rover Discovery III', 'SUV', 'Land Rover', '2,000,000', '<p>Discovery 3 HSE, Yr 2007,2.7cc Diesel,Auto,leather interior, 7 seater,panaromic sunroof,Trade in Accepted.price 2.0m</p>', 'https://vimg.cheki.co.ke/xl/2_inventory1931348_1558107784.jpg', '2019-06-28 06:25:27', '2019-06-28 06:25:27'),
('ce5db970-9986-11e9-8ab9-73fef5d1be1e', '2013 Black Automatic Mitsubishi Outlander', 'Outback', 'Mitsubishi', '2,280,000', '<p>New Shape Outlander - 2013 Model 2000CC - 7 seater - Fully Loaded |Radar Cruise Control Package| Alloy|Fog| Keyless Entry| Push to Start. Price is slightly negotiable!!</p>', 'https://vimg.cheki.co.ke/xl/1_inventory1937683_1560330689.jpg', '2019-06-28 06:26:27', '2019-06-28 06:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_06_28_073020_create_admins_table', 1),
(8, '2019_06_28_090109_create_cars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

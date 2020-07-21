-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 08:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketsystem`
--

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
(4, '2020_07_18_105707_create_user_models_table', 1),
(5, '2020_07_18_164427_create_users_table', 2),
(6, '2020_07_18_164658_create_password_resets_table', 2),
(7, '2020_07_19_103045_add_user_id_to_user_models', 3);

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tom', 'user1@gmail.com', NULL, '$2y$10$jEZuJPpYHyqTzlOBt1481ucHF.3B9eZW5cw7fSy4IVx7G8jt6f9OK', NULL, '2020-07-19 04:30:00', '2020-07-19 04:30:00'),
(2, 'Jerry', 'user2@gmail.com', NULL, '$2y$10$4Gy.0rJ0VhQhc1wSX84YQeywPbhFY6cBOT.CMEJIfFE2htYKmW1NO', NULL, '2020-07-19 05:43:46', '2020-07-19 05:43:46'),
(3, 'Donald', 'user3@gmail.com', NULL, '$2y$10$iDqNLkQId8IlhCPdsJtGX.GTc355NHg6Mj5OTe9wIFw.bae3SGsWC', NULL, '2020-07-19 08:04:56', '2020-07-19 08:04:56'),
(4, 'Mickey', 'email@gmail.com', NULL, '$2y$10$FkaWv.32HBKjeTAmQ8QKL.RCAPHBfq1F.qnZnaGd2DMfRr15jJly6', NULL, '2020-07-20 11:36:52', '2020-07-20 11:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

CREATE TABLE `user_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_models`
--

INSERT INTO `user_models` (`id`, `tname`, `email`, `date`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'ticket1', 'email@gmail.com', '2020-07-28', NULL, NULL, 1),
(2, 'ticket 2', 'email@gmail.com', '2020-07-19', NULL, NULL, 2),
(3, 'ticket 3', 'email@gmail.com', '2020-07-17', NULL, NULL, 1),
(4, 'ticket4', 'email@gmail.com', '2020-07-19', NULL, NULL, 1),
(5, 'ticket5', 'email@gmail.com', '2020-07-18', NULL, NULL, 1),
(6, 'ticket6', 'email@gmail.com', '2020-07-18', NULL, NULL, 1),
(7, 'ticket 7', 'email@gmail.com', '2020-07-17', NULL, NULL, 1),
(8, 'ticket1', 'email@gmail.com', '2020-07-23', NULL, NULL, 2),
(9, 'ticket 8', 'email@gmail.com', '2020-07-19', NULL, NULL, 2),
(10, 'ticket9', 'email@gmail.com', '2020-07-19', NULL, NULL, 2),
(11, 'ticket10', 'email@gmail.com', '2020-07-20', NULL, NULL, 2),
(12, 'ticket 11', 'email@gmail.com', '2020-07-20', NULL, NULL, 3),
(13, 'ticket 12', 'email@gmail.com', '2020-07-18', NULL, NULL, 3),
(14, 'ticket12', 'email@gmail.com', '2020-07-19', NULL, NULL, 3),
(15, 'ticket13', 'email@gmail.com', '2020-07-21', NULL, NULL, 3),
(16, 'ticket 14', 'email@gmail.com', '2020-07-21', NULL, NULL, 3),
(17, 'ticket15', 'email@gmail.com', '2020-07-20', NULL, NULL, 3),
(18, 'ticket16', 'email@gmail.com', '2020-07-20', NULL, NULL, 2),
(19, 'ticket1', 'email@gmail.com', '2020-07-19', NULL, NULL, 2),
(20, 'ticket15', 'email@gmail.com', '2020-07-21', NULL, NULL, 2),
(21, 'ticket 16', 'email@gmail.com', '2020-07-21', NULL, NULL, 2),
(22, 'abc', 'user@gmail.com', '2020-07-21', NULL, NULL, 3),
(23, 'ticket1', 'user@gmail.com', '2020-07-22', NULL, NULL, 4);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_models`
--
ALTER TABLE `user_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

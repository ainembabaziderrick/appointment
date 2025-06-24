-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2025 at 09:18 PM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardiology`
--

CREATE TABLE `cardiology` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `favorite_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint NOT NULL,
  `to_id` bigint NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dermatology`
--

CREATE TABLE `dermatology` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dermatology`
--

INSERT INTO `dermatology` (`id`, `name`, `contact`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ainembabazi Derrick', '0776322439', 'ceoainembabaziderrick@gmail.com', 'Nyabubale', '2025-06-23 04:10:24', '2025-06-23 04:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gynaecology`
--

CREATE TABLE `gynaecology` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `working_hours` varchar(50) NOT NULL,
  `working_days` varchar(100) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `contact`, `email`, `address`, `location`, `services`, `working_hours`, `working_days`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Mulago', '07878878372', 'derrick@gmail.com', 'kisalosalo', 'Kiryandongo', 'qwdewd,qwder,qwef', '8-12', 'mon-fri', NULL, NULL, '2025-06-22 09:08:36', '2025-06-22 09:08:51'),
(3, 'Suwara', '0785424526', 'suwara@gmail.com', 'Nyabubale', 'Nyabubale', 'qwdewd,qwder,qwef', '8-12', 'mon-fri', 'mememememe', 'image/locate/1835641311957205.jpg', '2025-06-22 11:52:53', '2025-06-22 11:52:53'),
(4, 'Suwara Pharmacy', '07878878372', 'ceoainembabaziderrick@gmail.com', 'Suwara road', 'Kiryandongo', 'dematology , jdjdkf, give away, kdjdkd, jjdhj', '8-12', 'mon-fri', 'dematology , jdjdkf, give away, kdjdkd, jjdhj', 'image/locate/1835703445601911.jpeg', '2025-06-23 04:20:28', '2025-06-23 04:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_10_999999_add_active_status_to_users', 1),
(6, '2024_07_10_999999_add_avatar_to_users', 1),
(7, '2024_07_10_999999_add_dark_mode_to_users', 1),
(8, '2024_07_10_999999_add_messenger_color_to_users', 1),
(9, '2024_07_10_999999_create_chatify_favorites_table', 1),
(10, '2024_07_10_999999_create_chatify_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oncology`
--

CREATE TABLE `oncology` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pediatrics`
--

CREATE TABLE `pediatrics` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psychiatry`
--

CREATE TABLE `psychiatry` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radiology`
--

CREATE TABLE `radiology` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`, `c_password`, `is_role`) VALUES
(1, 'Mujuni Deus', 'deus@gmail.com', NULL, '$2y$10$lAiFkQIWfTGhy8Lu7GVJUepKwqCZDmDDvOMArNuO8ysTmyKKAWFzW', 'mvo3FDPV8YI7IHxD1y3N9mCeyZKDYzLoou9kOVuIwrjLMjTiJLkW4PYZzUkZ', '2025-06-22 04:57:53', '2025-06-22 04:57:53', 0, 'avatar.png', 0, NULL, '$2y$10$37WaMeSjJUkgZgmF5LAs8uNH8PapbE0Nn8NxwtdHLfbZon19sySI6', 1),
(2, 'Mujuni Deus', 'mujuni@gmail.com', NULL, '$2y$10$HMi5WvnVYymSCvGdXNxYnOCXoX5R07xMUnVBliJXRJ1gCXOkjy33q', '6nY3JAwACBKaeikq6lP63bg9PqqvlfeYO5e7UQRmxOxwB0HJNHkbisjiqpcL', '2025-06-23 04:08:26', '2025-06-23 04:08:26', 0, 'avatar.png', 0, NULL, '$2y$10$f.bfGmxX1xRQgT1/dpl6WudN4iZiP.lcQsXxYgSTOsFLGmXeV35Xi', 3),
(3, 'Derrick Ainembabazi', 'derrick@gmail.com', NULL, '$2y$10$8HJEa7eSmHgY5MuIVBKGo.B5VeEm3QgYL2bSMdGUZHcwc6V.JvpCC', 'Rmg9vwDx7FPgP2gruw9g8OTpekLZvbHwhPaoRC4HyGwvNvD47BReEJXSXZc4', '2025-06-23 04:09:25', '2025-06-23 04:09:25', 0, 'avatar.png', 0, NULL, '$2y$10$uNpSrfr.8F7Hx5IjJLB4tOcRkqdC1RXuVe0CP9o2Kpk3GkwbPA3Zy', 2),
(4, 'Kahayori Deus', 'kahayori@gmail.com', NULL, '$2y$10$BEt2jlF6LOaWeTIJcM.kdeFTUbHWzwZmZwAVR.SChNd2TYFXL6bue', 'NHk8xdIwmdbf6EabWIsG9sAa6vnEuufMoCIfLdy14mvud3pdHXsLrQjCevhC', '2025-06-23 04:14:32', '2025-06-23 04:14:32', 0, 'avatar.png', 0, NULL, '$2y$10$6gVmrJcZsKWn3lBO1APC1.sTWmxpCX.wRzhaZa0opiD6UlyuX/Dc2', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardiology`
--
ALTER TABLE `cardiology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dermatology`
--
ALTER TABLE `dermatology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gynaecology`
--
ALTER TABLE `gynaecology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oncology`
--
ALTER TABLE `oncology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pediatrics`
--
ALTER TABLE `pediatrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `psychiatry`
--
ALTER TABLE `psychiatry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiology`
--
ALTER TABLE `radiology`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cardiology`
--
ALTER TABLE `cardiology`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dermatology`
--
ALTER TABLE `dermatology`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gynaecology`
--
ALTER TABLE `gynaecology`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oncology`
--
ALTER TABLE `oncology`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pediatrics`
--
ALTER TABLE `pediatrics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psychiatry`
--
ALTER TABLE `psychiatry`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `radiology`
--
ALTER TABLE `radiology`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

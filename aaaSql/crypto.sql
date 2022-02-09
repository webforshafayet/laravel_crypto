-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 10:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit_funds`
--

CREATE TABLE `deposit_funds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_amount` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'UNVERIFIED	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposit_funds`
--

INSERT INTO `deposit_funds` (`id`, `user_id`, `wallet_address`, `deposit_amount`, `image`, `verification`, `created_at`, `updated_at`) VALUES
(10, 9, 'q', 15, '1641220484.jpg', 'UNVERIFIED	', '2022-01-03 08:34:44', '2022-01-03 08:34:44'),
(16, 13, 'wqe', 1111, '1641390207.jpg', 'UNVERIFIED	', '2022-01-05 07:43:27', '2022-01-05 07:43:27'),
(17, 8, 'wqexxx', 120, '1641391127.jpg', 'VERIFIED', '2022-01-05 07:58:47', '2022-01-18 09:10:11'),
(18, 8, 'rty', 22, '1641391189.jpg', 'UNVERIFIED	', '2022-01-05 07:59:49', '2022-01-05 07:59:49'),
(19, 8, 'rty', 22, '1641391529.jpg', 'UNVERIFIED	', '2022-01-05 08:05:29', '2022-01-05 08:05:29'),
(20, 14, 'dfgsdfgs', 50000, '1641465754.jpg', 'UNVERIFIED	', '2022-01-06 04:42:34', '2022-01-06 04:42:34'),
(21, 8, 'eqweq', 50000, '1641644557.jpg', 'UNVERIFIED	', '2022-01-08 06:22:37', '2022-01-08 06:22:37'),
(22, 8, 'dfgsdfgs', 111, '1641644621.jpg', 'UNVERIFIED	', '2022-01-08 06:23:41', '2022-01-08 06:23:41'),
(23, 8, 'wqe', 44554, '1641644825.jpg', 'UNVERIFIED	', '2022-01-08 06:27:05', '2022-01-08 06:27:05'),
(24, 8, 'wqe', 12, '1641645454.jpg', 'UNVERIFIED	', '2022-01-08 06:37:34', '2022-01-08 06:37:34'),
(25, 8, 'rty', 22, '1641646092.jpg', 'UNVERIFIED	', '2022-01-08 06:48:12', '2022-01-08 06:48:12'),
(26, 14, 'xxxxxxx', 1111, '1641829301.jpg', 'UNVERIFIED	', '2022-01-10 09:41:41', '2022-01-10 09:41:41'),
(27, 14, 'xxxxxxx', 120, '1641829778.jpg', 'UNVERIFIED	', '2022-01-10 09:49:38', '2022-01-10 09:49:38'),
(28, 8, 'xxxxxxx', 1202, '1641889118.jpg', 'UNVERIFIED	', '2022-01-11 02:18:38', '2022-01-11 02:18:38'),
(29, 8, 'xxxxxxx', 1113, '1641889604.jpg', 'UNVERIFIED	', '2022-01-11 02:26:44', '2022-01-11 02:26:44'),
(30, 8, 'xxxxxxx', 111122, '1641889888.jpg', 'UNVERIFIED	', '2022-01-11 02:31:28', '2022-01-11 02:31:28'),
(31, 8, 'xxxxxxx', 2, '1641889958.jpg', 'UNVERIFIED	', '2022-01-11 02:32:38', '2022-01-11 02:32:38'),
(32, 8, 'xxxxxxx', 34, '1641891258.jpg', 'UNVERIFIED	', '2022-01-11 02:54:18', '2022-01-11 02:54:18'),
(36, 44, 'xxxxxxx', 111, '1642012638.jpg', 'UNVERIFIED	', '2022-01-12 12:37:18', '2022-01-12 12:37:18'),
(37, 53, 'xxxxxxx', 50, '1642155516.jpg', 'UNVERIFIED	', '2022-01-14 04:18:36', '2022-01-14 04:18:36'),
(38, 53, 'xxxxxxx', 20, '1642155766.jpg', 'UNVERIFIED	', '2022-01-14 04:22:46', '2022-01-14 04:22:46'),
(39, 53, 'xxxxxxx', 10, '1642155916.jpg', 'UNVERIFIED	', '2022-01-14 04:25:16', '2022-01-14 04:25:16'),
(40, 53, 'xxxxxxx', 3, '1642161764.jpg', 'UNVERIFIED	', '2022-01-14 06:02:44', '2022-01-14 06:02:44'),
(41, 53, 'xxxxxxx', 17, '1642167230.jpg', 'UNVERIFIED	', '2022-01-14 07:33:50', '2022-01-14 07:33:50'),
(47, 54, 'xxxxxxx', 100, '1642253444.jpg', 'UNVERIFIED	', '2022-01-15 07:30:44', '2022-01-15 07:30:44'),
(48, 55, 'xxxxxxx', 120, '1642442581.jpg', 'VERIFIED', '2022-01-17 12:03:01', '2022-01-18 11:06:43'),
(49, 55, 'xxxxxxx', 80, '1642523318.jpg', 'VERIFIED', '2022-01-18 10:28:38', '2022-01-18 14:12:23');

-- --------------------------------------------------------

--
-- Stand-in structure for view `deposit_funds_full`
-- (See below for the actual view)
--
CREATE TABLE `deposit_funds_full` (
`name` varchar(255)
,`email` varchar(255)
,`contact_number` varchar(255)
,`address` text
,`wallet_address` varchar(255)
,`deposit_amount` int(11)
,`image` varchar(255)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_02_081653_create_sessions_table', 1),
(7, '2022_01_03_051438_create_deposit_funds_table', 2),
(8, '2022_01_03_073632_create_withdraw_funds_table', 3),
(9, '2022_01_11_084737_create_transaction_histories_table', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `new_admin_finance_transaction`
-- (See below for the actual view)
--
CREATE TABLE `new_admin_finance_transaction` (
`last_withdraw` varchar(255)
,`last_deposit` varchar(255)
,`current_profit` int(255)
,`current_balance` varchar(255)
,`qpt_annuity_balance` varchar(255)
,`qpt_current_profit` varchar(255)
,`cash_benifit_balance` varchar(255)
,`created_at` timestamp
,`name` varchar(255)
,`email` varchar(255)
,`address` text
,`id` bigint(20) unsigned
,`user_id` int(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `new_deposit_funds_full`
-- (See below for the actual view)
--
CREATE TABLE `new_deposit_funds_full` (
`name` varchar(255)
,`email` varchar(255)
,`contact_number` varchar(255)
,`address` text
,`wallet_address` varchar(255)
,`deposit_amount` int(11)
,`image` varchar(255)
,`created_at` timestamp
,`user_id` int(11)
,`id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `new_withdraw_funds_full`
-- (See below for the actual view)
--
CREATE TABLE `new_withdraw_funds_full` (
`name` varchar(255)
,`email` varchar(255)
,`contact_number` varchar(255)
,`address` text
,`user_id` int(255)
,`wallet_address` varchar(255)
,`amount` int(255)
,`created_at` timestamp
,`id` bigint(20) unsigned
,`annuity_profit` varchar(255)
,`stake` varchar(255)
,`profit` varchar(255)
,`_return` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NYrVClv8AUfnZKqbzCccSXi3bDDaKOGRSW2RyAyZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWWRobVdINUJVY3ZOZ2JEN3NJaHNLZGJHU0tDOW1GUWU1bldxb2tUZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWRpcmVjdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRyWWlRRTB6NjB5d3hqR3ZQOGpHeVIuMWdxLkVKaXEzRnlBMWYuOWxIRHpvdk5tc0s4RlFydSI7fQ==', 1642541737),
('uWItkcmw5yKfUj83PQg0Y3vQWXdNnzMZlHYMm93v', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVUk3MmYzUExad2d6QkFHaGwwemI3YVNyOE5Mb2dDdmdPeENPa3k4byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iZW5lZmljaWFyeV9tYW5hZ2VtZW50Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHJZaVFFMHo2MHl3eGpHdlA4akd5Ui4xZ3EuRUppcTNGeUExZi45bEhEem92Tm1zSzhGUXJ1Ijt9', 1642542544);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_histories`
--

CREATE TABLE `transaction_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_deposit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_profit` int(255) DEFAULT NULL,
  `current_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qpt_annuity_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qpt_current_profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_benifit_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_id` int(255) DEFAULT NULL,
  `verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'UNVERIFIED',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_histories`
--

INSERT INTO `transaction_histories` (`id`, `last_withdraw`, `last_deposit`, `current_profit`, `current_balance`, `qpt_annuity_balance`, `qpt_current_profit`, `cash_benifit_balance`, `user_id`, `verification`, `created_at`, `updated_at`) VALUES
(2, '$333', '$23', 0, '$214588.5', '$5.10505183146', '$0.24309770626', '34', 8, 'UNVERIFIED', '2022-01-11 02:53:53', '2022-01-18 13:53:09'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, '15', 13, 'UNVERIFIED', '2022-01-11 05:55:49', '2022-01-18 13:20:37'),
(10, '$150', '$2004', 0, '$157.5', '$0.0036630027', '$0.0001744287', '33', 38, 'UNVERIFIED', '2022-01-11 11:14:24', '2022-01-13 14:35:06'),
(11, '$0', '$111', 0, '$116.55', '$0.002665985679', '$0.000126951699', '0', 44, 'UNVERIFIED', '2022-01-12 12:46:19', '2022-01-12 12:46:19'),
(12, '$333', '$45454', 0, '$262350.9', '$5.967979261272', '$0.284189488632', '0', 8, 'UNVERIFIED', '2022-01-13 04:38:03', '2022-01-13 04:38:03'),
(13, '$333', '$45454', 0, '$262350.9', '$5.968440998856', '$0.284211476136', '0', 8, 'UNVERIFIED', '2022-01-13 04:39:13', '2022-01-13 04:39:13'),
(14, '$40', '$10', 2, '$42', '$44', '$4.8', '55', 53, 'UNVERIFIED', '2022-01-14 04:27:42', '2022-01-14 06:00:11'),
(15, '10', '3', 2, '35', '$44', '$4.8', '0', 53, 'UNVERIFIED', '2022-01-14 06:45:06', '2022-01-14 06:45:06'),
(16, '0', '0', 0, '0', '0', '0', '0', 53, 'UNVERIFIED', '2022-01-14 06:46:54', '2022-01-14 06:50:10'),
(17, '10', '17', 20, '50', '5', '10', '15', 53, 'UNVERIFIED', '2022-01-14 07:34:12', '2022-01-14 07:36:40'),
(18, '10', '17', 20, '70', '5', '15', '0', 53, 'UNVERIFIED', '2022-01-14 07:37:08', '2022-01-14 07:37:08'),
(19, '50', '100', 0, '50', '0', '0', '0', 54, 'UNVERIFIED', '2022-01-15 07:31:21', '2022-01-15 07:31:21'),
(20, '0', '120', 0, '120', '0', '0', '0', 55, 'UNVERIFIED', '2022-01-17 12:03:09', '2022-01-17 12:03:09'),
(21, '50', '120', 0, '70', '0', '0', '0', 55, 'UNVERIFIED', '2022-01-18 12:39:27', '2022-01-18 12:39:27'),
(22, '50', '120', 0, '70', '0', '0', '0', 55, 'VERIFIED', '2022-01-18 13:33:43', '2022-01-18 13:58:56'),
(23, '50', '120', 8, '70', '0', '0', '10.5', 55, 'VERIFIED', '2022-01-18 14:00:33', '2022-01-18 14:02:00'),
(24, '50', '120', 8, '78', '0', '10.5', '8', 55, 'VERIFIED', '2022-01-18 14:02:33', '2022-01-18 14:19:42'),
(25, '50', '120', 9, '78', '0', '0', '0', 55, 'VERIFIED', '2022-01-18 14:05:26', '2022-01-18 14:07:53'),
(26, '50', '120', 9, '79', '0', '0', '0', 55, 'UNVERIFIED', '2022-01-18 14:08:32', '2022-01-18 14:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_package` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequent_deposit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ben_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ben_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ben_relationship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ben_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_cover_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_deposit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qpt_annuity_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qpt_current_profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Upload_front_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Upload_back_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Upload_selfie_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'UNVERIFIED',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `last_name`, `contact_number`, `choose_package`, `country`, `sum`, `frequent_deposit`, `address`, `state`, `city`, `date`, `sex`, `ben_name`, `ben_number`, `ben_relationship`, `ben_percentage`, `select_cover_duration`, `last_withdraw`, `last_deposit`, `current_profit`, `current_balance`, `qpt_annuity_balance`, `qpt_current_profit`, `qpt`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `Upload_front_photo_path`, `Upload_back_photo_path`, `Upload_selfie_photo_path`, `verification`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-01-06 12:43:22', '$2y$10$rYiQE0z60ywxjGvP8jGyR.1gq.EJiq3FyA1f.9lHDzovNmsK8FQru', NULL, NULL, NULL, NULL, '1641214352.jpg', NULL, NULL, NULL, 'VERIFIED', '2022-01-02 02:46:23', '2022-01-10 07:30:17'),
(8, 'user1', 'user1@gmail.com', 'user1', '21331', 'Starter', 'USA', '234', '1234', 'wwwww', 'qqqqqqq', 'qqqqqq', '2022-01-28', 'Female', 'qqqqqqqq', 'qqqqqqqd', 'Auntie', '33', '9 Months', '$333', '$1202', '$4606.65', '$96739.65', '$2.278797260607', '$0.108514155267', NULL, '0', '2022-01-06 09:37:42', '$2y$10$xHg2FZbISj/2pJh68noMBOZ9.IZ9qMQ282tLxCmuCLF9VbN7gy.E2', NULL, NULL, '9ZHJoywux5MgUwGu6xm7HMsVHHALD3PyoY3qyqO1rpkZuvmfMbQ1V0FgBDmH', NULL, '1641214352.jpg', '1641798919.jpg', '1641798919.jpg', '1641798919.jpg', 'UNVERIFIED', '2022-01-03 05:58:55', '2022-01-13 16:31:20'),
(38, 'user3', 'user3@gmail.com', 'a', '111', 'Starter', 'Bangladesh', '234', '1234', 'wwwww', 'qqqqqqq', 'qqqqqq', '2022-01-12', 'Female', 'qqqqqqqq', 'wwww', 'Sister', '30', '3 Months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-11 11:10:36', '$2y$10$DJjYw9zC.3fv8tWKKvIaJ.lKhE7Sc1Y.ZYZoy23CloxO5uBX9xWR2', NULL, NULL, NULL, NULL, '1641921299.jpg', '1641921395.jpg', '1641921395.jpg', '1641921395.jpg', 'VERIFIED', '2022-01-11 11:10:09', '2022-01-13 16:16:00'),
(48, 'shohan123boss@gmail.com', 'shohan123boss@gmail.com', NULL, '3333333333', 'Professional', NULL, '12345', '1234', 'wwwww', 'qqqqqqq', 'qqqqqq', '2022-01-25', 'Male', 'qqqqqqqq', 'qqqqqqq', 'Cousin', '1', '1 Month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-13 16:42:14', '$2y$10$CBhS/zbA9xdrmCZNNY0nHO9Oz9h.QLA043TlpdI7ugChGkF.gTCyC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-13 16:35:21', '2022-01-13 16:42:14'),
(49, 'user4', 'user4@gmail.com', 'user1', '234567', 'Qpt Fixed Annuity', 'Bangladesh', '234', '1234', 'wwwww', 'qqqqqqq', 'qqqqqq', '2022-01-25', 'Male', 'qqqqqqqq', 'qqqqqqqd', 'Mother', '36', '1 Month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-14 03:44:12', '$2y$10$oRE.gVMjq8.Sy9eA51TdHuO/LGpcDl9P2lztcY9r3PAl8YARR0fnG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-14 03:43:43', '2022-01-14 03:44:12'),
(50, 'user6', 'user6@gmail.com', 'user1', '234567', 'Premium', 'France', '234', '1234', NULL, NULL, NULL, NULL, 'Choose an option', NULL, NULL, 'Choose an option', '1', '6 Months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '$2y$10$XD9DTtcpTABXTljtUwJ05u3JNycvOOHQ8XzlQlHezMvW9.WMzgW8C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-14 03:54:45', '2022-01-14 03:54:45'),
(51, 'user7', 'user7@gmail.com', 'user1', '3333333333', 'Premium', 'Bangladesh', '234', '1234', 'wwwww', 'qqqqqqq', 'qqqqqq', NULL, 'Choose an option', NULL, NULL, 'Choose an option', '1', '6 Months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-14 03:58:52', '$2y$10$iq0I.opRrf.miodr6W6ZZuRf4OdT6xZywdoTjM.DFnFWDGQ46dPHW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-14 03:56:25', '2022-01-14 03:58:52'),
(52, 'user8', 'user8@gmail.com', 'user1', '234567', 'Premium', 'France', '234', '1234', NULL, NULL, NULL, NULL, 'Choose an option', NULL, NULL, 'Choose an option', '1', '1 Month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-14 04:05:09', '$2y$10$SSHlNFUP5i7j8fcudJHeSuBo4tWfC/SGKG7Wpaa0r5xTqavbeysLu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-14 04:03:30', '2022-01-14 04:05:09'),
(53, 'user9', 'user9@gmail.com', 'user1', '234567', 'Premium', 'France', '12345', '1234', NULL, NULL, NULL, NULL, 'Choose an option', NULL, NULL, 'Choose an option', '1', '3 Months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-14 04:05:54', '$2y$10$8BC7ViHZ9qPxSCtl/VGk7O/X9SbBeSgPRMAVlFDQKUVaroqnxlavy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-14 04:05:42', '2022-01-14 04:05:54'),
(54, 'user10', 'user10@gmail.com', 'user1', '234567', 'Premium', 'France', '234', '1234', NULL, NULL, NULL, NULL, 'Choose an option', NULL, NULL, 'Choose an option', '1', '3 Months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-15 07:09:24', '$2y$10$/50zT7uva2CR3anDy0BpNuSHGWnc2pmtU1bxQh3Q4XFXA1rrIr73e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UNVERIFIED', '2022-01-15 07:09:00', '2022-01-15 07:09:24'),
(55, 'user11', 'user11@gmail.com', 'user1', '017777777777', 'Starter', 'France', '2343', '123444', NULL, NULL, NULL, NULL, 'Choose an option', NULL, NULL, 'Choose an option', '1', '6 Months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-17 12:02:50', '$2y$10$3N1L3D7kG7EaKQQtv/pDe.CWmVD6VlyrVhNe/C.Xac39Y6ivVrlOq', NULL, NULL, NULL, NULL, '1642540916.jpg', NULL, NULL, NULL, 'UNVERIFIED', '2022-01-17 12:02:34', '2022-01-18 15:21:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_new_deposit_funds_full`
-- (See below for the actual view)
--
CREATE TABLE `v_new_deposit_funds_full` (
`name` varchar(255)
,`email` varchar(255)
,`contact_number` varchar(255)
,`address` text
,`wallet_address` varchar(255)
,`deposit_amount` int(11)
,`image` varchar(255)
,`created_at` timestamp
,`user_id` int(11)
,`id` bigint(20) unsigned
,`verification` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_new_withdraw_funds_full`
-- (See below for the actual view)
--
CREATE TABLE `v_new_withdraw_funds_full` (
`name` varchar(255)
,`email` varchar(255)
,`contact_number` varchar(255)
,`address` text
,`user_id` int(255)
,`wallet_address` varchar(255)
,`amount` int(255)
,`created_at` timestamp
,`id` bigint(20) unsigned
,`annuity_profit` varchar(255)
,`stake` varchar(255)
,`profit` varchar(255)
,`_return` varchar(255)
,`verification` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_funds`
--

CREATE TABLE `withdraw_funds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(255) DEFAULT NULL,
  `stake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `annuity_profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'UNVERIFIED	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw_funds`
--

INSERT INTO `withdraw_funds` (`id`, `user_id`, `wallet_address`, `amount`, `stake`, `profit`, `annuity_profit`, `_return`, `verification`, `created_at`, `updated_at`) VALUES
(65, 8, 'sss', 5, '8', '5', '2323', '22', 'VERIFIED', '2022-01-03 14:03:36', '2022-01-18 09:14:46'),
(66, 9, 'sss', 8, NULL, NULL, NULL, NULL, 'UNVERIFIED	', '2022-01-03 14:03:44', '2022-01-03 14:03:44'),
(71, 13, 'rty', 111, NULL, NULL, NULL, NULL, 'UNVERIFIED	', '2022-01-05 07:43:37', '2022-01-05 07:43:37'),
(72, 8, 'wqex', 10, '3', '4', '5', '6', 'VERIFIED', '2022-01-05 08:00:38', '2022-01-18 09:35:47'),
(73, 8, '34', 1, NULL, NULL, '2323', NULL, 'UNVERIFIED	', '2022-01-05 08:01:19', '2022-01-13 16:35:49'),
(74, 8, 'er', 2, NULL, NULL, NULL, NULL, 'UNVERIFIED	', '2022-01-05 08:01:28', '2022-01-05 08:01:28'),
(76, 14, 'eqweq', 20000, NULL, NULL, NULL, NULL, 'UNVERIFIED	', '2022-01-06 04:46:00', '2022-01-06 04:46:00'),
(80, 38, 'xxxxxxx', 150, NULL, NULL, NULL, NULL, 'UNVERIFIED	', '2022-01-11 11:13:39', '2022-01-11 11:13:39'),
(81, 53, 'xxxxxxx', 40, '0', '0', '0', '0', 'UNVERIFIED	', '2022-01-14 04:25:28', '2022-01-14 04:25:28'),
(82, 53, 'xxxxxxx', 10, '0', '0', '0', '0', 'UNVERIFIED	', '2022-01-14 05:27:02', '2022-01-14 05:27:02'),
(85, 54, 'xxxxxxx', 50, '0', '0', '0', '0', 'UNVERIFIED	', '2022-01-15 07:30:59', '2022-01-15 07:30:59'),
(86, 55, 'xxxxxxx', 50, '0', '0', '0', '0', 'VERIFIED', '2022-01-18 11:10:50', '2022-01-18 11:21:15'),
(87, 55, 'xxxxxxx', 100, '0', '0', '0', '0', 'UNVERIFIED', '2022-01-18 11:20:18', '2022-01-18 11:21:02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `withdraw_funds_full`
-- (See below for the actual view)
--
CREATE TABLE `withdraw_funds_full` (
`name` varchar(255)
,`email` varchar(255)
,`contact_number` varchar(255)
,`address` text
,`user_id` int(255)
,`wallet_address` varchar(255)
,`amount` int(255)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `deposit_funds_full`
--
DROP TABLE IF EXISTS `deposit_funds_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `deposit_funds_full`  AS SELECT `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`contact_number` AS `contact_number`, `users`.`address` AS `address`, `deposit_funds`.`wallet_address` AS `wallet_address`, `deposit_funds`.`deposit_amount` AS `deposit_amount`, `deposit_funds`.`image` AS `image`, `deposit_funds`.`created_at` AS `created_at` FROM (`users` join `deposit_funds` on(`users`.`id` = `deposit_funds`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `new_admin_finance_transaction`
--
DROP TABLE IF EXISTS `new_admin_finance_transaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_admin_finance_transaction`  AS SELECT `transaction_histories`.`last_withdraw` AS `last_withdraw`, `transaction_histories`.`last_deposit` AS `last_deposit`, `transaction_histories`.`current_profit` AS `current_profit`, `transaction_histories`.`current_balance` AS `current_balance`, `transaction_histories`.`qpt_annuity_balance` AS `qpt_annuity_balance`, `transaction_histories`.`qpt_current_profit` AS `qpt_current_profit`, `transaction_histories`.`cash_benifit_balance` AS `cash_benifit_balance`, `transaction_histories`.`created_at` AS `created_at`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`address` AS `address`, `transaction_histories`.`id` AS `id`, `transaction_histories`.`user_id` AS `user_id` FROM (`users` join `transaction_histories` on(`users`.`id` = `transaction_histories`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `new_deposit_funds_full`
--
DROP TABLE IF EXISTS `new_deposit_funds_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_deposit_funds_full`  AS SELECT `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`contact_number` AS `contact_number`, `users`.`address` AS `address`, `deposit_funds`.`wallet_address` AS `wallet_address`, `deposit_funds`.`deposit_amount` AS `deposit_amount`, `deposit_funds`.`image` AS `image`, `deposit_funds`.`created_at` AS `created_at`, `deposit_funds`.`user_id` AS `user_id`, `deposit_funds`.`id` AS `id` FROM (`users` join `deposit_funds` on(`users`.`id` = `deposit_funds`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `new_withdraw_funds_full`
--
DROP TABLE IF EXISTS `new_withdraw_funds_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_withdraw_funds_full`  AS SELECT `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`contact_number` AS `contact_number`, `users`.`address` AS `address`, `withdraw_funds`.`user_id` AS `user_id`, `withdraw_funds`.`wallet_address` AS `wallet_address`, `withdraw_funds`.`amount` AS `amount`, `withdraw_funds`.`created_at` AS `created_at`, `withdraw_funds`.`id` AS `id`, `withdraw_funds`.`annuity_profit` AS `annuity_profit`, `withdraw_funds`.`stake` AS `stake`, `withdraw_funds`.`profit` AS `profit`, `withdraw_funds`.`_return` AS `_return` FROM (`users` join `withdraw_funds` on(`users`.`id` = `withdraw_funds`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_new_deposit_funds_full`
--
DROP TABLE IF EXISTS `v_new_deposit_funds_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_new_deposit_funds_full`  AS SELECT `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`contact_number` AS `contact_number`, `users`.`address` AS `address`, `deposit_funds`.`wallet_address` AS `wallet_address`, `deposit_funds`.`deposit_amount` AS `deposit_amount`, `deposit_funds`.`image` AS `image`, `deposit_funds`.`created_at` AS `created_at`, `deposit_funds`.`user_id` AS `user_id`, `deposit_funds`.`id` AS `id`, `deposit_funds`.`verification` AS `verification` FROM (`users` join `deposit_funds` on(`users`.`id` = `deposit_funds`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_new_withdraw_funds_full`
--
DROP TABLE IF EXISTS `v_new_withdraw_funds_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_new_withdraw_funds_full`  AS SELECT `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`contact_number` AS `contact_number`, `users`.`address` AS `address`, `withdraw_funds`.`user_id` AS `user_id`, `withdraw_funds`.`wallet_address` AS `wallet_address`, `withdraw_funds`.`amount` AS `amount`, `withdraw_funds`.`created_at` AS `created_at`, `withdraw_funds`.`id` AS `id`, `withdraw_funds`.`annuity_profit` AS `annuity_profit`, `withdraw_funds`.`stake` AS `stake`, `withdraw_funds`.`profit` AS `profit`, `withdraw_funds`.`_return` AS `_return`, `withdraw_funds`.`verification` AS `verification` FROM (`users` join `withdraw_funds` on(`users`.`id` = `withdraw_funds`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `withdraw_funds_full`
--
DROP TABLE IF EXISTS `withdraw_funds_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `withdraw_funds_full`  AS SELECT `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`contact_number` AS `contact_number`, `users`.`address` AS `address`, `withdraw_funds`.`user_id` AS `user_id`, `withdraw_funds`.`wallet_address` AS `wallet_address`, `withdraw_funds`.`amount` AS `amount`, `withdraw_funds`.`created_at` AS `created_at` FROM (`users` join `withdraw_funds` on(`users`.`id` = `withdraw_funds`.`user_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit_funds`
--
ALTER TABLE `deposit_funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdraw_funds`
--
ALTER TABLE `withdraw_funds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit_funds`
--
ALTER TABLE `deposit_funds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `withdraw_funds`
--
ALTER TABLE `withdraw_funds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

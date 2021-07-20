-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2021 at 02:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `created_at`, `updated_at`) VALUES
(1, 'ByFast Net siap membantu bisnis digital Anda', 'Solusi komunikasi maya yang selalu tersedia untuk anda. Karena kepuasan pelanggan adalah prioritas kami.', 'Internet super cepat up to 1Gbps', 'Telepon dan TV Kabel dengan lebih dari 1000 channel ', 'Layanan cloud storage yang dapat diakses darimana saja', '2021-07-19 05:56:40', '2021-07-19 05:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pakets`
--

CREATE TABLE `kategori_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pakets`
--

INSERT INTO `kategori_pakets` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Terbaru', 'Paket ini adalah paket terbaru', '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(2, 'Terpopuler', 'Paket ini adalah paket terpopuler', '2021-07-19 05:56:40', '2021-07-19 05:56:40');

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
(113, '2014_10_12_000000_create_users_table', 1),
(114, '2014_10_12_100000_create_password_resets_table', 1),
(115, '2019_08_19_000000_create_failed_jobs_table', 1),
(116, '2021_07_16_135517_create_kategori_pakets_table', 1),
(117, '2021_07_16_135616_create_pakets_table', 1),
(118, '2021_07_16_135840_create_topping_pakets_table', 1),
(119, '2021_07_16_135915_create_about_us_table', 1),
(120, '2021_07_16_140000_create_pemesanans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_pakets_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `kategori_pakets_id`, `name`, `desc`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Paket Internet 10 Mbps', 'Paket internet dengan kecepatan internet up to 10 Mbps', 180000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(2, 1, 'Paket Internet 20 Mbps', 'Paket internet dengan kecepatan internet up to 20 Mbps', 275000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(3, 1, 'Paket Internet 1 Gbps', 'Paket internet dengan kecepatan internet up to 1 Gbps', 950000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(4, 2, 'Paket Internet 30 Mbps', 'Paket internet dengan kecepatan internet up to 30 Mbps', 315000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(5, 2, 'Paket Internet 40 Mbps', 'Paket internet dengan kecepatan internet up to 40 Mbps', 350000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(6, 2, 'Paket Internet 50 Mbps', 'Paket internet dengan kecepatan internet up to 50 Mbps', 485000, '2021-07-19 05:56:40', '2021-07-19 05:56:40');

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
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pakets_id` bigint(20) UNSIGNED NOT NULL,
  `topping_pakets_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_pemesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pemesanan` enum('pending','proses','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topping_pakets`
--

CREATE TABLE `topping_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topping_pakets`
--

INSERT INTO `topping_pakets` (`id`, `name`, `desc`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'telepon 100 menit', 'pelanggan mendapat bonus telepon rumah selama 100 menit', 25000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(2, '25 chanel tv', 'pelanggan mendapat bonus 25 chanel tv', 50000, '2021-07-19 05:56:40', '2021-07-19 05:56:40'),
(3, '50 chanel tv', 'pelanggan mendapat bonus 50 chanel tv', 100000, '2021-07-19 05:56:40', '2021-07-19 05:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin ByFastNet', 'admin@gmail.com', '$2y$10$AKV07Y5oHUtt8BowSRF3S.xFyMC.MRlkQ9Cee.eJqdrRgEamBJV5a', NULL, NULL, NULL, NULL),
(2, 'Firman Asharuddin', 'AdminPWL2021', '$2y$10$tAjKTx6EKyf/77rTzn4c8.PalSJxn.h4za6rrnPFnyFMA2kw6zVbG', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pakets`
--
ALTER TABLE `kategori_pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pakets_kategori_pakets_id_foreign` (`kategori_pakets_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanans_pakets_id_foreign` (`pakets_id`),
  ADD KEY `pemesanans_topping_pakets_id_foreign` (`topping_pakets_id`);

--
-- Indexes for table `topping_pakets`
--
ALTER TABLE `topping_pakets`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_pakets`
--
ALTER TABLE `kategori_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topping_pakets`
--
ALTER TABLE `topping_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pakets`
--
ALTER TABLE `pakets`
  ADD CONSTRAINT `pakets_kategori_pakets_id_foreign` FOREIGN KEY (`kategori_pakets_id`) REFERENCES `kategori_pakets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanans_pakets_id_foreign` FOREIGN KEY (`pakets_id`) REFERENCES `pakets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanans_topping_pakets_id_foreign` FOREIGN KEY (`topping_pakets_id`) REFERENCES `topping_pakets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

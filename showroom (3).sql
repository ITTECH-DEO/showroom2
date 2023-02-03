-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 22 Jan 2023 pada 20.04
-- Versi server: 8.0.31
-- Versi PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `about` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `image`, `created_at`, `updated_at`) VALUES
(1, 'hola ini baru', 'admin/images/about/Ferrari-F8-Spider-2021-1.jpg', '2023-01-13 08:00:12', '2023-01-13 08:00:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banks`
--

INSERT INTO `banks` (`id`, `name_bank`, `no_rek`, `an`, `created_at`, `updated_at`) VALUES
(1, 'BCA', '09876422222', 'Fadil', NULL, NULL),
(2, 'asdsadsa', '321432432', 'sadsa', '2022-12-19 17:05:55', '2022-12-19 17:05:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banneraboutuses`
--

DROP TABLE IF EXISTS `banneraboutuses`;
CREATE TABLE IF NOT EXISTS `banneraboutuses` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `banneraboutuses`
--

INSERT INTO `banneraboutuses` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin/images/cars/rBxO9IOUzrTbnUmugi8XUeOSOfypYG6-tt9amwlj2Eg=_plaintext_638098043862885876.jpg', '2023-01-22 15:28:27', '2023-01-22 15:28:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bannercontacts`
--

DROP TABLE IF EXISTS `bannercontacts`;
CREATE TABLE IF NOT EXISTS `bannercontacts` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bannercontacts`
--

INSERT INTO `bannercontacts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin/images/cars/Jmf4byYYPwB7NLpl-mDpYXJIOMN7xVsUCsIK_rZrQhw=_plaintext_638098043862606037.jpg', '2023-01-22 16:01:19', '2023-01-22 16:01:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bannerhomepages`
--

DROP TABLE IF EXISTS `bannerhomepages`;
CREATE TABLE IF NOT EXISTS `bannerhomepages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bannerhomepages`
--

INSERT INTO `bannerhomepages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'admin/images/cars/8oUtSLEcpuQCUEn34kwnl5czye9YOQUb5YI7Y-Vd0hs=_plaintext_638098043862176317.jpg', '2023-01-22 15:08:13', '2023-01-22 15:08:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin/images/cars/1847606623-img_car.jpg', NULL, NULL),
(3, 'admin/images/cars/Jmf4byYYPwB7NLpl-mDpYXJIOMN7xVsUCsIK_rZrQhw=_plaintext_638098043862606037.jpg', '2023-01-21 03:46:49', '2023-01-21 03:46:49'),
(6, 'admin/images/cars/rBxO9IOUzrTbnUmugi8XUeOSOfypYG6-tt9amwlj2Eg=_plaintext_638098043862885876.jpg', '2023-01-22 14:49:02', '2023-01-22 14:49:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_car` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_car` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_car` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_car2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fisrt_registartion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `millage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` bigint UNSIGNED NOT NULL,
  `whatsapp_id` bigint UNSIGNED DEFAULT NULL,
  `vendor_id` bigint UNSIGNED NOT NULL,
  `day_price` bigint UNSIGNED NOT NULL,
  `tahun` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cars_status_id_foreign` (`status_id`),
  KEY `cars_whatsapp_id_foreign` (`whatsapp_id`),
  KEY `cars_vendor_id_foreign` (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`id`, `name_car`, `type_car`, `img_car`, `img_car2`, `img_car3`, `img_car4`, `img_car_lainnya`, `img_car_lainnya2`, `img_car_lainnya3`, `img_car_lainnya4`, `doors`, `seats`, `model`, `description`, `fisrt_registartion`, `millage`, `fuel`, `engine_size`, `power`, `color`, `status_id`, `whatsapp_id`, `vendor_id`, `day_price`, `tahun`, `created_at`, `updated_at`) VALUES
(6, 'Ferarri tod', 'Matic', 'admin/images/cars/1847606623-img_car.jpg', 'admin/images/cars/1275293151-img_car2.jpg', 'admin/images/cars/1893790539-img_car3.jpg', 'admin/images/cars/1764804640-img_car4.jpg', NULL, NULL, NULL, NULL, '2', '2', 'GTB', '', '2023-11-02', '200km', 'bensin', '2000cc', '720 HP', 'Merah', 2, 1, 1, 10000000000, '2012', '2023-01-02 10:23:40', '2023-01-22 10:34:15'),
(7, 'Ferarri 10', 'Manual', 'admin/images/cars/1782305035-img_car.jpg', 'admin/images/cars/1938823899-img_car2.jpg', 'admin/images/cars/1543105505-img_car3.jpg', 'admin/images/cars/20474817-img_car4.jpg', 'admin/images/cars/20474817-img_car4.jpg', 'admin/images/cars/20474817-img_car4.jpg', 'admin/images/cars/20474817-img_car4.jpg', 'admin/images/cars/20474817-img_car4.jpg', '2', '2', 'GTB', '', '2022-11-02', '200km', 'bensin', '3500cc', '720 HP', 'Merah', 2, 1, 3, 10000000000, '2015', '2023-01-02 10:24:21', '2023-01-22 10:34:21'),
(8, 'Ferarri 99', 'Matic', 'admin/images/cars/810284537-img_car.jpg', 'admin/images/cars/1625365926-img_car2.jpg', 'admin/images/cars/1625365926-img_car2.jpg', 'admin/images/cars/1724090529-img_car4.jpg', 'admin/images/cars/1625365926-img_car2.jpg', 'admin/images/cars/1625365926-img_car2.jpg', 'admin/images/cars/1625365926-img_car2.jpg', 'admin/images/cars/1625365926-img_car2.jpg', '2', '2', 'GTB', '', '2022-11-02', '200km', 'bensin', '5000cc', '720 HP', 'Merah', 1, 1, 3, 10000000000, '2020', '2023-01-03 12:28:21', '2023-01-10 05:27:12'),
(9, 'Ferarri 480', 'Matic', 'admin/images/cars/524336081-img_car.jpeg', 'admin/images/cars/125606805-img_car2.jpg', 'admin/images/cars/1235795270-img_car3.jpg', 'admin/images/cars/1487783581-img_car4.jpg', 'admin/images/cars/mobil3.jpg', 'admin/images/cars/mobil3.jpg', NULL, NULL, '2', '2', 'GTB', '', '2022-11-02', '200km', 'bensin', '4300cc', '720 HP', 'Merah', 2, 1, 3, 10000000000, '2022', '2023-01-06 02:55:40', '2023-01-10 05:27:21'),
(10, 'Ferarri 488 GTBA', 'Matic', 'admin/images/cars/1343798538-img_car.jpg', 'admin/images/cars/1997672002-img_car2.png', 'admin/images/cars/1868159679-img_car3.png', 'admin/images/cars/477250176-img_car4.png', NULL, NULL, NULL, NULL, '2', '2', 'GTB', 'Hola ini baru ya', '2022-11-02', '200km', 'bensin', '2500cc', '720 HP', 'Merah', 2, 1, 3, 10000000000, '2023', '2023-01-07 12:08:48', '2023-01-10 05:27:27'),
(11, 'Ferarri 480', 'Matic', 'admin/images/cars/654891365-img_car.jpg', 'admin/images/cars/1740678230-img_car2.jpeg', 'admin/images/cars/1406297503-img_car3.jpg', 'admin/images/cars/1471735290-img_car4.jpg', NULL, NULL, NULL, NULL, '2', '2', 'GTB', 'asdasd', '2022-11-02', '200km', 'bensin', '3,9L V8', '720 HP', 'Merah', 2, 1, 2, 10000000000, '2022', '2023-01-13 07:56:20', '2023-01-22 10:28:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `leaderboards`
--

DROP TABLE IF EXISTS `leaderboards`;
CREATE TABLE IF NOT EXISTS `leaderboards` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `car_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `leaderboards`
--

INSERT INTO `leaderboards` (`id`, `user_id`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 2, 11, '2023-01-22 10:26:45', '2023-01-22 10:26:45'),
(2, 2, 11, '2023-01-22 10:28:41', '2023-01-22 10:28:41'),
(3, 2, 6, '2023-01-22 10:34:15', '2023-01-22 10:34:15'),
(4, 2, 7, '2023-01-22 10:34:21', '2023-01-22 10:34:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metas`
--

DROP TABLE IF EXISTS `metas`;
CREATE TABLE IF NOT EXISTS `metas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_meta_keywords` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `metas`
--

INSERT INTO `metas` (`id`, `product_meta_title`, `product_meta_description`, `product_meta_keywords`, `updated_at`, `created_at`) VALUES
(1, 'hola1', 'hola1', 'hola1', '2023-01-22 19:28:51', '2023-01-22 19:28:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_13_194538_create_vendors_table', 1),
(5, '2021_05_13_194652_create_transactions_table', 1),
(6, '2021_05_17_032151_create_table_banks', 1),
(7, '2022_12_16_222742_create_status_table', 1),
(8, '2022_12_16_232651_create_whatsapps_table', 1),
(9, '2022_12_16_232741_create_cars_table', 1),
(10, '2022_12_22_182230_create_abouts_table', 2),
(11, '2023_01_07_182411_add_description_cars', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'available', NULL, NULL),
(2, 'non-available', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code_transaction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `transaction_date` date NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_transaction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `code_transaction`, `user_id`, `car_id`, `transaction_date`, `amount`, `status_transaction`, `created_at`, `updated_at`) VALUES
(1, 'XJWW0YZYUK', 3, 6, '2022-12-20', '10000000000', 'refuse', '2022-12-19 17:14:40', '2022-12-19 17:33:00'),
(2, 'O8SJY9ES0S', 3, 7, '2022-12-20', '10000000000', 'refuse', '2022-12-19 17:14:41', '2022-12-19 17:33:03'),
(3, 'ZGKIWWHYFZ', 1, 8, '2022-12-20', '10000000000', 'refuse', '2022-12-19 17:33:15', '2022-12-19 17:33:33'),
(4, 'XMQFMAHN1V', 1, 10, '2023-01-22', '10000000000', 'agree', '2023-01-22 09:39:47', '2023-01-22 09:40:35'),
(5, 'BAUQ5AEOT6', 1, 10, '2023-01-22', '10000000000', 'process', '2023-01-22 09:39:49', '2023-01-22 09:39:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `phone_number`, `address`, `email`, `email_verified_at`, `password`, `contact_person`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '085608014111', NULL, 'admin@admin.com', NULL, '$2y$10$u27ct1pguPgP8QtrolT7WeR/PE73BBJQgWX7mwaLojkHCqWjZnIyy', 'yes', NULL, NULL, NULL),
(2, 'marketing', 'Safitri ', '085608014222', NULL, 'marketing@marketing.com', NULL, '$2y$10$u27ct1pguPgP8QtrolT7WeR/PE73BBJQgWX7mwaLojkHCqWjZnIyy', 'yes', NULL, NULL, NULL),
(3, 'customer', 'trial', '086154736251', 'asdasdsa', 'admin@my.tuta', NULL, '$2y$10$u27ct1pguPgP8QtrolT7WeR/PE73BBJQgWX7mwaLojkHCqWjZnIyy', NULL, NULL, '2022-12-19 17:14:29', '2022-12-19 17:14:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_vendor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vendors`
--

INSERT INTO `vendors` (`id`, `name_vendor`, `created_at`, `updated_at`) VALUES
(1, 'Honda', NULL, NULL),
(2, 'Toyota', NULL, NULL),
(3, 'Daihatsu', NULL, NULL),
(4, 'asdsad', '2022-12-19 17:07:16', '2022-12-19 17:07:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `whatsapps`
--

DROP TABLE IF EXISTS `whatsapps`;
CREATE TABLE IF NOT EXISTS `whatsapps` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `whatsapps`
--

INSERT INTO `whatsapps` (`id`, `nama_cabang`, `wa`, `created_at`, `updated_at`) VALUES
(1, 'Wtc mangga dua , lantai 9 lot E24 - F24', '082119716040', NULL, NULL),
(2, 'Bursa mobil bintaro jaya A37', '082119716040', NULL, NULL),
(3, 'Jl. Raya Parung - Ciputat no.60, Keadung Kec. Sawangan Kota Depok, Jawa Barat 16517', '082119716040', '2022-12-19 17:06:01', '2022-12-19 17:06:01');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `cars_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`),
  ADD CONSTRAINT `cars_whatsapp_id_foreign` FOREIGN KEY (`whatsapp_id`) REFERENCES `whatsapps` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2023 pada 11.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banks`
--

INSERT INTO `banks` (`id`, `name_bank`, `no_rek`, `an`, `created_at`, `updated_at`) VALUES
(1, 'BCA', '09876422222', 'Fadil', NULL, NULL),
(2, 'asdsadsa', '321432432', 'sadsa', '2022-12-19 17:05:55', '2022-12-19 17:05:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_car2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_car_lainnya4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fisrt_registartion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `millage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `day_price` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`id`, `name_car`, `type_car`, `img_car`, `img_car2`, `img_car3`, `img_car4`, `img_car_lainnya`, `img_car_lainnya2`, `img_car_lainnya3`, `img_car_lainnya4`, `doors`, `seats`, `model`, `fisrt_registartion`, `millage`, `fuel`, `engine_size`, `power`, `color`, `status_id`, `whatsapp_id`, `vendor_id`, `day_price`, `created_at`, `updated_at`) VALUES
(6, 'Ferarri 488 GTB', 'Matic', 'admin/images/cars/1020841622-img_car.jpg', 'admin/images/cars/1275293151-img_car2.jpg', 'admin/images/cars/1893790539-img_car3.jpg', 'admin/images/cars/1764804640-img_car4.jpg', NULL, NULL, NULL, NULL, '2', '2', 'GTB', '2023-11-02', '200km', 'bensin', '3,9L V8', '720 HP', 'Merah', 1, 1, 1, 10000000000, '2023-01-02 10:23:40', '2023-01-02 10:23:40'),
(7, 'Ferarri 480', 'Manual', 'admin/images/cars/658746756-img_car.jpg', 'admin/images/cars/1938823899-img_car2.jpg', 'admin/images/cars/1543105505-img_car3.jpg', 'admin/images/cars/20474817-img_car4.jpg', NULL, NULL, NULL, NULL, '2', '2', 'GTB', '2022-11-02', '200km', 'bensin', '3,9L V8', '720 HP', 'Merah', 1, 1, 3, 10000000000, '2023-01-02 10:24:21', '2023-01-02 10:24:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, '2022_12_22_182230_create_abouts_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_transaction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` date NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_transaction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `code_transaction`, `user_id`, `car_id`, `transaction_date`, `amount`, `status_transaction`, `created_at`, `updated_at`) VALUES
(1, 'XJWW0YZYUK', 3, 1, '2022-12-20', '10000000000', 'refuse', '2022-12-19 17:14:40', '2022-12-19 17:33:00'),
(2, 'O8SJY9ES0S', 3, 1, '2022-12-20', '10000000000', 'refuse', '2022-12-19 17:14:41', '2022-12-19 17:33:03'),
(3, 'ZGKIWWHYFZ', 1, 1, '2022-12-20', '10000000000', 'refuse', '2022-12-19 17:33:15', '2022-12-19 17:33:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `phone_number`, `address`, `email`, `email_verified_at`, `password`, `contact_person`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '085608014111', NULL, 'admin@admin.com', NULL, '$2y$10$u27ct1pguPgP8QtrolT7WeR/PE73BBJQgWX7mwaLojkHCqWjZnIyy', 'yes', NULL, NULL, NULL),
(2, 'marketing', 'Marketing', '085608014222', NULL, 'marketing@marketing.com', NULL, '$2y$10$u27ct1pguPgP8QtrolT7WeR/PE73BBJQgWX7mwaLojkHCqWjZnIyy', 'yes', NULL, NULL, NULL),
(3, 'customer', 'trial', '086154736251', 'asdasdsa', 'admin@my.tuta', NULL, '$2y$10$LSRzmV/8lo/6JI2kdEuhv.T4J.7ckwnvlP1pRu.gT3i0BNFa8yGCK', NULL, NULL, '2022-12-19 17:14:29', '2022-12-19 17:14:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `whatsapps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `whatsapps`
--

INSERT INTO `whatsapps` (`id`, `nama_cabang`, `wa`, `created_at`, `updated_at`) VALUES
(1, 'cabang 1', '09219828182', NULL, NULL),
(2, 'cabang 2', '21092121219', NULL, NULL),
(3, 'asdsad', '324234324', '2022-12-19 17:06:01', '2022-12-19 17:06:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_status_id_foreign` (`status_id`),
  ADD KEY `cars_whatsapp_id_foreign` (`whatsapp_id`),
  ADD KEY `cars_vendor_id_foreign` (`vendor_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `whatsapps`
--
ALTER TABLE `whatsapps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `whatsapps`
--
ALTER TABLE `whatsapps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

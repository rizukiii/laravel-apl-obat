-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2025 at 04:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clasifications`
--

CREATE TABLE `clasifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clasifications`
--

INSERT INTO `clasifications` (`id`, `image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5, 'clasification/YBrMpK3VRoqyXv9VNKLtHZHSulDwlopVAlq6YDx0.png', 'Obat Bebas', 'Golongan obat bebas atau over the counter (OTC) merupakan jenis obat yang ditandai dengan logo berbentuk bulat berwarna hijau dengan garis tepi berwarna hitam. Sesuai dengan namanya, jenis obat ini dijual secara bebas, bisa dibeli di toko obat, supermarket, serta apotek tanpa memerlukan resep dokter.\r\n\r\n \r\n\r\nObat bebas biasanya digunakan untuk meredakan kondisi medis dengan gejala ringan, seperti selesma, gejala gastritis, dan lain-lain. Golongan obat bebas biasanya mengandung bahan-bahan yang relatif aman dan memiliki risiko efek samping yang rendah. Meski demikian, jenis obat ini tetap perlu dikonsumsi sesuai dengan aturan yang tertera di kemasan, karena bisa memicu masalah kesehatan apabila digunakan secara sembarangan. Beberapa contoh obat bebas adalah parasetamol, ibuprofen, antasida, dan multivitamin.', '2025-03-18 08:26:23', '2025-03-18 08:26:23'),
(6, 'clasification/Mk6Nz9A4vSeLLctF7TU1HusrNyTlMmWEwe4O0kBl.png', 'Obat Bebas Terbatas', 'Obat bebas terbatas ditandai dengan logo bulat berwarna biru dengan garis tepi hitam. Pada dasarnya, obat bebas terbatas adalah jenis obat keras yang masih bisa diperoleh tanpa resep dokter dalam jumlah tertentu, namun terdapat tanda peringatan khusus pada kemasannya.\r\n\r\n \r\n\r\nPada kemasan obat bebas terbatas selalu tercantum tanda peringatan khusus, yang berupa persegi panjang berwarna hitam dengan pemberitahuan berwarna putih. Pemberitahuan pada tanda peringatan obat bebas terbatas antara lain dibagi menjadi 6 jenis, yaitu:\r\n\r\n \r\n\r\nP. No. 1: Awas! Obat keras. Bacalah aturan pemakaiannya.\r\n\r\nP. No. 2: Awas! Obat keras. Hanya untuk kumur, jangan ditelan.\r\n\r\nP. No. 3: Awas! Obat keras. Hanya untuk bagian luar dari badan.\r\n\r\nP. No. 4: Awas! Obat keras. Hanya untuk dibakar.\r\n\r\nP. No. 5: Awas! Obat keras. Tidak boleh ditelan.\r\n\r\nP. No. 6: Awas! Obat keras. Obat wasir, jangan ditelan.\r\n\r\n \r\n\r\nAdapun beberapa contoh golongan obat terbatas adalah chlorpheniramine (CTM), mebendazole, cetirizine, terbinafine, dan dekstrometorfan.', '2025-03-18 08:29:39', '2025-03-18 08:29:39'),
(11, 'clasification/H3XfmHYugnDEAGM90N9T4htwo2H6RGpd2tCObEeM.png', 'Obat Keras dan Psikotropika', 'Golongan obat keras memiliki simbol berupa lingkaran merah dengan garis tepi hitam, serta huruf K di bagian tengah yang menyentuh garis tepi. Jenis obat ini tidak dapat diperoleh secara sembarangan dan hanya dapat dibeli dengan resep dokter guna menghindari risiko penyalahgunaan obat atau perburukan kondisi akibat efek samping obat.\r\n\r\n \r\n\r\nYang termasuk ke dalam golongan obat keras, di antaranya antibiotik, obat penenang, obat-obatan yang mengandung hormon, dan lain-lain. Contoh obat golongan ini adalah amoksisilin, alprazolam, dan clobazam.\r\n\r\n \r\n\r\nPsikotropika adalah jenis obat keras yang merupakan zat atau obat yang dapat memengaruhi susunan saraf pusat atau menurunkan aktivitas otak sehingga menimbulkan perubahan perilaku dan disertai dengan halusinasi, ilusi, perubahan suasana hati, hingga gangguan cara berpikir. Obat ini juga memiliki efek stimulasi (merangsang) bagi para penggunanya. \r\n\r\n \r\n\r\nPenggunaan obat psikotropika sangat diawasi karena dapat menyebabkan ketergantungan obat pada pengguna. Fenobarbital dan diazepam merupakan contoh obat golongan psikotropika.', '2025-03-18 09:55:36', '2025-03-18 09:55:36'),
(12, 'clasification/cMS0sxuCmN2sDukPGajGi3vRP3EcX0wtxroHtrmj.png', 'Obat Golongan Narkotika', 'Golongan obat yang dapat digunakan dalam dunia medis berikutnya adalah narkotika. Pada kemasannya, golongan obat ini memiliki simbol berupa logo lingkaran berwarna merah dengan gambar menyerupai tanda plus di bagian tengahnya.\r\n\r\n\r\n\r\n\r\nSementara itu, narkotika adalah zat atau obat yang terbuat dari tanaman, bahan sintetis, atau semisintetis untuk menghilangkan rasa nyeri atau menurunkan kesadaran. Codeine, morfin, tramadol, dan diazepam merupakan beberapa contoh obat golongan ini.\r\n\r\n \r\n\r\nGolongan obat ini hanya bisa didapatkan oleh resep dokter, dengan tanda tangan dan disertai nomor izin praktik dokter tersebut. Pasien juga tidak bisa menebus obat narkotika menggunakan salinan resep. Layaknya obat golongan psikotropika, obat golongan narkotika tidak bisa dikonsumsi secara sembarangan karena dapat menyebabkan penyalahgunaan hingga ketergantungan obat.\r\n\r\n \r\n\r\nItu dia penjelasan lengkap mengenai berbagai golongan obat yang dibedakan berdasarkan jenisnya dan penting untuk dipahami. Sebelum menggunakan golongan obat tertentu, sebaiknya konsultasikan hal tersebut dengan dokter Siloam Hospitals terdekat untuk memperoleh dosis yang tepat sesuai kondisi tubuh.', '2025-03-18 09:57:18', '2025-03-18 09:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clasification_id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_15_015605_create_clasifications_table', 1),
(5, '2025_03_15_015636_create_drugs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KMcBPd4Xx2k6fkSkdHGdJ5jDkVkW0tASVGJ3pktc', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU01WaU56RHNwRHRhVmV5d2MzUnRIaVhKaDJDRnlzNXZXa0lvYnB3cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kcnVnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742351040);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clasifications`
--
ALTER TABLE `clasifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drugs_clasification_id_foreign` (`clasification_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `clasifications`
--
ALTER TABLE `clasifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drugs_clasification_id_foreign` FOREIGN KEY (`clasification_id`) REFERENCES `clasifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

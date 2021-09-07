-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2021 pada 15.07
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_gurus`
--

CREATE TABLE `data_gurus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` int(40) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_gurus`
--

INSERT INTO `data_gurus` (`id`, `nip`, `nama`, `alamat`, `gender`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 2, 'Baskoro', 'Bukur Rt2', 'Laki-laki', 'Madiun', '21/03/1999', '08123123', 'avatar2.png', NULL, '2020-04-12 10:20:42'),
(4, 19, 'Edhy', 'Jiwan', 'Laki-laki', 'Jiwan', '123', '123', 'avatar5.png', '2020-03-25 09:45:32', '2020-03-25 10:11:12'),
(5, 6, 'Hakimon', 'Madiun', 'Laki-laki', 'Magetan', '21-03-1999', '09237775123', 'user1-128x128.jpg', '2020-04-27 02:54:13', '2020-04-27 03:06:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswas`
--

CREATE TABLE `data_siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` int(10) DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` int(10) UNSIGNED DEFAULT NULL,
  `tempat_lahir` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ortu_wali` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_ortu_wali` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_ortu` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_siswas`
--

INSERT INTO `data_siswas` (`id`, `nisn`, `nama`, `alamat`, `gender`, `kelas_id`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `avatar`, `nama_ortu_wali`, `tanggal_ortu_wali`, `alamat_ortu`, `no_hp_ortu`, `created_at`, `updated_at`) VALUES
(2, 183307009, 'Mochamad Irfani Ardhyansah', 'Ds Bukur Rt.01', 'Laki-laki', 12, 'Madiun', '21/03/1999', '081214', NULL, 'James', '21/04/1984', 'Magetan', '8516', '2020-03-18 09:09:35', '2020-04-12 08:33:32'),
(3, 13, 'Paiji', 'Bukuran', 'Laki-laki', 4, 'Madiun', '21', '8123123', 'user1-128x128.jpg', 'Ashraf', '123', 'Deso', '312', '2020-03-23 21:12:49', '2020-04-20 19:23:32'),
(5, 7, 'Jon', 'Barat', 'Laki-laki', 9, 'Madiun', '21/03/1999', '0971623425', 'IMG-20170708-WA0036.jpg', 'Ashraf', '21/04/1984', 'Ponorogo', '080764312', '2020-04-27 03:09:02', '2020-04-27 03:09:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(10) UNSIGNED NOT NULL,
  `mapel_id` int(10) UNSIGNED DEFAULT NULL,
  `kelas_id` int(10) UNSIGNED DEFAULT NULL,
  `guru_id` int(10) UNSIGNED DEFAULT NULL,
  `jam` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senin` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selasa` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rabu` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kamis` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumat` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sabtu` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `mapel_id`, `kelas_id`, `guru_id`, `jam`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `created_at`, `updated_at`) VALUES
(1, NULL, 12, NULL, '07.00 - 07.20', 'Tematik', 'PKN', NULL, 'Bahasa Inggris', NULL, NULL, '2020-04-10 08:26:56', '2020-04-27 03:16:18'),
(2, NULL, 12, NULL, '07.20 - 07.40', 'PKN', NULL, NULL, NULL, NULL, NULL, '2020-04-27 03:15:36', '2020-04-27 03:15:36'),
(3, NULL, 12, NULL, '07.40 - 07.60', 'Bahasa Indonesia', NULL, NULL, NULL, NULL, NULL, '2020-04-27 03:15:59', '2020-04-27 03:15:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas` int(11) NOT NULL,
  `data_guru_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `data_guru_id`, `created_at`, `updated_at`) VALUES
(3, 3, NULL, '2020-03-11 09:13:17', '2020-04-27 02:54:51'),
(4, 4, NULL, '2020-03-11 09:13:22', '2020-03-11 09:13:22'),
(5, 5, NULL, '2020-03-11 09:13:26', '2020-03-11 09:13:26'),
(6, 6, NULL, '2020-03-11 09:13:30', '2020-03-11 09:13:30'),
(9, 2, 4, '2020-03-19 06:15:45', '2020-04-08 10:55:26'),
(12, 1, 2, '2020-03-19 06:26:15', '2020-03-19 06:38:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_mapel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mapel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `kode_mapel`, `nama_mapel`, `guru_id`, `created_at`, `updated_at`) VALUES
(1, 'B2A : 20 - 10', 'Bahasa Inggris', NULL, '2020-03-12 12:37:43', '2020-03-12 12:48:22'),
(2, 'B1A', 'Bahasa Indonesia', NULL, '2020-03-31 09:00:13', '2020-03-31 09:00:13'),
(3, 'B1A', 'Tematik', NULL, '2020-04-10 09:12:44', '2020-04-10 09:12:44'),
(4, 'B5A', 'PKN', NULL, '2020-04-27 03:09:37', '2020-04-27 03:09:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_03_06_122639_create_data_siswas_table', 1),
(7, '2020_03_06_122937_create_data_gurus_table', 1),
(8, '2020_03_06_123041_create_nilais_table', 1),
(9, '2020_03_06_123211_create_kelas_table', 1),
(10, '2020_03_06_123256_create_mapels_table', 1),
(11, '2020_03_06_123425_create_jadwals_table', 1),
(12, '2020_03_06_125722_add_relationships_to_nilais_table', 1),
(13, '2020_03_06_130106_add_relationships_to_mapels_table', 1),
(14, '2020_03_06_130432_add_relationships_to_kelas_table', 1),
(15, '2020_03_06_130737_add_relationships_to_jadwals_table', 1),
(16, '2020_03_06_135419_add_relationships_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `keterangan` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapel_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `user_id`, `uts`, `uas`, `keterangan`, `mapel_id`, `created_at`, `updated_at`) VALUES
(1, 2, 78, 79, 'Lulus', 1, NULL, NULL),
(5, 3, 69, 0, 'Memenuhi', 2, '2020-04-01 10:13:38', '2020-04-03 01:21:25'),
(7, 2, 69, 50, 'Tidak Memenuhi', 2, '2020-04-03 09:43:57', '2020-04-03 09:43:57'),
(9, 2, 68, 79, NULL, 4, '2020-04-27 03:10:08', '2020-04-27 03:11:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` int(20) DEFAULT NULL,
  `data_siswa_id` int(10) UNSIGNED DEFAULT NULL,
  `data_guru_id` int(10) UNSIGNED DEFAULT NULL,
  `job` enum('Admin','Guru','Siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nisn`, `data_siswa_id`, `data_guru_id`, `job`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'Admin', 'admin@gmail.com', NULL, '$2y$10$1g3wppVDZ1vmVP4ZZ9SXlePuDHkNjKwHjquWoP6AOZ9vkcwrvWvuW', NULL, '2020-03-11 02:46:37', '2020-03-11 02:46:37'),
(2, 2, NULL, 2, 'Guru', 'guru@gmail.com', NULL, '$2y$10$ftNyqkhO1RJWdICUQqncTOvHL1Av4nJIITUZ8DQx6HW8sJeM0ON4y', NULL, '2020-03-11 11:28:05', '2020-04-12 10:25:53'),
(3, 183307009, 2, NULL, 'Siswa', 'mohamadfani99@gmail.com', NULL, '$2y$10$y51soIsXPNTxfOrTM1lc3.zVz37eOFlxDvkvV.lZe3xhgFdyluVkm', 'PreAssyAeAxaFn6VTwACsZsj1MaHfxXTNgeTTL2p5dJ04XhM2xMobyVPtoVq', '2020-03-18 09:28:19', '2020-04-25 03:23:25'),
(16, 13, 3, NULL, 'Siswa', NULL, NULL, '$2y$10$lBWgqOBgOkpZwVRn9ezbROebZ4kUSHX3HlB8NdmDAan49a8tREwsu', NULL, '2020-04-08 10:27:19', '2020-04-08 10:27:19'),
(22, 19, NULL, 4, 'Guru', 'coba@email.com', NULL, '$2y$10$WS9BSpa398/FWEydmUhObOBmIqpy4Sh/Kn/CnE6MrH1nVDFcUCBSu', NULL, '2020-04-09 10:39:27', '2020-04-09 10:39:27'),
(25, 6, NULL, 5, 'Guru', 'hakim@gmail.com', NULL, '$2y$10$jx4pz3Fp/opD7/WAfHP23OyxdxF/01V5Z7lY0SXgieeRW02GG.fHu', NULL, '2020-04-27 03:01:31', '2020-04-27 03:06:41'),
(26, 7, 5, NULL, 'Siswa', NULL, NULL, '$2y$10$W2zQsTdviB/4l6UQnQ8Hie0UUIM500s7rpSFnEM6bP0kp8CeSguJG', NULL, '2020-04-27 03:17:28', '2020-04-27 03:17:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_gurus`
--
ALTER TABLE `data_gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswas`
--
ALTER TABLE `data_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_mapel_id_foreign` (`mapel_id`),
  ADD KEY `jadwals_kelas_id_foreign` (`kelas_id`),
  ADD KEY `jadwals_guru_id_foreign` (`guru_id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_guru_id_foreign` (`data_guru_id`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapels_guru_id_foreign` (`guru_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_mapel_id_foreign` (`mapel_id`),
  ADD KEY `nilais_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_data_siswa_id_foreign` (`data_siswa_id`),
  ADD KEY `users_data_guru_id_foreign` (`data_guru_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_gurus`
--
ALTER TABLE `data_gurus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_siswas`
--
ALTER TABLE `data_siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_siswas`
--
ALTER TABLE `data_siswas`
  ADD CONSTRAINT `data_siswas_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwals_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwals_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_guru_id_foreign` FOREIGN KEY (`data_guru_id`) REFERENCES `data_gurus` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD CONSTRAINT `mapels_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `data_gurus` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilais_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `data_siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_data_guru_id_foreign` FOREIGN KEY (`data_guru_id`) REFERENCES `data_gurus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_data_siswa_id_foreign` FOREIGN KEY (`data_siswa_id`) REFERENCES `data_siswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

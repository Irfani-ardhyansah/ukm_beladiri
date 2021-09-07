-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2021 pada 15.11
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
-- Database: `db_ukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) UNSIGNED NOT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `agama` varchar(15) NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `kta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat`, `agama`, `angkatan`, `jenis_kelamin`, `no_hp`, `status`, `jabatan`, `file`, `kta`) VALUES
(1, 'Aziz', 'Ngawi', 'Islam', '20176', 'Pria', '83542656364', 'Aktif', NULL, '2020-06-06.jpg', NULL),
(2, 'Irfani', 'Madiun', 'Islam', '2006', 'Pria', '123123', 'Alumni', NULL, '2020-06-06.jpg', '2020-06-06.jpg'),
(3, 'Agungzzz', 'magetan', 'Islam', '2018', 'Pria', '697869', 'Aktif', 'Wakil', '2020-05-08-04-15-58.JPG', '92464-2019-12-13-08-15-10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `deskripsi`, `tanggal`, `tempat`, `foto`) VALUES
(1, 'Reuni akbar', 'Reuni seluruh anggota ukm bela diri IAIN Ponorogo', '2019-12-20', 'kampus 2 IAIN Ponorogo', '33133-2019-12-13-08-19-55.jpg');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `nama_pengurus` varchar(40) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `angkatan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `noHP` varchar(15) NOT NULL,
  `idPengurus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`nama_pengurus`, `jabatan`, `angkatan`, `alamat`, `noHP`, `idPengurus`) VALUES
('Irfan', 'Ketua', '2018', 'Madiun', '-', 1),
('Ardhyansah', 'Wakil', '2018', 'Bukur', '-', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(10) UNSIGNED NOT NULL,
  `nama_event` varchar(255) DEFAULT NULL,
  `tingkat` varchar(15) DEFAULT NULL,
  `tahun` int(5) NOT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `nama_peraih` varchar(30) NOT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_event`, `tingkat`, `tahun`, `kelas`, `nama_peraih`, `keterangan`, `kategori`) VALUES
(4, 'Pekan Olahraga dan Seni', 'Provinsi', 2020, 'Kelas C', 'Ciki', 'Peringkat II', ''),
(5, 'Kejuaraan Djarum', 'Nasional', 2018, 'Kelas A', 'Irfani', 'Peringkat III', ''),
(6, 'Kejuaraan Djarum 2011', 'Nasional', 2018, 'Kelas B', 'Saritem', 'Peringkat I', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `sejarah` varchar(555) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `deskripsi`, `sejarah`, `lokasi`, `jadwal`) VALUES
(1, 'UKM Bela Diri IAIN Ponorogo merupakan Unit Kegiatan Mahasiswa yang bergerak di bidang olahraga khsusnya olahraga bela diri pencak silat PSHT yang berada di Institut Agama Islam Negeri Ponorogo.\r\n\r\nNKRI harga mati PSHT di hati !!', 'Sejarah keberadaanya UKM Bela Diri hingga sekarang telah berdiri lebih dari tujuh belas (17) tahun independent, tepatnya pada tahun 2001, yang sebelum independent sebagai UKM Bela Diri\r\n                    masih menjadi bagian dari UKM Olahraga. Pada periode awal dipimpin oleh saudara Basyari Ibrahim (Ayub), tumpuan harapan yang sangat kuat berbagai konsep perkembangan disuguhkan untuk mahasiswa \r\n                    yang gemar akan bela diri dan olahraga.', 'Kampus 2 IAIN Ponorogo\r\n\r\nJalan Pramuka No.156 Po Box 116, Kode Pos 63471, Kab.Ponorogo, Jawa Timur\r\n\r\nKampus 2 IAIN Ponorogo\r\n\r\nJalan Puspita Jaya, Krajan, Pintu, Kode Pos 63492, Kec.Jenangan, Kab.Ponorogo, Jawa Timur\r\n\r\nPadepokan Ma\'had\r\n\r\nTonatan, Kode', 'Latihan rutin dilaksanakan setiap hari Senin, Rabu dan Jum\'at pukul 19.00 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','superadmin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'irfan', 'irfan@gmail.com', NULL, '$2y$10$gkhj9sEGG8SgP9t1MrXpOOXSFQBNgBscr/VLivLWbC0AkXxk6Ovaq', 'superadmin', NULL, '2019-11-05 23:05:00', '2019-11-05 23:05:00'),
(7, 'Admin', 'abeladiri14@gmail.com', NULL, '$2y$10$TbsH8oVIcyz4JqMv9LkN3eU8l8U7u8KuIt1SRmEp5j3/AdA/2YrQa', 'admin', NULL, '2019-12-12 21:19:08', '2019-12-12 21:19:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

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
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`idPengurus`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `idPengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

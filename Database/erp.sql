-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2024 pada 21.53
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `option`, `text`, `is_correct`, `created_at`, `updated_at`) VALUES
(100, 64, NULL, 'qerqer', 'Y', NULL, NULL),
(101, 64, NULL, 'asdasddas', 'N', NULL, NULL),
(102, 64, NULL, 'asfadfdsfds', 'N', NULL, NULL),
(103, 64, NULL, 'sdgsd', 'N', NULL, NULL),
(104, 65, NULL, 'True', 'Y', NULL, NULL),
(105, 65, NULL, 'False', 'N', NULL, NULL),
(118, 73, NULL, 'a', 'Y', NULL, NULL),
(119, 73, NULL, 'b', 'N', NULL, NULL),
(120, 73, NULL, 'c', 'N', NULL, NULL),
(121, 73, NULL, 'd', 'N', NULL, NULL),
(122, 74, NULL, 'sa', 'Y', NULL, NULL),
(123, 74, NULL, 's', 'N', NULL, NULL),
(124, 74, NULL, 's', 'N', NULL, NULL),
(125, 74, NULL, 's', 'N', NULL, NULL),
(126, 75, NULL, 'a', 'Y', NULL, NULL),
(127, 75, NULL, 'a', 'N', NULL, NULL),
(128, 75, NULL, 'a', 'N', NULL, NULL),
(129, 75, NULL, 'a', 'N', NULL, NULL),
(130, 76, NULL, 'sa', 'Y', NULL, NULL),
(131, 76, NULL, 's', 'N', NULL, NULL),
(132, 76, NULL, 's', 'N', NULL, NULL),
(133, 76, NULL, 's', 'N', NULL, NULL),
(134, 77, NULL, 'True', 'Y', NULL, NULL),
(135, 77, NULL, 'False', 'N', NULL, NULL),
(136, 78, NULL, 'fa', 'Y', NULL, NULL),
(137, 78, NULL, 'e', 'N', NULL, NULL),
(138, 78, NULL, 's', 'N', NULL, NULL),
(139, 78, NULL, 'g', 'N', NULL, NULL),
(140, 79, 'A', '<p>fvsdsfgdsfs</p>', 'Y', NULL, NULL),
(141, 79, 'B', '<p>fsdfsdfsd</p>', 'N', NULL, NULL),
(142, 79, 'C', '<p>fdsfsdfds</p>', 'N', NULL, NULL),
(143, 80, 'B', '<p>gfsgsfgsf</p>', 'Y', NULL, NULL),
(144, 80, 'C', '<p>fdsfsdgsdff</p>', 'N', NULL, NULL),
(145, 80, 'A', '<p>dfgsfdgsdgsd</p>', 'N', NULL, NULL),
(146, 81, 'true', 'True', 'Y', NULL, NULL),
(147, 81, 'false', 'False', 'N', NULL, NULL),
(148, 82, 'C', '<p><img src=\"https://e0.pxfuel.com/wallpapers/835/107/desktop-wallpaper-naruto-png-naruto-logo-transparent-transparent-png-logos-naruto-shippuden-logo.jpg\" alt=\"Naruto Shippuden\" width=\"268\" height=\"191\" /></p>', 'Y', NULL, NULL),
(149, 82, 'A', '<p><img src=\"data:image/png;base64,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\" alt=\"Bleach\" width=\"259\" height=\"194\" /></p>', 'N', NULL, NULL),
(150, 82, 'B', '<p><img src=\"https://logos-world.net/wp-content/uploads/2020/08/Fairy-Tail-Logo.png\" alt=\"fairy tail\" width=\"210\" height=\"118\" /></p>', 'N', NULL, NULL),
(151, 83, 'C', '<p>Minato Uzumaki</p>', 'Y', NULL, NULL),
(152, 83, 'B', '<p>Jiraiya</p>', 'N', NULL, NULL),
(153, 83, 'A', '<p>Luffy</p>', 'N', NULL, NULL),
(154, 84, 'B', '<p>Shinichi Kudo</p>', 'Y', NULL, NULL),
(155, 84, 'A', '<p>Ran</p>', 'N', NULL, NULL),
(156, 84, 'C', '<p>Kaito Kid</p>', 'N', NULL, NULL),
(157, 84, 'D', '<p>Naruto</p>', 'N', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(4) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `kode_brg` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(4) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `kode_brg`, `harga`, `stok`, `tanggal`, `id_user`) VALUES
(1, 'bekal tupperware biru', 'BT', 54000, 28, '2022-11-14', 9),
(3, 'Koper', 'KPR', 90000, 89, '2022-11-14', 9),
(4, 'Mesin Gelembung', 'MG', 40000, 0, '2022-11-14', 9),
(5, 'wwr', 'r', 222, 0, '2022-11-14', 9),
(6, 'Syahrul', 'LV', 10000, 0, '2022-11-16', 9),
(7, 'Naruto figure', 'NF003', 80000, 0, '2022-11-28', 1),
(8, '', '', 0, 0, '2024-04-13', 2),
(9, 'pensil', 'PSL', 5000, 21, '2024-04-15', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_msk` int(4) NOT NULL,
  `id_brg` int(4) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `nama_supp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_msk`, `id_brg`, `jumlah`, `harga`, `nama_supp`, `tanggal`, `id_user`) VALUES
(4, 1, 50, 45000, 'duar', '2022-11-07', 9),
(6, 3, 45, 1000000, 'adas', '2022-11-07', 9),
(8, 3, 33, 45000, '', '2022-11-07', 9),
(9, 3, 44, 900000, 'Norman', '2022-11-07', 9),
(10, 3, 11, 20000, 'ppp', '2022-11-14', 9),
(12, 6, 20, 2000, 'miftahul', '2022-11-16', 9),
(13, 0, 0, 0, '', '2024-04-13', 2),
(14, 0, 0, 0, '', '2024-04-13', 2),
(15, 0, 0, 0, '', '2024-04-13', 2),
(16, 9, 23, 80000, 'faber castel', '2024-04-15', 2);

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `stok_masuk` AFTER INSERT ON `barang_masuk` FOR EACH ROW UPDATE barang SET stok= stok+new.jumlah WHERE id_brg=new.id_brg
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_masuk_cancel` AFTER DELETE ON `barang_masuk` FOR EACH ROW update barang set stok = stok-old.jumlah WHERE id_brg = old.id_brg
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `bukuID` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunTerbit` int(11) NOT NULL,
  `stok` int(10) NOT NULL DEFAULT 1,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`bukuID`, `judul`, `penulis`, `penerbit`, `tahunTerbit`, `stok`, `tanggal`) VALUES
(1, 'buku paket pelajaran kelas 4', 'novianta', 'erlang', 2013, 1, '2024-02-29'),
(3, 'Buku IPS Kelas 5 SD', 'edy', 'erlangga', 2013, 1, '2024-02-29'),
(4, 'Buku IPA kelas 5', 'prof', 'erlangga', 2013, 1, '2024-02-29'),
(5, 'buku iPA kelas 1', 'prof', 'erlangga', 2013, 1, '2024-02-29'),
(6, 'Buku IPA Kelas 2', 'prof', 'erlangga', 2013, 1, '2024-02-29'),
(7, 'Buku IPA Kelas 6', 'prof', 'erlangga', 2013, 1, '2024-02-29'),
(8, 'Buku IPA Kelas 7', 'prof', 'Perm', 2013, 1, '2024-02-29'),
(9, 'buku paket pelajaran kelas 5', 'novianta', 'erlangga', 2013, 0, '2024-02-29'),
(10, 'IPA SD 6 Merdeka', 'edy', 'Erlangga', 2023, 4, '2024-04-15'),
(11, 'IPA SMP 1', 'edy', 'erg', 2023, 2, '2024-04-15'),
(14, 'IPS SMP 2', 'edty', 'erf', 2023, 3, '2024-04-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `classes`
--

CREATE TABLE `classes` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `teacher_id`, `created_at`, `updated_at`) VALUES
(7, 'RPL', 6, NULL, NULL),
(8, 'AKL', 6, NULL, NULL),
(9, 'tes', 6, NULL, NULL),
(10, 'anime RPL X A', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `exams`
--

CREATE TABLE `exams` (
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`, `description`, `start_time`, `end_time`, `class_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(128, 'tes', NULL, '2023-04-06 07:59:49', '2023-04-06 07:59:51', 7, 6, '2023-04-13 04:33:00', NULL),
(141, 'de', 'de', '2023-04-13 04:53:00', '2023-04-14 12:53:00', 7, 6, '2023-04-13 06:24:08', NULL),
(144, 'abc', 'abc', '2023-04-14 08:09:00', '2023-04-14 12:09:00', 7, 6, '2023-04-14 08:12:58', NULL),
(145, 'tes3', '', '2023-04-14 08:16:00', '2023-04-17 11:16:00', 7, 6, '2023-04-14 08:16:47', NULL),
(146, 'tes', '<p>sdada</p>', '2023-04-26 11:51:00', '2023-04-26 13:51:00', 7, 6, '2023-04-26 11:54:00', NULL),
(147, 'gambar', '', '2023-04-26 12:03:00', '2023-04-26 14:03:00', 7, 6, '2023-04-26 12:04:18', NULL),
(148, 'Ujian Pertama', '<p>Anime Semua</p>', '2023-05-07 15:57:00', '2023-05-08 06:57:00', 10, 6, '2023-05-07 17:00:35', NULL),
(149, 'Ujian WIBU RPL', '<p>Jawab dengan Benar Ya</p>', '2024-04-14 19:12:11', '2024-04-14 19:15:00', 10, 9, '2024-04-14 18:49:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam_students`
--

CREATE TABLE `exam_students` (
  `examStudent_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `started_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `finished_at` timestamp NULL DEFAULT NULL,
  `status` enum('graded','ungraded','in_progress','submitted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ungraded',
  `result` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exam_students`
--

INSERT INTO `exam_students` (`examStudent_id`, `exam_id`, `student_id`, `started_at`, `finished_at`, `status`, `result`, `created_at`, `updated_at`) VALUES
(8, 141, 9, '2023-04-14 05:00:08', '2023-04-14 08:08:33', 'ungraded', NULL, NULL, NULL),
(9, 144, 9, '2023-04-14 08:17:05', '2023-04-14 08:17:23', 'ungraded', NULL, NULL, NULL),
(11, 145, 9, '2023-04-16 16:41:13', '2023-04-16 16:41:17', 'graded', '33.33', NULL, NULL),
(12, 146, 9, '2023-04-26 12:20:47', '2023-04-26 12:20:55', 'graded', '50.00', NULL, NULL),
(13, 147, 9, '2023-04-26 12:21:08', '2023-04-26 12:21:11', 'graded', '100.00', NULL, NULL),
(14, 148, 12, '2023-05-07 17:03:29', '2023-05-07 17:04:00', 'graded', '100.00', NULL, NULL),
(15, 148, 9, '2023-05-07 17:04:14', '2023-05-07 17:04:23', 'graded', '0.00', NULL, NULL),
(16, 149, 13, '2024-04-14 19:13:58', '2024-04-14 19:13:58', 'graded', '50.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam_student_answers`
--

CREATE TABLE `exam_student_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_student_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `answer_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exam_student_answers`
--

INSERT INTO `exam_student_answers` (`id`, `exam_student_id`, `answer_id`, `answer_text`, `created_at`, `updated_at`) VALUES
(97, 8, 102, NULL, NULL, NULL),
(98, 8, 105, NULL, NULL, NULL),
(99, 8, NULL, 'dadas', NULL, NULL),
(100, 9, 118, NULL, NULL, NULL),
(101, 9, 122, NULL, NULL, NULL),
(102, 9, 127, NULL, NULL, NULL),
(121, 11, 130, NULL, NULL, NULL),
(122, 11, 135, NULL, NULL, NULL),
(123, 11, 137, NULL, NULL, NULL),
(124, 12, 140, NULL, NULL, NULL),
(125, 12, 144, NULL, NULL, NULL),
(126, 13, 146, NULL, NULL, NULL),
(127, 14, 148, NULL, NULL, NULL),
(128, 15, 150, NULL, NULL, NULL),
(129, 16, 151, NULL, NULL, NULL),
(130, 16, 156, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kw` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `JK` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_kw`, `user_id`, `nama`, `NIK`, `JK`) VALUES
(1, 2, 'ray', '65434567', 'Laki-laki'),
(6, 6, 'nor', '876567', 'Laki-laki'),
(7, 7, 'sasuke', '333', 'Laki-laki'),
(8, 8, 'Ruka', '43423', 'Perempuan'),
(9, 9, 'Naruto', '4563456', 'Laki-laki'),
(10, 1, 'adminok', '000', 'Laki-laki'),
(11, 0, 'tes', '312312', 'Laki-laki'),
(12, 23, 'tes', '343', 'Laki-laki'),
(13, 24, 'tes2', '65645645', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `kategoriID` int(11) NOT NULL,
  `namaKategori` varchar(255) NOT NULL,
  `jumlah_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategoribuku`
--

INSERT INTO `kategoribuku` (`kategoriID`, `namaKategori`, `jumlah_buku`) VALUES
(1, 'IPA', 8),
(2, 'IPS', 4),
(3, 'SMP', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `kategoriBukuID` int(11) NOT NULL,
  `bukuID` int(11) NOT NULL,
  `kategoriID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategoribuku_relasi`
--

INSERT INTO `kategoribuku_relasi` (`kategoriBukuID`, `bukuID`, `kategoriID`) VALUES
(1, 1, 2),
(2, 11, 1),
(5, 3, 2),
(6, 4, 1),
(7, 5, 1),
(8, 6, 1),
(9, 7, 1),
(10, 8, 1),
(11, 9, 2),
(12, 9, 1),
(13, 10, 1),
(17, 14, 2);

--
-- Trigger `kategoribuku_relasi`
--
DELIMITER $$
CREATE TRIGGER `after delete` AFTER DELETE ON `kategoribuku_relasi` FOR EACH ROW BEGIN
 UPDATE kategoribuku
    SET jumlah_buku = jumlah_buku - 1
    WHERE kategoriID = OLD.kategoriID;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after insert` AFTER INSERT ON `kategoribuku_relasi` FOR EACH ROW BEGIN
 UPDATE kategoribuku
    SET jumlah_buku = jumlah_buku + 1
    WHERE kategoriID = NEW.kategoriID;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `koleksiID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bukuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `log_idUser` int(10) NOT NULL,
  `tanggal_log` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `isi_log`, `log_idUser`, `tanggal_log`) VALUES
(1, 'user menambahkan data pengawai', 2, '2024-02-28 10:39:06'),
(78, 'user menambahkan data petugas', 2, '2024-04-12 19:13:48'),
(79, 'user menambahkan data petugas', 2, '2024-04-12 19:15:29'),
(80, 'User telah melakukan Login', 2, '2024-04-15 01:16:41'),
(81, 'user menambahkan data petugas', 2, '2024-04-15 01:17:39'),
(82, 'user menambahkan data guru', 2, '2024-04-15 01:18:16'),
(83, 'user menambahkan data murid', 2, '2024-04-15 01:18:36'),
(84, 'user mengedit data murid', 2, '2024-04-15 01:19:16'),
(85, 'user menambahkan data barang', 2, '2024-04-15 01:20:14'),
(86, 'user menambahkan data barang masuk', 2, '2024-04-15 01:20:53'),
(87, 'user menambahkan data barang keluar', 2, '2024-04-15 01:21:16'),
(88, 'user membuat laporan data barang', 2, '2024-04-15 01:21:42'),
(89, 'user membuat laporan data barang masuk', 2, '2024-04-15 01:21:53'),
(90, 'user mebuat laporan data buku', 2, '2024-04-15 01:29:55'),
(91, 'user mebuat laporan data buku', 2, '2024-04-15 01:31:01'),
(92, 'User telah melakukan Logout', 2, '2024-04-15 01:31:16'),
(93, 'User telah melakukan Login', 25, '2024-04-15 01:31:30'),
(94, 'user membuat soal ujian', 25, '2024-04-15 01:49:25'),
(95, 'User telah melakukan Logout', 25, '2024-04-15 01:51:35'),
(96, 'User telah melakukan Login', 26, '2024-04-15 01:53:45'),
(97, 'User telah melakukan Logout', 26, '2024-04-15 01:53:54'),
(98, 'User telah melakukan Login', 2, '2024-04-15 01:53:57'),
(99, 'user megedit data kelas', 2, '2024-04-15 01:54:30'),
(100, 'user megedit data kelas', 2, '2024-04-15 01:55:02'),
(101, 'user megedit data kelas', 2, '2024-04-15 01:56:51'),
(102, 'user megedit data kelas', 2, '2024-04-15 01:57:06'),
(103, 'user megedit data kelas', 2, '2024-04-15 01:59:04'),
(104, 'user menghapus data kelas', 2, '2024-04-15 02:11:10'),
(105, 'user megedit data kelas', 2, '2024-04-15 02:11:26'),
(106, 'User telah melakukan Logout', 2, '2024-04-15 02:11:34'),
(107, 'User telah melakukan Login', 26, '2024-04-15 02:11:38'),
(108, 'user mulai mengerjakan ujian', 26, '2024-04-15 02:13:43'),
(109, 'user telah selesai mengerjakan ujian', 26, '2024-04-15 02:13:58'),
(110, 'User telah melakukan Logout', 26, '2024-04-15 02:14:06'),
(111, 'User telah melakukan Login', 25, '2024-04-15 02:14:12'),
(112, 'user membuat excel dari hasil ujian', 25, '2024-04-15 02:14:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjamanID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bukuID_peminjaman` int(11) NOT NULL,
  `tanggalPeminjaman` date NOT NULL DEFAULT current_timestamp(),
  `tanggalPengembalian` date NOT NULL,
  `statusPeminjaman` varchar(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`peminjamanID`, `userID`, `bukuID_peminjaman`, `tanggalPeminjaman`, `tanggalPengembalian`, `statusPeminjaman`) VALUES
(1, 1, 1, '2024-02-29', '2024-03-02', '2'),
(4, 6, 1, '2024-02-29', '2024-03-01', '2'),
(5, 6, 9, '2024-02-29', '2024-03-01', '2'),
(6, 6, 9, '2024-02-29', '2024-03-01', '1'),
(7, 6, 9, '2024-02-29', '2024-03-01', '1'),
(8, 21, 9, '2024-04-13', '2024-04-15', '1'),
(9, 26, 14, '2024-04-15', '2024-04-17', '2');

--
-- Trigger `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `after delete peminjaman` AFTER DELETE ON `peminjaman` FOR EACH ROW BEGIN
    IF OLD.statusPeminjaman = 1 THEN
        UPDATE buku
        SET stok = stok + 1
        WHERE bukuID = OLD.bukuID_peminjaman;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after insert peminjaman` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
    UPDATE buku
    SET stok = stok - 1
    WHERE bukuID = NEW.bukuID_peminjaman;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after update peminjaman` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
    IF NEW.statusPeminjaman = 2 THEN
        UPDATE buku
        SET stok = stok + 1
        WHERE bukuID = NEW.bukuID_peminjaman;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('abcd','essay','true_false') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`question_id`, `exam_id`, `text`, `type`, `created_at`, `updated_at`) VALUES
(56, 128, 'tes', 'essay', NULL, NULL),
(64, 141, 'dsda', 'abcd', NULL, NULL),
(65, 141, 'wrgrsgsd', 'true_false', NULL, NULL),
(66, 141, 'fdssrwrgse', 'essay', NULL, NULL),
(73, 144, 'tes', 'abcd', NULL, NULL),
(74, 144, 'tes', 'abcd', NULL, NULL),
(75, 144, 'tes', 'abcd', NULL, NULL),
(76, 145, 'abcd', 'abcd', NULL, NULL),
(77, 145, 'true', 'true_false', NULL, NULL),
(78, 145, 'abcd', 'abcd', NULL, NULL),
(79, 146, '<p>eerre</p>', 'abcd', NULL, NULL),
(80, 146, '<p>ggsfgsdfgsd</p>', 'abcd', NULL, NULL),
(81, 147, '<p><img src=\"https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg\" alt=\"\" width=\"252\" height=\"394\" /></p>\r\n<p>anime apa ini</p>', 'true_false', NULL, NULL),
(82, 148, '<p><img src=\"https://naruto-official.com/index/char_naruto.webp\" alt=\"karakter ninja berambut kuning\" width=\"195\" height=\"325\" />Karakter Anime darimana Kah ini?</p>', 'abcd', NULL, NULL),
(83, 149, '<p>Siapa Ayah Naruto Uzumaki?</p>', 'abcd', NULL, NULL),
(84, 149, '<p><img src=\"https://akcdn.detik.net.id/visual/2024/01/15/detektif-conan_169.png?w=650\" alt=\"Conan Edogawa\" width=\"650\" height=\"366\" /></p>\r\n<p>siapakah sebernarnya orang ini?</p>', 'abcd', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NISN` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `NISN`, `user_id`) VALUES
(5, 'ha - RPL X A', 3231, 6),
(9, 'tes RPL X A', 312312, 17),
(11, 'weq', 312, 20),
(12, 'kopi - RPL X A', 213, 21),
(13, 'student - RPL X A', 54534534, 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_class_bridge`
--

CREATE TABLE `student_class_bridge` (
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student_class_bridge`
--

INSERT INTO `student_class_bridge` (`student_id`, `class_id`) VALUES
(9, 7),
(5, 9),
(9, 9),
(5, 10),
(9, 10),
(12, 10),
(NULL, 10),
(NULL, 10),
(NULL, 10),
(NULL, 10),
(NULL, 10),
(NULL, 10),
(13, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `user_id`) VALUES
(6, 'bambang', 11),
(8, 'teacher', 18),
(9, 'teach', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `nama` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`nama`, `logo`, `alamat`) VALUES
('duar', '', 'Batam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(4) NOT NULL,
  `id_brg` int(4) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_bill` int(4) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_brg`, `jumlah`, `harga`, `id_bill`, `tanggal`, `id_user`) VALUES
(2, 1, 21, 32000, 0, '2022-11-14', 2),
(4, 3, 34, 200000, 0, '2022-11-14', 6),
(5, 3, 10, 300000, 0, '2022-11-14', 7),
(6, 6, 20, 10000, 0, '2022-11-16', 8),
(7, 9, 2, 80000, 1, '2024-04-15', 2);

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `stok_keluar` AFTER INSERT ON `transaksi` FOR EACH ROW UPDATE barang SET stok = stok-new.jumlah WHERE id_brg = new.id_brg
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_keluar_cancel` AFTER DELETE ON `transaksi` FOR EACH ROW UPDATE barang SET stok = stok+old.jumlah WHERE id_brg = old.id_brg
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `ulasanID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bukuID` int(11) NOT NULL,
  `ulasan` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`ulasanID`, `userID`, `bukuID`, `ulasan`, `rating`, `tanggal`) VALUES
(1, 1, 1, 'tes2', 3, '2024-02-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','teacher','student','petugas') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, '3231', 'hai@gmail.com', '42810cb02db3bb2cbb428af0d8b0376e', 'student'),
(16, 's', 's@gmail.com', '03c7c0ace395d80182db07ae2c30f034', 'student'),
(17, 'tes', 'tes@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student'),
(18, 'teacher', 'teacher@gmail.com', '8d788385431273d11e8b43bb78f3aa41', 'teacher'),
(20, 'eq', 'a@gmail.com', '2bbf803161deb1186defbefb8b4b0903', 'student'),
(21, 'kopi', 'kopi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student'),
(23, 'tes', 'tes', '095e3a1cb5cbb579195f0a6eacc84483', 'petugas'),
(24, 'tes2', 'tes2@gmail.com', '095e3a1cb5cbb579195f0a6eacc84483', 'petugas'),
(25, 'teach', 'teach@gmail.com', '38cc16707c6795b8016cda508226ca54', 'teacher'),
(26, '54534534', 'student@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 'student');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`) USING BTREE,
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_msk`),
  ADD KEY `id_brg` (`id_brg`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`bukuID`);

--
-- Indeks untuk tabel `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`) USING BTREE,
  ADD KEY `FK_classes_teachers` (`teacher_id`);

--
-- Indeks untuk tabel `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`) USING BTREE,
  ADD KEY `exams_class_id_foreign` (`class_id`),
  ADD KEY `FK_exams_teachers` (`teacher_id`);

--
-- Indeks untuk tabel `exam_students`
--
ALTER TABLE `exam_students`
  ADD PRIMARY KEY (`examStudent_id`) USING BTREE,
  ADD KEY `exam_students_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_students_student_id_foreign` (`student_id`);

--
-- Indeks untuk tabel `exam_student_answers`
--
ALTER TABLE `exam_student_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_student_answers_exam_student_id_foreign` (`exam_student_id`),
  ADD KEY `exam_student_answers_answer_id_foreign` (`answer_id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kw`);

--
-- Indeks untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indeks untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`kategoriBukuID`);

--
-- Indeks untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`koleksiID`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjamanID`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`) USING BTREE,
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`) USING BTREE,
  ADD UNIQUE KEY `NISN` (`NISN`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `student_class_bridge`
--
ALTER TABLE `student_class_bridge`
  ADD KEY `FK__students` (`student_id`),
  ADD KEY `FK__classes` (`class_id`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`) USING BTREE,
  ADD KEY `FK__users` (`user_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_brg` (`id_brg`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indeks untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`ulasanID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_msk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `bukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT untuk tabel `exam_students`
--
ALTER TABLE `exam_students`
  MODIFY `examStudent_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `exam_student_answers`
--
ALTER TABLE `exam_student_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_kw` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `kategoriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `kategoriBukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `koleksiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjamanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `ulasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

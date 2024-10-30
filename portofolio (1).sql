-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 10:34 AM
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
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi_diri` text NOT NULL,
  `nama_profesi` varchar(50) NOT NULL,
  `deskripsi_profesi` text NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `deskripsi_diri`, `nama_profesi`, `deskripsi_profesi`, `birthday`, `city`, `age`, `email`, `created_at`, `update_at`) VALUES
(1, 'hasdfjhasjkfbjkasf', 'web developer', 'deskripsi profesi', '5 juni 2004', 'jakarta', '20', 'nasywahanifahnasy@gm', '2024-10-29 07:40:24', '2024-10-30 03:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `edukasi`
--

CREATE TABLE `edukasi` (
  `id` int(50) NOT NULL,
  `tempat_edukasi` varchar(50) NOT NULL,
  `deskripsi_edukasi` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(50) NOT NULL,
  `website_name` varchar(50) NOT NULL,
  `website_link` varchar(50) DEFAULT NULL,
  `website_phone` varchar(50) NOT NULL,
  `website_email` varchar(50) NOT NULL,
  `website_address` text NOT NULL,
  `twitter_link` varchar(50) DEFAULT NULL,
  `fb_link` varchar(50) DEFAULT NULL,
  `ig_link` varchar(50) DEFAULT NULL,
  `linkedin_link` varchar(50) DEFAULT NULL,
  `youtube_link` varchar(50) DEFAULT NULL,
  `logo` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `website_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `website_name`, `website_link`, `website_phone`, `website_email`, `website_address`, `twitter_link`, `fb_link`, `ig_link`, `linkedin_link`, `youtube_link`, `logo`, `created_at`, `update_at`, `website_description`) VALUES
(1, 'Nasywa Syifa Hanifah', 'https://ppkdjakpus.com/', '123', 'admin@gmail.com', 'jalan melati', NULL, NULL, NULL, NULL, NULL, 'WhatsApp Image 2024-10-30 at 09.59.06.jpeg', '2024-10-30 04:59:05', '2024-10-30 05:29:53', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `karya_portofolio`
--

CREATE TABLE `karya_portofolio` (
  `id` int(50) NOT NULL,
  `hasil_portofolio` varchar(50) NOT NULL,
  `deskripsi_portofolio` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(50) NOT NULL,
  `jenis_kontak` varchar(50) NOT NULL,
  `deskripsi_kontak` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(15) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `nama_user`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'nanas', 'web dev', 'ba98d06bef049268fb2ede946aff1927.jpg', '2024-10-29 08:30:57', '2024-10-29 08:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(50) NOT NULL,
  `tahun_pendidikan` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `tahun_pendidikan`, `sekolah`, `jurusan`, `created_at`, `update_at`) VALUES
(2, '2022', 'SMKN 48 JAKARTA', 'Akuntansi', '2024-10-30 07:24:20', '2024-10-30 07:24:20'),
(3, '3456', 'tuuruuutrt', 'bjghjgjh', '2024-10-30 07:36:19', '2024-10-30 07:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `deksripsi_pengalaman` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `deskripsi_jabatan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `nama_perusahaan`, `deksripsi_pengalaman`, `jabatan`, `deskripsi_jabatan`, `created_at`, `update_at`) VALUES
(23, 'PT MAJU', 'fgghgh', 'ghgh', 'gjhhgjh', '2024-10-30 09:18:40', '2024-10-30 09:18:40'),
(25, 'uyjyjy', 'yhjkyui', 'ikyk7ik', 't5yu6u6u', '2024-10-30 09:29:56', '2024-10-30 09:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(50) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `deskripsi_keahlian` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'nanas', 'nanas@gmail.com', '123', 'Raihan sprite revisi.png', '2024-10-29 02:16:43', '2024-10-30 08:26:27'),
(3, 'nanas', 'budi@gmail.com', 'vgvbhvbh', 'gradien logo pocari sweat.jpg', '2024-10-30 08:28:17', '2024-10-30 08:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edukasi`
--
ALTER TABLE `edukasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karya_portofolio`
--
ALTER TABLE `karya_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edukasi`
--
ALTER TABLE `edukasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karya_portofolio`
--
ALTER TABLE `karya_portofolio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 02:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritik_saran`
--

CREATE TABLE `tb_kritik_saran` (
  `id_kritik_saran` int(11) NOT NULL,
  `id_responden` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL,
  `kelebihan` text NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kritik_saran`
--

INSERT INTO `tb_kritik_saran` (`id_kritik_saran`, `id_responden`, `kritik`, `saran`, `kelebihan`, `created_at`) VALUES
(1, 1, 'gh', 'sd', 'k', '2022'),
(2, 2, 'gh', 'sd', 'k', '2022'),
(3, 3, '-', '-', '-', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pernyataan`
--

CREATE TABLE `tb_pernyataan` (
  `id_pernyataan` int(11) NOT NULL,
  `pernyataan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pernyataan`
--

INSERT INTO `tb_pernyataan` (`id_pernyataan`, `pernyataan`) VALUES
(1, 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan (baik persyaratan yang bersifat teknis maupun administratif) dengan jenis pelayanannya ?'),
(2, 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini ?'),
(3, 'Bagaimana pendapat  Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelayanan ?'),
(4, 'Bagaimana pendapat Saudara tentang kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan ?'),
(5, 'Bagaimana pendapat Saudara tentang kepastian produk layanan (hasil pelayanan yang diberikan sesuai dengan ketentuan yang telah ditetapkan) ?'),
(6, 'Bagaimana pemahaman Saudara ttg kemampuan / kompetensi petugas dalam memberikan pelayanan ?'),
(7, 'Bagaimana pendapat Saudara tentang kesopanan dan keramahan / perilaku petugas dalam memberikan pelayanan ?'),
(8, 'Bagaimana pendapat Saudara tentang kejelasan yang tercantum dalam maklumat pelayanan ?'),
(9, 'Bagaimana pendapat Saudara tentang penanganan pengaduan, saran dan masukan layanan ?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_responden`
--

CREATE TABLE `tb_responden` (
  `id_responden` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_responden`
--

INSERT INTO `tb_responden` (`id_responden`, `nama`, `pendidikan`, `pekerjaan`, `usia`, `jk`, `created_at`) VALUES
(1, 'Aris', '5', '3', '29', '1', '2022'),
(2, 'Lisna', '6', '3', '51', '2', '2022'),
(3, 'Bian', '2', '3', '2', '1', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_survei`
--

CREATE TABLE `tb_survei` (
  `id_survei` int(11) NOT NULL,
  `id_responden` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_survei`
--

INSERT INTO `tb_survei` (`id_survei`, `id_responden`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `created_at`) VALUES
(1, 1, 2, 2, 2, 3, 3, 1, 1, 1, 1, '2022'),
(2, 2, 2, 4, 2, 3, 3, 1, 1, 1, 1, '2022'),
(3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$Aow6wRw70krWR2Fzs9/3COSE0TfNilUvkSvpq7Zn0jrJVMTzSwIBK', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kritik_saran`
--
ALTER TABLE `tb_kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indexes for table `tb_pernyataan`
--
ALTER TABLE `tb_pernyataan`
  ADD PRIMARY KEY (`id_pernyataan`);

--
-- Indexes for table `tb_responden`
--
ALTER TABLE `tb_responden`
  ADD PRIMARY KEY (`id_responden`);

--
-- Indexes for table `tb_survei`
--
ALTER TABLE `tb_survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kritik_saran`
--
ALTER TABLE `tb_kritik_saran`
  MODIFY `id_kritik_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pernyataan`
--
ALTER TABLE `tb_pernyataan`
  MODIFY `id_pernyataan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_responden`
--
ALTER TABLE `tb_responden`
  MODIFY `id_responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_survei`
--
ALTER TABLE `tb_survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 12:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_catering`
--

CREATE TABLE `tb_catering` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_pembelian` varchar(255) NOT NULL,
  `jumlah_pemesanan` varchar(255) NOT NULL,
  `jumlah_rp` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_catering`
--

INSERT INTO `tb_catering` (`id`, `nama`, `username`, `email`, `tgl_pembelian`, `jumlah_pemesanan`, `jumlah_rp`, `nama_bank`, `no_rekening`, `status`, `foto`) VALUES
(9, 'fakhrii', '', 'fakhrii@gmail.com', '2024-07-19', '2', '500000', '', '2131432423423424', 'Lunas', 'Screenshot (690).png'),
(10, 'Fakhri', 'Fakhrizal', 'fakhri@gmail.com', '2024-07-19', '2', '60000', 'Mandiri', '', 'Lunas', ''),
(11, 'rhie', 'fakhrizal', 'shags', '2024-07-19', '3', '677777', 'Mandiri', '', 'Lunas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pendapat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id`, `nama`, `pendapat`) VALUES
(1, '', ''),
(6, 'ser', 'playanan oke'),
(7, 'ser', 'playanan oke DONGS'),
(8, 'serlyy', 'MAKANAN ENAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(5, 'serlyyyy', 'serlyyyy', 'serlyyyy@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'seser', 'seser', 'seser@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Rhie', 'fakhrizal', 'fakhri@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d'),
(8, 'Fakhri', 'Rhie', 'Rhie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Fakhriii', 'Aku', 'aku@gmail.com', '89ccfac87d8d06db06bf3211cb2d69ed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_catering`
--
ALTER TABLE `tb_catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_catering`
--
ALTER TABLE `tb_catering`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

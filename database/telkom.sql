-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 02:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `permasalahan` varchar(250) NOT NULL,
  `ringkasan` varchar(250) NOT NULL,
  `progress` varchar(250) NOT NULL,
  `isu` varchar(250) NOT NULL,
  `last_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `periode` varchar(250) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history_kronologis`
--

CREATE TABLE `history_kronologis` (
  `id_history` int(11) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `dokumen` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `lampiran` varchar(250) NOT NULL,
  `last_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `periode` varchar(250) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kronologis`
--

CREATE TABLE `kronologis` (
  `id_kronologis` int(11) NOT NULL,
  `periode` date NOT NULL,
  `id_unit` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `dokumen` varchar(250) NOT NULL,
  `statuss` varchar(250) NOT NULL,
  `lampiran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kronologis`
--

INSERT INTO `kronologis` (`id_kronologis`, `periode`, `id_unit`, `tanggal`, `perihal`, `dokumen`, `statuss`, `lampiran`) VALUES
(2, '2022-10-07', 1, '2022-10-04', 'ada', 'ada', 'copy', ''),
(7, '2022-10-07', 1, '2022-10-11', 'permsalahan', 'tidak ada', 'asli', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_progress` int(11) NOT NULL,
  `id_kronologis` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_progress`, `id_kronologis`, `id_unit`, `id_periode`) VALUES
(1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL,
  `periode` varchar(250) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `periode`, `id_unit`) VALUES
(3, 'October 2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress_permasalahan`
--

CREATE TABLE `progress_permasalahan` (
  `id_progress` int(11) NOT NULL,
  `periode` date NOT NULL,
  `id_unit` int(11) NOT NULL,
  `permasalahan` varchar(250) NOT NULL,
  `ringkasan` varchar(250) NOT NULL,
  `progress` varchar(250) NOT NULL,
  `isu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress_permasalahan`
--

INSERT INTO `progress_permasalahan` (`id_progress`, `periode`, `id_unit`, `permasalahan`, `ringkasan`, `progress`, `isu`) VALUES
(1, '2022-10-07', 1, 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(3, '2022-10-04', 9, 'ya', 'tidak', 'ya', 'ya'),
(11, '2022-10-07', 1, 'permsalahan', 'ringkasan permsalahan', 'progress ', 'isu');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'Witel Makassar'),
(2, 'Witel Sulselbar'),
(3, 'Witel Sulteng'),
(4, 'Witel Sultra'),
(5, 'Witel Gorontalo'),
(6, 'Witel Sulut Malut'),
(7, 'Witel Maluku'),
(8, 'Witel Papua Barat'),
(9, 'Witel Papua'),
(10, 'General Affair');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `Nama`, `username`, `id_unit`, `last_login`) VALUES
(2, 'Fahri Handika\r\n', '930357', 10, '2022-10-09 01:34:23'),
(3, 'Abu Bakar Bugis', '670558', 9, '2022-10-09 01:33:10'),
(4, 'Abu Bakar Bugis', '720111', 9, '2022-10-09 01:33:10'),
(5, 'Abu Bakar Bugis', '940431', 9, '2022-10-09 01:33:10'),
(6, 'Julipha Saparua', '780011', 8, '2022-10-09 01:33:10'),
(7, 'Julipha Saparua', '645378', 8, '2022-10-09 01:33:10'),
(8, 'Husnia Marasabessi', '700267', 7, '2022-10-09 01:33:10'),
(9, 'Sofjan Salvius', '990023', 6, '2022-10-09 01:33:10'),
(10, 'Sofjan Salvius', '760011', 6, '2022-10-09 01:33:10'),
(11, 'Karsut Laisa', '670014', 5, '2022-10-09 01:33:10'),
(12, 'Bertha', '700288', 3, '2022-10-09 01:33:10'),
(13, 'Abdul Wahab Golib', '750014', 4, '2022-10-09 01:33:10'),
(14, 'Abdul Wahab Golib', '970186', 4, '2022-10-09 01:33:10'),
(15, 'Abraham Tangdialla', '990049', 2, '2022-10-09 01:33:10'),
(16, 'Abraham Tangdialla', '740075', 2, '2022-10-09 01:33:10'),
(17, 'Makmur Hafiedz', '670339', 1, '2022-10-09 01:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `history_kronologis`
--
ALTER TABLE `history_kronologis`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `kronologis`
--
ALTER TABLE `kronologis`
  ADD PRIMARY KEY (`id_kronologis`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `progress_permasalahan`
--
ALTER TABLE `progress_permasalahan`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_kronologis`
--
ALTER TABLE `history_kronologis`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kronologis`
--
ALTER TABLE `kronologis`
  MODIFY `id_kronologis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress_permasalahan`
--
ALTER TABLE `progress_permasalahan`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

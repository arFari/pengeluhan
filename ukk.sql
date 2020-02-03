-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 09:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('tasya', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluhan`
--

CREATE TABLE `pengeluhan` (
  `id_pengeluhan` varchar(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluhan`
--

INSERT INTO `pengeluhan` (`id_pengeluhan`, `nik`, `jenis`, `keluhan`, `lokasi`, `tanggal`, `status`, `feedback`) VALUES
('03072759', '1829738273827365', 'Kebersihan', 'Banyak sampah di dekat pepohonan', 'Taman Mekar Sari', '2020-02-03 19:16:27', 'Diproses', 'Belum Diberi Feedback');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengeluhan`
--
ALTER TABLE `pengeluhan`
  ADD PRIMARY KEY (`id_pengeluhan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

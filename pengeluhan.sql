-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2020 pada 03.43
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengeluhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('tasya', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `alamat`) VALUES
('2017765483923305', 'Lalisa', 'Jl. Kemang 2 no. 76, Jakarta Barat'),
('2065434326760503', 'Bintang Kejora', 'Jl. Angkasa 17 no. 1, Jakarta Barat'),
('2088767856984563', 'Roy Kiyoshi', 'Jl. Melati no. 66, Jakarta Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluhan`
--

CREATE TABLE `pengeluhan` (
  `id_pengeluhan` varchar(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluhan`
--

INSERT INTO `pengeluhan` (`id_pengeluhan`, `nik`, `jenis`, `keluhan`, `lokasi`, `tanggal`, `status`, `feedback`) VALUES
('04035884', '2017765483923305', 'Sarana Prasarana', 'Bangku hilang', 'Taman Mentari', '2020-02-05 01:10:35', 'Telah Diselesaikan', 'Belum Diberi Feedback'),
('05010116', '2088767856984563', 'Kebersihan', 'Halte banyak sampah', 'Halte Palem', '2020-02-05 01:10:38', 'Telah Diselesaikan', 'Belum Diberi Feedback'),
('05010843', '2088767856984563', 'Keamanan', 'Banyak penculikan', 'SDN 06', '2020-02-05 01:09:08', 'Diproses', 'Belum Diberi Feedback'),
('05011981', '2017765483923305', 'Kebersihan', 'RPTRA kotor', 'RPTRA Bunga', '2020-02-05 02:16:20', 'Diproses', 'Ditangani dengan baik'),
('05013075', '2065434326760503', 'Keamanan', 'Kehilangan dompet', 'Halte Kuning', '2020-02-05 01:53:00', 'Telah Diselesaikan', 'Belum Diberi Feedback'),
('05013284', '2088767856984563', 'Sarana Prasarana', 'Halte rusak', 'Halte Palem', '2020-02-05 01:10:45', 'Telah Diselesaikan', 'Belum Diberi Feedback'),
('05013430', '2017765483923305', 'Keamanan', 'Banyak copet', 'Pasar Raya', '2020-02-05 01:00:34', 'Diproses', 'Belum Diberi Feedback'),
('05121745', '2017765483923305', 'Kebersihan', 'Banyak sampah di kali', 'Jl. Mangga', '2020-02-05 01:10:51', 'Telah Diselesaikan', 'Belum Diberi Feedback'),
('05125895', '2065434326760503', 'Kebersihan', 'Taman banyak sampah', 'Taman Angkasa', '2020-02-05 00:58:58', 'Diproses', 'Belum Diberi Feedback');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengeluhan`
--
ALTER TABLE `pengeluhan`
  ADD PRIMARY KEY (`id_pengeluhan`),
  ADD KEY `nik` (`nik`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengeluhan`
--
ALTER TABLE `pengeluhan`
  ADD CONSTRAINT `pengeluhan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

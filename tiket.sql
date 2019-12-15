-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 11:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jdw` int(11) NOT NULL,
  `id_jdw2` int(11) NOT NULL,
  `nama_clb` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `kategori` enum('vvip','vip','ekonomi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jdw`, `id_jdw2`, `nama_clb`, `jadwal`, `kategori`) VALUES
(1301, 1, 'inter vs juventus', 'sabtu, 31 November 2019', 'vvip'),
(1302, 2, 'madrid vs barcelona', 'minggu, 31 Februari 2020', 'vvip'),
(1303, 3, 'manchester vs liverpool', 'sabtu, 32 Januari 2020', 'vvip'),
(1304, 4, 'psg vs persikapur', 'minggu, 32 May 2020', 'vvip');

-- --------------------------------------------------------

--
-- Table structure for table `stadion`
--

CREATE TABLE `stadion` (
  `id` int(255) NOT NULL,
  `nama_std` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kapasitas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stadion`
--

INSERT INTO `stadion` (`id`, `nama_std`, `lokasi`, `kapasitas`) VALUES
(1, 'guessepe meaza', 'italia', 500000),
(2, 'delle alpi', 'italia', 300000),
(3, 'santiago barnebeu', 'spanyol', 200000),
(4, 'camp nou', 'spanyol', 300000),
(5, 'old trafford', 'inggris', 400000),
(6, 'anfield', 'inggris', 300000),
(7, 'parc des princes', 'perancis', 200000),
(8, 'garnizun', 'indonesia', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(255) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `jenis_liga` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `nama_tim`, `jenis_liga`, `negara`) VALUES
(1, 'inter milano', 'champion league', 'italia'),
(2, 'realmadrid', 'champion league', 'spanyol'),
(3, 'manchester united', 'champion league', 'inggris'),
(4, 'psg', 'champion league', 'prancis'),
(5, 'juventus', 'champion league', 'italia'),
(6, 'barcelona', 'champion league', 'spanyol'),
(7, 'liverpool', 'champion league', 'inggris'),
(8, 'persikapur', 'champion league', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'markus', '25d55ad283aa400af464c76d713c07ad', 'markus'),
(4, 'lubna', '6d1637b8a1b3b128a32728e5c47b65f3', 'lubna'),
(5, 'bhanu', '3bae3e0533be12dbaab717f8acb02a56', ''),
(6, 'cahyo', '25d55ad283aa400af464c76d713c07ad', ''),
(7, 'tari', 'f024197cc16a7c1eda2e4c677616051d', ''),
(8, 'oceania', '4a332b3a019ca5bbb9d80704e3fcc27f', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jdw`);

--
-- Indexes for table `stadion`
--
ALTER TABLE `stadion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
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
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jdw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1305;

--
-- AUTO_INCREMENT for table `stadion`
--
ALTER TABLE `stadion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1209;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

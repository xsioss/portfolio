-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 08:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhsiswa`
--

CREATE TABLE `mhsiswa` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `jk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhsiswa`
--

INSERT INTO `mhsiswa` (`id`, `nama`, `sekolah`, `jurusan`, `agama`, `alamat`, `jk`) VALUES
(24, 'hengky ', 'SMK N 1 Bondowoso', 'Rekayasa perangkat lunak', 'islam', 'Bondowoso', 'laki laki'),
(26, 'dwi', 'SMK N 1 Bondowoso', 'Rekayasa perangkat lunak', 'islam', 'Bondowoso', 'laki laki');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhsiswa`
--
ALTER TABLE `mhsiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhsiswa`
--
ALTER TABLE `mhsiswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

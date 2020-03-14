-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2020 at 04:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudci`
--

-- --------------------------------------------------------

--
-- Table structure for table `humas`
--

CREATE TABLE `humas` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `mulai_pkl` date NOT NULL,
  `selesai_pkl` date NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `humas`
--

INSERT INTO `humas` (`nis`, `nama`, `mulai_pkl`, `selesai_pkl`, `kelas`, `gambar`) VALUES
('12312312', 'Davy', '2020-03-13', '2020-03-29', 'XII-RPL2', ''),
('12312312', 'Davy', '2020-04-09', '2020-04-29', 'XII-RPL2', 'spotify.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`nis`, `nama`, `kelas`) VALUES
('12312312', 'Davy', 'XII-RPL2'),
('1231232131', 'Dwi', 'XII-RPL2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `keterangan`, `kelas`, `gambar`) VALUES
('12312312', 'Davy', 'Alfa', 'XII-RPL2\r\n', ''),
('1231232131', 'Dwi 22', 'Sakit', 'XII-RPL2\r\n', ''),
('1231232131', 'Dwi 22', 'Sakit', 'XII-RPL2\r\n', ''),
('12312312', 'Davy', 'Sakit', 'XII-RPL2\r\n', ''),
('12312312', 'Davy', 'Izin', 'XII-RPL2\r\n', ''),
('1231232131', 'Dwi 22', 'Alfa', 'XII-RPL2\r\n', ''),
('12312312', 'Davy', 'Alfa', 'XII-RPL2\r\n', ''),
('1231232131', 'Dwi 22', 'Sakit', 'XII-RPL2', ''),
('1231232131', 'Dwi 22', 'Sakit', 'XII-RPL2', ''),
('1231232131', 'Dwi', 'Alfa', 'XII-RPL2', 'netflix.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_km`
--

CREATE TABLE `user_km` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_km`
--

INSERT INTO `user_km` (`id`, `name`, `email`, `image`, `password`, `role_id`, `kelas`) VALUES
(1, 'Minanto', 'minanto@gmail.com', 'default.jpg', '123', 1, 'XII RPL 2'),
(2, 'Harfi', 'harfi@gmail.com', 'default.jpg', '123', 2, 'XII RPL 3'),
(3, 'Humas', 'humas@gmail.com', 'default.jpg', '123', 3, 'Humas');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'XII-RPL2'),
(2, 'XII-RPL3'),
(3, 'humas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user_km`
--
ALTER TABLE `user_km`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_km`
--
ALTER TABLE `user_km`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

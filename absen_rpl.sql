-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 04:37 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_rpl`
--

CREATE TABLE IF NOT EXISTS `absen_rpl` (
  `no` int(11) NOT NULL,
  `noreg` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tgl` datetime NOT NULL,
  `bulan` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_rpl`
--

INSERT INTO `absen_rpl` (`no`, `noreg`, `nama`, `prodi`, `keterangan`, `tgl`, `bulan`) VALUES
(1, '3135136198', 'Anan', 'Siskom', 'Hadir', '2015-06-15 22:45:52', '6'),
(2, '3135136210', 'Anantassa', 'Sistem Komputer', 'Hadir', '2015-06-16 14:40:49', '6'),
(3, '3135136199', 'Dimas', 'Sistem Komputer', 'Hadir', '2015-06-16 14:48:32', '6'),
(4, '3135136205', 'Ditri', 'Sistem Komputer', 'Hadir', '2015-06-16 14:56:30', '6'),
(5, '3135136298', 'PUTRI', 'Sistem Komputer', 'Hadir', '2015-08-06 13:46:37', '8'),
(6, '3135136192', 'Ummu', 'Sistem Komputer', 'Hadir', '2015-08-06 13:56:18', '8'),
(7, '3135136203', 'Ghina', 'Sistem Komputer', 'Hadir', '2015-08-06 13:56:42', '8'),
(8, '3135136204', 'Dinda', 'Sistem Komputer', 'Hadir', '2015-08-06 14:29:51', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_rpl`
--
ALTER TABLE `absen_rpl`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_rpl`
--
ALTER TABLE `absen_rpl`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

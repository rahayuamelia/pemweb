-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 09:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` ( 
	`npm` varchar(20) NOT NULL, 
	`nama` varchar(200) DEFAULT NULL, 
	`ttl` date DEFAULT NULL, 
	`jenis_kelamin` char(1) DEFAULT NULL, 
	`alamat` varchar(200) DEFAULT NULL, 
	`nohp` varchar(15) DEFAULT NULL, 
	`email` varchar(100) DEFAULT NULL, 
	`jrs` varchar(100) DEFAULT NULL, 
	`fkl` varchar(100) DEFAULT NULL, 
	`univ` varchar(100) DEFAULT NULL 
	) 
ENGINE=InnoDB DEFAULT CHARSET=latin1

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `ttl`, `jenis_kelamin`, `alamat`, `nohp`, `email`, `jrs`, `fkl`, `univ`, ) VALUES
('17081010058', 'Rahayu Prabawati Amaliyah', '1999-03-16', 'P', 'Gresik', '082132368096', 'Teknik Informatika', 'Ilmu Komputer', 'UPN Surabaya' );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

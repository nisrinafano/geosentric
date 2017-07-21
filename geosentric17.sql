-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 09:59 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geosentric17`
--
CREATE DATABASE IF NOT EXISTS `geosentric17` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `geosentric17`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `news` text NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `ID` int(11) NOT NULL,
  `namaTim` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `namaKetua` text NOT NULL,
  `namaAnggota1` text NOT NULL,
  `namaAnggota2` text NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idLine` varchar(255) NOT NULL,
  `jenisLomba` varchar(255) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `No` int(11) NOT NULL,
  `Page` int(11) NOT NULL,
  `Soal` text NOT NULL,
  `A` text NOT NULL,
  `scoreA` int(11) NOT NULL,
  `B` text NOT NULL,
  `scoreB` int(11) NOT NULL,
  `C` text NOT NULL,
  `scoreC` int(11) NOT NULL,
  `D` text NOT NULL,
  `scoreD` int(11) NOT NULL,
  `E` text NOT NULL,
  `scoreE` int(11) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

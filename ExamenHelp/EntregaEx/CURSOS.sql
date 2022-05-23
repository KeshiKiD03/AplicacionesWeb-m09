-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2022 at 10:54 AM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CURSOS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alumnes`
--

CREATE TABLE `Alumnes` (
  `DNI` int(11) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `COGNOMS` varchar(30) NOT NULL,
  `ADREÇA` varchar(30) NOT NULL,
  `TELEFON` int(9) NOT NULL,
  `EDAT` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `infcursos`
--

CREATE TABLE `infcursos` (
  `ID_CURS` int(9) NOT NULL,
  `DATA_INICI` date NOT NULL,
  `DATA_FIN` date NOT NULL,
  `TITOL_CURS` int(11) NOT NULL,
  `DNI_PROFESSOR` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

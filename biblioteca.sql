-- Aaron Andal
-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2022 at 16:00 PM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `llibres`
--

CREATE TABLE `llibres` (
  `id` int(8) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `autor` varchar(64) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `puntuacio` int(8) NOT NULL,
  `genere` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `llibres`
--

INSERT INTO `llibres` (`id`, `nom`, `autor`, `isbn`, `puntuacio`, `genere`) VALUES
(101, 'Mi vecino Totoro', 'Hayao Miyazaki', '478658412', 100, 'Fantasia'),
(102, 'El viaje de Chihiro', 'Hayao Miyazaki', '478658345', 100, 'Fantasia');

-- --------------------------------------------------------

--
-- Table structure for table `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(8) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `clau` varchar(64) NOT NULL,
  `tipus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuaris`
-- 

INSERT INTO `usuaris` (`id`, `nom`, `clau`, `tipus`) VALUES
(1001, 'user1', '7w8e9r8g9d88f65g65gb757e7bee1f9r', 1),
(1002, 'admin', '47a8w7f7c5c4v6g5r9894a0e4a801fcr', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

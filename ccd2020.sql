-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2020 at 01:13 PM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burte11u`
--
CREATE DATABASE IF NOT EXISTS `burte11u` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `burte11u`;

-- --------------------------------------------------------

--
-- Table structure for table `creneau`
--

CREATE TABLE `creneau` (
  `jour` int(11) DEFAULT NULL,
  `semaine` varchar(11) NOT NULL,
  `debut` int(11) NOT NULL,
  `fin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `label` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `label`) VALUES
(1, 'Caissier titulaire'),
(2, 'Caissier assistant'),
(3, 'Gestionnaire de vrac titulaire'),
(4, 'Gestionnaire de vrac assistant'),
(5, 'Chargé d\'accueil titulaire'),
(6, 'Chargé d\'accueil assistant');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`) VALUES
(1, 'Cassandre'),
(2, 'Achille'),
(3, 'Calypso'),
(4, 'Bacchus'),
(5, 'Diane'),
(6, 'Clark'),
(7, 'Helene'),
(8, 'Jason'),
(9, 'Bruce'),
(10, 'Pénélope'),
(11, 'Ariane'),
(12, 'Lois');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

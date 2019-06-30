-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 04:37 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka1`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE `clanovi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`id`, `ime`, `prezime`) VALUES
(41, 'Ana', 'Anić'),
(42, 'Pero', 'Perić'),
(43, 'Nikola', 'Nikić'),
(44, 'Maja', 'Majić');

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id`, `naziv`) VALUES
(1, 'Gospodar prstenova'),
(2, 'Hobit'),
(3, 'Harry Potter');

-- --------------------------------------------------------

--
-- Table structure for table `posudbe`
--

CREATE TABLE `posudbe` (
  `clanovi_id` int(10) UNSIGNED NOT NULL,
  `filmovi_id` int(10) UNSIGNED NOT NULL,
  `datum_posudbe` datetime DEFAULT NULL,
  `datum_povratka` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posudbe`
--
ALTER TABLE `posudbe`
  ADD KEY `posudbe_ibfk_1` (`clanovi_id`),
  ADD KEY `posudbe_ibfk_2` (`filmovi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanovi`
--
ALTER TABLE `clanovi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posudbe`
--
ALTER TABLE `posudbe`
  ADD CONSTRAINT `posudbe_ibfk_1` FOREIGN KEY (`clanovi_id`) REFERENCES `clanovi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posudbe_ibfk_2` FOREIGN KEY (`filmovi_id`) REFERENCES `filmovi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

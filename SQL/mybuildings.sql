-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 06:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybuildings`
--
CREATE DATABASE IF NOT EXISTS `mybuildings` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mybuildings`;

-- --------------------------------------------------------

--
-- Table structure for table `appartment`
--

CREATE TABLE `appartment` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `fk_building` int(11) NOT NULL,
  `fk_owner` int(11) NOT NULL,
  `rented` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL,
  `street` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `fk_city` int(11) NOT NULL,
  `fk_syndic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE `communications` (
  `id` int(11) NOT NULL,
  `fk_resident` int(11) NOT NULL,
  `fk_syndic` int(11) NOT NULL,
  `message` text NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `dmy` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `communication_resident`
--

CREATE TABLE `communication_resident` (
  `fk_communication` int(11) NOT NULL,
  `fk_resident` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `birthDate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `birthDate` date NOT NULL,
  `fk_appartment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `syndics`
--

CREATE TABLE `syndics` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `fk_resident` int(11) NOT NULL,
  `fk_syndic` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appartment`
--
ALTER TABLE `appartment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appartment.fk_building` (`fk_building`),
  ADD KEY `appartment.fk_owner` (`fk_owner`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buildings.fk_city` (`fk_city`),
  ADD KEY `buildings.fk_syndic` (`fk_syndic`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communications.fk_resident` (`fk_resident`),
  ADD KEY `communications.fk_syndic` (`fk_syndic`);

--
-- Indexes for table `communication_resident`
--
ALTER TABLE `communication_resident`
  ADD UNIQUE KEY `fk_communication` (`fk_communication`,`fk_resident`),
  ADD KEY `communication_resident.fk_resident` (`fk_resident`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `residents.fk_appartment` (`fk_appartment`);

--
-- Indexes for table `syndics`
--
ALTER TABLE `syndics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets.fk_resident` (`fk_resident`),
  ADD KEY `tickets.fk_syndic` (`fk_syndic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appartment`
--
ALTER TABLE `appartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syndics`
--
ALTER TABLE `syndics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appartment`
--
ALTER TABLE `appartment`
  ADD CONSTRAINT `appartment.fk_building` FOREIGN KEY (`fk_building`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appartment.fk_owner` FOREIGN KEY (`fk_owner`) REFERENCES `owners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `buildings.fk_city` FOREIGN KEY (`fk_city`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buildings.fk_syndic` FOREIGN KEY (`fk_syndic`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `communications`
--
ALTER TABLE `communications`
  ADD CONSTRAINT `communications.fk_resident` FOREIGN KEY (`fk_resident`) REFERENCES `residents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `communications.fk_syndic` FOREIGN KEY (`fk_syndic`) REFERENCES `syndics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `communication_resident`
--
ALTER TABLE `communication_resident`
  ADD CONSTRAINT `communication_resident.fk_communication` FOREIGN KEY (`fk_communication`) REFERENCES `communications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `communication_resident.fk_resident` FOREIGN KEY (`fk_resident`) REFERENCES `residents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `residents`
--
ALTER TABLE `residents`
  ADD CONSTRAINT `residents.fk_appartment` FOREIGN KEY (`fk_appartment`) REFERENCES `appartment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets.fk_resident` FOREIGN KEY (`fk_resident`) REFERENCES `residents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets.fk_syndic` FOREIGN KEY (`fk_syndic`) REFERENCES `syndics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

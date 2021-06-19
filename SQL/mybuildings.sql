-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 05:27 PM
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
  `number` int(11) DEFAULT NULL,
  `building` int(11) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `rented` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appartment`
--

INSERT INTO `appartment` (`id`, `number`, `building`, `owner`, `rented`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `street` text DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `city` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `street`, `number`, `city`) VALUES
(1, 'Residence Fabiola', 'Rue de La Louve ', 5, 3),
(2, 'Maison de Dupont', 'Apple Street', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `build_com`
--

CREATE TABLE `build_com` (
  `id` int(11) NOT NULL,
  `building` int(11) DEFAULT NULL,
  `message` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `build_com`
--

INSERT INTO `build_com` (`id`, `building`, `message`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `postcode`) VALUES
(1, 'La Louvière ', 7100),
(2, 'Hannut', 4280),
(3, 'Jumet', 6040);

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE `communications` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`id`, `title`, `message`) VALUES
(1, 'Welcome', 'Hi resident, \r\n\r\nWelcome to the new building ever built with high tech. \r\n\r\nWe hope you will find what you are looking for.\r\n\r\nthe syndic ');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `telephone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `birthDate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `firstName`, `lastName`, `telephone`, `email`, `birthDate`) VALUES
(1, 'Gregory', 'Cuozzo', '0472454308', 'astro.informatique.cuozzo@gmail.com', '02/03/1989');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `telephone` text DEFAULT NULL,
  `birthDate` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `appartment` int(11) DEFAULT NULL,
  `building` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `firstName`, `lastName`, `telephone`, `birthDate`, `email`, `appartment`, `building`) VALUES
(2, 'Norman ', 'Piryns', '+32 493 419 480', '1997-07-08', 'normanpiryns@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `appartment` int(11) DEFAULT NULL,
  `building` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `description`, `user`, `appartment`, `building`, `status`) VALUES
(1, 'water leak', 'there is a leak in the bathroom ', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `session_token` varchar(255) DEFAULT NULL,
  `session_time` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `email`, `session_token`, `session_time`, `status`) VALUES
(1, 'Gregory', '$2y$10$rB5l3o7rWw3bMjRsq1trTev69iBkDkLCb2bDzlPqrMtWsPEtmHuZi', 'gregg.ozzo@yahoo.com', 'abfdeba9b1d83496.1624104480', NULL, ''),
(6, 'Syndic', '$2y$10$FhNjMxcHofhlrNOH2oNxr.lEVyvqv9qXlE2Bq6jLs285xxr45fwvG', 'Syndic@ifosup.com', 'cbaa84378d45089f.1624115486', NULL, NULL),
(7, 'Norman', '$2y$10$LhCVLheMFAghq8s8y/coQ.0iL00Aj8CEokzedDFuS/m9.ZjYWjU2a', 'bemerauld@gmail.com', '2b0ad87693bd4770.1624113419', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appartment`
--
ALTER TABLE `appartment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_owner` (`owner`),
  ADD KEY `fk_build` (`building`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city` (`city`);

--
-- Indexes for table `build_com`
--
ALTER TABLE `build_com`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_building` (`building`),
  ADD KEY `fk_message` (`message`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_appartment` (`appartment`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user`),
  ADD KEY `fk_appartment` (`appartment`),
  ADD KEY `fk_building` (`building`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appartment`
--
ALTER TABLE `appartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `build_com`
--
ALTER TABLE `build_com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appartment`
--
ALTER TABLE `appartment`
  ADD CONSTRAINT `fk_build` FOREIGN KEY (`building`) REFERENCES `buildings` (`id`),
  ADD CONSTRAINT `fk_owner` FOREIGN KEY (`owner`) REFERENCES `owners` (`id`);

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`city`) REFERENCES `cities` (`id`);

--
-- Constraints for table `build_com`
--
ALTER TABLE `build_com`
  ADD CONSTRAINT `fk_building` FOREIGN KEY (`building`) REFERENCES `buildings` (`id`),
  ADD CONSTRAINT `fk_message` FOREIGN KEY (`message`) REFERENCES `communications` (`id`);

--
-- Constraints for table `residents`
--
ALTER TABLE `residents`
  ADD CONSTRAINT `fk_appartment` FOREIGN KEY (`appartment`) REFERENCES `appartment` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`appartment`) REFERENCES `appartment` (`id`),
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`building`) REFERENCES `buildings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

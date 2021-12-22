-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2021 at 02:58 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(45) NOT NULL DEFAULT 'no_img.png',
  `name` varchar(45) NOT NULL,
  `id_provider` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `img`, `name`, `id_provider`, `description`, `cost`) VALUES
(48, '20211221211509788.png', '123123123', 6, '223243234', 212);

-- --------------------------------------------------------

--
-- Table structure for table `Providers`
--

CREATE TABLE `Providers` (
  `id` int(11) UNSIGNED NOT NULL,
  `Provider` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Providers`
--

INSERT INTO `Providers` (`id`, `Provider`) VALUES
(1, 'CHINT'),
(2, 'IEK'),
(3, 'MBS'),
(4, 'Diel SRL'),
(5, 'СВЭЛ'),
(6, 'Lol');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `interes` varchar(200) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `vk` varchar(70) NOT NULL,
  `blood` varchar(11) NOT NULL,
  `factor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `password`, `gender`, `interes`, `birthday`, `vk`, `blood`, `factor`) VALUES
(6, 'dollino@mail.ru', '+', 'c4def78d3844501120879d2c7ab0f73f', 'Uhg Rut GGG', 'https://vk.com/im?peers=311514350_202107318', '1', '+', 'м', '2021-12-15'),
(7, 'uollino@mail.ru', '+', 'c4def78d3844501120879d2c7ab0f73f', 'Uhg Rut GGG', 'https://vk.com/im?peers=311514350_202107318', '1', '+', 'м', '2011-01-01'),
(8, 'dillino@mail.ru', '+', 'c4def78d3844501120879d2c7ab0f73f', 'Uhg Rut GGG', 'https://vk.com/im?peers=311514350_202107318', '1', '+', 'м', '2021-12-22'),
(9, 'vlad@mail.ru', 'Uhg Rut GGG', 'c4def78d3844501120879d2c7ab0f73f', 'м', '+', '2021-12-16', 'https://vk.com/im?peers=311514350_202107318', '1', '+'),
(10, 'fghfgh@mail.ru', 'Uhg Rut GGG', 'c4def78d3844501120879d2c7ab0f73f', 'м', '+', '2021-12-23', 'https://vk.com/im?peers=311514350_202107318', '1', '+'),
(11, '547567456@mail.ru', 'Uhg Rut GGG', 'c4def78d3844501120879d2c7ab0f73f', 'м', '+', '2021-12-14', 'https://vk.com/im?peers=311514350_202107318', '1', '+'),
(12, '12345', 'Uhg Rut GGG', '827ccb0eea8a706c4c34a16891f84e7b', 'м', '+', '2021-12-14', 'https://vk.com/im?peers=311514350_202107318', '1', '+'),
(14, '123@mail.ru', 'Uhg Rut GGG', 'c4def78d3844501120879d2c7ab0f73f', 'м', '+', '2021-12-04', 'https://vk.com/im?peers=311514350_202107318', '1', '+'),
(15, 'dollino', 'login', 'b26e05f6ce7d1c67720538f33f77e3b5', '2', '+', '2021-11-30', 'https://vk.com/im?peers=311514350_202107318', '4', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_provider`);

--
-- Indexes for table `Providers`
--
ALTER TABLE `Providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `Providers`
--
ALTER TABLE `Providers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_provider`) REFERENCES `Providers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

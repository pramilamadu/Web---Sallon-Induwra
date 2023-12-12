-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 07:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingusers`
--

CREATE TABLE `bookingusers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(25) NOT NULL,
  `sbranch` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(25) NOT NULL,
  `message` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingusers`
--

INSERT INTO `bookingusers` (`id`, `name`, `phonenumber`, `sbranch`, `date`, `email`, `time`, `message`) VALUES
(1, 'Binithi Iresha Lelwala Guruge ', 0, 'sbranch', '0000-00-00', 'pramilamaduwantha38@gmail.com', 0, 'drdredd'),
(2, '', 0, 'sbranch', '0000-00-00', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingusers`
--
ALTER TABLE `bookingusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingusers`
--
ALTER TABLE `bookingusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

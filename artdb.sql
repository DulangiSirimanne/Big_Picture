-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 02:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `imagePath` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `title`, `price`, `imagePath`, `status`) VALUES
(1, 'The Silent Whisper', 35000, 'uploads/1.jpg', 1),
(2, 'The Village', 30000, 'uploads/2.jpg', 1),
(3, '\r\n			Paint My Love', 65000, 'uploads/3.jpg', 1),
(4, 'Mirror You', 40000, 'uploads/4.jpg', 1),
(5, 'Think Loud', 25000, 'uploads/5.jpg', 1),
(6, 'Traditional Art', 35000, 'uploads/6.jpg', 1),
(7, 'The Longest Ride ', 40000, 'uploads/7.jpg', 1),
(8, 'Night Changes', 30000, 'uploads/8.jpg', 1),
(9, 'Mr Nobody', 19000, 'uploads/9.jpg', 1),
(11, 'Abstract Art', 50000, 'uploads/10.jpg', 1),
(12, 'Rising Sunshine', 45000, 'uploads/11.jpg', 1),
(31, 'The Long Night', 55000, 'uploads/15.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `firstName`, `lastName`, `country`, `subject`) VALUES
(1, 'Mary', 'Emery', 'England', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `price_order` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `contactNumber` varchar(10) NOT NULL,
  `contactAddress` varchar(100) NOT NULL,
  `NIC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `age`, `date`, `contactNumber`, `contactAddress`, `NIC`) VALUES
(1, 'dulangi', '123', 0, '', '', '', ''),
(2, 'test', '456', 21, '2021-06-08', '1234567890', 'Baththaramulla', '123456789v'),
(3, 'Mary', '456', 22, '2021-06-16', '0987654321', 'Kiribathgoda', '456123789v'),
(4, 'Tom', '789', 19, '2021-06-17', '0716784578', '24/12, Wickumpura,\r\nHaramanis Road, Attidiya', '903443789v'),
(5, 'Jack', '890', 30, '2021-06-17', '0775581559', 'Liberty', '386123789v');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

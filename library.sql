-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 11:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `Pix` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `author`, `Pix`, `Price`, `Details`, `Category`, `date_created`) VALUES
(2, 'The Robins', 'DC', 'books/6c595d99-78ed-48d6-80ba-976cd7d7828f.jpg', 99, 'Story on how the a group of rebellious teens put up the mantle of robin the absence of batman', 'Comic', '2017-03-27 14:36:42'),
(3, 'The Eye', '', 'books/1984.jpg', 50, 'George Orwell Intake on the eye', 'Fiction', '2017-03-27 14:40:35'),
(4, 'Intelligent Silent Crisis', 'Kode Forest', 'books/papular-books55.png', 90, 'Kode forest an intelligent writer insight into the term "SILENCE".\r\nRead through to see how the protagonist battle silence.', 'Fiction', '2017-03-27 17:00:51'),
(5, 'The Human Interface', 'Jef Raskin', 'books/385px-The_Humane_Interface_book_cover.jpg', 80, 'New Direction for designing interactive systems ', 'Educational', '2017-03-28 14:37:35'),
(7, 'Boring Girls', 'Sara Taylor', 'books/boring-girls-design-david-gee.jpg', 60, 'story of how a  group of boring girls find love', 'Romance', '2017-04-04 12:41:13'),
(8, 'Urban Jungle', 'Jack Termini', 'books/canva-black-yellow-urban-city-photo-collage-book-cover-MACCjMdvlEA.jpg', 30, 'The Most iconic photos of New York City', 'Educational', '2017-04-04 12:43:58'),
(9, 'Reponsive Web Design', 'Jeremy Kieth', 'books/aba-04.jpg', 60, 'Step by Step approach to Web Design', 'Educational', '2017-04-04 12:49:07'),
(10, 'The colors of Nature', 'Shutter Lab Photography', 'books/canva-colorful-nature-collage-book-cover-MACCiZU_VCY.jpg', 50, 'an insight to the development of beautiful nature picture', 'Educational', '2017-04-04 16:58:38'),
(13, 'make thing happen', 'elizabeth', 'books/business_bookcover.png', 70, 'book on ', 'Romance', '2017-04-06 14:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Rating` float NOT NULL,
  `Prid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommendation`
--

INSERT INTO `recommendation` (`id`, `Name`, `Rating`, `Prid`) VALUES
(1, 'semipe', 3.2375, '2'),
(2, 'The colors of Nature', 3, '10'),
(3, 'The Eye', 3.35, '3'),
(4, 'Boring Girls', 2.5, '7'),
(5, 'The Human Interface', 4.45, '5');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user`, `password`, `surname`, `firstname`, `address`, `email`, `phone_number`, `date_created`) VALUES
(1, 'john1996', 'pass', 'John', 'Odiwe', '14b ojiaka street', 'johnodiwe@gmail.com', '08131137110', '2017-03-27 10:53:33'),
(2, 'eripapa', 'johnson', 'erijo', 'johnson', 'b304 paul hall', 'eripapa@yahoo.com', '09081124995', '2017-03-27 10:53:33'),
(3, 'esenwa', 'wizzy', 'esenwa', 'peter', 'b105 paul hall', 'peter@gmail.com', '07099784567', '2017-03-27 10:53:33'),
(4, 'semipe48@gmail.com', '$2y$10$7YTNJ7UPKBYxQeT1atRPTuRt9Bb8ZepJ9dotOvvO4VlnlYAxJASgq', 'modupe', 'bolu', '9,oga boss street', 'semipe48@gmail.com', '09088788776', '2017-03-27 11:11:32'),
(5, 'johnodiwe@yahoo.com', '$2y$10$Ml.mNH/K6QzDhXD8irQbUeEtC7bGWqmpyrPCoFTjwNz56iFgfXKs2', 'odiwe', 'john', 'd104 paul hall', 'johnodiwe@yahoo.com', '08131137110', '2017-03-27 11:52:09'),
(6, 'tobi@gmail.com', '$2y$10$hkl2BGyEf9PYtAoAvsgujuWaXXrOuAJ8pf8UOBFsd4EySsLuNbUVC', 'tobi', 'onasanya', 'd206 paull hall', 'tobi@gmail.com', '098765432187', '2017-03-27 11:59:29'),
(7, 'tom@gmail.com', '$2y$10$lMi8ROCsAjU2c/aYCOjA0OD7y.pc16RM9hmE0MPCB9uaUedZOzOQ6', 'hardy', 'Tom', '304 paull hall', 'tom@gmail.com', '08134546778', '2017-03-27 17:48:54'),
(8, 'okekedonald@yahoo.com', '$2y$10$OwHV3T9Rih8LCCKWtB8ZM.fv9qCDUFgygvu8aHiCMcnML4QgzZ.CS', 'Okeke', 'Donald', '408 paul hall', 'okekedonald@yahoo.com', '09806677888', '2017-04-05 01:27:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 01:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borntogive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` mediumtext NOT NULL,
  `add1` mediumtext NOT NULL,
  `add2` mediumtext NOT NULL,
  `telno` mediumtext NOT NULL,
  `phoneno` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `add1`, `add2`, `telno`, `phoneno`) VALUES
(1, 'careers@travleu.com', 'Manhatta Hall Veerpolder 7 2361 Empor ', 'Ltd 1258, Melbourne, Australia', '+51 900 321 4568', '+501 860 3210');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `about` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `twitter` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `about`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'Travelling explores the life of any human, we will help you to achieve that - Travel Crunch', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `name`) VALUES
(1, 'Home'),
(2, 'Destinations'),
(3, 'Travel Styles'),
(4, 'Travel Deals'),
(5, 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `seotag`
--

CREATE TABLE `seotag` (
  `id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `tags` longtext NOT NULL,
  `meta_tag` longtext NOT NULL,
  `keywords` longtext NOT NULL,
  `indexing` tinyint(1) NOT NULL DEFAULT 1,
  `follow` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `logo` mediumtext NOT NULL,
  `title1` mediumtext NOT NULL,
  `tagline1` mediumtext NOT NULL,
  `slide1` mediumtext NOT NULL,
  `slide2` mediumtext NOT NULL,
  `slide3` mediumtext NOT NULL,
  `ftitle1` mediumtext NOT NULL,
  `ftitle2` mediumtext NOT NULL,
  `ftitle3` mediumtext NOT NULL,
  `feature1` longtext NOT NULL,
  `feature2` longtext NOT NULL,
  `feature3` longtext NOT NULL,
  `homedivimg` mediumtext NOT NULL,
  `homedivtext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `logo`, `title1`, `tagline1`, `slide1`, `slide2`, `slide3`, `ftitle1`, `ftitle2`, `ftitle3`, `feature1`, `feature2`, `feature3`, `homedivimg`, `homedivtext`) VALUES
(1, 'logo3.png', 'Experience the Wonderrr', 'People don’t take trips, trips take People', 'img-012.jpg', 'img-022.jpg', 'img-032.jpg', 'Luxury Hotels', 'Tourist Guide', 'Flights Tickets', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'placeholder-01.png', 'Travel teaches us that we’re stronger when we come together. And that’s \r\nnever been more true. We can’t wait to share our big, beautiful world \r\nwith you again.<br>Our world deserves more you..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seotag`
--
ALTER TABLE `seotag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seotag`
--
ALTER TABLE `seotag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

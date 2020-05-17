-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 08:29 PM
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
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` longtext NOT NULL,
  `profile` longtext NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `feedback`, `profile`, `isdeleted`) VALUES
(1, 'John Smith', 'Fresh, clean drinking water is critical for these regions to combat and treat fever, malnourishment and a host of waterborne diseases that these communities face. We’re incredibly grateful to have played a part in creating this life-changing impact, and we know that by continuing to work together we can do even more around the world. Thanks to everyone who supported this cause!', 'logo4.PNG', 0),
(3, 'Ronak Pareek', 'Fresh, clean drinking water is critical for these regions to combat and treat fever, malnourishment and a host of waterborne diseases that these communities face. We’re incredibly grateful to have played a part in creating this life-changing impact, and we know that by continuing to work together we can do even more around the world. Thanks to everyone who supported this cause!', 'logo2.PNG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 11:27 AM
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
  `homedivtext` longtext NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `logo`, `title1`, `tagline1`, `slide1`, `slide2`, `slide3`, `ftitle1`, `ftitle2`, `ftitle3`, `feature1`, `feature2`, `feature3`, `homedivimg`, `homedivtext`, `about`) VALUES
(1, '<p class=\"lead\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 28px; font-family: Lato, sans-serif; color: rgb(137, 137, 137);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; color: rgb(137, 137, 137);\">Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p><h3 style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.5em; font-size: 24px; font-family: &quot;Playfair Display&quot;, serif; color: rgb(51, 51, 51); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit;\">There are multiple ways you can help others to change their lives</h3><ul class=\"checks\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; list-style: none; color: rgb(137, 137, 137);\"><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Start a workplace campaign</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Youth involvement</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Become a Volunteer</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Become a partner</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Representative Program</li></ul>', 'Experience the Wonderrr', 'People don’t take trips, trips take People', 'img-012.jpg', 'img-022.jpg', 'img-032.jpg', 'Luxury Hotels', 'Tourist Guide', 'Flights Tickets', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'placeholder-01.png', 'Travel teaches us that we’re stronger when we come together. And that’s \r\nnever been more true. We can’t wait to share our big, beautiful world \r\nwith you again.<br>Our world deserves more you..', '<p class=\"lead\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 28px; font-family: Lato, sans-serif; color: rgb(137, 137, 137);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; color: rgb(137, 137, 137);\">Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p><h3 style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.5em; font-size: 24px; font-family: &quot;Playfair Display&quot;, serif; color: rgb(51, 51, 51); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit;\">There are multiple ways you can help others to change their lives</h3><ul class=\"checks\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; list-style: none; color: rgb(137, 137, 137);\"><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Start a workplace campaign</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Youth involvement</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Become a Volunteer</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Become a partner</li><li style=\"margin: 5px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit;\"><span class=\"fa fa-check\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; color: rgb(66, 184, 212);\"></span>&nbsp;Representative Program</li></ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

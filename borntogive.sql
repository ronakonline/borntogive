-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 03:23 PM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `banner` longtext NOT NULL,
  `blog` longtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `banner`, `blog`, `created`, `isdeleted`) VALUES
(1, 'This is the first blog of this website stay tuned for more!', 'indiatour2.jpg', '<p>This is the best ever blog i am gonna write.</p>  ', '2020-05-16 10:45:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `tagline` mediumtext NOT NULL,
  `banner_img` longtext NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `tagline`, `banner_img`, `isdeleted`) VALUES
(1, 'Travelling ', 'way to explore the life', 'last.PNG', 0),
(4, 'Education', 'Every one has right to be educated', 'b4.jpg', 0),
(5, 'Education', 'Every one has right to be educated', 'cocacola.png', 1),
(6, 'Technology', 'We are living in the world where humans are trash compares to money', 'itly2.jpg', 0);

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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `cid` int(11) NOT NULL,
  `banner_img1` longtext NOT NULL,
  `youwill` longtext NOT NULL,
  `youget` longtext NOT NULL,
  `banner_img2` longtext NOT NULL,
  `whohelp` longtext NOT NULL,
  `banner_img3` longtext NOT NULL,
  `details` longtext NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `cid`, `banner_img1`, `youwill`, `youget`, `banner_img2`, `whohelp`, `banner_img3`, `details`, `isdeleted`, `created`) VALUES
(1, 'Travel World with us when you want', 1, 'Machine-Learning-Explained34.png', '<ul><li>Score $100,000 to take your family’s life to the next level—whether that means planning your dream wedding, paying off your parents’ debt, sending your kids to school… anything!\r\n</li>\r\n\r\n<li>\r\nFeel the lightness that comes with the freedom of not worrying about the cost of your next big step\r\n</li\r\n\r\n<li>\r\nSupport DonorsChoose and their work providing resources for public school classrooms in need </li></ul>', 'You’ve won $100,000. You read that right. One hundred. Thousand. Big ones. Now, take a deep breath and think of the massive difference this could make in your life. Want to pursue a new career, but need extra training? $100,000 can help with that. Did your kid just get into college? $100,000 will definitely be useful. Still thinking on all the big dreams you could make come true? $100,000 will be there when you’re ready. The world is your oyster. And this $100,000 prize is your pearl.\r\n\r\n\r\n\r\nNo donation or payment is necessary to enter or win this sweepstakes.', 'cocacola.png', 'DonorsChoose makes it easy for anyone to help teachers and students in need, so that students in every community have the tools and experiences they need for a great education. Here’s how it works: Public school teachers create requests for educational resources. This could mean anything from books, to butterfly cocoons, to robotics kits. Donors find a project that inspires them and can give as little as $1. When the project is fully funded, the DonorsChoose team ships the items directly to the teachers and students. Your generosity will help DonorsChoose continue to mobilize donors to make learning more engaging for students across the country.', 'iotsensor.jpg', 'Details of this', 0, '2020-05-14 10:32:58'),
(2, 'Tech is everything', 6, 'GamingLogo9.png', 'Technology has evolved to much', 'You will get everything you need by technology', 'GamingLogo10.png', 'It helps all kind of people&nbsp;', 'GamingLogo11.png', 'Hope you guys know what you want', 0, '2020-05-14 10:44:01'),
(3, 'Food tastes of different countries (You may like)', 1, 'GamingLogo12.png', '<ul><li>Score $100,000 to take your family’s life to the next level—whether that means planning your dream wedding, paying off your parents’ debt, sending your kids to school… anything!\r\n</li>\r\n\r\n<li>\r\nFeel the lightness that comes with the freedom of not worrying about the cost of your next big step\r\n</li\r\n\r\n<li>\r\nSupport DonorsChoose and their work providing resources for public school classrooms in need </li></ul>', '<div>You’ve won $100,000. You read that right. One hundred. Thousand. Big ones. Now, take a deep breath and think of the massive difference this could make in your life. Want to pursue a new career, but need extra training? $100,000 can help with that. Did your kid just get into college? $100,000 will definitely be useful. Still thinking on all the big dreams you could make come true? $100,000 will be there when you’re ready. The world is your oyster. And this $100,000 prize is your pearl.</div><div><br></div><div><br></div><div><br></div><div>No donation or payment is necessary to enter or win this sweepstakes.</div>', 'GamingLogo13.png', 'DonorsChoose makes it easy for anyone to help teachers and students in need, so that students in every community have the tools and experiences they need for a great education. Here’s how it works: Public school teachers create requests for educational resources. This could mean anything from books, to butterfly cocoons, to robotics kits. Donors find a project that inspires them and can give as little as $1. When the project is fully funded, the DonorsChoose team ships the items directly to the teachers and students. Your generosity will help DonorsChoose continue to mobilize donors to make learning more engaging for students across the country.', 'GamingLogo14.png', 'Hope you guys know what you want', 0, '2020-05-15 08:24:37'),
(4, '7 Wonders of the world - Taj mahal one of them', 1, 'india3.jpg', '<ul><li>Taj mahal One of the best places of INDIA.</li><li>A year revenue of this place is half of the GDP of INDIA.</li><li>Feel the lightness that comes with the freedom of not worrying about the cost of your next big step<br></li></ul>', '<span style=\"color: rgb(137, 137, 137); font-family: Lato, sans-serif; font-size: 20px;\">You’ve won $100,000. You read that right. One hundred. Thousand. Big ones. Now, take a deep breath and think of the massive difference this could make in your life. Want to pursue a new career, but need extra training? $100,000 can help with that. Did your kid just get into college? $100,000 will definitely be useful. Still thinking on all the big dreams you could make come true? $100,000 will be there when you’re ready. The world is your oyster. And this $100,000 prize is your pearl. No donation or payment is necessary to enter or win this sweepstakes.</span>', 'india4.jpg', '<span style=\"color: rgb(137, 137, 137); font-family: Lato, sans-serif; font-size: 20px;\">DonorsChoose makes it easy for anyone to help teachers and students in need, so that students in every community have the tools and experiences they need for a great education. Here’s how it works: Public school teachers create requests for educational resources. This could mean anything from books, to butterfly cocoons, to robotics kits. Donors find a project that inspires them and can give as little as $1. When the project is fully funded, the DonorsChoose team ships the items directly to the teachers and students. Your generosity will help DonorsChoose continue to mobilize donors to make learning more engaging for students across the country.</span>', 'india5.jpg', '<p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Winners:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">You (“Winner”)</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Timing:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">TBD</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Location:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">TBD</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Sponsor:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Omaze, Inc. (“Sponsor”)</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Charity:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Dempsey Center (\"Charity\")</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">All donations made in connection with a fundraising campaign are paid to Charities Aid Foundation of America (“CAFA”), an IRS-recognized, U.S. public charity whose mission is to make giving internationally and domestically safe, easy and effective for U.S. donors. CAFA prequalifies each Charity as an eligible recipient of CAFA grants. At the end of each fundraising campaign, so long as the Charity continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to the Charity of the net proceeds of the fundraising campaign.*</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Prize Provider:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Omaze, Inc. (\"Prize Provider\")</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Grand Prize Details:</strong>&nbsp;Winner will receive a 2020 Porsche Taycan Turbo and $20,000 USD. Winner can choose to meet Patrick Dempsey in Los Angeles, CA.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">U.S. sales tax prepaid and up to 25% of ARV, excluding any additional cash prize component (i.e., ARV less any additional cash prize), will be paid by Omaze to the winner to put towards any required U.S. income taxes.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">All third party names and trademarks are the property of their respective owners.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">The vehicle prize is to be provided on an “as is” basis without any representations and warranties whatsoever. Sponsor does not represent or warrant that the vehicle adheres to or is in compliance with any applicable state or federal safety, environmental and/or other standards and requirements in order for the vehicle to be legally operational or certified for use on public roadways. It is the sole responsibility of the winner to evaluate the vehicle and ensure that it satisfies all applicable standards and legal requirements for its intended use and operation.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Sweepstakes Start Date:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">March 17, 2020</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Deadline to Enter:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">July 14, 2020 at 11:59pm PT</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Winner Announced:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">On or around July 29, 2020</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Approximate Retail Value:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">$200,000</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Who\'s Eligible:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">You must be at least 18 years old to win.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Winners must be a resident of North America or Europe excluding Belgium, Italy, and the United Kingdom. In certain countries, local rules and laws may restrict or prohibit the award of certain prizes or impose additional restrictions on participation. Entry is subject to all local laws. See our Sweepstakes Official Rules for more details. Employees, officers, and directors of Sponsor, Charity, or Prize Provider, and members of their immediate families and households, are not eligible to win.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Individuals may not receive more than one major/grand prize and one minor prize within the same 18 month period.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">How to Enter:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Visit Omaze.com to utilize any of our methods of entry. Receive bonus entries for donations. See our Sweepstakes Official Rules for more details. Odds of winning depend on the number of entries held.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Winner Confirmation Process:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Within 10 business days of campaign close, we’ll use an automated random drawing process to draw a potential winner(s) for that campaign. A confirmation process, which may include a background check, will then take place to ensure the potential winner meets the legal standards required. Winner and, if applicable, their guest(s) agree to cooperate fully with Omaze in Omaze conducting any background check(s), which includes providing information requested by Omaze including, but not limited to, full legal names and addresses. If the Prize includes meeting a celebrity, meeting a public figure, or attending a special event and any background check indicates, in Omaze’s sole discretion, that the potential winner or the potential winner’s guest(s) pose a danger to or may harm the reputation of any person or entity involved in the sweepstakes, Omaze may disqualify said winner and move on to the next randomly drawn potential winner. Pending a positive outcome of the confirmation process, an Omaze representative will notify the potential winner via email and/or phone. The potential winner must respond within the time period designated in the notification, or Omaze may move on to another randomly drawn potential winner. Before confirming a potential winner as the winner, Omaze may require the potential winner to confirm their eligibility. Once that’s done, the potential winner and guest(s) must execute and return all required documents within the time frame specified by Omaze. If you do not execute and return all required documents within the time frame specified by Omaze, you will forfeit the Prize and Omaze will move on to another randomly drawn potential winner.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">NO PURCHASE, PAYMENT, OR CONTRIBUTION NECESSARY TO ENTER OR WIN. Contributing will not improve chances of winning. Void where prohibited.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"><strong style=\"font-weight: bold;\">Transparency:</strong></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">At Omaze, we believe fundraising should be about impact, not percentages. Our model allows us, in partnership with Charities Aid Foundation America (we call them CAFA), to really make a difference and disrupt the way society traditionally thinks about charitable giving.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">Here’s how it works: Omaze and CAFA work together to offer incredible prizes and experiences that anyone can potentially win. You don’t have to donate to enter, but if you do, your donation to CAFA is then used to make a charitable grant to a great cause, which we love. Omaze pays for everything that’s needed to run the sweepstakes, which means the only ones taking a chance are the entrants (you!)—not the charity. The nonprofit can spend less time worrying about raising funds, and instead focus their energy on doing awesome work.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">*Omaze also invests in securing the prizes for the typical Omaze Owned campaign, so for these, from every dollar you donate, 15 cents is retained by CAFA, all of which is then used by CAFA to make a grant to the associated charity. If there are multiple charities, then grants of equal share are made to each charity. 70 cents is typically used to actually get the prize, process payments and advertise to awesome people like you (Omaze Owned campaigns require more significant marketing efforts by Omaze and do not rely (or rely to a much smaller degree) on the work and name of celebrities to help raise awareness and promote the campaign). The remaining 15 cents of your dollar goes to Omaze—it’s used to cover the cost of providing and maintaining the technology and team that makes this all happen.</p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\"></p><p style=\"transition: font-size 400ms ease-in-out 0s; font-family: National, sans-serif; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; font-size: medium; line-height: 1.2; color: rgb(26, 26, 26);\">The result? Causes get a guaranteed grant with no risk and no overhead or investment, our lucky winners get awesome prizes, and everyone else gets to help a great cause and spread joy!</p>', 0, '2020-05-15 13:50:52');

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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid_fk` (`cid`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `cid_fk` FOREIGN KEY (`cid`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

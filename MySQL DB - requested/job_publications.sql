-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 04:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_publications`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(10, 'Maro', '$argon2i$v=19$m=65536,t=4,p=1$SngwRlFLSFl2SW1SNkJIYw$RNjbr2yt/sIKh9W6kNx7lWVSu4H1RJryqpjYISXV71o'),
(11, 'Peter', '$argon2i$v=19$m=65536,t=4,p=1$TmRUMzVQa3dTbkJGVHM1Zw$Hm7BUtgzI+zpOorkPGBocYOCUb52jUevDXH9ekZPeS0'),
(12, 'pesho', '$argon2i$v=19$m=65536,t=4,p=1$N0ouMUl6WGJFTVcudTFIMQ$5tc9XnzxO7i1WnzOFYj+Gb0fsOHyxny094BdBTOM+w8');

-- --------------------------------------------------------

--
-- Table structure for table `job_offers`
--

DROP TABLE IF EXISTS `job_offers`;
CREATE TABLE `job_offers` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `posted_on` date DEFAULT curdate(),
  `approved` varchar(50) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_offers`
--

INSERT INTO `job_offers` (`id`, `title`, `description`, `company`, `salary`, `posted_on`, `approved`) VALUES
(5, 'Back-End Dev', 'Our band of superheroes are looking for a self-driven, highly organised individual who will join the team in creating our most important products.\r\n\r\nLocation is unimportant, as long as you are available, enthusiastic, committed, passionate, and know your stuff.\r\n\r\nFor this role, we need a superhero who will take on the challenges of working in one of the leading WordPress companies, enhancing our website, products, and services, backed by a quality team of pros.\r\n\r\nResponsibilities:\r\nYou’ll be part of a development team working on our flagship products. It’s going to be epic!', 'My New Company', 3333, '2021-04-14', 'true'),
(7, 'Front-End', 'Test', 'Another Company', 1000, '2021-04-15', 'true'),
(14, 'Another Job Offer', 'Text...\r\nMore text...\r\nEnd of text.', 'Another Company', 1111, '2021-04-16', 'true'),
(16, 'Test Offer', 'test', 'My Company', 5000, '2021-04-16', 'true'),
(17, 'Not Approved Offer', 'Some description...', 'Some Company', 11111, '2021-04-16', 'false'),
(18, 'Test', 'Test\r\nTest\r\nTest', 'My Company', 555, '2021-04-16', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_offers`
--
ALTER TABLE `job_offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_offers`
--
ALTER TABLE `job_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql304.epizy.com
-- Generation Time: Feb 10, 2023 at 03:24 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32968153_saloon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `p_id` int NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_old_price` varchar(10) NOT NULL,
  `p_current_price` varchar(10) NOT NULL,
  `p_qty` int DEFAULT NULL,
  `p_featured_photo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `p_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p_short_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p_feature` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p_service_time` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p_total_view` int DEFAULT NULL,
  `p_is_featured` int DEFAULT NULL,
  `p_is_active` int DEFAULT NULL,
  `ecat_id` int DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_old_price`, `p_current_price`, `p_qty`, `p_featured_photo`, `p_description`, `p_short_description`, `p_feature`, `p_service_time`, `p_total_view`, `p_is_featured`, `p_is_active`, `ecat_id`) VALUES
(11, 'Head Massage', '400.00', '69', NULL, 'head_massage.jpg', NULL, NULL, NULL, NULL, 5, 1, 1, 101),
(12, 'Face detan', '30', '25', NULL, 'face_detan.jpg', NULL, NULL, NULL, NULL, 5, 1, 1, 102),
(13, 'Beard Trimming', '70', '50', NULL, 'bread_trimming.jpg', NULL, NULL, NULL, NULL, 3, 1, 1, 103),
(14, 'Beard Shave', '90', '60', NULL, 'beard_shave.jpg', NULL, NULL, NULL, NULL, 5, 1, 1, 102),
(16, 'Hair Color', '250', '199', NULL, 'Hair_colour.jpg', '100% Genuine hair products', 'Ammonia free products', 'Best finish', '30 mins', 8, 0, 1, 105),
(17, 'Hair Cut', '150', '99', NULL, 'Hair_cut.jpg', '100% Genuine hair products', 'Ammonia free products', 'Best finish', '20 mins', 4, 0, 1, 105);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `exp_date` varchar(250) DEFAULT NULL,
  `reset_link_token` varchar(255) DEFAULT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `exp_date`, `reset_link_token`, `phone`) VALUES
(2, 'ajith', 'ak5295683@gmail.com', '700c8b805a3e2a265b01c77614cd8b21', '', '', '8778232465'),
(3, 'Kowsi', 'kowsalyakowsi424@gmail.com', '0098d1a8ed98f032c0c747b2e5fbae59', '', '', '638294226'),
(4, 'PRABHUKUMAR ', 'nelsonprabhu07088@gmail.com', '', '2023-02-07 03:23:32', '5822a71541135865cc7b9e78341eb8bd83', '+917418407250'),
(5, 'Sharbudin', 'sharbudin1234@gmail.com', '75bcf3aab98226e7364e5e3edf96f17e', '', '', '849165491313'),
(7, 'Vijay M', 'mvijaykumarpbt@gamil.com', '693cfed9dd8adf7c63afbf53cf3a8043', NULL, NULL, '7708500704');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `name` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

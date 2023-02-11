-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2023 at 07:48 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
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
  `ecat_id` int DEFAULT NULL
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

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `s_id` int NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `s_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `s_link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `s_desc` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `s_is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`s_id`, `s_name`, `s_image`, `s_link`, `s_desc`, `s_is_active`) VALUES
(11, 'Haircut for Men & Kid\'s', 'pexels-kevin-bidwell-9491365.jpg', 'haircut for men & kid\'s Card-Section.php', 'Get the perfect look with our expert haircuts for men and kids. Trust us for a fresh, clean cut every time.', 1),
(12, 'Hair color', 'pexels-john-diez-7389074.jpg', 'Hair color Card-Section.html', 'Experience the convenience of at-home hair coloring with our selection of premium hair color products.', 1),
(13, 'Tatoo\'s', 'pexels-fulvio-pessi-4655687.jpg', 'Tatoo Card-Section.html', 'Express your individuality with our range <br>of top-quality tattoo products,<br>our tattoo products are <br>the perfect choice for you.', 0),
(14, 'Shave/beard', 'pexels-cottonbro-studio-3998419 (1).jpg', 'Shave_Beard_Card_Section.html', 'Get a smooth and clean shave from the comfort of your own home with our selection of top-quality shaving products.', 1),
(15, 'Bridal makeup', 'pexels-cottonbro-studio-3998419 (1).jpg', 'Bridal_Makeup_Card_Section.html', 'Look stunning on your special day with our bridal makeup services.', 1),
(16, 'Ear & Body <br>piercing', 'pexels-maiza-campos-11390512.jpg', 'Ear & Body Piercing.html', 'Add a touch of elegance to your look with our range of ear piercings.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
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
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`s_id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 03:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cab`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about_title` mediumtext NOT NULL,
  `image` text NOT NULL,
  `about_description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_title`, `image`, `about_description`, `status`, `last_update`) VALUES
(1, '<h1>About the car</h1>\r\n', '1727923711_1724352105flower.png', '<p>dkfopxvl;xafgkterpgkc;v;xl</p>\r\n\r\n<p>gfbcvbgfjgyn v vht</p>\r\n\r\n<p>dfdstretfdvcxytrydf</p>\r\n\r\n<p>wdscxdgrgfdgcvgtrgcfbcvghfdghcvbcvhyr</p>\r\n', 1, '2024-10-03 02:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` mediumtext NOT NULL,
  `image` text NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `title`, `image`, `description`, `status`, `last_update`) VALUES
(1, '2024-12-04', '<p>gdroicvxopzjr0j</p>\r\n', '1728121907_wp6213229.jpg', '<p>mvomdokvsdmoigerjog</p>\r\n\r\n<p>f]e]kfosdkvoietjoivcmc</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2024-10-05 09:51:47'),
(2, '2024-09-18', '<p>fhe8hfsduije9</p>\r\n', '1728121928_1724352105flower.png', '<p>nru84oisj54jroidfkv,sdx</p>\r\n\r\n<p>trkgiofdjg98t6uhitfkv[dfx</p>\r\n\r\n<p>glftopvgjoifjrtoigjpdx</p>\r\n', 1, '2024-10-05 09:52:08'),
(3, '2024-06-11', '<p>oirjsdcj9dtujer9d</p>\r\n', '1728121955_bg2.jpeg', '<p>ufjcsidjferigjfdiovj</p>\r\n\r\n<p>gjfdoivjcmtkjtg</p>\r\n\r\n<p>vdgro9vjxoijeqwoiotjeroix</p>\r\n', 1, '2024-10-05 09:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `catdescription` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `catdescription`, `image`, `status`, `last_update`) VALUES
(38, 'Economic', 'Economic cars', '1724306371_download (3).jpeg', 1, '2024-10-05 09:41:01'),
(39, 'Standard', 'Standard cars', '1724306450_download (4).jpeg', 1, '2024-10-05 09:41:01'),
(40, 'luxuary', 'luxuarys cars', '1724306553_download (5).jpeg', 1, '2024-10-05 09:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `status`, `last_update`) VALUES
(1, 'riddhi', 'riddhi4124@gmail.com', 9316242006, 'hello', 1, '2024-10-05 10:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_drop`
--

CREATE TABLE `pickup_drop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `car` text NOT NULL,
  `pickup_location` text NOT NULL,
  `drop_location` text NOT NULL,
  `pickup_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pickup_drop`
--

INSERT INTO `pickup_drop` (`id`, `name`, `email`, `phone`, `car`, `pickup_location`, `drop_location`, `pickup_date`, `return_date`, `status`, `last_update`) VALUES
(1, 'riddhi', 'riddhi4124@gmail.com', 9316242006, 'swift', 'rajkot', 'surat', '2024-10-10', '2024-10-16', 1, '2024-10-05 13:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `catid` int(5) NOT NULL,
  `subcatid` int(5) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productdescription` text NOT NULL,
  `productprice` int(10) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catid`, `subcatid`, `productname`, `productdescription`, `productprice`, `image`) VALUES
(7, 38, 33, 'swift 12', 'swift is econimic', 1500, '1724337175_download (7).jpeg'),
(8, 40, 28, 'p1', 'pro car', 15000, '1724337268_images (2).jpeg'),
(9, 39, 26, 'skoda', 'skoda is standard', 2500, '1724337406_Skoda_Octavia_IV_liftback_(cropped).jpg'),
(11, 39, 26, 's', 's', 5000, '1724337487_download (4).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(100) NOT NULL,
  `catid` int(5) NOT NULL,
  `subcname` varchar(200) NOT NULL,
  `subcatdescription` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `catid`, `subcname`, `subcatdescription`, `image`, `status`, `last_update`) VALUES
(26, 39, 'Skoda Octavia', 'Skoda Octavia  is a standard car', '1724306920_Skoda_Octavia_IV_liftback_(cropped).jpg', 1, '2024-10-05 09:40:21'),
(27, 39, 'Honda City', 'Honda City is a standard car', '1724307018_images (1).jpeg', 1, '2024-10-05 09:40:21'),
(28, 40, 'Porsche', 'Porsche is a luxuaris car', '1724307108_images (2).jpeg', 1, '2024-10-05 09:40:21'),
(29, 40, 'Defender', 'Defender is a luxuaris car', '1724307166_images (3).jpeg', 1, '2024-10-05 09:40:21'),
(33, 38, 'swift', 'swift', '1724337134_download (7).jpeg', 1, '2024-10-05 09:40:21'),
(34, 39, 'sdssfs', 'efse,opfksdo0ockoer', '1728119878_1724352105flower.png', 1, '2024-10-05 09:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `password`) VALUES
(1, 'amannandha7@gmail.com', 'eb90ea6da68986f49f782ed346e68de6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_drop`
--
ALTER TABLE `pickup_drop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pickup_drop`
--
ALTER TABLE `pickup_drop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

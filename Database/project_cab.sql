-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 09:02 AM
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
(8, '<p><strong>About Our Cars</strong></p>\r\n', '1729057332_f4fac21e9fd6b576a81078a67e07ce7e-removebg-preview.png', '<p>&quot;About Our Cars&quot; provides information<br />\r\non the types and conditions of vehicles<br />\r\navailable for booking. This section<br />\r\ntypically includes details on various car<br />\r\ncategories, such as economy, luxury, or<br />\r\nSUVs, along with features like<br />\r\ncleanliness, amenities, and safety<br />\r\nstandards. It helps customers make<br />\r\ninformed decisions by highlighting the<br />\r\nquality and specifications of the<br />\r\nvehicles offered, ensuring that the<br />\r\nchoice aligns with their travel needs<br />\r\nand preferences.</p>\r\n', 1, '2024-10-10 13:08:16');

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
(7, '2024-01-09', '<p><strong>Vintage</strong></p>\r\n', '1728309694_Ambassador_1-2.jpg', '<p>A blog on vintage explores the charm and nostalgia associated with items from the past, including fashion, cars, decor, and collectibles. It often highlights the timeless appeal of vintage pieces, their historical significance, and how they influence modern trends. Readers can expect insights into restoration techniques, buying tips, and stories behind iconic vintage items, celebrating their unique craftsmanship and enduring legacy.</p>\r\n', 1, '2024-10-07 14:15:25'),
(8, '0000-00-00', '<p>Steering wheels</p>\r\n', '1728309754_b-2.jpg', '<p>Advanced Safety Features Airbags: Modern steering wheels are equipped with built-in airbags that deploy in the event of a collision, offering crucial protection for the driver in an accident. Driver Assistance Systems: Some steering wheels integrate controls for advanced driver assistance systems (ADAS) like adaptive cruise control, lane- keeping assist, and collision warning</p>\r\n', 1, '2024-10-07 14:02:34'),
(9, '2024-10-10', '<p>Buick Car</p>\r\n', '1728309806_b-3.jpg', '<p>Luxury and Comfort Premium Interiors: Buick vehicles are known for their upscale interiors, which often feature high-quality materials, such as leather upholstery and real wood accents. This attention to detail creates a refined and comfortable driving environment. Spaciousness: Many Buick models offer generous interior space, including ample legroom and cargo capacity. This makes them a great choice for families and those who value a roomy cabin.</p>\r\n', 1, '2024-10-07 14:03:26');

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
(38, 'Economic', 'Economic cars', '1728915144_png-transparent-hyundai-grand-i10-sportz-o-economy-car-manual-transmission-vip-rent-a-car-compact-car-car-automatic-transmission-thumbnail-removebg-preview.png', 1, '2024-10-14 14:12:24'),
(39, 'Standard', 'Standard Cars', '1728915127_download__4_-removebg-preview (1).png', 1, '2024-10-14 14:12:07'),
(40, 'luxuary', 'Luxarys cars', '1728915095_download__5_-removebg-preview.png', 1, '2024-10-14 14:11:35');

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
(1, 'Aman', 'amannandha7@gmail.com', 7202089638, 'hello mitro', 1, '2024-10-10 18:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `payment_method` int(50) NOT NULL,
  `name_on_card` int(100) NOT NULL,
  `card_number` int(20) NOT NULL,
  `exp_month` int(2) NOT NULL,
  `exp_year` varchar(4) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `paypal_email` varchar(100) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_method`, `name_on_card`, `card_number`, `exp_month`, `exp_year`, `cvv`, `paypal_email`, `account_number`, `bank_name`, `created_at`) VALUES
(1, 0, 0, 0, 0, '', '', '', '12365896', 'bank of india', '2024-10-11 06:47:33'),
(2, 0, 0, 0, 0, '', '', '', '12345698', 'bank of india', '2024-10-11 06:48:21'),
(3, 0, 0, 0, 0, '', '', '', '12365896', 'bank of india', '2024-10-12 10:58:50'),
(4, 0, 0, 0, 0, '', '', 'hello2@gmail.com', '', '', '2024-10-12 11:10:27'),
(5, 0, 0, 0, 0, '', '', 'hello2@gmail.com', '', '', '2024-10-12 12:18:08'),
(6, 0, 0, 0, 0, '', '', '', '1234569888', 'bank of india', '2024-10-16 04:08:15'),
(7, 0, 0, 0, 0, '', '', '', '1234569888', 'bank of india', '2024-10-16 05:28:43');

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
(22, 'Aman Nandha', 'amannandha7@gmail.com', 7202089638, 'Alto ', 'madhapar', 'Goa', '2024-10-19', '2024-10-31', 1, '2024-10-16 05:28:26');

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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`) VALUES
(1, 'aman', 'eb90ea6da68986f49f782ed346e68de6', 'amannandha7@gmail.com'),
(2, 'aman', 'eb90ea6da68986f49f782ed346e68de6', 'amannandha7@gmail.com'),
(3, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'dhruvit2004@gmail.com'),
(4, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'dhruvit2004@gmail.com'),
(5, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'dhruvit2004@gmail.com'),
(6, 'bhavantu', '8f3c1e4e4dbba5d8c4f20de5ffb8538d', 'bhavantu@gmail.com'),
(7, 'parth', 'c89d94adf54d729d6a3994cd606ca32a', 'parth@gmail.com'),
(8, 'parth', 'c89d94adf54d729d6a3994cd606ca32a', 'parth@gmail.com'),
(9, 'gajerayash60@gmail.com', '04788c4f5295bc48719eb9d8d3dec40d', 'dhruvit2004@gmail.com');

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
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `catid`, `subcname`, `subcatdescription`, `image`, `status`, `last_update`, `price`) VALUES
(26, 39, 'Skoda Octavia', 'Skoda Octavia  is a standard car', '1728307931_images__7_-removebg-preview.png', 1, '2024-10-16 04:59:33', 119),
(27, 39, 'Honda City', 'Honda City is a standard car', '1728307988_images__8_-removebg-preview.png', 1, '2024-10-16 03:48:55', 125),
(28, 40, 'BMW', 'BMW is a luxuaris car', '1728308735_images__13_-removebg-preview (1).png', 1, '2024-10-16 04:59:08', 220),
(29, 40, 'Mercedes', 'Mercedes is a luxuaris car', '1728308833_images__14_-removebg-preview.png', 1, '2024-10-16 04:59:21', 299),
(33, 38, 'swift', 'swift is Economic Car', '1728307825_images__6_-removebg-preview.png', 1, '2024-10-16 04:58:54', 120),
(35, 38, 'i10', 'i10 is Economic car', '1728201855_png-transparent-hyundai-grand-i10-sportz-o-economy-car-manual-transmission-vip-rent-a-car-compact-car-car-automatic-transmission-thumbnail-removebg-preview.png', 1, '2024-10-16 03:46:37', 60),
(36, 38, 'Alto ', 'Alto is a Economic car', '1728306854_png-clipart-suzuki-alto-maruti-suzuki-car-suzuki-compact-car-car-removebg-preview.png', 1, '2024-10-16 03:47:03', 40),
(37, 38, 'WagonR', 'WagonR is Economic cars', '1728307026_images__4_-removebg-preview.png', 1, '2024-10-16 03:47:28', 70),
(38, 38, 'Defender', 'Defender is Economic cars', '1728307675_images__5_-removebg-preview (1).png', 1, '2024-10-16 03:47:50', 110),
(39, 38, 'Hyundai i20', 'i20 is Economic cars', '1728307728_download__8_-removebg-preview.png', 1, '2024-10-16 03:48:08', 90),
(40, 39, 'Innova Crysta', 'Innova Crysta is standard Car', '1728308271_images__9_-removebg-preview.png', 1, '2024-10-16 04:01:03', 190),
(41, 39, 'Tata Safari', 'tata safarri is standard car', '1728308330_images__10_-removebg-preview.png', 1, '2024-10-16 04:03:44', 195),
(42, 39, 'Mahindra Xuv700', 'Mahindra Xuv700 is standard car', '1728308421_download__9_-removebg-preview (1).png', 1, '2024-10-16 04:02:34', 275),
(43, 39, 'Mg Hactor', 'Mg  Hactor is standard car', '1728308512_images__11_-removebg-preview.png', 1, '2024-10-16 04:03:14', 280),
(44, 40, 'Audi A6', 'Audi is luxurious car', '1728308641_images__12_-removebg-preview.png', 1, '2024-10-16 03:57:38', 265),
(45, 40, 'Toyota Camry', 'Toyota Camry is luxurious car', '1728308994_images__15_-removebg-preview.png', 1, '2024-10-16 03:56:13', 350),
(46, 40, 'Skoda Slavia', 'Skoda Slavia is luxurious', '1728309089_images__16_-removebg-preview.png', 1, '2024-10-16 03:58:29', 310),
(47, 40, 'Jaguar F Type', 'Jaguar F Type is luxurious car', '1728309190_images__17_-removebg-preview.png', 1, '2024-10-16 03:59:52', 420);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- Indexes for table `register`
--
ALTER TABLE `register`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pickup_drop`
--
ALTER TABLE `pickup_drop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

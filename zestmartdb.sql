-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 01:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zestmartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Gucci'),
(2, 'Calvin'),
(3, 'Adidas'),
(4, 'Nike'),
(5, 'Titan'),
(6, 'Curren'),
(7, 'Rolex'),
(8, 'Naviforce');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Shoe'),
(2, 'Jeans'),
(3, 'T-shirt'),
(4, 'Watch');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 1, 293082342, 9, 1, 'pending'),
(2, 1, 1379460091, 7, 1, 'pending'),
(3, 1, 245960719, 8, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Sports shoes', 'perfect for runners', 'Shoe,sneakers,footware,boots', 1, 4, '1.jpg', '2.jpg', '3.jpg', '3000', '2025-03-19 00:18:17', 'true'),
(5, 'Boys summer cloth', 'Best fabrics with soft and high quality.', 'tshirt,cloth,boys shirt,summer,cloths', 3, 1, '1 - Copy.jpg', '16 - Copy.jpg', '24 - Copy.jpg', '3000', '2025-03-19 00:57:49', 'true'),
(6, 'Titan Leather Watch', 'Premium watches for men.', 'titan,watch,mens watch', 4, 5, 'w1.jpg', 'w2.jpg', 'w3.jpg', '20000', '2025-03-19 00:59:31', 'true'),
(7, 'Curren Leather Watch', 'Premium watches for men.', 'curren,watch,mens watch', 4, 6, 'w2.jpg', 'w1.jpg', 'w3.jpg', '12500', '2025-03-19 01:02:23', 'true'),
(8, 'Curren Metal Belt Watch', 'Premium watches for men.', 'curren,watch,mens watch', 4, 6, 'w3.jpg', 'w2.jpg', 'w1.jpg', '15000', '2025-03-19 01:03:30', 'true'),
(9, 'Naviforce Leather Black-Gold', 'Premium watches for men', 'naviforce,watch,mens watch', 4, 8, 'w4.jpg', 'w3.jpg', 'w2.jpg', '17500', '2025-03-19 01:05:06', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 1, 17500, 293082342, 1, '2025-04-15 08:13:07', 'pending'),
(2, 1, 12500, 1379460091, 1, '2025-04-15 08:19:24', 'pending'),
(3, 1, 15000, 245960719, 1, '2025-04-15 08:24:49', 'pending'),
(4, 1, 0, 771020034, 0, '2025-04-15 08:36:31', 'pending'),
(5, 1, 0, 1108456960, 0, '2025-04-15 09:52:12', 'pending'),
(6, 1, 0, 1965169713, 0, '2025-04-15 09:56:17', 'pending'),
(7, 1, 0, 1412000988, 0, '2025-04-15 09:58:45', 'pending'),
(8, 1, 0, 1124580571, 0, '2025-04-15 10:02:48', 'pending'),
(9, 1, 0, 1154391417, 0, '2025-04-15 10:29:26', 'pending'),
(10, 1, 0, 39765270, 0, '2025-04-15 11:07:01', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'mosta', ' mosta@g.com', '$2y$10$JW9.mTGxakYl4L7H58B1UeEEdWmH79zDd4uqVlwWKLy/ArLgi7PzG', ' 2.jpg', '::1', ' faka', '1232132123'),
(2, 'rfd', ' dfd@sd', '$2y$10$Pv/bjCObizsyC.HFoFq0/uVn2c7HxDSqOwgRYCorfpdxzaXVW08Ce', ' 3.jpg', '::1', ' zsgzs', '3422224'),
(3, 'mahin', ' mah@gm.com', '$2y$10$oo9o/QSTiUtAe6gDSI4IueCrOwxE/y3Fc5JPvVcA9kK6oDj7oaPn.', ' 2.webp', '::1', ' sdfs', '32432432'),
(4, 'sal', 'sas@dsd', '$2y$10$iYSEjagWuxMXbS.D9OOm9ewewJiN9/nx4.DgzjeDWc5xFuzRXd7YC', 'sal.jpg', '::1', ' sad', '234242');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

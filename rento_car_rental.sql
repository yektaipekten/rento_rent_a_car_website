-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 12:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rento_car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'ali', 'yekta', 'aliyekta@mail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(30) NOT NULL,
  `cat_id` bigint(30) NOT NULL,
  `car_name` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `car_image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `car_price` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `car_tag` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `cat_id`, `car_name`, `car_image`, `car_price`, `car_tag`, `created_at`) VALUES
(1, 1, 'Vauxhall Corsa', 'images/c_corsa.jpg', '25', 'Common', '2023-08-16 21:02:14'),
(2, 1, 'Fiat 500', 'images/c_fiat500.png', '25', 'Common', '2023-08-16 21:02:14'),
(3, 1, 'Ford Fiesta', 'images/c_fiesta.jpeg', '30', 'Rare', '2023-08-16 21:02:14'),
(4, 1, 'Ford Focus', 'images/c_focus.jpg', '45', 'Rare', '2023-08-16 21:02:14'),
(5, 1, 'Volkwagen Golf', 'images/c_golf.jpg', '40', 'Fair', '2023-08-16 21:02:14'),
(6, 1, 'Renault Megane', 'images/c_megane.jpg', '40', 'Fair', '2023-08-16 21:02:14'),
(7, 2, 'BMW 3.20', 'images/p_320.jpg', '50', 'Common', '2023-08-16 21:02:14'),
(8, 2, 'Audi A5', 'images/p_A5.jpg', '55', 'Common', '2023-08-16 21:02:14'),
(9, 2, 'Mercedes C200', 'images/p_C200d.jpg', '60', 'Rare', '2023-08-16 21:02:14'),
(10, 2, 'Skoda Karoq', 'images/p_karoq.jpg', '55', 'Rare', '2023-08-16 21:02:14'),
(11, 2, 'Volkwagen Passat', 'images/p_passat.jpg', '50', 'Fair', '2023-08-16 21:02:14'),
(12, 2, 'Audi Q5', 'images/p_Q5.jpg', '65', 'Fair', '2023-08-16 21:02:14'),
(13, 3, 'Ferrari 458', 'images/l_458.jpg', '140', 'Common', '2023-08-16 21:02:14'),
(14, 3, 'Audi A8L', 'images/l_A8.jpg', '130', 'Common', '2023-08-16 21:02:14'),
(15, 3, 'Lamborghini Aventador ', 'images/l_Aventador.jpg', '150', 'Rare', '2023-08-16 21:02:14'),
(16, 3, 'Audi R8', 'images/l_R8.jpg', '120', 'Rare', '2023-08-16 21:02:14'),
(17, 3, 'Mercedes S500', 'images/l_s500.jpeg', '110', 'Fair', '2023-08-16 21:02:14'),
(18, 3, 'BMW series7', 'images/l_series7.jpg', '110', 'Fair', '2023-08-16 21:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `cars_details`
--

CREATE TABLE `cars_details` (
  `id` int(30) NOT NULL,
  `car_id` bigint(30) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars_details`
--

INSERT INTO `cars_details` (`id`, `car_id`, `image`, `created_at`) VALUES
(1, 1, 'c_corsa.jpg', '2023-08-16 21:10:28'),
(2, 2, 'c_fiat500.png', '2023-08-16 21:10:28'),
(3, 3, 'c_fiesta.jpeg', '2023-08-16 21:10:28'),
(4, 4, 'c_focus.jpg', '2023-08-16 21:10:28'),
(5, 5, 'c_golf.jpg', '2023-08-16 21:10:28'),
(6, 6, 'c_megane.jpg', '2023-08-16 21:10:28'),
(7, 7, 'p_320.jpg', '2023-08-16 21:10:28'),
(8, 8, 'p_A5.jpg', '2023-08-16 21:10:28'),
(9, 9, 'p_C200d.jpg', '2023-08-16 21:10:28'),
(10, 10, 'p_karoq.jpg', '2023-08-16 21:10:28'),
(11, 11, 'p_passat.jpg', '2023-08-16 21:10:28'),
(12, 12, 'p_Q5.jpg', '2023-08-16 21:10:28'),
(13, 13, 'l_458.jpg', '2023-08-16 21:10:28'),
(14, 14, 'l_A8.jpg', '2023-08-16 21:10:28'),
(15, 15, 'l_Aventador.jpg', '2023-08-16 21:10:28'),
(16, 16, 'l_R8.jpg', '2023-08-16 21:10:28'),
(17, 17, 'l_s500.jpeg', '2023-08-16 21:10:28'),
(18, 18, 'l_series7.jpg', '2023-08-16 21:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(30) NOT NULL,
  `cat_name` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`) VALUES
(1, 'comfort', '2023-08-16 21:03:36'),
(2, 'prestige', '2023-08-16 21:03:36'),
(3, 'luxury', '2023-08-16 21:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `car_id` bigint(30) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `address`, `phone`, `email`) VALUES
(2, 'ronaldo', 'ronaldo', 'ronaldo', 747584875, 'ronaldo@gmail.com'),
(21, 'messi1', 'messi1', '', 2147483647, 'messi@gmail.com'),
(23, '', '123456', '', 2147483647, 'aliyekta@mail.com'),
(24, 'ali', '123456', '', 2147483647, 'aliyekta@mail.com'),
(25, 'yek', '123456', '', 2147483647, 'yek@gmail.com'),
(26, 'hal', '123456', '', 2147483647, 'hal@mail.com'),
(27, 'gel', '123456', '', 747589632, 'gel@mail.com'),
(28, 'well', '123456', '', 2147483647, 'well@mail.com'),
(29, 'yekta', '123456', '', 2147483647, 'yekta@mail.com'),
(30, '123', '123456', '', 123, '123@mail.com'),
(34, 'ali', '123456', '', 1234567, 'yektaipekten34@gmail.com'),
(36, 'deniz', 'denizdeniz', '', 1234567, 'deniz@mail.com'),
(37, 'sevim', 'sevimsevim', '', 987654321, 'sevim@mail.com'),
(38, 'goksu', 'goksuipek', '', 123456789, 'goksu@mail.com'),
(39, 'ipek', 'ipekten', '', 123456789, 'ipek@mail.com'),
(40, 'tuba', 'tubatuba', '', 123456, 'tuba@mail.com'),
(41, 'murat', 'muratmurat', '', 123456789, 'murat@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `cars_details`
--
ALTER TABLE `cars_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cars_details`
--
ALTER TABLE `cars_details`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `cars_details`
--
ALTER TABLE `cars_details`
  ADD CONSTRAINT `cars_details_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
